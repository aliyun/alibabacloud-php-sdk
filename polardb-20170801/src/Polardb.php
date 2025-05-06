<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CancelActiveOperationTasksRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CancelActiveOperationTasksResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CancelScheduleTasksRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CancelScheduleTasksResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CheckAccountNameRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CheckAccountNameResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CheckDBNameRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CheckDBNameResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CheckKMSAuthorizedRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CheckKMSAuthorizedResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CheckServiceLinkedRoleRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CheckServiceLinkedRoleResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CloseAITaskRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CloseAITaskResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CloseDBClusterMigrationRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CloseDBClusterMigrationResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CreateAccountRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CreateAccountResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CreateActivationCodeRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CreateActivationCodeResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CreateBackupRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CreateBackupResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CreateColdStorageInstanceRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CreateColdStorageInstanceResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CreateDatabaseRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CreateDatabaseResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CreateDBClusterEndpointRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CreateDBClusterEndpointResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CreateDBClusterRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CreateDBClusterResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CreateDBEndpointAddressRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CreateDBEndpointAddressResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CreateDBLinkRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CreateDBLinkResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CreateDBNodesRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CreateDBNodesResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CreateGlobalDatabaseNetworkRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CreateGlobalDatabaseNetworkResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CreateGlobalSecurityIPGroupRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CreateGlobalSecurityIPGroupResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CreateOrGetVirtualLicenseOrderRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CreateOrGetVirtualLicenseOrderResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CreateParameterGroupRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CreateParameterGroupResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CreateServiceLinkedRoleRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CreateServiceLinkedRoleResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CreateStoragePlanRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CreateStoragePlanResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DeleteAccountRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DeleteAccountResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DeleteBackupRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DeleteBackupResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DeleteDatabaseRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DeleteDatabaseResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DeleteDBClusterEndpointRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DeleteDBClusterEndpointResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DeleteDBClusterRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DeleteDBClusterResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DeleteDBEndpointAddressRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DeleteDBEndpointAddressResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DeleteDBLinkRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DeleteDBLinkResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DeleteDBNodesRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DeleteDBNodesResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DeleteGlobalDatabaseNetworkRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DeleteGlobalDatabaseNetworkResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DeleteGlobalSecurityIPGroupRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DeleteGlobalSecurityIPGroupResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DeleteMaskingRulesRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DeleteMaskingRulesResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DeleteParameterGroupRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DeleteParameterGroupResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeAccountsRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeAccountsResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeActivationCodeDetailsRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeActivationCodeDetailsResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeActivationCodesRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeActivationCodesResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeActiveOperationTasksRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeActiveOperationTasksResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeAITaskStatusRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeAITaskStatusResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeAutoRenewAttributeRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeAutoRenewAttributeResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeBackupLogsRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeBackupLogsResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeBackupPolicyRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeBackupPolicyResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeBackupsRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeBackupsResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeBackupTasksRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeBackupTasksResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeCharacterSetNameRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeCharacterSetNameResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeClassListRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeClassListResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDasConfigRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDasConfigResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDatabasesRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDatabasesResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterAccessWhitelistRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterAccessWhitelistResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterAttributeRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterAttributeResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterAuditLogCollectorRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterAuditLogCollectorResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterAvailableResourcesRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterAvailableResourcesResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterConnectivityRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterConnectivityResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterEndpointsRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterEndpointsResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterMigrationRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterMigrationResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterMonitorRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterMonitorResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterParametersRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterParametersResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterPerformanceRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterPerformanceResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterServerlessConfRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterServerlessConfResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClustersRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClustersResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterSSLRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterSSLResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClustersWithBackupsRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClustersWithBackupsResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterTDERequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterTDEResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterVersionRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterVersionResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBInitializeVariableRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBInitializeVariableResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBLinksRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBLinksResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBNodePerformanceRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBNodePerformanceResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBNodesParametersRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBNodesParametersResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBProxyPerformanceRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBProxyPerformanceResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDetachedBackupsRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDetachedBackupsResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeGlobalDatabaseNetworkRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeGlobalDatabaseNetworkResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeGlobalDatabaseNetworksRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeGlobalDatabaseNetworksResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeGlobalSecurityIPGroupRelationRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeGlobalSecurityIPGroupRelationResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeGlobalSecurityIPGroupRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeGlobalSecurityIPGroupResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeHistoryTasksRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeHistoryTasksResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeLicenseOrderDetailsRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeLicenseOrderDetailsResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeLicenseOrdersRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeLicenseOrdersResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeLogBackupPolicyRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeLogBackupPolicyResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeMaskingRulesRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeMaskingRulesResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeMetaListRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeMetaListResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeParameterGroupRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeParameterGroupResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeParameterGroupsRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeParameterGroupsResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeParameterTemplatesRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeParameterTemplatesResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribePendingMaintenanceActionRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribePendingMaintenanceActionResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribePendingMaintenanceActionsRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribePendingMaintenanceActionsResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribePolarSQLCollectorPolicyRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribePolarSQLCollectorPolicyResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeScheduleTasksRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeScheduleTasksResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeSlowLogRecordsRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeSlowLogRecordsResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeSlowLogsRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeSlowLogsResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeTasksRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeTasksResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeUserEncryptionKeyListRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeUserEncryptionKeyListResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeVSwitchesRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeVSwitchesResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DisableDBClusterServerlessRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DisableDBClusterServerlessResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\EnableDBClusterServerlessRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\EnableDBClusterServerlessResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\EnableFirewallRulesRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\EnableFirewallRulesResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\EvaluateRegionResourceRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\EvaluateRegionResourceResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\FailoverDBClusterRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\FailoverDBClusterResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\GrantAccountPrivilegeRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\GrantAccountPrivilegeResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ManuallyStartDBClusterRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ManuallyStartDBClusterResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyAccountDescriptionRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyAccountDescriptionResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyAccountPasswordRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyAccountPasswordResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyActiveOperationTasksRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyActiveOperationTasksResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyAutoRenewAttributeRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyAutoRenewAttributeResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyBackupPolicyRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyBackupPolicyResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterAccessWhitelistRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterAccessWhitelistResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterAndNodesParametersRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterAndNodesParametersResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterArchRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterArchResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterAuditLogCollectorRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterAuditLogCollectorResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterDeletionRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterDeletionResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterDescriptionRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterDescriptionResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterEndpointRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterEndpointResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterMaintainTimeRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterMaintainTimeResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterMigrationRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterMigrationResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterMonitorRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterMonitorResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterParametersRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterParametersResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterPrimaryZoneRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterPrimaryZoneResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterResourceGroupRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterResourceGroupResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterServerlessConfRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterServerlessConfResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterSSLRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterSSLResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterStoragePerformanceRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterStoragePerformanceResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterStorageSpaceRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterStorageSpaceResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterTDERequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterTDEResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBDescriptionRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBDescriptionResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBEndpointAddressRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBEndpointAddressResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBNodeClassRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBNodeClassResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBNodeHotReplicaModeRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBNodeHotReplicaModeResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBNodesClassRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBNodesClassResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBNodesParametersRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBNodesParametersResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyGlobalDatabaseNetworkRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyGlobalDatabaseNetworkResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyGlobalSecurityIPGroupNameRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyGlobalSecurityIPGroupNameResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyGlobalSecurityIPGroupRelationRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyGlobalSecurityIPGroupRelationResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyGlobalSecurityIPGroupRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyGlobalSecurityIPGroupResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyLogBackupPolicyRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyLogBackupPolicyResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyMaskingRulesRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyMaskingRulesResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyPendingMaintenanceActionRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyPendingMaintenanceActionResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\OpenAITaskRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\OpenAITaskResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\RefreshDBClusterStorageUsageRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\RefreshDBClusterStorageUsageResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\RemoveDBClusterFromGDNRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\RemoveDBClusterFromGDNResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ResetAccountRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ResetAccountResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ResetGlobalDatabaseNetworkRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ResetGlobalDatabaseNetworkResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\RestartDBLinkRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\RestartDBLinkResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\RestartDBNodeRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\RestartDBNodeResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\RestoreTableRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\RestoreTableResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\RevokeAccountPrivilegeRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\RevokeAccountPrivilegeResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\SwitchOverGlobalDatabaseNetworkRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\SwitchOverGlobalDatabaseNetworkResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\TempModifyDBNodeRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\TempModifyDBNodeResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\TransformDBClusterPayTypeRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\TransformDBClusterPayTypeResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\UpgradeDBClusterVersionRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\UpgradeDBClusterVersionResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Polardb extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'cn-qingdao' => 'polardb.aliyuncs.com',
            'cn-beijing' => 'polardb.aliyuncs.com',
            'cn-wulanchabu' => 'polardb.aliyuncs.com',
            'cn-hangzhou' => 'polardb.aliyuncs.com',
            'cn-shanghai' => 'polardb.aliyuncs.com',
            'cn-shenzhen' => 'polardb.aliyuncs.com',
            'cn-guangzhou' => 'polardb.aliyuncs.com',
            'cn-hongkong' => 'polardb.aliyuncs.com',
            'cn-hangzhou-finance' => 'polardb.aliyuncs.com',
            'cn-shanghai-finance-1' => 'polardb.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'polardb.aliyuncs.com',
            'cn-north-2-gov-1' => 'polardb.aliyuncs.com',
            'ap-northeast-2-pop' => 'polardb.aliyuncs.com',
            'cn-beijing-finance-1' => 'polardb.aliyuncs.com',
            'cn-beijing-finance-pop' => 'polardb.aliyuncs.com',
            'cn-beijing-gov-1' => 'polardb.aliyuncs.com',
            'cn-beijing-nu16-b01' => 'polardb.aliyuncs.com',
            'cn-edge-1' => 'polardb.aliyuncs.com',
            'cn-fujian' => 'polardb.aliyuncs.com',
            'cn-haidian-cm12-c01' => 'polardb.aliyuncs.com',
            'cn-hangzhou-bj-b01' => 'polardb.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'polardb.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'polardb.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'polardb.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'polardb.aliyuncs.com',
            'cn-hangzhou-test-306' => 'polardb.aliyuncs.com',
            'cn-hongkong-finance-pop' => 'polardb.aliyuncs.com',
            'cn-huhehaote-nebula-1' => 'polardb.aliyuncs.com',
            'cn-qingdao-nebula' => 'polardb.aliyuncs.com',
            'cn-shanghai-et15-b01' => 'polardb.aliyuncs.com',
            'cn-shanghai-et2-b01' => 'polardb.aliyuncs.com',
            'cn-shanghai-inner' => 'polardb.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'polardb.aliyuncs.com',
            'cn-shenzhen-inner' => 'polardb.aliyuncs.com',
            'cn-shenzhen-st4-d01' => 'polardb.aliyuncs.com',
            'cn-shenzhen-su18-b01' => 'polardb.aliyuncs.com',
            'cn-wuhan' => 'polardb.aliyuncs.com',
            'cn-yushanfang' => 'polardb.aliyuncs.com',
            'cn-zhangbei' => 'polardb.aliyuncs.com',
            'cn-zhangbei-na61-b01' => 'polardb.aliyuncs.com',
            'cn-zhangjiakou-na62-a01' => 'polardb.aliyuncs.com',
            'cn-zhengzhou-nebula-1' => 'polardb.aliyuncs.com',
            'eu-west-1-oxs' => 'polardb.aliyuncs.com',
            'rus-west-1-pop' => 'polardb.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('polardb', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Cancels O\\&M events at a time.
     *
     * @param request - CancelActiveOperationTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelActiveOperationTasksResponse
     *
     * @param CancelActiveOperationTasksRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CancelActiveOperationTasksResponse
     */
    public function cancelActiveOperationTasksWithOptions($request, $runtime)
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

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->taskIds) {
            @$query['TaskIds'] = $request->taskIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CancelActiveOperationTasks',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelActiveOperationTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Cancels O\\&M events at a time.
     *
     * @param request - CancelActiveOperationTasksRequest
     *
     * @returns CancelActiveOperationTasksResponse
     *
     * @param CancelActiveOperationTasksRequest $request
     *
     * @return CancelActiveOperationTasksResponse
     */
    public function cancelActiveOperationTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelActiveOperationTasksWithOptions($request, $runtime);
    }

    /**
     * Cancels scheduled tasks that are not yet started.
     *
     * @param request - CancelScheduleTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelScheduleTasksResponse
     *
     * @param CancelScheduleTasksRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CancelScheduleTasksResponse
     */
    public function cancelScheduleTasksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
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

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CancelScheduleTasks',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelScheduleTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Cancels scheduled tasks that are not yet started.
     *
     * @param request - CancelScheduleTasksRequest
     *
     * @returns CancelScheduleTasksResponse
     *
     * @param CancelScheduleTasksRequest $request
     *
     * @return CancelScheduleTasksResponse
     */
    public function cancelScheduleTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelScheduleTasksWithOptions($request, $runtime);
    }

    /**
     * Checks whether an account name is valid or unique in a cluster.
     *
     * @param request - CheckAccountNameRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckAccountNameResponse
     *
     * @param CheckAccountNameRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CheckAccountNameResponse
     */
    public function checkAccountNameWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountName) {
            @$query['AccountName'] = $request->accountName;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'CheckAccountName',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckAccountNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Checks whether an account name is valid or unique in a cluster.
     *
     * @param request - CheckAccountNameRequest
     *
     * @returns CheckAccountNameResponse
     *
     * @param CheckAccountNameRequest $request
     *
     * @return CheckAccountNameResponse
     */
    public function checkAccountName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkAccountNameWithOptions($request, $runtime);
    }

    /**
     * Checks whether a database name is valid or whether the name is already used by another database in the current cluster.
     *
     * @param request - CheckDBNameRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckDBNameResponse
     *
     * @param CheckDBNameRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CheckDBNameResponse
     */
    public function checkDBNameWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->DBName) {
            @$query['DBName'] = $request->DBName;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'CheckDBName',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckDBNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Checks whether a database name is valid or whether the name is already used by another database in the current cluster.
     *
     * @param request - CheckDBNameRequest
     *
     * @returns CheckDBNameResponse
     *
     * @param CheckDBNameRequest $request
     *
     * @return CheckDBNameResponse
     */
    public function checkDBName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkDBNameWithOptions($request, $runtime);
    }

    /**
     * Queries whether the cluster is authorized to use Key Management Service (KMS).
     *
     * @param request - CheckKMSAuthorizedRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckKMSAuthorizedResponse
     *
     * @param CheckKMSAuthorizedRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CheckKMSAuthorizedResponse
     */
    public function checkKMSAuthorizedWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
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

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->TDERegion) {
            @$query['TDERegion'] = $request->TDERegion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckKMSAuthorized',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckKMSAuthorizedResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries whether the cluster is authorized to use Key Management Service (KMS).
     *
     * @param request - CheckKMSAuthorizedRequest
     *
     * @returns CheckKMSAuthorizedResponse
     *
     * @param CheckKMSAuthorizedRequest $request
     *
     * @return CheckKMSAuthorizedResponse
     */
    public function checkKMSAuthorized($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkKMSAuthorizedWithOptions($request, $runtime);
    }

    /**
     * Checks whether a service-linked role (SLR) is created.
     *
     * @param request - CheckServiceLinkedRoleRequest
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
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'CheckServiceLinkedRole',
            'version' => '2017-08-01',
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
     * Checks whether a service-linked role (SLR) is created.
     *
     * @param request - CheckServiceLinkedRoleRequest
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
     * 关闭DB4AI.
     *
     * @param request - CloseAITaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloseAITaskResponse
     *
     * @param CloseAITaskRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CloseAITaskResponse
     */
    public function closeAITaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
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
            'action' => 'CloseAITask',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloseAITaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 关闭DB4AI.
     *
     * @param request - CloseAITaskRequest
     *
     * @returns CloseAITaskResponse
     *
     * @param CloseAITaskRequest $request
     *
     * @return CloseAITaskResponse
     */
    public function closeAITask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->closeAITaskWithOptions($request, $runtime);
    }

    /**
     * Cancels or completes the migration task that upgrades an RDS cluster to a PolarDB cluster.
     *
     * @remarks
     *   You can call this operation to cancel the migration task before data migration.
     * *   You can call this operation to perform the migration task after data migration.
     * > Before you call this operation, ensure that a one-click upgrade task has been created for the cluster. You can call the [CreateDBCluster](https://help.aliyun.com/document_detail/98169.html) operation to create an upgrade task. Set the **CreationOption** parameter to **MigrationFromRDS**. For more information, see [Create a PolarDB for MySQL cluster by using the Migration from RDS method](https://help.aliyun.com/document_detail/121582.html).
     *
     * @param request - CloseDBClusterMigrationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloseDBClusterMigrationResponse
     *
     * @param CloseDBClusterMigrationRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CloseDBClusterMigrationResponse
     */
    public function closeDBClusterMigrationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->continueEnableBinlog) {
            @$query['ContinueEnableBinlog'] = $request->continueEnableBinlog;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'CloseDBClusterMigration',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloseDBClusterMigrationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Cancels or completes the migration task that upgrades an RDS cluster to a PolarDB cluster.
     *
     * @remarks
     *   You can call this operation to cancel the migration task before data migration.
     * *   You can call this operation to perform the migration task after data migration.
     * > Before you call this operation, ensure that a one-click upgrade task has been created for the cluster. You can call the [CreateDBCluster](https://help.aliyun.com/document_detail/98169.html) operation to create an upgrade task. Set the **CreationOption** parameter to **MigrationFromRDS**. For more information, see [Create a PolarDB for MySQL cluster by using the Migration from RDS method](https://help.aliyun.com/document_detail/121582.html).
     *
     * @param request - CloseDBClusterMigrationRequest
     *
     * @returns CloseDBClusterMigrationResponse
     *
     * @param CloseDBClusterMigrationRequest $request
     *
     * @return CloseDBClusterMigrationResponse
     */
    public function closeDBClusterMigration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->closeDBClusterMigrationWithOptions($request, $runtime);
    }

    /**
     * Creates a database account for a PolarDB cluster.
     *
     * @param request - CreateAccountRequest
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

        if (null !== $request->accountPrivilege) {
            @$query['AccountPrivilege'] = $request->accountPrivilege;
        }

        if (null !== $request->accountType) {
            @$query['AccountType'] = $request->accountType;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->DBName) {
            @$query['DBName'] = $request->DBName;
        }

        if (null !== $request->nodeType) {
            @$query['NodeType'] = $request->nodeType;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->privForAllDB) {
            @$query['PrivForAllDB'] = $request->privForAllDB;
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
            'action' => 'CreateAccount',
            'version' => '2017-08-01',
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
     * Creates a database account for a PolarDB cluster.
     *
     * @param request - CreateAccountRequest
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
     * Generates a lightweight license activation code.
     *
     * @param request - CreateActivationCodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateActivationCodeResponse
     *
     * @param CreateActivationCodeRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateActivationCodeResponse
     */
    public function createActivationCodeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliyunOrderId) {
            @$query['AliyunOrderId'] = $request->aliyunOrderId;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->macAddress) {
            @$query['MacAddress'] = $request->macAddress;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->systemIdentifier) {
            @$query['SystemIdentifier'] = $request->systemIdentifier;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateActivationCode',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateActivationCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Generates a lightweight license activation code.
     *
     * @param request - CreateActivationCodeRequest
     *
     * @returns CreateActivationCodeResponse
     *
     * @param CreateActivationCodeRequest $request
     *
     * @return CreateActivationCodeResponse
     */
    public function createActivationCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createActivationCodeWithOptions($request, $runtime);
    }

    /**
     * Creates a full snapshot backup for a PolarDB cluster.
     *
     * @remarks
     * >
     * *   You can manually create up to three backups for each cluster.
     * *   The `Exceeding the daily backup times of this DB cluster` error message indicates that three manual backups already exist in your cluster. You must delete existing backups before you call this operation to manually create backups. For more information about how to delete backups, see [Delete backups](https://help.aliyun.com/document_detail/98101.html).
     * *   After you call this operation, a backup task is created in the backend. The task may be time-consuming if you want to back up large amounts of data.
     *
     * @param request - CreateBackupRequest
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
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'CreateBackup',
            'version' => '2017-08-01',
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
     * Creates a full snapshot backup for a PolarDB cluster.
     *
     * @remarks
     * >
     * *   You can manually create up to three backups for each cluster.
     * *   The `Exceeding the daily backup times of this DB cluster` error message indicates that three manual backups already exist in your cluster. You must delete existing backups before you call this operation to manually create backups. For more information about how to delete backups, see [Delete backups](https://help.aliyun.com/document_detail/98101.html).
     * *   After you call this operation, a backup task is created in the backend. The task may be time-consuming if you want to back up large amounts of data.
     *
     * @param request - CreateBackupRequest
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
     * Creates a cluster that is used to store cold data.
     *
     * @param request - CreateColdStorageInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateColdStorageInstanceResponse
     *
     * @param CreateColdStorageInstanceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateColdStorageInstanceResponse
     */
    public function createColdStorageInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->coldStorageInstanceDescription) {
            @$query['ColdStorageInstanceDescription'] = $request->coldStorageInstanceDescription;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
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
            'action' => 'CreateColdStorageInstance',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateColdStorageInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a cluster that is used to store cold data.
     *
     * @param request - CreateColdStorageInstanceRequest
     *
     * @returns CreateColdStorageInstanceResponse
     *
     * @param CreateColdStorageInstanceRequest $request
     *
     * @return CreateColdStorageInstanceResponse
     */
    public function createColdStorageInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createColdStorageInstanceWithOptions($request, $runtime);
    }

    /**
     * CreateDBCluster.
     *
     * @param request - CreateDBClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDBClusterResponse
     *
     * @param CreateDBClusterRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateDBClusterResponse
     */
    public function createDBClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->allowShutDown) {
            @$query['AllowShutDown'] = $request->allowShutDown;
        }

        if (null !== $request->architecture) {
            @$query['Architecture'] = $request->architecture;
        }

        if (null !== $request->autoRenew) {
            @$query['AutoRenew'] = $request->autoRenew;
        }

        if (null !== $request->backupRetentionPolicyOnClusterDeletion) {
            @$query['BackupRetentionPolicyOnClusterDeletion'] = $request->backupRetentionPolicyOnClusterDeletion;
        }

        if (null !== $request->burstingEnabled) {
            @$query['BurstingEnabled'] = $request->burstingEnabled;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->cloneDataPoint) {
            @$query['CloneDataPoint'] = $request->cloneDataPoint;
        }

        if (null !== $request->clusterNetworkType) {
            @$query['ClusterNetworkType'] = $request->clusterNetworkType;
        }

        if (null !== $request->creationCategory) {
            @$query['CreationCategory'] = $request->creationCategory;
        }

        if (null !== $request->creationOption) {
            @$query['CreationOption'] = $request->creationOption;
        }

        if (null !== $request->DBClusterDescription) {
            @$query['DBClusterDescription'] = $request->DBClusterDescription;
        }

        if (null !== $request->DBMinorVersion) {
            @$query['DBMinorVersion'] = $request->DBMinorVersion;
        }

        if (null !== $request->DBNodeClass) {
            @$query['DBNodeClass'] = $request->DBNodeClass;
        }

        if (null !== $request->DBNodeNum) {
            @$query['DBNodeNum'] = $request->DBNodeNum;
        }

        if (null !== $request->DBType) {
            @$query['DBType'] = $request->DBType;
        }

        if (null !== $request->DBVersion) {
            @$query['DBVersion'] = $request->DBVersion;
        }

        if (null !== $request->defaultTimeZone) {
            @$query['DefaultTimeZone'] = $request->defaultTimeZone;
        }

        if (null !== $request->GDNId) {
            @$query['GDNId'] = $request->GDNId;
        }

        if (null !== $request->hotStandbyCluster) {
            @$query['HotStandbyCluster'] = $request->hotStandbyCluster;
        }

        if (null !== $request->loosePolarLogBin) {
            @$query['LoosePolarLogBin'] = $request->loosePolarLogBin;
        }

        if (null !== $request->looseXEngine) {
            @$query['LooseXEngine'] = $request->looseXEngine;
        }

        if (null !== $request->looseXEngineUseMemoryPct) {
            @$query['LooseXEngineUseMemoryPct'] = $request->looseXEngineUseMemoryPct;
        }

        if (null !== $request->lowerCaseTableNames) {
            @$query['LowerCaseTableNames'] = $request->lowerCaseTableNames;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->parameterGroupId) {
            @$query['ParameterGroupId'] = $request->parameterGroupId;
        }

        if (null !== $request->payType) {
            @$query['PayType'] = $request->payType;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->provisionedIops) {
            @$query['ProvisionedIops'] = $request->provisionedIops;
        }

        if (null !== $request->proxyClass) {
            @$query['ProxyClass'] = $request->proxyClass;
        }

        if (null !== $request->proxyType) {
            @$query['ProxyType'] = $request->proxyType;
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

        if (null !== $request->scaleMax) {
            @$query['ScaleMax'] = $request->scaleMax;
        }

        if (null !== $request->scaleMin) {
            @$query['ScaleMin'] = $request->scaleMin;
        }

        if (null !== $request->scaleRoNumMax) {
            @$query['ScaleRoNumMax'] = $request->scaleRoNumMax;
        }

        if (null !== $request->scaleRoNumMin) {
            @$query['ScaleRoNumMin'] = $request->scaleRoNumMin;
        }

        if (null !== $request->securityIPList) {
            @$query['SecurityIPList'] = $request->securityIPList;
        }

        if (null !== $request->serverlessType) {
            @$query['ServerlessType'] = $request->serverlessType;
        }

        if (null !== $request->sourceResourceId) {
            @$query['SourceResourceId'] = $request->sourceResourceId;
        }

        if (null !== $request->standbyAZ) {
            @$query['StandbyAZ'] = $request->standbyAZ;
        }

        if (null !== $request->storageAutoScale) {
            @$query['StorageAutoScale'] = $request->storageAutoScale;
        }

        if (null !== $request->storageEncryption) {
            @$query['StorageEncryption'] = $request->storageEncryption;
        }

        if (null !== $request->storageEncryptionKey) {
            @$query['StorageEncryptionKey'] = $request->storageEncryptionKey;
        }

        if (null !== $request->storagePayType) {
            @$query['StoragePayType'] = $request->storagePayType;
        }

        if (null !== $request->storageSpace) {
            @$query['StorageSpace'] = $request->storageSpace;
        }

        if (null !== $request->storageType) {
            @$query['StorageType'] = $request->storageType;
        }

        if (null !== $request->storageUpperBound) {
            @$query['StorageUpperBound'] = $request->storageUpperBound;
        }

        if (null !== $request->strictConsistency) {
            @$query['StrictConsistency'] = $request->strictConsistency;
        }

        if (null !== $request->TDEStatus) {
            @$query['TDEStatus'] = $request->TDEStatus;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->targetMinorVersion) {
            @$query['TargetMinorVersion'] = $request->targetMinorVersion;
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

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateDBCluster',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDBClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * CreateDBCluster.
     *
     * @param request - CreateDBClusterRequest
     *
     * @returns CreateDBClusterResponse
     *
     * @param CreateDBClusterRequest $request
     *
     * @return CreateDBClusterResponse
     */
    public function createDBCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDBClusterWithOptions($request, $runtime);
    }

    /**
     * Creates a custom cluster endpoint for a PolarDB cluster.
     *
     * @param request - CreateDBClusterEndpointRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDBClusterEndpointResponse
     *
     * @param CreateDBClusterEndpointRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateDBClusterEndpointResponse
     */
    public function createDBClusterEndpointWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoAddNewNodes) {
            @$query['AutoAddNewNodes'] = $request->autoAddNewNodes;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->DBEndpointDescription) {
            @$query['DBEndpointDescription'] = $request->DBEndpointDescription;
        }

        if (null !== $request->endpointConfig) {
            @$query['EndpointConfig'] = $request->endpointConfig;
        }

        if (null !== $request->endpointType) {
            @$query['EndpointType'] = $request->endpointType;
        }

        if (null !== $request->nodes) {
            @$query['Nodes'] = $request->nodes;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->polarSccTimeoutAction) {
            @$query['PolarSccTimeoutAction'] = $request->polarSccTimeoutAction;
        }

        if (null !== $request->polarSccWaitTimeout) {
            @$query['PolarSccWaitTimeout'] = $request->polarSccWaitTimeout;
        }

        if (null !== $request->readWriteMode) {
            @$query['ReadWriteMode'] = $request->readWriteMode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->sccMode) {
            @$query['SccMode'] = $request->sccMode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateDBClusterEndpoint',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDBClusterEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a custom cluster endpoint for a PolarDB cluster.
     *
     * @param request - CreateDBClusterEndpointRequest
     *
     * @returns CreateDBClusterEndpointResponse
     *
     * @param CreateDBClusterEndpointRequest $request
     *
     * @return CreateDBClusterEndpointResponse
     */
    public function createDBClusterEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDBClusterEndpointWithOptions($request, $runtime);
    }

    /**
     * Creates a public endpoint for the primary endpoint, the default cluster endpoint, or a custom cluster endpoint.
     *
     * @remarks
     * > You can create a public endpoint for the primary endpoint, the default cluster endpoint, or a custom cluster endpoint.
     *
     * @param request - CreateDBEndpointAddressRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDBEndpointAddressResponse
     *
     * @param CreateDBEndpointAddressRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateDBEndpointAddressResponse
     */
    public function createDBEndpointAddressWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->connectionStringPrefix) {
            @$query['ConnectionStringPrefix'] = $request->connectionStringPrefix;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->DBEndpointId) {
            @$query['DBEndpointId'] = $request->DBEndpointId;
        }

        if (null !== $request->netType) {
            @$query['NetType'] = $request->netType;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityGroupId) {
            @$query['SecurityGroupId'] = $request->securityGroupId;
        }

        if (null !== $request->VPCId) {
            @$query['VPCId'] = $request->VPCId;
        }

        if (null !== $request->zoneInfo) {
            @$query['ZoneInfo'] = $request->zoneInfo;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateDBEndpointAddress',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDBEndpointAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a public endpoint for the primary endpoint, the default cluster endpoint, or a custom cluster endpoint.
     *
     * @remarks
     * > You can create a public endpoint for the primary endpoint, the default cluster endpoint, or a custom cluster endpoint.
     *
     * @param request - CreateDBEndpointAddressRequest
     *
     * @returns CreateDBEndpointAddressResponse
     *
     * @param CreateDBEndpointAddressRequest $request
     *
     * @return CreateDBEndpointAddressResponse
     */
    public function createDBEndpointAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDBEndpointAddressWithOptions($request, $runtime);
    }

    /**
     * Creates a database link.
     *
     * @remarks
     * A database link can be used to connect two PolarDB for PostgreSQL(Compatible with Oracle) clusters, or connect a PolarDB for PostgreSQL(Compatible with Oracle) cluster to a user-created PostgreSQL database that is hosted on an Elastic Compute Service (ECS) instance. You can use database links to query data across clusters.
     * > *   You can create up to 10 database links for a cluster.
     * > *   Each database link connects a source cluster and a destination cluster.
     * > *   The source cluster and the destination cluster or the destination ECS instance must be located in the same region.
     *
     * @param request - CreateDBLinkRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDBLinkResponse
     *
     * @param CreateDBLinkRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateDBLinkResponse
     */
    public function createDBLinkWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->DBLinkName) {
            @$query['DBLinkName'] = $request->DBLinkName;
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

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->sourceDBName) {
            @$query['SourceDBName'] = $request->sourceDBName;
        }

        if (null !== $request->targetDBAccount) {
            @$query['TargetDBAccount'] = $request->targetDBAccount;
        }

        if (null !== $request->targetDBInstanceName) {
            @$query['TargetDBInstanceName'] = $request->targetDBInstanceName;
        }

        if (null !== $request->targetDBName) {
            @$query['TargetDBName'] = $request->targetDBName;
        }

        if (null !== $request->targetDBPasswd) {
            @$query['TargetDBPasswd'] = $request->targetDBPasswd;
        }

        if (null !== $request->targetIp) {
            @$query['TargetIp'] = $request->targetIp;
        }

        if (null !== $request->targetPort) {
            @$query['TargetPort'] = $request->targetPort;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateDBLink',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDBLinkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a database link.
     *
     * @remarks
     * A database link can be used to connect two PolarDB for PostgreSQL(Compatible with Oracle) clusters, or connect a PolarDB for PostgreSQL(Compatible with Oracle) cluster to a user-created PostgreSQL database that is hosted on an Elastic Compute Service (ECS) instance. You can use database links to query data across clusters.
     * > *   You can create up to 10 database links for a cluster.
     * > *   Each database link connects a source cluster and a destination cluster.
     * > *   The source cluster and the destination cluster or the destination ECS instance must be located in the same region.
     *
     * @param request - CreateDBLinkRequest
     *
     * @returns CreateDBLinkResponse
     *
     * @param CreateDBLinkRequest $request
     *
     * @return CreateDBLinkResponse
     */
    public function createDBLink($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDBLinkWithOptions($request, $runtime);
    }

    /**
     * Adds a read-only node to a PolarDB cluster.
     *
     * @param request - CreateDBNodesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDBNodesResponse
     *
     * @param CreateDBNodesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateDBNodesResponse
     */
    public function createDBNodesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->DBNode) {
            @$query['DBNode'] = $request->DBNode;
        }

        if (null !== $request->DBNodeType) {
            @$query['DBNodeType'] = $request->DBNodeType;
        }

        if (null !== $request->endpointBindList) {
            @$query['EndpointBindList'] = $request->endpointBindList;
        }

        if (null !== $request->imciSwitch) {
            @$query['ImciSwitch'] = $request->imciSwitch;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->plannedEndTime) {
            @$query['PlannedEndTime'] = $request->plannedEndTime;
        }

        if (null !== $request->plannedStartTime) {
            @$query['PlannedStartTime'] = $request->plannedStartTime;
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
            'action' => 'CreateDBNodes',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDBNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds a read-only node to a PolarDB cluster.
     *
     * @param request - CreateDBNodesRequest
     *
     * @returns CreateDBNodesResponse
     *
     * @param CreateDBNodesRequest $request
     *
     * @return CreateDBNodesResponse
     */
    public function createDBNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDBNodesWithOptions($request, $runtime);
    }

    /**
     * Creates a database for a PolarDB cluster.
     *
     * @remarks
     * Before you call this operation, make sure that the following requirements are met:
     * *   The cluster is in the Running state.
     * *   The cluster is unlocked.
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
        $query = [];
        if (null !== $request->accountName) {
            @$query['AccountName'] = $request->accountName;
        }

        if (null !== $request->accountPrivilege) {
            @$query['AccountPrivilege'] = $request->accountPrivilege;
        }

        if (null !== $request->characterSetName) {
            @$query['CharacterSetName'] = $request->characterSetName;
        }

        if (null !== $request->collate) {
            @$query['Collate'] = $request->collate;
        }

        if (null !== $request->ctype) {
            @$query['Ctype'] = $request->ctype;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->DBDescription) {
            @$query['DBDescription'] = $request->DBDescription;
        }

        if (null !== $request->DBName) {
            @$query['DBName'] = $request->DBName;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'CreateDatabase',
            'version' => '2017-08-01',
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
     * Creates a database for a PolarDB cluster.
     *
     * @remarks
     * Before you call this operation, make sure that the following requirements are met:
     * *   The cluster is in the Running state.
     * *   The cluster is unlocked.
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
     * Creates a global database network (GDN).
     *
     * @remarks
     * >  A cluster belongs to only one GDN.
     *
     * @param request - CreateGlobalDatabaseNetworkRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateGlobalDatabaseNetworkResponse
     *
     * @param CreateGlobalDatabaseNetworkRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return CreateGlobalDatabaseNetworkResponse
     */
    public function createGlobalDatabaseNetworkWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->enableGlobalDomainName) {
            @$query['EnableGlobalDomainName'] = $request->enableGlobalDomainName;
        }

        if (null !== $request->GDNDescription) {
            @$query['GDNDescription'] = $request->GDNDescription;
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

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateGlobalDatabaseNetwork',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateGlobalDatabaseNetworkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a global database network (GDN).
     *
     * @remarks
     * >  A cluster belongs to only one GDN.
     *
     * @param request - CreateGlobalDatabaseNetworkRequest
     *
     * @returns CreateGlobalDatabaseNetworkResponse
     *
     * @param CreateGlobalDatabaseNetworkRequest $request
     *
     * @return CreateGlobalDatabaseNetworkResponse
     */
    public function createGlobalDatabaseNetwork($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGlobalDatabaseNetworkWithOptions($request, $runtime);
    }

    /**
     * Creates a global IP whitelist template.
     *
     * @param request - CreateGlobalSecurityIPGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateGlobalSecurityIPGroupResponse
     *
     * @param CreateGlobalSecurityIPGroupRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return CreateGlobalSecurityIPGroupResponse
     */
    public function createGlobalSecurityIPGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->GIpList) {
            @$query['GIpList'] = $request->GIpList;
        }

        if (null !== $request->globalIgName) {
            @$query['GlobalIgName'] = $request->globalIgName;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateGlobalSecurityIPGroup',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateGlobalSecurityIPGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a global IP whitelist template.
     *
     * @param request - CreateGlobalSecurityIPGroupRequest
     *
     * @returns CreateGlobalSecurityIPGroupResponse
     *
     * @param CreateGlobalSecurityIPGroupRequest $request
     *
     * @return CreateGlobalSecurityIPGroupResponse
     */
    public function createGlobalSecurityIPGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGlobalSecurityIPGroupWithOptions($request, $runtime);
    }

    /**
     * Creates or obtains a virtual license order.
     *
     * @param request - CreateOrGetVirtualLicenseOrderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateOrGetVirtualLicenseOrderResponse
     *
     * @param CreateOrGetVirtualLicenseOrderRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return CreateOrGetVirtualLicenseOrderResponse
     */
    public function createOrGetVirtualLicenseOrderWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->engine) {
            @$query['Engine'] = $request->engine;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'CreateOrGetVirtualLicenseOrder',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateOrGetVirtualLicenseOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates or obtains a virtual license order.
     *
     * @param request - CreateOrGetVirtualLicenseOrderRequest
     *
     * @returns CreateOrGetVirtualLicenseOrderResponse
     *
     * @param CreateOrGetVirtualLicenseOrderRequest $request
     *
     * @return CreateOrGetVirtualLicenseOrderResponse
     */
    public function createOrGetVirtualLicenseOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOrGetVirtualLicenseOrderWithOptions($request, $runtime);
    }

    /**
     * Creates a parameter template.
     *
     * @remarks
     * You can use parameter templates to manage multiple parameters at a time and apply existing parameters to a PolarDB cluster. For more information, see [Use a parameter template](https://help.aliyun.com/document_detail/207009.html).
     * > You can call this operation only on a PolarDB for MySQL cluster.
     *
     * @param request - CreateParameterGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateParameterGroupResponse
     *
     * @param CreateParameterGroupRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateParameterGroupResponse
     */
    public function createParameterGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBType) {
            @$query['DBType'] = $request->DBType;
        }

        if (null !== $request->DBVersion) {
            @$query['DBVersion'] = $request->DBVersion;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->parameterGroupDesc) {
            @$query['ParameterGroupDesc'] = $request->parameterGroupDesc;
        }

        if (null !== $request->parameterGroupName) {
            @$query['ParameterGroupName'] = $request->parameterGroupName;
        }

        if (null !== $request->parameters) {
            @$query['Parameters'] = $request->parameters;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateParameterGroup',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateParameterGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a parameter template.
     *
     * @remarks
     * You can use parameter templates to manage multiple parameters at a time and apply existing parameters to a PolarDB cluster. For more information, see [Use a parameter template](https://help.aliyun.com/document_detail/207009.html).
     * > You can call this operation only on a PolarDB for MySQL cluster.
     *
     * @param request - CreateParameterGroupRequest
     *
     * @returns CreateParameterGroupResponse
     *
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
     * Creates a service-linked role (SLR).
     *
     * @param request - CreateServiceLinkedRoleRequest
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
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'CreateServiceLinkedRole',
            'version' => '2017-08-01',
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
     * Creates a service-linked role (SLR).
     *
     * @param request - CreateServiceLinkedRoleRequest
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
     * Purchases a storage plan.
     *
     * @param request - CreateStoragePlanRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateStoragePlanResponse
     *
     * @param CreateStoragePlanRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateStoragePlanResponse
     */
    public function createStoragePlanWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->storageClass) {
            @$query['StorageClass'] = $request->storageClass;
        }

        if (null !== $request->storageType) {
            @$query['StorageType'] = $request->storageType;
        }

        if (null !== $request->usedTime) {
            @$query['UsedTime'] = $request->usedTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateStoragePlan',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateStoragePlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Purchases a storage plan.
     *
     * @param request - CreateStoragePlanRequest
     *
     * @returns CreateStoragePlanResponse
     *
     * @param CreateStoragePlanRequest $request
     *
     * @return CreateStoragePlanResponse
     */
    public function createStoragePlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createStoragePlanWithOptions($request, $runtime);
    }

    /**
     * Deletes a database account for a PolarDB cluster.
     *
     * @remarks
     * > Before you call this operation, make sure that the cluster is in the Running state. Otherwise, the operation fails.
     *
     * @param request - DeleteAccountRequest
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

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'DeleteAccount',
            'version' => '2017-08-01',
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
     * Deletes a database account for a PolarDB cluster.
     *
     * @remarks
     * > Before you call this operation, make sure that the cluster is in the Running state. Otherwise, the operation fails.
     *
     * @param request - DeleteAccountRequest
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
     * Deletes the backup sets of a PolarDB cluster.
     *
     * @remarks
     * Before you call this operation, make sure that the cluster meets the following requirements:
     * *   The cluster is in the Running state.
     * *   The backup sets are in the Success state.
     * > *   You can call the [DescribeBackups](https://help.aliyun.com/document_detail/98102.html) operation to query the status of backup sets.
     * >*   After you delete the backup set file, the storage space that is occupied by the file is released. The released storage space is smaller than the size of the file because your snapshots share some data blocks
     *
     * @param request - DeleteBackupRequest
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

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'DeleteBackup',
            'version' => '2017-08-01',
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
     * Deletes the backup sets of a PolarDB cluster.
     *
     * @remarks
     * Before you call this operation, make sure that the cluster meets the following requirements:
     * *   The cluster is in the Running state.
     * *   The backup sets are in the Success state.
     * > *   You can call the [DescribeBackups](https://help.aliyun.com/document_detail/98102.html) operation to query the status of backup sets.
     * >*   After you delete the backup set file, the storage space that is occupied by the file is released. The released storage space is smaller than the size of the file because your snapshots share some data blocks
     *
     * @param request - DeleteBackupRequest
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
     * Releases a pay-as-you-go PolarDB cluster.
     *
     * @param request - DeleteDBClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDBClusterResponse
     *
     * @param DeleteDBClusterRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteDBClusterResponse
     */
    public function deleteDBClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupRetentionPolicyOnClusterDeletion) {
            @$query['BackupRetentionPolicyOnClusterDeletion'] = $request->backupRetentionPolicyOnClusterDeletion;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'DeleteDBCluster',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDBClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Releases a pay-as-you-go PolarDB cluster.
     *
     * @param request - DeleteDBClusterRequest
     *
     * @returns DeleteDBClusterResponse
     *
     * @param DeleteDBClusterRequest $request
     *
     * @return DeleteDBClusterResponse
     */
    public function deleteDBCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDBClusterWithOptions($request, $runtime);
    }

    /**
     * Releases a custom cluster endpoint of a PolarDB cluster.
     *
     * @param request - DeleteDBClusterEndpointRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDBClusterEndpointResponse
     *
     * @param DeleteDBClusterEndpointRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteDBClusterEndpointResponse
     */
    public function deleteDBClusterEndpointWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->DBEndpointId) {
            @$query['DBEndpointId'] = $request->DBEndpointId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'DeleteDBClusterEndpoint',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDBClusterEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Releases a custom cluster endpoint of a PolarDB cluster.
     *
     * @param request - DeleteDBClusterEndpointRequest
     *
     * @returns DeleteDBClusterEndpointResponse
     *
     * @param DeleteDBClusterEndpointRequest $request
     *
     * @return DeleteDBClusterEndpointResponse
     */
    public function deleteDBClusterEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDBClusterEndpointWithOptions($request, $runtime);
    }

    /**
     * Releases the public endpoints of a PolarDB cluster, including the primary endpoint, default cluster endpoint, and custom cluster endpoint.
     *
     * @remarks
     * > *   You can delete a public-facing or classic network endpoint of the primary endpoint, the default cluster endpoint, or a custom cluster endpoint.
     * > *   Classic network endpoints are supported only on the China site (aliyun.com). Therefore, you do not need to delete classic network endpoints on the International site (alibabacloud.com).
     *
     * @param request - DeleteDBEndpointAddressRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDBEndpointAddressResponse
     *
     * @param DeleteDBEndpointAddressRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteDBEndpointAddressResponse
     */
    public function deleteDBEndpointAddressWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->DBEndpointId) {
            @$query['DBEndpointId'] = $request->DBEndpointId;
        }

        if (null !== $request->netType) {
            @$query['NetType'] = $request->netType;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'DeleteDBEndpointAddress',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDBEndpointAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Releases the public endpoints of a PolarDB cluster, including the primary endpoint, default cluster endpoint, and custom cluster endpoint.
     *
     * @remarks
     * > *   You can delete a public-facing or classic network endpoint of the primary endpoint, the default cluster endpoint, or a custom cluster endpoint.
     * > *   Classic network endpoints are supported only on the China site (aliyun.com). Therefore, you do not need to delete classic network endpoints on the International site (alibabacloud.com).
     *
     * @param request - DeleteDBEndpointAddressRequest
     *
     * @returns DeleteDBEndpointAddressResponse
     *
     * @param DeleteDBEndpointAddressRequest $request
     *
     * @return DeleteDBEndpointAddressResponse
     */
    public function deleteDBEndpointAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDBEndpointAddressWithOptions($request, $runtime);
    }

    /**
     * Deletes a database link from a PolarDB for PostgreSQL (Compatible with Oracle) cluster.
     *
     * @param request - DeleteDBLinkRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDBLinkResponse
     *
     * @param DeleteDBLinkRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteDBLinkResponse
     */
    public function deleteDBLinkWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->DBLinkName) {
            @$query['DBLinkName'] = $request->DBLinkName;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'DeleteDBLink',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDBLinkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a database link from a PolarDB for PostgreSQL (Compatible with Oracle) cluster.
     *
     * @param request - DeleteDBLinkRequest
     *
     * @returns DeleteDBLinkResponse
     *
     * @param DeleteDBLinkRequest $request
     *
     * @return DeleteDBLinkResponse
     */
    public function deleteDBLink($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDBLinkWithOptions($request, $runtime);
    }

    /**
     * Deletes a read-only node from a PolarDB cluster.
     *
     * @param request - DeleteDBNodesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDBNodesResponse
     *
     * @param DeleteDBNodesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteDBNodesResponse
     */
    public function deleteDBNodesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->DBNodeId) {
            @$query['DBNodeId'] = $request->DBNodeId;
        }

        if (null !== $request->DBNodeType) {
            @$query['DBNodeType'] = $request->DBNodeType;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'DeleteDBNodes',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDBNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a read-only node from a PolarDB cluster.
     *
     * @param request - DeleteDBNodesRequest
     *
     * @returns DeleteDBNodesResponse
     *
     * @param DeleteDBNodesRequest $request
     *
     * @return DeleteDBNodesResponse
     */
    public function deleteDBNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDBNodesWithOptions($request, $runtime);
    }

    /**
     * Deletes a database from a PolarDB cluster.
     *
     * @remarks
     * >- The cluster must be in the Running state and unlocked. Otherwise, the specified database cannot be deleted.
     * >- The delete operation is performed in an asynchronous manner. A long period of time may be required to delete a large database. A success response for this operation only indicates that the request to delete the database is sent. You must query the database to check whether the database is deleted.
     *
     * @param request - DeleteDatabaseRequest
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
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->DBName) {
            @$query['DBName'] = $request->DBName;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'DeleteDatabase',
            'version' => '2017-08-01',
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
     * Deletes a database from a PolarDB cluster.
     *
     * @remarks
     * >- The cluster must be in the Running state and unlocked. Otherwise, the specified database cannot be deleted.
     * >- The delete operation is performed in an asynchronous manner. A long period of time may be required to delete a large database. A success response for this operation only indicates that the request to delete the database is sent. You must query the database to check whether the database is deleted.
     *
     * @param request - DeleteDatabaseRequest
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
     * Deletes a global database network (GDN).
     *
     * @remarks
     * >  You can delete a GDN only when the GDN includes only a primary cluster.
     *
     * @param request - DeleteGlobalDatabaseNetworkRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteGlobalDatabaseNetworkResponse
     *
     * @param DeleteGlobalDatabaseNetworkRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DeleteGlobalDatabaseNetworkResponse
     */
    public function deleteGlobalDatabaseNetworkWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->GDNId) {
            @$query['GDNId'] = $request->GDNId;
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

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteGlobalDatabaseNetwork',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteGlobalDatabaseNetworkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a global database network (GDN).
     *
     * @remarks
     * >  You can delete a GDN only when the GDN includes only a primary cluster.
     *
     * @param request - DeleteGlobalDatabaseNetworkRequest
     *
     * @returns DeleteGlobalDatabaseNetworkResponse
     *
     * @param DeleteGlobalDatabaseNetworkRequest $request
     *
     * @return DeleteGlobalDatabaseNetworkResponse
     */
    public function deleteGlobalDatabaseNetwork($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGlobalDatabaseNetworkWithOptions($request, $runtime);
    }

    /**
     * Deletes a global IP whitelist template.
     *
     * @param request - DeleteGlobalSecurityIPGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteGlobalSecurityIPGroupResponse
     *
     * @param DeleteGlobalSecurityIPGroupRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DeleteGlobalSecurityIPGroupResponse
     */
    public function deleteGlobalSecurityIPGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->globalIgName) {
            @$query['GlobalIgName'] = $request->globalIgName;
        }

        if (null !== $request->globalSecurityGroupId) {
            @$query['GlobalSecurityGroupId'] = $request->globalSecurityGroupId;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteGlobalSecurityIPGroup',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteGlobalSecurityIPGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a global IP whitelist template.
     *
     * @param request - DeleteGlobalSecurityIPGroupRequest
     *
     * @returns DeleteGlobalSecurityIPGroupResponse
     *
     * @param DeleteGlobalSecurityIPGroupRequest $request
     *
     * @return DeleteGlobalSecurityIPGroupResponse
     */
    public function deleteGlobalSecurityIPGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGlobalSecurityIPGroupWithOptions($request, $runtime);
    }

    /**
     * Deletes a data masking rule.
     *
     * @param request - DeleteMaskingRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMaskingRulesResponse
     *
     * @param DeleteMaskingRulesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteMaskingRulesResponse
     */
    public function deleteMaskingRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->interfaceVersion) {
            @$query['InterfaceVersion'] = $request->interfaceVersion;
        }

        if (null !== $request->ruleNameList) {
            @$query['RuleNameList'] = $request->ruleNameList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteMaskingRules',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteMaskingRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a data masking rule.
     *
     * @param request - DeleteMaskingRulesRequest
     *
     * @returns DeleteMaskingRulesResponse
     *
     * @param DeleteMaskingRulesRequest $request
     *
     * @return DeleteMaskingRulesResponse
     */
    public function deleteMaskingRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMaskingRulesWithOptions($request, $runtime);
    }

    /**
     * Deletes a parameter template of a PolarDB cluster.
     *
     * @remarks
     * You can use parameter templates to manage multiple parameters at a time and quickly apply existing parameters to a PolarDB cluster. For more information, see [Use a parameter template](https://help.aliyun.com/document_detail/207009.html).
     * >  When you delete a parameter template, the parameter settings that are applied to PolarDB clusters are not affected.
     *
     * @param request - DeleteParameterGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteParameterGroupResponse
     *
     * @param DeleteParameterGroupRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteParameterGroupResponse
     */
    public function deleteParameterGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->parameterGroupId) {
            @$query['ParameterGroupId'] = $request->parameterGroupId;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteParameterGroup',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteParameterGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a parameter template of a PolarDB cluster.
     *
     * @remarks
     * You can use parameter templates to manage multiple parameters at a time and quickly apply existing parameters to a PolarDB cluster. For more information, see [Use a parameter template](https://help.aliyun.com/document_detail/207009.html).
     * >  When you delete a parameter template, the parameter settings that are applied to PolarDB clusters are not affected.
     *
     * @param request - DeleteParameterGroupRequest
     *
     * @returns DeleteParameterGroupResponse
     *
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
     * Queries the status of the PolarDB for AI feature.
     *
     * @param request - DescribeAITaskStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAITaskStatusResponse
     *
     * @param DescribeAITaskStatusRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeAITaskStatusResponse
     */
    public function describeAITaskStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAITaskStatus',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAITaskStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the status of the PolarDB for AI feature.
     *
     * @param request - DescribeAITaskStatusRequest
     *
     * @returns DescribeAITaskStatusResponse
     *
     * @param DescribeAITaskStatusRequest $request
     *
     * @return DescribeAITaskStatusResponse
     */
    public function describeAITaskStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAITaskStatusWithOptions($request, $runtime);
    }

    /**
     * Queries information about a database account of a PolarDB cluster.
     *
     * @param request - DescribeAccountsRequest
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

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->nodeType) {
            @$query['NodeType'] = $request->nodeType;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
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
            'action' => 'DescribeAccounts',
            'version' => '2017-08-01',
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
     * Queries information about a database account of a PolarDB cluster.
     *
     * @param request - DescribeAccountsRequest
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
     * Queries the details of an activation code.
     *
     * @param request - DescribeActivationCodeDetailsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeActivationCodeDetailsResponse
     *
     * @param DescribeActivationCodeDetailsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeActivationCodeDetailsResponse
     */
    public function describeActivationCodeDetailsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->activationCodeId) {
            @$query['ActivationCodeId'] = $request->activationCodeId;
        }

        if (null !== $request->aliyunOrderId) {
            @$query['AliyunOrderId'] = $request->aliyunOrderId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'DescribeActivationCodeDetails',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeActivationCodeDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of an activation code.
     *
     * @param request - DescribeActivationCodeDetailsRequest
     *
     * @returns DescribeActivationCodeDetailsResponse
     *
     * @param DescribeActivationCodeDetailsRequest $request
     *
     * @return DescribeActivationCodeDetailsResponse
     */
    public function describeActivationCodeDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeActivationCodeDetailsWithOptions($request, $runtime);
    }

    /**
     * Queries a list of activation codes.
     *
     * @param request - DescribeActivationCodesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeActivationCodesResponse
     *
     * @param DescribeActivationCodesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeActivationCodesResponse
     */
    public function describeActivationCodesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliyunOrderId) {
            @$query['AliyunOrderId'] = $request->aliyunOrderId;
        }

        if (null !== $request->macAddress) {
            @$query['MacAddress'] = $request->macAddress;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
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

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->systemIdentifier) {
            @$query['SystemIdentifier'] = $request->systemIdentifier;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeActivationCodes',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeActivationCodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of activation codes.
     *
     * @param request - DescribeActivationCodesRequest
     *
     * @returns DescribeActivationCodesResponse
     *
     * @param DescribeActivationCodesRequest $request
     *
     * @return DescribeActivationCodesResponse
     */
    public function describeActivationCodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeActivationCodesWithOptions($request, $runtime);
    }

    /**
     * 用户侧查询运维任务
     *
     * @param request - DescribeActiveOperationTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeActiveOperationTasksResponse
     *
     * @param DescribeActiveOperationTasksRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeActiveOperationTasksResponse
     */
    public function describeActiveOperationTasksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->allowCancel) {
            @$query['AllowCancel'] = $request->allowCancel;
        }

        if (null !== $request->allowChange) {
            @$query['AllowChange'] = $request->allowChange;
        }

        if (null !== $request->changeLevel) {
            @$query['ChangeLevel'] = $request->changeLevel;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->DBType) {
            @$query['DBType'] = $request->DBType;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
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

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->taskType) {
            @$query['TaskType'] = $request->taskType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeActiveOperationTasks',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeActiveOperationTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 用户侧查询运维任务
     *
     * @param request - DescribeActiveOperationTasksRequest
     *
     * @returns DescribeActiveOperationTasksResponse
     *
     * @param DescribeActiveOperationTasksRequest $request
     *
     * @return DescribeActiveOperationTasksResponse
     */
    public function describeActiveOperationTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeActiveOperationTasksWithOptions($request, $runtime);
    }

    /**
     * Queries the auto-renewal attributes of a subscription PolarDB cluster.
     *
     * @param request - DescribeAutoRenewAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAutoRenewAttributeResponse
     *
     * @param DescribeAutoRenewAttributeRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeAutoRenewAttributeResponse
     */
    public function describeAutoRenewAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterIds) {
            @$query['DBClusterIds'] = $request->DBClusterIds;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
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
            'action' => 'DescribeAutoRenewAttribute',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAutoRenewAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the auto-renewal attributes of a subscription PolarDB cluster.
     *
     * @param request - DescribeAutoRenewAttributeRequest
     *
     * @returns DescribeAutoRenewAttributeResponse
     *
     * @param DescribeAutoRenewAttributeRequest $request
     *
     * @return DescribeAutoRenewAttributeResponse
     */
    public function describeAutoRenewAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAutoRenewAttributeWithOptions($request, $runtime);
    }

    /**
     * Queries backup logs and the URLs to download the backup logs.
     *
     * @param request - DescribeBackupLogsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeBackupLogsResponse
     *
     * @param DescribeBackupLogsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeBackupLogsResponse
     */
    public function describeBackupLogsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupRegion) {
            @$query['BackupRegion'] = $request->backupRegion;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
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

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeBackupLogs',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeBackupLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries backup logs and the URLs to download the backup logs.
     *
     * @param request - DescribeBackupLogsRequest
     *
     * @returns DescribeBackupLogsResponse
     *
     * @param DescribeBackupLogsRequest $request
     *
     * @return DescribeBackupLogsResponse
     */
    public function describeBackupLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupLogsWithOptions($request, $runtime);
    }

    /**
     * Queries the automatic backup policy of a PolarDB cluster.
     *
     * @param request - DescribeBackupPolicyRequest
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
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'DescribeBackupPolicy',
            'version' => '2017-08-01',
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
     * Queries the automatic backup policy of a PolarDB cluster.
     *
     * @param request - DescribeBackupPolicyRequest
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
     * Queries the backup tasks of a PolarDB cluster.
     *
     * @param request - DescribeBackupTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeBackupTasksResponse
     *
     * @param DescribeBackupTasksRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeBackupTasksResponse
     */
    public function describeBackupTasksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupJobId) {
            @$query['BackupJobId'] = $request->backupJobId;
        }

        if (null !== $request->backupMode) {
            @$query['BackupMode'] = $request->backupMode;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'DescribeBackupTasks',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeBackupTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the backup tasks of a PolarDB cluster.
     *
     * @param request - DescribeBackupTasksRequest
     *
     * @returns DescribeBackupTasksResponse
     *
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
     * Queries the backup details of a PolarDB cluster.
     *
     * @param request - DescribeBackupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeBackupsResponse
     *
     * @param DescribeBackupsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeBackupsResponse
     */
    public function describeBackupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupId) {
            @$query['BackupId'] = $request->backupId;
        }

        if (null !== $request->backupMode) {
            @$query['BackupMode'] = $request->backupMode;
        }

        if (null !== $request->backupRegion) {
            @$query['BackupRegion'] = $request->backupRegion;
        }

        if (null !== $request->backupStatus) {
            @$query['BackupStatus'] = $request->backupStatus;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
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

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeBackups',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeBackupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the backup details of a PolarDB cluster.
     *
     * @param request - DescribeBackupsRequest
     *
     * @returns DescribeBackupsResponse
     *
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
     * Queries character sets that are supported by a PolarDB for MySQL cluster.
     *
     * @param request - DescribeCharacterSetNameRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCharacterSetNameResponse
     *
     * @param DescribeCharacterSetNameRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeCharacterSetNameResponse
     */
    public function describeCharacterSetNameWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
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
            'action' => 'DescribeCharacterSetName',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCharacterSetNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries character sets that are supported by a PolarDB for MySQL cluster.
     *
     * @param request - DescribeCharacterSetNameRequest
     *
     * @returns DescribeCharacterSetNameResponse
     *
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
     * Queries the specifications of a cluster.
     *
     * @param request - DescribeClassListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeClassListResponse
     *
     * @param DescribeClassListRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeClassListResponse
     */
    public function describeClassListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->commodityCode) {
            @$query['CommodityCode'] = $request->commodityCode;
        }

        if (null !== $request->masterHa) {
            @$query['MasterHa'] = $request->masterHa;
        }

        if (null !== $request->orderType) {
            @$query['OrderType'] = $request->orderType;
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
            'action' => 'DescribeClassList',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeClassListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the specifications of a cluster.
     *
     * @param request - DescribeClassListRequest
     *
     * @returns DescribeClassListResponse
     *
     * @param DescribeClassListRequest $request
     *
     * @return DescribeClassListResponse
     */
    public function describeClassList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClassListWithOptions($request, $runtime);
    }

    /**
     * Queries the IP address whitelists and security groups of a PolarDB cluster.
     *
     * @param request - DescribeDBClusterAccessWhitelistRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBClusterAccessWhitelistResponse
     *
     * @param DescribeDBClusterAccessWhitelistRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeDBClusterAccessWhitelistResponse
     */
    public function describeDBClusterAccessWhitelistWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'DescribeDBClusterAccessWhitelist',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDBClusterAccessWhitelistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the IP address whitelists and security groups of a PolarDB cluster.
     *
     * @param request - DescribeDBClusterAccessWhitelistRequest
     *
     * @returns DescribeDBClusterAccessWhitelistResponse
     *
     * @param DescribeDBClusterAccessWhitelistRequest $request
     *
     * @return DescribeDBClusterAccessWhitelistResponse
     */
    public function describeDBClusterAccessWhitelist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClusterAccessWhitelistWithOptions($request, $runtime);
    }

    /**
     * Queries information about a PolarDB cluster.
     *
     * @param request - DescribeDBClusterAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBClusterAttributeResponse
     *
     * @param DescribeDBClusterAttributeRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeDBClusterAttributeResponse
     */
    public function describeDBClusterAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->describeType) {
            @$query['DescribeType'] = $request->describeType;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'DescribeDBClusterAttribute',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDBClusterAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about a PolarDB cluster.
     *
     * @param request - DescribeDBClusterAttributeRequest
     *
     * @returns DescribeDBClusterAttributeResponse
     *
     * @param DescribeDBClusterAttributeRequest $request
     *
     * @return DescribeDBClusterAttributeResponse
     */
    public function describeDBClusterAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClusterAttributeWithOptions($request, $runtime);
    }

    /**
     * Describe SQL collector for a PolarDB cluster. Features related to SQL collector include audit log and SQL Explorer.
     *
     * @param request - DescribeDBClusterAuditLogCollectorRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBClusterAuditLogCollectorResponse
     *
     * @param DescribeDBClusterAuditLogCollectorRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeDBClusterAuditLogCollectorResponse
     */
    public function describeDBClusterAuditLogCollectorWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'DescribeDBClusterAuditLogCollector',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDBClusterAuditLogCollectorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Describe SQL collector for a PolarDB cluster. Features related to SQL collector include audit log and SQL Explorer.
     *
     * @param request - DescribeDBClusterAuditLogCollectorRequest
     *
     * @returns DescribeDBClusterAuditLogCollectorResponse
     *
     * @param DescribeDBClusterAuditLogCollectorRequest $request
     *
     * @return DescribeDBClusterAuditLogCollectorResponse
     */
    public function describeDBClusterAuditLogCollector($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClusterAuditLogCollectorWithOptions($request, $runtime);
    }

    /**
     * Queries available resources in a PolarDB cluster.
     *
     * @param request - DescribeDBClusterAvailableResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBClusterAvailableResourcesResponse
     *
     * @param DescribeDBClusterAvailableResourcesRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeDBClusterAvailableResourcesResponse
     */
    public function describeDBClusterAvailableResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBNodeClass) {
            @$query['DBNodeClass'] = $request->DBNodeClass;
        }

        if (null !== $request->DBType) {
            @$query['DBType'] = $request->DBType;
        }

        if (null !== $request->DBVersion) {
            @$query['DBVersion'] = $request->DBVersion;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
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

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDBClusterAvailableResources',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDBClusterAvailableResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries available resources in a PolarDB cluster.
     *
     * @param request - DescribeDBClusterAvailableResourcesRequest
     *
     * @returns DescribeDBClusterAvailableResourcesResponse
     *
     * @param DescribeDBClusterAvailableResourcesRequest $request
     *
     * @return DescribeDBClusterAvailableResourcesResponse
     */
    public function describeDBClusterAvailableResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClusterAvailableResourcesWithOptions($request, $runtime);
    }

    /**
     * Queries whether the source IP address can access a cluster.
     *
     * @param request - DescribeDBClusterConnectivityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBClusterConnectivityResponse
     *
     * @param DescribeDBClusterConnectivityRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeDBClusterConnectivityResponse
     */
    public function describeDBClusterConnectivityWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
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

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->sourceIpAddress) {
            @$query['SourceIpAddress'] = $request->sourceIpAddress;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDBClusterConnectivity',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDBClusterConnectivityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries whether the source IP address can access a cluster.
     *
     * @param request - DescribeDBClusterConnectivityRequest
     *
     * @returns DescribeDBClusterConnectivityResponse
     *
     * @param DescribeDBClusterConnectivityRequest $request
     *
     * @return DescribeDBClusterConnectivityResponse
     */
    public function describeDBClusterConnectivity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClusterConnectivityWithOptions($request, $runtime);
    }

    /**
     * Queries the endpoints of a PolarDB cluster.
     *
     * @param request - DescribeDBClusterEndpointsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBClusterEndpointsResponse
     *
     * @param DescribeDBClusterEndpointsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeDBClusterEndpointsResponse
     */
    public function describeDBClusterEndpointsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->DBEndpointId) {
            @$query['DBEndpointId'] = $request->DBEndpointId;
        }

        if (null !== $request->describeType) {
            @$query['DescribeType'] = $request->describeType;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'DescribeDBClusterEndpoints',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDBClusterEndpointsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the endpoints of a PolarDB cluster.
     *
     * @param request - DescribeDBClusterEndpointsRequest
     *
     * @returns DescribeDBClusterEndpointsResponse
     *
     * @param DescribeDBClusterEndpointsRequest $request
     *
     * @return DescribeDBClusterEndpointsResponse
     */
    public function describeDBClusterEndpoints($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClusterEndpointsWithOptions($request, $runtime);
    }

    /**
     * The ID of the synchronous task.
     *
     * @remarks
     * The ID of the request.
     *
     * @param request - DescribeDBClusterMigrationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBClusterMigrationResponse
     *
     * @param DescribeDBClusterMigrationRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeDBClusterMigrationResponse
     */
    public function describeDBClusterMigrationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'DescribeDBClusterMigration',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDBClusterMigrationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The ID of the synchronous task.
     *
     * @remarks
     * The ID of the request.
     *
     * @param request - DescribeDBClusterMigrationRequest
     *
     * @returns DescribeDBClusterMigrationResponse
     *
     * @param DescribeDBClusterMigrationRequest $request
     *
     * @return DescribeDBClusterMigrationResponse
     */
    public function describeDBClusterMigration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClusterMigrationWithOptions($request, $runtime);
    }

    /**
     * Queries the interval at which the monitoring data of a PolarDB cluster is collected.
     *
     * @param request - DescribeDBClusterMonitorRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBClusterMonitorResponse
     *
     * @param DescribeDBClusterMonitorRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDBClusterMonitorResponse
     */
    public function describeDBClusterMonitorWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'DescribeDBClusterMonitor',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDBClusterMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the interval at which the monitoring data of a PolarDB cluster is collected.
     *
     * @param request - DescribeDBClusterMonitorRequest
     *
     * @returns DescribeDBClusterMonitorResponse
     *
     * @param DescribeDBClusterMonitorRequest $request
     *
     * @return DescribeDBClusterMonitorResponse
     */
    public function describeDBClusterMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClusterMonitorWithOptions($request, $runtime);
    }

    /**
     * Queries the parameters of a PolarDB cluster.
     *
     * @param request - DescribeDBClusterParametersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBClusterParametersResponse
     *
     * @param DescribeDBClusterParametersRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDBClusterParametersResponse
     */
    public function describeDBClusterParametersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->describeType) {
            @$query['DescribeType'] = $request->describeType;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'DescribeDBClusterParameters',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDBClusterParametersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the parameters of a PolarDB cluster.
     *
     * @param request - DescribeDBClusterParametersRequest
     *
     * @returns DescribeDBClusterParametersResponse
     *
     * @param DescribeDBClusterParametersRequest $request
     *
     * @return DescribeDBClusterParametersResponse
     */
    public function describeDBClusterParameters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClusterParametersWithOptions($request, $runtime);
    }

    /**
     * Queries the performance data of a PolarDB cluster.
     *
     * @remarks
     *   When the monitoring data is collected every 5 seconds:
     *     *   If the query time range is less than or equal to 1 hour, the data is displayed at intervals of 5 seconds.
     *     *   If the query time range is less than or equal to one day, the data is displayed at intervals of 1 minute.
     *     *   If the query time range is less than or equal to seven days, the data is displayed at intervals of 10 minutes.
     *     *   If the query time range is less than or equal to 30 days, the data is displayed at intervals of 1 hour.
     *     *   When the query time range is greater than 30 days, the data is displayed at intervals of 1 day.
     * *   When the monitoring data is collected every 60 seconds:
     *     *   If the query time range is less than or equal to one day, the data is displayed at intervals of 1 minute.
     *     *   If the query time range is less than or equal to seven days, the data is displayed at intervals of 10 minutes.
     *     *   If the query time range is less than or equal to 30 days, the data is displayed at intervals of 1 hour.
     *     *   When the query time range is greater than 30 days, the data is displayed at intervals of 1 day.
     * >  By default, the monitoring data is collected once every 60 seconds. You can call the [ModifyDBClusterMonitor](https://help.aliyun.com/document_detail/159557.html) operation to set the data collection interval to every 5 seconds.
     *
     * @param request - DescribeDBClusterPerformanceRequest
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
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->key) {
            @$query['Key'] = $request->key;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDBClusterPerformance',
            'version' => '2017-08-01',
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
     * Queries the performance data of a PolarDB cluster.
     *
     * @remarks
     *   When the monitoring data is collected every 5 seconds:
     *     *   If the query time range is less than or equal to 1 hour, the data is displayed at intervals of 5 seconds.
     *     *   If the query time range is less than or equal to one day, the data is displayed at intervals of 1 minute.
     *     *   If the query time range is less than or equal to seven days, the data is displayed at intervals of 10 minutes.
     *     *   If the query time range is less than or equal to 30 days, the data is displayed at intervals of 1 hour.
     *     *   When the query time range is greater than 30 days, the data is displayed at intervals of 1 day.
     * *   When the monitoring data is collected every 60 seconds:
     *     *   If the query time range is less than or equal to one day, the data is displayed at intervals of 1 minute.
     *     *   If the query time range is less than or equal to seven days, the data is displayed at intervals of 10 minutes.
     *     *   If the query time range is less than or equal to 30 days, the data is displayed at intervals of 1 hour.
     *     *   When the query time range is greater than 30 days, the data is displayed at intervals of 1 day.
     * >  By default, the monitoring data is collected once every 60 seconds. You can call the [ModifyDBClusterMonitor](https://help.aliyun.com/document_detail/159557.html) operation to set the data collection interval to every 5 seconds.
     *
     * @param request - DescribeDBClusterPerformanceRequest
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
     * Queries the Secure Sockets Layer (SSL) settings of a PolarDB cluster.
     *
     * @param request - DescribeDBClusterSSLRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBClusterSSLResponse
     *
     * @param DescribeDBClusterSSLRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeDBClusterSSLResponse
     */
    public function describeDBClusterSSLWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'DescribeDBClusterSSL',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDBClusterSSLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the Secure Sockets Layer (SSL) settings of a PolarDB cluster.
     *
     * @param request - DescribeDBClusterSSLRequest
     *
     * @returns DescribeDBClusterSSLResponse
     *
     * @param DescribeDBClusterSSLRequest $request
     *
     * @return DescribeDBClusterSSLResponse
     */
    public function describeDBClusterSSL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClusterSSLWithOptions($request, $runtime);
    }

    /**
     * Queries the serverless configurations of a serverless cluster.
     *
     * @param request - DescribeDBClusterServerlessConfRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBClusterServerlessConfResponse
     *
     * @param DescribeDBClusterServerlessConfRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeDBClusterServerlessConfResponse
     */
    public function describeDBClusterServerlessConfWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'DescribeDBClusterServerlessConf',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDBClusterServerlessConfResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the serverless configurations of a serverless cluster.
     *
     * @param request - DescribeDBClusterServerlessConfRequest
     *
     * @returns DescribeDBClusterServerlessConfResponse
     *
     * @param DescribeDBClusterServerlessConfRequest $request
     *
     * @return DescribeDBClusterServerlessConfResponse
     */
    public function describeDBClusterServerlessConf($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClusterServerlessConfWithOptions($request, $runtime);
    }

    /**
     * Queries the transparent data encryption (TDE) settings of a PolarDB cluster.
     *
     * @param request - DescribeDBClusterTDERequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBClusterTDEResponse
     *
     * @param DescribeDBClusterTDERequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeDBClusterTDEResponse
     */
    public function describeDBClusterTDEWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'DescribeDBClusterTDE',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDBClusterTDEResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the transparent data encryption (TDE) settings of a PolarDB cluster.
     *
     * @param request - DescribeDBClusterTDERequest
     *
     * @returns DescribeDBClusterTDEResponse
     *
     * @param DescribeDBClusterTDERequest $request
     *
     * @return DescribeDBClusterTDEResponse
     */
    public function describeDBClusterTDE($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClusterTDEWithOptions($request, $runtime);
    }

    /**
     * Queries the information about the database engine version of a PolarDB for MySQL cluster.
     *
     * @param request - DescribeDBClusterVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBClusterVersionResponse
     *
     * @param DescribeDBClusterVersionRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDBClusterVersionResponse
     */
    public function describeDBClusterVersionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->describeType) {
            @$query['DescribeType'] = $request->describeType;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'DescribeDBClusterVersion',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDBClusterVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about the database engine version of a PolarDB for MySQL cluster.
     *
     * @param request - DescribeDBClusterVersionRequest
     *
     * @returns DescribeDBClusterVersionResponse
     *
     * @param DescribeDBClusterVersionRequest $request
     *
     * @return DescribeDBClusterVersionResponse
     */
    public function describeDBClusterVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClusterVersionWithOptions($request, $runtime);
    }

    /**
     * Queries PolarDB clusters or the clusters that can be accessed by an authorized RAM user.
     *
     * @param request - DescribeDBClustersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBClustersResponse
     *
     * @param DescribeDBClustersRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeDBClustersResponse
     */
    public function describeDBClustersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->connectionString) {
            @$query['ConnectionString'] = $request->connectionString;
        }

        if (null !== $request->DBClusterDescription) {
            @$query['DBClusterDescription'] = $request->DBClusterDescription;
        }

        if (null !== $request->DBClusterIds) {
            @$query['DBClusterIds'] = $request->DBClusterIds;
        }

        if (null !== $request->DBClusterStatus) {
            @$query['DBClusterStatus'] = $request->DBClusterStatus;
        }

        if (null !== $request->DBNodeIds) {
            @$query['DBNodeIds'] = $request->DBNodeIds;
        }

        if (null !== $request->DBType) {
            @$query['DBType'] = $request->DBType;
        }

        if (null !== $request->DBVersion) {
            @$query['DBVersion'] = $request->DBVersion;
        }

        if (null !== $request->describeType) {
            @$query['DescribeType'] = $request->describeType;
        }

        if (null !== $request->expired) {
            @$query['Expired'] = $request->expired;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
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

        if (null !== $request->payType) {
            @$query['PayType'] = $request->payType;
        }

        if (null !== $request->recentCreationInterval) {
            @$query['RecentCreationInterval'] = $request->recentCreationInterval;
        }

        if (null !== $request->recentExpirationInterval) {
            @$query['RecentExpirationInterval'] = $request->recentExpirationInterval;
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

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDBClusters',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDBClustersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries PolarDB clusters or the clusters that can be accessed by an authorized RAM user.
     *
     * @param request - DescribeDBClustersRequest
     *
     * @returns DescribeDBClustersResponse
     *
     * @param DescribeDBClustersRequest $request
     *
     * @return DescribeDBClustersResponse
     */
    public function describeDBClusters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClustersWithOptions($request, $runtime);
    }

    /**
     * Queries the information about PolarDB clusters that contain backup sets in a region.
     *
     * @param request - DescribeDBClustersWithBackupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBClustersWithBackupsResponse
     *
     * @param DescribeDBClustersWithBackupsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeDBClustersWithBackupsResponse
     */
    public function describeDBClustersWithBackupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterDescription) {
            @$query['DBClusterDescription'] = $request->DBClusterDescription;
        }

        if (null !== $request->DBClusterIds) {
            @$query['DBClusterIds'] = $request->DBClusterIds;
        }

        if (null !== $request->DBType) {
            @$query['DBType'] = $request->DBType;
        }

        if (null !== $request->DBVersion) {
            @$query['DBVersion'] = $request->DBVersion;
        }

        if (null !== $request->isDeleted) {
            @$query['IsDeleted'] = $request->isDeleted;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
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
            'action' => 'DescribeDBClustersWithBackups',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDBClustersWithBackupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about PolarDB clusters that contain backup sets in a region.
     *
     * @param request - DescribeDBClustersWithBackupsRequest
     *
     * @returns DescribeDBClustersWithBackupsResponse
     *
     * @param DescribeDBClustersWithBackupsRequest $request
     *
     * @return DescribeDBClustersWithBackupsResponse
     */
    public function describeDBClustersWithBackups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClustersWithBackupsWithOptions($request, $runtime);
    }

    /**
     * Queries attributes such as character sets and collations supported by a database in a PolarDB cluster.
     *
     * @param request - DescribeDBInitializeVariableRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBInitializeVariableResponse
     *
     * @param DescribeDBInitializeVariableRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeDBInitializeVariableResponse
     */
    public function describeDBInitializeVariableWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'DescribeDBInitializeVariable',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDBInitializeVariableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries attributes such as character sets and collations supported by a database in a PolarDB cluster.
     *
     * @param request - DescribeDBInitializeVariableRequest
     *
     * @returns DescribeDBInitializeVariableResponse
     *
     * @param DescribeDBInitializeVariableRequest $request
     *
     * @return DescribeDBInitializeVariableResponse
     */
    public function describeDBInitializeVariable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInitializeVariableWithOptions($request, $runtime);
    }

    /**
     * Queries the database links of a PolarDB for PostgreSQL (Compatible with Oracle) cluster.
     *
     * @remarks
     * > You can query only the database links that use a PolarDB for Oracle cluster as the source.
     *
     * @param request - DescribeDBLinksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBLinksResponse
     *
     * @param DescribeDBLinksRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeDBLinksResponse
     */
    public function describeDBLinksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->DBLinkName) {
            @$query['DBLinkName'] = $request->DBLinkName;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'DescribeDBLinks',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDBLinksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the database links of a PolarDB for PostgreSQL (Compatible with Oracle) cluster.
     *
     * @remarks
     * > You can query only the database links that use a PolarDB for Oracle cluster as the source.
     *
     * @param request - DescribeDBLinksRequest
     *
     * @returns DescribeDBLinksResponse
     *
     * @param DescribeDBLinksRequest $request
     *
     * @return DescribeDBLinksResponse
     */
    public function describeDBLinks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBLinksWithOptions($request, $runtime);
    }

    /**
     * Queries the performance data of a node in a PolarDB cluster.
     *
     * @remarks
     *   When the monitoring data is collected every 5 seconds:
     *     *   If the query time range is less than or equal to 1 hour, the data is displayed at intervals of 5 seconds.
     *     *   If the query time range is less than or equal to one day, the data is displayed at intervals of 1 minute.
     *     *   If the query time range is less than or equal to seven days, the data is displayed at intervals of 10 minutes.
     *     *   If the query time range is less than or equal to 30 days, the data is displayed at intervals of 1 hour.
     *     *   When the query time range is greater than 30 days, the data is displayed at intervals of 1 day.
     * *   When the monitoring data is collected every 60 seconds:
     *     *   If the query time range is less than or equal to one day, the data is displayed at intervals of 1 minute.
     *     *   If the query time range is less than or equal to seven days, the data is displayed at intervals of 10 minutes.
     *     *   If the query time range is less than or equal to 30 days, the data is displayed at intervals of 1 hour.
     *     *   When the query time range is greater than 30 days, the data is displayed at intervals of 1 day.
     * >  By default, the monitoring data is collected once every 60 seconds. You can call the [ModifyDBClusterMonitor](https://help.aliyun.com/document_detail/159557.html) operation to set the data collection interval to every 5 seconds.
     *
     * @param request - DescribeDBNodePerformanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBNodePerformanceResponse
     *
     * @param DescribeDBNodePerformanceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeDBNodePerformanceResponse
     */
    public function describeDBNodePerformanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->DBNodeId) {
            @$query['DBNodeId'] = $request->DBNodeId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->key) {
            @$query['Key'] = $request->key;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDBNodePerformance',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDBNodePerformanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the performance data of a node in a PolarDB cluster.
     *
     * @remarks
     *   When the monitoring data is collected every 5 seconds:
     *     *   If the query time range is less than or equal to 1 hour, the data is displayed at intervals of 5 seconds.
     *     *   If the query time range is less than or equal to one day, the data is displayed at intervals of 1 minute.
     *     *   If the query time range is less than or equal to seven days, the data is displayed at intervals of 10 minutes.
     *     *   If the query time range is less than or equal to 30 days, the data is displayed at intervals of 1 hour.
     *     *   When the query time range is greater than 30 days, the data is displayed at intervals of 1 day.
     * *   When the monitoring data is collected every 60 seconds:
     *     *   If the query time range is less than or equal to one day, the data is displayed at intervals of 1 minute.
     *     *   If the query time range is less than or equal to seven days, the data is displayed at intervals of 10 minutes.
     *     *   If the query time range is less than or equal to 30 days, the data is displayed at intervals of 1 hour.
     *     *   When the query time range is greater than 30 days, the data is displayed at intervals of 1 day.
     * >  By default, the monitoring data is collected once every 60 seconds. You can call the [ModifyDBClusterMonitor](https://help.aliyun.com/document_detail/159557.html) operation to set the data collection interval to every 5 seconds.
     *
     * @param request - DescribeDBNodePerformanceRequest
     *
     * @returns DescribeDBNodePerformanceResponse
     *
     * @param DescribeDBNodePerformanceRequest $request
     *
     * @return DescribeDBNodePerformanceResponse
     */
    public function describeDBNodePerformance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBNodePerformanceWithOptions($request, $runtime);
    }

    /**
     * Queries the parameters of a specified node in a cluster.
     *
     * @param request - DescribeDBNodesParametersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBNodesParametersResponse
     *
     * @param DescribeDBNodesParametersRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeDBNodesParametersResponse
     */
    public function describeDBNodesParametersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->DBNodeIds) {
            @$query['DBNodeIds'] = $request->DBNodeIds;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'DescribeDBNodesParameters',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDBNodesParametersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the parameters of a specified node in a cluster.
     *
     * @param request - DescribeDBNodesParametersRequest
     *
     * @returns DescribeDBNodesParametersResponse
     *
     * @param DescribeDBNodesParametersRequest $request
     *
     * @return DescribeDBNodesParametersResponse
     */
    public function describeDBNodesParameters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBNodesParametersWithOptions($request, $runtime);
    }

    /**
     * Queries the performance data of PolarProxy.
     *
     * @remarks
     * > This operation is applicable only to PolarDB for MySQL clusters.
     *
     * @param request - DescribeDBProxyPerformanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBProxyPerformanceResponse
     *
     * @param DescribeDBProxyPerformanceRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeDBProxyPerformanceResponse
     */
    public function describeDBProxyPerformanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->DBEndpointId) {
            @$query['DBEndpointId'] = $request->DBEndpointId;
        }

        if (null !== $request->DBNodeId) {
            @$query['DBNodeId'] = $request->DBNodeId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->key) {
            @$query['Key'] = $request->key;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDBProxyPerformance',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDBProxyPerformanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the performance data of PolarProxy.
     *
     * @remarks
     * > This operation is applicable only to PolarDB for MySQL clusters.
     *
     * @param request - DescribeDBProxyPerformanceRequest
     *
     * @returns DescribeDBProxyPerformanceResponse
     *
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
     * Queries the configurations of a cluster in Database Autonomy Service (DAS).
     *
     * @param request - DescribeDasConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDasConfigResponse
     *
     * @param DescribeDasConfigRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeDasConfigResponse
     */
    public function describeDasConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'DescribeDasConfig',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDasConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configurations of a cluster in Database Autonomy Service (DAS).
     *
     * @param request - DescribeDasConfigRequest
     *
     * @returns DescribeDasConfigResponse
     *
     * @param DescribeDasConfigRequest $request
     *
     * @return DescribeDasConfigResponse
     */
    public function describeDasConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDasConfigWithOptions($request, $runtime);
    }

    /**
     * Queries the information about databases in a PolarDB cluster.
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
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->DBName) {
            @$query['DBName'] = $request->DBName;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
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
            'action' => 'DescribeDatabases',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDatabasesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about databases in a PolarDB cluster.
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
     * Queries the information about the backup sets in a released PolarDB cluster.
     *
     * @remarks
     * Before you call this operation, make sure that the PolarDB cluster is in the **Released** state. You must also confirm that the **Retain All Backups Permanently** or **Retain Last Automatic Backup Permanently** backup retention policy takes effect after you release the cluster. If you delete all backup sets after the cluster is released, you cannot use this API operation to query the cluster.
     * >  You can call the [DescribeDBClusterAttribute](https://help.aliyun.com/document_detail/98181.html) operation to query the cluster status.
     *
     * @param request - DescribeDetachedBackupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDetachedBackupsResponse
     *
     * @param DescribeDetachedBackupsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDetachedBackupsResponse
     */
    public function describeDetachedBackupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupId) {
            @$query['BackupId'] = $request->backupId;
        }

        if (null !== $request->backupMode) {
            @$query['BackupMode'] = $request->backupMode;
        }

        if (null !== $request->backupRegion) {
            @$query['BackupRegion'] = $request->backupRegion;
        }

        if (null !== $request->backupStatus) {
            @$query['BackupStatus'] = $request->backupStatus;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
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

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDetachedBackups',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDetachedBackupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about the backup sets in a released PolarDB cluster.
     *
     * @remarks
     * Before you call this operation, make sure that the PolarDB cluster is in the **Released** state. You must also confirm that the **Retain All Backups Permanently** or **Retain Last Automatic Backup Permanently** backup retention policy takes effect after you release the cluster. If you delete all backup sets after the cluster is released, you cannot use this API operation to query the cluster.
     * >  You can call the [DescribeDBClusterAttribute](https://help.aliyun.com/document_detail/98181.html) operation to query the cluster status.
     *
     * @param request - DescribeDetachedBackupsRequest
     *
     * @returns DescribeDetachedBackupsResponse
     *
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
     * Queries the information about a Global Database Network (GDN).
     *
     * @param request - DescribeGlobalDatabaseNetworkRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeGlobalDatabaseNetworkResponse
     *
     * @param DescribeGlobalDatabaseNetworkRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeGlobalDatabaseNetworkResponse
     */
    public function describeGlobalDatabaseNetworkWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->GDNId) {
            @$query['GDNId'] = $request->GDNId;
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

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeGlobalDatabaseNetwork',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeGlobalDatabaseNetworkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a Global Database Network (GDN).
     *
     * @param request - DescribeGlobalDatabaseNetworkRequest
     *
     * @returns DescribeGlobalDatabaseNetworkResponse
     *
     * @param DescribeGlobalDatabaseNetworkRequest $request
     *
     * @return DescribeGlobalDatabaseNetworkResponse
     */
    public function describeGlobalDatabaseNetwork($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGlobalDatabaseNetworkWithOptions($request, $runtime);
    }

    /**
     * Queries the information about all Global Database Networks (GDNs) that belong to an account.
     *
     * @param request - DescribeGlobalDatabaseNetworksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeGlobalDatabaseNetworksResponse
     *
     * @param DescribeGlobalDatabaseNetworksRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeGlobalDatabaseNetworksResponse
     */
    public function describeGlobalDatabaseNetworksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->filterRegion) {
            @$query['FilterRegion'] = $request->filterRegion;
        }

        if (null !== $request->GDNDescription) {
            @$query['GDNDescription'] = $request->GDNDescription;
        }

        if (null !== $request->GDNId) {
            @$query['GDNId'] = $request->GDNId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeGlobalDatabaseNetworks',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeGlobalDatabaseNetworksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about all Global Database Networks (GDNs) that belong to an account.
     *
     * @param request - DescribeGlobalDatabaseNetworksRequest
     *
     * @returns DescribeGlobalDatabaseNetworksResponse
     *
     * @param DescribeGlobalDatabaseNetworksRequest $request
     *
     * @return DescribeGlobalDatabaseNetworksResponse
     */
    public function describeGlobalDatabaseNetworks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGlobalDatabaseNetworksWithOptions($request, $runtime);
    }

    /**
     * Queries global IP whitelist templates.
     *
     * @param request - DescribeGlobalSecurityIPGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeGlobalSecurityIPGroupResponse
     *
     * @param DescribeGlobalSecurityIPGroupRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeGlobalSecurityIPGroupResponse
     */
    public function describeGlobalSecurityIPGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->globalSecurityGroupId) {
            @$query['GlobalSecurityGroupId'] = $request->globalSecurityGroupId;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeGlobalSecurityIPGroup',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeGlobalSecurityIPGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries global IP whitelist templates.
     *
     * @param request - DescribeGlobalSecurityIPGroupRequest
     *
     * @returns DescribeGlobalSecurityIPGroupResponse
     *
     * @param DescribeGlobalSecurityIPGroupRequest $request
     *
     * @return DescribeGlobalSecurityIPGroupResponse
     */
    public function describeGlobalSecurityIPGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGlobalSecurityIPGroupWithOptions($request, $runtime);
    }

    /**
     * Queries the relationship between a cluster and a global IP whitelist template.
     *
     * @param request - DescribeGlobalSecurityIPGroupRelationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeGlobalSecurityIPGroupRelationResponse
     *
     * @param DescribeGlobalSecurityIPGroupRelationRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return DescribeGlobalSecurityIPGroupRelationResponse
     */
    public function describeGlobalSecurityIPGroupRelationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeGlobalSecurityIPGroupRelation',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeGlobalSecurityIPGroupRelationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the relationship between a cluster and a global IP whitelist template.
     *
     * @param request - DescribeGlobalSecurityIPGroupRelationRequest
     *
     * @returns DescribeGlobalSecurityIPGroupRelationResponse
     *
     * @param DescribeGlobalSecurityIPGroupRelationRequest $request
     *
     * @return DescribeGlobalSecurityIPGroupRelationResponse
     */
    public function describeGlobalSecurityIPGroupRelation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGlobalSecurityIPGroupRelationWithOptions($request, $runtime);
    }

    /**
     * 任务中心任务列表.
     *
     * @param request - DescribeHistoryTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeHistoryTasksResponse
     *
     * @param DescribeHistoryTasksRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeHistoryTasksResponse
     */
    public function describeHistoryTasksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fromExecTime) {
            @$query['FromExecTime'] = $request->fromExecTime;
        }

        if (null !== $request->fromStartTime) {
            @$query['FromStartTime'] = $request->fromStartTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceType) {
            @$query['InstanceType'] = $request->instanceType;
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

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        if (null !== $request->taskType) {
            @$query['TaskType'] = $request->taskType;
        }

        if (null !== $request->toExecTime) {
            @$query['ToExecTime'] = $request->toExecTime;
        }

        if (null !== $request->toStartTime) {
            @$query['ToStartTime'] = $request->toStartTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeHistoryTasks',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeHistoryTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 任务中心任务列表.
     *
     * @param request - DescribeHistoryTasksRequest
     *
     * @returns DescribeHistoryTasksResponse
     *
     * @param DescribeHistoryTasksRequest $request
     *
     * @return DescribeHistoryTasksResponse
     */
    public function describeHistoryTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHistoryTasksWithOptions($request, $runtime);
    }

    /**
     * Queries the information of a license order.
     *
     * @param request - DescribeLicenseOrderDetailsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeLicenseOrderDetailsResponse
     *
     * @param DescribeLicenseOrderDetailsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeLicenseOrderDetailsResponse
     */
    public function describeLicenseOrderDetailsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliyunOrderId) {
            @$query['AliyunOrderId'] = $request->aliyunOrderId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'DescribeLicenseOrderDetails',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeLicenseOrderDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information of a license order.
     *
     * @param request - DescribeLicenseOrderDetailsRequest
     *
     * @returns DescribeLicenseOrderDetailsResponse
     *
     * @param DescribeLicenseOrderDetailsRequest $request
     *
     * @return DescribeLicenseOrderDetailsResponse
     */
    public function describeLicenseOrderDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLicenseOrderDetailsWithOptions($request, $runtime);
    }

    /**
     * Queries a list of license orders.
     *
     * @param request - DescribeLicenseOrdersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeLicenseOrdersResponse
     *
     * @param DescribeLicenseOrdersRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeLicenseOrdersResponse
     */
    public function describeLicenseOrdersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliyunOrderId) {
            @$query['AliyunOrderId'] = $request->aliyunOrderId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->packageType) {
            @$query['PackageType'] = $request->packageType;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->purchaseChannel) {
            @$query['PurchaseChannel'] = $request->purchaseChannel;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->virtualOrder) {
            @$query['VirtualOrder'] = $request->virtualOrder;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeLicenseOrders',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeLicenseOrdersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of license orders.
     *
     * @param request - DescribeLicenseOrdersRequest
     *
     * @returns DescribeLicenseOrdersResponse
     *
     * @param DescribeLicenseOrdersRequest $request
     *
     * @return DescribeLicenseOrdersResponse
     */
    public function describeLicenseOrders($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLicenseOrdersWithOptions($request, $runtime);
    }

    /**
     * Queries the retention policy of log backups in a PolarDB cluster.
     *
     * @param request - DescribeLogBackupPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeLogBackupPolicyResponse
     *
     * @param DescribeLogBackupPolicyRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeLogBackupPolicyResponse
     */
    public function describeLogBackupPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'DescribeLogBackupPolicy',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeLogBackupPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the retention policy of log backups in a PolarDB cluster.
     *
     * @param request - DescribeLogBackupPolicyRequest
     *
     * @returns DescribeLogBackupPolicyResponse
     *
     * @param DescribeLogBackupPolicyRequest $request
     *
     * @return DescribeLogBackupPolicyResponse
     */
    public function describeLogBackupPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLogBackupPolicyWithOptions($request, $runtime);
    }

    /**
     * Queries the data masking rules of a PolarDB cluster or the information about a specified masking rule.
     *
     * @param request - DescribeMaskingRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMaskingRulesResponse
     *
     * @param DescribeMaskingRulesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeMaskingRulesResponse
     */
    public function describeMaskingRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->interfaceVersion) {
            @$query['InterfaceVersion'] = $request->interfaceVersion;
        }

        if (null !== $request->ruleNameList) {
            @$query['RuleNameList'] = $request->ruleNameList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeMaskingRules',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeMaskingRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the data masking rules of a PolarDB cluster or the information about a specified masking rule.
     *
     * @param request - DescribeMaskingRulesRequest
     *
     * @returns DescribeMaskingRulesResponse
     *
     * @param DescribeMaskingRulesRequest $request
     *
     * @return DescribeMaskingRulesResponse
     */
    public function describeMaskingRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMaskingRulesWithOptions($request, $runtime);
    }

    /**
     * Queries the details of the databases or tables that can be restored.
     *
     * @param request - DescribeMetaListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMetaListResponse
     *
     * @param DescribeMetaListRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeMetaListResponse
     */
    public function describeMetaListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupId) {
            @$query['BackupId'] = $request->backupId;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->getDbName) {
            @$query['GetDbName'] = $request->getDbName;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
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

        if (null !== $request->regionCode) {
            @$query['RegionCode'] = $request->regionCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->restoreTime) {
            @$query['RestoreTime'] = $request->restoreTime;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeMetaList',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeMetaListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of the databases or tables that can be restored.
     *
     * @param request - DescribeMetaListRequest
     *
     * @returns DescribeMetaListResponse
     *
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
     * Queries the information about a parameter template.
     *
     * @remarks
     * You can use parameter templates to manage multiple parameters at a time and apply existing parameters to a PolarDB cluster. For more information, see [Use a parameter template](https://help.aliyun.com/document_detail/207009.html).
     * > This parameter is valid only for a PolarDB for MySQL cluster.
     *
     * @param request - DescribeParameterGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeParameterGroupResponse
     *
     * @param DescribeParameterGroupRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeParameterGroupResponse
     */
    public function describeParameterGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->parameterGroupId) {
            @$query['ParameterGroupId'] = $request->parameterGroupId;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeParameterGroup',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeParameterGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a parameter template.
     *
     * @remarks
     * You can use parameter templates to manage multiple parameters at a time and apply existing parameters to a PolarDB cluster. For more information, see [Use a parameter template](https://help.aliyun.com/document_detail/207009.html).
     * > This parameter is valid only for a PolarDB for MySQL cluster.
     *
     * @param request - DescribeParameterGroupRequest
     *
     * @returns DescribeParameterGroupResponse
     *
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
     * Queries parameter templates that are available in a specified region.
     *
     * @remarks
     * You can use parameter templates to manage multiple parameters at a time and apply existing parameters to a PolarDB cluster. For more information, see [Use a parameter template](https://help.aliyun.com/document_detail/207009.html).
     * > This operation is applicable only to PolarDB for MySQL clusters.
     *
     * @param request - DescribeParameterGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeParameterGroupsResponse
     *
     * @param DescribeParameterGroupsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeParameterGroupsResponse
     */
    public function describeParameterGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBType) {
            @$query['DBType'] = $request->DBType;
        }

        if (null !== $request->DBVersion) {
            @$query['DBVersion'] = $request->DBVersion;
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
            'action' => 'DescribeParameterGroups',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeParameterGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries parameter templates that are available in a specified region.
     *
     * @remarks
     * You can use parameter templates to manage multiple parameters at a time and apply existing parameters to a PolarDB cluster. For more information, see [Use a parameter template](https://help.aliyun.com/document_detail/207009.html).
     * > This operation is applicable only to PolarDB for MySQL clusters.
     *
     * @param request - DescribeParameterGroupsRequest
     *
     * @returns DescribeParameterGroupsResponse
     *
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
     * Queries the default parameters in a cluster.
     *
     * @param request - DescribeParameterTemplatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeParameterTemplatesResponse
     *
     * @param DescribeParameterTemplatesRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeParameterTemplatesResponse
     */
    public function describeParameterTemplatesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBType) {
            @$query['DBType'] = $request->DBType;
        }

        if (null !== $request->DBVersion) {
            @$query['DBVersion'] = $request->DBVersion;
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
            'action' => 'DescribeParameterTemplates',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeParameterTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the default parameters in a cluster.
     *
     * @param request - DescribeParameterTemplatesRequest
     *
     * @returns DescribeParameterTemplatesResponse
     *
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
     * Queries the information about a pending event.
     *
     * @param request - DescribePendingMaintenanceActionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePendingMaintenanceActionResponse
     *
     * @param DescribePendingMaintenanceActionRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribePendingMaintenanceActionResponse
     */
    public function describePendingMaintenanceActionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->isHistory) {
            @$query['IsHistory'] = $request->isHistory;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
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

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
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

        if (null !== $request->taskType) {
            @$query['TaskType'] = $request->taskType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePendingMaintenanceAction',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePendingMaintenanceActionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a pending event.
     *
     * @param request - DescribePendingMaintenanceActionRequest
     *
     * @returns DescribePendingMaintenanceActionResponse
     *
     * @param DescribePendingMaintenanceActionRequest $request
     *
     * @return DescribePendingMaintenanceActionResponse
     */
    public function describePendingMaintenanceAction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePendingMaintenanceActionWithOptions($request, $runtime);
    }

    /**
     * Queries the numbers of scheduled events for different types of tasks.
     *
     * @param request - DescribePendingMaintenanceActionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePendingMaintenanceActionsResponse
     *
     * @param DescribePendingMaintenanceActionsRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribePendingMaintenanceActionsResponse
     */
    public function describePendingMaintenanceActionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->isHistory) {
            @$query['IsHistory'] = $request->isHistory;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePendingMaintenanceActions',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePendingMaintenanceActionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the numbers of scheduled events for different types of tasks.
     *
     * @param request - DescribePendingMaintenanceActionsRequest
     *
     * @returns DescribePendingMaintenanceActionsResponse
     *
     * @param DescribePendingMaintenanceActionsRequest $request
     *
     * @return DescribePendingMaintenanceActionsResponse
     */
    public function describePendingMaintenanceActions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePendingMaintenanceActionsWithOptions($request, $runtime);
    }

    /**
     * Queries whether the SQL Explorer feature is enabled for the cluster.
     *
     * @param request - DescribePolarSQLCollectorPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePolarSQLCollectorPolicyResponse
     *
     * @param DescribePolarSQLCollectorPolicyRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribePolarSQLCollectorPolicyResponse
     */
    public function describePolarSQLCollectorPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePolarSQLCollectorPolicy',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePolarSQLCollectorPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries whether the SQL Explorer feature is enabled for the cluster.
     *
     * @param request - DescribePolarSQLCollectorPolicyRequest
     *
     * @returns DescribePolarSQLCollectorPolicyResponse
     *
     * @param DescribePolarSQLCollectorPolicyRequest $request
     *
     * @return DescribePolarSQLCollectorPolicyResponse
     */
    public function describePolarSQLCollectorPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePolarSQLCollectorPolicyWithOptions($request, $runtime);
    }

    /**
     * Queries the regions and zones available for PolarDB.
     *
     * @param request - DescribeRegionsRequest
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
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'DescribeRegions',
            'version' => '2017-08-01',
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
     * Queries the regions and zones available for PolarDB.
     *
     * @param request - DescribeRegionsRequest
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
     * Queries the details of all scheduled tasks.
     *
     * @param request - DescribeScheduleTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeScheduleTasksResponse
     *
     * @param DescribeScheduleTasksRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeScheduleTasksResponse
     */
    public function describeScheduleTasksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterDescription) {
            @$query['DBClusterDescription'] = $request->DBClusterDescription;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->orderId) {
            @$query['OrderId'] = $request->orderId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
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

        if (null !== $request->plannedEndTime) {
            @$query['PlannedEndTime'] = $request->plannedEndTime;
        }

        if (null !== $request->plannedStartTime) {
            @$query['PlannedStartTime'] = $request->plannedStartTime;
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

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->taskAction) {
            @$query['TaskAction'] = $request->taskAction;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeScheduleTasks',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeScheduleTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of all scheduled tasks.
     *
     * @param request - DescribeScheduleTasksRequest
     *
     * @returns DescribeScheduleTasksResponse
     *
     * @param DescribeScheduleTasksRequest $request
     *
     * @return DescribeScheduleTasksResponse
     */
    public function describeScheduleTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScheduleTasksWithOptions($request, $runtime);
    }

    /**
     * Slow Log Details.
     *
     * @remarks
     * >- Only PolarDB MySQL Edition clusters support calling this interface.
     * >- Starting from September 1, 2024, due to the optimization of the SQL template algorithm, when calling this interface, the value of the SQLHash field will change. For more details, please refer to [Notice] Optimization of Slow SQL Template Algorithm (~~2845725~~).
     *
     * @param request - DescribeSlowLogRecordsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSlowLogRecordsResponse
     *
     * @param DescribeSlowLogRecordsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeSlowLogRecordsResponse
     */
    public function describeSlowLogRecordsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->DBName) {
            @$query['DBName'] = $request->DBName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->nodeId) {
            @$query['NodeId'] = $request->nodeId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
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

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->SQLHASH) {
            @$query['SQLHASH'] = $request->SQLHASH;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSlowLogRecords',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSlowLogRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Slow Log Details.
     *
     * @remarks
     * >- Only PolarDB MySQL Edition clusters support calling this interface.
     * >- Starting from September 1, 2024, due to the optimization of the SQL template algorithm, when calling this interface, the value of the SQLHash field will change. For more details, please refer to [Notice] Optimization of Slow SQL Template Algorithm (~~2845725~~).
     *
     * @param request - DescribeSlowLogRecordsRequest
     *
     * @returns DescribeSlowLogRecordsResponse
     *
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
     * Queries the statistics about the slow query logs of a PolarDB cluster.
     *
     * @remarks
     * > This operation is applicable only to PolarDB for MySQL clusters.
     *
     * @param request - DescribeSlowLogsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSlowLogsResponse
     *
     * @param DescribeSlowLogsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeSlowLogsResponse
     */
    public function describeSlowLogsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->DBName) {
            @$query['DBName'] = $request->DBName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
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

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSlowLogs',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSlowLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the statistics about the slow query logs of a PolarDB cluster.
     *
     * @remarks
     * > This operation is applicable only to PolarDB for MySQL clusters.
     *
     * @param request - DescribeSlowLogsRequest
     *
     * @returns DescribeSlowLogsResponse
     *
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
     * Queries the status of the tasks that are generated based on API operations, such as the status of instance creation tasks.
     *
     * @remarks
     *   You can call this operation to view the details of a task that is generated by a specific API operation or in the PolarDB console. The system calls the specific API operation when you perform an operation in the PolarDB console. For example, you can view the details of the task when you call the [CreateDBCluster](https://help.aliyun.com/document_detail/98169.html) operation or [create a cluster](https://help.aliyun.com/document_detail/58769.html) in the PolarDB console.
     * *   You can view the details of tasks that are generated only when you call the [CreateDBCluster](https://help.aliyun.com/document_detail/98169.html) operation to create a cluster and `CreationOption` is not set to `CreateGdnStandby`.
     *
     * @param request - DescribeTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTasksResponse
     *
     * @param DescribeTasksRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeTasksResponse
     */
    public function describeTasksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->DBNodeId) {
            @$query['DBNodeId'] = $request->DBNodeId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
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

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTasks',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the status of the tasks that are generated based on API operations, such as the status of instance creation tasks.
     *
     * @remarks
     *   You can call this operation to view the details of a task that is generated by a specific API operation or in the PolarDB console. The system calls the specific API operation when you perform an operation in the PolarDB console. For example, you can view the details of the task when you call the [CreateDBCluster](https://help.aliyun.com/document_detail/98169.html) operation or [create a cluster](https://help.aliyun.com/document_detail/58769.html) in the PolarDB console.
     * *   You can view the details of tasks that are generated only when you call the [CreateDBCluster](https://help.aliyun.com/document_detail/98169.html) operation to create a cluster and `CreationOption` is not set to `CreateGdnStandby`.
     *
     * @param request - DescribeTasksRequest
     *
     * @returns DescribeTasksResponse
     *
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
     * Queries the Key Management Service (KMS)-managed customer master keys (CMKs) that are used to encrypt data in a PolarDB cluster.
     *
     * @param request - DescribeUserEncryptionKeyListRequest
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
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
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

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->TDERegion) {
            @$query['TDERegion'] = $request->TDERegion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeUserEncryptionKeyList',
            'version' => '2017-08-01',
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
     * Queries the Key Management Service (KMS)-managed customer master keys (CMKs) that are used to encrypt data in a PolarDB cluster.
     *
     * @param request - DescribeUserEncryptionKeyListRequest
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
     * Queries a vSwitch.
     *
     * @param request - DescribeVSwitchesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVSwitchesResponse
     *
     * @param DescribeVSwitchesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeVSwitchesResponse
     */
    public function describeVSwitchesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dedicatedHostGroupId) {
            @$query['DedicatedHostGroupId'] = $request->dedicatedHostGroupId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
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
            'action' => 'DescribeVSwitches',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVSwitchesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a vSwitch.
     *
     * @param request - DescribeVSwitchesRequest
     *
     * @returns DescribeVSwitchesResponse
     *
     * @param DescribeVSwitchesRequest $request
     *
     * @return DescribeVSwitchesResponse
     */
    public function describeVSwitches($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVSwitchesWithOptions($request, $runtime);
    }

    /**
     * Disables a stable serverless cluster.
     *
     * @param request - DisableDBClusterServerlessRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableDBClusterServerlessResponse
     *
     * @param DisableDBClusterServerlessRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DisableDBClusterServerlessResponse
     */
    public function disableDBClusterServerlessWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'DisableDBClusterServerless',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableDBClusterServerlessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables a stable serverless cluster.
     *
     * @param request - DisableDBClusterServerlessRequest
     *
     * @returns DisableDBClusterServerlessResponse
     *
     * @param DisableDBClusterServerlessRequest $request
     *
     * @return DisableDBClusterServerlessResponse
     */
    public function disableDBClusterServerless($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableDBClusterServerlessWithOptions($request, $runtime);
    }

    /**
     * Enables a stable serverless cluster.
     *
     * @param request - EnableDBClusterServerlessRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableDBClusterServerlessResponse
     *
     * @param EnableDBClusterServerlessRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return EnableDBClusterServerlessResponse
     */
    public function enableDBClusterServerlessWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->scaleApRoNumMax) {
            @$query['ScaleApRoNumMax'] = $request->scaleApRoNumMax;
        }

        if (null !== $request->scaleApRoNumMin) {
            @$query['ScaleApRoNumMin'] = $request->scaleApRoNumMin;
        }

        if (null !== $request->scaleMax) {
            @$query['ScaleMax'] = $request->scaleMax;
        }

        if (null !== $request->scaleMin) {
            @$query['ScaleMin'] = $request->scaleMin;
        }

        if (null !== $request->scaleRoNumMax) {
            @$query['ScaleRoNumMax'] = $request->scaleRoNumMax;
        }

        if (null !== $request->scaleRoNumMin) {
            @$query['ScaleRoNumMin'] = $request->scaleRoNumMin;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableDBClusterServerless',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableDBClusterServerlessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables a stable serverless cluster.
     *
     * @param request - EnableDBClusterServerlessRequest
     *
     * @returns EnableDBClusterServerlessResponse
     *
     * @param EnableDBClusterServerlessRequest $request
     *
     * @return EnableDBClusterServerlessResponse
     */
    public function enableDBClusterServerless($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableDBClusterServerlessWithOptions($request, $runtime);
    }

    /**
     * Modifies the status of SQL firewall rules for a cluster.
     *
     * @param request - EnableFirewallRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableFirewallRulesResponse
     *
     * @param EnableFirewallRulesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return EnableFirewallRulesResponse
     */
    public function enableFirewallRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->enable) {
            @$query['Enable'] = $request->enable;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->ruleNameList) {
            @$query['RuleNameList'] = $request->ruleNameList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableFirewallRules',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableFirewallRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the status of SQL firewall rules for a cluster.
     *
     * @param request - EnableFirewallRulesRequest
     *
     * @returns EnableFirewallRulesResponse
     *
     * @param EnableFirewallRulesRequest $request
     *
     * @return EnableFirewallRulesResponse
     */
    public function enableFirewallRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableFirewallRulesWithOptions($request, $runtime);
    }

    /**
     * Evaluates available resources.
     *
     * @param request - EvaluateRegionResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EvaluateRegionResourceResponse
     *
     * @param EvaluateRegionResourceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return EvaluateRegionResourceResponse
     */
    public function evaluateRegionResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceConnType) {
            @$query['DBInstanceConnType'] = $request->DBInstanceConnType;
        }

        if (null !== $request->DBNodeClass) {
            @$query['DBNodeClass'] = $request->DBNodeClass;
        }

        if (null !== $request->DBType) {
            @$query['DBType'] = $request->DBType;
        }

        if (null !== $request->DBVersion) {
            @$query['DBVersion'] = $request->DBVersion;
        }

        if (null !== $request->dispenseMode) {
            @$query['DispenseMode'] = $request->dispenseMode;
        }

        if (null !== $request->needMaxScaleLink) {
            @$query['NeedMaxScaleLink'] = $request->needMaxScaleLink;
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

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->subDomain) {
            @$query['SubDomain'] = $request->subDomain;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EvaluateRegionResource',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EvaluateRegionResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Evaluates available resources.
     *
     * @param request - EvaluateRegionResourceRequest
     *
     * @returns EvaluateRegionResourceResponse
     *
     * @param EvaluateRegionResourceRequest $request
     *
     * @return EvaluateRegionResourceResponse
     */
    public function evaluateRegionResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->evaluateRegionResourceWithOptions($request, $runtime);
    }

    /**
     * Performs a manual failover to promote a read-only node to the primary node in a PolarDB cluster.
     *
     * @param request - FailoverDBClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FailoverDBClusterResponse
     *
     * @param FailoverDBClusterRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return FailoverDBClusterResponse
     */
    public function failoverDBClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->rollBackForDisaster) {
            @$query['RollBackForDisaster'] = $request->rollBackForDisaster;
        }

        if (null !== $request->targetDBNodeId) {
            @$query['TargetDBNodeId'] = $request->targetDBNodeId;
        }

        if (null !== $request->targetZoneType) {
            @$query['TargetZoneType'] = $request->targetZoneType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'FailoverDBCluster',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return FailoverDBClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Performs a manual failover to promote a read-only node to the primary node in a PolarDB cluster.
     *
     * @param request - FailoverDBClusterRequest
     *
     * @returns FailoverDBClusterResponse
     *
     * @param FailoverDBClusterRequest $request
     *
     * @return FailoverDBClusterResponse
     */
    public function failoverDBCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->failoverDBClusterWithOptions($request, $runtime);
    }

    /**
     * Grants a standard account the permissions to access one or more databases in a specified PolarDB cluster.
     *
     * @remarks
     * > *   An account can be authorized to access one or more databases.
     * > *   If the specified account already has the access permissions on the specified databases, the operation returns a successful response.
     * > *   Before you call this operation, make sure that the cluster is in the Running state. Otherwise, the operation fails.
     * > *   You can call this operation only on a PolarDB for MySQL cluster.
     * > *   By default, a privileged account for a cluster has all the permissions on the databases in the cluster.
     *
     * @param request - GrantAccountPrivilegeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GrantAccountPrivilegeResponse
     *
     * @param GrantAccountPrivilegeRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GrantAccountPrivilegeResponse
     */
    public function grantAccountPrivilegeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountName) {
            @$query['AccountName'] = $request->accountName;
        }

        if (null !== $request->accountPrivilege) {
            @$query['AccountPrivilege'] = $request->accountPrivilege;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->DBName) {
            @$query['DBName'] = $request->DBName;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'GrantAccountPrivilege',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GrantAccountPrivilegeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Grants a standard account the permissions to access one or more databases in a specified PolarDB cluster.
     *
     * @remarks
     * > *   An account can be authorized to access one or more databases.
     * > *   If the specified account already has the access permissions on the specified databases, the operation returns a successful response.
     * > *   Before you call this operation, make sure that the cluster is in the Running state. Otherwise, the operation fails.
     * > *   You can call this operation only on a PolarDB for MySQL cluster.
     * > *   By default, a privileged account for a cluster has all the permissions on the databases in the cluster.
     *
     * @param request - GrantAccountPrivilegeRequest
     *
     * @returns GrantAccountPrivilegeResponse
     *
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
     * Queries the tags that are added to one or more PolarDB clusters, or the PolarDB clusters to which one or more tags are added.
     *
     * @param request - ListTagResourcesRequest
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
            'version' => '2017-08-01',
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
     * Queries the tags that are added to one or more PolarDB clusters, or the PolarDB clusters to which one or more tags are added.
     *
     * @param request - ListTagResourcesRequest
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
     * Manually starts a cluster.
     *
     * @param request - ManuallyStartDBClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ManuallyStartDBClusterResponse
     *
     * @param ManuallyStartDBClusterRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ManuallyStartDBClusterResponse
     */
    public function manuallyStartDBClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
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
            'action' => 'ManuallyStartDBCluster',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ManuallyStartDBClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Manually starts a cluster.
     *
     * @param request - ManuallyStartDBClusterRequest
     *
     * @returns ManuallyStartDBClusterResponse
     *
     * @param ManuallyStartDBClusterRequest $request
     *
     * @return ManuallyStartDBClusterResponse
     */
    public function manuallyStartDBCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->manuallyStartDBClusterWithOptions($request, $runtime);
    }

    /**
     * Modifies the description of a database account of a PolarDB cluster.
     *
     * @param request - ModifyAccountDescriptionRequest
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

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'ModifyAccountDescription',
            'version' => '2017-08-01',
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
     * Modifies the description of a database account of a PolarDB cluster.
     *
     * @param request - ModifyAccountDescriptionRequest
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
     * Changes the password of a database account for a specified PolarDB cluster.
     *
     * @param request - ModifyAccountPasswordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyAccountPasswordResponse
     *
     * @param ModifyAccountPasswordRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyAccountPasswordResponse
     */
    public function modifyAccountPasswordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountName) {
            @$query['AccountName'] = $request->accountName;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->newAccountPassword) {
            @$query['NewAccountPassword'] = $request->newAccountPassword;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->passwordType) {
            @$query['PasswordType'] = $request->passwordType;
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
            'action' => 'ModifyAccountPassword',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyAccountPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the password of a database account for a specified PolarDB cluster.
     *
     * @param request - ModifyAccountPasswordRequest
     *
     * @returns ModifyAccountPasswordResponse
     *
     * @param ModifyAccountPasswordRequest $request
     *
     * @return ModifyAccountPasswordResponse
     */
    public function modifyAccountPassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAccountPasswordWithOptions($request, $runtime);
    }

    /**
     * Modifies the switching time of scheduled O\\&M events for an instance.
     *
     * @param request - ModifyActiveOperationTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyActiveOperationTasksResponse
     *
     * @param ModifyActiveOperationTasksRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyActiveOperationTasksResponse
     */
    public function modifyActiveOperationTasksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->immediateStart) {
            @$query['ImmediateStart'] = $request->immediateStart;
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

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->switchTime) {
            @$query['SwitchTime'] = $request->switchTime;
        }

        if (null !== $request->taskIds) {
            @$query['TaskIds'] = $request->taskIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyActiveOperationTasks',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyActiveOperationTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the switching time of scheduled O\\&M events for an instance.
     *
     * @param request - ModifyActiveOperationTasksRequest
     *
     * @returns ModifyActiveOperationTasksResponse
     *
     * @param ModifyActiveOperationTasksRequest $request
     *
     * @return ModifyActiveOperationTasksResponse
     */
    public function modifyActiveOperationTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyActiveOperationTasksWithOptions($request, $runtime);
    }

    /**
     * Modifies the auto-renewal attributes of a subscription PolarDB cluster.
     *
     * @param request - ModifyAutoRenewAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyAutoRenewAttributeResponse
     *
     * @param ModifyAutoRenewAttributeRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyAutoRenewAttributeResponse
     */
    public function modifyAutoRenewAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterIds) {
            @$query['DBClusterIds'] = $request->DBClusterIds;
        }

        if (null !== $request->duration) {
            @$query['Duration'] = $request->duration;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->periodUnit) {
            @$query['PeriodUnit'] = $request->periodUnit;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->renewalStatus) {
            @$query['RenewalStatus'] = $request->renewalStatus;
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
            'action' => 'ModifyAutoRenewAttribute',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyAutoRenewAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the auto-renewal attributes of a subscription PolarDB cluster.
     *
     * @param request - ModifyAutoRenewAttributeRequest
     *
     * @returns ModifyAutoRenewAttributeResponse
     *
     * @param ModifyAutoRenewAttributeRequest $request
     *
     * @return ModifyAutoRenewAttributeResponse
     */
    public function modifyAutoRenewAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAutoRenewAttributeWithOptions($request, $runtime);
    }

    /**
     * Modifies the automatic backup policy of a PolarDB cluster.
     *
     * @remarks
     * > You can also modify the automatic backup policy of a PolarDB cluster in the console. For more information, see [Backup settings](https://help.aliyun.com/document_detail/280422.html).
     *
     * @param request - ModifyBackupPolicyRequest
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
        if (null !== $request->backupFrequency) {
            @$query['BackupFrequency'] = $request->backupFrequency;
        }

        if (null !== $request->backupRetentionPolicyOnClusterDeletion) {
            @$query['BackupRetentionPolicyOnClusterDeletion'] = $request->backupRetentionPolicyOnClusterDeletion;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->dataLevel1BackupFrequency) {
            @$query['DataLevel1BackupFrequency'] = $request->dataLevel1BackupFrequency;
        }

        if (null !== $request->dataLevel1BackupPeriod) {
            @$query['DataLevel1BackupPeriod'] = $request->dataLevel1BackupPeriod;
        }

        if (null !== $request->dataLevel1BackupRetentionPeriod) {
            @$query['DataLevel1BackupRetentionPeriod'] = $request->dataLevel1BackupRetentionPeriod;
        }

        if (null !== $request->dataLevel1BackupTime) {
            @$query['DataLevel1BackupTime'] = $request->dataLevel1BackupTime;
        }

        if (null !== $request->dataLevel2BackupAnotherRegionRegion) {
            @$query['DataLevel2BackupAnotherRegionRegion'] = $request->dataLevel2BackupAnotherRegionRegion;
        }

        if (null !== $request->dataLevel2BackupAnotherRegionRetentionPeriod) {
            @$query['DataLevel2BackupAnotherRegionRetentionPeriod'] = $request->dataLevel2BackupAnotherRegionRetentionPeriod;
        }

        if (null !== $request->dataLevel2BackupPeriod) {
            @$query['DataLevel2BackupPeriod'] = $request->dataLevel2BackupPeriod;
        }

        if (null !== $request->dataLevel2BackupRetentionPeriod) {
            @$query['DataLevel2BackupRetentionPeriod'] = $request->dataLevel2BackupRetentionPeriod;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->preferredBackupPeriod) {
            @$query['PreferredBackupPeriod'] = $request->preferredBackupPeriod;
        }

        if (null !== $request->preferredBackupTime) {
            @$query['PreferredBackupTime'] = $request->preferredBackupTime;
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
            'action' => 'ModifyBackupPolicy',
            'version' => '2017-08-01',
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
     * Modifies the automatic backup policy of a PolarDB cluster.
     *
     * @remarks
     * > You can also modify the automatic backup policy of a PolarDB cluster in the console. For more information, see [Backup settings](https://help.aliyun.com/document_detail/280422.html).
     *
     * @param request - ModifyBackupPolicyRequest
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
     * Modifies the configurations of a PolarDB for MySQL cluster.
     *
     * @param request - ModifyDBClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDBClusterResponse
     *
     * @param ModifyDBClusterRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ModifyDBClusterResponse
     */
    public function modifyDBClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->compressStorage) {
            @$query['CompressStorage'] = $request->compressStorage;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->DBNodeCrashList) {
            @$query['DBNodeCrashList'] = $request->DBNodeCrashList;
        }

        if (null !== $request->dataSyncMode) {
            @$query['DataSyncMode'] = $request->dataSyncMode;
        }

        if (null !== $request->faultInjectionType) {
            @$query['FaultInjectionType'] = $request->faultInjectionType;
        }

        if (null !== $request->faultSimulateMode) {
            @$query['FaultSimulateMode'] = $request->faultSimulateMode;
        }

        if (null !== $request->imciAutoIndex) {
            @$query['ImciAutoIndex'] = $request->imciAutoIndex;
        }

        if (null !== $request->modifyRowCompression) {
            @$query['ModifyRowCompression'] = $request->modifyRowCompression;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->standbyHAMode) {
            @$query['StandbyHAMode'] = $request->standbyHAMode;
        }

        if (null !== $request->storageAutoScale) {
            @$query['StorageAutoScale'] = $request->storageAutoScale;
        }

        if (null !== $request->storageUpperBound) {
            @$query['StorageUpperBound'] = $request->storageUpperBound;
        }

        if (null !== $request->tableMeta) {
            @$query['TableMeta'] = $request->tableMeta;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDBCluster',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDBClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the configurations of a PolarDB for MySQL cluster.
     *
     * @param request - ModifyDBClusterRequest
     *
     * @returns ModifyDBClusterResponse
     *
     * @param ModifyDBClusterRequest $request
     *
     * @return ModifyDBClusterResponse
     */
    public function modifyDBCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBClusterWithOptions($request, $runtime);
    }

    /**
     * Creates or modifies the whitelists (IP whitelists and security groups) of a specified cluster.
     *
     * @param request - ModifyDBClusterAccessWhitelistRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDBClusterAccessWhitelistResponse
     *
     * @param ModifyDBClusterAccessWhitelistRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ModifyDBClusterAccessWhitelistResponse
     */
    public function modifyDBClusterAccessWhitelistWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterIPArrayAttribute) {
            @$query['DBClusterIPArrayAttribute'] = $request->DBClusterIPArrayAttribute;
        }

        if (null !== $request->DBClusterIPArrayName) {
            @$query['DBClusterIPArrayName'] = $request->DBClusterIPArrayName;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->modifyMode) {
            @$query['ModifyMode'] = $request->modifyMode;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityGroupIds) {
            @$query['SecurityGroupIds'] = $request->securityGroupIds;
        }

        if (null !== $request->securityIps) {
            @$query['SecurityIps'] = $request->securityIps;
        }

        if (null !== $request->whiteListType) {
            @$query['WhiteListType'] = $request->whiteListType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDBClusterAccessWhitelist',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDBClusterAccessWhitelistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates or modifies the whitelists (IP whitelists and security groups) of a specified cluster.
     *
     * @param request - ModifyDBClusterAccessWhitelistRequest
     *
     * @returns ModifyDBClusterAccessWhitelistResponse
     *
     * @param ModifyDBClusterAccessWhitelistRequest $request
     *
     * @return ModifyDBClusterAccessWhitelistResponse
     */
    public function modifyDBClusterAccessWhitelist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBClusterAccessWhitelistWithOptions($request, $runtime);
    }

    /**
     * Modifies cluster parameters and applies them to specified nodes.
     *
     * @param request - ModifyDBClusterAndNodesParametersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDBClusterAndNodesParametersResponse
     *
     * @param ModifyDBClusterAndNodesParametersRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return ModifyDBClusterAndNodesParametersResponse
     */
    public function modifyDBClusterAndNodesParametersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->DBNodeIds) {
            @$query['DBNodeIds'] = $request->DBNodeIds;
        }

        if (null !== $request->fromTimeService) {
            @$query['FromTimeService'] = $request->fromTimeService;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->parameterGroupId) {
            @$query['ParameterGroupId'] = $request->parameterGroupId;
        }

        if (null !== $request->parameters) {
            @$query['Parameters'] = $request->parameters;
        }

        if (null !== $request->plannedEndTime) {
            @$query['PlannedEndTime'] = $request->plannedEndTime;
        }

        if (null !== $request->plannedStartTime) {
            @$query['PlannedStartTime'] = $request->plannedStartTime;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->standbyClusterIdListNeedToSync) {
            @$query['StandbyClusterIdListNeedToSync'] = $request->standbyClusterIdListNeedToSync;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDBClusterAndNodesParameters',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDBClusterAndNodesParametersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies cluster parameters and applies them to specified nodes.
     *
     * @param request - ModifyDBClusterAndNodesParametersRequest
     *
     * @returns ModifyDBClusterAndNodesParametersResponse
     *
     * @param ModifyDBClusterAndNodesParametersRequest $request
     *
     * @return ModifyDBClusterAndNodesParametersResponse
     */
    public function modifyDBClusterAndNodesParameters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBClusterAndNodesParametersWithOptions($request, $runtime);
    }

    /**
     * Changes the high availability mode of the cluster.
     *
     * @param request - ModifyDBClusterArchRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDBClusterArchResponse
     *
     * @param ModifyDBClusterArchRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyDBClusterArchResponse
     */
    public function modifyDBClusterArchWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->hotStandbyCluster) {
            @$query['HotStandbyCluster'] = $request->hotStandbyCluster;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->standbyAZ) {
            @$query['StandbyAZ'] = $request->standbyAZ;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDBClusterArch',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDBClusterArchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the high availability mode of the cluster.
     *
     * @param request - ModifyDBClusterArchRequest
     *
     * @returns ModifyDBClusterArchResponse
     *
     * @param ModifyDBClusterArchRequest $request
     *
     * @return ModifyDBClusterArchResponse
     */
    public function modifyDBClusterArch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBClusterArchWithOptions($request, $runtime);
    }

    /**
     * Enables or disables SQL collector for a PolarDB cluster. The features related to SQL collector include Audit Logs and SQL Explorer.
     *
     * @param request - ModifyDBClusterAuditLogCollectorRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDBClusterAuditLogCollectorResponse
     *
     * @param ModifyDBClusterAuditLogCollectorRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return ModifyDBClusterAuditLogCollectorResponse
     */
    public function modifyDBClusterAuditLogCollectorWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->collectorStatus) {
            @$query['CollectorStatus'] = $request->collectorStatus;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'ModifyDBClusterAuditLogCollector',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDBClusterAuditLogCollectorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables or disables SQL collector for a PolarDB cluster. The features related to SQL collector include Audit Logs and SQL Explorer.
     *
     * @param request - ModifyDBClusterAuditLogCollectorRequest
     *
     * @returns ModifyDBClusterAuditLogCollectorResponse
     *
     * @param ModifyDBClusterAuditLogCollectorRequest $request
     *
     * @return ModifyDBClusterAuditLogCollectorResponse
     */
    public function modifyDBClusterAuditLogCollector($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBClusterAuditLogCollectorWithOptions($request, $runtime);
    }

    /**
     * Enables or disables the cluster lock feature for a PolarDB cluster.
     *
     * @param request - ModifyDBClusterDeletionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDBClusterDeletionResponse
     *
     * @param ModifyDBClusterDeletionRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyDBClusterDeletionResponse
     */
    public function modifyDBClusterDeletionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->protection) {
            @$query['Protection'] = $request->protection;
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
            'action' => 'ModifyDBClusterDeletion',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDBClusterDeletionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables or disables the cluster lock feature for a PolarDB cluster.
     *
     * @param request - ModifyDBClusterDeletionRequest
     *
     * @returns ModifyDBClusterDeletionResponse
     *
     * @param ModifyDBClusterDeletionRequest $request
     *
     * @return ModifyDBClusterDeletionResponse
     */
    public function modifyDBClusterDeletion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBClusterDeletionWithOptions($request, $runtime);
    }

    /**
     * Modifies the name of a PolarDB cluster.
     *
     * @param request - ModifyDBClusterDescriptionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDBClusterDescriptionResponse
     *
     * @param ModifyDBClusterDescriptionRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyDBClusterDescriptionResponse
     */
    public function modifyDBClusterDescriptionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterDescription) {
            @$query['DBClusterDescription'] = $request->DBClusterDescription;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'ModifyDBClusterDescription',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDBClusterDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the name of a PolarDB cluster.
     *
     * @param request - ModifyDBClusterDescriptionRequest
     *
     * @returns ModifyDBClusterDescriptionResponse
     *
     * @param ModifyDBClusterDescriptionRequest $request
     *
     * @return ModifyDBClusterDescriptionResponse
     */
    public function modifyDBClusterDescription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBClusterDescriptionWithOptions($request, $runtime);
    }

    /**
     * Modifies the attributes of a specified PolarDB cluster endpoint. For example, you can modify the following attributes for the specified cluster endpoint: read/write mode, consistency level, transaction splitting, primary node accepts read requests, and connection pool. You can also call the operation to specify whether newly added nodes are automatically associated with the specified cluster endpoint.
     *
     * @param request - ModifyDBClusterEndpointRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDBClusterEndpointResponse
     *
     * @param ModifyDBClusterEndpointRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyDBClusterEndpointResponse
     */
    public function modifyDBClusterEndpointWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoAddNewNodes) {
            @$query['AutoAddNewNodes'] = $request->autoAddNewNodes;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->DBEndpointDescription) {
            @$query['DBEndpointDescription'] = $request->DBEndpointDescription;
        }

        if (null !== $request->DBEndpointId) {
            @$query['DBEndpointId'] = $request->DBEndpointId;
        }

        if (null !== $request->endpointConfig) {
            @$query['EndpointConfig'] = $request->endpointConfig;
        }

        if (null !== $request->nodes) {
            @$query['Nodes'] = $request->nodes;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->polarSccTimeoutAction) {
            @$query['PolarSccTimeoutAction'] = $request->polarSccTimeoutAction;
        }

        if (null !== $request->polarSccWaitTimeout) {
            @$query['PolarSccWaitTimeout'] = $request->polarSccWaitTimeout;
        }

        if (null !== $request->readWriteMode) {
            @$query['ReadWriteMode'] = $request->readWriteMode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->sccMode) {
            @$query['SccMode'] = $request->sccMode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDBClusterEndpoint',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDBClusterEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the attributes of a specified PolarDB cluster endpoint. For example, you can modify the following attributes for the specified cluster endpoint: read/write mode, consistency level, transaction splitting, primary node accepts read requests, and connection pool. You can also call the operation to specify whether newly added nodes are automatically associated with the specified cluster endpoint.
     *
     * @param request - ModifyDBClusterEndpointRequest
     *
     * @returns ModifyDBClusterEndpointResponse
     *
     * @param ModifyDBClusterEndpointRequest $request
     *
     * @return ModifyDBClusterEndpointResponse
     */
    public function modifyDBClusterEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBClusterEndpointWithOptions($request, $runtime);
    }

    /**
     * Modifies the maintenance window of a PolarDB cluster.
     *
     * @remarks
     * >  We recommend that you set the routine maintenance window to off-peak hours. Alibaba Cloud maintains your cluster within the specified maintenance window to minimize the negative impacts on your business.
     *
     * @param request - ModifyDBClusterMaintainTimeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDBClusterMaintainTimeResponse
     *
     * @param ModifyDBClusterMaintainTimeRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyDBClusterMaintainTimeResponse
     */
    public function modifyDBClusterMaintainTimeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->maintainTime) {
            @$query['MaintainTime'] = $request->maintainTime;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'ModifyDBClusterMaintainTime',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDBClusterMaintainTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the maintenance window of a PolarDB cluster.
     *
     * @remarks
     * >  We recommend that you set the routine maintenance window to off-peak hours. Alibaba Cloud maintains your cluster within the specified maintenance window to minimize the negative impacts on your business.
     *
     * @param request - ModifyDBClusterMaintainTimeRequest
     *
     * @returns ModifyDBClusterMaintainTimeResponse
     *
     * @param ModifyDBClusterMaintainTimeRequest $request
     *
     * @return ModifyDBClusterMaintainTimeResponse
     */
    public function modifyDBClusterMaintainTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBClusterMaintainTimeWithOptions($request, $runtime);
    }

    /**
     * Switches or rolls back the task that migrates data from ApsaraDB for RDS to PolarDB.
     *
     * @remarks
     *   You can call this operation to switch the task that migrates data from ApsaraDB for RDS to PolarDB.
     * *   You can call this operation to roll back the task that migrates data from ApsaraDB for RDS to PolarDB.
     * > Before you call this operation, ensure that a one-click upgrade task has been created for the cluster. You can call the [CreateDBCluster](https://help.aliyun.com/document_detail/98169.html) operation to create an upgrade task. Set the **CreationOption** parameter to **MigrationFromRDS**. For more information, see [Create a PolarDB for MySQL cluster by using the Migration from RDS method](https://help.aliyun.com/document_detail/121582.html).
     *
     * @param request - ModifyDBClusterMigrationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDBClusterMigrationResponse
     *
     * @param ModifyDBClusterMigrationRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyDBClusterMigrationResponse
     */
    public function modifyDBClusterMigrationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->connectionStrings) {
            @$query['ConnectionStrings'] = $request->connectionStrings;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->newMasterInstanceId) {
            @$query['NewMasterInstanceId'] = $request->newMasterInstanceId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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

        if (null !== $request->sourceRDSDBInstanceId) {
            @$query['SourceRDSDBInstanceId'] = $request->sourceRDSDBInstanceId;
        }

        if (null !== $request->swapConnectionString) {
            @$query['SwapConnectionString'] = $request->swapConnectionString;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDBClusterMigration',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDBClusterMigrationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Switches or rolls back the task that migrates data from ApsaraDB for RDS to PolarDB.
     *
     * @remarks
     *   You can call this operation to switch the task that migrates data from ApsaraDB for RDS to PolarDB.
     * *   You can call this operation to roll back the task that migrates data from ApsaraDB for RDS to PolarDB.
     * > Before you call this operation, ensure that a one-click upgrade task has been created for the cluster. You can call the [CreateDBCluster](https://help.aliyun.com/document_detail/98169.html) operation to create an upgrade task. Set the **CreationOption** parameter to **MigrationFromRDS**. For more information, see [Create a PolarDB for MySQL cluster by using the Migration from RDS method](https://help.aliyun.com/document_detail/121582.html).
     *
     * @param request - ModifyDBClusterMigrationRequest
     *
     * @returns ModifyDBClusterMigrationResponse
     *
     * @param ModifyDBClusterMigrationRequest $request
     *
     * @return ModifyDBClusterMigrationResponse
     */
    public function modifyDBClusterMigration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBClusterMigrationWithOptions($request, $runtime);
    }

    /**
     * Modifies the interval at which the monitoring data of a PolarDB cluster is collected.
     *
     * @remarks
     *   When the monitoring data is collected every 5 seconds:
     *     *   If the query time range is less than or equal to 1 hour, the data is displayed at intervals of 5 seconds.
     *     *   If the query time range is less than or equal to one day, the data is displayed at intervals of 1 minute.
     *     *   If the query time range is less than or equal to seven days, the data is displayed at intervals of 10 minutes.
     *     *   If the query time range is less than or equal to 30 days, the data is displayed at intervals of 1 hour.
     *     *   When the query time range is greater than 30 days, the data is displayed at intervals of 1 day.
     * *   When the monitoring data is collected every 60 seconds:
     *     *   If the query time range is less than or equal to one day, the data is displayed at intervals of 1 minute.
     *     *   If the query time range is less than or equal to seven days, the data is displayed at intervals of 10 minutes.
     *     *   If the query time range is less than or equal to 30 days, the data is displayed at intervals of 1 hour.
     *     *   When the query time range is greater than 30 days, the data is displayed at intervals of 1 day.
     *
     * @param request - ModifyDBClusterMonitorRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDBClusterMonitorResponse
     *
     * @param ModifyDBClusterMonitorRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyDBClusterMonitorResponse
     */
    public function modifyDBClusterMonitorWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
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
            'action' => 'ModifyDBClusterMonitor',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDBClusterMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the interval at which the monitoring data of a PolarDB cluster is collected.
     *
     * @remarks
     *   When the monitoring data is collected every 5 seconds:
     *     *   If the query time range is less than or equal to 1 hour, the data is displayed at intervals of 5 seconds.
     *     *   If the query time range is less than or equal to one day, the data is displayed at intervals of 1 minute.
     *     *   If the query time range is less than or equal to seven days, the data is displayed at intervals of 10 minutes.
     *     *   If the query time range is less than or equal to 30 days, the data is displayed at intervals of 1 hour.
     *     *   When the query time range is greater than 30 days, the data is displayed at intervals of 1 day.
     * *   When the monitoring data is collected every 60 seconds:
     *     *   If the query time range is less than or equal to one day, the data is displayed at intervals of 1 minute.
     *     *   If the query time range is less than or equal to seven days, the data is displayed at intervals of 10 minutes.
     *     *   If the query time range is less than or equal to 30 days, the data is displayed at intervals of 1 hour.
     *     *   When the query time range is greater than 30 days, the data is displayed at intervals of 1 day.
     *
     * @param request - ModifyDBClusterMonitorRequest
     *
     * @returns ModifyDBClusterMonitorResponse
     *
     * @param ModifyDBClusterMonitorRequest $request
     *
     * @return ModifyDBClusterMonitorResponse
     */
    public function modifyDBClusterMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBClusterMonitorWithOptions($request, $runtime);
    }

    /**
     * Modifies the parameters of a specified PolarDB cluster or applies existing parameter templates to a specified cluster.
     *
     * @remarks
     * PolarDB supports the parameter template feature to centrally manage clusters. You can configure a number of parameters at a time by using a parameter template and apply the template to a PolarDB cluster. For more information, see [Use a parameter template](https://help.aliyun.com/document_detail/207009.html).
     * **
     * **Only PolarDB for MySQL clusters support parameter templates.
     *
     * @param request - ModifyDBClusterParametersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDBClusterParametersResponse
     *
     * @param ModifyDBClusterParametersRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyDBClusterParametersResponse
     */
    public function modifyDBClusterParametersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->fromTimeService) {
            @$query['FromTimeService'] = $request->fromTimeService;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->parameterGroupId) {
            @$query['ParameterGroupId'] = $request->parameterGroupId;
        }

        if (null !== $request->parameters) {
            @$query['Parameters'] = $request->parameters;
        }

        if (null !== $request->plannedEndTime) {
            @$query['PlannedEndTime'] = $request->plannedEndTime;
        }

        if (null !== $request->plannedStartTime) {
            @$query['PlannedStartTime'] = $request->plannedStartTime;
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
            'action' => 'ModifyDBClusterParameters',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDBClusterParametersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the parameters of a specified PolarDB cluster or applies existing parameter templates to a specified cluster.
     *
     * @remarks
     * PolarDB supports the parameter template feature to centrally manage clusters. You can configure a number of parameters at a time by using a parameter template and apply the template to a PolarDB cluster. For more information, see [Use a parameter template](https://help.aliyun.com/document_detail/207009.html).
     * **
     * **Only PolarDB for MySQL clusters support parameter templates.
     *
     * @param request - ModifyDBClusterParametersRequest
     *
     * @returns ModifyDBClusterParametersResponse
     *
     * @param ModifyDBClusterParametersRequest $request
     *
     * @return ModifyDBClusterParametersResponse
     */
    public function modifyDBClusterParameters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBClusterParametersWithOptions($request, $runtime);
    }

    /**
     * Changes the primary zone of a PolarDB cluster.
     *
     * @param request - ModifyDBClusterPrimaryZoneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDBClusterPrimaryZoneResponse
     *
     * @param ModifyDBClusterPrimaryZoneRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyDBClusterPrimaryZoneResponse
     */
    public function modifyDBClusterPrimaryZoneWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->fromTimeService) {
            @$query['FromTimeService'] = $request->fromTimeService;
        }

        if (null !== $request->isSwitchOverForDisaster) {
            @$query['IsSwitchOverForDisaster'] = $request->isSwitchOverForDisaster;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->plannedEndTime) {
            @$query['PlannedEndTime'] = $request->plannedEndTime;
        }

        if (null !== $request->plannedStartTime) {
            @$query['PlannedStartTime'] = $request->plannedStartTime;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->VPCId) {
            @$query['VPCId'] = $request->VPCId;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        if (null !== $request->zoneType) {
            @$query['ZoneType'] = $request->zoneType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDBClusterPrimaryZone',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDBClusterPrimaryZoneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the primary zone of a PolarDB cluster.
     *
     * @param request - ModifyDBClusterPrimaryZoneRequest
     *
     * @returns ModifyDBClusterPrimaryZoneResponse
     *
     * @param ModifyDBClusterPrimaryZoneRequest $request
     *
     * @return ModifyDBClusterPrimaryZoneResponse
     */
    public function modifyDBClusterPrimaryZone($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBClusterPrimaryZoneWithOptions($request, $runtime);
    }

    /**
     * Modifies the configurations of a resource group for a database cluster.
     *
     * @param request - ModifyDBClusterResourceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDBClusterResourceGroupResponse
     *
     * @param ModifyDBClusterResourceGroupRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ModifyDBClusterResourceGroupResponse
     */
    public function modifyDBClusterResourceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
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
            'action' => 'ModifyDBClusterResourceGroup',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDBClusterResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the configurations of a resource group for a database cluster.
     *
     * @param request - ModifyDBClusterResourceGroupRequest
     *
     * @returns ModifyDBClusterResourceGroupResponse
     *
     * @param ModifyDBClusterResourceGroupRequest $request
     *
     * @return ModifyDBClusterResourceGroupResponse
     */
    public function modifyDBClusterResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBClusterResourceGroupWithOptions($request, $runtime);
    }

    /**
     * Enables or disables the SSL encryption feature for a PolarDB cluster, or updates the CA certificate of the cluster.
     *
     * @param request - ModifyDBClusterSSLRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDBClusterSSLResponse
     *
     * @param ModifyDBClusterSSLRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyDBClusterSSLResponse
     */
    public function modifyDBClusterSSLWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->DBEndpointId) {
            @$query['DBEndpointId'] = $request->DBEndpointId;
        }

        if (null !== $request->netType) {
            @$query['NetType'] = $request->netType;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->SSLAutoRotate) {
            @$query['SSLAutoRotate'] = $request->SSLAutoRotate;
        }

        if (null !== $request->SSLEnabled) {
            @$query['SSLEnabled'] = $request->SSLEnabled;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDBClusterSSL',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDBClusterSSLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables or disables the SSL encryption feature for a PolarDB cluster, or updates the CA certificate of the cluster.
     *
     * @param request - ModifyDBClusterSSLRequest
     *
     * @returns ModifyDBClusterSSLResponse
     *
     * @param ModifyDBClusterSSLRequest $request
     *
     * @return ModifyDBClusterSSLResponse
     */
    public function modifyDBClusterSSL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBClusterSSLWithOptions($request, $runtime);
    }

    /**
     * Modifies the configurations of a serverless cluster.
     *
     * @param request - ModifyDBClusterServerlessConfRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDBClusterServerlessConfResponse
     *
     * @param ModifyDBClusterServerlessConfRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ModifyDBClusterServerlessConfResponse
     */
    public function modifyDBClusterServerlessConfWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->allowShutDown) {
            @$query['AllowShutDown'] = $request->allowShutDown;
        }

        if (null !== $request->crontabJobId) {
            @$query['CrontabJobId'] = $request->crontabJobId;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->fromTimeService) {
            @$query['FromTimeService'] = $request->fromTimeService;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->plannedEndTime) {
            @$query['PlannedEndTime'] = $request->plannedEndTime;
        }

        if (null !== $request->plannedStartTime) {
            @$query['PlannedStartTime'] = $request->plannedStartTime;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->scaleApRoNumMax) {
            @$query['ScaleApRoNumMax'] = $request->scaleApRoNumMax;
        }

        if (null !== $request->scaleApRoNumMin) {
            @$query['ScaleApRoNumMin'] = $request->scaleApRoNumMin;
        }

        if (null !== $request->scaleMax) {
            @$query['ScaleMax'] = $request->scaleMax;
        }

        if (null !== $request->scaleMin) {
            @$query['ScaleMin'] = $request->scaleMin;
        }

        if (null !== $request->scaleRoNumMax) {
            @$query['ScaleRoNumMax'] = $request->scaleRoNumMax;
        }

        if (null !== $request->scaleRoNumMin) {
            @$query['ScaleRoNumMin'] = $request->scaleRoNumMin;
        }

        if (null !== $request->secondsUntilAutoPause) {
            @$query['SecondsUntilAutoPause'] = $request->secondsUntilAutoPause;
        }

        if (null !== $request->serverlessRuleCpuEnlargeThreshold) {
            @$query['ServerlessRuleCpuEnlargeThreshold'] = $request->serverlessRuleCpuEnlargeThreshold;
        }

        if (null !== $request->serverlessRuleCpuShrinkThreshold) {
            @$query['ServerlessRuleCpuShrinkThreshold'] = $request->serverlessRuleCpuShrinkThreshold;
        }

        if (null !== $request->serverlessRuleMode) {
            @$query['ServerlessRuleMode'] = $request->serverlessRuleMode;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDBClusterServerlessConf',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDBClusterServerlessConfResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the configurations of a serverless cluster.
     *
     * @param request - ModifyDBClusterServerlessConfRequest
     *
     * @returns ModifyDBClusterServerlessConfResponse
     *
     * @param ModifyDBClusterServerlessConfRequest $request
     *
     * @return ModifyDBClusterServerlessConfResponse
     */
    public function modifyDBClusterServerlessConf($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBClusterServerlessConfWithOptions($request, $runtime);
    }

    /**
     * 修改存储性能.
     *
     * @param request - ModifyDBClusterStoragePerformanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDBClusterStoragePerformanceResponse
     *
     * @param ModifyDBClusterStoragePerformanceRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return ModifyDBClusterStoragePerformanceResponse
     */
    public function modifyDBClusterStoragePerformanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->burstingEnabled) {
            @$query['BurstingEnabled'] = $request->burstingEnabled;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->modifyType) {
            @$query['ModifyType'] = $request->modifyType;
        }

        if (null !== $request->provisionedIops) {
            @$query['ProvisionedIops'] = $request->provisionedIops;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->storageType) {
            @$query['StorageType'] = $request->storageType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDBClusterStoragePerformance',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDBClusterStoragePerformanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改存储性能.
     *
     * @param request - ModifyDBClusterStoragePerformanceRequest
     *
     * @returns ModifyDBClusterStoragePerformanceResponse
     *
     * @param ModifyDBClusterStoragePerformanceRequest $request
     *
     * @return ModifyDBClusterStoragePerformanceResponse
     */
    public function modifyDBClusterStoragePerformance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBClusterStoragePerformanceWithOptions($request, $runtime);
    }

    /**
     * Changes the storage capacity of a pay-as-you-go cluster of Enterprise Edition or a cluster of Standard Edition.
     *
     * @param request - ModifyDBClusterStorageSpaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDBClusterStorageSpaceResponse
     *
     * @param ModifyDBClusterStorageSpaceRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyDBClusterStorageSpaceResponse
     */
    public function modifyDBClusterStorageSpaceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->plannedEndTime) {
            @$query['PlannedEndTime'] = $request->plannedEndTime;
        }

        if (null !== $request->plannedStartTime) {
            @$query['PlannedStartTime'] = $request->plannedStartTime;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->storageSpace) {
            @$query['StorageSpace'] = $request->storageSpace;
        }

        if (null !== $request->subCategory) {
            @$query['SubCategory'] = $request->subCategory;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDBClusterStorageSpace',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDBClusterStorageSpaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the storage capacity of a pay-as-you-go cluster of Enterprise Edition or a cluster of Standard Edition.
     *
     * @param request - ModifyDBClusterStorageSpaceRequest
     *
     * @returns ModifyDBClusterStorageSpaceResponse
     *
     * @param ModifyDBClusterStorageSpaceRequest $request
     *
     * @return ModifyDBClusterStorageSpaceResponse
     */
    public function modifyDBClusterStorageSpace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBClusterStorageSpaceWithOptions($request, $runtime);
    }

    /**
     * Enables the transparent data encryption (TDE) feature for a PolarDB cluster.
     *
     * @remarks
     * > *   To perform this operation, you must activate KMS first. For more information, see [Purchase a dedicated KMS instance](https://help.aliyun.com/document_detail/153781.html).
     * > *   After TDE is enabled, you cannot disable TDE.
     *
     * @param request - ModifyDBClusterTDERequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDBClusterTDEResponse
     *
     * @param ModifyDBClusterTDERequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyDBClusterTDEResponse
     */
    public function modifyDBClusterTDEWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->enableAutomaticRotation) {
            @$query['EnableAutomaticRotation'] = $request->enableAutomaticRotation;
        }

        if (null !== $request->encryptNewTables) {
            @$query['EncryptNewTables'] = $request->encryptNewTables;
        }

        if (null !== $request->encryptionKey) {
            @$query['EncryptionKey'] = $request->encryptionKey;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->roleArn) {
            @$query['RoleArn'] = $request->roleArn;
        }

        if (null !== $request->TDEStatus) {
            @$query['TDEStatus'] = $request->TDEStatus;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDBClusterTDE',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDBClusterTDEResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables the transparent data encryption (TDE) feature for a PolarDB cluster.
     *
     * @remarks
     * > *   To perform this operation, you must activate KMS first. For more information, see [Purchase a dedicated KMS instance](https://help.aliyun.com/document_detail/153781.html).
     * > *   After TDE is enabled, you cannot disable TDE.
     *
     * @param request - ModifyDBClusterTDERequest
     *
     * @returns ModifyDBClusterTDEResponse
     *
     * @param ModifyDBClusterTDERequest $request
     *
     * @return ModifyDBClusterTDEResponse
     */
    public function modifyDBClusterTDE($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBClusterTDEWithOptions($request, $runtime);
    }

    /**
     * Modifies the description of a database in a PolarDB for MySQL cluster.
     *
     * @param request - ModifyDBDescriptionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDBDescriptionResponse
     *
     * @param ModifyDBDescriptionRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyDBDescriptionResponse
     */
    public function modifyDBDescriptionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->DBDescription) {
            @$query['DBDescription'] = $request->DBDescription;
        }

        if (null !== $request->DBName) {
            @$query['DBName'] = $request->DBName;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'ModifyDBDescription',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDBDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the description of a database in a PolarDB for MySQL cluster.
     *
     * @param request - ModifyDBDescriptionRequest
     *
     * @returns ModifyDBDescriptionResponse
     *
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
     * Modifies the endpoints of a PolarDB cluster, including the primary endpoint, default cluster endpoint, custom cluster endpoint, and private domain name.
     *
     * @param request - ModifyDBEndpointAddressRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDBEndpointAddressResponse
     *
     * @param ModifyDBEndpointAddressRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyDBEndpointAddressResponse
     */
    public function modifyDBEndpointAddressWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->connectionStringPrefix) {
            @$query['ConnectionStringPrefix'] = $request->connectionStringPrefix;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->DBEndpointId) {
            @$query['DBEndpointId'] = $request->DBEndpointId;
        }

        if (null !== $request->netType) {
            @$query['NetType'] = $request->netType;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->port) {
            @$query['Port'] = $request->port;
        }

        if (null !== $request->privateZoneAddressPrefix) {
            @$query['PrivateZoneAddressPrefix'] = $request->privateZoneAddressPrefix;
        }

        if (null !== $request->privateZoneName) {
            @$query['PrivateZoneName'] = $request->privateZoneName;
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
            'action' => 'ModifyDBEndpointAddress',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDBEndpointAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the endpoints of a PolarDB cluster, including the primary endpoint, default cluster endpoint, custom cluster endpoint, and private domain name.
     *
     * @param request - ModifyDBEndpointAddressRequest
     *
     * @returns ModifyDBEndpointAddressResponse
     *
     * @param ModifyDBEndpointAddressRequest $request
     *
     * @return ModifyDBEndpointAddressResponse
     */
    public function modifyDBEndpointAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBEndpointAddressWithOptions($request, $runtime);
    }

    /**
     * Changes the node specifications of a PolarDB cluster.
     *
     * @param request - ModifyDBNodeClassRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDBNodeClassResponse
     *
     * @param ModifyDBNodeClassRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyDBNodeClassResponse
     */
    public function modifyDBNodeClassWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->DBNodeTargetClass) {
            @$query['DBNodeTargetClass'] = $request->DBNodeTargetClass;
        }

        if (null !== $request->DBNodeType) {
            @$query['DBNodeType'] = $request->DBNodeType;
        }

        if (null !== $request->modifyType) {
            @$query['ModifyType'] = $request->modifyType;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->plannedEndTime) {
            @$query['PlannedEndTime'] = $request->plannedEndTime;
        }

        if (null !== $request->plannedFlashingOffTime) {
            @$query['PlannedFlashingOffTime'] = $request->plannedFlashingOffTime;
        }

        if (null !== $request->plannedStartTime) {
            @$query['PlannedStartTime'] = $request->plannedStartTime;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->subCategory) {
            @$query['SubCategory'] = $request->subCategory;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDBNodeClass',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDBNodeClassResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the node specifications of a PolarDB cluster.
     *
     * @param request - ModifyDBNodeClassRequest
     *
     * @returns ModifyDBNodeClassResponse
     *
     * @param ModifyDBNodeClassRequest $request
     *
     * @return ModifyDBNodeClassResponse
     */
    public function modifyDBNodeClass($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBNodeClassWithOptions($request, $runtime);
    }

    /**
     * Enables or disables the failover with hot replica feature for a node in a cluster.
     *
     * @param request - ModifyDBNodeHotReplicaModeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDBNodeHotReplicaModeResponse
     *
     * @param ModifyDBNodeHotReplicaModeRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyDBNodeHotReplicaModeResponse
     */
    public function modifyDBNodeHotReplicaModeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->DBNodeId) {
            @$query['DBNodeId'] = $request->DBNodeId;
        }

        if (null !== $request->hotReplicaMode) {
            @$query['HotReplicaMode'] = $request->hotReplicaMode;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'ModifyDBNodeHotReplicaMode',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDBNodeHotReplicaModeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables or disables the failover with hot replica feature for a node in a cluster.
     *
     * @param request - ModifyDBNodeHotReplicaModeRequest
     *
     * @returns ModifyDBNodeHotReplicaModeResponse
     *
     * @param ModifyDBNodeHotReplicaModeRequest $request
     *
     * @return ModifyDBNodeHotReplicaModeResponse
     */
    public function modifyDBNodeHotReplicaMode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBNodeHotReplicaModeWithOptions($request, $runtime);
    }

    /**
     * Changes the specifications of a node in a PolarDB cluster.
     *
     * @param request - ModifyDBNodesClassRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDBNodesClassResponse
     *
     * @param ModifyDBNodesClassRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyDBNodesClassResponse
     */
    public function modifyDBNodesClassWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->DBNode) {
            @$query['DBNode'] = $request->DBNode;
        }

        if (null !== $request->modifyType) {
            @$query['ModifyType'] = $request->modifyType;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->plannedEndTime) {
            @$query['PlannedEndTime'] = $request->plannedEndTime;
        }

        if (null !== $request->plannedFlashingOffTime) {
            @$query['PlannedFlashingOffTime'] = $request->plannedFlashingOffTime;
        }

        if (null !== $request->plannedStartTime) {
            @$query['PlannedStartTime'] = $request->plannedStartTime;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->subCategory) {
            @$query['SubCategory'] = $request->subCategory;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDBNodesClass',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDBNodesClassResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the specifications of a node in a PolarDB cluster.
     *
     * @param request - ModifyDBNodesClassRequest
     *
     * @returns ModifyDBNodesClassResponse
     *
     * @param ModifyDBNodesClassRequest $request
     *
     * @return ModifyDBNodesClassResponse
     */
    public function modifyDBNodesClass($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBNodesClassWithOptions($request, $runtime);
    }

    /**
     * Modifies the parameters of a node and applies them to specified nodes.
     *
     * @param request - ModifyDBNodesParametersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDBNodesParametersResponse
     *
     * @param ModifyDBNodesParametersRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyDBNodesParametersResponse
     */
    public function modifyDBNodesParametersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->DBNodeIds) {
            @$query['DBNodeIds'] = $request->DBNodeIds;
        }

        if (null !== $request->fromTimeService) {
            @$query['FromTimeService'] = $request->fromTimeService;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->parameterGroupId) {
            @$query['ParameterGroupId'] = $request->parameterGroupId;
        }

        if (null !== $request->parameters) {
            @$query['Parameters'] = $request->parameters;
        }

        if (null !== $request->plannedEndTime) {
            @$query['PlannedEndTime'] = $request->plannedEndTime;
        }

        if (null !== $request->plannedStartTime) {
            @$query['PlannedStartTime'] = $request->plannedStartTime;
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
            'action' => 'ModifyDBNodesParameters',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDBNodesParametersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the parameters of a node and applies them to specified nodes.
     *
     * @param request - ModifyDBNodesParametersRequest
     *
     * @returns ModifyDBNodesParametersResponse
     *
     * @param ModifyDBNodesParametersRequest $request
     *
     * @return ModifyDBNodesParametersResponse
     */
    public function modifyDBNodesParameters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBNodesParametersWithOptions($request, $runtime);
    }

    /**
     * Modifies a global database network (GDN).
     *
     * @param request - ModifyGlobalDatabaseNetworkRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyGlobalDatabaseNetworkResponse
     *
     * @param ModifyGlobalDatabaseNetworkRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyGlobalDatabaseNetworkResponse
     */
    public function modifyGlobalDatabaseNetworkWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->enableGlobalDomainName) {
            @$query['EnableGlobalDomainName'] = $request->enableGlobalDomainName;
        }

        if (null !== $request->GDNDescription) {
            @$query['GDNDescription'] = $request->GDNDescription;
        }

        if (null !== $request->GDNId) {
            @$query['GDNId'] = $request->GDNId;
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

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyGlobalDatabaseNetwork',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyGlobalDatabaseNetworkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a global database network (GDN).
     *
     * @param request - ModifyGlobalDatabaseNetworkRequest
     *
     * @returns ModifyGlobalDatabaseNetworkResponse
     *
     * @param ModifyGlobalDatabaseNetworkRequest $request
     *
     * @return ModifyGlobalDatabaseNetworkResponse
     */
    public function modifyGlobalDatabaseNetwork($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyGlobalDatabaseNetworkWithOptions($request, $runtime);
    }

    /**
     * Modifies an IP whitelist template.
     *
     * @param request - ModifyGlobalSecurityIPGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyGlobalSecurityIPGroupResponse
     *
     * @param ModifyGlobalSecurityIPGroupRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyGlobalSecurityIPGroupResponse
     */
    public function modifyGlobalSecurityIPGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->GIpList) {
            @$query['GIpList'] = $request->GIpList;
        }

        if (null !== $request->globalIgName) {
            @$query['GlobalIgName'] = $request->globalIgName;
        }

        if (null !== $request->globalSecurityGroupId) {
            @$query['GlobalSecurityGroupId'] = $request->globalSecurityGroupId;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyGlobalSecurityIPGroup',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyGlobalSecurityIPGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies an IP whitelist template.
     *
     * @param request - ModifyGlobalSecurityIPGroupRequest
     *
     * @returns ModifyGlobalSecurityIPGroupResponse
     *
     * @param ModifyGlobalSecurityIPGroupRequest $request
     *
     * @return ModifyGlobalSecurityIPGroupResponse
     */
    public function modifyGlobalSecurityIPGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyGlobalSecurityIPGroupWithOptions($request, $runtime);
    }

    /**
     * Modifies the name of a global IP whitelist template.
     *
     * @param request - ModifyGlobalSecurityIPGroupNameRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyGlobalSecurityIPGroupNameResponse
     *
     * @param ModifyGlobalSecurityIPGroupNameRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ModifyGlobalSecurityIPGroupNameResponse
     */
    public function modifyGlobalSecurityIPGroupNameWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->globalIgName) {
            @$query['GlobalIgName'] = $request->globalIgName;
        }

        if (null !== $request->globalSecurityGroupId) {
            @$query['GlobalSecurityGroupId'] = $request->globalSecurityGroupId;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyGlobalSecurityIPGroupName',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyGlobalSecurityIPGroupNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the name of a global IP whitelist template.
     *
     * @param request - ModifyGlobalSecurityIPGroupNameRequest
     *
     * @returns ModifyGlobalSecurityIPGroupNameResponse
     *
     * @param ModifyGlobalSecurityIPGroupNameRequest $request
     *
     * @return ModifyGlobalSecurityIPGroupNameResponse
     */
    public function modifyGlobalSecurityIPGroupName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyGlobalSecurityIPGroupNameWithOptions($request, $runtime);
    }

    /**
     * Modifies the relationship between a cluster and a global IP whitelist template.
     *
     * @param request - ModifyGlobalSecurityIPGroupRelationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyGlobalSecurityIPGroupRelationResponse
     *
     * @param ModifyGlobalSecurityIPGroupRelationRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return ModifyGlobalSecurityIPGroupRelationResponse
     */
    public function modifyGlobalSecurityIPGroupRelationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->globalSecurityGroupId) {
            @$query['GlobalSecurityGroupId'] = $request->globalSecurityGroupId;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyGlobalSecurityIPGroupRelation',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyGlobalSecurityIPGroupRelationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the relationship between a cluster and a global IP whitelist template.
     *
     * @param request - ModifyGlobalSecurityIPGroupRelationRequest
     *
     * @returns ModifyGlobalSecurityIPGroupRelationResponse
     *
     * @param ModifyGlobalSecurityIPGroupRelationRequest $request
     *
     * @return ModifyGlobalSecurityIPGroupRelationResponse
     */
    public function modifyGlobalSecurityIPGroupRelation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyGlobalSecurityIPGroupRelationWithOptions($request, $runtime);
    }

    /**
     * Modifies the retention policy of the log backups in a PolarDB cluster.
     *
     * @param request - ModifyLogBackupPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyLogBackupPolicyResponse
     *
     * @param ModifyLogBackupPolicyRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyLogBackupPolicyResponse
     */
    public function modifyLogBackupPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->logBackupAnotherRegionRegion) {
            @$query['LogBackupAnotherRegionRegion'] = $request->logBackupAnotherRegionRegion;
        }

        if (null !== $request->logBackupAnotherRegionRetentionPeriod) {
            @$query['LogBackupAnotherRegionRetentionPeriod'] = $request->logBackupAnotherRegionRetentionPeriod;
        }

        if (null !== $request->logBackupRetentionPeriod) {
            @$query['LogBackupRetentionPeriod'] = $request->logBackupRetentionPeriod;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'ModifyLogBackupPolicy',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyLogBackupPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the retention policy of the log backups in a PolarDB cluster.
     *
     * @param request - ModifyLogBackupPolicyRequest
     *
     * @returns ModifyLogBackupPolicyResponse
     *
     * @param ModifyLogBackupPolicyRequest $request
     *
     * @return ModifyLogBackupPolicyResponse
     */
    public function modifyLogBackupPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyLogBackupPolicyWithOptions($request, $runtime);
    }

    /**
     * Modifies or adds a data masking rule.
     *
     * @param request - ModifyMaskingRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyMaskingRulesResponse
     *
     * @param ModifyMaskingRulesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyMaskingRulesResponse
     */
    public function modifyMaskingRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->defaultAlgo) {
            @$query['DefaultAlgo'] = $request->defaultAlgo;
        }

        if (null !== $request->enable) {
            @$query['Enable'] = $request->enable;
        }

        if (null !== $request->interfaceVersion) {
            @$query['InterfaceVersion'] = $request->interfaceVersion;
        }

        if (null !== $request->maskingAlgo) {
            @$query['MaskingAlgo'] = $request->maskingAlgo;
        }

        if (null !== $request->ruleConfig) {
            @$query['RuleConfig'] = $request->ruleConfig;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        if (null !== $request->ruleNameList) {
            @$query['RuleNameList'] = $request->ruleNameList;
        }

        if (null !== $request->ruleVersion) {
            @$query['RuleVersion'] = $request->ruleVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyMaskingRules',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyMaskingRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies or adds a data masking rule.
     *
     * @param request - ModifyMaskingRulesRequest
     *
     * @returns ModifyMaskingRulesResponse
     *
     * @param ModifyMaskingRulesRequest $request
     *
     * @return ModifyMaskingRulesResponse
     */
    public function modifyMaskingRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyMaskingRulesWithOptions($request, $runtime);
    }

    /**
     * Modifies the switching time of a pending event.
     *
     * @param request - ModifyPendingMaintenanceActionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyPendingMaintenanceActionResponse
     *
     * @param ModifyPendingMaintenanceActionRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ModifyPendingMaintenanceActionResponse
     */
    public function modifyPendingMaintenanceActionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ids) {
            @$query['Ids'] = $request->ids;
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

        if (null !== $request->switchTime) {
            @$query['SwitchTime'] = $request->switchTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyPendingMaintenanceAction',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyPendingMaintenanceActionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the switching time of a pending event.
     *
     * @param request - ModifyPendingMaintenanceActionRequest
     *
     * @returns ModifyPendingMaintenanceActionResponse
     *
     * @param ModifyPendingMaintenanceActionRequest $request
     *
     * @return ModifyPendingMaintenanceActionResponse
     */
    public function modifyPendingMaintenanceAction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyPendingMaintenanceActionWithOptions($request, $runtime);
    }

    /**
     * Enables the PolarDB for AI feature for a cluster.
     *
     * @param request - OpenAITaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OpenAITaskResponse
     *
     * @param OpenAITaskRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return OpenAITaskResponse
     */
    public function openAITaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->nodeType) {
            @$query['NodeType'] = $request->nodeType;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
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

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->username) {
            @$query['Username'] = $request->username;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'OpenAITask',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OpenAITaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables the PolarDB for AI feature for a cluster.
     *
     * @param request - OpenAITaskRequest
     *
     * @returns OpenAITaskResponse
     *
     * @param OpenAITaskRequest $request
     *
     * @return OpenAITaskResponse
     */
    public function openAITask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openAITaskWithOptions($request, $runtime);
    }

    /**
     * Updates the storage usage of a cluster.
     *
     * @param request - RefreshDBClusterStorageUsageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RefreshDBClusterStorageUsageResponse
     *
     * @param RefreshDBClusterStorageUsageRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return RefreshDBClusterStorageUsageResponse
     */
    public function refreshDBClusterStorageUsageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->syncRealTime) {
            @$query['SyncRealTime'] = $request->syncRealTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RefreshDBClusterStorageUsage',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RefreshDBClusterStorageUsageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the storage usage of a cluster.
     *
     * @param request - RefreshDBClusterStorageUsageRequest
     *
     * @returns RefreshDBClusterStorageUsageResponse
     *
     * @param RefreshDBClusterStorageUsageRequest $request
     *
     * @return RefreshDBClusterStorageUsageResponse
     */
    public function refreshDBClusterStorageUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refreshDBClusterStorageUsageWithOptions($request, $runtime);
    }

    /**
     * Removes a secondary cluster from a GDN.
     *
     * @remarks
     * >  You cannot remove the primary cluster from a GDN.
     *
     * @param request - RemoveDBClusterFromGDNRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveDBClusterFromGDNResponse
     *
     * @param RemoveDBClusterFromGDNRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return RemoveDBClusterFromGDNResponse
     */
    public function removeDBClusterFromGDNWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->GDNId) {
            @$query['GDNId'] = $request->GDNId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveDBClusterFromGDN',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveDBClusterFromGDNResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes a secondary cluster from a GDN.
     *
     * @remarks
     * >  You cannot remove the primary cluster from a GDN.
     *
     * @param request - RemoveDBClusterFromGDNRequest
     *
     * @returns RemoveDBClusterFromGDNResponse
     *
     * @param RemoveDBClusterFromGDNRequest $request
     *
     * @return RemoveDBClusterFromGDNResponse
     */
    public function removeDBClusterFromGDN($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeDBClusterFromGDNWithOptions($request, $runtime);
    }

    /**
     * Resets the permissions of a privileged account for a PolarDB cluster.
     *
     * @remarks
     * >- Only PolarDB for MySQL clusters support this operation.
     * >- If the privileged account of your cluster encounters exceptions, you can call this operation to reset the permissions. For example, the permissions are accidentally revoked.
     *
     * @param request - ResetAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResetAccountResponse
     *
     * @param ResetAccountRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ResetAccountResponse
     */
    public function resetAccountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountName) {
            @$query['AccountName'] = $request->accountName;
        }

        if (null !== $request->accountPassword) {
            @$query['AccountPassword'] = $request->accountPassword;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'ResetAccount',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResetAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Resets the permissions of a privileged account for a PolarDB cluster.
     *
     * @remarks
     * >- Only PolarDB for MySQL clusters support this operation.
     * >- If the privileged account of your cluster encounters exceptions, you can call this operation to reset the permissions. For example, the permissions are accidentally revoked.
     *
     * @param request - ResetAccountRequest
     *
     * @returns ResetAccountResponse
     *
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
     * Rebuilds a secondary cluster in a Global Database Network (GDN).
     *
     * @param request - ResetGlobalDatabaseNetworkRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResetGlobalDatabaseNetworkResponse
     *
     * @param ResetGlobalDatabaseNetworkRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ResetGlobalDatabaseNetworkResponse
     */
    public function resetGlobalDatabaseNetworkWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->GDNId) {
            @$query['GDNId'] = $request->GDNId;
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

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ResetGlobalDatabaseNetwork',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResetGlobalDatabaseNetworkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Rebuilds a secondary cluster in a Global Database Network (GDN).
     *
     * @param request - ResetGlobalDatabaseNetworkRequest
     *
     * @returns ResetGlobalDatabaseNetworkResponse
     *
     * @param ResetGlobalDatabaseNetworkRequest $request
     *
     * @return ResetGlobalDatabaseNetworkResponse
     */
    public function resetGlobalDatabaseNetwork($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetGlobalDatabaseNetworkWithOptions($request, $runtime);
    }

    /**
     * Restarts database links.
     *
     * @param request - RestartDBLinkRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RestartDBLinkResponse
     *
     * @param RestartDBLinkRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return RestartDBLinkResponse
     */
    public function restartDBLinkWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RestartDBLink',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RestartDBLinkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Restarts database links.
     *
     * @param request - RestartDBLinkRequest
     *
     * @returns RestartDBLinkResponse
     *
     * @param RestartDBLinkRequest $request
     *
     * @return RestartDBLinkResponse
     */
    public function restartDBLink($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restartDBLinkWithOptions($request, $runtime);
    }

    /**
     * Restarts a node in a PolarDB cluster.
     *
     * @param request - RestartDBNodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RestartDBNodeResponse
     *
     * @param RestartDBNodeRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return RestartDBNodeResponse
     */
    public function restartDBNodeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBNodeId) {
            @$query['DBNodeId'] = $request->DBNodeId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'RestartDBNode',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RestartDBNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Restarts a node in a PolarDB cluster.
     *
     * @param request - RestartDBNodeRequest
     *
     * @returns RestartDBNodeResponse
     *
     * @param RestartDBNodeRequest $request
     *
     * @return RestartDBNodeResponse
     */
    public function restartDBNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restartDBNodeWithOptions($request, $runtime);
    }

    /**
     * Restores PolarDB databases and tables.
     *
     * @param request - RestoreTableRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RestoreTableResponse
     *
     * @param RestoreTableRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return RestoreTableResponse
     */
    public function restoreTableWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupId) {
            @$query['BackupId'] = $request->backupId;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->restoreTime) {
            @$query['RestoreTime'] = $request->restoreTime;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->tableMeta) {
            @$query['TableMeta'] = $request->tableMeta;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RestoreTable',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RestoreTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Restores PolarDB databases and tables.
     *
     * @param request - RestoreTableRequest
     *
     * @returns RestoreTableResponse
     *
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
     * Revokes the access permissions on one or more databases from a specified PolarDB standard account.
     *
     * @param request - RevokeAccountPrivilegeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RevokeAccountPrivilegeResponse
     *
     * @param RevokeAccountPrivilegeRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return RevokeAccountPrivilegeResponse
     */
    public function revokeAccountPrivilegeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountName) {
            @$query['AccountName'] = $request->accountName;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->DBName) {
            @$query['DBName'] = $request->DBName;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'RevokeAccountPrivilege',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RevokeAccountPrivilegeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Revokes the access permissions on one or more databases from a specified PolarDB standard account.
     *
     * @param request - RevokeAccountPrivilegeRequest
     *
     * @returns RevokeAccountPrivilegeResponse
     *
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
     * @param request - SwitchOverGlobalDatabaseNetworkRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SwitchOverGlobalDatabaseNetworkResponse
     *
     * @param SwitchOverGlobalDatabaseNetworkRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return SwitchOverGlobalDatabaseNetworkResponse
     */
    public function switchOverGlobalDatabaseNetworkWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->forced) {
            @$query['Forced'] = $request->forced;
        }

        if (null !== $request->GDNId) {
            @$query['GDNId'] = $request->GDNId;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SwitchOverGlobalDatabaseNetwork',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SwitchOverGlobalDatabaseNetworkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SwitchOverGlobalDatabaseNetworkRequest
     *
     * @returns SwitchOverGlobalDatabaseNetworkResponse
     *
     * @param SwitchOverGlobalDatabaseNetworkRequest $request
     *
     * @return SwitchOverGlobalDatabaseNetworkResponse
     */
    public function switchOverGlobalDatabaseNetwork($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->switchOverGlobalDatabaseNetworkWithOptions($request, $runtime);
    }

    /**
     * Creates tags for a PolarDB cluster.
     *
     * @param request - TagResourcesRequest
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
            'version' => '2017-08-01',
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
     * Creates tags for a PolarDB cluster.
     *
     * @param request - TagResourcesRequest
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
     * Temporarily changes the node configurations.
     *
     * @param request - TempModifyDBNodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TempModifyDBNodeResponse
     *
     * @param TempModifyDBNodeRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return TempModifyDBNodeResponse
     */
    public function tempModifyDBNodeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->DBNode) {
            @$query['DBNode'] = $request->DBNode;
        }

        if (null !== $request->modifyType) {
            @$query['ModifyType'] = $request->modifyType;
        }

        if (null !== $request->operationType) {
            @$query['OperationType'] = $request->operationType;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->restoreTime) {
            @$query['RestoreTime'] = $request->restoreTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TempModifyDBNode',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TempModifyDBNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Temporarily changes the node configurations.
     *
     * @param request - TempModifyDBNodeRequest
     *
     * @returns TempModifyDBNodeResponse
     *
     * @param TempModifyDBNodeRequest $request
     *
     * @return TempModifyDBNodeResponse
     */
    public function tempModifyDBNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tempModifyDBNodeWithOptions($request, $runtime);
    }

    /**
     * Changes the billing method of a PolarDB cluster.
     *
     * @remarks
     * >
     * *   PolarDB clusters support the subscription and pay-as-you-go billing methods. You can change the billing method from subscription to pay-as-you-go or from pay-as-you-go to subscription based on your business requirements. For more information, see [Change the billing method from subscription to pay-as-you-go](https://help.aliyun.com/document_detail/172886.html) and [Change the billing method from pay-as-you-go to subscription](https://help.aliyun.com/document_detail/84076.html).
     * *   You cannot change the billing method from pay-as-you-go to subscription if your account balance is insufficient.
     * *   If you change the billing method from subscription to pay-as-you-go, the system automatically refunds the balance of the prepaid subscription fees.
     *
     * @param request - TransformDBClusterPayTypeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TransformDBClusterPayTypeResponse
     *
     * @param TransformDBClusterPayTypeRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return TransformDBClusterPayTypeResponse
     */
    public function transformDBClusterPayTypeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
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

        if (null !== $request->usedTime) {
            @$query['UsedTime'] = $request->usedTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TransformDBClusterPayType',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TransformDBClusterPayTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the billing method of a PolarDB cluster.
     *
     * @remarks
     * >
     * *   PolarDB clusters support the subscription and pay-as-you-go billing methods. You can change the billing method from subscription to pay-as-you-go or from pay-as-you-go to subscription based on your business requirements. For more information, see [Change the billing method from subscription to pay-as-you-go](https://help.aliyun.com/document_detail/172886.html) and [Change the billing method from pay-as-you-go to subscription](https://help.aliyun.com/document_detail/84076.html).
     * *   You cannot change the billing method from pay-as-you-go to subscription if your account balance is insufficient.
     * *   If you change the billing method from subscription to pay-as-you-go, the system automatically refunds the balance of the prepaid subscription fees.
     *
     * @param request - TransformDBClusterPayTypeRequest
     *
     * @returns TransformDBClusterPayTypeResponse
     *
     * @param TransformDBClusterPayTypeRequest $request
     *
     * @return TransformDBClusterPayTypeResponse
     */
    public function transformDBClusterPayType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->transformDBClusterPayTypeWithOptions($request, $runtime);
    }

    /**
     * Unbinds tags from PolarDB clusters.
     *
     * @param request - UntagResourcesRequest
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
            'version' => '2017-08-01',
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
     * Unbinds tags from PolarDB clusters.
     *
     * @param request - UntagResourcesRequest
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
     * Upgrades the kernel version of a PolarDB for MySQL cluster.
     *
     * @remarks
     * > *  You can update only the revision version of a PolarDB for MySQL cluster, for example, from 8.0.1.1.3 to 8.0.1.1.4.
     * >*   You can use only your Alibaba Cloud account to create scheduled tasks that update the kernel version of a PolarDB for MySQL cluster. RAM users are not authorized to update the kernel version of a PolarDB for MySQL cluster.
     *
     * @param request - UpgradeDBClusterVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpgradeDBClusterVersionResponse
     *
     * @param UpgradeDBClusterVersionRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpgradeDBClusterVersionResponse
     */
    public function upgradeDBClusterVersionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->fromTimeService) {
            @$query['FromTimeService'] = $request->fromTimeService;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->plannedEndTime) {
            @$query['PlannedEndTime'] = $request->plannedEndTime;
        }

        if (null !== $request->plannedStartTime) {
            @$query['PlannedStartTime'] = $request->plannedStartTime;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->targetDBRevisionVersionCode) {
            @$query['TargetDBRevisionVersionCode'] = $request->targetDBRevisionVersionCode;
        }

        if (null !== $request->targetProxyRevisionVersionCode) {
            @$query['TargetProxyRevisionVersionCode'] = $request->targetProxyRevisionVersionCode;
        }

        if (null !== $request->upgradeLabel) {
            @$query['UpgradeLabel'] = $request->upgradeLabel;
        }

        if (null !== $request->upgradePolicy) {
            @$query['UpgradePolicy'] = $request->upgradePolicy;
        }

        if (null !== $request->upgradeType) {
            @$query['UpgradeType'] = $request->upgradeType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpgradeDBClusterVersion',
            'version' => '2017-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpgradeDBClusterVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Upgrades the kernel version of a PolarDB for MySQL cluster.
     *
     * @remarks
     * > *  You can update only the revision version of a PolarDB for MySQL cluster, for example, from 8.0.1.1.3 to 8.0.1.1.4.
     * >*   You can use only your Alibaba Cloud account to create scheduled tasks that update the kernel version of a PolarDB for MySQL cluster. RAM users are not authorized to update the kernel version of a PolarDB for MySQL cluster.
     *
     * @param request - UpgradeDBClusterVersionRequest
     *
     * @returns UpgradeDBClusterVersionResponse
     *
     * @param UpgradeDBClusterVersionRequest $request
     *
     * @return UpgradeDBClusterVersionResponse
     */
    public function upgradeDBClusterVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeDBClusterVersionWithOptions($request, $runtime);
    }
}
