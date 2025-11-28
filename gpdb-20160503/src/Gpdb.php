<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503;

use AlibabaCloud\Dara\Dara;
use AlibabaCloud\Dara\Exception\DaraException;
use AlibabaCloud\Dara\Exception\DaraUnableRetryException;
use AlibabaCloud\Dara\Models\FileField;
use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Request;
use AlibabaCloud\Dara\RetryPolicy\RetryPolicyContext;
use AlibabaCloud\Dara\Util\FormUtil;
use AlibabaCloud\Dara\Util\StreamUtil;
use AlibabaCloud\Dara\Util\XML;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\AddAINodeRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\AddAINodeResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\AllocateInstancePublicConnectionRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\AllocateInstancePublicConnectionResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\BindDBResourceGroupWithRoleRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\BindDBResourceGroupWithRoleResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\BindDBResourceGroupWithRoleShrinkRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CancelCreateIndexJobRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CancelCreateIndexJobResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CancelUploadDocumentJobRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CancelUploadDocumentJobResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CancelUpsertCollectionDataJobRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CancelUpsertCollectionDataJobResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ChatWithKnowledgeBaseRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ChatWithKnowledgeBaseResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ChatWithKnowledgeBaseShrinkRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ChatWithKnowledgeBaseStreamRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ChatWithKnowledgeBaseStreamResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ChatWithKnowledgeBaseStreamShrinkRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CheckHadoopDataSourceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CheckHadoopDataSourceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CheckHadoopNetConnectionRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CheckHadoopNetConnectionResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CheckJDBCSourceNetConnectionRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CheckJDBCSourceNetConnectionResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CheckServiceLinkedRoleRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CheckServiceLinkedRoleResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CloneDBInstanceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CloneDBInstanceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateAccountRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateAccountResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateBackupRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateBackupResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateCollectionRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateCollectionResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateCollectionShrinkRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateDatabaseRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateDatabaseResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateDBInstanceIPArrayRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateDBInstanceIPArrayResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateDBInstanceIPArrayShrinkRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateDBInstancePlanRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateDBInstancePlanResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateDBInstanceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateDBInstanceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateDBResourceGroupRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateDBResourceGroupResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateDocumentCollectionRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateDocumentCollectionResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateDocumentCollectionShrinkRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateExtensionsRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateExtensionsResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateExternalDataServiceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateExternalDataServiceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateHadoopDataSourceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateHadoopDataSourceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateIndexRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateIndexResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateJDBCDataSourceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateJDBCDataSourceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateModelServiceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateModelServiceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateModelServiceShrinkRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateNamespaceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateNamespaceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateRemoteADBDataSourceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateRemoteADBDataSourceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateSampleDataRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateSampleDataResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateSecretRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateSecretResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateServiceLinkedRoleRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateServiceLinkedRoleResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateStreamingDataServiceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateStreamingDataServiceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateStreamingDataSourceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateStreamingDataSourceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateStreamingJobRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateStreamingJobResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateStreamingJobShrinkRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateSupabaseProjectRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateSupabaseProjectResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateVectorIndexRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateVectorIndexResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteAccountRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteAccountResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteAINodeRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteAINodeResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteBackupRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteBackupResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteCollectionDataRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteCollectionDataResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteCollectionRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteCollectionResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteDatabaseRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteDatabaseResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteDBInstanceIPArrayRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteDBInstanceIPArrayResponse;
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
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteIndexRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteIndexResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteJDBCDataSourceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteJDBCDataSourceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteModelServiceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteModelServiceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteNamespaceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteNamespaceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeletePrivateRAGServiceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeletePrivateRAGServiceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteRemoteADBDataSourceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteRemoteADBDataSourceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteSecretRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteSecretResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteStreamingDataServiceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteStreamingDataServiceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteStreamingDataSourceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteStreamingDataSourceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteStreamingJobRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteStreamingJobResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteSupabaseProjectRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteSupabaseProjectResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteVectorIndexRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteVectorIndexResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeployPrivateRAGServiceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeployPrivateRAGServiceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeAccountsRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeAccountsResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeActiveSQLRecordsRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeActiveSQLRecordsResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeAvailableResourcesRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeAvailableResourcesResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeBackupJobRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeBackupJobResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeBackupPolicyRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeBackupPolicyResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeCollectionRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeCollectionResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeCreateIndexJobRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeCreateIndexJobResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDataBackupsRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDataBackupsResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDatabaseRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDatabaseResponse;
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
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeExtensionRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeExtensionResponse;
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
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeIndexRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeIndexResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeJDBCDataSourceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeJDBCDataSourceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeLogBackupsRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeLogBackupsResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeModelServiceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeModelServiceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeModifyParameterLogRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeModifyParameterLogResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeNamespaceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeNamespaceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeParametersRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeParametersResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribePrivateRAGServiceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribePrivateRAGServiceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeRdsVpcsRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeRdsVpcsResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeRdsVSwitchsRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeRdsVSwitchsResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeRebalanceStatusRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeRebalanceStatusResponse;
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
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeTableRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeTableResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeTagsRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeTagsResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeUserEncryptionKeyListRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeUserEncryptionKeyListResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeWaitingSQLInfoRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeWaitingSQLInfoResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeWaitingSQLRecordsRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeWaitingSQLRecordsResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeZonesPrivateRAGServiceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeZonesPrivateRAGServiceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DisableDBResourceGroupRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DisableDBResourceGroupResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DownloadDiagnosisRecordsRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DownloadDiagnosisRecordsResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DownloadSlowSQLRecordsRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DownloadSlowSQLRecordsResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DownloadSQLLogsRecordsRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DownloadSQLLogsRecordsResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\EnableCollectionGraphRAGRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\EnableCollectionGraphRAGResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\EnableCollectionGraphRAGShrinkRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\EnableDBResourceGroupRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\EnableDBResourceGroupResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ExecuteStatementRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ExecuteStatementResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ExecuteStatementShrinkRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\GetAccountRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\GetAccountResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\GetGraphRAGJobRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\GetGraphRAGJobResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\GetSecretValueRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\GetSecretValueResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\GetStatementResultRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\GetStatementResultResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\GetSupabaseProjectApiKeysRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\GetSupabaseProjectApiKeysResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\GetSupabaseProjectDashboardAccountRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\GetSupabaseProjectDashboardAccountResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\GetSupabaseProjectRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\GetSupabaseProjectResponse;
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
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListAINodePoolsRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListAINodePoolsResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListBackupJobsRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListBackupJobsResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListCollectionsRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListCollectionsResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListDatabaseExtensionsRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListDatabaseExtensionsResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListDatabasesRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListDatabasesResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListDocumentCollectionsRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListDocumentCollectionsResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListDocumentsRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListDocumentsResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListExternalDataServicesRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListExternalDataServicesResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListExternalDataSourcesRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListExternalDataSourcesResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListIndicesRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListIndicesResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListInstanceDatabasesRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListInstanceDatabasesResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListInstanceExtensionsRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListInstanceExtensionsResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListModelServicesRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListModelServicesResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListNamespacesRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListNamespacesResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListRemoteADBDataSourcesRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListRemoteADBDataSourcesResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListSchemasRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListSchemasResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListSecretsRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListSecretsResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListSlowSQLRecordsRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListSlowSQLRecordsResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListStreamingDataServicesRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListStreamingDataServicesResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListStreamingDataSourcesRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListStreamingDataSourcesResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListStreamingJobsRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListStreamingJobsResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListSupabaseProjectsRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListSupabaseProjectsResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListSupportModelsRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListSupportModelsResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListTablesRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListTablesResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyAccountDescriptionRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyAccountDescriptionResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyBackupPolicyRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyBackupPolicyResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyCollectionRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyCollectionResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyDBInstanceConfigRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyDBInstanceConfigResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyDBInstanceConnectionStringRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyDBInstanceConnectionStringResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyDBInstanceDeploymentModeRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyDBInstanceDeploymentModeResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyDBInstanceDescriptionRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyDBInstanceDescriptionResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyDBInstanceMaintainTimeRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyDBInstanceMaintainTimeResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyDBInstanceNetworkTypeRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyDBInstanceNetworkTypeResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyDBInstancePayTypeRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyDBInstancePayTypeResponse;
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
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyRemoteADBDataSourceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyRemoteADBDataSourceResponse;
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
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifySupabaseProjectSecurityIpsRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifySupabaseProjectSecurityIpsResponse;
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
use AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryKnowledgeBasesContentRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryKnowledgeBasesContentResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryKnowledgeBasesContentShrinkRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\RebalanceDBInstanceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\RebalanceDBInstanceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ReleaseInstancePublicConnectionRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ReleaseInstancePublicConnectionResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\RerankRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\RerankResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\RerankShrinkRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ResetAccountPasswordRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ResetAccountPasswordResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ResetIMVMonitorDataRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ResetIMVMonitorDataResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ResetSupabaseProjectPasswordRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ResetSupabaseProjectPasswordResponse;
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
use AlibabaCloud\SDK\Gpdb\V20160503\Models\TextEmbeddingRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\TextEmbeddingResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\TextEmbeddingShrinkRequest;
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
use Darabonba\OpenApi\Exceptions\ClientException;
use Darabonba\OpenApi\Models\Config;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Gpdb extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'cn-beijing' => 'gpdb.aliyuncs.com',
            'cn-hangzhou' => 'gpdb.aliyuncs.com',
            'cn-shanghai' => 'gpdb.aliyuncs.com',
            'cn-shenzhen' => 'gpdb.aliyuncs.com',
            'cn-hongkong' => 'gpdb.aliyuncs.com',
            'ap-southeast-1' => 'gpdb.aliyuncs.com',
            'us-west-1' => 'gpdb.aliyuncs.com',
            'us-east-1' => 'gpdb.aliyuncs.com',
            'cn-hangzhou-finance' => 'gpdb.aliyuncs.com',
            'cn-shanghai-finance-1' => 'gpdb.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'gpdb.aliyuncs.com',
            'cn-qingdao' => 'gpdb.aliyuncs.com',
            'cn-north-2-gov-1' => 'gpdb.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('gpdb', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param string         $bucketName
     * @param mixed[]        $form
     * @param RuntimeOptions $runtime
     *
     * @return mixed[]
     */
    public function _postOSSObject($bucketName, $form, $runtime)
    {
        $_runtime = [
            'key' => '' . ($runtime->key ?: $this->_key),
            'cert' => '' . ($runtime->cert ?: $this->_cert),
            'ca' => '' . ($runtime->ca ?: $this->_ca),
            'readTimeout' => (($runtime->readTimeout ?: $this->_readTimeout) + 0),
            'connectTimeout' => (($runtime->connectTimeout ?: $this->_connectTimeout) + 0),
            'httpProxy' => '' . ($runtime->httpProxy ?: $this->_httpProxy),
            'httpsProxy' => '' . ($runtime->httpsProxy ?: $this->_httpsProxy),
            'noProxy' => '' . ($runtime->noProxy ?: $this->_noProxy),
            'socks5Proxy' => '' . ($runtime->socks5Proxy ?: $this->_socks5Proxy),
            'socks5NetWork' => '' . ($runtime->socks5NetWork ?: $this->_socks5NetWork),
            'maxIdleConns' => (($runtime->maxIdleConns ?: $this->_maxIdleConns) + 0),
            'retryOptions' => $this->_retryOptions,
            'ignoreSSL' => (bool) (($runtime->ignoreSSL ?: false)),
            'tlsMinVersion' => $this->_tlsMinVersion,
        ];

        $_retriesAttempted = 0;
        $_lastRequest = null;
        $_lastResponse = null;
        $_context = new RetryPolicyContext([
            'retriesAttempted' => $_retriesAttempted,
        ]);
        while (Dara::shouldRetry($_runtime['retryOptions'], $_context)) {
            if ($_retriesAttempted > 0) {
                $_backoffTime = Dara::getBackoffDelay($_runtime['retryOptions'], $_context);
                if ($_backoffTime > 0) {
                    Dara::sleep($_backoffTime);
                }
            }

            ++$_retriesAttempted;

            try {
                $_request = new Request();
                $boundary = FormUtil::getBoundary();
                $_request->protocol = 'HTTPS';
                $_request->method = 'POST';
                $_request->pathname = '/';
                $_request->headers = [
                    'host' => '' . @$form['host'],
                    'date' => Utils::getDateUTCString(),
                    'user-agent' => Utils::getUserAgent(''),
                ];
                @$_request->headers['content-type'] = 'multipart/form-data; boundary=' . $boundary . '';
                $_request->body = FormUtil::toFileForm($form, $boundary);
                $_runtime['stream'] = true;
                $_lastRequest = $_request;
                $_response = Dara::send($_request, $_runtime);
                $_lastResponse = $_response;

                $respMap = null;
                $bodyStr = StreamUtil::readAsString($_response->body);
                if (($_response->statusCode >= 400) && ($_response->statusCode < 600)) {
                    $respMap = XML::parseXml($bodyStr, null);
                    $err = @$respMap['Error'];

                    throw new ClientException([
                        'code' => '' . @$err['Code'],
                        'message' => '' . @$err['Message'],
                        'data' => [
                            'httpCode' => $_response->statusCode,
                            'requestId' => '' . @$err['RequestId'],
                            'hostId' => '' . @$err['HostId'],
                        ],
                    ]);
                }

                $respMap = XML::parseXml($bodyStr, null);

                return Dara::merge([
                ], $respMap);
            } catch (DaraException $e) {
                $_context = new RetryPolicyContext([
                    'retriesAttempted' => $_retriesAttempted,
                    'lastRequest' => $_lastRequest,
                    'lastResponse' => $_lastResponse,
                    'exception' => $e,
                ]);

                continue;
            }
        }

        throw new DaraUnableRetryException($_context);
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
     * Adds AI nodes to the cluster.
     *
     * @remarks
     * ## [](#)Usage notes
     * This operation is used to add an AINode node.
     * ## [](#qps-)QPS limit
     * You can call this operation up to 1,000 times per second per account. Exceeding the limit will trigger API rate limiting, which may impact your business. Please call the API responsibly.
     *
     * @param Request - AddAINodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddAINodeResponse
     *
     * @param AddAINodeRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return AddAINodeResponse
     */
    public function addAINodeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->AINodePoolId) {
            @$query['AINodePoolId'] = $request->AINodePoolId;
        }

        if (null !== $request->AINodeSpecInfos) {
            @$query['AINodeSpecInfos'] = $request->AINodeSpecInfos;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddAINode',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddAINodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds AI nodes to the cluster.
     *
     * @remarks
     * ## [](#)Usage notes
     * This operation is used to add an AINode node.
     * ## [](#qps-)QPS limit
     * You can call this operation up to 1,000 times per second per account. Exceeding the limit will trigger API rate limiting, which may impact your business. Please call the API responsibly.
     *
     * @param Request - AddAINodeRequest
     *
     * @returns AddAINodeResponse
     *
     * @param AddAINodeRequest $request
     *
     * @return AddAINodeResponse
     */
    public function addAINode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addAINodeWithOptions($request, $runtime);
    }

    /**
     * Allocates a public endpoint for an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     * You can call this operation to apply for a public endpoint for an AnalyticDB for PostgreSQL instance. Both the primary and instance endpoints of an AnalyticDB for PostgreSQL instance can be public endpoints. For more information, see [Endpoints of an instance and its primary coordinator node](https://help.aliyun.com/document_detail/204879.html).
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param Request - AllocateInstancePublicConnectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AllocateInstancePublicConnectionResponse
     *
     * @param AllocateInstancePublicConnectionRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return AllocateInstancePublicConnectionResponse
     */
    public function allocateInstancePublicConnectionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addressType) {
            @$query['AddressType'] = $request->addressType;
        }

        if (null !== $request->connectionStringPrefix) {
            @$query['ConnectionStringPrefix'] = $request->connectionStringPrefix;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->port) {
            @$query['Port'] = $request->port;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AllocateInstancePublicConnection',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AllocateInstancePublicConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Allocates a public endpoint for an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     * You can call this operation to apply for a public endpoint for an AnalyticDB for PostgreSQL instance. Both the primary and instance endpoints of an AnalyticDB for PostgreSQL instance can be public endpoints. For more information, see [Endpoints of an instance and its primary coordinator node](https://help.aliyun.com/document_detail/204879.html).
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param Request - AllocateInstancePublicConnectionRequest
     *
     * @returns AllocateInstancePublicConnectionResponse
     *
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
     * Binds a resource group to a database role.
     *
     * @param tmpReq - BindDBResourceGroupWithRoleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BindDBResourceGroupWithRoleResponse
     *
     * @param BindDBResourceGroupWithRoleRequest $tmpReq
     * @param RuntimeOptions                     $runtime
     *
     * @return BindDBResourceGroupWithRoleResponse
     */
    public function bindDBResourceGroupWithRoleWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new BindDBResourceGroupWithRoleShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->roleList) {
            $request->roleListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->roleList, 'RoleList', 'simple');
        }

        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceGroupName) {
            @$query['ResourceGroupName'] = $request->resourceGroupName;
        }

        if (null !== $request->roleListShrink) {
            @$query['RoleList'] = $request->roleListShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BindDBResourceGroupWithRole',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BindDBResourceGroupWithRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Binds a resource group to a database role.
     *
     * @param Request - BindDBResourceGroupWithRoleRequest
     *
     * @returns BindDBResourceGroupWithRoleResponse
     *
     * @param BindDBResourceGroupWithRoleRequest $request
     *
     * @return BindDBResourceGroupWithRoleResponse
     */
    public function bindDBResourceGroupWithRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindDBResourceGroupWithRoleWithOptions($request, $runtime);
    }

    /**
     * Cancels an index creation job.
     *
     * @param Request - CancelCreateIndexJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelCreateIndexJobResponse
     *
     * @param CancelCreateIndexJobRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CancelCreateIndexJobResponse
     */
    public function cancelCreateIndexJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->collection) {
            @$query['Collection'] = $request->collection;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->namespacePassword) {
            @$query['NamespacePassword'] = $request->namespacePassword;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CancelCreateIndexJob',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelCreateIndexJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Cancels an index creation job.
     *
     * @param Request - CancelCreateIndexJobRequest
     *
     * @returns CancelCreateIndexJobResponse
     *
     * @param CancelCreateIndexJobRequest $request
     *
     * @return CancelCreateIndexJobResponse
     */
    public function cancelCreateIndexJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelCreateIndexJobWithOptions($request, $runtime);
    }

    /**
     * Cancels an asynchronous document upload job based on the job ID.
     *
     * @remarks
     * This operation is related to the UploadDocumentAsync operation. You can call this operation to cancel a document upload job.
     * >  If the canceling operation is complete, failed, or is canceled, you cannot call the operation again. The canceling operation only interrupts the document upload job. To remove the uploaded data, you must manually remove it or call the DeleteCollectionData operation. You can also call the document upload operation to overwrite the data by using the same FileName parameter.
     *
     * @param Request - CancelUploadDocumentJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelUploadDocumentJobResponse
     *
     * @param CancelUploadDocumentJobRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CancelUploadDocumentJobResponse
     */
    public function cancelUploadDocumentJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->collection) {
            @$body['Collection'] = $request->collection;
        }

        if (null !== $request->jobId) {
            @$body['JobId'] = $request->jobId;
        }

        if (null !== $request->namespace) {
            @$body['Namespace'] = $request->namespace;
        }

        if (null !== $request->namespacePassword) {
            @$body['NamespacePassword'] = $request->namespacePassword;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CancelUploadDocumentJob',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelUploadDocumentJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Cancels an asynchronous document upload job based on the job ID.
     *
     * @remarks
     * This operation is related to the UploadDocumentAsync operation. You can call this operation to cancel a document upload job.
     * >  If the canceling operation is complete, failed, or is canceled, you cannot call the operation again. The canceling operation only interrupts the document upload job. To remove the uploaded data, you must manually remove it or call the DeleteCollectionData operation. You can also call the document upload operation to overwrite the data by using the same FileName parameter.
     *
     * @param Request - CancelUploadDocumentJobRequest
     *
     * @returns CancelUploadDocumentJobResponse
     *
     * @param CancelUploadDocumentJobRequest $request
     *
     * @return CancelUploadDocumentJobResponse
     */
    public function cancelUploadDocumentJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelUploadDocumentJobWithOptions($request, $runtime);
    }

    /**
     * Cancels an asynchronous vector data upload job by using a job ID.
     *
     * @remarks
     * This operation is related to the `UpsertCollectionDataAsync` operation. You can call this operation to cancel an upload job.
     * >  If the canceling operation is complete, failed, or is canceled, you cannot call the operation again. The canceling operation only interrupts the upload job. To remove the uploaded data, you must manually remove it or call the DeleteCollectionData operation.
     *
     * @param Request - CancelUpsertCollectionDataJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelUpsertCollectionDataJobResponse
     *
     * @param CancelUpsertCollectionDataJobRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return CancelUpsertCollectionDataJobResponse
     */
    public function cancelUpsertCollectionDataJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $body = [];
        if (null !== $request->collection) {
            @$body['Collection'] = $request->collection;
        }

        if (null !== $request->jobId) {
            @$body['JobId'] = $request->jobId;
        }

        if (null !== $request->namespace) {
            @$body['Namespace'] = $request->namespace;
        }

        if (null !== $request->namespacePassword) {
            @$body['NamespacePassword'] = $request->namespacePassword;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CancelUpsertCollectionDataJob',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelUpsertCollectionDataJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Cancels an asynchronous vector data upload job by using a job ID.
     *
     * @remarks
     * This operation is related to the `UpsertCollectionDataAsync` operation. You can call this operation to cancel an upload job.
     * >  If the canceling operation is complete, failed, or is canceled, you cannot call the operation again. The canceling operation only interrupts the upload job. To remove the uploaded data, you must manually remove it or call the DeleteCollectionData operation.
     *
     * @param Request - CancelUpsertCollectionDataJobRequest
     *
     * @returns CancelUpsertCollectionDataJobResponse
     *
     * @param CancelUpsertCollectionDataJobRequest $request
     *
     * @return CancelUpsertCollectionDataJobResponse
     */
    public function cancelUpsertCollectionDataJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelUpsertCollectionDataJobWithOptions($request, $runtime);
    }

    /**
     * Provides intelligent question-and-answer services by combining a knowledge base with a large language model.
     *
     * @remarks
     * This API enables users to query a large language model with answers grounded in a specified knowledge base collection. You can configure multiple parameters to customize requests, including but not limited to database instance IDs, knowledge retrieval parameters, and model inference parameters. In addition, a default system prompt template is provided and users are allowed to customize the system prompt.
     * *   **DBInstanceId**: Required. This parameter specifies the ID of the database instance.
     * *   **KnowledgeParams**: optional. It contains parameters related to knowledge retrieval, such as retrieval content and merge policy.
     * *   **ModelParams**: required. It contains parameters related to model inference, such as the message list and the name of the model.
     * *   **PromptTemplate**: optional. It is used to customize the system prompt template.
     *
     * @param tmpReq - ChatWithKnowledgeBaseRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChatWithKnowledgeBaseResponse
     *
     * @param ChatWithKnowledgeBaseRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return ChatWithKnowledgeBaseResponse
     */
    public function chatWithKnowledgeBaseWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ChatWithKnowledgeBaseShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->knowledgeParams) {
            $request->knowledgeParamsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->knowledgeParams, 'KnowledgeParams', 'json');
        }

        if (null !== $tmpReq->modelParams) {
            $request->modelParamsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->modelParams, 'ModelParams', 'json');
        }

        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->includeKnowledgeBaseResults) {
            @$query['IncludeKnowledgeBaseResults'] = $request->includeKnowledgeBaseResults;
        }

        if (null !== $request->knowledgeParamsShrink) {
            @$query['KnowledgeParams'] = $request->knowledgeParamsShrink;
        }

        if (null !== $request->modelParamsShrink) {
            @$query['ModelParams'] = $request->modelParamsShrink;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->promptParams) {
            @$query['PromptParams'] = $request->promptParams;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChatWithKnowledgeBase',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChatWithKnowledgeBaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Provides intelligent question-and-answer services by combining a knowledge base with a large language model.
     *
     * @remarks
     * This API enables users to query a large language model with answers grounded in a specified knowledge base collection. You can configure multiple parameters to customize requests, including but not limited to database instance IDs, knowledge retrieval parameters, and model inference parameters. In addition, a default system prompt template is provided and users are allowed to customize the system prompt.
     * *   **DBInstanceId**: Required. This parameter specifies the ID of the database instance.
     * *   **KnowledgeParams**: optional. It contains parameters related to knowledge retrieval, such as retrieval content and merge policy.
     * *   **ModelParams**: required. It contains parameters related to model inference, such as the message list and the name of the model.
     * *   **PromptTemplate**: optional. It is used to customize the system prompt template.
     *
     * @param Request - ChatWithKnowledgeBaseRequest
     *
     * @returns ChatWithKnowledgeBaseResponse
     *
     * @param ChatWithKnowledgeBaseRequest $request
     *
     * @return ChatWithKnowledgeBaseResponse
     */
    public function chatWithKnowledgeBase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->chatWithKnowledgeBaseWithOptions($request, $runtime);
    }

    /**
     * Provides intelligent question-and-answer services by combining a knowledge base with a large language model. A streaming API, which is called by using the SSE or the Java asynchronous SDK.
     *
     * @remarks
     * This API enables users to query a large language model with answers grounded in a specified knowledge base collection. You can configure multiple parameters to customize requests, including but not limited to database instance IDs, knowledge retrieval parameters, and model inference parameters. In addition, a default system prompt template is provided and users are allowed to customize the system prompt.
     * *   DBInstanceId: required. This parameter specifies the ID of the database instance.
     * *   KnowledgeParams: optional. It contains parameters related to knowledge retrieval, such as retrieval content and merge policy.
     * *   ModelParams: required. It contains parameters related to model inference, such as the message list and the name of the model.
     * *   PromptTemplate: optional. It is used to customize a system prompt template.
     *
     * @param tmpReq - ChatWithKnowledgeBaseStreamRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChatWithKnowledgeBaseStreamResponse
     *
     * @param ChatWithKnowledgeBaseStreamRequest $tmpReq
     * @param RuntimeOptions                     $runtime
     *
     * @return ChatWithKnowledgeBaseStreamResponse
     */
    public function chatWithKnowledgeBaseStreamWithSSE($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ChatWithKnowledgeBaseStreamShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->knowledgeParams) {
            $request->knowledgeParamsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->knowledgeParams, 'KnowledgeParams', 'json');
        }

        if (null !== $tmpReq->modelParams) {
            $request->modelParamsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->modelParams, 'ModelParams', 'json');
        }

        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->includeKnowledgeBaseResults) {
            @$query['IncludeKnowledgeBaseResults'] = $request->includeKnowledgeBaseResults;
        }

        if (null !== $request->knowledgeParamsShrink) {
            @$query['KnowledgeParams'] = $request->knowledgeParamsShrink;
        }

        if (null !== $request->modelParamsShrink) {
            @$query['ModelParams'] = $request->modelParamsShrink;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->promptParams) {
            @$query['PromptParams'] = $request->promptParams;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChatWithKnowledgeBaseStream',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        $sseResp = $this->callSSEApi($params, $req, $runtime);

        foreach ($sseResp as $resp) {
            $data = json_decode($resp->event->data, true);

            yield ChatWithKnowledgeBaseStreamResponse::fromMap([
                'statusCode' => $resp->statusCode,
                'headers' => $resp->headers,
                'body' => Dara::merge([
                    'RequestId' => $resp->event->id,
                    'Message' => $resp->event->event,
                ], $data),
            ]);
        }
    }

    /**
     * Provides intelligent question-and-answer services by combining a knowledge base with a large language model. A streaming API, which is called by using the SSE or the Java asynchronous SDK.
     *
     * @remarks
     * This API enables users to query a large language model with answers grounded in a specified knowledge base collection. You can configure multiple parameters to customize requests, including but not limited to database instance IDs, knowledge retrieval parameters, and model inference parameters. In addition, a default system prompt template is provided and users are allowed to customize the system prompt.
     * *   DBInstanceId: required. This parameter specifies the ID of the database instance.
     * *   KnowledgeParams: optional. It contains parameters related to knowledge retrieval, such as retrieval content and merge policy.
     * *   ModelParams: required. It contains parameters related to model inference, such as the message list and the name of the model.
     * *   PromptTemplate: optional. It is used to customize a system prompt template.
     *
     * @param tmpReq - ChatWithKnowledgeBaseStreamRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChatWithKnowledgeBaseStreamResponse
     *
     * @param ChatWithKnowledgeBaseStreamRequest $tmpReq
     * @param RuntimeOptions                     $runtime
     *
     * @return ChatWithKnowledgeBaseStreamResponse
     */
    public function chatWithKnowledgeBaseStreamWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ChatWithKnowledgeBaseStreamShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->knowledgeParams) {
            $request->knowledgeParamsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->knowledgeParams, 'KnowledgeParams', 'json');
        }

        if (null !== $tmpReq->modelParams) {
            $request->modelParamsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->modelParams, 'ModelParams', 'json');
        }

        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->includeKnowledgeBaseResults) {
            @$query['IncludeKnowledgeBaseResults'] = $request->includeKnowledgeBaseResults;
        }

        if (null !== $request->knowledgeParamsShrink) {
            @$query['KnowledgeParams'] = $request->knowledgeParamsShrink;
        }

        if (null !== $request->modelParamsShrink) {
            @$query['ModelParams'] = $request->modelParamsShrink;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->promptParams) {
            @$query['PromptParams'] = $request->promptParams;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChatWithKnowledgeBaseStream',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChatWithKnowledgeBaseStreamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Provides intelligent question-and-answer services by combining a knowledge base with a large language model. A streaming API, which is called by using the SSE or the Java asynchronous SDK.
     *
     * @remarks
     * This API enables users to query a large language model with answers grounded in a specified knowledge base collection. You can configure multiple parameters to customize requests, including but not limited to database instance IDs, knowledge retrieval parameters, and model inference parameters. In addition, a default system prompt template is provided and users are allowed to customize the system prompt.
     * *   DBInstanceId: required. This parameter specifies the ID of the database instance.
     * *   KnowledgeParams: optional. It contains parameters related to knowledge retrieval, such as retrieval content and merge policy.
     * *   ModelParams: required. It contains parameters related to model inference, such as the message list and the name of the model.
     * *   PromptTemplate: optional. It is used to customize a system prompt template.
     *
     * @param Request - ChatWithKnowledgeBaseStreamRequest
     *
     * @returns ChatWithKnowledgeBaseStreamResponse
     *
     * @param ChatWithKnowledgeBaseStreamRequest $request
     *
     * @return ChatWithKnowledgeBaseStreamResponse
     */
    public function chatWithKnowledgeBaseStream($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->chatWithKnowledgeBaseStreamWithOptions($request, $runtime);
    }

    /**
     * Checks the configurations of a Hadoop data source.
     *
     * @param Request - CheckHadoopDataSourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckHadoopDataSourceResponse
     *
     * @param CheckHadoopDataSourceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CheckHadoopDataSourceResponse
     */
    public function checkHadoopDataSourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->checkDir) {
            @$query['CheckDir'] = $request->checkDir;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->dataSourceId) {
            @$query['DataSourceId'] = $request->dataSourceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckHadoopDataSource',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckHadoopDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Checks the configurations of a Hadoop data source.
     *
     * @param Request - CheckHadoopDataSourceRequest
     *
     * @returns CheckHadoopDataSourceResponse
     *
     * @param CheckHadoopDataSourceRequest $request
     *
     * @return CheckHadoopDataSourceResponse
     */
    public function checkHadoopDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkHadoopDataSourceWithOptions($request, $runtime);
    }

    /**
     * Check Hadoop Cluster Network Connectivity.
     *
     * @param Request - CheckHadoopNetConnectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckHadoopNetConnectionResponse
     *
     * @param CheckHadoopNetConnectionRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CheckHadoopNetConnectionResponse
     */
    public function checkHadoopNetConnectionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->dataSourceId) {
            @$query['DataSourceId'] = $request->dataSourceId;
        }

        if (null !== $request->emrInstanceId) {
            @$query['EmrInstanceId'] = $request->emrInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckHadoopNetConnection',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckHadoopNetConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Check Hadoop Cluster Network Connectivity.
     *
     * @param Request - CheckHadoopNetConnectionRequest
     *
     * @returns CheckHadoopNetConnectionResponse
     *
     * @param CheckHadoopNetConnectionRequest $request
     *
     * @return CheckHadoopNetConnectionResponse
     */
    public function checkHadoopNetConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkHadoopNetConnectionWithOptions($request, $runtime);
    }

    /**
     * Check the network connectivity of the JDBC connection string.
     *
     * @param Request - CheckJDBCSourceNetConnectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckJDBCSourceNetConnectionResponse
     *
     * @param CheckJDBCSourceNetConnectionRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return CheckJDBCSourceNetConnectionResponse
     */
    public function checkJDBCSourceNetConnectionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->dataSourceId) {
            @$query['DataSourceId'] = $request->dataSourceId;
        }

        if (null !== $request->jdbcConnectionString) {
            @$query['JdbcConnectionString'] = $request->jdbcConnectionString;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckJDBCSourceNetConnection',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckJDBCSourceNetConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Check the network connectivity of the JDBC connection string.
     *
     * @param Request - CheckJDBCSourceNetConnectionRequest
     *
     * @returns CheckJDBCSourceNetConnectionResponse
     *
     * @param CheckJDBCSourceNetConnectionRequest $request
     *
     * @return CheckJDBCSourceNetConnectionResponse
     */
    public function checkJDBCSourceNetConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkJDBCSourceNetConnectionWithOptions($request, $runtime);
    }

    /**
     * Queries whether a service-linked role is created.
     *
     * @param Request - CheckServiceLinkedRoleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckServiceLinkedRoleResponse
     *
     * @param CheckServiceLinkedRoleRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CheckServiceLinkedRoleResponse
     */
    public function checkServiceLinkedRoleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckServiceLinkedRole',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckServiceLinkedRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries whether a service-linked role is created.
     *
     * @param Request - CheckServiceLinkedRoleRequest
     *
     * @returns CheckServiceLinkedRoleResponse
     *
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
     * Restores data to a new AnalyticDB for PostgreSQL instance.
     *
     * @param Request - CloneDBInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloneDBInstanceResponse
     *
     * @param CloneDBInstanceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CloneDBInstanceResponse
     */
    public function cloneDBInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupId) {
            @$query['BackupId'] = $request->backupId;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->srcDbInstanceName) {
            @$query['SrcDbInstanceName'] = $request->srcDbInstanceName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CloneDBInstance',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloneDBInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Restores data to a new AnalyticDB for PostgreSQL instance.
     *
     * @param Request - CloneDBInstanceRequest
     *
     * @returns CloneDBInstanceResponse
     *
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
     * Creates an initial account for an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     *   Before you can use an AnalyticDB for PostgreSQL instance, you must create an initial account for the instance.
     * *   You can call this operation to create only initial accounts. For information about how to create other types of accounts, see [Create a database account](https://help.aliyun.com/document_detail/50206.html).
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param Request - CreateAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAccountResponse
     *
     * @param CreateAccountRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateAccountResponse
     */
    public function createAccountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountDescription) {
            @$query['AccountDescription'] = $request->accountDescription;
        }

        if (null !== $request->accountName) {
            @$query['AccountName'] = $request->accountName;
        }

        if (null !== $request->accountPassword) {
            @$query['AccountPassword'] = $request->accountPassword;
        }

        if (null !== $request->accountType) {
            @$query['AccountType'] = $request->accountType;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->databaseName) {
            @$query['DatabaseName'] = $request->databaseName;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAccount',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an initial account for an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     *   Before you can use an AnalyticDB for PostgreSQL instance, you must create an initial account for the instance.
     * *   You can call this operation to create only initial accounts. For information about how to create other types of accounts, see [Create a database account](https://help.aliyun.com/document_detail/50206.html).
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param Request - CreateAccountRequest
     *
     * @returns CreateAccountResponse
     *
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
     * Creates a backup set.
     *
     * @param Request - CreateBackupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateBackupResponse
     *
     * @param CreateBackupRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateBackupResponse
     */
    public function createBackupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateBackup',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateBackupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a backup set.
     *
     * @param Request - CreateBackupRequest
     *
     * @returns CreateBackupResponse
     *
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
     * Creates a vector collection.
     *
     * @param tmpReq - CreateCollectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCollectionResponse
     *
     * @param CreateCollectionRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return CreateCollectionResponse
     */
    public function createCollectionWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateCollectionShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->sparseVectorIndexConfig) {
            $request->sparseVectorIndexConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sparseVectorIndexConfig, 'SparseVectorIndexConfig', 'json');
        }

        $query = [];
        if (null !== $request->collection) {
            @$query['Collection'] = $request->collection;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->dimension) {
            @$query['Dimension'] = $request->dimension;
        }

        if (null !== $request->externalStorage) {
            @$query['ExternalStorage'] = $request->externalStorage;
        }

        if (null !== $request->fullTextRetrievalFields) {
            @$query['FullTextRetrievalFields'] = $request->fullTextRetrievalFields;
        }

        if (null !== $request->hnswEfConstruction) {
            @$query['HnswEfConstruction'] = $request->hnswEfConstruction;
        }

        if (null !== $request->hnswM) {
            @$query['HnswM'] = $request->hnswM;
        }

        if (null !== $request->managerAccount) {
            @$query['ManagerAccount'] = $request->managerAccount;
        }

        if (null !== $request->managerAccountPassword) {
            @$query['ManagerAccountPassword'] = $request->managerAccountPassword;
        }

        if (null !== $request->metadata) {
            @$query['Metadata'] = $request->metadata;
        }

        if (null !== $request->metadataIndices) {
            @$query['MetadataIndices'] = $request->metadataIndices;
        }

        if (null !== $request->metrics) {
            @$query['Metrics'] = $request->metrics;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->parser) {
            @$query['Parser'] = $request->parser;
        }

        if (null !== $request->pqEnable) {
            @$query['PqEnable'] = $request->pqEnable;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->sparseVectorIndexConfigShrink) {
            @$query['SparseVectorIndexConfig'] = $request->sparseVectorIndexConfigShrink;
        }

        if (null !== $request->supportSparse) {
            @$query['SupportSparse'] = $request->supportSparse;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateCollection',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCollectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a vector collection.
     *
     * @param Request - CreateCollectionRequest
     *
     * @returns CreateCollectionResponse
     *
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
     * Create Instance.
     *
     * @remarks
     * Before using this interface, please make sure you have fully understood the [billing method](https://help.aliyun.com/document_detail/35406.html) and <props="china">[pricing](https://www.aliyun.com/price/product#/gpdb/detail/GreenplumPost)<props="intl">[pricing](https://www.alibabacloud.com/zh/product/hybriddb-postgresql/pricing) of the AnalyticDB for PostgreSQL product.
     *
     * @param Request - CreateDBInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDBInstanceResponse
     *
     * @param CreateDBInstanceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateDBInstanceResponse
     */
    public function createDBInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->AINodeSpecInfos) {
            @$query['AINodeSpecInfos'] = $request->AINodeSpecInfos;
        }

        if (null !== $request->backupId) {
            @$query['BackupId'] = $request->backupId;
        }

        if (null !== $request->cacheStorageSize) {
            @$query['CacheStorageSize'] = $request->cacheStorageSize;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->createSampleData) {
            @$query['CreateSampleData'] = $request->createSampleData;
        }

        if (null !== $request->DBInstanceCategory) {
            @$query['DBInstanceCategory'] = $request->DBInstanceCategory;
        }

        if (null !== $request->DBInstanceClass) {
            @$query['DBInstanceClass'] = $request->DBInstanceClass;
        }

        if (null !== $request->DBInstanceDescription) {
            @$query['DBInstanceDescription'] = $request->DBInstanceDescription;
        }

        if (null !== $request->DBInstanceGroupCount) {
            @$query['DBInstanceGroupCount'] = $request->DBInstanceGroupCount;
        }

        if (null !== $request->DBInstanceMode) {
            @$query['DBInstanceMode'] = $request->DBInstanceMode;
        }

        if (null !== $request->deployMode) {
            @$query['DeployMode'] = $request->deployMode;
        }

        if (null !== $request->enableSSL) {
            @$query['EnableSSL'] = $request->enableSSL;
        }

        if (null !== $request->encryptionKey) {
            @$query['EncryptionKey'] = $request->encryptionKey;
        }

        if (null !== $request->encryptionType) {
            @$query['EncryptionType'] = $request->encryptionType;
        }

        if (null !== $request->engine) {
            @$query['Engine'] = $request->engine;
        }

        if (null !== $request->engineVersion) {
            @$query['EngineVersion'] = $request->engineVersion;
        }

        if (null !== $request->idleTime) {
            @$query['IdleTime'] = $request->idleTime;
        }

        if (null !== $request->instanceNetworkType) {
            @$query['InstanceNetworkType'] = $request->instanceNetworkType;
        }

        if (null !== $request->instanceSpec) {
            @$query['InstanceSpec'] = $request->instanceSpec;
        }

        if (null !== $request->masterAISpec) {
            @$query['MasterAISpec'] = $request->masterAISpec;
        }

        if (null !== $request->masterCU) {
            @$query['MasterCU'] = $request->masterCU;
        }

        if (null !== $request->masterNodeNum) {
            @$query['MasterNodeNum'] = $request->masterNodeNum;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->payType) {
            @$query['PayType'] = $request->payType;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->privateIpAddress) {
            @$query['PrivateIpAddress'] = $request->privateIpAddress;
        }

        if (null !== $request->prodType) {
            @$query['ProdType'] = $request->prodType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->securityIPList) {
            @$query['SecurityIPList'] = $request->securityIPList;
        }

        if (null !== $request->segDiskPerformanceLevel) {
            @$query['SegDiskPerformanceLevel'] = $request->segDiskPerformanceLevel;
        }

        if (null !== $request->segNodeNum) {
            @$query['SegNodeNum'] = $request->segNodeNum;
        }

        if (null !== $request->segStorageType) {
            @$query['SegStorageType'] = $request->segStorageType;
        }

        if (null !== $request->serverlessMode) {
            @$query['ServerlessMode'] = $request->serverlessMode;
        }

        if (null !== $request->serverlessResource) {
            @$query['ServerlessResource'] = $request->serverlessResource;
        }

        if (null !== $request->srcDbInstanceName) {
            @$query['SrcDbInstanceName'] = $request->srcDbInstanceName;
        }

        if (null !== $request->standbyVSwitchId) {
            @$query['StandbyVSwitchId'] = $request->standbyVSwitchId;
        }

        if (null !== $request->standbyZoneId) {
            @$query['StandbyZoneId'] = $request->standbyZoneId;
        }

        if (null !== $request->storageSize) {
            @$query['StorageSize'] = $request->storageSize;
        }

        if (null !== $request->storageType) {
            @$query['StorageType'] = $request->storageType;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->usedTime) {
            @$query['UsedTime'] = $request->usedTime;
        }

        if (null !== $request->VPCId) {
            @$query['VPCId'] = $request->VPCId;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        if (null !== $request->vectorConfigurationStatus) {
            @$query['VectorConfigurationStatus'] = $request->vectorConfigurationStatus;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateDBInstance',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDBInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create Instance.
     *
     * @remarks
     * Before using this interface, please make sure you have fully understood the [billing method](https://help.aliyun.com/document_detail/35406.html) and <props="china">[pricing](https://www.aliyun.com/price/product#/gpdb/detail/GreenplumPost)<props="intl">[pricing](https://www.alibabacloud.com/zh/product/hybriddb-postgresql/pricing) of the AnalyticDB for PostgreSQL product.
     *
     * @param Request - CreateDBInstanceRequest
     *
     * @returns CreateDBInstanceResponse
     *
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
     * Adds an IP whitelist group.
     *
     * @param tmpReq - CreateDBInstanceIPArrayRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDBInstanceIPArrayResponse
     *
     * @param CreateDBInstanceIPArrayRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateDBInstanceIPArrayResponse
     */
    public function createDBInstanceIPArrayWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateDBInstanceIPArrayShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->securityIPList) {
            $request->securityIPListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->securityIPList, 'SecurityIPList', 'simple');
        }

        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->IPArrayAttribute) {
            @$query['IPArrayAttribute'] = $request->IPArrayAttribute;
        }

        if (null !== $request->IPArrayName) {
            @$query['IPArrayName'] = $request->IPArrayName;
        }

        if (null !== $request->securityIPListShrink) {
            @$query['SecurityIPList'] = $request->securityIPListShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateDBInstanceIPArray',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDBInstanceIPArrayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds an IP whitelist group.
     *
     * @param Request - CreateDBInstanceIPArrayRequest
     *
     * @returns CreateDBInstanceIPArrayResponse
     *
     * @param CreateDBInstanceIPArrayRequest $request
     *
     * @return CreateDBInstanceIPArrayResponse
     */
    public function createDBInstanceIPArray($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDBInstanceIPArrayWithOptions($request, $runtime);
    }

    /**
     * Creates a plan for an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     *   The plan management feature is supported only for pay-as-you-go instances.
     * *   When you change the compute node specifications or change the number of compute nodes, transient connections may occur. We recommend that you perform these operations during off-peak hours.
     * Before you call this operation, make sure that you are familiar with the billing of AnalyticDB for PostgreSQL. For more information, see [Billing methods](https://help.aliyun.com/document_detail/35406.html) and [AnalyticDB for PostgreSQL pricing](https://www.alibabacloud.com/zh/product/hybriddb-postgresql/pricing).
     *
     * @param Request - CreateDBInstancePlanRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDBInstancePlanResponse
     *
     * @param CreateDBInstancePlanRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateDBInstancePlanResponse
     */
    public function createDBInstancePlanWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->planConfig) {
            @$query['PlanConfig'] = $request->planConfig;
        }

        if (null !== $request->planDesc) {
            @$query['PlanDesc'] = $request->planDesc;
        }

        if (null !== $request->planEndDate) {
            @$query['PlanEndDate'] = $request->planEndDate;
        }

        if (null !== $request->planName) {
            @$query['PlanName'] = $request->planName;
        }

        if (null !== $request->planScheduleType) {
            @$query['PlanScheduleType'] = $request->planScheduleType;
        }

        if (null !== $request->planStartDate) {
            @$query['PlanStartDate'] = $request->planStartDate;
        }

        if (null !== $request->planType) {
            @$query['PlanType'] = $request->planType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateDBInstancePlan',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDBInstancePlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a plan for an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     *   The plan management feature is supported only for pay-as-you-go instances.
     * *   When you change the compute node specifications or change the number of compute nodes, transient connections may occur. We recommend that you perform these operations during off-peak hours.
     * Before you call this operation, make sure that you are familiar with the billing of AnalyticDB for PostgreSQL. For more information, see [Billing methods](https://help.aliyun.com/document_detail/35406.html) and [AnalyticDB for PostgreSQL pricing](https://www.alibabacloud.com/zh/product/hybriddb-postgresql/pricing).
     *
     * @param Request - CreateDBInstancePlanRequest
     *
     * @returns CreateDBInstancePlanResponse
     *
     * @param CreateDBInstancePlanRequest $request
     *
     * @return CreateDBInstancePlanResponse
     */
    public function createDBInstancePlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDBInstancePlanWithOptions($request, $runtime);
    }

    /**
     * Creates a resource group.
     *
     * @param Request - CreateDBResourceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDBResourceGroupResponse
     *
     * @param CreateDBResourceGroupRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateDBResourceGroupResponse
     */
    public function createDBResourceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceGroupConfig) {
            @$query['ResourceGroupConfig'] = $request->resourceGroupConfig;
        }

        if (null !== $request->resourceGroupName) {
            @$query['ResourceGroupName'] = $request->resourceGroupName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateDBResourceGroup',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDBResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a resource group.
     *
     * @param Request - CreateDBResourceGroupRequest
     *
     * @returns CreateDBResourceGroupResponse
     *
     * @param CreateDBResourceGroupRequest $request
     *
     * @return CreateDBResourceGroupResponse
     */
    public function createDBResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDBResourceGroupWithOptions($request, $runtime);
    }

    /**
     * Creates a database.
     *
     * @param Request - CreateDatabaseRequest
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
        $query = [];
        if (null !== $request->characterSetName) {
            @$query['CharacterSetName'] = $request->characterSetName;
        }

        if (null !== $request->collate) {
            @$query['Collate'] = $request->collate;
        }

        if (null !== $request->ctype) {
            @$query['Ctype'] = $request->ctype;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->databaseName) {
            @$query['DatabaseName'] = $request->databaseName;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->owner) {
            @$query['Owner'] = $request->owner;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateDatabase',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDatabaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a database.
     *
     * @param Request - CreateDatabaseRequest
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
     * Creates a document collection.
     *
     * @param tmpReq - CreateDocumentCollectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDocumentCollectionResponse
     *
     * @param CreateDocumentCollectionRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateDocumentCollectionResponse
     */
    public function createDocumentCollectionWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateDocumentCollectionShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->entityTypes) {
            $request->entityTypesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->entityTypes, 'EntityTypes', 'json');
        }

        if (null !== $tmpReq->relationshipTypes) {
            $request->relationshipTypesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->relationshipTypes, 'RelationshipTypes', 'json');
        }

        $query = [];
        if (null !== $request->collection) {
            @$query['Collection'] = $request->collection;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->dimension) {
            @$query['Dimension'] = $request->dimension;
        }

        if (null !== $request->embeddingModel) {
            @$query['EmbeddingModel'] = $request->embeddingModel;
        }

        if (null !== $request->enableGraph) {
            @$query['EnableGraph'] = $request->enableGraph;
        }

        if (null !== $request->entityTypesShrink) {
            @$query['EntityTypes'] = $request->entityTypesShrink;
        }

        if (null !== $request->externalStorage) {
            @$query['ExternalStorage'] = $request->externalStorage;
        }

        if (null !== $request->fullTextRetrievalFields) {
            @$query['FullTextRetrievalFields'] = $request->fullTextRetrievalFields;
        }

        if (null !== $request->hnswEfConstruction) {
            @$query['HnswEfConstruction'] = $request->hnswEfConstruction;
        }

        if (null !== $request->hnswM) {
            @$query['HnswM'] = $request->hnswM;
        }

        if (null !== $request->LLMModel) {
            @$query['LLMModel'] = $request->LLMModel;
        }

        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        if (null !== $request->managerAccount) {
            @$query['ManagerAccount'] = $request->managerAccount;
        }

        if (null !== $request->managerAccountPassword) {
            @$query['ManagerAccountPassword'] = $request->managerAccountPassword;
        }

        if (null !== $request->metadata) {
            @$query['Metadata'] = $request->metadata;
        }

        if (null !== $request->metadataIndices) {
            @$query['MetadataIndices'] = $request->metadataIndices;
        }

        if (null !== $request->metrics) {
            @$query['Metrics'] = $request->metrics;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->parser) {
            @$query['Parser'] = $request->parser;
        }

        if (null !== $request->pqEnable) {
            @$query['PqEnable'] = $request->pqEnable;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->relationshipTypesShrink) {
            @$query['RelationshipTypes'] = $request->relationshipTypesShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateDocumentCollection',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDocumentCollectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a document collection.
     *
     * @param Request - CreateDocumentCollectionRequest
     *
     * @returns CreateDocumentCollectionResponse
     *
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
     * Install extensions.
     *
     * @param Request - CreateExtensionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateExtensionsResponse
     *
     * @param CreateExtensionsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateExtensionsResponse
     */
    public function createExtensionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->DBNames) {
            @$query['DBNames'] = $request->DBNames;
        }

        if (null !== $request->extensions) {
            @$query['Extensions'] = $request->extensions;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateExtensions',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateExtensionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Install extensions.
     *
     * @param Request - CreateExtensionsRequest
     *
     * @returns CreateExtensionsResponse
     *
     * @param CreateExtensionsRequest $request
     *
     * @return CreateExtensionsResponse
     */
    public function createExtensions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createExtensionsWithOptions($request, $runtime);
    }

    /**
     * Create External Data Service.
     *
     * @param Request - CreateExternalDataServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateExternalDataServiceResponse
     *
     * @param CreateExternalDataServiceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateExternalDataServiceResponse
     */
    public function createExternalDataServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceDescription) {
            @$query['ServiceDescription'] = $request->serviceDescription;
        }

        if (null !== $request->serviceName) {
            @$query['ServiceName'] = $request->serviceName;
        }

        if (null !== $request->serviceSpec) {
            @$query['ServiceSpec'] = $request->serviceSpec;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateExternalDataService',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateExternalDataServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create External Data Service.
     *
     * @param Request - CreateExternalDataServiceRequest
     *
     * @returns CreateExternalDataServiceResponse
     *
     * @param CreateExternalDataServiceRequest $request
     *
     * @return CreateExternalDataServiceResponse
     */
    public function createExternalDataService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createExternalDataServiceWithOptions($request, $runtime);
    }

    /**
     * Create Hadoop data source configuration.
     *
     * @param Request - CreateHadoopDataSourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateHadoopDataSourceResponse
     *
     * @param CreateHadoopDataSourceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateHadoopDataSourceResponse
     */
    public function createHadoopDataSourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->dataSourceDescription) {
            @$query['DataSourceDescription'] = $request->dataSourceDescription;
        }

        if (null !== $request->dataSourceName) {
            @$query['DataSourceName'] = $request->dataSourceName;
        }

        if (null !== $request->dataSourceType) {
            @$query['DataSourceType'] = $request->dataSourceType;
        }

        if (null !== $request->emrInstanceId) {
            @$query['EmrInstanceId'] = $request->emrInstanceId;
        }

        if (null !== $request->HDFSConf) {
            @$query['HDFSConf'] = $request->HDFSConf;
        }

        if (null !== $request->hadoopCoreConf) {
            @$query['HadoopCoreConf'] = $request->hadoopCoreConf;
        }

        if (null !== $request->hadoopCreateType) {
            @$query['HadoopCreateType'] = $request->hadoopCreateType;
        }

        if (null !== $request->hadoopHostsAddress) {
            @$query['HadoopHostsAddress'] = $request->hadoopHostsAddress;
        }

        if (null !== $request->hiveConf) {
            @$query['HiveConf'] = $request->hiveConf;
        }

        if (null !== $request->mapReduceConf) {
            @$query['MapReduceConf'] = $request->mapReduceConf;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->yarnConf) {
            @$query['YarnConf'] = $request->yarnConf;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateHadoopDataSource',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateHadoopDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create Hadoop data source configuration.
     *
     * @param Request - CreateHadoopDataSourceRequest
     *
     * @returns CreateHadoopDataSourceResponse
     *
     * @param CreateHadoopDataSourceRequest $request
     *
     * @return CreateHadoopDataSourceResponse
     */
    public function createHadoopDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createHadoopDataSourceWithOptions($request, $runtime);
    }

    /**
     * Creates an index. Note: 1. Only scalar indexes are supported. 2. The table is write-locked during index creation. 3. When creating an index on a table with a large volume of data, the process consumes significant CPU and I/O resources of the instance. If this impacts instance availability, call CancelCreateIndexJob to cancel the index creation.
     *
     * @param Request - CreateIndexRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateIndexResponse
     *
     * @param CreateIndexRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateIndexResponse
     */
    public function createIndexWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->collection) {
            @$query['Collection'] = $request->collection;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->indexConfig) {
            @$query['IndexConfig'] = $request->indexConfig;
        }

        if (null !== $request->indexField) {
            @$query['IndexField'] = $request->indexField;
        }

        if (null !== $request->indexName) {
            @$query['IndexName'] = $request->indexName;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->namespacePassword) {
            @$query['NamespacePassword'] = $request->namespacePassword;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateIndex',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateIndexResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an index. Note: 1. Only scalar indexes are supported. 2. The table is write-locked during index creation. 3. When creating an index on a table with a large volume of data, the process consumes significant CPU and I/O resources of the instance. If this impacts instance availability, call CancelCreateIndexJob to cancel the index creation.
     *
     * @param Request - CreateIndexRequest
     *
     * @returns CreateIndexResponse
     *
     * @param CreateIndexRequest $request
     *
     * @return CreateIndexResponse
     */
    public function createIndex($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createIndexWithOptions($request, $runtime);
    }

    /**
     * Creates a JDBC data source.
     *
     * @param Request - CreateJDBCDataSourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateJDBCDataSourceResponse
     *
     * @param CreateJDBCDataSourceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateJDBCDataSourceResponse
     */
    public function createJDBCDataSourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->dataSourceDescription) {
            @$query['DataSourceDescription'] = $request->dataSourceDescription;
        }

        if (null !== $request->dataSourceName) {
            @$query['DataSourceName'] = $request->dataSourceName;
        }

        if (null !== $request->dataSourceType) {
            @$query['DataSourceType'] = $request->dataSourceType;
        }

        if (null !== $request->JDBCConnectionString) {
            @$query['JDBCConnectionString'] = $request->JDBCConnectionString;
        }

        if (null !== $request->JDBCPassword) {
            @$query['JDBCPassword'] = $request->JDBCPassword;
        }

        if (null !== $request->JDBCUserName) {
            @$query['JDBCUserName'] = $request->JDBCUserName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateJDBCDataSource',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateJDBCDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a JDBC data source.
     *
     * @param Request - CreateJDBCDataSourceRequest
     *
     * @returns CreateJDBCDataSourceResponse
     *
     * @param CreateJDBCDataSourceRequest $request
     *
     * @return CreateJDBCDataSourceResponse
     */
    public function createJDBCDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createJDBCDataSourceWithOptions($request, $runtime);
    }

    /**
     * Creates a model service.
     *
     * @remarks
     * Before you call this operation, make sure that you fully understand the [billing methods](https://help.aliyun.com/document_detail/35406.html) and [pricing](https://www.alibabacloud.com/zh/product/hybriddb-postgresql/pricing) of AnalyticDB for PostgreSQL.
     *
     * @param tmpReq - CreateModelServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateModelServiceResponse
     *
     * @param CreateModelServiceRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return CreateModelServiceResponse
     */
    public function createModelServiceWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateModelServiceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->aiNodes) {
            $request->aiNodesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->aiNodes, 'AiNodes', 'json');
        }

        if (null !== $tmpReq->modelParams) {
            $request->modelParamsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->modelParams, 'ModelParams', 'json');
        }

        $query = [];
        if (null !== $request->aiNodesShrink) {
            @$query['AiNodes'] = $request->aiNodesShrink;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->enablePublicConnection) {
            @$query['EnablePublicConnection'] = $request->enablePublicConnection;
        }

        if (null !== $request->inferenceEngine) {
            @$query['InferenceEngine'] = $request->inferenceEngine;
        }

        if (null !== $request->modelName) {
            @$query['ModelName'] = $request->modelName;
        }

        if (null !== $request->modelParamsShrink) {
            @$query['ModelParams'] = $request->modelParamsShrink;
        }

        if (null !== $request->replicas) {
            @$query['Replicas'] = $request->replicas;
        }

        if (null !== $request->securityIPList) {
            @$query['SecurityIPList'] = $request->securityIPList;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateModelService',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateModelServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a model service.
     *
     * @remarks
     * Before you call this operation, make sure that you fully understand the [billing methods](https://help.aliyun.com/document_detail/35406.html) and [pricing](https://www.alibabacloud.com/zh/product/hybriddb-postgresql/pricing) of AnalyticDB for PostgreSQL.
     *
     * @param Request - CreateModelServiceRequest
     *
     * @returns CreateModelServiceResponse
     *
     * @param CreateModelServiceRequest $request
     *
     * @return CreateModelServiceResponse
     */
    public function createModelService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createModelServiceWithOptions($request, $runtime);
    }

    /**
     * Creates a vector namespace.
     *
     * @param Request - CreateNamespaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateNamespaceResponse
     *
     * @param CreateNamespaceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateNamespaceResponse
     */
    public function createNamespaceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->managerAccount) {
            @$query['ManagerAccount'] = $request->managerAccount;
        }

        if (null !== $request->managerAccountPassword) {
            @$query['ManagerAccountPassword'] = $request->managerAccountPassword;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->namespacePassword) {
            @$query['NamespacePassword'] = $request->namespacePassword;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateNamespace',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a vector namespace.
     *
     * @param Request - CreateNamespaceRequest
     *
     * @returns CreateNamespaceResponse
     *
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
     * Create Homogeneous Data Source.
     *
     * @param Request - CreateRemoteADBDataSourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateRemoteADBDataSourceResponse
     *
     * @param CreateRemoteADBDataSourceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateRemoteADBDataSourceResponse
     */
    public function createRemoteADBDataSourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dataSourceName) {
            @$query['DataSourceName'] = $request->dataSourceName;
        }

        if (null !== $request->localDBInstanceId) {
            @$query['LocalDBInstanceId'] = $request->localDBInstanceId;
        }

        if (null !== $request->localDatabase) {
            @$query['LocalDatabase'] = $request->localDatabase;
        }

        if (null !== $request->managerUserName) {
            @$query['ManagerUserName'] = $request->managerUserName;
        }

        if (null !== $request->managerUserPassword) {
            @$query['ManagerUserPassword'] = $request->managerUserPassword;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->remoteDBInstanceId) {
            @$query['RemoteDBInstanceId'] = $request->remoteDBInstanceId;
        }

        if (null !== $request->remoteDatabase) {
            @$query['RemoteDatabase'] = $request->remoteDatabase;
        }

        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        if (null !== $request->userPassword) {
            @$query['UserPassword'] = $request->userPassword;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateRemoteADBDataSource',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateRemoteADBDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create Homogeneous Data Source.
     *
     * @param Request - CreateRemoteADBDataSourceRequest
     *
     * @returns CreateRemoteADBDataSourceResponse
     *
     * @param CreateRemoteADBDataSourceRequest $request
     *
     * @return CreateRemoteADBDataSourceResponse
     */
    public function createRemoteADBDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRemoteADBDataSourceWithOptions($request, $runtime);
    }

    /**
     * Creates a sample dataset for an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     *   You can call this operation to create a sample dataset for an AnalyticDB for PostgreSQL instance. Then, you can execute query statements on the sample dataset to experience or test your instance. For more information about query statements, see [Dataset information and query examples](https://help.aliyun.com/document_detail/452277.html).
     * *   This operation is supported only for AnalyticDB for PostgreSQL V6.3.8.8 to 6.3.8.x, V6.3.10.3, and later.
     * *   Versions from V6.3.9.0 to V6.3.10.2 are not supported.
     *
     * @param Request - CreateSampleDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSampleDataResponse
     *
     * @param CreateSampleDataRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateSampleDataResponse
     */
    public function createSampleDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateSampleData',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSampleDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a sample dataset for an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     *   You can call this operation to create a sample dataset for an AnalyticDB for PostgreSQL instance. Then, you can execute query statements on the sample dataset to experience or test your instance. For more information about query statements, see [Dataset information and query examples](https://help.aliyun.com/document_detail/452277.html).
     * *   This operation is supported only for AnalyticDB for PostgreSQL V6.3.8.8 to 6.3.8.x, V6.3.10.3, and later.
     * *   Versions from V6.3.9.0 to V6.3.10.2 are not supported.
     *
     * @param Request - CreateSampleDataRequest
     *
     * @returns CreateSampleDataResponse
     *
     * @param CreateSampleDataRequest $request
     *
     * @return CreateSampleDataResponse
     */
    public function createSampleData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSampleDataWithOptions($request, $runtime);
    }

    /**
     * Creates an access credential for an AnalyticDB for PostgreSQL instance by using the name and password of a database account.
     *
     * @param Request - CreateSecretRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSecretResponse
     *
     * @param CreateSecretRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateSecretResponse
     */
    public function createSecretWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->password) {
            @$query['Password'] = $request->password;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->secretName) {
            @$query['SecretName'] = $request->secretName;
        }

        if (null !== $request->testConnection) {
            @$query['TestConnection'] = $request->testConnection;
        }

        if (null !== $request->username) {
            @$query['Username'] = $request->username;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateSecret',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSecretResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an access credential for an AnalyticDB for PostgreSQL instance by using the name and password of a database account.
     *
     * @param Request - CreateSecretRequest
     *
     * @returns CreateSecretResponse
     *
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
     * Creates a service-linked role.
     *
     * @param Request - CreateServiceLinkedRoleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateServiceLinkedRoleResponse
     *
     * @param CreateServiceLinkedRoleRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateServiceLinkedRoleResponse
     */
    public function createServiceLinkedRoleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateServiceLinkedRole',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateServiceLinkedRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a service-linked role.
     *
     * @param Request - CreateServiceLinkedRoleRequest
     *
     * @returns CreateServiceLinkedRoleResponse
     *
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
     * Create External Data Source Configuration.
     *
     * @param Request - CreateStreamingDataServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateStreamingDataServiceResponse
     *
     * @param CreateStreamingDataServiceRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateStreamingDataServiceResponse
     */
    public function createStreamingDataServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceDescription) {
            @$query['ServiceDescription'] = $request->serviceDescription;
        }

        if (null !== $request->serviceName) {
            @$query['ServiceName'] = $request->serviceName;
        }

        if (null !== $request->serviceSpec) {
            @$query['ServiceSpec'] = $request->serviceSpec;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateStreamingDataService',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateStreamingDataServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create External Data Source Configuration.
     *
     * @param Request - CreateStreamingDataServiceRequest
     *
     * @returns CreateStreamingDataServiceResponse
     *
     * @param CreateStreamingDataServiceRequest $request
     *
     * @return CreateStreamingDataServiceResponse
     */
    public function createStreamingDataService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createStreamingDataServiceWithOptions($request, $runtime);
    }

    /**
     * Create External Data Source Configuration.
     *
     * @param Request - CreateStreamingDataSourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateStreamingDataSourceResponse
     *
     * @param CreateStreamingDataSourceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateStreamingDataSourceResponse
     */
    public function createStreamingDataSourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->dataSourceConfig) {
            @$query['DataSourceConfig'] = $request->dataSourceConfig;
        }

        if (null !== $request->dataSourceDescription) {
            @$query['DataSourceDescription'] = $request->dataSourceDescription;
        }

        if (null !== $request->dataSourceName) {
            @$query['DataSourceName'] = $request->dataSourceName;
        }

        if (null !== $request->dataSourceType) {
            @$query['DataSourceType'] = $request->dataSourceType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceId) {
            @$query['ServiceId'] = $request->serviceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateStreamingDataSource',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateStreamingDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create External Data Source Configuration.
     *
     * @param Request - CreateStreamingDataSourceRequest
     *
     * @returns CreateStreamingDataSourceResponse
     *
     * @param CreateStreamingDataSourceRequest $request
     *
     * @return CreateStreamingDataSourceResponse
     */
    public function createStreamingDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createStreamingDataSourceWithOptions($request, $runtime);
    }

    /**
     * Create External Data Source Configuration.
     *
     * @param tmpReq - CreateStreamingJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateStreamingJobResponse
     *
     * @param CreateStreamingJobRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return CreateStreamingJobResponse
     */
    public function createStreamingJobWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateStreamingJobShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->destColumns) {
            $request->destColumnsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->destColumns, 'DestColumns', 'json');
        }

        if (null !== $tmpReq->matchColumns) {
            $request->matchColumnsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->matchColumns, 'MatchColumns', 'json');
        }

        if (null !== $tmpReq->srcColumns) {
            $request->srcColumnsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->srcColumns, 'SrcColumns', 'json');
        }

        if (null !== $tmpReq->updateColumns) {
            $request->updateColumnsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->updateColumns, 'UpdateColumns', 'json');
        }

        $query = [];
        if (null !== $request->account) {
            @$query['Account'] = $request->account;
        }

        if (null !== $request->consistency) {
            @$query['Consistency'] = $request->consistency;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->dataSourceId) {
            @$query['DataSourceId'] = $request->dataSourceId;
        }

        if (null !== $request->destColumnsShrink) {
            @$query['DestColumns'] = $request->destColumnsShrink;
        }

        if (null !== $request->destDatabase) {
            @$query['DestDatabase'] = $request->destDatabase;
        }

        if (null !== $request->destSchema) {
            @$query['DestSchema'] = $request->destSchema;
        }

        if (null !== $request->destTable) {
            @$query['DestTable'] = $request->destTable;
        }

        if (null !== $request->errorLimitCount) {
            @$query['ErrorLimitCount'] = $request->errorLimitCount;
        }

        if (null !== $request->fallbackOffset) {
            @$query['FallbackOffset'] = $request->fallbackOffset;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->jobConfig) {
            @$query['JobConfig'] = $request->jobConfig;
        }

        if (null !== $request->jobDescription) {
            @$query['JobDescription'] = $request->jobDescription;
        }

        if (null !== $request->jobName) {
            @$query['JobName'] = $request->jobName;
        }

        if (null !== $request->matchColumnsShrink) {
            @$query['MatchColumns'] = $request->matchColumnsShrink;
        }

        if (null !== $request->mode) {
            @$query['Mode'] = $request->mode;
        }

        if (null !== $request->password) {
            @$query['Password'] = $request->password;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->srcColumnsShrink) {
            @$query['SrcColumns'] = $request->srcColumnsShrink;
        }

        if (null !== $request->tryRun) {
            @$query['TryRun'] = $request->tryRun;
        }

        if (null !== $request->updateColumnsShrink) {
            @$query['UpdateColumns'] = $request->updateColumnsShrink;
        }

        if (null !== $request->writeMode) {
            @$query['WriteMode'] = $request->writeMode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateStreamingJob',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateStreamingJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create External Data Source Configuration.
     *
     * @param Request - CreateStreamingJobRequest
     *
     * @returns CreateStreamingJobResponse
     *
     * @param CreateStreamingJobRequest $request
     *
     * @return CreateStreamingJobResponse
     */
    public function createStreamingJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createStreamingJobWithOptions($request, $runtime);
    }

    /**
     * Creates a Supabase project.
     *
     * @remarks
     *   You can call this operation to create a Supabase project.
     *
     * @param Request - CreateSupabaseProjectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSupabaseProjectResponse
     *
     * @param CreateSupabaseProjectRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateSupabaseProjectResponse
     */
    public function createSupabaseProjectWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountPassword) {
            @$query['AccountPassword'] = $request->accountPassword;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->diskPerformanceLevel) {
            @$query['DiskPerformanceLevel'] = $request->diskPerformanceLevel;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->projectSpec) {
            @$query['ProjectSpec'] = $request->projectSpec;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->securityIPList) {
            @$query['SecurityIPList'] = $request->securityIPList;
        }

        if (null !== $request->storageSize) {
            @$query['StorageSize'] = $request->storageSize;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateSupabaseProject',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSupabaseProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a Supabase project.
     *
     * @remarks
     *   You can call this operation to create a Supabase project.
     *
     * @param Request - CreateSupabaseProjectRequest
     *
     * @returns CreateSupabaseProjectResponse
     *
     * @param CreateSupabaseProjectRequest $request
     *
     * @return CreateSupabaseProjectResponse
     */
    public function createSupabaseProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSupabaseProjectWithOptions($request, $runtime);
    }

    /**
     * Create Vector Index.
     *
     * @param Request - CreateVectorIndexRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateVectorIndexResponse
     *
     * @param CreateVectorIndexRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateVectorIndexResponse
     */
    public function createVectorIndexWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->collection) {
            @$query['Collection'] = $request->collection;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->dimension) {
            @$query['Dimension'] = $request->dimension;
        }

        if (null !== $request->externalStorage) {
            @$query['ExternalStorage'] = $request->externalStorage;
        }

        if (null !== $request->hnswEfConstruction) {
            @$query['HnswEfConstruction'] = $request->hnswEfConstruction;
        }

        if (null !== $request->hnswM) {
            @$query['HnswM'] = $request->hnswM;
        }

        if (null !== $request->managerAccount) {
            @$query['ManagerAccount'] = $request->managerAccount;
        }

        if (null !== $request->managerAccountPassword) {
            @$query['ManagerAccountPassword'] = $request->managerAccountPassword;
        }

        if (null !== $request->metrics) {
            @$query['Metrics'] = $request->metrics;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pqEnable) {
            @$query['PqEnable'] = $request->pqEnable;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateVectorIndex',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateVectorIndexResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create Vector Index.
     *
     * @param Request - CreateVectorIndexRequest
     *
     * @returns CreateVectorIndexResponse
     *
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
     * Delete AI Node.
     *
     * @remarks
     *   Subscription instances cannot be manually released. They are automatically released when they expire.
     * *   You can call this operation to release pay-as-you-go instances only when they are in the **Running** state.
     *
     * @param Request - DeleteAINodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAINodeResponse
     *
     * @param DeleteAINodeRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteAINodeResponse
     */
    public function deleteAINodeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->AINodeNum) {
            @$query['AINodeNum'] = $request->AINodeNum;
        }

        if (null !== $request->AINodePoolId) {
            @$query['AINodePoolId'] = $request->AINodePoolId;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->nodeNames) {
            @$query['NodeNames'] = $request->nodeNames;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAINode',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAINodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete AI Node.
     *
     * @remarks
     *   Subscription instances cannot be manually released. They are automatically released when they expire.
     * *   You can call this operation to release pay-as-you-go instances only when they are in the **Running** state.
     *
     * @param Request - DeleteAINodeRequest
     *
     * @returns DeleteAINodeResponse
     *
     * @param DeleteAINodeRequest $request
     *
     * @return DeleteAINodeResponse
     */
    public function deleteAINode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAINodeWithOptions($request, $runtime);
    }

    /**
     * 删除数据库账号.
     *
     * @param Request - DeleteAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAccountResponse
     *
     * @param DeleteAccountRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteAccountResponse
     */
    public function deleteAccountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountName) {
            @$query['AccountName'] = $request->accountName;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAccount',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除数据库账号.
     *
     * @param Request - DeleteAccountRequest
     *
     * @returns DeleteAccountResponse
     *
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
     * Deletes a backup set. You can call this operation to delete only physical backup sets that are manually backed up.
     *
     * @param Request - DeleteBackupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteBackupResponse
     *
     * @param DeleteBackupRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteBackupResponse
     */
    public function deleteBackupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupId) {
            @$query['BackupId'] = $request->backupId;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteBackup',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteBackupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a backup set. You can call this operation to delete only physical backup sets that are manually backed up.
     *
     * @param Request - DeleteBackupRequest
     *
     * @returns DeleteBackupResponse
     *
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
     * Deletes a vector collection.
     *
     * @param Request - DeleteCollectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCollectionResponse
     *
     * @param DeleteCollectionRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteCollectionResponse
     */
    public function deleteCollectionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->collection) {
            @$query['Collection'] = $request->collection;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->namespacePassword) {
            @$query['NamespacePassword'] = $request->namespacePassword;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteCollection',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteCollectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a vector collection.
     *
     * @param Request - DeleteCollectionRequest
     *
     * @returns DeleteCollectionResponse
     *
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
     * Deletes vector data.
     *
     * @param Request - DeleteCollectionDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCollectionDataResponse
     *
     * @param DeleteCollectionDataRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteCollectionDataResponse
     */
    public function deleteCollectionDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->collection) {
            @$query['Collection'] = $request->collection;
        }

        if (null !== $request->collectionData) {
            @$query['CollectionData'] = $request->collectionData;
        }

        if (null !== $request->collectionDataFilter) {
            @$query['CollectionDataFilter'] = $request->collectionDataFilter;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->namespacePassword) {
            @$query['NamespacePassword'] = $request->namespacePassword;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteCollectionData',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteCollectionDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes vector data.
     *
     * @param Request - DeleteCollectionDataRequest
     *
     * @returns DeleteCollectionDataResponse
     *
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
     * Releases a pay-as-you-go AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     *   Subscription instances cannot be manually released. They are automatically released when they expire.
     * *   You can call this operation to release pay-as-you-go instances only when they are in the **Running** state.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param Request - DeleteDBInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDBInstanceResponse
     *
     * @param DeleteDBInstanceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteDBInstanceResponse
     */
    public function deleteDBInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDBInstance',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDBInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Releases a pay-as-you-go AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     *   Subscription instances cannot be manually released. They are automatically released when they expire.
     * *   You can call this operation to release pay-as-you-go instances only when they are in the **Running** state.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param Request - DeleteDBInstanceRequest
     *
     * @returns DeleteDBInstanceResponse
     *
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
     * 删除IP分组.
     *
     * @param Request - DeleteDBInstanceIPArrayRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDBInstanceIPArrayResponse
     *
     * @param DeleteDBInstanceIPArrayRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteDBInstanceIPArrayResponse
     */
    public function deleteDBInstanceIPArrayWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->IPArrayName) {
            @$query['IPArrayName'] = $request->IPArrayName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDBInstanceIPArray',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDBInstanceIPArrayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除IP分组.
     *
     * @param Request - DeleteDBInstanceIPArrayRequest
     *
     * @returns DeleteDBInstanceIPArrayResponse
     *
     * @param DeleteDBInstanceIPArrayRequest $request
     *
     * @return DeleteDBInstanceIPArrayResponse
     */
    public function deleteDBInstanceIPArray($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDBInstanceIPArrayWithOptions($request, $runtime);
    }

    /**
     * Deletes a plan from an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     * If you no longer need a plan, you can call this operation to delete the plan. The plan management feature is supported only for AnalyticDB for PostgreSQL instances in Serverless mode.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param Request - DeleteDBInstancePlanRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDBInstancePlanResponse
     *
     * @param DeleteDBInstancePlanRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteDBInstancePlanResponse
     */
    public function deleteDBInstancePlanWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->planId) {
            @$query['PlanId'] = $request->planId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDBInstancePlan',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDBInstancePlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a plan from an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     * If you no longer need a plan, you can call this operation to delete the plan. The plan management feature is supported only for AnalyticDB for PostgreSQL instances in Serverless mode.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param Request - DeleteDBInstancePlanRequest
     *
     * @returns DeleteDBInstancePlanResponse
     *
     * @param DeleteDBInstancePlanRequest $request
     *
     * @return DeleteDBInstancePlanResponse
     */
    public function deleteDBInstancePlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDBInstancePlanWithOptions($request, $runtime);
    }

    /**
     * Deletes a resource group.
     *
     * @param Request - DeleteDBResourceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDBResourceGroupResponse
     *
     * @param DeleteDBResourceGroupRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteDBResourceGroupResponse
     */
    public function deleteDBResourceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceGroupName) {
            @$query['ResourceGroupName'] = $request->resourceGroupName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDBResourceGroup',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDBResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a resource group.
     *
     * @param Request - DeleteDBResourceGroupRequest
     *
     * @returns DeleteDBResourceGroupResponse
     *
     * @param DeleteDBResourceGroupRequest $request
     *
     * @return DeleteDBResourceGroupResponse
     */
    public function deleteDBResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDBResourceGroupWithOptions($request, $runtime);
    }

    /**
     * 删除数据库.
     *
     * @param Request - DeleteDatabaseRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDatabaseResponse
     *
     * @param DeleteDatabaseRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteDatabaseResponse
     */
    public function deleteDatabaseWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->databaseName) {
            @$query['DatabaseName'] = $request->databaseName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDatabase',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDatabaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除数据库.
     *
     * @param Request - DeleteDatabaseRequest
     *
     * @returns DeleteDatabaseResponse
     *
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
     * Delete Document.
     *
     * @param Request - DeleteDocumentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDocumentResponse
     *
     * @param DeleteDocumentRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteDocumentResponse
     */
    public function deleteDocumentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->collection) {
            @$query['Collection'] = $request->collection;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->fileName) {
            @$query['FileName'] = $request->fileName;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->namespacePassword) {
            @$query['NamespacePassword'] = $request->namespacePassword;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDocument',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDocumentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete Document.
     *
     * @param Request - DeleteDocumentRequest
     *
     * @returns DeleteDocumentResponse
     *
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
     * Delete Knowledge Base.
     *
     * @param Request - DeleteDocumentCollectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDocumentCollectionResponse
     *
     * @param DeleteDocumentCollectionRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteDocumentCollectionResponse
     */
    public function deleteDocumentCollectionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->collection) {
            @$query['Collection'] = $request->collection;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->namespacePassword) {
            @$query['NamespacePassword'] = $request->namespacePassword;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDocumentCollection',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDocumentCollectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete Knowledge Base.
     *
     * @param Request - DeleteDocumentCollectionRequest
     *
     * @returns DeleteDocumentCollectionResponse
     *
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
     * Uninstall an extension.
     *
     * @param Request - DeleteExtensionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteExtensionResponse
     *
     * @param DeleteExtensionRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteExtensionResponse
     */
    public function deleteExtensionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->DBNames) {
            @$query['DBNames'] = $request->DBNames;
        }

        if (null !== $request->extension) {
            @$query['Extension'] = $request->extension;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteExtension',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteExtensionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Uninstall an extension.
     *
     * @param Request - DeleteExtensionRequest
     *
     * @returns DeleteExtensionResponse
     *
     * @param DeleteExtensionRequest $request
     *
     * @return DeleteExtensionResponse
     */
    public function deleteExtension($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteExtensionWithOptions($request, $runtime);
    }

    /**
     * Delete External Data Service.
     *
     * @param Request - DeleteExternalDataServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteExternalDataServiceResponse
     *
     * @param DeleteExternalDataServiceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteExternalDataServiceResponse
     */
    public function deleteExternalDataServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceId) {
            @$query['ServiceId'] = $request->serviceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteExternalDataService',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteExternalDataServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete External Data Service.
     *
     * @param Request - DeleteExternalDataServiceRequest
     *
     * @returns DeleteExternalDataServiceResponse
     *
     * @param DeleteExternalDataServiceRequest $request
     *
     * @return DeleteExternalDataServiceResponse
     */
    public function deleteExternalDataService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteExternalDataServiceWithOptions($request, $runtime);
    }

    /**
     * 删除hadoop数据源.
     *
     * @param Request - DeleteHadoopDataSourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteHadoopDataSourceResponse
     *
     * @param DeleteHadoopDataSourceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteHadoopDataSourceResponse
     */
    public function deleteHadoopDataSourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->dataSourceId) {
            @$query['DataSourceId'] = $request->dataSourceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteHadoopDataSource',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteHadoopDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除hadoop数据源.
     *
     * @param Request - DeleteHadoopDataSourceRequest
     *
     * @returns DeleteHadoopDataSourceResponse
     *
     * @param DeleteHadoopDataSourceRequest $request
     *
     * @return DeleteHadoopDataSourceResponse
     */
    public function deleteHadoopDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteHadoopDataSourceWithOptions($request, $runtime);
    }

    /**
     * Deletes an index.
     *
     * @param Request - DeleteIndexRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteIndexResponse
     *
     * @param DeleteIndexRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteIndexResponse
     */
    public function deleteIndexWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->collection) {
            @$query['Collection'] = $request->collection;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->indexName) {
            @$query['IndexName'] = $request->indexName;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->namespacePassword) {
            @$query['NamespacePassword'] = $request->namespacePassword;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteIndex',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteIndexResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an index.
     *
     * @param Request - DeleteIndexRequest
     *
     * @returns DeleteIndexResponse
     *
     * @param DeleteIndexRequest $request
     *
     * @return DeleteIndexResponse
     */
    public function deleteIndex($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteIndexWithOptions($request, $runtime);
    }

    /**
     * Delete JDBC data source.
     *
     * @param Request - DeleteJDBCDataSourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteJDBCDataSourceResponse
     *
     * @param DeleteJDBCDataSourceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteJDBCDataSourceResponse
     */
    public function deleteJDBCDataSourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->dataSourceId) {
            @$query['DataSourceId'] = $request->dataSourceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteJDBCDataSource',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteJDBCDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete JDBC data source.
     *
     * @param Request - DeleteJDBCDataSourceRequest
     *
     * @returns DeleteJDBCDataSourceResponse
     *
     * @param DeleteJDBCDataSourceRequest $request
     *
     * @return DeleteJDBCDataSourceResponse
     */
    public function deleteJDBCDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteJDBCDataSourceWithOptions($request, $runtime);
    }

    /**
     * Delete Model Service.
     *
     * @remarks
     * Deletes a model service.
     *
     * @param Request - DeleteModelServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteModelServiceResponse
     *
     * @param DeleteModelServiceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteModelServiceResponse
     */
    public function deleteModelServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->modelServiceId) {
            @$query['ModelServiceId'] = $request->modelServiceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteModelService',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteModelServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete Model Service.
     *
     * @remarks
     * Deletes a model service.
     *
     * @param Request - DeleteModelServiceRequest
     *
     * @returns DeleteModelServiceResponse
     *
     * @param DeleteModelServiceRequest $request
     *
     * @return DeleteModelServiceResponse
     */
    public function deleteModelService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteModelServiceWithOptions($request, $runtime);
    }

    /**
     * Deletes a namespace.
     *
     * @param Request - DeleteNamespaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteNamespaceResponse
     *
     * @param DeleteNamespaceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteNamespaceResponse
     */
    public function deleteNamespaceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->managerAccount) {
            @$query['ManagerAccount'] = $request->managerAccount;
        }

        if (null !== $request->managerAccountPassword) {
            @$query['ManagerAccountPassword'] = $request->managerAccountPassword;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteNamespace',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a namespace.
     *
     * @param Request - DeleteNamespaceRequest
     *
     * @returns DeleteNamespaceResponse
     *
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
     * 关闭私有RAG服务
     *
     * @param Request - DeletePrivateRAGServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePrivateRAGServiceResponse
     *
     * @param DeletePrivateRAGServiceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeletePrivateRAGServiceResponse
     */
    public function deletePrivateRAGServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeletePrivateRAGService',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeletePrivateRAGServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 关闭私有RAG服务
     *
     * @param Request - DeletePrivateRAGServiceRequest
     *
     * @returns DeletePrivateRAGServiceResponse
     *
     * @param DeletePrivateRAGServiceRequest $request
     *
     * @return DeletePrivateRAGServiceResponse
     */
    public function deletePrivateRAGService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePrivateRAGServiceWithOptions($request, $runtime);
    }

    /**
     * Deletes a remote AnalyticDB data source.
     *
     * @param Request - DeleteRemoteADBDataSourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteRemoteADBDataSourceResponse
     *
     * @param DeleteRemoteADBDataSourceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteRemoteADBDataSourceResponse
     */
    public function deleteRemoteADBDataSourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dataSourceId) {
            @$query['DataSourceId'] = $request->dataSourceId;
        }

        if (null !== $request->localDBInstanceId) {
            @$query['LocalDBInstanceId'] = $request->localDBInstanceId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteRemoteADBDataSource',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteRemoteADBDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a remote AnalyticDB data source.
     *
     * @param Request - DeleteRemoteADBDataSourceRequest
     *
     * @returns DeleteRemoteADBDataSourceResponse
     *
     * @param DeleteRemoteADBDataSourceRequest $request
     *
     * @return DeleteRemoteADBDataSourceResponse
     */
    public function deleteRemoteADBDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRemoteADBDataSourceWithOptions($request, $runtime);
    }

    /**
     * Deletes the access credentials of an AnalyticDB for PostgreSQL instance.
     *
     * @param Request - DeleteSecretRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSecretResponse
     *
     * @param DeleteSecretRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteSecretResponse
     */
    public function deleteSecretWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->secretArn) {
            @$query['SecretArn'] = $request->secretArn;
        }

        if (null !== $request->secretName) {
            @$query['SecretName'] = $request->secretName;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteSecret',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteSecretResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes the access credentials of an AnalyticDB for PostgreSQL instance.
     *
     * @param Request - DeleteSecretRequest
     *
     * @returns DeleteSecretResponse
     *
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
     * Deletes a real-time data service.
     *
     * @param Request - DeleteStreamingDataServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteStreamingDataServiceResponse
     *
     * @param DeleteStreamingDataServiceRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteStreamingDataServiceResponse
     */
    public function deleteStreamingDataServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceId) {
            @$query['ServiceId'] = $request->serviceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteStreamingDataService',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteStreamingDataServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a real-time data service.
     *
     * @param Request - DeleteStreamingDataServiceRequest
     *
     * @returns DeleteStreamingDataServiceResponse
     *
     * @param DeleteStreamingDataServiceRequest $request
     *
     * @return DeleteStreamingDataServiceResponse
     */
    public function deleteStreamingDataService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteStreamingDataServiceWithOptions($request, $runtime);
    }

    /**
     * Deletes a real-time data source.
     *
     * @param Request - DeleteStreamingDataSourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteStreamingDataSourceResponse
     *
     * @param DeleteStreamingDataSourceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteStreamingDataSourceResponse
     */
    public function deleteStreamingDataSourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->dataSourceId) {
            @$query['DataSourceId'] = $request->dataSourceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteStreamingDataSource',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteStreamingDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a real-time data source.
     *
     * @param Request - DeleteStreamingDataSourceRequest
     *
     * @returns DeleteStreamingDataSourceResponse
     *
     * @param DeleteStreamingDataSourceRequest $request
     *
     * @return DeleteStreamingDataSourceResponse
     */
    public function deleteStreamingDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteStreamingDataSourceWithOptions($request, $runtime);
    }

    /**
     * Deletes a real-time data service job.
     *
     * @param Request - DeleteStreamingJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteStreamingJobResponse
     *
     * @param DeleteStreamingJobRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteStreamingJobResponse
     */
    public function deleteStreamingJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteStreamingJob',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteStreamingJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a real-time data service job.
     *
     * @param Request - DeleteStreamingJobRequest
     *
     * @returns DeleteStreamingJobResponse
     *
     * @param DeleteStreamingJobRequest $request
     *
     * @return DeleteStreamingJobResponse
     */
    public function deleteStreamingJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteStreamingJobWithOptions($request, $runtime);
    }

    /**
     * Deletes a Supabase project.
     *
     * @remarks
     *   You can call this operation to delete a Supabase project.
     *
     * @param Request - DeleteSupabaseProjectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSupabaseProjectResponse
     *
     * @param DeleteSupabaseProjectRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteSupabaseProjectResponse
     */
    public function deleteSupabaseProjectWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteSupabaseProject',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteSupabaseProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a Supabase project.
     *
     * @remarks
     *   You can call this operation to delete a Supabase project.
     *
     * @param Request - DeleteSupabaseProjectRequest
     *
     * @returns DeleteSupabaseProjectResponse
     *
     * @param DeleteSupabaseProjectRequest $request
     *
     * @return DeleteSupabaseProjectResponse
     */
    public function deleteSupabaseProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSupabaseProjectWithOptions($request, $runtime);
    }

    /**
     * Deletes a vector index.
     *
     * @param Request - DeleteVectorIndexRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteVectorIndexResponse
     *
     * @param DeleteVectorIndexRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteVectorIndexResponse
     */
    public function deleteVectorIndexWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->collection) {
            @$query['Collection'] = $request->collection;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->managerAccount) {
            @$query['ManagerAccount'] = $request->managerAccount;
        }

        if (null !== $request->managerAccountPassword) {
            @$query['ManagerAccountPassword'] = $request->managerAccountPassword;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteVectorIndex',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteVectorIndexResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a vector index.
     *
     * @param Request - DeleteVectorIndexRequest
     *
     * @returns DeleteVectorIndexResponse
     *
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
     * 部署私有RAG服务
     *
     * @param Request - DeployPrivateRAGServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeployPrivateRAGServiceResponse
     *
     * @param DeployPrivateRAGServiceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeployPrivateRAGServiceResponse
     */
    public function deployPrivateRAGServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeployPrivateRAGService',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeployPrivateRAGServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 部署私有RAG服务
     *
     * @param Request - DeployPrivateRAGServiceRequest
     *
     * @returns DeployPrivateRAGServiceResponse
     *
     * @param DeployPrivateRAGServiceRequest $request
     *
     * @return DeployPrivateRAGServiceResponse
     */
    public function deployPrivateRAGService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deployPrivateRAGServiceWithOptions($request, $runtime);
    }

    /**
     * Queries the information about database accounts for an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     * This operation is called to query the information of the privileged account in an AnalyticDB for PostgreSQL instance, such as its state, description, and the instance.
     * ## Limit
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered and may affect your business. We recommend that you take note of the limit when you call this operation.
     *
     * @param Request - DescribeAccountsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAccountsResponse
     *
     * @param DescribeAccountsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeAccountsResponse
     */
    public function describeAccountsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountName) {
            @$query['AccountName'] = $request->accountName;
        }

        if (null !== $request->accountType) {
            @$query['AccountType'] = $request->accountType;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAccounts',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAccountsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about database accounts for an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     * This operation is called to query the information of the privileged account in an AnalyticDB for PostgreSQL instance, such as its state, description, and the instance.
     * ## Limit
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered and may affect your business. We recommend that you take note of the limit when you call this operation.
     *
     * @param Request - DescribeAccountsRequest
     *
     * @returns DescribeAccountsResponse
     *
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
     * Queries active SQL records.
     *
     * @param Request - DescribeActiveSQLRecordsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeActiveSQLRecordsResponse
     *
     * @param DescribeActiveSQLRecordsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeActiveSQLRecordsResponse
     */
    public function describeActiveSQLRecordsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->database) {
            @$query['Database'] = $request->database;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->maxDuration) {
            @$query['MaxDuration'] = $request->maxDuration;
        }

        if (null !== $request->minDuration) {
            @$query['MinDuration'] = $request->minDuration;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->user) {
            @$query['User'] = $request->user;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeActiveSQLRecords',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeActiveSQLRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries active SQL records.
     *
     * @param Request - DescribeActiveSQLRecordsRequest
     *
     * @returns DescribeActiveSQLRecordsResponse
     *
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
     * Queries the information about available resources of AnalyticDB for PostgreSQL.
     *
     * @remarks
     * When you create an AnalyticDB for PostgreSQL instance, you can call this operation to query the available resources within a zone.
     *
     * @param Request - DescribeAvailableResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAvailableResourcesResponse
     *
     * @param DescribeAvailableResourcesRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeAvailableResourcesResponse
     */
    public function describeAvailableResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->chargeType) {
            @$query['ChargeType'] = $request->chargeType;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAvailableResources',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAvailableResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about available resources of AnalyticDB for PostgreSQL.
     *
     * @remarks
     * When you create an AnalyticDB for PostgreSQL instance, you can call this operation to query the available resources within a zone.
     *
     * @param Request - DescribeAvailableResourcesRequest
     *
     * @returns DescribeAvailableResourcesResponse
     *
     * @param DescribeAvailableResourcesRequest $request
     *
     * @return DescribeAvailableResourcesResponse
     */
    public function describeAvailableResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAvailableResourcesWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a backup job.
     *
     * @param Request - DescribeBackupJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeBackupJobResponse
     *
     * @param DescribeBackupJobRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeBackupJobResponse
     */
    public function describeBackupJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupJobId) {
            @$query['BackupJobId'] = $request->backupJobId;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeBackupJob',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeBackupJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a backup job.
     *
     * @param Request - DescribeBackupJobRequest
     *
     * @returns DescribeBackupJobResponse
     *
     * @param DescribeBackupJobRequest $request
     *
     * @return DescribeBackupJobResponse
     */
    public function describeBackupJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupJobWithOptions($request, $runtime);
    }

    /**
     * Queries the backup policy of an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     * You can call this operation to query the backup settings of an AnalyticDB for PostgreSQL instance in elastic storage mode. Periodically backing data can prevent data loss. For more information about how to modify backup policies, see [ModifyBackupPolicy](https://help.aliyun.com/document_detail/210095.html).
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param Request - DescribeBackupPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeBackupPolicyResponse
     *
     * @param DescribeBackupPolicyRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeBackupPolicyResponse
     */
    public function describeBackupPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeBackupPolicy',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeBackupPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the backup policy of an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     * You can call this operation to query the backup settings of an AnalyticDB for PostgreSQL instance in elastic storage mode. Periodically backing data can prevent data loss. For more information about how to modify backup policies, see [ModifyBackupPolicy](https://help.aliyun.com/document_detail/210095.html).
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param Request - DescribeBackupPolicyRequest
     *
     * @returns DescribeBackupPolicyResponse
     *
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
     * Queries the information about a vector collection.
     *
     * @param Request - DescribeCollectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCollectionResponse
     *
     * @param DescribeCollectionRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeCollectionResponse
     */
    public function describeCollectionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->collection) {
            @$query['Collection'] = $request->collection;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->namespacePassword) {
            @$query['NamespacePassword'] = $request->namespacePassword;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCollection',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCollectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a vector collection.
     *
     * @param Request - DescribeCollectionRequest
     *
     * @returns DescribeCollectionResponse
     *
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
     * Queries the information about an index creation job.
     *
     * @param Request - DescribeCreateIndexJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCreateIndexJobResponse
     *
     * @param DescribeCreateIndexJobRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeCreateIndexJobResponse
     */
    public function describeCreateIndexJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->collection) {
            @$query['Collection'] = $request->collection;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->namespacePassword) {
            @$query['NamespacePassword'] = $request->namespacePassword;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCreateIndexJob',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCreateIndexJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about an index creation job.
     *
     * @param Request - DescribeCreateIndexJobRequest
     *
     * @returns DescribeCreateIndexJobResponse
     *
     * @param DescribeCreateIndexJobRequest $request
     *
     * @return DescribeCreateIndexJobResponse
     */
    public function describeCreateIndexJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCreateIndexJobWithOptions($request, $runtime);
    }

    /**
     * Queries a list of nodes in an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     * ##
     * You can call this operation to query the information about coordinator and compute nodes in an AnalyticDB for PostgreSQL instance in elastic storage mode or Serverless mode.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param Request - DescribeDBClusterNodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBClusterNodeResponse
     *
     * @param DescribeDBClusterNodeRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeDBClusterNodeResponse
     */
    public function describeDBClusterNodeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->nodeType) {
            @$query['NodeType'] = $request->nodeType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDBClusterNode',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDBClusterNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of nodes in an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     * ##
     * You can call this operation to query the information about coordinator and compute nodes in an AnalyticDB for PostgreSQL instance in elastic storage mode or Serverless mode.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param Request - DescribeDBClusterNodeRequest
     *
     * @returns DescribeDBClusterNodeResponse
     *
     * @param DescribeDBClusterNodeRequest $request
     *
     * @return DescribeDBClusterNodeResponse
     */
    public function describeDBClusterNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClusterNodeWithOptions($request, $runtime);
    }

    /**
     * Queries the information about performance metrics of an AnalyticDB for PostgreSQL instance within a time range.
     *
     * @remarks
     * You can query monitoring information only within the last 30 days.
     *
     * @param Request - DescribeDBClusterPerformanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBClusterPerformanceResponse
     *
     * @param DescribeDBClusterPerformanceRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeDBClusterPerformanceResponse
     */
    public function describeDBClusterPerformanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->key) {
            @$query['Key'] = $request->key;
        }

        if (null !== $request->nodeType) {
            @$query['NodeType'] = $request->nodeType;
        }

        if (null !== $request->nodes) {
            @$query['Nodes'] = $request->nodes;
        }

        if (null !== $request->resourceGroupName) {
            @$query['ResourceGroupName'] = $request->resourceGroupName;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDBClusterPerformance',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDBClusterPerformanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about performance metrics of an AnalyticDB for PostgreSQL instance within a time range.
     *
     * @remarks
     * You can query monitoring information only within the last 30 days.
     *
     * @param Request - DescribeDBClusterPerformanceRequest
     *
     * @returns DescribeDBClusterPerformanceResponse
     *
     * @param DescribeDBClusterPerformanceRequest $request
     *
     * @return DescribeDBClusterPerformanceResponse
     */
    public function describeDBClusterPerformance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClusterPerformanceWithOptions($request, $runtime);
    }

    /**
     * Query detailed information about the instance.
     *
     * @remarks
     * ## Usage Instructions
     * This interface is generally used to view information such as the specifications, network type, and instance status of AnalyticDB for PostgreSQL instances.
     * ## QPS Limitation
     * The default single-user QPS limit for this interface is 1000 times/second. If the limit is exceeded, API calls will be throttled, which may affect your business. Please use it reasonably.
     * <props="china">The QPS in this document is only a default reference value. For accurate information, please refer to the [API Rate Quota List](https://quotas.console.aliyun.com/flow-control-products/gpdb/quotas).
     *
     * @param Request - DescribeDBInstanceAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBInstanceAttributeResponse
     *
     * @param DescribeDBInstanceAttributeRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDBInstanceAttributeResponse
     */
    public function describeDBInstanceAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDBInstanceAttribute',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDBInstanceAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query detailed information about the instance.
     *
     * @remarks
     * ## Usage Instructions
     * This interface is generally used to view information such as the specifications, network type, and instance status of AnalyticDB for PostgreSQL instances.
     * ## QPS Limitation
     * The default single-user QPS limit for this interface is 1000 times/second. If the limit is exceeded, API calls will be throttled, which may affect your business. Please use it reasonably.
     * <props="china">The QPS in this document is only a default reference value. For accurate information, please refer to the [API Rate Quota List](https://quotas.console.aliyun.com/flow-control-products/gpdb/quotas).
     *
     * @param Request - DescribeDBInstanceAttributeRequest
     *
     * @returns DescribeDBInstanceAttributeResponse
     *
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
     * Queries the information about data bloat for an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     * You can call this operation to query the details of data bloat on an AnalyticDB for PostgreSQL instance in elastic storage mode. The minor version of the instance must be V6.3.10.1 or later. For more information about how to view and update the minor version of an instance, see [View the minor engine version](https://help.aliyun.com/document_detail/277424.html) and [Update the minor engine version](https://help.aliyun.com/document_detail/139271.html).
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param Request - DescribeDBInstanceDataBloatRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBInstanceDataBloatResponse
     *
     * @param DescribeDBInstanceDataBloatRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDBInstanceDataBloatResponse
     */
    public function describeDBInstanceDataBloatWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->database) {
            @$query['Database'] = $request->database;
        }

        if (null !== $request->orderBy) {
            @$query['OrderBy'] = $request->orderBy;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDBInstanceDataBloat',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDBInstanceDataBloatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about data bloat for an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     * You can call this operation to query the details of data bloat on an AnalyticDB for PostgreSQL instance in elastic storage mode. The minor version of the instance must be V6.3.10.1 or later. For more information about how to view and update the minor version of an instance, see [View the minor engine version](https://help.aliyun.com/document_detail/277424.html) and [Update the minor engine version](https://help.aliyun.com/document_detail/139271.html).
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param Request - DescribeDBInstanceDataBloatRequest
     *
     * @returns DescribeDBInstanceDataBloatResponse
     *
     * @param DescribeDBInstanceDataBloatRequest $request
     *
     * @return DescribeDBInstanceDataBloatResponse
     */
    public function describeDBInstanceDataBloat($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceDataBloatWithOptions($request, $runtime);
    }

    /**
     * Queries the information about data skew for an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     * To prevent data skew from affecting your database service, you can call this operation to query the details about data skew on an AnalyticDB for PostgreSQL instance.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param Request - DescribeDBInstanceDataSkewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBInstanceDataSkewResponse
     *
     * @param DescribeDBInstanceDataSkewRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeDBInstanceDataSkewResponse
     */
    public function describeDBInstanceDataSkewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->database) {
            @$query['Database'] = $request->database;
        }

        if (null !== $request->orderBy) {
            @$query['OrderBy'] = $request->orderBy;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDBInstanceDataSkew',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDBInstanceDataSkewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about data skew for an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     * To prevent data skew from affecting your database service, you can call this operation to query the details about data skew on an AnalyticDB for PostgreSQL instance.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param Request - DescribeDBInstanceDataSkewRequest
     *
     * @returns DescribeDBInstanceDataSkewResponse
     *
     * @param DescribeDBInstanceDataSkewRequest $request
     *
     * @return DescribeDBInstanceDataSkewResponse
     */
    public function describeDBInstanceDataSkew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceDataSkewWithOptions($request, $runtime);
    }

    /**
     * Queries the information about nodes in an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     * You can call this operation to query the distribution and states of coordinator and compute nodes in an AnalyticDB for PostgreSQL instance.
     *
     * @param Request - DescribeDBInstanceDiagnosisSummaryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBInstanceDiagnosisSummaryResponse
     *
     * @param DescribeDBInstanceDiagnosisSummaryRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeDBInstanceDiagnosisSummaryResponse
     */
    public function describeDBInstanceDiagnosisSummaryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->rolePreferd) {
            @$query['RolePreferd'] = $request->rolePreferd;
        }

        if (null !== $request->startStatus) {
            @$query['StartStatus'] = $request->startStatus;
        }

        if (null !== $request->syncMode) {
            @$query['SyncMode'] = $request->syncMode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDBInstanceDiagnosisSummary',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDBInstanceDiagnosisSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about nodes in an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     * You can call this operation to query the distribution and states of coordinator and compute nodes in an AnalyticDB for PostgreSQL instance.
     *
     * @param Request - DescribeDBInstanceDiagnosisSummaryRequest
     *
     * @returns DescribeDBInstanceDiagnosisSummaryResponse
     *
     * @param DescribeDBInstanceDiagnosisSummaryRequest $request
     *
     * @return DescribeDBInstanceDiagnosisSummaryResponse
     */
    public function describeDBInstanceDiagnosisSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceDiagnosisSummaryWithOptions($request, $runtime);
    }

    /**
     * Queries the error logs of an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     * You can call this operation to query the error logs of an AnalyticDB for PostgreSQL instance.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param Request - DescribeDBInstanceErrorLogRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBInstanceErrorLogResponse
     *
     * @param DescribeDBInstanceErrorLogRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeDBInstanceErrorLogResponse
     */
    public function describeDBInstanceErrorLogWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->database) {
            @$query['Database'] = $request->database;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->host) {
            @$query['Host'] = $request->host;
        }

        if (null !== $request->keywords) {
            @$query['Keywords'] = $request->keywords;
        }

        if (null !== $request->logLevel) {
            @$query['LogLevel'] = $request->logLevel;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->user) {
            @$query['User'] = $request->user;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDBInstanceErrorLog',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDBInstanceErrorLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the error logs of an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     * You can call this operation to query the error logs of an AnalyticDB for PostgreSQL instance.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param Request - DescribeDBInstanceErrorLogRequest
     *
     * @returns DescribeDBInstanceErrorLogResponse
     *
     * @param DescribeDBInstanceErrorLogRequest $request
     *
     * @return DescribeDBInstanceErrorLogResponse
     */
    public function describeDBInstanceErrorLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceErrorLogWithOptions($request, $runtime);
    }

    /**
     * Queries the whitelists of IP addresses that are allowed to access an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     * You can call this operation to query the whitelists of IP addresses that are allowed to access an AnalyticDB for PostgreSQL instance.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param Request - DescribeDBInstanceIPArrayListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBInstanceIPArrayListResponse
     *
     * @param DescribeDBInstanceIPArrayListRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeDBInstanceIPArrayListResponse
     */
    public function describeDBInstanceIPArrayListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceIPArrayName) {
            @$query['DBInstanceIPArrayName'] = $request->DBInstanceIPArrayName;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDBInstanceIPArrayList',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDBInstanceIPArrayListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the whitelists of IP addresses that are allowed to access an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     * You can call this operation to query the whitelists of IP addresses that are allowed to access an AnalyticDB for PostgreSQL instance.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param Request - DescribeDBInstanceIPArrayListRequest
     *
     * @returns DescribeDBInstanceIPArrayListResponse
     *
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
     * Queries the index usage of an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     * Appropriate indexes can accelerate database queries. You can call this operation to query the index usage of an AnalyticDB for PostgreSQL instance.
     * This operation is available only for instances of V6.3.10.1 or later in elastic storage mode. For information about how to view and update the minor version of an instance, see [View the minor engine version](https://help.aliyun.com/document_detail/277424.html) and [Update the minor engine version](https://help.aliyun.com/document_detail/139271.html).
     *
     * @param Request - DescribeDBInstanceIndexUsageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBInstanceIndexUsageResponse
     *
     * @param DescribeDBInstanceIndexUsageRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeDBInstanceIndexUsageResponse
     */
    public function describeDBInstanceIndexUsageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->database) {
            @$query['Database'] = $request->database;
        }

        if (null !== $request->orderBy) {
            @$query['OrderBy'] = $request->orderBy;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDBInstanceIndexUsage',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDBInstanceIndexUsageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the index usage of an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     * Appropriate indexes can accelerate database queries. You can call this operation to query the index usage of an AnalyticDB for PostgreSQL instance.
     * This operation is available only for instances of V6.3.10.1 or later in elastic storage mode. For information about how to view and update the minor version of an instance, see [View the minor engine version](https://help.aliyun.com/document_detail/277424.html) and [Update the minor engine version](https://help.aliyun.com/document_detail/139271.html).
     *
     * @param Request - DescribeDBInstanceIndexUsageRequest
     *
     * @returns DescribeDBInstanceIndexUsageResponse
     *
     * @param DescribeDBInstanceIndexUsageRequest $request
     *
     * @return DescribeDBInstanceIndexUsageResponse
     */
    public function describeDBInstanceIndexUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceIndexUsageWithOptions($request, $runtime);
    }

    /**
     * Queries the connection information of an instance.
     *
     * @param Request - DescribeDBInstanceNetInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBInstanceNetInfoResponse
     *
     * @param DescribeDBInstanceNetInfoRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeDBInstanceNetInfoResponse
     */
    public function describeDBInstanceNetInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->connectionString) {
            @$query['ConnectionString'] = $request->connectionString;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDBInstanceNetInfo',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDBInstanceNetInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the connection information of an instance.
     *
     * @param Request - DescribeDBInstanceNetInfoRequest
     *
     * @returns DescribeDBInstanceNetInfoResponse
     *
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
     * Queries the information about performance metrics of an AnalyticDB for PostgreSQL instance within a time range.
     *
     * @param Request - DescribeDBInstancePerformanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBInstancePerformanceResponse
     *
     * @param DescribeDBInstancePerformanceRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeDBInstancePerformanceResponse
     */
    public function describeDBInstancePerformanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->key) {
            @$query['Key'] = $request->key;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDBInstancePerformance',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDBInstancePerformanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about performance metrics of an AnalyticDB for PostgreSQL instance within a time range.
     *
     * @param Request - DescribeDBInstancePerformanceRequest
     *
     * @returns DescribeDBInstancePerformanceResponse
     *
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
     * Queries the information about plans for an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     * You can call this operation to query the details of plans for an AnalyticDB for PostgreSQL instance in Serverless mode.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param Request - DescribeDBInstancePlansRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBInstancePlansResponse
     *
     * @param DescribeDBInstancePlansRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDBInstancePlansResponse
     */
    public function describeDBInstancePlansWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->planCreateDate) {
            @$query['PlanCreateDate'] = $request->planCreateDate;
        }

        if (null !== $request->planDesc) {
            @$query['PlanDesc'] = $request->planDesc;
        }

        if (null !== $request->planId) {
            @$query['PlanId'] = $request->planId;
        }

        if (null !== $request->planScheduleType) {
            @$query['PlanScheduleType'] = $request->planScheduleType;
        }

        if (null !== $request->planType) {
            @$query['PlanType'] = $request->planType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDBInstancePlans',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDBInstancePlansResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about plans for an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     * You can call this operation to query the details of plans for an AnalyticDB for PostgreSQL instance in Serverless mode.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param Request - DescribeDBInstancePlansRequest
     *
     * @returns DescribeDBInstancePlansResponse
     *
     * @param DescribeDBInstancePlansRequest $request
     *
     * @return DescribeDBInstancePlansResponse
     */
    public function describeDBInstancePlans($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstancePlansWithOptions($request, $runtime);
    }

    /**
     * Queries the SSL information about an AnalyticDB for PostgreSQL instance.
     *
     * @param Request - DescribeDBInstanceSSLRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBInstanceSSLResponse
     *
     * @param DescribeDBInstanceSSLRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeDBInstanceSSLResponse
     */
    public function describeDBInstanceSSLWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDBInstanceSSL',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDBInstanceSSLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the SSL information about an AnalyticDB for PostgreSQL instance.
     *
     * @param Request - DescribeDBInstanceSSLRequest
     *
     * @returns DescribeDBInstanceSSLResponse
     *
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
     * Queries the maximum performance of an AnalyticDB for PostgreSQL instance.
     *
     * @param Request - DescribeDBInstanceSupportMaxPerformanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBInstanceSupportMaxPerformanceResponse
     *
     * @param DescribeDBInstanceSupportMaxPerformanceRequest $request
     * @param RuntimeOptions                                 $runtime
     *
     * @return DescribeDBInstanceSupportMaxPerformanceResponse
     */
    public function describeDBInstanceSupportMaxPerformanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDBInstanceSupportMaxPerformance',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDBInstanceSupportMaxPerformanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the maximum performance of an AnalyticDB for PostgreSQL instance.
     *
     * @param Request - DescribeDBInstanceSupportMaxPerformanceRequest
     *
     * @returns DescribeDBInstanceSupportMaxPerformanceResponse
     *
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
     * Queries a list of AnalyticDB for PostgreSQL instances.
     *
     * @remarks
     * ##
     * You can call this operation to query the instance types, network types, and states of AnalyticDB for PostgreSQL instances within a region.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param tmpReq - DescribeDBInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBInstancesResponse
     *
     * @param DescribeDBInstancesRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeDBInstancesResponse
     */
    public function describeDBInstancesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribeDBInstancesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->DBInstanceCategories) {
            $request->DBInstanceCategoriesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->DBInstanceCategories, 'DBInstanceCategories', 'simple');
        }

        if (null !== $tmpReq->DBInstanceModes) {
            $request->DBInstanceModesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->DBInstanceModes, 'DBInstanceModes', 'simple');
        }

        if (null !== $tmpReq->DBInstanceStatuses) {
            $request->DBInstanceStatusesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->DBInstanceStatuses, 'DBInstanceStatuses', 'simple');
        }

        if (null !== $tmpReq->instanceDeployTypes) {
            $request->instanceDeployTypesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->instanceDeployTypes, 'InstanceDeployTypes', 'simple');
        }

        $query = [];
        if (null !== $request->DBInstanceCategoriesShrink) {
            @$query['DBInstanceCategories'] = $request->DBInstanceCategoriesShrink;
        }

        if (null !== $request->DBInstanceDescription) {
            @$query['DBInstanceDescription'] = $request->DBInstanceDescription;
        }

        if (null !== $request->DBInstanceIds) {
            @$query['DBInstanceIds'] = $request->DBInstanceIds;
        }

        if (null !== $request->DBInstanceModesShrink) {
            @$query['DBInstanceModes'] = $request->DBInstanceModesShrink;
        }

        if (null !== $request->DBInstanceStatusesShrink) {
            @$query['DBInstanceStatuses'] = $request->DBInstanceStatusesShrink;
        }

        if (null !== $request->instanceDeployTypesShrink) {
            @$query['InstanceDeployTypes'] = $request->instanceDeployTypesShrink;
        }

        if (null !== $request->instanceNetworkType) {
            @$query['InstanceNetworkType'] = $request->instanceNetworkType;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDBInstances',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDBInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of AnalyticDB for PostgreSQL instances.
     *
     * @remarks
     * ##
     * You can call this operation to query the instance types, network types, and states of AnalyticDB for PostgreSQL instances within a region.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param Request - DescribeDBInstancesRequest
     *
     * @returns DescribeDBInstancesResponse
     *
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
     * Queries the information about resource groups.
     *
     * @param Request - DescribeDBResourceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBResourceGroupResponse
     *
     * @param DescribeDBResourceGroupRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDBResourceGroupResponse
     */
    public function describeDBResourceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceGroupName) {
            @$query['ResourceGroupName'] = $request->resourceGroupName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDBResourceGroup',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDBResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about resource groups.
     *
     * @param Request - DescribeDBResourceGroupRequest
     *
     * @returns DescribeDBResourceGroupResponse
     *
     * @param DescribeDBResourceGroupRequest $request
     *
     * @return DescribeDBResourceGroupResponse
     */
    public function describeDBResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBResourceGroupWithOptions($request, $runtime);
    }

    /**
     * Queries the resource management mode of an AnalyticDB for PostgreSQL instance.
     *
     * @param Request - DescribeDBResourceManagementModeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBResourceManagementModeResponse
     *
     * @param DescribeDBResourceManagementModeRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeDBResourceManagementModeResponse
     */
    public function describeDBResourceManagementModeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDBResourceManagementMode',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDBResourceManagementModeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the resource management mode of an AnalyticDB for PostgreSQL instance.
     *
     * @param Request - DescribeDBResourceManagementModeRequest
     *
     * @returns DescribeDBResourceManagementModeResponse
     *
     * @param DescribeDBResourceManagementModeRequest $request
     *
     * @return DescribeDBResourceManagementModeResponse
     */
    public function describeDBResourceManagementMode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBResourceManagementModeWithOptions($request, $runtime);
    }

    /**
     * Queries the information about minor versions of AnalyticDB for PostgreSQL instances.
     *
     * @param Request - DescribeDBVersionInfosRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBVersionInfosResponse
     *
     * @param DescribeDBVersionInfosRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeDBVersionInfosResponse
     */
    public function describeDBVersionInfosWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceMode) {
            @$query['DBInstanceMode'] = $request->DBInstanceMode;
        }

        if (null !== $request->DBVersion) {
            @$query['DBVersion'] = $request->DBVersion;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDBVersionInfos',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDBVersionInfosResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about minor versions of AnalyticDB for PostgreSQL instances.
     *
     * @param Request - DescribeDBVersionInfosRequest
     *
     * @returns DescribeDBVersionInfosResponse
     *
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
     * Queries a list of backup sets of full backup or point-in-time backup for an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     * You can call this operation to query a list of backup sets and backup details only for instances in elastic storage mode.
     *
     * @param Request - DescribeDataBackupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDataBackupsResponse
     *
     * @param DescribeDataBackupsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeDataBackupsResponse
     */
    public function describeDataBackupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupId) {
            @$query['BackupId'] = $request->backupId;
        }

        if (null !== $request->backupMode) {
            @$query['BackupMode'] = $request->backupMode;
        }

        if (null !== $request->backupStatus) {
            @$query['BackupStatus'] = $request->backupStatus;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->dataType) {
            @$query['DataType'] = $request->dataType;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDataBackups',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDataBackupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of backup sets of full backup or point-in-time backup for an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     * You can call this operation to query a list of backup sets and backup details only for instances in elastic storage mode.
     *
     * @param Request - DescribeDataBackupsRequest
     *
     * @returns DescribeDataBackupsResponse
     *
     * @param DescribeDataBackupsRequest $request
     *
     * @return DescribeDataBackupsResponse
     */
    public function describeDataBackups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDataBackupsWithOptions($request, $runtime);
    }

    /**
     * Queries the data redistribution information about an AnalyticDB for PostgreSQL V6.0 instance in elastic storage mode.
     *
     * @param Request - DescribeDataReDistributeInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDataReDistributeInfoResponse
     *
     * @param DescribeDataReDistributeInfoRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeDataReDistributeInfoResponse
     */
    public function describeDataReDistributeInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDataReDistributeInfo',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDataReDistributeInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the data redistribution information about an AnalyticDB for PostgreSQL V6.0 instance in elastic storage mode.
     *
     * @param Request - DescribeDataReDistributeInfoRequest
     *
     * @returns DescribeDataReDistributeInfoResponse
     *
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
     * Queries the state of data sharing for AnalyticDB for PostgreSQL instances.
     *
     * @remarks
     * Data sharing is supported only for instances in Serverless mode.
     *
     * @param Request - DescribeDataShareInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDataShareInstancesResponse
     *
     * @param DescribeDataShareInstancesRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeDataShareInstancesResponse
     */
    public function describeDataShareInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->searchValue) {
            @$query['SearchValue'] = $request->searchValue;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDataShareInstances',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDataShareInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the state of data sharing for AnalyticDB for PostgreSQL instances.
     *
     * @remarks
     * Data sharing is supported only for instances in Serverless mode.
     *
     * @param Request - DescribeDataShareInstancesRequest
     *
     * @returns DescribeDataShareInstancesResponse
     *
     * @param DescribeDataShareInstancesRequest $request
     *
     * @return DescribeDataShareInstancesResponse
     */
    public function describeDataShareInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDataShareInstancesWithOptions($request, $runtime);
    }

    /**
     * Queries the information about data sharing performance metrics.
     *
     * @remarks
     * You can call this operation to query the details of data sharing performance metrics for an AnalyticDB for PostgreSQL instance in Serverless mode, such as the number of shared topics and the amount of data shared.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param Request - DescribeDataSharePerformanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDataSharePerformanceResponse
     *
     * @param DescribeDataSharePerformanceRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeDataSharePerformanceResponse
     */
    public function describeDataSharePerformanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->key) {
            @$query['Key'] = $request->key;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDataSharePerformance',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDataSharePerformanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about data sharing performance metrics.
     *
     * @remarks
     * You can call this operation to query the details of data sharing performance metrics for an AnalyticDB for PostgreSQL instance in Serverless mode, such as the number of shared topics and the amount of data shared.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param Request - DescribeDataSharePerformanceRequest
     *
     * @returns DescribeDataSharePerformanceResponse
     *
     * @param DescribeDataSharePerformanceRequest $request
     *
     * @return DescribeDataSharePerformanceResponse
     */
    public function describeDataSharePerformance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDataSharePerformanceWithOptions($request, $runtime);
    }

    /**
     * 描述数据库.
     *
     * @param Request - DescribeDatabaseRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDatabaseResponse
     *
     * @param DescribeDatabaseRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeDatabaseResponse
     */
    public function describeDatabaseWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->databaseName) {
            @$query['DatabaseName'] = $request->databaseName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDatabase',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDatabaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 描述数据库.
     *
     * @param Request - DescribeDatabaseRequest
     *
     * @returns DescribeDatabaseResponse
     *
     * @param DescribeDatabaseRequest $request
     *
     * @return DescribeDatabaseResponse
     */
    public function describeDatabase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDatabaseWithOptions($request, $runtime);
    }

    /**
     * Queries all databases and database accounts for an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     * To facilitate management, you can call this operation to query all databases and database accounts on an AnalyticDB for PostgreSQL instance.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param Request - DescribeDiagnosisDimensionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDiagnosisDimensionsResponse
     *
     * @param DescribeDiagnosisDimensionsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDiagnosisDimensionsResponse
     */
    public function describeDiagnosisDimensionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDiagnosisDimensions',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDiagnosisDimensionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries all databases and database accounts for an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     * To facilitate management, you can call this operation to query all databases and database accounts on an AnalyticDB for PostgreSQL instance.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param Request - DescribeDiagnosisDimensionsRequest
     *
     * @returns DescribeDiagnosisDimensionsResponse
     *
     * @param DescribeDiagnosisDimensionsRequest $request
     *
     * @return DescribeDiagnosisDimensionsResponse
     */
    public function describeDiagnosisDimensions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDiagnosisDimensionsWithOptions($request, $runtime);
    }

    /**
     * Queries the details of query execution on an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     * You can call this operation to query the details of query execution on an AnalyticDB for PostgreSQL instance in elastic storage mode within a specified time range.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param Request - DescribeDiagnosisMonitorPerformanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDiagnosisMonitorPerformanceResponse
     *
     * @param DescribeDiagnosisMonitorPerformanceRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeDiagnosisMonitorPerformanceResponse
     */
    public function describeDiagnosisMonitorPerformanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->database) {
            @$query['Database'] = $request->database;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->queryCondition) {
            @$query['QueryCondition'] = $request->queryCondition;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->user) {
            @$query['User'] = $request->user;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDiagnosisMonitorPerformance',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDiagnosisMonitorPerformanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of query execution on an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     * You can call this operation to query the details of query execution on an AnalyticDB for PostgreSQL instance in elastic storage mode within a specified time range.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param Request - DescribeDiagnosisMonitorPerformanceRequest
     *
     * @returns DescribeDiagnosisMonitorPerformanceResponse
     *
     * @param DescribeDiagnosisMonitorPerformanceRequest $request
     *
     * @return DescribeDiagnosisMonitorPerformanceResponse
     */
    public function describeDiagnosisMonitorPerformance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDiagnosisMonitorPerformanceWithOptions($request, $runtime);
    }

    /**
     * Queries the information about SQL queries for an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     * You can call this operation to query the details of SQL queries on an AnalyticDB for PostgreSQL instance within a specified time range.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param Request - DescribeDiagnosisRecordsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDiagnosisRecordsResponse
     *
     * @param DescribeDiagnosisRecordsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDiagnosisRecordsResponse
     */
    public function describeDiagnosisRecordsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->database) {
            @$query['Database'] = $request->database;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->queryCondition) {
            @$query['QueryCondition'] = $request->queryCondition;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->user) {
            @$query['User'] = $request->user;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDiagnosisRecords',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDiagnosisRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about SQL queries for an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     * You can call this operation to query the details of SQL queries on an AnalyticDB for PostgreSQL instance within a specified time range.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param Request - DescribeDiagnosisRecordsRequest
     *
     * @returns DescribeDiagnosisRecordsResponse
     *
     * @param DescribeDiagnosisRecordsRequest $request
     *
     * @return DescribeDiagnosisRecordsResponse
     */
    public function describeDiagnosisRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDiagnosisRecordsWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a query for an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     * You can call this operation to query the information about a query for an AnalyticDB for PostgreSQL instance, including the SQL statement, execution plan text, and execution plan tree.
     * This operation is available only for instances of V6.3.10.1 or later in elastic storage mode. For information about how to view and update the minor version of an instance, see [View the minor engine version](https://help.aliyun.com/document_detail/277424.html) and [Update the minor engine version](https://help.aliyun.com/document_detail/139271.html).
     *
     * @param Request - DescribeDiagnosisSQLInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDiagnosisSQLInfoResponse
     *
     * @param DescribeDiagnosisSQLInfoRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDiagnosisSQLInfoResponse
     */
    public function describeDiagnosisSQLInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->database) {
            @$query['Database'] = $request->database;
        }

        if (null !== $request->queryID) {
            @$query['QueryID'] = $request->queryID;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDiagnosisSQLInfo',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDiagnosisSQLInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a query for an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     * You can call this operation to query the information about a query for an AnalyticDB for PostgreSQL instance, including the SQL statement, execution plan text, and execution plan tree.
     * This operation is available only for instances of V6.3.10.1 or later in elastic storage mode. For information about how to view and update the minor version of an instance, see [View the minor engine version](https://help.aliyun.com/document_detail/277424.html) and [Update the minor engine version](https://help.aliyun.com/document_detail/139271.html).
     *
     * @param Request - DescribeDiagnosisSQLInfoRequest
     *
     * @returns DescribeDiagnosisSQLInfoResponse
     *
     * @param DescribeDiagnosisSQLInfoRequest $request
     *
     * @return DescribeDiagnosisSQLInfoResponse
     */
    public function describeDiagnosisSQLInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDiagnosisSQLInfoWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a document.
     *
     * @param Request - DescribeDocumentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDocumentResponse
     *
     * @param DescribeDocumentRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeDocumentResponse
     */
    public function describeDocumentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->collection) {
            @$query['Collection'] = $request->collection;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->fileName) {
            @$query['FileName'] = $request->fileName;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->namespacePassword) {
            @$query['NamespacePassword'] = $request->namespacePassword;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDocument',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDocumentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a document.
     *
     * @param Request - DescribeDocumentRequest
     *
     * @returns DescribeDocumentResponse
     *
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
     * Queries the download records of query diagnostic information for an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     * You must call the [DownloadDiagnosisRecords](https://help.aliyun.com/document_detail/447700.html) operation to download the query diagnostic information before you can call this operation to query the download records and download URLs.
     * This operation is available only for instances of V6.3.10.1 or later in elastic storage mode. For information about how to view and update the minor version of an instance, see [View the minor engine version](https://help.aliyun.com/document_detail/277424.html) and [Update the minor engine version](https://help.aliyun.com/document_detail/139271.html).
     *
     * @param Request - DescribeDownloadRecordsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDownloadRecordsResponse
     *
     * @param DescribeDownloadRecordsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDownloadRecordsResponse
     */
    public function describeDownloadRecordsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->downloadTaskType) {
            @$query['DownloadTaskType'] = $request->downloadTaskType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDownloadRecords',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDownloadRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the download records of query diagnostic information for an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     * You must call the [DownloadDiagnosisRecords](https://help.aliyun.com/document_detail/447700.html) operation to download the query diagnostic information before you can call this operation to query the download records and download URLs.
     * This operation is available only for instances of V6.3.10.1 or later in elastic storage mode. For information about how to view and update the minor version of an instance, see [View the minor engine version](https://help.aliyun.com/document_detail/277424.html) and [Update the minor engine version](https://help.aliyun.com/document_detail/139271.html).
     *
     * @param Request - DescribeDownloadRecordsRequest
     *
     * @returns DescribeDownloadRecordsResponse
     *
     * @param DescribeDownloadRecordsRequest $request
     *
     * @return DescribeDownloadRecordsResponse
     */
    public function describeDownloadRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDownloadRecordsWithOptions($request, $runtime);
    }

    /**
     * Get download records.
     *
     * @param Request - DescribeDownloadSQLLogsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDownloadSQLLogsResponse
     *
     * @param DescribeDownloadSQLLogsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDownloadSQLLogsResponse
     */
    public function describeDownloadSQLLogsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDownloadSQLLogs',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDownloadSQLLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get download records.
     *
     * @param Request - DescribeDownloadSQLLogsRequest
     *
     * @returns DescribeDownloadSQLLogsResponse
     *
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
     * 获取安装在某个数据库上的插件信息.
     *
     * @param Request - DescribeExtensionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeExtensionResponse
     *
     * @param DescribeExtensionRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeExtensionResponse
     */
    public function describeExtensionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->databaseName) {
            @$query['DatabaseName'] = $request->databaseName;
        }

        if (null !== $request->extensionName) {
            @$query['ExtensionName'] = $request->extensionName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeExtension',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeExtensionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取安装在某个数据库上的插件信息.
     *
     * @param Request - DescribeExtensionRequest
     *
     * @returns DescribeExtensionResponse
     *
     * @param DescribeExtensionRequest $request
     *
     * @return DescribeExtensionResponse
     */
    public function describeExtension($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExtensionWithOptions($request, $runtime);
    }

    /**
     * Queries the information about an external data service.
     *
     * @param Request - DescribeExternalDataServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeExternalDataServiceResponse
     *
     * @param DescribeExternalDataServiceRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeExternalDataServiceResponse
     */
    public function describeExternalDataServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceId) {
            @$query['ServiceId'] = $request->serviceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeExternalDataService',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeExternalDataServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about an external data service.
     *
     * @param Request - DescribeExternalDataServiceRequest
     *
     * @returns DescribeExternalDataServiceResponse
     *
     * @param DescribeExternalDataServiceRequest $request
     *
     * @return DescribeExternalDataServiceResponse
     */
    public function describeExternalDataService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExternalDataServiceWithOptions($request, $runtime);
    }

    /**
     * Queries E-MapReduce (EMR) Hadoop clusters in a specific virtual private cloud (VPC).
     *
     * @param Request - DescribeHadoopClustersInSameNetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeHadoopClustersInSameNetResponse
     *
     * @param DescribeHadoopClustersInSameNetRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeHadoopClustersInSameNetResponse
     */
    public function describeHadoopClustersInSameNetWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeHadoopClustersInSameNet',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeHadoopClustersInSameNetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries E-MapReduce (EMR) Hadoop clusters in a specific virtual private cloud (VPC).
     *
     * @param Request - DescribeHadoopClustersInSameNetRequest
     *
     * @returns DescribeHadoopClustersInSameNetResponse
     *
     * @param DescribeHadoopClustersInSameNetRequest $request
     *
     * @return DescribeHadoopClustersInSameNetResponse
     */
    public function describeHadoopClustersInSameNet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHadoopClustersInSameNetWithOptions($request, $runtime);
    }

    /**
     * Queries the configuration information about a Hadoop cluster.
     *
     * @param Request - DescribeHadoopConfigsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeHadoopConfigsResponse
     *
     * @param DescribeHadoopConfigsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeHadoopConfigsResponse
     */
    public function describeHadoopConfigsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->configName) {
            @$query['ConfigName'] = $request->configName;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->emrInstanceId) {
            @$query['EmrInstanceId'] = $request->emrInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeHadoopConfigs',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeHadoopConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configuration information about a Hadoop cluster.
     *
     * @param Request - DescribeHadoopConfigsRequest
     *
     * @returns DescribeHadoopConfigsResponse
     *
     * @param DescribeHadoopConfigsRequest $request
     *
     * @return DescribeHadoopConfigsResponse
     */
    public function describeHadoopConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHadoopConfigsWithOptions($request, $runtime);
    }

    /**
     * Obtains the configurations of a Hadoop data source.
     *
     * @param Request - DescribeHadoopDataSourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeHadoopDataSourceResponse
     *
     * @param DescribeHadoopDataSourceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeHadoopDataSourceResponse
     */
    public function describeHadoopDataSourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->dataSourceId) {
            @$query['DataSourceId'] = $request->dataSourceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeHadoopDataSource',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeHadoopDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the configurations of a Hadoop data source.
     *
     * @param Request - DescribeHadoopDataSourceRequest
     *
     * @returns DescribeHadoopDataSourceResponse
     *
     * @param DescribeHadoopDataSourceRequest $request
     *
     * @return DescribeHadoopDataSourceResponse
     */
    public function describeHadoopDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHadoopDataSourceWithOptions($request, $runtime);
    }

    /**
     * Queries the health status of an AnalyticDB for PostgreSQL instance and its nodes.
     *
     * @remarks
     * This operation is called to query the health status of an AnalyticDB for PostgreSQL instance in elastic storage mode or Serverless mode and its coordinator and compute nodes.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param Request - DescribeHealthStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeHealthStatusResponse
     *
     * @param DescribeHealthStatusRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeHealthStatusResponse
     */
    public function describeHealthStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->key) {
            @$query['Key'] = $request->key;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeHealthStatus',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeHealthStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the health status of an AnalyticDB for PostgreSQL instance and its nodes.
     *
     * @remarks
     * This operation is called to query the health status of an AnalyticDB for PostgreSQL instance in elastic storage mode or Serverless mode and its coordinator and compute nodes.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param Request - DescribeHealthStatusRequest
     *
     * @returns DescribeHealthStatusResponse
     *
     * @param DescribeHealthStatusRequest $request
     *
     * @return DescribeHealthStatusResponse
     */
    public function describeHealthStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHealthStatusWithOptions($request, $runtime);
    }

    /**
     * Queries the information about real-time materialized views of an AnalyticDB for PostgreSQL instance.
     *
     * @param Request - DescribeIMVInfosRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeIMVInfosResponse
     *
     * @param DescribeIMVInfosRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeIMVInfosResponse
     */
    public function describeIMVInfosWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->database) {
            @$query['Database'] = $request->database;
        }

        if (null !== $request->MVName) {
            @$query['MVName'] = $request->MVName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeIMVInfos',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeIMVInfosResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about real-time materialized views of an AnalyticDB for PostgreSQL instance.
     *
     * @param Request - DescribeIMVInfosRequest
     *
     * @returns DescribeIMVInfosResponse
     *
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
     * Retrieves the information about an index.
     *
     * @param Request - DescribeIndexRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeIndexResponse
     *
     * @param DescribeIndexRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeIndexResponse
     */
    public function describeIndexWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->collection) {
            @$query['Collection'] = $request->collection;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->indexName) {
            @$query['IndexName'] = $request->indexName;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->namespacePassword) {
            @$query['NamespacePassword'] = $request->namespacePassword;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeIndex',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeIndexResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the information about an index.
     *
     * @param Request - DescribeIndexRequest
     *
     * @returns DescribeIndexResponse
     *
     * @param DescribeIndexRequest $request
     *
     * @return DescribeIndexResponse
     */
    public function describeIndex($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIndexWithOptions($request, $runtime);
    }

    /**
     * Queries the configurations of a Java Database Connectivity (JDBC) data source.
     *
     * @param Request - DescribeJDBCDataSourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeJDBCDataSourceResponse
     *
     * @param DescribeJDBCDataSourceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeJDBCDataSourceResponse
     */
    public function describeJDBCDataSourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->dataSourceId) {
            @$query['DataSourceId'] = $request->dataSourceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeJDBCDataSource',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeJDBCDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configurations of a Java Database Connectivity (JDBC) data source.
     *
     * @param Request - DescribeJDBCDataSourceRequest
     *
     * @returns DescribeJDBCDataSourceResponse
     *
     * @param DescribeJDBCDataSourceRequest $request
     *
     * @return DescribeJDBCDataSourceResponse
     */
    public function describeJDBCDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeJDBCDataSourceWithOptions($request, $runtime);
    }

    /**
     * Queries a list of log backups.
     *
     * @param Request - DescribeLogBackupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeLogBackupsResponse
     *
     * @param DescribeLogBackupsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeLogBackupsResponse
     */
    public function describeLogBackupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeLogBackups',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeLogBackupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of log backups.
     *
     * @param Request - DescribeLogBackupsRequest
     *
     * @returns DescribeLogBackupsResponse
     *
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
     * Queries the information about a model service.
     *
     * @remarks
     * ## [](#)Usage notes
     * This interface is used to view the details of a model service.
     * ## [](#qps-)QPS limit
     * You can call this operation up to 1,000 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions.We recommend that you take note of this limit when you call this operation.
     *
     * @param Request - DescribeModelServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeModelServiceResponse
     *
     * @param DescribeModelServiceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeModelServiceResponse
     */
    public function describeModelServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->modelServiceId) {
            @$query['ModelServiceId'] = $request->modelServiceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeModelService',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeModelServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a model service.
     *
     * @remarks
     * ## [](#)Usage notes
     * This interface is used to view the details of a model service.
     * ## [](#qps-)QPS limit
     * You can call this operation up to 1,000 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions.We recommend that you take note of this limit when you call this operation.
     *
     * @param Request - DescribeModelServiceRequest
     *
     * @returns DescribeModelServiceResponse
     *
     * @param DescribeModelServiceRequest $request
     *
     * @return DescribeModelServiceResponse
     */
    public function describeModelService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeModelServiceWithOptions($request, $runtime);
    }

    /**
     * Queries the parameter modification logs of an AnalyticDB for PostgreSQL instance.
     *
     * @param Request - DescribeModifyParameterLogRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeModifyParameterLogResponse
     *
     * @param DescribeModifyParameterLogRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeModifyParameterLogResponse
     */
    public function describeModifyParameterLogWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeModifyParameterLog',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeModifyParameterLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the parameter modification logs of an AnalyticDB for PostgreSQL instance.
     *
     * @param Request - DescribeModifyParameterLogRequest
     *
     * @returns DescribeModifyParameterLogResponse
     *
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
     * Queries the information about a namespace.
     *
     * @param Request - DescribeNamespaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeNamespaceResponse
     *
     * @param DescribeNamespaceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeNamespaceResponse
     */
    public function describeNamespaceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->managerAccount) {
            @$query['ManagerAccount'] = $request->managerAccount;
        }

        if (null !== $request->managerAccountPassword) {
            @$query['ManagerAccountPassword'] = $request->managerAccountPassword;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeNamespace',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a namespace.
     *
     * @param Request - DescribeNamespaceRequest
     *
     * @returns DescribeNamespaceResponse
     *
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
     * Queries the information about configuration parameters for an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     * This operation can be called to query the details of parameters in an AnalyticDB for PostgreSQL instance in elastic storage mode or Serverless mode.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered and may affect your business. We recommend that you take note of the limit when you call this operation.
     *
     * @param Request - DescribeParametersRequest
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
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeParameters',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeParametersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about configuration parameters for an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     * This operation can be called to query the details of parameters in an AnalyticDB for PostgreSQL instance in elastic storage mode or Serverless mode.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered and may affect your business. We recommend that you take note of the limit when you call this operation.
     *
     * @param Request - DescribeParametersRequest
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
     * 获取私有RAG服务详情.
     *
     * @param Request - DescribePrivateRAGServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePrivateRAGServiceResponse
     *
     * @param DescribePrivateRAGServiceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribePrivateRAGServiceResponse
     */
    public function describePrivateRAGServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePrivateRAGService',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePrivateRAGServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取私有RAG服务详情.
     *
     * @param Request - DescribePrivateRAGServiceRequest
     *
     * @returns DescribePrivateRAGServiceResponse
     *
     * @param DescribePrivateRAGServiceRequest $request
     *
     * @return DescribePrivateRAGServiceResponse
     */
    public function describePrivateRAGService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePrivateRAGServiceWithOptions($request, $runtime);
    }

    /**
     * Queries a list of vSwitches.
     *
     * @remarks
     * When you create AnalyticDB for PostgreSQL instances, you can call this operation to query the details of vSwitches within a specified region or zone.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param Request - DescribeRdsVSwitchsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRdsVSwitchsResponse
     *
     * @param DescribeRdsVSwitchsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeRdsVSwitchsResponse
     */
    public function describeRdsVSwitchsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRdsVSwitchs',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRdsVSwitchsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of vSwitches.
     *
     * @remarks
     * When you create AnalyticDB for PostgreSQL instances, you can call this operation to query the details of vSwitches within a specified region or zone.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param Request - DescribeRdsVSwitchsRequest
     *
     * @returns DescribeRdsVSwitchsResponse
     *
     * @param DescribeRdsVSwitchsRequest $request
     *
     * @return DescribeRdsVSwitchsResponse
     */
    public function describeRdsVSwitchs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRdsVSwitchsWithOptions($request, $runtime);
    }

    /**
     * Queries a list of VPCs.
     *
     * @remarks
     * When you create an AnalyticDB for PostgreSQL instance, you can call this operation to query the available VPCs within a specified region or zone.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param Request - DescribeRdsVpcsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRdsVpcsResponse
     *
     * @param DescribeRdsVpcsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRdsVpcsResponse
     */
    public function describeRdsVpcsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRdsVpcs',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRdsVpcsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of VPCs.
     *
     * @remarks
     * When you create an AnalyticDB for PostgreSQL instance, you can call this operation to query the available VPCs within a specified region or zone.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param Request - DescribeRdsVpcsRequest
     *
     * @returns DescribeRdsVpcsResponse
     *
     * @param DescribeRdsVpcsRequest $request
     *
     * @return DescribeRdsVpcsResponse
     */
    public function describeRdsVpcs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRdsVpcsWithOptions($request, $runtime);
    }

    /**
     * 描述一个实例是否处于平衡状态
     *
     * @param Request - DescribeRebalanceStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRebalanceStatusResponse
     *
     * @param DescribeRebalanceStatusRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeRebalanceStatusResponse
     */
    public function describeRebalanceStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRebalanceStatus',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRebalanceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 描述一个实例是否处于平衡状态
     *
     * @param Request - DescribeRebalanceStatusRequest
     *
     * @returns DescribeRebalanceStatusResponse
     *
     * @param DescribeRebalanceStatusRequest $request
     *
     * @return DescribeRebalanceStatusResponse
     */
    public function describeRebalanceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRebalanceStatusWithOptions($request, $runtime);
    }

    /**
     * Queries a list of regions and zones where AnalyticDB for PostgreSQL is available.
     *
     * @remarks
     * Before you create an AnalyticDB for PostgreSQL instance, you must call this operation to query available regions and zones.
     * ## Limit
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered and may affect your business. We recommend that you take note of the limit when you call this operation.
     *
     * @param Request - DescribeRegionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRegionsResponse
     *
     * @param DescribeRegionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRegions',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of regions and zones where AnalyticDB for PostgreSQL is available.
     *
     * @remarks
     * Before you create an AnalyticDB for PostgreSQL instance, you must call this operation to query available regions and zones.
     * ## Limit
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered and may affect your business. We recommend that you take note of the limit when you call this operation.
     *
     * @param Request - DescribeRegionsRequest
     *
     * @returns DescribeRegionsResponse
     *
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
     * Queries a list of roles.
     *
     * @param Request - DescribeRolesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRolesResponse
     *
     * @param DescribeRolesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeRolesResponse
     */
    public function describeRolesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRoles',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRolesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of roles.
     *
     * @param Request - DescribeRolesRequest
     *
     * @returns DescribeRolesResponse
     *
     * @param DescribeRolesRequest $request
     *
     * @return DescribeRolesResponse
     */
    public function describeRoles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRolesWithOptions($request, $runtime);
    }

    /**
     * Queries the number of audit logs for an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     * This operation is not available for instances in reserved storage mode.
     *
     * @param Request - DescribeSQLLogCountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSQLLogCountResponse
     *
     * @param DescribeSQLLogCountRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeSQLLogCountResponse
     */
    public function describeSQLLogCountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->database) {
            @$query['Database'] = $request->database;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->executeCost) {
            @$query['ExecuteCost'] = $request->executeCost;
        }

        if (null !== $request->executeState) {
            @$query['ExecuteState'] = $request->executeState;
        }

        if (null !== $request->maxExecuteCost) {
            @$query['MaxExecuteCost'] = $request->maxExecuteCost;
        }

        if (null !== $request->minExecuteCost) {
            @$query['MinExecuteCost'] = $request->minExecuteCost;
        }

        if (null !== $request->operationClass) {
            @$query['OperationClass'] = $request->operationClass;
        }

        if (null !== $request->operationType) {
            @$query['OperationType'] = $request->operationType;
        }

        if (null !== $request->queryKeywords) {
            @$query['QueryKeywords'] = $request->queryKeywords;
        }

        if (null !== $request->sourceIP) {
            @$query['SourceIP'] = $request->sourceIP;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->user) {
            @$query['User'] = $request->user;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSQLLogCount',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSQLLogCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the number of audit logs for an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     * This operation is not available for instances in reserved storage mode.
     *
     * @param Request - DescribeSQLLogCountRequest
     *
     * @returns DescribeSQLLogCountResponse
     *
     * @param DescribeSQLLogCountRequest $request
     *
     * @return DescribeSQLLogCountResponse
     */
    public function describeSQLLogCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSQLLogCountWithOptions($request, $runtime);
    }

    /**
     * Queries the SQL execution logs of an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     * > This operation is no longer used. To query SQL execution logs, call the [DescribeSQLLogsV2](https://help.aliyun.com/document_detail/453722.html) operation.
     *
     * @param Request - DescribeSQLLogsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSQLLogsResponse
     *
     * @param DescribeSQLLogsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeSQLLogsResponse
     */
    public function describeSQLLogsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->database) {
            @$query['Database'] = $request->database;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->executeCost) {
            @$query['ExecuteCost'] = $request->executeCost;
        }

        if (null !== $request->executeState) {
            @$query['ExecuteState'] = $request->executeState;
        }

        if (null !== $request->maxExecuteCost) {
            @$query['MaxExecuteCost'] = $request->maxExecuteCost;
        }

        if (null !== $request->minExecuteCost) {
            @$query['MinExecuteCost'] = $request->minExecuteCost;
        }

        if (null !== $request->operationClass) {
            @$query['OperationClass'] = $request->operationClass;
        }

        if (null !== $request->operationType) {
            @$query['OperationType'] = $request->operationType;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->queryKeywords) {
            @$query['QueryKeywords'] = $request->queryKeywords;
        }

        if (null !== $request->sourceIP) {
            @$query['SourceIP'] = $request->sourceIP;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->user) {
            @$query['User'] = $request->user;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSQLLogs',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSQLLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the SQL execution logs of an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     * > This operation is no longer used. To query SQL execution logs, call the [DescribeSQLLogsV2](https://help.aliyun.com/document_detail/453722.html) operation.
     *
     * @param Request - DescribeSQLLogsRequest
     *
     * @returns DescribeSQLLogsResponse
     *
     * @param DescribeSQLLogsRequest $request
     *
     * @return DescribeSQLLogsResponse
     */
    public function describeSQLLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSQLLogsWithOptions($request, $runtime);
    }

    /**
     * Queries SQL logs within a specific time range.
     *
     * @remarks
     * You can call this operation to query SQL logs of an AnalyticDB for PostgreSQL instance within a specific time range.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param Request - DescribeSQLLogsV2Request
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSQLLogsV2Response
     *
     * @param DescribeSQLLogsV2Request $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeSQLLogsV2Response
     */
    public function describeSQLLogsV2WithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->database) {
            @$query['Database'] = $request->database;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->executeCost) {
            @$query['ExecuteCost'] = $request->executeCost;
        }

        if (null !== $request->executeState) {
            @$query['ExecuteState'] = $request->executeState;
        }

        if (null !== $request->maxExecuteCost) {
            @$query['MaxExecuteCost'] = $request->maxExecuteCost;
        }

        if (null !== $request->minExecuteCost) {
            @$query['MinExecuteCost'] = $request->minExecuteCost;
        }

        if (null !== $request->operationClass) {
            @$query['OperationClass'] = $request->operationClass;
        }

        if (null !== $request->operationType) {
            @$query['OperationType'] = $request->operationType;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->queryKeywords) {
            @$query['QueryKeywords'] = $request->queryKeywords;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->sourceIP) {
            @$query['SourceIP'] = $request->sourceIP;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->user) {
            @$query['User'] = $request->user;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSQLLogsV2',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSQLLogsV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries SQL logs within a specific time range.
     *
     * @remarks
     * You can call this operation to query SQL logs of an AnalyticDB for PostgreSQL instance within a specific time range.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param Request - DescribeSQLLogsV2Request
     *
     * @returns DescribeSQLLogsV2Response
     *
     * @param DescribeSQLLogsV2Request $request
     *
     * @return DescribeSQLLogsV2Response
     */
    public function describeSQLLogsV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSQLLogsV2WithOptions($request, $runtime);
    }

    /**
     * Queries whether a sample dataset is loaded to an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param Request - DescribeSampleDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSampleDataResponse
     *
     * @param DescribeSampleDataRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeSampleDataResponse
     */
    public function describeSampleDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSampleData',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSampleDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries whether a sample dataset is loaded to an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param Request - DescribeSampleDataRequest
     *
     * @returns DescribeSampleDataResponse
     *
     * @param DescribeSampleDataRequest $request
     *
     * @return DescribeSampleDataResponse
     */
    public function describeSampleData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSampleDataWithOptions($request, $runtime);
    }

    /**
     * Queries a real-time data service.
     *
     * @param Request - DescribeStreamingDataServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeStreamingDataServiceResponse
     *
     * @param DescribeStreamingDataServiceRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeStreamingDataServiceResponse
     */
    public function describeStreamingDataServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceId) {
            @$query['ServiceId'] = $request->serviceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeStreamingDataService',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeStreamingDataServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a real-time data service.
     *
     * @param Request - DescribeStreamingDataServiceRequest
     *
     * @returns DescribeStreamingDataServiceResponse
     *
     * @param DescribeStreamingDataServiceRequest $request
     *
     * @return DescribeStreamingDataServiceResponse
     */
    public function describeStreamingDataService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeStreamingDataServiceWithOptions($request, $runtime);
    }

    /**
     * Get external data source configuration information.
     *
     * @param Request - DescribeStreamingDataSourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeStreamingDataSourceResponse
     *
     * @param DescribeStreamingDataSourceRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeStreamingDataSourceResponse
     */
    public function describeStreamingDataSourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->dataSourceId) {
            @$query['DataSourceId'] = $request->dataSourceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeStreamingDataSource',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeStreamingDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get external data source configuration information.
     *
     * @param Request - DescribeStreamingDataSourceRequest
     *
     * @returns DescribeStreamingDataSourceResponse
     *
     * @param DescribeStreamingDataSourceRequest $request
     *
     * @return DescribeStreamingDataSourceResponse
     */
    public function describeStreamingDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeStreamingDataSourceWithOptions($request, $runtime);
    }

    /**
     * Delete External Data Source Configuration.
     *
     * @param Request - DescribeStreamingJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeStreamingJobResponse
     *
     * @param DescribeStreamingJobRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeStreamingJobResponse
     */
    public function describeStreamingJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeStreamingJob',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeStreamingJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete External Data Source Configuration.
     *
     * @param Request - DescribeStreamingJobRequest
     *
     * @returns DescribeStreamingJobResponse
     *
     * @param DescribeStreamingJobRequest $request
     *
     * @return DescribeStreamingJobResponse
     */
    public function describeStreamingJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeStreamingJobWithOptions($request, $runtime);
    }

    /**
     * Queries the features that are supported by an AnalyticDB for PostgreSQL instance.
     *
     * @param Request - DescribeSupportFeaturesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSupportFeaturesResponse
     *
     * @param DescribeSupportFeaturesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeSupportFeaturesResponse
     */
    public function describeSupportFeaturesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSupportFeatures',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSupportFeaturesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the features that are supported by an AnalyticDB for PostgreSQL instance.
     *
     * @param Request - DescribeSupportFeaturesRequest
     *
     * @returns DescribeSupportFeaturesResponse
     *
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
     * Queries the information about a table.
     *
     * @param Request - DescribeTableRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTableResponse
     *
     * @param DescribeTableRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeTableResponse
     */
    public function describeTableWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->database) {
            @$query['Database'] = $request->database;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->schema) {
            @$query['Schema'] = $request->schema;
        }

        if (null !== $request->secretArn) {
            @$query['SecretArn'] = $request->secretArn;
        }

        if (null !== $request->table) {
            @$query['Table'] = $request->table;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTable',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a table.
     *
     * @param Request - DescribeTableRequest
     *
     * @returns DescribeTableResponse
     *
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
     * Queries a list of tags for AnalyticDB for PostgreSQL instances.
     *
     * @param Request - DescribeTagsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTagsResponse
     *
     * @param DescribeTagsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DescribeTagsResponse
     */
    public function describeTagsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTags',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of tags for AnalyticDB for PostgreSQL instances.
     *
     * @param Request - DescribeTagsRequest
     *
     * @returns DescribeTagsResponse
     *
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
     * Queries a list of Key Management Service (KMS) keys.
     *
     * @param Request - DescribeUserEncryptionKeyListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeUserEncryptionKeyListResponse
     *
     * @param DescribeUserEncryptionKeyListRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeUserEncryptionKeyListResponse
     */
    public function describeUserEncryptionKeyListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeUserEncryptionKeyList',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeUserEncryptionKeyListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of Key Management Service (KMS) keys.
     *
     * @param Request - DescribeUserEncryptionKeyListRequest
     *
     * @returns DescribeUserEncryptionKeyListResponse
     *
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
     * Queries the information about a lock-waiting query for an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     * You can call this operation to query the details of a lock-waiting query only for an AnalyticDB for PostgreSQL V6.0 instance in elastic storage mode.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param Request - DescribeWaitingSQLInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeWaitingSQLInfoResponse
     *
     * @param DescribeWaitingSQLInfoRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeWaitingSQLInfoResponse
     */
    public function describeWaitingSQLInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->database) {
            @$query['Database'] = $request->database;
        }

        if (null !== $request->PID) {
            @$query['PID'] = $request->PID;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeWaitingSQLInfo',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeWaitingSQLInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a lock-waiting query for an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     * You can call this operation to query the details of a lock-waiting query only for an AnalyticDB for PostgreSQL V6.0 instance in elastic storage mode.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param Request - DescribeWaitingSQLInfoRequest
     *
     * @returns DescribeWaitingSQLInfoResponse
     *
     * @param DescribeWaitingSQLInfoRequest $request
     *
     * @return DescribeWaitingSQLInfoResponse
     */
    public function describeWaitingSQLInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWaitingSQLInfoWithOptions($request, $runtime);
    }

    /**
     * Queries the lock diagnostic records of an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     * You can call this operation to query the lock diagnostics records only for an AnalyticDB for PostgreSQL V6.0 instance in elastic storage mode.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param Request - DescribeWaitingSQLRecordsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeWaitingSQLRecordsResponse
     *
     * @param DescribeWaitingSQLRecordsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeWaitingSQLRecordsResponse
     */
    public function describeWaitingSQLRecordsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->database) {
            @$query['Database'] = $request->database;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->queryCondition) {
            @$query['QueryCondition'] = $request->queryCondition;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->user) {
            @$query['User'] = $request->user;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeWaitingSQLRecords',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeWaitingSQLRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the lock diagnostic records of an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     * You can call this operation to query the lock diagnostics records only for an AnalyticDB for PostgreSQL V6.0 instance in elastic storage mode.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param Request - DescribeWaitingSQLRecordsRequest
     *
     * @returns DescribeWaitingSQLRecordsResponse
     *
     * @param DescribeWaitingSQLRecordsRequest $request
     *
     * @return DescribeWaitingSQLRecordsResponse
     */
    public function describeWaitingSQLRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWaitingSQLRecordsWithOptions($request, $runtime);
    }

    /**
     * 获取私有RAG服务可部署可用区.
     *
     * @param Request - DescribeZonesPrivateRAGServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeZonesPrivateRAGServiceResponse
     *
     * @param DescribeZonesPrivateRAGServiceRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeZonesPrivateRAGServiceResponse
     */
    public function describeZonesPrivateRAGServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeZonesPrivateRAGService',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeZonesPrivateRAGServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取私有RAG服务可部署可用区.
     *
     * @param Request - DescribeZonesPrivateRAGServiceRequest
     *
     * @returns DescribeZonesPrivateRAGServiceResponse
     *
     * @param DescribeZonesPrivateRAGServiceRequest $request
     *
     * @return DescribeZonesPrivateRAGServiceResponse
     */
    public function describeZonesPrivateRAGService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeZonesPrivateRAGServiceWithOptions($request, $runtime);
    }

    /**
     * Disables resource group management for an AnalyticDB for PostgreSQL V6.0 instance in elastic storage mode. After you disable resource group management, the resource management method of the instance switches from resource group management to resource queue management.
     *
     * @remarks
     *   You can call this operation only for AnalyticDB for PostgreSQL V6.0 instances in elastic storage mode whose minor version is V6.6.1.0 or later.
     * *   You can call this operation to disable resource group management only for AnalyticDB for PostgreSQL instances that are in the **Running** state.
     * *   **Note: When the resource management method is switched, your AnalyticDB for PostgreSQL instance restarts and becomes unavailable for approximately 5 minutes. To prevent your business from being affected, call this operation during off-peak hours.
     *
     * @param Request - DisableDBResourceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableDBResourceGroupResponse
     *
     * @param DisableDBResourceGroupRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DisableDBResourceGroupResponse
     */
    public function disableDBResourceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisableDBResourceGroup',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableDBResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables resource group management for an AnalyticDB for PostgreSQL V6.0 instance in elastic storage mode. After you disable resource group management, the resource management method of the instance switches from resource group management to resource queue management.
     *
     * @remarks
     *   You can call this operation only for AnalyticDB for PostgreSQL V6.0 instances in elastic storage mode whose minor version is V6.6.1.0 or later.
     * *   You can call this operation to disable resource group management only for AnalyticDB for PostgreSQL instances that are in the **Running** state.
     * *   **Note: When the resource management method is switched, your AnalyticDB for PostgreSQL instance restarts and becomes unavailable for approximately 5 minutes. To prevent your business from being affected, call this operation during off-peak hours.
     *
     * @param Request - DisableDBResourceGroupRequest
     *
     * @returns DisableDBResourceGroupResponse
     *
     * @param DisableDBResourceGroupRequest $request
     *
     * @return DisableDBResourceGroupResponse
     */
    public function disableDBResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableDBResourceGroupWithOptions($request, $runtime);
    }

    /**
     * Downloads the query diagnostic information of an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     * You can call this operation to download the query diagnostic information of an AnalyticDB for PostgreSQL instance. After the download is complete, you can call the [DescribeDownloadRecords](https://help.aliyun.com/document_detail/447712.html) operation to query download records and download URLs.
     * This operation is available only for instances of V6.3.10.1 or later in elastic storage mode. For more information about how to view and update the minor engine version of an instance, see [View the minor engine version](https://help.aliyun.com/document_detail/277424.html) and [Update the minor engine version](https://help.aliyun.com/document_detail/139271.html).
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param Request - DownloadDiagnosisRecordsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DownloadDiagnosisRecordsResponse
     *
     * @param DownloadDiagnosisRecordsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DownloadDiagnosisRecordsResponse
     */
    public function downloadDiagnosisRecordsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->database) {
            @$query['Database'] = $request->database;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->queryCondition) {
            @$query['QueryCondition'] = $request->queryCondition;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->user) {
            @$query['User'] = $request->user;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DownloadDiagnosisRecords',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DownloadDiagnosisRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Downloads the query diagnostic information of an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     * You can call this operation to download the query diagnostic information of an AnalyticDB for PostgreSQL instance. After the download is complete, you can call the [DescribeDownloadRecords](https://help.aliyun.com/document_detail/447712.html) operation to query download records and download URLs.
     * This operation is available only for instances of V6.3.10.1 or later in elastic storage mode. For more information about how to view and update the minor engine version of an instance, see [View the minor engine version](https://help.aliyun.com/document_detail/277424.html) and [Update the minor engine version](https://help.aliyun.com/document_detail/139271.html).
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param Request - DownloadDiagnosisRecordsRequest
     *
     * @returns DownloadDiagnosisRecordsResponse
     *
     * @param DownloadDiagnosisRecordsRequest $request
     *
     * @return DownloadDiagnosisRecordsResponse
     */
    public function downloadDiagnosisRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->downloadDiagnosisRecordsWithOptions($request, $runtime);
    }

    /**
     * Download the slow query logs of an AnalyticDB for PostgreSQL instance.
     *
     * @param Request - DownloadSQLLogsRecordsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DownloadSQLLogsRecordsResponse
     *
     * @param DownloadSQLLogsRecordsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DownloadSQLLogsRecordsResponse
     */
    public function downloadSQLLogsRecordsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->database) {
            @$query['Database'] = $request->database;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->executeCost) {
            @$query['ExecuteCost'] = $request->executeCost;
        }

        if (null !== $request->executeState) {
            @$query['ExecuteState'] = $request->executeState;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->maxExecuteCost) {
            @$query['MaxExecuteCost'] = $request->maxExecuteCost;
        }

        if (null !== $request->minExecuteCost) {
            @$query['MinExecuteCost'] = $request->minExecuteCost;
        }

        if (null !== $request->operationClass) {
            @$query['OperationClass'] = $request->operationClass;
        }

        if (null !== $request->operationType) {
            @$query['OperationType'] = $request->operationType;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->queryKeywords) {
            @$query['QueryKeywords'] = $request->queryKeywords;
        }

        if (null !== $request->sourceIP) {
            @$query['SourceIP'] = $request->sourceIP;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->user) {
            @$query['User'] = $request->user;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DownloadSQLLogsRecords',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DownloadSQLLogsRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Download the slow query logs of an AnalyticDB for PostgreSQL instance.
     *
     * @param Request - DownloadSQLLogsRecordsRequest
     *
     * @returns DownloadSQLLogsRecordsResponse
     *
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
     * Downloads slow SQL records.
     *
     * @param Request - DownloadSlowSQLRecordsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DownloadSlowSQLRecordsResponse
     *
     * @param DownloadSlowSQLRecordsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DownloadSlowSQLRecordsResponse
     */
    public function downloadSlowSQLRecordsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->DBName) {
            @$query['DBName'] = $request->DBName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->maxDuration) {
            @$query['MaxDuration'] = $request->maxDuration;
        }

        if (null !== $request->minDuration) {
            @$query['MinDuration'] = $request->minDuration;
        }

        if (null !== $request->orderBy) {
            @$query['OrderBy'] = $request->orderBy;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DownloadSlowSQLRecords',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DownloadSlowSQLRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Downloads slow SQL records.
     *
     * @param Request - DownloadSlowSQLRecordsRequest
     *
     * @returns DownloadSlowSQLRecordsResponse
     *
     * @param DownloadSlowSQLRecordsRequest $request
     *
     * @return DownloadSlowSQLRecordsResponse
     */
    public function downloadSlowSQLRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->downloadSlowSQLRecordsWithOptions($request, $runtime);
    }

    /**
     * Enables knowledge graph construction for the knowledge base.
     *
     * @param tmpReq - EnableCollectionGraphRAGRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableCollectionGraphRAGResponse
     *
     * @param EnableCollectionGraphRAGRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return EnableCollectionGraphRAGResponse
     */
    public function enableCollectionGraphRAGWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new EnableCollectionGraphRAGShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->entityTypes) {
            $request->entityTypesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->entityTypes, 'EntityTypes', 'json');
        }

        if (null !== $tmpReq->relationshipTypes) {
            $request->relationshipTypesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->relationshipTypes, 'RelationshipTypes', 'json');
        }

        $query = [];
        if (null !== $request->collection) {
            @$query['Collection'] = $request->collection;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->entityTypesShrink) {
            @$query['EntityTypes'] = $request->entityTypesShrink;
        }

        if (null !== $request->LLMModel) {
            @$query['LLMModel'] = $request->LLMModel;
        }

        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        if (null !== $request->managerAccount) {
            @$query['ManagerAccount'] = $request->managerAccount;
        }

        if (null !== $request->managerAccountPassword) {
            @$query['ManagerAccountPassword'] = $request->managerAccountPassword;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->namespacePassword) {
            @$query['NamespacePassword'] = $request->namespacePassword;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->relationshipTypesShrink) {
            @$query['RelationshipTypes'] = $request->relationshipTypesShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableCollectionGraphRAG',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableCollectionGraphRAGResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables knowledge graph construction for the knowledge base.
     *
     * @param Request - EnableCollectionGraphRAGRequest
     *
     * @returns EnableCollectionGraphRAGResponse
     *
     * @param EnableCollectionGraphRAGRequest $request
     *
     * @return EnableCollectionGraphRAGResponse
     */
    public function enableCollectionGraphRAG($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableCollectionGraphRAGWithOptions($request, $runtime);
    }

    /**
     * Enables resource group management for an AnalyticDB for PostgreSQL V6.0 instance in elastic storage mode. After resource group management is enabled, the resource management mode of the instance is changed from resource queue to resource group.
     *
     * @remarks
     *   You can call this operation only for AnalyticDB for PostgreSQL V6.0 instances in elastic storage mode whose minor version is V6.6.1.0 or later.
     * *   You can call this operation to enable resource group management only for AnalyticDB for PostgreSQL instances that are in the **Running** state.
     * *   **Note: When the resource management mode is changed, your AnalyticDB for PostgreSQL instance is restarted and remains unavailable within 5 minutes. To prevent your business from being affected, call this operation during off-peak hours.
     *
     * @param Request - EnableDBResourceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableDBResourceGroupResponse
     *
     * @param EnableDBResourceGroupRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return EnableDBResourceGroupResponse
     */
    public function enableDBResourceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableDBResourceGroup',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableDBResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables resource group management for an AnalyticDB for PostgreSQL V6.0 instance in elastic storage mode. After resource group management is enabled, the resource management mode of the instance is changed from resource queue to resource group.
     *
     * @remarks
     *   You can call this operation only for AnalyticDB for PostgreSQL V6.0 instances in elastic storage mode whose minor version is V6.6.1.0 or later.
     * *   You can call this operation to enable resource group management only for AnalyticDB for PostgreSQL instances that are in the **Running** state.
     * *   **Note: When the resource management mode is changed, your AnalyticDB for PostgreSQL instance is restarted and remains unavailable within 5 minutes. To prevent your business from being affected, call this operation during off-peak hours.
     *
     * @param Request - EnableDBResourceGroupRequest
     *
     * @returns EnableDBResourceGroupResponse
     *
     * @param EnableDBResourceGroupRequest $request
     *
     * @return EnableDBResourceGroupResponse
     */
    public function enableDBResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableDBResourceGroupWithOptions($request, $runtime);
    }

    /**
     * Executes SQL statements.
     *
     * @param tmpReq - ExecuteStatementRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteStatementResponse
     *
     * @param ExecuteStatementRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return ExecuteStatementResponse
     */
    public function executeStatementWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ExecuteStatementShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->parameters) {
            $request->parametersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->parameters, 'Parameters', 'json');
        }

        if (null !== $tmpReq->ragWorkspaceCollection) {
            $request->ragWorkspaceCollectionShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ragWorkspaceCollection, 'RagWorkspaceCollection', 'json');
        }

        if (null !== $tmpReq->sqls) {
            $request->sqlsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sqls, 'Sqls', 'json');
        }

        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->database) {
            @$query['Database'] = $request->database;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->ragWorkspaceCollectionShrink) {
            @$query['RagWorkspaceCollection'] = $request->ragWorkspaceCollectionShrink;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->runType) {
            @$query['RunType'] = $request->runType;
        }

        if (null !== $request->secretArn) {
            @$query['SecretArn'] = $request->secretArn;
        }

        if (null !== $request->statementName) {
            @$query['StatementName'] = $request->statementName;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $body = [];
        if (null !== $request->parametersShrink) {
            @$body['Parameters'] = $request->parametersShrink;
        }

        if (null !== $request->sql) {
            @$body['Sql'] = $request->sql;
        }

        if (null !== $request->sqlsShrink) {
            @$body['Sqls'] = $request->sqlsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExecuteStatement',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ExecuteStatementResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Executes SQL statements.
     *
     * @param Request - ExecuteStatementRequest
     *
     * @returns ExecuteStatementResponse
     *
     * @param ExecuteStatementRequest $request
     *
     * @return ExecuteStatementResponse
     */
    public function executeStatement($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->executeStatementWithOptions($request, $runtime);
    }

    /**
     * 获取特定的账号信息.
     *
     * @param Request - GetAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAccountResponse
     *
     * @param GetAccountRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetAccountResponse
     */
    public function getAccountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountName) {
            @$query['AccountName'] = $request->accountName;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAccount',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取特定的账号信息.
     *
     * @param Request - GetAccountRequest
     *
     * @returns GetAccountResponse
     *
     * @param GetAccountRequest $request
     *
     * @return GetAccountResponse
     */
    public function getAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAccountWithOptions($request, $runtime);
    }

    /**
     * Retrieves a task to build a knowledge graph.
     *
     * @param Request - GetGraphRAGJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetGraphRAGJobResponse
     *
     * @param GetGraphRAGJobRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetGraphRAGJobResponse
     */
    public function getGraphRAGJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->collection) {
            @$query['Collection'] = $request->collection;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->namespacePassword) {
            @$query['NamespacePassword'] = $request->namespacePassword;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetGraphRAGJob',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetGraphRAGJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a task to build a knowledge graph.
     *
     * @param Request - GetGraphRAGJobRequest
     *
     * @returns GetGraphRAGJobResponse
     *
     * @param GetGraphRAGJobRequest $request
     *
     * @return GetGraphRAGJobResponse
     */
    public function getGraphRAGJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getGraphRAGJobWithOptions($request, $runtime);
    }

    /**
     * Queries the information about an access credential.
     *
     * @param Request - GetSecretValueRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSecretValueResponse
     *
     * @param GetSecretValueRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetSecretValueResponse
     */
    public function getSecretValueWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->secretArn) {
            @$query['SecretArn'] = $request->secretArn;
        }

        if (null !== $request->secretName) {
            @$query['SecretName'] = $request->secretName;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSecretValue',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSecretValueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about an access credential.
     *
     * @param Request - GetSecretValueRequest
     *
     * @returns GetSecretValueResponse
     *
     * @param GetSecretValueRequest $request
     *
     * @return GetSecretValueResponse
     */
    public function getSecretValue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSecretValueWithOptions($request, $runtime);
    }

    /**
     * Get Asynchronous SQL Execution Result.
     *
     * @param Request - GetStatementResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetStatementResultResponse
     *
     * @param GetStatementResultRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetStatementResultResponse
     */
    public function getStatementResultWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->database) {
            @$query['Database'] = $request->database;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->secretArn) {
            @$query['SecretArn'] = $request->secretArn;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetStatementResult',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetStatementResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get Asynchronous SQL Execution Result.
     *
     * @param Request - GetStatementResultRequest
     *
     * @returns GetStatementResultResponse
     *
     * @param GetStatementResultRequest $request
     *
     * @return GetStatementResultResponse
     */
    public function getStatementResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStatementResultWithOptions($request, $runtime);
    }

    /**
     * Retrieves the detailed configuration and status information for a specific Supabase instance.
     *
     * @remarks
     * This interface is used to query the details of a Supabase instance.
     *
     * @param Request - GetSupabaseProjectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSupabaseProjectResponse
     *
     * @param GetSupabaseProjectRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetSupabaseProjectResponse
     */
    public function getSupabaseProjectWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSupabaseProject',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSupabaseProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the detailed configuration and status information for a specific Supabase instance.
     *
     * @remarks
     * This interface is used to query the details of a Supabase instance.
     *
     * @param Request - GetSupabaseProjectRequest
     *
     * @returns GetSupabaseProjectResponse
     *
     * @param GetSupabaseProjectRequest $request
     *
     * @return GetSupabaseProjectResponse
     */
    public function getSupabaseProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSupabaseProjectWithOptions($request, $runtime);
    }

    /**
     * Queries a list of API keys for a Supabase project.
     *
     * @remarks
     * You can call this operation to query a list of API keys for a Supabase project.
     *
     * @param Request - GetSupabaseProjectApiKeysRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSupabaseProjectApiKeysResponse
     *
     * @param GetSupabaseProjectApiKeysRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetSupabaseProjectApiKeysResponse
     */
    public function getSupabaseProjectApiKeysWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSupabaseProjectApiKeys',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSupabaseProjectApiKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of API keys for a Supabase project.
     *
     * @remarks
     * You can call this operation to query a list of API keys for a Supabase project.
     *
     * @param Request - GetSupabaseProjectApiKeysRequest
     *
     * @returns GetSupabaseProjectApiKeysResponse
     *
     * @param GetSupabaseProjectApiKeysRequest $request
     *
     * @return GetSupabaseProjectApiKeysResponse
     */
    public function getSupabaseProjectApiKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSupabaseProjectApiKeysWithOptions($request, $runtime);
    }

    /**
     * Retrieves the username and password for the dashboard of a specific Supabase project.
     *
     * @remarks
     * Query Supabase Project Dashboard Account Information
     *
     * @param Request - GetSupabaseProjectDashboardAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSupabaseProjectDashboardAccountResponse
     *
     * @param GetSupabaseProjectDashboardAccountRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return GetSupabaseProjectDashboardAccountResponse
     */
    public function getSupabaseProjectDashboardAccountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSupabaseProjectDashboardAccount',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSupabaseProjectDashboardAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the username and password for the dashboard of a specific Supabase project.
     *
     * @remarks
     * Query Supabase Project Dashboard Account Information
     *
     * @param Request - GetSupabaseProjectDashboardAccountRequest
     *
     * @returns GetSupabaseProjectDashboardAccountResponse
     *
     * @param GetSupabaseProjectDashboardAccountRequest $request
     *
     * @return GetSupabaseProjectDashboardAccountResponse
     */
    public function getSupabaseProjectDashboardAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSupabaseProjectDashboardAccountWithOptions($request, $runtime);
    }

    /**
     * Queries the progress and result of an asynchronous document upload job based on the job ID.
     *
     * @remarks
     * This operation is related to the UploadDocumentAsync operation. You can call the UploadDocumentAsync operation to create an upload job and get the job ID, and then call the GetUploadDocumentJob operation to query the execution information of the job.
     * > Suggestions
     * *   Based on document complexity and the number of resulting vector chunks, the timeout is estimated and typically does not exceed 2 hours.
     *
     * @param Request - GetUploadDocumentJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUploadDocumentJobResponse
     *
     * @param GetUploadDocumentJobRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetUploadDocumentJobResponse
     */
    public function getUploadDocumentJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->collection) {
            @$body['Collection'] = $request->collection;
        }

        if (null !== $request->jobId) {
            @$body['JobId'] = $request->jobId;
        }

        if (null !== $request->namespace) {
            @$body['Namespace'] = $request->namespace;
        }

        if (null !== $request->namespacePassword) {
            @$body['NamespacePassword'] = $request->namespacePassword;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetUploadDocumentJob',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetUploadDocumentJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the progress and result of an asynchronous document upload job based on the job ID.
     *
     * @remarks
     * This operation is related to the UploadDocumentAsync operation. You can call the UploadDocumentAsync operation to create an upload job and get the job ID, and then call the GetUploadDocumentJob operation to query the execution information of the job.
     * > Suggestions
     * *   Based on document complexity and the number of resulting vector chunks, the timeout is estimated and typically does not exceed 2 hours.
     *
     * @param Request - GetUploadDocumentJobRequest
     *
     * @returns GetUploadDocumentJobResponse
     *
     * @param GetUploadDocumentJobRequest $request
     *
     * @return GetUploadDocumentJobResponse
     */
    public function getUploadDocumentJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUploadDocumentJobWithOptions($request, $runtime);
    }

    /**
     * Queries the progress and result of an asynchronous vector data upload job by using a job ID.
     *
     * @remarks
     * This operation is related to the `UpsertCollectionDataAsync` operation. You can call the `UpsertCollectionDataAsync` operation to create an upload job and obtain a job ID, and then call the GetUpsertCollectionDataJob operation to query the execution information of the job.
     * >  We recommend that you evaluate the amount of time required for the upload job based on 1,000 data entries every second, and then query the job progress every 5 seconds. The timeout period can be set to 30 minutes after the evaluated amount of time.
     *
     * @param Request - GetUpsertCollectionDataJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUpsertCollectionDataJobResponse
     *
     * @param GetUpsertCollectionDataJobRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetUpsertCollectionDataJobResponse
     */
    public function getUpsertCollectionDataJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $body = [];
        if (null !== $request->collection) {
            @$body['Collection'] = $request->collection;
        }

        if (null !== $request->jobId) {
            @$body['JobId'] = $request->jobId;
        }

        if (null !== $request->namespace) {
            @$body['Namespace'] = $request->namespace;
        }

        if (null !== $request->namespacePassword) {
            @$body['NamespacePassword'] = $request->namespacePassword;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetUpsertCollectionDataJob',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetUpsertCollectionDataJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the progress and result of an asynchronous vector data upload job by using a job ID.
     *
     * @remarks
     * This operation is related to the `UpsertCollectionDataAsync` operation. You can call the `UpsertCollectionDataAsync` operation to create an upload job and obtain a job ID, and then call the GetUpsertCollectionDataJob operation to query the execution information of the job.
     * >  We recommend that you evaluate the amount of time required for the upload job based on 1,000 data entries every second, and then query the job progress every 5 seconds. The timeout period can be set to 30 minutes after the evaluated amount of time.
     *
     * @param Request - GetUpsertCollectionDataJobRequest
     *
     * @returns GetUpsertCollectionDataJobResponse
     *
     * @param GetUpsertCollectionDataJobRequest $request
     *
     * @return GetUpsertCollectionDataJobResponse
     */
    public function getUpsertCollectionDataJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUpsertCollectionDataJobWithOptions($request, $runtime);
    }

    /**
     * Grants vector collection permissions to a namespace.
     *
     * @param Request - GrantCollectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GrantCollectionResponse
     *
     * @param GrantCollectionRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GrantCollectionResponse
     */
    public function grantCollectionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->collection) {
            @$query['Collection'] = $request->collection;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->grantToNamespace) {
            @$query['GrantToNamespace'] = $request->grantToNamespace;
        }

        if (null !== $request->grantType) {
            @$query['GrantType'] = $request->grantType;
        }

        if (null !== $request->managerAccount) {
            @$query['ManagerAccount'] = $request->managerAccount;
        }

        if (null !== $request->managerAccountPassword) {
            @$query['ManagerAccountPassword'] = $request->managerAccountPassword;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GrantCollection',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GrantCollectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Grants vector collection permissions to a namespace.
     *
     * @param Request - GrantCollectionRequest
     *
     * @returns GrantCollectionResponse
     *
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
     * Processes active queries.
     *
     * @param Request - HandleActiveSQLRecordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns HandleActiveSQLRecordResponse
     *
     * @param HandleActiveSQLRecordRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return HandleActiveSQLRecordResponse
     */
    public function handleActiveSQLRecordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->operateType) {
            @$query['OperateType'] = $request->operateType;
        }

        if (null !== $request->pids) {
            @$query['Pids'] = $request->pids;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'HandleActiveSQLRecord',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return HandleActiveSQLRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Processes active queries.
     *
     * @param Request - HandleActiveSQLRecordRequest
     *
     * @returns HandleActiveSQLRecordResponse
     *
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
     * Initializes vector databases.
     *
     * @param Request - InitVectorDatabaseRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InitVectorDatabaseResponse
     *
     * @param InitVectorDatabaseRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return InitVectorDatabaseResponse
     */
    public function initVectorDatabaseWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->managerAccount) {
            @$query['ManagerAccount'] = $request->managerAccount;
        }

        if (null !== $request->managerAccountPassword) {
            @$query['ManagerAccountPassword'] = $request->managerAccountPassword;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'InitVectorDatabase',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return InitVectorDatabaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Initializes vector databases.
     *
     * @param Request - InitVectorDatabaseRequest
     *
     * @returns InitVectorDatabaseResponse
     *
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
     * Queries a list of AI nodes.
     *
     * @remarks
     *   This operation queries a list of AI nodes.
     *
     * @param Request - ListAINodePoolsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAINodePoolsResponse
     *
     * @param ListAINodePoolsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListAINodePoolsResponse
     */
    public function listAINodePoolsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAINodePools',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAINodePoolsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of AI nodes.
     *
     * @remarks
     *   This operation queries a list of AI nodes.
     *
     * @param Request - ListAINodePoolsRequest
     *
     * @returns ListAINodePoolsResponse
     *
     * @param ListAINodePoolsRequest $request
     *
     * @return ListAINodePoolsResponse
     */
    public function listAINodePools($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAINodePoolsWithOptions($request, $runtime);
    }

    /**
     * Queries a list of backup jobs.
     *
     * @param Request - ListBackupJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListBackupJobsResponse
     *
     * @param ListBackupJobsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListBackupJobsResponse
     */
    public function listBackupJobsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupMode) {
            @$query['BackupMode'] = $request->backupMode;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListBackupJobs',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListBackupJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of backup jobs.
     *
     * @param Request - ListBackupJobsRequest
     *
     * @returns ListBackupJobsResponse
     *
     * @param ListBackupJobsRequest $request
     *
     * @return ListBackupJobsResponse
     */
    public function listBackupJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBackupJobsWithOptions($request, $runtime);
    }

    /**
     * Queries a list of vector collections.
     *
     * @param Request - ListCollectionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCollectionsResponse
     *
     * @param ListCollectionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListCollectionsResponse
     */
    public function listCollectionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->namespacePassword) {
            @$query['NamespacePassword'] = $request->namespacePassword;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCollections',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCollectionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of vector collections.
     *
     * @param Request - ListCollectionsRequest
     *
     * @returns ListCollectionsResponse
     *
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
     * 获取安装在某个数据库上的所有插件信息.
     *
     * @param Request - ListDatabaseExtensionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDatabaseExtensionsResponse
     *
     * @param ListDatabaseExtensionsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListDatabaseExtensionsResponse
     */
    public function listDatabaseExtensionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->databaseName) {
            @$query['DatabaseName'] = $request->databaseName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDatabaseExtensions',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDatabaseExtensionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取安装在某个数据库上的所有插件信息.
     *
     * @param Request - ListDatabaseExtensionsRequest
     *
     * @returns ListDatabaseExtensionsResponse
     *
     * @param ListDatabaseExtensionsRequest $request
     *
     * @return ListDatabaseExtensionsResponse
     */
    public function listDatabaseExtensions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDatabaseExtensionsWithOptions($request, $runtime);
    }

    /**
     * Queries a list of databases.
     *
     * @param Request - ListDatabasesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDatabasesResponse
     *
     * @param ListDatabasesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListDatabasesResponse
     */
    public function listDatabasesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->database) {
            @$query['Database'] = $request->database;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->secretArn) {
            @$query['SecretArn'] = $request->secretArn;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDatabases',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDatabasesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of databases.
     *
     * @param Request - ListDatabasesRequest
     *
     * @returns ListDatabasesResponse
     *
     * @param ListDatabasesRequest $request
     *
     * @return ListDatabasesResponse
     */
    public function listDatabases($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDatabasesWithOptions($request, $runtime);
    }

    /**
     * Queries a list of document collections.
     *
     * @param Request - ListDocumentCollectionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDocumentCollectionsResponse
     *
     * @param ListDocumentCollectionsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListDocumentCollectionsResponse
     */
    public function listDocumentCollectionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->namespacePassword) {
            @$query['NamespacePassword'] = $request->namespacePassword;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDocumentCollections',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDocumentCollectionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of document collections.
     *
     * @param Request - ListDocumentCollectionsRequest
     *
     * @returns ListDocumentCollectionsResponse
     *
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
     * Queries a list of documents in a collection.
     *
     * @param Request - ListDocumentsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDocumentsResponse
     *
     * @param ListDocumentsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListDocumentsResponse
     */
    public function listDocumentsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->collection) {
            @$query['Collection'] = $request->collection;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->namespacePassword) {
            @$query['NamespacePassword'] = $request->namespacePassword;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDocuments',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDocumentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of documents in a collection.
     *
     * @param Request - ListDocumentsRequest
     *
     * @returns ListDocumentsResponse
     *
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
     * Queries a list of external data services.
     *
     * @param Request - ListExternalDataServicesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListExternalDataServicesResponse
     *
     * @param ListExternalDataServicesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListExternalDataServicesResponse
     */
    public function listExternalDataServicesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListExternalDataServices',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListExternalDataServicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of external data services.
     *
     * @param Request - ListExternalDataServicesRequest
     *
     * @returns ListExternalDataServicesResponse
     *
     * @param ListExternalDataServicesRequest $request
     *
     * @return ListExternalDataServicesResponse
     */
    public function listExternalDataServices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listExternalDataServicesWithOptions($request, $runtime);
    }

    /**
     * 获取实例外表配置列表.
     *
     * @param Request - ListExternalDataSourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListExternalDataSourcesResponse
     *
     * @param ListExternalDataSourcesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListExternalDataSourcesResponse
     */
    public function listExternalDataSourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListExternalDataSources',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListExternalDataSourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取实例外表配置列表.
     *
     * @param Request - ListExternalDataSourcesRequest
     *
     * @returns ListExternalDataSourcesResponse
     *
     * @param ListExternalDataSourcesRequest $request
     *
     * @return ListExternalDataSourcesResponse
     */
    public function listExternalDataSources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listExternalDataSourcesWithOptions($request, $runtime);
    }

    /**
     * Queries a list of indexes.
     *
     * @param Request - ListIndicesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListIndicesResponse
     *
     * @param ListIndicesRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListIndicesResponse
     */
    public function listIndicesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->collection) {
            @$query['Collection'] = $request->collection;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->namespacePassword) {
            @$query['NamespacePassword'] = $request->namespacePassword;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListIndices',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListIndicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of indexes.
     *
     * @param Request - ListIndicesRequest
     *
     * @returns ListIndicesResponse
     *
     * @param ListIndicesRequest $request
     *
     * @return ListIndicesResponse
     */
    public function listIndices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIndicesWithOptions($request, $runtime);
    }

    /**
     * 列举数据库.
     *
     * @param Request - ListInstanceDatabasesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListInstanceDatabasesResponse
     *
     * @param ListInstanceDatabasesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListInstanceDatabasesResponse
     */
    public function listInstanceDatabasesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListInstanceDatabases',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListInstanceDatabasesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 列举数据库.
     *
     * @param Request - ListInstanceDatabasesRequest
     *
     * @returns ListInstanceDatabasesResponse
     *
     * @param ListInstanceDatabasesRequest $request
     *
     * @return ListInstanceDatabasesResponse
     */
    public function listInstanceDatabases($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstanceDatabasesWithOptions($request, $runtime);
    }

    /**
     * Queries a list of extensions.
     *
     * @param Request - ListInstanceExtensionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListInstanceExtensionsResponse
     *
     * @param ListInstanceExtensionsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListInstanceExtensionsResponse
     */
    public function listInstanceExtensionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->extension) {
            @$query['Extension'] = $request->extension;
        }

        if (null !== $request->installStatus) {
            @$query['InstallStatus'] = $request->installStatus;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListInstanceExtensions',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListInstanceExtensionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of extensions.
     *
     * @param Request - ListInstanceExtensionsRequest
     *
     * @returns ListInstanceExtensionsResponse
     *
     * @param ListInstanceExtensionsRequest $request
     *
     * @return ListInstanceExtensionsResponse
     */
    public function listInstanceExtensions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstanceExtensionsWithOptions($request, $runtime);
    }

    /**
     * Queries all model services.
     *
     * @remarks
     * ## [](#)Usage notes
     * This interface is used to view all model service information.
     * ## [](#qps-)QPS limit
     * You can call this operation up to 1,000 times per second per account. Exceeding the limit will trigger API rate limiting, which may impact your business. Please call the API responsibly.
     *
     * @param Request - ListModelServicesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListModelServicesResponse
     *
     * @param ListModelServicesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListModelServicesResponse
     */
    public function listModelServicesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListModelServices',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListModelServicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries all model services.
     *
     * @remarks
     * ## [](#)Usage notes
     * This interface is used to view all model service information.
     * ## [](#qps-)QPS limit
     * You can call this operation up to 1,000 times per second per account. Exceeding the limit will trigger API rate limiting, which may impact your business. Please call the API responsibly.
     *
     * @param Request - ListModelServicesRequest
     *
     * @returns ListModelServicesResponse
     *
     * @param ListModelServicesRequest $request
     *
     * @return ListModelServicesResponse
     */
    public function listModelServices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listModelServicesWithOptions($request, $runtime);
    }

    /**
     * Queries a list of namespaces.
     *
     * @param Request - ListNamespacesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListNamespacesResponse
     *
     * @param ListNamespacesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListNamespacesResponse
     */
    public function listNamespacesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->managerAccount) {
            @$query['ManagerAccount'] = $request->managerAccount;
        }

        if (null !== $request->managerAccountPassword) {
            @$query['ManagerAccountPassword'] = $request->managerAccountPassword;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListNamespaces',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListNamespacesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of namespaces.
     *
     * @param Request - ListNamespacesRequest
     *
     * @returns ListNamespacesResponse
     *
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
     * Get Homogeneous Data Source.
     *
     * @param Request - ListRemoteADBDataSourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRemoteADBDataSourcesResponse
     *
     * @param ListRemoteADBDataSourcesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListRemoteADBDataSourcesResponse
     */
    public function listRemoteADBDataSourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->dataSourceId) {
            @$query['DataSourceId'] = $request->dataSourceId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRemoteADBDataSources',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListRemoteADBDataSourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get Homogeneous Data Source.
     *
     * @param Request - ListRemoteADBDataSourcesRequest
     *
     * @returns ListRemoteADBDataSourcesResponse
     *
     * @param ListRemoteADBDataSourcesRequest $request
     *
     * @return ListRemoteADBDataSourcesResponse
     */
    public function listRemoteADBDataSources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRemoteADBDataSourcesWithOptions($request, $runtime);
    }

    /**
     * Queries a list of schemas.
     *
     * @param Request - ListSchemasRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSchemasResponse
     *
     * @param ListSchemasRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListSchemasResponse
     */
    public function listSchemasWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->database) {
            @$query['Database'] = $request->database;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->schemaPattern) {
            @$query['SchemaPattern'] = $request->schemaPattern;
        }

        if (null !== $request->secretArn) {
            @$query['SecretArn'] = $request->secretArn;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSchemas',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSchemasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of schemas.
     *
     * @param Request - ListSchemasRequest
     *
     * @returns ListSchemasResponse
     *
     * @param ListSchemasRequest $request
     *
     * @return ListSchemasResponse
     */
    public function listSchemas($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSchemasWithOptions($request, $runtime);
    }

    /**
     * Queries a list of access credentials.
     *
     * @param Request - ListSecretsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSecretsResponse
     *
     * @param ListSecretsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListSecretsResponse
     */
    public function listSecretsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSecrets',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSecretsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of access credentials.
     *
     * @param Request - ListSecretsRequest
     *
     * @returns ListSecretsResponse
     *
     * @param ListSecretsRequest $request
     *
     * @return ListSecretsResponse
     */
    public function listSecrets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSecretsWithOptions($request, $runtime);
    }

    /**
     * Queries slow SQL queries.
     *
     * @param Request - ListSlowSQLRecordsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSlowSQLRecordsResponse
     *
     * @param ListSlowSQLRecordsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListSlowSQLRecordsResponse
     */
    public function listSlowSQLRecordsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->DBName) {
            @$query['DBName'] = $request->DBName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->maxDuration) {
            @$query['MaxDuration'] = $request->maxDuration;
        }

        if (null !== $request->minDuration) {
            @$query['MinDuration'] = $request->minDuration;
        }

        if (null !== $request->orderBy) {
            @$query['OrderBy'] = $request->orderBy;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSlowSQLRecords',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSlowSQLRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries slow SQL queries.
     *
     * @param Request - ListSlowSQLRecordsRequest
     *
     * @returns ListSlowSQLRecordsResponse
     *
     * @param ListSlowSQLRecordsRequest $request
     *
     * @return ListSlowSQLRecordsResponse
     */
    public function listSlowSQLRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSlowSQLRecordsWithOptions($request, $runtime);
    }

    /**
     * Create External Data Source Configuration.
     *
     * @param Request - ListStreamingDataServicesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListStreamingDataServicesResponse
     *
     * @param ListStreamingDataServicesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListStreamingDataServicesResponse
     */
    public function listStreamingDataServicesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListStreamingDataServices',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListStreamingDataServicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create External Data Source Configuration.
     *
     * @param Request - ListStreamingDataServicesRequest
     *
     * @returns ListStreamingDataServicesResponse
     *
     * @param ListStreamingDataServicesRequest $request
     *
     * @return ListStreamingDataServicesResponse
     */
    public function listStreamingDataServices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listStreamingDataServicesWithOptions($request, $runtime);
    }

    /**
     * Queries real-time service data sources.
     *
     * @param Request - ListStreamingDataSourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListStreamingDataSourcesResponse
     *
     * @param ListStreamingDataSourcesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListStreamingDataSourcesResponse
     */
    public function listStreamingDataSourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListStreamingDataSources',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListStreamingDataSourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries real-time service data sources.
     *
     * @param Request - ListStreamingDataSourcesRequest
     *
     * @returns ListStreamingDataSourcesResponse
     *
     * @param ListStreamingDataSourcesRequest $request
     *
     * @return ListStreamingDataSourcesResponse
     */
    public function listStreamingDataSources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listStreamingDataSourcesWithOptions($request, $runtime);
    }

    /**
     * Queries real-time data synchronization jobs.
     *
     * @param Request - ListStreamingJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListStreamingJobsResponse
     *
     * @param ListStreamingJobsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListStreamingJobsResponse
     */
    public function listStreamingJobsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListStreamingJobs',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListStreamingJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries real-time data synchronization jobs.
     *
     * @param Request - ListStreamingJobsRequest
     *
     * @returns ListStreamingJobsResponse
     *
     * @param ListStreamingJobsRequest $request
     *
     * @return ListStreamingJobsResponse
     */
    public function listStreamingJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listStreamingJobsWithOptions($request, $runtime);
    }

    /**
     * Retrieves a paginated list of Supabase instances in your account. You can filter the list by region.
     *
     * @remarks
     *   You can call this operation to query Supabase instances.
     *
     * @param Request - ListSupabaseProjectsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSupabaseProjectsResponse
     *
     * @param ListSupabaseProjectsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListSupabaseProjectsResponse
     */
    public function listSupabaseProjectsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSupabaseProjects',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSupabaseProjectsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a paginated list of Supabase instances in your account. You can filter the list by region.
     *
     * @remarks
     *   You can call this operation to query Supabase instances.
     *
     * @param Request - ListSupabaseProjectsRequest
     *
     * @returns ListSupabaseProjectsResponse
     *
     * @param ListSupabaseProjectsRequest $request
     *
     * @return ListSupabaseProjectsResponse
     */
    public function listSupabaseProjects($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSupabaseProjectsWithOptions($request, $runtime);
    }

    /**
     * Get the list of supported models.
     *
     * @remarks
     *   This API is used to query the list of supported models.
     *
     * @param Request - ListSupportModelsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSupportModelsResponse
     *
     * @param ListSupportModelsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListSupportModelsResponse
     */
    public function listSupportModelsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSupportModels',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSupportModelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get the list of supported models.
     *
     * @remarks
     *   This API is used to query the list of supported models.
     *
     * @param Request - ListSupportModelsRequest
     *
     * @returns ListSupportModelsResponse
     *
     * @param ListSupportModelsRequest $request
     *
     * @return ListSupportModelsResponse
     */
    public function listSupportModels($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSupportModelsWithOptions($request, $runtime);
    }

    /**
     * Queries a list of tables in a database.
     *
     * @param Request - ListTablesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTablesResponse
     *
     * @param ListTablesRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListTablesResponse
     */
    public function listTablesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->database) {
            @$query['Database'] = $request->database;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->schema) {
            @$query['Schema'] = $request->schema;
        }

        if (null !== $request->secretArn) {
            @$query['SecretArn'] = $request->secretArn;
        }

        if (null !== $request->tablePattern) {
            @$query['TablePattern'] = $request->tablePattern;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTables',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of tables in a database.
     *
     * @param Request - ListTablesRequest
     *
     * @returns ListTablesResponse
     *
     * @param ListTablesRequest $request
     *
     * @return ListTablesResponse
     */
    public function listTables($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTablesWithOptions($request, $runtime);
    }

    /**
     * Queries a list of tags that are added to AnalyticDB for PostgreSQL instances.
     *
     * @param Request - ListTagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTagResourcesResponse
     *
     * @param ListTagResourcesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTagResources',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of tags that are added to AnalyticDB for PostgreSQL instances.
     *
     * @param Request - ListTagResourcesRequest
     *
     * @returns ListTagResourcesResponse
     *
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
     * Modifies the description of a database account for an AnalyticDB for PostgreSQL instance.
     *
     * @param Request - ModifyAccountDescriptionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyAccountDescriptionResponse
     *
     * @param ModifyAccountDescriptionRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyAccountDescriptionResponse
     */
    public function modifyAccountDescriptionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountDescription) {
            @$query['AccountDescription'] = $request->accountDescription;
        }

        if (null !== $request->accountName) {
            @$query['AccountName'] = $request->accountName;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyAccountDescription',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyAccountDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the description of a database account for an AnalyticDB for PostgreSQL instance.
     *
     * @param Request - ModifyAccountDescriptionRequest
     *
     * @returns ModifyAccountDescriptionResponse
     *
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
     * Configures the backup policy of an AnalyticDB for PostgreSQL instance.
     *
     * @param Request - ModifyBackupPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyBackupPolicyResponse
     *
     * @param ModifyBackupPolicyRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyBackupPolicyResponse
     */
    public function modifyBackupPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupRetentionPeriod) {
            @$query['BackupRetentionPeriod'] = $request->backupRetentionPeriod;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->enableRecoveryPoint) {
            @$query['EnableRecoveryPoint'] = $request->enableRecoveryPoint;
        }

        if (null !== $request->preferredBackupPeriod) {
            @$query['PreferredBackupPeriod'] = $request->preferredBackupPeriod;
        }

        if (null !== $request->preferredBackupTime) {
            @$query['PreferredBackupTime'] = $request->preferredBackupTime;
        }

        if (null !== $request->recoveryPointPeriod) {
            @$query['RecoveryPointPeriod'] = $request->recoveryPointPeriod;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyBackupPolicy',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyBackupPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures the backup policy of an AnalyticDB for PostgreSQL instance.
     *
     * @param Request - ModifyBackupPolicyRequest
     *
     * @returns ModifyBackupPolicyResponse
     *
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
     * Updates a collection.
     *
     * @param Request - ModifyCollectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyCollectionResponse
     *
     * @param ModifyCollectionRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyCollectionResponse
     */
    public function modifyCollectionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->collection) {
            @$query['Collection'] = $request->collection;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->metadata) {
            @$query['Metadata'] = $request->metadata;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->namespacePassword) {
            @$query['NamespacePassword'] = $request->namespacePassword;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyCollection',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyCollectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a collection.
     *
     * @param Request - ModifyCollectionRequest
     *
     * @returns ModifyCollectionResponse
     *
     * @param ModifyCollectionRequest $request
     *
     * @return ModifyCollectionResponse
     */
    public function modifyCollection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCollectionWithOptions($request, $runtime);
    }

    /**
     * Changes the threshold of computing resources and the wait period of idle resources for an AnalyticDB for PostgreSQL instance in Serverless automatic scheduling mode.
     *
     * @param Request - ModifyDBInstanceConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDBInstanceConfigResponse
     *
     * @param ModifyDBInstanceConfigRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyDBInstanceConfigResponse
     */
    public function modifyDBInstanceConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceDescription) {
            @$query['DBInstanceDescription'] = $request->DBInstanceDescription;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->idleTime) {
            @$query['IdleTime'] = $request->idleTime;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->serverlessResource) {
            @$query['ServerlessResource'] = $request->serverlessResource;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDBInstanceConfig',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDBInstanceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the threshold of computing resources and the wait period of idle resources for an AnalyticDB for PostgreSQL instance in Serverless automatic scheduling mode.
     *
     * @param Request - ModifyDBInstanceConfigRequest
     *
     * @returns ModifyDBInstanceConfigResponse
     *
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
     * Changes the endpoint of an AnalyticDB for PostgreSQL instance.
     *
     * @param Request - ModifyDBInstanceConnectionStringRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDBInstanceConnectionStringResponse
     *
     * @param ModifyDBInstanceConnectionStringRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return ModifyDBInstanceConnectionStringResponse
     */
    public function modifyDBInstanceConnectionStringWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->connectionStringPrefix) {
            @$query['ConnectionStringPrefix'] = $request->connectionStringPrefix;
        }

        if (null !== $request->currentConnectionString) {
            @$query['CurrentConnectionString'] = $request->currentConnectionString;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->port) {
            @$query['Port'] = $request->port;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDBInstanceConnectionString',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDBInstanceConnectionStringResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the endpoint of an AnalyticDB for PostgreSQL instance.
     *
     * @param Request - ModifyDBInstanceConnectionStringRequest
     *
     * @returns ModifyDBInstanceConnectionStringResponse
     *
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
     * Changes the development mode of an instance.
     *
     * @param Request - ModifyDBInstanceDeploymentModeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDBInstanceDeploymentModeResponse
     *
     * @param ModifyDBInstanceDeploymentModeRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ModifyDBInstanceDeploymentModeResponse
     */
    public function modifyDBInstanceDeploymentModeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->deployMode) {
            @$query['DeployMode'] = $request->deployMode;
        }

        if (null !== $request->standbyVSwitchId) {
            @$query['StandbyVSwitchId'] = $request->standbyVSwitchId;
        }

        if (null !== $request->standbyZoneId) {
            @$query['StandbyZoneId'] = $request->standbyZoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDBInstanceDeploymentMode',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDBInstanceDeploymentModeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the development mode of an instance.
     *
     * @param Request - ModifyDBInstanceDeploymentModeRequest
     *
     * @returns ModifyDBInstanceDeploymentModeResponse
     *
     * @param ModifyDBInstanceDeploymentModeRequest $request
     *
     * @return ModifyDBInstanceDeploymentModeResponse
     */
    public function modifyDBInstanceDeploymentMode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceDeploymentModeWithOptions($request, $runtime);
    }

    /**
     * Changes the description of an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     * To make it easy to identify AnalyticDB for PostgreSQL instances, you can call this operation to modify the description of instances.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param Request - ModifyDBInstanceDescriptionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDBInstanceDescriptionResponse
     *
     * @param ModifyDBInstanceDescriptionRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyDBInstanceDescriptionResponse
     */
    public function modifyDBInstanceDescriptionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceDescription) {
            @$query['DBInstanceDescription'] = $request->DBInstanceDescription;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDBInstanceDescription',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDBInstanceDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the description of an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     * To make it easy to identify AnalyticDB for PostgreSQL instances, you can call this operation to modify the description of instances.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param Request - ModifyDBInstanceDescriptionRequest
     *
     * @returns ModifyDBInstanceDescriptionResponse
     *
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
     * Modifies the maintenance window of an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     * The system maintains AnalyticDB for PostgreSQL instances during the maintenance window that you specify. We recommend that you set the maintenance window to off-peak hours to minimize the impact on your business.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param Request - ModifyDBInstanceMaintainTimeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDBInstanceMaintainTimeResponse
     *
     * @param ModifyDBInstanceMaintainTimeRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ModifyDBInstanceMaintainTimeResponse
     */
    public function modifyDBInstanceMaintainTimeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDBInstanceMaintainTime',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDBInstanceMaintainTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the maintenance window of an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     * The system maintains AnalyticDB for PostgreSQL instances during the maintenance window that you specify. We recommend that you set the maintenance window to off-peak hours to minimize the impact on your business.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param Request - ModifyDBInstanceMaintainTimeRequest
     *
     * @returns ModifyDBInstanceMaintainTimeResponse
     *
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
     * Changes the network type of an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     * ##
     * This operation is available only for AnalyticDB for PostgreSQL instances in reserved storage mode.
     * ## QPS limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param Request - ModifyDBInstanceNetworkTypeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDBInstanceNetworkTypeResponse
     *
     * @param ModifyDBInstanceNetworkTypeRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyDBInstanceNetworkTypeResponse
     */
    public function modifyDBInstanceNetworkTypeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->instanceNetworkType) {
            @$query['InstanceNetworkType'] = $request->instanceNetworkType;
        }

        if (null !== $request->privateIpAddress) {
            @$query['PrivateIpAddress'] = $request->privateIpAddress;
        }

        if (null !== $request->VPCId) {
            @$query['VPCId'] = $request->VPCId;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDBInstanceNetworkType',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDBInstanceNetworkTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the network type of an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     * ##
     * This operation is available only for AnalyticDB for PostgreSQL instances in reserved storage mode.
     * ## QPS limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param Request - ModifyDBInstanceNetworkTypeRequest
     *
     * @returns ModifyDBInstanceNetworkTypeResponse
     *
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
     * 包年包月/按量付费转换改造.
     *
     * @param Request - ModifyDBInstancePayTypeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDBInstancePayTypeResponse
     *
     * @param ModifyDBInstancePayTypeRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyDBInstancePayTypeResponse
     */
    public function modifyDBInstancePayTypeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->payType) {
            @$query['PayType'] = $request->payType;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->usedTime) {
            @$query['UsedTime'] = $request->usedTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDBInstancePayType',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDBInstancePayTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 包年包月/按量付费转换改造.
     *
     * @param Request - ModifyDBInstancePayTypeRequest
     *
     * @returns ModifyDBInstancePayTypeResponse
     *
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
     * Moves an AnalyticDB for PostgreSQL instance to a resource group.
     *
     * @remarks
     * Resource Management allows you to build an organizational structure for resources based on your business requirements. You can use resource directories, folders, accounts, and resource groups to hierarchically organize and manage resources. For more information, see [What is Resource Management?](https://help.aliyun.com/document_detail/94475.html)
     *
     * @param Request - ModifyDBInstanceResourceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDBInstanceResourceGroupResponse
     *
     * @param ModifyDBInstanceResourceGroupRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ModifyDBInstanceResourceGroupResponse
     */
    public function modifyDBInstanceResourceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->newResourceGroupId) {
            @$query['NewResourceGroupId'] = $request->newResourceGroupId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDBInstanceResourceGroup',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDBInstanceResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Moves an AnalyticDB for PostgreSQL instance to a resource group.
     *
     * @remarks
     * Resource Management allows you to build an organizational structure for resources based on your business requirements. You can use resource directories, folders, accounts, and resource groups to hierarchically organize and manage resources. For more information, see [What is Resource Management?](https://help.aliyun.com/document_detail/94475.html)
     *
     * @param Request - ModifyDBInstanceResourceGroupRequest
     *
     * @returns ModifyDBInstanceResourceGroupResponse
     *
     * @param ModifyDBInstanceResourceGroupRequest $request
     *
     * @return ModifyDBInstanceResourceGroupResponse
     */
    public function modifyDBInstanceResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceResourceGroupWithOptions($request, $runtime);
    }

    /**
     * Enables, disables, or updates SSL encryption for an AnalyticDB for PostgreSQL instance.
     *
     * @param Request - ModifyDBInstanceSSLRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDBInstanceSSLResponse
     *
     * @param ModifyDBInstanceSSLRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyDBInstanceSSLResponse
     */
    public function modifyDBInstanceSSLWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->connectionString) {
            @$query['ConnectionString'] = $request->connectionString;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->SSLEnabled) {
            @$query['SSLEnabled'] = $request->SSLEnabled;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDBInstanceSSL',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDBInstanceSSLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables, disables, or updates SSL encryption for an AnalyticDB for PostgreSQL instance.
     *
     * @param Request - ModifyDBInstanceSSLRequest
     *
     * @returns ModifyDBInstanceSSLResponse
     *
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
     * Modifies the configurations of a resource group.
     *
     * @param tmpReq - ModifyDBResourceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDBResourceGroupResponse
     *
     * @param ModifyDBResourceGroupRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyDBResourceGroupResponse
     */
    public function modifyDBResourceGroupWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModifyDBResourceGroupShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->resourceGroupItems) {
            $request->resourceGroupItemsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->resourceGroupItems, 'ResourceGroupItems', 'json');
        }

        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceGroupItemsShrink) {
            @$query['ResourceGroupItems'] = $request->resourceGroupItemsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDBResourceGroup',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDBResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the configurations of a resource group.
     *
     * @param Request - ModifyDBResourceGroupRequest
     *
     * @returns ModifyDBResourceGroupResponse
     *
     * @param ModifyDBResourceGroupRequest $request
     *
     * @return ModifyDBResourceGroupResponse
     */
    public function modifyDBResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBResourceGroupWithOptions($request, $runtime);
    }

    /**
     * Modify External Data Service.
     *
     * @param Request - ModifyExternalDataServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyExternalDataServiceResponse
     *
     * @param ModifyExternalDataServiceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyExternalDataServiceResponse
     */
    public function modifyExternalDataServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceDescription) {
            @$query['ServiceDescription'] = $request->serviceDescription;
        }

        if (null !== $request->serviceId) {
            @$query['ServiceId'] = $request->serviceId;
        }

        if (null !== $request->serviceSpec) {
            @$query['ServiceSpec'] = $request->serviceSpec;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyExternalDataService',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyExternalDataServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modify External Data Service.
     *
     * @param Request - ModifyExternalDataServiceRequest
     *
     * @returns ModifyExternalDataServiceResponse
     *
     * @param ModifyExternalDataServiceRequest $request
     *
     * @return ModifyExternalDataServiceResponse
     */
    public function modifyExternalDataService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyExternalDataServiceWithOptions($request, $runtime);
    }

    /**
     * Modifies the configurations of a Hadoop data source.
     *
     * @param Request - ModifyHadoopDataSourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyHadoopDataSourceResponse
     *
     * @param ModifyHadoopDataSourceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyHadoopDataSourceResponse
     */
    public function modifyHadoopDataSourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->dataSourceDescription) {
            @$query['DataSourceDescription'] = $request->dataSourceDescription;
        }

        if (null !== $request->dataSourceId) {
            @$query['DataSourceId'] = $request->dataSourceId;
        }

        if (null !== $request->dataSourceType) {
            @$query['DataSourceType'] = $request->dataSourceType;
        }

        if (null !== $request->emrInstanceId) {
            @$query['EmrInstanceId'] = $request->emrInstanceId;
        }

        if (null !== $request->HDFSConf) {
            @$query['HDFSConf'] = $request->HDFSConf;
        }

        if (null !== $request->hadoopCoreConf) {
            @$query['HadoopCoreConf'] = $request->hadoopCoreConf;
        }

        if (null !== $request->hadoopCreateType) {
            @$query['HadoopCreateType'] = $request->hadoopCreateType;
        }

        if (null !== $request->hadoopHostsAddress) {
            @$query['HadoopHostsAddress'] = $request->hadoopHostsAddress;
        }

        if (null !== $request->hiveConf) {
            @$query['HiveConf'] = $request->hiveConf;
        }

        if (null !== $request->mapReduceConf) {
            @$query['MapReduceConf'] = $request->mapReduceConf;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->yarnConf) {
            @$query['YarnConf'] = $request->yarnConf;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyHadoopDataSource',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyHadoopDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the configurations of a Hadoop data source.
     *
     * @param Request - ModifyHadoopDataSourceRequest
     *
     * @returns ModifyHadoopDataSourceResponse
     *
     * @param ModifyHadoopDataSourceRequest $request
     *
     * @return ModifyHadoopDataSourceResponse
     */
    public function modifyHadoopDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyHadoopDataSourceWithOptions($request, $runtime);
    }

    /**
     * Modifies the configurations of a Java Database Connectivity (JDBC) data source.
     *
     * @param Request - ModifyJDBCDataSourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyJDBCDataSourceResponse
     *
     * @param ModifyJDBCDataSourceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyJDBCDataSourceResponse
     */
    public function modifyJDBCDataSourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->dataSourceDescription) {
            @$query['DataSourceDescription'] = $request->dataSourceDescription;
        }

        if (null !== $request->dataSourceId) {
            @$query['DataSourceId'] = $request->dataSourceId;
        }

        if (null !== $request->dataSourceType) {
            @$query['DataSourceType'] = $request->dataSourceType;
        }

        if (null !== $request->JDBCConnectionString) {
            @$query['JDBCConnectionString'] = $request->JDBCConnectionString;
        }

        if (null !== $request->JDBCPassword) {
            @$query['JDBCPassword'] = $request->JDBCPassword;
        }

        if (null !== $request->JDBCUserName) {
            @$query['JDBCUserName'] = $request->JDBCUserName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyJDBCDataSource',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyJDBCDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the configurations of a Java Database Connectivity (JDBC) data source.
     *
     * @param Request - ModifyJDBCDataSourceRequest
     *
     * @returns ModifyJDBCDataSourceResponse
     *
     * @param ModifyJDBCDataSourceRequest $request
     *
     * @return ModifyJDBCDataSourceResponse
     */
    public function modifyJDBCDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyJDBCDataSourceWithOptions($request, $runtime);
    }

    /**
     * Changes the specifications of coordinator node resources for an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     * This operation is not available for instances in reserved storage mode.
     * Before you call this operation, make sure that you are familiar with the billing of AnalyticDB for PostgreSQL. For more information, see [Billing methods](https://help.aliyun.com/document_detail/35406.html) and [AnalyticDB for PostgreSQL pricing](https://www.alibabacloud.com/zh/product/hybriddb-postgresql/pricing).
     *
     * @param Request - ModifyMasterSpecRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyMasterSpecResponse
     *
     * @param ModifyMasterSpecRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyMasterSpecResponse
     */
    public function modifyMasterSpecWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceDescription) {
            @$query['DBInstanceDescription'] = $request->DBInstanceDescription;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->masterAISpec) {
            @$query['MasterAISpec'] = $request->masterAISpec;
        }

        if (null !== $request->masterCU) {
            @$query['MasterCU'] = $request->masterCU;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyMasterSpec',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyMasterSpecResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the specifications of coordinator node resources for an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     * This operation is not available for instances in reserved storage mode.
     * Before you call this operation, make sure that you are familiar with the billing of AnalyticDB for PostgreSQL. For more information, see [Billing methods](https://help.aliyun.com/document_detail/35406.html) and [AnalyticDB for PostgreSQL pricing](https://www.alibabacloud.com/zh/product/hybriddb-postgresql/pricing).
     *
     * @param Request - ModifyMasterSpecRequest
     *
     * @returns ModifyMasterSpecResponse
     *
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
     * Modifies the configuration parameters of an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     * This operation can be called to modify parameters of an AnalyticDB for PostgreSQL instance in elastic storage mode or Serverless mode.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered and may affect your business. We recommend that you take note of the limit when you call this operation.
     *
     * @param Request - ModifyParametersRequest
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
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->forceRestartInstance) {
            @$query['ForceRestartInstance'] = $request->forceRestartInstance;
        }

        if (null !== $request->parameters) {
            @$query['Parameters'] = $request->parameters;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyParameters',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyParametersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the configuration parameters of an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     * This operation can be called to modify parameters of an AnalyticDB for PostgreSQL instance in elastic storage mode or Serverless mode.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered and may affect your business. We recommend that you take note of the limit when you call this operation.
     *
     * @param Request - ModifyParametersRequest
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
     * Modify Homogeneous Data Source.
     *
     * @param Request - ModifyRemoteADBDataSourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyRemoteADBDataSourceResponse
     *
     * @param ModifyRemoteADBDataSourceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyRemoteADBDataSourceResponse
     */
    public function modifyRemoteADBDataSourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dataSourceId) {
            @$query['DataSourceId'] = $request->dataSourceId;
        }

        if (null !== $request->dataSourceName) {
            @$query['DataSourceName'] = $request->dataSourceName;
        }

        if (null !== $request->localDBInstanceId) {
            @$query['LocalDBInstanceId'] = $request->localDBInstanceId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        if (null !== $request->userPassword) {
            @$query['UserPassword'] = $request->userPassword;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyRemoteADBDataSource',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyRemoteADBDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modify Homogeneous Data Source.
     *
     * @param Request - ModifyRemoteADBDataSourceRequest
     *
     * @returns ModifyRemoteADBDataSourceResponse
     *
     * @param ModifyRemoteADBDataSourceRequest $request
     *
     * @return ModifyRemoteADBDataSourceResponse
     */
    public function modifyRemoteADBDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyRemoteADBDataSourceWithOptions($request, $runtime);
    }

    /**
     * Enables or disables the SQL Explorer feature for an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     *   You can call this operation only for AnalyticDB for PostgreSQL instances in reserved storage mode.
     * *   You can call this operation only for AnalyticDB for PostgreSQL instances in Serverless automatic scheduling mode.
     *
     * @param Request - ModifySQLCollectorPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifySQLCollectorPolicyResponse
     *
     * @param ModifySQLCollectorPolicyRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifySQLCollectorPolicyResponse
     */
    public function modifySQLCollectorPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->SQLCollectorStatus) {
            @$query['SQLCollectorStatus'] = $request->SQLCollectorStatus;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifySQLCollectorPolicy',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifySQLCollectorPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables or disables the SQL Explorer feature for an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     *   You can call this operation only for AnalyticDB for PostgreSQL instances in reserved storage mode.
     * *   You can call this operation only for AnalyticDB for PostgreSQL instances in Serverless automatic scheduling mode.
     *
     * @param Request - ModifySQLCollectorPolicyRequest
     *
     * @returns ModifySQLCollectorPolicyResponse
     *
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
     * Modifies the IP address whitelist of an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     * To ensure the security and stability of AnalyticDB for PostgreSQL instances, the system denies all external IP addresses to access AnalyticDB for PostgreSQL instances by default. Before you can use an AnalyticDB for PostgreSQL instance, you must add the IP address or CIDR block of your client to the IP address whitelist of the instance.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param Request - ModifySecurityIpsRequest
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
        $query = [];
        if (null !== $request->DBInstanceIPArrayAttribute) {
            @$query['DBInstanceIPArrayAttribute'] = $request->DBInstanceIPArrayAttribute;
        }

        if (null !== $request->DBInstanceIPArrayName) {
            @$query['DBInstanceIPArrayName'] = $request->DBInstanceIPArrayName;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->modifyMode) {
            @$query['ModifyMode'] = $request->modifyMode;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->securityIPList) {
            @$query['SecurityIPList'] = $request->securityIPList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifySecurityIps',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifySecurityIpsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the IP address whitelist of an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     * To ensure the security and stability of AnalyticDB for PostgreSQL instances, the system denies all external IP addresses to access AnalyticDB for PostgreSQL instances by default. Before you can use an AnalyticDB for PostgreSQL instance, you must add the IP address or CIDR block of your client to the IP address whitelist of the instance.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param Request - ModifySecurityIpsRequest
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
     * Modifies a real-time data service.
     *
     * @param Request - ModifyStreamingDataServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyStreamingDataServiceResponse
     *
     * @param ModifyStreamingDataServiceRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyStreamingDataServiceResponse
     */
    public function modifyStreamingDataServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceDescription) {
            @$query['ServiceDescription'] = $request->serviceDescription;
        }

        if (null !== $request->serviceId) {
            @$query['ServiceId'] = $request->serviceId;
        }

        if (null !== $request->serviceSpec) {
            @$query['ServiceSpec'] = $request->serviceSpec;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyStreamingDataService',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyStreamingDataServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a real-time data service.
     *
     * @param Request - ModifyStreamingDataServiceRequest
     *
     * @returns ModifyStreamingDataServiceResponse
     *
     * @param ModifyStreamingDataServiceRequest $request
     *
     * @return ModifyStreamingDataServiceResponse
     */
    public function modifyStreamingDataService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyStreamingDataServiceWithOptions($request, $runtime);
    }

    /**
     * Modifies a real-time service data source.
     *
     * @param Request - ModifyStreamingDataSourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyStreamingDataSourceResponse
     *
     * @param ModifyStreamingDataSourceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyStreamingDataSourceResponse
     */
    public function modifyStreamingDataSourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->dataSourceConfig) {
            @$query['DataSourceConfig'] = $request->dataSourceConfig;
        }

        if (null !== $request->dataSourceDescription) {
            @$query['DataSourceDescription'] = $request->dataSourceDescription;
        }

        if (null !== $request->dataSourceId) {
            @$query['DataSourceId'] = $request->dataSourceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyStreamingDataSource',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyStreamingDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a real-time service data source.
     *
     * @param Request - ModifyStreamingDataSourceRequest
     *
     * @returns ModifyStreamingDataSourceResponse
     *
     * @param ModifyStreamingDataSourceRequest $request
     *
     * @return ModifyStreamingDataSourceResponse
     */
    public function modifyStreamingDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyStreamingDataSourceWithOptions($request, $runtime);
    }

    /**
     * Create External Data Source Configuration.
     *
     * @param tmpReq - ModifyStreamingJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyStreamingJobResponse
     *
     * @param ModifyStreamingJobRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyStreamingJobResponse
     */
    public function modifyStreamingJobWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModifyStreamingJobShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->destColumns) {
            $request->destColumnsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->destColumns, 'DestColumns', 'json');
        }

        if (null !== $tmpReq->matchColumns) {
            $request->matchColumnsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->matchColumns, 'MatchColumns', 'json');
        }

        if (null !== $tmpReq->srcColumns) {
            $request->srcColumnsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->srcColumns, 'SrcColumns', 'json');
        }

        if (null !== $tmpReq->updateColumns) {
            $request->updateColumnsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->updateColumns, 'UpdateColumns', 'json');
        }

        $query = [];
        if (null !== $request->account) {
            @$query['Account'] = $request->account;
        }

        if (null !== $request->consistency) {
            @$query['Consistency'] = $request->consistency;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->destColumnsShrink) {
            @$query['DestColumns'] = $request->destColumnsShrink;
        }

        if (null !== $request->destDatabase) {
            @$query['DestDatabase'] = $request->destDatabase;
        }

        if (null !== $request->destSchema) {
            @$query['DestSchema'] = $request->destSchema;
        }

        if (null !== $request->destTable) {
            @$query['DestTable'] = $request->destTable;
        }

        if (null !== $request->errorLimitCount) {
            @$query['ErrorLimitCount'] = $request->errorLimitCount;
        }

        if (null !== $request->fallbackOffset) {
            @$query['FallbackOffset'] = $request->fallbackOffset;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->jobConfig) {
            @$query['JobConfig'] = $request->jobConfig;
        }

        if (null !== $request->jobDescription) {
            @$query['JobDescription'] = $request->jobDescription;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->matchColumnsShrink) {
            @$query['MatchColumns'] = $request->matchColumnsShrink;
        }

        if (null !== $request->password) {
            @$query['Password'] = $request->password;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->srcColumnsShrink) {
            @$query['SrcColumns'] = $request->srcColumnsShrink;
        }

        if (null !== $request->tryRun) {
            @$query['TryRun'] = $request->tryRun;
        }

        if (null !== $request->updateColumnsShrink) {
            @$query['UpdateColumns'] = $request->updateColumnsShrink;
        }

        if (null !== $request->writeMode) {
            @$query['WriteMode'] = $request->writeMode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyStreamingJob',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyStreamingJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create External Data Source Configuration.
     *
     * @param Request - ModifyStreamingJobRequest
     *
     * @returns ModifyStreamingJobResponse
     *
     * @param ModifyStreamingJobRequest $request
     *
     * @return ModifyStreamingJobResponse
     */
    public function modifyStreamingJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyStreamingJobWithOptions($request, $runtime);
    }

    /**
     * Sets or replaces the IP address whitelist for a specified Supabase project.
     *
     * @remarks
     * Before you can connect to a Supabase project, you must add your client\\"s IP address or CIDR block to the project\\"s whitelist.
     *
     * @param Request - ModifySupabaseProjectSecurityIpsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifySupabaseProjectSecurityIpsResponse
     *
     * @param ModifySupabaseProjectSecurityIpsRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return ModifySupabaseProjectSecurityIpsResponse
     */
    public function modifySupabaseProjectSecurityIpsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->securityIPList) {
            @$query['SecurityIPList'] = $request->securityIPList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifySupabaseProjectSecurityIps',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifySupabaseProjectSecurityIpsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sets or replaces the IP address whitelist for a specified Supabase project.
     *
     * @remarks
     * Before you can connect to a Supabase project, you must add your client\\"s IP address or CIDR block to the project\\"s whitelist.
     *
     * @param Request - ModifySupabaseProjectSecurityIpsRequest
     *
     * @returns ModifySupabaseProjectSecurityIpsResponse
     *
     * @param ModifySupabaseProjectSecurityIpsRequest $request
     *
     * @return ModifySupabaseProjectSecurityIpsResponse
     */
    public function modifySupabaseProjectSecurityIps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySupabaseProjectSecurityIpsWithOptions($request, $runtime);
    }

    /**
     * Modifies the vector engine optimization configuration of an AnalyticDB for PostgreSQL instance.
     *
     * @param Request - ModifyVectorConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyVectorConfigurationResponse
     *
     * @param ModifyVectorConfigurationRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyVectorConfigurationResponse
     */
    public function modifyVectorConfigurationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->vectorConfigurationStatus) {
            @$query['VectorConfigurationStatus'] = $request->vectorConfigurationStatus;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyVectorConfiguration',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyVectorConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the vector engine optimization configuration of an AnalyticDB for PostgreSQL instance.
     *
     * @param Request - ModifyVectorConfigurationRequest
     *
     * @returns ModifyVectorConfigurationResponse
     *
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
     * Pauses data redistribution.
     *
     * @param Request - PauseDataRedistributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PauseDataRedistributeResponse
     *
     * @param PauseDataRedistributeRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return PauseDataRedistributeResponse
     */
    public function pauseDataRedistributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PauseDataRedistribute',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PauseDataRedistributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Pauses data redistribution.
     *
     * @param Request - PauseDataRedistributeRequest
     *
     * @returns PauseDataRedistributeResponse
     *
     * @param PauseDataRedistributeRequest $request
     *
     * @return PauseDataRedistributeResponse
     */
    public function pauseDataRedistribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pauseDataRedistributeWithOptions($request, $runtime);
    }

    /**
     * Pauses an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     * You can call this operation to pause an AnalyticDB for PostgreSQL instance that is in the **Running** state.
     * This operation is available only for AnalyticDB for PostgreSQL instances in Serverless mode that run V1.0.2.1 or later. For more information about how to view and update the minor engine version of an instance, see [View the minor engine version](https://help.aliyun.com/document_detail/277424.html) and [Update the minor engine version](https://help.aliyun.com/document_detail/139271.html).
     * >  Before you call this operation, make sure that you are familiar with the billing methods and pricing of AnalyticDB for PostgreSQL instances. For more information, see [Billing methods](https://help.aliyun.com/document_detail/35406.html) and [AnalyticDB for PostgreSQL pricing](https://www.alibabacloud.com/zh/product/hybriddb-postgresql/pricing).
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param Request - PauseInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PauseInstanceResponse
     *
     * @param PauseInstanceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return PauseInstanceResponse
     */
    public function pauseInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PauseInstance',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PauseInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Pauses an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     * You can call this operation to pause an AnalyticDB for PostgreSQL instance that is in the **Running** state.
     * This operation is available only for AnalyticDB for PostgreSQL instances in Serverless mode that run V1.0.2.1 or later. For more information about how to view and update the minor engine version of an instance, see [View the minor engine version](https://help.aliyun.com/document_detail/277424.html) and [Update the minor engine version](https://help.aliyun.com/document_detail/139271.html).
     * >  Before you call this operation, make sure that you are familiar with the billing methods and pricing of AnalyticDB for PostgreSQL instances. For more information, see [Billing methods](https://help.aliyun.com/document_detail/35406.html) and [AnalyticDB for PostgreSQL pricing](https://www.alibabacloud.com/zh/product/hybriddb-postgresql/pricing).
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param Request - PauseInstanceRequest
     *
     * @returns PauseInstanceResponse
     *
     * @param PauseInstanceRequest $request
     *
     * @return PauseInstanceResponse
     */
    public function pauseInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pauseInstanceWithOptions($request, $runtime);
    }

    /**
     * Query Vector Data.
     *
     * @param tmpReq - QueryCollectionDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryCollectionDataResponse
     *
     * @param QueryCollectionDataRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return QueryCollectionDataResponse
     */
    public function queryCollectionDataWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new QueryCollectionDataShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->hybridSearchArgs) {
            $request->hybridSearchArgsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->hybridSearchArgs, 'HybridSearchArgs', 'json');
        }

        if (null !== $tmpReq->relationalTableFilter) {
            $request->relationalTableFilterShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->relationalTableFilter, 'RelationalTableFilter', 'json');
        }

        if (null !== $tmpReq->sparseVector) {
            $request->sparseVectorShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sparseVector, 'SparseVector', 'json');
        }

        if (null !== $tmpReq->vector) {
            $request->vectorShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->vector, 'Vector', 'json');
        }

        $query = [];
        if (null !== $request->collection) {
            @$query['Collection'] = $request->collection;
        }

        if (null !== $request->content) {
            @$query['Content'] = $request->content;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->hybridSearch) {
            @$query['HybridSearch'] = $request->hybridSearch;
        }

        if (null !== $request->hybridSearchArgsShrink) {
            @$query['HybridSearchArgs'] = $request->hybridSearchArgsShrink;
        }

        if (null !== $request->includeMetadataFields) {
            @$query['IncludeMetadataFields'] = $request->includeMetadataFields;
        }

        if (null !== $request->includeSparseValues) {
            @$query['IncludeSparseValues'] = $request->includeSparseValues;
        }

        if (null !== $request->includeValues) {
            @$query['IncludeValues'] = $request->includeValues;
        }

        if (null !== $request->metrics) {
            @$query['Metrics'] = $request->metrics;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->namespacePassword) {
            @$query['NamespacePassword'] = $request->namespacePassword;
        }

        if (null !== $request->offset) {
            @$query['Offset'] = $request->offset;
        }

        if (null !== $request->orderBy) {
            @$query['OrderBy'] = $request->orderBy;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->relationalTableFilterShrink) {
            @$query['RelationalTableFilter'] = $request->relationalTableFilterShrink;
        }

        if (null !== $request->sparseVectorShrink) {
            @$query['SparseVector'] = $request->sparseVectorShrink;
        }

        if (null !== $request->topK) {
            @$query['TopK'] = $request->topK;
        }

        if (null !== $request->vectorShrink) {
            @$query['Vector'] = $request->vectorShrink;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $body = [];
        if (null !== $request->filter) {
            @$body['Filter'] = $request->filter;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryCollectionData',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryCollectionDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Vector Data.
     *
     * @param Request - QueryCollectionDataRequest
     *
     * @returns QueryCollectionDataResponse
     *
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
     * Query.
     *
     * @param tmpReq - QueryContentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryContentResponse
     *
     * @param QueryContentRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return QueryContentResponse
     */
    public function queryContentWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new QueryContentShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->graphSearchArgs) {
            $request->graphSearchArgsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->graphSearchArgs, 'GraphSearchArgs', 'json');
        }

        if (null !== $tmpReq->hybridSearchArgs) {
            $request->hybridSearchArgsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->hybridSearchArgs, 'HybridSearchArgs', 'json');
        }

        if (null !== $tmpReq->recallWindow) {
            $request->recallWindowShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->recallWindow, 'RecallWindow', 'json');
        }

        $query = [];
        if (null !== $request->collection) {
            @$query['Collection'] = $request->collection;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->fileName) {
            @$query['FileName'] = $request->fileName;
        }

        if (null !== $request->fileUrl) {
            @$query['FileUrl'] = $request->fileUrl;
        }

        if (null !== $request->filter) {
            @$query['Filter'] = $request->filter;
        }

        if (null !== $request->graphEnhance) {
            @$query['GraphEnhance'] = $request->graphEnhance;
        }

        if (null !== $request->graphSearchArgsShrink) {
            @$query['GraphSearchArgs'] = $request->graphSearchArgsShrink;
        }

        if (null !== $request->hybridSearch) {
            @$query['HybridSearch'] = $request->hybridSearch;
        }

        if (null !== $request->hybridSearchArgsShrink) {
            @$query['HybridSearchArgs'] = $request->hybridSearchArgsShrink;
        }

        if (null !== $request->includeFileUrl) {
            @$query['IncludeFileUrl'] = $request->includeFileUrl;
        }

        if (null !== $request->includeMetadataFields) {
            @$query['IncludeMetadataFields'] = $request->includeMetadataFields;
        }

        if (null !== $request->includeVector) {
            @$query['IncludeVector'] = $request->includeVector;
        }

        if (null !== $request->metrics) {
            @$query['Metrics'] = $request->metrics;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->namespacePassword) {
            @$query['NamespacePassword'] = $request->namespacePassword;
        }

        if (null !== $request->offset) {
            @$query['Offset'] = $request->offset;
        }

        if (null !== $request->orderBy) {
            @$query['OrderBy'] = $request->orderBy;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->recallWindowShrink) {
            @$query['RecallWindow'] = $request->recallWindowShrink;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->rerankFactor) {
            @$query['RerankFactor'] = $request->rerankFactor;
        }

        if (null !== $request->topK) {
            @$query['TopK'] = $request->topK;
        }

        if (null !== $request->urlExpiration) {
            @$query['UrlExpiration'] = $request->urlExpiration;
        }

        if (null !== $request->useFullTextRetrieval) {
            @$query['UseFullTextRetrieval'] = $request->useFullTextRetrieval;
        }

        $body = [];
        if (null !== $request->content) {
            @$body['Content'] = $request->content;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryContent',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query.
     *
     * @param Request - QueryContentRequest
     *
     * @returns QueryContentResponse
     *
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
     * @param QueryContentAdvanceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryContentResponse
     */
    public function queryContentAdvance($request, $runtime)
    {
        // Step 0: init client
        if (null === $this->_credential) {
            throw new ClientException([
                'code' => 'InvalidCredentials',
                'message' => 'Please set up the credentials correctly. If you are setting them through environment variables, please ensure that ALIBABA_CLOUD_ACCESS_KEY_ID and ALIBABA_CLOUD_ACCESS_KEY_SECRET are set correctly. See https://help.aliyun.com/zh/sdk/developer-reference/configure-the-alibaba-cloud-accesskey-environment-variable-on-linux-macos-and-windows-systems for more details.',
            ]);
        }

        $credentialModel = $this->_credential->getCredential();
        $accessKeyId = $credentialModel->accessKeyId;
        $accessKeySecret = $credentialModel->accessKeySecret;
        $securityToken = $credentialModel->securityToken;
        $credentialType = $credentialModel->type;
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint || '' == $openPlatformEndpoint) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }

        if (null === $credentialType) {
            $credentialType = 'access_key';
        }

        $authConfig = new Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken' => $securityToken,
            'type' => $credentialType,
            'endpoint' => $openPlatformEndpoint,
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $authClient = new OpenApiClient($authConfig);
        $authRequest = [
            'Product' => 'gpdb',
            'RegionId' => $this->_regionId,
        ];
        $authReq = new OpenApiRequest([
            'query' => Utils::query($authRequest),
        ]);
        $authParams = new Params([
            'action' => 'AuthorizeFileUpload',
            'version' => '2019-12-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        $authResponse = [];
        $fileObj = new FileField([]);
        $ossHeader = [];
        $tmpBody = [];
        $useAccelerate = false;
        $authResponseBody = [];
        $queryContentReq = new QueryContentRequest([]);
        Utils::convert($request, $queryContentReq);
        if (null !== $request->fileUrlObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->fileUrlObject,
                'contentType' => '',
            ]);
            $ossHeader = [
                'host' => '' . @$authResponseBody['Bucket'] . '.' . Utils::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType) . '',
                'OSSAccessKeyId' => @$authResponseBody['AccessKeyId'],
                'policy' => @$authResponseBody['EncodedPolicy'],
                'Signature' => @$authResponseBody['Signature'],
                'key' => @$authResponseBody['ObjectKey'],
                'file' => $fileObj,
                'success_action_status' => '201',
            ];
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader, $runtime);
            $queryContentReq->fileUrl = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->queryContentWithOptions($queryContentReq, $runtime);
    }

    /**
     * Retrieves vectors and metadata from multiple specified document collections using natural language queries, then merge and return the results from all retrieval paths.
     *
     * @param tmpReq - QueryKnowledgeBasesContentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryKnowledgeBasesContentResponse
     *
     * @param QueryKnowledgeBasesContentRequest $tmpReq
     * @param RuntimeOptions                    $runtime
     *
     * @return QueryKnowledgeBasesContentResponse
     */
    public function queryKnowledgeBasesContentWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new QueryKnowledgeBasesContentShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->mergeMethodArgs) {
            $request->mergeMethodArgsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->mergeMethodArgs, 'MergeMethodArgs', 'json');
        }

        if (null !== $tmpReq->sourceCollection) {
            $request->sourceCollectionShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sourceCollection, 'SourceCollection', 'json');
        }

        $query = [];
        if (null !== $request->content) {
            @$query['Content'] = $request->content;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->mergeMethod) {
            @$query['MergeMethod'] = $request->mergeMethod;
        }

        if (null !== $request->mergeMethodArgsShrink) {
            @$query['MergeMethodArgs'] = $request->mergeMethodArgsShrink;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->rerankFactor) {
            @$query['RerankFactor'] = $request->rerankFactor;
        }

        if (null !== $request->sourceCollectionShrink) {
            @$query['SourceCollection'] = $request->sourceCollectionShrink;
        }

        if (null !== $request->topK) {
            @$query['TopK'] = $request->topK;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryKnowledgeBasesContent',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryKnowledgeBasesContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves vectors and metadata from multiple specified document collections using natural language queries, then merge and return the results from all retrieval paths.
     *
     * @param Request - QueryKnowledgeBasesContentRequest
     *
     * @returns QueryKnowledgeBasesContentResponse
     *
     * @param QueryKnowledgeBasesContentRequest $request
     *
     * @return QueryKnowledgeBasesContentResponse
     */
    public function queryKnowledgeBasesContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryKnowledgeBasesContentWithOptions($request, $runtime);
    }

    /**
     * Rebalances an AnalyticDB for PostgreSQL instance.
     *
     * @param Request - RebalanceDBInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RebalanceDBInstanceResponse
     *
     * @param RebalanceDBInstanceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RebalanceDBInstanceResponse
     */
    public function rebalanceDBInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RebalanceDBInstance',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RebalanceDBInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Rebalances an AnalyticDB for PostgreSQL instance.
     *
     * @param Request - RebalanceDBInstanceRequest
     *
     * @returns RebalanceDBInstanceResponse
     *
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
     * Releases the public endpoint of an AnalyticDB for PostgreSQL instance.
     *
     * @param Request - ReleaseInstancePublicConnectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReleaseInstancePublicConnectionResponse
     *
     * @param ReleaseInstancePublicConnectionRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ReleaseInstancePublicConnectionResponse
     */
    public function releaseInstancePublicConnectionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addressType) {
            @$query['AddressType'] = $request->addressType;
        }

        if (null !== $request->currentConnectionString) {
            @$query['CurrentConnectionString'] = $request->currentConnectionString;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ReleaseInstancePublicConnection',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReleaseInstancePublicConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Releases the public endpoint of an AnalyticDB for PostgreSQL instance.
     *
     * @param Request - ReleaseInstancePublicConnectionRequest
     *
     * @returns ReleaseInstancePublicConnectionResponse
     *
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
     * Score and re-order documents using a model.
     *
     * @param tmpReq - RerankRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RerankResponse
     *
     * @param RerankRequest  $tmpReq
     * @param RuntimeOptions $runtime
     *
     * @return RerankResponse
     */
    public function rerankWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new RerankShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->documents) {
            $request->documentsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->documents, 'Documents', 'json');
        }

        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->documentsShrink) {
            @$body['Documents'] = $request->documentsShrink;
        }

        if (null !== $request->maxChunksPerDoc) {
            @$body['MaxChunksPerDoc'] = $request->maxChunksPerDoc;
        }

        if (null !== $request->model) {
            @$body['Model'] = $request->model;
        }

        if (null !== $request->query) {
            @$body['Query'] = $request->query;
        }

        if (null !== $request->returnDocuments) {
            @$body['ReturnDocuments'] = $request->returnDocuments;
        }

        if (null !== $request->topK) {
            @$body['TopK'] = $request->topK;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'Rerank',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RerankResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Score and re-order documents using a model.
     *
     * @param Request - RerankRequest
     *
     * @returns RerankResponse
     *
     * @param RerankRequest $request
     *
     * @return RerankResponse
     */
    public function rerank($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rerankWithOptions($request, $runtime);
    }

    /**
     * Resets the password of a database account for an AnalyticDB for PostgreSQL instance.
     *
     * @param Request - ResetAccountPasswordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResetAccountPasswordResponse
     *
     * @param ResetAccountPasswordRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ResetAccountPasswordResponse
     */
    public function resetAccountPasswordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountName) {
            @$query['AccountName'] = $request->accountName;
        }

        if (null !== $request->accountPassword) {
            @$query['AccountPassword'] = $request->accountPassword;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ResetAccountPassword',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResetAccountPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Resets the password of a database account for an AnalyticDB for PostgreSQL instance.
     *
     * @param Request - ResetAccountPasswordRequest
     *
     * @returns ResetAccountPasswordResponse
     *
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
     * Resets the IMV statistics.
     *
     * @param Request - ResetIMVMonitorDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResetIMVMonitorDataResponse
     *
     * @param ResetIMVMonitorDataRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ResetIMVMonitorDataResponse
     */
    public function resetIMVMonitorDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->database) {
            @$query['Database'] = $request->database;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ResetIMVMonitorData',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResetIMVMonitorDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Resets the IMV statistics.
     *
     * @param Request - ResetIMVMonitorDataRequest
     *
     * @returns ResetIMVMonitorDataResponse
     *
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
     * Reset the password of a Supabase database.
     *
     * @remarks
     * Call this API to reset the password of the Supabase database.
     *
     * @param Request - ResetSupabaseProjectPasswordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResetSupabaseProjectPasswordResponse
     *
     * @param ResetSupabaseProjectPasswordRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ResetSupabaseProjectPasswordResponse
     */
    public function resetSupabaseProjectPasswordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountPassword) {
            @$query['AccountPassword'] = $request->accountPassword;
        }

        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ResetSupabaseProjectPassword',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResetSupabaseProjectPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Reset the password of a Supabase database.
     *
     * @remarks
     * Call this API to reset the password of the Supabase database.
     *
     * @param Request - ResetSupabaseProjectPasswordRequest
     *
     * @returns ResetSupabaseProjectPasswordResponse
     *
     * @param ResetSupabaseProjectPasswordRequest $request
     *
     * @return ResetSupabaseProjectPasswordResponse
     */
    public function resetSupabaseProjectPassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetSupabaseProjectPasswordWithOptions($request, $runtime);
    }

    /**
     * Restarts an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     * A restart takes about 3 to 30 minutes. During the restart, services are unavailable. We recommend that you restart the instance during off-peak hours. After the instance is restarted and enters the running state, you can access the instance.
     * ## Limit
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered and may affect your business. We recommend that you take note of the limit when you call this operation.
     *
     * @param Request - RestartDBInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RestartDBInstanceResponse
     *
     * @param RestartDBInstanceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return RestartDBInstanceResponse
     */
    public function restartDBInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RestartDBInstance',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RestartDBInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Restarts an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     * A restart takes about 3 to 30 minutes. During the restart, services are unavailable. We recommend that you restart the instance during off-peak hours. After the instance is restarted and enters the running state, you can access the instance.
     * ## Limit
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered and may affect your business. We recommend that you take note of the limit when you call this operation.
     *
     * @param Request - RestartDBInstanceRequest
     *
     * @returns RestartDBInstanceResponse
     *
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
     * Resumes data redistribution.
     *
     * @param Request - ResumeDataRedistributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResumeDataRedistributeResponse
     *
     * @param ResumeDataRedistributeRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ResumeDataRedistributeResponse
     */
    public function resumeDataRedistributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ResumeDataRedistribute',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResumeDataRedistributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Resumes data redistribution.
     *
     * @param Request - ResumeDataRedistributeRequest
     *
     * @returns ResumeDataRedistributeResponse
     *
     * @param ResumeDataRedistributeRequest $request
     *
     * @return ResumeDataRedistributeResponse
     */
    public function resumeDataRedistribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resumeDataRedistributeWithOptions($request, $runtime);
    }

    /**
     * Resumes an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     * You can call this operation to resume an AnalyticDB for PostgreSQL instance that is in the **Paused** state.
     * This operation is available only for AnalyticDB for PostgreSQL instances in Serverless mode that run V1.0.2.1 or later. For more information about how to view and update the minor engine version of an instance, see [View the minor engine version](https://help.aliyun.com/document_detail/277424.html) and [Update the minor engine version](https://help.aliyun.com/document_detail/139271.html).
     * >  Before you call this operation, make sure that you are familiar with the billing methods and pricing of AnalyticDB for PostgreSQL instances. For more information, see [Billing methods](https://help.aliyun.com/document_detail/35406.html) and [AnalyticDB for PostgreSQL pricing](https://www.alibabacloud.com/zh/product/hybriddb-postgresql/pricing).
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param Request - ResumeInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResumeInstanceResponse
     *
     * @param ResumeInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ResumeInstanceResponse
     */
    public function resumeInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ResumeInstance',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResumeInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Resumes an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     * You can call this operation to resume an AnalyticDB for PostgreSQL instance that is in the **Paused** state.
     * This operation is available only for AnalyticDB for PostgreSQL instances in Serverless mode that run V1.0.2.1 or later. For more information about how to view and update the minor engine version of an instance, see [View the minor engine version](https://help.aliyun.com/document_detail/277424.html) and [Update the minor engine version](https://help.aliyun.com/document_detail/139271.html).
     * >  Before you call this operation, make sure that you are familiar with the billing methods and pricing of AnalyticDB for PostgreSQL instances. For more information, see [Billing methods](https://help.aliyun.com/document_detail/35406.html) and [AnalyticDB for PostgreSQL pricing](https://www.alibabacloud.com/zh/product/hybriddb-postgresql/pricing).
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param Request - ResumeInstanceRequest
     *
     * @returns ResumeInstanceResponse
     *
     * @param ResumeInstanceRequest $request
     *
     * @return ResumeInstanceResponse
     */
    public function resumeInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resumeInstanceWithOptions($request, $runtime);
    }

    /**
     * Enables or disables a plan for an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     * You can call this operation to enable or disable a specified plan. The plan management feature is supported only for AnalyticDB for PostgreSQL instances in Serverless mode.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param Request - SetDBInstancePlanStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetDBInstancePlanStatusResponse
     *
     * @param SetDBInstancePlanStatusRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return SetDBInstancePlanStatusResponse
     */
    public function setDBInstancePlanStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->planId) {
            @$query['PlanId'] = $request->planId;
        }

        if (null !== $request->planStatus) {
            @$query['PlanStatus'] = $request->planStatus;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetDBInstancePlanStatus',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetDBInstancePlanStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables or disables a plan for an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     * You can call this operation to enable or disable a specified plan. The plan management feature is supported only for AnalyticDB for PostgreSQL instances in Serverless mode.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param Request - SetDBInstancePlanStatusRequest
     *
     * @returns SetDBInstancePlanStatusResponse
     *
     * @param SetDBInstancePlanStatusRequest $request
     *
     * @return SetDBInstancePlanStatusResponse
     */
    public function setDBInstancePlanStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDBInstancePlanStatusWithOptions($request, $runtime);
    }

    /**
     * Enables or disables data sharing for an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     * This operation is called to enable or disable data sharing for an AnalyticDB for PostgreSQL instance in Serverless mode.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation.
     *
     * @param tmpReq - SetDataShareInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetDataShareInstanceResponse
     *
     * @param SetDataShareInstanceRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return SetDataShareInstanceResponse
     */
    public function setDataShareInstanceWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SetDataShareInstanceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->instanceList) {
            $request->instanceListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->instanceList, 'InstanceList', 'json');
        }

        $query = [];
        if (null !== $request->instanceListShrink) {
            @$query['InstanceList'] = $request->instanceListShrink;
        }

        if (null !== $request->operationType) {
            @$query['OperationType'] = $request->operationType;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetDataShareInstance',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetDataShareInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables or disables data sharing for an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     * This operation is called to enable or disable data sharing for an AnalyticDB for PostgreSQL instance in Serverless mode.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation.
     *
     * @param Request - SetDataShareInstanceRequest
     *
     * @returns SetDataShareInstanceResponse
     *
     * @param SetDataShareInstanceRequest $request
     *
     * @return SetDataShareInstanceResponse
     */
    public function setDataShareInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDataShareInstanceWithOptions($request, $runtime);
    }

    /**
     * Switches between the internal and public endpoints of an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     * This operation is not supported for AnalyticDB for PostgreSQL instances in elastic storage mode or Serverless mode.
     *
     * @param Request - SwitchDBInstanceNetTypeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SwitchDBInstanceNetTypeResponse
     *
     * @param SwitchDBInstanceNetTypeRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return SwitchDBInstanceNetTypeResponse
     */
    public function switchDBInstanceNetTypeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->connectionStringPrefix) {
            @$query['ConnectionStringPrefix'] = $request->connectionStringPrefix;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->port) {
            @$query['Port'] = $request->port;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SwitchDBInstanceNetType',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SwitchDBInstanceNetTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Switches between the internal and public endpoints of an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     * This operation is not supported for AnalyticDB for PostgreSQL instances in elastic storage mode or Serverless mode.
     *
     * @param Request - SwitchDBInstanceNetTypeRequest
     *
     * @returns SwitchDBInstanceNetTypeResponse
     *
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
     * Creates and adds tags to AnalyticDB for PostgreSQL instances.
     *
     * @param Request - TagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TagResourcesResponse
     *
     * @param TagResourcesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TagResources',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates and adds tags to AnalyticDB for PostgreSQL instances.
     *
     * @param Request - TagResourcesRequest
     *
     * @returns TagResourcesResponse
     *
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
     * Generates text embeddings using an embedding model.
     *
     * @param tmpReq - TextEmbeddingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TextEmbeddingResponse
     *
     * @param TextEmbeddingRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return TextEmbeddingResponse
     */
    public function textEmbeddingWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new TextEmbeddingShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->input) {
            $request->inputShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->input, 'Input', 'json');
        }

        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->dimension) {
            @$query['Dimension'] = $request->dimension;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->inputShrink) {
            @$body['Input'] = $request->inputShrink;
        }

        if (null !== $request->model) {
            @$body['Model'] = $request->model;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'TextEmbedding',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TextEmbeddingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Generates text embeddings using an embedding model.
     *
     * @param Request - TextEmbeddingRequest
     *
     * @returns TextEmbeddingResponse
     *
     * @param TextEmbeddingRequest $request
     *
     * @return TextEmbeddingResponse
     */
    public function textEmbedding($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->textEmbeddingWithOptions($request, $runtime);
    }

    /**
     * Unbinds database roles from a resource group.
     *
     * @param tmpReq - UnbindDBResourceGroupWithRoleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnbindDBResourceGroupWithRoleResponse
     *
     * @param UnbindDBResourceGroupWithRoleRequest $tmpReq
     * @param RuntimeOptions                       $runtime
     *
     * @return UnbindDBResourceGroupWithRoleResponse
     */
    public function unbindDBResourceGroupWithRoleWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UnbindDBResourceGroupWithRoleShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->roleList) {
            $request->roleListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->roleList, 'RoleList', 'simple');
        }

        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceGroupName) {
            @$query['ResourceGroupName'] = $request->resourceGroupName;
        }

        if (null !== $request->roleListShrink) {
            @$query['RoleList'] = $request->roleListShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UnbindDBResourceGroupWithRole',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnbindDBResourceGroupWithRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Unbinds database roles from a resource group.
     *
     * @param Request - UnbindDBResourceGroupWithRoleRequest
     *
     * @returns UnbindDBResourceGroupWithRoleResponse
     *
     * @param UnbindDBResourceGroupWithRoleRequest $request
     *
     * @return UnbindDBResourceGroupWithRoleResponse
     */
    public function unbindDBResourceGroupWithRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindDBResourceGroupWithRoleWithOptions($request, $runtime);
    }

    /**
     * Releases a sample dataset from an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     * You can call this operation to release a sample dataset from an AnalyticDB for PostgreSQL instance. You must have already loaded the sample dataset.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param Request - UnloadSampleDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnloadSampleDataResponse
     *
     * @param UnloadSampleDataRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UnloadSampleDataResponse
     */
    public function unloadSampleDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UnloadSampleData',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnloadSampleDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Releases a sample dataset from an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     * You can call this operation to release a sample dataset from an AnalyticDB for PostgreSQL instance. You must have already loaded the sample dataset.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param Request - UnloadSampleDataRequest
     *
     * @returns UnloadSampleDataResponse
     *
     * @param UnloadSampleDataRequest $request
     *
     * @return UnloadSampleDataResponse
     */
    public function unloadSampleData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unloadSampleDataWithOptions($request, $runtime);
    }

    /**
     * Remove resource tags.
     *
     * @param Request - UntagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UntagResourcesResponse
     *
     * @param UntagResourcesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->all) {
            @$query['All'] = $request->all;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tagKey) {
            @$query['TagKey'] = $request->tagKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UntagResources',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Remove resource tags.
     *
     * @param Request - UntagResourcesRequest
     *
     * @returns UntagResourcesResponse
     *
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
     * Update Metadata of Collection Data.
     *
     * @param tmpReq - UpdateCollectionDataMetadataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateCollectionDataMetadataResponse
     *
     * @param UpdateCollectionDataMetadataRequest $tmpReq
     * @param RuntimeOptions                      $runtime
     *
     * @return UpdateCollectionDataMetadataResponse
     */
    public function updateCollectionDataMetadataWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateCollectionDataMetadataShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->ids) {
            $request->idsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ids, 'Ids', 'json');
        }

        if (null !== $tmpReq->metadata) {
            $request->metadataShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->metadata, 'Metadata', 'json');
        }

        $query = [];
        if (null !== $request->collection) {
            @$query['Collection'] = $request->collection;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->filter) {
            @$query['Filter'] = $request->filter;
        }

        if (null !== $request->idsShrink) {
            @$query['Ids'] = $request->idsShrink;
        }

        if (null !== $request->metadataShrink) {
            @$query['Metadata'] = $request->metadataShrink;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->namespacePassword) {
            @$query['NamespacePassword'] = $request->namespacePassword;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateCollectionDataMetadata',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateCollectionDataMetadataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Update Metadata of Collection Data.
     *
     * @param Request - UpdateCollectionDataMetadataRequest
     *
     * @returns UpdateCollectionDataMetadataResponse
     *
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
     * Modifies a plan for an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     * You can call this operation to modify a plan for an AnalyticDB for PostgreSQL instance in Serverless mode. For example, you can modify a plan for periodically pausing and resuming an instance or scaling an instance.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param Request - UpdateDBInstancePlanRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDBInstancePlanResponse
     *
     * @param UpdateDBInstancePlanRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateDBInstancePlanResponse
     */
    public function updateDBInstancePlanWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->planConfig) {
            @$query['PlanConfig'] = $request->planConfig;
        }

        if (null !== $request->planDesc) {
            @$query['PlanDesc'] = $request->planDesc;
        }

        if (null !== $request->planEndDate) {
            @$query['PlanEndDate'] = $request->planEndDate;
        }

        if (null !== $request->planId) {
            @$query['PlanId'] = $request->planId;
        }

        if (null !== $request->planName) {
            @$query['PlanName'] = $request->planName;
        }

        if (null !== $request->planStartDate) {
            @$query['PlanStartDate'] = $request->planStartDate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateDBInstancePlan',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateDBInstancePlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a plan for an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     * You can call this operation to modify a plan for an AnalyticDB for PostgreSQL instance in Serverless mode. For example, you can modify a plan for periodically pausing and resuming an instance or scaling an instance.
     * ## Limits
     * You can call this operation up to 1,000 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param Request - UpdateDBInstancePlanRequest
     *
     * @returns UpdateDBInstancePlanResponse
     *
     * @param UpdateDBInstancePlanRequest $request
     *
     * @return UpdateDBInstancePlanResponse
     */
    public function updateDBInstancePlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDBInstancePlanWithOptions($request, $runtime);
    }

    /**
     * Changes the configurations of an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     * This operation is not available for instances in reserved storage mode.
     * Before you call this operation, make sure that you are familiar with the billing of AnalyticDB for PostgreSQL. For more information, see [Billing methods](https://help.aliyun.com/document_detail/35406.html) and [AnalyticDB for PostgreSQL pricing](https://www.alibabacloud.com/zh/product/hybriddb-postgresql/pricing).
     *
     * @param Request - UpgradeDBInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpgradeDBInstanceResponse
     *
     * @param UpgradeDBInstanceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpgradeDBInstanceResponse
     */
    public function upgradeDBInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cacheStorageSize) {
            @$query['CacheStorageSize'] = $request->cacheStorageSize;
        }

        if (null !== $request->DBInstanceClass) {
            @$query['DBInstanceClass'] = $request->DBInstanceClass;
        }

        if (null !== $request->DBInstanceGroupCount) {
            @$query['DBInstanceGroupCount'] = $request->DBInstanceGroupCount;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->instanceSpec) {
            @$query['InstanceSpec'] = $request->instanceSpec;
        }

        if (null !== $request->masterNodeNum) {
            @$query['MasterNodeNum'] = $request->masterNodeNum;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->payType) {
            @$query['PayType'] = $request->payType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->segDiskPerformanceLevel) {
            @$query['SegDiskPerformanceLevel'] = $request->segDiskPerformanceLevel;
        }

        if (null !== $request->segNodeNum) {
            @$query['SegNodeNum'] = $request->segNodeNum;
        }

        if (null !== $request->segStorageType) {
            @$query['SegStorageType'] = $request->segStorageType;
        }

        if (null !== $request->serverlessResource) {
            @$query['ServerlessResource'] = $request->serverlessResource;
        }

        if (null !== $request->storageSize) {
            @$query['StorageSize'] = $request->storageSize;
        }

        if (null !== $request->upgradeType) {
            @$query['UpgradeType'] = $request->upgradeType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpgradeDBInstance',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpgradeDBInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the configurations of an AnalyticDB for PostgreSQL instance.
     *
     * @remarks
     * This operation is not available for instances in reserved storage mode.
     * Before you call this operation, make sure that you are familiar with the billing of AnalyticDB for PostgreSQL. For more information, see [Billing methods](https://help.aliyun.com/document_detail/35406.html) and [AnalyticDB for PostgreSQL pricing](https://www.alibabacloud.com/zh/product/hybriddb-postgresql/pricing).
     *
     * @param Request - UpgradeDBInstanceRequest
     *
     * @returns UpgradeDBInstanceResponse
     *
     * @param UpgradeDBInstanceRequest $request
     *
     * @return UpgradeDBInstanceResponse
     */
    public function upgradeDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeDBInstanceWithOptions($request, $runtime);
    }

    /**
     * Upgrades the minor version of an AnalyticDB for PostgreSQL instance.
     *
     * @param Request - UpgradeDBVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpgradeDBVersionResponse
     *
     * @param UpgradeDBVersionRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpgradeDBVersionResponse
     */
    public function upgradeDBVersionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->majorVersion) {
            @$query['MajorVersion'] = $request->majorVersion;
        }

        if (null !== $request->minorVersion) {
            @$query['MinorVersion'] = $request->minorVersion;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->switchTime) {
            @$query['SwitchTime'] = $request->switchTime;
        }

        if (null !== $request->switchTimeMode) {
            @$query['SwitchTimeMode'] = $request->switchTimeMode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpgradeDBVersion',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpgradeDBVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Upgrades the minor version of an AnalyticDB for PostgreSQL instance.
     *
     * @param Request - UpgradeDBVersionRequest
     *
     * @returns UpgradeDBVersionResponse
     *
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
     * Updates extensions.
     *
     * @param Request - UpgradeExtensionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpgradeExtensionsResponse
     *
     * @param UpgradeExtensionsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpgradeExtensionsResponse
     */
    public function upgradeExtensionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->databaseName) {
            @$query['DatabaseName'] = $request->databaseName;
        }

        if (null !== $request->extensions) {
            @$query['Extensions'] = $request->extensions;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpgradeExtensions',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpgradeExtensionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates extensions.
     *
     * @param Request - UpgradeExtensionsRequest
     *
     * @returns UpgradeExtensionsResponse
     *
     * @param UpgradeExtensionsRequest $request
     *
     * @return UpgradeExtensionsResponse
     */
    public function upgradeExtensions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeExtensionsWithOptions($request, $runtime);
    }

    /**
     * Asynchronous Document Upload.
     *
     * @remarks
     * The server loads and chunks a document based on the file extension, performs vectorization by using the embedding model that is specified when you call the CreateDocumentCollection operation, and then writes the document to the specified document collection. This operation supports multi-modal embedding for various formats of text and images.
     * Related operations:
     * *   You can call the GetUploadDocumentJob operation to query the progress and result of a document upload job.
     * *   You can call the CancelUploadDocumentJob operation to cancel a document upload job.
     * >
     * *   After a document upload request is submitted, the request is queued for processing. Up to 20 documents in the Pending and Running states can be processed within a Resource Access Management (RAM) user or Alibaba Cloud account.
     * *   A text document can be split into up to 100,000 chunks.
     * *   If a document collection uses the OnePeace model, each RAM user or Alibaba Cloud account can upload and query up to 10,000 images.
     *
     * @param tmpReq - UploadDocumentAsyncRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UploadDocumentAsyncResponse
     *
     * @param UploadDocumentAsyncRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return UploadDocumentAsyncResponse
     */
    public function uploadDocumentAsyncWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UploadDocumentAsyncShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->metadata) {
            $request->metadataShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->metadata, 'Metadata', 'json');
        }

        if (null !== $tmpReq->separators) {
            $request->separatorsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->separators, 'Separators', 'json');
        }

        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->chunkOverlap) {
            @$body['ChunkOverlap'] = $request->chunkOverlap;
        }

        if (null !== $request->chunkSize) {
            @$body['ChunkSize'] = $request->chunkSize;
        }

        if (null !== $request->collection) {
            @$body['Collection'] = $request->collection;
        }

        if (null !== $request->documentLoaderName) {
            @$body['DocumentLoaderName'] = $request->documentLoaderName;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->fileName) {
            @$body['FileName'] = $request->fileName;
        }

        if (null !== $request->fileUrl) {
            @$body['FileUrl'] = $request->fileUrl;
        }

        if (null !== $request->metadataShrink) {
            @$body['Metadata'] = $request->metadataShrink;
        }

        if (null !== $request->namespace) {
            @$body['Namespace'] = $request->namespace;
        }

        if (null !== $request->namespacePassword) {
            @$body['NamespacePassword'] = $request->namespacePassword;
        }

        if (null !== $request->separatorsShrink) {
            @$body['Separators'] = $request->separatorsShrink;
        }

        if (null !== $request->splitterModel) {
            @$body['SplitterModel'] = $request->splitterModel;
        }

        if (null !== $request->textSplitterName) {
            @$body['TextSplitterName'] = $request->textSplitterName;
        }

        if (null !== $request->vlEnhance) {
            @$body['VlEnhance'] = $request->vlEnhance;
        }

        if (null !== $request->zhTitleEnhance) {
            @$body['ZhTitleEnhance'] = $request->zhTitleEnhance;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UploadDocumentAsync',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UploadDocumentAsyncResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Asynchronous Document Upload.
     *
     * @remarks
     * The server loads and chunks a document based on the file extension, performs vectorization by using the embedding model that is specified when you call the CreateDocumentCollection operation, and then writes the document to the specified document collection. This operation supports multi-modal embedding for various formats of text and images.
     * Related operations:
     * *   You can call the GetUploadDocumentJob operation to query the progress and result of a document upload job.
     * *   You can call the CancelUploadDocumentJob operation to cancel a document upload job.
     * >
     * *   After a document upload request is submitted, the request is queued for processing. Up to 20 documents in the Pending and Running states can be processed within a Resource Access Management (RAM) user or Alibaba Cloud account.
     * *   A text document can be split into up to 100,000 chunks.
     * *   If a document collection uses the OnePeace model, each RAM user or Alibaba Cloud account can upload and query up to 10,000 images.
     *
     * @param Request - UploadDocumentAsyncRequest
     *
     * @returns UploadDocumentAsyncResponse
     *
     * @param UploadDocumentAsyncRequest $request
     *
     * @return UploadDocumentAsyncResponse
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
        if (null === $this->_credential) {
            throw new ClientException([
                'code' => 'InvalidCredentials',
                'message' => 'Please set up the credentials correctly. If you are setting them through environment variables, please ensure that ALIBABA_CLOUD_ACCESS_KEY_ID and ALIBABA_CLOUD_ACCESS_KEY_SECRET are set correctly. See https://help.aliyun.com/zh/sdk/developer-reference/configure-the-alibaba-cloud-accesskey-environment-variable-on-linux-macos-and-windows-systems for more details.',
            ]);
        }

        $credentialModel = $this->_credential->getCredential();
        $accessKeyId = $credentialModel->accessKeyId;
        $accessKeySecret = $credentialModel->accessKeySecret;
        $securityToken = $credentialModel->securityToken;
        $credentialType = $credentialModel->type;
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint || '' == $openPlatformEndpoint) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }

        if (null === $credentialType) {
            $credentialType = 'access_key';
        }

        $authConfig = new Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken' => $securityToken,
            'type' => $credentialType,
            'endpoint' => $openPlatformEndpoint,
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $authClient = new OpenApiClient($authConfig);
        $authRequest = [
            'Product' => 'gpdb',
            'RegionId' => $this->_regionId,
        ];
        $authReq = new OpenApiRequest([
            'query' => Utils::query($authRequest),
        ]);
        $authParams = new Params([
            'action' => 'AuthorizeFileUpload',
            'version' => '2019-12-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        $authResponse = [];
        $fileObj = new FileField([]);
        $ossHeader = [];
        $tmpBody = [];
        $useAccelerate = false;
        $authResponseBody = [];
        $uploadDocumentAsyncReq = new UploadDocumentAsyncRequest([]);
        Utils::convert($request, $uploadDocumentAsyncReq);
        if (null !== $request->fileUrlObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->fileUrlObject,
                'contentType' => '',
            ]);
            $ossHeader = [
                'host' => '' . @$authResponseBody['Bucket'] . '.' . Utils::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType) . '',
                'OSSAccessKeyId' => @$authResponseBody['AccessKeyId'],
                'policy' => @$authResponseBody['EncodedPolicy'],
                'Signature' => @$authResponseBody['Signature'],
                'key' => @$authResponseBody['ObjectKey'],
                'file' => $fileObj,
                'success_action_status' => '201',
            ];
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader, $runtime);
            $uploadDocumentAsyncReq->fileUrl = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->uploadDocumentAsyncWithOptions($uploadDocumentAsyncReq, $runtime);
    }

    /**
     * Splits a document into chunks and uploads the vectorized chunks to a document collection.
     *
     * @remarks
     * The vector algorithm that is used for the document is specified when you call the CreateDocumentCollection operation.
     *
     * @param tmpReq - UpsertChunksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpsertChunksResponse
     *
     * @param UpsertChunksRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return UpsertChunksResponse
     */
    public function upsertChunksWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpsertChunksShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->textChunks) {
            $request->textChunksShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->textChunks, 'TextChunks', 'json');
        }

        $query = [];
        if (null !== $request->allowInsertWithFilter) {
            @$query['AllowInsertWithFilter'] = $request->allowInsertWithFilter;
        }

        if (null !== $request->collection) {
            @$query['Collection'] = $request->collection;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->fileName) {
            @$query['FileName'] = $request->fileName;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->namespacePassword) {
            @$query['NamespacePassword'] = $request->namespacePassword;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->shouldReplaceFile) {
            @$query['ShouldReplaceFile'] = $request->shouldReplaceFile;
        }

        $body = [];
        if (null !== $request->textChunksShrink) {
            @$body['TextChunks'] = $request->textChunksShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpsertChunks',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpsertChunksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Splits a document into chunks and uploads the vectorized chunks to a document collection.
     *
     * @remarks
     * The vector algorithm that is used for the document is specified when you call the CreateDocumentCollection operation.
     *
     * @param Request - UpsertChunksRequest
     *
     * @returns UpsertChunksResponse
     *
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
     * Uploads vector data to a vector collection.
     *
     * @param tmpReq - UpsertCollectionDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpsertCollectionDataResponse
     *
     * @param UpsertCollectionDataRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return UpsertCollectionDataResponse
     */
    public function upsertCollectionDataWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpsertCollectionDataShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->rows) {
            $request->rowsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->rows, 'Rows', 'json');
        }

        $query = [];
        if (null !== $request->collection) {
            @$query['Collection'] = $request->collection;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->namespacePassword) {
            @$query['NamespacePassword'] = $request->namespacePassword;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $body = [];
        if (null !== $request->rowsShrink) {
            @$body['Rows'] = $request->rowsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpsertCollectionData',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpsertCollectionDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Uploads vector data to a vector collection.
     *
     * @param Request - UpsertCollectionDataRequest
     *
     * @returns UpsertCollectionDataResponse
     *
     * @param UpsertCollectionDataRequest $request
     *
     * @return UpsertCollectionDataResponse
     */
    public function upsertCollectionData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upsertCollectionDataWithOptions($request, $runtime);
    }

    /**
     * Uploads vector data in an asynchronous manner by using an on-premises file or a password-free Internet-accessible file URL. The vector data can be up to 200 MB in size.
     *
     * @remarks
     * This operation is the asynchronous operation of `UpsertCollectionData`. The `UpsertCollectionData` operation supports up to 10 MB of data, and this operation supports up to 200 MB of data.
     * >  Related operations:
     * *   You can call the GetUpsertCollectionDataJob operation to query the progress and result of an upload job.
     * *   You can call the CancelUpsertCollectionDataJob operation to cancel an upload job.
     * > You can upload data for the same collection only in a serial manner.
     *
     * @param Request - UpsertCollectionDataAsyncRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpsertCollectionDataAsyncResponse
     *
     * @param UpsertCollectionDataAsyncRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return UpsertCollectionDataAsyncResponse
     */
    public function upsertCollectionDataAsyncWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $body = [];
        if (null !== $request->collection) {
            @$body['Collection'] = $request->collection;
        }

        if (null !== $request->fileUrl) {
            @$body['FileUrl'] = $request->fileUrl;
        }

        if (null !== $request->namespace) {
            @$body['Namespace'] = $request->namespace;
        }

        if (null !== $request->namespacePassword) {
            @$body['NamespacePassword'] = $request->namespacePassword;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpsertCollectionDataAsync',
            'version' => '2016-05-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpsertCollectionDataAsyncResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Uploads vector data in an asynchronous manner by using an on-premises file or a password-free Internet-accessible file URL. The vector data can be up to 200 MB in size.
     *
     * @remarks
     * This operation is the asynchronous operation of `UpsertCollectionData`. The `UpsertCollectionData` operation supports up to 10 MB of data, and this operation supports up to 200 MB of data.
     * >  Related operations:
     * *   You can call the GetUpsertCollectionDataJob operation to query the progress and result of an upload job.
     * *   You can call the CancelUpsertCollectionDataJob operation to cancel an upload job.
     * > You can upload data for the same collection only in a serial manner.
     *
     * @param Request - UpsertCollectionDataAsyncRequest
     *
     * @returns UpsertCollectionDataAsyncResponse
     *
     * @param UpsertCollectionDataAsyncRequest $request
     *
     * @return UpsertCollectionDataAsyncResponse
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
        if (null === $this->_credential) {
            throw new ClientException([
                'code' => 'InvalidCredentials',
                'message' => 'Please set up the credentials correctly. If you are setting them through environment variables, please ensure that ALIBABA_CLOUD_ACCESS_KEY_ID and ALIBABA_CLOUD_ACCESS_KEY_SECRET are set correctly. See https://help.aliyun.com/zh/sdk/developer-reference/configure-the-alibaba-cloud-accesskey-environment-variable-on-linux-macos-and-windows-systems for more details.',
            ]);
        }

        $credentialModel = $this->_credential->getCredential();
        $accessKeyId = $credentialModel->accessKeyId;
        $accessKeySecret = $credentialModel->accessKeySecret;
        $securityToken = $credentialModel->securityToken;
        $credentialType = $credentialModel->type;
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint || '' == $openPlatformEndpoint) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }

        if (null === $credentialType) {
            $credentialType = 'access_key';
        }

        $authConfig = new Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken' => $securityToken,
            'type' => $credentialType,
            'endpoint' => $openPlatformEndpoint,
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $authClient = new OpenApiClient($authConfig);
        $authRequest = [
            'Product' => 'gpdb',
            'RegionId' => $this->_regionId,
        ];
        $authReq = new OpenApiRequest([
            'query' => Utils::query($authRequest),
        ]);
        $authParams = new Params([
            'action' => 'AuthorizeFileUpload',
            'version' => '2019-12-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        $authResponse = [];
        $fileObj = new FileField([]);
        $ossHeader = [];
        $tmpBody = [];
        $useAccelerate = false;
        $authResponseBody = [];
        $upsertCollectionDataAsyncReq = new UpsertCollectionDataAsyncRequest([]);
        Utils::convert($request, $upsertCollectionDataAsyncReq);
        if (null !== $request->fileUrlObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->fileUrlObject,
                'contentType' => '',
            ]);
            $ossHeader = [
                'host' => '' . @$authResponseBody['Bucket'] . '.' . Utils::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType) . '',
                'OSSAccessKeyId' => @$authResponseBody['AccessKeyId'],
                'policy' => @$authResponseBody['EncodedPolicy'],
                'Signature' => @$authResponseBody['Signature'],
                'key' => @$authResponseBody['ObjectKey'],
                'file' => $fileObj,
                'success_action_status' => '201',
            ];
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader, $runtime);
            $upsertCollectionDataAsyncReq->fileUrl = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->upsertCollectionDataAsyncWithOptions($upsertCollectionDataAsyncReq, $runtime);
    }
}
