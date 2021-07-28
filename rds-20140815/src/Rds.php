<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Rds\V20140815\Models\AddTagsToResourceRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\AddTagsToResourceResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\AllocateInstancePublicConnectionRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\AllocateInstancePublicConnectionResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\AllocateReadWriteSplittingConnectionRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\AllocateReadWriteSplittingConnectionResponse;
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
use AlibabaCloud\SDK\Rds\V20140815\Models\ClearDedicatedHostRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ClearDedicatedHostResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CloneDBInstanceRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CloneDBInstanceResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CloneParameterGroupRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CloneParameterGroupResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CopyDatabaseBetweenInstancesRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CopyDatabaseBetweenInstancesResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CopyDatabaseRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CopyDatabaseResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateAccountRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateAccountResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateBackupRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateBackupResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateDatabaseRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateDatabaseResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateDBInstanceRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateDBInstanceResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateDBProxyEndpointAddressRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateDBProxyEndpointAddressResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateDdrInstanceRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateDdrInstanceResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateDedicatedHostAccountRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateDedicatedHostAccountResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateDedicatedHostGroupRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateDedicatedHostGroupResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateDedicatedHostRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateDedicatedHostResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateDedicatedHostUserRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateDedicatedHostUserResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateDiagnosticReportRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateDiagnosticReportResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateGdnInstanceRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateGdnInstanceResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateMigrateTaskForSQLServerRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateMigrateTaskForSQLServerResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateMigrateTaskRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateMigrateTaskResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateOnlineDatabaseTaskRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateOnlineDatabaseTaskResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateParameterGroupRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateParameterGroupResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateReadOnlyDBInstanceRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateReadOnlyDBInstanceResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateTempDBInstanceRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateTempDBInstanceResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DeleteAccountRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DeleteAccountResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DeleteBackupFileRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DeleteBackupFileResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DeleteBackupRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DeleteBackupResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DeleteDatabaseRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DeleteDatabaseResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DeleteDBInstanceRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DeleteDBInstanceResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DeleteDBProxyEndpointAddressRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DeleteDBProxyEndpointAddressResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DeleteDedicatedHostAccountRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DeleteDedicatedHostAccountResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DeleteDedicatedHostGroupRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DeleteDedicatedHostGroupResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DeleteParameterGroupRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DeleteParameterGroupResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DeleteUserBackupFileRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DeleteUserBackupFileResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescibeImportsFromDatabaseRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescibeImportsFromDatabaseResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAccountsRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAccountsResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeActionEventPolicyRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeActionEventPolicyResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableClassesRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableClassesResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableCrossRegionRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableCrossRegionResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableDedicatedHostClassesRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableDedicatedHostClassesResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableDedicatedHostZonesRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableDedicatedHostZonesResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableRecoveryTimeRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableRecoveryTimeResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableResourceRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableResourceResponse;
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
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceDetailRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceDetailResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceEncryptionKeyRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceEncryptionKeyResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceHAConfigRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceHAConfigResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceIPArrayListRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceIPArrayListResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceIpHostnameRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceIpHostnameResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceMonitorRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceMonitorResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceNetInfoRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceNetInfoResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancePerformanceRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancePerformanceResponse;
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
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceStatusRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceStatusResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceTDERequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceTDEResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBProxyEndpointRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBProxyEndpointResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBProxyPerformanceRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBProxyPerformanceResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBProxyRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBProxyResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDedicatedHostAttributeRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDedicatedHostAttributeResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDedicatedHostGroupsRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDedicatedHostGroupsResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDedicatedHostImageCategoriesRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDedicatedHostImageCategoriesResponse;
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
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeHADiagnoseConfigRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeHADiagnoseConfigResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeHASwitchConfigRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeHASwitchConfigResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeInstanceAutoRenewalAttributeRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeInstanceAutoRenewalAttributeResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeInstanceCrossBackupPolicyRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeInstanceCrossBackupPolicyResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeInstanceKeywordsRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeInstanceKeywordsResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeLocalAvailableRecoveryTimeRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeLocalAvailableRecoveryTimeResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeLogBackupFilesRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeLogBackupFilesResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeMetaListRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeMetaListResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeMigrateTaskByIdRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeMigrateTaskByIdResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeMigrateTasksForSQLServerRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeMigrateTasksForSQLServerResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeMigrateTasksRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeMigrateTasksResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeModifyParameterLogRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeModifyParameterLogResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeOssDownloadsForSQLServerRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeOssDownloadsForSQLServerResponse;
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
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribePriceRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribePriceResponse;
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
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSecurityGroupConfigurationRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSecurityGroupConfigurationResponse;
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
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSQLLogReportsRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSQLLogReportsResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeTagsRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeTagsResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeTasksRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeTasksResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DestroyDBInstanceRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DestroyDBInstanceResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\DropDedicatedHostUserRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\DropDedicatedHostUserResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\EvaluateDedicatedHostInstanceResourceRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\EvaluateDedicatedHostInstanceResourceResponse;
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
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceConnectionModeRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceConnectionModeResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceConnectionStringRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceConnectionStringResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceDescriptionRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceDescriptionResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceHAConfigRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceHAConfigResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceMaintainTimeRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceMaintainTimeResponse;
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
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDedicatedHostAccountRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDedicatedHostAccountResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDedicatedHostAttributeRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDedicatedHostAttributeResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDedicatedHostGroupAttributeRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDedicatedHostGroupAttributeResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDedicatedHostUserRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDedicatedHostUserResponse;
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
use AlibabaCloud\SDK\Rds\V20140815\Models\PurgeDBInstanceLogRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\PurgeDBInstanceLogResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\RebuildDBInstanceRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\RebuildDBInstanceResponse;
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
use AlibabaCloud\SDK\Rds\V20140815\Models\ReplaceDedicatedHostRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ReplaceDedicatedHostResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ResetAccountPasswordRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ResetAccountPasswordResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\ResetAccountRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ResetAccountResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\RestartDBInstanceRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\RestartDBInstanceResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\RestartDedicatedHostRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\RestartDedicatedHostResponse;
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
use AlibabaCloud\SDK\Rds\V20140815\Models\UpdateUserBackupFileRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\UpdateUserBackupFileResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\UpgradeDBInstanceEngineVersionRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\UpgradeDBInstanceEngineVersionResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\UpgradeDBInstanceKernelVersionRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\UpgradeDBInstanceKernelVersionResponse;
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
            'cn-hangzhou-finance'         => 'rds.aliyuncs.com',
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
     * @param AddTagsToResourceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return AddTagsToResourceResponse
     */
    public function addTagsToResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['ClientToken']          = $request->clientToken;
        $query['proxyId']              = $request->proxyId;
        $query['RegionId']             = $request->regionId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['Tags']                 = $request->tags;
        $query['OwnerAccount']         = $request->ownerAccount;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'AddTagsToResource',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AddTagsToResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddTagsToResourceRequest $request
     *
     * @return AddTagsToResourceResponse
     */
    public function addTagsToResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addTagsToResourceWithOptions($request, $runtime);
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
        $query                           = [];
        $query['OwnerId']                = $request->ownerId;
        $query['ResourceOwnerAccount']   = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']        = $request->resourceOwnerId;
        $query['DBInstanceId']           = $request->DBInstanceId;
        $query['ConnectionStringPrefix'] = $request->connectionStringPrefix;
        $query['Port']                   = $request->port;
        $query['OwnerAccount']           = $request->ownerAccount;
        $req                             = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'AllocateInstancePublicConnection',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AllocateInstancePublicConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param AllocateReadWriteSplittingConnectionRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return AllocateReadWriteSplittingConnectionResponse
     */
    public function allocateReadWriteSplittingConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                           = [];
        $query['OwnerId']                = $request->ownerId;
        $query['ResourceOwnerAccount']   = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']        = $request->resourceOwnerId;
        $query['OwnerAccount']           = $request->ownerAccount;
        $query['DBInstanceId']           = $request->DBInstanceId;
        $query['ConnectionStringPrefix'] = $request->connectionStringPrefix;
        $query['Port']                   = $request->port;
        $query['MaxDelayTime']           = $request->maxDelayTime;
        $query['NetType']                = $request->netType;
        $query['DistributionType']       = $request->distributionType;
        $query['Weight']                 = $request->weight;
        $req                             = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'AllocateReadWriteSplittingConnection',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AllocateReadWriteSplittingConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AllocateReadWriteSplittingConnectionRequest $request
     *
     * @return AllocateReadWriteSplittingConnectionResponse
     */
    public function allocateReadWriteSplittingConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->allocateReadWriteSplittingConnectionWithOptions($request, $runtime);
    }

    /**
     * @param CalculateDBInstanceWeightRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CalculateDBInstanceWeightResponse
     */
    public function calculateDBInstanceWeightWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['DBInstanceId']    = $request->DBInstanceId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CalculateDBInstanceWeight',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CalculateDBInstanceWeightResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CalculateDBInstanceWeightRequest $request
     *
     * @return CalculateDBInstanceWeightResponse
     */
    public function calculateDBInstanceWeight($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->calculateDBInstanceWeightWithOptions($request, $runtime);
    }

    /**
     * @param CancelImportRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CancelImportResponse
     */
    public function cancelImportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['ImportId']             = $request->importId;
        $query['OwnerAccount']         = $request->ownerAccount;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CancelImport',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CancelImportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CancelImportRequest $request
     *
     * @return CancelImportResponse
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
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['ClientToken']          = $request->clientToken;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['AccountName']          = $request->accountName;
        $query['OwnerAccount']         = $request->ownerAccount;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CheckAccountNameAvailable',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query                         = [];
        $query['SecurityToken']        = $request->securityToken;
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['OwnerAccount']         = $request->ownerAccount;
        $query['RegionId']             = $request->regionId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['TargetRegionId']       = $request->targetRegionId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CheckCloudResourceAuthorized',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
     * @param CheckCreateDdrDBInstanceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CheckCreateDdrDBInstanceResponse
     */
    public function checkCreateDdrDBInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['RegionId']             = $request->regionId;
        $query['Engine']               = $request->engine;
        $query['EngineVersion']        = $request->engineVersion;
        $query['DBInstanceClass']      = $request->DBInstanceClass;
        $query['DBInstanceStorage']    = $request->DBInstanceStorage;
        $query['RestoreType']          = $request->restoreType;
        $query['BackupSetId']          = $request->backupSetId;
        $query['RestoreTime']          = $request->restoreTime;
        $query['SourceRegion']         = $request->sourceRegion;
        $query['SourceDBInstanceName'] = $request->sourceDBInstanceName;
        $query['BinlogName']           = $request->binlogName;
        $query['BinlogPosition']       = $request->binlogPosition;
        $query['BinlogRole']           = $request->binlogRole;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CheckCreateDdrDBInstance',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CheckCreateDdrDBInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckCreateDdrDBInstanceRequest $request
     *
     * @return CheckCreateDdrDBInstanceResponse
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
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['ClientToken']          = $request->clientToken;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['DBName']               = $request->DBName;
        $query['OwnerAccount']         = $request->ownerAccount;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CheckDBNameAvailable',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CheckInstanceExist',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
     * @param ClearDedicatedHostRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ClearDedicatedHostResponse
     */
    public function clearDedicatedHostWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['RegionId']             = $request->regionId;
        $query['DedicatedHostId']      = $request->dedicatedHostId;
        $query['FailoverMode']         = $request->failoverMode;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ClearDedicatedHost',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ClearDedicatedHostResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ClearDedicatedHostRequest $request
     *
     * @return ClearDedicatedHostResponse
     */
    public function clearDedicatedHost($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->clearDedicatedHostWithOptions($request, $runtime);
    }

    /**
     * @param CloneDBInstanceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CloneDBInstanceResponse
     */
    public function cloneDBInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                          = [];
        $query['ResourceOwnerId']       = $request->resourceOwnerId;
        $query['RegionId']              = $request->regionId;
        $query['ZoneId']                = $request->zoneId;
        $query['DBInstanceClass']       = $request->DBInstanceClass;
        $query['DBInstanceStorage']     = $request->DBInstanceStorage;
        $query['DbNames']               = $request->dbNames;
        $query['PayType']               = $request->payType;
        $query['InstanceNetworkType']   = $request->instanceNetworkType;
        $query['DBInstanceId']          = $request->DBInstanceId;
        $query['BackupId']              = $request->backupId;
        $query['RestoreTime']           = $request->restoreTime;
        $query['VPCId']                 = $request->VPCId;
        $query['VSwitchId']             = $request->vSwitchId;
        $query['PrivateIpAddress']      = $request->privateIpAddress;
        $query['UsedTime']              = $request->usedTime;
        $query['Period']                = $request->period;
        $query['Category']              = $request->category;
        $query['DBInstanceStorageType'] = $request->DBInstanceStorageType;
        $query['RestoreTable']          = $request->restoreTable;
        $query['TableMeta']             = $request->tableMeta;
        $query['DedicatedHostGroupId']  = $request->dedicatedHostGroupId;
        $query['BackupType']            = $request->backupType;
        $req                            = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CloneDBInstance',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CloneDBInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CloneDBInstanceRequest $request
     *
     * @return CloneDBInstanceResponse
     */
    public function cloneDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloneDBInstanceWithOptions($request, $runtime);
    }

    /**
     * @param CloneParameterGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CloneParameterGroupResponse
     */
    public function cloneParameterGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['RegionId']             = $request->regionId;
        $query['TargetRegionId']       = $request->targetRegionId;
        $query['ParameterGroupId']     = $request->parameterGroupId;
        $query['ParameterGroupName']   = $request->parameterGroupName;
        $query['ParameterGroupDesc']   = $request->parameterGroupDesc;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CloneParameterGroup',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CloneParameterGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CloneParameterGroupRequest $request
     *
     * @return CloneParameterGroupResponse
     */
    public function cloneParameterGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloneParameterGroupWithOptions($request, $runtime);
    }

    /**
     * @param CopyDatabaseRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CopyDatabaseResponse
     */
    public function copyDatabaseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CopyDatabase',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CopyDatabaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CopyDatabaseRequest $request
     *
     * @return CopyDatabaseResponse
     */
    public function copyDatabase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->copyDatabaseWithOptions($request, $runtime);
    }

    /**
     * @param CopyDatabaseBetweenInstancesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return CopyDatabaseBetweenInstancesResponse
     */
    public function copyDatabaseBetweenInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                       = [];
        $query['ResourceOwnerId']    = $request->resourceOwnerId;
        $query['DBInstanceId']       = $request->DBInstanceId;
        $query['TargetDBInstanceId'] = $request->targetDBInstanceId;
        $query['DbNames']            = $request->dbNames;
        $query['BackupId']           = $request->backupId;
        $query['RestoreTime']        = $request->restoreTime;
        $query['SyncUserPrivilege']  = $request->syncUserPrivilege;
        $req                         = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CopyDatabaseBetweenInstances',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CopyDatabaseBetweenInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CopyDatabaseBetweenInstancesRequest $request
     *
     * @return CopyDatabaseBetweenInstancesResponse
     */
    public function copyDatabaseBetweenInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->copyDatabaseBetweenInstancesWithOptions($request, $runtime);
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
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['AccountName']          = $request->accountName;
        $query['AccountPassword']      = $request->accountPassword;
        $query['AccountDescription']   = $request->accountDescription;
        $query['AccountType']          = $request->accountType;
        $query['OwnerAccount']         = $request->ownerAccount;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateAccount',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateAccountResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                    = [];
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['DBInstanceId']    = $request->DBInstanceId;
        $query['DBName']          = $request->DBName;
        $query['BackupStrategy']  = $request->backupStrategy;
        $query['BackupMethod']    = $request->backupMethod;
        $query['BackupType']      = $request->backupType;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateBackup',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateBackupResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param CreateDatabaseRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateDatabaseResponse
     */
    public function createDatabaseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['DBName']               = $request->DBName;
        $query['CharacterSetName']     = $request->characterSetName;
        $query['DBDescription']        = $request->DBDescription;
        $query['OwnerAccount']         = $request->ownerAccount;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateDatabase',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateDatabaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDatabaseRequest $request
     *
     * @return CreateDatabaseResponse
     */
    public function createDatabase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDatabaseWithOptions($request, $runtime);
    }

    /**
     * @param CreateDBInstanceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateDBInstanceResponse
     */
    public function createDBInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                                   = [];
        $query['ResourceOwnerId']                = $request->resourceOwnerId;
        $query['RegionId']                       = $request->regionId;
        $query['Engine']                         = $request->engine;
        $query['EngineVersion']                  = $request->engineVersion;
        $query['DBInstanceClass']                = $request->DBInstanceClass;
        $query['DBInstanceStorage']              = $request->DBInstanceStorage;
        $query['SystemDBCharset']                = $request->systemDBCharset;
        $query['DBInstanceNetType']              = $request->DBInstanceNetType;
        $query['DBInstanceDescription']          = $request->DBInstanceDescription;
        $query['SecurityIPList']                 = $request->securityIPList;
        $query['ClientToken']                    = $request->clientToken;
        $query['PayType']                        = $request->payType;
        $query['ZoneId']                         = $request->zoneId;
        $query['ZoneIdSlave1']                   = $request->zoneIdSlave1;
        $query['ZoneIdSlave2']                   = $request->zoneIdSlave2;
        $query['InstanceNetworkType']            = $request->instanceNetworkType;
        $query['ConnectionMode']                 = $request->connectionMode;
        $query['VPCId']                          = $request->VPCId;
        $query['VSwitchId']                      = $request->vSwitchId;
        $query['PrivateIpAddress']               = $request->privateIpAddress;
        $query['UsedTime']                       = $request->usedTime;
        $query['Period']                         = $request->period;
        $query['ResourceGroupId']                = $request->resourceGroupId;
        $query['DBInstanceStorageType']          = $request->DBInstanceStorageType;
        $query['BusinessInfo']                   = $request->businessInfo;
        $query['EncryptionKey']                  = $request->encryptionKey;
        $query['RoleARN']                        = $request->roleARN;
        $query['AutoRenew']                      = $request->autoRenew;
        $query['Category']                       = $request->category;
        $query['DedicatedHostGroupId']           = $request->dedicatedHostGroupId;
        $query['TargetDedicatedHostIdForMaster'] = $request->targetDedicatedHostIdForMaster;
        $query['TargetDedicatedHostIdForSlave']  = $request->targetDedicatedHostIdForSlave;
        $query['TargetDedicatedHostIdForLog']    = $request->targetDedicatedHostIdForLog;
        $query['DBParamGroupId']                 = $request->DBParamGroupId;
        $query['DBTimeZone']                     = $request->DBTimeZone;
        $query['DBIsIgnoreCase']                 = $request->DBIsIgnoreCase;
        $query['TargetMinorVersion']             = $request->targetMinorVersion;
        $query['StorageAutoScale']               = $request->storageAutoScale;
        $query['StorageThreshold']               = $request->storageThreshold;
        $query['StorageUpperBound']              = $request->storageUpperBound;
        $query['DryRun']                         = $request->dryRun;
        $query['UserBackupId']                   = $request->userBackupId;
        $query['Tag']                            = $request->tag;
        $req                                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateDBInstance',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateDBInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateDBProxyEndpointAddressRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return CreateDBProxyEndpointAddressResponse
     */
    public function createDBProxyEndpointAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                                = [];
        $query['RegionId']                    = $request->regionId;
        $query['DBInstanceId']                = $request->DBInstanceId;
        $query['DBInstanceId']                = $request->DBInstanceId;
        $query['DBProxyEndpointId']           = $request->DBProxyEndpointId;
        $query['ConnectionStringPrefix']      = $request->connectionStringPrefix;
        $query['DBProxyNewConnectStringPort'] = $request->DBProxyNewConnectStringPort;
        $query['DBProxyConnectStringNetType'] = $request->DBProxyConnectStringNetType;
        $query['VPCId']                       = $request->VPCId;
        $query['VSwitchId']                   = $request->vSwitchId;
        $req                                  = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateDBProxyEndpointAddress',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateDBProxyEndpointAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDBProxyEndpointAddressRequest $request
     *
     * @return CreateDBProxyEndpointAddressResponse
     */
    public function createDBProxyEndpointAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDBProxyEndpointAddressWithOptions($request, $runtime);
    }

    /**
     * @param CreateDdrInstanceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateDdrInstanceResponse
     */
    public function createDdrInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                          = [];
        $query['OwnerId']               = $request->ownerId;
        $query['ResourceOwnerAccount']  = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']       = $request->resourceOwnerId;
        $query['RegionId']              = $request->regionId;
        $query['Engine']                = $request->engine;
        $query['EngineVersion']         = $request->engineVersion;
        $query['DBInstanceClass']       = $request->DBInstanceClass;
        $query['DBInstanceStorage']     = $request->DBInstanceStorage;
        $query['SystemDBCharset']       = $request->systemDBCharset;
        $query['DBInstanceNetType']     = $request->DBInstanceNetType;
        $query['DBInstanceDescription'] = $request->DBInstanceDescription;
        $query['SecurityIPList']        = $request->securityIPList;
        $query['ClientToken']           = $request->clientToken;
        $query['PayType']               = $request->payType;
        $query['ZoneId']                = $request->zoneId;
        $query['InstanceNetworkType']   = $request->instanceNetworkType;
        $query['ConnectionMode']        = $request->connectionMode;
        $query['VPCId']                 = $request->VPCId;
        $query['VSwitchId']             = $request->vSwitchId;
        $query['PrivateIpAddress']      = $request->privateIpAddress;
        $query['OwnerAccount']          = $request->ownerAccount;
        $query['UsedTime']              = $request->usedTime;
        $query['Period']                = $request->period;
        $query['ResourceGroupId']       = $request->resourceGroupId;
        $query['RestoreType']           = $request->restoreType;
        $query['BackupSetId']           = $request->backupSetId;
        $query['RestoreTime']           = $request->restoreTime;
        $query['SourceRegion']          = $request->sourceRegion;
        $query['SourceDBInstanceName']  = $request->sourceDBInstanceName;
        $query['DBInstanceStorageType'] = $request->DBInstanceStorageType;
        $query['BinlogName']            = $request->binlogName;
        $query['BinlogPosition']        = $request->binlogPosition;
        $query['BinlogRole']            = $request->binlogRole;
        $req                            = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateDdrInstance',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateDdrInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDdrInstanceRequest $request
     *
     * @return CreateDdrInstanceResponse
     */
    public function createDdrInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDdrInstanceWithOptions($request, $runtime);
    }

    /**
     * @param CreateDedicatedHostRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateDedicatedHostResponse
     */
    public function createDedicatedHostWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['RegionId']             = $request->regionId;
        $query['DedicatedHostGroupId'] = $request->dedicatedHostGroupId;
        $query['HostName']             = $request->hostName;
        $query['ZoneId']               = $request->zoneId;
        $query['VSwitchId']            = $request->vSwitchId;
        $query['HostClass']            = $request->hostClass;
        $query['PayType']              = $request->payType;
        $query['Period']               = $request->period;
        $query['UsedTime']             = $request->usedTime;
        $query['ClientToken']          = $request->clientToken;
        $query['AutoRenew']            = $request->autoRenew;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateDedicatedHost',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateDedicatedHostResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDedicatedHostRequest $request
     *
     * @return CreateDedicatedHostResponse
     */
    public function createDedicatedHost($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDedicatedHostWithOptions($request, $runtime);
    }

    /**
     * @param CreateDedicatedHostAccountRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateDedicatedHostAccountResponse
     */
    public function createDedicatedHostAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['DedicatedHostId']      = $request->dedicatedHostId;
        $query['AccountName']          = $request->accountName;
        $query['AccountPassword']      = $request->accountPassword;
        $query['RegionId']             = $request->regionId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateDedicatedHostAccount',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateDedicatedHostAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDedicatedHostAccountRequest $request
     *
     * @return CreateDedicatedHostAccountResponse
     */
    public function createDedicatedHostAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDedicatedHostAccountWithOptions($request, $runtime);
    }

    /**
     * @param CreateDedicatedHostGroupRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateDedicatedHostGroupResponse
     */
    public function createDedicatedHostGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['RegionId']             = $request->regionId;
        $query['Engine']               = $request->engine;
        $query['CpuAllocationRatio']   = $request->cpuAllocationRatio;
        $query['MemAllocationRatio']   = $request->memAllocationRatio;
        $query['DiskAllocationRatio']  = $request->diskAllocationRatio;
        $query['AllocationPolicy']     = $request->allocationPolicy;
        $query['VPCId']                = $request->VPCId;
        $query['HostReplacePolicy']    = $request->hostReplacePolicy;
        $query['ClientToken']          = $request->clientToken;
        $query['OpenPermission']       = $request->openPermission;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateDedicatedHostGroup',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateDedicatedHostGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDedicatedHostGroupRequest $request
     *
     * @return CreateDedicatedHostGroupResponse
     */
    public function createDedicatedHostGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDedicatedHostGroupWithOptions($request, $runtime);
    }

    /**
     * @param CreateDedicatedHostUserRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateDedicatedHostUserResponse
     */
    public function createDedicatedHostUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['DedicatedHostName']    = $request->dedicatedHostName;
        $query['UserName']             = $request->userName;
        $query['UserPassword']         = $request->userPassword;
        $query['RegionId']             = $request->regionId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateDedicatedHostUser',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateDedicatedHostUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDedicatedHostUserRequest $request
     *
     * @return CreateDedicatedHostUserResponse
     */
    public function createDedicatedHostUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDedicatedHostUserWithOptions($request, $runtime);
    }

    /**
     * @param CreateDiagnosticReportRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateDiagnosticReportResponse
     */
    public function createDiagnosticReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                 = [];
        $query['DBInstanceId'] = $request->DBInstanceId;
        $query['StartTime']    = $request->startTime;
        $query['EndTime']      = $request->endTime;
        $req                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateDiagnosticReport',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateDiagnosticReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDiagnosticReportRequest $request
     *
     * @return CreateDiagnosticReportResponse
     */
    public function createDiagnosticReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDiagnosticReportWithOptions($request, $runtime);
    }

    /**
     * @param CreateGdnInstanceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateGdnInstanceResponse
     */
    public function createGdnInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                          = [];
        $query['OwnerId']               = $request->ownerId;
        $query['ResourceOwnerAccount']  = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']       = $request->resourceOwnerId;
        $query['ClientToken']           = $request->clientToken;
        $query['PrimaryInstanceName']   = $request->primaryInstanceName;
        $query['PrimaryInstanceRegion'] = $request->primaryInstanceRegion;
        $query['Description']           = $request->description;
        $req                            = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateGdnInstance',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateGdnInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateGdnInstanceRequest $request
     *
     * @return CreateGdnInstanceResponse
     */
    public function createGdnInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGdnInstanceWithOptions($request, $runtime);
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
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['DBName']               = $request->DBName;
        $query['BackupMode']           = $request->backupMode;
        $query['IsOnlineDB']           = $request->isOnlineDB;
        $query['CheckDBMode']          = $request->checkDBMode;
        $query['OssObjectPositions']   = $request->ossObjectPositions;
        $query['OSSUrls']              = $request->OSSUrls;
        $query['MigrateTaskId']        = $request->migrateTaskId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateMigrateTask',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
     * @param CreateMigrateTaskForSQLServerRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return CreateMigrateTaskForSQLServerResponse
     */
    public function createMigrateTaskForSQLServerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['DBName']               = $request->DBName;
        $query['TaskType']             = $request->taskType;
        $query['IsOnlineDB']           = $request->isOnlineDB;
        $query['OSSUrls']              = $request->OSSUrls;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateMigrateTaskForSQLServer',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateMigrateTaskForSQLServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateMigrateTaskForSQLServerRequest $request
     *
     * @return CreateMigrateTaskForSQLServerResponse
     */
    public function createMigrateTaskForSQLServer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMigrateTaskForSQLServerWithOptions($request, $runtime);
    }

    /**
     * @param CreateOnlineDatabaseTaskRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateOnlineDatabaseTaskResponse
     */
    public function createOnlineDatabaseTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['ClientToken']          = $request->clientToken;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['DBName']               = $request->DBName;
        $query['MigrateTaskId']        = $request->migrateTaskId;
        $query['CheckDBMode']          = $request->checkDBMode;
        $query['OwnerAccount']         = $request->ownerAccount;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateOnlineDatabaseTask',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateOnlineDatabaseTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateOnlineDatabaseTaskRequest $request
     *
     * @return CreateOnlineDatabaseTaskResponse
     */
    public function createOnlineDatabaseTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOnlineDatabaseTaskWithOptions($request, $runtime);
    }

    /**
     * @param CreateParameterGroupRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateParameterGroupResponse
     */
    public function createParameterGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['RegionId']             = $request->regionId;
        $query['ParameterGroupName']   = $request->parameterGroupName;
        $query['Engine']               = $request->engine;
        $query['EngineVersion']        = $request->engineVersion;
        $query['Parameters']           = $request->parameters;
        $query['ParameterGroupDesc']   = $request->parameterGroupDesc;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateParameterGroup',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateParameterGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateReadOnlyDBInstanceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateReadOnlyDBInstanceResponse
     */
    public function createReadOnlyDBInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                                   = [];
        $query['OwnerId']                        = $request->ownerId;
        $query['ResourceOwnerAccount']           = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']                = $request->resourceOwnerId;
        $query['ClientToken']                    = $request->clientToken;
        $query['RegionId']                       = $request->regionId;
        $query['ZoneId']                         = $request->zoneId;
        $query['DBInstanceId']                   = $request->DBInstanceId;
        $query['DBInstanceClass']                = $request->DBInstanceClass;
        $query['DBInstanceStorage']              = $request->DBInstanceStorage;
        $query['EngineVersion']                  = $request->engineVersion;
        $query['PayType']                        = $request->payType;
        $query['DBInstanceDescription']          = $request->DBInstanceDescription;
        $query['InstanceNetworkType']            = $request->instanceNetworkType;
        $query['VPCId']                          = $request->VPCId;
        $query['VSwitchId']                      = $request->vSwitchId;
        $query['PrivateIpAddress']               = $request->privateIpAddress;
        $query['OwnerAccount']                   = $request->ownerAccount;
        $query['ResourceGroupId']                = $request->resourceGroupId;
        $query['Category']                       = $request->category;
        $query['DBInstanceStorageType']          = $request->DBInstanceStorageType;
        $query['DedicatedHostGroupId']           = $request->dedicatedHostGroupId;
        $query['TargetDedicatedHostIdForMaster'] = $request->targetDedicatedHostIdForMaster;
        $query['GdnInstanceName']                = $request->gdnInstanceName;
        $query['TddlBizType']                    = $request->tddlBizType;
        $query['TddlRegionConfig']               = $request->tddlRegionConfig;
        $query['InstructionSetArch']             = $request->instructionSetArch;
        $query['UsedTime']                       = $request->usedTime;
        $query['Period']                         = $request->period;
        $query['AutoRenew']                      = $request->autoRenew;
        $req                                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateReadOnlyDBInstance',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateReadOnlyDBInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateReadOnlyDBInstanceRequest $request
     *
     * @return CreateReadOnlyDBInstanceResponse
     */
    public function createReadOnlyDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createReadOnlyDBInstanceWithOptions($request, $runtime);
    }

    /**
     * @param CreateTempDBInstanceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateTempDBInstanceResponse
     */
    public function createTempDBInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['BackupId']             = $request->backupId;
        $query['RestoreTime']          = $request->restoreTime;
        $query['OwnerAccount']         = $request->ownerAccount;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateTempDBInstance',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateTempDBInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateTempDBInstanceRequest $request
     *
     * @return CreateTempDBInstanceResponse
     */
    public function createTempDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTempDBInstanceWithOptions($request, $runtime);
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
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['AccountName']          = $request->accountName;
        $query['OwnerAccount']         = $request->ownerAccount;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteAccount',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteAccountResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DeleteBackupRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteBackupResponse
     */
    public function deleteBackupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['BackupId']             = $request->backupId;
        $query['OwnerAccount']         = $request->ownerAccount;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteBackup',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteBackupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DeleteBackupFileRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteBackupFileResponse
     */
    public function deleteBackupFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['RegionId']             = $request->regionId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['BackupId']             = $request->backupId;
        $query['DBName']               = $request->DBName;
        $query['BackupTime']           = $request->backupTime;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteBackupFile',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteBackupFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteBackupFileRequest $request
     *
     * @return DeleteBackupFileResponse
     */
    public function deleteBackupFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBackupFileWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDatabaseRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteDatabaseResponse
     */
    public function deleteDatabaseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['DBInstanceId']    = $request->DBInstanceId;
        $query['DBName']          = $request->DBName;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteDatabase',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteDatabaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteDatabaseRequest $request
     *
     * @return DeleteDatabaseResponse
     */
    public function deleteDatabase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDatabaseWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDBInstanceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteDBInstanceResponse
     */
    public function deleteDBInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['OwnerAccount']         = $request->ownerAccount;
        $query['ReleasedKeepPolicy']   = $request->releasedKeepPolicy;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteDBInstance',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteDBInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DeleteDBProxyEndpointAddressRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DeleteDBProxyEndpointAddressResponse
     */
    public function deleteDBProxyEndpointAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                                = [];
        $query['RegionId']                    = $request->regionId;
        $query['DBInstanceId']                = $request->DBInstanceId;
        $query['DBInstanceId']                = $request->DBInstanceId;
        $query['DBProxyEndpointId']           = $request->DBProxyEndpointId;
        $query['DBProxyConnectStringNetType'] = $request->DBProxyConnectStringNetType;
        $req                                  = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteDBProxyEndpointAddress',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteDBProxyEndpointAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteDBProxyEndpointAddressRequest $request
     *
     * @return DeleteDBProxyEndpointAddressResponse
     */
    public function deleteDBProxyEndpointAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDBProxyEndpointAddressWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDedicatedHostAccountRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteDedicatedHostAccountResponse
     */
    public function deleteDedicatedHostAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['DedicatedHostId']      = $request->dedicatedHostId;
        $query['AccountName']          = $request->accountName;
        $query['RegionId']             = $request->regionId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteDedicatedHostAccount',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteDedicatedHostAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteDedicatedHostAccountRequest $request
     *
     * @return DeleteDedicatedHostAccountResponse
     */
    public function deleteDedicatedHostAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDedicatedHostAccountWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDedicatedHostGroupRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteDedicatedHostGroupResponse
     */
    public function deleteDedicatedHostGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['DedicatedHostGroupId'] = $request->dedicatedHostGroupId;
        $query['RegionId']             = $request->regionId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteDedicatedHostGroup',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteDedicatedHostGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteDedicatedHostGroupRequest $request
     *
     * @return DeleteDedicatedHostGroupResponse
     */
    public function deleteDedicatedHostGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDedicatedHostGroupWithOptions($request, $runtime);
    }

    /**
     * @param DeleteParameterGroupRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteParameterGroupResponse
     */
    public function deleteParameterGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['RegionId']             = $request->regionId;
        $query['ParameterGroupId']     = $request->parameterGroupId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteParameterGroup',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteParameterGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DeleteUserBackupFileRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteUserBackupFileResponse
     */
    public function deleteUserBackupFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['BackupId']             = $request->backupId;
        $query['RegionId']             = $request->regionId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteUserBackupFile',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteUserBackupFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteUserBackupFileRequest $request
     *
     * @return DeleteUserBackupFileResponse
     */
    public function deleteUserBackupFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUserBackupFileWithOptions($request, $runtime);
    }

    /**
     * @param DescibeImportsFromDatabaseRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescibeImportsFromDatabaseResponse
     */
    public function descibeImportsFromDatabaseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['ClientToken']          = $request->clientToken;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['Engine']               = $request->engine;
        $query['ImportId']             = $request->importId;
        $query['StartTime']            = $request->startTime;
        $query['EndTime']              = $request->endTime;
        $query['PageSize']             = $request->pageSize;
        $query['PageNumber']           = $request->pageNumber;
        $query['OwnerAccount']         = $request->ownerAccount;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescibeImportsFromDatabase',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescibeImportsFromDatabaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescibeImportsFromDatabaseRequest $request
     *
     * @return DescibeImportsFromDatabaseResponse
     */
    public function descibeImportsFromDatabase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->descibeImportsFromDatabaseWithOptions($request, $runtime);
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
        $query                         = [];
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['AccountName']          = $request->accountName;
        $query['PageSize']             = $request->pageSize;
        $query['PageNumber']           = $request->pageNumber;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeAccounts',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeAccountsResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DescribeActionEventPolicyRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeActionEventPolicyResponse
     */
    public function describeActionEventPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['RegionId']             = $request->regionId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeActionEventPolicy',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeActionEventPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeActionEventPolicyRequest $request
     *
     * @return DescribeActionEventPolicyResponse
     */
    public function describeActionEventPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeActionEventPolicyWithOptions($request, $runtime);
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
        $query                          = [];
        $query['ResourceOwnerId']       = $request->resourceOwnerId;
        $query['RegionId']              = $request->regionId;
        $query['ZoneId']                = $request->zoneId;
        $query['InstanceChargeType']    = $request->instanceChargeType;
        $query['Engine']                = $request->engine;
        $query['EngineVersion']         = $request->engineVersion;
        $query['DBInstanceId']          = $request->DBInstanceId;
        $query['OrderType']             = $request->orderType;
        $query['DBInstanceStorageType'] = $request->DBInstanceStorageType;
        $query['Category']              = $request->category;
        $query['CommodityCode']         = $request->commodityCode;
        $req                            = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeAvailableClasses',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
     * @param DescribeAvailableCrossRegionRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeAvailableCrossRegionResponse
     */
    public function describeAvailableCrossRegionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['RegionId']             = $request->regionId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeAvailableCrossRegion',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeAvailableCrossRegionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAvailableCrossRegionRequest $request
     *
     * @return DescribeAvailableCrossRegionResponse
     */
    public function describeAvailableCrossRegion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAvailableCrossRegionWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAvailableDedicatedHostClassesRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return DescribeAvailableDedicatedHostClassesResponse
     */
    public function describeAvailableDedicatedHostClassesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['RegionId']             = $request->regionId;
        $query['ZoneId']               = $request->zoneId;
        $query['StorageType']          = $request->storageType;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeAvailableDedicatedHostClasses',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeAvailableDedicatedHostClassesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAvailableDedicatedHostClassesRequest $request
     *
     * @return DescribeAvailableDedicatedHostClassesResponse
     */
    public function describeAvailableDedicatedHostClasses($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAvailableDedicatedHostClassesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAvailableDedicatedHostZonesRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeAvailableDedicatedHostZonesResponse
     */
    public function describeAvailableDedicatedHostZonesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['RegionId']             = $request->regionId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeAvailableDedicatedHostZones',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeAvailableDedicatedHostZonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAvailableDedicatedHostZonesRequest $request
     *
     * @return DescribeAvailableDedicatedHostZonesResponse
     */
    public function describeAvailableDedicatedHostZones($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAvailableDedicatedHostZonesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAvailableRecoveryTimeRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeAvailableRecoveryTimeResponse
     */
    public function describeAvailableRecoveryTimeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['CrossBackupId']        = $request->crossBackupId;
        $query['RegionId']             = $request->regionId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeAvailableRecoveryTime',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeAvailableRecoveryTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAvailableRecoveryTimeRequest $request
     *
     * @return DescribeAvailableRecoveryTimeResponse
     */
    public function describeAvailableRecoveryTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAvailableRecoveryTimeWithOptions($request, $runtime);
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
        $query                          = [];
        $query['ResourceOwnerId']       = $request->resourceOwnerId;
        $query['RegionId']              = $request->regionId;
        $query['ZoneId']                = $request->zoneId;
        $query['InstanceChargeType']    = $request->instanceChargeType;
        $query['Engine']                = $request->engine;
        $query['EngineVersion']         = $request->engineVersion;
        $query['DBInstanceClass']       = $request->DBInstanceClass;
        $query['OrderType']             = $request->orderType;
        $query['DBInstanceStorageType'] = $request->DBInstanceStorageType;
        $query['Category']              = $request->category;
        $query['DispenseMode']          = $request->dispenseMode;
        $req                            = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeAvailableResource',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
     * @param DescribeAvailableZonesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeAvailableZonesResponse
     */
    public function describeAvailableZonesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['RegionId']        = $request->regionId;
        $query['Engine']          = $request->engine;
        $query['ZoneId']          = $request->zoneId;
        $query['EngineVersion']   = $request->engineVersion;
        $query['CommodityCode']   = $request->commodityCode;
        $query['DispenseMode']    = $request->dispenseMode;
        $query['DBInstanceName']  = $request->DBInstanceName;
        $query['Category']        = $request->category;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeAvailableZones',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
     * @param DescribeBackupDatabaseRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeBackupDatabaseResponse
     */
    public function describeBackupDatabaseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['BackupId']             = $request->backupId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeBackupDatabase',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeBackupDatabaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeBackupDatabaseRequest $request
     *
     * @return DescribeBackupDatabaseResponse
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
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['BackupPolicyMode']     = $request->backupPolicyMode;
        $query['OwnerAccount']         = $request->ownerAccount;
        $query['CompressType']         = $request->compressType;
        $query['ReleasedKeepPolicy']   = $request->releasedKeepPolicy;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeBackupPolicy',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
     * @param DescribeBackupsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeBackupsResponse
     */
    public function describeBackupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['DBInstanceId']    = $request->DBInstanceId;
        $query['BackupId']        = $request->backupId;
        $query['BackupStatus']    = $request->backupStatus;
        $query['BackupMode']      = $request->backupMode;
        $query['StartTime']       = $request->startTime;
        $query['EndTime']         = $request->endTime;
        $query['PageSize']        = $request->pageSize;
        $query['PageNumber']      = $request->pageNumber;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeBackups',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
     * @param DescribeBackupTasksRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeBackupTasksResponse
     */
    public function describeBackupTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['ClientToken']          = $request->clientToken;
        $query['Flag']                 = $request->flag;
        $query['OwnerAccount']         = $request->ownerAccount;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['BackupJobId']          = $request->backupJobId;
        $query['BackupMode']           = $request->backupMode;
        $query['BackupJobStatus']      = $request->backupJobStatus;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeBackupTasks',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
     * @param DescribeBinlogFilesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeBinlogFilesResponse
     */
    public function describeBinlogFilesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['StartTime']            = $request->startTime;
        $query['EndTime']              = $request->endTime;
        $query['PageSize']             = $request->pageSize;
        $query['PageNumber']           = $request->pageNumber;
        $query['OwnerAccount']         = $request->ownerAccount;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeBinlogFiles',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeBinlogFilesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeBinlogFilesRequest $request
     *
     * @return DescribeBinlogFilesResponse
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
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['Engine']               = $request->engine;
        $query['RegionId']             = $request->regionId;
        $query['OwnerAccount']         = $request->ownerAccount;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeCharacterSetName',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
     * @param DescribeCollationTimeZonesRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeCollationTimeZonesResponse
     */
    public function describeCollationTimeZonesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeCollationTimeZones',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeCollationTimeZonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCollationTimeZonesRequest $request
     *
     * @return DescribeCollationTimeZonesResponse
     */
    public function describeCollationTimeZones($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCollationTimeZonesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCrossBackupMetaListRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeCrossBackupMetaListResponse
     */
    public function describeCrossBackupMetaListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['BackupSetId']          = $request->backupSetId;
        $query['GetDbName']            = $request->getDbName;
        $query['Pattern']              = $request->pattern;
        $query['PageSize']             = $request->pageSize;
        $query['PageIndex']            = $request->pageIndex;
        $query['Region']               = $request->region;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeCrossBackupMetaList',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeCrossBackupMetaListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCrossBackupMetaListRequest $request
     *
     * @return DescribeCrossBackupMetaListResponse
     */
    public function describeCrossBackupMetaList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCrossBackupMetaListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCrossRegionBackupDBInstanceRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeCrossRegionBackupDBInstanceResponse
     */
    public function describeCrossRegionBackupDBInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['RegionId']             = $request->regionId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['PageSize']             = $request->pageSize;
        $query['PageNumber']           = $request->pageNumber;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeCrossRegionBackupDBInstance',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeCrossRegionBackupDBInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCrossRegionBackupDBInstanceRequest $request
     *
     * @return DescribeCrossRegionBackupDBInstanceResponse
     */
    public function describeCrossRegionBackupDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCrossRegionBackupDBInstanceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCrossRegionBackupsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeCrossRegionBackupsResponse
     */
    public function describeCrossRegionBackupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['RegionId']             = $request->regionId;
        $query['CrossBackupRegion']    = $request->crossBackupRegion;
        $query['CrossBackupId']        = $request->crossBackupId;
        $query['StartTime']            = $request->startTime;
        $query['EndTime']              = $request->endTime;
        $query['PageSize']             = $request->pageSize;
        $query['PageNumber']           = $request->pageNumber;
        $query['BackupId']             = $request->backupId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeCrossRegionBackups',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeCrossRegionBackupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCrossRegionBackupsRequest $request
     *
     * @return DescribeCrossRegionBackupsResponse
     */
    public function describeCrossRegionBackups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCrossRegionBackupsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCrossRegionLogBackupFilesRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeCrossRegionLogBackupFilesResponse
     */
    public function describeCrossRegionLogBackupFilesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['RegionId']             = $request->regionId;
        $query['CrossBackupRegion']    = $request->crossBackupRegion;
        $query['StartTime']            = $request->startTime;
        $query['EndTime']              = $request->endTime;
        $query['PageSize']             = $request->pageSize;
        $query['PageNumber']           = $request->pageNumber;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeCrossRegionLogBackupFiles',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeCrossRegionLogBackupFilesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCrossRegionLogBackupFilesRequest $request
     *
     * @return DescribeCrossRegionLogBackupFilesResponse
     */
    public function describeCrossRegionLogBackupFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCrossRegionLogBackupFilesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDatabasesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeDatabasesResponse
     */
    public function describeDatabasesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['DBName']               = $request->DBName;
        $query['DBStatus']             = $request->DBStatus;
        $query['OwnerAccount']         = $request->ownerAccount;
        $query['PageSize']             = $request->pageSize;
        $query['PageNumber']           = $request->pageNumber;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDatabases',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeDatabasesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDatabasesRequest $request
     *
     * @return DescribeDatabasesResponse
     */
    public function describeDatabases($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDatabasesWithOptions($request, $runtime);
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
        $query                    = [];
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['DBInstanceId']    = $request->DBInstanceId;
        $query['Expired']         = $request->expired;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBInstanceAttribute',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
     * @param DescribeDBInstanceDetailRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDBInstanceDetailResponse
     */
    public function describeDBInstanceDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['ClientToken']          = $request->clientToken;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBInstanceDetail',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeDBInstanceDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDBInstanceDetailRequest $request
     *
     * @return DescribeDBInstanceDetailResponse
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
        $query                         = [];
        $query['SecurityToken']        = $request->securityToken;
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['OwnerAccount']         = $request->ownerAccount;
        $query['RegionId']             = $request->regionId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['EncryptionKey']        = $request->encryptionKey;
        $query['TargetRegionId']       = $request->targetRegionId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBInstanceEncryptionKey',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
     * @param DescribeDBInstanceHAConfigRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeDBInstanceHAConfigResponse
     */
    public function describeDBInstanceHAConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['OwnerAccount']         = $request->ownerAccount;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBInstanceHAConfig',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query                         = [];
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['OwnerAccount']         = $request->ownerAccount;
        $query['WhitelistNetworkType'] = $request->whitelistNetworkType;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBInstanceIPArrayList',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
     * @param DescribeDBInstanceIpHostnameRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeDBInstanceIpHostnameResponse
     */
    public function describeDBInstanceIpHostnameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['SecurityToken']        = $request->securityToken;
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['OwnerAccount']         = $request->ownerAccount;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['RegionId']             = $request->regionId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBInstanceIpHostname',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeDBInstanceIpHostnameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDBInstanceIpHostnameRequest $request
     *
     * @return DescribeDBInstanceIpHostnameResponse
     */
    public function describeDBInstanceIpHostname($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceIpHostnameWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBInstanceMonitorRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeDBInstanceMonitorResponse
     */
    public function describeDBInstanceMonitorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['ClientToken']          = $request->clientToken;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['OwnerAccount']         = $request->ownerAccount;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBInstanceMonitor',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeDBInstanceMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeDBInstanceNetInfoRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeDBInstanceNetInfoResponse
     */
    public function describeDBInstanceNetInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                             = [];
        $query['OwnerId']                  = $request->ownerId;
        $query['ResourceOwnerAccount']     = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']          = $request->resourceOwnerId;
        $query['ClientToken']              = $request->clientToken;
        $query['DBInstanceId']             = $request->DBInstanceId;
        $query['Flag']                     = $request->flag;
        $query['DBInstanceNetRWSplitType'] = $request->DBInstanceNetRWSplitType;
        $query['OwnerAccount']             = $request->ownerAccount;
        $req                               = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBInstanceNetInfo',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
     * @param DescribeDBInstancePerformanceRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeDBInstancePerformanceResponse
     */
    public function describeDBInstancePerformanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['DBInstanceId']    = $request->DBInstanceId;
        $query['Key']             = $request->key;
        $query['StartTime']       = $request->startTime;
        $query['EndTime']         = $request->endTime;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBInstancePerformance',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeDBInstancePerformanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeDBInstanceProxyConfigurationRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DescribeDBInstanceProxyConfigurationResponse
     */
    public function describeDBInstanceProxyConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBInstanceProxyConfiguration',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeDBInstanceProxyConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDBInstanceProxyConfigurationRequest $request
     *
     * @return DescribeDBInstanceProxyConfigurationResponse
     */
    public function describeDBInstanceProxyConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceProxyConfigurationWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBInstancesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeDBInstancesResponse
     */
    public function describeDBInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['ClientToken']          = $request->clientToken;
        $query['proxyId']              = $request->proxyId;
        $query['Engine']               = $request->engine;
        $query['ZoneId']               = $request->zoneId;
        $query['ResourceGroupId']      = $request->resourceGroupId;
        $query['DBInstanceStatus']     = $request->DBInstanceStatus;
        $query['Expired']              = $request->expired;
        $query['SearchKey']            = $request->searchKey;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['DBInstanceType']       = $request->DBInstanceType;
        $query['RegionId']             = $request->regionId;
        $query['PageSize']             = $request->pageSize;
        $query['PageNumber']           = $request->pageNumber;
        $query['InstanceNetworkType']  = $request->instanceNetworkType;
        $query['VpcId']                = $request->vpcId;
        $query['VSwitchId']            = $request->vSwitchId;
        $query['DBInstanceClass']      = $request->DBInstanceClass;
        $query['EngineVersion']        = $request->engineVersion;
        $query['PayType']              = $request->payType;
        $query['ConnectionMode']       = $request->connectionMode;
        $query['Tags']                 = $request->tags;
        $query['OwnerAccount']         = $request->ownerAccount;
        $query['DedicatedHostGroupId'] = $request->dedicatedHostGroupId;
        $query['DedicatedHostId']      = $request->dedicatedHostId;
        $query['InstanceLevel']        = $request->instanceLevel;
        $query['ConnectionString']     = $request->connectionString;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBInstances',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeDBInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeDBInstancesAsCsvRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDBInstancesAsCsvResponse
     */
    public function describeDBInstancesAsCsvWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['RegionId']             = $request->regionId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBInstancesAsCsv',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeDBInstancesAsCsvResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDBInstancesAsCsvRequest $request
     *
     * @return DescribeDBInstancesAsCsvResponse
     */
    public function describeDBInstancesAsCsv($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstancesAsCsvWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBInstancesByExpireTimeRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeDBInstancesByExpireTimeResponse
     */
    public function describeDBInstancesByExpireTimeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['RegionId']             = $request->regionId;
        $query['proxyId']              = $request->proxyId;
        $query['ExpirePeriod']         = $request->expirePeriod;
        $query['Expired']              = $request->expired;
        $query['PageSize']             = $request->pageSize;
        $query['PageNumber']           = $request->pageNumber;
        $query['Tags']                 = $request->tags;
        $query['OwnerAccount']         = $request->ownerAccount;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBInstancesByExpireTime',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeDBInstancesByExpireTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDBInstancesByExpireTimeRequest $request
     *
     * @return DescribeDBInstancesByExpireTimeResponse
     */
    public function describeDBInstancesByExpireTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstancesByExpireTimeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBInstancesByPerformanceRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeDBInstancesByPerformanceResponse
     */
    public function describeDBInstancesByPerformanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['ClientToken']          = $request->clientToken;
        $query['proxyId']              = $request->proxyId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['PageSize']             = $request->pageSize;
        $query['PageNumber']           = $request->pageNumber;
        $query['SortMethod']           = $request->sortMethod;
        $query['SortKey']              = $request->sortKey;
        $query['Tags']                 = $request->tags;
        $query['OwnerAccount']         = $request->ownerAccount;
        $query['RegionId']             = $request->regionId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBInstancesByPerformance',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeDBInstancesByPerformanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDBInstancesByPerformanceRequest $request
     *
     * @return DescribeDBInstancesByPerformanceResponse
     */
    public function describeDBInstancesByPerformance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstancesByPerformanceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBInstancesForCloneRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDBInstancesForCloneResponse
     */
    public function describeDBInstancesForCloneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['ClientToken']          = $request->clientToken;
        $query['proxyId']              = $request->proxyId;
        $query['Engine']               = $request->engine;
        $query['ZoneId']               = $request->zoneId;
        $query['DBInstanceStatus']     = $request->DBInstanceStatus;
        $query['Expired']              = $request->expired;
        $query['SearchKey']            = $request->searchKey;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['DBInstanceType']       = $request->DBInstanceType;
        $query['RegionId']             = $request->regionId;
        $query['PageSize']             = $request->pageSize;
        $query['PageNumber']           = $request->pageNumber;
        $query['InstanceNetworkType']  = $request->instanceNetworkType;
        $query['VpcId']                = $request->vpcId;
        $query['VSwitchId']            = $request->vSwitchId;
        $query['DBInstanceClass']      = $request->DBInstanceClass;
        $query['EngineVersion']        = $request->engineVersion;
        $query['NodeType']             = $request->nodeType;
        $query['PayType']              = $request->payType;
        $query['ConnectionMode']       = $request->connectionMode;
        $query['OwnerAccount']         = $request->ownerAccount;
        $query['CurrentInstanceId']    = $request->currentInstanceId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBInstancesForClone',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeDBInstancesForCloneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDBInstancesForCloneRequest $request
     *
     * @return DescribeDBInstancesForCloneResponse
     */
    public function describeDBInstancesForClone($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstancesForCloneWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBInstanceSSLRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeDBInstanceSSLResponse
     */
    public function describeDBInstanceSSLWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['OwnerAccount']         = $request->ownerAccount;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBInstanceSSL',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeDBInstanceSSLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeDBInstanceStatusRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDBInstanceStatusResponse
     */
    public function describeDBInstanceStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBInstanceStatus',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeDBInstanceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDBInstanceStatusRequest $request
     *
     * @return DescribeDBInstanceStatusResponse
     */
    public function describeDBInstanceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceStatusWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBInstanceTDERequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeDBInstanceTDEResponse
     */
    public function describeDBInstanceTDEWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['OwnerAccount']         = $request->ownerAccount;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBInstanceTDE',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeDBInstanceTDEResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDBInstanceTDERequest $request
     *
     * @return DescribeDBInstanceTDEResponse
     */
    public function describeDBInstanceTDE($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceTDEWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBProxyRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeDBProxyResponse
     */
    public function describeDBProxyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['RegionId']             = $request->regionId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBProxy',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeDBProxyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDBProxyRequest $request
     *
     * @return DescribeDBProxyResponse
     */
    public function describeDBProxy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBProxyWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBProxyEndpointRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDBProxyEndpointResponse
     */
    public function describeDBProxyEndpointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['DBProxyEndpointId']    = $request->DBProxyEndpointId;
        $query['DBProxyConnectString'] = $request->DBProxyConnectString;
        $query['RegionId']             = $request->regionId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBProxyEndpoint',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeDBProxyEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDBProxyEndpointRequest $request
     *
     * @return DescribeDBProxyEndpointResponse
     */
    public function describeDBProxyEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBProxyEndpointWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBProxyPerformanceRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeDBProxyPerformanceResponse
     */
    public function describeDBProxyPerformanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['DBProxyInstanceType']  = $request->DBProxyInstanceType;
        $query['StartTime']            = $request->startTime;
        $query['EndTime']              = $request->endTime;
        $query['RegionId']             = $request->regionId;
        $query['MetricsName']          = $request->metricsName;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBProxyPerformance',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeDBProxyPerformanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDBProxyPerformanceRequest $request
     *
     * @return DescribeDBProxyPerformanceResponse
     */
    public function describeDBProxyPerformance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBProxyPerformanceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDedicatedHostAttributeRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeDedicatedHostAttributeResponse
     */
    public function describeDedicatedHostAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['RegionId']             = $request->regionId;
        $query['DedicatedHostId']      = $request->dedicatedHostId;
        $query['DedicatedHostGroupId'] = $request->dedicatedHostGroupId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDedicatedHostAttribute',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeDedicatedHostAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDedicatedHostAttributeRequest $request
     *
     * @return DescribeDedicatedHostAttributeResponse
     */
    public function describeDedicatedHostAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDedicatedHostAttributeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDedicatedHostGroupsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDedicatedHostGroupsResponse
     */
    public function describeDedicatedHostGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['RegionId']             = $request->regionId;
        $query['DedicatedHostGroupId'] = $request->dedicatedHostGroupId;
        $query['ImageCategory']        = $request->imageCategory;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDedicatedHostGroups',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeDedicatedHostGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDedicatedHostGroupsRequest $request
     *
     * @return DescribeDedicatedHostGroupsResponse
     */
    public function describeDedicatedHostGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDedicatedHostGroupsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDedicatedHostImageCategoriesRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DescribeDedicatedHostImageCategoriesResponse
     */
    public function describeDedicatedHostImageCategoriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['RegionId']             = $request->regionId;
        $query['HostGroup']            = $request->hostGroup;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDedicatedHostImageCategories',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeDedicatedHostImageCategoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDedicatedHostImageCategoriesRequest $request
     *
     * @return DescribeDedicatedHostImageCategoriesResponse
     */
    public function describeDedicatedHostImageCategories($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDedicatedHostImageCategoriesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDedicatedHostsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeDedicatedHostsResponse
     */
    public function describeDedicatedHostsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['RegionId']             = $request->regionId;
        $query['DedicatedHostGroupId'] = $request->dedicatedHostGroupId;
        $query['OrderId']              = $request->orderId;
        $query['HostType']             = $request->hostType;
        $query['HostStatus']           = $request->hostStatus;
        $query['AllocationStatus']     = $request->allocationStatus;
        $query['ZoneId']               = $request->zoneId;
        $query['DedicatedHostId']      = $request->dedicatedHostId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDedicatedHosts',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeDedicatedHostsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDedicatedHostsRequest $request
     *
     * @return DescribeDedicatedHostsResponse
     */
    public function describeDedicatedHosts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDedicatedHostsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDetachedBackupsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDetachedBackupsResponse
     */
    public function describeDetachedBackupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['DBInstanceId']    = $request->DBInstanceId;
        $query['BackupId']        = $request->backupId;
        $query['BackupStatus']    = $request->backupStatus;
        $query['BackupMode']      = $request->backupMode;
        $query['StartTime']       = $request->startTime;
        $query['EndTime']         = $request->endTime;
        $query['PageSize']        = $request->pageSize;
        $query['PageNumber']      = $request->pageNumber;
        $query['Region']          = $request->region;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDetachedBackups',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeDetachedBackupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDetachedBackupsRequest $request
     *
     * @return DescribeDetachedBackupsResponse
     */
    public function describeDetachedBackups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDetachedBackupsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDiagnosticReportListRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeDiagnosticReportListResponse
     */
    public function describeDiagnosticReportListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                 = [];
        $query['DBInstanceId'] = $request->DBInstanceId;
        $req                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDiagnosticReportList',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeDiagnosticReportListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDiagnosticReportListRequest $request
     *
     * @return DescribeDiagnosticReportListResponse
     */
    public function describeDiagnosticReportList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDiagnosticReportListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDTCSecurityIpHostsForSQLServerRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return DescribeDTCSecurityIpHostsForSQLServerResponse
     */
    public function describeDTCSecurityIpHostsForSQLServerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['SecurityToken']        = $request->securityToken;
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['OwnerAccount']         = $request->ownerAccount;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['RegionId']             = $request->regionId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDTCSecurityIpHostsForSQLServer',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeDTCSecurityIpHostsForSQLServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDTCSecurityIpHostsForSQLServerRequest $request
     *
     * @return DescribeDTCSecurityIpHostsForSQLServerResponse
     */
    public function describeDTCSecurityIpHostsForSQLServer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDTCSecurityIpHostsForSQLServerWithOptions($request, $runtime);
    }

    /**
     * @param DescribeErrorLogsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeErrorLogsResponse
     */
    public function describeErrorLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['StartTime']            = $request->startTime;
        $query['EndTime']              = $request->endTime;
        $query['PageSize']             = $request->pageSize;
        $query['PageNumber']           = $request->pageNumber;
        $query['OwnerAccount']         = $request->ownerAccount;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeErrorLogs',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeErrorLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeErrorLogsRequest $request
     *
     * @return DescribeErrorLogsResponse
     */
    public function describeErrorLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeErrorLogsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeEventsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeEventsResponse
     */
    public function describeEventsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['RegionId']             = $request->regionId;
        $query['StartTime']            = $request->startTime;
        $query['EndTime']              = $request->endTime;
        $query['PageSize']             = $request->pageSize;
        $query['PageNumber']           = $request->pageNumber;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeEvents',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeEventsRequest $request
     *
     * @return DescribeEventsResponse
     */
    public function describeEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEventsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeHADiagnoseConfigRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeHADiagnoseConfigResponse
     */
    public function describeHADiagnoseConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['RegionId']             = $request->regionId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeHADiagnoseConfig',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeHADiagnoseConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeHADiagnoseConfigRequest $request
     *
     * @return DescribeHADiagnoseConfigResponse
     */
    public function describeHADiagnoseConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHADiagnoseConfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribeHASwitchConfigRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeHASwitchConfigResponse
     */
    public function describeHASwitchConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['RegionId']             = $request->regionId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeHASwitchConfig',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeHASwitchConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeHASwitchConfigRequest $request
     *
     * @return DescribeHASwitchConfigResponse
     */
    public function describeHASwitchConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHASwitchConfigWithOptions($request, $runtime);
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
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['ClientToken']          = $request->clientToken;
        $query['proxyId']              = $request->proxyId;
        $query['RegionId']             = $request->regionId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['PageSize']             = $request->pageSize;
        $query['PageNumber']           = $request->pageNumber;
        $query['OwnerAccount']         = $request->ownerAccount;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceAutoRenewalAttribute',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
     * @param DescribeInstanceCrossBackupPolicyRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeInstanceCrossBackupPolicyResponse
     */
    public function describeInstanceCrossBackupPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['RegionId']             = $request->regionId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceCrossBackupPolicy',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceCrossBackupPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInstanceCrossBackupPolicyRequest $request
     *
     * @return DescribeInstanceCrossBackupPolicyResponse
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
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['Key']                  = $request->key;
        $query['OwnerAccount']         = $request->ownerAccount;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceKeywords',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
     * @param DescribeLocalAvailableRecoveryTimeRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeLocalAvailableRecoveryTimeResponse
     */
    public function describeLocalAvailableRecoveryTimeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['Region']               = $request->region;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeLocalAvailableRecoveryTime',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['StartTime']            = $request->startTime;
        $query['EndTime']              = $request->endTime;
        $query['PageSize']             = $request->pageSize;
        $query['PageNumber']           = $request->pageNumber;
        $query['OwnerAccount']         = $request->ownerAccount;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeLogBackupFiles',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
     * @param DescribeMetaListRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeMetaListResponse
     */
    public function describeMetaListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['ClientToken']          = $request->clientToken;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['RestoreType']          = $request->restoreType;
        $query['BackupSetID']          = $request->backupSetID;
        $query['RestoreTime']          = $request->restoreTime;
        $query['GetDbName']            = $request->getDbName;
        $query['Pattern']              = $request->pattern;
        $query['PageSize']             = $request->pageSize;
        $query['PageIndex']            = $request->pageIndex;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeMetaList',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeMetaListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeMetaListRequest $request
     *
     * @return DescribeMetaListResponse
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
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['MigrateTaskId']        = $request->migrateTaskId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeMigrateTaskById',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
     * @param DescribeMigrateTasksRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeMigrateTasksResponse
     */
    public function describeMigrateTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['StartTime']            = $request->startTime;
        $query['EndTime']              = $request->endTime;
        $query['PageSize']             = $request->pageSize;
        $query['PageNumber']           = $request->pageNumber;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeMigrateTasks',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeMigrateTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeMigrateTasksRequest $request
     *
     * @return DescribeMigrateTasksResponse
     */
    public function describeMigrateTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMigrateTasksWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMigrateTasksForSQLServerRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeMigrateTasksForSQLServerResponse
     */
    public function describeMigrateTasksForSQLServerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['StartTime']            = $request->startTime;
        $query['EndTime']              = $request->endTime;
        $query['PageSize']             = $request->pageSize;
        $query['PageNumber']           = $request->pageNumber;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeMigrateTasksForSQLServer',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeMigrateTasksForSQLServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeMigrateTasksForSQLServerRequest $request
     *
     * @return DescribeMigrateTasksForSQLServerResponse
     */
    public function describeMigrateTasksForSQLServer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMigrateTasksForSQLServerWithOptions($request, $runtime);
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
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['StartTime']            = $request->startTime;
        $query['EndTime']              = $request->endTime;
        $query['PageSize']             = $request->pageSize;
        $query['PageNumber']           = $request->pageNumber;
        $query['OwnerAccount']         = $request->ownerAccount;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeModifyParameterLog',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
     * @param DescribeOssDownloadsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeOssDownloadsResponse
     */
    public function describeOssDownloadsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['MigrateTaskId']        = $request->migrateTaskId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeOssDownloads',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeOssDownloadsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeOssDownloadsRequest $request
     *
     * @return DescribeOssDownloadsResponse
     */
    public function describeOssDownloads($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOssDownloadsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeOssDownloadsForSQLServerRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeOssDownloadsForSQLServerResponse
     */
    public function describeOssDownloadsForSQLServerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['MigrateTaskId']        = $request->migrateTaskId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeOssDownloadsForSQLServer',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeOssDownloadsForSQLServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeOssDownloadsForSQLServerRequest $request
     *
     * @return DescribeOssDownloadsForSQLServerResponse
     */
    public function describeOssDownloadsForSQLServer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOssDownloadsForSQLServerWithOptions($request, $runtime);
    }

    /**
     * @param DescribeParameterGroupRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeParameterGroupResponse
     */
    public function describeParameterGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['ParameterGroupId']     = $request->parameterGroupId;
        $query['RegionId']             = $request->regionId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeParameterGroup',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeParameterGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeParameterGroupsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeParameterGroupsResponse
     */
    public function describeParameterGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['RegionId']             = $request->regionId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeParameterGroups',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeParameterGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeParametersRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeParametersResponse
     */
    public function describeParametersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['ClientToken']          = $request->clientToken;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['OwnerAccount']         = $request->ownerAccount;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeParameters',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeParametersResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['ClientToken']          = $request->clientToken;
        $query['Engine']               = $request->engine;
        $query['EngineVersion']        = $request->engineVersion;
        $query['OwnerAccount']         = $request->ownerAccount;
        $query['Category']             = $request->category;
        $query['RegionId']             = $request->regionId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeParameterTemplates',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeParameterTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                          = [];
        $query['OwnerId']               = $request->ownerId;
        $query['ResourceOwnerAccount']  = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']       = $request->resourceOwnerId;
        $query['ClientToken']           = $request->clientToken;
        $query['OwnerAccount']          = $request->ownerAccount;
        $query['CommodityCode']         = $request->commodityCode;
        $query['RegionId']              = $request->regionId;
        $query['Engine']                = $request->engine;
        $query['EngineVersion']         = $request->engineVersion;
        $query['DBInstanceClass']       = $request->DBInstanceClass;
        $query['DBInstanceStorage']     = $request->DBInstanceStorage;
        $query['PayType']               = $request->payType;
        $query['ZoneId']                = $request->zoneId;
        $query['UsedTime']              = $request->usedTime;
        $query['TimeType']              = $request->timeType;
        $query['Quantity']              = $request->quantity;
        $query['InstanceUsedType']      = $request->instanceUsedType;
        $query['OrderType']             = $request->orderType;
        $query['DBInstanceStorageType'] = $request->DBInstanceStorageType;
        $query['DBInstanceId']          = $request->DBInstanceId;
        $req                            = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribePrice',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
     * @param DescribeRdsResourceSettingsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeRdsResourceSettingsResponse
     */
    public function describeRdsResourceSettingsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['ResourceNiche']        = $request->resourceNiche;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeRdsResourceSettings',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeRdsResourceSettingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRdsResourceSettingsRequest $request
     *
     * @return DescribeRdsResourceSettingsResponse
     */
    public function describeRdsResourceSettings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRdsResourceSettingsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeReadDBInstanceDelayRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeReadDBInstanceDelayResponse
     */
    public function describeReadDBInstanceDelayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['SecurityToken']        = $request->securityToken;
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['OwnerAccount']         = $request->ownerAccount;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['ReadInstanceId']       = $request->readInstanceId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeReadDBInstanceDelay',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeReadDBInstanceDelayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeReadDBInstanceDelayRequest $request
     *
     * @return DescribeReadDBInstanceDelayResponse
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
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['ClientToken']          = $request->clientToken;
        $query['RegionId']             = $request->regionId;
        $query['InstanceUsedType']     = $request->instanceUsedType;
        $query['SpecifyCount']         = $request->specifyCount;
        $query['HostType']             = $request->hostType;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeRegionInfos',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
     * @param DescribeRegionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeRegions',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
     * @param DescribeRenewalPriceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeRenewalPriceResponse
     */
    public function describeRenewalPriceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['ClientToken']          = $request->clientToken;
        $query['OwnerAccount']         = $request->ownerAccount;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['RegionId']             = $request->regionId;
        $query['PayType']              = $request->payType;
        $query['DBInstanceClass']      = $request->DBInstanceClass;
        $query['UsedTime']             = $request->usedTime;
        $query['TimeType']             = $request->timeType;
        $query['Quantity']             = $request->quantity;
        $query['OrderType']            = $request->orderType;
        $query['BusinessInfo']         = $request->businessInfo;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeRenewalPrice',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeRenewalPriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeResourceUsageRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeResourceUsageResponse
     */
    public function describeResourceUsageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['OwnerAccount']         = $request->ownerAccount;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeResourceUsage',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
     * @param DescribeSecurityGroupConfigurationRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeSecurityGroupConfigurationResponse
     */
    public function describeSecurityGroupConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeSecurityGroupConfiguration',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
     * @param DescribeSlowLogRecordsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeSlowLogRecordsResponse
     */
    public function describeSlowLogRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['SQLHASH']              = $request->SQLHASH;
        $query['StartTime']            = $request->startTime;
        $query['EndTime']              = $request->endTime;
        $query['DBName']               = $request->DBName;
        $query['PageSize']             = $request->pageSize;
        $query['PageNumber']           = $request->pageNumber;
        $query['OwnerAccount']         = $request->ownerAccount;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeSlowLogRecords',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeSlowLogRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DescribeSlowLogsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeSlowLogsResponse
     */
    public function describeSlowLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['StartTime']            = $request->startTime;
        $query['EndTime']              = $request->endTime;
        $query['DBName']               = $request->DBName;
        $query['SortKey']              = $request->sortKey;
        $query['PageSize']             = $request->pageSize;
        $query['PageNumber']           = $request->pageNumber;
        $query['OwnerAccount']         = $request->ownerAccount;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeSlowLogs',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeSlowLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSlowLogsRequest $request
     *
     * @return DescribeSlowLogsResponse
     */
    public function describeSlowLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSlowLogsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSQLCollectorPolicyRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeSQLCollectorPolicyResponse
     */
    public function describeSQLCollectorPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['ClientToken']          = $request->clientToken;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['OwnerAccount']         = $request->ownerAccount;
        $query['ResourceGroupId']      = $request->resourceGroupId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeSQLCollectorPolicy',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeSQLCollectorPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSQLCollectorPolicyRequest $request
     *
     * @return DescribeSQLCollectorPolicyResponse
     */
    public function describeSQLCollectorPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSQLCollectorPolicyWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSQLCollectorRetentionRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeSQLCollectorRetentionResponse
     */
    public function describeSQLCollectorRetentionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['SecurityToken']        = $request->securityToken;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['OwnerAccount']         = $request->ownerAccount;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['ResourceGroupId']      = $request->resourceGroupId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeSQLCollectorRetention',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeSQLCollectorRetentionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSQLCollectorRetentionRequest $request
     *
     * @return DescribeSQLCollectorRetentionResponse
     */
    public function describeSQLCollectorRetention($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSQLCollectorRetentionWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSQLLogFilesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeSQLLogFilesResponse
     */
    public function describeSQLLogFilesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['FileName']             = $request->fileName;
        $query['PageSize']             = $request->pageSize;
        $query['PageNumber']           = $request->pageNumber;
        $query['OwnerAccount']         = $request->ownerAccount;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeSQLLogFiles',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeSQLLogFilesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSQLLogFilesRequest $request
     *
     * @return DescribeSQLLogFilesResponse
     */
    public function describeSQLLogFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSQLLogFilesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSQLLogRecordsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeSQLLogRecordsResponse
     */
    public function describeSQLLogRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['ClientToken']          = $request->clientToken;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['SQLId']                = $request->SQLId;
        $query['QueryKeywords']        = $request->queryKeywords;
        $query['StartTime']            = $request->startTime;
        $query['Database']             = $request->database;
        $query['User']                 = $request->user;
        $query['Form']                 = $request->form;
        $query['EndTime']              = $request->endTime;
        $query['PageSize']             = $request->pageSize;
        $query['PageNumber']           = $request->pageNumber;
        $query['OwnerAccount']         = $request->ownerAccount;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeSQLLogRecords',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeSQLLogRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSQLLogRecordsRequest $request
     *
     * @return DescribeSQLLogRecordsResponse
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
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['StartTime']            = $request->startTime;
        $query['EndTime']              = $request->endTime;
        $query['PageSize']             = $request->pageSize;
        $query['PageNumber']           = $request->pageNumber;
        $query['OwnerAccount']         = $request->ownerAccount;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeSQLLogReportList',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
     * @param DescribeSQLLogReportsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeSQLLogReportsResponse
     */
    public function describeSQLLogReportsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['StartTime']            = $request->startTime;
        $query['EndTime']              = $request->endTime;
        $query['PageSize']             = $request->pageSize;
        $query['PageNumber']           = $request->pageNumber;
        $query['OwnerAccount']         = $request->ownerAccount;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeSQLLogReports',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeSQLLogReportsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSQLLogReportsRequest $request
     *
     * @return DescribeSQLLogReportsResponse
     */
    public function describeSQLLogReports($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSQLLogReportsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeTagsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DescribeTagsResponse
     */
    public function describeTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['ClientToken']          = $request->clientToken;
        $query['proxyId']              = $request->proxyId;
        $query['RegionId']             = $request->regionId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['Tags']                 = $request->tags;
        $query['OwnerAccount']         = $request->ownerAccount;
        $query['ResourceType']         = $request->resourceType;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeTags',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeTasksRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeTasksResponse
     */
    public function describeTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['StartTime']            = $request->startTime;
        $query['EndTime']              = $request->endTime;
        $query['PageSize']             = $request->pageSize;
        $query['PageNumber']           = $request->pageNumber;
        $query['Status']               = $request->status;
        $query['TaskAction']           = $request->taskAction;
        $query['OwnerAccount']         = $request->ownerAccount;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeTasks',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeTasksResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DestroyDBInstanceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DestroyDBInstanceResponse
     */
    public function destroyDBInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['ClientToken']          = $request->clientToken;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['OwnerAccount']         = $request->ownerAccount;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DestroyDBInstance',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DestroyDBInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DestroyDBInstanceRequest $request
     *
     * @return DestroyDBInstanceResponse
     */
    public function destroyDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->destroyDBInstanceWithOptions($request, $runtime);
    }

    /**
     * @param DropDedicatedHostUserRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DropDedicatedHostUserResponse
     */
    public function dropDedicatedHostUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['DedicatedHostName']    = $request->dedicatedHostName;
        $query['UserName']             = $request->userName;
        $query['RegionId']             = $request->regionId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DropDedicatedHostUser',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DropDedicatedHostUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DropDedicatedHostUserRequest $request
     *
     * @return DropDedicatedHostUserResponse
     */
    public function dropDedicatedHostUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dropDedicatedHostUserWithOptions($request, $runtime);
    }

    /**
     * @param EvaluateDedicatedHostInstanceResourceRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return EvaluateDedicatedHostInstanceResourceResponse
     */
    public function evaluateDedicatedHostInstanceResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['RegionId']             = $request->regionId;
        $query['DedicatedHostGroupId'] = $request->dedicatedHostGroupId;
        $query['DiskType']             = $request->diskType;
        $query['DiskSize']             = $request->diskSize;
        $query['InstanceClassNames']   = $request->instanceClassNames;
        $query['Engine']               = $request->engine;
        $query['EngineVersion']        = $request->engineVersion;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'EvaluateDedicatedHostInstanceResource',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return EvaluateDedicatedHostInstanceResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EvaluateDedicatedHostInstanceResourceRequest $request
     *
     * @return EvaluateDedicatedHostInstanceResourceResponse
     */
    public function evaluateDedicatedHostInstanceResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->evaluateDedicatedHostInstanceResourceWithOptions($request, $runtime);
    }

    /**
     * @param GetDbProxyInstanceSslRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetDbProxyInstanceSslResponse
     */
    public function getDbProxyInstanceSslWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                 = [];
        $query['RegionId']     = $request->regionId;
        $query['DbInstanceId'] = $request->dbInstanceId;
        $query['DbInstanceId'] = $request->dbInstanceId;
        $req                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetDbProxyInstanceSsl',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetDbProxyInstanceSslResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDbProxyInstanceSslRequest $request
     *
     * @return GetDbProxyInstanceSslResponse
     */
    public function getDbProxyInstanceSsl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDbProxyInstanceSslWithOptions($request, $runtime);
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
        $query                     = [];
        $query['ResourceOwnerId']  = $request->resourceOwnerId;
        $query['DBInstanceId']     = $request->DBInstanceId;
        $query['AccountName']      = $request->accountName;
        $query['DBName']           = $request->DBName;
        $query['AccountPrivilege'] = $request->accountPrivilege;
        $req                       = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GrantAccountPrivilege',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GrantAccountPrivilegeResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param GrantOperatorPermissionRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GrantOperatorPermissionResponse
     */
    public function grantOperatorPermissionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['ExpiredTime']          = $request->expiredTime;
        $query['Privileges']           = $request->privileges;
        $query['OwnerAccount']         = $request->ownerAccount;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GrantOperatorPermission',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GrantOperatorPermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GrantOperatorPermissionRequest $request
     *
     * @return GrantOperatorPermissionResponse
     */
    public function grantOperatorPermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->grantOperatorPermissionWithOptions($request, $runtime);
    }

    /**
     * @param ImportDatabaseBetweenInstancesRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ImportDatabaseBetweenInstancesResponse
     */
    public function importDatabaseBetweenInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['SourceDBInstanceId']   = $request->sourceDBInstanceId;
        $query['DBInfo']               = $request->DBInfo;
        $query['OwnerAccount']         = $request->ownerAccount;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ImportDatabaseBetweenInstances',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ImportDatabaseBetweenInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ImportDatabaseBetweenInstancesRequest $request
     *
     * @return ImportDatabaseBetweenInstancesResponse
     */
    public function importDatabaseBetweenInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importDatabaseBetweenInstancesWithOptions($request, $runtime);
    }

    /**
     * @param ImportUserBackupFileRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ImportUserBackupFileResponse
     */
    public function importUserBackupFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['RegionId']             = $request->regionId;
        $query['EngineVersion']        = $request->engineVersion;
        $query['BucketRegion']         = $request->bucketRegion;
        $query['BackupFile']           = $request->backupFile;
        $query['Comment']              = $request->comment;
        $query['RestoreSize']          = $request->restoreSize;
        $query['Retention']            = $request->retention;
        $query['ZoneId']               = $request->zoneId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ImportUserBackupFile',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ImportUserBackupFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ImportUserBackupFileRequest $request
     *
     * @return ImportUserBackupFileResponse
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
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['ClientToken']          = $request->clientToken;
        $query['CommodityCode']        = $request->commodityCode;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['OrderType']            = $request->orderType;
        $query['RegionId']             = $request->regionId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListClasses',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['RegionId']             = $request->regionId;
        $query['ResourceType']         = $request->resourceType;
        $query['NextToken']            = $request->nextToken;
        $query['ResourceId']           = $request->resourceId;
        $query['Tag']                  = $request->tag;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListTagResources',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
     * @param ListUserBackupFilesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListUserBackupFilesResponse
     */
    public function listUserBackupFilesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['Status']               = $request->status;
        $query['RegionId']             = $request->regionId;
        $query['Comment']              = $request->comment;
        $query['BackupId']             = $request->backupId;
        $query['OssUrl']               = $request->ossUrl;
        $query['Tags']                 = $request->tags;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListUserBackupFiles',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListUserBackupFilesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListUserBackupFilesRequest $request
     *
     * @return ListUserBackupFilesResponse
     */
    public function listUserBackupFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserBackupFilesWithOptions($request, $runtime);
    }

    /**
     * @param LockAccountRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return LockAccountResponse
     */
    public function lockAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['AccountName']          = $request->accountName;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'LockAccount',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return LockAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param LockAccountRequest $request
     *
     * @return LockAccountResponse
     */
    public function lockAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->lockAccountWithOptions($request, $runtime);
    }

    /**
     * @param MigrateDBInstanceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return MigrateDBInstanceResponse
     */
    public function migrateDBInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                                   = [];
        $query['OwnerId']                        = $request->ownerId;
        $query['ResourceOwnerAccount']           = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']                = $request->resourceOwnerId;
        $query['RegionId']                       = $request->regionId;
        $query['DedicatedHostGroupId']           = $request->dedicatedHostGroupId;
        $query['DBInstanceId']                   = $request->DBInstanceId;
        $query['TargetDedicatedHostIdForMaster'] = $request->targetDedicatedHostIdForMaster;
        $query['TargetDedicatedHostIdForSlave']  = $request->targetDedicatedHostIdForSlave;
        $query['EffectiveTime']                  = $request->effectiveTime;
        $query['SpecifiedTime']                  = $request->specifiedTime;
        $query['ZoneIdForLog']                   = $request->zoneIdForLog;
        $query['ZoneIdForFollower']              = $request->zoneIdForFollower;
        $req                                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'MigrateDBInstance',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return MigrateDBInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param MigrateDBInstanceRequest $request
     *
     * @return MigrateDBInstanceResponse
     */
    public function migrateDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->migrateDBInstanceWithOptions($request, $runtime);
    }

    /**
     * @param MigrateSecurityIPModeRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return MigrateSecurityIPModeResponse
     */
    public function migrateSecurityIPModeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'MigrateSecurityIPMode',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return MigrateSecurityIPModeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param MigrateSecurityIPModeRequest $request
     *
     * @return MigrateSecurityIPModeResponse
     */
    public function migrateSecurityIPMode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->migrateSecurityIPModeWithOptions($request, $runtime);
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
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['VPCId']                = $request->VPCId;
        $query['ZoneId']               = $request->zoneId;
        $query['OwnerAccount']         = $request->ownerAccount;
        $query['EffectiveTime']        = $request->effectiveTime;
        $query['VSwitchId']            = $request->vSwitchId;
        $query['Category']             = $request->category;
        $query['ZoneIdSlave1']         = $request->zoneIdSlave1;
        $query['ZoneIdSlave2']         = $request->zoneIdSlave2;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'MigrateToOtherZone',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return MigrateToOtherZoneResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['AccountName']          = $request->accountName;
        $query['AccountDescription']   = $request->accountDescription;
        $query['OwnerAccount']         = $request->ownerAccount;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyAccountDescription',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyAccountDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ModifyActionEventPolicyRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyActionEventPolicyResponse
     */
    public function modifyActionEventPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['RegionId']             = $request->regionId;
        $query['EnableEventLog']       = $request->enableEventLog;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyActionEventPolicy',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyActionEventPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyActionEventPolicyRequest $request
     *
     * @return ModifyActionEventPolicyResponse
     */
    public function modifyActionEventPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyActionEventPolicyWithOptions($request, $runtime);
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
        $query                                  = [];
        $query['OwnerId']                       = $request->ownerId;
        $query['ResourceOwnerAccount']          = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']               = $request->resourceOwnerId;
        $query['DBInstanceId']                  = $request->DBInstanceId;
        $query['BackupPolicyMode']              = $request->backupPolicyMode;
        $query['PreferredBackupTime']           = $request->preferredBackupTime;
        $query['PreferredBackupPeriod']         = $request->preferredBackupPeriod;
        $query['BackupRetentionPeriod']         = $request->backupRetentionPeriod;
        $query['BackupLog']                     = $request->backupLog;
        $query['LogBackupRetentionPeriod']      = $request->logBackupRetentionPeriod;
        $query['OwnerAccount']                  = $request->ownerAccount;
        $query['EnableBackupLog']               = $request->enableBackupLog;
        $query['LocalLogRetentionHours']        = $request->localLogRetentionHours;
        $query['LocalLogRetentionSpace']        = $request->localLogRetentionSpace;
        $query['HighSpaceUsageProtection']      = $request->highSpaceUsageProtection;
        $query['LogBackupFrequency']            = $request->logBackupFrequency;
        $query['CompressType']                  = $request->compressType;
        $query['ArchiveBackupRetentionPeriod']  = $request->archiveBackupRetentionPeriod;
        $query['ArchiveBackupKeepPolicy']       = $request->archiveBackupKeepPolicy;
        $query['ArchiveBackupKeepCount']        = $request->archiveBackupKeepCount;
        $query['ReleasedKeepPolicy']            = $request->releasedKeepPolicy;
        $query['LogBackupLocalRetentionNumber'] = $request->logBackupLocalRetentionNumber;
        $query['Category']                      = $request->category;
        $query['BackupInterval']                = $request->backupInterval;
        $query['BackupMethod']                  = $request->backupMethod;
        $req                                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyBackupPolicy',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
     * @param ModifyCollationTimeZoneRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyCollationTimeZoneResponse
     */
    public function modifyCollationTimeZoneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['Collation']            = $request->collation;
        $query['Timezone']             = $request->timezone;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyCollationTimeZone',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyCollationTimeZoneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyCollationTimeZoneRequest $request
     *
     * @return ModifyCollationTimeZoneResponse
     */
    public function modifyCollationTimeZone($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCollationTimeZoneWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDasInstanceConfigRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyDasInstanceConfigResponse
     */
    public function modifyDasInstanceConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['ClientToken']          = $request->clientToken;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['StorageAutoScale']     = $request->storageAutoScale;
        $query['StorageThreshold']     = $request->storageThreshold;
        $query['StorageUpperBound']    = $request->storageUpperBound;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyDasInstanceConfig',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyDasInstanceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyDasInstanceConfigRequest $request
     *
     * @return ModifyDasInstanceConfigResponse
     */
    public function modifyDasInstanceConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDasInstanceConfigWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDBDescriptionRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyDBDescriptionResponse
     */
    public function modifyDBDescriptionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['DBName']               = $request->DBName;
        $query['DBDescription']        = $request->DBDescription;
        $query['OwnerAccount']         = $request->ownerAccount;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyDBDescription',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyDBDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyDBDescriptionRequest $request
     *
     * @return ModifyDBDescriptionResponse
     */
    public function modifyDBDescription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBDescriptionWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDBInstanceAutoUpgradeMinorVersionRequest $request
     * @param RuntimeOptions                                 $runtime
     *
     * @return ModifyDBInstanceAutoUpgradeMinorVersionResponse
     */
    public function modifyDBInstanceAutoUpgradeMinorVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                            = [];
        $query['OwnerId']                 = $request->ownerId;
        $query['ResourceOwnerAccount']    = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']         = $request->resourceOwnerId;
        $query['ClientToken']             = $request->clientToken;
        $query['DBInstanceId']            = $request->DBInstanceId;
        $query['AutoUpgradeMinorVersion'] = $request->autoUpgradeMinorVersion;
        $req                              = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyDBInstanceAutoUpgradeMinorVersion',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyDBInstanceAutoUpgradeMinorVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyDBInstanceAutoUpgradeMinorVersionRequest $request
     *
     * @return ModifyDBInstanceAutoUpgradeMinorVersionResponse
     */
    public function modifyDBInstanceAutoUpgradeMinorVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceAutoUpgradeMinorVersionWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDBInstanceConnectionModeRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ModifyDBInstanceConnectionModeResponse
     */
    public function modifyDBInstanceConnectionModeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['ConnectionMode']       = $request->connectionMode;
        $query['OwnerAccount']         = $request->ownerAccount;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyDBInstanceConnectionMode',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyDBInstanceConnectionModeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyDBInstanceConnectionModeRequest $request
     *
     * @return ModifyDBInstanceConnectionModeResponse
     */
    public function modifyDBInstanceConnectionMode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceConnectionModeWithOptions($request, $runtime);
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
        $query                            = [];
        $query['OwnerId']                 = $request->ownerId;
        $query['ResourceOwnerAccount']    = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']         = $request->resourceOwnerId;
        $query['DBInstanceId']            = $request->DBInstanceId;
        $query['CurrentConnectionString'] = $request->currentConnectionString;
        $query['ConnectionStringPrefix']  = $request->connectionStringPrefix;
        $query['Port']                    = $request->port;
        $query['OwnerAccount']            = $request->ownerAccount;
        $req                              = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyDBInstanceConnectionString',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyDBInstanceConnectionStringResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ModifyDBInstanceDescriptionRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyDBInstanceDescriptionResponse
     */
    public function modifyDBInstanceDescriptionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                          = [];
        $query['OwnerId']               = $request->ownerId;
        $query['ResourceOwnerAccount']  = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']       = $request->resourceOwnerId;
        $query['DBInstanceId']          = $request->DBInstanceId;
        $query['DBInstanceDescription'] = $request->DBInstanceDescription;
        $query['OwnerAccount']          = $request->ownerAccount;
        $req                            = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyDBInstanceDescription',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
     * @param ModifyDBInstanceHAConfigRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyDBInstanceHAConfigResponse
     */
    public function modifyDBInstanceHAConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['SyncMode']             = $request->syncMode;
        $query['HAMode']               = $request->HAMode;
        $query['DbInstanceId']         = $request->dbInstanceId;
        $query['OwnerAccount']         = $request->ownerAccount;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyDBInstanceHAConfig',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
     * @param ModifyDBInstanceMaintainTimeRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ModifyDBInstanceMaintainTimeResponse
     */
    public function modifyDBInstanceMaintainTimeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['ClientToken']          = $request->clientToken;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['MaintainTime']         = $request->maintainTime;
        $query['OwnerAccount']         = $request->ownerAccount;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyDBInstanceMaintainTime',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyDBInstanceMaintainTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ModifyDBInstanceMonitorRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyDBInstanceMonitorResponse
     */
    public function modifyDBInstanceMonitorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['ClientToken']          = $request->clientToken;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['Period']               = $request->period;
        $query['OwnerAccount']         = $request->ownerAccount;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyDBInstanceMonitor',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyDBInstanceMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ModifyDBInstanceNetworkExpireTimeRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return ModifyDBInstanceNetworkExpireTimeResponse
     */
    public function modifyDBInstanceNetworkExpireTimeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['ConnectionString']     = $request->connectionString;
        $query['ClassicExpiredDays']   = $request->classicExpiredDays;
        $query['OwnerAccount']         = $request->ownerAccount;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyDBInstanceNetworkExpireTime',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyDBInstanceNetworkExpireTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyDBInstanceNetworkExpireTimeRequest $request
     *
     * @return ModifyDBInstanceNetworkExpireTimeResponse
     */
    public function modifyDBInstanceNetworkExpireTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceNetworkExpireTimeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDBInstanceNetworkTypeRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyDBInstanceNetworkTypeResponse
     */
    public function modifyDBInstanceNetworkTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                                         = [];
        $query['OwnerId']                              = $request->ownerId;
        $query['ResourceOwnerAccount']                 = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']                      = $request->resourceOwnerId;
        $query['DBInstanceId']                         = $request->DBInstanceId;
        $query['RetainClassic']                        = $request->retainClassic;
        $query['ClassicExpiredDays']                   = $request->classicExpiredDays;
        $query['InstanceNetworkType']                  = $request->instanceNetworkType;
        $query['ReadWriteSplittingClassicExpiredDays'] = $request->readWriteSplittingClassicExpiredDays;
        $query['VPCId']                                = $request->VPCId;
        $query['VSwitchId']                            = $request->vSwitchId;
        $query['PrivateIpAddress']                     = $request->privateIpAddress;
        $query['ReadWriteSplittingPrivateIpAddress']   = $request->readWriteSplittingPrivateIpAddress;
        $query['OwnerAccount']                         = $request->ownerAccount;
        $req                                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyDBInstanceNetworkType',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyDBInstanceNetworkTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ModifyDBInstancePayTypeRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyDBInstancePayTypeResponse
     */
    public function modifyDBInstancePayTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['DBInstanceId']    = $request->DBInstanceId;
        $query['UsedTime']        = $request->usedTime;
        $query['PayType']         = $request->payType;
        $query['Period']          = $request->period;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyDBInstancePayType',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyDBInstancePayTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyDBInstancePayTypeRequest $request
     *
     * @return ModifyDBInstancePayTypeResponse
     */
    public function modifyDBInstancePayType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstancePayTypeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDBInstanceProxyConfigurationRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return ModifyDBInstanceProxyConfigurationResponse
     */
    public function modifyDBInstanceProxyConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                            = [];
        $query['OwnerId']                 = $request->ownerId;
        $query['ResourceOwnerAccount']    = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']         = $request->resourceOwnerId;
        $query['DBInstanceId']            = $request->DBInstanceId;
        $query['ProxyConfigurationKey']   = $request->proxyConfigurationKey;
        $query['ProxyConfigurationValue'] = $request->proxyConfigurationValue;
        $req                              = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyDBInstanceProxyConfiguration',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyDBInstanceProxyConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyDBInstanceProxyConfigurationRequest $request
     *
     * @return ModifyDBInstanceProxyConfigurationResponse
     */
    public function modifyDBInstanceProxyConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceProxyConfigurationWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDBInstanceSpecRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyDBInstanceSpecResponse
     */
    public function modifyDBInstanceSpecWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                          = [];
        $query['OwnerId']               = $request->ownerId;
        $query['ResourceOwnerAccount']  = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']       = $request->resourceOwnerId;
        $query['DBInstanceId']          = $request->DBInstanceId;
        $query['DBInstanceClass']       = $request->DBInstanceClass;
        $query['DBInstanceStorage']     = $request->DBInstanceStorage;
        $query['PayType']               = $request->payType;
        $query['OwnerAccount']          = $request->ownerAccount;
        $query['EffectiveTime']         = $request->effectiveTime;
        $query['EngineVersion']         = $request->engineVersion;
        $query['DBInstanceStorageType'] = $request->DBInstanceStorageType;
        $query['Direction']             = $request->direction;
        $query['SourceBiz']             = $request->sourceBiz;
        $query['DedicatedHostGroupId']  = $request->dedicatedHostGroupId;
        $query['ZoneId']                = $request->zoneId;
        $req                            = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyDBInstanceSpec',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyDBInstanceSpecResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ModifyDBInstanceSSLRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyDBInstanceSSLResponse
     */
    public function modifyDBInstanceSSLWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                             = [];
        $query['OwnerId']                  = $request->ownerId;
        $query['ResourceOwnerAccount']     = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']          = $request->resourceOwnerId;
        $query['DBInstanceId']             = $request->DBInstanceId;
        $query['ConnectionString']         = $request->connectionString;
        $query['OwnerAccount']             = $request->ownerAccount;
        $query['SSLEnabled']               = $request->SSLEnabled;
        $query['CAType']                   = $request->CAType;
        $query['ServerCert']               = $request->serverCert;
        $query['ServerKey']                = $request->serverKey;
        $query['ClientCAEnabled']          = $request->clientCAEnabled;
        $query['ClientCACert']             = $request->clientCACert;
        $query['ClientCrlEnabled']         = $request->clientCrlEnabled;
        $query['ClientCertRevocationList'] = $request->clientCertRevocationList;
        $query['ACL']                      = $request->ACL;
        $query['ReplicationACL']           = $request->replicationACL;
        $req                               = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyDBInstanceSSL',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyDBInstanceSSLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ModifyDBInstanceTDERequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyDBInstanceTDEResponse
     */
    public function modifyDBInstanceTDEWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['TDEStatus']            = $request->TDEStatus;
        $query['DBName']               = $request->DBName;
        $query['OwnerAccount']         = $request->ownerAccount;
        $query['EncryptionKey']        = $request->encryptionKey;
        $query['RoleArn']              = $request->roleArn;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyDBInstanceTDE',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyDBInstanceTDEResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ModifyDBProxyRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ModifyDBProxyResponse
     */
    public function modifyDBProxyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['ConfigDBProxyService'] = $request->configDBProxyService;
        $query['DBProxyInstanceNum']   = $request->DBProxyInstanceNum;
        $query['RegionId']             = $request->regionId;
        $query['InstanceNetworkType']  = $request->instanceNetworkType;
        $query['VPCId']                = $request->VPCId;
        $query['VSwitchId']            = $request->vSwitchId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyDBProxy',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyDBProxyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyDBProxyRequest $request
     *
     * @return ModifyDBProxyResponse
     */
    public function modifyDBProxy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBProxyWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDBProxyEndpointRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyDBProxyEndpointResponse
     */
    public function modifyDBProxyEndpointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                                     = [];
        $query['OwnerId']                          = $request->ownerId;
        $query['ResourceOwnerAccount']             = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']                  = $request->resourceOwnerId;
        $query['DBInstanceId']                     = $request->DBInstanceId;
        $query['DBProxyEndpointId']                = $request->DBProxyEndpointId;
        $query['ConfigDBProxyFeatures']            = $request->configDBProxyFeatures;
        $query['RegionId']                         = $request->regionId;
        $query['ReadOnlyInstanceMaxDelayTime']     = $request->readOnlyInstanceMaxDelayTime;
        $query['ReadOnlyInstanceDistributionType'] = $request->readOnlyInstanceDistributionType;
        $query['ReadOnlyInstanceWeight']           = $request->readOnlyInstanceWeight;
        $query['DBInstanceId']                     = $request->DBInstanceId;
        $query['DbEndpointOperator']               = $request->dbEndpointOperator;
        $query['DbEndpointAliases']                = $request->dbEndpointAliases;
        $query['DbEndpointType']                   = $request->dbEndpointType;
        $query['DbEndpointReadWriteMode']          = $request->dbEndpointReadWriteMode;
        $req                                       = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyDBProxyEndpoint',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyDBProxyEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyDBProxyEndpointRequest $request
     *
     * @return ModifyDBProxyEndpointResponse
     */
    public function modifyDBProxyEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBProxyEndpointWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDBProxyEndpointAddressRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ModifyDBProxyEndpointAddressResponse
     */
    public function modifyDBProxyEndpointAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                                = [];
        $query['OwnerId']                     = $request->ownerId;
        $query['ResourceOwnerAccount']        = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']             = $request->resourceOwnerId;
        $query['DBInstanceId']                = $request->DBInstanceId;
        $query['DBInstanceId']                = $request->DBInstanceId;
        $query['DBProxyEndpointId']           = $request->DBProxyEndpointId;
        $query['DBProxyNewConnectString']     = $request->DBProxyNewConnectString;
        $query['DBProxyNewConnectStringPort'] = $request->DBProxyNewConnectStringPort;
        $query['DBProxyConnectStringNetType'] = $request->DBProxyConnectStringNetType;
        $req                                  = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyDBProxyEndpointAddress',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyDBProxyEndpointAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyDBProxyEndpointAddressRequest $request
     *
     * @return ModifyDBProxyEndpointAddressResponse
     */
    public function modifyDBProxyEndpointAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBProxyEndpointAddressWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDBProxyInstanceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyDBProxyInstanceResponse
     */
    public function modifyDBProxyInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                          = [];
        $query['OwnerId']               = $request->ownerId;
        $query['ResourceOwnerAccount']  = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']       = $request->resourceOwnerId;
        $query['DBInstanceId']          = $request->DBInstanceId;
        $query['DBProxyInstanceType']   = $request->DBProxyInstanceType;
        $query['DBProxyInstanceNum']    = $request->DBProxyInstanceNum;
        $query['EffectiveTime']         = $request->effectiveTime;
        $query['EffectiveSpecificTime'] = $request->effectiveSpecificTime;
        $query['RegionId']              = $request->regionId;
        $query['DBInstanceId']          = $request->DBInstanceId;
        $req                            = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyDBProxyInstance',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyDBProxyInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyDBProxyInstanceRequest $request
     *
     * @return ModifyDBProxyInstanceResponse
     */
    public function modifyDBProxyInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBProxyInstanceWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDbProxyInstanceSslRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyDbProxyInstanceSslResponse
     */
    public function modifyDbProxyInstanceSslWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['RegionId']             = $request->regionId;
        $query['DbInstanceId']         = $request->dbInstanceId;
        $query['DbInstanceId']         = $request->dbInstanceId;
        $query['DbProxyEndpointId']    = $request->dbProxyEndpointId;
        $query['DbProxyConnectString'] = $request->dbProxyConnectString;
        $query['DbProxySslEnabled']    = $request->dbProxySslEnabled;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyDbProxyInstanceSsl',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyDbProxyInstanceSslResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyDbProxyInstanceSslRequest $request
     *
     * @return ModifyDbProxyInstanceSslResponse
     */
    public function modifyDbProxyInstanceSsl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDbProxyInstanceSslWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDedicatedHostAccountRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyDedicatedHostAccountResponse
     */
    public function modifyDedicatedHostAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['DedicatedHostId']      = $request->dedicatedHostId;
        $query['AccountName']          = $request->accountName;
        $query['AccountPassword']      = $request->accountPassword;
        $query['RegionId']             = $request->regionId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyDedicatedHostAccount',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyDedicatedHostAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyDedicatedHostAccountRequest $request
     *
     * @return ModifyDedicatedHostAccountResponse
     */
    public function modifyDedicatedHostAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDedicatedHostAccountWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDedicatedHostAttributeRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ModifyDedicatedHostAttributeResponse
     */
    public function modifyDedicatedHostAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['RegionId']             = $request->regionId;
        $query['DedicatedHostId']      = $request->dedicatedHostId;
        $query['HostName']             = $request->hostName;
        $query['AllocationStatus']     = $request->allocationStatus;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyDedicatedHostAttribute',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyDedicatedHostAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyDedicatedHostAttributeRequest $request
     *
     * @return ModifyDedicatedHostAttributeResponse
     */
    public function modifyDedicatedHostAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDedicatedHostAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDedicatedHostGroupAttributeRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return ModifyDedicatedHostGroupAttributeResponse
     */
    public function modifyDedicatedHostGroupAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                           = [];
        $query['OwnerId']                = $request->ownerId;
        $query['ResourceOwnerAccount']   = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']        = $request->resourceOwnerId;
        $query['RegionId']               = $request->regionId;
        $query['DedicatedHostGroupId']   = $request->dedicatedHostGroupId;
        $query['DedicatedHostGroupDesc'] = $request->dedicatedHostGroupDesc;
        $query['CpuAllocationRatio']     = $request->cpuAllocationRatio;
        $query['MemAllocationRatio']     = $request->memAllocationRatio;
        $query['DiskAllocationRatio']    = $request->diskAllocationRatio;
        $query['AllocationPolicy']       = $request->allocationPolicy;
        $query['HostReplacePolicy']      = $request->hostReplacePolicy;
        $req                             = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyDedicatedHostGroupAttribute',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyDedicatedHostGroupAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyDedicatedHostGroupAttributeRequest $request
     *
     * @return ModifyDedicatedHostGroupAttributeResponse
     */
    public function modifyDedicatedHostGroupAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDedicatedHostGroupAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDedicatedHostUserRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyDedicatedHostUserResponse
     */
    public function modifyDedicatedHostUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['DedicatedHostName']    = $request->dedicatedHostName;
        $query['UserName']             = $request->userName;
        $query['OldPassword']          = $request->oldPassword;
        $query['NewPassword']          = $request->newPassword;
        $query['RegionId']             = $request->regionId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyDedicatedHostUser',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyDedicatedHostUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyDedicatedHostUserRequest $request
     *
     * @return ModifyDedicatedHostUserResponse
     */
    public function modifyDedicatedHostUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDedicatedHostUserWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDTCSecurityIpHostsForSQLServerRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return ModifyDTCSecurityIpHostsForSQLServerResponse
     */
    public function modifyDTCSecurityIpHostsForSQLServerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['SecurityToken']        = $request->securityToken;
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['OwnerAccount']         = $request->ownerAccount;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['SecurityIpHosts']      = $request->securityIpHosts;
        $query['WhiteListGroupName']   = $request->whiteListGroupName;
        $query['RegionId']             = $request->regionId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyDTCSecurityIpHostsForSQLServer',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyDTCSecurityIpHostsForSQLServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyDTCSecurityIpHostsForSQLServerRequest $request
     *
     * @return ModifyDTCSecurityIpHostsForSQLServerResponse
     */
    public function modifyDTCSecurityIpHostsForSQLServer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDTCSecurityIpHostsForSQLServerWithOptions($request, $runtime);
    }

    /**
     * @param ModifyHADiagnoseConfigRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyHADiagnoseConfigResponse
     */
    public function modifyHADiagnoseConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['TcpConnectionType']    = $request->tcpConnectionType;
        $query['RegionId']             = $request->regionId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyHADiagnoseConfig',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyHADiagnoseConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyHADiagnoseConfigRequest $request
     *
     * @return ModifyHADiagnoseConfigResponse
     */
    public function modifyHADiagnoseConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyHADiagnoseConfigWithOptions($request, $runtime);
    }

    /**
     * @param ModifyHASwitchConfigRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyHASwitchConfigResponse
     */
    public function modifyHASwitchConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['HAConfig']             = $request->HAConfig;
        $query['ManualHATime']         = $request->manualHATime;
        $query['RegionId']             = $request->regionId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyHASwitchConfig',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyHASwitchConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyHASwitchConfigRequest $request
     *
     * @return ModifyHASwitchConfigResponse
     */
    public function modifyHASwitchConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyHASwitchConfigWithOptions($request, $runtime);
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
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['RegionId']             = $request->regionId;
        $query['ClientToken']          = $request->clientToken;
        $query['OwnerAccount']         = $request->ownerAccount;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['Duration']             = $request->duration;
        $query['AutoRenew']            = $request->autoRenew;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyInstanceAutoRenewalAttribute',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyInstanceAutoRenewalAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ModifyInstanceCrossBackupPolicyRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ModifyInstanceCrossBackupPolicyResponse
     */
    public function modifyInstanceCrossBackupPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['RegionId']             = $request->regionId;
        $query['CrossBackupType']      = $request->crossBackupType;
        $query['LogBackupEnabled']     = $request->logBackupEnabled;
        $query['BackupEnabled']        = $request->backupEnabled;
        $query['CrossBackupRegion']    = $request->crossBackupRegion;
        $query['RetentType']           = $request->retentType;
        $query['Retention']            = $request->retention;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyInstanceCrossBackupPolicy',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyInstanceCrossBackupPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyInstanceCrossBackupPolicyRequest $request
     *
     * @return ModifyInstanceCrossBackupPolicyResponse
     */
    public function modifyInstanceCrossBackupPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceCrossBackupPolicyWithOptions($request, $runtime);
    }

    /**
     * @param ModifyParameterRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ModifyParameterResponse
     */
    public function modifyParameterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['ClientToken']          = $request->clientToken;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['Parameters']           = $request->parameters;
        $query['Forcerestart']         = $request->forcerestart;
        $query['OwnerAccount']         = $request->ownerAccount;
        $query['ParameterGroupId']     = $request->parameterGroupId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyParameter',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyParameterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyParameterRequest $request
     *
     * @return ModifyParameterResponse
     */
    public function modifyParameter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyParameterWithOptions($request, $runtime);
    }

    /**
     * @param ModifyParameterGroupRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyParameterGroupResponse
     */
    public function modifyParameterGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['ParameterGroupId']     = $request->parameterGroupId;
        $query['ParameterGroupName']   = $request->parameterGroupName;
        $query['ParameterGroupDesc']   = $request->parameterGroupDesc;
        $query['Parameters']           = $request->parameters;
        $query['RegionId']             = $request->regionId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyParameterGroup',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyParameterGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ModifyReadonlyInstanceDelayReplicationTimeRequest $request
     * @param RuntimeOptions                                    $runtime
     *
     * @return ModifyReadonlyInstanceDelayReplicationTimeResponse
     */
    public function modifyReadonlyInstanceDelayReplicationTimeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                           = [];
        $query['OwnerId']                = $request->ownerId;
        $query['ResourceOwnerAccount']   = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']        = $request->resourceOwnerId;
        $query['DBInstanceId']           = $request->DBInstanceId;
        $query['ReadSQLReplicationTime'] = $request->readSQLReplicationTime;
        $req                             = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyReadonlyInstanceDelayReplicationTime',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyReadonlyInstanceDelayReplicationTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyReadonlyInstanceDelayReplicationTimeRequest $request
     *
     * @return ModifyReadonlyInstanceDelayReplicationTimeResponse
     */
    public function modifyReadonlyInstanceDelayReplicationTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyReadonlyInstanceDelayReplicationTimeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyReadWriteSplittingConnectionRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return ModifyReadWriteSplittingConnectionResponse
     */
    public function modifyReadWriteSplittingConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                           = [];
        $query['OwnerId']                = $request->ownerId;
        $query['ResourceOwnerAccount']   = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']        = $request->resourceOwnerId;
        $query['OwnerAccount']           = $request->ownerAccount;
        $query['DBInstanceId']           = $request->DBInstanceId;
        $query['ConnectionStringPrefix'] = $request->connectionStringPrefix;
        $query['Port']                   = $request->port;
        $query['MaxDelayTime']           = $request->maxDelayTime;
        $query['DistributionType']       = $request->distributionType;
        $query['Weight']                 = $request->weight;
        $req                             = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyReadWriteSplittingConnection',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyReadWriteSplittingConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyReadWriteSplittingConnectionRequest $request
     *
     * @return ModifyReadWriteSplittingConnectionResponse
     */
    public function modifyReadWriteSplittingConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyReadWriteSplittingConnectionWithOptions($request, $runtime);
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
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['ClientToken']          = $request->clientToken;
        $query['OwnerAccount']         = $request->ownerAccount;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['ResourceGroupId']      = $request->resourceGroupId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyResourceGroup',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['SecurityGroupId']      = $request->securityGroupId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifySecurityGroupConfiguration',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifySecurityGroupConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                               = [];
        $query['ResourceOwnerId']            = $request->resourceOwnerId;
        $query['DBInstanceId']               = $request->DBInstanceId;
        $query['SecurityIps']                = $request->securityIps;
        $query['DBInstanceIPArrayName']      = $request->DBInstanceIPArrayName;
        $query['DBInstanceIPArrayAttribute'] = $request->DBInstanceIPArrayAttribute;
        $query['SecurityIPType']             = $request->securityIPType;
        $query['WhitelistNetworkType']       = $request->whitelistNetworkType;
        $query['ModifyMode']                 = $request->modifyMode;
        $req                                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifySecurityIps',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifySecurityIpsResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ModifySQLCollectorPolicyRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifySQLCollectorPolicyResponse
     */
    public function modifySQLCollectorPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['SQLCollectorStatus']   = $request->SQLCollectorStatus;
        $query['OwnerAccount']         = $request->ownerAccount;
        $query['ResourceGroupId']      = $request->resourceGroupId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifySQLCollectorPolicy',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifySQLCollectorPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifySQLCollectorPolicyRequest $request
     *
     * @return ModifySQLCollectorPolicyResponse
     */
    public function modifySQLCollectorPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySQLCollectorPolicyWithOptions($request, $runtime);
    }

    /**
     * @param ModifySQLCollectorRetentionRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifySQLCollectorRetentionResponse
     */
    public function modifySQLCollectorRetentionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['SecurityToken']        = $request->securityToken;
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['OwnerAccount']         = $request->ownerAccount;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['ConfigValue']          = $request->configValue;
        $query['ResourceGroupId']      = $request->resourceGroupId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifySQLCollectorRetention',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifySQLCollectorRetentionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifySQLCollectorRetentionRequest $request
     *
     * @return ModifySQLCollectorRetentionResponse
     */
    public function modifySQLCollectorRetention($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySQLCollectorRetentionWithOptions($request, $runtime);
    }

    /**
     * @param PurgeDBInstanceLogRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return PurgeDBInstanceLogResponse
     */
    public function purgeDBInstanceLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['ClientToken']          = $request->clientToken;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['OwnerAccount']         = $request->ownerAccount;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'PurgeDBInstanceLog',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return PurgeDBInstanceLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PurgeDBInstanceLogRequest $request
     *
     * @return PurgeDBInstanceLogResponse
     */
    public function purgeDBInstanceLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->purgeDBInstanceLogWithOptions($request, $runtime);
    }

    /**
     * @param RebuildDBInstanceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return RebuildDBInstanceResponse
     */
    public function rebuildDBInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['RegionId']             = $request->regionId;
        $query['DedicatedHostGroupId'] = $request->dedicatedHostGroupId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['DedicatedHostId']      = $request->dedicatedHostId;
        $query['RebuildNodeType']      = $request->rebuildNodeType;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'RebuildDBInstance',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RebuildDBInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RebuildDBInstanceRequest $request
     *
     * @return RebuildDBInstanceResponse
     */
    public function rebuildDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rebuildDBInstanceWithOptions($request, $runtime);
    }

    /**
     * @param RecoveryDBInstanceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return RecoveryDBInstanceResponse
     */
    public function recoveryDBInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                          = [];
        $query['ResourceOwnerId']       = $request->resourceOwnerId;
        $query['DBInstanceClass']       = $request->DBInstanceClass;
        $query['DBInstanceStorage']     = $request->DBInstanceStorage;
        $query['PayType']               = $request->payType;
        $query['InstanceNetworkType']   = $request->instanceNetworkType;
        $query['DBInstanceId']          = $request->DBInstanceId;
        $query['TargetDBInstanceId']    = $request->targetDBInstanceId;
        $query['DbNames']               = $request->dbNames;
        $query['BackupId']              = $request->backupId;
        $query['RestoreTime']           = $request->restoreTime;
        $query['VPCId']                 = $request->VPCId;
        $query['VSwitchId']             = $request->vSwitchId;
        $query['PrivateIpAddress']      = $request->privateIpAddress;
        $query['UsedTime']              = $request->usedTime;
        $query['Period']                = $request->period;
        $query['DBInstanceStorageType'] = $request->DBInstanceStorageType;
        $req                            = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'RecoveryDBInstance',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RecoveryDBInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecoveryDBInstanceRequest $request
     *
     * @return RecoveryDBInstanceResponse
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
        $query                            = [];
        $query['OwnerId']                 = $request->ownerId;
        $query['ResourceOwnerAccount']    = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']         = $request->resourceOwnerId;
        $query['DBInstanceId']            = $request->DBInstanceId;
        $query['CurrentConnectionString'] = $request->currentConnectionString;
        $query['InstanceNetworkType']     = $request->instanceNetworkType;
        $query['OwnerAccount']            = $request->ownerAccount;
        $req                              = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ReleaseInstanceConnection',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
     * @param ReleaseInstancePublicConnectionRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ReleaseInstancePublicConnectionResponse
     */
    public function releaseInstancePublicConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                            = [];
        $query['OwnerId']                 = $request->ownerId;
        $query['ResourceOwnerAccount']    = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']         = $request->resourceOwnerId;
        $query['DBInstanceId']            = $request->DBInstanceId;
        $query['CurrentConnectionString'] = $request->currentConnectionString;
        $query['OwnerAccount']            = $request->ownerAccount;
        $req                              = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ReleaseInstancePublicConnection',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ReleaseInstancePublicConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ReleaseReadWriteSplittingConnectionRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return ReleaseReadWriteSplittingConnectionResponse
     */
    public function releaseReadWriteSplittingConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['OwnerAccount']         = $request->ownerAccount;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ReleaseReadWriteSplittingConnection',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ReleaseReadWriteSplittingConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ReleaseReadWriteSplittingConnectionRequest $request
     *
     * @return ReleaseReadWriteSplittingConnectionResponse
     */
    public function releaseReadWriteSplittingConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseReadWriteSplittingConnectionWithOptions($request, $runtime);
    }

    /**
     * @param RemoveTagsFromResourceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return RemoveTagsFromResourceResponse
     */
    public function removeTagsFromResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['ClientToken']          = $request->clientToken;
        $query['proxyId']              = $request->proxyId;
        $query['RegionId']             = $request->regionId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['Tags']                 = $request->tags;
        $query['OwnerAccount']         = $request->ownerAccount;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'RemoveTagsFromResource',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RemoveTagsFromResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveTagsFromResourceRequest $request
     *
     * @return RemoveTagsFromResourceResponse
     */
    public function removeTagsFromResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeTagsFromResourceWithOptions($request, $runtime);
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
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['ClientToken']          = $request->clientToken;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['Period']               = $request->period;
        $query['AutoPay']              = $request->autoPay;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'RenewInstance',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
     * @param ReplaceDedicatedHostRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ReplaceDedicatedHostResponse
     */
    public function replaceDedicatedHostWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['RegionId']             = $request->regionId;
        $query['DedicatedHostId']      = $request->dedicatedHostId;
        $query['FailoverMode']         = $request->failoverMode;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ReplaceDedicatedHost',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ReplaceDedicatedHostResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ReplaceDedicatedHostRequest $request
     *
     * @return ReplaceDedicatedHostResponse
     */
    public function replaceDedicatedHost($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->replaceDedicatedHostWithOptions($request, $runtime);
    }

    /**
     * @param ResetAccountRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ResetAccountResponse
     */
    public function resetAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['AccountName']          = $request->accountName;
        $query['AccountPassword']      = $request->accountPassword;
        $query['OwnerAccount']         = $request->ownerAccount;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ResetAccount',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ResetAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ResetAccountRequest $request
     *
     * @return ResetAccountResponse
     */
    public function resetAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetAccountWithOptions($request, $runtime);
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
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['AccountName']          = $request->accountName;
        $query['AccountPassword']      = $request->accountPassword;
        $query['OwnerAccount']         = $request->ownerAccount;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ResetAccountPassword',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ResetAccountPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param RestartDBInstanceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return RestartDBInstanceResponse
     */
    public function restartDBInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['ClientToken']          = $request->clientToken;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['OwnerAccount']         = $request->ownerAccount;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'RestartDBInstance',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RestartDBInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RestartDedicatedHostRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return RestartDedicatedHostResponse
     */
    public function restartDedicatedHostWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['RegionId']             = $request->regionId;
        $query['DedicatedHostId']      = $request->dedicatedHostId;
        $query['FailoverMode']         = $request->failoverMode;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'RestartDedicatedHost',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RestartDedicatedHostResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RestartDedicatedHostRequest $request
     *
     * @return RestartDedicatedHostResponse
     */
    public function restartDedicatedHost($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restartDedicatedHostWithOptions($request, $runtime);
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
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['RegionId']             = $request->regionId;
        $query['ClientToken']          = $request->clientToken;
        $query['RestoreType']          = $request->restoreType;
        $query['BackupId']             = $request->backupId;
        $query['RestoreTime']          = $request->restoreTime;
        $query['SourceRegion']         = $request->sourceRegion;
        $query['SourceDBInstanceName'] = $request->sourceDBInstanceName;
        $query['TableMeta']            = $request->tableMeta;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'RestoreDdrTable',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
     * @param RestoreTableRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return RestoreTableResponse
     */
    public function restoreTableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['ClientToken']          = $request->clientToken;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['BackupId']             = $request->backupId;
        $query['RestoreTime']          = $request->restoreTime;
        $query['OwnerAccount']         = $request->ownerAccount;
        $query['TableMeta']            = $request->tableMeta;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'RestoreTable',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RestoreTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RestoreTableRequest $request
     *
     * @return RestoreTableResponse
     */
    public function restoreTable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restoreTableWithOptions($request, $runtime);
    }

    /**
     * @param RevokeAccountPrivilegeRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return RevokeAccountPrivilegeResponse
     */
    public function revokeAccountPrivilegeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['AccountName']          = $request->accountName;
        $query['DBName']               = $request->DBName;
        $query['OwnerAccount']         = $request->ownerAccount;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'RevokeAccountPrivilege',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RevokeAccountPrivilegeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RevokeAccountPrivilegeRequest $request
     *
     * @return RevokeAccountPrivilegeResponse
     */
    public function revokeAccountPrivilege($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revokeAccountPrivilegeWithOptions($request, $runtime);
    }

    /**
     * @param RevokeOperatorPermissionRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return RevokeOperatorPermissionResponse
     */
    public function revokeOperatorPermissionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['OwnerAccount']         = $request->ownerAccount;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'RevokeOperatorPermission',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RevokeOperatorPermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RevokeOperatorPermissionRequest $request
     *
     * @return RevokeOperatorPermissionResponse
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
        $query                                   = [];
        $query['OwnerId']                        = $request->ownerId;
        $query['ResourceOwnerAccount']           = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']                = $request->resourceOwnerId;
        $query['RegionId']                       = $request->regionId;
        $query['DedicatedHostGroupId']           = $request->dedicatedHostGroupId;
        $query['DBInstanceId']                   = $request->DBInstanceId;
        $query['TargetDedicatedHostIdForMaster'] = $request->targetDedicatedHostIdForMaster;
        $query['TargetDedicatedHostIdForSlave']  = $request->targetDedicatedHostIdForSlave;
        $query['TargetDedicatedHostIdForLog']    = $request->targetDedicatedHostIdForLog;
        $query['EffectiveTime']                  = $request->effectiveTime;
        $query['SpecifiedTime']                  = $request->specifiedTime;
        $query['TargetDBInstanceClass']          = $request->targetDBInstanceClass;
        $query['EngineVersion']                  = $request->engineVersion;
        $query['DBInstanceTransType']            = $request->DBInstanceTransType;
        $query['Storage']                        = $request->storage;
        $query['VSwitchId']                      = $request->vSwitchId;
        $query['ZoneId']                         = $request->zoneId;
        $req                                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'StartDBInstance',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
     * @param StopDBInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return StopDBInstanceResponse
     */
    public function stopDBInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['RegionId']             = $request->regionId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'StopDBInstance',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StopDBInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StopDBInstanceRequest $request
     *
     * @return StopDBInstanceResponse
     */
    public function stopDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopDBInstanceWithOptions($request, $runtime);
    }

    /**
     * @param SwitchDBInstanceHARequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SwitchDBInstanceHAResponse
     */
    public function switchDBInstanceHAWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['NodeId']               = $request->nodeId;
        $query['Force']                = $request->force;
        $query['OwnerAccount']         = $request->ownerAccount;
        $query['EffectiveTime']        = $request->effectiveTime;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SwitchDBInstanceHA',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SwitchDBInstanceHAResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param SwitchDBInstanceNetTypeRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return SwitchDBInstanceNetTypeResponse
     */
    public function switchDBInstanceNetTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                           = [];
        $query['OwnerId']                = $request->ownerId;
        $query['ResourceOwnerAccount']   = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']        = $request->resourceOwnerId;
        $query['ClientToken']            = $request->clientToken;
        $query['DBInstanceId']           = $request->DBInstanceId;
        $query['ConnectionStringPrefix'] = $request->connectionStringPrefix;
        $query['Port']                   = $request->port;
        $query['ConnectionStringType']   = $request->connectionStringType;
        $query['OwnerAccount']           = $request->ownerAccount;
        $req                             = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SwitchDBInstanceNetType',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SwitchDBInstanceNetTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SwitchDBInstanceNetTypeRequest $request
     *
     * @return SwitchDBInstanceNetTypeResponse
     */
    public function switchDBInstanceNetType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->switchDBInstanceNetTypeWithOptions($request, $runtime);
    }

    /**
     * @param SwitchDBInstanceVpcRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SwitchDBInstanceVpcResponse
     */
    public function switchDBInstanceVpcWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                     = [];
        $query['ResourceOwnerId']  = $request->resourceOwnerId;
        $query['DBInstanceId']     = $request->DBInstanceId;
        $query['VPCId']            = $request->VPCId;
        $query['VSwitchId']        = $request->vSwitchId;
        $query['PrivateIpAddress'] = $request->privateIpAddress;
        $req                       = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SwitchDBInstanceVpc',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SwitchDBInstanceVpcResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SwitchDBInstanceVpcRequest $request
     *
     * @return SwitchDBInstanceVpcResponse
     */
    public function switchDBInstanceVpc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->switchDBInstanceVpcWithOptions($request, $runtime);
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
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['RegionId']             = $request->regionId;
        $query['ResourceType']         = $request->resourceType;
        $query['ResourceId']           = $request->resourceId;
        $query['Tag']                  = $request->tag;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'TagResources',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
     * @param TerminateMigrateTaskRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return TerminateMigrateTaskResponse
     */
    public function terminateMigrateTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['MigrateTaskId']        = $request->migrateTaskId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'TerminateMigrateTask',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
     * @param TransformDBInstancePayTypeRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return TransformDBInstancePayTypeResponse
     */
    public function transformDBInstancePayTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['ClientToken']          = $request->clientToken;
        $query['OwnerAccount']         = $request->ownerAccount;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['UsedTime']             = $request->usedTime;
        $query['PayType']              = $request->payType;
        $query['Period']               = $request->period;
        $query['BusinessInfo']         = $request->businessInfo;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'TransformDBInstancePayType',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return TransformDBInstancePayTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param TransformDBInstancePayTypeRequest $request
     *
     * @return TransformDBInstancePayTypeResponse
     */
    public function transformDBInstancePayType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->transformDBInstancePayTypeWithOptions($request, $runtime);
    }

    /**
     * @param UnlockAccountRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UnlockAccountResponse
     */
    public function unlockAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['AccountName']          = $request->accountName;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UnlockAccount',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UnlockAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UnlockAccountRequest $request
     *
     * @return UnlockAccountResponse
     */
    public function unlockAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unlockAccountWithOptions($request, $runtime);
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
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['RegionId']             = $request->regionId;
        $query['ResourceType']         = $request->resourceType;
        $query['All']                  = $request->all;
        $query['ResourceId']           = $request->resourceId;
        $query['TagKey']               = $request->tagKey;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UntagResources',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
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

    /**
     * @param UpdateUserBackupFileRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateUserBackupFileResponse
     */
    public function updateUserBackupFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['BackupId']             = $request->backupId;
        $query['RegionId']             = $request->regionId;
        $query['Comment']              = $request->comment;
        $query['Retention']            = $request->retention;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UpdateUserBackupFile',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateUserBackupFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateUserBackupFileRequest $request
     *
     * @return UpdateUserBackupFileResponse
     */
    public function updateUserBackupFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUserBackupFileWithOptions($request, $runtime);
    }

    /**
     * @param UpgradeDBInstanceEngineVersionRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return UpgradeDBInstanceEngineVersionResponse
     */
    public function upgradeDBInstanceEngineVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['ClientToken']          = $request->clientToken;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['EngineVersion']        = $request->engineVersion;
        $query['OwnerAccount']         = $request->ownerAccount;
        $query['EffectiveTime']        = $request->effectiveTime;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UpgradeDBInstanceEngineVersion',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpgradeDBInstanceEngineVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param UpgradeDBInstanceKernelVersionRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return UpgradeDBInstanceKernelVersionResponse
     */
    public function upgradeDBInstanceKernelVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['UpgradeTime']          = $request->upgradeTime;
        $query['SwitchTime']           = $request->switchTime;
        $query['TargetMinorVersion']   = $request->targetMinorVersion;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UpgradeDBInstanceKernelVersion',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpgradeDBInstanceKernelVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpgradeDBInstanceKernelVersionRequest $request
     *
     * @return UpgradeDBInstanceKernelVersionResponse
     */
    public function upgradeDBInstanceKernelVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeDBInstanceKernelVersionWithOptions($request, $runtime);
    }

    /**
     * @param UpgradeDBProxyInstanceKernelVersionRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return UpgradeDBProxyInstanceKernelVersionResponse
     */
    public function upgradeDBProxyInstanceKernelVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['UpgradeTime']          = $request->upgradeTime;
        $query['SwitchTime']           = $request->switchTime;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UpgradeDBProxyInstanceKernelVersion',
            'version'     => '2014-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpgradeDBProxyInstanceKernelVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpgradeDBProxyInstanceKernelVersionRequest $request
     *
     * @return UpgradeDBProxyInstanceKernelVersionResponse
     */
    public function upgradeDBProxyInstanceKernelVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeDBProxyInstanceKernelVersionWithOptions($request, $runtime);
    }
}
