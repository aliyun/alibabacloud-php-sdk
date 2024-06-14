<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\BatchKillProcessListRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\BatchKillProcessListResponse;
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
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeRecommendIndexRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeRecommendIndexResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSampleSqlRawTextsRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSampleSqlRawTextsResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSecurityIpGroupsRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSecurityIpGroupsResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSlowSQLHistoryListRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSlowSQLHistoryListResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSlowSQLListRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSlowSQLListResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSlowSQLListShrinkRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSQLDetailsRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSQLDetailsResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSQLHistoryListRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSQLHistoryListResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSQLPlansRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSQLPlansResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSQLSamplesRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSQLSamplesResponse;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary You can call this operation to close sessions in batches. Please note that this operation is executed asynchronously. After calling this operation, you need to verify it by calling DescribeProcessStatsComposition.
     *  *
     * @param BatchKillProcessListRequest $request BatchKillProcessListRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchKillProcessListResponse BatchKillProcessListResponse
     */
    public function batchKillProcessListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->sessionList)) {
            $body['SessionList'] = $request->sessionList;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'BatchKillProcessList',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchKillProcessListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can call this operation to close sessions in batches. Please note that this operation is executed asynchronously. After calling this operation, you need to verify it by calling DescribeProcessStatsComposition.
     *  *
     * @param BatchKillProcessListRequest $request BatchKillProcessListRequest
     *
     * @return BatchKillProcessListResponse BatchKillProcessListResponse
     */
    public function batchKillProcessList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchKillProcessListWithOptions($request, $runtime);
    }

    /**
     * @summary 根据记录id取消修改操作 （仅支持处于 PENDING 状态的修改记录）
     *  *
     * @param CancelProjectModifyRecordRequest $request CancelProjectModifyRecordRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return CancelProjectModifyRecordResponse CancelProjectModifyRecordResponse
     */
    public function cancelProjectModifyRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CancelProjectModifyRecord',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelProjectModifyRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 根据记录id取消修改操作 （仅支持处于 PENDING 状态的修改记录）
     *  *
     * @param CancelProjectModifyRecordRequest $request CancelProjectModifyRecordRequest
     *
     * @return CancelProjectModifyRecordResponse CancelProjectModifyRecordResponse
     */
    public function cancelProjectModifyRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelProjectModifyRecordWithOptions($request, $runtime);
    }

    /**
     * @summary 创建备份任务下载链接
     *  *
     * @param CreateBackupSetDownloadLinkRequest $request CreateBackupSetDownloadLinkRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateBackupSetDownloadLinkResponse CreateBackupSetDownloadLinkResponse
     */
    public function createBackupSetDownloadLinkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->backupSetId)) {
            $body['BackupSetId'] = $request->backupSetId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateBackupSetDownloadLink',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateBackupSetDownloadLinkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建备份任务下载链接
     *  *
     * @param CreateBackupSetDownloadLinkRequest $request CreateBackupSetDownloadLinkRequest
     *
     * @return CreateBackupSetDownloadLinkResponse CreateBackupSetDownloadLinkResponse
     */
    public function createBackupSetDownloadLink($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBackupSetDownloadLinkWithOptions($request, $runtime);
    }

    /**
     * @summary The request ID.
     *  *
     * @param CreateDatabaseRequest $request CreateDatabaseRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDatabaseResponse CreateDatabaseResponse
     */
    public function createDatabaseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->collation)) {
            $body['Collation'] = $request->collation;
        }
        if (!Utils::isUnset($request->databaseName)) {
            $body['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->encoding)) {
            $body['Encoding'] = $request->encoding;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateDatabase',
            'version'     => '2019-09-01',
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
     * @summary The request ID.
     *  *
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
     * @summary You can call this operation to create an OceanBase cluster.
     *  *
     * @param CreateInstanceRequest $request CreateInstanceRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateInstanceResponse CreateInstanceResponse
     */
    public function createInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->autoRenew)) {
            $body['AutoRenew'] = $request->autoRenew;
        }
        if (!Utils::isUnset($request->autoRenewPeriod)) {
            $body['AutoRenewPeriod'] = $request->autoRenewPeriod;
        }
        if (!Utils::isUnset($request->chargeType)) {
            $body['ChargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->cpuArch)) {
            $body['CpuArch'] = $request->cpuArch;
        }
        if (!Utils::isUnset($request->diskSize)) {
            $body['DiskSize'] = $request->diskSize;
        }
        if (!Utils::isUnset($request->diskType)) {
            $body['DiskType'] = $request->diskType;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->instanceClass)) {
            $body['InstanceClass'] = $request->instanceClass;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $body['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->isolationOptimization)) {
            $body['IsolationOptimization'] = $request->isolationOptimization;
        }
        if (!Utils::isUnset($request->obVersion)) {
            $body['ObVersion'] = $request->obVersion;
        }
        if (!Utils::isUnset($request->period)) {
            $body['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->periodUnit)) {
            $body['PeriodUnit'] = $request->periodUnit;
        }
        if (!Utils::isUnset($request->primaryInstance)) {
            $body['PrimaryInstance'] = $request->primaryInstance;
        }
        if (!Utils::isUnset($request->primaryRegion)) {
            $body['PrimaryRegion'] = $request->primaryRegion;
        }
        if (!Utils::isUnset($request->replicaMode)) {
            $body['ReplicaMode'] = $request->replicaMode;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->series)) {
            $body['Series'] = $request->series;
        }
        if (!Utils::isUnset($request->zones)) {
            $body['Zones'] = $request->zones;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateInstance',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can call this operation to create an OceanBase cluster.
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
     * @summary 创建标签
     *  *
     * @param CreateLabelRequest $request CreateLabelRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateLabelResponse CreateLabelResponse
     */
    public function createLabelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateLabel',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateLabelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建标签
     *  *
     * @param CreateLabelRequest $request CreateLabelRequest
     *
     * @return CreateLabelResponse CreateLabelResponse
     */
    public function createLabel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLabelWithOptions($request, $runtime);
    }

    /**
     * @summary 创建 MySQL 数据源
     *  *
     * @param CreateMySqlDataSourceRequest $request CreateMySqlDataSourceRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateMySqlDataSourceResponse CreateMySqlDataSourceResponse
     */
    public function createMySqlDataSourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->dgInstanceId)) {
            $body['DgInstanceId'] = $request->dgInstanceId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ip)) {
            $body['Ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->password)) {
            $body['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->port)) {
            $body['Port'] = $request->port;
        }
        if (!Utils::isUnset($request->schema)) {
            $body['Schema'] = $request->schema;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->userName)) {
            $body['UserName'] = $request->userName;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $body['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateMySqlDataSource',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateMySqlDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建 MySQL 数据源
     *  *
     * @param CreateMySqlDataSourceRequest $request CreateMySqlDataSourceRequest
     *
     * @return CreateMySqlDataSourceResponse CreateMySqlDataSourceResponse
     */
    public function createMySqlDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMySqlDataSourceWithOptions($request, $runtime);
    }

    /**
     * @summary 创建 OceanBase 数据源
     *  *
     * @param CreateOceanBaseDataSourceRequest $request CreateOceanBaseDataSourceRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateOceanBaseDataSourceResponse CreateOceanBaseDataSourceResponse
     */
    public function createOceanBaseDataSourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->cluster)) {
            $body['Cluster'] = $request->cluster;
        }
        if (!Utils::isUnset($request->configUrl)) {
            $body['ConfigUrl'] = $request->configUrl;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->drcPassword)) {
            $body['DrcPassword'] = $request->drcPassword;
        }
        if (!Utils::isUnset($request->drcUserName)) {
            $body['DrcUserName'] = $request->drcUserName;
        }
        if (!Utils::isUnset($request->innerDrcPassword)) {
            $body['InnerDrcPassword'] = $request->innerDrcPassword;
        }
        if (!Utils::isUnset($request->ip)) {
            $body['Ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->logProxyIp)) {
            $body['LogProxyIp'] = $request->logProxyIp;
        }
        if (!Utils::isUnset($request->logProxyPort)) {
            $body['LogProxyPort'] = $request->logProxyPort;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->password)) {
            $body['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->port)) {
            $body['Port'] = $request->port;
        }
        if (!Utils::isUnset($request->tenant)) {
            $body['Tenant'] = $request->tenant;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->userName)) {
            $body['UserName'] = $request->userName;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $body['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateOceanBaseDataSource',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateOceanBaseDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建 OceanBase 数据源
     *  *
     * @param CreateOceanBaseDataSourceRequest $request CreateOceanBaseDataSourceRequest
     *
     * @return CreateOceanBaseDataSourceResponse CreateOceanBaseDataSourceResponse
     */
    public function createOceanBaseDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOceanBaseDataSourceWithOptions($request, $runtime);
    }

    /**
     * @summary You can call this operation to create a MySQL data source.
     *  *
     * @description To call this operation, you must add the IP address of the OceanBase Migration Service (OMS) server to the whitelist of the Alibaba Cloud database instance, the security rules of the ECS instance, or the security settings of your self-managed database (usually the firewall of your self-managed database) to ensure that OMS can successfully access your database instance. To obtain the IP address of the OMS server, go to the OMS data source management page in the OMS console.
     *  *
     * @param CreateOmsMysqlDataSourceRequest $request CreateOmsMysqlDataSourceRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateOmsMysqlDataSourceResponse CreateOmsMysqlDataSourceResponse
     */
    public function createOmsMysqlDataSourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->dgDatabaseId)) {
            $body['DgDatabaseId'] = $request->dgDatabaseId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ip)) {
            $body['Ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->password)) {
            $body['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->port)) {
            $body['Port'] = $request->port;
        }
        if (!Utils::isUnset($request->schema)) {
            $body['Schema'] = $request->schema;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->username)) {
            $body['Username'] = $request->username;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $body['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateOmsMysqlDataSource',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateOmsMysqlDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can call this operation to create a MySQL data source.
     *  *
     * @description To call this operation, you must add the IP address of the OceanBase Migration Service (OMS) server to the whitelist of the Alibaba Cloud database instance, the security rules of the ECS instance, or the security settings of your self-managed database (usually the firewall of your self-managed database) to ensure that OMS can successfully access your database instance. To obtain the IP address of the OMS server, go to the OMS data source management page in the OMS console.
     *  *
     * @param CreateOmsMysqlDataSourceRequest $request CreateOmsMysqlDataSourceRequest
     *
     * @return CreateOmsMysqlDataSourceResponse CreateOmsMysqlDataSourceResponse
     */
    public function createOmsMysqlDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOmsMysqlDataSourceWithOptions($request, $runtime);
    }

    /**
     * @summary 创建项目
     *  *
     * @param CreateProjectRequest $tmpReq  CreateProjectRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateProjectResponse CreateProjectResponse
     */
    public function createProjectWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateProjectShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->commonTransferConfig)) {
            $request->commonTransferConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->commonTransferConfig, 'CommonTransferConfig', 'json');
        }
        if (!Utils::isUnset($tmpReq->fullTransferConfig)) {
            $request->fullTransferConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->fullTransferConfig, 'FullTransferConfig', 'json');
        }
        if (!Utils::isUnset($tmpReq->incrTransferConfig)) {
            $request->incrTransferConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->incrTransferConfig, 'IncrTransferConfig', 'json');
        }
        if (!Utils::isUnset($tmpReq->labelIds)) {
            $request->labelIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->labelIds, 'LabelIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->reverseIncrTransferConfig)) {
            $request->reverseIncrTransferConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->reverseIncrTransferConfig, 'ReverseIncrTransferConfig', 'json');
        }
        if (!Utils::isUnset($tmpReq->structTransferConfig)) {
            $request->structTransferConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->structTransferConfig, 'StructTransferConfig', 'json');
        }
        if (!Utils::isUnset($tmpReq->transferMapping)) {
            $request->transferMappingShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->transferMapping, 'TransferMapping', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->commonTransferConfigShrink)) {
            $body['CommonTransferConfig'] = $request->commonTransferConfigShrink;
        }
        if (!Utils::isUnset($request->enableFullTransfer)) {
            $body['EnableFullTransfer'] = $request->enableFullTransfer;
        }
        if (!Utils::isUnset($request->enableFullVerify)) {
            $body['EnableFullVerify'] = $request->enableFullVerify;
        }
        if (!Utils::isUnset($request->enableIncrTransfer)) {
            $body['EnableIncrTransfer'] = $request->enableIncrTransfer;
        }
        if (!Utils::isUnset($request->enableReverseIncrTransfer)) {
            $body['EnableReverseIncrTransfer'] = $request->enableReverseIncrTransfer;
        }
        if (!Utils::isUnset($request->enableStructTransfer)) {
            $body['EnableStructTransfer'] = $request->enableStructTransfer;
        }
        if (!Utils::isUnset($request->fullTransferConfigShrink)) {
            $body['FullTransferConfig'] = $request->fullTransferConfigShrink;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->incrTransferConfigShrink)) {
            $body['IncrTransferConfig'] = $request->incrTransferConfigShrink;
        }
        if (!Utils::isUnset($request->labelIdsShrink)) {
            $body['LabelIds'] = $request->labelIdsShrink;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->ossKey)) {
            $body['OssKey'] = $request->ossKey;
        }
        if (!Utils::isUnset($request->reverseIncrTransferConfigShrink)) {
            $body['ReverseIncrTransferConfig'] = $request->reverseIncrTransferConfigShrink;
        }
        if (!Utils::isUnset($request->sinkEndpointId)) {
            $body['SinkEndpointId'] = $request->sinkEndpointId;
        }
        if (!Utils::isUnset($request->sourceEndpointId)) {
            $body['SourceEndpointId'] = $request->sourceEndpointId;
        }
        if (!Utils::isUnset($request->structTransferConfigShrink)) {
            $body['StructTransferConfig'] = $request->structTransferConfigShrink;
        }
        if (!Utils::isUnset($request->transferMappingShrink)) {
            $body['TransferMapping'] = $request->transferMappingShrink;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->useOss)) {
            $body['UseOss'] = $request->useOss;
        }
        if (!Utils::isUnset($request->workerGradeId)) {
            $body['WorkerGradeId'] = $request->workerGradeId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateProject',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建项目
     *  *
     * @param CreateProjectRequest $request CreateProjectRequest
     *
     * @return CreateProjectResponse CreateProjectResponse
     */
    public function createProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createProjectWithOptions($request, $runtime);
    }

    /**
     * @summary 修改传输对象（加减表）(仅支持处于 RUNNING/FAILED/SUSPEND 状态的项目)
     *  *
     * @param CreateProjectModifyRecordsRequest $tmpReq  CreateProjectModifyRecordsRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateProjectModifyRecordsResponse CreateProjectModifyRecordsResponse
     */
    public function createProjectModifyRecordsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateProjectModifyRecordsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->databases)) {
            $request->databasesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->databases, 'Databases', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->databasesShrink)) {
            $body['Databases'] = $request->databasesShrink;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateProjectModifyRecords',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateProjectModifyRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改传输对象（加减表）(仅支持处于 RUNNING/FAILED/SUSPEND 状态的项目)
     *  *
     * @param CreateProjectModifyRecordsRequest $request CreateProjectModifyRecordsRequest
     *
     * @return CreateProjectModifyRecordsResponse CreateProjectModifyRecordsResponse
     */
    public function createProjectModifyRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createProjectModifyRecordsWithOptions($request, $runtime);
    }

    /**
     * @summary 创建RDS PG 数据源
     *  *
     * @param CreateRdsPostgreSQLDataSourceRequest $request CreateRdsPostgreSQLDataSourceRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateRdsPostgreSQLDataSourceResponse CreateRdsPostgreSQLDataSourceResponse
     */
    public function createRdsPostgreSQLDataSourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->databaseName)) {
            $body['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->password)) {
            $body['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->userName)) {
            $body['UserName'] = $request->userName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateRdsPostgreSQLDataSource',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateRdsPostgreSQLDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建RDS PG 数据源
     *  *
     * @param CreateRdsPostgreSQLDataSourceRequest $request CreateRdsPostgreSQLDataSourceRequest
     *
     * @return CreateRdsPostgreSQLDataSourceResponse CreateRdsPostgreSQLDataSourceResponse
     */
    public function createRdsPostgreSQLDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRdsPostgreSQLDataSourceWithOptions($request, $runtime);
    }

    /**
     * @summary The name of the whitelist group.
     *  *
     * @param CreateSecurityIpGroupRequest $request CreateSecurityIpGroupRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateSecurityIpGroupResponse CreateSecurityIpGroupResponse
     */
    public function createSecurityIpGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->securityIpGroupName)) {
            $body['SecurityIpGroupName'] = $request->securityIpGroupName;
        }
        if (!Utils::isUnset($request->securityIps)) {
            $body['SecurityIps'] = $request->securityIps;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateSecurityIpGroup',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSecurityIpGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary The name of the whitelist group.
     *  *
     * @param CreateSecurityIpGroupRequest $request CreateSecurityIpGroupRequest
     *
     * @return CreateSecurityIpGroupResponse CreateSecurityIpGroupResponse
     */
    public function createSecurityIpGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSecurityIpGroupWithOptions($request, $runtime);
    }

    /**
     * @summary You can call this operation to create a tag group.
     *  *
     * @param CreateTagRequest $request CreateTagRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateTagResponse CreateTagResponse
     */
    public function createTagWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->key)) {
            $body['Key'] = $request->key;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateTag',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can call this operation to create a tag group.
     *  *
     * @param CreateTagRequest $request CreateTagRequest
     *
     * @return CreateTagResponse CreateTagResponse
     */
    public function createTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTagWithOptions($request, $runtime);
    }

    /**
     * @summary You can call this operation to create a tag.
     *  *
     * @param CreateTagValueRequest $request CreateTagValueRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateTagValueResponse CreateTagValueResponse
     */
    public function createTagValueWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->key)) {
            $body['Key'] = $request->key;
        }
        if (!Utils::isUnset($request->value)) {
            $body['Value'] = $request->value;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateTagValue',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTagValueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can call this operation to create a tag.
     *  *
     * @param CreateTagValueRequest $request CreateTagValueRequest
     *
     * @return CreateTagValueResponse CreateTagValueResponse
     */
    public function createTagValue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTagValueWithOptions($request, $runtime);
    }

    /**
     * @summary You can call this operation to create a tenant.
     *  *
     * @param CreateTenantRequest $tmpReq  CreateTenantRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateTenantResponse CreateTenantResponse
     */
    public function createTenantWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateTenantShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->createParams)) {
            $request->createParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->createParams, 'CreateParams', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->charset)) {
            $body['Charset'] = $request->charset;
        }
        if (!Utils::isUnset($request->cpu)) {
            $body['Cpu'] = $request->cpu;
        }
        if (!Utils::isUnset($request->createParamsShrink)) {
            $body['CreateParams'] = $request->createParamsShrink;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->logDisk)) {
            $body['LogDisk'] = $request->logDisk;
        }
        if (!Utils::isUnset($request->memory)) {
            $body['Memory'] = $request->memory;
        }
        if (!Utils::isUnset($request->primaryZone)) {
            $body['PrimaryZone'] = $request->primaryZone;
        }
        if (!Utils::isUnset($request->readOnlyZoneList)) {
            $body['ReadOnlyZoneList'] = $request->readOnlyZoneList;
        }
        if (!Utils::isUnset($request->tenantMode)) {
            $body['TenantMode'] = $request->tenantMode;
        }
        if (!Utils::isUnset($request->tenantName)) {
            $body['TenantName'] = $request->tenantName;
        }
        if (!Utils::isUnset($request->timeZone)) {
            $body['TimeZone'] = $request->timeZone;
        }
        if (!Utils::isUnset($request->unitNum)) {
            $body['UnitNum'] = $request->unitNum;
        }
        if (!Utils::isUnset($request->userVSwitchId)) {
            $body['UserVSwitchId'] = $request->userVSwitchId;
        }
        if (!Utils::isUnset($request->userVpcId)) {
            $body['UserVpcId'] = $request->userVpcId;
        }
        if (!Utils::isUnset($request->userVpcOwnerId)) {
            $body['UserVpcOwnerId'] = $request->userVpcOwnerId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateTenant',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTenantResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can call this operation to create a tenant.
     *  *
     * @param CreateTenantRequest $request CreateTenantRequest
     *
     * @return CreateTenantResponse CreateTenantResponse
     */
    public function createTenant($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTenantWithOptions($request, $runtime);
    }

    /**
     * @summary The request ID.
     *  *
     * @param CreateTenantReadOnlyConnectionRequest $request CreateTenantReadOnlyConnectionRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateTenantReadOnlyConnectionResponse CreateTenantReadOnlyConnectionResponse
     */
    public function createTenantReadOnlyConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $body['VSwitchId'] = $request->vSwitchId;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $body['VpcId'] = $request->vpcId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $body['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateTenantReadOnlyConnection',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTenantReadOnlyConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary The request ID.
     *  *
     * @param CreateTenantReadOnlyConnectionRequest $request CreateTenantReadOnlyConnectionRequest
     *
     * @return CreateTenantReadOnlyConnectionResponse CreateTenantReadOnlyConnectionResponse
     */
    public function createTenantReadOnlyConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTenantReadOnlyConnectionWithOptions($request, $runtime);
    }

    /**
     * @summary You can call this operation to create the security whitelist for the tenant.
     *  *
     * @param CreateTenantSecurityIpGroupRequest $request CreateTenantSecurityIpGroupRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateTenantSecurityIpGroupResponse CreateTenantSecurityIpGroupResponse
     */
    public function createTenantSecurityIpGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->securityIpGroupName)) {
            $body['SecurityIpGroupName'] = $request->securityIpGroupName;
        }
        if (!Utils::isUnset($request->securityIps)) {
            $body['SecurityIps'] = $request->securityIps;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateTenantSecurityIpGroup',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTenantSecurityIpGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can call this operation to create the security whitelist for the tenant.
     *  *
     * @param CreateTenantSecurityIpGroupRequest $request CreateTenantSecurityIpGroupRequest
     *
     * @return CreateTenantSecurityIpGroupResponse CreateTenantSecurityIpGroupResponse
     */
    public function createTenantSecurityIpGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTenantSecurityIpGroupWithOptions($request, $runtime);
    }

    /**
     * @summary CreateTenantUser
     *  *
     * @param CreateTenantUserRequest $request CreateTenantUserRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateTenantUserResponse CreateTenantUserResponse
     */
    public function createTenantUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->encryptionType)) {
            $body['EncryptionType'] = $request->encryptionType;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->roles)) {
            $body['Roles'] = $request->roles;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->userName)) {
            $body['UserName'] = $request->userName;
        }
        if (!Utils::isUnset($request->userPassword)) {
            $body['UserPassword'] = $request->userPassword;
        }
        if (!Utils::isUnset($request->userType)) {
            $body['UserType'] = $request->userType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateTenantUser',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTenantUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary CreateTenantUser
     *  *
     * @param CreateTenantUserRequest $request CreateTenantUserRequest
     *
     * @return CreateTenantUserResponse CreateTenantUserResponse
     */
    public function createTenantUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTenantUserWithOptions($request, $runtime);
    }

    /**
     * @summary 删除数据源
     *  *
     * @param DeleteDataSourceRequest $request DeleteDataSourceRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDataSourceResponse DeleteDataSourceResponse
     */
    public function deleteDataSourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteDataSource',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除数据源
     *  *
     * @param DeleteDataSourceRequest $request DeleteDataSourceRequest
     *
     * @return DeleteDataSourceResponse DeleteDataSourceResponse
     */
    public function deleteDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDataSourceWithOptions($request, $runtime);
    }

    /**
     * @summary The request ID.
     *  *
     * @param DeleteDatabasesRequest $request DeleteDatabasesRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDatabasesResponse DeleteDatabasesResponse
     */
    public function deleteDatabasesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->databaseNames)) {
            $body['DatabaseNames'] = $request->databaseNames;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteDatabases',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDatabasesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary The request ID.
     *  *
     * @param DeleteDatabasesRequest $request DeleteDatabasesRequest
     *
     * @return DeleteDatabasesResponse DeleteDatabasesResponse
     */
    public function deleteDatabases($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDatabasesWithOptions($request, $runtime);
    }

    /**
     * @summary You can call this operation to release an OceanBase cluster.
     *  *
     * @description Before you call this operation, ensure that the following requirements are met:
     * - The cluster is in the Running state.
     * - The cluster is a primary cluster and the billing method is pay-as-you-go.
     *  *
     * @param DeleteInstancesRequest $request DeleteInstancesRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteInstancesResponse DeleteInstancesResponse
     */
    public function deleteInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->backupRetainMode)) {
            $body['BackupRetainMode'] = $request->backupRetainMode;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $body['InstanceIds'] = $request->instanceIds;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteInstances',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can call this operation to release an OceanBase cluster.
     *  *
     * @description Before you call this operation, ensure that the following requirements are met:
     * - The cluster is in the Running state.
     * - The cluster is a primary cluster and the billing method is pay-as-you-go.
     *  *
     * @param DeleteInstancesRequest $request DeleteInstancesRequest
     *
     * @return DeleteInstancesResponse DeleteInstancesResponse
     */
    public function deleteInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteInstancesWithOptions($request, $runtime);
    }

    /**
     * @summary 删除项目
     *  *
     * @param DeleteProjectRequest $request DeleteProjectRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteProjectResponse DeleteProjectResponse
     */
    public function deleteProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteProject',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除项目
     *  *
     * @param DeleteProjectRequest $request DeleteProjectRequest
     *
     * @return DeleteProjectResponse DeleteProjectResponse
     */
    public function deleteProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteProjectWithOptions($request, $runtime);
    }

    /**
     * @summary The name of the deleted IP address whitelist group.
     *  *
     * @param DeleteSecurityIpGroupRequest $request DeleteSecurityIpGroupRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteSecurityIpGroupResponse DeleteSecurityIpGroupResponse
     */
    public function deleteSecurityIpGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->securityIpGroupName)) {
            $body['SecurityIpGroupName'] = $request->securityIpGroupName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteSecurityIpGroup',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSecurityIpGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary The name of the deleted IP address whitelist group.
     *  *
     * @param DeleteSecurityIpGroupRequest $request DeleteSecurityIpGroupRequest
     *
     * @return DeleteSecurityIpGroupResponse DeleteSecurityIpGroupResponse
     */
    public function deleteSecurityIpGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSecurityIpGroupWithOptions($request, $runtime);
    }

    /**
     * @summary You can call this operation to delete a tag group.
     *  *
     * @param DeleteTagRequest $request DeleteTagRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteTagResponse DeleteTagResponse
     */
    public function deleteTagWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->key)) {
            $body['Key'] = $request->key;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteTag',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can call this operation to delete a tag group.
     *  *
     * @param DeleteTagRequest $request DeleteTagRequest
     *
     * @return DeleteTagResponse DeleteTagResponse
     */
    public function deleteTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTagWithOptions($request, $runtime);
    }

    /**
     * @summary You can call this operation to delete a tag from a tag group.
     *  *
     * @param DeleteTagValueRequest $request DeleteTagValueRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteTagValueResponse DeleteTagValueResponse
     */
    public function deleteTagValueWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->key)) {
            $body['Key'] = $request->key;
        }
        if (!Utils::isUnset($request->value)) {
            $body['Value'] = $request->value;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteTagValue',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteTagValueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can call this operation to delete a tag from a tag group.
     *  *
     * @param DeleteTagValueRequest $request DeleteTagValueRequest
     *
     * @return DeleteTagValueResponse DeleteTagValueResponse
     */
    public function deleteTagValue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTagValueWithOptions($request, $runtime);
    }

    /**
     * @summary You can call this operation to delete the information on the whitelist group of the tenant.
     *  *
     * @param DeleteTenantSecurityIpGroupRequest $request DeleteTenantSecurityIpGroupRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteTenantSecurityIpGroupResponse DeleteTenantSecurityIpGroupResponse
     */
    public function deleteTenantSecurityIpGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->securityIpGroupName)) {
            $body['SecurityIpGroupName'] = $request->securityIpGroupName;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteTenantSecurityIpGroup',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteTenantSecurityIpGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can call this operation to delete the information on the whitelist group of the tenant.
     *  *
     * @param DeleteTenantSecurityIpGroupRequest $request DeleteTenantSecurityIpGroupRequest
     *
     * @return DeleteTenantSecurityIpGroupResponse DeleteTenantSecurityIpGroupResponse
     */
    public function deleteTenantSecurityIpGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTenantSecurityIpGroupWithOptions($request, $runtime);
    }

    /**
     * @summary You can call this operation to delete one or more database accounts.
     *  *
     * @param DeleteTenantUsersRequest $request DeleteTenantUsersRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteTenantUsersResponse DeleteTenantUsersResponse
     */
    public function deleteTenantUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->users)) {
            $body['Users'] = $request->users;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteTenantUsers',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteTenantUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can call this operation to delete one or more database accounts.
     *  *
     * @param DeleteTenantUsersRequest $request DeleteTenantUsersRequest
     *
     * @return DeleteTenantUsersResponse DeleteTenantUsersResponse
     */
    public function deleteTenantUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTenantUsersWithOptions($request, $runtime);
    }

    /**
     * @summary The return result of the request.
     *  *
     * @param DeleteTenantsRequest $request DeleteTenantsRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteTenantsResponse DeleteTenantsResponse
     */
    public function deleteTenantsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->tenantIds)) {
            $body['TenantIds'] = $request->tenantIds;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteTenants',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteTenantsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary The return result of the request.
     *  *
     * @param DeleteTenantsRequest $request DeleteTenantsRequest
     *
     * @return DeleteTenantsResponse DeleteTenantsResponse
     */
    public function deleteTenants($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTenantsWithOptions($request, $runtime);
    }

    /**
     * @summary You can call this operation to obtain the list of SQL statements that may have performance problems according to the diagnostic system.
     *  *
     * @param DescribeAnomalySQLListRequest $tmpReq  DescribeAnomalySQLListRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAnomalySQLListResponse DescribeAnomalySQLListResponse
     */
    public function describeAnomalySQLListWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DescribeAnomalySQLListShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->filterCondition)) {
            $request->filterConditionShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->filterCondition, 'FilterCondition', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $body['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->dbName)) {
            $body['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->filterConditionShrink)) {
            $body['FilterCondition'] = $request->filterConditionShrink;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->nodeIp)) {
            $body['NodeIp'] = $request->nodeIp;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->SQLId)) {
            $body['SQLId'] = $request->SQLId;
        }
        if (!Utils::isUnset($request->searchKeyWord)) {
            $body['SearchKeyWord'] = $request->searchKeyWord;
        }
        if (!Utils::isUnset($request->searchParameter)) {
            $body['SearchParameter'] = $request->searchParameter;
        }
        if (!Utils::isUnset($request->searchRule)) {
            $body['SearchRule'] = $request->searchRule;
        }
        if (!Utils::isUnset($request->searchValue)) {
            $body['SearchValue'] = $request->searchValue;
        }
        if (!Utils::isUnset($request->sortColumn)) {
            $body['SortColumn'] = $request->sortColumn;
        }
        if (!Utils::isUnset($request->sortOrder)) {
            $body['SortOrder'] = $request->sortOrder;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAnomalySQLList',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAnomalySQLListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can call this operation to obtain the list of SQL statements that may have performance problems according to the diagnostic system.
     *  *
     * @param DescribeAnomalySQLListRequest $request DescribeAnomalySQLListRequest
     *
     * @return DescribeAnomalySQLListResponse DescribeAnomalySQLListResponse
     */
    public function describeAnomalySQLList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAnomalySQLListWithOptions($request, $runtime);
    }

    /**
     * @summary The maximum number of CPU cores per resource unit.
     *  *
     * @param DescribeAvailableCpuResourceRequest $request DescribeAvailableCpuResourceRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAvailableCpuResourceResponse DescribeAvailableCpuResourceResponse
     */
    public function describeAvailableCpuResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->modifyType)) {
            $body['ModifyType'] = $request->modifyType;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAvailableCpuResource',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAvailableCpuResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary The maximum number of CPU cores per resource unit.
     *  *
     * @param DescribeAvailableCpuResourceRequest $request DescribeAvailableCpuResourceRequest
     *
     * @return DescribeAvailableCpuResourceResponse DescribeAvailableCpuResourceResponse
     */
    public function describeAvailableCpuResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAvailableCpuResourceWithOptions($request, $runtime);
    }

    /**
     * @summary You can call this operation to query the available memory resource of an OceanBase Database tenant.
     *  *
     * @param DescribeAvailableMemResourceRequest $request DescribeAvailableMemResourceRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAvailableMemResourceResponse DescribeAvailableMemResourceResponse
     */
    public function describeAvailableMemResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->cpuNum)) {
            $body['CpuNum'] = $request->cpuNum;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->unitNum)) {
            $body['UnitNum'] = $request->unitNum;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAvailableMemResource',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAvailableMemResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can call this operation to query the available memory resource of an OceanBase Database tenant.
     *  *
     * @param DescribeAvailableMemResourceRequest $request DescribeAvailableMemResourceRequest
     *
     * @return DescribeAvailableMemResourceResponse DescribeAvailableMemResourceResponse
     */
    public function describeAvailableMemResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAvailableMemResourceWithOptions($request, $runtime);
    }

    /**
     * @summary 获取集群变配页可选配置
     *  *
     * @param DescribeAvailableSpecRequest $request DescribeAvailableSpecRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAvailableSpecResponse DescribeAvailableSpecResponse
     */
    public function describeAvailableSpecWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->spec)) {
            $body['Spec'] = $request->spec;
        }
        if (!Utils::isUnset($request->upgradeType)) {
            $body['UpgradeType'] = $request->upgradeType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAvailableSpec',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAvailableSpecResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取集群变配页可选配置
     *  *
     * @param DescribeAvailableSpecRequest $request DescribeAvailableSpecRequest
     *
     * @return DescribeAvailableSpecResponse DescribeAvailableSpecResponse
     */
    public function describeAvailableSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAvailableSpecWithOptions($request, $runtime);
    }

    /**
     * @summary 获取集群售卖页可选配置
     *  *
     * @param DescribeAvailableZoneRequest $request DescribeAvailableZoneRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAvailableZoneResponse DescribeAvailableZoneResponse
     */
    public function describeAvailableZoneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->cpuArch)) {
            $body['CpuArch'] = $request->cpuArch;
        }
        if (!Utils::isUnset($request->deployType)) {
            $body['DeployType'] = $request->deployType;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $body['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->obVersion)) {
            $body['ObVersion'] = $request->obVersion;
        }
        if (!Utils::isUnset($request->series)) {
            $body['Series'] = $request->series;
        }
        if (!Utils::isUnset($request->spec)) {
            $body['Spec'] = $request->spec;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAvailableZone',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAvailableZoneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取集群售卖页可选配置
     *  *
     * @param DescribeAvailableZoneRequest $request DescribeAvailableZoneRequest
     *
     * @return DescribeAvailableZoneResponse DescribeAvailableZoneResponse
     */
    public function describeAvailableZone($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAvailableZoneWithOptions($request, $runtime);
    }

    /**
     * @summary You can call this operation to query the link for downloading a backup set of OceanBase Database.
     *  *
     * @param DescribeBackupSetDownloadLinkRequest $request DescribeBackupSetDownloadLinkRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeBackupSetDownloadLinkResponse DescribeBackupSetDownloadLinkResponse
     */
    public function describeBackupSetDownloadLinkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->downloadTaskId)) {
            $body['DownloadTaskId'] = $request->downloadTaskId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeBackupSetDownloadLink',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBackupSetDownloadLinkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can call this operation to query the link for downloading a backup set of OceanBase Database.
     *  *
     * @param DescribeBackupSetDownloadLinkRequest $request DescribeBackupSetDownloadLinkRequest
     *
     * @return DescribeBackupSetDownloadLinkResponse DescribeBackupSetDownloadLinkResponse
     */
    public function describeBackupSetDownloadLink($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupSetDownloadLinkWithOptions($request, $runtime);
    }

    /**
     * @summary You can call this operation to query the character sets of an OceanBase Database tenant.
     *  *
     * @param DescribeCharsetRequest $request DescribeCharsetRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCharsetResponse DescribeCharsetResponse
     */
    public function describeCharsetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->series)) {
            $body['Series'] = $request->series;
        }
        if (!Utils::isUnset($request->tenantMode)) {
            $body['TenantMode'] = $request->tenantMode;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeCharset',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCharsetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can call this operation to query the character sets of an OceanBase Database tenant.
     *  *
     * @param DescribeCharsetRequest $request DescribeCharsetRequest
     *
     * @return DescribeCharsetResponse DescribeCharsetResponse
     */
    public function describeCharset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCharsetWithOptions($request, $runtime);
    }

    /**
     * @summary 查询备份集信息
     *  *
     * @param DescribeDataBackupSetRequest $request DescribeDataBackupSetRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDataBackupSetResponse DescribeDataBackupSetResponse
     */
    public function describeDataBackupSetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->backupObjectType)) {
            $body['BackupObjectType'] = $request->backupObjectType;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeDataBackupSet',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDataBackupSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询备份集信息
     *  *
     * @param DescribeDataBackupSetRequest $request DescribeDataBackupSetRequest
     *
     * @return DescribeDataBackupSetResponse DescribeDataBackupSetResponse
     */
    public function describeDataBackupSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDataBackupSetWithOptions($request, $runtime);
    }

    /**
     * @summary You can call this operation to query databases in a tenant.
     *  *
     * @param DescribeDatabasesRequest $request DescribeDatabasesRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDatabasesResponse DescribeDatabasesResponse
     */
    public function describeDatabasesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->databaseName)) {
            $body['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $body['SearchKey'] = $request->searchKey;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->withTables)) {
            $body['WithTables'] = $request->withTables;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeDatabases',
            'version'     => '2019-09-01',
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
     * @summary You can call this operation to query databases in a tenant.
     *  *
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
     * @summary The size of used memory in the cluster, in GB.
     *  *
     * @param DescribeInstanceRequest $request DescribeInstanceRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstanceResponse DescribeInstanceResponse
     */
    public function describeInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->maxConnectionLimit)) {
            $body['MaxConnectionLimit'] = $request->maxConnectionLimit;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstance',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary The size of used memory in the cluster, in GB.
     *  *
     * @param DescribeInstanceRequest $request DescribeInstanceRequest
     *
     * @return DescribeInstanceResponse DescribeInstanceResponse
     */
    public function describeInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary The ID of the zone.
     *  *
     * @param DescribeInstanceCreatableZoneRequest $request DescribeInstanceCreatableZoneRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstanceCreatableZoneResponse DescribeInstanceCreatableZoneResponse
     */
    public function describeInstanceCreatableZoneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceCreatableZone',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceCreatableZoneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary The ID of the zone.
     *  *
     * @param DescribeInstanceCreatableZoneRequest $request DescribeInstanceCreatableZoneRequest
     *
     * @return DescribeInstanceCreatableZoneResponse DescribeInstanceCreatableZoneResponse
     */
    public function describeInstanceCreatableZone($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceCreatableZoneWithOptions($request, $runtime);
    }

    /**
     * @summary 查询集群SSL配置
     *  *
     * @param DescribeInstanceSSLRequest $request DescribeInstanceSSLRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstanceSSLResponse DescribeInstanceSSLResponse
     */
    public function describeInstanceSSLWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceSSL',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceSSLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询集群SSL配置
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
     * @summary You can call this operation to query security check items of an OceanBase cluster.
     *  *
     * @param DescribeInstanceSecurityConfigsRequest $request DescribeInstanceSecurityConfigsRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstanceSecurityConfigsResponse DescribeInstanceSecurityConfigsResponse
     */
    public function describeInstanceSecurityConfigsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->checkId)) {
            $body['CheckId'] = $request->checkId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceSecurityConfigs',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceSecurityConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can call this operation to query security check items of an OceanBase cluster.
     *  *
     * @param DescribeInstanceSecurityConfigsRequest $request DescribeInstanceSecurityConfigsRequest
     *
     * @return DescribeInstanceSecurityConfigsResponse DescribeInstanceSecurityConfigsResponse
     */
    public function describeInstanceSecurityConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceSecurityConfigsWithOptions($request, $runtime);
    }

    /**
     * @summary You can call this operation to query the tags of clusters.
     *  *
     * @param DescribeInstanceTagsRequest $request DescribeInstanceTagsRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstanceTagsResponse DescribeInstanceTagsResponse
     */
    public function describeInstanceTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceIds)) {
            $body['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->tags)) {
            $body['Tags'] = $request->tags;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceTags',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can call this operation to query the tags of clusters.
     *  *
     * @param DescribeInstanceTagsRequest $request DescribeInstanceTagsRequest
     *
     * @return DescribeInstanceTagsResponse DescribeInstanceTagsResponse
     */
    public function describeInstanceTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceTagsWithOptions($request, $runtime);
    }

    /**
     * @summary The return result of the request.
     *  *
     * @param DescribeInstanceTenantModesRequest $request DescribeInstanceTenantModesRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstanceTenantModesResponse DescribeInstanceTenantModesResponse
     */
    public function describeInstanceTenantModesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceTenantModes',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceTenantModesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary The return result of the request.
     *  *
     * @param DescribeInstanceTenantModesRequest $request DescribeInstanceTenantModesRequest
     *
     * @return DescribeInstanceTenantModesResponse DescribeInstanceTenantModesResponse
     */
    public function describeInstanceTenantModes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceTenantModesWithOptions($request, $runtime);
    }

    /**
     * @summary The ID of the zone.
     *  *
     * @param DescribeInstanceTopologyRequest $request DescribeInstanceTopologyRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstanceTopologyResponse DescribeInstanceTopologyResponse
     */
    public function describeInstanceTopologyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceTopology',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceTopologyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary The ID of the zone.
     *  *
     * @param DescribeInstanceTopologyRequest $request DescribeInstanceTopologyRequest
     *
     * @return DescribeInstanceTopologyResponse DescribeInstanceTopologyResponse
     */
    public function describeInstanceTopology($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceTopologyWithOptions($request, $runtime);
    }

    /**
     * @summary You can call this operation to obtain the list of OceanBase clusters.
     *  *
     * @param DescribeInstancesRequest $request DescribeInstancesRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstancesResponse DescribeInstancesResponse
     */
    public function describeInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $body['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $body['SearchKey'] = $request->searchKey;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstances',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can call this operation to obtain the list of OceanBase clusters.
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
     * @summary 查询监控指标数据
     *  *
     * @param DescribeMetricsDataRequest $request DescribeMetricsDataRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeMetricsDataResponse DescribeMetricsDataResponse
     */
    public function describeMetricsDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->groupByLabels)) {
            $query['GroupByLabels'] = $request->groupByLabels;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->labels)) {
            $query['Labels'] = $request->labels;
        }
        if (!Utils::isUnset($request->limit)) {
            $query['Limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->metrics)) {
            $query['Metrics'] = $request->metrics;
        }
        if (!Utils::isUnset($request->sortMetricKey)) {
            $query['SortMetricKey'] = $request->sortMetricKey;
        }
        if (!Utils::isUnset($request->sortOrder)) {
            $query['SortOrder'] = $request->sortOrder;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $body = [];
        if (!Utils::isUnset($request->replicaType)) {
            $body['ReplicaType'] = $request->replicaType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeMetricsData',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMetricsDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询监控指标数据
     *  *
     * @param DescribeMetricsDataRequest $request DescribeMetricsDataRequest
     *
     * @return DescribeMetricsDataResponse DescribeMetricsDataResponse
     */
    public function describeMetricsData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMetricsDataWithOptions($request, $runtime);
    }

    /**
     * @summary The list of nodes.
     *  *
     * @param DescribeNodeMetricsRequest $request DescribeNodeMetricsRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeNodeMetricsResponse DescribeNodeMetricsResponse
     */
    public function describeNodeMetricsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->metrics)) {
            $body['Metrics'] = $request->metrics;
        }
        if (!Utils::isUnset($request->nodeIdList)) {
            $body['NodeIdList'] = $request->nodeIdList;
        }
        if (!Utils::isUnset($request->nodeName)) {
            $body['NodeName'] = $request->nodeName;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeNodeMetrics',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeNodeMetricsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary The list of nodes.
     *  *
     * @param DescribeNodeMetricsRequest $request DescribeNodeMetricsRequest
     *
     * @return DescribeNodeMetricsResponse DescribeNodeMetricsResponse
     */
    public function describeNodeMetrics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNodeMetricsWithOptions($request, $runtime);
    }

    /**
     * @summary You can call this API to view the list of SQL statements that are identified as having performance issues by the diagnostic system.
     *  *
     * @param DescribeOasAnomalySQLListRequest $request DescribeOasAnomalySQLListRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeOasAnomalySQLListResponse DescribeOasAnomalySQLListResponse
     */
    public function describeOasAnomalySQLListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $body['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->current)) {
            $body['Current'] = $request->current;
        }
        if (!Utils::isUnset($request->dbName)) {
            $body['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->dynamicSql)) {
            $body['DynamicSql'] = $request->dynamicSql;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->filterCondition)) {
            $body['FilterCondition'] = $request->filterCondition;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->mergeDynamicSql)) {
            $body['MergeDynamicSql'] = $request->mergeDynamicSql;
        }
        if (!Utils::isUnset($request->nodeIp)) {
            $body['NodeIp'] = $request->nodeIp;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchKeyWord)) {
            $body['SearchKeyWord'] = $request->searchKeyWord;
        }
        if (!Utils::isUnset($request->searchParam)) {
            $body['SearchParam'] = $request->searchParam;
        }
        if (!Utils::isUnset($request->searchRule)) {
            $body['SearchRule'] = $request->searchRule;
        }
        if (!Utils::isUnset($request->searchValue)) {
            $body['SearchValue'] = $request->searchValue;
        }
        if (!Utils::isUnset($request->sqlId)) {
            $body['SqlId'] = $request->sqlId;
        }
        if (!Utils::isUnset($request->sqlTextLength)) {
            $body['SqlTextLength'] = $request->sqlTextLength;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeOasAnomalySQLList',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeOasAnomalySQLListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can call this API to view the list of SQL statements that are identified as having performance issues by the diagnostic system.
     *  *
     * @param DescribeOasAnomalySQLListRequest $request DescribeOasAnomalySQLListRequest
     *
     * @return DescribeOasAnomalySQLListResponse DescribeOasAnomalySQLListResponse
     */
    public function describeOasAnomalySQLList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOasAnomalySQLListWithOptions($request, $runtime);
    }

    /**
     * @summary You can call this API to query detailed information about the SQL, including the SQL text, related table names, and so on.
     *  *
     * @param DescribeOasSQLDetailsRequest $request DescribeOasSQLDetailsRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeOasSQLDetailsResponse DescribeOasSQLDetailsResponse
     */
    public function describeOasSQLDetailsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dbName)) {
            $body['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->dynamicSql)) {
            $body['DynamicSql'] = $request->dynamicSql;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->sqlId)) {
            $body['SqlId'] = $request->sqlId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeOasSQLDetails',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeOasSQLDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can call this API to query detailed information about the SQL, including the SQL text, related table names, and so on.
     *  *
     * @param DescribeOasSQLDetailsRequest $request DescribeOasSQLDetailsRequest
     *
     * @return DescribeOasSQLDetailsResponse DescribeOasSQLDetailsResponse
     */
    public function describeOasSQLDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOasSQLDetailsWithOptions($request, $runtime);
    }

    /**
     * @summary You can call this API to view the SQL execution history.
     *  *
     * @param DescribeOasSQLHistoryListRequest $request DescribeOasSQLHistoryListRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeOasSQLHistoryListResponse DescribeOasSQLHistoryListResponse
     */
    public function describeOasSQLHistoryListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $body['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->dbName)) {
            $body['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->dynamicSql)) {
            $body['DynamicSql'] = $request->dynamicSql;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->nodeIp)) {
            $body['NodeIp'] = $request->nodeIp;
        }
        if (!Utils::isUnset($request->sqlId)) {
            $body['SqlId'] = $request->sqlId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeOasSQLHistoryList',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeOasSQLHistoryListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can call this API to view the SQL execution history.
     *  *
     * @param DescribeOasSQLHistoryListRequest $request DescribeOasSQLHistoryListRequest
     *
     * @return DescribeOasSQLHistoryListResponse DescribeOasSQLHistoryListResponse
     */
    public function describeOasSQLHistoryList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOasSQLHistoryListWithOptions($request, $runtime);
    }

    /**
     * @summary You can call this API to retrieve information about the SQL execution plan stored in the diagnostic system based on the SQL ID.
     *  *
     * @param DescribeOasSQLPlansRequest $request DescribeOasSQLPlansRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeOasSQLPlansResponse DescribeOasSQLPlansResponse
     */
    public function describeOasSQLPlansWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $body['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->dbName)) {
            $body['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->dynamicSql)) {
            $body['DynamicSql'] = $request->dynamicSql;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->planUnionHash)) {
            $body['PlanUnionHash'] = $request->planUnionHash;
        }
        if (!Utils::isUnset($request->returnBriefInfo)) {
            $body['ReturnBriefInfo'] = $request->returnBriefInfo;
        }
        if (!Utils::isUnset($request->sqlId)) {
            $body['SqlId'] = $request->sqlId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeOasSQLPlans',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeOasSQLPlansResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can call this API to retrieve information about the SQL execution plan stored in the diagnostic system based on the SQL ID.
     *  *
     * @param DescribeOasSQLPlansRequest $request DescribeOasSQLPlansRequest
     *
     * @return DescribeOasSQLPlansResponse DescribeOasSQLPlansResponse
     */
    public function describeOasSQLPlans($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOasSQLPlansWithOptions($request, $runtime);
    }

    /**
     * @summary You can call this API to view a list of slow queries.
     *  *
     * @param DescribeOasSlowSQLListRequest $request DescribeOasSlowSQLListRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeOasSlowSQLListResponse DescribeOasSlowSQLListResponse
     */
    public function describeOasSlowSQLListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $body['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->dbName)) {
            $body['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->dynamicSql)) {
            $body['DynamicSql'] = $request->dynamicSql;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->filterCondition)) {
            $body['FilterCondition'] = $request->filterCondition;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->mergeDynamicSql)) {
            $body['MergeDynamicSql'] = $request->mergeDynamicSql;
        }
        if (!Utils::isUnset($request->nodeIp)) {
            $body['NodeIp'] = $request->nodeIp;
        }
        if (!Utils::isUnset($request->searchKeyWord)) {
            $body['SearchKeyWord'] = $request->searchKeyWord;
        }
        if (!Utils::isUnset($request->searchParam)) {
            $body['SearchParam'] = $request->searchParam;
        }
        if (!Utils::isUnset($request->searchRule)) {
            $body['SearchRule'] = $request->searchRule;
        }
        if (!Utils::isUnset($request->searchValue)) {
            $body['SearchValue'] = $request->searchValue;
        }
        if (!Utils::isUnset($request->sqlId)) {
            $body['SqlId'] = $request->sqlId;
        }
        if (!Utils::isUnset($request->sqlTextLength)) {
            $body['SqlTextLength'] = $request->sqlTextLength;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeOasSlowSQLList',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeOasSlowSQLListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can call this API to view a list of slow queries.
     *  *
     * @param DescribeOasSlowSQLListRequest $request DescribeOasSlowSQLListRequest
     *
     * @return DescribeOasSlowSQLListResponse DescribeOasSlowSQLListResponse
     */
    public function describeOasSlowSQLList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOasSlowSQLListWithOptions($request, $runtime);
    }

    /**
     * @summary You can call this API to retrieve the list of data on the SQL execution performance collected by the diagnostic system.
     *  *
     * @param DescribeOasTopSQLListRequest $request DescribeOasTopSQLListRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeOasTopSQLListResponse DescribeOasTopSQLListResponse
     */
    public function describeOasTopSQLListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $body['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->dbName)) {
            $body['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->dynamicSql)) {
            $body['DynamicSql'] = $request->dynamicSql;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->filterCondition)) {
            $body['FilterCondition'] = $request->filterCondition;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->mergeDynamicSql)) {
            $body['MergeDynamicSql'] = $request->mergeDynamicSql;
        }
        if (!Utils::isUnset($request->nodeIp)) {
            $body['NodeIp'] = $request->nodeIp;
        }
        if (!Utils::isUnset($request->searchKeyWord)) {
            $body['SearchKeyWord'] = $request->searchKeyWord;
        }
        if (!Utils::isUnset($request->searchParam)) {
            $body['SearchParam'] = $request->searchParam;
        }
        if (!Utils::isUnset($request->searchRule)) {
            $body['SearchRule'] = $request->searchRule;
        }
        if (!Utils::isUnset($request->searchValue)) {
            $body['SearchValue'] = $request->searchValue;
        }
        if (!Utils::isUnset($request->sqlId)) {
            $body['SqlId'] = $request->sqlId;
        }
        if (!Utils::isUnset($request->sqlTextLength)) {
            $body['SqlTextLength'] = $request->sqlTextLength;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeOasTopSQLList',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeOasTopSQLListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can call this API to retrieve the list of data on the SQL execution performance collected by the diagnostic system.
     *  *
     * @param DescribeOasTopSQLListRequest $request DescribeOasTopSQLListRequest
     *
     * @return DescribeOasTopSQLListResponse DescribeOasTopSQLListResponse
     */
    public function describeOasTopSQLList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOasTopSQLListWithOptions($request, $runtime);
    }

    /**
     * @summary You can call this operation to query the outline binding information or throttling information of an SQL statement in the database based on an SQLID.
     *  *
     * @param DescribeOutlineBindingRequest $request DescribeOutlineBindingRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeOutlineBindingResponse DescribeOutlineBindingResponse
     */
    public function describeOutlineBindingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->databaseName)) {
            $body['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->isConcurrentLimit)) {
            $body['IsConcurrentLimit'] = $request->isConcurrentLimit;
        }
        if (!Utils::isUnset($request->SQLId)) {
            $body['SQLId'] = $request->SQLId;
        }
        if (!Utils::isUnset($request->tableName)) {
            $body['TableName'] = $request->tableName;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeOutlineBinding',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeOutlineBindingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can call this operation to query the outline binding information or throttling information of an SQL statement in the database based on an SQLID.
     *  *
     * @param DescribeOutlineBindingRequest $request DescribeOutlineBindingRequest
     *
     * @return DescribeOutlineBindingResponse DescribeOutlineBindingResponse
     */
    public function describeOutlineBinding($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOutlineBindingWithOptions($request, $runtime);
    }

    /**
     * @summary Indicates whether a restart is required for changes to the parameter to take effect. Valid values: - true: A restart is required. - false: A restart is not required.
     *  *
     * @param DescribeParametersRequest $request DescribeParametersRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeParametersResponse DescribeParametersResponse
     */
    public function describeParametersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dimension)) {
            $body['Dimension'] = $request->dimension;
        }
        if (!Utils::isUnset($request->dimensionValue)) {
            $body['DimensionValue'] = $request->dimensionValue;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeParameters',
            'version'     => '2019-09-01',
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
     * @summary Indicates whether a restart is required for changes to the parameter to take effect. Valid values: - true: A restart is required. - false: A restart is not required.
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
     * @summary You can call this operation to query the modification history of cluster or tenant parameters.
     *  *
     * @param DescribeParametersHistoryRequest $request DescribeParametersHistoryRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeParametersHistoryResponse DescribeParametersHistoryResponse
     */
    public function describeParametersHistoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dimension)) {
            $body['Dimension'] = $request->dimension;
        }
        if (!Utils::isUnset($request->dimensionValue)) {
            $body['DimensionValue'] = $request->dimensionValue;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeParametersHistory',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeParametersHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can call this operation to query the modification history of cluster or tenant parameters.
     *  *
     * @param DescribeParametersHistoryRequest $request DescribeParametersHistoryRequest
     *
     * @return DescribeParametersHistoryResponse DescribeParametersHistoryResponse
     */
    public function describeParametersHistory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeParametersHistoryWithOptions($request, $runtime);
    }

    /**
     * @summary You can call this operation to query session information.
     *  *
     * @param DescribeProcessStatsCompositionRequest $request DescribeProcessStatsCompositionRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeProcessStatsCompositionResponse DescribeProcessStatsCompositionResponse
     */
    public function describeProcessStatsCompositionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientIp)) {
            $body['ClientIp'] = $request->clientIp;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->serverIp)) {
            $body['ServerIp'] = $request->serverIp;
        }
        if (!Utils::isUnset($request->sqlText)) {
            $body['SqlText'] = $request->sqlText;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->UId)) {
            $body['UId'] = $request->UId;
        }
        if (!Utils::isUnset($request->users)) {
            $body['Users'] = $request->users;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeProcessStatsComposition',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeProcessStatsCompositionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can call this operation to query session information.
     *  *
     * @param DescribeProcessStatsCompositionRequest $request DescribeProcessStatsCompositionRequest
     *
     * @return DescribeProcessStatsCompositionResponse DescribeProcessStatsCompositionResponse
     */
    public function describeProcessStatsComposition($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeProcessStatsCompositionWithOptions($request, $runtime);
    }

    /**
     * @summary 查询项目详情
     *  *
     * @param DescribeProjectRequest $request DescribeProjectRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeProjectResponse DescribeProjectResponse
     */
    public function describeProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeProject',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询项目详情
     *  *
     * @param DescribeProjectRequest $request DescribeProjectRequest
     *
     * @return DescribeProjectResponse DescribeProjectResponse
     */
    public function describeProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeProjectWithOptions($request, $runtime);
    }

    /**
     * @summary 获取项目的组件信息
     *  *
     * @param DescribeProjectComponentsRequest $request DescribeProjectComponentsRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeProjectComponentsResponse DescribeProjectComponentsResponse
     */
    public function describeProjectComponentsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeProjectComponents',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeProjectComponentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取项目的组件信息
     *  *
     * @param DescribeProjectComponentsRequest $request DescribeProjectComponentsRequest
     *
     * @return DescribeProjectComponentsResponse DescribeProjectComponentsResponse
     */
    public function describeProjectComponents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeProjectComponentsWithOptions($request, $runtime);
    }

    /**
     * @summary 获取迁移/同步项目 Progress 信息
     *  *
     * @param DescribeProjectProgressRequest $request DescribeProjectProgressRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeProjectProgressResponse DescribeProjectProgressResponse
     */
    public function describeProjectProgressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeProjectProgress',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeProjectProgressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取迁移/同步项目 Progress 信息
     *  *
     * @param DescribeProjectProgressRequest $request DescribeProjectProgressRequest
     *
     * @return DescribeProjectProgressResponse DescribeProjectProgressResponse
     */
    public function describeProjectProgress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeProjectProgressWithOptions($request, $runtime);
    }

    /**
     * @summary 查询项目步骤指标
     *  *
     * @param DescribeProjectStepMetricRequest $request DescribeProjectStepMetricRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeProjectStepMetricResponse DescribeProjectStepMetricResponse
     */
    public function describeProjectStepMetricWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->aggregator)) {
            $body['Aggregator'] = $request->aggregator;
        }
        if (!Utils::isUnset($request->beginTimestamp)) {
            $body['BeginTimestamp'] = $request->beginTimestamp;
        }
        if (!Utils::isUnset($request->endTimestamp)) {
            $body['EndTimestamp'] = $request->endTimestamp;
        }
        if (!Utils::isUnset($request->maxPointNum)) {
            $body['MaxPointNum'] = $request->maxPointNum;
        }
        if (!Utils::isUnset($request->metricType)) {
            $body['MetricType'] = $request->metricType;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->stepName)) {
            $body['StepName'] = $request->stepName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeProjectStepMetric',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeProjectStepMetricResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询项目步骤指标
     *  *
     * @param DescribeProjectStepMetricRequest $request DescribeProjectStepMetricRequest
     *
     * @return DescribeProjectStepMetricResponse DescribeProjectStepMetricResponse
     */
    public function describeProjectStepMetric($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeProjectStepMetricWithOptions($request, $runtime);
    }

    /**
     * @summary 查询项目步骤
     *  *
     * @param DescribeProjectStepsRequest $request DescribeProjectStepsRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeProjectStepsResponse DescribeProjectStepsResponse
     */
    public function describeProjectStepsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeProjectSteps',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeProjectStepsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询项目步骤
     *  *
     * @param DescribeProjectStepsRequest $request DescribeProjectStepsRequest
     *
     * @return DescribeProjectStepsResponse DescribeProjectStepsResponse
     */
    public function describeProjectSteps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeProjectStepsWithOptions($request, $runtime);
    }

    /**
     * @summary The tenant mode.   Valid values:
     * Oracle
     * MySQL
     *  *
     * @param DescribeRecommendIndexRequest $request DescribeRecommendIndexRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRecommendIndexResponse DescribeRecommendIndexResponse
     */
    public function describeRecommendIndexWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->SQLId)) {
            $body['SQLId'] = $request->SQLId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeRecommendIndex',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRecommendIndexResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary The tenant mode.   Valid values:
     * Oracle
     * MySQL
     *  *
     * @param DescribeRecommendIndexRequest $request DescribeRecommendIndexRequest
     *
     * @return DescribeRecommendIndexResponse DescribeRecommendIndexResponse
     */
    public function describeRecommendIndex($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRecommendIndexWithOptions($request, $runtime);
    }

    /**
     * @summary The username.
     *  *
     * @param DescribeSQLDetailsRequest $request DescribeSQLDetailsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSQLDetailsResponse DescribeSQLDetailsResponse
     */
    public function describeSQLDetailsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->SQLId)) {
            $body['SQLId'] = $request->SQLId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeSQLDetails',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSQLDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary The username.
     *  *
     * @param DescribeSQLDetailsRequest $request DescribeSQLDetailsRequest
     *
     * @return DescribeSQLDetailsResponse DescribeSQLDetailsResponse
     */
    public function describeSQLDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSQLDetailsWithOptions($request, $runtime);
    }

    /**
     * @summary You can call this operation to query the execution history of an SQL statement in a specified period based on an SQL ID.
     *  *
     * @param DescribeSQLHistoryListRequest $request DescribeSQLHistoryListRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSQLHistoryListResponse DescribeSQLHistoryListResponse
     */
    public function describeSQLHistoryListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->SQLId)) {
            $body['SQLId'] = $request->SQLId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeSQLHistoryList',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSQLHistoryListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can call this operation to query the execution history of an SQL statement in a specified period based on an SQL ID.
     *  *
     * @param DescribeSQLHistoryListRequest $request DescribeSQLHistoryListRequest
     *
     * @return DescribeSQLHistoryListResponse DescribeSQLHistoryListResponse
     */
    public function describeSQLHistoryList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSQLHistoryListWithOptions($request, $runtime);
    }

    /**
     * @summary You can call this operation to query the information about the SQL execution plans stored in the diagnostic system based on an SQL ID.
     *  *
     * @param DescribeSQLPlansRequest $request DescribeSQLPlansRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSQLPlansResponse DescribeSQLPlansResponse
     */
    public function describeSQLPlansWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->SQLId)) {
            $body['SQLId'] = $request->SQLId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeSQLPlans',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSQLPlansResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can call this operation to query the information about the SQL execution plans stored in the diagnostic system based on an SQL ID.
     *  *
     * @param DescribeSQLPlansRequest $request DescribeSQLPlansRequest
     *
     * @return DescribeSQLPlansResponse DescribeSQLPlansResponse
     */
    public function describeSQLPlans($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSQLPlansWithOptions($request, $runtime);
    }

    /**
     * @summary You can call this API to view the sample data of the execution details of the slow queries.
     *  *
     * @param DescribeSQLSamplesRequest $request DescribeSQLSamplesRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSQLSamplesResponse DescribeSQLSamplesResponse
     */
    public function describeSQLSamplesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dbName)) {
            $body['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->returnSqlText)) {
            $body['ReturnSqlText'] = $request->returnSqlText;
        }
        if (!Utils::isUnset($request->sqlId)) {
            $body['SqlId'] = $request->sqlId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeSQLSamples',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSQLSamplesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can call this API to view the sample data of the execution details of the slow queries.
     *  *
     * @param DescribeSQLSamplesRequest $request DescribeSQLSamplesRequest
     *
     * @return DescribeSQLSamplesResponse DescribeSQLSamplesResponse
     */
    public function describeSQLSamples($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSQLSamplesWithOptions($request, $runtime);
    }

    /**
     * @summary 查询采样SQL的原始文本
     *  *
     * @param DescribeSampleSqlRawTextsRequest $request DescribeSampleSqlRawTextsRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSampleSqlRawTextsResponse DescribeSampleSqlRawTextsResponse
     */
    public function describeSampleSqlRawTextsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dbName)) {
            $body['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->limit)) {
            $body['Limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->sqlId)) {
            $body['SqlId'] = $request->sqlId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->traceId)) {
            $body['TraceId'] = $request->traceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeSampleSqlRawTexts',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSampleSqlRawTextsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询采样SQL的原始文本
     *  *
     * @param DescribeSampleSqlRawTextsRequest $request DescribeSampleSqlRawTextsRequest
     *
     * @return DescribeSampleSqlRawTextsResponse DescribeSampleSqlRawTextsResponse
     */
    public function describeSampleSqlRawTexts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSampleSqlRawTextsWithOptions($request, $runtime);
    }

    /**
     * @summary The name of the security group.
     *  *
     * @param DescribeSecurityIpGroupsRequest $request DescribeSecurityIpGroupsRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSecurityIpGroupsResponse DescribeSecurityIpGroupsResponse
     */
    public function describeSecurityIpGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeSecurityIpGroups',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSecurityIpGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary The name of the security group.
     *  *
     * @param DescribeSecurityIpGroupsRequest $request DescribeSecurityIpGroupsRequest
     *
     * @return DescribeSecurityIpGroupsResponse DescribeSecurityIpGroupsResponse
     */
    public function describeSecurityIpGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSecurityIpGroupsWithOptions($request, $runtime);
    }

    /**
     * @summary You can call this operation to query the execution history of an SQL statement by SQL ID that is determined as a slow SQL statement during a specified period of time.
     *  *
     * @param DescribeSlowSQLHistoryListRequest $request DescribeSlowSQLHistoryListRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSlowSQLHistoryListResponse DescribeSlowSQLHistoryListResponse
     */
    public function describeSlowSQLHistoryListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->SQLId)) {
            $body['SQLId'] = $request->SQLId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeSlowSQLHistoryList',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSlowSQLHistoryListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can call this operation to query the execution history of an SQL statement by SQL ID that is determined as a slow SQL statement during a specified period of time.
     *  *
     * @param DescribeSlowSQLHistoryListRequest $request DescribeSlowSQLHistoryListRequest
     *
     * @return DescribeSlowSQLHistoryListResponse DescribeSlowSQLHistoryListResponse
     */
    public function describeSlowSQLHistoryList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSlowSQLHistoryListWithOptions($request, $runtime);
    }

    /**
     * @summary You can call this operation to query the list of slow SQL statements
     *  *
     * @param DescribeSlowSQLListRequest $tmpReq  DescribeSlowSQLListRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSlowSQLListResponse DescribeSlowSQLListResponse
     */
    public function describeSlowSQLListWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DescribeSlowSQLListShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->filterCondition)) {
            $request->filterConditionShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->filterCondition, 'FilterCondition', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->dbName)) {
            $body['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->filterConditionShrink)) {
            $body['FilterCondition'] = $request->filterConditionShrink;
        }
        if (!Utils::isUnset($request->nodeIp)) {
            $body['NodeIp'] = $request->nodeIp;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->SQLId)) {
            $body['SQLId'] = $request->SQLId;
        }
        if (!Utils::isUnset($request->searchKeyWord)) {
            $body['SearchKeyWord'] = $request->searchKeyWord;
        }
        if (!Utils::isUnset($request->searchParameter)) {
            $body['SearchParameter'] = $request->searchParameter;
        }
        if (!Utils::isUnset($request->searchRule)) {
            $body['SearchRule'] = $request->searchRule;
        }
        if (!Utils::isUnset($request->searchValue)) {
            $body['SearchValue'] = $request->searchValue;
        }
        if (!Utils::isUnset($request->sortColumn)) {
            $body['SortColumn'] = $request->sortColumn;
        }
        if (!Utils::isUnset($request->sortOrder)) {
            $body['SortOrder'] = $request->sortOrder;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeSlowSQLList',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSlowSQLListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can call this operation to query the list of slow SQL statements
     *  *
     * @param DescribeSlowSQLListRequest $request DescribeSlowSQLListRequest
     *
     * @return DescribeSlowSQLListResponse DescribeSlowSQLListResponse
     */
    public function describeSlowSQLList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSlowSQLListWithOptions($request, $runtime);
    }

    /**
     * @summary You can call this operation to query tags.
     *  *
     * @param DescribeTagValuesRequest $request DescribeTagValuesRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTagValuesResponse DescribeTagValuesResponse
     */
    public function describeTagValuesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->resourceType)) {
            $body['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeTagValues',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTagValuesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can call this operation to query tags.
     *  *
     * @param DescribeTagValuesRequest $request DescribeTagValuesRequest
     *
     * @return DescribeTagValuesResponse DescribeTagValuesResponse
     */
    public function describeTagValues($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTagValuesWithOptions($request, $runtime);
    }

    /**
     * @summary The ID of the VPC.
     *  *
     * @param DescribeTenantRequest $request DescribeTenantRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTenantResponse DescribeTenantResponse
     */
    public function describeTenantWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeTenant',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTenantResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary The ID of the VPC.
     *  *
     * @param DescribeTenantRequest $request DescribeTenantRequest
     *
     * @return DescribeTenantResponse DescribeTenantResponse
     */
    public function describeTenant($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTenantWithOptions($request, $runtime);
    }

    /**
     * @summary 查询租户加密信息
     *  *
     * @param DescribeTenantEncryptionRequest $request DescribeTenantEncryptionRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTenantEncryptionResponse DescribeTenantEncryptionResponse
     */
    public function describeTenantEncryptionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->tenantName)) {
            $body['TenantName'] = $request->tenantName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeTenantEncryption',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTenantEncryptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询租户加密信息
     *  *
     * @param DescribeTenantEncryptionRequest $request DescribeTenantEncryptionRequest
     *
     * @return DescribeTenantEncryptionResponse DescribeTenantEncryptionResponse
     */
    public function describeTenantEncryption($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTenantEncryptionWithOptions($request, $runtime);
    }

    /**
     * @summary The list of tenant IDs.
     *  *
     * @param DescribeTenantMetricsRequest $request DescribeTenantMetricsRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTenantMetricsResponse DescribeTenantMetricsResponse
     */
    public function describeTenantMetricsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->metrics)) {
            $body['Metrics'] = $request->metrics;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->tenantIdList)) {
            $body['TenantIdList'] = $request->tenantIdList;
        }
        if (!Utils::isUnset($request->tenantName)) {
            $body['TenantName'] = $request->tenantName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeTenantMetrics',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTenantMetricsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary The list of tenant IDs.
     *  *
     * @param DescribeTenantMetricsRequest $request DescribeTenantMetricsRequest
     *
     * @return DescribeTenantMetricsResponse DescribeTenantMetricsResponse
     */
    public function describeTenantMetrics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTenantMetricsWithOptions($request, $runtime);
    }

    /**
     * @summary 查询租户同步位点信息
     *  *
     * @param DescribeTenantReadableScnRequest $request DescribeTenantReadableScnRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTenantReadableScnResponse DescribeTenantReadableScnResponse
     */
    public function describeTenantReadableScnWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeTenantReadableScn',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTenantReadableScnResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询租户同步位点信息
     *  *
     * @param DescribeTenantReadableScnRequest $request DescribeTenantReadableScnRequest
     *
     * @return DescribeTenantReadableScnResponse DescribeTenantReadableScnResponse
     */
    public function describeTenantReadableScn($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTenantReadableScnWithOptions($request, $runtime);
    }

    /**
     * @summary You can call this operation to query security check items of an OceanBase Database tenant.
     *  *
     * @param DescribeTenantSecurityConfigsRequest $request DescribeTenantSecurityConfigsRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTenantSecurityConfigsResponse DescribeTenantSecurityConfigsResponse
     */
    public function describeTenantSecurityConfigsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->checkId)) {
            $body['CheckId'] = $request->checkId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeTenantSecurityConfigs',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTenantSecurityConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can call this operation to query security check items of an OceanBase Database tenant.
     *  *
     * @param DescribeTenantSecurityConfigsRequest $request DescribeTenantSecurityConfigsRequest
     *
     * @return DescribeTenantSecurityConfigsResponse DescribeTenantSecurityConfigsResponse
     */
    public function describeTenantSecurityConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTenantSecurityConfigsWithOptions($request, $runtime);
    }

    /**
     * @summary You can call this operation to view the list of whitelist groups of the tenant.
     *  *
     * @param DescribeTenantSecurityIpGroupsRequest $request DescribeTenantSecurityIpGroupsRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTenantSecurityIpGroupsResponse DescribeTenantSecurityIpGroupsResponse
     */
    public function describeTenantSecurityIpGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeTenantSecurityIpGroups',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTenantSecurityIpGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can call this operation to view the list of whitelist groups of the tenant.
     *  *
     * @param DescribeTenantSecurityIpGroupsRequest $request DescribeTenantSecurityIpGroupsRequest
     *
     * @return DescribeTenantSecurityIpGroupsResponse DescribeTenantSecurityIpGroupsResponse
     */
    public function describeTenantSecurityIpGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTenantSecurityIpGroupsWithOptions($request, $runtime);
    }

    /**
     * @summary You can call this operation to query the tags of tenants in a cluster.
     *  *
     * @param DescribeTenantTagsRequest $request DescribeTenantTagsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTenantTagsResponse DescribeTenantTagsResponse
     */
    public function describeTenantTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->tags)) {
            $body['Tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->tenantIds)) {
            $body['TenantIds'] = $request->tenantIds;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeTenantTags',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTenantTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can call this operation to query the tags of tenants in a cluster.
     *  *
     * @param DescribeTenantTagsRequest $request DescribeTenantTagsRequest
     *
     * @return DescribeTenantTagsResponse DescribeTenantTagsResponse
     */
    public function describeTenantTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTenantTagsWithOptions($request, $runtime);
    }

    /**
     * @summary You can call this operation to obtain the account authorization information of the tenant.
     *  *
     * @param DescribeTenantUserRolesRequest $request DescribeTenantUserRolesRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTenantUserRolesResponse DescribeTenantUserRolesResponse
     */
    public function describeTenantUserRolesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeTenantUserRoles',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTenantUserRolesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can call this operation to obtain the account authorization information of the tenant.
     *  *
     * @param DescribeTenantUserRolesRequest $request DescribeTenantUserRolesRequest
     *
     * @return DescribeTenantUserRolesResponse DescribeTenantUserRolesResponse
     */
    public function describeTenantUserRoles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTenantUserRolesWithOptions($request, $runtime);
    }

    /**
     * @summary The return result of the request.
     *  *
     * @param DescribeTenantUsersRequest $request DescribeTenantUsersRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTenantUsersResponse DescribeTenantUsersResponse
     */
    public function describeTenantUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $body['SearchKey'] = $request->searchKey;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->userName)) {
            $body['UserName'] = $request->userName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeTenantUsers',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTenantUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary The return result of the request.
     *  *
     * @param DescribeTenantUsersRequest $request DescribeTenantUsersRequest
     *
     * @return DescribeTenantUsersResponse DescribeTenantUsersResponse
     */
    public function describeTenantUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTenantUsersWithOptions($request, $runtime);
    }

    /**
     * @summary Indicates whether a read-only connection has been created.
     *  *
     * @param DescribeTenantZonesReadRequest $request DescribeTenantZonesReadRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTenantZonesReadResponse DescribeTenantZonesReadResponse
     */
    public function describeTenantZonesReadWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeTenantZonesRead',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTenantZonesReadResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Indicates whether a read-only connection has been created.
     *  *
     * @param DescribeTenantZonesReadRequest $request DescribeTenantZonesReadRequest
     *
     * @return DescribeTenantZonesReadResponse DescribeTenantZonesReadResponse
     */
    public function describeTenantZonesRead($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTenantZonesReadWithOptions($request, $runtime);
    }

    /**
     * @summary The total memory size of the tenant, in GB.
     *  *
     * @param DescribeTenantsRequest $request DescribeTenantsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTenantsResponse DescribeTenantsResponse
     */
    public function describeTenantsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $body['SearchKey'] = $request->searchKey;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->tenantName)) {
            $body['TenantName'] = $request->tenantName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeTenants',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTenantsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary The total memory size of the tenant, in GB.
     *  *
     * @param DescribeTenantsRequest $request DescribeTenantsRequest
     *
     * @return DescribeTenantsResponse DescribeTenantsResponse
     */
    public function describeTenants($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTenantsWithOptions($request, $runtime);
    }

    /**
     * @summary The time zones supported by the tenant.
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTimeZonesResponse DescribeTimeZonesResponse
     */
    public function describeTimeZonesWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeTimeZones',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTimeZonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary The time zones supported by the tenant.
     *  *
     * @return DescribeTimeZonesResponse DescribeTimeZonesResponse
     */
    public function describeTimeZones()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTimeZonesWithOptions($runtime);
    }

    /**
     * @summary The name of the database.
     *  *
     * @param DescribeTopSQLListRequest $tmpReq  DescribeTopSQLListRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTopSQLListResponse DescribeTopSQLListResponse
     */
    public function describeTopSQLListWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DescribeTopSQLListShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->filterCondition)) {
            $request->filterConditionShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->filterCondition, 'FilterCondition', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->dbName)) {
            $body['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->filterConditionShrink)) {
            $body['FilterCondition'] = $request->filterConditionShrink;
        }
        if (!Utils::isUnset($request->nodeIp)) {
            $body['NodeIp'] = $request->nodeIp;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->SQLId)) {
            $body['SQLId'] = $request->SQLId;
        }
        if (!Utils::isUnset($request->searchKeyWord)) {
            $body['SearchKeyWord'] = $request->searchKeyWord;
        }
        if (!Utils::isUnset($request->searchParameter)) {
            $body['SearchParameter'] = $request->searchParameter;
        }
        if (!Utils::isUnset($request->searchRule)) {
            $body['SearchRule'] = $request->searchRule;
        }
        if (!Utils::isUnset($request->searchValue)) {
            $body['SearchValue'] = $request->searchValue;
        }
        if (!Utils::isUnset($request->sortColumn)) {
            $body['SortColumn'] = $request->sortColumn;
        }
        if (!Utils::isUnset($request->sortOrder)) {
            $body['SortOrder'] = $request->sortOrder;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeTopSQLList',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTopSQLListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary The name of the database.
     *  *
     * @param DescribeTopSQLListRequest $request DescribeTopSQLListRequest
     *
     * @return DescribeTopSQLListResponse DescribeTopSQLListResponse
     */
    public function describeTopSQLList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTopSQLListWithOptions($request, $runtime);
    }

    /**
     * @summary The deployment mode.
     *  *
     * @param DescribeZonesRequest $request DescribeZonesRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeZonesResponse DescribeZonesResponse
     */
    public function describeZonesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->cpuArch)) {
            $body['CpuArch'] = $request->cpuArch;
        }
        if (!Utils::isUnset($request->deployType)) {
            $body['DeployType'] = $request->deployType;
        }
        if (!Utils::isUnset($request->series)) {
            $body['Series'] = $request->series;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeZones',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeZonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary The deployment mode.
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
     * @summary 公有云上传OSS 获取一个临时上传url
     *  *
     * @param GetUploadOssUrlRequest $request GetUploadOssUrlRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetUploadOssUrlResponse GetUploadOssUrlResponse
     */
    public function getUploadOssUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->effectiveTimeMinutes)) {
            $body['EffectiveTimeMinutes'] = $request->effectiveTimeMinutes;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetUploadOssUrl',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetUploadOssUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 公有云上传OSS 获取一个临时上传url
     *  *
     * @param GetUploadOssUrlRequest $request GetUploadOssUrlRequest
     *
     * @return GetUploadOssUrlResponse GetUploadOssUrlResponse
     */
    public function getUploadOssUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUploadOssUrlWithOptions($request, $runtime);
    }

    /**
     * @summary You can call this operation to close a session.
     *  *
     * @param KillProcessListRequest $request KillProcessListRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return KillProcessListResponse KillProcessListResponse
     */
    public function killProcessListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->sessionList)) {
            $body['SessionList'] = $request->sessionList;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'KillProcessList',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return KillProcessListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can call this operation to close a session.
     *  *
     * @param KillProcessListRequest $request KillProcessListRequest
     *
     * @return KillProcessListResponse KillProcessListResponse
     */
    public function killProcessList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->killProcessListWithOptions($request, $runtime);
    }

    /**
     * @summary 查询标签列表
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAllLabelsResponse ListAllLabelsResponse
     */
    public function listAllLabelsWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'ListAllLabels',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAllLabelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询标签列表
     *  *
     * @return ListAllLabelsResponse ListAllLabelsResponse
     */
    public function listAllLabels()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAllLabelsWithOptions($runtime);
    }

    /**
     * @summary 查询数据源列表 (MySql、OB_MYSQL、OB_ORACLE)
     *  *
     * @param ListDataSourceRequest $tmpReq  ListDataSourceRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDataSourceResponse ListDataSourceResponse
     */
    public function listDataSourceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListDataSourceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->types)) {
            $request->typesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->types, 'Types', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->order)) {
            $body['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $body['SearchKey'] = $request->searchKey;
        }
        if (!Utils::isUnset($request->sortField)) {
            $body['SortField'] = $request->sortField;
        }
        if (!Utils::isUnset($request->typesShrink)) {
            $body['Types'] = $request->typesShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListDataSource',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询数据源列表 (MySql、OB_MYSQL、OB_ORACLE)
     *  *
     * @param ListDataSourceRequest $request ListDataSourceRequest
     *
     * @return ListDataSourceResponse ListDataSourceResponse
     */
    public function listDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataSourceWithOptions($request, $runtime);
    }

    /**
     * @summary 查询项目的全量校验结果
     *  *
     * @param ListProjectFullVerifyResultRequest $tmpReq  ListProjectFullVerifyResultRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListProjectFullVerifyResultResponse ListProjectFullVerifyResultResponse
     */
    public function listProjectFullVerifyResultWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListProjectFullVerifyResultShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->destSchemas)) {
            $request->destSchemasShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->destSchemas, 'DestSchemas', 'json');
        }
        if (!Utils::isUnset($tmpReq->sourceSchemas)) {
            $request->sourceSchemasShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sourceSchemas, 'SourceSchemas', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->destSchemasShrink)) {
            $body['DestSchemas'] = $request->destSchemasShrink;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->sourceSchemasShrink)) {
            $body['SourceSchemas'] = $request->sourceSchemasShrink;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListProjectFullVerifyResult',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListProjectFullVerifyResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询项目的全量校验结果
     *  *
     * @param ListProjectFullVerifyResultRequest $request ListProjectFullVerifyResultRequest
     *
     * @return ListProjectFullVerifyResultResponse ListProjectFullVerifyResultResponse
     */
    public function listProjectFullVerifyResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProjectFullVerifyResultWithOptions($request, $runtime);
    }

    /**
     * @summary 根据项目 ID 查询项目的修改记录
     *  *
     * @param ListProjectModifyRecordsRequest $request ListProjectModifyRecordsRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListProjectModifyRecordsResponse ListProjectModifyRecordsResponse
     */
    public function listProjectModifyRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListProjectModifyRecords',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListProjectModifyRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 根据项目 ID 查询项目的修改记录
     *  *
     * @param ListProjectModifyRecordsRequest $request ListProjectModifyRecordsRequest
     *
     * @return ListProjectModifyRecordsResponse ListProjectModifyRecordsResponse
     */
    public function listProjectModifyRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProjectModifyRecordsWithOptions($request, $runtime);
    }

    /**
     * @summary 查询项目列表
     *  *
     * @param ListProjectsRequest $tmpReq  ListProjectsRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListProjectsResponse ListProjectsResponse
     */
    public function listProjectsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListProjectsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->labelIds)) {
            $request->labelIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->labelIds, 'LabelIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->sinkEndpointTypes)) {
            $request->sinkEndpointTypesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sinkEndpointTypes, 'SinkEndpointTypes', 'json');
        }
        if (!Utils::isUnset($tmpReq->sourceEndpointTypes)) {
            $request->sourceEndpointTypesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sourceEndpointTypes, 'SourceEndpointTypes', 'json');
        }
        if (!Utils::isUnset($tmpReq->status)) {
            $request->statusShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->status, 'Status', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->labelIdsShrink)) {
            $body['LabelIds'] = $request->labelIdsShrink;
        }
        if (!Utils::isUnset($request->needRelatedInfo)) {
            $body['NeedRelatedInfo'] = $request->needRelatedInfo;
        }
        if (!Utils::isUnset($request->order)) {
            $body['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $body['SearchKey'] = $request->searchKey;
        }
        if (!Utils::isUnset($request->sinkEndpointTypesShrink)) {
            $body['SinkEndpointTypes'] = $request->sinkEndpointTypesShrink;
        }
        if (!Utils::isUnset($request->sortField)) {
            $body['SortField'] = $request->sortField;
        }
        if (!Utils::isUnset($request->sourceEndpointTypesShrink)) {
            $body['SourceEndpointTypes'] = $request->sourceEndpointTypesShrink;
        }
        if (!Utils::isUnset($request->statusShrink)) {
            $body['Status'] = $request->statusShrink;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->visibleSubProject)) {
            $body['VisibleSubProject'] = $request->visibleSubProject;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListProjects',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListProjectsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询项目列表
     *  *
     * @param ListProjectsRequest $request ListProjectsRequest
     *
     * @return ListProjectsResponse ListProjectsResponse
     */
    public function listProjects($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProjectsWithOptions($request, $runtime);
    }

    /**
     * @summary 查询传输实例列表
     *  *
     * @param ListWorkerInstancesRequest $tmpReq  ListWorkerInstancesRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListWorkerInstancesResponse ListWorkerInstancesResponse
     */
    public function listWorkerInstancesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListWorkerInstancesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->specs)) {
            $request->specsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->specs, 'Specs', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->destType)) {
            $body['DestType'] = $request->destType;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $body['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->onlyBindable)) {
            $body['OnlyBindable'] = $request->onlyBindable;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $body['SourceType'] = $request->sourceType;
        }
        if (!Utils::isUnset($request->specsShrink)) {
            $body['Specs'] = $request->specsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListWorkerInstances',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListWorkerInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询传输实例列表
     *  *
     * @param ListWorkerInstancesRequest $request ListWorkerInstancesRequest
     *
     * @return ListWorkerInstancesResponse ListWorkerInstancesResponse
     */
    public function listWorkerInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listWorkerInstancesWithOptions($request, $runtime);
    }

    /**
     * @summary The request ID.
     *  *
     * @param ModifyDatabaseDescriptionRequest $request ModifyDatabaseDescriptionRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDatabaseDescriptionResponse ModifyDatabaseDescriptionResponse
     */
    public function modifyDatabaseDescriptionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->databaseName)) {
            $body['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyDatabaseDescription',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDatabaseDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary The request ID.
     *  *
     * @param ModifyDatabaseDescriptionRequest $request ModifyDatabaseDescriptionRequest
     *
     * @return ModifyDatabaseDescriptionResponse ModifyDatabaseDescriptionResponse
     */
    public function modifyDatabaseDescription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDatabaseDescriptionWithOptions($request, $runtime);
    }

    /**
     * @summary The accounts that have privileges on the database.
     *  *
     * @param ModifyDatabaseUserRolesRequest $request ModifyDatabaseUserRolesRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDatabaseUserRolesResponse ModifyDatabaseUserRolesResponse
     */
    public function modifyDatabaseUserRolesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->databaseName)) {
            $body['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->users)) {
            $body['Users'] = $request->users;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyDatabaseUserRoles',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDatabaseUserRolesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary The accounts that have privileges on the database.
     *  *
     * @param ModifyDatabaseUserRolesRequest $request ModifyDatabaseUserRolesRequest
     *
     * @return ModifyDatabaseUserRolesResponse ModifyDatabaseUserRolesResponse
     */
    public function modifyDatabaseUserRoles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDatabaseUserRolesWithOptions($request, $runtime);
    }

    /**
     * @summary The name of the OceanBase cluster.
     *  *
     * @param ModifyInstanceNameRequest $request ModifyInstanceNameRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyInstanceNameResponse ModifyInstanceNameResponse
     */
    public function modifyInstanceNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $body['InstanceName'] = $request->instanceName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyInstanceName',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyInstanceNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary The name of the OceanBase cluster.
     *  *
     * @param ModifyInstanceNameRequest $request ModifyInstanceNameRequest
     *
     * @return ModifyInstanceNameResponse ModifyInstanceNameResponse
     */
    public function modifyInstanceName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceNameWithOptions($request, $runtime);
    }

    /**
     * @summary You can call this operation to modify the number of nodes in a cluster.
     *  *
     * @param ModifyInstanceNodeNumRequest $request ModifyInstanceNodeNumRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyInstanceNodeNumResponse ModifyInstanceNodeNumResponse
     */
    public function modifyInstanceNodeNumWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->nodeNum)) {
            $body['NodeNum'] = $request->nodeNum;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyInstanceNodeNum',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyInstanceNodeNumResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can call this operation to modify the number of nodes in a cluster.
     *  *
     * @param ModifyInstanceNodeNumRequest $request ModifyInstanceNodeNumRequest
     *
     * @return ModifyInstanceNodeNumResponse ModifyInstanceNodeNumResponse
     */
    public function modifyInstanceNodeNum($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceNodeNumWithOptions($request, $runtime);
    }

    /**
     * @summary You can call this operation to modify the Secure Sockets Layer (SSL) setting for an OceanBase cluster instance.
     *  *
     * @description There is currently no authorization information disclosed in the API.
     *  *
     * @param ModifyInstanceSSLRequest $request ModifyInstanceSSLRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyInstanceSSLResponse ModifyInstanceSSLResponse
     */
    public function modifyInstanceSSLWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->enableSSL)) {
            $body['EnableSSL'] = $request->enableSSL;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyInstanceSSL',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyInstanceSSLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can call this operation to modify the Secure Sockets Layer (SSL) setting for an OceanBase cluster instance.
     *  *
     * @description There is currently no authorization information disclosed in the API.
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
     * @summary You can call this operation to modify the cluster specifications and storage space.
     *  *
     * @param ModifyInstanceSpecRequest $request ModifyInstanceSpecRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyInstanceSpecResponse ModifyInstanceSpecResponse
     */
    public function modifyInstanceSpecWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->diskSize)) {
            $body['DiskSize'] = $request->diskSize;
        }
        if (!Utils::isUnset($request->diskType)) {
            $body['DiskType'] = $request->diskType;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->instanceClass)) {
            $body['InstanceClass'] = $request->instanceClass;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->upgradeSpecNative)) {
            $body['UpgradeSpecNative'] = $request->upgradeSpecNative;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyInstanceSpec',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyInstanceSpecResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can call this operation to modify the cluster specifications and storage space.
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
     * @summary You can call this operation to modify the tags of a cluster.
     *  *
     * @param ModifyInstanceTagsRequest $request ModifyInstanceTagsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyInstanceTagsResponse ModifyInstanceTagsResponse
     */
    public function modifyInstanceTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->tags)) {
            $body['Tags'] = $request->tags;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyInstanceTags',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyInstanceTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can call this operation to modify the tags of a cluster.
     *  *
     * @param ModifyInstanceTagsRequest $request ModifyInstanceTagsRequest
     *
     * @return ModifyInstanceTagsResponse ModifyInstanceTagsResponse
     */
    public function modifyInstanceTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceTagsWithOptions($request, $runtime);
    }

    /**
     * @summary You can call this operation to modify the temporary capacity of the OceanBase cluster.
     *  *
     * @param ModifyInstanceTemporaryCapacityRequest $request ModifyInstanceTemporaryCapacityRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyInstanceTemporaryCapacityResponse ModifyInstanceTemporaryCapacityResponse
     */
    public function modifyInstanceTemporaryCapacityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $body['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->diskSize)) {
            $body['DiskSize'] = $request->diskSize;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->spec)) {
            $body['Spec'] = $request->spec;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyInstanceTemporaryCapacity',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyInstanceTemporaryCapacityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can call this operation to modify the temporary capacity of the OceanBase cluster.
     *  *
     * @param ModifyInstanceTemporaryCapacityRequest $request ModifyInstanceTemporaryCapacityRequest
     *
     * @return ModifyInstanceTemporaryCapacityResponse ModifyInstanceTemporaryCapacityResponse
     */
    public function modifyInstanceTemporaryCapacity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceTemporaryCapacityWithOptions($request, $runtime);
    }

    /**
     * @summary The modification results.
     *  *
     * @param ModifyParametersRequest $request ModifyParametersRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyParametersResponse ModifyParametersResponse
     */
    public function modifyParametersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dimension)) {
            $body['Dimension'] = $request->dimension;
        }
        if (!Utils::isUnset($request->dimensionValue)) {
            $body['DimensionValue'] = $request->dimensionValue;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->parameters)) {
            $body['Parameters'] = $request->parameters;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyParameters',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyParametersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary The modification results.
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
     * @summary The name of the security group.
     *  *
     * @param ModifySecurityIpsRequest $request ModifySecurityIpsRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifySecurityIpsResponse ModifySecurityIpsResponse
     */
    public function modifySecurityIpsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->securityIpGroupName)) {
            $body['SecurityIpGroupName'] = $request->securityIpGroupName;
        }
        if (!Utils::isUnset($request->securityIps)) {
            $body['SecurityIps'] = $request->securityIps;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifySecurityIps',
            'version'     => '2019-09-01',
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
     * @summary The name of the security group.
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
     * @param ModifyTagNameRequest $request ModifyTagNameRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyTagNameResponse ModifyTagNameResponse
     */
    public function modifyTagNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->key)) {
            $body['Key'] = $request->key;
        }
        if (!Utils::isUnset($request->newKey)) {
            $body['NewKey'] = $request->newKey;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyTagName',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyTagNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyTagNameRequest $request ModifyTagNameRequest
     *
     * @return ModifyTagNameResponse ModifyTagNameResponse
     */
    public function modifyTagName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTagNameWithOptions($request, $runtime);
    }

    /**
     * @summary You can call this operation to rename a tag.
     *  *
     * @param ModifyTagValueNameRequest $request ModifyTagValueNameRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyTagValueNameResponse ModifyTagValueNameResponse
     */
    public function modifyTagValueNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->key)) {
            $body['Key'] = $request->key;
        }
        if (!Utils::isUnset($request->newValue)) {
            $body['NewValue'] = $request->newValue;
        }
        if (!Utils::isUnset($request->value)) {
            $body['Value'] = $request->value;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyTagValueName',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyTagValueNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can call this operation to rename a tag.
     *  *
     * @param ModifyTagValueNameRequest $request ModifyTagValueNameRequest
     *
     * @return ModifyTagValueNameResponse ModifyTagValueNameResponse
     */
    public function modifyTagValueName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTagValueNameWithOptions($request, $runtime);
    }

    /**
     * @summary 租户加密变更
     *  *
     * @param ModifyTenantEncryptionRequest $request ModifyTenantEncryptionRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyTenantEncryptionResponse ModifyTenantEncryptionResponse
     */
    public function modifyTenantEncryptionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->encryptionKeyId)) {
            $body['EncryptionKeyId'] = $request->encryptionKeyId;
        }
        if (!Utils::isUnset($request->encryptionType)) {
            $body['EncryptionType'] = $request->encryptionType;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyTenantEncryption',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyTenantEncryptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 租户加密变更
     *  *
     * @param ModifyTenantEncryptionRequest $request ModifyTenantEncryptionRequest
     *
     * @return ModifyTenantEncryptionResponse ModifyTenantEncryptionResponse
     */
    public function modifyTenantEncryption($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTenantEncryptionWithOptions($request, $runtime);
    }

    /**
     * @summary The return result of the request.
     *  *
     * @param ModifyTenantPrimaryZoneRequest $request ModifyTenantPrimaryZoneRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyTenantPrimaryZoneResponse ModifyTenantPrimaryZoneResponse
     */
    public function modifyTenantPrimaryZoneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->masterIntranetAddressZone)) {
            $body['MasterIntranetAddressZone'] = $request->masterIntranetAddressZone;
        }
        if (!Utils::isUnset($request->primaryZone)) {
            $body['PrimaryZone'] = $request->primaryZone;
        }
        if (!Utils::isUnset($request->tenantEndpointDirectId)) {
            $body['TenantEndpointDirectId'] = $request->tenantEndpointDirectId;
        }
        if (!Utils::isUnset($request->tenantEndpointId)) {
            $body['TenantEndpointId'] = $request->tenantEndpointId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->userDirectVSwitchId)) {
            $body['UserDirectVSwitchId'] = $request->userDirectVSwitchId;
        }
        if (!Utils::isUnset($request->userVSwitchId)) {
            $body['UserVSwitchId'] = $request->userVSwitchId;
        }
        if (!Utils::isUnset($request->userVpcOwnerId)) {
            $body['UserVpcOwnerId'] = $request->userVpcOwnerId;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $body['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyTenantPrimaryZone',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyTenantPrimaryZoneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary The return result of the request.
     *  *
     * @param ModifyTenantPrimaryZoneRequest $request ModifyTenantPrimaryZoneRequest
     *
     * @return ModifyTenantPrimaryZoneResponse ModifyTenantPrimaryZoneResponse
     */
    public function modifyTenantPrimaryZone($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTenantPrimaryZoneWithOptions($request, $runtime);
    }

    /**
     * @summary You can call this operation to modify the specifications of a tenant in an OceanBase cluster.
     *  *
     * @param ModifyTenantResourceRequest $request ModifyTenantResourceRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyTenantResourceResponse ModifyTenantResourceResponse
     */
    public function modifyTenantResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->cpu)) {
            $body['Cpu'] = $request->cpu;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->logDisk)) {
            $body['LogDisk'] = $request->logDisk;
        }
        if (!Utils::isUnset($request->memory)) {
            $body['Memory'] = $request->memory;
        }
        if (!Utils::isUnset($request->readOnlyZoneList)) {
            $body['ReadOnlyZoneList'] = $request->readOnlyZoneList;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyTenantResource',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyTenantResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can call this operation to modify the specifications of a tenant in an OceanBase cluster.
     *  *
     * @param ModifyTenantResourceRequest $request ModifyTenantResourceRequest
     *
     * @return ModifyTenantResourceResponse ModifyTenantResourceResponse
     */
    public function modifyTenantResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTenantResourceWithOptions($request, $runtime);
    }

    /**
     * @summary You can call this operation to modify the information on the whitelist group of the tenant.
     *  *
     * @param ModifyTenantSecurityIpGroupRequest $request ModifyTenantSecurityIpGroupRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyTenantSecurityIpGroupResponse ModifyTenantSecurityIpGroupResponse
     */
    public function modifyTenantSecurityIpGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->securityIpGroupName)) {
            $body['SecurityIpGroupName'] = $request->securityIpGroupName;
        }
        if (!Utils::isUnset($request->securityIps)) {
            $body['SecurityIps'] = $request->securityIps;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyTenantSecurityIpGroup',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyTenantSecurityIpGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can call this operation to modify the information on the whitelist group of the tenant.
     *  *
     * @param ModifyTenantSecurityIpGroupRequest $request ModifyTenantSecurityIpGroupRequest
     *
     * @return ModifyTenantSecurityIpGroupResponse ModifyTenantSecurityIpGroupResponse
     */
    public function modifyTenantSecurityIpGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTenantSecurityIpGroupWithOptions($request, $runtime);
    }

    /**
     * @summary You can call this operation to modify the tags of a tenant.
     *  *
     * @param ModifyTenantTagsRequest $request ModifyTenantTagsRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyTenantTagsResponse ModifyTenantTagsResponse
     */
    public function modifyTenantTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->tags)) {
            $body['Tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyTenantTags',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyTenantTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can call this operation to modify the tags of a tenant.
     *  *
     * @param ModifyTenantTagsRequest $request ModifyTenantTagsRequest
     *
     * @return ModifyTenantTagsResponse ModifyTenantTagsResponse
     */
    public function modifyTenantTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTenantTagsWithOptions($request, $runtime);
    }

    /**
     * @summary The description of the database.
     *  *
     * @param ModifyTenantUserDescriptionRequest $request ModifyTenantUserDescriptionRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyTenantUserDescriptionResponse ModifyTenantUserDescriptionResponse
     */
    public function modifyTenantUserDescriptionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->userName)) {
            $body['UserName'] = $request->userName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyTenantUserDescription',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyTenantUserDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary The description of the database.
     *  *
     * @param ModifyTenantUserDescriptionRequest $request ModifyTenantUserDescriptionRequest
     *
     * @return ModifyTenantUserDescriptionResponse ModifyTenantUserDescriptionResponse
     */
    public function modifyTenantUserDescription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTenantUserDescriptionWithOptions($request, $runtime);
    }

    /**
     * @summary The request ID.
     *  *
     * @param ModifyTenantUserPasswordRequest $request ModifyTenantUserPasswordRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyTenantUserPasswordResponse ModifyTenantUserPasswordResponse
     */
    public function modifyTenantUserPasswordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->encryptionType)) {
            $body['EncryptionType'] = $request->encryptionType;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->userName)) {
            $body['UserName'] = $request->userName;
        }
        if (!Utils::isUnset($request->userPassword)) {
            $body['UserPassword'] = $request->userPassword;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyTenantUserPassword',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyTenantUserPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary The request ID.
     *  *
     * @param ModifyTenantUserPasswordRequest $request ModifyTenantUserPasswordRequest
     *
     * @return ModifyTenantUserPasswordResponse ModifyTenantUserPasswordResponse
     */
    public function modifyTenantUserPassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTenantUserPasswordWithOptions($request, $runtime);
    }

    /**
     * @summary Indicates whether the privilege was granted to the role.
     *  *
     * @param ModifyTenantUserRolesRequest $request ModifyTenantUserRolesRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyTenantUserRolesResponse ModifyTenantUserRolesResponse
     */
    public function modifyTenantUserRolesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->modifyType)) {
            $body['ModifyType'] = $request->modifyType;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->userName)) {
            $body['UserName'] = $request->userName;
        }
        if (!Utils::isUnset($request->userRole)) {
            $body['UserRole'] = $request->userRole;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyTenantUserRoles',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyTenantUserRolesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Indicates whether the privilege was granted to the role.
     *  *
     * @param ModifyTenantUserRolesRequest $request ModifyTenantUserRolesRequest
     *
     * @return ModifyTenantUserRolesResponse ModifyTenantUserRolesResponse
     */
    public function modifyTenantUserRoles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTenantUserRolesWithOptions($request, $runtime);
    }

    /**
     * @summary The ID of the tenant.
     *  *
     * @param ModifyTenantUserStatusRequest $request ModifyTenantUserStatusRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyTenantUserStatusResponse ModifyTenantUserStatusResponse
     */
    public function modifyTenantUserStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->userName)) {
            $body['UserName'] = $request->userName;
        }
        if (!Utils::isUnset($request->userStatus)) {
            $body['UserStatus'] = $request->userStatus;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyTenantUserStatus',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyTenantUserStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary The ID of the tenant.
     *  *
     * @param ModifyTenantUserStatusRequest $request ModifyTenantUserStatusRequest
     *
     * @return ModifyTenantUserStatusResponse ModifyTenantUserStatusResponse
     */
    public function modifyTenantUserStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTenantUserStatusWithOptions($request, $runtime);
    }

    /**
     * @summary 释放项目
     *  *
     * @param ReleaseProjectRequest $request ReleaseProjectRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ReleaseProjectResponse ReleaseProjectResponse
     */
    public function releaseProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ReleaseProject',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReleaseProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 释放项目
     *  *
     * @param ReleaseProjectRequest $request ReleaseProjectRequest
     *
     * @return ReleaseProjectResponse ReleaseProjectResponse
     */
    public function releaseProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseProjectWithOptions($request, $runtime);
    }

    /**
     * @summary 释放传输实例 （未绑定项目时才可以释放）
     *  *
     * @param ReleaseWorkerInstanceRequest $request ReleaseWorkerInstanceRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ReleaseWorkerInstanceResponse ReleaseWorkerInstanceResponse
     */
    public function releaseWorkerInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ReleaseWorkerInstance',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReleaseWorkerInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 释放传输实例 （未绑定项目时才可以释放）
     *  *
     * @param ReleaseWorkerInstanceRequest $request ReleaseWorkerInstanceRequest
     *
     * @return ReleaseWorkerInstanceResponse ReleaseWorkerInstanceResponse
     */
    public function releaseWorkerInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseWorkerInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary 恢复项目
     *  *
     * @param ResumeProjectRequest $request ResumeProjectRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ResumeProjectResponse ResumeProjectResponse
     */
    public function resumeProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ResumeProject',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResumeProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 恢复项目
     *  *
     * @param ResumeProjectRequest $request ResumeProjectRequest
     *
     * @return ResumeProjectResponse ResumeProjectResponse
     */
    public function resumeProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resumeProjectWithOptions($request, $runtime);
    }

    /**
     * @summary 根据修改记录 ID 重试修改操作（仅支持处于 FAILED 状态的修改记录）
     *  *
     * @param RetryProjectModifyRecordsRequest $request RetryProjectModifyRecordsRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return RetryProjectModifyRecordsResponse RetryProjectModifyRecordsResponse
     */
    public function retryProjectModifyRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RetryProjectModifyRecords',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RetryProjectModifyRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 根据修改记录 ID 重试修改操作（仅支持处于 FAILED 状态的修改记录）
     *  *
     * @param RetryProjectModifyRecordsRequest $request RetryProjectModifyRecordsRequest
     *
     * @return RetryProjectModifyRecordsResponse RetryProjectModifyRecordsResponse
     */
    public function retryProjectModifyRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->retryProjectModifyRecordsWithOptions($request, $runtime);
    }

    /**
     * @summary 启动项目
     *  *
     * @param StartProjectRequest $request StartProjectRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return StartProjectResponse StartProjectResponse
     */
    public function startProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'StartProject',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 启动项目
     *  *
     * @param StartProjectRequest $request StartProjectRequest
     *
     * @return StartProjectResponse StartProjectResponse
     */
    public function startProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startProjectWithOptions($request, $runtime);
    }

    /**
     * @summary 启动该label下的所有未启动项目
     *  *
     * @param StartProjectsByLabelRequest $request StartProjectsByLabelRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return StartProjectsByLabelResponse StartProjectsByLabelResponse
     */
    public function startProjectsByLabelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'StartProjectsByLabel',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartProjectsByLabelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 启动该label下的所有未启动项目
     *  *
     * @param StartProjectsByLabelRequest $request StartProjectsByLabelRequest
     *
     * @return StartProjectsByLabelResponse StartProjectsByLabelResponse
     */
    public function startProjectsByLabel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startProjectsByLabelWithOptions($request, $runtime);
    }

    /**
     * @summary 暂停项目
     *  *
     * @param StopProjectRequest $request StopProjectRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return StopProjectResponse StopProjectResponse
     */
    public function stopProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'StopProject',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 暂停项目
     *  *
     * @param StopProjectRequest $request StopProjectRequest
     *
     * @return StopProjectResponse StopProjectResponse
     */
    public function stopProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopProjectWithOptions($request, $runtime);
    }

    /**
     * @summary 根据修改记录 ID 终止修改操作，不可恢复（仅支持处于 RUNNING / FAILED 状态的修改记录）
     *  *
     * @param StopProjectModifyRecordsRequest $request StopProjectModifyRecordsRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return StopProjectModifyRecordsResponse StopProjectModifyRecordsResponse
     */
    public function stopProjectModifyRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'StopProjectModifyRecords',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopProjectModifyRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 根据修改记录 ID 终止修改操作，不可恢复（仅支持处于 RUNNING / FAILED 状态的修改记录）
     *  *
     * @param StopProjectModifyRecordsRequest $request StopProjectModifyRecordsRequest
     *
     * @return StopProjectModifyRecordsResponse StopProjectModifyRecordsResponse
     */
    public function stopProjectModifyRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopProjectModifyRecordsWithOptions($request, $runtime);
    }

    /**
     * @summary 暂停该label下的所有运行中项目
     *  *
     * @param StopProjectsByLabelRequest $request StopProjectsByLabelRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return StopProjectsByLabelResponse StopProjectsByLabelResponse
     */
    public function stopProjectsByLabelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'StopProjectsByLabel',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopProjectsByLabelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 暂停该label下的所有运行中项目
     *  *
     * @param StopProjectsByLabelRequest $request StopProjectsByLabelRequest
     *
     * @return StopProjectsByLabelResponse StopProjectsByLabelResponse
     */
    public function stopProjectsByLabel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopProjectsByLabelWithOptions($request, $runtime);
    }

    /**
     * @summary You can call this operation to switch between the primary and standby instances of OceanBase.
     *  *
     * @param SwitchoverInstanceRequest $request SwitchoverInstanceRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return SwitchoverInstanceResponse SwitchoverInstanceResponse
     */
    public function switchoverInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->forced)) {
            $body['Forced'] = $request->forced;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->targetInstanceId)) {
            $body['TargetInstanceId'] = $request->targetInstanceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SwitchoverInstance',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SwitchoverInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can call this operation to switch between the primary and standby instances of OceanBase.
     *  *
     * @param SwitchoverInstanceRequest $request SwitchoverInstanceRequest
     *
     * @return SwitchoverInstanceResponse SwitchoverInstanceResponse
     */
    public function switchoverInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->switchoverInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary 更新项目配置 Action=UpdateProjectConfig
     *  *
     * @param UpdateProjectConfigRequest $tmpReq  UpdateProjectConfigRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateProjectConfigResponse UpdateProjectConfigResponse
     */
    public function updateProjectConfigWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateProjectConfigShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->fullTransferConfig)) {
            $request->fullTransferConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->fullTransferConfig, 'FullTransferConfig', 'json');
        }
        if (!Utils::isUnset($tmpReq->incrTransferConfig)) {
            $request->incrTransferConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->incrTransferConfig, 'IncrTransferConfig', 'json');
        }
        if (!Utils::isUnset($tmpReq->reverseIncrTransferConfig)) {
            $request->reverseIncrTransferConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->reverseIncrTransferConfig, 'ReverseIncrTransferConfig', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->fullTransferConfigShrink)) {
            $body['FullTransferConfig'] = $request->fullTransferConfigShrink;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->incrTransferConfigShrink)) {
            $body['IncrTransferConfig'] = $request->incrTransferConfigShrink;
        }
        if (!Utils::isUnset($request->reverseIncrTransferConfigShrink)) {
            $body['ReverseIncrTransferConfig'] = $request->reverseIncrTransferConfigShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateProjectConfig',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateProjectConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新项目配置 Action=UpdateProjectConfig
     *  *
     * @param UpdateProjectConfigRequest $request UpdateProjectConfigRequest
     *
     * @return UpdateProjectConfigResponse UpdateProjectConfigResponse
     */
    public function updateProjectConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateProjectConfigWithOptions($request, $runtime);
    }
}
