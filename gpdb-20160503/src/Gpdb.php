<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\AllocateInstancePublicConnectionRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\AllocateInstancePublicConnectionResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\BindDBResourceGroupWithRoleRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\BindDBResourceGroupWithRoleResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\BindDBResourceGroupWithRoleShrinkRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CancelUploadDocumentJobRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CancelUploadDocumentJobResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CancelUpsertCollectionDataJobRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CancelUpsertCollectionDataJobResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CheckHadoopDataSourceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CheckHadoopDataSourceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CheckHadoopNetConnectionRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CheckHadoopNetConnectionResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CheckJDBCSourceNetConnectionRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CheckJDBCSourceNetConnectionResponse;
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
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateDBResourceGroupRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateDBResourceGroupResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateDocumentCollectionRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateDocumentCollectionResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateExtensionsRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateExtensionsResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateExternalDataServiceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateExternalDataServiceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateHadoopDataSourceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateHadoopDataSourceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateJDBCDataSourceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateJDBCDataSourceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateNamespaceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateNamespaceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateSampleDataRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateSampleDataResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateServiceLinkedRoleRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateServiceLinkedRoleResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateStreamingDataServiceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateStreamingDataServiceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateStreamingDataSourceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateStreamingDataSourceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateStreamingJobRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateStreamingJobResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateStreamingJobShrinkRequest;
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
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteDBResourceGroupRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteDBResourceGroupResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteDocumentCollectionRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteDocumentCollectionResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteDocumentRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteDocumentResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteExtensionRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteExtensionResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteExternalDataServiceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteExternalDataServiceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteHadoopDataSourceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteHadoopDataSourceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteJDBCDataSourceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteJDBCDataSourceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteNamespaceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteNamespaceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteStreamingDataServiceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteStreamingDataServiceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteStreamingDataSourceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteStreamingDataSourceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteStreamingJobRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteStreamingJobResponse;
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
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBResourceGroupRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBResourceGroupResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBResourceManagementModeRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBResourceManagementModeResponse;
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
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeExternalDataServiceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeExternalDataServiceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeHadoopClustersInSameNetRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeHadoopClustersInSameNetResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeHadoopConfigsRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeHadoopConfigsResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeHadoopDataSourceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeHadoopDataSourceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeHealthStatusRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeHealthStatusResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeIMVInfosRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeIMVInfosResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeJDBCDataSourceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeJDBCDataSourceResponse;
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
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeRolesRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeRolesResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeSampleDataRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeSampleDataResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeSQLLogCountRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeSQLLogCountResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeSQLLogsRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeSQLLogsResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeSQLLogsV2Request;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeSQLLogsV2Response;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeStreamingDataServiceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeStreamingDataServiceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeStreamingDataSourceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeStreamingDataSourceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeStreamingJobRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeStreamingJobResponse;
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
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DisableDBResourceGroupRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DisableDBResourceGroupResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DownloadDiagnosisRecordsRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DownloadDiagnosisRecordsResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DownloadSQLLogsRecordsRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DownloadSQLLogsRecordsResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\EnableDBResourceGroupRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\EnableDBResourceGroupResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\GetUploadDocumentJobRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\GetUploadDocumentJobResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\GetUpsertCollectionDataJobRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\GetUpsertCollectionDataJobResponse;
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
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListExternalDataServicesRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListExternalDataServicesResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListExternalDataSourcesRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListExternalDataSourcesResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListInstanceExtensionsRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListInstanceExtensionsResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListNamespacesRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListNamespacesResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListStreamingDataServicesRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListStreamingDataServicesResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListStreamingDataSourcesRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListStreamingDataSourcesResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListStreamingJobsRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListStreamingJobsResponse;
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
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyDBResourceGroupRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyDBResourceGroupResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyDBResourceGroupShrinkRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyExternalDataServiceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyExternalDataServiceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyHadoopDataSourceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyHadoopDataSourceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyJDBCDataSourceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyJDBCDataSourceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyMasterSpecRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyMasterSpecResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyParametersRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyParametersResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifySecurityIpsRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifySecurityIpsResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifySQLCollectorPolicyRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifySQLCollectorPolicyResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyStreamingDataServiceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyStreamingDataServiceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyStreamingDataSourceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyStreamingDataSourceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyStreamingJobRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyStreamingJobResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyStreamingJobShrinkRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyVectorConfigurationRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyVectorConfigurationResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\PauseDataRedistributeRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\PauseDataRedistributeResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\PauseInstanceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\PauseInstanceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryCollectionDataRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryCollectionDataResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryCollectionDataShrinkRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryContentAdvanceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryContentRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryContentResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryContentShrinkRequest;
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
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ResumeDataRedistributeRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ResumeDataRedistributeResponse;
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
use AlibabaCloud\SDK\Gpdb\V20160503\Models\UnbindDBResourceGroupWithRoleRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\UnbindDBResourceGroupWithRoleResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\UnbindDBResourceGroupWithRoleShrinkRequest;
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
use AlibabaCloud\SDK\Gpdb\V20160503\Models\UpgradeExtensionsRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\UpgradeExtensionsResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\UploadDocumentAsyncAdvanceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\UploadDocumentAsyncRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\UploadDocumentAsyncResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\UploadDocumentAsyncShrinkRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\UpsertChunksRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\UpsertChunksResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\UpsertChunksShrinkRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\UpsertCollectionDataAsyncAdvanceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\UpsertCollectionDataAsyncRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\UpsertCollectionDataAsyncResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\UpsertCollectionDataRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\UpsertCollectionDataResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\UpsertCollectionDataShrinkRequest;
use AlibabaCloud\SDK\OpenPlatform\V20191219\Models\AuthorizeFileUploadRequest;
use AlibabaCloud\SDK\OpenPlatform\V20191219\Models\AuthorizeFileUploadResponse;
use AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform;
use AlibabaCloud\SDK\OSS\OSS;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest\header;
use AlibabaCloud\Tea\FileForm\FileForm\FileField;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\Config;
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
     * @summary Allocates a public endpoint for an AnalyticDB for PostgreSQL instance.
     *  *
     * @description You can call this operation to apply for a public endpoint for an AnalyticDB for PostgreSQL instance. Both the primary and instance endpoints of an AnalyticDB for PostgreSQL instance can be public endpoints. For more information, see [Endpoints of an instance and its primary coordinator node](https://help.aliyun.com/document_detail/204879.html).
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
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
     * @summary Allocates a public endpoint for an AnalyticDB for PostgreSQL instance.
     *  *
     * @description You can call this operation to apply for a public endpoint for an AnalyticDB for PostgreSQL instance. Both the primary and instance endpoints of an AnalyticDB for PostgreSQL instance can be public endpoints. For more information, see [Endpoints of an instance and its primary coordinator node](https://help.aliyun.com/document_detail/204879.html).
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
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
     * @summary Binds a resource group to a database role.
     *  *
     * @param BindDBResourceGroupWithRoleRequest $tmpReq  BindDBResourceGroupWithRoleRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return BindDBResourceGroupWithRoleResponse BindDBResourceGroupWithRoleResponse
     */
    public function bindDBResourceGroupWithRoleWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new BindDBResourceGroupWithRoleShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->roleList)) {
            $request->roleListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->roleList, 'RoleList', 'simple');
        }
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceGroupName)) {
            $query['ResourceGroupName'] = $request->resourceGroupName;
        }
        if (!Utils::isUnset($request->roleListShrink)) {
            $query['RoleList'] = $request->roleListShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BindDBResourceGroupWithRole',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BindDBResourceGroupWithRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Binds a resource group to a database role.
     *  *
     * @param BindDBResourceGroupWithRoleRequest $request BindDBResourceGroupWithRoleRequest
     *
     * @return BindDBResourceGroupWithRoleResponse BindDBResourceGroupWithRoleResponse
     */
    public function bindDBResourceGroupWithRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindDBResourceGroupWithRoleWithOptions($request, $runtime);
    }

    /**
     * @summary Cancels an asynchronous document upload job based on the job ID.
     *  *
     * @description This operation is related to the UploadDocumentAsync operation. You can call this operation to cancel a document upload job.
     * >  If the canceling operation is complete, failed, or is canceled, you cannot call the operation again. The canceling operation only interrupts the document upload job. To remove the uploaded data, you must manually remove it or call the DeleteCollectionData operation. You can also call the document upload operation to overwrite the data by using the same FileName parameter.
     *  *
     * @param CancelUploadDocumentJobRequest $request CancelUploadDocumentJobRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return CancelUploadDocumentJobResponse CancelUploadDocumentJobResponse
     */
    public function cancelUploadDocumentJobWithOptions($request, $runtime)
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
        $body = [];
        if (!Utils::isUnset($request->collection)) {
            $body['Collection'] = $request->collection;
        }
        if (!Utils::isUnset($request->jobId)) {
            $body['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $body['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->namespacePassword)) {
            $body['NamespacePassword'] = $request->namespacePassword;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CancelUploadDocumentJob',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelUploadDocumentJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Cancels an asynchronous document upload job based on the job ID.
     *  *
     * @description This operation is related to the UploadDocumentAsync operation. You can call this operation to cancel a document upload job.
     * >  If the canceling operation is complete, failed, or is canceled, you cannot call the operation again. The canceling operation only interrupts the document upload job. To remove the uploaded data, you must manually remove it or call the DeleteCollectionData operation. You can also call the document upload operation to overwrite the data by using the same FileName parameter.
     *  *
     * @param CancelUploadDocumentJobRequest $request CancelUploadDocumentJobRequest
     *
     * @return CancelUploadDocumentJobResponse CancelUploadDocumentJobResponse
     */
    public function cancelUploadDocumentJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelUploadDocumentJobWithOptions($request, $runtime);
    }

    /**
     * @summary Cancels an asynchronous vector data upload job by using a job ID.
     *  *
     * @description This operation is related to the `UpsertCollectionDataAsync` operation. You can call this operation to cancel an upload job.
     * >  If the canceling operation is complete, failed, or is canceled, you cannot call the operation again. The canceling operation only interrupts the upload job. To remove the uploaded data, you must manually remove it or call the DeleteCollectionData operation.
     *  *
     * @param CancelUpsertCollectionDataJobRequest $request CancelUpsertCollectionDataJobRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return CancelUpsertCollectionDataJobResponse CancelUpsertCollectionDataJobResponse
     */
    public function cancelUpsertCollectionDataJobWithOptions($request, $runtime)
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
        $body = [];
        if (!Utils::isUnset($request->collection)) {
            $body['Collection'] = $request->collection;
        }
        if (!Utils::isUnset($request->jobId)) {
            $body['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $body['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->namespacePassword)) {
            $body['NamespacePassword'] = $request->namespacePassword;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CancelUpsertCollectionDataJob',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelUpsertCollectionDataJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Cancels an asynchronous vector data upload job by using a job ID.
     *  *
     * @description This operation is related to the `UpsertCollectionDataAsync` operation. You can call this operation to cancel an upload job.
     * >  If the canceling operation is complete, failed, or is canceled, you cannot call the operation again. The canceling operation only interrupts the upload job. To remove the uploaded data, you must manually remove it or call the DeleteCollectionData operation.
     *  *
     * @param CancelUpsertCollectionDataJobRequest $request CancelUpsertCollectionDataJobRequest
     *
     * @return CancelUpsertCollectionDataJobResponse CancelUpsertCollectionDataJobResponse
     */
    public function cancelUpsertCollectionDataJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelUpsertCollectionDataJobWithOptions($request, $runtime);
    }

    /**
     * @summary Checks the configurations of a Hadoop data source.
     *  *
     * @param CheckHadoopDataSourceRequest $request CheckHadoopDataSourceRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckHadoopDataSourceResponse CheckHadoopDataSourceResponse
     */
    public function checkHadoopDataSourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->checkDir)) {
            $query['CheckDir'] = $request->checkDir;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->dataSourceId)) {
            $query['DataSourceId'] = $request->dataSourceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckHadoopDataSource',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckHadoopDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Checks the configurations of a Hadoop data source.
     *  *
     * @param CheckHadoopDataSourceRequest $request CheckHadoopDataSourceRequest
     *
     * @return CheckHadoopDataSourceResponse CheckHadoopDataSourceResponse
     */
    public function checkHadoopDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkHadoopDataSourceWithOptions($request, $runtime);
    }

    /**
     * @summary 检查hadoop集群网络连通性
     *  *
     * @param CheckHadoopNetConnectionRequest $request CheckHadoopNetConnectionRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckHadoopNetConnectionResponse CheckHadoopNetConnectionResponse
     */
    public function checkHadoopNetConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->emrInstanceId)) {
            $query['EmrInstanceId'] = $request->emrInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckHadoopNetConnection',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckHadoopNetConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 检查hadoop集群网络连通性
     *  *
     * @param CheckHadoopNetConnectionRequest $request CheckHadoopNetConnectionRequest
     *
     * @return CheckHadoopNetConnectionResponse CheckHadoopNetConnectionResponse
     */
    public function checkHadoopNetConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkHadoopNetConnectionWithOptions($request, $runtime);
    }

    /**
     * @summary Checks the network connectivity of a connection specified by a Java Database Connectivity (JDBC) connection string.
     *  *
     * @param CheckJDBCSourceNetConnectionRequest $request CheckJDBCSourceNetConnectionRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckJDBCSourceNetConnectionResponse CheckJDBCSourceNetConnectionResponse
     */
    public function checkJDBCSourceNetConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->jdbcConnectionString)) {
            $query['JdbcConnectionString'] = $request->jdbcConnectionString;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckJDBCSourceNetConnection',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckJDBCSourceNetConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Checks the network connectivity of a connection specified by a Java Database Connectivity (JDBC) connection string.
     *  *
     * @param CheckJDBCSourceNetConnectionRequest $request CheckJDBCSourceNetConnectionRequest
     *
     * @return CheckJDBCSourceNetConnectionResponse CheckJDBCSourceNetConnectionResponse
     */
    public function checkJDBCSourceNetConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkJDBCSourceNetConnectionWithOptions($request, $runtime);
    }

    /**
     * @summary Queries whether a service-linked role is created.
     *  *
     * @param CheckServiceLinkedRoleRequest $request CheckServiceLinkedRoleRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckServiceLinkedRoleResponse CheckServiceLinkedRoleResponse
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
     * @summary Queries whether a service-linked role is created.
     *  *
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
     * @summary Creates a privileged account for an AnalyticDB for PostgreSQL instance.
     *  *
     * @description *   Before you can use an AnalyticDB for PostgreSQL instance, you must create a privileged account for the instance.
     * *   You can call this operation to create only privileged accounts. For information about how to create other types of accounts, see [Create a database account](https://help.aliyun.com/document_detail/50206.html).
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
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
     * @summary Creates a privileged account for an AnalyticDB for PostgreSQL instance.
     *  *
     * @description *   Before you can use an AnalyticDB for PostgreSQL instance, you must create a privileged account for the instance.
     * *   You can call this operation to create only privileged accounts. For information about how to create other types of accounts, see [Create a database account](https://help.aliyun.com/document_detail/50206.html).
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
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
     * @summary Creates a vector collection.
     *  *
     * @param CreateCollectionRequest $request CreateCollectionRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateCollectionResponse CreateCollectionResponse
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
     * @summary Creates a vector collection.
     *  *
     * @param CreateCollectionRequest $request CreateCollectionRequest
     *
     * @return CreateCollectionResponse CreateCollectionResponse
     */
    public function createCollection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCollectionWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an AnalyticDB for PostgreSQL instance.
     *  *
     * @description You can call this operation when you need to create AnalyticDB for PostgreSQL instances to meet the requirements of new applications or services.
     * Before you call this operation, make sure that you are familiar with the billing of AnalyticDB for PostgreSQL instances. For more information, see [Billing methods](https://help.aliyun.com/document_detail/35406.html) and [AnalyticDB for PostgreSQL pricing](https://www.alibabacloud.com/zh/product/hybriddb-postgresql/pricing).
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds a limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limits when you call this operation.
     *  *
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
     * @summary Creates an AnalyticDB for PostgreSQL instance.
     *  *
     * @description You can call this operation when you need to create AnalyticDB for PostgreSQL instances to meet the requirements of new applications or services.
     * Before you call this operation, make sure that you are familiar with the billing of AnalyticDB for PostgreSQL instances. For more information, see [Billing methods](https://help.aliyun.com/document_detail/35406.html) and [AnalyticDB for PostgreSQL pricing](https://www.alibabacloud.com/zh/product/hybriddb-postgresql/pricing).
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds a limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limits when you call this operation.
     *  *
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
     * @summary Creates a plan for an AnalyticDB for PostgreSQL instance.
     *  *
     * @description *   The plan management feature is supported only for pay-as-you-go instances.
     * *   When you change the compute node specifications or change the number of compute nodes, transient connections may occur. We recommend that you perform these operations during off-peak hours.
     * Before you call this operation, make sure that you are familiar with the billing of AnalyticDB for PostgreSQL. For more information, see [Billing methods](https://help.aliyun.com/document_detail/35406.html) and [AnalyticDB for PostgreSQL pricing](https://www.alibabacloud.com/zh/product/hybriddb-postgresql/pricing).
     *  *
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
     * @summary Creates a plan for an AnalyticDB for PostgreSQL instance.
     *  *
     * @description *   The plan management feature is supported only for pay-as-you-go instances.
     * *   When you change the compute node specifications or change the number of compute nodes, transient connections may occur. We recommend that you perform these operations during off-peak hours.
     * Before you call this operation, make sure that you are familiar with the billing of AnalyticDB for PostgreSQL. For more information, see [Billing methods](https://help.aliyun.com/document_detail/35406.html) and [AnalyticDB for PostgreSQL pricing](https://www.alibabacloud.com/zh/product/hybriddb-postgresql/pricing).
     *  *
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
     * @summary Creates a resource group.
     *  *
     * @param CreateDBResourceGroupRequest $request CreateDBResourceGroupRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDBResourceGroupResponse CreateDBResourceGroupResponse
     */
    public function createDBResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceGroupConfig)) {
            $query['ResourceGroupConfig'] = $request->resourceGroupConfig;
        }
        if (!Utils::isUnset($request->resourceGroupName)) {
            $query['ResourceGroupName'] = $request->resourceGroupName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDBResourceGroup',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDBResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a resource group.
     *  *
     * @param CreateDBResourceGroupRequest $request CreateDBResourceGroupRequest
     *
     * @return CreateDBResourceGroupResponse CreateDBResourceGroupResponse
     */
    public function createDBResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDBResourceGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a document collection.
     *  *
     * @param CreateDocumentCollectionRequest $request CreateDocumentCollectionRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDocumentCollectionResponse CreateDocumentCollectionResponse
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
     * @summary Creates a document collection.
     *  *
     * @param CreateDocumentCollectionRequest $request CreateDocumentCollectionRequest
     *
     * @return CreateDocumentCollectionResponse CreateDocumentCollectionResponse
     */
    public function createDocumentCollection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDocumentCollectionWithOptions($request, $runtime);
    }

    /**
     * @summary Install extensions.
     *  *
     * @param CreateExtensionsRequest $request CreateExtensionsRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateExtensionsResponse CreateExtensionsResponse
     */
    public function createExtensionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->DBNames)) {
            $query['DBNames'] = $request->DBNames;
        }
        if (!Utils::isUnset($request->extensions)) {
            $query['Extensions'] = $request->extensions;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateExtensions',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateExtensionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Install extensions.
     *  *
     * @param CreateExtensionsRequest $request CreateExtensionsRequest
     *
     * @return CreateExtensionsResponse CreateExtensionsResponse
     */
    public function createExtensions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createExtensionsWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an external data service.
     *  *
     * @param CreateExternalDataServiceRequest $request CreateExternalDataServiceRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateExternalDataServiceResponse CreateExternalDataServiceResponse
     */
    public function createExternalDataServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceDescription)) {
            $query['ServiceDescription'] = $request->serviceDescription;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        if (!Utils::isUnset($request->serviceSpec)) {
            $query['ServiceSpec'] = $request->serviceSpec;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateExternalDataService',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateExternalDataServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates an external data service.
     *  *
     * @param CreateExternalDataServiceRequest $request CreateExternalDataServiceRequest
     *
     * @return CreateExternalDataServiceResponse CreateExternalDataServiceResponse
     */
    public function createExternalDataService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createExternalDataServiceWithOptions($request, $runtime);
    }

    /**
     * @summary Creates the configurations for a Hadoop data source.
     *  *
     * @param CreateHadoopDataSourceRequest $request CreateHadoopDataSourceRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateHadoopDataSourceResponse CreateHadoopDataSourceResponse
     */
    public function createHadoopDataSourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->dataSourceDescription)) {
            $query['DataSourceDescription'] = $request->dataSourceDescription;
        }
        if (!Utils::isUnset($request->dataSourceName)) {
            $query['DataSourceName'] = $request->dataSourceName;
        }
        if (!Utils::isUnset($request->dataSourceType)) {
            $query['DataSourceType'] = $request->dataSourceType;
        }
        if (!Utils::isUnset($request->emrInstanceId)) {
            $query['EmrInstanceId'] = $request->emrInstanceId;
        }
        if (!Utils::isUnset($request->HDFSConf)) {
            $query['HDFSConf'] = $request->HDFSConf;
        }
        if (!Utils::isUnset($request->hadoopCoreConf)) {
            $query['HadoopCoreConf'] = $request->hadoopCoreConf;
        }
        if (!Utils::isUnset($request->hadoopCreateType)) {
            $query['HadoopCreateType'] = $request->hadoopCreateType;
        }
        if (!Utils::isUnset($request->hadoopHostsAddress)) {
            $query['HadoopHostsAddress'] = $request->hadoopHostsAddress;
        }
        if (!Utils::isUnset($request->hiveConf)) {
            $query['HiveConf'] = $request->hiveConf;
        }
        if (!Utils::isUnset($request->mapReduceConf)) {
            $query['MapReduceConf'] = $request->mapReduceConf;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->yarnConf)) {
            $query['YarnConf'] = $request->yarnConf;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateHadoopDataSource',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateHadoopDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates the configurations for a Hadoop data source.
     *  *
     * @param CreateHadoopDataSourceRequest $request CreateHadoopDataSourceRequest
     *
     * @return CreateHadoopDataSourceResponse CreateHadoopDataSourceResponse
     */
    public function createHadoopDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createHadoopDataSourceWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a Java Database Connectivity (JDBC) data source.
     *  *
     * @param CreateJDBCDataSourceRequest $request CreateJDBCDataSourceRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateJDBCDataSourceResponse CreateJDBCDataSourceResponse
     */
    public function createJDBCDataSourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->dataSourceDescription)) {
            $query['DataSourceDescription'] = $request->dataSourceDescription;
        }
        if (!Utils::isUnset($request->dataSourceName)) {
            $query['DataSourceName'] = $request->dataSourceName;
        }
        if (!Utils::isUnset($request->dataSourceType)) {
            $query['DataSourceType'] = $request->dataSourceType;
        }
        if (!Utils::isUnset($request->JDBCConnectionString)) {
            $query['JDBCConnectionString'] = $request->JDBCConnectionString;
        }
        if (!Utils::isUnset($request->JDBCPassword)) {
            $query['JDBCPassword'] = $request->JDBCPassword;
        }
        if (!Utils::isUnset($request->JDBCUserName)) {
            $query['JDBCUserName'] = $request->JDBCUserName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateJDBCDataSource',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateJDBCDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a Java Database Connectivity (JDBC) data source.
     *  *
     * @param CreateJDBCDataSourceRequest $request CreateJDBCDataSourceRequest
     *
     * @return CreateJDBCDataSourceResponse CreateJDBCDataSourceResponse
     */
    public function createJDBCDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createJDBCDataSourceWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a vector namespace.
     *  *
     * @param CreateNamespaceRequest $request CreateNamespaceRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateNamespaceResponse CreateNamespaceResponse
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
     * @summary Creates a vector namespace.
     *  *
     * @param CreateNamespaceRequest $request CreateNamespaceRequest
     *
     * @return CreateNamespaceResponse CreateNamespaceResponse
     */
    public function createNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNamespaceWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a sample dataset for an AnalyticDB for PostgreSQL instance.
     *  *
     * @description *   You can call this operation to create a sample dataset for an AnalyticDB for PostgreSQL instance. Then, you can execute query statements on the sample dataset to use or test your instance. For more information about query statements, see [Dataset information and query examples](https://help.aliyun.com/document_detail/452277.html).
     * *   This operation is supported only for AnalyticDB for PostgreSQL V6.3.8.8 and V6.3.10.3 or later, excluding the versions from V6.3.9.0 to V6.3.10.2.
     *  *
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
     * @summary Creates a sample dataset for an AnalyticDB for PostgreSQL instance.
     *  *
     * @description *   You can call this operation to create a sample dataset for an AnalyticDB for PostgreSQL instance. Then, you can execute query statements on the sample dataset to use or test your instance. For more information about query statements, see [Dataset information and query examples](https://help.aliyun.com/document_detail/452277.html).
     * *   This operation is supported only for AnalyticDB for PostgreSQL V6.3.8.8 and V6.3.10.3 or later, excluding the versions from V6.3.9.0 to V6.3.10.2.
     *  *
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
     * @summary Creates a service-linked role.
     *  *
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
     * @summary Creates a service-linked role.
     *  *
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
     * @summary Creates a real-time data service.
     *  *
     * @param CreateStreamingDataServiceRequest $request CreateStreamingDataServiceRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateStreamingDataServiceResponse CreateStreamingDataServiceResponse
     */
    public function createStreamingDataServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceDescription)) {
            $query['ServiceDescription'] = $request->serviceDescription;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        if (!Utils::isUnset($request->serviceSpec)) {
            $query['ServiceSpec'] = $request->serviceSpec;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateStreamingDataService',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateStreamingDataServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a real-time data service.
     *  *
     * @param CreateStreamingDataServiceRequest $request CreateStreamingDataServiceRequest
     *
     * @return CreateStreamingDataServiceResponse CreateStreamingDataServiceResponse
     */
    public function createStreamingDataService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createStreamingDataServiceWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a real-time data source.
     *  *
     * @param CreateStreamingDataSourceRequest $request CreateStreamingDataSourceRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateStreamingDataSourceResponse CreateStreamingDataSourceResponse
     */
    public function createStreamingDataSourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->dataSourceConfig)) {
            $query['DataSourceConfig'] = $request->dataSourceConfig;
        }
        if (!Utils::isUnset($request->dataSourceDescription)) {
            $query['DataSourceDescription'] = $request->dataSourceDescription;
        }
        if (!Utils::isUnset($request->dataSourceName)) {
            $query['DataSourceName'] = $request->dataSourceName;
        }
        if (!Utils::isUnset($request->dataSourceType)) {
            $query['DataSourceType'] = $request->dataSourceType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateStreamingDataSource',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateStreamingDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a real-time data source.
     *  *
     * @param CreateStreamingDataSourceRequest $request CreateStreamingDataSourceRequest
     *
     * @return CreateStreamingDataSourceResponse CreateStreamingDataSourceResponse
     */
    public function createStreamingDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createStreamingDataSourceWithOptions($request, $runtime);
    }

    /**
     * @summary 创建外部数据源配置
     *  *
     * @param CreateStreamingJobRequest $tmpReq  CreateStreamingJobRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateStreamingJobResponse CreateStreamingJobResponse
     */
    public function createStreamingJobWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateStreamingJobShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->destColumns)) {
            $request->destColumnsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->destColumns, 'DestColumns', 'json');
        }
        if (!Utils::isUnset($tmpReq->matchColumns)) {
            $request->matchColumnsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->matchColumns, 'MatchColumns', 'json');
        }
        if (!Utils::isUnset($tmpReq->srcColumns)) {
            $request->srcColumnsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->srcColumns, 'SrcColumns', 'json');
        }
        if (!Utils::isUnset($tmpReq->updateColumns)) {
            $request->updateColumnsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->updateColumns, 'UpdateColumns', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->account)) {
            $query['Account'] = $request->account;
        }
        if (!Utils::isUnset($request->consistency)) {
            $query['Consistency'] = $request->consistency;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->dataSourceId)) {
            $query['DataSourceId'] = $request->dataSourceId;
        }
        if (!Utils::isUnset($request->destColumnsShrink)) {
            $query['DestColumns'] = $request->destColumnsShrink;
        }
        if (!Utils::isUnset($request->destDatabase)) {
            $query['DestDatabase'] = $request->destDatabase;
        }
        if (!Utils::isUnset($request->destSchema)) {
            $query['DestSchema'] = $request->destSchema;
        }
        if (!Utils::isUnset($request->destTable)) {
            $query['DestTable'] = $request->destTable;
        }
        if (!Utils::isUnset($request->errorLimitCount)) {
            $query['ErrorLimitCount'] = $request->errorLimitCount;
        }
        if (!Utils::isUnset($request->fallbackOffset)) {
            $query['FallbackOffset'] = $request->fallbackOffset;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->jobConfig)) {
            $query['JobConfig'] = $request->jobConfig;
        }
        if (!Utils::isUnset($request->jobDescription)) {
            $query['JobDescription'] = $request->jobDescription;
        }
        if (!Utils::isUnset($request->jobName)) {
            $query['JobName'] = $request->jobName;
        }
        if (!Utils::isUnset($request->matchColumnsShrink)) {
            $query['MatchColumns'] = $request->matchColumnsShrink;
        }
        if (!Utils::isUnset($request->mode)) {
            $query['Mode'] = $request->mode;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->srcColumnsShrink)) {
            $query['SrcColumns'] = $request->srcColumnsShrink;
        }
        if (!Utils::isUnset($request->tryRun)) {
            $query['TryRun'] = $request->tryRun;
        }
        if (!Utils::isUnset($request->updateColumnsShrink)) {
            $query['UpdateColumns'] = $request->updateColumnsShrink;
        }
        if (!Utils::isUnset($request->writeMode)) {
            $query['WriteMode'] = $request->writeMode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateStreamingJob',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateStreamingJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建外部数据源配置
     *  *
     * @param CreateStreamingJobRequest $request CreateStreamingJobRequest
     *
     * @return CreateStreamingJobResponse CreateStreamingJobResponse
     */
    public function createStreamingJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createStreamingJobWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a vector index.
     *  *
     * @param CreateVectorIndexRequest $request CreateVectorIndexRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateVectorIndexResponse CreateVectorIndexResponse
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
     * @summary Creates a vector index.
     *  *
     * @param CreateVectorIndexRequest $request CreateVectorIndexRequest
     *
     * @return CreateVectorIndexResponse CreateVectorIndexResponse
     */
    public function createVectorIndex($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVectorIndexWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a vector collection.
     *  *
     * @param DeleteCollectionRequest $request DeleteCollectionRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteCollectionResponse DeleteCollectionResponse
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
     * @summary Deletes a vector collection.
     *  *
     * @param DeleteCollectionRequest $request DeleteCollectionRequest
     *
     * @return DeleteCollectionResponse DeleteCollectionResponse
     */
    public function deleteCollection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCollectionWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes vector data.
     *  *
     * @param DeleteCollectionDataRequest $request DeleteCollectionDataRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteCollectionDataResponse DeleteCollectionDataResponse
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
     * @summary Deletes vector data.
     *  *
     * @param DeleteCollectionDataRequest $request DeleteCollectionDataRequest
     *
     * @return DeleteCollectionDataResponse DeleteCollectionDataResponse
     */
    public function deleteCollectionData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCollectionDataWithOptions($request, $runtime);
    }

    /**
     * @summary Releases a pay-as-you-go AnalyticDB for PostgreSQL instance.
     *  *
     * @description *   Subscription instances cannot be manually released. They are automatically released when they expire.
     * *   You can call this operation to release pay-as-you-go instances only when they are in the **Running** state.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @summary Releases a pay-as-you-go AnalyticDB for PostgreSQL instance.
     *  *
     * @description *   Subscription instances cannot be manually released. They are automatically released when they expire.
     * *   You can call this operation to release pay-as-you-go instances only when they are in the **Running** state.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @summary Deletes a plan from an AnalyticDB for PostgreSQL instance.
     *  *
     * @description If you no longer need a plan, you can call this operation to delete the plan. The plan management feature is supported only for AnalyticDB for PostgreSQL instances in Serverless mode.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @summary Deletes a plan from an AnalyticDB for PostgreSQL instance.
     *  *
     * @description If you no longer need a plan, you can call this operation to delete the plan. The plan management feature is supported only for AnalyticDB for PostgreSQL instances in Serverless mode.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @summary Deletes a resource group.
     *  *
     * @param DeleteDBResourceGroupRequest $request DeleteDBResourceGroupRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDBResourceGroupResponse DeleteDBResourceGroupResponse
     */
    public function deleteDBResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceGroupName)) {
            $query['ResourceGroupName'] = $request->resourceGroupName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDBResourceGroup',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDBResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a resource group.
     *  *
     * @param DeleteDBResourceGroupRequest $request DeleteDBResourceGroupRequest
     *
     * @return DeleteDBResourceGroupResponse DeleteDBResourceGroupResponse
     */
    public function deleteDBResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDBResourceGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a document from a document collection.
     *  *
     * @param DeleteDocumentRequest $request DeleteDocumentRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDocumentResponse DeleteDocumentResponse
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
     * @summary Deletes a document from a document collection.
     *  *
     * @param DeleteDocumentRequest $request DeleteDocumentRequest
     *
     * @return DeleteDocumentResponse DeleteDocumentResponse
     */
    public function deleteDocument($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDocumentWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a document collection.
     *  *
     * @param DeleteDocumentCollectionRequest $request DeleteDocumentCollectionRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDocumentCollectionResponse DeleteDocumentCollectionResponse
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
     * @summary Deletes a document collection.
     *  *
     * @param DeleteDocumentCollectionRequest $request DeleteDocumentCollectionRequest
     *
     * @return DeleteDocumentCollectionResponse DeleteDocumentCollectionResponse
     */
    public function deleteDocumentCollection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDocumentCollectionWithOptions($request, $runtime);
    }

    /**
     * @summary Uninstall an extension.
     *  *
     * @param DeleteExtensionRequest $request DeleteExtensionRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteExtensionResponse DeleteExtensionResponse
     */
    public function deleteExtensionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->DBNames)) {
            $query['DBNames'] = $request->DBNames;
        }
        if (!Utils::isUnset($request->extension)) {
            $query['Extension'] = $request->extension;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteExtension',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteExtensionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Uninstall an extension.
     *  *
     * @param DeleteExtensionRequest $request DeleteExtensionRequest
     *
     * @return DeleteExtensionResponse DeleteExtensionResponse
     */
    public function deleteExtension($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteExtensionWithOptions($request, $runtime);
    }

    /**
     * @summary 删除外部数据服务
     *  *
     * @param DeleteExternalDataServiceRequest $request DeleteExternalDataServiceRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteExternalDataServiceResponse DeleteExternalDataServiceResponse
     */
    public function deleteExternalDataServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteExternalDataService',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteExternalDataServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除外部数据服务
     *  *
     * @param DeleteExternalDataServiceRequest $request DeleteExternalDataServiceRequest
     *
     * @return DeleteExternalDataServiceResponse DeleteExternalDataServiceResponse
     */
    public function deleteExternalDataService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteExternalDataServiceWithOptions($request, $runtime);
    }

    /**
     * @summary 删除hadoop数据源
     *  *
     * @param DeleteHadoopDataSourceRequest $request DeleteHadoopDataSourceRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteHadoopDataSourceResponse DeleteHadoopDataSourceResponse
     */
    public function deleteHadoopDataSourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->dataSourceId)) {
            $query['DataSourceId'] = $request->dataSourceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteHadoopDataSource',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteHadoopDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除hadoop数据源
     *  *
     * @param DeleteHadoopDataSourceRequest $request DeleteHadoopDataSourceRequest
     *
     * @return DeleteHadoopDataSourceResponse DeleteHadoopDataSourceResponse
     */
    public function deleteHadoopDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteHadoopDataSourceWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a Java Database Connectivity (JDBC) data source.
     *  *
     * @param DeleteJDBCDataSourceRequest $request DeleteJDBCDataSourceRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteJDBCDataSourceResponse DeleteJDBCDataSourceResponse
     */
    public function deleteJDBCDataSourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->dataSourceId)) {
            $query['DataSourceId'] = $request->dataSourceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteJDBCDataSource',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteJDBCDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a Java Database Connectivity (JDBC) data source.
     *  *
     * @param DeleteJDBCDataSourceRequest $request DeleteJDBCDataSourceRequest
     *
     * @return DeleteJDBCDataSourceResponse DeleteJDBCDataSourceResponse
     */
    public function deleteJDBCDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteJDBCDataSourceWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a namespace.
     *  *
     * @param DeleteNamespaceRequest $request DeleteNamespaceRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteNamespaceResponse DeleteNamespaceResponse
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
     * @summary Deletes a namespace.
     *  *
     * @param DeleteNamespaceRequest $request DeleteNamespaceRequest
     *
     * @return DeleteNamespaceResponse DeleteNamespaceResponse
     */
    public function deleteNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNamespaceWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a real-time data service.
     *  *
     * @param DeleteStreamingDataServiceRequest $request DeleteStreamingDataServiceRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteStreamingDataServiceResponse DeleteStreamingDataServiceResponse
     */
    public function deleteStreamingDataServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteStreamingDataService',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteStreamingDataServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a real-time data service.
     *  *
     * @param DeleteStreamingDataServiceRequest $request DeleteStreamingDataServiceRequest
     *
     * @return DeleteStreamingDataServiceResponse DeleteStreamingDataServiceResponse
     */
    public function deleteStreamingDataService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteStreamingDataServiceWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a real-time data source.
     *  *
     * @param DeleteStreamingDataSourceRequest $request DeleteStreamingDataSourceRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteStreamingDataSourceResponse DeleteStreamingDataSourceResponse
     */
    public function deleteStreamingDataSourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->dataSourceId)) {
            $query['DataSourceId'] = $request->dataSourceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteStreamingDataSource',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteStreamingDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a real-time data source.
     *  *
     * @param DeleteStreamingDataSourceRequest $request DeleteStreamingDataSourceRequest
     *
     * @return DeleteStreamingDataSourceResponse DeleteStreamingDataSourceResponse
     */
    public function deleteStreamingDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteStreamingDataSourceWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a real-time data service job.
     *  *
     * @param DeleteStreamingJobRequest $request DeleteStreamingJobRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteStreamingJobResponse DeleteStreamingJobResponse
     */
    public function deleteStreamingJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteStreamingJob',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteStreamingJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a real-time data service job.
     *  *
     * @param DeleteStreamingJobRequest $request DeleteStreamingJobRequest
     *
     * @return DeleteStreamingJobResponse DeleteStreamingJobResponse
     */
    public function deleteStreamingJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteStreamingJobWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a vector index.
     *  *
     * @param DeleteVectorIndexRequest $request DeleteVectorIndexRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteVectorIndexResponse DeleteVectorIndexResponse
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
     * @summary Deletes a vector index.
     *  *
     * @param DeleteVectorIndexRequest $request DeleteVectorIndexRequest
     *
     * @return DeleteVectorIndexResponse DeleteVectorIndexResponse
     */
    public function deleteVectorIndex($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVectorIndexWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about database accounts for an AnalyticDB for PostgreSQL instance.
     *  *
     * @description This operation is called to query the information of the privileged account in an AnalyticDB for PostgreSQL instance, such as its state, description, and the instance.
     * ## Limit
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered and may affect your business. We recommend that you take note of the limit when you call this operation.
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
     * @summary Queries the information about database accounts for an AnalyticDB for PostgreSQL instance.
     *  *
     * @description This operation is called to query the information of the privileged account in an AnalyticDB for PostgreSQL instance, such as its state, description, and the instance.
     * ## Limit
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered and may affect your business. We recommend that you take note of the limit when you call this operation.
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
     * @summary Queries active SQL records.
     *  *
     * @param DescribeActiveSQLRecordsRequest $request DescribeActiveSQLRecordsRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeActiveSQLRecordsResponse DescribeActiveSQLRecordsResponse
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
     * @summary Queries active SQL records.
     *  *
     * @param DescribeActiveSQLRecordsRequest $request DescribeActiveSQLRecordsRequest
     *
     * @return DescribeActiveSQLRecordsResponse DescribeActiveSQLRecordsResponse
     */
    public function describeActiveSQLRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeActiveSQLRecordsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about available resources of AnalyticDB for PostgreSQL.
     *  *
     * @description When you create an AnalyticDB for PostgreSQL instance, you can call this operation to query the available resources within a zone.
     *  *
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
     * @summary Queries the information about available resources of AnalyticDB for PostgreSQL.
     *  *
     * @description When you create an AnalyticDB for PostgreSQL instance, you can call this operation to query the available resources within a zone.
     *  *
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
     * @summary Queries the backup policy of an AnalyticDB for PostgreSQL instance.
     *  *
     * @description You can call this operation to query the backup settings of an AnalyticDB for PostgreSQL instance in elastic storage mode. Periodically backing data can prevent data loss. For more information about how to modify backup policies, see [ModifyBackupPolicy](https://help.aliyun.com/document_detail/210095.html).
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
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
     * @summary Queries the backup policy of an AnalyticDB for PostgreSQL instance.
     *  *
     * @description You can call this operation to query the backup settings of an AnalyticDB for PostgreSQL instance in elastic storage mode. Periodically backing data can prevent data loss. For more information about how to modify backup policies, see [ModifyBackupPolicy](https://help.aliyun.com/document_detail/210095.html).
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
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
     * @summary Queries the information about a vector collection.
     *  *
     * @param DescribeCollectionRequest $request DescribeCollectionRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCollectionResponse DescribeCollectionResponse
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
     * @summary Queries the information about a vector collection.
     *  *
     * @param DescribeCollectionRequest $request DescribeCollectionRequest
     *
     * @return DescribeCollectionResponse DescribeCollectionResponse
     */
    public function describeCollection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCollectionWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of nodes in an AnalyticDB for PostgreSQL instance.
     *  *
     * @description ##
     * You can call this operation to query the information about coordinator and compute nodes in an AnalyticDB for PostgreSQL instance in elastic storage mode or Serverless mode.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @summary Queries a list of nodes in an AnalyticDB for PostgreSQL instance.
     *  *
     * @description ##
     * You can call this operation to query the information about coordinator and compute nodes in an AnalyticDB for PostgreSQL instance in elastic storage mode or Serverless mode.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @summary Queries the information about performance metrics of an AnalyticDB for PostgreSQL instance within a time range.
     *  *
     * @description You can query monitoring information only within the last 30 days.
     *  *
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
     * @summary Queries the information about performance metrics of an AnalyticDB for PostgreSQL instance within a time range.
     *  *
     * @description You can query monitoring information only within the last 30 days.
     *  *
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
     * @summary Queries the information about an AnalyticDB for PostgreSQL instance.
     *  *
     * @description ##
     * You can call this operation to query the information about an AnalyticDB for PostgreSQL instance, such as the instance type, network type, and instance state.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @summary Queries the information about an AnalyticDB for PostgreSQL instance.
     *  *
     * @description ##
     * You can call this operation to query the information about an AnalyticDB for PostgreSQL instance, such as the instance type, network type, and instance state.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @summary Queries the information about data bloat for an AnalyticDB for PostgreSQL instance.
     *  *
     * @description You can call this operation to query the details of data bloat on an AnalyticDB for PostgreSQL instance in elastic storage mode. The minor version of the instance must be V6.3.10.1 or later. For more information about how to view and update the minor version of an instance, see [View the minor engine version](https://help.aliyun.com/document_detail/277424.html) and [Update the minor engine version](https://help.aliyun.com/document_detail/139271.html).
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @summary Queries the information about data bloat for an AnalyticDB for PostgreSQL instance.
     *  *
     * @description You can call this operation to query the details of data bloat on an AnalyticDB for PostgreSQL instance in elastic storage mode. The minor version of the instance must be V6.3.10.1 or later. For more information about how to view and update the minor version of an instance, see [View the minor engine version](https://help.aliyun.com/document_detail/277424.html) and [Update the minor engine version](https://help.aliyun.com/document_detail/139271.html).
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @summary Queries the information about data skew for an AnalyticDB for PostgreSQL instance.
     *  *
     * @description To prevent data skew from affecting your database service, you can call this operation to query the details about data skew on an AnalyticDB for PostgreSQL instance.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @summary Queries the information about data skew for an AnalyticDB for PostgreSQL instance.
     *  *
     * @description To prevent data skew from affecting your database service, you can call this operation to query the details about data skew on an AnalyticDB for PostgreSQL instance.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @summary Queries the information about nodes in an AnalyticDB for PostgreSQL instance.
     *  *
     * @description You can call this operation to query the distribution and states of coordinator and compute nodes in an AnalyticDB for PostgreSQL instance.
     *  *
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
     * @summary Queries the information about nodes in an AnalyticDB for PostgreSQL instance.
     *  *
     * @description You can call this operation to query the distribution and states of coordinator and compute nodes in an AnalyticDB for PostgreSQL instance.
     *  *
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
     * @summary Queries the error logs of an AnalyticDB for PostgreSQL instance.
     *  *
     * @description You can call this operation to query the error logs of an AnalyticDB for PostgreSQL instance.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @summary Queries the error logs of an AnalyticDB for PostgreSQL instance.
     *  *
     * @description You can call this operation to query the error logs of an AnalyticDB for PostgreSQL instance.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @summary Queries the whitelists of IP addresses that are allowed to access an AnalyticDB for PostgreSQL instance.
     *  *
     * @description You can call this operation to query the whitelists of IP addresses that are allowed to access an AnalyticDB for PostgreSQL instance.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @summary Queries the whitelists of IP addresses that are allowed to access an AnalyticDB for PostgreSQL instance.
     *  *
     * @description You can call this operation to query the whitelists of IP addresses that are allowed to access an AnalyticDB for PostgreSQL instance.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @summary Queries the index usage of an AnalyticDB for PostgreSQL instance.
     *  *
     * @description Appropriate indexes can accelerate database queries. You can call this operation to query the index usage of an AnalyticDB for PostgreSQL instance.
     * This operation is available only for instances of V6.3.10.1 or later in elastic storage mode. For information about how to view and update the minor version of an instance, see [View the minor engine version](https://help.aliyun.com/document_detail/277424.html) and [Update the minor engine version](https://help.aliyun.com/document_detail/139271.html).
     *  *
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
     * @summary Queries the index usage of an AnalyticDB for PostgreSQL instance.
     *  *
     * @description Appropriate indexes can accelerate database queries. You can call this operation to query the index usage of an AnalyticDB for PostgreSQL instance.
     * This operation is available only for instances of V6.3.10.1 or later in elastic storage mode. For information about how to view and update the minor version of an instance, see [View the minor engine version](https://help.aliyun.com/document_detail/277424.html) and [Update the minor engine version](https://help.aliyun.com/document_detail/139271.html).
     *  *
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
     * @summary Queries the connection information of an instance.
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
     * @summary Queries the connection information of an instance.
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
     * @summary Queries the information about performance metrics of an AnalyticDB for PostgreSQL instance within a time range.
     *  *
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
     * @summary Queries the information about performance metrics of an AnalyticDB for PostgreSQL instance within a time range.
     *  *
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
     * @summary Queries the information about plans for an AnalyticDB for PostgreSQL instance.
     *  *
     * @description You can call this operation to query the details of plans for an AnalyticDB for PostgreSQL instance in Serverless mode.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @summary Queries the information about plans for an AnalyticDB for PostgreSQL instance.
     *  *
     * @description You can call this operation to query the details of plans for an AnalyticDB for PostgreSQL instance in Serverless mode.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @summary Queries the SSL information about an AnalyticDB for PostgreSQL instance.
     *  *
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
     * @summary Queries the SSL information about an AnalyticDB for PostgreSQL instance.
     *  *
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
     * @summary Queries the maximum performance of an AnalyticDB for PostgreSQL instance.
     *  *
     * @param DescribeDBInstanceSupportMaxPerformanceRequest $request DescribeDBInstanceSupportMaxPerformanceRequest
     * @param RuntimeOptions                                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBInstanceSupportMaxPerformanceResponse DescribeDBInstanceSupportMaxPerformanceResponse
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
     * @summary Queries the maximum performance of an AnalyticDB for PostgreSQL instance.
     *  *
     * @param DescribeDBInstanceSupportMaxPerformanceRequest $request DescribeDBInstanceSupportMaxPerformanceRequest
     *
     * @return DescribeDBInstanceSupportMaxPerformanceResponse DescribeDBInstanceSupportMaxPerformanceResponse
     */
    public function describeDBInstanceSupportMaxPerformance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceSupportMaxPerformanceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of AnalyticDB for PostgreSQL instances.
     *  *
     * @description ##
     * You can call this operation to query the instance types, network types, and states of AnalyticDB for PostgreSQL instances within a region.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @summary Queries a list of AnalyticDB for PostgreSQL instances.
     *  *
     * @description ##
     * You can call this operation to query the instance types, network types, and states of AnalyticDB for PostgreSQL instances within a region.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @summary Queries the information about resource groups.
     *  *
     * @param DescribeDBResourceGroupRequest $request DescribeDBResourceGroupRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBResourceGroupResponse DescribeDBResourceGroupResponse
     */
    public function describeDBResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceGroupName)) {
            $query['ResourceGroupName'] = $request->resourceGroupName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBResourceGroup',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about resource groups.
     *  *
     * @param DescribeDBResourceGroupRequest $request DescribeDBResourceGroupRequest
     *
     * @return DescribeDBResourceGroupResponse DescribeDBResourceGroupResponse
     */
    public function describeDBResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBResourceGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the resource management mode of an AnalyticDB for PostgreSQL instance.
     *  *
     * @param DescribeDBResourceManagementModeRequest $request DescribeDBResourceManagementModeRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBResourceManagementModeResponse DescribeDBResourceManagementModeResponse
     */
    public function describeDBResourceManagementModeWithOptions($request, $runtime)
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
            'action'      => 'DescribeDBResourceManagementMode',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBResourceManagementModeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the resource management mode of an AnalyticDB for PostgreSQL instance.
     *  *
     * @param DescribeDBResourceManagementModeRequest $request DescribeDBResourceManagementModeRequest
     *
     * @return DescribeDBResourceManagementModeResponse DescribeDBResourceManagementModeResponse
     */
    public function describeDBResourceManagementMode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBResourceManagementModeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about minor versions of AnalyticDB for PostgreSQL instances.
     *  *
     * @param DescribeDBVersionInfosRequest $request DescribeDBVersionInfosRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBVersionInfosResponse DescribeDBVersionInfosResponse
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
     * @summary Queries the information about minor versions of AnalyticDB for PostgreSQL instances.
     *  *
     * @param DescribeDBVersionInfosRequest $request DescribeDBVersionInfosRequest
     *
     * @return DescribeDBVersionInfosResponse DescribeDBVersionInfosResponse
     */
    public function describeDBVersionInfos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBVersionInfosWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of backup sets of full backup or point-in-time backup for an AnalyticDB for PostgreSQL instance.
     *  *
     * @description You can call this operation to query a list of backup sets and backup details only for instances in elastic storage mode.
     *  *
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
     * @summary Queries a list of backup sets of full backup or point-in-time backup for an AnalyticDB for PostgreSQL instance.
     *  *
     * @description You can call this operation to query a list of backup sets and backup details only for instances in elastic storage mode.
     *  *
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
     * @summary Queries the data redistribution information about an AnalyticDB for PostgreSQL V6.0 instance in elastic storage mode.
     *  *
     * @param DescribeDataReDistributeInfoRequest $request DescribeDataReDistributeInfoRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDataReDistributeInfoResponse DescribeDataReDistributeInfoResponse
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
     * @summary Queries the data redistribution information about an AnalyticDB for PostgreSQL V6.0 instance in elastic storage mode.
     *  *
     * @param DescribeDataReDistributeInfoRequest $request DescribeDataReDistributeInfoRequest
     *
     * @return DescribeDataReDistributeInfoResponse DescribeDataReDistributeInfoResponse
     */
    public function describeDataReDistributeInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDataReDistributeInfoWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the state of data sharing for AnalyticDB for PostgreSQL instances.
     *  *
     * @description Data sharing is supported only for instances in Serverless mode.
     *  *
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
     * @summary Queries the state of data sharing for AnalyticDB for PostgreSQL instances.
     *  *
     * @description Data sharing is supported only for instances in Serverless mode.
     *  *
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
     * @summary Queries the information about data sharing performance metrics.
     *  *
     * @description You can call this operation to query the details of data sharing performance metrics for an AnalyticDB for PostgreSQL instance in Serverless mode, such as the number of shared topics and the amount of data shared.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @summary Queries the information about data sharing performance metrics.
     *  *
     * @description You can call this operation to query the details of data sharing performance metrics for an AnalyticDB for PostgreSQL instance in Serverless mode, such as the number of shared topics and the amount of data shared.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @summary Queries all databases and database accounts for an AnalyticDB for PostgreSQL instance.
     *  *
     * @description To facilitate management, you can call this operation to query all databases and database accounts on an AnalyticDB for PostgreSQL instance.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @summary Queries all databases and database accounts for an AnalyticDB for PostgreSQL instance.
     *  *
     * @description To facilitate management, you can call this operation to query all databases and database accounts on an AnalyticDB for PostgreSQL instance.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @summary Queries the details of query execution on an AnalyticDB for PostgreSQL instance.
     *  *
     * @description You can call this operation to query the details of query execution on an AnalyticDB for PostgreSQL instance in elastic storage mode within a specified time range.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @summary Queries the details of query execution on an AnalyticDB for PostgreSQL instance.
     *  *
     * @description You can call this operation to query the details of query execution on an AnalyticDB for PostgreSQL instance in elastic storage mode within a specified time range.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @summary Queries the information about SQL queries for an AnalyticDB for PostgreSQL instance.
     *  *
     * @description You can call this operation to query the details of SQL queries on an AnalyticDB for PostgreSQL instance within a specified time range.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @summary Queries the information about SQL queries for an AnalyticDB for PostgreSQL instance.
     *  *
     * @description You can call this operation to query the details of SQL queries on an AnalyticDB for PostgreSQL instance within a specified time range.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @summary Queries the information about a query for an AnalyticDB for PostgreSQL instance.
     *  *
     * @description You can call this operation to query the information about a query for an AnalyticDB for PostgreSQL instance, including the SQL statement, execution plan text, and execution plan tree.
     * This operation is available only for instances of V6.3.10.1 or later in elastic storage mode. For information about how to view and update the minor version of an instance, see [View the minor engine version](https://help.aliyun.com/document_detail/277424.html) and [Update the minor engine version](https://help.aliyun.com/document_detail/139271.html).
     *  *
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
     * @summary Queries the information about a query for an AnalyticDB for PostgreSQL instance.
     *  *
     * @description You can call this operation to query the information about a query for an AnalyticDB for PostgreSQL instance, including the SQL statement, execution plan text, and execution plan tree.
     * This operation is available only for instances of V6.3.10.1 or later in elastic storage mode. For information about how to view and update the minor version of an instance, see [View the minor engine version](https://help.aliyun.com/document_detail/277424.html) and [Update the minor engine version](https://help.aliyun.com/document_detail/139271.html).
     *  *
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
     * @summary Queries the information about a document.
     *  *
     * @param DescribeDocumentRequest $request DescribeDocumentRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDocumentResponse DescribeDocumentResponse
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
     * @summary Queries the information about a document.
     *  *
     * @param DescribeDocumentRequest $request DescribeDocumentRequest
     *
     * @return DescribeDocumentResponse DescribeDocumentResponse
     */
    public function describeDocument($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDocumentWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the download records of query diagnostic information for an AnalyticDB for PostgreSQL instance.
     *  *
     * @description You must call the [DownloadDiagnosisRecords](https://help.aliyun.com/document_detail/447700.html) operation to download the query diagnostic information before you can call this operation to query the download records and download URLs.
     * This operation is available only for instances of V6.3.10.1 or later in elastic storage mode. For information about how to view and update the minor version of an instance, see [View the minor engine version](https://help.aliyun.com/document_detail/277424.html) and [Update the minor engine version](https://help.aliyun.com/document_detail/139271.html).
     *  *
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
     * @summary Queries the download records of query diagnostic information for an AnalyticDB for PostgreSQL instance.
     *  *
     * @description You must call the [DownloadDiagnosisRecords](https://help.aliyun.com/document_detail/447700.html) operation to download the query diagnostic information before you can call this operation to query the download records and download URLs.
     * This operation is available only for instances of V6.3.10.1 or later in elastic storage mode. For information about how to view and update the minor version of an instance, see [View the minor engine version](https://help.aliyun.com/document_detail/277424.html) and [Update the minor engine version](https://help.aliyun.com/document_detail/139271.html).
     *  *
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
     * @summary Queries the last five download records of slow query logs for an AnalyticDB for PostgreSQL instance.
     *  *
     * @param DescribeDownloadSQLLogsRequest $request DescribeDownloadSQLLogsRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDownloadSQLLogsResponse DescribeDownloadSQLLogsResponse
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
     * @summary Queries the last five download records of slow query logs for an AnalyticDB for PostgreSQL instance.
     *  *
     * @param DescribeDownloadSQLLogsRequest $request DescribeDownloadSQLLogsRequest
     *
     * @return DescribeDownloadSQLLogsResponse DescribeDownloadSQLLogsResponse
     */
    public function describeDownloadSQLLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDownloadSQLLogsWithOptions($request, $runtime);
    }

    /**
     * @summary 获取外部数据服务详情
     *  *
     * @param DescribeExternalDataServiceRequest $request DescribeExternalDataServiceRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeExternalDataServiceResponse DescribeExternalDataServiceResponse
     */
    public function describeExternalDataServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeExternalDataService',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeExternalDataServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取外部数据服务详情
     *  *
     * @param DescribeExternalDataServiceRequest $request DescribeExternalDataServiceRequest
     *
     * @return DescribeExternalDataServiceResponse DescribeExternalDataServiceResponse
     */
    public function describeExternalDataService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExternalDataServiceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries E-MapReduce (EMR) Hadoop clusters in a specific virtual private cloud (VPC).
     *  *
     * @param DescribeHadoopClustersInSameNetRequest $request DescribeHadoopClustersInSameNetRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeHadoopClustersInSameNetResponse DescribeHadoopClustersInSameNetResponse
     */
    public function describeHadoopClustersInSameNetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeHadoopClustersInSameNet',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeHadoopClustersInSameNetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries E-MapReduce (EMR) Hadoop clusters in a specific virtual private cloud (VPC).
     *  *
     * @param DescribeHadoopClustersInSameNetRequest $request DescribeHadoopClustersInSameNetRequest
     *
     * @return DescribeHadoopClustersInSameNetResponse DescribeHadoopClustersInSameNetResponse
     */
    public function describeHadoopClustersInSameNet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHadoopClustersInSameNetWithOptions($request, $runtime);
    }

    /**
     * @summary 获取hadoop配置信息
     *  *
     * @param DescribeHadoopConfigsRequest $request DescribeHadoopConfigsRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeHadoopConfigsResponse DescribeHadoopConfigsResponse
     */
    public function describeHadoopConfigsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->configName)) {
            $query['ConfigName'] = $request->configName;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->emrInstanceId)) {
            $query['EmrInstanceId'] = $request->emrInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeHadoopConfigs',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeHadoopConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取hadoop配置信息
     *  *
     * @param DescribeHadoopConfigsRequest $request DescribeHadoopConfigsRequest
     *
     * @return DescribeHadoopConfigsResponse DescribeHadoopConfigsResponse
     */
    public function describeHadoopConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHadoopConfigsWithOptions($request, $runtime);
    }

    /**
     * @summary Obtains the configurations of a Hadoop data source.
     *  *
     * @param DescribeHadoopDataSourceRequest $request DescribeHadoopDataSourceRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeHadoopDataSourceResponse DescribeHadoopDataSourceResponse
     */
    public function describeHadoopDataSourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->dataSourceId)) {
            $query['DataSourceId'] = $request->dataSourceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeHadoopDataSource',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeHadoopDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Obtains the configurations of a Hadoop data source.
     *  *
     * @param DescribeHadoopDataSourceRequest $request DescribeHadoopDataSourceRequest
     *
     * @return DescribeHadoopDataSourceResponse DescribeHadoopDataSourceResponse
     */
    public function describeHadoopDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHadoopDataSourceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the health status of an AnalyticDB for PostgreSQL instance and its nodes.
     *  *
     * @description This operation is called to query the health status of an AnalyticDB for PostgreSQL instance in elastic storage mode or Serverless mode and its coordinator and compute nodes.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @summary Queries the health status of an AnalyticDB for PostgreSQL instance and its nodes.
     *  *
     * @description This operation is called to query the health status of an AnalyticDB for PostgreSQL instance in elastic storage mode or Serverless mode and its coordinator and compute nodes.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @summary Queries the information about real-time materialized views of an AnalyticDB for PostgreSQL instance.
     *  *
     * @param DescribeIMVInfosRequest $request DescribeIMVInfosRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeIMVInfosResponse DescribeIMVInfosResponse
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
     * @summary Queries the information about real-time materialized views of an AnalyticDB for PostgreSQL instance.
     *  *
     * @param DescribeIMVInfosRequest $request DescribeIMVInfosRequest
     *
     * @return DescribeIMVInfosResponse DescribeIMVInfosResponse
     */
    public function describeIMVInfos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIMVInfosWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the configurations of a Java Database Connectivity (JDBC) data source.
     *  *
     * @param DescribeJDBCDataSourceRequest $request DescribeJDBCDataSourceRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeJDBCDataSourceResponse DescribeJDBCDataSourceResponse
     */
    public function describeJDBCDataSourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->dataSourceId)) {
            $query['DataSourceId'] = $request->dataSourceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeJDBCDataSource',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeJDBCDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the configurations of a Java Database Connectivity (JDBC) data source.
     *  *
     * @param DescribeJDBCDataSourceRequest $request DescribeJDBCDataSourceRequest
     *
     * @return DescribeJDBCDataSourceResponse DescribeJDBCDataSourceResponse
     */
    public function describeJDBCDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeJDBCDataSourceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of log backups.
     *  *
     * @param DescribeLogBackupsRequest $request DescribeLogBackupsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeLogBackupsResponse DescribeLogBackupsResponse
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
     * @summary Queries a list of log backups.
     *  *
     * @param DescribeLogBackupsRequest $request DescribeLogBackupsRequest
     *
     * @return DescribeLogBackupsResponse DescribeLogBackupsResponse
     */
    public function describeLogBackups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLogBackupsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the parameter modification logs of an AnalyticDB for PostgreSQL instance.
     *  *
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
     * @summary Queries the parameter modification logs of an AnalyticDB for PostgreSQL instance.
     *  *
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
     * @summary Queries the information about a namespace.
     *  *
     * @param DescribeNamespaceRequest $request DescribeNamespaceRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeNamespaceResponse DescribeNamespaceResponse
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
     * @summary Queries the information about a namespace.
     *  *
     * @param DescribeNamespaceRequest $request DescribeNamespaceRequest
     *
     * @return DescribeNamespaceResponse DescribeNamespaceResponse
     */
    public function describeNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNamespaceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about configuration parameters for an AnalyticDB for PostgreSQL instance.
     *  *
     * @description This operation can be called to query the details of parameters in an AnalyticDB for PostgreSQL instance in elastic storage mode or Serverless mode.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered and may affect your business. We recommend that you take note of the limit when you call this operation.
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
     * @summary Queries the information about configuration parameters for an AnalyticDB for PostgreSQL instance.
     *  *
     * @description This operation can be called to query the details of parameters in an AnalyticDB for PostgreSQL instance in elastic storage mode or Serverless mode.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered and may affect your business. We recommend that you take note of the limit when you call this operation.
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
     * @summary Queries a list of vSwitches.
     *  *
     * @description When you create AnalyticDB for PostgreSQL instances, you can call this operation to query the details of vSwitches within a specified region or zone.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @summary Queries a list of vSwitches.
     *  *
     * @description When you create AnalyticDB for PostgreSQL instances, you can call this operation to query the details of vSwitches within a specified region or zone.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @summary Queries a list of VPCs.
     *  *
     * @description When you create an AnalyticDB for PostgreSQL instance, you can call this operation to query the available VPCs within a specified region or zone.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @summary Queries a list of VPCs.
     *  *
     * @description When you create an AnalyticDB for PostgreSQL instance, you can call this operation to query the available VPCs within a specified region or zone.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @summary Queries a list of regions and zones where AnalyticDB for PostgreSQL is available.
     *  *
     * @description Before you create an AnalyticDB for PostgreSQL instance, you must call this operation to query available regions and zones.
     * ## Limit
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered and may affect your business. We recommend that you take note of the limit when you call this operation.
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
     * @summary Queries a list of regions and zones where AnalyticDB for PostgreSQL is available.
     *  *
     * @description Before you create an AnalyticDB for PostgreSQL instance, you must call this operation to query available regions and zones.
     * ## Limit
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered and may affect your business. We recommend that you take note of the limit when you call this operation.
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
     * @summary Queries a list of roles.
     *  *
     * @param DescribeRolesRequest $request DescribeRolesRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRolesResponse DescribeRolesResponse
     */
    public function describeRolesWithOptions($request, $runtime)
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
            'action'      => 'DescribeRoles',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRolesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of roles.
     *  *
     * @param DescribeRolesRequest $request DescribeRolesRequest
     *
     * @return DescribeRolesResponse DescribeRolesResponse
     */
    public function describeRoles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRolesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the number of audit logs for an AnalyticDB for PostgreSQL instance.
     *  *
     * @description This operation is not available for instances in reserved storage mode.
     *  *
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
     * @summary Queries the number of audit logs for an AnalyticDB for PostgreSQL instance.
     *  *
     * @description This operation is not available for instances in reserved storage mode.
     *  *
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
     * @summary Queries the SQL execution logs of an AnalyticDB for PostgreSQL instance.
     *  *
     * @description > This operation is no longer used. To query SQL execution logs, call the [DescribeSQLLogsV2](https://help.aliyun.com/document_detail/453722.html) operation.
     *  *
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
     * @summary Queries the SQL execution logs of an AnalyticDB for PostgreSQL instance.
     *  *
     * @description > This operation is no longer used. To query SQL execution logs, call the [DescribeSQLLogsV2](https://help.aliyun.com/document_detail/453722.html) operation.
     *  *
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
     * @summary Queries SQL logs within a specific time range.
     *  *
     * @description You can call this operation to query SQL logs of an AnalyticDB for PostgreSQL instance within a specific time range.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @summary Queries SQL logs within a specific time range.
     *  *
     * @description You can call this operation to query SQL logs of an AnalyticDB for PostgreSQL instance within a specific time range.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @summary Queries whether a sample dataset is loaded to an AnalyticDB for PostgreSQL instance.
     *  *
     * @description You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @summary Queries whether a sample dataset is loaded to an AnalyticDB for PostgreSQL instance.
     *  *
     * @description You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @summary Queries a real-time data service.
     *  *
     * @param DescribeStreamingDataServiceRequest $request DescribeStreamingDataServiceRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeStreamingDataServiceResponse DescribeStreamingDataServiceResponse
     */
    public function describeStreamingDataServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeStreamingDataService',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeStreamingDataServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a real-time data service.
     *  *
     * @param DescribeStreamingDataServiceRequest $request DescribeStreamingDataServiceRequest
     *
     * @return DescribeStreamingDataServiceResponse DescribeStreamingDataServiceResponse
     */
    public function describeStreamingDataService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeStreamingDataServiceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a real-time data source.
     *  *
     * @param DescribeStreamingDataSourceRequest $request DescribeStreamingDataSourceRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeStreamingDataSourceResponse DescribeStreamingDataSourceResponse
     */
    public function describeStreamingDataSourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->dataSourceId)) {
            $query['DataSourceId'] = $request->dataSourceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeStreamingDataSource',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeStreamingDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a real-time data source.
     *  *
     * @param DescribeStreamingDataSourceRequest $request DescribeStreamingDataSourceRequest
     *
     * @return DescribeStreamingDataSourceResponse DescribeStreamingDataSourceResponse
     */
    public function describeStreamingDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeStreamingDataSourceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a real-time data service.
     *  *
     * @param DescribeStreamingJobRequest $request DescribeStreamingJobRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeStreamingJobResponse DescribeStreamingJobResponse
     */
    public function describeStreamingJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeStreamingJob',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeStreamingJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a real-time data service.
     *  *
     * @param DescribeStreamingJobRequest $request DescribeStreamingJobRequest
     *
     * @return DescribeStreamingJobResponse DescribeStreamingJobResponse
     */
    public function describeStreamingJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeStreamingJobWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the features that are supported by an AnalyticDB for PostgreSQL instance.
     *  *
     * @param DescribeSupportFeaturesRequest $request DescribeSupportFeaturesRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSupportFeaturesResponse DescribeSupportFeaturesResponse
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
     * @summary Queries the features that are supported by an AnalyticDB for PostgreSQL instance.
     *  *
     * @param DescribeSupportFeaturesRequest $request DescribeSupportFeaturesRequest
     *
     * @return DescribeSupportFeaturesResponse DescribeSupportFeaturesResponse
     */
    public function describeSupportFeatures($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSupportFeaturesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of tags for AnalyticDB for PostgreSQL instances.
     *  *
     * @param DescribeTagsRequest $request DescribeTagsRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTagsResponse DescribeTagsResponse
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
     * @summary Queries a list of tags for AnalyticDB for PostgreSQL instances.
     *  *
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
     * @summary Queries a list of Key Management Service (KMS) keys.
     *  *
     * @param DescribeUserEncryptionKeyListRequest $request DescribeUserEncryptionKeyListRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeUserEncryptionKeyListResponse DescribeUserEncryptionKeyListResponse
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
     * @summary Queries a list of Key Management Service (KMS) keys.
     *  *
     * @param DescribeUserEncryptionKeyListRequest $request DescribeUserEncryptionKeyListRequest
     *
     * @return DescribeUserEncryptionKeyListResponse DescribeUserEncryptionKeyListResponse
     */
    public function describeUserEncryptionKeyList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserEncryptionKeyListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a lock-waiting query for an AnalyticDB for PostgreSQL instance.
     *  *
     * @description You can call this operation to query the details of a lock-waiting query only for an AnalyticDB for PostgreSQL V6.0 instance in elastic storage mode.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @summary Queries the information about a lock-waiting query for an AnalyticDB for PostgreSQL instance.
     *  *
     * @description You can call this operation to query the details of a lock-waiting query only for an AnalyticDB for PostgreSQL V6.0 instance in elastic storage mode.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @summary Queries the lock diagnostic records of an AnalyticDB for PostgreSQL instance.
     *  *
     * @description You can call this operation to query the lock diagnostics records only for an AnalyticDB for PostgreSQL V6.0 instance in elastic storage mode.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @summary Queries the lock diagnostic records of an AnalyticDB for PostgreSQL instance.
     *  *
     * @description You can call this operation to query the lock diagnostics records only for an AnalyticDB for PostgreSQL V6.0 instance in elastic storage mode.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @summary Disables resource group management for an AnalyticDB for PostgreSQL V6.0 instance in elastic storage mode. After you disable resource group management, the resource management method of the instance switches from resource group management to resource queue management.
     *  *
     * @description *   You can call this operation only for AnalyticDB for PostgreSQL V6.0 instances in elastic storage mode whose minor version is V6.6.1.0 or later.
     * *   You can call this operation to disable resource group management only for AnalyticDB for PostgreSQL instances that are in the **Running** state.
     * *   **Note: When the resource management method is switched, your AnalyticDB for PostgreSQL instance restarts and becomes unavailable for approximately 5 minutes. To prevent your business from being affected, call this operation during off-peak hours.
     *  *
     * @param DisableDBResourceGroupRequest $request DisableDBResourceGroupRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DisableDBResourceGroupResponse DisableDBResourceGroupResponse
     */
    public function disableDBResourceGroupWithOptions($request, $runtime)
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
            'action'      => 'DisableDBResourceGroup',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableDBResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Disables resource group management for an AnalyticDB for PostgreSQL V6.0 instance in elastic storage mode. After you disable resource group management, the resource management method of the instance switches from resource group management to resource queue management.
     *  *
     * @description *   You can call this operation only for AnalyticDB for PostgreSQL V6.0 instances in elastic storage mode whose minor version is V6.6.1.0 or later.
     * *   You can call this operation to disable resource group management only for AnalyticDB for PostgreSQL instances that are in the **Running** state.
     * *   **Note: When the resource management method is switched, your AnalyticDB for PostgreSQL instance restarts and becomes unavailable for approximately 5 minutes. To prevent your business from being affected, call this operation during off-peak hours.
     *  *
     * @param DisableDBResourceGroupRequest $request DisableDBResourceGroupRequest
     *
     * @return DisableDBResourceGroupResponse DisableDBResourceGroupResponse
     */
    public function disableDBResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableDBResourceGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Downloads the query diagnostic information of an AnalyticDB for PostgreSQL instance.
     *  *
     * @description You can call this operation to download the query diagnostic information of an AnalyticDB for PostgreSQL instance. After the download is complete, you can call the [DescribeDownloadRecords](https://help.aliyun.com/document_detail/447712.html) operation to query download records and download URLs.
     * This operation is available only for instances of V6.3.10.1 or later in elastic storage mode. For more information about how to view and update the minor engine version of an instance, see [View the minor engine version](https://help.aliyun.com/document_detail/277424.html) and [Update the minor engine version](https://help.aliyun.com/document_detail/139271.html).
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @summary Downloads the query diagnostic information of an AnalyticDB for PostgreSQL instance.
     *  *
     * @description You can call this operation to download the query diagnostic information of an AnalyticDB for PostgreSQL instance. After the download is complete, you can call the [DescribeDownloadRecords](https://help.aliyun.com/document_detail/447712.html) operation to query download records and download URLs.
     * This operation is available only for instances of V6.3.10.1 or later in elastic storage mode. For more information about how to view and update the minor engine version of an instance, see [View the minor engine version](https://help.aliyun.com/document_detail/277424.html) and [Update the minor engine version](https://help.aliyun.com/document_detail/139271.html).
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @summary Download the slow query logs of an AnalyticDB for PostgreSQL instance.
     *  *
     * @param DownloadSQLLogsRecordsRequest $request DownloadSQLLogsRecordsRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DownloadSQLLogsRecordsResponse DownloadSQLLogsRecordsResponse
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
     * @summary Download the slow query logs of an AnalyticDB for PostgreSQL instance.
     *  *
     * @param DownloadSQLLogsRecordsRequest $request DownloadSQLLogsRecordsRequest
     *
     * @return DownloadSQLLogsRecordsResponse DownloadSQLLogsRecordsResponse
     */
    public function downloadSQLLogsRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->downloadSQLLogsRecordsWithOptions($request, $runtime);
    }

    /**
     * @summary Enables resource group management for an AnalyticDB for PostgreSQL V6.0 instance in elastic storage mode. After resource group management is enabled, the resource management mode of the instance is changed from resource queue to resource group.
     *  *
     * @description *   You can call this operation only for AnalyticDB for PostgreSQL V6.0 instances in elastic storage mode whose minor version is V6.6.1.0 or later.
     * *   You can call this operation to enable resource group management only for AnalyticDB for PostgreSQL instances that are in the **Running** state.
     * *   **Note: When the resource management mode is changed, your AnalyticDB for PostgreSQL instance is restarted and remains unavailable within 5 minutes. To prevent your business from being affected, call this operation during off-peak hours.
     *  *
     * @param EnableDBResourceGroupRequest $request EnableDBResourceGroupRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableDBResourceGroupResponse EnableDBResourceGroupResponse
     */
    public function enableDBResourceGroupWithOptions($request, $runtime)
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
            'action'      => 'EnableDBResourceGroup',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableDBResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Enables resource group management for an AnalyticDB for PostgreSQL V6.0 instance in elastic storage mode. After resource group management is enabled, the resource management mode of the instance is changed from resource queue to resource group.
     *  *
     * @description *   You can call this operation only for AnalyticDB for PostgreSQL V6.0 instances in elastic storage mode whose minor version is V6.6.1.0 or later.
     * *   You can call this operation to enable resource group management only for AnalyticDB for PostgreSQL instances that are in the **Running** state.
     * *   **Note: When the resource management mode is changed, your AnalyticDB for PostgreSQL instance is restarted and remains unavailable within 5 minutes. To prevent your business from being affected, call this operation during off-peak hours.
     *  *
     * @param EnableDBResourceGroupRequest $request EnableDBResourceGroupRequest
     *
     * @return EnableDBResourceGroupResponse EnableDBResourceGroupResponse
     */
    public function enableDBResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableDBResourceGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the progress and result of an asynchronous document upload job based on the job ID.
     *  *
     * @description This operation is related to the UploadDocumentAsync operation. You can call the UploadDocumentAsync operation to create an upload job and obtain the job ID, and then call the GetUploadDocumentJob operation to query the execution information of the job.
     * >  Suggestions:
     * *   Determine whether the document upload job times out based on the document complexity and the number of tokens after chunking. In most cases, a job that lasts more than 2 hours is considered timeout.
     *  *
     * @param GetUploadDocumentJobRequest $request GetUploadDocumentJobRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetUploadDocumentJobResponse GetUploadDocumentJobResponse
     */
    public function getUploadDocumentJobWithOptions($request, $runtime)
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
        $body = [];
        if (!Utils::isUnset($request->collection)) {
            $body['Collection'] = $request->collection;
        }
        if (!Utils::isUnset($request->jobId)) {
            $body['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $body['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->namespacePassword)) {
            $body['NamespacePassword'] = $request->namespacePassword;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetUploadDocumentJob',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetUploadDocumentJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the progress and result of an asynchronous document upload job based on the job ID.
     *  *
     * @description This operation is related to the UploadDocumentAsync operation. You can call the UploadDocumentAsync operation to create an upload job and obtain the job ID, and then call the GetUploadDocumentJob operation to query the execution information of the job.
     * >  Suggestions:
     * *   Determine whether the document upload job times out based on the document complexity and the number of tokens after chunking. In most cases, a job that lasts more than 2 hours is considered timeout.
     *  *
     * @param GetUploadDocumentJobRequest $request GetUploadDocumentJobRequest
     *
     * @return GetUploadDocumentJobResponse GetUploadDocumentJobResponse
     */
    public function getUploadDocumentJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUploadDocumentJobWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the progress and result of an asynchronous vector data upload job by using a job ID.
     *  *
     * @description This operation is related to the `UpsertCollectionDataAsync` operation. You can call the `UpsertCollectionDataAsync` operation to create an upload job and obtain a job ID, and then call the GetUpsertCollectionDataJob operation to query the execution information of the job.
     * >  We recommend that you evaluate the amount of time required for the upload job based on 1,000 data entries every second, and then query the job progress every 5 seconds. The timeout period can be set to 30 minutes after the evaluated amount of time.
     *  *
     * @param GetUpsertCollectionDataJobRequest $request GetUpsertCollectionDataJobRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return GetUpsertCollectionDataJobResponse GetUpsertCollectionDataJobResponse
     */
    public function getUpsertCollectionDataJobWithOptions($request, $runtime)
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
        $body = [];
        if (!Utils::isUnset($request->collection)) {
            $body['Collection'] = $request->collection;
        }
        if (!Utils::isUnset($request->jobId)) {
            $body['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $body['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->namespacePassword)) {
            $body['NamespacePassword'] = $request->namespacePassword;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetUpsertCollectionDataJob',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetUpsertCollectionDataJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the progress and result of an asynchronous vector data upload job by using a job ID.
     *  *
     * @description This operation is related to the `UpsertCollectionDataAsync` operation. You can call the `UpsertCollectionDataAsync` operation to create an upload job and obtain a job ID, and then call the GetUpsertCollectionDataJob operation to query the execution information of the job.
     * >  We recommend that you evaluate the amount of time required for the upload job based on 1,000 data entries every second, and then query the job progress every 5 seconds. The timeout period can be set to 30 minutes after the evaluated amount of time.
     *  *
     * @param GetUpsertCollectionDataJobRequest $request GetUpsertCollectionDataJobRequest
     *
     * @return GetUpsertCollectionDataJobResponse GetUpsertCollectionDataJobResponse
     */
    public function getUpsertCollectionDataJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUpsertCollectionDataJobWithOptions($request, $runtime);
    }

    /**
     * @summary Grants vector collection permissions to a namespace.
     *  *
     * @param GrantCollectionRequest $request GrantCollectionRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return GrantCollectionResponse GrantCollectionResponse
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
     * @summary Grants vector collection permissions to a namespace.
     *  *
     * @param GrantCollectionRequest $request GrantCollectionRequest
     *
     * @return GrantCollectionResponse GrantCollectionResponse
     */
    public function grantCollection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->grantCollectionWithOptions($request, $runtime);
    }

    /**
     * @summary Processes active queries.
     *  *
     * @param HandleActiveSQLRecordRequest $request HandleActiveSQLRecordRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return HandleActiveSQLRecordResponse HandleActiveSQLRecordResponse
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
     * @summary Processes active queries.
     *  *
     * @param HandleActiveSQLRecordRequest $request HandleActiveSQLRecordRequest
     *
     * @return HandleActiveSQLRecordResponse HandleActiveSQLRecordResponse
     */
    public function handleActiveSQLRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->handleActiveSQLRecordWithOptions($request, $runtime);
    }

    /**
     * @summary Initializes vector databases.
     *  *
     * @param InitVectorDatabaseRequest $request InitVectorDatabaseRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return InitVectorDatabaseResponse InitVectorDatabaseResponse
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
     * @summary Initializes vector databases.
     *  *
     * @param InitVectorDatabaseRequest $request InitVectorDatabaseRequest
     *
     * @return InitVectorDatabaseResponse InitVectorDatabaseResponse
     */
    public function initVectorDatabase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->initVectorDatabaseWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of vector collections.
     *  *
     * @param ListCollectionsRequest $request ListCollectionsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListCollectionsResponse ListCollectionsResponse
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
     * @summary Queries a list of vector collections.
     *  *
     * @param ListCollectionsRequest $request ListCollectionsRequest
     *
     * @return ListCollectionsResponse ListCollectionsResponse
     */
    public function listCollections($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCollectionsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of document collections.
     *  *
     * @param ListDocumentCollectionsRequest $request ListDocumentCollectionsRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDocumentCollectionsResponse ListDocumentCollectionsResponse
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
     * @summary Queries a list of document collections.
     *  *
     * @param ListDocumentCollectionsRequest $request ListDocumentCollectionsRequest
     *
     * @return ListDocumentCollectionsResponse ListDocumentCollectionsResponse
     */
    public function listDocumentCollections($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDocumentCollectionsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of documents in a collection.
     *  *
     * @param ListDocumentsRequest $request ListDocumentsRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDocumentsResponse ListDocumentsResponse
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
     * @summary Queries a list of documents in a collection.
     *  *
     * @param ListDocumentsRequest $request ListDocumentsRequest
     *
     * @return ListDocumentsResponse ListDocumentsResponse
     */
    public function listDocuments($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDocumentsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of external data sources.
     *  *
     * @param ListExternalDataServicesRequest $request ListExternalDataServicesRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListExternalDataServicesResponse ListExternalDataServicesResponse
     */
    public function listExternalDataServicesWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListExternalDataServices',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListExternalDataServicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of external data sources.
     *  *
     * @param ListExternalDataServicesRequest $request ListExternalDataServicesRequest
     *
     * @return ListExternalDataServicesResponse ListExternalDataServicesResponse
     */
    public function listExternalDataServices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listExternalDataServicesWithOptions($request, $runtime);
    }

    /**
     * @summary 获取实例外表配置列表
     *  *
     * @param ListExternalDataSourcesRequest $request ListExternalDataSourcesRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ListExternalDataSourcesResponse ListExternalDataSourcesResponse
     */
    public function listExternalDataSourcesWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListExternalDataSources',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListExternalDataSourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取实例外表配置列表
     *  *
     * @param ListExternalDataSourcesRequest $request ListExternalDataSourcesRequest
     *
     * @return ListExternalDataSourcesResponse ListExternalDataSourcesResponse
     */
    public function listExternalDataSources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listExternalDataSourcesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of extensions.
     *  *
     * @param ListInstanceExtensionsRequest $request ListInstanceExtensionsRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ListInstanceExtensionsResponse ListInstanceExtensionsResponse
     */
    public function listInstanceExtensionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->extension)) {
            $query['Extension'] = $request->extension;
        }
        if (!Utils::isUnset($request->installStatus)) {
            $query['InstallStatus'] = $request->installStatus;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListInstanceExtensions',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListInstanceExtensionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of extensions.
     *  *
     * @param ListInstanceExtensionsRequest $request ListInstanceExtensionsRequest
     *
     * @return ListInstanceExtensionsResponse ListInstanceExtensionsResponse
     */
    public function listInstanceExtensions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstanceExtensionsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of namespaces.
     *  *
     * @param ListNamespacesRequest $request ListNamespacesRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListNamespacesResponse ListNamespacesResponse
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
     * @summary Queries a list of namespaces.
     *  *
     * @param ListNamespacesRequest $request ListNamespacesRequest
     *
     * @return ListNamespacesResponse ListNamespacesResponse
     */
    public function listNamespaces($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNamespacesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about real-time data services.
     *  *
     * @param ListStreamingDataServicesRequest $request ListStreamingDataServicesRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListStreamingDataServicesResponse ListStreamingDataServicesResponse
     */
    public function listStreamingDataServicesWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListStreamingDataServices',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListStreamingDataServicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about real-time data services.
     *  *
     * @param ListStreamingDataServicesRequest $request ListStreamingDataServicesRequest
     *
     * @return ListStreamingDataServicesResponse ListStreamingDataServicesResponse
     */
    public function listStreamingDataServices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listStreamingDataServicesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries real-time service data sources.
     *  *
     * @param ListStreamingDataSourcesRequest $request ListStreamingDataSourcesRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListStreamingDataSourcesResponse ListStreamingDataSourcesResponse
     */
    public function listStreamingDataSourcesWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListStreamingDataSources',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListStreamingDataSourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries real-time service data sources.
     *  *
     * @param ListStreamingDataSourcesRequest $request ListStreamingDataSourcesRequest
     *
     * @return ListStreamingDataSourcesResponse ListStreamingDataSourcesResponse
     */
    public function listStreamingDataSources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listStreamingDataSourcesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries real-time data service jobs.
     *  *
     * @param ListStreamingJobsRequest $request ListStreamingJobsRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListStreamingJobsResponse ListStreamingJobsResponse
     */
    public function listStreamingJobsWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListStreamingJobs',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListStreamingJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries real-time data service jobs.
     *  *
     * @param ListStreamingJobsRequest $request ListStreamingJobsRequest
     *
     * @return ListStreamingJobsResponse ListStreamingJobsResponse
     */
    public function listStreamingJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listStreamingJobsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of tags that are added to AnalyticDB for PostgreSQL instances.
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
     * @summary Queries a list of tags that are added to AnalyticDB for PostgreSQL instances.
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
     * @summary Modifies the description of a database account for an AnalyticDB for PostgreSQL instance.
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
     * @summary Modifies the description of a database account for an AnalyticDB for PostgreSQL instance.
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
     * @summary Configures the backup policy of an AnalyticDB for PostgreSQL instance.
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
     * @summary Configures the backup policy of an AnalyticDB for PostgreSQL instance.
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
     * @summary Changes the threshold of computing resources and the wait period of idle resources for an AnalyticDB for PostgreSQL instance in Serverless automatic scheduling mode.
     *  *
     * @param ModifyDBInstanceConfigRequest $request ModifyDBInstanceConfigRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBInstanceConfigResponse ModifyDBInstanceConfigResponse
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
     * @summary Changes the threshold of computing resources and the wait period of idle resources for an AnalyticDB for PostgreSQL instance in Serverless automatic scheduling mode.
     *  *
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
     * @summary Changes the endpoint of an AnalyticDB for PostgreSQL instance.
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
     * @summary Changes the endpoint of an AnalyticDB for PostgreSQL instance.
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
     * @summary Changes the description of an AnalyticDB for PostgreSQL instance.
     *  *
     * @description To make it easy to identify AnalyticDB for PostgreSQL instances, you can call this operation to modify the description of instances.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @summary Changes the description of an AnalyticDB for PostgreSQL instance.
     *  *
     * @description To make it easy to identify AnalyticDB for PostgreSQL instances, you can call this operation to modify the description of instances.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @summary Modifies the maintenance window of an AnalyticDB for PostgreSQL instance.
     *  *
     * @description The system maintains AnalyticDB for PostgreSQL instances during the maintenance window that you specify. We recommend that you set the maintenance window to off-peak hours to minimize the impact on your business.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @summary Modifies the maintenance window of an AnalyticDB for PostgreSQL instance.
     *  *
     * @description The system maintains AnalyticDB for PostgreSQL instances during the maintenance window that you specify. We recommend that you set the maintenance window to off-peak hours to minimize the impact on your business.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @summary Moves an AnalyticDB for PostgreSQL instance to a resource group.
     *  *
     * @description Resource Management allows you to build an organizational structure for resources based on your business requirements. You can use resource directories, folders, accounts, and resource groups to hierarchically organize and manage resources. For more information, see [What is Resource Management?](https://help.aliyun.com/document_detail/94475.html)
     *  *
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
     * @summary Moves an AnalyticDB for PostgreSQL instance to a resource group.
     *  *
     * @description Resource Management allows you to build an organizational structure for resources based on your business requirements. You can use resource directories, folders, accounts, and resource groups to hierarchically organize and manage resources. For more information, see [What is Resource Management?](https://help.aliyun.com/document_detail/94475.html)
     *  *
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
     * @summary Enables, disables, or updates SSL encryption for an AnalyticDB for PostgreSQL instance.
     *  *
     * @param ModifyDBInstanceSSLRequest $request ModifyDBInstanceSSLRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBInstanceSSLResponse ModifyDBInstanceSSLResponse
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
     * @summary Enables, disables, or updates SSL encryption for an AnalyticDB for PostgreSQL instance.
     *  *
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
     * @summary Modifies the configurations of a resource group.
     *  *
     * @param ModifyDBResourceGroupRequest $tmpReq  ModifyDBResourceGroupRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBResourceGroupResponse ModifyDBResourceGroupResponse
     */
    public function modifyDBResourceGroupWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ModifyDBResourceGroupShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->resourceGroupItems)) {
            $request->resourceGroupItemsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->resourceGroupItems, 'ResourceGroupItems', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceGroupItemsShrink)) {
            $query['ResourceGroupItems'] = $request->resourceGroupItemsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDBResourceGroup',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the configurations of a resource group.
     *  *
     * @param ModifyDBResourceGroupRequest $request ModifyDBResourceGroupRequest
     *
     * @return ModifyDBResourceGroupResponse ModifyDBResourceGroupResponse
     */
    public function modifyDBResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBResourceGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies an external data service.
     *  *
     * @param ModifyExternalDataServiceRequest $request ModifyExternalDataServiceRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyExternalDataServiceResponse ModifyExternalDataServiceResponse
     */
    public function modifyExternalDataServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceDescription)) {
            $query['ServiceDescription'] = $request->serviceDescription;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->serviceSpec)) {
            $query['ServiceSpec'] = $request->serviceSpec;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyExternalDataService',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyExternalDataServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies an external data service.
     *  *
     * @param ModifyExternalDataServiceRequest $request ModifyExternalDataServiceRequest
     *
     * @return ModifyExternalDataServiceResponse ModifyExternalDataServiceResponse
     */
    public function modifyExternalDataService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyExternalDataServiceWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the configurations of a Hadoop data source.
     *  *
     * @param ModifyHadoopDataSourceRequest $request ModifyHadoopDataSourceRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyHadoopDataSourceResponse ModifyHadoopDataSourceResponse
     */
    public function modifyHadoopDataSourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->dataSourceDescription)) {
            $query['DataSourceDescription'] = $request->dataSourceDescription;
        }
        if (!Utils::isUnset($request->dataSourceId)) {
            $query['DataSourceId'] = $request->dataSourceId;
        }
        if (!Utils::isUnset($request->dataSourceType)) {
            $query['DataSourceType'] = $request->dataSourceType;
        }
        if (!Utils::isUnset($request->emrInstanceId)) {
            $query['EmrInstanceId'] = $request->emrInstanceId;
        }
        if (!Utils::isUnset($request->HDFSConf)) {
            $query['HDFSConf'] = $request->HDFSConf;
        }
        if (!Utils::isUnset($request->hadoopCoreConf)) {
            $query['HadoopCoreConf'] = $request->hadoopCoreConf;
        }
        if (!Utils::isUnset($request->hadoopCreateType)) {
            $query['HadoopCreateType'] = $request->hadoopCreateType;
        }
        if (!Utils::isUnset($request->hadoopHostsAddress)) {
            $query['HadoopHostsAddress'] = $request->hadoopHostsAddress;
        }
        if (!Utils::isUnset($request->hiveConf)) {
            $query['HiveConf'] = $request->hiveConf;
        }
        if (!Utils::isUnset($request->mapReduceConf)) {
            $query['MapReduceConf'] = $request->mapReduceConf;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->yarnConf)) {
            $query['YarnConf'] = $request->yarnConf;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyHadoopDataSource',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyHadoopDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the configurations of a Hadoop data source.
     *  *
     * @param ModifyHadoopDataSourceRequest $request ModifyHadoopDataSourceRequest
     *
     * @return ModifyHadoopDataSourceResponse ModifyHadoopDataSourceResponse
     */
    public function modifyHadoopDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyHadoopDataSourceWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the configurations of a Java Database Connectivity (JDBC) data source.
     *  *
     * @param ModifyJDBCDataSourceRequest $request ModifyJDBCDataSourceRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyJDBCDataSourceResponse ModifyJDBCDataSourceResponse
     */
    public function modifyJDBCDataSourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->dataSourceDescription)) {
            $query['DataSourceDescription'] = $request->dataSourceDescription;
        }
        if (!Utils::isUnset($request->dataSourceId)) {
            $query['DataSourceId'] = $request->dataSourceId;
        }
        if (!Utils::isUnset($request->dataSourceType)) {
            $query['DataSourceType'] = $request->dataSourceType;
        }
        if (!Utils::isUnset($request->JDBCConnectionString)) {
            $query['JDBCConnectionString'] = $request->JDBCConnectionString;
        }
        if (!Utils::isUnset($request->JDBCPassword)) {
            $query['JDBCPassword'] = $request->JDBCPassword;
        }
        if (!Utils::isUnset($request->JDBCUserName)) {
            $query['JDBCUserName'] = $request->JDBCUserName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyJDBCDataSource',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyJDBCDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the configurations of a Java Database Connectivity (JDBC) data source.
     *  *
     * @param ModifyJDBCDataSourceRequest $request ModifyJDBCDataSourceRequest
     *
     * @return ModifyJDBCDataSourceResponse ModifyJDBCDataSourceResponse
     */
    public function modifyJDBCDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyJDBCDataSourceWithOptions($request, $runtime);
    }

    /**
     * @summary Changes the specifications of coordinator node resources for an AnalyticDB for PostgreSQL instance.
     *  *
     * @description This operation is not available for instances in reserved storage mode.
     * Before you call this operation, make sure that you are familiar with the billing of AnalyticDB for PostgreSQL. For more information, see [Billing methods](https://help.aliyun.com/document_detail/35406.html) and [AnalyticDB for PostgreSQL pricing](https://www.alibabacloud.com/zh/product/hybriddb-postgresql/pricing).
     *  *
     * @param ModifyMasterSpecRequest $request ModifyMasterSpecRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyMasterSpecResponse ModifyMasterSpecResponse
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
     * @summary Changes the specifications of coordinator node resources for an AnalyticDB for PostgreSQL instance.
     *  *
     * @description This operation is not available for instances in reserved storage mode.
     * Before you call this operation, make sure that you are familiar with the billing of AnalyticDB for PostgreSQL. For more information, see [Billing methods](https://help.aliyun.com/document_detail/35406.html) and [AnalyticDB for PostgreSQL pricing](https://www.alibabacloud.com/zh/product/hybriddb-postgresql/pricing).
     *  *
     * @param ModifyMasterSpecRequest $request ModifyMasterSpecRequest
     *
     * @return ModifyMasterSpecResponse ModifyMasterSpecResponse
     */
    public function modifyMasterSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyMasterSpecWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the configuration parameters of an AnalyticDB for PostgreSQL instance.
     *  *
     * @description This operation can be called to modify parameters of an AnalyticDB for PostgreSQL instance in elastic storage mode or Serverless mode.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered and may affect your business. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @summary Modifies the configuration parameters of an AnalyticDB for PostgreSQL instance.
     *  *
     * @description This operation can be called to modify parameters of an AnalyticDB for PostgreSQL instance in elastic storage mode or Serverless mode.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered and may affect your business. We recommend that you take note of the limit when you call this operation.
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
     * @summary Enables or disables the SQL Explorer feature for an AnalyticDB for PostgreSQL instance.
     *  *
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
     * @summary Enables or disables the SQL Explorer feature for an AnalyticDB for PostgreSQL instance.
     *  *
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
     * @summary Modifies the IP address whitelist of an AnalyticDB for PostgreSQL instance.
     *  *
     * @description To ensure the security and stability of AnalyticDB for PostgreSQL instances, the system denies all external IP addresses to access AnalyticDB for PostgreSQL instances by default. Before you can use an AnalyticDB for PostgreSQL instance, you must add the IP address or CIDR block of your client to the IP address whitelist of the instance.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
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
     * @summary Modifies the IP address whitelist of an AnalyticDB for PostgreSQL instance.
     *  *
     * @description To ensure the security and stability of AnalyticDB for PostgreSQL instances, the system denies all external IP addresses to access AnalyticDB for PostgreSQL instances by default. Before you can use an AnalyticDB for PostgreSQL instance, you must add the IP address or CIDR block of your client to the IP address whitelist of the instance.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
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
     * @summary Modifies a real-time data service.
     *  *
     * @param ModifyStreamingDataServiceRequest $request ModifyStreamingDataServiceRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyStreamingDataServiceResponse ModifyStreamingDataServiceResponse
     */
    public function modifyStreamingDataServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceDescription)) {
            $query['ServiceDescription'] = $request->serviceDescription;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->serviceSpec)) {
            $query['ServiceSpec'] = $request->serviceSpec;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyStreamingDataService',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyStreamingDataServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies a real-time data service.
     *  *
     * @param ModifyStreamingDataServiceRequest $request ModifyStreamingDataServiceRequest
     *
     * @return ModifyStreamingDataServiceResponse ModifyStreamingDataServiceResponse
     */
    public function modifyStreamingDataService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyStreamingDataServiceWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies a real-time service data source.
     *  *
     * @param ModifyStreamingDataSourceRequest $request ModifyStreamingDataSourceRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyStreamingDataSourceResponse ModifyStreamingDataSourceResponse
     */
    public function modifyStreamingDataSourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->dataSourceConfig)) {
            $query['DataSourceConfig'] = $request->dataSourceConfig;
        }
        if (!Utils::isUnset($request->dataSourceDescription)) {
            $query['DataSourceDescription'] = $request->dataSourceDescription;
        }
        if (!Utils::isUnset($request->dataSourceId)) {
            $query['DataSourceId'] = $request->dataSourceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyStreamingDataSource',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyStreamingDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies a real-time service data source.
     *  *
     * @param ModifyStreamingDataSourceRequest $request ModifyStreamingDataSourceRequest
     *
     * @return ModifyStreamingDataSourceResponse ModifyStreamingDataSourceResponse
     */
    public function modifyStreamingDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyStreamingDataSourceWithOptions($request, $runtime);
    }

    /**
     * @summary 创建外部数据源配置
     *  *
     * @param ModifyStreamingJobRequest $tmpReq  ModifyStreamingJobRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyStreamingJobResponse ModifyStreamingJobResponse
     */
    public function modifyStreamingJobWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ModifyStreamingJobShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->destColumns)) {
            $request->destColumnsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->destColumns, 'DestColumns', 'json');
        }
        if (!Utils::isUnset($tmpReq->matchColumns)) {
            $request->matchColumnsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->matchColumns, 'MatchColumns', 'json');
        }
        if (!Utils::isUnset($tmpReq->srcColumns)) {
            $request->srcColumnsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->srcColumns, 'SrcColumns', 'json');
        }
        if (!Utils::isUnset($tmpReq->updateColumns)) {
            $request->updateColumnsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->updateColumns, 'UpdateColumns', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->account)) {
            $query['Account'] = $request->account;
        }
        if (!Utils::isUnset($request->consistency)) {
            $query['Consistency'] = $request->consistency;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->destColumnsShrink)) {
            $query['DestColumns'] = $request->destColumnsShrink;
        }
        if (!Utils::isUnset($request->destDatabase)) {
            $query['DestDatabase'] = $request->destDatabase;
        }
        if (!Utils::isUnset($request->destSchema)) {
            $query['DestSchema'] = $request->destSchema;
        }
        if (!Utils::isUnset($request->destTable)) {
            $query['DestTable'] = $request->destTable;
        }
        if (!Utils::isUnset($request->errorLimitCount)) {
            $query['ErrorLimitCount'] = $request->errorLimitCount;
        }
        if (!Utils::isUnset($request->fallbackOffset)) {
            $query['FallbackOffset'] = $request->fallbackOffset;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->jobConfig)) {
            $query['JobConfig'] = $request->jobConfig;
        }
        if (!Utils::isUnset($request->jobDescription)) {
            $query['JobDescription'] = $request->jobDescription;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->matchColumnsShrink)) {
            $query['MatchColumns'] = $request->matchColumnsShrink;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->srcColumnsShrink)) {
            $query['SrcColumns'] = $request->srcColumnsShrink;
        }
        if (!Utils::isUnset($request->tryRun)) {
            $query['TryRun'] = $request->tryRun;
        }
        if (!Utils::isUnset($request->updateColumnsShrink)) {
            $query['UpdateColumns'] = $request->updateColumnsShrink;
        }
        if (!Utils::isUnset($request->writeMode)) {
            $query['WriteMode'] = $request->writeMode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyStreamingJob',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyStreamingJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建外部数据源配置
     *  *
     * @param ModifyStreamingJobRequest $request ModifyStreamingJobRequest
     *
     * @return ModifyStreamingJobResponse ModifyStreamingJobResponse
     */
    public function modifyStreamingJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyStreamingJobWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the vector engine optimization configuration of an AnalyticDB for PostgreSQL instance.
     *  *
     * @param ModifyVectorConfigurationRequest $request ModifyVectorConfigurationRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyVectorConfigurationResponse ModifyVectorConfigurationResponse
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
     * @summary Modifies the vector engine optimization configuration of an AnalyticDB for PostgreSQL instance.
     *  *
     * @param ModifyVectorConfigurationRequest $request ModifyVectorConfigurationRequest
     *
     * @return ModifyVectorConfigurationResponse ModifyVectorConfigurationResponse
     */
    public function modifyVectorConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyVectorConfigurationWithOptions($request, $runtime);
    }

    /**
     * @summary Pauses data redistribution.
     *  *
     * @param PauseDataRedistributeRequest $request PauseDataRedistributeRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return PauseDataRedistributeResponse PauseDataRedistributeResponse
     */
    public function pauseDataRedistributeWithOptions($request, $runtime)
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
            'action'      => 'PauseDataRedistribute',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PauseDataRedistributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Pauses data redistribution.
     *  *
     * @param PauseDataRedistributeRequest $request PauseDataRedistributeRequest
     *
     * @return PauseDataRedistributeResponse PauseDataRedistributeResponse
     */
    public function pauseDataRedistribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pauseDataRedistributeWithOptions($request, $runtime);
    }

    /**
     * @summary Pauses an AnalyticDB for PostgreSQL instance.
     *  *
     * @description You can call this operation to pause an AnalyticDB for PostgreSQL instance that is in the **Running** state.
     * This operation is available only for AnalyticDB for PostgreSQL instances in Serverless mode that run V1.0.2.1 or later. For more information about how to view and update the minor engine version of an instance, see [View the minor engine version](https://help.aliyun.com/document_detail/277424.html) and [Update the minor engine version](https://help.aliyun.com/document_detail/139271.html).
     * >  Before you call this operation, make sure that you are familiar with the billing methods and pricing of AnalyticDB for PostgreSQL instances. For more information, see [Billing methods](https://help.aliyun.com/document_detail/35406.html) and [AnalyticDB for PostgreSQL pricing](https://www.alibabacloud.com/zh/product/hybriddb-postgresql/pricing).
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @summary Pauses an AnalyticDB for PostgreSQL instance.
     *  *
     * @description You can call this operation to pause an AnalyticDB for PostgreSQL instance that is in the **Running** state.
     * This operation is available only for AnalyticDB for PostgreSQL instances in Serverless mode that run V1.0.2.1 or later. For more information about how to view and update the minor engine version of an instance, see [View the minor engine version](https://help.aliyun.com/document_detail/277424.html) and [Update the minor engine version](https://help.aliyun.com/document_detail/139271.html).
     * >  Before you call this operation, make sure that you are familiar with the billing methods and pricing of AnalyticDB for PostgreSQL instances. For more information, see [Billing methods](https://help.aliyun.com/document_detail/35406.html) and [AnalyticDB for PostgreSQL pricing](https://www.alibabacloud.com/zh/product/hybriddb-postgresql/pricing).
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @summary Retrieves vector data.
     *  *
     * @param QueryCollectionDataRequest $tmpReq  QueryCollectionDataRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryCollectionDataResponse QueryCollectionDataResponse
     */
    public function queryCollectionDataWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryCollectionDataShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->hybridSearchArgs)) {
            $request->hybridSearchArgsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->hybridSearchArgs, 'HybridSearchArgs', 'json');
        }
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
        if (!Utils::isUnset($request->hybridSearch)) {
            $query['HybridSearch'] = $request->hybridSearch;
        }
        if (!Utils::isUnset($request->hybridSearchArgsShrink)) {
            $query['HybridSearchArgs'] = $request->hybridSearchArgsShrink;
        }
        if (!Utils::isUnset($request->includeMetadataFields)) {
            $query['IncludeMetadataFields'] = $request->includeMetadataFields;
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
        if (!Utils::isUnset($request->offset)) {
            $query['Offset'] = $request->offset;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $query['OrderBy'] = $request->orderBy;
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
     * @summary Retrieves vector data.
     *  *
     * @param QueryCollectionDataRequest $request QueryCollectionDataRequest
     *
     * @return QueryCollectionDataResponse QueryCollectionDataResponse
     */
    public function queryCollectionData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCollectionDataWithOptions($request, $runtime);
    }

    /**
     * @summary 查询
     *  *
     * @param QueryContentRequest $tmpReq  QueryContentRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryContentResponse QueryContentResponse
     */
    public function queryContentWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryContentShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->hybridSearchArgs)) {
            $request->hybridSearchArgsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->hybridSearchArgs, 'HybridSearchArgs', 'json');
        }
        if (!Utils::isUnset($tmpReq->recallWindow)) {
            $request->recallWindowShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->recallWindow, 'RecallWindow', 'json');
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
        if (!Utils::isUnset($request->fileName)) {
            $query['FileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->fileUrl)) {
            $query['FileUrl'] = $request->fileUrl;
        }
        if (!Utils::isUnset($request->filter)) {
            $query['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->hybridSearch)) {
            $query['HybridSearch'] = $request->hybridSearch;
        }
        if (!Utils::isUnset($request->hybridSearchArgsShrink)) {
            $query['HybridSearchArgs'] = $request->hybridSearchArgsShrink;
        }
        if (!Utils::isUnset($request->includeMetadataFields)) {
            $query['IncludeMetadataFields'] = $request->includeMetadataFields;
        }
        if (!Utils::isUnset($request->includeVector)) {
            $query['IncludeVector'] = $request->includeVector;
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
        if (!Utils::isUnset($request->recallWindowShrink)) {
            $query['RecallWindow'] = $request->recallWindowShrink;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->rerankFactor)) {
            $query['RerankFactor'] = $request->rerankFactor;
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
     * @summary 查询
     *  *
     * @param QueryContentRequest $request QueryContentRequest
     *
     * @return QueryContentResponse QueryContentResponse
     */
    public function queryContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryContentWithOptions($request, $runtime);
    }

    /**
     * @param QueryContentAdvanceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryContentResponse
     */
    public function queryContentAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::empty_($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        if (Utils::isUnset($credentialType)) {
            $credentialType = 'access_key';
        }
        $authConfig = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken'   => $securityToken,
            'type'            => $credentialType,
            'endpoint'        => $openPlatformEndpoint,
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'gpdb',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig    = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient     = new OSS($ossConfig);
        $fileObj       = new FileField([]);
        $ossHeader     = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime    = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        OpenApiUtilClient::convert($runtime, $ossRuntime);
        $queryContentReq = new QueryContentRequest([]);
        OpenApiUtilClient::convert($request, $queryContentReq);
        if (!Utils::isUnset($request->fileUrlObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->body->objectKey,
                'content'     => $request->fileUrlObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId'         => $authResponse->body->accessKeyId,
                'policy'              => $authResponse->body->encodedPolicy,
                'signature'           => $authResponse->body->signature,
                'key'                 => $authResponse->body->objectKey,
                'file'                => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->body->bucket,
                'header'     => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $queryContentReq->fileUrl = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->queryContentWithOptions($queryContentReq, $runtime);
    }

    /**
     * @summary Rebalances an AnalyticDB for PostgreSQL instance.
     *  *
     * @param RebalanceDBInstanceRequest $request RebalanceDBInstanceRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return RebalanceDBInstanceResponse RebalanceDBInstanceResponse
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
     * @summary Rebalances an AnalyticDB for PostgreSQL instance.
     *  *
     * @param RebalanceDBInstanceRequest $request RebalanceDBInstanceRequest
     *
     * @return RebalanceDBInstanceResponse RebalanceDBInstanceResponse
     */
    public function rebalanceDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rebalanceDBInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Releases the public endpoint of an AnalyticDB for PostgreSQL instance.
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
     * @summary Releases the public endpoint of an AnalyticDB for PostgreSQL instance.
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
     * @summary Resets the password of a database account for an AnalyticDB for PostgreSQL instance.
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
     * @summary Resets the password of a database account for an AnalyticDB for PostgreSQL instance.
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
     * @summary Resets the IMV statistics.
     *  *
     * @param ResetIMVMonitorDataRequest $request ResetIMVMonitorDataRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ResetIMVMonitorDataResponse ResetIMVMonitorDataResponse
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
     * @summary Resets the IMV statistics.
     *  *
     * @param ResetIMVMonitorDataRequest $request ResetIMVMonitorDataRequest
     *
     * @return ResetIMVMonitorDataResponse ResetIMVMonitorDataResponse
     */
    public function resetIMVMonitorData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetIMVMonitorDataWithOptions($request, $runtime);
    }

    /**
     * @summary Restarts an AnalyticDB for PostgreSQL instance.
     *  *
     * @description A restart takes about 3 to 30 minutes. During the restart, services are unavailable. We recommend that you restart the instance during off-peak hours. After the instance is restarted and enters the running state, you can access the instance.
     * ## Limit
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered and may affect your business. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @summary Restarts an AnalyticDB for PostgreSQL instance.
     *  *
     * @description A restart takes about 3 to 30 minutes. During the restart, services are unavailable. We recommend that you restart the instance during off-peak hours. After the instance is restarted and enters the running state, you can access the instance.
     * ## Limit
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered and may affect your business. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @summary Resumes data redistribution.
     *  *
     * @param ResumeDataRedistributeRequest $request ResumeDataRedistributeRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ResumeDataRedistributeResponse ResumeDataRedistributeResponse
     */
    public function resumeDataRedistributeWithOptions($request, $runtime)
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
            'action'      => 'ResumeDataRedistribute',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResumeDataRedistributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Resumes data redistribution.
     *  *
     * @param ResumeDataRedistributeRequest $request ResumeDataRedistributeRequest
     *
     * @return ResumeDataRedistributeResponse ResumeDataRedistributeResponse
     */
    public function resumeDataRedistribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resumeDataRedistributeWithOptions($request, $runtime);
    }

    /**
     * @summary Resumes an AnalyticDB for PostgreSQL instance.
     *  *
     * @description You can call this operation to resume an AnalyticDB for PostgreSQL instance that is in the **Paused** state.
     * This operation is available only for AnalyticDB for PostgreSQL instances in Serverless mode that run V1.0.2.1 or later. For more information about how to view and update the minor engine version of an instance, see [View the minor engine version](https://help.aliyun.com/document_detail/277424.html) and [Update the minor engine version](https://help.aliyun.com/document_detail/139271.html).
     * >  Before you call this operation, make sure that you are familiar with the billing methods and pricing of AnalyticDB for PostgreSQL instances. For more information, see [Billing methods](https://help.aliyun.com/document_detail/35406.html) and [AnalyticDB for PostgreSQL pricing](https://www.alibabacloud.com/zh/product/hybriddb-postgresql/pricing).
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @summary Resumes an AnalyticDB for PostgreSQL instance.
     *  *
     * @description You can call this operation to resume an AnalyticDB for PostgreSQL instance that is in the **Paused** state.
     * This operation is available only for AnalyticDB for PostgreSQL instances in Serverless mode that run V1.0.2.1 or later. For more information about how to view and update the minor engine version of an instance, see [View the minor engine version](https://help.aliyun.com/document_detail/277424.html) and [Update the minor engine version](https://help.aliyun.com/document_detail/139271.html).
     * >  Before you call this operation, make sure that you are familiar with the billing methods and pricing of AnalyticDB for PostgreSQL instances. For more information, see [Billing methods](https://help.aliyun.com/document_detail/35406.html) and [AnalyticDB for PostgreSQL pricing](https://www.alibabacloud.com/zh/product/hybriddb-postgresql/pricing).
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @summary Enables or disables a plan for an AnalyticDB for PostgreSQL instance.
     *  *
     * @description You can call this operation to enable or disable a specified plan. The plan management feature is supported only for AnalyticDB for PostgreSQL instances in Serverless mode.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @summary Enables or disables a plan for an AnalyticDB for PostgreSQL instance.
     *  *
     * @description You can call this operation to enable or disable a specified plan. The plan management feature is supported only for AnalyticDB for PostgreSQL instances in Serverless mode.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @summary Enables or disables data sharing for an AnalyticDB for PostgreSQL instance.
     *  *
     * @description This operation is called to enable or disable data sharing for an AnalyticDB for PostgreSQL instance in Serverless mode.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation.
     *  *
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
     * @summary Enables or disables data sharing for an AnalyticDB for PostgreSQL instance.
     *  *
     * @description This operation is called to enable or disable data sharing for an AnalyticDB for PostgreSQL instance in Serverless mode.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation.
     *  *
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
     * @summary Switches between the internal and public endpoints of an AnalyticDB for PostgreSQL instance.
     *  *
     * @description This operation is not supported for AnalyticDB for PostgreSQL instances in elastic storage mode or Serverless mode.
     *  *
     * @param SwitchDBInstanceNetTypeRequest $request SwitchDBInstanceNetTypeRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return SwitchDBInstanceNetTypeResponse SwitchDBInstanceNetTypeResponse
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
     * @summary Switches between the internal and public endpoints of an AnalyticDB for PostgreSQL instance.
     *  *
     * @description This operation is not supported for AnalyticDB for PostgreSQL instances in elastic storage mode or Serverless mode.
     *  *
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
     * @summary Creates and adds tags to AnalyticDB for PostgreSQL instances.
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
     * @summary Creates and adds tags to AnalyticDB for PostgreSQL instances.
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
     * @summary Unbinds database roles from a resource group.
     *  *
     * @param UnbindDBResourceGroupWithRoleRequest $tmpReq  UnbindDBResourceGroupWithRoleRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return UnbindDBResourceGroupWithRoleResponse UnbindDBResourceGroupWithRoleResponse
     */
    public function unbindDBResourceGroupWithRoleWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UnbindDBResourceGroupWithRoleShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->roleList)) {
            $request->roleListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->roleList, 'RoleList', 'simple');
        }
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceGroupName)) {
            $query['ResourceGroupName'] = $request->resourceGroupName;
        }
        if (!Utils::isUnset($request->roleListShrink)) {
            $query['RoleList'] = $request->roleListShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UnbindDBResourceGroupWithRole',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnbindDBResourceGroupWithRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Unbinds database roles from a resource group.
     *  *
     * @param UnbindDBResourceGroupWithRoleRequest $request UnbindDBResourceGroupWithRoleRequest
     *
     * @return UnbindDBResourceGroupWithRoleResponse UnbindDBResourceGroupWithRoleResponse
     */
    public function unbindDBResourceGroupWithRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindDBResourceGroupWithRoleWithOptions($request, $runtime);
    }

    /**
     * @summary Releases a sample dataset from an AnalyticDB for PostgreSQL instance.
     *  *
     * @description You can call this operation to release a sample dataset from an AnalyticDB for PostgreSQL instance. You must have already loaded the sample dataset.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @summary Releases a sample dataset from an AnalyticDB for PostgreSQL instance.
     *  *
     * @description You can call this operation to release a sample dataset from an AnalyticDB for PostgreSQL instance. You must have already loaded the sample dataset.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @summary Removes tags from AnalyticDB for PostgreSQL instances. If the tags that you remove are not added to other instances, the tags are automatically deleted.
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
     * @summary Removes tags from AnalyticDB for PostgreSQL instances. If the tags that you remove are not added to other instances, the tags are automatically deleted.
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

    /**
     * @summary Updates metadata in the vector data.
     *  *
     * @param UpdateCollectionDataMetadataRequest $tmpReq  UpdateCollectionDataMetadataRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateCollectionDataMetadataResponse UpdateCollectionDataMetadataResponse
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
     * @summary Updates metadata in the vector data.
     *  *
     * @param UpdateCollectionDataMetadataRequest $request UpdateCollectionDataMetadataRequest
     *
     * @return UpdateCollectionDataMetadataResponse UpdateCollectionDataMetadataResponse
     */
    public function updateCollectionDataMetadata($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCollectionDataMetadataWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies a plan for an AnalyticDB for PostgreSQL instance.
     *  *
     * @description You can call this operation to modify a plan for an AnalyticDB for PostgreSQL instance in Serverless mode. For example, you can modify a plan for periodically pausing and resuming an instance or scaling an instance.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @summary Modifies a plan for an AnalyticDB for PostgreSQL instance.
     *  *
     * @description You can call this operation to modify a plan for an AnalyticDB for PostgreSQL instance in Serverless mode. For example, you can modify a plan for periodically pausing and resuming an instance or scaling an instance.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
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
     * @summary Changes the configurations of an AnalyticDB for PostgreSQL instance.
     *  *
     * @description This operation is not available for instances in reserved storage mode.
     * Before you call this operation, make sure that you are familiar with the billing of AnalyticDB for PostgreSQL. For more information, see [Billing methods](https://help.aliyun.com/document_detail/35406.html) and [AnalyticDB for PostgreSQL pricing](https://www.alibabacloud.com/zh/product/hybriddb-postgresql/pricing).
     *  *
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
     * @summary Changes the configurations of an AnalyticDB for PostgreSQL instance.
     *  *
     * @description This operation is not available for instances in reserved storage mode.
     * Before you call this operation, make sure that you are familiar with the billing of AnalyticDB for PostgreSQL. For more information, see [Billing methods](https://help.aliyun.com/document_detail/35406.html) and [AnalyticDB for PostgreSQL pricing](https://www.alibabacloud.com/zh/product/hybriddb-postgresql/pricing).
     *  *
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
     * @summary Upgrades the minor version of an AnalyticDB for PostgreSQL instance.
     *  *
     * @param UpgradeDBVersionRequest $request UpgradeDBVersionRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return UpgradeDBVersionResponse UpgradeDBVersionResponse
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
     * @summary Upgrades the minor version of an AnalyticDB for PostgreSQL instance.
     *  *
     * @param UpgradeDBVersionRequest $request UpgradeDBVersionRequest
     *
     * @return UpgradeDBVersionResponse UpgradeDBVersionResponse
     */
    public function upgradeDBVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeDBVersionWithOptions($request, $runtime);
    }

    /**
     * @summary Updates extensions.
     *  *
     * @param UpgradeExtensionsRequest $request UpgradeExtensionsRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return UpgradeExtensionsResponse UpgradeExtensionsResponse
     */
    public function upgradeExtensionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->extensions)) {
            $query['Extensions'] = $request->extensions;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpgradeExtensions',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpgradeExtensionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates extensions.
     *  *
     * @param UpgradeExtensionsRequest $request UpgradeExtensionsRequest
     *
     * @return UpgradeExtensionsResponse UpgradeExtensionsResponse
     */
    public function upgradeExtensions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeExtensionsWithOptions($request, $runtime);
    }

    /**
     * @summary Uploads a document in an asynchronous manner by using an on-premises file or an Internet-accessible file URL. After a document is uploaded, the server loads, chunks, embeds, and stores the document. A document can be up to 200 MB in size.
     *  *
     * @description The server loads and chunks a document based on the file extension, performs vectorization by using the embedding model that is specified when you call the CreateDocumentCollection operation, and then writes the document to the specified document collection. This operation supports multi-modal embedding for various formats of text and images.
     * Related operations:
     * *   You can call the GetUploadDocumentJob operation to query the progress and result of a document upload job.
     * *   You can call the CancelUploadDocumentJob operation to cancel a document upload job.
     * >
     * *   After a document upload request is submitted, the request is queued for processing. Up to 20 documents in the Pending and Running states can be processed within a Resource Access Management (RAM) user or Alibaba Cloud account.
     * *   A text document can be split into up to 100,000 chunks.
     * *   If a document collection uses the OnePeace model, each RAM user or Alibaba Cloud account can upload and query up to 10,000 images.
     *  *
     * @param UploadDocumentAsyncRequest $tmpReq  UploadDocumentAsyncRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return UploadDocumentAsyncResponse UploadDocumentAsyncResponse
     */
    public function uploadDocumentAsyncWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UploadDocumentAsyncShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->metadata)) {
            $request->metadataShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->metadata, 'Metadata', 'json');
        }
        if (!Utils::isUnset($tmpReq->separators)) {
            $request->separatorsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->separators, 'Separators', 'json');
        }
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
        $body = [];
        if (!Utils::isUnset($request->chunkOverlap)) {
            $body['ChunkOverlap'] = $request->chunkOverlap;
        }
        if (!Utils::isUnset($request->chunkSize)) {
            $body['ChunkSize'] = $request->chunkSize;
        }
        if (!Utils::isUnset($request->collection)) {
            $body['Collection'] = $request->collection;
        }
        if (!Utils::isUnset($request->documentLoaderName)) {
            $body['DocumentLoaderName'] = $request->documentLoaderName;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->fileName)) {
            $body['FileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->fileUrl)) {
            $body['FileUrl'] = $request->fileUrl;
        }
        if (!Utils::isUnset($request->metadataShrink)) {
            $body['Metadata'] = $request->metadataShrink;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $body['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->namespacePassword)) {
            $body['NamespacePassword'] = $request->namespacePassword;
        }
        if (!Utils::isUnset($request->separatorsShrink)) {
            $body['Separators'] = $request->separatorsShrink;
        }
        if (!Utils::isUnset($request->textSplitterName)) {
            $body['TextSplitterName'] = $request->textSplitterName;
        }
        if (!Utils::isUnset($request->zhTitleEnhance)) {
            $body['ZhTitleEnhance'] = $request->zhTitleEnhance;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UploadDocumentAsync',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UploadDocumentAsyncResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Uploads a document in an asynchronous manner by using an on-premises file or an Internet-accessible file URL. After a document is uploaded, the server loads, chunks, embeds, and stores the document. A document can be up to 200 MB in size.
     *  *
     * @description The server loads and chunks a document based on the file extension, performs vectorization by using the embedding model that is specified when you call the CreateDocumentCollection operation, and then writes the document to the specified document collection. This operation supports multi-modal embedding for various formats of text and images.
     * Related operations:
     * *   You can call the GetUploadDocumentJob operation to query the progress and result of a document upload job.
     * *   You can call the CancelUploadDocumentJob operation to cancel a document upload job.
     * >
     * *   After a document upload request is submitted, the request is queued for processing. Up to 20 documents in the Pending and Running states can be processed within a Resource Access Management (RAM) user or Alibaba Cloud account.
     * *   A text document can be split into up to 100,000 chunks.
     * *   If a document collection uses the OnePeace model, each RAM user or Alibaba Cloud account can upload and query up to 10,000 images.
     *  *
     * @param UploadDocumentAsyncRequest $request UploadDocumentAsyncRequest
     *
     * @return UploadDocumentAsyncResponse UploadDocumentAsyncResponse
     */
    public function uploadDocumentAsync($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadDocumentAsyncWithOptions($request, $runtime);
    }

    /**
     * @param UploadDocumentAsyncAdvanceRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return UploadDocumentAsyncResponse
     */
    public function uploadDocumentAsyncAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::empty_($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        if (Utils::isUnset($credentialType)) {
            $credentialType = 'access_key';
        }
        $authConfig = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken'   => $securityToken,
            'type'            => $credentialType,
            'endpoint'        => $openPlatformEndpoint,
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'gpdb',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig    = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient     = new OSS($ossConfig);
        $fileObj       = new FileField([]);
        $ossHeader     = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime    = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        OpenApiUtilClient::convert($runtime, $ossRuntime);
        $uploadDocumentAsyncReq = new UploadDocumentAsyncRequest([]);
        OpenApiUtilClient::convert($request, $uploadDocumentAsyncReq);
        if (!Utils::isUnset($request->fileUrlObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->body->objectKey,
                'content'     => $request->fileUrlObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId'         => $authResponse->body->accessKeyId,
                'policy'              => $authResponse->body->encodedPolicy,
                'signature'           => $authResponse->body->signature,
                'key'                 => $authResponse->body->objectKey,
                'file'                => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->body->bucket,
                'header'     => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $uploadDocumentAsyncReq->fileUrl = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->uploadDocumentAsyncWithOptions($uploadDocumentAsyncReq, $runtime);
    }

    /**
     * @summary Splits a document into chunks and uploads the vectorized chunks to a document collection.
     *  *
     * @param UpsertChunksRequest $tmpReq  UpsertChunksRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return UpsertChunksResponse UpsertChunksResponse
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
     * @summary Splits a document into chunks and uploads the vectorized chunks to a document collection.
     *  *
     * @param UpsertChunksRequest $request UpsertChunksRequest
     *
     * @return UpsertChunksResponse UpsertChunksResponse
     */
    public function upsertChunks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upsertChunksWithOptions($request, $runtime);
    }

    /**
     * @summary Uploads vector data to a vector collection.
     *  *
     * @param UpsertCollectionDataRequest $tmpReq  UpsertCollectionDataRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return UpsertCollectionDataResponse UpsertCollectionDataResponse
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
     * @summary Uploads vector data to a vector collection.
     *  *
     * @param UpsertCollectionDataRequest $request UpsertCollectionDataRequest
     *
     * @return UpsertCollectionDataResponse UpsertCollectionDataResponse
     */
    public function upsertCollectionData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upsertCollectionDataWithOptions($request, $runtime);
    }

    /**
     * @summary Uploads vector data in an asynchronous manner by using an on-premises file or a password-free Internet-accessible file URL. The vector data can be up to 200 MB in size.
     *  *
     * @description This operation is the asynchronous operation of `UpsertCollectionData`. The `UpsertCollectionData` operation supports up to 10 MB of data, and this operation supports up to 200 MB of data.
     * >  Related operations:
     * *   You can call the GetUpsertCollectionDataJob operation to query the progress and result of an upload job.
     * *   You can call the CancelUpsertCollectionDataJob operation to cancel an upload job.
     * > You can upload data for the same collection only in a serial manner.
     *  *
     * @param UpsertCollectionDataAsyncRequest $request UpsertCollectionDataAsyncRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return UpsertCollectionDataAsyncResponse UpsertCollectionDataAsyncResponse
     */
    public function upsertCollectionDataAsyncWithOptions($request, $runtime)
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
        $body = [];
        if (!Utils::isUnset($request->collection)) {
            $body['Collection'] = $request->collection;
        }
        if (!Utils::isUnset($request->fileUrl)) {
            $body['FileUrl'] = $request->fileUrl;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $body['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->namespacePassword)) {
            $body['NamespacePassword'] = $request->namespacePassword;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpsertCollectionDataAsync',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpsertCollectionDataAsyncResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Uploads vector data in an asynchronous manner by using an on-premises file or a password-free Internet-accessible file URL. The vector data can be up to 200 MB in size.
     *  *
     * @description This operation is the asynchronous operation of `UpsertCollectionData`. The `UpsertCollectionData` operation supports up to 10 MB of data, and this operation supports up to 200 MB of data.
     * >  Related operations:
     * *   You can call the GetUpsertCollectionDataJob operation to query the progress and result of an upload job.
     * *   You can call the CancelUpsertCollectionDataJob operation to cancel an upload job.
     * > You can upload data for the same collection only in a serial manner.
     *  *
     * @param UpsertCollectionDataAsyncRequest $request UpsertCollectionDataAsyncRequest
     *
     * @return UpsertCollectionDataAsyncResponse UpsertCollectionDataAsyncResponse
     */
    public function upsertCollectionDataAsync($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upsertCollectionDataAsyncWithOptions($request, $runtime);
    }

    /**
     * @param UpsertCollectionDataAsyncAdvanceRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return UpsertCollectionDataAsyncResponse
     */
    public function upsertCollectionDataAsyncAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::empty_($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        if (Utils::isUnset($credentialType)) {
            $credentialType = 'access_key';
        }
        $authConfig = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken'   => $securityToken,
            'type'            => $credentialType,
            'endpoint'        => $openPlatformEndpoint,
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'gpdb',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig    = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient     = new OSS($ossConfig);
        $fileObj       = new FileField([]);
        $ossHeader     = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime    = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        OpenApiUtilClient::convert($runtime, $ossRuntime);
        $upsertCollectionDataAsyncReq = new UpsertCollectionDataAsyncRequest([]);
        OpenApiUtilClient::convert($request, $upsertCollectionDataAsyncReq);
        if (!Utils::isUnset($request->fileUrlObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->body->objectKey,
                'content'     => $request->fileUrlObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId'         => $authResponse->body->accessKeyId,
                'policy'              => $authResponse->body->encodedPolicy,
                'signature'           => $authResponse->body->signature,
                'key'                 => $authResponse->body->objectKey,
                'file'                => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->body->bucket,
                'header'     => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $upsertCollectionDataAsyncReq->fileUrl = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->upsertCollectionDataAsyncWithOptions($upsertCollectionDataAsyncReq, $runtime);
    }
}
