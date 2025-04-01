<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\BatchKillProcessListRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\BatchKillProcessListResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\BatchKillSessionListRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\BatchKillSessionListResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CancelProjectModifyRecordRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CancelProjectModifyRecordResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateBackupSetDownloadLinkRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateBackupSetDownloadLinkResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateDatabaseRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateDatabaseResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateInstanceRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateInstanceResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateLabelRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateLabelResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateMySqlDataSourceRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateMySqlDataSourceResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateOceanBaseDataSourceRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateOceanBaseDataSourceResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateOmsMysqlDataSourceRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateOmsMysqlDataSourceResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateProjectModifyRecordsRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateProjectModifyRecordsResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateProjectModifyRecordsShrinkRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateProjectRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateProjectResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateProjectShrinkRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateRdsPostgreSQLDataSourceRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateRdsPostgreSQLDataSourceResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateSecurityIpGroupRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateSecurityIpGroupResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateTagRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateTagResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateTagValueRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateTagValueResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateTenantReadOnlyConnectionRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateTenantReadOnlyConnectionResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateTenantRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateTenantResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateTenantSecurityIpGroupRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateTenantSecurityIpGroupResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateTenantShrinkRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateTenantUserRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateTenantUserResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DeleteDatabasesRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DeleteDatabasesResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DeleteDataSourceRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DeleteDataSourceResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DeleteInstancesRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DeleteInstancesResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DeleteProjectRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DeleteProjectResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DeleteSecurityIpGroupRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DeleteSecurityIpGroupResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DeleteTagRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DeleteTagResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DeleteTagValueRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DeleteTagValueResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DeleteTenantSecurityIpGroupRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DeleteTenantSecurityIpGroupResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DeleteTenantsRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DeleteTenantsResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DeleteTenantUsersRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DeleteTenantUsersResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeAnomalySQLListRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeAnomalySQLListResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeAnomalySQLListShrinkRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeAvailableCpuResourceRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeAvailableCpuResourceResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeAvailableMemResourceRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeAvailableMemResourceResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeAvailableSpecRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeAvailableSpecResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeAvailableZoneRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeAvailableZoneResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeBackupEncryptedStringRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeBackupEncryptedStringResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeBackupSetDownloadLinkRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeBackupSetDownloadLinkResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeCharsetRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeCharsetResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeDataBackupSetRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeDataBackupSetResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeDatabasesRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeDatabasesResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceCreatableZoneRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceCreatableZoneResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceSecurityConfigsRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceSecurityConfigsResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstancesRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstancesResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceSSLRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceSSLResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceSummaryRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceSummaryResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceTagsRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceTagsResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceTenantModesRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceTenantModesResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceTopologyRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceTopologyResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeMetricsDataRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeMetricsDataResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeNodeMetricsRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeNodeMetricsResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeOasAnomalySQLListRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeOasAnomalySQLListResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeOasSlowSQLListRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeOasSlowSQLListResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeOasSQLDetailsRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeOasSQLDetailsResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeOasSQLHistoryListRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeOasSQLHistoryListResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeOasSQLPlansRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeOasSQLPlansResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeOasTopSQLListRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeOasTopSQLListResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeOutlineBindingRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeOutlineBindingResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeParametersHistoryRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeParametersHistoryResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeParametersRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeParametersResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProcessStatsCompositionRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProcessStatsCompositionResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProjectComponentsRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProjectComponentsResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProjectProgressRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProjectProgressResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProjectRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProjectResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProjectStepMetricRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProjectStepMetricResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProjectStepsRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProjectStepsResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProxyServiceRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProxyServiceResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeRecommendIndexRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeRecommendIndexResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeRestorableTenantsRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeRestorableTenantsResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSampleSqlRawTextsRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSampleSqlRawTextsResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSecurityIpGroupsRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSecurityIpGroupsResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSessionListRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSessionListResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSlowSQLHistoryListRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSlowSQLHistoryListResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSlowSQLListRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSlowSQLListResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSlowSQLListShrinkRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSqlAuditStatRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSqlAuditStatResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSQLDetailsRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSQLDetailsResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSQLHistoryListRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSQLHistoryListResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSQLPlansRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSQLPlansResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSQLSamplesRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSQLSamplesResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSQLTuningAdvicesRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSQLTuningAdvicesResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeStandbyCreateModeRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeStandbyCreateModeResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTagValuesRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTagValuesResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantEncryptionRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantEncryptionResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantMetricsRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantMetricsResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantReadableScnRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantReadableScnResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantSecurityConfigsRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantSecurityConfigsResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantSecurityIpGroupsRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantSecurityIpGroupsResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantsRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantsResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantTagsRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantTagsResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantUserRolesRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantUserRolesResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantUsersRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantUsersResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantZonesReadRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantZonesReadResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTimeZonesResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTopSQLListRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTopSQLListResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTopSQLListShrinkRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeZonesRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeZonesResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\GetUploadOssUrlRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\GetUploadOssUrlResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\KillProcessListRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\KillProcessListResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListAllLabelsResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListDataSourceRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListDataSourceResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListDataSourceShrinkRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListProjectFullVerifyResultRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListProjectFullVerifyResultResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListProjectFullVerifyResultShrinkRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListProjectModifyRecordsRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListProjectModifyRecordsResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListProjectsRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListProjectsResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListProjectsShrinkRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListWorkerInstancesRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListWorkerInstancesResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListWorkerInstancesShrinkRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyDatabaseDescriptionRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyDatabaseDescriptionResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyDatabaseUserRolesRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyDatabaseUserRolesResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyInstanceNameRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyInstanceNameResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyInstanceNodeNumRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyInstanceNodeNumResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyInstanceSpecRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyInstanceSpecResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyInstanceSSLRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyInstanceSSLResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyInstanceTagsRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyInstanceTagsResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyInstanceTemporaryCapacityRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyInstanceTemporaryCapacityResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyParametersRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyParametersResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifySecurityIpsRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifySecurityIpsResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyTagNameRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyTagNameResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyTagValueNameRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyTagValueNameResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyTenantEncryptionRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyTenantEncryptionResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyTenantPrimaryZoneRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyTenantPrimaryZoneResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyTenantResourceRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyTenantResourceResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyTenantSecurityIpGroupRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyTenantSecurityIpGroupResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyTenantTagsRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyTenantTagsResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyTenantUserDescriptionRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyTenantUserDescriptionResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyTenantUserPasswordRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyTenantUserPasswordResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyTenantUserRolesRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyTenantUserRolesResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyTenantUserStatusRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyTenantUserStatusResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ReleaseProjectRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ReleaseProjectResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ReleaseWorkerInstanceRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ReleaseWorkerInstanceResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\RemoveStandbyInstanceRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\RemoveStandbyInstanceResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ResumeProjectRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ResumeProjectResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\RetryProjectModifyRecordsRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\RetryProjectModifyRecordsResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\StartProjectRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\StartProjectResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\StartProjectsByLabelRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\StartProjectsByLabelResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\StopProjectModifyRecordsRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\StopProjectModifyRecordsResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\StopProjectRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\StopProjectResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\StopProjectsByLabelRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\StopProjectsByLabelResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\SwitchoverInstanceRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\SwitchoverInstanceResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\UpdateProjectConfigRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\UpdateProjectConfigResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\UpdateProjectConfigShrinkRequest;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class OceanBasePro extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('oceanbasepro', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * You can call this operation to close sessions in batches. Please note that this operation is executed asynchronously. After calling this operation, you need to verify it by calling DescribeProcessStatsComposition.
     *
     * @param request - BatchKillProcessListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchKillProcessListResponse
     *
     * @param BatchKillProcessListRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return BatchKillProcessListResponse
     */
    public function batchKillProcessListWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->sessionList) {
            @$body['SessionList'] = $request->sessionList;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BatchKillProcessList',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return BatchKillProcessListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return BatchKillProcessListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call this operation to close sessions in batches. Please note that this operation is executed asynchronously. After calling this operation, you need to verify it by calling DescribeProcessStatsComposition.
     *
     * @param request - BatchKillProcessListRequest
     *
     * @returns BatchKillProcessListResponse
     *
     * @param BatchKillProcessListRequest $request
     *
     * @return BatchKillProcessListResponse
     */
    public function batchKillProcessList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchKillProcessListWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to close sessions between the ApsaraDB for OceanBase and the application in batches. Please note that this operation is executed asynchronously. After calling this operation, you need to verify it by calling DescribeSessionList.
     *
     * @param request - BatchKillSessionListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchKillSessionListResponse
     *
     * @param BatchKillSessionListRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return BatchKillSessionListResponse
     */
    public function batchKillSessionListWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->sessionList) {
            @$body['SessionList'] = $request->sessionList;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BatchKillSessionList',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return BatchKillSessionListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return BatchKillSessionListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call this operation to close sessions between the ApsaraDB for OceanBase and the application in batches. Please note that this operation is executed asynchronously. After calling this operation, you need to verify it by calling DescribeSessionList.
     *
     * @param request - BatchKillSessionListRequest
     *
     * @returns BatchKillSessionListResponse
     *
     * @param BatchKillSessionListRequest $request
     *
     * @return BatchKillSessionListResponse
     */
    public function batchKillSessionList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchKillSessionListWithOptions($request, $runtime);
    }

    /**
     * 根据记录id取消修改操作 （仅支持处于 PENDING 状态的修改记录）.
     *
     * @param request - CancelProjectModifyRecordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelProjectModifyRecordResponse
     *
     * @param CancelProjectModifyRecordRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CancelProjectModifyRecordResponse
     */
    public function cancelProjectModifyRecordWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CancelProjectModifyRecord',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CancelProjectModifyRecordResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CancelProjectModifyRecordResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 根据记录id取消修改操作 （仅支持处于 PENDING 状态的修改记录）.
     *
     * @param request - CancelProjectModifyRecordRequest
     *
     * @returns CancelProjectModifyRecordResponse
     *
     * @param CancelProjectModifyRecordRequest $request
     *
     * @return CancelProjectModifyRecordResponse
     */
    public function cancelProjectModifyRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelProjectModifyRecordWithOptions($request, $runtime);
    }

    /**
     * 创建备份任务下载链接.
     *
     * @param request - CreateBackupSetDownloadLinkRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateBackupSetDownloadLinkResponse
     *
     * @param CreateBackupSetDownloadLinkRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return CreateBackupSetDownloadLinkResponse
     */
    public function createBackupSetDownloadLinkWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->backupSetId) {
            @$body['BackupSetId'] = $request->backupSetId;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateBackupSetDownloadLink',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateBackupSetDownloadLinkResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateBackupSetDownloadLinkResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建备份任务下载链接.
     *
     * @param request - CreateBackupSetDownloadLinkRequest
     *
     * @returns CreateBackupSetDownloadLinkResponse
     *
     * @param CreateBackupSetDownloadLinkRequest $request
     *
     * @return CreateBackupSetDownloadLinkResponse
     */
    public function createBackupSetDownloadLink($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBackupSetDownloadLinkWithOptions($request, $runtime);
    }

    /**
     * The request ID.
     *
     * @param request - CreateDatabaseRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDatabaseResponse
     *
     * @param CreateDatabaseRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateDatabaseResponse
     */
    public function createDatabaseWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->collation) {
            @$body['Collation'] = $request->collation;
        }

        if (null !== $request->databaseName) {
            @$body['DatabaseName'] = $request->databaseName;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->encoding) {
            @$body['Encoding'] = $request->encoding;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateDatabase',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateDatabaseResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateDatabaseResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * The request ID.
     *
     * @param request - CreateDatabaseRequest
     *
     * @returns CreateDatabaseResponse
     *
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
     * You can call this operation to create an OceanBase cluster.
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
        $body = [];
        if (null !== $request->autoRenew) {
            @$body['AutoRenew'] = $request->autoRenew;
        }

        if (null !== $request->autoRenewPeriod) {
            @$body['AutoRenewPeriod'] = $request->autoRenewPeriod;
        }

        if (null !== $request->chargeType) {
            @$body['ChargeType'] = $request->chargeType;
        }

        if (null !== $request->cpuArch) {
            @$body['CpuArch'] = $request->cpuArch;
        }

        if (null !== $request->diskSize) {
            @$body['DiskSize'] = $request->diskSize;
        }

        if (null !== $request->diskType) {
            @$body['DiskType'] = $request->diskType;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->instanceClass) {
            @$body['InstanceClass'] = $request->instanceClass;
        }

        if (null !== $request->instanceName) {
            @$body['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->isolationOptimization) {
            @$body['IsolationOptimization'] = $request->isolationOptimization;
        }

        if (null !== $request->obVersion) {
            @$body['ObVersion'] = $request->obVersion;
        }

        if (null !== $request->period) {
            @$body['Period'] = $request->period;
        }

        if (null !== $request->periodUnit) {
            @$body['PeriodUnit'] = $request->periodUnit;
        }

        if (null !== $request->primaryInstance) {
            @$body['PrimaryInstance'] = $request->primaryInstance;
        }

        if (null !== $request->primaryRegion) {
            @$body['PrimaryRegion'] = $request->primaryRegion;
        }

        if (null !== $request->replicaMode) {
            @$body['ReplicaMode'] = $request->replicaMode;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->series) {
            @$body['Series'] = $request->series;
        }

        if (null !== $request->zones) {
            @$body['Zones'] = $request->zones;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateInstance',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call this operation to create an OceanBase cluster.
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
     * 创建标签.
     *
     * @param request - CreateLabelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateLabelResponse
     *
     * @param CreateLabelRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateLabelResponse
     */
    public function createLabelWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateLabel',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateLabelResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateLabelResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建标签.
     *
     * @param request - CreateLabelRequest
     *
     * @returns CreateLabelResponse
     *
     * @param CreateLabelRequest $request
     *
     * @return CreateLabelResponse
     */
    public function createLabel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLabelWithOptions($request, $runtime);
    }

    /**
     * 创建 MySQL 数据源.
     *
     * @param request - CreateMySqlDataSourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMySqlDataSourceResponse
     *
     * @param CreateMySqlDataSourceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateMySqlDataSourceResponse
     */
    public function createMySqlDataSourceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->dgInstanceId) {
            @$body['DgInstanceId'] = $request->dgInstanceId;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ip) {
            @$body['Ip'] = $request->ip;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->password) {
            @$body['Password'] = $request->password;
        }

        if (null !== $request->port) {
            @$body['Port'] = $request->port;
        }

        if (null !== $request->schema) {
            @$body['Schema'] = $request->schema;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        if (null !== $request->useSsl) {
            @$body['UseSsl'] = $request->useSsl;
        }

        if (null !== $request->userName) {
            @$body['UserName'] = $request->userName;
        }

        if (null !== $request->vpcId) {
            @$body['VpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateMySqlDataSource',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateMySqlDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateMySqlDataSourceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建 MySQL 数据源.
     *
     * @param request - CreateMySqlDataSourceRequest
     *
     * @returns CreateMySqlDataSourceResponse
     *
     * @param CreateMySqlDataSourceRequest $request
     *
     * @return CreateMySqlDataSourceResponse
     */
    public function createMySqlDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMySqlDataSourceWithOptions($request, $runtime);
    }

    /**
     * 创建 OceanBase 数据源.
     *
     * @param request - CreateOceanBaseDataSourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateOceanBaseDataSourceResponse
     *
     * @param CreateOceanBaseDataSourceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateOceanBaseDataSourceResponse
     */
    public function createOceanBaseDataSourceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->cluster) {
            @$body['Cluster'] = $request->cluster;
        }

        if (null !== $request->configUrl) {
            @$body['ConfigUrl'] = $request->configUrl;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->drcPassword) {
            @$body['DrcPassword'] = $request->drcPassword;
        }

        if (null !== $request->drcUserName) {
            @$body['DrcUserName'] = $request->drcUserName;
        }

        if (null !== $request->innerDrcPassword) {
            @$body['InnerDrcPassword'] = $request->innerDrcPassword;
        }

        if (null !== $request->ip) {
            @$body['Ip'] = $request->ip;
        }

        if (null !== $request->logProxyIp) {
            @$body['LogProxyIp'] = $request->logProxyIp;
        }

        if (null !== $request->logProxyPort) {
            @$body['LogProxyPort'] = $request->logProxyPort;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->password) {
            @$body['Password'] = $request->password;
        }

        if (null !== $request->port) {
            @$body['Port'] = $request->port;
        }

        if (null !== $request->tenant) {
            @$body['Tenant'] = $request->tenant;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        if (null !== $request->userName) {
            @$body['UserName'] = $request->userName;
        }

        if (null !== $request->vpcId) {
            @$body['VpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateOceanBaseDataSource',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateOceanBaseDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateOceanBaseDataSourceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建 OceanBase 数据源.
     *
     * @param request - CreateOceanBaseDataSourceRequest
     *
     * @returns CreateOceanBaseDataSourceResponse
     *
     * @param CreateOceanBaseDataSourceRequest $request
     *
     * @return CreateOceanBaseDataSourceResponse
     */
    public function createOceanBaseDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOceanBaseDataSourceWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to create a MySQL data source.
     *
     * @remarks
     * To call this operation, you must add the IP address of the OceanBase Migration Service (OMS) server to the whitelist of the Alibaba Cloud database instance, the security rules of the ECS instance, or the security settings of your self-managed database (usually the firewall of your self-managed database) to ensure that OMS can successfully access your database instance. To obtain the IP address of the OMS server, go to the OMS data source management page in the OMS console.
     *
     * @param request - CreateOmsMysqlDataSourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateOmsMysqlDataSourceResponse
     *
     * @param CreateOmsMysqlDataSourceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateOmsMysqlDataSourceResponse
     */
    public function createOmsMysqlDataSourceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->dgDatabaseId) {
            @$body['DgDatabaseId'] = $request->dgDatabaseId;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ip) {
            @$body['Ip'] = $request->ip;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->password) {
            @$body['Password'] = $request->password;
        }

        if (null !== $request->port) {
            @$body['Port'] = $request->port;
        }

        if (null !== $request->schema) {
            @$body['Schema'] = $request->schema;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        if (null !== $request->username) {
            @$body['Username'] = $request->username;
        }

        if (null !== $request->vpcId) {
            @$body['VpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateOmsMysqlDataSource',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateOmsMysqlDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateOmsMysqlDataSourceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call this operation to create a MySQL data source.
     *
     * @remarks
     * To call this operation, you must add the IP address of the OceanBase Migration Service (OMS) server to the whitelist of the Alibaba Cloud database instance, the security rules of the ECS instance, or the security settings of your self-managed database (usually the firewall of your self-managed database) to ensure that OMS can successfully access your database instance. To obtain the IP address of the OMS server, go to the OMS data source management page in the OMS console.
     *
     * @param request - CreateOmsMysqlDataSourceRequest
     *
     * @returns CreateOmsMysqlDataSourceResponse
     *
     * @param CreateOmsMysqlDataSourceRequest $request
     *
     * @return CreateOmsMysqlDataSourceResponse
     */
    public function createOmsMysqlDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOmsMysqlDataSourceWithOptions($request, $runtime);
    }

    /**
     * 创建项目.
     *
     * @param tmpReq - CreateProjectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateProjectResponse
     *
     * @param CreateProjectRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return CreateProjectResponse
     */
    public function createProjectWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateProjectShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->commonTransferConfig) {
            $request->commonTransferConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->commonTransferConfig, 'CommonTransferConfig', 'json');
        }

        if (null !== $tmpReq->fullTransferConfig) {
            $request->fullTransferConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->fullTransferConfig, 'FullTransferConfig', 'json');
        }

        if (null !== $tmpReq->incrTransferConfig) {
            $request->incrTransferConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->incrTransferConfig, 'IncrTransferConfig', 'json');
        }

        if (null !== $tmpReq->labelIds) {
            $request->labelIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->labelIds, 'LabelIds', 'json');
        }

        if (null !== $tmpReq->reverseIncrTransferConfig) {
            $request->reverseIncrTransferConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->reverseIncrTransferConfig, 'ReverseIncrTransferConfig', 'json');
        }

        if (null !== $tmpReq->structTransferConfig) {
            $request->structTransferConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->structTransferConfig, 'StructTransferConfig', 'json');
        }

        if (null !== $tmpReq->transferMapping) {
            $request->transferMappingShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->transferMapping, 'TransferMapping', 'json');
        }

        $body = [];
        if (null !== $request->commonTransferConfigShrink) {
            @$body['CommonTransferConfig'] = $request->commonTransferConfigShrink;
        }

        if (null !== $request->enableFullTransfer) {
            @$body['EnableFullTransfer'] = $request->enableFullTransfer;
        }

        if (null !== $request->enableFullVerify) {
            @$body['EnableFullVerify'] = $request->enableFullVerify;
        }

        if (null !== $request->enableIncrTransfer) {
            @$body['EnableIncrTransfer'] = $request->enableIncrTransfer;
        }

        if (null !== $request->enableReverseIncrTransfer) {
            @$body['EnableReverseIncrTransfer'] = $request->enableReverseIncrTransfer;
        }

        if (null !== $request->enableStructTransfer) {
            @$body['EnableStructTransfer'] = $request->enableStructTransfer;
        }

        if (null !== $request->fullTransferConfigShrink) {
            @$body['FullTransferConfig'] = $request->fullTransferConfigShrink;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->incrTransferConfigShrink) {
            @$body['IncrTransferConfig'] = $request->incrTransferConfigShrink;
        }

        if (null !== $request->labelIdsShrink) {
            @$body['LabelIds'] = $request->labelIdsShrink;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->ossKey) {
            @$body['OssKey'] = $request->ossKey;
        }

        if (null !== $request->reverseIncrTransferConfigShrink) {
            @$body['ReverseIncrTransferConfig'] = $request->reverseIncrTransferConfigShrink;
        }

        if (null !== $request->sinkEndpointId) {
            @$body['SinkEndpointId'] = $request->sinkEndpointId;
        }

        if (null !== $request->sourceEndpointId) {
            @$body['SourceEndpointId'] = $request->sourceEndpointId;
        }

        if (null !== $request->structTransferConfigShrink) {
            @$body['StructTransferConfig'] = $request->structTransferConfigShrink;
        }

        if (null !== $request->transferMappingShrink) {
            @$body['TransferMapping'] = $request->transferMappingShrink;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        if (null !== $request->useOss) {
            @$body['UseOss'] = $request->useOss;
        }

        if (null !== $request->workerGradeId) {
            @$body['WorkerGradeId'] = $request->workerGradeId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateProject',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateProjectResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateProjectResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建项目.
     *
     * @param request - CreateProjectRequest
     *
     * @returns CreateProjectResponse
     *
     * @param CreateProjectRequest $request
     *
     * @return CreateProjectResponse
     */
    public function createProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createProjectWithOptions($request, $runtime);
    }

    /**
     * 修改传输对象（加减表）(仅支持处于 RUNNING/FAILED/SUSPEND 状态的项目).
     *
     * @param tmpReq - CreateProjectModifyRecordsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateProjectModifyRecordsResponse
     *
     * @param CreateProjectModifyRecordsRequest $tmpReq
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateProjectModifyRecordsResponse
     */
    public function createProjectModifyRecordsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateProjectModifyRecordsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->databases) {
            $request->databasesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->databases, 'Databases', 'json');
        }

        if (null !== $tmpReq->transferMapping) {
            $request->transferMappingShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->transferMapping, 'TransferMapping', 'json');
        }

        $body = [];
        if (null !== $request->databasesShrink) {
            @$body['Databases'] = $request->databasesShrink;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->transferMappingShrink) {
            @$body['TransferMapping'] = $request->transferMappingShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateProjectModifyRecords',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateProjectModifyRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateProjectModifyRecordsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 修改传输对象（加减表）(仅支持处于 RUNNING/FAILED/SUSPEND 状态的项目).
     *
     * @param request - CreateProjectModifyRecordsRequest
     *
     * @returns CreateProjectModifyRecordsResponse
     *
     * @param CreateProjectModifyRecordsRequest $request
     *
     * @return CreateProjectModifyRecordsResponse
     */
    public function createProjectModifyRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createProjectModifyRecordsWithOptions($request, $runtime);
    }

    /**
     * 创建RDS PG 数据源.
     *
     * @param request - CreateRdsPostgreSQLDataSourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateRdsPostgreSQLDataSourceResponse
     *
     * @param CreateRdsPostgreSQLDataSourceRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return CreateRdsPostgreSQLDataSourceResponse
     */
    public function createRdsPostgreSQLDataSourceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->databaseName) {
            @$body['DatabaseName'] = $request->databaseName;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->password) {
            @$body['Password'] = $request->password;
        }

        if (null !== $request->userName) {
            @$body['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateRdsPostgreSQLDataSource',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateRdsPostgreSQLDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateRdsPostgreSQLDataSourceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建RDS PG 数据源.
     *
     * @param request - CreateRdsPostgreSQLDataSourceRequest
     *
     * @returns CreateRdsPostgreSQLDataSourceResponse
     *
     * @param CreateRdsPostgreSQLDataSourceRequest $request
     *
     * @return CreateRdsPostgreSQLDataSourceResponse
     */
    public function createRdsPostgreSQLDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRdsPostgreSQLDataSourceWithOptions($request, $runtime);
    }

    /**
     * The name of the whitelist group.
     *
     * @param request - CreateSecurityIpGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSecurityIpGroupResponse
     *
     * @param CreateSecurityIpGroupRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateSecurityIpGroupResponse
     */
    public function createSecurityIpGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->securityIpGroupName) {
            @$body['SecurityIpGroupName'] = $request->securityIpGroupName;
        }

        if (null !== $request->securityIps) {
            @$body['SecurityIps'] = $request->securityIps;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateSecurityIpGroup',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateSecurityIpGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateSecurityIpGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * The name of the whitelist group.
     *
     * @param request - CreateSecurityIpGroupRequest
     *
     * @returns CreateSecurityIpGroupResponse
     *
     * @param CreateSecurityIpGroupRequest $request
     *
     * @return CreateSecurityIpGroupResponse
     */
    public function createSecurityIpGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSecurityIpGroupWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to create a tag group.
     *
     * @param request - CreateTagRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTagResponse
     *
     * @param CreateTagRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CreateTagResponse
     */
    public function createTagWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->key) {
            @$body['Key'] = $request->key;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateTag',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateTagResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateTagResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call this operation to create a tag group.
     *
     * @param request - CreateTagRequest
     *
     * @returns CreateTagResponse
     *
     * @param CreateTagRequest $request
     *
     * @return CreateTagResponse
     */
    public function createTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTagWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to create a tag.
     *
     * @param request - CreateTagValueRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTagValueResponse
     *
     * @param CreateTagValueRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateTagValueResponse
     */
    public function createTagValueWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->key) {
            @$body['Key'] = $request->key;
        }

        if (null !== $request->value) {
            @$body['Value'] = $request->value;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateTagValue',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateTagValueResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateTagValueResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call this operation to create a tag.
     *
     * @param request - CreateTagValueRequest
     *
     * @returns CreateTagValueResponse
     *
     * @param CreateTagValueRequest $request
     *
     * @return CreateTagValueResponse
     */
    public function createTagValue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTagValueWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to create a tenant.
     *
     * @param tmpReq - CreateTenantRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTenantResponse
     *
     * @param CreateTenantRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return CreateTenantResponse
     */
    public function createTenantWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateTenantShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->createParams) {
            $request->createParamsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->createParams, 'CreateParams', 'json');
        }

        $body = [];
        if (null !== $request->charset) {
            @$body['Charset'] = $request->charset;
        }

        if (null !== $request->cpu) {
            @$body['Cpu'] = $request->cpu;
        }

        if (null !== $request->createParamsShrink) {
            @$body['CreateParams'] = $request->createParamsShrink;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->logDisk) {
            @$body['LogDisk'] = $request->logDisk;
        }

        if (null !== $request->memory) {
            @$body['Memory'] = $request->memory;
        }

        if (null !== $request->primaryZone) {
            @$body['PrimaryZone'] = $request->primaryZone;
        }

        if (null !== $request->readOnlyZoneList) {
            @$body['ReadOnlyZoneList'] = $request->readOnlyZoneList;
        }

        if (null !== $request->tenantMode) {
            @$body['TenantMode'] = $request->tenantMode;
        }

        if (null !== $request->tenantName) {
            @$body['TenantName'] = $request->tenantName;
        }

        if (null !== $request->timeZone) {
            @$body['TimeZone'] = $request->timeZone;
        }

        if (null !== $request->unitNum) {
            @$body['UnitNum'] = $request->unitNum;
        }

        if (null !== $request->userVSwitchId) {
            @$body['UserVSwitchId'] = $request->userVSwitchId;
        }

        if (null !== $request->userVpcId) {
            @$body['UserVpcId'] = $request->userVpcId;
        }

        if (null !== $request->userVpcOwnerId) {
            @$body['UserVpcOwnerId'] = $request->userVpcOwnerId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateTenant',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateTenantResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateTenantResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call this operation to create a tenant.
     *
     * @param request - CreateTenantRequest
     *
     * @returns CreateTenantResponse
     *
     * @param CreateTenantRequest $request
     *
     * @return CreateTenantResponse
     */
    public function createTenant($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTenantWithOptions($request, $runtime);
    }

    /**
     * The request ID.
     *
     * @param request - CreateTenantReadOnlyConnectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTenantReadOnlyConnectionResponse
     *
     * @param CreateTenantReadOnlyConnectionRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return CreateTenantReadOnlyConnectionResponse
     */
    public function createTenantReadOnlyConnectionWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->vSwitchId) {
            @$body['VSwitchId'] = $request->vSwitchId;
        }

        if (null !== $request->vpcId) {
            @$body['VpcId'] = $request->vpcId;
        }

        if (null !== $request->zoneId) {
            @$body['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateTenantReadOnlyConnection',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateTenantReadOnlyConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateTenantReadOnlyConnectionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * The request ID.
     *
     * @param request - CreateTenantReadOnlyConnectionRequest
     *
     * @returns CreateTenantReadOnlyConnectionResponse
     *
     * @param CreateTenantReadOnlyConnectionRequest $request
     *
     * @return CreateTenantReadOnlyConnectionResponse
     */
    public function createTenantReadOnlyConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTenantReadOnlyConnectionWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to create the security whitelist for the tenant.
     *
     * @param request - CreateTenantSecurityIpGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTenantSecurityIpGroupResponse
     *
     * @param CreateTenantSecurityIpGroupRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return CreateTenantSecurityIpGroupResponse
     */
    public function createTenantSecurityIpGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->securityIpGroupName) {
            @$body['SecurityIpGroupName'] = $request->securityIpGroupName;
        }

        if (null !== $request->securityIps) {
            @$body['SecurityIps'] = $request->securityIps;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateTenantSecurityIpGroup',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateTenantSecurityIpGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateTenantSecurityIpGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call this operation to create the security whitelist for the tenant.
     *
     * @param request - CreateTenantSecurityIpGroupRequest
     *
     * @returns CreateTenantSecurityIpGroupResponse
     *
     * @param CreateTenantSecurityIpGroupRequest $request
     *
     * @return CreateTenantSecurityIpGroupResponse
     */
    public function createTenantSecurityIpGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTenantSecurityIpGroupWithOptions($request, $runtime);
    }

    /**
     * CreateTenantUser.
     *
     * @param request - CreateTenantUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTenantUserResponse
     *
     * @param CreateTenantUserRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateTenantUserResponse
     */
    public function createTenantUserWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->encryptionType) {
            @$body['EncryptionType'] = $request->encryptionType;
        }

        if (null !== $request->globalPermissions) {
            @$body['GlobalPermissions'] = $request->globalPermissions;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->roles) {
            @$body['Roles'] = $request->roles;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->userName) {
            @$body['UserName'] = $request->userName;
        }

        if (null !== $request->userPassword) {
            @$body['UserPassword'] = $request->userPassword;
        }

        if (null !== $request->userType) {
            @$body['UserType'] = $request->userType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateTenantUser',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateTenantUserResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateTenantUserResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * CreateTenantUser.
     *
     * @param request - CreateTenantUserRequest
     *
     * @returns CreateTenantUserResponse
     *
     * @param CreateTenantUserRequest $request
     *
     * @return CreateTenantUserResponse
     */
    public function createTenantUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTenantUserWithOptions($request, $runtime);
    }

    /**
     * 删除数据源.
     *
     * @param request - DeleteDataSourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDataSourceResponse
     *
     * @param DeleteDataSourceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteDataSourceResponse
     */
    public function deleteDataSourceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteDataSource',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteDataSourceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除数据源.
     *
     * @param request - DeleteDataSourceRequest
     *
     * @returns DeleteDataSourceResponse
     *
     * @param DeleteDataSourceRequest $request
     *
     * @return DeleteDataSourceResponse
     */
    public function deleteDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDataSourceWithOptions($request, $runtime);
    }

    /**
     * The request ID.
     *
     * @param request - DeleteDatabasesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDatabasesResponse
     *
     * @param DeleteDatabasesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteDatabasesResponse
     */
    public function deleteDatabasesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->databaseNames) {
            @$body['DatabaseNames'] = $request->databaseNames;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteDatabases',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteDatabasesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteDatabasesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * The request ID.
     *
     * @param request - DeleteDatabasesRequest
     *
     * @returns DeleteDatabasesResponse
     *
     * @param DeleteDatabasesRequest $request
     *
     * @return DeleteDatabasesResponse
     */
    public function deleteDatabases($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDatabasesWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to release an OceanBase cluster.
     *
     * @remarks
     * Before you call this operation, ensure that the following requirements are met:
     * - The cluster is in the Running state.
     * - The cluster is a primary cluster and the billing method is pay-as-you-go.
     *
     * @param request - DeleteInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteInstancesResponse
     *
     * @param DeleteInstancesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteInstancesResponse
     */
    public function deleteInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->backupRetainMode) {
            @$body['BackupRetainMode'] = $request->backupRetainMode;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->instanceIds) {
            @$body['InstanceIds'] = $request->instanceIds;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteInstances',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteInstancesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call this operation to release an OceanBase cluster.
     *
     * @remarks
     * Before you call this operation, ensure that the following requirements are met:
     * - The cluster is in the Running state.
     * - The cluster is a primary cluster and the billing method is pay-as-you-go.
     *
     * @param request - DeleteInstancesRequest
     *
     * @returns DeleteInstancesResponse
     *
     * @param DeleteInstancesRequest $request
     *
     * @return DeleteInstancesResponse
     */
    public function deleteInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteInstancesWithOptions($request, $runtime);
    }

    /**
     * 删除项目.
     *
     * @param request - DeleteProjectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteProjectResponse
     *
     * @param DeleteProjectRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteProjectResponse
     */
    public function deleteProjectWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteProject',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteProjectResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteProjectResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除项目.
     *
     * @param request - DeleteProjectRequest
     *
     * @returns DeleteProjectResponse
     *
     * @param DeleteProjectRequest $request
     *
     * @return DeleteProjectResponse
     */
    public function deleteProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteProjectWithOptions($request, $runtime);
    }

    /**
     * The name of the deleted IP address whitelist group.
     *
     * @param request - DeleteSecurityIpGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSecurityIpGroupResponse
     *
     * @param DeleteSecurityIpGroupRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteSecurityIpGroupResponse
     */
    public function deleteSecurityIpGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->securityIpGroupName) {
            @$body['SecurityIpGroupName'] = $request->securityIpGroupName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteSecurityIpGroup',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteSecurityIpGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteSecurityIpGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * The name of the deleted IP address whitelist group.
     *
     * @param request - DeleteSecurityIpGroupRequest
     *
     * @returns DeleteSecurityIpGroupResponse
     *
     * @param DeleteSecurityIpGroupRequest $request
     *
     * @return DeleteSecurityIpGroupResponse
     */
    public function deleteSecurityIpGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSecurityIpGroupWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to delete a tag group.
     *
     * @param request - DeleteTagRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteTagResponse
     *
     * @param DeleteTagRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return DeleteTagResponse
     */
    public function deleteTagWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->key) {
            @$body['Key'] = $request->key;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteTag',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteTagResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteTagResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call this operation to delete a tag group.
     *
     * @param request - DeleteTagRequest
     *
     * @returns DeleteTagResponse
     *
     * @param DeleteTagRequest $request
     *
     * @return DeleteTagResponse
     */
    public function deleteTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTagWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to delete a tag from a tag group.
     *
     * @param request - DeleteTagValueRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteTagValueResponse
     *
     * @param DeleteTagValueRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteTagValueResponse
     */
    public function deleteTagValueWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->key) {
            @$body['Key'] = $request->key;
        }

        if (null !== $request->value) {
            @$body['Value'] = $request->value;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteTagValue',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteTagValueResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteTagValueResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call this operation to delete a tag from a tag group.
     *
     * @param request - DeleteTagValueRequest
     *
     * @returns DeleteTagValueResponse
     *
     * @param DeleteTagValueRequest $request
     *
     * @return DeleteTagValueResponse
     */
    public function deleteTagValue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTagValueWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to delete the information on the whitelist group of the tenant.
     *
     * @param request - DeleteTenantSecurityIpGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteTenantSecurityIpGroupResponse
     *
     * @param DeleteTenantSecurityIpGroupRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DeleteTenantSecurityIpGroupResponse
     */
    public function deleteTenantSecurityIpGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->securityIpGroupName) {
            @$body['SecurityIpGroupName'] = $request->securityIpGroupName;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteTenantSecurityIpGroup',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteTenantSecurityIpGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteTenantSecurityIpGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call this operation to delete the information on the whitelist group of the tenant.
     *
     * @param request - DeleteTenantSecurityIpGroupRequest
     *
     * @returns DeleteTenantSecurityIpGroupResponse
     *
     * @param DeleteTenantSecurityIpGroupRequest $request
     *
     * @return DeleteTenantSecurityIpGroupResponse
     */
    public function deleteTenantSecurityIpGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTenantSecurityIpGroupWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to delete one or more database accounts.
     *
     * @param request - DeleteTenantUsersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteTenantUsersResponse
     *
     * @param DeleteTenantUsersRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteTenantUsersResponse
     */
    public function deleteTenantUsersWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->users) {
            @$body['Users'] = $request->users;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteTenantUsers',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteTenantUsersResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteTenantUsersResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call this operation to delete one or more database accounts.
     *
     * @param request - DeleteTenantUsersRequest
     *
     * @returns DeleteTenantUsersResponse
     *
     * @param DeleteTenantUsersRequest $request
     *
     * @return DeleteTenantUsersResponse
     */
    public function deleteTenantUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTenantUsersWithOptions($request, $runtime);
    }

    /**
     * The return result of the request.
     *
     * @param request - DeleteTenantsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteTenantsResponse
     *
     * @param DeleteTenantsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteTenantsResponse
     */
    public function deleteTenantsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->tenantIds) {
            @$body['TenantIds'] = $request->tenantIds;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteTenants',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteTenantsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteTenantsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * The return result of the request.
     *
     * @param request - DeleteTenantsRequest
     *
     * @returns DeleteTenantsResponse
     *
     * @param DeleteTenantsRequest $request
     *
     * @return DeleteTenantsResponse
     */
    public function deleteTenants($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTenantsWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to obtain the list of SQL statements that may have performance problems according to the diagnostic system.
     *
     * @param tmpReq - DescribeAnomalySQLListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAnomalySQLListResponse
     *
     * @param DescribeAnomalySQLListRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeAnomalySQLListResponse
     */
    public function describeAnomalySQLListWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribeAnomalySQLListShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->filterCondition) {
            $request->filterConditionShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->filterCondition, 'FilterCondition', 'json');
        }

        $body = [];
        if (null !== $request->acceptLanguage) {
            @$body['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->dbName) {
            @$body['DbName'] = $request->dbName;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->filterConditionShrink) {
            @$body['FilterCondition'] = $request->filterConditionShrink;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nodeIp) {
            @$body['NodeIp'] = $request->nodeIp;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->SQLId) {
            @$body['SQLId'] = $request->SQLId;
        }

        if (null !== $request->searchKeyWord) {
            @$body['SearchKeyWord'] = $request->searchKeyWord;
        }

        if (null !== $request->searchParameter) {
            @$body['SearchParameter'] = $request->searchParameter;
        }

        if (null !== $request->searchRule) {
            @$body['SearchRule'] = $request->searchRule;
        }

        if (null !== $request->searchValue) {
            @$body['SearchValue'] = $request->searchValue;
        }

        if (null !== $request->sortColumn) {
            @$body['SortColumn'] = $request->sortColumn;
        }

        if (null !== $request->sortOrder) {
            @$body['SortOrder'] = $request->sortOrder;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeAnomalySQLList',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeAnomalySQLListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeAnomalySQLListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call this operation to obtain the list of SQL statements that may have performance problems according to the diagnostic system.
     *
     * @param request - DescribeAnomalySQLListRequest
     *
     * @returns DescribeAnomalySQLListResponse
     *
     * @param DescribeAnomalySQLListRequest $request
     *
     * @return DescribeAnomalySQLListResponse
     */
    public function describeAnomalySQLList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAnomalySQLListWithOptions($request, $runtime);
    }

    /**
     * The maximum number of CPU cores per resource unit.
     *
     * @param request - DescribeAvailableCpuResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAvailableCpuResourceResponse
     *
     * @param DescribeAvailableCpuResourceRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeAvailableCpuResourceResponse
     */
    public function describeAvailableCpuResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->modifyType) {
            @$body['ModifyType'] = $request->modifyType;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeAvailableCpuResource',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeAvailableCpuResourceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeAvailableCpuResourceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * The maximum number of CPU cores per resource unit.
     *
     * @param request - DescribeAvailableCpuResourceRequest
     *
     * @returns DescribeAvailableCpuResourceResponse
     *
     * @param DescribeAvailableCpuResourceRequest $request
     *
     * @return DescribeAvailableCpuResourceResponse
     */
    public function describeAvailableCpuResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAvailableCpuResourceWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to query the available memory resource of an OceanBase Database tenant.
     *
     * @param request - DescribeAvailableMemResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAvailableMemResourceResponse
     *
     * @param DescribeAvailableMemResourceRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeAvailableMemResourceResponse
     */
    public function describeAvailableMemResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->cpuNum) {
            @$body['CpuNum'] = $request->cpuNum;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->unitNum) {
            @$body['UnitNum'] = $request->unitNum;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeAvailableMemResource',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeAvailableMemResourceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeAvailableMemResourceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call this operation to query the available memory resource of an OceanBase Database tenant.
     *
     * @param request - DescribeAvailableMemResourceRequest
     *
     * @returns DescribeAvailableMemResourceResponse
     *
     * @param DescribeAvailableMemResourceRequest $request
     *
     * @return DescribeAvailableMemResourceResponse
     */
    public function describeAvailableMemResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAvailableMemResourceWithOptions($request, $runtime);
    }

    /**
     * 获取集群变配页可选配置.
     *
     * @param request - DescribeAvailableSpecRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAvailableSpecResponse
     *
     * @param DescribeAvailableSpecRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeAvailableSpecResponse
     */
    public function describeAvailableSpecWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->spec) {
            @$body['Spec'] = $request->spec;
        }

        if (null !== $request->upgradeType) {
            @$body['UpgradeType'] = $request->upgradeType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeAvailableSpec',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeAvailableSpecResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeAvailableSpecResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取集群变配页可选配置.
     *
     * @param request - DescribeAvailableSpecRequest
     *
     * @returns DescribeAvailableSpecResponse
     *
     * @param DescribeAvailableSpecRequest $request
     *
     * @return DescribeAvailableSpecResponse
     */
    public function describeAvailableSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAvailableSpecWithOptions($request, $runtime);
    }

    /**
     * 获取集群售卖页可选配置.
     *
     * @param request - DescribeAvailableZoneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAvailableZoneResponse
     *
     * @param DescribeAvailableZoneRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeAvailableZoneResponse
     */
    public function describeAvailableZoneWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->cpuArch) {
            @$body['CpuArch'] = $request->cpuArch;
        }

        if (null !== $request->deployType) {
            @$body['DeployType'] = $request->deployType;
        }

        if (null !== $request->instanceType) {
            @$body['InstanceType'] = $request->instanceType;
        }

        if (null !== $request->obVersion) {
            @$body['ObVersion'] = $request->obVersion;
        }

        if (null !== $request->series) {
            @$body['Series'] = $request->series;
        }

        if (null !== $request->spec) {
            @$body['Spec'] = $request->spec;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeAvailableZone',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeAvailableZoneResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeAvailableZoneResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取集群售卖页可选配置.
     *
     * @param request - DescribeAvailableZoneRequest
     *
     * @returns DescribeAvailableZoneResponse
     *
     * @param DescribeAvailableZoneRequest $request
     *
     * @return DescribeAvailableZoneResponse
     */
    public function describeAvailableZone($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAvailableZoneWithOptions($request, $runtime);
    }

    /**
     * DescribeBackupEncryptedString.
     *
     * @param request - DescribeBackupEncryptedStringRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeBackupEncryptedStringResponse
     *
     * @param DescribeBackupEncryptedStringRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeBackupEncryptedStringResponse
     */
    public function describeBackupEncryptedStringWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeBackupEncryptedString',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeBackupEncryptedStringResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeBackupEncryptedStringResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * DescribeBackupEncryptedString.
     *
     * @param request - DescribeBackupEncryptedStringRequest
     *
     * @returns DescribeBackupEncryptedStringResponse
     *
     * @param DescribeBackupEncryptedStringRequest $request
     *
     * @return DescribeBackupEncryptedStringResponse
     */
    public function describeBackupEncryptedString($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupEncryptedStringWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to query the link for downloading a backup set of OceanBase Database.
     *
     * @param request - DescribeBackupSetDownloadLinkRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeBackupSetDownloadLinkResponse
     *
     * @param DescribeBackupSetDownloadLinkRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeBackupSetDownloadLinkResponse
     */
    public function describeBackupSetDownloadLinkWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->downloadTaskId) {
            @$body['DownloadTaskId'] = $request->downloadTaskId;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeBackupSetDownloadLink',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeBackupSetDownloadLinkResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeBackupSetDownloadLinkResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call this operation to query the link for downloading a backup set of OceanBase Database.
     *
     * @param request - DescribeBackupSetDownloadLinkRequest
     *
     * @returns DescribeBackupSetDownloadLinkResponse
     *
     * @param DescribeBackupSetDownloadLinkRequest $request
     *
     * @return DescribeBackupSetDownloadLinkResponse
     */
    public function describeBackupSetDownloadLink($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupSetDownloadLinkWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to query the character sets of an OceanBase Database tenant.
     *
     * @param request - DescribeCharsetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCharsetResponse
     *
     * @param DescribeCharsetRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeCharsetResponse
     */
    public function describeCharsetWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->series) {
            @$body['Series'] = $request->series;
        }

        if (null !== $request->tenantMode) {
            @$body['TenantMode'] = $request->tenantMode;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeCharset',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeCharsetResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeCharsetResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call this operation to query the character sets of an OceanBase Database tenant.
     *
     * @param request - DescribeCharsetRequest
     *
     * @returns DescribeCharsetResponse
     *
     * @param DescribeCharsetRequest $request
     *
     * @return DescribeCharsetResponse
     */
    public function describeCharset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCharsetWithOptions($request, $runtime);
    }

    /**
     * 查询备份集信息.
     *
     * @param request - DescribeDataBackupSetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDataBackupSetResponse
     *
     * @param DescribeDataBackupSetRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeDataBackupSetResponse
     */
    public function describeDataBackupSetWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->backupObjectType) {
            @$body['BackupObjectType'] = $request->backupObjectType;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeDataBackupSet',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeDataBackupSetResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDataBackupSetResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询备份集信息.
     *
     * @param request - DescribeDataBackupSetRequest
     *
     * @returns DescribeDataBackupSetResponse
     *
     * @param DescribeDataBackupSetRequest $request
     *
     * @return DescribeDataBackupSetResponse
     */
    public function describeDataBackupSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDataBackupSetWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to query databases in a tenant.
     *
     * @param request - DescribeDatabasesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDatabasesResponse
     *
     * @param DescribeDatabasesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeDatabasesResponse
     */
    public function describeDatabasesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->databaseName) {
            @$body['DatabaseName'] = $request->databaseName;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->searchKey) {
            @$body['SearchKey'] = $request->searchKey;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->withTables) {
            @$body['WithTables'] = $request->withTables;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeDatabases',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeDatabasesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDatabasesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call this operation to query databases in a tenant.
     *
     * @param request - DescribeDatabasesRequest
     *
     * @returns DescribeDatabasesResponse
     *
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
     * You can call this operation to query the detailed information of an OceanBase cluster.
     *
     * @param request - DescribeInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceResponse
     *
     * @param DescribeInstanceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeInstanceResponse
     */
    public function describeInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeInstance',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call this operation to query the detailed information of an OceanBase cluster.
     *
     * @param request - DescribeInstanceRequest
     *
     * @returns DescribeInstanceResponse
     *
     * @param DescribeInstanceRequest $request
     *
     * @return DescribeInstanceResponse
     */
    public function describeInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceWithOptions($request, $runtime);
    }

    /**
     * The ID of the zone.
     *
     * @param request - DescribeInstanceCreatableZoneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceCreatableZoneResponse
     *
     * @param DescribeInstanceCreatableZoneRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeInstanceCreatableZoneResponse
     */
    public function describeInstanceCreatableZoneWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeInstanceCreatableZone',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeInstanceCreatableZoneResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeInstanceCreatableZoneResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * The ID of the zone.
     *
     * @param request - DescribeInstanceCreatableZoneRequest
     *
     * @returns DescribeInstanceCreatableZoneResponse
     *
     * @param DescribeInstanceCreatableZoneRequest $request
     *
     * @return DescribeInstanceCreatableZoneResponse
     */
    public function describeInstanceCreatableZone($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceCreatableZoneWithOptions($request, $runtime);
    }

    /**
     * 查询集群SSL配置.
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
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeInstanceSSL',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeInstanceSSLResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeInstanceSSLResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询集群SSL配置.
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
     * You can call this operation to query security check items of an OceanBase cluster.
     *
     * @param request - DescribeInstanceSecurityConfigsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceSecurityConfigsResponse
     *
     * @param DescribeInstanceSecurityConfigsRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeInstanceSecurityConfigsResponse
     */
    public function describeInstanceSecurityConfigsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->checkId) {
            @$body['CheckId'] = $request->checkId;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeInstanceSecurityConfigs',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeInstanceSecurityConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeInstanceSecurityConfigsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call this operation to query security check items of an OceanBase cluster.
     *
     * @param request - DescribeInstanceSecurityConfigsRequest
     *
     * @returns DescribeInstanceSecurityConfigsResponse
     *
     * @param DescribeInstanceSecurityConfigsRequest $request
     *
     * @return DescribeInstanceSecurityConfigsResponse
     */
    public function describeInstanceSecurityConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceSecurityConfigsWithOptions($request, $runtime);
    }

    /**
     * Obtains the overview information about OceanBase instances.
     *
     * @param request - DescribeInstanceSummaryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceSummaryResponse
     *
     * @param DescribeInstanceSummaryRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeInstanceSummaryResponse
     */
    public function describeInstanceSummaryWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeInstanceSummary',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeInstanceSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeInstanceSummaryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Obtains the overview information about OceanBase instances.
     *
     * @param request - DescribeInstanceSummaryRequest
     *
     * @returns DescribeInstanceSummaryResponse
     *
     * @param DescribeInstanceSummaryRequest $request
     *
     * @return DescribeInstanceSummaryResponse
     */
    public function describeInstanceSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceSummaryWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to query the tags of clusters.
     *
     * @param request - DescribeInstanceTagsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceTagsResponse
     *
     * @param DescribeInstanceTagsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeInstanceTagsResponse
     */
    public function describeInstanceTagsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceIds) {
            @$body['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->tags) {
            @$body['Tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeInstanceTags',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeInstanceTagsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeInstanceTagsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call this operation to query the tags of clusters.
     *
     * @param request - DescribeInstanceTagsRequest
     *
     * @returns DescribeInstanceTagsResponse
     *
     * @param DescribeInstanceTagsRequest $request
     *
     * @return DescribeInstanceTagsResponse
     */
    public function describeInstanceTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceTagsWithOptions($request, $runtime);
    }

    /**
     * The return result of the request.
     *
     * @param request - DescribeInstanceTenantModesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceTenantModesResponse
     *
     * @param DescribeInstanceTenantModesRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeInstanceTenantModesResponse
     */
    public function describeInstanceTenantModesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeInstanceTenantModes',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeInstanceTenantModesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeInstanceTenantModesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * The return result of the request.
     *
     * @param request - DescribeInstanceTenantModesRequest
     *
     * @returns DescribeInstanceTenantModesResponse
     *
     * @param DescribeInstanceTenantModesRequest $request
     *
     * @return DescribeInstanceTenantModesResponse
     */
    public function describeInstanceTenantModes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceTenantModesWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to query the topology of an OceanBase cluster.
     *
     * @param request - DescribeInstanceTopologyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceTopologyResponse
     *
     * @param DescribeInstanceTopologyRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeInstanceTopologyResponse
     */
    public function describeInstanceTopologyWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeInstanceTopology',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeInstanceTopologyResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeInstanceTopologyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call this operation to query the topology of an OceanBase cluster.
     *
     * @param request - DescribeInstanceTopologyRequest
     *
     * @returns DescribeInstanceTopologyResponse
     *
     * @param DescribeInstanceTopologyRequest $request
     *
     * @return DescribeInstanceTopologyResponse
     */
    public function describeInstanceTopology($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceTopologyWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to obtain the list of OceanBase clusters.
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
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceName) {
            @$body['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->searchKey) {
            @$body['SearchKey'] = $request->searchKey;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeInstances',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeInstancesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call this operation to obtain the list of OceanBase clusters.
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
     * 查询监控指标数据.
     *
     * @param request - DescribeMetricsDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMetricsDataResponse
     *
     * @param DescribeMetricsDataRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeMetricsDataResponse
     */
    public function describeMetricsDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->groupByLabels) {
            @$query['GroupByLabels'] = $request->groupByLabels;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->labels) {
            @$query['Labels'] = $request->labels;
        }

        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        if (null !== $request->metrics) {
            @$query['Metrics'] = $request->metrics;
        }

        if (null !== $request->sortMetricKey) {
            @$query['SortMetricKey'] = $request->sortMetricKey;
        }

        if (null !== $request->sortOrder) {
            @$query['SortOrder'] = $request->sortOrder;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $body = [];
        if (null !== $request->replicaType) {
            @$body['ReplicaType'] = $request->replicaType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeMetricsData',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeMetricsDataResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeMetricsDataResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询监控指标数据.
     *
     * @param request - DescribeMetricsDataRequest
     *
     * @returns DescribeMetricsDataResponse
     *
     * @param DescribeMetricsDataRequest $request
     *
     * @return DescribeMetricsDataResponse
     */
    public function describeMetricsData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMetricsDataWithOptions($request, $runtime);
    }

    /**
     * The list of nodes.
     *
     * @param request - DescribeNodeMetricsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeNodeMetricsResponse
     *
     * @param DescribeNodeMetricsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeNodeMetricsResponse
     */
    public function describeNodeMetricsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->metrics) {
            @$body['Metrics'] = $request->metrics;
        }

        if (null !== $request->nodeIdList) {
            @$body['NodeIdList'] = $request->nodeIdList;
        }

        if (null !== $request->nodeName) {
            @$body['NodeName'] = $request->nodeName;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeNodeMetrics',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeNodeMetricsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeNodeMetricsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * The list of nodes.
     *
     * @param request - DescribeNodeMetricsRequest
     *
     * @returns DescribeNodeMetricsResponse
     *
     * @param DescribeNodeMetricsRequest $request
     *
     * @return DescribeNodeMetricsResponse
     */
    public function describeNodeMetrics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNodeMetricsWithOptions($request, $runtime);
    }

    /**
     * You can call this API to view the list of SQL statements that are identified as having performance issues by the diagnostic system.
     *
     * @param request - DescribeOasAnomalySQLListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeOasAnomalySQLListResponse
     *
     * @param DescribeOasAnomalySQLListRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeOasAnomalySQLListResponse
     */
    public function describeOasAnomalySQLListWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->acceptLanguage) {
            @$body['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->current) {
            @$body['Current'] = $request->current;
        }

        if (null !== $request->dbName) {
            @$body['DbName'] = $request->dbName;
        }

        if (null !== $request->dynamicSql) {
            @$body['DynamicSql'] = $request->dynamicSql;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->filterCondition) {
            @$body['FilterCondition'] = $request->filterCondition;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->mergeDynamicSql) {
            @$body['MergeDynamicSql'] = $request->mergeDynamicSql;
        }

        if (null !== $request->nodeIp) {
            @$body['NodeIp'] = $request->nodeIp;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->searchKeyWord) {
            @$body['SearchKeyWord'] = $request->searchKeyWord;
        }

        if (null !== $request->searchParam) {
            @$body['SearchParam'] = $request->searchParam;
        }

        if (null !== $request->searchRule) {
            @$body['SearchRule'] = $request->searchRule;
        }

        if (null !== $request->searchValue) {
            @$body['SearchValue'] = $request->searchValue;
        }

        if (null !== $request->sqlId) {
            @$body['SqlId'] = $request->sqlId;
        }

        if (null !== $request->sqlTextLength) {
            @$body['SqlTextLength'] = $request->sqlTextLength;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeOasAnomalySQLList',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeOasAnomalySQLListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeOasAnomalySQLListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call this API to view the list of SQL statements that are identified as having performance issues by the diagnostic system.
     *
     * @param request - DescribeOasAnomalySQLListRequest
     *
     * @returns DescribeOasAnomalySQLListResponse
     *
     * @param DescribeOasAnomalySQLListRequest $request
     *
     * @return DescribeOasAnomalySQLListResponse
     */
    public function describeOasAnomalySQLList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOasAnomalySQLListWithOptions($request, $runtime);
    }

    /**
     * You can call this API to query detailed information about the SQL, including the SQL text, related table names, and so on.
     *
     * @param request - DescribeOasSQLDetailsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeOasSQLDetailsResponse
     *
     * @param DescribeOasSQLDetailsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeOasSQLDetailsResponse
     */
    public function describeOasSQLDetailsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dbName) {
            @$body['DbName'] = $request->dbName;
        }

        if (null !== $request->dynamicSql) {
            @$body['DynamicSql'] = $request->dynamicSql;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->parseTable) {
            @$body['ParseTable'] = $request->parseTable;
        }

        if (null !== $request->sqlId) {
            @$body['SqlId'] = $request->sqlId;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeOasSQLDetails',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeOasSQLDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeOasSQLDetailsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call this API to query detailed information about the SQL, including the SQL text, related table names, and so on.
     *
     * @param request - DescribeOasSQLDetailsRequest
     *
     * @returns DescribeOasSQLDetailsResponse
     *
     * @param DescribeOasSQLDetailsRequest $request
     *
     * @return DescribeOasSQLDetailsResponse
     */
    public function describeOasSQLDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOasSQLDetailsWithOptions($request, $runtime);
    }

    /**
     * You can call this API to view the SQL execution history.
     *
     * @param request - DescribeOasSQLHistoryListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeOasSQLHistoryListResponse
     *
     * @param DescribeOasSQLHistoryListRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeOasSQLHistoryListResponse
     */
    public function describeOasSQLHistoryListWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->acceptLanguage) {
            @$body['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->dbName) {
            @$body['DbName'] = $request->dbName;
        }

        if (null !== $request->dynamicSql) {
            @$body['DynamicSql'] = $request->dynamicSql;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nodeIp) {
            @$body['NodeIp'] = $request->nodeIp;
        }

        if (null !== $request->sqlId) {
            @$body['SqlId'] = $request->sqlId;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeOasSQLHistoryList',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeOasSQLHistoryListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeOasSQLHistoryListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call this API to view the SQL execution history.
     *
     * @param request - DescribeOasSQLHistoryListRequest
     *
     * @returns DescribeOasSQLHistoryListResponse
     *
     * @param DescribeOasSQLHistoryListRequest $request
     *
     * @return DescribeOasSQLHistoryListResponse
     */
    public function describeOasSQLHistoryList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOasSQLHistoryListWithOptions($request, $runtime);
    }

    /**
     * You can call this API to retrieve information about the SQL execution plan stored in the diagnostic system based on the SQL ID.
     *
     * @param request - DescribeOasSQLPlansRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeOasSQLPlansResponse
     *
     * @param DescribeOasSQLPlansRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeOasSQLPlansResponse
     */
    public function describeOasSQLPlansWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->acceptLanguage) {
            @$body['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->dbName) {
            @$body['DbName'] = $request->dbName;
        }

        if (null !== $request->dynamicSql) {
            @$body['DynamicSql'] = $request->dynamicSql;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->planUnionHash) {
            @$body['PlanUnionHash'] = $request->planUnionHash;
        }

        if (null !== $request->returnBriefInfo) {
            @$body['ReturnBriefInfo'] = $request->returnBriefInfo;
        }

        if (null !== $request->sqlId) {
            @$body['SqlId'] = $request->sqlId;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeOasSQLPlans',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeOasSQLPlansResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeOasSQLPlansResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call this API to retrieve information about the SQL execution plan stored in the diagnostic system based on the SQL ID.
     *
     * @param request - DescribeOasSQLPlansRequest
     *
     * @returns DescribeOasSQLPlansResponse
     *
     * @param DescribeOasSQLPlansRequest $request
     *
     * @return DescribeOasSQLPlansResponse
     */
    public function describeOasSQLPlans($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOasSQLPlansWithOptions($request, $runtime);
    }

    /**
     * You can call this API to view a list of slow queries.
     *
     * @param request - DescribeOasSlowSQLListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeOasSlowSQLListResponse
     *
     * @param DescribeOasSlowSQLListRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeOasSlowSQLListResponse
     */
    public function describeOasSlowSQLListWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->acceptLanguage) {
            @$body['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->dbName) {
            @$body['DbName'] = $request->dbName;
        }

        if (null !== $request->dynamicSql) {
            @$body['DynamicSql'] = $request->dynamicSql;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->filterCondition) {
            @$body['FilterCondition'] = $request->filterCondition;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->mergeDynamicSql) {
            @$body['MergeDynamicSql'] = $request->mergeDynamicSql;
        }

        if (null !== $request->nodeIp) {
            @$body['NodeIp'] = $request->nodeIp;
        }

        if (null !== $request->searchKeyWord) {
            @$body['SearchKeyWord'] = $request->searchKeyWord;
        }

        if (null !== $request->searchParam) {
            @$body['SearchParam'] = $request->searchParam;
        }

        if (null !== $request->searchRule) {
            @$body['SearchRule'] = $request->searchRule;
        }

        if (null !== $request->searchValue) {
            @$body['SearchValue'] = $request->searchValue;
        }

        if (null !== $request->sqlId) {
            @$body['SqlId'] = $request->sqlId;
        }

        if (null !== $request->sqlTextLength) {
            @$body['SqlTextLength'] = $request->sqlTextLength;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeOasSlowSQLList',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeOasSlowSQLListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeOasSlowSQLListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call this API to view a list of slow queries.
     *
     * @param request - DescribeOasSlowSQLListRequest
     *
     * @returns DescribeOasSlowSQLListResponse
     *
     * @param DescribeOasSlowSQLListRequest $request
     *
     * @return DescribeOasSlowSQLListResponse
     */
    public function describeOasSlowSQLList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOasSlowSQLListWithOptions($request, $runtime);
    }

    /**
     * You can call this API to retrieve the list of data on the SQL execution performance collected by the diagnostic system.
     *
     * @param request - DescribeOasTopSQLListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeOasTopSQLListResponse
     *
     * @param DescribeOasTopSQLListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeOasTopSQLListResponse
     */
    public function describeOasTopSQLListWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->acceptLanguage) {
            @$body['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->dbName) {
            @$body['DbName'] = $request->dbName;
        }

        if (null !== $request->dynamicSql) {
            @$body['DynamicSql'] = $request->dynamicSql;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->filterCondition) {
            @$body['FilterCondition'] = $request->filterCondition;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->mergeDynamicSql) {
            @$body['MergeDynamicSql'] = $request->mergeDynamicSql;
        }

        if (null !== $request->nodeIp) {
            @$body['NodeIp'] = $request->nodeIp;
        }

        if (null !== $request->searchKeyWord) {
            @$body['SearchKeyWord'] = $request->searchKeyWord;
        }

        if (null !== $request->searchParam) {
            @$body['SearchParam'] = $request->searchParam;
        }

        if (null !== $request->searchRule) {
            @$body['SearchRule'] = $request->searchRule;
        }

        if (null !== $request->searchValue) {
            @$body['SearchValue'] = $request->searchValue;
        }

        if (null !== $request->sqlId) {
            @$body['SqlId'] = $request->sqlId;
        }

        if (null !== $request->sqlTextLength) {
            @$body['SqlTextLength'] = $request->sqlTextLength;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeOasTopSQLList',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeOasTopSQLListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeOasTopSQLListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call this API to retrieve the list of data on the SQL execution performance collected by the diagnostic system.
     *
     * @param request - DescribeOasTopSQLListRequest
     *
     * @returns DescribeOasTopSQLListResponse
     *
     * @param DescribeOasTopSQLListRequest $request
     *
     * @return DescribeOasTopSQLListResponse
     */
    public function describeOasTopSQLList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOasTopSQLListWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to query the outline binding information or throttling information of an SQL statement in the database based on an SQLID.
     *
     * @param request - DescribeOutlineBindingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeOutlineBindingResponse
     *
     * @param DescribeOutlineBindingRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeOutlineBindingResponse
     */
    public function describeOutlineBindingWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->databaseName) {
            @$body['DatabaseName'] = $request->databaseName;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->isConcurrentLimit) {
            @$body['IsConcurrentLimit'] = $request->isConcurrentLimit;
        }

        if (null !== $request->SQLId) {
            @$body['SQLId'] = $request->SQLId;
        }

        if (null !== $request->tableName) {
            @$body['TableName'] = $request->tableName;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeOutlineBinding',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeOutlineBindingResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeOutlineBindingResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call this operation to query the outline binding information or throttling information of an SQL statement in the database based on an SQLID.
     *
     * @param request - DescribeOutlineBindingRequest
     *
     * @returns DescribeOutlineBindingResponse
     *
     * @param DescribeOutlineBindingRequest $request
     *
     * @return DescribeOutlineBindingResponse
     */
    public function describeOutlineBinding($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOutlineBindingWithOptions($request, $runtime);
    }

    /**
     * Indicates whether a restart is required for changes to the parameter to take effect. Valid values: - true: A restart is required. - false: A restart is not required.
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
        $body = [];
        if (null !== $request->dimension) {
            @$body['Dimension'] = $request->dimension;
        }

        if (null !== $request->dimensionValue) {
            @$body['DimensionValue'] = $request->dimensionValue;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeParameters',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeParametersResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeParametersResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Indicates whether a restart is required for changes to the parameter to take effect. Valid values: - true: A restart is required. - false: A restart is not required.
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
     * You can call this operation to query the modification history of cluster or tenant parameters.
     *
     * @param request - DescribeParametersHistoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeParametersHistoryResponse
     *
     * @param DescribeParametersHistoryRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeParametersHistoryResponse
     */
    public function describeParametersHistoryWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dimension) {
            @$body['Dimension'] = $request->dimension;
        }

        if (null !== $request->dimensionValue) {
            @$body['DimensionValue'] = $request->dimensionValue;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeParametersHistory',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeParametersHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeParametersHistoryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call this operation to query the modification history of cluster or tenant parameters.
     *
     * @param request - DescribeParametersHistoryRequest
     *
     * @returns DescribeParametersHistoryResponse
     *
     * @param DescribeParametersHistoryRequest $request
     *
     * @return DescribeParametersHistoryResponse
     */
    public function describeParametersHistory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeParametersHistoryWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to query session information.
     *
     * @param request - DescribeProcessStatsCompositionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeProcessStatsCompositionResponse
     *
     * @param DescribeProcessStatsCompositionRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeProcessStatsCompositionResponse
     */
    public function describeProcessStatsCompositionWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientIp) {
            @$body['ClientIp'] = $request->clientIp;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->serverIp) {
            @$body['ServerIp'] = $request->serverIp;
        }

        if (null !== $request->sqlText) {
            @$body['SqlText'] = $request->sqlText;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->UId) {
            @$body['UId'] = $request->UId;
        }

        if (null !== $request->users) {
            @$body['Users'] = $request->users;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeProcessStatsComposition',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeProcessStatsCompositionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeProcessStatsCompositionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call this operation to query session information.
     *
     * @param request - DescribeProcessStatsCompositionRequest
     *
     * @returns DescribeProcessStatsCompositionResponse
     *
     * @param DescribeProcessStatsCompositionRequest $request
     *
     * @return DescribeProcessStatsCompositionResponse
     */
    public function describeProcessStatsComposition($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeProcessStatsCompositionWithOptions($request, $runtime);
    }

    /**
     * 查询项目详情.
     *
     * @param request - DescribeProjectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeProjectResponse
     *
     * @param DescribeProjectRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeProjectResponse
     */
    public function describeProjectWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeProject',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeProjectResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeProjectResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询项目详情.
     *
     * @param request - DescribeProjectRequest
     *
     * @returns DescribeProjectResponse
     *
     * @param DescribeProjectRequest $request
     *
     * @return DescribeProjectResponse
     */
    public function describeProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeProjectWithOptions($request, $runtime);
    }

    /**
     * 获取项目的组件信息.
     *
     * @param request - DescribeProjectComponentsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeProjectComponentsResponse
     *
     * @param DescribeProjectComponentsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeProjectComponentsResponse
     */
    public function describeProjectComponentsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeProjectComponents',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeProjectComponentsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeProjectComponentsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取项目的组件信息.
     *
     * @param request - DescribeProjectComponentsRequest
     *
     * @returns DescribeProjectComponentsResponse
     *
     * @param DescribeProjectComponentsRequest $request
     *
     * @return DescribeProjectComponentsResponse
     */
    public function describeProjectComponents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeProjectComponentsWithOptions($request, $runtime);
    }

    /**
     * 获取迁移/同步项目 Progress 信息.
     *
     * @param request - DescribeProjectProgressRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeProjectProgressResponse
     *
     * @param DescribeProjectProgressRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeProjectProgressResponse
     */
    public function describeProjectProgressWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeProjectProgress',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeProjectProgressResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeProjectProgressResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取迁移/同步项目 Progress 信息.
     *
     * @param request - DescribeProjectProgressRequest
     *
     * @returns DescribeProjectProgressResponse
     *
     * @param DescribeProjectProgressRequest $request
     *
     * @return DescribeProjectProgressResponse
     */
    public function describeProjectProgress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeProjectProgressWithOptions($request, $runtime);
    }

    /**
     * 查询项目步骤指标.
     *
     * @param request - DescribeProjectStepMetricRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeProjectStepMetricResponse
     *
     * @param DescribeProjectStepMetricRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeProjectStepMetricResponse
     */
    public function describeProjectStepMetricWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->aggregator) {
            @$body['Aggregator'] = $request->aggregator;
        }

        if (null !== $request->beginTimestamp) {
            @$body['BeginTimestamp'] = $request->beginTimestamp;
        }

        if (null !== $request->endTimestamp) {
            @$body['EndTimestamp'] = $request->endTimestamp;
        }

        if (null !== $request->maxPointNum) {
            @$body['MaxPointNum'] = $request->maxPointNum;
        }

        if (null !== $request->metricType) {
            @$body['MetricType'] = $request->metricType;
        }

        if (null !== $request->projectId) {
            @$body['ProjectId'] = $request->projectId;
        }

        if (null !== $request->stepName) {
            @$body['StepName'] = $request->stepName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeProjectStepMetric',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeProjectStepMetricResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeProjectStepMetricResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询项目步骤指标.
     *
     * @param request - DescribeProjectStepMetricRequest
     *
     * @returns DescribeProjectStepMetricResponse
     *
     * @param DescribeProjectStepMetricRequest $request
     *
     * @return DescribeProjectStepMetricResponse
     */
    public function describeProjectStepMetric($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeProjectStepMetricWithOptions($request, $runtime);
    }

    /**
     * 查询项目步骤.
     *
     * @param request - DescribeProjectStepsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeProjectStepsResponse
     *
     * @param DescribeProjectStepsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeProjectStepsResponse
     */
    public function describeProjectStepsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeProjectSteps',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeProjectStepsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeProjectStepsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询项目步骤.
     *
     * @param request - DescribeProjectStepsRequest
     *
     * @returns DescribeProjectStepsResponse
     *
     * @param DescribeProjectStepsRequest $request
     *
     * @return DescribeProjectStepsResponse
     */
    public function describeProjectSteps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeProjectStepsWithOptions($request, $runtime);
    }

    /**
     * 查询代理服务信息.
     *
     * @param request - DescribeProxyServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeProxyServiceResponse
     *
     * @param DescribeProxyServiceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeProxyServiceResponse
     */
    public function describeProxyServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeProxyService',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeProxyServiceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeProxyServiceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询代理服务信息.
     *
     * @param request - DescribeProxyServiceRequest
     *
     * @returns DescribeProxyServiceResponse
     *
     * @param DescribeProxyServiceRequest $request
     *
     * @return DescribeProxyServiceResponse
     */
    public function describeProxyService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeProxyServiceWithOptions($request, $runtime);
    }

    /**
     * The tenant mode.   Valid values:
     * Oracle
     * MySQL
     *
     * @param request - DescribeRecommendIndexRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRecommendIndexResponse
     *
     * @param DescribeRecommendIndexRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeRecommendIndexResponse
     */
    public function describeRecommendIndexWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->SQLId) {
            @$body['SQLId'] = $request->SQLId;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeRecommendIndex',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeRecommendIndexResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeRecommendIndexResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * The tenant mode.   Valid values:
     * Oracle
     * MySQL
     *
     * @param request - DescribeRecommendIndexRequest
     *
     * @returns DescribeRecommendIndexResponse
     *
     * @param DescribeRecommendIndexRequest $request
     *
     * @return DescribeRecommendIndexResponse
     */
    public function describeRecommendIndex($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRecommendIndexWithOptions($request, $runtime);
    }

    /**
     * Queries information about restorable OceanBase Database tenants.
     *
     * @param request - DescribeRestorableTenantsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRestorableTenantsResponse
     *
     * @param DescribeRestorableTenantsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeRestorableTenantsResponse
     */
    public function describeRestorableTenantsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->isOnline) {
            @$body['IsOnline'] = $request->isOnline;
        }

        if (null !== $request->isRemote) {
            @$body['IsRemote'] = $request->isRemote;
        }

        if (null !== $request->method) {
            @$body['Method'] = $request->method;
        }

        if (null !== $request->restoreMode) {
            @$body['RestoreMode'] = $request->restoreMode;
        }

        if (null !== $request->restoreObjectType) {
            @$body['RestoreObjectType'] = $request->restoreObjectType;
        }

        if (null !== $request->setId) {
            @$body['SetId'] = $request->setId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeRestorableTenants',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeRestorableTenantsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeRestorableTenantsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries information about restorable OceanBase Database tenants.
     *
     * @param request - DescribeRestorableTenantsRequest
     *
     * @returns DescribeRestorableTenantsResponse
     *
     * @param DescribeRestorableTenantsRequest $request
     *
     * @return DescribeRestorableTenantsResponse
     */
    public function describeRestorableTenants($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRestorableTenantsWithOptions($request, $runtime);
    }

    /**
     * The username.
     *
     * @param request - DescribeSQLDetailsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSQLDetailsResponse
     *
     * @param DescribeSQLDetailsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeSQLDetailsResponse
     */
    public function describeSQLDetailsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->SQLId) {
            @$body['SQLId'] = $request->SQLId;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeSQLDetails',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeSQLDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeSQLDetailsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * The username.
     *
     * @param request - DescribeSQLDetailsRequest
     *
     * @returns DescribeSQLDetailsResponse
     *
     * @param DescribeSQLDetailsRequest $request
     *
     * @return DescribeSQLDetailsResponse
     */
    public function describeSQLDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSQLDetailsWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to query the execution history of an SQL statement in a specified period based on an SQL ID.
     *
     * @param request - DescribeSQLHistoryListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSQLHistoryListResponse
     *
     * @param DescribeSQLHistoryListRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeSQLHistoryListResponse
     */
    public function describeSQLHistoryListWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->SQLId) {
            @$body['SQLId'] = $request->SQLId;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeSQLHistoryList',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeSQLHistoryListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeSQLHistoryListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call this operation to query the execution history of an SQL statement in a specified period based on an SQL ID.
     *
     * @param request - DescribeSQLHistoryListRequest
     *
     * @returns DescribeSQLHistoryListResponse
     *
     * @param DescribeSQLHistoryListRequest $request
     *
     * @return DescribeSQLHistoryListResponse
     */
    public function describeSQLHistoryList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSQLHistoryListWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to query the information about the SQL execution plans stored in the diagnostic system based on an SQL ID.
     *
     * @param request - DescribeSQLPlansRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSQLPlansResponse
     *
     * @param DescribeSQLPlansRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeSQLPlansResponse
     */
    public function describeSQLPlansWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->SQLId) {
            @$body['SQLId'] = $request->SQLId;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeSQLPlans',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeSQLPlansResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeSQLPlansResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call this operation to query the information about the SQL execution plans stored in the diagnostic system based on an SQL ID.
     *
     * @param request - DescribeSQLPlansRequest
     *
     * @returns DescribeSQLPlansResponse
     *
     * @param DescribeSQLPlansRequest $request
     *
     * @return DescribeSQLPlansResponse
     */
    public function describeSQLPlans($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSQLPlansWithOptions($request, $runtime);
    }

    /**
     * You can call this API to view the sample data of the execution details of the slow queries.
     *
     * @param request - DescribeSQLSamplesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSQLSamplesResponse
     *
     * @param DescribeSQLSamplesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeSQLSamplesResponse
     */
    public function describeSQLSamplesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dbName) {
            @$body['DbName'] = $request->dbName;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->returnSqlText) {
            @$body['ReturnSqlText'] = $request->returnSqlText;
        }

        if (null !== $request->sqlId) {
            @$body['SqlId'] = $request->sqlId;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeSQLSamples',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeSQLSamplesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeSQLSamplesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call this API to view the sample data of the execution details of the slow queries.
     *
     * @param request - DescribeSQLSamplesRequest
     *
     * @returns DescribeSQLSamplesResponse
     *
     * @param DescribeSQLSamplesRequest $request
     *
     * @return DescribeSQLSamplesResponse
     */
    public function describeSQLSamples($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSQLSamplesWithOptions($request, $runtime);
    }

    /**
     * 获取单个 SQL 的调优建议，包括计划推荐和索引推荐.
     *
     * @param request - DescribeSQLTuningAdvicesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSQLTuningAdvicesResponse
     *
     * @param DescribeSQLTuningAdvicesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeSQLTuningAdvicesResponse
     */
    public function describeSQLTuningAdvicesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->acceptLanguage) {
            @$body['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->dbName) {
            @$body['DbName'] = $request->dbName;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->sqlId) {
            @$body['SqlId'] = $request->sqlId;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeSQLTuningAdvices',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeSQLTuningAdvicesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeSQLTuningAdvicesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取单个 SQL 的调优建议，包括计划推荐和索引推荐.
     *
     * @param request - DescribeSQLTuningAdvicesRequest
     *
     * @returns DescribeSQLTuningAdvicesResponse
     *
     * @param DescribeSQLTuningAdvicesRequest $request
     *
     * @return DescribeSQLTuningAdvicesResponse
     */
    public function describeSQLTuningAdvices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSQLTuningAdvicesWithOptions($request, $runtime);
    }

    /**
     * 查询采样SQL的原始文本.
     *
     * @param request - DescribeSampleSqlRawTextsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSampleSqlRawTextsResponse
     *
     * @param DescribeSampleSqlRawTextsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeSampleSqlRawTextsResponse
     */
    public function describeSampleSqlRawTextsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dbName) {
            @$body['DbName'] = $request->dbName;
        }

        if (null !== $request->dynamicSql) {
            @$body['DynamicSql'] = $request->dynamicSql;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->limit) {
            @$body['Limit'] = $request->limit;
        }

        if (null !== $request->sqlId) {
            @$body['SqlId'] = $request->sqlId;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->traceId) {
            @$body['TraceId'] = $request->traceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeSampleSqlRawTexts',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeSampleSqlRawTextsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeSampleSqlRawTextsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询采样SQL的原始文本.
     *
     * @param request - DescribeSampleSqlRawTextsRequest
     *
     * @returns DescribeSampleSqlRawTextsResponse
     *
     * @param DescribeSampleSqlRawTextsRequest $request
     *
     * @return DescribeSampleSqlRawTextsResponse
     */
    public function describeSampleSqlRawTexts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSampleSqlRawTextsWithOptions($request, $runtime);
    }

    /**
     * The name of the security group.
     *
     * @param request - DescribeSecurityIpGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSecurityIpGroupsResponse
     *
     * @param DescribeSecurityIpGroupsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeSecurityIpGroupsResponse
     */
    public function describeSecurityIpGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeSecurityIpGroups',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeSecurityIpGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeSecurityIpGroupsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * The name of the security group.
     *
     * @param request - DescribeSecurityIpGroupsRequest
     *
     * @returns DescribeSecurityIpGroupsResponse
     *
     * @param DescribeSecurityIpGroupsRequest $request
     *
     * @return DescribeSecurityIpGroupsResponse
     */
    public function describeSecurityIpGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSecurityIpGroupsWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to query sessions between the ApsaraDB for OceanBase and the application.
     *
     * @param request - DescribeSessionListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSessionListResponse
     *
     * @param DescribeSessionListRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeSessionListResponse
     */
    public function describeSessionListWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeSessionList',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeSessionListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeSessionListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call this operation to query sessions between the ApsaraDB for OceanBase and the application.
     *
     * @param request - DescribeSessionListRequest
     *
     * @returns DescribeSessionListResponse
     *
     * @param DescribeSessionListRequest $request
     *
     * @return DescribeSessionListResponse
     */
    public function describeSessionList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSessionListWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to query the execution history of an SQL statement by SQL ID that is determined as a slow SQL statement during a specified period of time.
     *
     * @param request - DescribeSlowSQLHistoryListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSlowSQLHistoryListResponse
     *
     * @param DescribeSlowSQLHistoryListRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeSlowSQLHistoryListResponse
     */
    public function describeSlowSQLHistoryListWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->SQLId) {
            @$body['SQLId'] = $request->SQLId;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeSlowSQLHistoryList',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeSlowSQLHistoryListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeSlowSQLHistoryListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call this operation to query the execution history of an SQL statement by SQL ID that is determined as a slow SQL statement during a specified period of time.
     *
     * @param request - DescribeSlowSQLHistoryListRequest
     *
     * @returns DescribeSlowSQLHistoryListResponse
     *
     * @param DescribeSlowSQLHistoryListRequest $request
     *
     * @return DescribeSlowSQLHistoryListResponse
     */
    public function describeSlowSQLHistoryList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSlowSQLHistoryListWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to query the list of slow SQL statements.
     *
     * @param tmpReq - DescribeSlowSQLListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSlowSQLListResponse
     *
     * @param DescribeSlowSQLListRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeSlowSQLListResponse
     */
    public function describeSlowSQLListWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribeSlowSQLListShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->filterCondition) {
            $request->filterConditionShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->filterCondition, 'FilterCondition', 'json');
        }

        $body = [];
        if (null !== $request->dbName) {
            @$body['DbName'] = $request->dbName;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->filterConditionShrink) {
            @$body['FilterCondition'] = $request->filterConditionShrink;
        }

        if (null !== $request->nodeIp) {
            @$body['NodeIp'] = $request->nodeIp;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->SQLId) {
            @$body['SQLId'] = $request->SQLId;
        }

        if (null !== $request->searchKeyWord) {
            @$body['SearchKeyWord'] = $request->searchKeyWord;
        }

        if (null !== $request->searchParameter) {
            @$body['SearchParameter'] = $request->searchParameter;
        }

        if (null !== $request->searchRule) {
            @$body['SearchRule'] = $request->searchRule;
        }

        if (null !== $request->searchValue) {
            @$body['SearchValue'] = $request->searchValue;
        }

        if (null !== $request->sortColumn) {
            @$body['SortColumn'] = $request->sortColumn;
        }

        if (null !== $request->sortOrder) {
            @$body['SortOrder'] = $request->sortOrder;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeSlowSQLList',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeSlowSQLListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeSlowSQLListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call this operation to query the list of slow SQL statements.
     *
     * @param request - DescribeSlowSQLListRequest
     *
     * @returns DescribeSlowSQLListResponse
     *
     * @param DescribeSlowSQLListRequest $request
     *
     * @return DescribeSlowSQLListResponse
     */
    public function describeSlowSQLList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSlowSQLListWithOptions($request, $runtime);
    }

    /**
     * 按照客户端IP、用户、SQLID的维度统计SQL数据执行情况.
     *
     * @param request - DescribeSqlAuditStatRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSqlAuditStatResponse
     *
     * @param DescribeSqlAuditStatRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeSqlAuditStatResponse
     */
    public function describeSqlAuditStatWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeSqlAuditStat',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeSqlAuditStatResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeSqlAuditStatResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 按照客户端IP、用户、SQLID的维度统计SQL数据执行情况.
     *
     * @param request - DescribeSqlAuditStatRequest
     *
     * @returns DescribeSqlAuditStatResponse
     *
     * @param DescribeSqlAuditStatRequest $request
     *
     * @return DescribeSqlAuditStatResponse
     */
    public function describeSqlAuditStat($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSqlAuditStatWithOptions($request, $runtime);
    }

    /**
     * DescribeStandbyCreateMode.
     *
     * @param request - DescribeStandbyCreateModeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeStandbyCreateModeResponse
     *
     * @param DescribeStandbyCreateModeRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeStandbyCreateModeResponse
     */
    public function describeStandbyCreateModeWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeStandbyCreateMode',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeStandbyCreateModeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeStandbyCreateModeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * DescribeStandbyCreateMode.
     *
     * @param request - DescribeStandbyCreateModeRequest
     *
     * @returns DescribeStandbyCreateModeResponse
     *
     * @param DescribeStandbyCreateModeRequest $request
     *
     * @return DescribeStandbyCreateModeResponse
     */
    public function describeStandbyCreateMode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeStandbyCreateModeWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to query tags.
     *
     * @param request - DescribeTagValuesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTagValuesResponse
     *
     * @param DescribeTagValuesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeTagValuesResponse
     */
    public function describeTagValuesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->resourceType) {
            @$body['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeTagValues',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeTagValuesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeTagValuesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call this operation to query tags.
     *
     * @param request - DescribeTagValuesRequest
     *
     * @returns DescribeTagValuesResponse
     *
     * @param DescribeTagValuesRequest $request
     *
     * @return DescribeTagValuesResponse
     */
    public function describeTagValues($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTagValuesWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to query the information of a specific tenant in a specific cluster.
     *
     * @param request - DescribeTenantRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTenantResponse
     *
     * @param DescribeTenantRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeTenantResponse
     */
    public function describeTenantWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeTenant',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeTenantResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeTenantResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call this operation to query the information of a specific tenant in a specific cluster.
     *
     * @param request - DescribeTenantRequest
     *
     * @returns DescribeTenantResponse
     *
     * @param DescribeTenantRequest $request
     *
     * @return DescribeTenantResponse
     */
    public function describeTenant($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTenantWithOptions($request, $runtime);
    }

    /**
     * 查询租户加密信息.
     *
     * @param request - DescribeTenantEncryptionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTenantEncryptionResponse
     *
     * @param DescribeTenantEncryptionRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeTenantEncryptionResponse
     */
    public function describeTenantEncryptionWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->tenantName) {
            @$body['TenantName'] = $request->tenantName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeTenantEncryption',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeTenantEncryptionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeTenantEncryptionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询租户加密信息.
     *
     * @param request - DescribeTenantEncryptionRequest
     *
     * @returns DescribeTenantEncryptionResponse
     *
     * @param DescribeTenantEncryptionRequest $request
     *
     * @return DescribeTenantEncryptionResponse
     */
    public function describeTenantEncryption($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTenantEncryptionWithOptions($request, $runtime);
    }

    /**
     * The list of tenant IDs.
     *
     * @param request - DescribeTenantMetricsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTenantMetricsResponse
     *
     * @param DescribeTenantMetricsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeTenantMetricsResponse
     */
    public function describeTenantMetricsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->metrics) {
            @$body['Metrics'] = $request->metrics;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->tenantIdList) {
            @$body['TenantIdList'] = $request->tenantIdList;
        }

        if (null !== $request->tenantName) {
            @$body['TenantName'] = $request->tenantName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeTenantMetrics',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeTenantMetricsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeTenantMetricsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * The list of tenant IDs.
     *
     * @param request - DescribeTenantMetricsRequest
     *
     * @returns DescribeTenantMetricsResponse
     *
     * @param DescribeTenantMetricsRequest $request
     *
     * @return DescribeTenantMetricsResponse
     */
    public function describeTenantMetrics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTenantMetricsWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to query the maximum readable timestamp of a tenant.
     *
     * @param request - DescribeTenantReadableScnRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTenantReadableScnResponse
     *
     * @param DescribeTenantReadableScnRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeTenantReadableScnResponse
     */
    public function describeTenantReadableScnWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeTenantReadableScn',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeTenantReadableScnResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeTenantReadableScnResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call this operation to query the maximum readable timestamp of a tenant.
     *
     * @param request - DescribeTenantReadableScnRequest
     *
     * @returns DescribeTenantReadableScnResponse
     *
     * @param DescribeTenantReadableScnRequest $request
     *
     * @return DescribeTenantReadableScnResponse
     */
    public function describeTenantReadableScn($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTenantReadableScnWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to query security check items of an OceanBase Database tenant.
     *
     * @param request - DescribeTenantSecurityConfigsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTenantSecurityConfigsResponse
     *
     * @param DescribeTenantSecurityConfigsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeTenantSecurityConfigsResponse
     */
    public function describeTenantSecurityConfigsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->checkId) {
            @$body['CheckId'] = $request->checkId;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeTenantSecurityConfigs',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeTenantSecurityConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeTenantSecurityConfigsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call this operation to query security check items of an OceanBase Database tenant.
     *
     * @param request - DescribeTenantSecurityConfigsRequest
     *
     * @returns DescribeTenantSecurityConfigsResponse
     *
     * @param DescribeTenantSecurityConfigsRequest $request
     *
     * @return DescribeTenantSecurityConfigsResponse
     */
    public function describeTenantSecurityConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTenantSecurityConfigsWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to view the list of whitelist groups of the tenant.
     *
     * @param request - DescribeTenantSecurityIpGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTenantSecurityIpGroupsResponse
     *
     * @param DescribeTenantSecurityIpGroupsRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeTenantSecurityIpGroupsResponse
     */
    public function describeTenantSecurityIpGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeTenantSecurityIpGroups',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeTenantSecurityIpGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeTenantSecurityIpGroupsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call this operation to view the list of whitelist groups of the tenant.
     *
     * @param request - DescribeTenantSecurityIpGroupsRequest
     *
     * @returns DescribeTenantSecurityIpGroupsResponse
     *
     * @param DescribeTenantSecurityIpGroupsRequest $request
     *
     * @return DescribeTenantSecurityIpGroupsResponse
     */
    public function describeTenantSecurityIpGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTenantSecurityIpGroupsWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to query the tags of tenants in a cluster.
     *
     * @param request - DescribeTenantTagsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTenantTagsResponse
     *
     * @param DescribeTenantTagsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeTenantTagsResponse
     */
    public function describeTenantTagsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->tags) {
            @$body['Tags'] = $request->tags;
        }

        if (null !== $request->tenantIds) {
            @$body['TenantIds'] = $request->tenantIds;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeTenantTags',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeTenantTagsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeTenantTagsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call this operation to query the tags of tenants in a cluster.
     *
     * @param request - DescribeTenantTagsRequest
     *
     * @returns DescribeTenantTagsResponse
     *
     * @param DescribeTenantTagsRequest $request
     *
     * @return DescribeTenantTagsResponse
     */
    public function describeTenantTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTenantTagsWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to obtain the account authorization information of the tenant.
     *
     * @param request - DescribeTenantUserRolesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTenantUserRolesResponse
     *
     * @param DescribeTenantUserRolesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeTenantUserRolesResponse
     */
    public function describeTenantUserRolesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeTenantUserRoles',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeTenantUserRolesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeTenantUserRolesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call this operation to obtain the account authorization information of the tenant.
     *
     * @param request - DescribeTenantUserRolesRequest
     *
     * @returns DescribeTenantUserRolesResponse
     *
     * @param DescribeTenantUserRolesRequest $request
     *
     * @return DescribeTenantUserRolesResponse
     */
    public function describeTenantUserRoles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTenantUserRolesWithOptions($request, $runtime);
    }

    /**
     * The return result of the request.
     *
     * @param request - DescribeTenantUsersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTenantUsersResponse
     *
     * @param DescribeTenantUsersRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeTenantUsersResponse
     */
    public function describeTenantUsersWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->searchKey) {
            @$body['SearchKey'] = $request->searchKey;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->userName) {
            @$body['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeTenantUsers',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeTenantUsersResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeTenantUsersResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * The return result of the request.
     *
     * @param request - DescribeTenantUsersRequest
     *
     * @returns DescribeTenantUsersResponse
     *
     * @param DescribeTenantUsersRequest $request
     *
     * @return DescribeTenantUsersResponse
     */
    public function describeTenantUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTenantUsersWithOptions($request, $runtime);
    }

    /**
     * Indicates whether a read-only connection has been created.
     *
     * @param request - DescribeTenantZonesReadRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTenantZonesReadResponse
     *
     * @param DescribeTenantZonesReadRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeTenantZonesReadResponse
     */
    public function describeTenantZonesReadWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeTenantZonesRead',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeTenantZonesReadResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeTenantZonesReadResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Indicates whether a read-only connection has been created.
     *
     * @param request - DescribeTenantZonesReadRequest
     *
     * @returns DescribeTenantZonesReadResponse
     *
     * @param DescribeTenantZonesReadRequest $request
     *
     * @return DescribeTenantZonesReadResponse
     */
    public function describeTenantZonesRead($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTenantZonesReadWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to query the tenants in an OceanBase cluster.
     *
     * @param request - DescribeTenantsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTenantsResponse
     *
     * @param DescribeTenantsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeTenantsResponse
     */
    public function describeTenantsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->searchKey) {
            @$body['SearchKey'] = $request->searchKey;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->tenantName) {
            @$body['TenantName'] = $request->tenantName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeTenants',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeTenantsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeTenantsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call this operation to query the tenants in an OceanBase cluster.
     *
     * @param request - DescribeTenantsRequest
     *
     * @returns DescribeTenantsResponse
     *
     * @param DescribeTenantsRequest $request
     *
     * @return DescribeTenantsResponse
     */
    public function describeTenants($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTenantsWithOptions($request, $runtime);
    }

    /**
     * The time zones supported by the tenant.
     *
     * @param request - DescribeTimeZonesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTimeZonesResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DescribeTimeZonesResponse
     */
    public function describeTimeZonesWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DescribeTimeZones',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeTimeZonesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeTimeZonesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * The time zones supported by the tenant.
     *
     * @returns DescribeTimeZonesResponse
     *
     * @return DescribeTimeZonesResponse
     */
    public function describeTimeZones()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTimeZonesWithOptions($runtime);
    }

    /**
     * The name of the database.
     *
     * @param tmpReq - DescribeTopSQLListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTopSQLListResponse
     *
     * @param DescribeTopSQLListRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeTopSQLListResponse
     */
    public function describeTopSQLListWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribeTopSQLListShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->filterCondition) {
            $request->filterConditionShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->filterCondition, 'FilterCondition', 'json');
        }

        $body = [];
        if (null !== $request->dbName) {
            @$body['DbName'] = $request->dbName;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->filterConditionShrink) {
            @$body['FilterCondition'] = $request->filterConditionShrink;
        }

        if (null !== $request->nodeIp) {
            @$body['NodeIp'] = $request->nodeIp;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->SQLId) {
            @$body['SQLId'] = $request->SQLId;
        }

        if (null !== $request->searchKeyWord) {
            @$body['SearchKeyWord'] = $request->searchKeyWord;
        }

        if (null !== $request->searchParameter) {
            @$body['SearchParameter'] = $request->searchParameter;
        }

        if (null !== $request->searchRule) {
            @$body['SearchRule'] = $request->searchRule;
        }

        if (null !== $request->searchValue) {
            @$body['SearchValue'] = $request->searchValue;
        }

        if (null !== $request->sortColumn) {
            @$body['SortColumn'] = $request->sortColumn;
        }

        if (null !== $request->sortOrder) {
            @$body['SortOrder'] = $request->sortOrder;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeTopSQLList',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeTopSQLListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeTopSQLListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * The name of the database.
     *
     * @param request - DescribeTopSQLListRequest
     *
     * @returns DescribeTopSQLListResponse
     *
     * @param DescribeTopSQLListRequest $request
     *
     * @return DescribeTopSQLListResponse
     */
    public function describeTopSQLList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTopSQLListWithOptions($request, $runtime);
    }

    /**
     * The deployment mode.
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
        $body = [];
        if (null !== $request->cpuArch) {
            @$body['CpuArch'] = $request->cpuArch;
        }

        if (null !== $request->deployType) {
            @$body['DeployType'] = $request->deployType;
        }

        if (null !== $request->series) {
            @$body['Series'] = $request->series;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeZones',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeZonesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeZonesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * The deployment mode.
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
     * 公有云上传OSS 获取一个临时上传url.
     *
     * @param request - GetUploadOssUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUploadOssUrlResponse
     *
     * @param GetUploadOssUrlRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetUploadOssUrlResponse
     */
    public function getUploadOssUrlWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->effectiveTimeMinutes) {
            @$body['EffectiveTimeMinutes'] = $request->effectiveTimeMinutes;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetUploadOssUrl',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetUploadOssUrlResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetUploadOssUrlResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 公有云上传OSS 获取一个临时上传url.
     *
     * @param request - GetUploadOssUrlRequest
     *
     * @returns GetUploadOssUrlResponse
     *
     * @param GetUploadOssUrlRequest $request
     *
     * @return GetUploadOssUrlResponse
     */
    public function getUploadOssUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUploadOssUrlWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to close a session.
     *
     * @param request - KillProcessListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns KillProcessListResponse
     *
     * @param KillProcessListRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return KillProcessListResponse
     */
    public function killProcessListWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->sessionList) {
            @$body['SessionList'] = $request->sessionList;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'KillProcessList',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return KillProcessListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return KillProcessListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call this operation to close a session.
     *
     * @param request - KillProcessListRequest
     *
     * @returns KillProcessListResponse
     *
     * @param KillProcessListRequest $request
     *
     * @return KillProcessListResponse
     */
    public function killProcessList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->killProcessListWithOptions($request, $runtime);
    }

    /**
     * 查询标签列表.
     *
     * @param request - ListAllLabelsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAllLabelsResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return ListAllLabelsResponse
     */
    public function listAllLabelsWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'ListAllLabels',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListAllLabelsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListAllLabelsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询标签列表.
     *
     * @returns ListAllLabelsResponse
     *
     * @return ListAllLabelsResponse
     */
    public function listAllLabels()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAllLabelsWithOptions($runtime);
    }

    /**
     * 查询数据源列表 (MySql、OB_MYSQL、OB_ORACLE).
     *
     * @param tmpReq - ListDataSourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDataSourceResponse
     *
     * @param ListDataSourceRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return ListDataSourceResponse
     */
    public function listDataSourceWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListDataSourceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->types) {
            $request->typesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->types, 'Types', 'json');
        }

        $body = [];
        if (null !== $request->order) {
            @$body['Order'] = $request->order;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->searchKey) {
            @$body['SearchKey'] = $request->searchKey;
        }

        if (null !== $request->sortField) {
            @$body['SortField'] = $request->sortField;
        }

        if (null !== $request->typesShrink) {
            @$body['Types'] = $request->typesShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListDataSource',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListDataSourceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询数据源列表 (MySql、OB_MYSQL、OB_ORACLE).
     *
     * @param request - ListDataSourceRequest
     *
     * @returns ListDataSourceResponse
     *
     * @param ListDataSourceRequest $request
     *
     * @return ListDataSourceResponse
     */
    public function listDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataSourceWithOptions($request, $runtime);
    }

    /**
     * 查询项目的全量校验结果.
     *
     * @param tmpReq - ListProjectFullVerifyResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListProjectFullVerifyResultResponse
     *
     * @param ListProjectFullVerifyResultRequest $tmpReq
     * @param RuntimeOptions                     $runtime
     *
     * @return ListProjectFullVerifyResultResponse
     */
    public function listProjectFullVerifyResultWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListProjectFullVerifyResultShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->destSchemas) {
            $request->destSchemasShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->destSchemas, 'DestSchemas', 'json');
        }

        if (null !== $tmpReq->sourceSchemas) {
            $request->sourceSchemasShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sourceSchemas, 'SourceSchemas', 'json');
        }

        $body = [];
        if (null !== $request->destSchemasShrink) {
            @$body['DestSchemas'] = $request->destSchemasShrink;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->projectId) {
            @$body['ProjectId'] = $request->projectId;
        }

        if (null !== $request->sourceSchemasShrink) {
            @$body['SourceSchemas'] = $request->sourceSchemasShrink;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListProjectFullVerifyResult',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListProjectFullVerifyResultResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListProjectFullVerifyResultResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询项目的全量校验结果.
     *
     * @param request - ListProjectFullVerifyResultRequest
     *
     * @returns ListProjectFullVerifyResultResponse
     *
     * @param ListProjectFullVerifyResultRequest $request
     *
     * @return ListProjectFullVerifyResultResponse
     */
    public function listProjectFullVerifyResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProjectFullVerifyResultWithOptions($request, $runtime);
    }

    /**
     * 根据项目 ID 查询项目的修改记录.
     *
     * @param request - ListProjectModifyRecordsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListProjectModifyRecordsResponse
     *
     * @param ListProjectModifyRecordsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListProjectModifyRecordsResponse
     */
    public function listProjectModifyRecordsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListProjectModifyRecords',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListProjectModifyRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListProjectModifyRecordsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 根据项目 ID 查询项目的修改记录.
     *
     * @param request - ListProjectModifyRecordsRequest
     *
     * @returns ListProjectModifyRecordsResponse
     *
     * @param ListProjectModifyRecordsRequest $request
     *
     * @return ListProjectModifyRecordsResponse
     */
    public function listProjectModifyRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProjectModifyRecordsWithOptions($request, $runtime);
    }

    /**
     * 查询项目列表.
     *
     * @param tmpReq - ListProjectsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListProjectsResponse
     *
     * @param ListProjectsRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return ListProjectsResponse
     */
    public function listProjectsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListProjectsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->labelIds) {
            $request->labelIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->labelIds, 'LabelIds', 'json');
        }

        if (null !== $tmpReq->sinkEndpointTypes) {
            $request->sinkEndpointTypesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sinkEndpointTypes, 'SinkEndpointTypes', 'json');
        }

        if (null !== $tmpReq->sourceEndpointTypes) {
            $request->sourceEndpointTypesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sourceEndpointTypes, 'SourceEndpointTypes', 'json');
        }

        if (null !== $tmpReq->status) {
            $request->statusShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->status, 'Status', 'json');
        }

        $body = [];
        if (null !== $request->labelIdsShrink) {
            @$body['LabelIds'] = $request->labelIdsShrink;
        }

        if (null !== $request->needRelatedInfo) {
            @$body['NeedRelatedInfo'] = $request->needRelatedInfo;
        }

        if (null !== $request->order) {
            @$body['Order'] = $request->order;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->searchKey) {
            @$body['SearchKey'] = $request->searchKey;
        }

        if (null !== $request->sinkEndpointTypesShrink) {
            @$body['SinkEndpointTypes'] = $request->sinkEndpointTypesShrink;
        }

        if (null !== $request->sortField) {
            @$body['SortField'] = $request->sortField;
        }

        if (null !== $request->sourceEndpointTypesShrink) {
            @$body['SourceEndpointTypes'] = $request->sourceEndpointTypesShrink;
        }

        if (null !== $request->statusShrink) {
            @$body['Status'] = $request->statusShrink;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        if (null !== $request->visibleSubProject) {
            @$body['VisibleSubProject'] = $request->visibleSubProject;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListProjects',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListProjectsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListProjectsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询项目列表.
     *
     * @param request - ListProjectsRequest
     *
     * @returns ListProjectsResponse
     *
     * @param ListProjectsRequest $request
     *
     * @return ListProjectsResponse
     */
    public function listProjects($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProjectsWithOptions($request, $runtime);
    }

    /**
     * 查询传输实例列表.
     *
     * @param tmpReq - ListWorkerInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListWorkerInstancesResponse
     *
     * @param ListWorkerInstancesRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return ListWorkerInstancesResponse
     */
    public function listWorkerInstancesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListWorkerInstancesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->specs) {
            $request->specsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->specs, 'Specs', 'json');
        }

        $body = [];
        if (null !== $request->destType) {
            @$body['DestType'] = $request->destType;
        }

        if (null !== $request->instanceName) {
            @$body['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->onlyBindable) {
            @$body['OnlyBindable'] = $request->onlyBindable;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sourceType) {
            @$body['SourceType'] = $request->sourceType;
        }

        if (null !== $request->specsShrink) {
            @$body['Specs'] = $request->specsShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListWorkerInstances',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListWorkerInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListWorkerInstancesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询传输实例列表.
     *
     * @param request - ListWorkerInstancesRequest
     *
     * @returns ListWorkerInstancesResponse
     *
     * @param ListWorkerInstancesRequest $request
     *
     * @return ListWorkerInstancesResponse
     */
    public function listWorkerInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listWorkerInstancesWithOptions($request, $runtime);
    }

    /**
     * The request ID.
     *
     * @param request - ModifyDatabaseDescriptionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDatabaseDescriptionResponse
     *
     * @param ModifyDatabaseDescriptionRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyDatabaseDescriptionResponse
     */
    public function modifyDatabaseDescriptionWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->databaseName) {
            @$body['DatabaseName'] = $request->databaseName;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyDatabaseDescription',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifyDatabaseDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyDatabaseDescriptionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * The request ID.
     *
     * @param request - ModifyDatabaseDescriptionRequest
     *
     * @returns ModifyDatabaseDescriptionResponse
     *
     * @param ModifyDatabaseDescriptionRequest $request
     *
     * @return ModifyDatabaseDescriptionResponse
     */
    public function modifyDatabaseDescription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDatabaseDescriptionWithOptions($request, $runtime);
    }

    /**
     * The accounts that have privileges on the database.
     *
     * @param request - ModifyDatabaseUserRolesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDatabaseUserRolesResponse
     *
     * @param ModifyDatabaseUserRolesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyDatabaseUserRolesResponse
     */
    public function modifyDatabaseUserRolesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->databaseName) {
            @$body['DatabaseName'] = $request->databaseName;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->users) {
            @$body['Users'] = $request->users;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyDatabaseUserRoles',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifyDatabaseUserRolesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyDatabaseUserRolesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * The accounts that have privileges on the database.
     *
     * @param request - ModifyDatabaseUserRolesRequest
     *
     * @returns ModifyDatabaseUserRolesResponse
     *
     * @param ModifyDatabaseUserRolesRequest $request
     *
     * @return ModifyDatabaseUserRolesResponse
     */
    public function modifyDatabaseUserRoles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDatabaseUserRolesWithOptions($request, $runtime);
    }

    /**
     * The name of the OceanBase cluster.
     *
     * @param request - ModifyInstanceNameRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyInstanceNameResponse
     *
     * @param ModifyInstanceNameRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyInstanceNameResponse
     */
    public function modifyInstanceNameWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceName) {
            @$body['InstanceName'] = $request->instanceName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyInstanceName',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifyInstanceNameResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyInstanceNameResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * The name of the OceanBase cluster.
     *
     * @param request - ModifyInstanceNameRequest
     *
     * @returns ModifyInstanceNameResponse
     *
     * @param ModifyInstanceNameRequest $request
     *
     * @return ModifyInstanceNameResponse
     */
    public function modifyInstanceName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceNameWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to modify the number of nodes in a cluster.
     *
     * @param request - ModifyInstanceNodeNumRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyInstanceNodeNumResponse
     *
     * @param ModifyInstanceNodeNumRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyInstanceNodeNumResponse
     */
    public function modifyInstanceNodeNumWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nodeNum) {
            @$body['NodeNum'] = $request->nodeNum;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyInstanceNodeNum',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifyInstanceNodeNumResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyInstanceNodeNumResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call this operation to modify the number of nodes in a cluster.
     *
     * @param request - ModifyInstanceNodeNumRequest
     *
     * @returns ModifyInstanceNodeNumResponse
     *
     * @param ModifyInstanceNodeNumRequest $request
     *
     * @return ModifyInstanceNodeNumResponse
     */
    public function modifyInstanceNodeNum($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceNodeNumWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to modify the Secure Sockets Layer (SSL) setting for an OceanBase cluster instance.
     *
     * @remarks
     * There is currently no authorization information disclosed in the API.
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
        $body = [];
        if (null !== $request->enableSSL) {
            @$body['EnableSSL'] = $request->enableSSL;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyInstanceSSL',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifyInstanceSSLResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyInstanceSSLResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call this operation to modify the Secure Sockets Layer (SSL) setting for an OceanBase cluster instance.
     *
     * @remarks
     * There is currently no authorization information disclosed in the API.
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
     * You can call this operation to modify the cluster specifications and storage space.
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
        $body = [];
        if (null !== $request->diskSize) {
            @$body['DiskSize'] = $request->diskSize;
        }

        if (null !== $request->diskType) {
            @$body['DiskType'] = $request->diskType;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->instanceClass) {
            @$body['InstanceClass'] = $request->instanceClass;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->upgradeSpecNative) {
            @$body['UpgradeSpecNative'] = $request->upgradeSpecNative;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyInstanceSpec',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifyInstanceSpecResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyInstanceSpecResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call this operation to modify the cluster specifications and storage space.
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
     * You can call this operation to modify the tags of a cluster.
     *
     * @param request - ModifyInstanceTagsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyInstanceTagsResponse
     *
     * @param ModifyInstanceTagsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyInstanceTagsResponse
     */
    public function modifyInstanceTagsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->tags) {
            @$body['Tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyInstanceTags',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifyInstanceTagsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyInstanceTagsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call this operation to modify the tags of a cluster.
     *
     * @param request - ModifyInstanceTagsRequest
     *
     * @returns ModifyInstanceTagsResponse
     *
     * @param ModifyInstanceTagsRequest $request
     *
     * @return ModifyInstanceTagsResponse
     */
    public function modifyInstanceTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceTagsWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to modify the temporary capacity of the OceanBase cluster.
     *
     * @param request - ModifyInstanceTemporaryCapacityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyInstanceTemporaryCapacityResponse
     *
     * @param ModifyInstanceTemporaryCapacityRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ModifyInstanceTemporaryCapacityResponse
     */
    public function modifyInstanceTemporaryCapacityWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->acceptLanguage) {
            @$body['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->diskSize) {
            @$body['DiskSize'] = $request->diskSize;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->spec) {
            @$body['Spec'] = $request->spec;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyInstanceTemporaryCapacity',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifyInstanceTemporaryCapacityResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyInstanceTemporaryCapacityResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call this operation to modify the temporary capacity of the OceanBase cluster.
     *
     * @param request - ModifyInstanceTemporaryCapacityRequest
     *
     * @returns ModifyInstanceTemporaryCapacityResponse
     *
     * @param ModifyInstanceTemporaryCapacityRequest $request
     *
     * @return ModifyInstanceTemporaryCapacityResponse
     */
    public function modifyInstanceTemporaryCapacity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceTemporaryCapacityWithOptions($request, $runtime);
    }

    /**
     * The modification results.
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
        $body = [];
        if (null !== $request->dimension) {
            @$body['Dimension'] = $request->dimension;
        }

        if (null !== $request->dimensionValue) {
            @$body['DimensionValue'] = $request->dimensionValue;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->parameters) {
            @$body['Parameters'] = $request->parameters;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyParameters',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifyParametersResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyParametersResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * The modification results.
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
     * The name of the security group.
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
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->securityIpGroupName) {
            @$body['SecurityIpGroupName'] = $request->securityIpGroupName;
        }

        if (null !== $request->securityIps) {
            @$body['SecurityIps'] = $request->securityIps;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifySecurityIps',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifySecurityIpsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifySecurityIpsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * The name of the security group.
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
     * @param request - ModifyTagNameRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyTagNameResponse
     *
     * @param ModifyTagNameRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ModifyTagNameResponse
     */
    public function modifyTagNameWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->key) {
            @$body['Key'] = $request->key;
        }

        if (null !== $request->newKey) {
            @$body['NewKey'] = $request->newKey;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyTagName',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifyTagNameResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyTagNameResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - ModifyTagNameRequest
     *
     * @returns ModifyTagNameResponse
     *
     * @param ModifyTagNameRequest $request
     *
     * @return ModifyTagNameResponse
     */
    public function modifyTagName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTagNameWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to rename a tag.
     *
     * @param request - ModifyTagValueNameRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyTagValueNameResponse
     *
     * @param ModifyTagValueNameRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyTagValueNameResponse
     */
    public function modifyTagValueNameWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->key) {
            @$body['Key'] = $request->key;
        }

        if (null !== $request->newValue) {
            @$body['NewValue'] = $request->newValue;
        }

        if (null !== $request->value) {
            @$body['Value'] = $request->value;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyTagValueName',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifyTagValueNameResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyTagValueNameResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call this operation to rename a tag.
     *
     * @param request - ModifyTagValueNameRequest
     *
     * @returns ModifyTagValueNameResponse
     *
     * @param ModifyTagValueNameRequest $request
     *
     * @return ModifyTagValueNameResponse
     */
    public function modifyTagValueName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTagValueNameWithOptions($request, $runtime);
    }

    /**
     * 租户加密变更.
     *
     * @param request - ModifyTenantEncryptionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyTenantEncryptionResponse
     *
     * @param ModifyTenantEncryptionRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyTenantEncryptionResponse
     */
    public function modifyTenantEncryptionWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->encryptionKeyId) {
            @$body['EncryptionKeyId'] = $request->encryptionKeyId;
        }

        if (null !== $request->encryptionType) {
            @$body['EncryptionType'] = $request->encryptionType;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyTenantEncryption',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifyTenantEncryptionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyTenantEncryptionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 租户加密变更.
     *
     * @param request - ModifyTenantEncryptionRequest
     *
     * @returns ModifyTenantEncryptionResponse
     *
     * @param ModifyTenantEncryptionRequest $request
     *
     * @return ModifyTenantEncryptionResponse
     */
    public function modifyTenantEncryption($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTenantEncryptionWithOptions($request, $runtime);
    }

    /**
     * The return result of the request.
     *
     * @param request - ModifyTenantPrimaryZoneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyTenantPrimaryZoneResponse
     *
     * @param ModifyTenantPrimaryZoneRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyTenantPrimaryZoneResponse
     */
    public function modifyTenantPrimaryZoneWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->masterIntranetAddressZone) {
            @$body['MasterIntranetAddressZone'] = $request->masterIntranetAddressZone;
        }

        if (null !== $request->primaryZone) {
            @$body['PrimaryZone'] = $request->primaryZone;
        }

        if (null !== $request->tenantEndpointDirectId) {
            @$body['TenantEndpointDirectId'] = $request->tenantEndpointDirectId;
        }

        if (null !== $request->tenantEndpointId) {
            @$body['TenantEndpointId'] = $request->tenantEndpointId;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->userDirectVSwitchId) {
            @$body['UserDirectVSwitchId'] = $request->userDirectVSwitchId;
        }

        if (null !== $request->userVSwitchId) {
            @$body['UserVSwitchId'] = $request->userVSwitchId;
        }

        if (null !== $request->userVpcOwnerId) {
            @$body['UserVpcOwnerId'] = $request->userVpcOwnerId;
        }

        if (null !== $request->vpcId) {
            @$body['VpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyTenantPrimaryZone',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifyTenantPrimaryZoneResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyTenantPrimaryZoneResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * The return result of the request.
     *
     * @param request - ModifyTenantPrimaryZoneRequest
     *
     * @returns ModifyTenantPrimaryZoneResponse
     *
     * @param ModifyTenantPrimaryZoneRequest $request
     *
     * @return ModifyTenantPrimaryZoneResponse
     */
    public function modifyTenantPrimaryZone($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTenantPrimaryZoneWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to modify the specifications of a tenant in an OceanBase cluster.
     *
     * @param request - ModifyTenantResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyTenantResourceResponse
     *
     * @param ModifyTenantResourceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyTenantResourceResponse
     */
    public function modifyTenantResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->cpu) {
            @$body['Cpu'] = $request->cpu;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->logDisk) {
            @$body['LogDisk'] = $request->logDisk;
        }

        if (null !== $request->memory) {
            @$body['Memory'] = $request->memory;
        }

        if (null !== $request->readOnlyZoneList) {
            @$body['ReadOnlyZoneList'] = $request->readOnlyZoneList;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyTenantResource',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifyTenantResourceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyTenantResourceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call this operation to modify the specifications of a tenant in an OceanBase cluster.
     *
     * @param request - ModifyTenantResourceRequest
     *
     * @returns ModifyTenantResourceResponse
     *
     * @param ModifyTenantResourceRequest $request
     *
     * @return ModifyTenantResourceResponse
     */
    public function modifyTenantResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTenantResourceWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to modify the information on the whitelist group of the tenant.
     *
     * @param request - ModifyTenantSecurityIpGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyTenantSecurityIpGroupResponse
     *
     * @param ModifyTenantSecurityIpGroupRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyTenantSecurityIpGroupResponse
     */
    public function modifyTenantSecurityIpGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->securityIpGroupName) {
            @$body['SecurityIpGroupName'] = $request->securityIpGroupName;
        }

        if (null !== $request->securityIps) {
            @$body['SecurityIps'] = $request->securityIps;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyTenantSecurityIpGroup',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifyTenantSecurityIpGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyTenantSecurityIpGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call this operation to modify the information on the whitelist group of the tenant.
     *
     * @param request - ModifyTenantSecurityIpGroupRequest
     *
     * @returns ModifyTenantSecurityIpGroupResponse
     *
     * @param ModifyTenantSecurityIpGroupRequest $request
     *
     * @return ModifyTenantSecurityIpGroupResponse
     */
    public function modifyTenantSecurityIpGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTenantSecurityIpGroupWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to modify the tags of a tenant.
     *
     * @param request - ModifyTenantTagsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyTenantTagsResponse
     *
     * @param ModifyTenantTagsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyTenantTagsResponse
     */
    public function modifyTenantTagsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->tags) {
            @$body['Tags'] = $request->tags;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyTenantTags',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifyTenantTagsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyTenantTagsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call this operation to modify the tags of a tenant.
     *
     * @param request - ModifyTenantTagsRequest
     *
     * @returns ModifyTenantTagsResponse
     *
     * @param ModifyTenantTagsRequest $request
     *
     * @return ModifyTenantTagsResponse
     */
    public function modifyTenantTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTenantTagsWithOptions($request, $runtime);
    }

    /**
     * The description of the database.
     *
     * @param request - ModifyTenantUserDescriptionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyTenantUserDescriptionResponse
     *
     * @param ModifyTenantUserDescriptionRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyTenantUserDescriptionResponse
     */
    public function modifyTenantUserDescriptionWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->userName) {
            @$body['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyTenantUserDescription',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifyTenantUserDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyTenantUserDescriptionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * The description of the database.
     *
     * @param request - ModifyTenantUserDescriptionRequest
     *
     * @returns ModifyTenantUserDescriptionResponse
     *
     * @param ModifyTenantUserDescriptionRequest $request
     *
     * @return ModifyTenantUserDescriptionResponse
     */
    public function modifyTenantUserDescription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTenantUserDescriptionWithOptions($request, $runtime);
    }

    /**
     * The request ID.
     *
     * @param request - ModifyTenantUserPasswordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyTenantUserPasswordResponse
     *
     * @param ModifyTenantUserPasswordRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyTenantUserPasswordResponse
     */
    public function modifyTenantUserPasswordWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->encryptionType) {
            @$body['EncryptionType'] = $request->encryptionType;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->userName) {
            @$body['UserName'] = $request->userName;
        }

        if (null !== $request->userPassword) {
            @$body['UserPassword'] = $request->userPassword;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyTenantUserPassword',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifyTenantUserPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyTenantUserPasswordResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * The request ID.
     *
     * @param request - ModifyTenantUserPasswordRequest
     *
     * @returns ModifyTenantUserPasswordResponse
     *
     * @param ModifyTenantUserPasswordRequest $request
     *
     * @return ModifyTenantUserPasswordResponse
     */
    public function modifyTenantUserPassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTenantUserPasswordWithOptions($request, $runtime);
    }

    /**
     * Indicates whether the privilege was granted to the role.
     *
     * @param request - ModifyTenantUserRolesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyTenantUserRolesResponse
     *
     * @param ModifyTenantUserRolesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyTenantUserRolesResponse
     */
    public function modifyTenantUserRolesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->globalPermissions) {
            @$body['GlobalPermissions'] = $request->globalPermissions;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->modifyType) {
            @$body['ModifyType'] = $request->modifyType;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->userName) {
            @$body['UserName'] = $request->userName;
        }

        if (null !== $request->userRole) {
            @$body['UserRole'] = $request->userRole;
        }

        if (null !== $request->userType) {
            @$body['UserType'] = $request->userType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyTenantUserRoles',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifyTenantUserRolesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyTenantUserRolesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Indicates whether the privilege was granted to the role.
     *
     * @param request - ModifyTenantUserRolesRequest
     *
     * @returns ModifyTenantUserRolesResponse
     *
     * @param ModifyTenantUserRolesRequest $request
     *
     * @return ModifyTenantUserRolesResponse
     */
    public function modifyTenantUserRoles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTenantUserRolesWithOptions($request, $runtime);
    }

    /**
     * The ID of the tenant.
     *
     * @param request - ModifyTenantUserStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyTenantUserStatusResponse
     *
     * @param ModifyTenantUserStatusRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyTenantUserStatusResponse
     */
    public function modifyTenantUserStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->userName) {
            @$body['UserName'] = $request->userName;
        }

        if (null !== $request->userStatus) {
            @$body['UserStatus'] = $request->userStatus;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyTenantUserStatus',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifyTenantUserStatusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyTenantUserStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * The ID of the tenant.
     *
     * @param request - ModifyTenantUserStatusRequest
     *
     * @returns ModifyTenantUserStatusResponse
     *
     * @param ModifyTenantUserStatusRequest $request
     *
     * @return ModifyTenantUserStatusResponse
     */
    public function modifyTenantUserStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTenantUserStatusWithOptions($request, $runtime);
    }

    /**
     * 释放项目.
     *
     * @param request - ReleaseProjectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReleaseProjectResponse
     *
     * @param ReleaseProjectRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ReleaseProjectResponse
     */
    public function releaseProjectWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ReleaseProject',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ReleaseProjectResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ReleaseProjectResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 释放项目.
     *
     * @param request - ReleaseProjectRequest
     *
     * @returns ReleaseProjectResponse
     *
     * @param ReleaseProjectRequest $request
     *
     * @return ReleaseProjectResponse
     */
    public function releaseProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseProjectWithOptions($request, $runtime);
    }

    /**
     * 释放传输实例 （未绑定项目时才可以释放）.
     *
     * @param request - ReleaseWorkerInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReleaseWorkerInstanceResponse
     *
     * @param ReleaseWorkerInstanceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ReleaseWorkerInstanceResponse
     */
    public function releaseWorkerInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ReleaseWorkerInstance',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ReleaseWorkerInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ReleaseWorkerInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 释放传输实例 （未绑定项目时才可以释放）.
     *
     * @param request - ReleaseWorkerInstanceRequest
     *
     * @returns ReleaseWorkerInstanceResponse
     *
     * @param ReleaseWorkerInstanceRequest $request
     *
     * @return ReleaseWorkerInstanceResponse
     */
    public function releaseWorkerInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseWorkerInstanceWithOptions($request, $runtime);
    }

    /**
     * 备实例解耦.
     *
     * @param request - RemoveStandbyInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveStandbyInstanceResponse
     *
     * @param RemoveStandbyInstanceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RemoveStandbyInstanceResponse
     */
    public function removeStandbyInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->forced) {
            @$body['Forced'] = $request->forced;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->targetInstanceId) {
            @$body['TargetInstanceId'] = $request->targetInstanceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RemoveStandbyInstance',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RemoveStandbyInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RemoveStandbyInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 备实例解耦.
     *
     * @param request - RemoveStandbyInstanceRequest
     *
     * @returns RemoveStandbyInstanceResponse
     *
     * @param RemoveStandbyInstanceRequest $request
     *
     * @return RemoveStandbyInstanceResponse
     */
    public function removeStandbyInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeStandbyInstanceWithOptions($request, $runtime);
    }

    /**
     * 恢复项目.
     *
     * @param request - ResumeProjectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResumeProjectResponse
     *
     * @param ResumeProjectRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ResumeProjectResponse
     */
    public function resumeProjectWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ResumeProject',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ResumeProjectResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ResumeProjectResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 恢复项目.
     *
     * @param request - ResumeProjectRequest
     *
     * @returns ResumeProjectResponse
     *
     * @param ResumeProjectRequest $request
     *
     * @return ResumeProjectResponse
     */
    public function resumeProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resumeProjectWithOptions($request, $runtime);
    }

    /**
     * 根据修改记录 ID 重试修改操作（仅支持处于 FAILED 状态的修改记录）.
     *
     * @param request - RetryProjectModifyRecordsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RetryProjectModifyRecordsResponse
     *
     * @param RetryProjectModifyRecordsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return RetryProjectModifyRecordsResponse
     */
    public function retryProjectModifyRecordsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RetryProjectModifyRecords',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RetryProjectModifyRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RetryProjectModifyRecordsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 根据修改记录 ID 重试修改操作（仅支持处于 FAILED 状态的修改记录）.
     *
     * @param request - RetryProjectModifyRecordsRequest
     *
     * @returns RetryProjectModifyRecordsResponse
     *
     * @param RetryProjectModifyRecordsRequest $request
     *
     * @return RetryProjectModifyRecordsResponse
     */
    public function retryProjectModifyRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->retryProjectModifyRecordsWithOptions($request, $runtime);
    }

    /**
     * 启动项目.
     *
     * @param request - StartProjectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartProjectResponse
     *
     * @param StartProjectRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return StartProjectResponse
     */
    public function startProjectWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'StartProject',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return StartProjectResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StartProjectResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 启动项目.
     *
     * @param request - StartProjectRequest
     *
     * @returns StartProjectResponse
     *
     * @param StartProjectRequest $request
     *
     * @return StartProjectResponse
     */
    public function startProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startProjectWithOptions($request, $runtime);
    }

    /**
     * 启动该label下的所有未启动项目.
     *
     * @param request - StartProjectsByLabelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartProjectsByLabelResponse
     *
     * @param StartProjectsByLabelRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return StartProjectsByLabelResponse
     */
    public function startProjectsByLabelWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'StartProjectsByLabel',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return StartProjectsByLabelResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StartProjectsByLabelResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 启动该label下的所有未启动项目.
     *
     * @param request - StartProjectsByLabelRequest
     *
     * @returns StartProjectsByLabelResponse
     *
     * @param StartProjectsByLabelRequest $request
     *
     * @return StartProjectsByLabelResponse
     */
    public function startProjectsByLabel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startProjectsByLabelWithOptions($request, $runtime);
    }

    /**
     * 暂停项目.
     *
     * @param request - StopProjectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopProjectResponse
     *
     * @param StopProjectRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return StopProjectResponse
     */
    public function stopProjectWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'StopProject',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return StopProjectResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StopProjectResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 暂停项目.
     *
     * @param request - StopProjectRequest
     *
     * @returns StopProjectResponse
     *
     * @param StopProjectRequest $request
     *
     * @return StopProjectResponse
     */
    public function stopProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopProjectWithOptions($request, $runtime);
    }

    /**
     * 根据修改记录 ID 终止修改操作，不可恢复（仅支持处于 RUNNING / FAILED 状态的修改记录）.
     *
     * @param request - StopProjectModifyRecordsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopProjectModifyRecordsResponse
     *
     * @param StopProjectModifyRecordsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return StopProjectModifyRecordsResponse
     */
    public function stopProjectModifyRecordsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'StopProjectModifyRecords',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return StopProjectModifyRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StopProjectModifyRecordsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 根据修改记录 ID 终止修改操作，不可恢复（仅支持处于 RUNNING / FAILED 状态的修改记录）.
     *
     * @param request - StopProjectModifyRecordsRequest
     *
     * @returns StopProjectModifyRecordsResponse
     *
     * @param StopProjectModifyRecordsRequest $request
     *
     * @return StopProjectModifyRecordsResponse
     */
    public function stopProjectModifyRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopProjectModifyRecordsWithOptions($request, $runtime);
    }

    /**
     * 暂停该label下的所有运行中项目.
     *
     * @param request - StopProjectsByLabelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopProjectsByLabelResponse
     *
     * @param StopProjectsByLabelRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return StopProjectsByLabelResponse
     */
    public function stopProjectsByLabelWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'StopProjectsByLabel',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return StopProjectsByLabelResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StopProjectsByLabelResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 暂停该label下的所有运行中项目.
     *
     * @param request - StopProjectsByLabelRequest
     *
     * @returns StopProjectsByLabelResponse
     *
     * @param StopProjectsByLabelRequest $request
     *
     * @return StopProjectsByLabelResponse
     */
    public function stopProjectsByLabel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopProjectsByLabelWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to switch between the primary and standby instances of OceanBase.
     *
     * @param request - SwitchoverInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SwitchoverInstanceResponse
     *
     * @param SwitchoverInstanceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SwitchoverInstanceResponse
     */
    public function switchoverInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->forced) {
            @$body['Forced'] = $request->forced;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->targetInstanceId) {
            @$body['TargetInstanceId'] = $request->targetInstanceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SwitchoverInstance',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SwitchoverInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SwitchoverInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call this operation to switch between the primary and standby instances of OceanBase.
     *
     * @param request - SwitchoverInstanceRequest
     *
     * @returns SwitchoverInstanceResponse
     *
     * @param SwitchoverInstanceRequest $request
     *
     * @return SwitchoverInstanceResponse
     */
    public function switchoverInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->switchoverInstanceWithOptions($request, $runtime);
    }

    /**
     * 更新项目配置 Action=UpdateProjectConfig.
     *
     * @param tmpReq - UpdateProjectConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateProjectConfigResponse
     *
     * @param UpdateProjectConfigRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateProjectConfigResponse
     */
    public function updateProjectConfigWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateProjectConfigShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->commonTransferConfig) {
            $request->commonTransferConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->commonTransferConfig, 'CommonTransferConfig', 'json');
        }

        if (null !== $tmpReq->fullTransferConfig) {
            $request->fullTransferConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->fullTransferConfig, 'FullTransferConfig', 'json');
        }

        if (null !== $tmpReq->incrTransferConfig) {
            $request->incrTransferConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->incrTransferConfig, 'IncrTransferConfig', 'json');
        }

        if (null !== $tmpReq->reverseIncrTransferConfig) {
            $request->reverseIncrTransferConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->reverseIncrTransferConfig, 'ReverseIncrTransferConfig', 'json');
        }

        $body = [];
        if (null !== $request->commonTransferConfigShrink) {
            @$body['CommonTransferConfig'] = $request->commonTransferConfigShrink;
        }

        if (null !== $request->fullTransferConfigShrink) {
            @$body['FullTransferConfig'] = $request->fullTransferConfigShrink;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->incrTransferConfigShrink) {
            @$body['IncrTransferConfig'] = $request->incrTransferConfigShrink;
        }

        if (null !== $request->reverseIncrTransferConfigShrink) {
            @$body['ReverseIncrTransferConfig'] = $request->reverseIncrTransferConfigShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateProjectConfig',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateProjectConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateProjectConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 更新项目配置 Action=UpdateProjectConfig.
     *
     * @param request - UpdateProjectConfigRequest
     *
     * @returns UpdateProjectConfigResponse
     *
     * @param UpdateProjectConfigRequest $request
     *
     * @return UpdateProjectConfigResponse
     */
    public function updateProjectConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateProjectConfigWithOptions($request, $runtime);
    }
}
