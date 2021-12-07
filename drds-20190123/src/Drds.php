<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Drds\V20190123\Models\ChangeAccountPasswordRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\ChangeAccountPasswordResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\ChangeInstanceAzoneRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\ChangeInstanceAzoneResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\ChangeInstanceNetworkRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\ChangeInstanceNetworkResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\CheckDrdsDbNameRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\CheckDrdsDbNameResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\CheckExpandStatusRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\CheckExpandStatusResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\CheckRdsSuperAccountRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\CheckRdsSuperAccountResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\CheckSqlAuditEnableStatusRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\CheckSqlAuditEnableStatusResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\ConfigureDrdsDbInstancesRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\ConfigureDrdsDbInstancesResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\CreateDrdsDBPreCheckRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\CreateDrdsDBPreCheckResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\CreateDrdsDBPreviewRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\CreateDrdsDBPreviewResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\CreateDrdsDBRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\CreateDrdsDBResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\CreateDrdsInstanceRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\CreateDrdsInstanceResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\CreateEvaluatePreCheckTaskRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\CreateEvaluatePreCheckTaskResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\CreateInstanceAccountRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\CreateInstanceAccountResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\CreateInstanceInternetAddressRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\CreateInstanceInternetAddressResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\CreateOrderForRdsRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\CreateOrderForRdsResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\CreateShardTaskRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\CreateShardTaskResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeBackMenuRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeBackMenuResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeBackupDbsRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeBackupDbsResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeBackupLocalRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeBackupLocalResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeBackupPolicyRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeBackupPolicyResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeBackupSetsRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeBackupSetsResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeBackupTimesRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeBackupTimesResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeBroadcastTablesRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeBroadcastTablesResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDataImportTaskReportRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDataImportTaskReportResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDbInstanceDbsRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDbInstanceDbsResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDbInstancesRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDbInstancesResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDBClusterRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDBClusterResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDbInstanceRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDbInstanceResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDbInstancesRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDbInstancesResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDBIpWhiteListRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDBIpWhiteListResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDbRdsNameListRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDbRdsNameListResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDBRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDBResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDbSpecAndPriceRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDbSpecAndPriceResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDBsRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDBsResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDbTasksRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDbTasksResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsInstanceDbMonitorRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsInstanceDbMonitorResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsInstanceLevelTasksRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsInstanceLevelTasksResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsInstanceMonitorRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsInstanceMonitorResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsInstanceRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsInstanceResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsInstancesRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsInstancesResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsInstanceVersionRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsInstanceVersionResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsParamsRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsParamsResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsRdsInstancesRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsRdsInstancesResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsShardingDbsRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsShardingDbsResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsSlowSqlsRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsSlowSqlsResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsSqlAuditStatusRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsSqlAuditStatusResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsTasksRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsTasksResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeExpandLogicTableInfoListRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeExpandLogicTableInfoListResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeHiStoreInstanceInfoRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeHiStoreInstanceInfoResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeHotDbListRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeHotDbListResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeInstanceAccountsRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeInstanceAccountsResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeInstanceMenuSwitchRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeInstanceMenuSwitchResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeInstanceSwitchAzoneRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeInstanceSwitchAzoneResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeInstanceSwitchNetworkRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeInstanceSwitchNetworkResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeInstDbLogInfoRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeInstDbLogInfoResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeInstDbSlsInfoRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeInstDbSlsInfoResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribePreCheckResultRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribePreCheckResultResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRdsCommodityRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRdsCommodityResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRdsDrdsDBRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRdsDrdsDBResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRdsInstInfosRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRdsInstInfosResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRDSPerformanceRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRDSPerformanceResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRdsPerformanceSummaryRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRdsPerformanceSummaryResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRdsPriceRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRdsPriceResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRdsReadOnlyRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRdsReadOnlyResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRdsSuperAccountInstancesRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRdsSuperAccountInstancesResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRdsVpcForZoneRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRdsVpcForZoneResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRecycleBinStatusRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRecycleBinStatusResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRecycleBinTablesRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRecycleBinTablesResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRestoreOrderRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRestoreOrderResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeShardTaskInfoRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeShardTaskInfoResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeShardTaskListRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeShardTaskListResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeSqlFlashbakTaskRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeSqlFlashbakTaskResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeSrcRdsListRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeSrcRdsListResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeTableListByTypeRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeTableListByTypeResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeTableRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeTableResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeTablesRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeTablesResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DisableSqlAuditRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DisableSqlAuditResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\EnableInstanceIpv6AddressRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\EnableInstanceIpv6AddressResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\EnableSqlAuditRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\EnableSqlAuditResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\EnableSqlFlashbackMatchSwitchRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\EnableSqlFlashbackMatchSwitchResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\FlashbackRecycleBinTableRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\FlashbackRecycleBinTableResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\GetDrdsDbRdsRelationInfoRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\GetDrdsDbRdsRelationInfoResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\ListUserReportsRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\ListUserReportsResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\ListVersionsRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\ListVersionsResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\ManagePrivateRdsRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\ManagePrivateRdsResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\ModifyAccountDescriptionRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\ModifyAccountDescriptionResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\ModifyAccountPrivilegeRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\ModifyAccountPrivilegeResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\ModifyDrdsInstanceDescriptionRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\ModifyDrdsInstanceDescriptionResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\ModifyDrdsIpWhiteListRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\ModifyDrdsIpWhiteListResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\ModifyEventTaskStatusRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\ModifyEventTaskStatusResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\ModifyPolarDbReadWeightRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\ModifyPolarDbReadWeightResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\ModifyRdsReadWeightRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\ModifyRdsReadWeightResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\PreCheckSqlFlashbackTaskRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\PreCheckSqlFlashbackTaskResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\PutRestorePreCheckRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\PutRestorePreCheckResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\PutStartBackupRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\PutStartBackupResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\RearrangeDbToInstanceRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\RearrangeDbToInstanceResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\RefreshDrdsAtomUrlRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\RefreshDrdsAtomUrlResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\ReleaseInstanceInternetAddressRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\ReleaseInstanceInternetAddressResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\RemoveBackupsSetRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\RemoveBackupsSetResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\RemoveDrdsDbFailedRecordRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\RemoveDrdsDbFailedRecordResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\RemoveDrdsDbRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\RemoveDrdsDbResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\RemoveDrdsInstanceRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\RemoveDrdsInstanceResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\RemoveDrdsMysqlRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\RemoveDrdsMysqlResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\RemoveInstanceAccountRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\RemoveInstanceAccountResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\RemoveRecycleBinTableRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\RemoveRecycleBinTableResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\RestartDrdsInstanceRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\RestartDrdsInstanceResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\RollbackInstanceVersionRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\RollbackInstanceVersionResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\SetBackupLocalRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\SetBackupLocalResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\SetBackupPolicyRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\SetBackupPolicyResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\SetupBroadcastTablesRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\SetupBroadcastTablesResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\SetupDrdsParamsRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\SetupDrdsParamsResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\SetupRecycleBinStatusRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\SetupRecycleBinStatusResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\SetupTableAsyncRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\SetupTableAsyncResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\SetupTableRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\SetupTableResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\SqlCompatibilityCancelRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\SqlCompatibilityCancelResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\SqlCompatibilityStartRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\SqlCompatibilityStartResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\StartRestoreRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\StartRestoreResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\SubmitCleanTaskRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\SubmitCleanTaskResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\SubmitHotExpandPreCheckTaskRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\SubmitHotExpandPreCheckTaskResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\SubmitHotExpandTaskRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\SubmitHotExpandTaskResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\SubmitSmoothExpandPreCheckRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\SubmitSmoothExpandPreCheckResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\SubmitSmoothExpandPreCheckTaskRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\SubmitSmoothExpandPreCheckTaskResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\SubmitSqlFlashbackTaskRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\SubmitSqlFlashbackTaskResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\SwitchGlobalBroadcastTypeRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\SwitchGlobalBroadcastTypeResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\UpdateInstanceNetworkRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\UpdateInstanceNetworkResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\UpdatePrivateRdsClassRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\UpdatePrivateRdsClassResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\UpdateResourceGroupAttributeRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\UpdateResourceGroupAttributeResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\UpgradeHiStoreInstanceRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\UpgradeHiStoreInstanceResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\UpgradeInstanceVersionRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\UpgradeInstanceVersionResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\ValidateShardTaskRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\ValidateShardTaskResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Drds extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'ap-northeast-1'              => 'drds.ap-southeast-1.aliyuncs.com',
            'ap-northeast-2-pop'          => 'drds.ap-southeast-1.aliyuncs.com',
            'ap-south-1'                  => 'drds.ap-southeast-1.aliyuncs.com',
            'ap-southeast-2'              => 'drds.ap-southeast-1.aliyuncs.com',
            'ap-southeast-3'              => 'drds.ap-southeast-1.aliyuncs.com',
            'ap-southeast-5'              => 'drds.ap-southeast-1.aliyuncs.com',
            'cn-beijing-finance-1'        => 'drds.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'drds.aliyuncs.com',
            'cn-beijing-gov-1'            => 'drds.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'drds.aliyuncs.com',
            'cn-chengdu'                  => 'drds.aliyuncs.com',
            'cn-edge-1'                   => 'drds.aliyuncs.com',
            'cn-fujian'                   => 'drds.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'drds.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'drds.aliyuncs.com',
            'cn-hangzhou-finance'         => 'drds.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'drds.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'drds.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'drds.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'drds.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'drds.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'drds.aliyuncs.com',
            'cn-qingdao-nebula'           => 'drds.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'drds.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'drds.aliyuncs.com',
            'cn-shanghai-inner'           => 'drds.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'drds.aliyuncs.com',
            'cn-shenzhen-inner'           => 'drds.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'drds.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'drds.aliyuncs.com',
            'cn-wuhan'                    => 'drds.aliyuncs.com',
            'cn-yushanfang'               => 'drds.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'drds.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'drds.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'drds.aliyuncs.com',
            'eu-central-1'                => 'drds.ap-southeast-1.aliyuncs.com',
            'eu-west-1'                   => 'drds.ap-southeast-1.aliyuncs.com',
            'eu-west-1-oxs'               => 'drds.ap-southeast-1.aliyuncs.com',
            'me-east-1'                   => 'drds.ap-southeast-1.aliyuncs.com',
            'rus-west-1-pop'              => 'drds.ap-southeast-1.aliyuncs.com',
            'us-west-1'                   => 'drds.ap-southeast-1.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('drds', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param ChangeAccountPasswordRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ChangeAccountPasswordResponse
     */
    public function changeAccountPasswordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['AccountName']    = $request->accountName;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $query['Password']       = $request->password;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ChangeAccountPassword',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ChangeAccountPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ChangeAccountPasswordRequest $request
     *
     * @return ChangeAccountPasswordResponse
     */
    public function changeAccountPassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeAccountPasswordWithOptions($request, $runtime);
    }

    /**
     * @param ChangeInstanceAzoneRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ChangeInstanceAzoneResponse
     */
    public function changeInstanceAzoneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $query['DrdsRegionId']   = $request->drdsRegionId;
        $query['OriginAzoneId']  = $request->originAzoneId;
        $query['TargetAzoneId']  = $request->targetAzoneId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ChangeInstanceAzone',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ChangeInstanceAzoneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ChangeInstanceAzoneRequest $request
     *
     * @return ChangeInstanceAzoneResponse
     */
    public function changeInstanceAzone($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeInstanceAzoneWithOptions($request, $runtime);
    }

    /**
     * @param ChangeInstanceNetworkRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ChangeInstanceNetworkResponse
     */
    public function changeInstanceNetworkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                           = [];
        $query['ClassicExpiredDays']     = $request->classicExpiredDays;
        $query['DrdsInstanceId']         = $request->drdsInstanceId;
        $query['RetainClassic']          = $request->retainClassic;
        $query['SrcInstanceNetworkType'] = $request->srcInstanceNetworkType;
        $query['VpcId']                  = $request->vpcId;
        $query['VswitchId']              = $request->vswitchId;
        $req                             = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ChangeInstanceNetwork',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ChangeInstanceNetworkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ChangeInstanceNetworkRequest $request
     *
     * @return ChangeInstanceNetworkResponse
     */
    public function changeInstanceNetwork($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeInstanceNetworkWithOptions($request, $runtime);
    }

    /**
     * @param CheckDrdsDbNameRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CheckDrdsDbNameResponse
     */
    public function checkDrdsDbNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DbName']         = $request->dbName;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CheckDrdsDbName',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CheckDrdsDbNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckDrdsDbNameRequest $request
     *
     * @return CheckDrdsDbNameResponse
     */
    public function checkDrdsDbName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkDrdsDbNameWithOptions($request, $runtime);
    }

    /**
     * @param CheckExpandStatusRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CheckExpandStatusResponse
     */
    public function checkExpandStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DbName']         = $request->dbName;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CheckExpandStatus',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CheckExpandStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckExpandStatusRequest $request
     *
     * @return CheckExpandStatusResponse
     */
    public function checkExpandStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkExpandStatusWithOptions($request, $runtime);
    }

    /**
     * @param CheckRdsSuperAccountRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CheckRdsSuperAccountResponse
     */
    public function checkRdsSuperAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['AccountName']    = $request->accountName;
        $query['DbInstanceId']   = $request->dbInstanceId;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $query['Password']       = $request->password;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CheckRdsSuperAccount',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CheckRdsSuperAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckRdsSuperAccountRequest $request
     *
     * @return CheckRdsSuperAccountResponse
     */
    public function checkRdsSuperAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkRdsSuperAccountWithOptions($request, $runtime);
    }

    /**
     * @param CheckSqlAuditEnableStatusRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CheckSqlAuditEnableStatusResponse
     */
    public function checkSqlAuditEnableStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DbName']         = $request->dbName;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CheckSqlAuditEnableStatus',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CheckSqlAuditEnableStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckSqlAuditEnableStatusRequest $request
     *
     * @return CheckSqlAuditEnableStatusResponse
     */
    public function checkSqlAuditEnableStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkSqlAuditEnableStatusWithOptions($request, $runtime);
    }

    /**
     * @param ConfigureDrdsDbInstancesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ConfigureDrdsDbInstancesResponse
     */
    public function configureDrdsDbInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DbInstance']     = $request->dbInstance;
        $query['DbName']         = $request->dbName;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ConfigureDrdsDbInstances',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ConfigureDrdsDbInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ConfigureDrdsDbInstancesRequest $request
     *
     * @return ConfigureDrdsDbInstancesResponse
     */
    public function configureDrdsDbInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configureDrdsDbInstancesWithOptions($request, $runtime);
    }

    /**
     * @param CreateDrdsDBRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateDrdsDBResponse
     */
    public function createDrdsDBWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['AccountName']          = $request->accountName;
        $query['DbInstType']           = $request->dbInstType;
        $query['DbInstanceIsCreating'] = $request->dbInstanceIsCreating;
        $query['DbName']               = $request->dbName;
        $query['DrdsInstanceId']       = $request->drdsInstanceId;
        $query['Encode']               = $request->encode;
        $query['InstDbName']           = $request->instDbName;
        $query['Password']             = $request->password;
        $query['RdsInstance']          = $request->rdsInstance;
        $query['RdsSuperAccount']      = $request->rdsSuperAccount;
        $query['Type']                 = $request->type;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateDrdsDB',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateDrdsDBResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDrdsDBRequest $request
     *
     * @return CreateDrdsDBResponse
     */
    public function createDrdsDB($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDrdsDBWithOptions($request, $runtime);
    }

    /**
     * @param CreateDrdsDBPreCheckRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateDrdsDBPreCheckResponse
     */
    public function createDrdsDBPreCheckWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['AccountName']          = $request->accountName;
        $query['DbInstType']           = $request->dbInstType;
        $query['DbInstanceIsCreating'] = $request->dbInstanceIsCreating;
        $query['DbName']               = $request->dbName;
        $query['DrdsInstanceId']       = $request->drdsInstanceId;
        $query['Encode']               = $request->encode;
        $query['InstDbName']           = $request->instDbName;
        $query['Password']             = $request->password;
        $query['RdsInstance']          = $request->rdsInstance;
        $query['RdsSuperAccount']      = $request->rdsSuperAccount;
        $query['Type']                 = $request->type;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateDrdsDBPreCheck',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateDrdsDBPreCheckResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDrdsDBPreCheckRequest $request
     *
     * @return CreateDrdsDBPreCheckResponse
     */
    public function createDrdsDBPreCheck($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDrdsDBPreCheckWithOptions($request, $runtime);
    }

    /**
     * @param CreateDrdsDBPreviewRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateDrdsDBPreviewResponse
     */
    public function createDrdsDBPreviewWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['AccountName']          = $request->accountName;
        $query['DbInstType']           = $request->dbInstType;
        $query['DbInstanceIsCreating'] = $request->dbInstanceIsCreating;
        $query['DbName']               = $request->dbName;
        $query['DrdsInstanceId']       = $request->drdsInstanceId;
        $query['InstDbName']           = $request->instDbName;
        $query['OrderId']              = $request->orderId;
        $query['RdsInstance']          = $request->rdsInstance;
        $query['Type']                 = $request->type;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateDrdsDBPreview',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateDrdsDBPreviewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDrdsDBPreviewRequest $request
     *
     * @return CreateDrdsDBPreviewResponse
     */
    public function createDrdsDBPreview($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDrdsDBPreviewWithOptions($request, $runtime);
    }

    /**
     * @param CreateDrdsInstanceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateDrdsInstanceResponse
     */
    public function createDrdsInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['ClientToken']     = $request->clientToken;
        $query['Description']     = $request->description;
        $query['Duration']        = $request->duration;
        $query['InstanceSeries']  = $request->instanceSeries;
        $query['IsAutoRenew']     = $request->isAutoRenew;
        $query['MasterInstId']    = $request->masterInstId;
        $query['MySQLVersion']    = $request->mySQLVersion;
        $query['PayType']         = $request->payType;
        $query['PricingCycle']    = $request->pricingCycle;
        $query['Quantity']        = $request->quantity;
        $query['RegionId']        = $request->regionId;
        $query['ResourceGroupId'] = $request->resourceGroupId;
        $query['Specification']   = $request->specification;
        $query['Type']            = $request->type;
        $query['VpcId']           = $request->vpcId;
        $query['VswitchId']       = $request->vswitchId;
        $query['ZoneId']          = $request->zoneId;
        $query['isHa']            = $request->isHa;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateDrdsInstance',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateDrdsInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDrdsInstanceRequest $request
     *
     * @return CreateDrdsInstanceResponse
     */
    public function createDrdsInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDrdsInstanceWithOptions($request, $runtime);
    }

    /**
     * @param CreateEvaluatePreCheckTaskRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateEvaluatePreCheckTaskResponse
     */
    public function createEvaluatePreCheckTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                      = [];
        $query['AvgQpsGrowthScale'] = $request->avgQpsGrowthScale;
        $query['DataGrowthScale']   = $request->dataGrowthScale;
        $query['DbInfo']            = $request->dbInfo;
        $query['EvaluateHours']     = $request->evaluateHours;
        $query['TaskName']          = $request->taskName;
        $req                        = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateEvaluatePreCheckTask',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateEvaluatePreCheckTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateEvaluatePreCheckTaskRequest $request
     *
     * @return CreateEvaluatePreCheckTaskResponse
     */
    public function createEvaluatePreCheckTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEvaluatePreCheckTaskWithOptions($request, $runtime);
    }

    /**
     * @param CreateInstanceAccountRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateInstanceAccountResponse
     */
    public function createInstanceAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['AccountName']    = $request->accountName;
        $query['DbPrivilege']    = $request->dbPrivilege;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $query['Password']       = $request->password;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateInstanceAccount',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateInstanceAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateInstanceAccountRequest $request
     *
     * @return CreateInstanceAccountResponse
     */
    public function createInstanceAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createInstanceAccountWithOptions($request, $runtime);
    }

    /**
     * @param CreateInstanceInternetAddressRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return CreateInstanceInternetAddressResponse
     */
    public function createInstanceInternetAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $query['RegionId']       = $request->regionId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateInstanceInternetAddress',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateInstanceInternetAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateInstanceInternetAddressRequest $request
     *
     * @return CreateInstanceInternetAddressResponse
     */
    public function createInstanceInternetAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createInstanceInternetAddressWithOptions($request, $runtime);
    }

    /**
     * @param CreateOrderForRdsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateOrderForRdsResponse
     */
    public function createOrderForRdsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query             = [];
        $query['Params']   = $request->params;
        $query['RegionId'] = $request->regionId;
        $req               = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateOrderForRds',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateOrderForRdsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateOrderForRdsRequest $request
     *
     * @return CreateOrderForRdsResponse
     */
    public function createOrderForRds($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOrderForRdsWithOptions($request, $runtime);
    }

    /**
     * @param CreateShardTaskRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateShardTaskResponse
     */
    public function createShardTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['DbName']          = $request->dbName;
        $query['DrdsInstanceId']  = $request->drdsInstanceId;
        $query['RegionId']        = $request->regionId;
        $query['SourceTableName'] = $request->sourceTableName;
        $query['TargetTableName'] = $request->targetTableName;
        $query['TaskType']        = $request->taskType;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateShardTask',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateShardTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateShardTaskRequest $request
     *
     * @return CreateShardTaskResponse
     */
    public function createShardTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createShardTaskWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBackMenuRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeBackMenuResponse
     */
    public function describeBackMenuWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeBackMenu',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeBackMenuResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeBackMenuRequest $request
     *
     * @return DescribeBackMenuResponse
     */
    public function describeBackMenu($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackMenuWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBackupDbsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeBackupDbsResponse
     */
    public function describeBackupDbsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['BackupId']             = $request->backupId;
        $query['DrdsInstanceId']       = $request->drdsInstanceId;
        $query['PreferredRestoreTime'] = $request->preferredRestoreTime;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeBackupDbs',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeBackupDbsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeBackupDbsRequest $request
     *
     * @return DescribeBackupDbsResponse
     */
    public function describeBackupDbs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupDbsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBackupLocalRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeBackupLocalResponse
     */
    public function describeBackupLocalWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeBackupLocal',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeBackupLocalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeBackupLocalRequest $request
     *
     * @return DescribeBackupLocalResponse
     */
    public function describeBackupLocal($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupLocalWithOptions($request, $runtime);
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
        $query                   = [];
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeBackupPolicy',
            'version'     => '2019-01-23',
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
     * @param DescribeBackupSetsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeBackupSetsResponse
     */
    public function describeBackupSetsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $query['EndTime']        = $request->endTime;
        $query['StartTime']      = $request->startTime;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeBackupSets',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeBackupSetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeBackupSetsRequest $request
     *
     * @return DescribeBackupSetsResponse
     */
    public function describeBackupSets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupSetsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBackupTimesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeBackupTimesResponse
     */
    public function describeBackupTimesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeBackupTimes',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeBackupTimesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeBackupTimesRequest $request
     *
     * @return DescribeBackupTimesResponse
     */
    public function describeBackupTimes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupTimesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBroadcastTablesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeBroadcastTablesResponse
     */
    public function describeBroadcastTablesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['CurrentPage']    = $request->currentPage;
        $query['DbName']         = $request->dbName;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $query['PageSize']       = $request->pageSize;
        $query['Query']          = $request->query;
        $query['RegionId']       = $request->regionId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeBroadcastTables',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeBroadcastTablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeBroadcastTablesRequest $request
     *
     * @return DescribeBroadcastTablesResponse
     */
    public function describeBroadcastTables($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBroadcastTablesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDataImportTaskReportRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeDataImportTaskReportResponse
     */
    public function describeDataImportTaskReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query           = [];
        $query['TaskId'] = $request->taskId;
        $req             = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDataImportTaskReport',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeDataImportTaskReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDataImportTaskReportRequest $request
     *
     * @return DescribeDataImportTaskReportResponse
     */
    public function describeDataImportTaskReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDataImportTaskReportWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDbInstanceDbsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeDbInstanceDbsResponse
     */
    public function describeDbInstanceDbsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['AccountName']    = $request->accountName;
        $query['DbInstType']     = $request->dbInstType;
        $query['DbInstanceId']   = $request->dbInstanceId;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $query['Password']       = $request->password;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDbInstanceDbs',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeDbInstanceDbsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDbInstanceDbsRequest $request
     *
     * @return DescribeDbInstanceDbsResponse
     */
    public function describeDbInstanceDbs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDbInstanceDbsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDbInstancesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeDbInstancesResponse
     */
    public function describeDbInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DbInstType']     = $request->dbInstType;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $query['PageNumber']     = $request->pageNumber;
        $query['PageSize']       = $request->pageSize;
        $query['Search']         = $request->search;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDbInstances',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeDbInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDbInstancesRequest $request
     *
     * @return DescribeDbInstancesResponse
     */
    public function describeDbInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDbInstancesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDrdsDBRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeDrdsDBResponse
     */
    public function describeDrdsDBWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DbName']         = $request->dbName;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDrdsDB',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeDrdsDBResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDrdsDBRequest $request
     *
     * @return DescribeDrdsDBResponse
     */
    public function describeDrdsDB($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDrdsDBWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDrdsDBClusterRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeDrdsDBClusterResponse
     */
    public function describeDrdsDBClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DbInstanceId']   = $request->dbInstanceId;
        $query['DbName']         = $request->dbName;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDrdsDBCluster',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeDrdsDBClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDrdsDBClusterRequest $request
     *
     * @return DescribeDrdsDBClusterResponse
     */
    public function describeDrdsDBCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDrdsDBClusterWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDrdsDBIpWhiteListRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeDrdsDBIpWhiteListResponse
     */
    public function describeDrdsDBIpWhiteListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DbName']         = $request->dbName;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $query['GroupName']      = $request->groupName;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDrdsDBIpWhiteList',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeDrdsDBIpWhiteListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDrdsDBIpWhiteListRequest $request
     *
     * @return DescribeDrdsDBIpWhiteListResponse
     */
    public function describeDrdsDBIpWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDrdsDBIpWhiteListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDrdsDBsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeDrdsDBsResponse
     */
    public function describeDrdsDBsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $query['PageNumber']     = $request->pageNumber;
        $query['PageSize']       = $request->pageSize;
        $query['RegionId']       = $request->regionId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDrdsDBs',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeDrdsDBsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDrdsDBsRequest $request
     *
     * @return DescribeDrdsDBsResponse
     */
    public function describeDrdsDBs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDrdsDBsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDrdsDbInstanceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeDrdsDbInstanceResponse
     */
    public function describeDrdsDbInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DbInstanceId']   = $request->dbInstanceId;
        $query['DbName']         = $request->dbName;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDrdsDbInstance',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeDrdsDbInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDrdsDbInstanceRequest $request
     *
     * @return DescribeDrdsDbInstanceResponse
     */
    public function describeDrdsDbInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDrdsDbInstanceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDrdsDbInstancesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDrdsDbInstancesResponse
     */
    public function describeDrdsDbInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DbName']         = $request->dbName;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $query['PageNumber']     = $request->pageNumber;
        $query['PageSize']       = $request->pageSize;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDrdsDbInstances',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeDrdsDbInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDrdsDbInstancesRequest $request
     *
     * @return DescribeDrdsDbInstancesResponse
     */
    public function describeDrdsDbInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDrdsDbInstancesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDrdsDbRdsNameListRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeDrdsDbRdsNameListResponse
     */
    public function describeDrdsDbRdsNameListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DbName']         = $request->dbName;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDrdsDbRdsNameList',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeDrdsDbRdsNameListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDrdsDbRdsNameListRequest $request
     *
     * @return DescribeDrdsDbRdsNameListResponse
     */
    public function describeDrdsDbRdsNameList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDrdsDbRdsNameListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDrdsDbSpecAndPriceRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeDrdsDbSpecAndPriceResponse
     */
    public function describeDrdsDbSpecAndPriceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DBName']         = $request->DBName;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $query['RegionId']       = $request->regionId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDrdsDbSpecAndPrice',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeDrdsDbSpecAndPriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDrdsDbSpecAndPriceRequest $request
     *
     * @return DescribeDrdsDbSpecAndPriceResponse
     */
    public function describeDrdsDbSpecAndPrice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDrdsDbSpecAndPriceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDrdsDbTasksRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeDrdsDbTasksResponse
     */
    public function describeDrdsDbTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DbName']         = $request->dbName;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $query['TaskType']       = $request->taskType;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDrdsDbTasks',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeDrdsDbTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDrdsDbTasksRequest $request
     *
     * @return DescribeDrdsDbTasksResponse
     */
    public function describeDrdsDbTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDrdsDbTasksWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDrdsInstanceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeDrdsInstanceResponse
     */
    public function describeDrdsInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $query['RegionId']       = $request->regionId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDrdsInstance',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeDrdsInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDrdsInstanceRequest $request
     *
     * @return DescribeDrdsInstanceResponse
     */
    public function describeDrdsInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDrdsInstanceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDrdsInstanceDbMonitorRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeDrdsInstanceDbMonitorResponse
     */
    public function describeDrdsInstanceDbMonitorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DbName']         = $request->dbName;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $query['EndTime']        = $request->endTime;
        $query['Key']            = $request->key;
        $query['RegionId']       = $request->regionId;
        $query['StartTime']      = $request->startTime;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDrdsInstanceDbMonitor',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeDrdsInstanceDbMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDrdsInstanceDbMonitorRequest $request
     *
     * @return DescribeDrdsInstanceDbMonitorResponse
     */
    public function describeDrdsInstanceDbMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDrdsInstanceDbMonitorWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDrdsInstanceLevelTasksRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeDrdsInstanceLevelTasksResponse
     */
    public function describeDrdsInstanceLevelTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDrdsInstanceLevelTasks',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeDrdsInstanceLevelTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDrdsInstanceLevelTasksRequest $request
     *
     * @return DescribeDrdsInstanceLevelTasksResponse
     */
    public function describeDrdsInstanceLevelTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDrdsInstanceLevelTasksWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDrdsInstanceMonitorRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDrdsInstanceMonitorResponse
     */
    public function describeDrdsInstanceMonitorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $query['EndTime']        = $request->endTime;
        $query['Key']            = $request->key;
        $query['PeriodMultiple'] = $request->periodMultiple;
        $query['RegionId']       = $request->regionId;
        $query['StartTime']      = $request->startTime;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDrdsInstanceMonitor',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeDrdsInstanceMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDrdsInstanceMonitorRequest $request
     *
     * @return DescribeDrdsInstanceMonitorResponse
     */
    public function describeDrdsInstanceMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDrdsInstanceMonitorWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDrdsInstanceVersionRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDrdsInstanceVersionResponse
     */
    public function describeDrdsInstanceVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $query['RegionId']       = $request->regionId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDrdsInstanceVersion',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeDrdsInstanceVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDrdsInstanceVersionRequest $request
     *
     * @return DescribeDrdsInstanceVersionResponse
     */
    public function describeDrdsInstanceVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDrdsInstanceVersionWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDrdsInstancesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeDrdsInstancesResponse
     */
    public function describeDrdsInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['Description']     = $request->description;
        $query['Expired']         = $request->expired;
        $query['Mix']             = $request->mix;
        $query['PageNumber']      = $request->pageNumber;
        $query['PageSize']        = $request->pageSize;
        $query['ProductVersion']  = $request->productVersion;
        $query['RegionId']        = $request->regionId;
        $query['ResourceGroupId'] = $request->resourceGroupId;
        $query['Tag']             = $request->tag;
        $query['Type']            = $request->type;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDrdsInstances',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeDrdsInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDrdsInstancesRequest $request
     *
     * @return DescribeDrdsInstancesResponse
     */
    public function describeDrdsInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDrdsInstancesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDrdsParamsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeDrdsParamsResponse
     */
    public function describeDrdsParamsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DbName']         = $request->dbName;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $query['ParamLevel']     = $request->paramLevel;
        $query['RegionId']       = $request->regionId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDrdsParams',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeDrdsParamsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDrdsParamsRequest $request
     *
     * @return DescribeDrdsParamsResponse
     */
    public function describeDrdsParams($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDrdsParamsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDrdsRdsInstancesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDrdsRdsInstancesResponse
     */
    public function describeDrdsRdsInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDrdsRdsInstances',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeDrdsRdsInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDrdsRdsInstancesRequest $request
     *
     * @return DescribeDrdsRdsInstancesResponse
     */
    public function describeDrdsRdsInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDrdsRdsInstancesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDrdsShardingDbsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDrdsShardingDbsResponse
     */
    public function describeDrdsShardingDbsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DbName']         = $request->dbName;
        $query['DbNamePattern']  = $request->dbNamePattern;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $query['PageNumber']     = $request->pageNumber;
        $query['PageSize']       = $request->pageSize;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDrdsShardingDbs',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeDrdsShardingDbsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDrdsShardingDbsRequest $request
     *
     * @return DescribeDrdsShardingDbsResponse
     */
    public function describeDrdsShardingDbs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDrdsShardingDbsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDrdsSlowSqlsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeDrdsSlowSqlsResponse
     */
    public function describeDrdsSlowSqlsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DbName']         = $request->dbName;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $query['EndTime']        = $request->endTime;
        $query['ExeTime']        = $request->exeTime;
        $query['PageNumber']     = $request->pageNumber;
        $query['PageSize']       = $request->pageSize;
        $query['StartTime']      = $request->startTime;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDrdsSlowSqls',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeDrdsSlowSqlsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDrdsSlowSqlsRequest $request
     *
     * @return DescribeDrdsSlowSqlsResponse
     */
    public function describeDrdsSlowSqls($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDrdsSlowSqlsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDrdsSqlAuditStatusRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeDrdsSqlAuditStatusResponse
     */
    public function describeDrdsSqlAuditStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDrdsSqlAuditStatus',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeDrdsSqlAuditStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDrdsSqlAuditStatusRequest $request
     *
     * @return DescribeDrdsSqlAuditStatusResponse
     */
    public function describeDrdsSqlAuditStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDrdsSqlAuditStatusWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDrdsTasksRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeDrdsTasksResponse
     */
    public function describeDrdsTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DbName']         = $request->dbName;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $query['TaskType']       = $request->taskType;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDrdsTasks',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeDrdsTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDrdsTasksRequest $request
     *
     * @return DescribeDrdsTasksResponse
     */
    public function describeDrdsTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDrdsTasksWithOptions($request, $runtime);
    }

    /**
     * @param DescribeExpandLogicTableInfoListRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeExpandLogicTableInfoListResponse
     */
    public function describeExpandLogicTableInfoListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DbName']         = $request->dbName;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeExpandLogicTableInfoList',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeExpandLogicTableInfoListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeExpandLogicTableInfoListRequest $request
     *
     * @return DescribeExpandLogicTableInfoListResponse
     */
    public function describeExpandLogicTableInfoList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExpandLogicTableInfoListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeHiStoreInstanceInfoRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeHiStoreInstanceInfoResponse
     */
    public function describeHiStoreInstanceInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                      = [];
        $query['DrdsInstanceId']    = $request->drdsInstanceId;
        $query['HistoreInstanceId'] = $request->historeInstanceId;
        $req                        = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeHiStoreInstanceInfo',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeHiStoreInstanceInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeHiStoreInstanceInfoRequest $request
     *
     * @return DescribeHiStoreInstanceInfoResponse
     */
    public function describeHiStoreInstanceInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHiStoreInstanceInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeHotDbListRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeHotDbListResponse
     */
    public function describeHotDbListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DbName']         = $request->dbName;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeHotDbList',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeHotDbListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeHotDbListRequest $request
     *
     * @return DescribeHotDbListResponse
     */
    public function describeHotDbList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHotDbListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstDbLogInfoRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeInstDbLogInfoResponse
     */
    public function describeInstDbLogInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DbName']         = $request->dbName;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstDbLogInfo',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeInstDbLogInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInstDbLogInfoRequest $request
     *
     * @return DescribeInstDbLogInfoResponse
     */
    public function describeInstDbLogInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstDbLogInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstDbSlsInfoRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeInstDbSlsInfoResponse
     */
    public function describeInstDbSlsInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DbName']         = $request->dbName;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstDbSlsInfo',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeInstDbSlsInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInstDbSlsInfoRequest $request
     *
     * @return DescribeInstDbSlsInfoResponse
     */
    public function describeInstDbSlsInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstDbSlsInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceAccountsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeInstanceAccountsResponse
     */
    public function describeInstanceAccountsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceAccounts',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceAccountsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInstanceAccountsRequest $request
     *
     * @return DescribeInstanceAccountsResponse
     */
    public function describeInstanceAccounts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceAccountsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceMenuSwitchRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeInstanceMenuSwitchResponse
     */
    public function describeInstanceMenuSwitchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceMenuSwitch',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceMenuSwitchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInstanceMenuSwitchRequest $request
     *
     * @return DescribeInstanceMenuSwitchResponse
     */
    public function describeInstanceMenuSwitch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceMenuSwitchWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceSwitchAzoneRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeInstanceSwitchAzoneResponse
     */
    public function describeInstanceSwitchAzoneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceSwitchAzone',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceSwitchAzoneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInstanceSwitchAzoneRequest $request
     *
     * @return DescribeInstanceSwitchAzoneResponse
     */
    public function describeInstanceSwitchAzone($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceSwitchAzoneWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceSwitchNetworkRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeInstanceSwitchNetworkResponse
     */
    public function describeInstanceSwitchNetworkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceSwitchNetwork',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceSwitchNetworkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInstanceSwitchNetworkRequest $request
     *
     * @return DescribeInstanceSwitchNetworkResponse
     */
    public function describeInstanceSwitchNetwork($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceSwitchNetworkWithOptions($request, $runtime);
    }

    /**
     * @param DescribePreCheckResultRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribePreCheckResultResponse
     */
    public function describePreCheckResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $query['RegionId']       = $request->regionId;
        $query['TaskId']         = $request->taskId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribePreCheckResult',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribePreCheckResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePreCheckResultRequest $request
     *
     * @return DescribePreCheckResultResponse
     */
    public function describePreCheckResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePreCheckResultWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRDSPerformanceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeRDSPerformanceResponse
     */
    public function describeRDSPerformanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DbInstType']     = $request->dbInstType;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $query['EndTime']        = $request->endTime;
        $query['Keys']           = $request->keys;
        $query['RdsInstanceId']  = $request->rdsInstanceId;
        $query['StartTime']      = $request->startTime;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeRDSPerformance',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeRDSPerformanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRDSPerformanceRequest $request
     *
     * @return DescribeRDSPerformanceResponse
     */
    public function describeRDSPerformance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRDSPerformanceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRdsCommodityRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeRdsCommodityResponse
     */
    public function describeRdsCommodityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['CommodityCode']  = $request->commodityCode;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $query['OrderType']      = $request->orderType;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeRdsCommodity',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeRdsCommodityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRdsCommodityRequest $request
     *
     * @return DescribeRdsCommodityResponse
     */
    public function describeRdsCommodity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRdsCommodityWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRdsDrdsDBRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeRdsDrdsDBResponse
     */
    public function describeRdsDrdsDBWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $query['RdsInstanceId']  = $request->rdsInstanceId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeRdsDrdsDB',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeRdsDrdsDBResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRdsDrdsDBRequest $request
     *
     * @return DescribeRdsDrdsDBResponse
     */
    public function describeRdsDrdsDB($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRdsDrdsDBWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRdsPerformanceSummaryRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeRdsPerformanceSummaryResponse
     */
    public function describeRdsPerformanceSummaryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $query['RdsInstanceId']  = $request->rdsInstanceId;
        $query['RegionId']       = $request->regionId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeRdsPerformanceSummary',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeRdsPerformanceSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRdsPerformanceSummaryRequest $request
     *
     * @return DescribeRdsPerformanceSummaryResponse
     */
    public function describeRdsPerformanceSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRdsPerformanceSummaryWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRdsPriceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeRdsPriceResponse
     */
    public function describeRdsPriceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query             = [];
        $query['Params']   = $request->params;
        $query['RegionId'] = $request->regionId;
        $req               = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeRdsPrice',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeRdsPriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRdsPriceRequest $request
     *
     * @return DescribeRdsPriceResponse
     */
    public function describeRdsPrice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRdsPriceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRdsReadOnlyRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeRdsReadOnlyResponse
     */
    public function describeRdsReadOnlyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DbInstType']     = $request->dbInstType;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $query['RdsInstanceId']  = $request->rdsInstanceId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeRdsReadOnly',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeRdsReadOnlyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRdsReadOnlyRequest $request
     *
     * @return DescribeRdsReadOnlyResponse
     */
    public function describeRdsReadOnly($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRdsReadOnlyWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRdsSuperAccountInstancesRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeRdsSuperAccountInstancesResponse
     */
    public function describeRdsSuperAccountInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DbInstType']     = $request->dbInstType;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $query['RdsInstance']    = $request->rdsInstance;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeRdsSuperAccountInstances',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeRdsSuperAccountInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRdsSuperAccountInstancesRequest $request
     *
     * @return DescribeRdsSuperAccountInstancesResponse
     */
    public function describeRdsSuperAccountInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRdsSuperAccountInstancesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRdsVpcForZoneRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeRdsVpcForZoneResponse
     */
    public function describeRdsVpcForZoneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query             = [];
        $query['RegionId'] = $request->regionId;
        $query['ZoneId']   = $request->zoneId;
        $req               = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeRdsVpcForZone',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeRdsVpcForZoneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRdsVpcForZoneRequest $request
     *
     * @return DescribeRdsVpcForZoneResponse
     */
    public function describeRdsVpcForZone($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRdsVpcForZoneWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRecycleBinStatusRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeRecycleBinStatusResponse
     */
    public function describeRecycleBinStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DbName']         = $request->dbName;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $query['RegionId']       = $request->regionId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeRecycleBinStatus',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeRecycleBinStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRecycleBinStatusRequest $request
     *
     * @return DescribeRecycleBinStatusResponse
     */
    public function describeRecycleBinStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRecycleBinStatusWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRecycleBinTablesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeRecycleBinTablesResponse
     */
    public function describeRecycleBinTablesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DbName']         = $request->dbName;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $query['RegionId']       = $request->regionId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeRecycleBinTables',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeRecycleBinTablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRecycleBinTablesRequest $request
     *
     * @return DescribeRecycleBinTablesResponse
     */
    public function describeRecycleBinTables($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRecycleBinTablesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRestoreOrderRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeRestoreOrderResponse
     */
    public function describeRestoreOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                        = [];
        $query['BackupDbNames']       = $request->backupDbNames;
        $query['BackupId']            = $request->backupId;
        $query['BackupLevel']         = $request->backupLevel;
        $query['BackupMode']          = $request->backupMode;
        $query['DrdsInstanceId']      = $request->drdsInstanceId;
        $query['PreferredBackupTime'] = $request->preferredBackupTime;
        $req                          = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeRestoreOrder',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeRestoreOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRestoreOrderRequest $request
     *
     * @return DescribeRestoreOrderResponse
     */
    public function describeRestoreOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRestoreOrderWithOptions($request, $runtime);
    }

    /**
     * @param DescribeShardTaskInfoRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeShardTaskInfoResponse
     */
    public function describeShardTaskInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['DbName']          = $request->dbName;
        $query['DrdsInstanceId']  = $request->drdsInstanceId;
        $query['RegionId']        = $request->regionId;
        $query['SourceTableName'] = $request->sourceTableName;
        $query['TargetTableName'] = $request->targetTableName;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeShardTaskInfo',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeShardTaskInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeShardTaskInfoRequest $request
     *
     * @return DescribeShardTaskInfoResponse
     */
    public function describeShardTaskInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeShardTaskInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeShardTaskListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeShardTaskListResponse
     */
    public function describeShardTaskListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['CurrentPage']    = $request->currentPage;
        $query['DbName']         = $request->dbName;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $query['PageSize']       = $request->pageSize;
        $query['Query']          = $request->query;
        $query['RegionId']       = $request->regionId;
        $query['TaskType']       = $request->taskType;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeShardTaskList',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeShardTaskListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeShardTaskListRequest $request
     *
     * @return DescribeShardTaskListResponse
     */
    public function describeShardTaskList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeShardTaskListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSqlFlashbakTaskRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeSqlFlashbakTaskResponse
     */
    public function describeSqlFlashbakTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeSqlFlashbakTask',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeSqlFlashbakTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSqlFlashbakTaskRequest $request
     *
     * @return DescribeSqlFlashbakTaskResponse
     */
    public function describeSqlFlashbakTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSqlFlashbakTaskWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSrcRdsListRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeSrcRdsListResponse
     */
    public function describeSrcRdsListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                     = [];
        $query['DbName']           = $request->dbName;
        $query['DrdsInstanceId']   = $request->drdsInstanceId;
        $query['PartitionMapping'] = $request->partitionMapping;
        $req                       = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeSrcRdsList',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeSrcRdsListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSrcRdsListRequest $request
     *
     * @return DescribeSrcRdsListResponse
     */
    public function describeSrcRdsList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSrcRdsListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeTableRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeTableResponse
     */
    public function describeTableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DbName']         = $request->dbName;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $query['RegionId']       = $request->regionId;
        $query['TableName']      = $request->tableName;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeTable',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeTableRequest $request
     *
     * @return DescribeTableResponse
     */
    public function describeTable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTableWithOptions($request, $runtime);
    }

    /**
     * @param DescribeTableListByTypeRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeTableListByTypeResponse
     */
    public function describeTableListByTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['CurrentPage']    = $request->currentPage;
        $query['DbName']         = $request->dbName;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $query['PageSize']       = $request->pageSize;
        $query['Query']          = $request->query;
        $query['RegionId']       = $request->regionId;
        $query['TableType']      = $request->tableType;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeTableListByType',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeTableListByTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeTableListByTypeRequest $request
     *
     * @return DescribeTableListByTypeResponse
     */
    public function describeTableListByType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTableListByTypeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeTablesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeTablesResponse
     */
    public function describeTablesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['CurrentPage']    = $request->currentPage;
        $query['DbName']         = $request->dbName;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $query['PageSize']       = $request->pageSize;
        $query['Query']          = $request->query;
        $query['RegionId']       = $request->regionId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeTables',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeTablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeTablesRequest $request
     *
     * @return DescribeTablesResponse
     */
    public function describeTables($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTablesWithOptions($request, $runtime);
    }

    /**
     * @param DisableSqlAuditRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DisableSqlAuditResponse
     */
    public function disableSqlAuditWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DbName']         = $request->dbName;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DisableSqlAudit',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DisableSqlAuditResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DisableSqlAuditRequest $request
     *
     * @return DisableSqlAuditResponse
     */
    public function disableSqlAudit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableSqlAuditWithOptions($request, $runtime);
    }

    /**
     * @param EnableInstanceIpv6AddressRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return EnableInstanceIpv6AddressResponse
     */
    public function enableInstanceIpv6AddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $query['RegionId']       = $request->regionId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'EnableInstanceIpv6Address',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return EnableInstanceIpv6AddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EnableInstanceIpv6AddressRequest $request
     *
     * @return EnableInstanceIpv6AddressResponse
     */
    public function enableInstanceIpv6Address($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableInstanceIpv6AddressWithOptions($request, $runtime);
    }

    /**
     * @param EnableSqlAuditRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return EnableSqlAuditResponse
     */
    public function enableSqlAuditWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['DbName']               = $request->dbName;
        $query['DrdsInstanceId']       = $request->drdsInstanceId;
        $query['IsRecall']             = $request->isRecall;
        $query['RecallEndTimestamp']   = $request->recallEndTimestamp;
        $query['RecallStartTimestamp'] = $request->recallStartTimestamp;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'EnableSqlAudit',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return EnableSqlAuditResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EnableSqlAuditRequest $request
     *
     * @return EnableSqlAuditResponse
     */
    public function enableSqlAudit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableSqlAuditWithOptions($request, $runtime);
    }

    /**
     * @param EnableSqlFlashbackMatchSwitchRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return EnableSqlFlashbackMatchSwitchResponse
     */
    public function enableSqlFlashbackMatchSwitchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DbName']         = $request->dbName;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'EnableSqlFlashbackMatchSwitch',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return EnableSqlFlashbackMatchSwitchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EnableSqlFlashbackMatchSwitchRequest $request
     *
     * @return EnableSqlFlashbackMatchSwitchResponse
     */
    public function enableSqlFlashbackMatchSwitch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableSqlFlashbackMatchSwitchWithOptions($request, $runtime);
    }

    /**
     * @param FlashbackRecycleBinTableRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return FlashbackRecycleBinTableResponse
     */
    public function flashbackRecycleBinTableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DbName']         = $request->dbName;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $query['RegionId']       = $request->regionId;
        $query['TableName']      = $request->tableName;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'FlashbackRecycleBinTable',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return FlashbackRecycleBinTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param FlashbackRecycleBinTableRequest $request
     *
     * @return FlashbackRecycleBinTableResponse
     */
    public function flashbackRecycleBinTable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->flashbackRecycleBinTableWithOptions($request, $runtime);
    }

    /**
     * @param GetDrdsDbRdsRelationInfoRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetDrdsDbRdsRelationInfoResponse
     */
    public function getDrdsDbRdsRelationInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DbName']         = $request->dbName;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetDrdsDbRdsRelationInfo',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetDrdsDbRdsRelationInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDrdsDbRdsRelationInfoRequest $request
     *
     * @return GetDrdsDbRdsRelationInfoResponse
     */
    public function getDrdsDbRdsRelationInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDrdsDbRdsRelationInfoWithOptions($request, $runtime);
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
        $query                 = [];
        $query['NextToken']    = $request->nextToken;
        $query['RegionId']     = $request->regionId;
        $query['ResourceId']   = $request->resourceId;
        $query['ResourceType'] = $request->resourceType;
        $query['Tag']          = $request->tag;
        $req                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListTagResources',
            'version'     => '2019-01-23',
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
     * @param ListUserReportsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListUserReportsResponse
     */
    public function listUserReportsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $query['ReportId']       = $request->reportId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListUserReports',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListUserReportsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListUserReportsRequest $request
     *
     * @return ListUserReportsResponse
     */
    public function listUserReports($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserReportsWithOptions($request, $runtime);
    }

    /**
     * @param ListVersionsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListVersionsResponse
     */
    public function listVersionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $query['DrdsVer']        = $request->drdsVer;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListVersions',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListVersionsRequest $request
     *
     * @return ListVersionsResponse
     */
    public function listVersions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVersionsWithOptions($request, $runtime);
    }

    /**
     * @param ManagePrivateRdsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ManagePrivateRdsResponse
     */
    public function managePrivateRdsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DBInstanceId']   = $request->DBInstanceId;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $query['Params']         = $request->params;
        $query['RdsAction']      = $request->rdsAction;
        $query['RegionId']       = $request->regionId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ManagePrivateRds',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ManagePrivateRdsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ManagePrivateRdsRequest $request
     *
     * @return ManagePrivateRdsResponse
     */
    public function managePrivateRds($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->managePrivateRdsWithOptions($request, $runtime);
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
        $query                   = [];
        $query['AccountName']    = $request->accountName;
        $query['Description']    = $request->description;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyAccountDescription',
            'version'     => '2019-01-23',
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
     * @param ModifyAccountPrivilegeRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyAccountPrivilegeResponse
     */
    public function modifyAccountPrivilegeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['AccountName']    = $request->accountName;
        $query['DbPrivilege']    = $request->dbPrivilege;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $query['RegionId']       = $request->regionId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyAccountPrivilege',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyAccountPrivilegeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyAccountPrivilegeRequest $request
     *
     * @return ModifyAccountPrivilegeResponse
     */
    public function modifyAccountPrivilege($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAccountPrivilegeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDrdsInstanceDescriptionRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ModifyDrdsInstanceDescriptionResponse
     */
    public function modifyDrdsInstanceDescriptionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['Description']    = $request->description;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyDrdsInstanceDescription',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyDrdsInstanceDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyDrdsInstanceDescriptionRequest $request
     *
     * @return ModifyDrdsInstanceDescriptionResponse
     */
    public function modifyDrdsInstanceDescription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDrdsInstanceDescriptionWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDrdsIpWhiteListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyDrdsIpWhiteListResponse
     */
    public function modifyDrdsIpWhiteListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DbName']         = $request->dbName;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $query['GroupAttribute'] = $request->groupAttribute;
        $query['GroupName']      = $request->groupName;
        $query['IpWhiteList']    = $request->ipWhiteList;
        $query['Mode']           = $request->mode;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyDrdsIpWhiteList',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyDrdsIpWhiteListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyDrdsIpWhiteListRequest $request
     *
     * @return ModifyDrdsIpWhiteListResponse
     */
    public function modifyDrdsIpWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDrdsIpWhiteListWithOptions($request, $runtime);
    }

    /**
     * @param ModifyEventTaskStatusRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyEventTaskStatusResponse
     */
    public function modifyEventTaskStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['EventId']    = $request->eventId;
        $query['Region']     = $request->region;
        $query['SwitchTime'] = $request->switchTime;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyEventTaskStatus',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyEventTaskStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyEventTaskStatusRequest $request
     *
     * @return ModifyEventTaskStatusResponse
     */
    public function modifyEventTaskStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyEventTaskStatusWithOptions($request, $runtime);
    }

    /**
     * @param ModifyPolarDbReadWeightRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyPolarDbReadWeightResponse
     */
    public function modifyPolarDbReadWeightWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DbInstanceId']   = $request->dbInstanceId;
        $query['DbName']         = $request->dbName;
        $query['DbNodeIds']      = $request->dbNodeIds;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $query['Weights']        = $request->weights;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyPolarDbReadWeight',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyPolarDbReadWeightResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyPolarDbReadWeightRequest $request
     *
     * @return ModifyPolarDbReadWeightResponse
     */
    public function modifyPolarDbReadWeight($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyPolarDbReadWeightWithOptions($request, $runtime);
    }

    /**
     * @param ModifyRdsReadWeightRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyRdsReadWeightResponse
     */
    public function modifyRdsReadWeightWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DbName']         = $request->dbName;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $query['InstanceNames']  = $request->instanceNames;
        $query['Weights']        = $request->weights;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyRdsReadWeight',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyRdsReadWeightResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyRdsReadWeightRequest $request
     *
     * @return ModifyRdsReadWeightResponse
     */
    public function modifyRdsReadWeight($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyRdsReadWeightWithOptions($request, $runtime);
    }

    /**
     * @param PreCheckSqlFlashbackTaskRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return PreCheckSqlFlashbackTaskResponse
     */
    public function preCheckSqlFlashbackTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DbName']         = $request->dbName;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $query['EndTime']        = $request->endTime;
        $query['StartTime']      = $request->startTime;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'PreCheckSqlFlashbackTask',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return PreCheckSqlFlashbackTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PreCheckSqlFlashbackTaskRequest $request
     *
     * @return PreCheckSqlFlashbackTaskResponse
     */
    public function preCheckSqlFlashbackTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->preCheckSqlFlashbackTaskWithOptions($request, $runtime);
    }

    /**
     * @param PutRestorePreCheckRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return PutRestorePreCheckResponse
     */
    public function putRestorePreCheckWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                        = [];
        $query['BackupDbNames']       = $request->backupDbNames;
        $query['BackupId']            = $request->backupId;
        $query['BackupLevel']         = $request->backupLevel;
        $query['BackupMode']          = $request->backupMode;
        $query['DrdsInstanceId']      = $request->drdsInstanceId;
        $query['PreferredBackupTime'] = $request->preferredBackupTime;
        $req                          = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'PutRestorePreCheck',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return PutRestorePreCheckResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PutRestorePreCheckRequest $request
     *
     * @return PutRestorePreCheckResponse
     */
    public function putRestorePreCheck($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putRestorePreCheckWithOptions($request, $runtime);
    }

    /**
     * @param PutStartBackupRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return PutStartBackupResponse
     */
    public function putStartBackupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['BackupDbNames']  = $request->backupDbNames;
        $query['BackupLevel']    = $request->backupLevel;
        $query['BackupMode']     = $request->backupMode;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'PutStartBackup',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return PutStartBackupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PutStartBackupRequest $request
     *
     * @return PutStartBackupResponse
     */
    public function putStartBackup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putStartBackupWithOptions($request, $runtime);
    }

    /**
     * @param RearrangeDbToInstanceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RearrangeDbToInstanceResponse
     */
    public function rearrangeDbToInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['ChooseRds']      = $request->chooseRds;
        $query['ChooseSubDb']    = $request->chooseSubDb;
        $query['DbName']         = $request->dbName;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $query['InstanceList']   = $request->instanceList;
        $query['OrderId']        = $request->orderId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'RearrangeDbToInstance',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RearrangeDbToInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RearrangeDbToInstanceRequest $request
     *
     * @return RearrangeDbToInstanceResponse
     */
    public function rearrangeDbToInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rearrangeDbToInstanceWithOptions($request, $runtime);
    }

    /**
     * @param RefreshDrdsAtomUrlRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return RefreshDrdsAtomUrlResponse
     */
    public function refreshDrdsAtomUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DbName']         = $request->dbName;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'RefreshDrdsAtomUrl',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RefreshDrdsAtomUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RefreshDrdsAtomUrlRequest $request
     *
     * @return RefreshDrdsAtomUrlResponse
     */
    public function refreshDrdsAtomUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refreshDrdsAtomUrlWithOptions($request, $runtime);
    }

    /**
     * @param ReleaseInstanceInternetAddressRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ReleaseInstanceInternetAddressResponse
     */
    public function releaseInstanceInternetAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $query['RegionId']       = $request->regionId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ReleaseInstanceInternetAddress',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ReleaseInstanceInternetAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ReleaseInstanceInternetAddressRequest $request
     *
     * @return ReleaseInstanceInternetAddressResponse
     */
    public function releaseInstanceInternetAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseInstanceInternetAddressWithOptions($request, $runtime);
    }

    /**
     * @param RemoveBackupsSetRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return RemoveBackupsSetResponse
     */
    public function removeBackupsSetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['BackupId']       = $request->backupId;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'RemoveBackupsSet',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RemoveBackupsSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveBackupsSetRequest $request
     *
     * @return RemoveBackupsSetResponse
     */
    public function removeBackupsSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeBackupsSetWithOptions($request, $runtime);
    }

    /**
     * @param RemoveDrdsDbRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return RemoveDrdsDbResponse
     */
    public function removeDrdsDbWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DbName']         = $request->dbName;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'RemoveDrdsDb',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RemoveDrdsDbResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveDrdsDbRequest $request
     *
     * @return RemoveDrdsDbResponse
     */
    public function removeDrdsDb($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeDrdsDbWithOptions($request, $runtime);
    }

    /**
     * @param RemoveDrdsDbFailedRecordRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return RemoveDrdsDbFailedRecordResponse
     */
    public function removeDrdsDbFailedRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DbName']         = $request->dbName;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'RemoveDrdsDbFailedRecord',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RemoveDrdsDbFailedRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveDrdsDbFailedRecordRequest $request
     *
     * @return RemoveDrdsDbFailedRecordResponse
     */
    public function removeDrdsDbFailedRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeDrdsDbFailedRecordWithOptions($request, $runtime);
    }

    /**
     * @param RemoveDrdsInstanceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return RemoveDrdsInstanceResponse
     */
    public function removeDrdsInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'RemoveDrdsInstance',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RemoveDrdsInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveDrdsInstanceRequest $request
     *
     * @return RemoveDrdsInstanceResponse
     */
    public function removeDrdsInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeDrdsInstanceWithOptions($request, $runtime);
    }

    /**
     * @param RemoveDrdsMysqlRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return RemoveDrdsMysqlResponse
     */
    public function removeDrdsMysqlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DbInstanceId']   = $request->dbInstanceId;
        $query['DbName']         = $request->dbName;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $query['Force']          = $request->force;
        $query['RoDbInstanceId'] = $request->roDbInstanceId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'RemoveDrdsMysql',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RemoveDrdsMysqlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveDrdsMysqlRequest $request
     *
     * @return RemoveDrdsMysqlResponse
     */
    public function removeDrdsMysql($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeDrdsMysqlWithOptions($request, $runtime);
    }

    /**
     * @param RemoveInstanceAccountRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RemoveInstanceAccountResponse
     */
    public function removeInstanceAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['AccountName']    = $request->accountName;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'RemoveInstanceAccount',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RemoveInstanceAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveInstanceAccountRequest $request
     *
     * @return RemoveInstanceAccountResponse
     */
    public function removeInstanceAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeInstanceAccountWithOptions($request, $runtime);
    }

    /**
     * @param RemoveRecycleBinTableRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RemoveRecycleBinTableResponse
     */
    public function removeRecycleBinTableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DbName']         = $request->dbName;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $query['RegionId']       = $request->regionId;
        $query['TableName']      = $request->tableName;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'RemoveRecycleBinTable',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RemoveRecycleBinTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveRecycleBinTableRequest $request
     *
     * @return RemoveRecycleBinTableResponse
     */
    public function removeRecycleBinTable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeRecycleBinTableWithOptions($request, $runtime);
    }

    /**
     * @param RestartDrdsInstanceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RestartDrdsInstanceResponse
     */
    public function restartDrdsInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'RestartDrdsInstance',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RestartDrdsInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RestartDrdsInstanceRequest $request
     *
     * @return RestartDrdsInstanceResponse
     */
    public function restartDrdsInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restartDrdsInstanceWithOptions($request, $runtime);
    }

    /**
     * @param RollbackInstanceVersionRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return RollbackInstanceVersionResponse
     */
    public function rollbackInstanceVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $query['RegionId']       = $request->regionId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'RollbackInstanceVersion',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RollbackInstanceVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RollbackInstanceVersionRequest $request
     *
     * @return RollbackInstanceVersionResponse
     */
    public function rollbackInstanceVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rollbackInstanceVersionWithOptions($request, $runtime);
    }

    /**
     * @param SetBackupLocalRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SetBackupLocalResponse
     */
    public function setBackupLocalWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                             = [];
        $query['DrdsInstanceId']           = $request->drdsInstanceId;
        $query['HighSpaceUsageProtection'] = $request->highSpaceUsageProtection;
        $query['LocalLogRetentionHours']   = $request->localLogRetentionHours;
        $query['LocalLogRetentionSpace']   = $request->localLogRetentionSpace;
        $req                               = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SetBackupLocal',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SetBackupLocalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetBackupLocalRequest $request
     *
     * @return SetBackupLocalResponse
     */
    public function setBackupLocal($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setBackupLocalWithOptions($request, $runtime);
    }

    /**
     * @param SetBackupPolicyRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SetBackupPolicyResponse
     */
    public function setBackupPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                              = [];
        $query['BackupDbNames']             = $request->backupDbNames;
        $query['BackupLevel']               = $request->backupLevel;
        $query['BackupLog']                 = $request->backupLog;
        $query['BackupMode']                = $request->backupMode;
        $query['DataBackupRetentionPeriod'] = $request->dataBackupRetentionPeriod;
        $query['DrdsInstanceId']            = $request->drdsInstanceId;
        $query['LogBackupRetentionPeriod']  = $request->logBackupRetentionPeriod;
        $query['PreferredBackupEndTime']    = $request->preferredBackupEndTime;
        $query['PreferredBackupPeriod']     = $request->preferredBackupPeriod;
        $query['PreferredBackupStartTime']  = $request->preferredBackupStartTime;
        $req                                = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SetBackupPolicy',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SetBackupPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetBackupPolicyRequest $request
     *
     * @return SetBackupPolicyResponse
     */
    public function setBackupPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setBackupPolicyWithOptions($request, $runtime);
    }

    /**
     * @param SetupBroadcastTablesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SetupBroadcastTablesResponse
     */
    public function setupBroadcastTablesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['Active']         = $request->active;
        $query['DbName']         = $request->dbName;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $query['RegionId']       = $request->regionId;
        $query['TableName']      = $request->tableName;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SetupBroadcastTables',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SetupBroadcastTablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetupBroadcastTablesRequest $request
     *
     * @return SetupBroadcastTablesResponse
     */
    public function setupBroadcastTables($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setupBroadcastTablesWithOptions($request, $runtime);
    }

    /**
     * @param SetupDrdsParamsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SetupDrdsParamsResponse
     */
    public function setupDrdsParamsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['Data']           = $request->data;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $query['ParamLevel']     = $request->paramLevel;
        $query['RegionId']       = $request->regionId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SetupDrdsParams',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SetupDrdsParamsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetupDrdsParamsRequest $request
     *
     * @return SetupDrdsParamsResponse
     */
    public function setupDrdsParams($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setupDrdsParamsWithOptions($request, $runtime);
    }

    /**
     * @param SetupRecycleBinStatusRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SetupRecycleBinStatusResponse
     */
    public function setupRecycleBinStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DbName']         = $request->dbName;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $query['RegionId']       = $request->regionId;
        $query['StatusAction']   = $request->statusAction;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SetupRecycleBinStatus',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SetupRecycleBinStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetupRecycleBinStatusRequest $request
     *
     * @return SetupRecycleBinStatusResponse
     */
    public function setupRecycleBinStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setupRecycleBinStatusWithOptions($request, $runtime);
    }

    /**
     * @param SetupTableRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return SetupTableResponse
     */
    public function setupTableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                       = [];
        $query['AllowFullTableScan'] = $request->allowFullTableScan;
        $query['DbName']             = $request->dbName;
        $query['DrdsInstanceId']     = $request->drdsInstanceId;
        $query['RegionId']           = $request->regionId;
        $query['TableName']          = $request->tableName;
        $req                         = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SetupTable',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SetupTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetupTableRequest $request
     *
     * @return SetupTableResponse
     */
    public function setupTable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setupTableWithOptions($request, $runtime);
    }

    /**
     * @param SetupTableAsyncRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SetupTableAsyncResponse
     */
    public function setupTableAsyncWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                       = [];
        $query['AllowFullTableScan'] = $request->allowFullTableScan;
        $query['DbName']             = $request->dbName;
        $query['DrdsInstanceId']     = $request->drdsInstanceId;
        $query['RegionId']           = $request->regionId;
        $query['TableName']          = $request->tableName;
        $req                         = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SetupTableAsync',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SetupTableAsyncResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetupTableAsyncRequest $request
     *
     * @return SetupTableAsyncResponse
     */
    public function setupTableAsync($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setupTableAsyncWithOptions($request, $runtime);
    }

    /**
     * @param SqlCompatibilityCancelRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return SqlCompatibilityCancelResponse
     */
    public function sqlCompatibilityCancelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $query['TaskId']         = $request->taskId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SqlCompatibilityCancel',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SqlCompatibilityCancelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SqlCompatibilityCancelRequest $request
     *
     * @return SqlCompatibilityCancelResponse
     */
    public function sqlCompatibilityCancel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sqlCompatibilityCancelWithOptions($request, $runtime);
    }

    /**
     * @param SqlCompatibilityStartRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SqlCompatibilityStartResponse
     */
    public function sqlCompatibilityStartWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['DrdsInstanceId']  = $request->drdsInstanceId;
        $query['PerformanceTest'] = $request->performanceTest;
        $query['TargetVersion']   = $request->targetVersion;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SqlCompatibilityStart',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SqlCompatibilityStartResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SqlCompatibilityStartRequest $request
     *
     * @return SqlCompatibilityStartResponse
     */
    public function sqlCompatibilityStart($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sqlCompatibilityStartWithOptions($request, $runtime);
    }

    /**
     * @param StartRestoreRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return StartRestoreResponse
     */
    public function startRestoreWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                        = [];
        $query['BackupDbNames']       = $request->backupDbNames;
        $query['BackupId']            = $request->backupId;
        $query['BackupLevel']         = $request->backupLevel;
        $query['BackupMode']          = $request->backupMode;
        $query['DrdsInstanceId']      = $request->drdsInstanceId;
        $query['PreferredBackupTime'] = $request->preferredBackupTime;
        $req                          = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'StartRestore',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StartRestoreResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StartRestoreRequest $request
     *
     * @return StartRestoreResponse
     */
    public function startRestore($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startRestoreWithOptions($request, $runtime);
    }

    /**
     * @param SubmitCleanTaskRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SubmitCleanTaskResponse
     */
    public function submitCleanTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DbName']         = $request->dbName;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $query['ExpandType']     = $request->expandType;
        $query['JobId']          = $request->jobId;
        $query['ParentJobId']    = $request->parentJobId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SubmitCleanTask',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SubmitCleanTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitCleanTaskRequest $request
     *
     * @return SubmitCleanTaskResponse
     */
    public function submitCleanTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitCleanTaskWithOptions($request, $runtime);
    }

    /**
     * @param SubmitHotExpandPreCheckTaskRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return SubmitHotExpandPreCheckTaskResponse
     */
    public function submitHotExpandPreCheckTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DbInstType']     = $request->dbInstType;
        $query['DbName']         = $request->dbName;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $query['TableList']      = $request->tableList;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SubmitHotExpandPreCheckTask',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SubmitHotExpandPreCheckTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitHotExpandPreCheckTaskRequest $request
     *
     * @return SubmitHotExpandPreCheckTaskResponse
     */
    public function submitHotExpandPreCheckTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitHotExpandPreCheckTaskWithOptions($request, $runtime);
    }

    /**
     * @param SubmitHotExpandTaskRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SubmitHotExpandTaskResponse
     */
    public function submitHotExpandTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['DbName']               = $request->dbName;
        $query['DrdsInstanceId']       = $request->drdsInstanceId;
        $query['ExtendedMapping']      = $request->extendedMapping;
        $query['InstanceDbMapping']    = $request->instanceDbMapping;
        $query['Mapping']              = $request->mapping;
        $query['SupperAccountMapping'] = $request->supperAccountMapping;
        $query['TaskDesc']             = $request->taskDesc;
        $query['TaskName']             = $request->taskName;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SubmitHotExpandTask',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SubmitHotExpandTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitHotExpandTaskRequest $request
     *
     * @return SubmitHotExpandTaskResponse
     */
    public function submitHotExpandTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitHotExpandTaskWithOptions($request, $runtime);
    }

    /**
     * @param SubmitSmoothExpandPreCheckRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return SubmitSmoothExpandPreCheckResponse
     */
    public function submitSmoothExpandPreCheckWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DbInstType']     = $request->dbInstType;
        $query['DbName']         = $request->dbName;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SubmitSmoothExpandPreCheck',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SubmitSmoothExpandPreCheckResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitSmoothExpandPreCheckRequest $request
     *
     * @return SubmitSmoothExpandPreCheckResponse
     */
    public function submitSmoothExpandPreCheck($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitSmoothExpandPreCheckWithOptions($request, $runtime);
    }

    /**
     * @param SubmitSmoothExpandPreCheckTaskRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return SubmitSmoothExpandPreCheckTaskResponse
     */
    public function submitSmoothExpandPreCheckTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DbName']         = $request->dbName;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SubmitSmoothExpandPreCheckTask',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SubmitSmoothExpandPreCheckTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitSmoothExpandPreCheckTaskRequest $request
     *
     * @return SubmitSmoothExpandPreCheckTaskResponse
     */
    public function submitSmoothExpandPreCheckTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitSmoothExpandPreCheckTaskWithOptions($request, $runtime);
    }

    /**
     * @param SubmitSqlFlashbackTaskRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return SubmitSqlFlashbackTaskResponse
     */
    public function submitSqlFlashbackTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                      = [];
        $query['DbName']            = $request->dbName;
        $query['DrdsInstanceId']    = $request->drdsInstanceId;
        $query['EndTime']           = $request->endTime;
        $query['RecallRestoreType'] = $request->recallRestoreType;
        $query['RecallType']        = $request->recallType;
        $query['SqlPk']             = $request->sqlPk;
        $query['SqlType']           = $request->sqlType;
        $query['StartTime']         = $request->startTime;
        $query['TableName']         = $request->tableName;
        $query['TraceId']           = $request->traceId;
        $req                        = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SubmitSqlFlashbackTask',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SubmitSqlFlashbackTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitSqlFlashbackTaskRequest $request
     *
     * @return SubmitSqlFlashbackTaskResponse
     */
    public function submitSqlFlashbackTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitSqlFlashbackTaskWithOptions($request, $runtime);
    }

    /**
     * @param SwitchGlobalBroadcastTypeRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return SwitchGlobalBroadcastTypeResponse
     */
    public function switchGlobalBroadcastTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DbName']         = $request->dbName;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $query['RegionId']       = $request->regionId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SwitchGlobalBroadcastType',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SwitchGlobalBroadcastTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SwitchGlobalBroadcastTypeRequest $request
     *
     * @return SwitchGlobalBroadcastTypeResponse
     */
    public function switchGlobalBroadcastType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->switchGlobalBroadcastTypeWithOptions($request, $runtime);
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
        $query                 = [];
        $query['RegionId']     = $request->regionId;
        $query['ResourceId']   = $request->resourceId;
        $query['ResourceType'] = $request->resourceType;
        $query['Tag']          = $request->tag;
        $req                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'TagResources',
            'version'     => '2019-01-23',
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
     * @param UntagResourcesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                 = [];
        $query['All']          = $request->all;
        $query['RegionId']     = $request->regionId;
        $query['ResourceId']   = $request->resourceId;
        $query['ResourceType'] = $request->resourceType;
        $query['TagKey']       = $request->tagKey;
        $req                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UntagResources',
            'version'     => '2019-01-23',
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
     * @param UpdateInstanceNetworkRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateInstanceNetworkResponse
     */
    public function updateInstanceNetworkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                           = [];
        $query['ClassicExpiredDays']     = $request->classicExpiredDays;
        $query['DrdsInstanceId']         = $request->drdsInstanceId;
        $query['RetainClassic']          = $request->retainClassic;
        $query['SrcInstanceNetworkType'] = $request->srcInstanceNetworkType;
        $req                             = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UpdateInstanceNetwork',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateInstanceNetworkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateInstanceNetworkRequest $request
     *
     * @return UpdateInstanceNetworkResponse
     */
    public function updateInstanceNetwork($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateInstanceNetworkWithOptions($request, $runtime);
    }

    /**
     * @param UpdatePrivateRdsClassRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdatePrivateRdsClassResponse
     */
    public function updatePrivateRdsClassWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['AutoUseCoupon']  = $request->autoUseCoupon;
        $query['DBInstanceId']   = $request->DBInstanceId;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $query['PrePayDuration'] = $request->prePayDuration;
        $query['RdsClass']       = $request->rdsClass;
        $query['Storage']        = $request->storage;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UpdatePrivateRdsClass',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdatePrivateRdsClassResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdatePrivateRdsClassRequest $request
     *
     * @return UpdatePrivateRdsClassResponse
     */
    public function updatePrivateRdsClass($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePrivateRdsClassWithOptions($request, $runtime);
    }

    /**
     * @param UpdateResourceGroupAttributeRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return UpdateResourceGroupAttributeResponse
     */
    public function updateResourceGroupAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                       = [];
        $query['DrdsInstanceId']     = $request->drdsInstanceId;
        $query['NewResourceGroupId'] = $request->newResourceGroupId;
        $query['RegionId']           = $request->regionId;
        $req                         = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UpdateResourceGroupAttribute',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateResourceGroupAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateResourceGroupAttributeRequest $request
     *
     * @return UpdateResourceGroupAttributeResponse
     */
    public function updateResourceGroupAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateResourceGroupAttributeWithOptions($request, $runtime);
    }

    /**
     * @param UpgradeHiStoreInstanceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UpgradeHiStoreInstanceResponse
     */
    public function upgradeHiStoreInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                      = [];
        $query['DrdsInstanceId']    = $request->drdsInstanceId;
        $query['HistoreInstanceId'] = $request->historeInstanceId;
        $query['RegionId']          = $request->regionId;
        $req                        = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UpgradeHiStoreInstance',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpgradeHiStoreInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpgradeHiStoreInstanceRequest $request
     *
     * @return UpgradeHiStoreInstanceResponse
     */
    public function upgradeHiStoreInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeHiStoreInstanceWithOptions($request, $runtime);
    }

    /**
     * @param UpgradeInstanceVersionRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UpgradeInstanceVersionResponse
     */
    public function upgradeInstanceVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $query['RegionId']       = $request->regionId;
        $query['Rpm']            = $request->rpm;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UpgradeInstanceVersion',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpgradeInstanceVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpgradeInstanceVersionRequest $request
     *
     * @return UpgradeInstanceVersionResponse
     */
    public function upgradeInstanceVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeInstanceVersionWithOptions($request, $runtime);
    }

    /**
     * @param ValidateShardTaskRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ValidateShardTaskResponse
     */
    public function validateShardTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['DbName']          = $request->dbName;
        $query['DrdsInstanceId']  = $request->drdsInstanceId;
        $query['RegionId']        = $request->regionId;
        $query['SourceTableName'] = $request->sourceTableName;
        $query['TargetTableName'] = $request->targetTableName;
        $query['TaskType']        = $request->taskType;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ValidateShardTask',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ValidateShardTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ValidateShardTaskRequest $request
     *
     * @return ValidateShardTaskResponse
     */
    public function validateShardTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->validateShardTaskWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRdsInstInfosRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeRdsInstInfosResponse
     */
    public function describeRdsInstInfosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['PageNumber'] = $request->pageNumber;
        $query['PageSize']   = $request->pageSize;
        $query['Search']     = $request->search;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'describeRdsInstInfos',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeRdsInstInfosResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRdsInstInfosRequest $request
     *
     * @return DescribeRdsInstInfosResponse
     */
    public function describeRdsInstInfos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRdsInstInfosWithOptions($request, $runtime);
    }
}
