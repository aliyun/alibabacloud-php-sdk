<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateTenantReadOnlyConnectionRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateTenantReadOnlyConnectionResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateTenantRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateTenantResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateTenantSecurityIpGroupRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateTenantSecurityIpGroupResponse;
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
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantEncryptionRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantEncryptionResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantMetricsRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantMetricsResponse;
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
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyInstanceTagsRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyInstanceTagsResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyInstanceTemporaryCapacityRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyInstanceTemporaryCapacityResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyParametersRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyParametersResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifySecurityIpsRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifySecurityIpsResponse;
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
     * @param CancelProjectModifyRecordRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CancelProjectModifyRecordResponse
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
     * @param CreateBackupSetDownloadLinkRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return CreateBackupSetDownloadLinkResponse
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
     * @param CreateDatabaseRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateDatabaseResponse
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
     * @param CreateInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateInstanceResponse
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
     * @param CreateLabelRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateLabelResponse
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
     * @param CreateMySqlDataSourceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateMySqlDataSourceResponse
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
     * @param CreateOceanBaseDataSourceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateOceanBaseDataSourceResponse
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
     * To call this operation, you must add the IP address of the OceanBase Migration Service (OMS) server to the whitelist of the Alibaba Cloud database instance, the security rules of the ECS instance, or the security settings of your self-managed database (usually the firewall of your self-managed database) to ensure that OMS can successfully access your database instance. To obtain the IP address of the OMS server, go to the OMS data source management page in the OMS console.
     *   *
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
     * To call this operation, you must add the IP address of the OceanBase Migration Service (OMS) server to the whitelist of the Alibaba Cloud database instance, the security rules of the ECS instance, or the security settings of your self-managed database (usually the firewall of your self-managed database) to ensure that OMS can successfully access your database instance. To obtain the IP address of the OMS server, go to the OMS data source management page in the OMS console.
     *   *
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
     * @param CreateProjectRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return CreateProjectResponse
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
     * @param CreateProjectModifyRecordsRequest $tmpReq
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateProjectModifyRecordsResponse
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
     * @param CreateRdsPostgreSQLDataSourceRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return CreateRdsPostgreSQLDataSourceResponse
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
     * @param CreateSecurityIpGroupRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateSecurityIpGroupResponse
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
     * @param CreateTenantRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateTenantResponse
     */
    public function createTenantWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->charset)) {
            $body['Charset'] = $request->charset;
        }
        if (!Utils::isUnset($request->cpu)) {
            $body['Cpu'] = $request->cpu;
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
     * @param CreateTenantReadOnlyConnectionRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return CreateTenantReadOnlyConnectionResponse
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
     * @param CreateTenantSecurityIpGroupRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return CreateTenantSecurityIpGroupResponse
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
     * @param CreateTenantUserRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateTenantUserResponse
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
     * @param DeleteDataSourceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteDataSourceResponse
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
     * @param DeleteDatabasesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteDatabasesResponse
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
     * Before you call this operation, ensure that the following requirements are met:
     *   * - The cluster is in the Running state.
     *   * - The cluster is a primary cluster and the billing method is pay-as-you-go.
     *   *
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
     * Before you call this operation, ensure that the following requirements are met:
     *   * - The cluster is in the Running state.
     *   * - The cluster is a primary cluster and the billing method is pay-as-you-go.
     *   *
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
     * @param DeleteProjectRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteProjectResponse
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
     * @param DeleteSecurityIpGroupRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteSecurityIpGroupResponse
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
     * @param DeleteTenantSecurityIpGroupRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DeleteTenantSecurityIpGroupResponse
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
     * @param DeleteTenantUsersRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteTenantUsersResponse
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
     * @param DeleteTenantsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteTenantsResponse
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
     * @param DescribeAnomalySQLListRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeAnomalySQLListResponse
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
     * @param DescribeAvailableCpuResourceRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeAvailableCpuResourceResponse
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
     * @param DescribeAvailableMemResourceRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeAvailableMemResourceResponse
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
     * @param DescribeAvailableSpecRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeAvailableSpecResponse
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
     * @param DescribeAvailableZoneRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeAvailableZoneResponse
     */
    public function describeAvailableZoneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
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
     * @param DescribeBackupSetDownloadLinkRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeBackupSetDownloadLinkResponse
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
     * @param DescribeCharsetRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeCharsetResponse
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
     * @param DescribeDataBackupSetRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeDataBackupSetResponse
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
     * @param DescribeDatabasesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeDatabasesResponse
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
     * @param DescribeInstanceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeInstanceResponse
     */
    public function describeInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
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
     * @param DescribeInstanceCreatableZoneRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeInstanceCreatableZoneResponse
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
     * @param DescribeInstanceSSLRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeInstanceSSLResponse
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
     * @param DescribeInstanceSecurityConfigsRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeInstanceSecurityConfigsResponse
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
     * @param DescribeInstanceTagsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeInstanceTagsResponse
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
     * @param DescribeInstanceTenantModesRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeInstanceTenantModesResponse
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
     * @param DescribeInstanceTopologyRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeInstanceTopologyResponse
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
     * @param DescribeInstancesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeInstancesResponse
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
     * @param DescribeMetricsDataRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeMetricsDataResponse
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
     * @param DescribeNodeMetricsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeNodeMetricsResponse
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
     * @param DescribeOasAnomalySQLListRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeOasAnomalySQLListResponse
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
     * @param DescribeOasSQLDetailsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeOasSQLDetailsResponse
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
     * @param DescribeOasSQLHistoryListRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeOasSQLHistoryListResponse
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
     * @param DescribeOasSQLPlansRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeOasSQLPlansResponse
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
     * @param DescribeOasSlowSQLListRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeOasSlowSQLListResponse
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
     * @param DescribeOasTopSQLListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeOasTopSQLListResponse
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
     * @param DescribeOutlineBindingRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeOutlineBindingResponse
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
     * @param DescribeParametersRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeParametersResponse
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
     * @param DescribeParametersHistoryRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeParametersHistoryResponse
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
     * @param DescribeProjectRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeProjectResponse
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
     * @param DescribeProjectComponentsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeProjectComponentsResponse
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
     * @param DescribeProjectProgressRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeProjectProgressResponse
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
     * @param DescribeProjectStepMetricRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeProjectStepMetricResponse
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
     * @param DescribeProjectStepsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeProjectStepsResponse
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
     * @param DescribeRecommendIndexRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeRecommendIndexResponse
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
     * @param DescribeSQLDetailsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeSQLDetailsResponse
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
     * @param DescribeSQLHistoryListRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeSQLHistoryListResponse
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
     * @param DescribeSQLPlansRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeSQLPlansResponse
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
     * @param DescribeSQLSamplesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeSQLSamplesResponse
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
     * @param DescribeSampleSqlRawTextsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeSampleSqlRawTextsResponse
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
     * @param DescribeSecurityIpGroupsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeSecurityIpGroupsResponse
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
     * @param DescribeSlowSQLHistoryListRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeSlowSQLHistoryListResponse
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
     * @param DescribeSlowSQLListRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeSlowSQLListResponse
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
     * @param DescribeTenantRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeTenantResponse
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
     * @param DescribeTenantEncryptionRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeTenantEncryptionResponse
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
     * @param DescribeTenantMetricsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeTenantMetricsResponse
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
     * @param DescribeTenantSecurityConfigsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeTenantSecurityConfigsResponse
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
     * @param DescribeTenantSecurityIpGroupsRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeTenantSecurityIpGroupsResponse
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
     * @param DescribeTenantTagsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeTenantTagsResponse
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
     * @param DescribeTenantUserRolesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeTenantUserRolesResponse
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
     * @param DescribeTenantUsersRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeTenantUsersResponse
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
     * @param DescribeTenantZonesReadRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeTenantZonesReadResponse
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
     * @param DescribeTenantsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeTenantsResponse
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
     * @param RuntimeOptions $runtime
     *
     * @return DescribeTimeZonesResponse
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
     * @return DescribeTimeZonesResponse
     */
    public function describeTimeZones()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTimeZonesWithOptions($runtime);
    }

    /**
     * @param DescribeTopSQLListRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeTopSQLListResponse
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
     * @param DescribeZonesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeZonesResponse
     */
    public function describeZonesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
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
     * @param GetUploadOssUrlRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetUploadOssUrlResponse
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
     * @param KillProcessListRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return KillProcessListResponse
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
     * @param RuntimeOptions $runtime
     *
     * @return ListAllLabelsResponse
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
     * @return ListAllLabelsResponse
     */
    public function listAllLabels()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAllLabelsWithOptions($runtime);
    }

    /**
     * @param ListDataSourceRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return ListDataSourceResponse
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
     * @param ListProjectFullVerifyResultRequest $tmpReq
     * @param RuntimeOptions                     $runtime
     *
     * @return ListProjectFullVerifyResultResponse
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
     * @param ListProjectModifyRecordsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListProjectModifyRecordsResponse
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
     * @param ListProjectsRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return ListProjectsResponse
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
     * @param ListWorkerInstancesRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return ListWorkerInstancesResponse
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
     * @param ModifyDatabaseDescriptionRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyDatabaseDescriptionResponse
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
     * @param ModifyDatabaseUserRolesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyDatabaseUserRolesResponse
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
     * @param ModifyInstanceNameRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyInstanceNameResponse
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
     * @param ModifyInstanceNodeNumRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyInstanceNodeNumResponse
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
     * @param ModifyInstanceSpecRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyInstanceSpecResponse
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
     * @param ModifyInstanceTagsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyInstanceTagsResponse
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
     * @param ModifyInstanceTemporaryCapacityRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ModifyInstanceTemporaryCapacityResponse
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
     * @param ModifyParametersRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyParametersResponse
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
     * @param ModifySecurityIpsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifySecurityIpsResponse
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
     * @param ModifyTenantEncryptionRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyTenantEncryptionResponse
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
     * @param ModifyTenantPrimaryZoneRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyTenantPrimaryZoneResponse
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
     * @param ModifyTenantResourceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyTenantResourceResponse
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
     * @param ModifyTenantSecurityIpGroupRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyTenantSecurityIpGroupResponse
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
     * @param ModifyTenantTagsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyTenantTagsResponse
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
     * @param ModifyTenantUserDescriptionRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyTenantUserDescriptionResponse
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
     * @param ModifyTenantUserPasswordRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyTenantUserPasswordResponse
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
     * @param ModifyTenantUserRolesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyTenantUserRolesResponse
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
     * @param ModifyTenantUserStatusRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyTenantUserStatusResponse
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
     * @param ReleaseProjectRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ReleaseProjectResponse
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
     * @param ReleaseWorkerInstanceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ReleaseWorkerInstanceResponse
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
     * @param ResumeProjectRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ResumeProjectResponse
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
     * @param RetryProjectModifyRecordsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return RetryProjectModifyRecordsResponse
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
     * @param StartProjectRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return StartProjectResponse
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
     * @param StartProjectsByLabelRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return StartProjectsByLabelResponse
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
     * @param StopProjectRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return StopProjectResponse
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
     * @param StopProjectModifyRecordsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return StopProjectModifyRecordsResponse
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
     * @param StopProjectsByLabelRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return StopProjectsByLabelResponse
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
     * @param SwitchoverInstanceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SwitchoverInstanceResponse
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
     * @param SwitchoverInstanceRequest $request
     *
     * @return SwitchoverInstanceResponse
     */
    public function switchoverInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->switchoverInstanceWithOptions($request, $runtime);
    }
}
