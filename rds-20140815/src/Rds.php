<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815;

use AlibabaCloud\Endpoint\Endpoint;
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
use AlibabaCloud\SDK\Rds\V20140815\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\ListTagResourcesResponse;
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
use AlibabaCloud\SDK\Rds\V20140815\Models\UpgradeDBInstanceEngineVersionRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\UpgradeDBInstanceEngineVersionResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\UpgradeDBInstanceKernelVersionRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\UpgradeDBInstanceKernelVersionResponse;
use AlibabaCloud\SDK\Rds\V20140815\Models\UpgradeDBProxyInstanceKernelVersionRequest;
use AlibabaCloud\SDK\Rds\V20140815\Models\UpgradeDBProxyInstanceKernelVersionResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddTagsToResourceResponse::fromMap($this->doRPCRequest('AddTagsToResource', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AllocateInstancePublicConnectionResponse::fromMap($this->doRPCRequest('AllocateInstancePublicConnection', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AllocateReadWriteSplittingConnectionResponse::fromMap($this->doRPCRequest('AllocateReadWriteSplittingConnection', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CalculateDBInstanceWeightResponse::fromMap($this->doRPCRequest('CalculateDBInstanceWeight', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CancelImportResponse::fromMap($this->doRPCRequest('CancelImport', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CheckAccountNameAvailableResponse::fromMap($this->doRPCRequest('CheckAccountNameAvailable', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CheckCloudResourceAuthorizedResponse::fromMap($this->doRPCRequest('CheckCloudResourceAuthorized', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CheckCreateDdrDBInstanceResponse::fromMap($this->doRPCRequest('CheckCreateDdrDBInstance', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CheckDBNameAvailableResponse::fromMap($this->doRPCRequest('CheckDBNameAvailable', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CheckInstanceExistResponse::fromMap($this->doRPCRequest('CheckInstanceExist', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ClearDedicatedHostResponse::fromMap($this->doRPCRequest('ClearDedicatedHost', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CloneDBInstanceResponse::fromMap($this->doRPCRequest('CloneDBInstance', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CloneParameterGroupResponse::fromMap($this->doRPCRequest('CloneParameterGroup', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CopyDatabaseResponse::fromMap($this->doRPCRequest('CopyDatabase', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CopyDatabaseBetweenInstancesResponse::fromMap($this->doRPCRequest('CopyDatabaseBetweenInstances', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateAccountResponse::fromMap($this->doRPCRequest('CreateAccount', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return CreateBackupResponse::fromMap($this->doRPCRequest('CreateBackup', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDatabaseResponse::fromMap($this->doRPCRequest('CreateDatabase', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDBInstanceResponse::fromMap($this->doRPCRequest('CreateDBInstance', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDBProxyEndpointAddressResponse::fromMap($this->doRPCRequest('CreateDBProxyEndpointAddress', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDdrInstanceResponse::fromMap($this->doRPCRequest('CreateDdrInstance', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDedicatedHostResponse::fromMap($this->doRPCRequest('CreateDedicatedHost', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDedicatedHostAccountResponse::fromMap($this->doRPCRequest('CreateDedicatedHostAccount', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDedicatedHostGroupResponse::fromMap($this->doRPCRequest('CreateDedicatedHostGroup', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDedicatedHostUserResponse::fromMap($this->doRPCRequest('CreateDedicatedHostUser', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDiagnosticReportResponse::fromMap($this->doRPCRequest('CreateDiagnosticReport', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateMigrateTaskRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateMigrateTaskResponse
     */
    public function createMigrateTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateMigrateTaskResponse::fromMap($this->doRPCRequest('CreateMigrateTask', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateMigrateTaskForSQLServerResponse::fromMap($this->doRPCRequest('CreateMigrateTaskForSQLServer', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateOnlineDatabaseTaskResponse::fromMap($this->doRPCRequest('CreateOnlineDatabaseTask', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateParameterGroupResponse::fromMap($this->doRPCRequest('CreateParameterGroup', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateReadOnlyDBInstanceResponse::fromMap($this->doRPCRequest('CreateReadOnlyDBInstance', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateTempDBInstanceResponse::fromMap($this->doRPCRequest('CreateTempDBInstance', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteAccountResponse::fromMap($this->doRPCRequest('DeleteAccount', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteBackupResponse::fromMap($this->doRPCRequest('DeleteBackup', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteBackupFileResponse::fromMap($this->doRPCRequest('DeleteBackupFile', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteDatabaseResponse::fromMap($this->doRPCRequest('DeleteDatabase', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteDBInstanceResponse::fromMap($this->doRPCRequest('DeleteDBInstance', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteDBProxyEndpointAddressResponse::fromMap($this->doRPCRequest('DeleteDBProxyEndpointAddress', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteDedicatedHostAccountResponse::fromMap($this->doRPCRequest('DeleteDedicatedHostAccount', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteDedicatedHostGroupResponse::fromMap($this->doRPCRequest('DeleteDedicatedHostGroup', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteParameterGroupResponse::fromMap($this->doRPCRequest('DeleteParameterGroup', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescibeImportsFromDatabaseRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescibeImportsFromDatabaseResponse
     */
    public function descibeImportsFromDatabaseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescibeImportsFromDatabaseResponse::fromMap($this->doRPCRequest('DescibeImportsFromDatabase', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAccountsResponse::fromMap($this->doRPCRequest('DescribeAccounts', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeActionEventPolicyResponse::fromMap($this->doRPCRequest('DescribeActionEventPolicy', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAvailableClassesResponse::fromMap($this->doRPCRequest('DescribeAvailableClasses', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAvailableCrossRegionResponse::fromMap($this->doRPCRequest('DescribeAvailableCrossRegion', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAvailableDedicatedHostClassesResponse::fromMap($this->doRPCRequest('DescribeAvailableDedicatedHostClasses', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAvailableDedicatedHostZonesResponse::fromMap($this->doRPCRequest('DescribeAvailableDedicatedHostZones', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAvailableRecoveryTimeResponse::fromMap($this->doRPCRequest('DescribeAvailableRecoveryTime', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAvailableResourceResponse::fromMap($this->doRPCRequest('DescribeAvailableResource', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAvailableZonesResponse::fromMap($this->doRPCRequest('DescribeAvailableZones', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeBackupDatabaseResponse::fromMap($this->doRPCRequest('DescribeBackupDatabase', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeBackupPolicyResponse::fromMap($this->doRPCRequest('DescribeBackupPolicy', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return DescribeBackupsResponse::fromMap($this->doRPCRequest('DescribeBackups', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return DescribeBackupTasksResponse::fromMap($this->doRPCRequest('DescribeBackupTasks', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeBinlogFilesResponse::fromMap($this->doRPCRequest('DescribeBinlogFiles', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCharacterSetNameResponse::fromMap($this->doRPCRequest('DescribeCharacterSetName', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCollationTimeZonesResponse::fromMap($this->doRPCRequest('DescribeCollationTimeZones', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCrossBackupMetaListResponse::fromMap($this->doRPCRequest('DescribeCrossBackupMetaList', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCrossRegionBackupDBInstanceResponse::fromMap($this->doRPCRequest('DescribeCrossRegionBackupDBInstance', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCrossRegionBackupsResponse::fromMap($this->doRPCRequest('DescribeCrossRegionBackups', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCrossRegionLogBackupFilesResponse::fromMap($this->doRPCRequest('DescribeCrossRegionLogBackupFiles', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDatabasesResponse::fromMap($this->doRPCRequest('DescribeDatabases', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDBInstanceAttributeResponse::fromMap($this->doRPCRequest('DescribeDBInstanceAttribute', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDBInstanceDetailResponse::fromMap($this->doRPCRequest('DescribeDBInstanceDetail', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeDBInstanceHAConfigRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeDBInstanceHAConfigResponse
     */
    public function describeDBInstanceHAConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDBInstanceHAConfigResponse::fromMap($this->doRPCRequest('DescribeDBInstanceHAConfig', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDBInstanceIPArrayListResponse::fromMap($this->doRPCRequest('DescribeDBInstanceIPArrayList', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDBInstanceIpHostnameResponse::fromMap($this->doRPCRequest('DescribeDBInstanceIpHostname', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDBInstanceMonitorResponse::fromMap($this->doRPCRequest('DescribeDBInstanceMonitor', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDBInstanceNetInfoResponse::fromMap($this->doRPCRequest('DescribeDBInstanceNetInfo', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDBInstancePerformanceResponse::fromMap($this->doRPCRequest('DescribeDBInstancePerformance', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDBInstanceProxyConfigurationResponse::fromMap($this->doRPCRequest('DescribeDBInstanceProxyConfiguration', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDBInstancesResponse::fromMap($this->doRPCRequest('DescribeDBInstances', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDBInstancesAsCsvResponse::fromMap($this->doRPCRequest('DescribeDBInstancesAsCsv', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDBInstancesByExpireTimeResponse::fromMap($this->doRPCRequest('DescribeDBInstancesByExpireTime', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDBInstancesByPerformanceResponse::fromMap($this->doRPCRequest('DescribeDBInstancesByPerformance', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDBInstancesForCloneResponse::fromMap($this->doRPCRequest('DescribeDBInstancesForClone', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDBInstanceSSLResponse::fromMap($this->doRPCRequest('DescribeDBInstanceSSL', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeDBInstanceTDERequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeDBInstanceTDEResponse
     */
    public function describeDBInstanceTDEWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDBInstanceTDEResponse::fromMap($this->doRPCRequest('DescribeDBInstanceTDE', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDBProxyResponse::fromMap($this->doRPCRequest('DescribeDBProxy', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDBProxyEndpointResponse::fromMap($this->doRPCRequest('DescribeDBProxyEndpoint', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDBProxyPerformanceResponse::fromMap($this->doRPCRequest('DescribeDBProxyPerformance', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDedicatedHostAttributeResponse::fromMap($this->doRPCRequest('DescribeDedicatedHostAttribute', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDedicatedHostGroupsResponse::fromMap($this->doRPCRequest('DescribeDedicatedHostGroups', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDedicatedHostImageCategoriesResponse::fromMap($this->doRPCRequest('DescribeDedicatedHostImageCategories', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDedicatedHostsResponse::fromMap($this->doRPCRequest('DescribeDedicatedHosts', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDetachedBackupsResponse::fromMap($this->doRPCRequest('DescribeDetachedBackups', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDiagnosticReportListResponse::fromMap($this->doRPCRequest('DescribeDiagnosticReportList', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDTCSecurityIpHostsForSQLServerResponse::fromMap($this->doRPCRequest('DescribeDTCSecurityIpHostsForSQLServer', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeErrorLogsResponse::fromMap($this->doRPCRequest('DescribeErrorLogs', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeEventsResponse::fromMap($this->doRPCRequest('DescribeEvents', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeHADiagnoseConfigResponse::fromMap($this->doRPCRequest('DescribeHADiagnoseConfig', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeHASwitchConfigResponse::fromMap($this->doRPCRequest('DescribeHASwitchConfig', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeInstanceAutoRenewalAttributeResponse::fromMap($this->doRPCRequest('DescribeInstanceAutoRenewalAttribute', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeInstanceCrossBackupPolicyResponse::fromMap($this->doRPCRequest('DescribeInstanceCrossBackupPolicy', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeInstanceKeywordsResponse::fromMap($this->doRPCRequest('DescribeInstanceKeywords', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLocalAvailableRecoveryTimeResponse::fromMap($this->doRPCRequest('DescribeLocalAvailableRecoveryTime', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLogBackupFilesResponse::fromMap($this->doRPCRequest('DescribeLogBackupFiles', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeMetaListResponse::fromMap($this->doRPCRequest('DescribeMetaList', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeMigrateTaskByIdResponse::fromMap($this->doRPCRequest('DescribeMigrateTaskById', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeMigrateTasksResponse::fromMap($this->doRPCRequest('DescribeMigrateTasks', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeMigrateTasksForSQLServerResponse::fromMap($this->doRPCRequest('DescribeMigrateTasksForSQLServer', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeModifyParameterLogResponse::fromMap($this->doRPCRequest('DescribeModifyParameterLog', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeOssDownloadsResponse::fromMap($this->doRPCRequest('DescribeOssDownloads', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeOssDownloadsForSQLServerResponse::fromMap($this->doRPCRequest('DescribeOssDownloadsForSQLServer', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeParameterGroupResponse::fromMap($this->doRPCRequest('DescribeParameterGroup', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeParameterGroupsResponse::fromMap($this->doRPCRequest('DescribeParameterGroups', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeParametersResponse::fromMap($this->doRPCRequest('DescribeParameters', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return DescribeParameterTemplatesResponse::fromMap($this->doRPCRequest('DescribeParameterTemplates', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return DescribePriceResponse::fromMap($this->doRPCRequest('DescribePrice', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRdsResourceSettingsResponse::fromMap($this->doRPCRequest('DescribeRdsResourceSettings', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeReadDBInstanceDelayResponse::fromMap($this->doRPCRequest('DescribeReadDBInstanceDelay', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return DescribeRegionsResponse::fromMap($this->doRPCRequest('DescribeRegions', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRenewalPriceResponse::fromMap($this->doRPCRequest('DescribeRenewalPrice', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeResourceUsageResponse::fromMap($this->doRPCRequest('DescribeResourceUsage', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSecurityGroupConfigurationResponse::fromMap($this->doRPCRequest('DescribeSecurityGroupConfiguration', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSlowLogRecordsResponse::fromMap($this->doRPCRequest('DescribeSlowLogRecords', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSlowLogsResponse::fromMap($this->doRPCRequest('DescribeSlowLogs', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSQLCollectorPolicyResponse::fromMap($this->doRPCRequest('DescribeSQLCollectorPolicy', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSQLCollectorRetentionResponse::fromMap($this->doRPCRequest('DescribeSQLCollectorRetention', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSQLLogFilesResponse::fromMap($this->doRPCRequest('DescribeSQLLogFiles', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSQLLogRecordsResponse::fromMap($this->doRPCRequest('DescribeSQLLogRecords', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSQLLogReportListResponse::fromMap($this->doRPCRequest('DescribeSQLLogReportList', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSQLLogReportsResponse::fromMap($this->doRPCRequest('DescribeSQLLogReports', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeTagsResponse::fromMap($this->doRPCRequest('DescribeTags', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeTasksResponse::fromMap($this->doRPCRequest('DescribeTasks', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DestroyDBInstanceResponse::fromMap($this->doRPCRequest('DestroyDBInstance', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DropDedicatedHostUserResponse::fromMap($this->doRPCRequest('DropDedicatedHostUser', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EvaluateDedicatedHostInstanceResourceResponse::fromMap($this->doRPCRequest('EvaluateDedicatedHostInstanceResource', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetDbProxyInstanceSslResponse::fromMap($this->doRPCRequest('GetDbProxyInstanceSsl', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GrantAccountPrivilegeResponse::fromMap($this->doRPCRequest('GrantAccountPrivilege', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GrantOperatorPermissionResponse::fromMap($this->doRPCRequest('GrantOperatorPermission', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ImportDatabaseBetweenInstancesResponse::fromMap($this->doRPCRequest('ImportDatabaseBetweenInstances', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return ListTagResourcesResponse::fromMap($this->doRPCRequest('ListTagResources', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param LockAccountRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return LockAccountResponse
     */
    public function lockAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return LockAccountResponse::fromMap($this->doRPCRequest('LockAccount', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return MigrateDBInstanceResponse::fromMap($this->doRPCRequest('MigrateDBInstance', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return MigrateSecurityIPModeResponse::fromMap($this->doRPCRequest('MigrateSecurityIPMode', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return MigrateToOtherZoneResponse::fromMap($this->doRPCRequest('MigrateToOtherZone', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return ModifyAccountDescriptionResponse::fromMap($this->doRPCRequest('ModifyAccountDescription', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyActionEventPolicyResponse::fromMap($this->doRPCRequest('ModifyActionEventPolicy', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyBackupPolicyResponse::fromMap($this->doRPCRequest('ModifyBackupPolicy', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyCollationTimeZoneResponse::fromMap($this->doRPCRequest('ModifyCollationTimeZone', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDasInstanceConfigResponse::fromMap($this->doRPCRequest('ModifyDasInstanceConfig', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDBDescriptionResponse::fromMap($this->doRPCRequest('ModifyDBDescription', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDBInstanceAutoUpgradeMinorVersionResponse::fromMap($this->doRPCRequest('ModifyDBInstanceAutoUpgradeMinorVersion', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDBInstanceConnectionModeResponse::fromMap($this->doRPCRequest('ModifyDBInstanceConnectionMode', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDBInstanceConnectionStringResponse::fromMap($this->doRPCRequest('ModifyDBInstanceConnectionString', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDBInstanceDescriptionResponse::fromMap($this->doRPCRequest('ModifyDBInstanceDescription', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDBInstanceHAConfigResponse::fromMap($this->doRPCRequest('ModifyDBInstanceHAConfig', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDBInstanceMaintainTimeResponse::fromMap($this->doRPCRequest('ModifyDBInstanceMaintainTime', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDBInstanceMonitorResponse::fromMap($this->doRPCRequest('ModifyDBInstanceMonitor', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDBInstanceNetworkExpireTimeResponse::fromMap($this->doRPCRequest('ModifyDBInstanceNetworkExpireTime', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDBInstanceNetworkTypeResponse::fromMap($this->doRPCRequest('ModifyDBInstanceNetworkType', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDBInstancePayTypeResponse::fromMap($this->doRPCRequest('ModifyDBInstancePayType', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDBInstanceProxyConfigurationResponse::fromMap($this->doRPCRequest('ModifyDBInstanceProxyConfiguration', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDBInstanceSpecResponse::fromMap($this->doRPCRequest('ModifyDBInstanceSpec', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDBInstanceSSLResponse::fromMap($this->doRPCRequest('ModifyDBInstanceSSL', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDBInstanceTDEResponse::fromMap($this->doRPCRequest('ModifyDBInstanceTDE', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDBProxyResponse::fromMap($this->doRPCRequest('ModifyDBProxy', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDBProxyEndpointResponse::fromMap($this->doRPCRequest('ModifyDBProxyEndpoint', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDBProxyEndpointAddressResponse::fromMap($this->doRPCRequest('ModifyDBProxyEndpointAddress', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDBProxyInstanceResponse::fromMap($this->doRPCRequest('ModifyDBProxyInstance', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDbProxyInstanceSslResponse::fromMap($this->doRPCRequest('ModifyDbProxyInstanceSsl', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDedicatedHostAccountResponse::fromMap($this->doRPCRequest('ModifyDedicatedHostAccount', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDedicatedHostAttributeResponse::fromMap($this->doRPCRequest('ModifyDedicatedHostAttribute', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDedicatedHostGroupAttributeResponse::fromMap($this->doRPCRequest('ModifyDedicatedHostGroupAttribute', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDedicatedHostUserResponse::fromMap($this->doRPCRequest('ModifyDedicatedHostUser', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDTCSecurityIpHostsForSQLServerResponse::fromMap($this->doRPCRequest('ModifyDTCSecurityIpHostsForSQLServer', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyHADiagnoseConfigResponse::fromMap($this->doRPCRequest('ModifyHADiagnoseConfig', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyHASwitchConfigResponse::fromMap($this->doRPCRequest('ModifyHASwitchConfig', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyInstanceAutoRenewalAttributeResponse::fromMap($this->doRPCRequest('ModifyInstanceAutoRenewalAttribute', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyInstanceCrossBackupPolicyResponse::fromMap($this->doRPCRequest('ModifyInstanceCrossBackupPolicy', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyParameterResponse::fromMap($this->doRPCRequest('ModifyParameter', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyParameterGroupResponse::fromMap($this->doRPCRequest('ModifyParameterGroup', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyReadonlyInstanceDelayReplicationTimeResponse::fromMap($this->doRPCRequest('ModifyReadonlyInstanceDelayReplicationTime', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyReadWriteSplittingConnectionResponse::fromMap($this->doRPCRequest('ModifyReadWriteSplittingConnection', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyResourceGroupResponse::fromMap($this->doRPCRequest('ModifyResourceGroup', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return ModifySecurityGroupConfigurationResponse::fromMap($this->doRPCRequest('ModifySecurityGroupConfiguration', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return ModifySecurityIpsResponse::fromMap($this->doRPCRequest('ModifySecurityIps', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifySQLCollectorPolicyResponse::fromMap($this->doRPCRequest('ModifySQLCollectorPolicy', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifySQLCollectorRetentionResponse::fromMap($this->doRPCRequest('ModifySQLCollectorRetention', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PurgeDBInstanceLogResponse::fromMap($this->doRPCRequest('PurgeDBInstanceLog', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RebuildDBInstanceResponse::fromMap($this->doRPCRequest('RebuildDBInstance', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RecoveryDBInstanceResponse::fromMap($this->doRPCRequest('RecoveryDBInstance', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ReleaseInstanceConnectionResponse::fromMap($this->doRPCRequest('ReleaseInstanceConnection', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ReleaseInstancePublicConnectionResponse::fromMap($this->doRPCRequest('ReleaseInstancePublicConnection', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ReleaseReadWriteSplittingConnectionResponse::fromMap($this->doRPCRequest('ReleaseReadWriteSplittingConnection', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemoveTagsFromResourceResponse::fromMap($this->doRPCRequest('RemoveTagsFromResource', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RenewInstanceResponse::fromMap($this->doRPCRequest('RenewInstance', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ReplaceDedicatedHostResponse::fromMap($this->doRPCRequest('ReplaceDedicatedHost', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ResetAccountResponse::fromMap($this->doRPCRequest('ResetAccount', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ResetAccountPasswordResponse::fromMap($this->doRPCRequest('ResetAccountPassword', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RestartDBInstanceResponse::fromMap($this->doRPCRequest('RestartDBInstance', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RestartDedicatedHostResponse::fromMap($this->doRPCRequest('RestartDedicatedHost', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RestoreDdrTableResponse::fromMap($this->doRPCRequest('RestoreDdrTable', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RestoreTableResponse::fromMap($this->doRPCRequest('RestoreTable', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RevokeAccountPrivilegeResponse::fromMap($this->doRPCRequest('RevokeAccountPrivilege', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RevokeOperatorPermissionResponse::fromMap($this->doRPCRequest('RevokeOperatorPermission', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StartDBInstanceResponse::fromMap($this->doRPCRequest('StartDBInstance', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StopDBInstanceResponse::fromMap($this->doRPCRequest('StopDBInstance', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SwitchDBInstanceHAResponse::fromMap($this->doRPCRequest('SwitchDBInstanceHA', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SwitchDBInstanceNetTypeResponse::fromMap($this->doRPCRequest('SwitchDBInstanceNetType', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SwitchDBInstanceVpcResponse::fromMap($this->doRPCRequest('SwitchDBInstanceVpc', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return TagResourcesResponse::fromMap($this->doRPCRequest('TagResources', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return TerminateMigrateTaskResponse::fromMap($this->doRPCRequest('TerminateMigrateTask', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return TransformDBInstancePayTypeResponse::fromMap($this->doRPCRequest('TransformDBInstancePayType', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UnlockAccountResponse::fromMap($this->doRPCRequest('UnlockAccount', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UntagResourcesResponse::fromMap($this->doRPCRequest('UntagResources', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param UpgradeDBInstanceEngineVersionRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return UpgradeDBInstanceEngineVersionResponse
     */
    public function upgradeDBInstanceEngineVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpgradeDBInstanceEngineVersionResponse::fromMap($this->doRPCRequest('UpgradeDBInstanceEngineVersion', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpgradeDBInstanceKernelVersionResponse::fromMap($this->doRPCRequest('UpgradeDBInstanceKernelVersion', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpgradeDBProxyInstanceKernelVersionResponse::fromMap($this->doRPCRequest('UpgradeDBProxyInstanceKernelVersion', '2014-08-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
