<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\AllocateInstancePublicConnectionRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\AllocateInstancePublicConnectionResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CheckServiceLinkedRoleRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CheckServiceLinkedRoleResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateAccountRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateAccountResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateCollectionRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateCollectionResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateDBInstancePlanRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateDBInstancePlanResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateDBInstanceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateDBInstanceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateDocumentCollectionRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateDocumentCollectionResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateNamespaceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateNamespaceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateSampleDataRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateSampleDataResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateServiceLinkedRoleRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateServiceLinkedRoleResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateVectorIndexRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateVectorIndexResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteCollectionDataRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteCollectionDataResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteCollectionRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteCollectionResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteDBInstancePlanRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteDBInstancePlanResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteDBInstanceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteDBInstanceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteDocumentCollectionRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteDocumentCollectionResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteDocumentRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteDocumentResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteNamespaceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteNamespaceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteVectorIndexRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteVectorIndexResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeAccountsRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeAccountsResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeActiveSQLRecordsRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeActiveSQLRecordsResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeAvailableResourcesRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeAvailableResourcesResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeBackupPolicyRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeBackupPolicyResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeCollectionRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeCollectionResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDataBackupsRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDataBackupsResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDataReDistributeInfoRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDataReDistributeInfoResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDataShareInstancesRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDataShareInstancesResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDataSharePerformanceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDataSharePerformanceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBClusterNodeRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBClusterNodeResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBClusterPerformanceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBClusterPerformanceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceAttributeRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceAttributeResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceDataBloatRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceDataBloatResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceDataSkewRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceDataSkewResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceDiagnosisSummaryRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceDiagnosisSummaryResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceErrorLogRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceErrorLogResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceIndexUsageRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceIndexUsageResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceIPArrayListRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceIPArrayListResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceNetInfoRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceNetInfoResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstancePerformanceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstancePerformanceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstancePlansRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstancePlansResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstancesRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstancesResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstancesShrinkRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceSSLRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceSSLResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceSupportMaxPerformanceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceSupportMaxPerformanceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBVersionInfosRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBVersionInfosResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDiagnosisDimensionsRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDiagnosisDimensionsResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDiagnosisMonitorPerformanceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDiagnosisMonitorPerformanceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDiagnosisRecordsRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDiagnosisRecordsResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDiagnosisSQLInfoRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDiagnosisSQLInfoResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDocumentRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDocumentResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDownloadRecordsRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDownloadRecordsResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDownloadSQLLogsRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDownloadSQLLogsResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeHealthStatusRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeHealthStatusResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeIMVInfosRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeIMVInfosResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeLogBackupsRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeLogBackupsResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeModifyParameterLogRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeModifyParameterLogResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeNamespaceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeNamespaceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeParametersRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeParametersResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeRdsVpcsRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeRdsVpcsResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeRdsVSwitchsRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeRdsVSwitchsResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeSampleDataRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeSampleDataResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeSQLLogCountRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeSQLLogCountResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeSQLLogsRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeSQLLogsResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeSQLLogsV2Request;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeSQLLogsV2Response;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeSupportFeaturesRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeSupportFeaturesResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeTagsRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeTagsResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeUserEncryptionKeyListRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeUserEncryptionKeyListResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeWaitingSQLInfoRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeWaitingSQLInfoResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeWaitingSQLRecordsRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeWaitingSQLRecordsResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DownloadDiagnosisRecordsRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DownloadDiagnosisRecordsResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DownloadSQLLogsRecordsRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DownloadSQLLogsRecordsResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\GrantCollectionRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\GrantCollectionResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\HandleActiveSQLRecordRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\HandleActiveSQLRecordResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\InitVectorDatabaseRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\InitVectorDatabaseResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListCollectionsRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListCollectionsResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListDocumentCollectionsRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListDocumentCollectionsResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListDocumentsRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListDocumentsResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListNamespacesRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListNamespacesResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyAccountDescriptionRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyAccountDescriptionResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyBackupPolicyRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyBackupPolicyResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyDBInstanceConfigRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyDBInstanceConfigResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyDBInstanceConnectionStringRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyDBInstanceConnectionStringResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyDBInstanceDescriptionRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyDBInstanceDescriptionResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyDBInstanceMaintainTimeRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyDBInstanceMaintainTimeResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyDBInstanceResourceGroupRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyDBInstanceResourceGroupResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyDBInstanceSSLRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyDBInstanceSSLResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyMasterSpecRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyMasterSpecResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyParametersRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyParametersResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifySecurityIpsRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifySecurityIpsResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifySQLCollectorPolicyRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifySQLCollectorPolicyResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyVectorConfigurationRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyVectorConfigurationResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\PauseInstanceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\PauseInstanceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryCollectionDataRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryCollectionDataResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryCollectionDataShrinkRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryContentRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryContentResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\RebalanceDBInstanceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\RebalanceDBInstanceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ReleaseInstancePublicConnectionRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ReleaseInstancePublicConnectionResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ResetAccountPasswordRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ResetAccountPasswordResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ResetIMVMonitorDataRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ResetIMVMonitorDataResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\RestartDBInstanceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\RestartDBInstanceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ResumeInstanceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ResumeInstanceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\SetDataShareInstanceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\SetDataShareInstanceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\SetDataShareInstanceShrinkRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\SetDBInstancePlanStatusRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\SetDBInstancePlanStatusResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\SwitchDBInstanceNetTypeRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\SwitchDBInstanceNetTypeResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\UnloadSampleDataRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\UnloadSampleDataResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\UpdateCollectionDataMetadataRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\UpdateCollectionDataMetadataResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\UpdateCollectionDataMetadataShrinkRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\UpdateDBInstancePlanRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\UpdateDBInstancePlanResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\UpgradeDBInstanceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\UpgradeDBInstanceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\UpgradeDBVersionRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\UpgradeDBVersionResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\UpsertChunksRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\UpsertChunksResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\UpsertChunksShrinkRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\UpsertCollectionDataRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\UpsertCollectionDataResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\UpsertCollectionDataShrinkRequest;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Gpdb extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'cn-beijing'            => 'gpdb.aliyuncs.com',
            'cn-hangzhou'           => 'gpdb.aliyuncs.com',
            'cn-shanghai'           => 'gpdb.aliyuncs.com',
            'cn-shenzhen'           => 'gpdb.aliyuncs.com',
            'cn-hongkong'           => 'gpdb.aliyuncs.com',
            'ap-southeast-1'        => 'gpdb.aliyuncs.com',
            'us-west-1'             => 'gpdb.aliyuncs.com',
            'us-east-1'             => 'gpdb.aliyuncs.com',
            'cn-hangzhou-finance'   => 'gpdb.aliyuncs.com',
            'cn-shanghai-finance-1' => 'gpdb.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'gpdb.aliyuncs.com',
            'cn-qingdao'            => 'gpdb.aliyuncs.com',
            'cn-north-2-gov-1'      => 'gpdb.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('gpdb', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * You can call this operation to apply for a public endpoint for an AnalyticDB for PostgreSQL instance. Both the primary and instance endpoints of an AnalyticDB for PostgreSQL instance can be public endpoints. For more information, see [Endpoints of an instance and its primary coordinator node](~~204879~~).
     *   * ## Limits
     *   * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
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
        if (!Utils::isUnset($request->addressType)) {
            $query['AddressType'] = $request->addressType;
        }
        if (!Utils::isUnset($request->connectionStringPrefix)) {
            $query['ConnectionStringPrefix'] = $request->connectionStringPrefix;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
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
            'action'      => 'AllocateInstancePublicConnection',
            'version'     => '2016-05-03',
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
     * You can call this operation to apply for a public endpoint for an AnalyticDB for PostgreSQL instance. Both the primary and instance endpoints of an AnalyticDB for PostgreSQL instance can be public endpoints. For more information, see [Endpoints of an instance and its primary coordinator node](~~204879~~).
     *   * ## Limits
     *   * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
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
     * @param CheckServiceLinkedRoleRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CheckServiceLinkedRoleResponse
     */
    public function checkServiceLinkedRoleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckServiceLinkedRole',
            'version'     => '2016-05-03',
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
     * *   Before you can use an AnalyticDB for PostgreSQL instance, you must create a privileged account for the instance.
     *   * *   You can call this operation to create only privileged accounts. For information about how to create other types of accounts, see [Create a database account](~~50206~~).
     *   * ## Limits
     *   * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
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
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->databaseName)) {
            $query['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAccount',
            'version'     => '2016-05-03',
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
     * *   Before you can use an AnalyticDB for PostgreSQL instance, you must create a privileged account for the instance.
     *   * *   You can call this operation to create only privileged accounts. For information about how to create other types of accounts, see [Create a database account](~~50206~~).
     *   * ## Limits
     *   * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
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
     * @param CreateCollectionRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateCollectionResponse
     */
    public function createCollectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->collection)) {
            $query['Collection'] = $request->collection;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->dimension)) {
            $query['Dimension'] = $request->dimension;
        }
        if (!Utils::isUnset($request->externalStorage)) {
            $query['ExternalStorage'] = $request->externalStorage;
        }
        if (!Utils::isUnset($request->fullTextRetrievalFields)) {
            $query['FullTextRetrievalFields'] = $request->fullTextRetrievalFields;
        }
        if (!Utils::isUnset($request->hnswM)) {
            $query['HnswM'] = $request->hnswM;
        }
        if (!Utils::isUnset($request->managerAccount)) {
            $query['ManagerAccount'] = $request->managerAccount;
        }
        if (!Utils::isUnset($request->managerAccountPassword)) {
            $query['ManagerAccountPassword'] = $request->managerAccountPassword;
        }
        if (!Utils::isUnset($request->metadata)) {
            $query['Metadata'] = $request->metadata;
        }
        if (!Utils::isUnset($request->metrics)) {
            $query['Metrics'] = $request->metrics;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->parser)) {
            $query['Parser'] = $request->parser;
        }
        if (!Utils::isUnset($request->pqEnable)) {
            $query['PqEnable'] = $request->pqEnable;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCollection',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCollectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateCollectionRequest $request
     *
     * @return CreateCollectionResponse
     */
    public function createCollection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCollectionWithOptions($request, $runtime);
    }

    /**
     * You can call this operation when you need to create AnalyticDB for PostgreSQL instances to meet the requirements of new applications or services.
     *   * Before you call this operation, make sure that you are familiar with the billing of AnalyticDB for PostgreSQL instances. For more information, see [Billing methods](~~35406~~) and [AnalyticDB for PostgreSQL pricing](https://www.alibabacloud.com/zh/product/hybriddb-postgresql/pricing).
     *   * ## Limits
     *   * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds a limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limits when you call this operation.
     *   *
     * @param CreateDBInstanceRequest $request CreateDBInstanceRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDBInstanceResponse CreateDBInstanceResponse
     */
    public function createDBInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupId)) {
            $query['BackupId'] = $request->backupId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->createSampleData)) {
            $query['CreateSampleData'] = $request->createSampleData;
        }
        if (!Utils::isUnset($request->DBInstanceCategory)) {
            $query['DBInstanceCategory'] = $request->DBInstanceCategory;
        }
        if (!Utils::isUnset($request->DBInstanceClass)) {
            $query['DBInstanceClass'] = $request->DBInstanceClass;
        }
        if (!Utils::isUnset($request->DBInstanceDescription)) {
            $query['DBInstanceDescription'] = $request->DBInstanceDescription;
        }
        if (!Utils::isUnset($request->DBInstanceGroupCount)) {
            $query['DBInstanceGroupCount'] = $request->DBInstanceGroupCount;
        }
        if (!Utils::isUnset($request->DBInstanceMode)) {
            $query['DBInstanceMode'] = $request->DBInstanceMode;
        }
        if (!Utils::isUnset($request->enableSSL)) {
            $query['EnableSSL'] = $request->enableSSL;
        }
        if (!Utils::isUnset($request->encryptionKey)) {
            $query['EncryptionKey'] = $request->encryptionKey;
        }
        if (!Utils::isUnset($request->encryptionType)) {
            $query['EncryptionType'] = $request->encryptionType;
        }
        if (!Utils::isUnset($request->engine)) {
            $query['Engine'] = $request->engine;
        }
        if (!Utils::isUnset($request->engineVersion)) {
            $query['EngineVersion'] = $request->engineVersion;
        }
        if (!Utils::isUnset($request->idleTime)) {
            $query['IdleTime'] = $request->idleTime;
        }
        if (!Utils::isUnset($request->instanceNetworkType)) {
            $query['InstanceNetworkType'] = $request->instanceNetworkType;
        }
        if (!Utils::isUnset($request->instanceSpec)) {
            $query['InstanceSpec'] = $request->instanceSpec;
        }
        if (!Utils::isUnset($request->masterCU)) {
            $query['MasterCU'] = $request->masterCU;
        }
        if (!Utils::isUnset($request->masterNodeNum)) {
            $query['MasterNodeNum'] = $request->masterNodeNum;
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
        if (!Utils::isUnset($request->prodType)) {
            $query['ProdType'] = $request->prodType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->securityIPList)) {
            $query['SecurityIPList'] = $request->securityIPList;
        }
        if (!Utils::isUnset($request->segDiskPerformanceLevel)) {
            $query['SegDiskPerformanceLevel'] = $request->segDiskPerformanceLevel;
        }
        if (!Utils::isUnset($request->segNodeNum)) {
            $query['SegNodeNum'] = $request->segNodeNum;
        }
        if (!Utils::isUnset($request->segStorageType)) {
            $query['SegStorageType'] = $request->segStorageType;
        }
        if (!Utils::isUnset($request->serverlessMode)) {
            $query['ServerlessMode'] = $request->serverlessMode;
        }
        if (!Utils::isUnset($request->serverlessResource)) {
            $query['ServerlessResource'] = $request->serverlessResource;
        }
        if (!Utils::isUnset($request->srcDbInstanceName)) {
            $query['SrcDbInstanceName'] = $request->srcDbInstanceName;
        }
        if (!Utils::isUnset($request->storageSize)) {
            $query['StorageSize'] = $request->storageSize;
        }
        if (!Utils::isUnset($request->storageType)) {
            $query['StorageType'] = $request->storageType;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
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
        if (!Utils::isUnset($request->vectorConfigurationStatus)) {
            $query['VectorConfigurationStatus'] = $request->vectorConfigurationStatus;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDBInstance',
            'version'     => '2016-05-03',
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
     * You can call this operation when you need to create AnalyticDB for PostgreSQL instances to meet the requirements of new applications or services.
     *   * Before you call this operation, make sure that you are familiar with the billing of AnalyticDB for PostgreSQL instances. For more information, see [Billing methods](~~35406~~) and [AnalyticDB for PostgreSQL pricing](https://www.alibabacloud.com/zh/product/hybriddb-postgresql/pricing).
     *   * ## Limits
     *   * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds a limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limits when you call this operation.
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
     * *   The plan management feature is supported only for pay-as-you-go instances.
     *   * *   When you change the compute node specifications or change the number of compute nodes, transient connections may occur. We recommend that you perform these operations during off-peak hours.
     *   * Before you call this operation, make sure that you are familiar with the billing of AnalyticDB for PostgreSQL. For more information, see [Billing methods](~~35406~~) and [AnalyticDB for PostgreSQL pricing](https://www.alibabacloud.com/zh/product/hybriddb-postgresql/pricing).
     *   *
     * @param CreateDBInstancePlanRequest $request CreateDBInstancePlanRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDBInstancePlanResponse CreateDBInstancePlanResponse
     */
    public function createDBInstancePlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->planConfig)) {
            $query['PlanConfig'] = $request->planConfig;
        }
        if (!Utils::isUnset($request->planDesc)) {
            $query['PlanDesc'] = $request->planDesc;
        }
        if (!Utils::isUnset($request->planEndDate)) {
            $query['PlanEndDate'] = $request->planEndDate;
        }
        if (!Utils::isUnset($request->planName)) {
            $query['PlanName'] = $request->planName;
        }
        if (!Utils::isUnset($request->planScheduleType)) {
            $query['PlanScheduleType'] = $request->planScheduleType;
        }
        if (!Utils::isUnset($request->planStartDate)) {
            $query['PlanStartDate'] = $request->planStartDate;
        }
        if (!Utils::isUnset($request->planType)) {
            $query['PlanType'] = $request->planType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDBInstancePlan',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDBInstancePlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   The plan management feature is supported only for pay-as-you-go instances.
     *   * *   When you change the compute node specifications or change the number of compute nodes, transient connections may occur. We recommend that you perform these operations during off-peak hours.
     *   * Before you call this operation, make sure that you are familiar with the billing of AnalyticDB for PostgreSQL. For more information, see [Billing methods](~~35406~~) and [AnalyticDB for PostgreSQL pricing](https://www.alibabacloud.com/zh/product/hybriddb-postgresql/pricing).
     *   *
     * @param CreateDBInstancePlanRequest $request CreateDBInstancePlanRequest
     *
     * @return CreateDBInstancePlanResponse CreateDBInstancePlanResponse
     */
    public function createDBInstancePlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDBInstancePlanWithOptions($request, $runtime);
    }

    /**
     * @param CreateDocumentCollectionRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateDocumentCollectionResponse
     */
    public function createDocumentCollectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->collection)) {
            $query['Collection'] = $request->collection;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->embeddingModel)) {
            $query['EmbeddingModel'] = $request->embeddingModel;
        }
        if (!Utils::isUnset($request->externalStorage)) {
            $query['ExternalStorage'] = $request->externalStorage;
        }
        if (!Utils::isUnset($request->fullTextRetrievalFields)) {
            $query['FullTextRetrievalFields'] = $request->fullTextRetrievalFields;
        }
        if (!Utils::isUnset($request->hnswM)) {
            $query['HnswM'] = $request->hnswM;
        }
        if (!Utils::isUnset($request->managerAccount)) {
            $query['ManagerAccount'] = $request->managerAccount;
        }
        if (!Utils::isUnset($request->managerAccountPassword)) {
            $query['ManagerAccountPassword'] = $request->managerAccountPassword;
        }
        if (!Utils::isUnset($request->metadata)) {
            $query['Metadata'] = $request->metadata;
        }
        if (!Utils::isUnset($request->metrics)) {
            $query['Metrics'] = $request->metrics;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->parser)) {
            $query['Parser'] = $request->parser;
        }
        if (!Utils::isUnset($request->pqEnable)) {
            $query['PqEnable'] = $request->pqEnable;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDocumentCollection',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDocumentCollectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDocumentCollectionRequest $request
     *
     * @return CreateDocumentCollectionResponse
     */
    public function createDocumentCollection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDocumentCollectionWithOptions($request, $runtime);
    }

    /**
     * @param CreateNamespaceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateNamespaceResponse
     */
    public function createNamespaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->managerAccount)) {
            $query['ManagerAccount'] = $request->managerAccount;
        }
        if (!Utils::isUnset($request->managerAccountPassword)) {
            $query['ManagerAccountPassword'] = $request->managerAccountPassword;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->namespacePassword)) {
            $query['NamespacePassword'] = $request->namespacePassword;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateNamespace',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateNamespaceRequest $request
     *
     * @return CreateNamespaceResponse
     */
    public function createNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNamespaceWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to load a sample dataset to an AnalyticDB for PostgreSQL instance. Then, you can execute query statements on the sample dataset to experience or test your instance. For more information about query statements, see [Dataset information and query examples](~~452277~~).
     *   * ## Precautions
     *   * - If your instance is in elastic storage mode, the sample dataset is supported only for V6.3.10.3 or later. If your instance is in Serverless mode, the sample dataset is supported only for V1.0.4.0 or later. For more information about how to update the minor engine version of an instance, see [Update the minor engine version](/help/en/analyticdb-for-postgresql/latest/upgrade-the-engine-version).
     *   * - The sample dataset is about 10 GB in size. Make sure that your instance has sufficient storage space.
     *   * - The sample dataset contains a database named `ADB_SampleData_TPCH`. Make sure that your instance does not have a database with the same name. Otherwise, the dataset may fail to be loaded.
     *   * - It may take 6 to 8 minutes to load the sample dataset. During this period, operations on your instance such as adding nodes or changing node specifications may be affected.
     *   * ## Limits
     *   * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param CreateSampleDataRequest $request CreateSampleDataRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateSampleDataResponse CreateSampleDataResponse
     */
    public function createSampleDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSampleData',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSampleDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to load a sample dataset to an AnalyticDB for PostgreSQL instance. Then, you can execute query statements on the sample dataset to experience or test your instance. For more information about query statements, see [Dataset information and query examples](~~452277~~).
     *   * ## Precautions
     *   * - If your instance is in elastic storage mode, the sample dataset is supported only for V6.3.10.3 or later. If your instance is in Serverless mode, the sample dataset is supported only for V1.0.4.0 or later. For more information about how to update the minor engine version of an instance, see [Update the minor engine version](/help/en/analyticdb-for-postgresql/latest/upgrade-the-engine-version).
     *   * - The sample dataset is about 10 GB in size. Make sure that your instance has sufficient storage space.
     *   * - The sample dataset contains a database named `ADB_SampleData_TPCH`. Make sure that your instance does not have a database with the same name. Otherwise, the dataset may fail to be loaded.
     *   * - It may take 6 to 8 minutes to load the sample dataset. During this period, operations on your instance such as adding nodes or changing node specifications may be affected.
     *   * ## Limits
     *   * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param CreateSampleDataRequest $request CreateSampleDataRequest
     *
     * @return CreateSampleDataResponse CreateSampleDataResponse
     */
    public function createSampleData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSampleDataWithOptions($request, $runtime);
    }

    /**
     * @param CreateServiceLinkedRoleRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateServiceLinkedRoleResponse
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateServiceLinkedRole',
            'version'     => '2016-05-03',
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
     * @param CreateServiceLinkedRoleRequest $request
     *
     * @return CreateServiceLinkedRoleResponse
     */
    public function createServiceLinkedRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createServiceLinkedRoleWithOptions($request, $runtime);
    }

    /**
     * @param CreateVectorIndexRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateVectorIndexResponse
     */
    public function createVectorIndexWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->collection)) {
            $query['Collection'] = $request->collection;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->dimension)) {
            $query['Dimension'] = $request->dimension;
        }
        if (!Utils::isUnset($request->externalStorage)) {
            $query['ExternalStorage'] = $request->externalStorage;
        }
        if (!Utils::isUnset($request->hnswM)) {
            $query['HnswM'] = $request->hnswM;
        }
        if (!Utils::isUnset($request->managerAccount)) {
            $query['ManagerAccount'] = $request->managerAccount;
        }
        if (!Utils::isUnset($request->managerAccountPassword)) {
            $query['ManagerAccountPassword'] = $request->managerAccountPassword;
        }
        if (!Utils::isUnset($request->metrics)) {
            $query['Metrics'] = $request->metrics;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pqEnable)) {
            $query['PqEnable'] = $request->pqEnable;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateVectorIndex',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateVectorIndexResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateVectorIndexRequest $request
     *
     * @return CreateVectorIndexResponse
     */
    public function createVectorIndex($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVectorIndexWithOptions($request, $runtime);
    }

    /**
     * @param DeleteCollectionRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteCollectionResponse
     */
    public function deleteCollectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->collection)) {
            $query['Collection'] = $request->collection;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->namespacePassword)) {
            $query['NamespacePassword'] = $request->namespacePassword;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteCollection',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCollectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteCollectionRequest $request
     *
     * @return DeleteCollectionResponse
     */
    public function deleteCollection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCollectionWithOptions($request, $runtime);
    }

    /**
     * @param DeleteCollectionDataRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteCollectionDataResponse
     */
    public function deleteCollectionDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->collection)) {
            $query['Collection'] = $request->collection;
        }
        if (!Utils::isUnset($request->collectionData)) {
            $query['CollectionData'] = $request->collectionData;
        }
        if (!Utils::isUnset($request->collectionDataFilter)) {
            $query['CollectionDataFilter'] = $request->collectionDataFilter;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->namespacePassword)) {
            $query['NamespacePassword'] = $request->namespacePassword;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteCollectionData',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCollectionDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteCollectionDataRequest $request
     *
     * @return DeleteCollectionDataResponse
     */
    public function deleteCollectionData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCollectionDataWithOptions($request, $runtime);
    }

    /**
     * *   Subscription instances cannot be manually released. They are automatically released when they expire.
     *   * *   You can call this operation to release pay-as-you-go instances only when they are in the **Running** state.
     *   * ## Limits
     *   * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
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
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDBInstance',
            'version'     => '2016-05-03',
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
     * *   Subscription instances cannot be manually released. They are automatically released when they expire.
     *   * *   You can call this operation to release pay-as-you-go instances only when they are in the **Running** state.
     *   * ## Limits
     *   * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
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
     * If you no longer need a plan, you can call this operation to delete the plan. The plan management feature is supported only for AnalyticDB for PostgreSQL instances in Serverless mode.
     *   * ## Limits
     *   * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DeleteDBInstancePlanRequest $request DeleteDBInstancePlanRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDBInstancePlanResponse DeleteDBInstancePlanResponse
     */
    public function deleteDBInstancePlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->planId)) {
            $query['PlanId'] = $request->planId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDBInstancePlan',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDBInstancePlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * If you no longer need a plan, you can call this operation to delete the plan. The plan management feature is supported only for AnalyticDB for PostgreSQL instances in Serverless mode.
     *   * ## Limits
     *   * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DeleteDBInstancePlanRequest $request DeleteDBInstancePlanRequest
     *
     * @return DeleteDBInstancePlanResponse DeleteDBInstancePlanResponse
     */
    public function deleteDBInstancePlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDBInstancePlanWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDocumentRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteDocumentResponse
     */
    public function deleteDocumentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->collection)) {
            $query['Collection'] = $request->collection;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->fileName)) {
            $query['FileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->namespacePassword)) {
            $query['NamespacePassword'] = $request->namespacePassword;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDocument',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDocumentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteDocumentRequest $request
     *
     * @return DeleteDocumentResponse
     */
    public function deleteDocument($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDocumentWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDocumentCollectionRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteDocumentCollectionResponse
     */
    public function deleteDocumentCollectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->collection)) {
            $query['Collection'] = $request->collection;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->namespacePassword)) {
            $query['NamespacePassword'] = $request->namespacePassword;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDocumentCollection',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDocumentCollectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteDocumentCollectionRequest $request
     *
     * @return DeleteDocumentCollectionResponse
     */
    public function deleteDocumentCollection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDocumentCollectionWithOptions($request, $runtime);
    }

    /**
     * @param DeleteNamespaceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteNamespaceResponse
     */
    public function deleteNamespaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->managerAccount)) {
            $query['ManagerAccount'] = $request->managerAccount;
        }
        if (!Utils::isUnset($request->managerAccountPassword)) {
            $query['ManagerAccountPassword'] = $request->managerAccountPassword;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteNamespace',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteNamespaceRequest $request
     *
     * @return DeleteNamespaceResponse
     */
    public function deleteNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNamespaceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteVectorIndexRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteVectorIndexResponse
     */
    public function deleteVectorIndexWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->collection)) {
            $query['Collection'] = $request->collection;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->managerAccount)) {
            $query['ManagerAccount'] = $request->managerAccount;
        }
        if (!Utils::isUnset($request->managerAccountPassword)) {
            $query['ManagerAccountPassword'] = $request->managerAccountPassword;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteVectorIndex',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteVectorIndexResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteVectorIndexRequest $request
     *
     * @return DeleteVectorIndexResponse
     */
    public function deleteVectorIndex($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVectorIndexWithOptions($request, $runtime);
    }

    /**
     * This operation is called to query the information of the privileged account in an AnalyticDB for PostgreSQL instance, such as its state, description, and the instance.
     *   * ## Limit
     *   * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered and may affect your business. We recommend that you take note of the limit when you call this operation.
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAccounts',
            'version'     => '2016-05-03',
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
     * This operation is called to query the information of the privileged account in an AnalyticDB for PostgreSQL instance, such as its state, description, and the instance.
     *   * ## Limit
     *   * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered and may affect your business. We recommend that you take note of the limit when you call this operation.
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
     * @param DescribeActiveSQLRecordsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeActiveSQLRecordsResponse
     */
    public function describeActiveSQLRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->database)) {
            $query['Database'] = $request->database;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->maxDuration)) {
            $query['MaxDuration'] = $request->maxDuration;
        }
        if (!Utils::isUnset($request->minDuration)) {
            $query['MinDuration'] = $request->minDuration;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
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
            'action'      => 'DescribeActiveSQLRecords',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeActiveSQLRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeActiveSQLRecordsRequest $request
     *
     * @return DescribeActiveSQLRecordsResponse
     */
    public function describeActiveSQLRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeActiveSQLRecordsWithOptions($request, $runtime);
    }

    /**
     * When you create an AnalyticDB for PostgreSQL instance, you can call this operation to query the available resources within a zone.
     *   *
     * @param DescribeAvailableResourcesRequest $request DescribeAvailableResourcesRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAvailableResourcesResponse DescribeAvailableResourcesResponse
     */
    public function describeAvailableResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->chargeType)) {
            $query['ChargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAvailableResources',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAvailableResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * When you create an AnalyticDB for PostgreSQL instance, you can call this operation to query the available resources within a zone.
     *   *
     * @param DescribeAvailableResourcesRequest $request DescribeAvailableResourcesRequest
     *
     * @return DescribeAvailableResourcesResponse DescribeAvailableResourcesResponse
     */
    public function describeAvailableResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAvailableResourcesWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to query the backup settings of an AnalyticDB for PostgreSQL instance in elastic storage mode. Periodically backing data can prevent data loss. For more information about how to modify backup policies, see [ModifyBackupPolicy](~~210095~~).
     *   * ## Limits
     *   * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
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
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeBackupPolicy',
            'version'     => '2016-05-03',
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
     * You can call this operation to query the backup settings of an AnalyticDB for PostgreSQL instance in elastic storage mode. Periodically backing data can prevent data loss. For more information about how to modify backup policies, see [ModifyBackupPolicy](~~210095~~).
     *   * ## Limits
     *   * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
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
     * @param DescribeCollectionRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeCollectionResponse
     */
    public function describeCollectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->collection)) {
            $query['Collection'] = $request->collection;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->namespacePassword)) {
            $query['NamespacePassword'] = $request->namespacePassword;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCollection',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCollectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCollectionRequest $request
     *
     * @return DescribeCollectionResponse
     */
    public function describeCollection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCollectionWithOptions($request, $runtime);
    }

    /**
     * ##
     *   * You can call this operation to query the information about coordinator and compute nodes in an AnalyticDB for PostgreSQL instance in elastic storage mode or Serverless mode.
     *   * ## Limits
     *   * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DescribeDBClusterNodeRequest $request DescribeDBClusterNodeRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBClusterNodeResponse DescribeDBClusterNodeResponse
     */
    public function describeDBClusterNodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->nodeType)) {
            $query['NodeType'] = $request->nodeType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBClusterNode',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBClusterNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ##
     *   * You can call this operation to query the information about coordinator and compute nodes in an AnalyticDB for PostgreSQL instance in elastic storage mode or Serverless mode.
     *   * ## Limits
     *   * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DescribeDBClusterNodeRequest $request DescribeDBClusterNodeRequest
     *
     * @return DescribeDBClusterNodeResponse DescribeDBClusterNodeResponse
     */
    public function describeDBClusterNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClusterNodeWithOptions($request, $runtime);
    }

    /**
     * You can query monitoring information only within the last 30 days.
     *   *
     * @param DescribeDBClusterPerformanceRequest $request DescribeDBClusterPerformanceRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBClusterPerformanceResponse DescribeDBClusterPerformanceResponse
     */
    public function describeDBClusterPerformanceWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->nodeType)) {
            $query['NodeType'] = $request->nodeType;
        }
        if (!Utils::isUnset($request->nodes)) {
            $query['Nodes'] = $request->nodes;
        }
        if (!Utils::isUnset($request->resourceGroupName)) {
            $query['ResourceGroupName'] = $request->resourceGroupName;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBClusterPerformance',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBClusterPerformanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can query monitoring information only within the last 30 days.
     *   *
     * @param DescribeDBClusterPerformanceRequest $request DescribeDBClusterPerformanceRequest
     *
     * @return DescribeDBClusterPerformanceResponse DescribeDBClusterPerformanceResponse
     */
    public function describeDBClusterPerformance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClusterPerformanceWithOptions($request, $runtime);
    }

    /**
     * ##
     *   * You can call this operation to query the information about an AnalyticDB for PostgreSQL instance, such as the instance type, network type, and instance state.
     *   * ## Limits
     *   * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
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
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBInstanceAttribute',
            'version'     => '2016-05-03',
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
     * ##
     *   * You can call this operation to query the information about an AnalyticDB for PostgreSQL instance, such as the instance type, network type, and instance state.
     *   * ## Limits
     *   * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
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
     * You can call this operation to query the details of data bloat on an AnalyticDB for PostgreSQL instance in elastic storage mode. The minor version of the instance must be V6.3.10.1 or later. For more information about how to view and update the minor version of an instance, see [View the minor engine version](~~277424~~) and [Update the minor engine version](~~139271~~).
     *   * ## Limits
     *   * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DescribeDBInstanceDataBloatRequest $request DescribeDBInstanceDataBloatRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBInstanceDataBloatResponse DescribeDBInstanceDataBloatResponse
     */
    public function describeDBInstanceDataBloatWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBInstanceDataBloat',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBInstanceDataBloatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to query the details of data bloat on an AnalyticDB for PostgreSQL instance in elastic storage mode. The minor version of the instance must be V6.3.10.1 or later. For more information about how to view and update the minor version of an instance, see [View the minor engine version](~~277424~~) and [Update the minor engine version](~~139271~~).
     *   * ## Limits
     *   * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DescribeDBInstanceDataBloatRequest $request DescribeDBInstanceDataBloatRequest
     *
     * @return DescribeDBInstanceDataBloatResponse DescribeDBInstanceDataBloatResponse
     */
    public function describeDBInstanceDataBloat($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceDataBloatWithOptions($request, $runtime);
    }

    /**
     * To prevent data skew from affecting your database service, you can call this operation to query the details about data skew on an AnalyticDB for PostgreSQL instance.
     *   * ## Limits
     *   * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DescribeDBInstanceDataSkewRequest $request DescribeDBInstanceDataSkewRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBInstanceDataSkewResponse DescribeDBInstanceDataSkewResponse
     */
    public function describeDBInstanceDataSkewWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBInstanceDataSkew',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBInstanceDataSkewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * To prevent data skew from affecting your database service, you can call this operation to query the details about data skew on an AnalyticDB for PostgreSQL instance.
     *   * ## Limits
     *   * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DescribeDBInstanceDataSkewRequest $request DescribeDBInstanceDataSkewRequest
     *
     * @return DescribeDBInstanceDataSkewResponse DescribeDBInstanceDataSkewResponse
     */
    public function describeDBInstanceDataSkew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceDataSkewWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to query the distribution and states of coordinator and compute nodes in an AnalyticDB for PostgreSQL instance.
     *   *
     * @param DescribeDBInstanceDiagnosisSummaryRequest $request DescribeDBInstanceDiagnosisSummaryRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBInstanceDiagnosisSummaryResponse DescribeDBInstanceDiagnosisSummaryResponse
     */
    public function describeDBInstanceDiagnosisSummaryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->rolePreferd)) {
            $query['RolePreferd'] = $request->rolePreferd;
        }
        if (!Utils::isUnset($request->startStatus)) {
            $query['StartStatus'] = $request->startStatus;
        }
        if (!Utils::isUnset($request->syncMode)) {
            $query['SyncMode'] = $request->syncMode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBInstanceDiagnosisSummary',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBInstanceDiagnosisSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to query the distribution and states of coordinator and compute nodes in an AnalyticDB for PostgreSQL instance.
     *   *
     * @param DescribeDBInstanceDiagnosisSummaryRequest $request DescribeDBInstanceDiagnosisSummaryRequest
     *
     * @return DescribeDBInstanceDiagnosisSummaryResponse DescribeDBInstanceDiagnosisSummaryResponse
     */
    public function describeDBInstanceDiagnosisSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceDiagnosisSummaryWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to query the error logs of an AnalyticDB for PostgreSQL instance.
     *   * ## Limits
     *   * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DescribeDBInstanceErrorLogRequest $request DescribeDBInstanceErrorLogRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBInstanceErrorLogResponse DescribeDBInstanceErrorLogResponse
     */
    public function describeDBInstanceErrorLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->database)) {
            $query['Database'] = $request->database;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->host)) {
            $query['Host'] = $request->host;
        }
        if (!Utils::isUnset($request->keywords)) {
            $query['Keywords'] = $request->keywords;
        }
        if (!Utils::isUnset($request->logLevel)) {
            $query['LogLevel'] = $request->logLevel;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
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
            'action'      => 'DescribeDBInstanceErrorLog',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBInstanceErrorLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to query the error logs of an AnalyticDB for PostgreSQL instance.
     *   * ## Limits
     *   * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DescribeDBInstanceErrorLogRequest $request DescribeDBInstanceErrorLogRequest
     *
     * @return DescribeDBInstanceErrorLogResponse DescribeDBInstanceErrorLogResponse
     */
    public function describeDBInstanceErrorLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceErrorLogWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to query the whitelists of IP addresses that are allowed to access an AnalyticDB for PostgreSQL instance.
     *   * ## Limits
     *   * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
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
        if (!Utils::isUnset($request->DBInstanceIPArrayName)) {
            $query['DBInstanceIPArrayName'] = $request->DBInstanceIPArrayName;
        }
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
            'action'      => 'DescribeDBInstanceIPArrayList',
            'version'     => '2016-05-03',
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
     * You can call this operation to query the whitelists of IP addresses that are allowed to access an AnalyticDB for PostgreSQL instance.
     *   * ## Limits
     *   * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
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
     * Appropriate indexes can accelerate database queries. You can call this operation to query the index usage of an AnalyticDB for PostgreSQL instance.
     *   * This operation is available only for instances of V6.3.10.1 or later in elastic storage mode. For information about how to view and update the minor version of an instance, see [View the minor engine version](~~277424~~) and [Update the minor engine version](~~139271~~).
     *   *
     * @param DescribeDBInstanceIndexUsageRequest $request DescribeDBInstanceIndexUsageRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBInstanceIndexUsageResponse DescribeDBInstanceIndexUsageResponse
     */
    public function describeDBInstanceIndexUsageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBInstanceIndexUsage',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBInstanceIndexUsageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Appropriate indexes can accelerate database queries. You can call this operation to query the index usage of an AnalyticDB for PostgreSQL instance.
     *   * This operation is available only for instances of V6.3.10.1 or later in elastic storage mode. For information about how to view and update the minor version of an instance, see [View the minor engine version](~~277424~~) and [Update the minor engine version](~~139271~~).
     *   *
     * @param DescribeDBInstanceIndexUsageRequest $request DescribeDBInstanceIndexUsageRequest
     *
     * @return DescribeDBInstanceIndexUsageResponse DescribeDBInstanceIndexUsageResponse
     */
    public function describeDBInstanceIndexUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceIndexUsageWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->connectionString)) {
            $query['ConnectionString'] = $request->connectionString;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBInstanceNetInfo',
            'version'     => '2016-05-03',
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
     * @param DescribeDBInstancePerformanceRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeDBInstancePerformanceResponse
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
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBInstancePerformance',
            'version'     => '2016-05-03',
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
     * You can call this operation to query the details of plans for an AnalyticDB for PostgreSQL instance in Serverless mode.
     *   * ## Limits
     *   * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DescribeDBInstancePlansRequest $request DescribeDBInstancePlansRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBInstancePlansResponse DescribeDBInstancePlansResponse
     */
    public function describeDBInstancePlansWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->planCreateDate)) {
            $query['PlanCreateDate'] = $request->planCreateDate;
        }
        if (!Utils::isUnset($request->planDesc)) {
            $query['PlanDesc'] = $request->planDesc;
        }
        if (!Utils::isUnset($request->planId)) {
            $query['PlanId'] = $request->planId;
        }
        if (!Utils::isUnset($request->planScheduleType)) {
            $query['PlanScheduleType'] = $request->planScheduleType;
        }
        if (!Utils::isUnset($request->planType)) {
            $query['PlanType'] = $request->planType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBInstancePlans',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBInstancePlansResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to query the details of plans for an AnalyticDB for PostgreSQL instance in Serverless mode.
     *   * ## Limits
     *   * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DescribeDBInstancePlansRequest $request DescribeDBInstancePlansRequest
     *
     * @return DescribeDBInstancePlansResponse DescribeDBInstancePlansResponse
     */
    public function describeDBInstancePlans($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstancePlansWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBInstanceSSL',
            'version'     => '2016-05-03',
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
     * @param DescribeDBInstanceSupportMaxPerformanceRequest $request
     * @param RuntimeOptions                                 $runtime
     *
     * @return DescribeDBInstanceSupportMaxPerformanceResponse
     */
    public function describeDBInstanceSupportMaxPerformanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBInstanceSupportMaxPerformance',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBInstanceSupportMaxPerformanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDBInstanceSupportMaxPerformanceRequest $request
     *
     * @return DescribeDBInstanceSupportMaxPerformanceResponse
     */
    public function describeDBInstanceSupportMaxPerformance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceSupportMaxPerformanceWithOptions($request, $runtime);
    }

    /**
     * ##
     *   * You can call this operation to query the instance types, network types, and states of AnalyticDB for PostgreSQL instances within a region.
     *   * ## Limits
     *   * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DescribeDBInstancesRequest $tmpReq  DescribeDBInstancesRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBInstancesResponse DescribeDBInstancesResponse
     */
    public function describeDBInstancesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DescribeDBInstancesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->DBInstanceCategories)) {
            $request->DBInstanceCategoriesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->DBInstanceCategories, 'DBInstanceCategories', 'simple');
        }
        if (!Utils::isUnset($tmpReq->DBInstanceModes)) {
            $request->DBInstanceModesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->DBInstanceModes, 'DBInstanceModes', 'simple');
        }
        if (!Utils::isUnset($tmpReq->DBInstanceStatuses)) {
            $request->DBInstanceStatusesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->DBInstanceStatuses, 'DBInstanceStatuses', 'simple');
        }
        if (!Utils::isUnset($tmpReq->instanceDeployTypes)) {
            $request->instanceDeployTypesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->instanceDeployTypes, 'InstanceDeployTypes', 'simple');
        }
        $query = [];
        if (!Utils::isUnset($request->DBInstanceCategoriesShrink)) {
            $query['DBInstanceCategories'] = $request->DBInstanceCategoriesShrink;
        }
        if (!Utils::isUnset($request->DBInstanceDescription)) {
            $query['DBInstanceDescription'] = $request->DBInstanceDescription;
        }
        if (!Utils::isUnset($request->DBInstanceIds)) {
            $query['DBInstanceIds'] = $request->DBInstanceIds;
        }
        if (!Utils::isUnset($request->DBInstanceModesShrink)) {
            $query['DBInstanceModes'] = $request->DBInstanceModesShrink;
        }
        if (!Utils::isUnset($request->DBInstanceStatusesShrink)) {
            $query['DBInstanceStatuses'] = $request->DBInstanceStatusesShrink;
        }
        if (!Utils::isUnset($request->instanceDeployTypesShrink)) {
            $query['InstanceDeployTypes'] = $request->instanceDeployTypesShrink;
        }
        if (!Utils::isUnset($request->instanceNetworkType)) {
            $query['InstanceNetworkType'] = $request->instanceNetworkType;
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
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBInstances',
            'version'     => '2016-05-03',
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
     * ##
     *   * You can call this operation to query the instance types, network types, and states of AnalyticDB for PostgreSQL instances within a region.
     *   * ## Limits
     *   * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
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
     * @param DescribeDBVersionInfosRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeDBVersionInfosResponse
     */
    public function describeDBVersionInfosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceMode)) {
            $query['DBInstanceMode'] = $request->DBInstanceMode;
        }
        if (!Utils::isUnset($request->DBVersion)) {
            $query['DBVersion'] = $request->DBVersion;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBVersionInfos',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBVersionInfosResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDBVersionInfosRequest $request
     *
     * @return DescribeDBVersionInfosResponse
     */
    public function describeDBVersionInfos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBVersionInfosWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to query a list of backup sets and backup details only for instances in elastic storage mode.
     *   *
     * @param DescribeDataBackupsRequest $request DescribeDataBackupsRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDataBackupsResponse DescribeDataBackupsResponse
     */
    public function describeDataBackupsWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->dataType)) {
            $query['DataType'] = $request->dataType;
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
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDataBackups',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDataBackupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to query a list of backup sets and backup details only for instances in elastic storage mode.
     *   *
     * @param DescribeDataBackupsRequest $request DescribeDataBackupsRequest
     *
     * @return DescribeDataBackupsResponse DescribeDataBackupsResponse
     */
    public function describeDataBackups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDataBackupsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDataReDistributeInfoRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeDataReDistributeInfoResponse
     */
    public function describeDataReDistributeInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDataReDistributeInfo',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDataReDistributeInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDataReDistributeInfoRequest $request
     *
     * @return DescribeDataReDistributeInfoResponse
     */
    public function describeDataReDistributeInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDataReDistributeInfoWithOptions($request, $runtime);
    }

    /**
     * Data sharing is supported only for instances in Serverless mode.
     *   *
     * @param DescribeDataShareInstancesRequest $request DescribeDataShareInstancesRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDataShareInstancesResponse DescribeDataShareInstancesResponse
     */
    public function describeDataShareInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
        if (!Utils::isUnset($request->searchValue)) {
            $query['SearchValue'] = $request->searchValue;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDataShareInstances',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDataShareInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Data sharing is supported only for instances in Serverless mode.
     *   *
     * @param DescribeDataShareInstancesRequest $request DescribeDataShareInstancesRequest
     *
     * @return DescribeDataShareInstancesResponse DescribeDataShareInstancesResponse
     */
    public function describeDataShareInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDataShareInstancesWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to query the details of data sharing performance metrics for an AnalyticDB for PostgreSQL instance in Serverless mode, such as the number of shared topics and the amount of data shared.
     *   * ## Limits
     *   * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DescribeDataSharePerformanceRequest $request DescribeDataSharePerformanceRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDataSharePerformanceResponse DescribeDataSharePerformanceResponse
     */
    public function describeDataSharePerformanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->key)) {
            $query['Key'] = $request->key;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDataSharePerformance',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDataSharePerformanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to query the details of data sharing performance metrics for an AnalyticDB for PostgreSQL instance in Serverless mode, such as the number of shared topics and the amount of data shared.
     *   * ## Limits
     *   * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DescribeDataSharePerformanceRequest $request DescribeDataSharePerformanceRequest
     *
     * @return DescribeDataSharePerformanceResponse DescribeDataSharePerformanceResponse
     */
    public function describeDataSharePerformance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDataSharePerformanceWithOptions($request, $runtime);
    }

    /**
     * To facilitate management, you can call this operation to query all databases and database accounts on an AnalyticDB for PostgreSQL instance.
     *   * ## Limits
     *   * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DescribeDiagnosisDimensionsRequest $request DescribeDiagnosisDimensionsRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDiagnosisDimensionsResponse DescribeDiagnosisDimensionsResponse
     */
    public function describeDiagnosisDimensionsWithOptions($request, $runtime)
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
            'action'      => 'DescribeDiagnosisDimensions',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDiagnosisDimensionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * To facilitate management, you can call this operation to query all databases and database accounts on an AnalyticDB for PostgreSQL instance.
     *   * ## Limits
     *   * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DescribeDiagnosisDimensionsRequest $request DescribeDiagnosisDimensionsRequest
     *
     * @return DescribeDiagnosisDimensionsResponse DescribeDiagnosisDimensionsResponse
     */
    public function describeDiagnosisDimensions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDiagnosisDimensionsWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to query the details of query execution on an AnalyticDB for PostgreSQL instance in elastic storage mode within a specified time range.
     *   * ## Limits
     *   * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DescribeDiagnosisMonitorPerformanceRequest $request DescribeDiagnosisMonitorPerformanceRequest
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDiagnosisMonitorPerformanceResponse DescribeDiagnosisMonitorPerformanceResponse
     */
    public function describeDiagnosisMonitorPerformanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->database)) {
            $query['Database'] = $request->database;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->queryCondition)) {
            $query['QueryCondition'] = $request->queryCondition;
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
            'action'      => 'DescribeDiagnosisMonitorPerformance',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDiagnosisMonitorPerformanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to query the details of query execution on an AnalyticDB for PostgreSQL instance in elastic storage mode within a specified time range.
     *   * ## Limits
     *   * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DescribeDiagnosisMonitorPerformanceRequest $request DescribeDiagnosisMonitorPerformanceRequest
     *
     * @return DescribeDiagnosisMonitorPerformanceResponse DescribeDiagnosisMonitorPerformanceResponse
     */
    public function describeDiagnosisMonitorPerformance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDiagnosisMonitorPerformanceWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to query the details of SQL queries on an AnalyticDB for PostgreSQL instance within a specified time range.
     *   * ## Limits
     *   * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DescribeDiagnosisRecordsRequest $request DescribeDiagnosisRecordsRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDiagnosisRecordsResponse DescribeDiagnosisRecordsResponse
     */
    public function describeDiagnosisRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->database)) {
            $query['Database'] = $request->database;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->queryCondition)) {
            $query['QueryCondition'] = $request->queryCondition;
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
            'action'      => 'DescribeDiagnosisRecords',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDiagnosisRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to query the details of SQL queries on an AnalyticDB for PostgreSQL instance within a specified time range.
     *   * ## Limits
     *   * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DescribeDiagnosisRecordsRequest $request DescribeDiagnosisRecordsRequest
     *
     * @return DescribeDiagnosisRecordsResponse DescribeDiagnosisRecordsResponse
     */
    public function describeDiagnosisRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDiagnosisRecordsWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to query the information about a query for an AnalyticDB for PostgreSQL instance, including the SQL statement, execution plan text, and execution plan tree.
     *   * This operation is available only for instances of V6.3.10.1 or later in elastic storage mode. For information about how to view and update the minor version of an instance, see [View the minor engine version](~~277424~~) and [Update the minor engine version](~~139271~~).
     *   *
     * @param DescribeDiagnosisSQLInfoRequest $request DescribeDiagnosisSQLInfoRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDiagnosisSQLInfoResponse DescribeDiagnosisSQLInfoResponse
     */
    public function describeDiagnosisSQLInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->database)) {
            $query['Database'] = $request->database;
        }
        if (!Utils::isUnset($request->queryID)) {
            $query['QueryID'] = $request->queryID;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDiagnosisSQLInfo',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDiagnosisSQLInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to query the information about a query for an AnalyticDB for PostgreSQL instance, including the SQL statement, execution plan text, and execution plan tree.
     *   * This operation is available only for instances of V6.3.10.1 or later in elastic storage mode. For information about how to view and update the minor version of an instance, see [View the minor engine version](~~277424~~) and [Update the minor engine version](~~139271~~).
     *   *
     * @param DescribeDiagnosisSQLInfoRequest $request DescribeDiagnosisSQLInfoRequest
     *
     * @return DescribeDiagnosisSQLInfoResponse DescribeDiagnosisSQLInfoResponse
     */
    public function describeDiagnosisSQLInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDiagnosisSQLInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDocumentRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeDocumentResponse
     */
    public function describeDocumentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->collection)) {
            $query['Collection'] = $request->collection;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->fileName)) {
            $query['FileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->namespacePassword)) {
            $query['NamespacePassword'] = $request->namespacePassword;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDocument',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDocumentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDocumentRequest $request
     *
     * @return DescribeDocumentResponse
     */
    public function describeDocument($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDocumentWithOptions($request, $runtime);
    }

    /**
     * You must call the [DownloadDiagnosisRecords](~~447700~~) operation to download the query diagnostic information before you can call this operation to query the download records and download URLs.
     *   * This operation is available only for instances of V6.3.10.1 or later in elastic storage mode. For information about how to view and update the minor version of an instance, see [View the minor engine version](~~277424~~) and [Update the minor engine version](~~139271~~).
     *   *
     * @param DescribeDownloadRecordsRequest $request DescribeDownloadRecordsRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDownloadRecordsResponse DescribeDownloadRecordsResponse
     */
    public function describeDownloadRecordsWithOptions($request, $runtime)
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
            'action'      => 'DescribeDownloadRecords',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDownloadRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You must call the [DownloadDiagnosisRecords](~~447700~~) operation to download the query diagnostic information before you can call this operation to query the download records and download URLs.
     *   * This operation is available only for instances of V6.3.10.1 or later in elastic storage mode. For information about how to view and update the minor version of an instance, see [View the minor engine version](~~277424~~) and [Update the minor engine version](~~139271~~).
     *   *
     * @param DescribeDownloadRecordsRequest $request DescribeDownloadRecordsRequest
     *
     * @return DescribeDownloadRecordsResponse DescribeDownloadRecordsResponse
     */
    public function describeDownloadRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDownloadRecordsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDownloadSQLLogsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDownloadSQLLogsResponse
     */
    public function describeDownloadSQLLogsWithOptions($request, $runtime)
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
            'action'      => 'DescribeDownloadSQLLogs',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDownloadSQLLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDownloadSQLLogsRequest $request
     *
     * @return DescribeDownloadSQLLogsResponse
     */
    public function describeDownloadSQLLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDownloadSQLLogsWithOptions($request, $runtime);
    }

    /**
     * This operation is called to query the health status of an AnalyticDB for PostgreSQL instance in elastic storage mode or Serverless mode and its coordinator and compute nodes.
     *   * ## Limits
     *   * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DescribeHealthStatusRequest $request DescribeHealthStatusRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeHealthStatusResponse DescribeHealthStatusResponse
     */
    public function describeHealthStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->key)) {
            $query['Key'] = $request->key;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeHealthStatus',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeHealthStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation is called to query the health status of an AnalyticDB for PostgreSQL instance in elastic storage mode or Serverless mode and its coordinator and compute nodes.
     *   * ## Limits
     *   * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DescribeHealthStatusRequest $request DescribeHealthStatusRequest
     *
     * @return DescribeHealthStatusResponse DescribeHealthStatusResponse
     */
    public function describeHealthStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHealthStatusWithOptions($request, $runtime);
    }

    /**
     * @param DescribeIMVInfosRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeIMVInfosResponse
     */
    public function describeIMVInfosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->database)) {
            $query['Database'] = $request->database;
        }
        if (!Utils::isUnset($request->MVName)) {
            $query['MVName'] = $request->MVName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeIMVInfos',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeIMVInfosResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeIMVInfosRequest $request
     *
     * @return DescribeIMVInfosResponse
     */
    public function describeIMVInfos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIMVInfosWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLogBackupsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeLogBackupsResponse
     */
    public function describeLogBackupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLogBackups',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLogBackupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLogBackupsRequest $request
     *
     * @return DescribeLogBackupsResponse
     */
    public function describeLogBackups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLogBackupsWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeModifyParameterLog',
            'version'     => '2016-05-03',
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
     * @param DescribeNamespaceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeNamespaceResponse
     */
    public function describeNamespaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->managerAccount)) {
            $query['ManagerAccount'] = $request->managerAccount;
        }
        if (!Utils::isUnset($request->managerAccountPassword)) {
            $query['ManagerAccountPassword'] = $request->managerAccountPassword;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeNamespace',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeNamespaceRequest $request
     *
     * @return DescribeNamespaceResponse
     */
    public function describeNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNamespaceWithOptions($request, $runtime);
    }

    /**
     * This operation can be called to query the details of parameters in an AnalyticDB for PostgreSQL instance in elastic storage mode or Serverless mode.
     *   * ## Limits
     *   * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered and may affect your business. We recommend that you take note of the limit when you call this operation.
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
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeParameters',
            'version'     => '2016-05-03',
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
     * This operation can be called to query the details of parameters in an AnalyticDB for PostgreSQL instance in elastic storage mode or Serverless mode.
     *   * ## Limits
     *   * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered and may affect your business. We recommend that you take note of the limit when you call this operation.
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
     * When you create AnalyticDB for PostgreSQL instances, you can call this operation to query the details of vSwitches within a specified region or zone.
     *   * ## Limits
     *   * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DescribeRdsVSwitchsRequest $request DescribeRdsVSwitchsRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRdsVSwitchsResponse DescribeRdsVSwitchsResponse
     */
    public function describeRdsVSwitchsWithOptions($request, $runtime)
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
            'action'      => 'DescribeRdsVSwitchs',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRdsVSwitchsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * When you create AnalyticDB for PostgreSQL instances, you can call this operation to query the details of vSwitches within a specified region or zone.
     *   * ## Limits
     *   * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DescribeRdsVSwitchsRequest $request DescribeRdsVSwitchsRequest
     *
     * @return DescribeRdsVSwitchsResponse DescribeRdsVSwitchsResponse
     */
    public function describeRdsVSwitchs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRdsVSwitchsWithOptions($request, $runtime);
    }

    /**
     * When you create an AnalyticDB for PostgreSQL instance, you can call this operation to query the available VPCs within a specified region or zone.
     *   * ## Limits
     *   * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DescribeRdsVpcsRequest $request DescribeRdsVpcsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRdsVpcsResponse DescribeRdsVpcsResponse
     */
    public function describeRdsVpcsWithOptions($request, $runtime)
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
            'action'      => 'DescribeRdsVpcs',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRdsVpcsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * When you create an AnalyticDB for PostgreSQL instance, you can call this operation to query the available VPCs within a specified region or zone.
     *   * ## Limits
     *   * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DescribeRdsVpcsRequest $request DescribeRdsVpcsRequest
     *
     * @return DescribeRdsVpcsResponse DescribeRdsVpcsResponse
     */
    public function describeRdsVpcs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRdsVpcsWithOptions($request, $runtime);
    }

    /**
     * Before you create an AnalyticDB for PostgreSQL instance, you must call this operation to query available regions and zones.
     *   * ## Limit
     *   * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered and may affect your business. We recommend that you take note of the limit when you call this operation.
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
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRegions',
            'version'     => '2016-05-03',
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
     * Before you create an AnalyticDB for PostgreSQL instance, you must call this operation to query available regions and zones.
     *   * ## Limit
     *   * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered and may affect your business. We recommend that you take note of the limit when you call this operation.
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
     * This operation is not available for instances in reserved storage mode.
     *   *
     * @param DescribeSQLLogCountRequest $request DescribeSQLLogCountRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSQLLogCountResponse DescribeSQLLogCountResponse
     */
    public function describeSQLLogCountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->database)) {
            $query['Database'] = $request->database;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->executeCost)) {
            $query['ExecuteCost'] = $request->executeCost;
        }
        if (!Utils::isUnset($request->executeState)) {
            $query['ExecuteState'] = $request->executeState;
        }
        if (!Utils::isUnset($request->maxExecuteCost)) {
            $query['MaxExecuteCost'] = $request->maxExecuteCost;
        }
        if (!Utils::isUnset($request->minExecuteCost)) {
            $query['MinExecuteCost'] = $request->minExecuteCost;
        }
        if (!Utils::isUnset($request->operationClass)) {
            $query['OperationClass'] = $request->operationClass;
        }
        if (!Utils::isUnset($request->operationType)) {
            $query['OperationType'] = $request->operationType;
        }
        if (!Utils::isUnset($request->queryKeywords)) {
            $query['QueryKeywords'] = $request->queryKeywords;
        }
        if (!Utils::isUnset($request->sourceIP)) {
            $query['SourceIP'] = $request->sourceIP;
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
            'action'      => 'DescribeSQLLogCount',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSQLLogCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation is not available for instances in reserved storage mode.
     *   *
     * @param DescribeSQLLogCountRequest $request DescribeSQLLogCountRequest
     *
     * @return DescribeSQLLogCountResponse DescribeSQLLogCountResponse
     */
    public function describeSQLLogCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSQLLogCountWithOptions($request, $runtime);
    }

    /**
     * > This operation is no longer used. To query SQL execution logs, call the [DescribeSQLLogsV2](~~453722~~) operation.
     *   *
     * @param DescribeSQLLogsRequest $request DescribeSQLLogsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSQLLogsResponse DescribeSQLLogsResponse
     */
    public function describeSQLLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->database)) {
            $query['Database'] = $request->database;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->executeCost)) {
            $query['ExecuteCost'] = $request->executeCost;
        }
        if (!Utils::isUnset($request->executeState)) {
            $query['ExecuteState'] = $request->executeState;
        }
        if (!Utils::isUnset($request->maxExecuteCost)) {
            $query['MaxExecuteCost'] = $request->maxExecuteCost;
        }
        if (!Utils::isUnset($request->minExecuteCost)) {
            $query['MinExecuteCost'] = $request->minExecuteCost;
        }
        if (!Utils::isUnset($request->operationClass)) {
            $query['OperationClass'] = $request->operationClass;
        }
        if (!Utils::isUnset($request->operationType)) {
            $query['OperationType'] = $request->operationType;
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
        if (!Utils::isUnset($request->sourceIP)) {
            $query['SourceIP'] = $request->sourceIP;
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
            'action'      => 'DescribeSQLLogs',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSQLLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > This operation is no longer used. To query SQL execution logs, call the [DescribeSQLLogsV2](~~453722~~) operation.
     *   *
     * @param DescribeSQLLogsRequest $request DescribeSQLLogsRequest
     *
     * @return DescribeSQLLogsResponse DescribeSQLLogsResponse
     */
    public function describeSQLLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSQLLogsWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to query SQL logs of an AnalyticDB for PostgreSQL instance within a specific time range.
     *   * ## Limits
     *   * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DescribeSQLLogsV2Request $request DescribeSQLLogsV2Request
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSQLLogsV2Response DescribeSQLLogsV2Response
     */
    public function describeSQLLogsV2WithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->database)) {
            $query['Database'] = $request->database;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->executeCost)) {
            $query['ExecuteCost'] = $request->executeCost;
        }
        if (!Utils::isUnset($request->executeState)) {
            $query['ExecuteState'] = $request->executeState;
        }
        if (!Utils::isUnset($request->maxExecuteCost)) {
            $query['MaxExecuteCost'] = $request->maxExecuteCost;
        }
        if (!Utils::isUnset($request->minExecuteCost)) {
            $query['MinExecuteCost'] = $request->minExecuteCost;
        }
        if (!Utils::isUnset($request->operationClass)) {
            $query['OperationClass'] = $request->operationClass;
        }
        if (!Utils::isUnset($request->operationType)) {
            $query['OperationType'] = $request->operationType;
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->sourceIP)) {
            $query['SourceIP'] = $request->sourceIP;
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
            'action'      => 'DescribeSQLLogsV2',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSQLLogsV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to query SQL logs of an AnalyticDB for PostgreSQL instance within a specific time range.
     *   * ## Limits
     *   * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DescribeSQLLogsV2Request $request DescribeSQLLogsV2Request
     *
     * @return DescribeSQLLogsV2Response DescribeSQLLogsV2Response
     */
    public function describeSQLLogsV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSQLLogsV2WithOptions($request, $runtime);
    }

    /**
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DescribeSampleDataRequest $request DescribeSampleDataRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSampleDataResponse DescribeSampleDataResponse
     */
    public function describeSampleDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSampleData',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSampleDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DescribeSampleDataRequest $request DescribeSampleDataRequest
     *
     * @return DescribeSampleDataResponse DescribeSampleDataResponse
     */
    public function describeSampleData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSampleDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSupportFeaturesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeSupportFeaturesResponse
     */
    public function describeSupportFeaturesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSupportFeatures',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSupportFeaturesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSupportFeaturesRequest $request
     *
     * @return DescribeSupportFeaturesResponse
     */
    public function describeSupportFeatures($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSupportFeaturesWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTags',
            'version'     => '2016-05-03',
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
     * @param DescribeUserEncryptionKeyListRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeUserEncryptionKeyListResponse
     */
    public function describeUserEncryptionKeyListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeUserEncryptionKeyList',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeUserEncryptionKeyListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeUserEncryptionKeyListRequest $request
     *
     * @return DescribeUserEncryptionKeyListResponse
     */
    public function describeUserEncryptionKeyList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserEncryptionKeyListWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to query the details of a lock-waiting query only for an AnalyticDB for PostgreSQL V6.0 instance in elastic storage mode.
     *   * ## Limits
     *   * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DescribeWaitingSQLInfoRequest $request DescribeWaitingSQLInfoRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeWaitingSQLInfoResponse DescribeWaitingSQLInfoResponse
     */
    public function describeWaitingSQLInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->database)) {
            $query['Database'] = $request->database;
        }
        if (!Utils::isUnset($request->PID)) {
            $query['PID'] = $request->PID;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeWaitingSQLInfo',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeWaitingSQLInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to query the details of a lock-waiting query only for an AnalyticDB for PostgreSQL V6.0 instance in elastic storage mode.
     *   * ## Limits
     *   * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DescribeWaitingSQLInfoRequest $request DescribeWaitingSQLInfoRequest
     *
     * @return DescribeWaitingSQLInfoResponse DescribeWaitingSQLInfoResponse
     */
    public function describeWaitingSQLInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWaitingSQLInfoWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to query the lock diagnostics records only for an AnalyticDB for PostgreSQL V6.0 instance in elastic storage mode.
     *   * ## Limits
     *   * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DescribeWaitingSQLRecordsRequest $request DescribeWaitingSQLRecordsRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeWaitingSQLRecordsResponse DescribeWaitingSQLRecordsResponse
     */
    public function describeWaitingSQLRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->database)) {
            $query['Database'] = $request->database;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->queryCondition)) {
            $query['QueryCondition'] = $request->queryCondition;
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
            'action'      => 'DescribeWaitingSQLRecords',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeWaitingSQLRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to query the lock diagnostics records only for an AnalyticDB for PostgreSQL V6.0 instance in elastic storage mode.
     *   * ## Limits
     *   * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DescribeWaitingSQLRecordsRequest $request DescribeWaitingSQLRecordsRequest
     *
     * @return DescribeWaitingSQLRecordsResponse DescribeWaitingSQLRecordsResponse
     */
    public function describeWaitingSQLRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWaitingSQLRecordsWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to download the query diagnostic information of an AnalyticDB for PostgreSQL instance. After the download is complete, you can call the [DescribeDownloadRecords](~~447712~~) operation to query download records and download URLs.
     *   * This operation is available only for instances of V6.3.10.1 or later in elastic storage mode. For more information about how to view and update the minor engine version of an instance, see [View the minor engine version](~~277424~~) and [Update the minor engine version](~~139271~~).
     *   * ## Limits
     *   * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DownloadDiagnosisRecordsRequest $request DownloadDiagnosisRecordsRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DownloadDiagnosisRecordsResponse DownloadDiagnosisRecordsResponse
     */
    public function downloadDiagnosisRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->database)) {
            $query['Database'] = $request->database;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->queryCondition)) {
            $query['QueryCondition'] = $request->queryCondition;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
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
            'action'      => 'DownloadDiagnosisRecords',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DownloadDiagnosisRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to download the query diagnostic information of an AnalyticDB for PostgreSQL instance. After the download is complete, you can call the [DescribeDownloadRecords](~~447712~~) operation to query download records and download URLs.
     *   * This operation is available only for instances of V6.3.10.1 or later in elastic storage mode. For more information about how to view and update the minor engine version of an instance, see [View the minor engine version](~~277424~~) and [Update the minor engine version](~~139271~~).
     *   * ## Limits
     *   * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DownloadDiagnosisRecordsRequest $request DownloadDiagnosisRecordsRequest
     *
     * @return DownloadDiagnosisRecordsResponse DownloadDiagnosisRecordsResponse
     */
    public function downloadDiagnosisRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->downloadDiagnosisRecordsWithOptions($request, $runtime);
    }

    /**
     * @param DownloadSQLLogsRecordsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DownloadSQLLogsRecordsResponse
     */
    public function downloadSQLLogsRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->database)) {
            $query['Database'] = $request->database;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->executeCost)) {
            $query['ExecuteCost'] = $request->executeCost;
        }
        if (!Utils::isUnset($request->executeState)) {
            $query['ExecuteState'] = $request->executeState;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->maxExecuteCost)) {
            $query['MaxExecuteCost'] = $request->maxExecuteCost;
        }
        if (!Utils::isUnset($request->minExecuteCost)) {
            $query['MinExecuteCost'] = $request->minExecuteCost;
        }
        if (!Utils::isUnset($request->operationClass)) {
            $query['OperationClass'] = $request->operationClass;
        }
        if (!Utils::isUnset($request->operationType)) {
            $query['OperationType'] = $request->operationType;
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
        if (!Utils::isUnset($request->sourceIP)) {
            $query['SourceIP'] = $request->sourceIP;
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
            'action'      => 'DownloadSQLLogsRecords',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DownloadSQLLogsRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DownloadSQLLogsRecordsRequest $request
     *
     * @return DownloadSQLLogsRecordsResponse
     */
    public function downloadSQLLogsRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->downloadSQLLogsRecordsWithOptions($request, $runtime);
    }

    /**
     * @param GrantCollectionRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GrantCollectionResponse
     */
    public function grantCollectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->collection)) {
            $query['Collection'] = $request->collection;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->grantToNamespace)) {
            $query['GrantToNamespace'] = $request->grantToNamespace;
        }
        if (!Utils::isUnset($request->grantType)) {
            $query['GrantType'] = $request->grantType;
        }
        if (!Utils::isUnset($request->managerAccount)) {
            $query['ManagerAccount'] = $request->managerAccount;
        }
        if (!Utils::isUnset($request->managerAccountPassword)) {
            $query['ManagerAccountPassword'] = $request->managerAccountPassword;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GrantCollection',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GrantCollectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GrantCollectionRequest $request
     *
     * @return GrantCollectionResponse
     */
    public function grantCollection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->grantCollectionWithOptions($request, $runtime);
    }

    /**
     * @param HandleActiveSQLRecordRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return HandleActiveSQLRecordResponse
     */
    public function handleActiveSQLRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->operateType)) {
            $query['OperateType'] = $request->operateType;
        }
        if (!Utils::isUnset($request->pids)) {
            $query['Pids'] = $request->pids;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'HandleActiveSQLRecord',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return HandleActiveSQLRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param HandleActiveSQLRecordRequest $request
     *
     * @return HandleActiveSQLRecordResponse
     */
    public function handleActiveSQLRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->handleActiveSQLRecordWithOptions($request, $runtime);
    }

    /**
     * @param InitVectorDatabaseRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return InitVectorDatabaseResponse
     */
    public function initVectorDatabaseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->managerAccount)) {
            $query['ManagerAccount'] = $request->managerAccount;
        }
        if (!Utils::isUnset($request->managerAccountPassword)) {
            $query['ManagerAccountPassword'] = $request->managerAccountPassword;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'InitVectorDatabase',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InitVectorDatabaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param InitVectorDatabaseRequest $request
     *
     * @return InitVectorDatabaseResponse
     */
    public function initVectorDatabase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->initVectorDatabaseWithOptions($request, $runtime);
    }

    /**
     * @param ListCollectionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListCollectionsResponse
     */
    public function listCollectionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->namespacePassword)) {
            $query['NamespacePassword'] = $request->namespacePassword;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCollections',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCollectionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListCollectionsRequest $request
     *
     * @return ListCollectionsResponse
     */
    public function listCollections($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCollectionsWithOptions($request, $runtime);
    }

    /**
     * @param ListDocumentCollectionsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListDocumentCollectionsResponse
     */
    public function listDocumentCollectionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->namespacePassword)) {
            $query['NamespacePassword'] = $request->namespacePassword;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDocumentCollections',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDocumentCollectionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDocumentCollectionsRequest $request
     *
     * @return ListDocumentCollectionsResponse
     */
    public function listDocumentCollections($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDocumentCollectionsWithOptions($request, $runtime);
    }

    /**
     * @param ListDocumentsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListDocumentsResponse
     */
    public function listDocumentsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->collection)) {
            $query['Collection'] = $request->collection;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->namespacePassword)) {
            $query['NamespacePassword'] = $request->namespacePassword;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDocuments',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDocumentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDocumentsRequest $request
     *
     * @return ListDocumentsResponse
     */
    public function listDocuments($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDocumentsWithOptions($request, $runtime);
    }

    /**
     * @param ListNamespacesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListNamespacesResponse
     */
    public function listNamespacesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->managerAccount)) {
            $query['ManagerAccount'] = $request->managerAccount;
        }
        if (!Utils::isUnset($request->managerAccountPassword)) {
            $query['ManagerAccountPassword'] = $request->managerAccountPassword;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListNamespaces',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListNamespacesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListNamespacesRequest $request
     *
     * @return ListNamespacesResponse
     */
    public function listNamespaces($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNamespacesWithOptions($request, $runtime);
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
            'action'      => 'ListTagResources',
            'version'     => '2016-05-03',
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
     * @param ModifyAccountDescriptionRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyAccountDescriptionResponse
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyAccountDescription',
            'version'     => '2016-05-03',
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
     * @param ModifyBackupPolicyRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyBackupPolicyResponse
     */
    public function modifyBackupPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupRetentionPeriod)) {
            $query['BackupRetentionPeriod'] = $request->backupRetentionPeriod;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->enableRecoveryPoint)) {
            $query['EnableRecoveryPoint'] = $request->enableRecoveryPoint;
        }
        if (!Utils::isUnset($request->preferredBackupPeriod)) {
            $query['PreferredBackupPeriod'] = $request->preferredBackupPeriod;
        }
        if (!Utils::isUnset($request->preferredBackupTime)) {
            $query['PreferredBackupTime'] = $request->preferredBackupTime;
        }
        if (!Utils::isUnset($request->recoveryPointPeriod)) {
            $query['RecoveryPointPeriod'] = $request->recoveryPointPeriod;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyBackupPolicy',
            'version'     => '2016-05-03',
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
     * @param ModifyDBInstanceConfigRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyDBInstanceConfigResponse
     */
    public function modifyDBInstanceConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceDescription)) {
            $query['DBInstanceDescription'] = $request->DBInstanceDescription;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->idleTime)) {
            $query['IdleTime'] = $request->idleTime;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->serverlessResource)) {
            $query['ServerlessResource'] = $request->serverlessResource;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDBInstanceConfig',
            'version'     => '2016-05-03',
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
     * @param ModifyDBInstanceConnectionStringRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return ModifyDBInstanceConnectionStringResponse
     */
    public function modifyDBInstanceConnectionStringWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->connectionStringPrefix)) {
            $query['ConnectionStringPrefix'] = $request->connectionStringPrefix;
        }
        if (!Utils::isUnset($request->currentConnectionString)) {
            $query['CurrentConnectionString'] = $request->currentConnectionString;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->port)) {
            $query['Port'] = $request->port;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDBInstanceConnectionString',
            'version'     => '2016-05-03',
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
     * To make it easy to identify AnalyticDB for PostgreSQL instances, you can call this operation to modify the description of instances.
     *   * ## Limits
     *   * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param ModifyDBInstanceDescriptionRequest $request ModifyDBInstanceDescriptionRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBInstanceDescriptionResponse ModifyDBInstanceDescriptionResponse
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
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDBInstanceDescription',
            'version'     => '2016-05-03',
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
     * To make it easy to identify AnalyticDB for PostgreSQL instances, you can call this operation to modify the description of instances.
     *   * ## Limits
     *   * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param ModifyDBInstanceDescriptionRequest $request ModifyDBInstanceDescriptionRequest
     *
     * @return ModifyDBInstanceDescriptionResponse ModifyDBInstanceDescriptionResponse
     */
    public function modifyDBInstanceDescription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceDescriptionWithOptions($request, $runtime);
    }

    /**
     * The system maintains AnalyticDB for PostgreSQL instances during the maintenance window that you specify. We recommend that you set the maintenance window to off-peak hours to minimize the impact on your business.
     *   * ## Limits
     *   * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
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
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDBInstanceMaintainTime',
            'version'     => '2016-05-03',
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
     * The system maintains AnalyticDB for PostgreSQL instances during the maintenance window that you specify. We recommend that you set the maintenance window to off-peak hours to minimize the impact on your business.
     *   * ## Limits
     *   * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
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
     * Resource Management allows you to build an organizational structure for resources based on your business requirements. You can use resource directories, folders, accounts, and resource groups to hierarchically organize and manage resources. For more information, see [What is Resource Management?](~~94475~~).
     *   *
     * @param ModifyDBInstanceResourceGroupRequest $request ModifyDBInstanceResourceGroupRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBInstanceResourceGroupResponse ModifyDBInstanceResourceGroupResponse
     */
    public function modifyDBInstanceResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->newResourceGroupId)) {
            $query['NewResourceGroupId'] = $request->newResourceGroupId;
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
            'action'      => 'ModifyDBInstanceResourceGroup',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBInstanceResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Resource Management allows you to build an organizational structure for resources based on your business requirements. You can use resource directories, folders, accounts, and resource groups to hierarchically organize and manage resources. For more information, see [What is Resource Management?](~~94475~~).
     *   *
     * @param ModifyDBInstanceResourceGroupRequest $request ModifyDBInstanceResourceGroupRequest
     *
     * @return ModifyDBInstanceResourceGroupResponse ModifyDBInstanceResourceGroupResponse
     */
    public function modifyDBInstanceResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceResourceGroupWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->connectionString)) {
            $query['ConnectionString'] = $request->connectionString;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->SSLEnabled)) {
            $query['SSLEnabled'] = $request->SSLEnabled;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDBInstanceSSL',
            'version'     => '2016-05-03',
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
     * @param ModifyMasterSpecRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyMasterSpecResponse
     */
    public function modifyMasterSpecWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceDescription)) {
            $query['DBInstanceDescription'] = $request->DBInstanceDescription;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->masterCU)) {
            $query['MasterCU'] = $request->masterCU;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyMasterSpec',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyMasterSpecResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyMasterSpecRequest $request
     *
     * @return ModifyMasterSpecResponse
     */
    public function modifyMasterSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyMasterSpecWithOptions($request, $runtime);
    }

    /**
     * This operation can be called to modify parameters of an AnalyticDB for PostgreSQL instance in elastic storage mode or Serverless mode.
     *   * ## Limits
     *   * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered and may affect your business. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param ModifyParametersRequest $request ModifyParametersRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyParametersResponse ModifyParametersResponse
     */
    public function modifyParametersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->forceRestartInstance)) {
            $query['ForceRestartInstance'] = $request->forceRestartInstance;
        }
        if (!Utils::isUnset($request->parameters)) {
            $query['Parameters'] = $request->parameters;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyParameters',
            'version'     => '2016-05-03',
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
     * This operation can be called to modify parameters of an AnalyticDB for PostgreSQL instance in elastic storage mode or Serverless mode.
     *   * ## Limits
     *   * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered and may affect your business. We recommend that you take note of the limit when you call this operation.
     *   *
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
     * @param ModifySQLCollectorPolicyRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifySQLCollectorPolicyResponse
     */
    public function modifySQLCollectorPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->SQLCollectorStatus)) {
            $query['SQLCollectorStatus'] = $request->SQLCollectorStatus;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifySQLCollectorPolicy',
            'version'     => '2016-05-03',
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
     * To ensure the security and stability of AnalyticDB for PostgreSQL instances, the system denies all external IP addresses to access AnalyticDB for PostgreSQL instances by default. Before you can use an AnalyticDB for PostgreSQL instance, you must add the IP address or CIDR block of your client to the IP address whitelist of the instance.
     *   * ## Limits
     *   * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
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
        if (!Utils::isUnset($request->modifyMode)) {
            $query['ModifyMode'] = $request->modifyMode;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->securityIPList)) {
            $query['SecurityIPList'] = $request->securityIPList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifySecurityIps',
            'version'     => '2016-05-03',
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
     * To ensure the security and stability of AnalyticDB for PostgreSQL instances, the system denies all external IP addresses to access AnalyticDB for PostgreSQL instances by default. Before you can use an AnalyticDB for PostgreSQL instance, you must add the IP address or CIDR block of your client to the IP address whitelist of the instance.
     *   * ## Limits
     *   * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
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
     * @param ModifyVectorConfigurationRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyVectorConfigurationResponse
     */
    public function modifyVectorConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->vectorConfigurationStatus)) {
            $query['VectorConfigurationStatus'] = $request->vectorConfigurationStatus;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyVectorConfiguration',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyVectorConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyVectorConfigurationRequest $request
     *
     * @return ModifyVectorConfigurationResponse
     */
    public function modifyVectorConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyVectorConfigurationWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to pause an AnalyticDB for PostgreSQL instance that is in the **Running** state.
     *   * This operation is available only for AnalyticDB for PostgreSQL instances in Serverless mode that run V1.0.2.1 or later. For more information about how to view and update the minor engine version of an instance, see [View the minor engine version](~~277424~~) and [Update the minor engine version](~~139271~~).
     *   * >  Before you call this operation, make sure that you are familiar with the billing methods and pricing of AnalyticDB for PostgreSQL instances. For more information, see [Billing methods](~~35406~~) and [AnalyticDB for PostgreSQL pricing](https://www.alibabacloud.com/zh/product/hybriddb-postgresql/pricing).
     *   * ## Limits
     *   * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param PauseInstanceRequest $request PauseInstanceRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return PauseInstanceResponse PauseInstanceResponse
     */
    public function pauseInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PauseInstance',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PauseInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to pause an AnalyticDB for PostgreSQL instance that is in the **Running** state.
     *   * This operation is available only for AnalyticDB for PostgreSQL instances in Serverless mode that run V1.0.2.1 or later. For more information about how to view and update the minor engine version of an instance, see [View the minor engine version](~~277424~~) and [Update the minor engine version](~~139271~~).
     *   * >  Before you call this operation, make sure that you are familiar with the billing methods and pricing of AnalyticDB for PostgreSQL instances. For more information, see [Billing methods](~~35406~~) and [AnalyticDB for PostgreSQL pricing](https://www.alibabacloud.com/zh/product/hybriddb-postgresql/pricing).
     *   * ## Limits
     *   * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param PauseInstanceRequest $request PauseInstanceRequest
     *
     * @return PauseInstanceResponse PauseInstanceResponse
     */
    public function pauseInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pauseInstanceWithOptions($request, $runtime);
    }

    /**
     * @param QueryCollectionDataRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return QueryCollectionDataResponse
     */
    public function queryCollectionDataWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryCollectionDataShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->vector)) {
            $request->vectorShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->vector, 'Vector', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->collection)) {
            $query['Collection'] = $request->collection;
        }
        if (!Utils::isUnset($request->content)) {
            $query['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->filter)) {
            $query['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->includeValues)) {
            $query['IncludeValues'] = $request->includeValues;
        }
        if (!Utils::isUnset($request->metrics)) {
            $query['Metrics'] = $request->metrics;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->namespacePassword)) {
            $query['NamespacePassword'] = $request->namespacePassword;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->topK)) {
            $query['TopK'] = $request->topK;
        }
        if (!Utils::isUnset($request->vectorShrink)) {
            $query['Vector'] = $request->vectorShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryCollectionData',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryCollectionDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryCollectionDataRequest $request
     *
     * @return QueryCollectionDataResponse
     */
    public function queryCollectionData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCollectionDataWithOptions($request, $runtime);
    }

    /**
     * @param QueryContentRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return QueryContentResponse
     */
    public function queryContentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->collection)) {
            $query['Collection'] = $request->collection;
        }
        if (!Utils::isUnset($request->content)) {
            $query['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->filter)) {
            $query['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->metrics)) {
            $query['Metrics'] = $request->metrics;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->namespacePassword)) {
            $query['NamespacePassword'] = $request->namespacePassword;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->topK)) {
            $query['TopK'] = $request->topK;
        }
        if (!Utils::isUnset($request->useFullTextRetrieval)) {
            $query['UseFullTextRetrieval'] = $request->useFullTextRetrieval;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryContent',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryContentRequest $request
     *
     * @return QueryContentResponse
     */
    public function queryContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryContentWithOptions($request, $runtime);
    }

    /**
     * @param RebalanceDBInstanceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RebalanceDBInstanceResponse
     */
    public function rebalanceDBInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RebalanceDBInstance',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RebalanceDBInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RebalanceDBInstanceRequest $request
     *
     * @return RebalanceDBInstanceResponse
     */
    public function rebalanceDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rebalanceDBInstanceWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->addressType)) {
            $query['AddressType'] = $request->addressType;
        }
        if (!Utils::isUnset($request->currentConnectionString)) {
            $query['CurrentConnectionString'] = $request->currentConnectionString;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReleaseInstancePublicConnection',
            'version'     => '2016-05-03',
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
     * @param ResetAccountPasswordRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ResetAccountPasswordResponse
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResetAccountPassword',
            'version'     => '2016-05-03',
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
     * @param ResetIMVMonitorDataRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ResetIMVMonitorDataResponse
     */
    public function resetIMVMonitorDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->database)) {
            $query['Database'] = $request->database;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResetIMVMonitorData',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResetIMVMonitorDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ResetIMVMonitorDataRequest $request
     *
     * @return ResetIMVMonitorDataResponse
     */
    public function resetIMVMonitorData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetIMVMonitorDataWithOptions($request, $runtime);
    }

    /**
     * A restart takes about 3 to 30 minutes. During the restart, services are unavailable. We recommend that you restart the instance during off-peak hours. After the instance is restarted and enters the running state, you can access the instance.
     *   * ## Limit
     *   * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered and may affect your business. We recommend that you take note of the limit when you call this operation.
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RestartDBInstance',
            'version'     => '2016-05-03',
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
     * A restart takes about 3 to 30 minutes. During the restart, services are unavailable. We recommend that you restart the instance during off-peak hours. After the instance is restarted and enters the running state, you can access the instance.
     *   * ## Limit
     *   * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered and may affect your business. We recommend that you take note of the limit when you call this operation.
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
     * You can call this operation to resume an AnalyticDB for PostgreSQL instance that is in the **Paused** state.
     *   * This operation is available only for AnalyticDB for PostgreSQL instances in Serverless mode that run V1.0.2.1 or later. For more information about how to view and update the minor engine version of an instance, see [View the minor engine version](~~277424~~) and [Update the minor engine version](~~139271~~).
     *   * >  Before you call this operation, make sure that you are familiar with the billing methods and pricing of AnalyticDB for PostgreSQL instances. For more information, see [Billing methods](~~35406~~) and [AnalyticDB for PostgreSQL pricing](https://www.alibabacloud.com/zh/product/hybriddb-postgresql/pricing).
     *   * ## Limits
     *   * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param ResumeInstanceRequest $request ResumeInstanceRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ResumeInstanceResponse ResumeInstanceResponse
     */
    public function resumeInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResumeInstance',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResumeInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to resume an AnalyticDB for PostgreSQL instance that is in the **Paused** state.
     *   * This operation is available only for AnalyticDB for PostgreSQL instances in Serverless mode that run V1.0.2.1 or later. For more information about how to view and update the minor engine version of an instance, see [View the minor engine version](~~277424~~) and [Update the minor engine version](~~139271~~).
     *   * >  Before you call this operation, make sure that you are familiar with the billing methods and pricing of AnalyticDB for PostgreSQL instances. For more information, see [Billing methods](~~35406~~) and [AnalyticDB for PostgreSQL pricing](https://www.alibabacloud.com/zh/product/hybriddb-postgresql/pricing).
     *   * ## Limits
     *   * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param ResumeInstanceRequest $request ResumeInstanceRequest
     *
     * @return ResumeInstanceResponse ResumeInstanceResponse
     */
    public function resumeInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resumeInstanceWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to enable or disable a specified plan. The plan management feature is supported only for AnalyticDB for PostgreSQL instances in Serverless mode.
     *   * ## Limits
     *   * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param SetDBInstancePlanStatusRequest $request SetDBInstancePlanStatusRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return SetDBInstancePlanStatusResponse SetDBInstancePlanStatusResponse
     */
    public function setDBInstancePlanStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->planId)) {
            $query['PlanId'] = $request->planId;
        }
        if (!Utils::isUnset($request->planStatus)) {
            $query['PlanStatus'] = $request->planStatus;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetDBInstancePlanStatus',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetDBInstancePlanStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to enable or disable a specified plan. The plan management feature is supported only for AnalyticDB for PostgreSQL instances in Serverless mode.
     *   * ## Limits
     *   * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param SetDBInstancePlanStatusRequest $request SetDBInstancePlanStatusRequest
     *
     * @return SetDBInstancePlanStatusResponse SetDBInstancePlanStatusResponse
     */
    public function setDBInstancePlanStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDBInstancePlanStatusWithOptions($request, $runtime);
    }

    /**
     * This operation is called to enable or disable data sharing for an AnalyticDB for PostgreSQL instance in Serverless mode.
     *   * ## Limits
     *   * You can call this operation up to 1,000 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation.
     *   *
     * @param SetDataShareInstanceRequest $tmpReq  SetDataShareInstanceRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return SetDataShareInstanceResponse SetDataShareInstanceResponse
     */
    public function setDataShareInstanceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SetDataShareInstanceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->instanceList)) {
            $request->instanceListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->instanceList, 'InstanceList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->instanceListShrink)) {
            $query['InstanceList'] = $request->instanceListShrink;
        }
        if (!Utils::isUnset($request->operationType)) {
            $query['OperationType'] = $request->operationType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetDataShareInstance',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetDataShareInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation is called to enable or disable data sharing for an AnalyticDB for PostgreSQL instance in Serverless mode.
     *   * ## Limits
     *   * You can call this operation up to 1,000 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation.
     *   *
     * @param SetDataShareInstanceRequest $request SetDataShareInstanceRequest
     *
     * @return SetDataShareInstanceResponse SetDataShareInstanceResponse
     */
    public function setDataShareInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDataShareInstanceWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->connectionStringPrefix)) {
            $query['ConnectionStringPrefix'] = $request->connectionStringPrefix;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->port)) {
            $query['Port'] = $request->port;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SwitchDBInstanceNetType',
            'version'     => '2016-05-03',
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
     * @param TagResourcesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
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
            'action'      => 'TagResources',
            'version'     => '2016-05-03',
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
     * You can call this operation to release a sample dataset from an AnalyticDB for PostgreSQL instance. You must have already loaded the sample dataset.
     *   * ## Limits
     *   * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param UnloadSampleDataRequest $request UnloadSampleDataRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return UnloadSampleDataResponse UnloadSampleDataResponse
     */
    public function unloadSampleDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UnloadSampleData',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnloadSampleDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to release a sample dataset from an AnalyticDB for PostgreSQL instance. You must have already loaded the sample dataset.
     *   * ## Limits
     *   * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param UnloadSampleDataRequest $request UnloadSampleDataRequest
     *
     * @return UnloadSampleDataResponse UnloadSampleDataResponse
     */
    public function unloadSampleData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unloadSampleDataWithOptions($request, $runtime);
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
            'action'      => 'UntagResources',
            'version'     => '2016-05-03',
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
     * @param UpdateCollectionDataMetadataRequest $tmpReq
     * @param RuntimeOptions                      $runtime
     *
     * @return UpdateCollectionDataMetadataResponse
     */
    public function updateCollectionDataMetadataWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateCollectionDataMetadataShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->ids)) {
            $request->idsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->ids, 'Ids', 'json');
        }
        if (!Utils::isUnset($tmpReq->metadata)) {
            $request->metadataShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->metadata, 'Metadata', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->collection)) {
            $query['Collection'] = $request->collection;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->filter)) {
            $query['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->idsShrink)) {
            $query['Ids'] = $request->idsShrink;
        }
        if (!Utils::isUnset($request->metadataShrink)) {
            $query['Metadata'] = $request->metadataShrink;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->namespacePassword)) {
            $query['NamespacePassword'] = $request->namespacePassword;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateCollectionDataMetadata',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateCollectionDataMetadataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateCollectionDataMetadataRequest $request
     *
     * @return UpdateCollectionDataMetadataResponse
     */
    public function updateCollectionDataMetadata($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCollectionDataMetadataWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to modify a plan for an AnalyticDB for PostgreSQL instance in Serverless mode. For example, you can modify a plan for periodically pausing and resuming an instance or scaling an instance.
     *   * ## Limits
     *   * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param UpdateDBInstancePlanRequest $request UpdateDBInstancePlanRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateDBInstancePlanResponse UpdateDBInstancePlanResponse
     */
    public function updateDBInstancePlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->planConfig)) {
            $query['PlanConfig'] = $request->planConfig;
        }
        if (!Utils::isUnset($request->planDesc)) {
            $query['PlanDesc'] = $request->planDesc;
        }
        if (!Utils::isUnset($request->planEndDate)) {
            $query['PlanEndDate'] = $request->planEndDate;
        }
        if (!Utils::isUnset($request->planId)) {
            $query['PlanId'] = $request->planId;
        }
        if (!Utils::isUnset($request->planName)) {
            $query['PlanName'] = $request->planName;
        }
        if (!Utils::isUnset($request->planStartDate)) {
            $query['PlanStartDate'] = $request->planStartDate;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateDBInstancePlan',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateDBInstancePlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to modify a plan for an AnalyticDB for PostgreSQL instance in Serverless mode. For example, you can modify a plan for periodically pausing and resuming an instance or scaling an instance.
     *   * ## Limits
     *   * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param UpdateDBInstancePlanRequest $request UpdateDBInstancePlanRequest
     *
     * @return UpdateDBInstancePlanResponse UpdateDBInstancePlanResponse
     */
    public function updateDBInstancePlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDBInstancePlanWithOptions($request, $runtime);
    }

    /**
     * This operation is not available for instances in reserved storage mode.
     *   * Before you call this operation, make sure that you are familiar with the billing of AnalyticDB for PostgreSQL. For more information, see [Billing methods](~~35406~~) and [AnalyticDB for PostgreSQL pricing](https://www.alibabacloud.com/zh/product/hybriddb-postgresql/pricing).
     *   *
     * @param UpgradeDBInstanceRequest $request UpgradeDBInstanceRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return UpgradeDBInstanceResponse UpgradeDBInstanceResponse
     */
    public function upgradeDBInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceClass)) {
            $query['DBInstanceClass'] = $request->DBInstanceClass;
        }
        if (!Utils::isUnset($request->DBInstanceGroupCount)) {
            $query['DBInstanceGroupCount'] = $request->DBInstanceGroupCount;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->instanceSpec)) {
            $query['InstanceSpec'] = $request->instanceSpec;
        }
        if (!Utils::isUnset($request->masterNodeNum)) {
            $query['MasterNodeNum'] = $request->masterNodeNum;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
        if (!Utils::isUnset($request->segDiskPerformanceLevel)) {
            $query['SegDiskPerformanceLevel'] = $request->segDiskPerformanceLevel;
        }
        if (!Utils::isUnset($request->segNodeNum)) {
            $query['SegNodeNum'] = $request->segNodeNum;
        }
        if (!Utils::isUnset($request->segStorageType)) {
            $query['SegStorageType'] = $request->segStorageType;
        }
        if (!Utils::isUnset($request->storageSize)) {
            $query['StorageSize'] = $request->storageSize;
        }
        if (!Utils::isUnset($request->upgradeType)) {
            $query['UpgradeType'] = $request->upgradeType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpgradeDBInstance',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpgradeDBInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation is not available for instances in reserved storage mode.
     *   * Before you call this operation, make sure that you are familiar with the billing of AnalyticDB for PostgreSQL. For more information, see [Billing methods](~~35406~~) and [AnalyticDB for PostgreSQL pricing](https://www.alibabacloud.com/zh/product/hybriddb-postgresql/pricing).
     *   *
     * @param UpgradeDBInstanceRequest $request UpgradeDBInstanceRequest
     *
     * @return UpgradeDBInstanceResponse UpgradeDBInstanceResponse
     */
    public function upgradeDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeDBInstanceWithOptions($request, $runtime);
    }

    /**
     * @param UpgradeDBVersionRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpgradeDBVersionResponse
     */
    public function upgradeDBVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->majorVersion)) {
            $query['MajorVersion'] = $request->majorVersion;
        }
        if (!Utils::isUnset($request->minorVersion)) {
            $query['MinorVersion'] = $request->minorVersion;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
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
            'action'      => 'UpgradeDBVersion',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpgradeDBVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpgradeDBVersionRequest $request
     *
     * @return UpgradeDBVersionResponse
     */
    public function upgradeDBVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeDBVersionWithOptions($request, $runtime);
    }

    /**
     * @param UpsertChunksRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return UpsertChunksResponse
     */
    public function upsertChunksWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpsertChunksShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->textChunks)) {
            $request->textChunksShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->textChunks, 'TextChunks', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->collection)) {
            $query['Collection'] = $request->collection;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->fileName)) {
            $query['FileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->namespacePassword)) {
            $query['NamespacePassword'] = $request->namespacePassword;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->textChunksShrink)) {
            $body['TextChunks'] = $request->textChunksShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpsertChunks',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpsertChunksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpsertChunksRequest $request
     *
     * @return UpsertChunksResponse
     */
    public function upsertChunks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upsertChunksWithOptions($request, $runtime);
    }

    /**
     * @param UpsertCollectionDataRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return UpsertCollectionDataResponse
     */
    public function upsertCollectionDataWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpsertCollectionDataShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->rows)) {
            $request->rowsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->rows, 'Rows', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->collection)) {
            $query['Collection'] = $request->collection;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->namespacePassword)) {
            $query['NamespacePassword'] = $request->namespacePassword;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->rowsShrink)) {
            $body['Rows'] = $request->rowsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpsertCollectionData',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpsertCollectionDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpsertCollectionDataRequest $request
     *
     * @return UpsertCollectionDataResponse
     */
    public function upsertCollectionData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upsertCollectionDataWithOptions($request, $runtime);
    }
}
