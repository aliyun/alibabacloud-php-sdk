<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyAutoRenewAttributeRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyAutoRenewAttributeResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyBackupPolicyRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyBackupPolicyResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterAccessWhitelistRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterAccessWhitelistResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterAndNodesParametersRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterAndNodesParametersResponse;
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
use AlibabaCloud\SDK\Polardb\V20170801\Models\UpgradeDBClusterMinorVersionRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\UpgradeDBClusterMinorVersionResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\UpgradeDBClusterVersionRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\UpgradeDBClusterVersionResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Polardb extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'cn-qingdao'                  => 'polardb.aliyuncs.com',
            'cn-beijing'                  => 'polardb.aliyuncs.com',
            'cn-hangzhou'                 => 'polardb.aliyuncs.com',
            'cn-shanghai'                 => 'polardb.aliyuncs.com',
            'cn-shenzhen'                 => 'polardb.aliyuncs.com',
            'cn-hongkong'                 => 'polardb.aliyuncs.com',
            'ap-southeast-1'              => 'polardb.aliyuncs.com',
            'us-west-1'                   => 'polardb.aliyuncs.com',
            'us-east-1'                   => 'polardb.aliyuncs.com',
            'cn-hangzhou-finance'         => 'polardb.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'polardb.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'polardb.aliyuncs.com',
            'ap-northeast-2-pop'          => 'polardb.aliyuncs.com',
            'cn-beijing-finance-1'        => 'polardb.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'polardb.aliyuncs.com',
            'cn-beijing-gov-1'            => 'polardb.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'polardb.aliyuncs.com',
            'cn-edge-1'                   => 'polardb.aliyuncs.com',
            'cn-fujian'                   => 'polardb.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'polardb.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'polardb.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'polardb.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'polardb.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'polardb.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'polardb.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'polardb.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'polardb.aliyuncs.com',
            'cn-huhehaote-nebula-1'       => 'polardb.aliyuncs.com',
            'cn-north-2-gov-1'            => 'polardb.aliyuncs.com',
            'cn-qingdao-nebula'           => 'polardb.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'polardb.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'polardb.aliyuncs.com',
            'cn-shanghai-inner'           => 'polardb.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'polardb.aliyuncs.com',
            'cn-shenzhen-inner'           => 'polardb.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'polardb.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'polardb.aliyuncs.com',
            'cn-wuhan'                    => 'polardb.aliyuncs.com',
            'cn-wulanchabu'               => 'polardb.aliyuncs.com',
            'cn-yushanfang'               => 'polardb.aliyuncs.com',
            'cn-zhangbei'                 => 'polardb.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'polardb.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'polardb.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'polardb.aliyuncs.com',
            'eu-west-1-oxs'               => 'polardb.aliyuncs.com',
            'rus-west-1-pop'              => 'polardb.aliyuncs.com',
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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param CancelScheduleTasksRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CancelScheduleTasksResponse
     */
    public function cancelScheduleTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
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
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CancelScheduleTasks',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelScheduleTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CheckAccountNameRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CheckAccountNameResponse
     */
    public function checkAccountNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountName)) {
            $query['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
            'action'      => 'CheckAccountName',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckAccountNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CheckDBNameRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CheckDBNameResponse
     */
    public function checkDBNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->DBName)) {
            $query['DBName'] = $request->DBName;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
            'action'      => 'CheckDBName',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckDBNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CheckKMSAuthorizedRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CheckKMSAuthorizedResponse
     */
    public function checkKMSAuthorizedWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
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
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->TDERegion)) {
            $query['TDERegion'] = $request->TDERegion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckKMSAuthorized',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckKMSAuthorizedResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CheckServiceLinkedRoleRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CheckServiceLinkedRoleResponse
     */
    public function checkServiceLinkedRoleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
            'action'      => 'CheckServiceLinkedRole',
            'version'     => '2017-08-01',
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
     * @param CloseAITaskRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CloseAITaskResponse
     */
    public function closeAITaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
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
            'action'      => 'CloseAITask',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CloseAITaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * *   You can call this operation to cancel the migration task before data migration.
     *   * *   You can call this operation to perform the migration task after data migration.
     *   * > Before you call this operation, ensure that a one-click upgrade task has been created for the cluster. You can call the [CreateDBCluster](~~98169~~) operation to create an upgrade task. Set the **CreationOption** parameter to **MigrationFromRDS**. For more information, see [Create a PolarDB for MySQL cluster by using the Migration from RDS method](~~121582~~).
     *   *
     * @param CloseDBClusterMigrationRequest $request CloseDBClusterMigrationRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return CloseDBClusterMigrationResponse CloseDBClusterMigrationResponse
     */
    public function closeDBClusterMigrationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->continueEnableBinlog)) {
            $query['ContinueEnableBinlog'] = $request->continueEnableBinlog;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
            'action'      => 'CloseDBClusterMigration',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CloseDBClusterMigrationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   You can call this operation to cancel the migration task before data migration.
     *   * *   You can call this operation to perform the migration task after data migration.
     *   * > Before you call this operation, ensure that a one-click upgrade task has been created for the cluster. You can call the [CreateDBCluster](~~98169~~) operation to create an upgrade task. Set the **CreationOption** parameter to **MigrationFromRDS**. For more information, see [Create a PolarDB for MySQL cluster by using the Migration from RDS method](~~121582~~).
     *   *
     * @param CloseDBClusterMigrationRequest $request CloseDBClusterMigrationRequest
     *
     * @return CloseDBClusterMigrationResponse CloseDBClusterMigrationResponse
     */
    public function closeDBClusterMigration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->closeDBClusterMigrationWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->accountPrivilege)) {
            $query['AccountPrivilege'] = $request->accountPrivilege;
        }
        if (!Utils::isUnset($request->accountType)) {
            $query['AccountType'] = $request->accountType;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->DBName)) {
            $query['DBName'] = $request->DBName;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->privForAllDB)) {
            $query['PrivForAllDB'] = $request->privForAllDB;
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
            'action'      => 'CreateAccount',
            'version'     => '2017-08-01',
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
     * >
     *   * *   You can manually create up to three backups for each cluster.
     *   * *   The `Exceeding the daily backup times of this DB cluster` error message indicates that three manual backups already exist in your cluster. You must delete existing backups before you call this operation to manually create backups. For more information about how to delete backups, see [Delete backups](~~98101~~).
     *   * *   After you call this operation, a backup task is created in the backend. The task may be time-consuming if you want to back up large amounts of data.
     *   *
     * @param CreateBackupRequest $request CreateBackupRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateBackupResponse CreateBackupResponse
     */
    public function createBackupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
            'action'      => 'CreateBackup',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateBackupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >
     *   * *   You can manually create up to three backups for each cluster.
     *   * *   The `Exceeding the daily backup times of this DB cluster` error message indicates that three manual backups already exist in your cluster. You must delete existing backups before you call this operation to manually create backups. For more information about how to delete backups, see [Delete backups](~~98101~~).
     *   * *   After you call this operation, a backup task is created in the backend. The task may be time-consuming if you want to back up large amounts of data.
     *   *
     * @param CreateBackupRequest $request CreateBackupRequest
     *
     * @return CreateBackupResponse CreateBackupResponse
     */
    public function createBackup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBackupWithOptions($request, $runtime);
    }

    /**
     * @param CreateColdStorageInstanceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateColdStorageInstanceResponse
     */
    public function createColdStorageInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->coldStorageInstanceDescription)) {
            $query['ColdStorageInstanceDescription'] = $request->coldStorageInstanceDescription;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
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
            'action'      => 'CreateColdStorageInstance',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateColdStorageInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateDBClusterRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateDBClusterResponse
     */
    public function createDBClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->allowShutDown)) {
            $query['AllowShutDown'] = $request->allowShutDown;
        }
        if (!Utils::isUnset($request->architecture)) {
            $query['Architecture'] = $request->architecture;
        }
        if (!Utils::isUnset($request->autoRenew)) {
            $query['AutoRenew'] = $request->autoRenew;
        }
        if (!Utils::isUnset($request->backupRetentionPolicyOnClusterDeletion)) {
            $query['BackupRetentionPolicyOnClusterDeletion'] = $request->backupRetentionPolicyOnClusterDeletion;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->cloneDataPoint)) {
            $query['CloneDataPoint'] = $request->cloneDataPoint;
        }
        if (!Utils::isUnset($request->clusterNetworkType)) {
            $query['ClusterNetworkType'] = $request->clusterNetworkType;
        }
        if (!Utils::isUnset($request->creationCategory)) {
            $query['CreationCategory'] = $request->creationCategory;
        }
        if (!Utils::isUnset($request->creationOption)) {
            $query['CreationOption'] = $request->creationOption;
        }
        if (!Utils::isUnset($request->DBClusterDescription)) {
            $query['DBClusterDescription'] = $request->DBClusterDescription;
        }
        if (!Utils::isUnset($request->DBMinorVersion)) {
            $query['DBMinorVersion'] = $request->DBMinorVersion;
        }
        if (!Utils::isUnset($request->DBNodeClass)) {
            $query['DBNodeClass'] = $request->DBNodeClass;
        }
        if (!Utils::isUnset($request->DBNodeNum)) {
            $query['DBNodeNum'] = $request->DBNodeNum;
        }
        if (!Utils::isUnset($request->DBType)) {
            $query['DBType'] = $request->DBType;
        }
        if (!Utils::isUnset($request->DBVersion)) {
            $query['DBVersion'] = $request->DBVersion;
        }
        if (!Utils::isUnset($request->defaultTimeZone)) {
            $query['DefaultTimeZone'] = $request->defaultTimeZone;
        }
        if (!Utils::isUnset($request->GDNId)) {
            $query['GDNId'] = $request->GDNId;
        }
        if (!Utils::isUnset($request->hotStandbyCluster)) {
            $query['HotStandbyCluster'] = $request->hotStandbyCluster;
        }
        if (!Utils::isUnset($request->loosePolarLogBin)) {
            $query['LoosePolarLogBin'] = $request->loosePolarLogBin;
        }
        if (!Utils::isUnset($request->looseXEngine)) {
            $query['LooseXEngine'] = $request->looseXEngine;
        }
        if (!Utils::isUnset($request->looseXEngineUseMemoryPct)) {
            $query['LooseXEngineUseMemoryPct'] = $request->looseXEngineUseMemoryPct;
        }
        if (!Utils::isUnset($request->lowerCaseTableNames)) {
            $query['LowerCaseTableNames'] = $request->lowerCaseTableNames;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->parameterGroupId)) {
            $query['ParameterGroupId'] = $request->parameterGroupId;
        }
        if (!Utils::isUnset($request->payType)) {
            $query['PayType'] = $request->payType;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->provisionedIops)) {
            $query['ProvisionedIops'] = $request->provisionedIops;
        }
        if (!Utils::isUnset($request->proxyClass)) {
            $query['ProxyClass'] = $request->proxyClass;
        }
        if (!Utils::isUnset($request->proxyType)) {
            $query['ProxyType'] = $request->proxyType;
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
        if (!Utils::isUnset($request->scaleMax)) {
            $query['ScaleMax'] = $request->scaleMax;
        }
        if (!Utils::isUnset($request->scaleMin)) {
            $query['ScaleMin'] = $request->scaleMin;
        }
        if (!Utils::isUnset($request->scaleRoNumMax)) {
            $query['ScaleRoNumMax'] = $request->scaleRoNumMax;
        }
        if (!Utils::isUnset($request->scaleRoNumMin)) {
            $query['ScaleRoNumMin'] = $request->scaleRoNumMin;
        }
        if (!Utils::isUnset($request->securityIPList)) {
            $query['SecurityIPList'] = $request->securityIPList;
        }
        if (!Utils::isUnset($request->serverlessType)) {
            $query['ServerlessType'] = $request->serverlessType;
        }
        if (!Utils::isUnset($request->sourceResourceId)) {
            $query['SourceResourceId'] = $request->sourceResourceId;
        }
        if (!Utils::isUnset($request->standbyAZ)) {
            $query['StandbyAZ'] = $request->standbyAZ;
        }
        if (!Utils::isUnset($request->storageAutoScale)) {
            $query['StorageAutoScale'] = $request->storageAutoScale;
        }
        if (!Utils::isUnset($request->storagePayType)) {
            $query['StoragePayType'] = $request->storagePayType;
        }
        if (!Utils::isUnset($request->storageSpace)) {
            $query['StorageSpace'] = $request->storageSpace;
        }
        if (!Utils::isUnset($request->storageType)) {
            $query['StorageType'] = $request->storageType;
        }
        if (!Utils::isUnset($request->storageUpperBound)) {
            $query['StorageUpperBound'] = $request->storageUpperBound;
        }
        if (!Utils::isUnset($request->strictConsistency)) {
            $query['StrictConsistency'] = $request->strictConsistency;
        }
        if (!Utils::isUnset($request->TDEStatus)) {
            $query['TDEStatus'] = $request->TDEStatus;
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
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDBCluster',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDBClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateDBClusterEndpointRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateDBClusterEndpointResponse
     */
    public function createDBClusterEndpointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoAddNewNodes)) {
            $query['AutoAddNewNodes'] = $request->autoAddNewNodes;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->DBEndpointDescription)) {
            $query['DBEndpointDescription'] = $request->DBEndpointDescription;
        }
        if (!Utils::isUnset($request->endpointConfig)) {
            $query['EndpointConfig'] = $request->endpointConfig;
        }
        if (!Utils::isUnset($request->endpointType)) {
            $query['EndpointType'] = $request->endpointType;
        }
        if (!Utils::isUnset($request->nodes)) {
            $query['Nodes'] = $request->nodes;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->readWriteMode)) {
            $query['ReadWriteMode'] = $request->readWriteMode;
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
            'action'      => 'CreateDBClusterEndpoint',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDBClusterEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * > You can create a public endpoint for the primary endpoint, the default cluster endpoint, or a custom cluster endpoint.
     *   *
     * @param CreateDBEndpointAddressRequest $request CreateDBEndpointAddressRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDBEndpointAddressResponse CreateDBEndpointAddressResponse
     */
    public function createDBEndpointAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->connectionStringPrefix)) {
            $query['ConnectionStringPrefix'] = $request->connectionStringPrefix;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->DBEndpointId)) {
            $query['DBEndpointId'] = $request->DBEndpointId;
        }
        if (!Utils::isUnset($request->netType)) {
            $query['NetType'] = $request->netType;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->securityGroupId)) {
            $query['SecurityGroupId'] = $request->securityGroupId;
        }
        if (!Utils::isUnset($request->VPCId)) {
            $query['VPCId'] = $request->VPCId;
        }
        if (!Utils::isUnset($request->zoneInfo)) {
            $query['ZoneInfo'] = $request->zoneInfo;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDBEndpointAddress',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDBEndpointAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > You can create a public endpoint for the primary endpoint, the default cluster endpoint, or a custom cluster endpoint.
     *   *
     * @param CreateDBEndpointAddressRequest $request CreateDBEndpointAddressRequest
     *
     * @return CreateDBEndpointAddressResponse CreateDBEndpointAddressResponse
     */
    public function createDBEndpointAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDBEndpointAddressWithOptions($request, $runtime);
    }

    /**
     * A database link can be used to connect two PolarDB for PostgreSQL(Compatible with Oracle) clusters, or connect a PolarDB for PostgreSQL(Compatible with Oracle) cluster to a user-created PostgreSQL database that is hosted on an Elastic Compute Service (ECS) instance. You can use database links to query data across clusters.
     *   * > *   You can create up to 10 database links for a cluster.
     *   * > *   Each database link connects a source cluster and a destination cluster.
     *   * > *   The source cluster and the destination cluster or the destination ECS instance must be located in the same region.
     *   *
     * @param CreateDBLinkRequest $request CreateDBLinkRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDBLinkResponse CreateDBLinkResponse
     */
    public function createDBLinkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->DBLinkName)) {
            $query['DBLinkName'] = $request->DBLinkName;
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
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->sourceDBName)) {
            $query['SourceDBName'] = $request->sourceDBName;
        }
        if (!Utils::isUnset($request->targetDBAccount)) {
            $query['TargetDBAccount'] = $request->targetDBAccount;
        }
        if (!Utils::isUnset($request->targetDBInstanceName)) {
            $query['TargetDBInstanceName'] = $request->targetDBInstanceName;
        }
        if (!Utils::isUnset($request->targetDBName)) {
            $query['TargetDBName'] = $request->targetDBName;
        }
        if (!Utils::isUnset($request->targetDBPasswd)) {
            $query['TargetDBPasswd'] = $request->targetDBPasswd;
        }
        if (!Utils::isUnset($request->targetIp)) {
            $query['TargetIp'] = $request->targetIp;
        }
        if (!Utils::isUnset($request->targetPort)) {
            $query['TargetPort'] = $request->targetPort;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDBLink',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDBLinkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * A database link can be used to connect two PolarDB for PostgreSQL(Compatible with Oracle) clusters, or connect a PolarDB for PostgreSQL(Compatible with Oracle) cluster to a user-created PostgreSQL database that is hosted on an Elastic Compute Service (ECS) instance. You can use database links to query data across clusters.
     *   * > *   You can create up to 10 database links for a cluster.
     *   * > *   Each database link connects a source cluster and a destination cluster.
     *   * > *   The source cluster and the destination cluster or the destination ECS instance must be located in the same region.
     *   *
     * @param CreateDBLinkRequest $request CreateDBLinkRequest
     *
     * @return CreateDBLinkResponse CreateDBLinkResponse
     */
    public function createDBLink($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDBLinkWithOptions($request, $runtime);
    }

    /**
     * @param CreateDBNodesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateDBNodesResponse
     */
    public function createDBNodesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->DBNode)) {
            $query['DBNode'] = $request->DBNode;
        }
        if (!Utils::isUnset($request->DBNodeType)) {
            $query['DBNodeType'] = $request->DBNodeType;
        }
        if (!Utils::isUnset($request->endpointBindList)) {
            $query['EndpointBindList'] = $request->endpointBindList;
        }
        if (!Utils::isUnset($request->imciSwitch)) {
            $query['ImciSwitch'] = $request->imciSwitch;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->plannedEndTime)) {
            $query['PlannedEndTime'] = $request->plannedEndTime;
        }
        if (!Utils::isUnset($request->plannedStartTime)) {
            $query['PlannedStartTime'] = $request->plannedStartTime;
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
            'action'      => 'CreateDBNodes',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDBNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * Before you call this operation, make sure that the following requirements are met:
     *   * *   The cluster is in the Running state.
     *   * *   The cluster is unlocked.
     *   *
     * @param CreateDatabaseRequest $request CreateDatabaseRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDatabaseResponse CreateDatabaseResponse
     */
    public function createDatabaseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountName)) {
            $query['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->accountPrivilege)) {
            $query['AccountPrivilege'] = $request->accountPrivilege;
        }
        if (!Utils::isUnset($request->characterSetName)) {
            $query['CharacterSetName'] = $request->characterSetName;
        }
        if (!Utils::isUnset($request->collate)) {
            $query['Collate'] = $request->collate;
        }
        if (!Utils::isUnset($request->ctype)) {
            $query['Ctype'] = $request->ctype;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->DBDescription)) {
            $query['DBDescription'] = $request->DBDescription;
        }
        if (!Utils::isUnset($request->DBName)) {
            $query['DBName'] = $request->DBName;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
            'action'      => 'CreateDatabase',
            'version'     => '2017-08-01',
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
     * Before you call this operation, make sure that the following requirements are met:
     *   * *   The cluster is in the Running state.
     *   * *   The cluster is unlocked.
     *   *
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
     * >  A cluster belongs to only one GDN.
     *   *
     * @param CreateGlobalDatabaseNetworkRequest $request CreateGlobalDatabaseNetworkRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateGlobalDatabaseNetworkResponse CreateGlobalDatabaseNetworkResponse
     */
    public function createGlobalDatabaseNetworkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->GDNDescription)) {
            $query['GDNDescription'] = $request->GDNDescription;
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
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateGlobalDatabaseNetwork',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateGlobalDatabaseNetworkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  A cluster belongs to only one GDN.
     *   *
     * @param CreateGlobalDatabaseNetworkRequest $request CreateGlobalDatabaseNetworkRequest
     *
     * @return CreateGlobalDatabaseNetworkResponse CreateGlobalDatabaseNetworkResponse
     */
    public function createGlobalDatabaseNetwork($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGlobalDatabaseNetworkWithOptions($request, $runtime);
    }

    /**
     * @param CreateGlobalSecurityIPGroupRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return CreateGlobalSecurityIPGroupResponse
     */
    public function createGlobalSecurityIPGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->GIpList)) {
            $query['GIpList'] = $request->GIpList;
        }
        if (!Utils::isUnset($request->globalIgName)) {
            $query['GlobalIgName'] = $request->globalIgName;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateGlobalSecurityIPGroup',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateGlobalSecurityIPGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * You can use parameter templates to manage multiple parameters at a time and apply existing parameters to a PolarDB cluster. For more information, see [Use a parameter template](~~207009~~).
     *   * > You can call this operation only on a PolarDB for MySQL cluster.
     *   *
     * @param CreateParameterGroupRequest $request CreateParameterGroupRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateParameterGroupResponse CreateParameterGroupResponse
     */
    public function createParameterGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBType)) {
            $query['DBType'] = $request->DBType;
        }
        if (!Utils::isUnset($request->DBVersion)) {
            $query['DBVersion'] = $request->DBVersion;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->parameterGroupDesc)) {
            $query['ParameterGroupDesc'] = $request->parameterGroupDesc;
        }
        if (!Utils::isUnset($request->parameterGroupName)) {
            $query['ParameterGroupName'] = $request->parameterGroupName;
        }
        if (!Utils::isUnset($request->parameters)) {
            $query['Parameters'] = $request->parameters;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateParameterGroup',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateParameterGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can use parameter templates to manage multiple parameters at a time and apply existing parameters to a PolarDB cluster. For more information, see [Use a parameter template](~~207009~~).
     *   * > You can call this operation only on a PolarDB for MySQL cluster.
     *   *
     * @param CreateParameterGroupRequest $request CreateParameterGroupRequest
     *
     * @return CreateParameterGroupResponse CreateParameterGroupResponse
     */
    public function createParameterGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createParameterGroupWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
            'action'      => 'CreateServiceLinkedRole',
            'version'     => '2017-08-01',
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
     * @param CreateStoragePlanRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateStoragePlanResponse
     */
    public function createStoragePlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->storageClass)) {
            $query['StorageClass'] = $request->storageClass;
        }
        if (!Utils::isUnset($request->storageType)) {
            $query['StorageType'] = $request->storageType;
        }
        if (!Utils::isUnset($request->usedTime)) {
            $query['UsedTime'] = $request->usedTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateStoragePlan',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateStoragePlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * > Before you call this operation, make sure that the cluster is in the Running state. Otherwise, the operation fails.
     *   *
     * @param DeleteAccountRequest $request DeleteAccountRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAccountResponse DeleteAccountResponse
     */
    public function deleteAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountName)) {
            $query['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
            'action'      => 'DeleteAccount',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > Before you call this operation, make sure that the cluster is in the Running state. Otherwise, the operation fails.
     *   *
     * @param DeleteAccountRequest $request DeleteAccountRequest
     *
     * @return DeleteAccountResponse DeleteAccountResponse
     */
    public function deleteAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAccountWithOptions($request, $runtime);
    }

    /**
     * Before you call this operation, make sure that the cluster meets the following requirements:
     *   * *   The cluster is in the Running state.
     *   * *   The backup sets are in the Success state.
     *   * > *   You can call the [DescribeBackups](~~98102~~) operation to query the status of backup sets.
     *   * >*   After you delete the backup set file, the storage space that is occupied by the file is released. The released storage space is smaller than the size of the file because your snapshots share some data blocks.
     *   *
     * @param DeleteBackupRequest $request DeleteBackupRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteBackupResponse DeleteBackupResponse
     */
    public function deleteBackupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupId)) {
            $query['BackupId'] = $request->backupId;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
            'action'      => 'DeleteBackup',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteBackupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Before you call this operation, make sure that the cluster meets the following requirements:
     *   * *   The cluster is in the Running state.
     *   * *   The backup sets are in the Success state.
     *   * > *   You can call the [DescribeBackups](~~98102~~) operation to query the status of backup sets.
     *   * >*   After you delete the backup set file, the storage space that is occupied by the file is released. The released storage space is smaller than the size of the file because your snapshots share some data blocks.
     *   *
     * @param DeleteBackupRequest $request DeleteBackupRequest
     *
     * @return DeleteBackupResponse DeleteBackupResponse
     */
    public function deleteBackup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBackupWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDBClusterRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteDBClusterResponse
     */
    public function deleteDBClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupRetentionPolicyOnClusterDeletion)) {
            $query['BackupRetentionPolicyOnClusterDeletion'] = $request->backupRetentionPolicyOnClusterDeletion;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
            'action'      => 'DeleteDBCluster',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDBClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DeleteDBClusterEndpointRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteDBClusterEndpointResponse
     */
    public function deleteDBClusterEndpointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->DBEndpointId)) {
            $query['DBEndpointId'] = $request->DBEndpointId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
            'action'      => 'DeleteDBClusterEndpoint',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDBClusterEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * > *   You can delete a public-facing or classic network endpoint of the primary endpoint, the default cluster endpoint, or a custom cluster endpoint.
     *   * > *   Classic network endpoints are supported only on the China site (aliyun.com). Therefore, you do not need to delete classic network endpoints on the International site (alibabacloud.com).
     *   *
     * @param DeleteDBEndpointAddressRequest $request DeleteDBEndpointAddressRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDBEndpointAddressResponse DeleteDBEndpointAddressResponse
     */
    public function deleteDBEndpointAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->DBEndpointId)) {
            $query['DBEndpointId'] = $request->DBEndpointId;
        }
        if (!Utils::isUnset($request->netType)) {
            $query['NetType'] = $request->netType;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
            'action'      => 'DeleteDBEndpointAddress',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDBEndpointAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > *   You can delete a public-facing or classic network endpoint of the primary endpoint, the default cluster endpoint, or a custom cluster endpoint.
     *   * > *   Classic network endpoints are supported only on the China site (aliyun.com). Therefore, you do not need to delete classic network endpoints on the International site (alibabacloud.com).
     *   *
     * @param DeleteDBEndpointAddressRequest $request DeleteDBEndpointAddressRequest
     *
     * @return DeleteDBEndpointAddressResponse DeleteDBEndpointAddressResponse
     */
    public function deleteDBEndpointAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDBEndpointAddressWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDBLinkRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteDBLinkResponse
     */
    public function deleteDBLinkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->DBLinkName)) {
            $query['DBLinkName'] = $request->DBLinkName;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
            'action'      => 'DeleteDBLink',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDBLinkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DeleteDBNodesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteDBNodesResponse
     */
    public function deleteDBNodesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->DBNodeId)) {
            $query['DBNodeId'] = $request->DBNodeId;
        }
        if (!Utils::isUnset($request->DBNodeType)) {
            $query['DBNodeType'] = $request->DBNodeType;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
            'action'      => 'DeleteDBNodes',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDBNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * >- The cluster must be in the Running state and unlocked. Otherwise, the specified database cannot be deleted.
     *   * >- The delete operation is performed in an asynchronous manner. A long period of time may be required to delete a large database. A success response for this operation only indicates that the request to delete the database is sent. You must query the database to check whether the database is deleted.
     *   *
     * @param DeleteDatabaseRequest $request DeleteDatabaseRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDatabaseResponse DeleteDatabaseResponse
     */
    public function deleteDatabaseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->DBName)) {
            $query['DBName'] = $request->DBName;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
            'action'      => 'DeleteDatabase',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDatabaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >- The cluster must be in the Running state and unlocked. Otherwise, the specified database cannot be deleted.
     *   * >- The delete operation is performed in an asynchronous manner. A long period of time may be required to delete a large database. A success response for this operation only indicates that the request to delete the database is sent. You must query the database to check whether the database is deleted.
     *   *
     * @param DeleteDatabaseRequest $request DeleteDatabaseRequest
     *
     * @return DeleteDatabaseResponse DeleteDatabaseResponse
     */
    public function deleteDatabase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDatabaseWithOptions($request, $runtime);
    }

    /**
     * >  You can delete a GDN only when the GDN includes only a primary cluster.
     *   *
     * @param DeleteGlobalDatabaseNetworkRequest $request DeleteGlobalDatabaseNetworkRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteGlobalDatabaseNetworkResponse DeleteGlobalDatabaseNetworkResponse
     */
    public function deleteGlobalDatabaseNetworkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->GDNId)) {
            $query['GDNId'] = $request->GDNId;
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
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteGlobalDatabaseNetwork',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteGlobalDatabaseNetworkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  You can delete a GDN only when the GDN includes only a primary cluster.
     *   *
     * @param DeleteGlobalDatabaseNetworkRequest $request DeleteGlobalDatabaseNetworkRequest
     *
     * @return DeleteGlobalDatabaseNetworkResponse DeleteGlobalDatabaseNetworkResponse
     */
    public function deleteGlobalDatabaseNetwork($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGlobalDatabaseNetworkWithOptions($request, $runtime);
    }

    /**
     * @param DeleteGlobalSecurityIPGroupRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DeleteGlobalSecurityIPGroupResponse
     */
    public function deleteGlobalSecurityIPGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->globalIgName)) {
            $query['GlobalIgName'] = $request->globalIgName;
        }
        if (!Utils::isUnset($request->globalSecurityGroupId)) {
            $query['GlobalSecurityGroupId'] = $request->globalSecurityGroupId;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteGlobalSecurityIPGroup',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteGlobalSecurityIPGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DeleteMaskingRulesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteMaskingRulesResponse
     */
    public function deleteMaskingRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->ruleNameList)) {
            $query['RuleNameList'] = $request->ruleNameList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteMaskingRules',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteMaskingRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * You can use parameter templates to manage multiple parameters at a time and quickly apply existing parameters to a PolarDB cluster. For more information, see [Use a parameter template](~~207009~~).
     *   * >  When you delete a parameter template, the parameter settings that are applied to PolarDB clusters are not affected.
     *   *
     * @param DeleteParameterGroupRequest $request DeleteParameterGroupRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteParameterGroupResponse DeleteParameterGroupResponse
     */
    public function deleteParameterGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->parameterGroupId)) {
            $query['ParameterGroupId'] = $request->parameterGroupId;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteParameterGroup',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteParameterGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can use parameter templates to manage multiple parameters at a time and quickly apply existing parameters to a PolarDB cluster. For more information, see [Use a parameter template](~~207009~~).
     *   * >  When you delete a parameter template, the parameter settings that are applied to PolarDB clusters are not affected.
     *   *
     * @param DeleteParameterGroupRequest $request DeleteParameterGroupRequest
     *
     * @return DeleteParameterGroupResponse DeleteParameterGroupResponse
     */
    public function deleteParameterGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteParameterGroupWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAITaskStatusRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeAITaskStatusResponse
     */
    public function describeAITaskStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAITaskStatus',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAITaskStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeAccountsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeAccountsResponse
     */
    public function describeAccountsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountName)) {
            $query['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
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
            'action'      => 'DescribeAccounts',
            'version'     => '2017-08-01',
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
     * @param DescribeAutoRenewAttributeRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeAutoRenewAttributeResponse
     */
    public function describeAutoRenewAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterIds)) {
            $query['DBClusterIds'] = $request->DBClusterIds;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
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
            'action'      => 'DescribeAutoRenewAttribute',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAutoRenewAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeBackupLogsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeBackupLogsResponse
     */
    public function describeBackupLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupRegion)) {
            $query['BackupRegion'] = $request->backupRegion;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
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
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeBackupLogs',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBackupLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeBackupPolicyRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeBackupPolicyResponse
     */
    public function describeBackupPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
            'action'      => 'DescribeBackupPolicy',
            'version'     => '2017-08-01',
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
     * @param DescribeBackupTasksRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeBackupTasksResponse
     */
    public function describeBackupTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupJobId)) {
            $query['BackupJobId'] = $request->backupJobId;
        }
        if (!Utils::isUnset($request->backupMode)) {
            $query['BackupMode'] = $request->backupMode;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
            'action'      => 'DescribeBackupTasks',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
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
     * @param DescribeBackupsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeBackupsResponse
     */
    public function describeBackupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupId)) {
            $query['BackupId'] = $request->backupId;
        }
        if (!Utils::isUnset($request->backupMode)) {
            $query['BackupMode'] = $request->backupMode;
        }
        if (!Utils::isUnset($request->backupRegion)) {
            $query['BackupRegion'] = $request->backupRegion;
        }
        if (!Utils::isUnset($request->backupStatus)) {
            $query['BackupStatus'] = $request->backupStatus;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
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
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeBackups',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
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
     * @param DescribeCharacterSetNameRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeCharacterSetNameResponse
     */
    public function describeCharacterSetNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
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
            'action'      => 'DescribeCharacterSetName',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
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
     * @param DescribeClassListRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeClassListResponse
     */
    public function describeClassListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->commodityCode)) {
            $query['CommodityCode'] = $request->commodityCode;
        }
        if (!Utils::isUnset($request->masterHa)) {
            $query['MasterHa'] = $request->masterHa;
        }
        if (!Utils::isUnset($request->orderType)) {
            $query['OrderType'] = $request->orderType;
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
            'action'      => 'DescribeClassList',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeClassListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeDBClusterAccessWhitelistRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeDBClusterAccessWhitelistResponse
     */
    public function describeDBClusterAccessWhitelistWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
            'action'      => 'DescribeDBClusterAccessWhitelist',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBClusterAccessWhitelistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeDBClusterAttributeRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeDBClusterAttributeResponse
     */
    public function describeDBClusterAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->describeType)) {
            $query['DescribeType'] = $request->describeType;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
            'action'      => 'DescribeDBClusterAttribute',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBClusterAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeDBClusterAuditLogCollectorRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeDBClusterAuditLogCollectorResponse
     */
    public function describeDBClusterAuditLogCollectorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
            'action'      => 'DescribeDBClusterAuditLogCollector',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBClusterAuditLogCollectorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeDBClusterAvailableResourcesRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeDBClusterAvailableResourcesResponse
     */
    public function describeDBClusterAvailableResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBNodeClass)) {
            $query['DBNodeClass'] = $request->DBNodeClass;
        }
        if (!Utils::isUnset($request->DBType)) {
            $query['DBType'] = $request->DBType;
        }
        if (!Utils::isUnset($request->DBVersion)) {
            $query['DBVersion'] = $request->DBVersion;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
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
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBClusterAvailableResources',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBClusterAvailableResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeDBClusterConnectivityRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeDBClusterConnectivityResponse
     */
    public function describeDBClusterConnectivityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
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
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->sourceIpAddress)) {
            $query['SourceIpAddress'] = $request->sourceIpAddress;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBClusterConnectivity',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBClusterConnectivityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeDBClusterEndpointsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeDBClusterEndpointsResponse
     */
    public function describeDBClusterEndpointsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->DBEndpointId)) {
            $query['DBEndpointId'] = $request->DBEndpointId;
        }
        if (!Utils::isUnset($request->describeType)) {
            $query['DescribeType'] = $request->describeType;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
            'action'      => 'DescribeDBClusterEndpoints',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBClusterEndpointsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * *   You can call this operation to query the status of data migration from an ApsaraDB RDS instance to a PolarDB cluster. For more information, see [Upgrade ApsaraDB RDS for MySQL to PolarDB for MySQL with one click](~~121582~~).
     *   * *   Before you call this operation, make sure that a one-click upgrade task has been created for the cluster. You can call the [CreateDBCluster](~~98169~~) operation to create an upgrade task. Set the **CreationOption** parameter to **MigrationFromRDS**.
     *   *
     * @param DescribeDBClusterMigrationRequest $request DescribeDBClusterMigrationRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBClusterMigrationResponse DescribeDBClusterMigrationResponse
     */
    public function describeDBClusterMigrationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
            'action'      => 'DescribeDBClusterMigration',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBClusterMigrationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   You can call this operation to query the status of data migration from an ApsaraDB RDS instance to a PolarDB cluster. For more information, see [Upgrade ApsaraDB RDS for MySQL to PolarDB for MySQL with one click](~~121582~~).
     *   * *   Before you call this operation, make sure that a one-click upgrade task has been created for the cluster. You can call the [CreateDBCluster](~~98169~~) operation to create an upgrade task. Set the **CreationOption** parameter to **MigrationFromRDS**.
     *   *
     * @param DescribeDBClusterMigrationRequest $request DescribeDBClusterMigrationRequest
     *
     * @return DescribeDBClusterMigrationResponse DescribeDBClusterMigrationResponse
     */
    public function describeDBClusterMigration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClusterMigrationWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBClusterMonitorRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDBClusterMonitorResponse
     */
    public function describeDBClusterMonitorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
            'action'      => 'DescribeDBClusterMonitor',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBClusterMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeDBClusterParametersRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDBClusterParametersResponse
     */
    public function describeDBClusterParametersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->describeType)) {
            $query['DescribeType'] = $request->describeType;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
            'action'      => 'DescribeDBClusterParameters',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBClusterParametersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * *   When the monitoring data is collected every 5 seconds:
     *   *     *   If the query time range is less than or equal to 1 hour, the data is displayed at intervals of 5 seconds.
     *   *     *   If the query time range is less than or equal to one day, the data is displayed at intervals of 1 minute.
     *   *     *   If the query time range is less than or equal to seven days, the data is displayed at intervals of 10 minutes.
     *   *     *   If the query time range is less than or equal to 30 days, the data is displayed at intervals of 1 hour.
     *   *     *   When the query time range is greater than 30 days, the data is displayed at intervals of 1 day.
     *   * *   When the monitoring data is collected every 60 seconds:
     *   *     *   If the query time range is less than or equal to one day, the data is displayed at intervals of 1 minute.
     *   *     *   If the query time range is less than or equal to seven days, the data is displayed at intervals of 10 minutes.
     *   *     *   If the query time range is less than or equal to 30 days, the data is displayed at intervals of 1 hour.
     *   *     *   When the query time range is greater than 30 days, the data is displayed at intervals of 1 day.
     *   * >  By default, the monitoring data is collected once every 60 seconds. You can call the [ModifyDBClusterMonitor](~~159557~~) operation to set the data collection interval to every 5 seconds.
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
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->key)) {
            $query['Key'] = $request->key;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBClusterPerformance',
            'version'     => '2017-08-01',
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
     * *   When the monitoring data is collected every 5 seconds:
     *   *     *   If the query time range is less than or equal to 1 hour, the data is displayed at intervals of 5 seconds.
     *   *     *   If the query time range is less than or equal to one day, the data is displayed at intervals of 1 minute.
     *   *     *   If the query time range is less than or equal to seven days, the data is displayed at intervals of 10 minutes.
     *   *     *   If the query time range is less than or equal to 30 days, the data is displayed at intervals of 1 hour.
     *   *     *   When the query time range is greater than 30 days, the data is displayed at intervals of 1 day.
     *   * *   When the monitoring data is collected every 60 seconds:
     *   *     *   If the query time range is less than or equal to one day, the data is displayed at intervals of 1 minute.
     *   *     *   If the query time range is less than or equal to seven days, the data is displayed at intervals of 10 minutes.
     *   *     *   If the query time range is less than or equal to 30 days, the data is displayed at intervals of 1 hour.
     *   *     *   When the query time range is greater than 30 days, the data is displayed at intervals of 1 day.
     *   * >  By default, the monitoring data is collected once every 60 seconds. You can call the [ModifyDBClusterMonitor](~~159557~~) operation to set the data collection interval to every 5 seconds.
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
     * @param DescribeDBClusterSSLRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeDBClusterSSLResponse
     */
    public function describeDBClusterSSLWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
            'action'      => 'DescribeDBClusterSSL',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBClusterSSLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeDBClusterServerlessConfRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeDBClusterServerlessConfResponse
     */
    public function describeDBClusterServerlessConfWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
            'action'      => 'DescribeDBClusterServerlessConf',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBClusterServerlessConfResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeDBClusterTDERequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeDBClusterTDEResponse
     */
    public function describeDBClusterTDEWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
            'action'      => 'DescribeDBClusterTDE',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBClusterTDEResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * > For more information, see [Engine versions](~~471239~~) and [PolarDB for MySQL](~~172561~~).
     *   *
     * @param DescribeDBClusterVersionRequest $request DescribeDBClusterVersionRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBClusterVersionResponse DescribeDBClusterVersionResponse
     */
    public function describeDBClusterVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->describeType)) {
            $query['DescribeType'] = $request->describeType;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
            'action'      => 'DescribeDBClusterVersion',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBClusterVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > For more information, see [Engine versions](~~471239~~) and [PolarDB for MySQL](~~172561~~).
     *   *
     * @param DescribeDBClusterVersionRequest $request DescribeDBClusterVersionRequest
     *
     * @return DescribeDBClusterVersionResponse DescribeDBClusterVersionResponse
     */
    public function describeDBClusterVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClusterVersionWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBClustersRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeDBClustersResponse
     */
    public function describeDBClustersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->connectionString)) {
            $query['ConnectionString'] = $request->connectionString;
        }
        if (!Utils::isUnset($request->DBClusterDescription)) {
            $query['DBClusterDescription'] = $request->DBClusterDescription;
        }
        if (!Utils::isUnset($request->DBClusterIds)) {
            $query['DBClusterIds'] = $request->DBClusterIds;
        }
        if (!Utils::isUnset($request->DBClusterStatus)) {
            $query['DBClusterStatus'] = $request->DBClusterStatus;
        }
        if (!Utils::isUnset($request->DBNodeIds)) {
            $query['DBNodeIds'] = $request->DBNodeIds;
        }
        if (!Utils::isUnset($request->DBType)) {
            $query['DBType'] = $request->DBType;
        }
        if (!Utils::isUnset($request->DBVersion)) {
            $query['DBVersion'] = $request->DBVersion;
        }
        if (!Utils::isUnset($request->describeType)) {
            $query['DescribeType'] = $request->describeType;
        }
        if (!Utils::isUnset($request->expired)) {
            $query['Expired'] = $request->expired;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
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
        if (!Utils::isUnset($request->payType)) {
            $query['PayType'] = $request->payType;
        }
        if (!Utils::isUnset($request->recentCreationInterval)) {
            $query['RecentCreationInterval'] = $request->recentCreationInterval;
        }
        if (!Utils::isUnset($request->recentExpirationInterval)) {
            $query['RecentExpirationInterval'] = $request->recentExpirationInterval;
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
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBClusters',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBClustersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeDBClustersWithBackupsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeDBClustersWithBackupsResponse
     */
    public function describeDBClustersWithBackupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterDescription)) {
            $query['DBClusterDescription'] = $request->DBClusterDescription;
        }
        if (!Utils::isUnset($request->DBClusterIds)) {
            $query['DBClusterIds'] = $request->DBClusterIds;
        }
        if (!Utils::isUnset($request->DBType)) {
            $query['DBType'] = $request->DBType;
        }
        if (!Utils::isUnset($request->DBVersion)) {
            $query['DBVersion'] = $request->DBVersion;
        }
        if (!Utils::isUnset($request->isDeleted)) {
            $query['IsDeleted'] = $request->isDeleted;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
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
            'action'      => 'DescribeDBClustersWithBackups',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBClustersWithBackupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeDBInitializeVariableRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeDBInitializeVariableResponse
     */
    public function describeDBInitializeVariableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
            'action'      => 'DescribeDBInitializeVariable',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBInitializeVariableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * > You can query only the database links that use a PolarDB for Oracle cluster as the source.
     *   *
     * @param DescribeDBLinksRequest $request DescribeDBLinksRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBLinksResponse DescribeDBLinksResponse
     */
    public function describeDBLinksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->DBLinkName)) {
            $query['DBLinkName'] = $request->DBLinkName;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
            'action'      => 'DescribeDBLinks',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBLinksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > You can query only the database links that use a PolarDB for Oracle cluster as the source.
     *   *
     * @param DescribeDBLinksRequest $request DescribeDBLinksRequest
     *
     * @return DescribeDBLinksResponse DescribeDBLinksResponse
     */
    public function describeDBLinks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBLinksWithOptions($request, $runtime);
    }

    /**
     * *   When the monitoring data is collected every 5 seconds:
     *   *     *   If the query time range is less than or equal to 1 hour, the data is displayed at intervals of 5 seconds.
     *   *     *   If the query time range is less than or equal to one day, the data is displayed at intervals of 1 minute.
     *   *     *   If the query time range is less than or equal to seven days, the data is displayed at intervals of 10 minutes.
     *   *     *   If the query time range is less than or equal to 30 days, the data is displayed at intervals of 1 hour.
     *   *     *   When the query time range is greater than 30 days, the data is displayed at intervals of 1 day.
     *   * *   When the monitoring data is collected every 60 seconds:
     *   *     *   If the query time range is less than or equal to one day, the data is displayed at intervals of 1 minute.
     *   *     *   If the query time range is less than or equal to seven days, the data is displayed at intervals of 10 minutes.
     *   *     *   If the query time range is less than or equal to 30 days, the data is displayed at intervals of 1 hour.
     *   *     *   When the query time range is greater than 30 days, the data is displayed at intervals of 1 day.
     *   * >  By default, the monitoring data is collected once every 60 seconds. You can call the [ModifyDBClusterMonitor](~~159557~~) operation to set the data collection interval to every 5 seconds.
     *   *
     * @param DescribeDBNodePerformanceRequest $request DescribeDBNodePerformanceRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBNodePerformanceResponse DescribeDBNodePerformanceResponse
     */
    public function describeDBNodePerformanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->DBNodeId)) {
            $query['DBNodeId'] = $request->DBNodeId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->key)) {
            $query['Key'] = $request->key;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBNodePerformance',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBNodePerformanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   When the monitoring data is collected every 5 seconds:
     *   *     *   If the query time range is less than or equal to 1 hour, the data is displayed at intervals of 5 seconds.
     *   *     *   If the query time range is less than or equal to one day, the data is displayed at intervals of 1 minute.
     *   *     *   If the query time range is less than or equal to seven days, the data is displayed at intervals of 10 minutes.
     *   *     *   If the query time range is less than or equal to 30 days, the data is displayed at intervals of 1 hour.
     *   *     *   When the query time range is greater than 30 days, the data is displayed at intervals of 1 day.
     *   * *   When the monitoring data is collected every 60 seconds:
     *   *     *   If the query time range is less than or equal to one day, the data is displayed at intervals of 1 minute.
     *   *     *   If the query time range is less than or equal to seven days, the data is displayed at intervals of 10 minutes.
     *   *     *   If the query time range is less than or equal to 30 days, the data is displayed at intervals of 1 hour.
     *   *     *   When the query time range is greater than 30 days, the data is displayed at intervals of 1 day.
     *   * >  By default, the monitoring data is collected once every 60 seconds. You can call the [ModifyDBClusterMonitor](~~159557~~) operation to set the data collection interval to every 5 seconds.
     *   *
     * @param DescribeDBNodePerformanceRequest $request DescribeDBNodePerformanceRequest
     *
     * @return DescribeDBNodePerformanceResponse DescribeDBNodePerformanceResponse
     */
    public function describeDBNodePerformance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBNodePerformanceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBNodesParametersRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeDBNodesParametersResponse
     */
    public function describeDBNodesParametersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->DBNodeIds)) {
            $query['DBNodeIds'] = $request->DBNodeIds;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
            'action'      => 'DescribeDBNodesParameters',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBNodesParametersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * > This operation is applicable only to PolarDB for MySQL clusters.
     *   *
     * @param DescribeDBProxyPerformanceRequest $request DescribeDBProxyPerformanceRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBProxyPerformanceResponse DescribeDBProxyPerformanceResponse
     */
    public function describeDBProxyPerformanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->key)) {
            $query['Key'] = $request->key;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBProxyPerformance',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBProxyPerformanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > This operation is applicable only to PolarDB for MySQL clusters.
     *   *
     * @param DescribeDBProxyPerformanceRequest $request DescribeDBProxyPerformanceRequest
     *
     * @return DescribeDBProxyPerformanceResponse DescribeDBProxyPerformanceResponse
     */
    public function describeDBProxyPerformance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBProxyPerformanceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDasConfigRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeDasConfigResponse
     */
    public function describeDasConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
            'action'      => 'DescribeDasConfig',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDasConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeDatabasesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeDatabasesResponse
     */
    public function describeDatabasesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->DBName)) {
            $query['DBName'] = $request->DBName;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
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
            'action'      => 'DescribeDatabases',
            'version'     => '2017-08-01',
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
     * Before you call this operation, make sure that the PolarDB cluster is in the **Released** state. You must also confirm that the **Retain All Backups Permanently** or **Retain Last Automatic Backup Permanently** backup retention policy takes effect after you release the cluster. If you delete all backup sets after the cluster is released, you cannot use this API operation to query the cluster.
     *   * > You can call the [DescribeDBClusterAttribute](~~98181~~) operation to query the cluster status.
     *   *
     * @param DescribeDetachedBackupsRequest $request DescribeDetachedBackupsRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDetachedBackupsResponse DescribeDetachedBackupsResponse
     */
    public function describeDetachedBackupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupId)) {
            $query['BackupId'] = $request->backupId;
        }
        if (!Utils::isUnset($request->backupMode)) {
            $query['BackupMode'] = $request->backupMode;
        }
        if (!Utils::isUnset($request->backupRegion)) {
            $query['BackupRegion'] = $request->backupRegion;
        }
        if (!Utils::isUnset($request->backupStatus)) {
            $query['BackupStatus'] = $request->backupStatus;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
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
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDetachedBackups',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDetachedBackupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Before you call this operation, make sure that the PolarDB cluster is in the **Released** state. You must also confirm that the **Retain All Backups Permanently** or **Retain Last Automatic Backup Permanently** backup retention policy takes effect after you release the cluster. If you delete all backup sets after the cluster is released, you cannot use this API operation to query the cluster.
     *   * > You can call the [DescribeDBClusterAttribute](~~98181~~) operation to query the cluster status.
     *   *
     * @param DescribeDetachedBackupsRequest $request DescribeDetachedBackupsRequest
     *
     * @return DescribeDetachedBackupsResponse DescribeDetachedBackupsResponse
     */
    public function describeDetachedBackups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDetachedBackupsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGlobalDatabaseNetworkRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeGlobalDatabaseNetworkResponse
     */
    public function describeGlobalDatabaseNetworkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->GDNId)) {
            $query['GDNId'] = $request->GDNId;
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
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeGlobalDatabaseNetwork',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGlobalDatabaseNetworkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeGlobalDatabaseNetworksRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeGlobalDatabaseNetworksResponse
     */
    public function describeGlobalDatabaseNetworksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->filterRegion)) {
            $query['FilterRegion'] = $request->filterRegion;
        }
        if (!Utils::isUnset($request->GDNDescription)) {
            $query['GDNDescription'] = $request->GDNDescription;
        }
        if (!Utils::isUnset($request->GDNId)) {
            $query['GDNId'] = $request->GDNId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeGlobalDatabaseNetworks',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGlobalDatabaseNetworksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeGlobalSecurityIPGroupRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeGlobalSecurityIPGroupResponse
     */
    public function describeGlobalSecurityIPGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->globalSecurityGroupId)) {
            $query['GlobalSecurityGroupId'] = $request->globalSecurityGroupId;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeGlobalSecurityIPGroup',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGlobalSecurityIPGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeGlobalSecurityIPGroupRelationRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return DescribeGlobalSecurityIPGroupRelationResponse
     */
    public function describeGlobalSecurityIPGroupRelationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeGlobalSecurityIPGroupRelation',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGlobalSecurityIPGroupRelationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeLogBackupPolicyRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeLogBackupPolicyResponse
     */
    public function describeLogBackupPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
            'action'      => 'DescribeLogBackupPolicy',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLogBackupPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeMaskingRulesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeMaskingRulesResponse
     */
    public function describeMaskingRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->ruleNameList)) {
            $query['RuleNameList'] = $request->ruleNameList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMaskingRules',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMaskingRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeMetaListRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeMetaListResponse
     */
    public function describeMetaListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupId)) {
            $query['BackupId'] = $request->backupId;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->getDbName)) {
            $query['GetDbName'] = $request->getDbName;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
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
        if (!Utils::isUnset($request->regionCode)) {
            $query['RegionCode'] = $request->regionCode;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->restoreTime)) {
            $query['RestoreTime'] = $request->restoreTime;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMetaList',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
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
     * You can use parameter templates to manage multiple parameters at a time and apply existing parameters to a PolarDB cluster. For more information, see [Use a parameter template](~~207009~~).
     *   * > This parameter is valid only for a PolarDB for MySQL cluster.
     *   *
     * @param DescribeParameterGroupRequest $request DescribeParameterGroupRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeParameterGroupResponse DescribeParameterGroupResponse
     */
    public function describeParameterGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->parameterGroupId)) {
            $query['ParameterGroupId'] = $request->parameterGroupId;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeParameterGroup',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeParameterGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can use parameter templates to manage multiple parameters at a time and apply existing parameters to a PolarDB cluster. For more information, see [Use a parameter template](~~207009~~).
     *   * > This parameter is valid only for a PolarDB for MySQL cluster.
     *   *
     * @param DescribeParameterGroupRequest $request DescribeParameterGroupRequest
     *
     * @return DescribeParameterGroupResponse DescribeParameterGroupResponse
     */
    public function describeParameterGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeParameterGroupWithOptions($request, $runtime);
    }

    /**
     * You can use parameter templates to manage multiple parameters at a time and apply existing parameters to a PolarDB cluster. For more information, see [Use a parameter template](~~207009~~).
     *   * > This operation is applicable only to PolarDB for MySQL clusters.
     *   *
     * @param DescribeParameterGroupsRequest $request DescribeParameterGroupsRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeParameterGroupsResponse DescribeParameterGroupsResponse
     */
    public function describeParameterGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBType)) {
            $query['DBType'] = $request->DBType;
        }
        if (!Utils::isUnset($request->DBVersion)) {
            $query['DBVersion'] = $request->DBVersion;
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
            'action'      => 'DescribeParameterGroups',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeParameterGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can use parameter templates to manage multiple parameters at a time and apply existing parameters to a PolarDB cluster. For more information, see [Use a parameter template](~~207009~~).
     *   * > This operation is applicable only to PolarDB for MySQL clusters.
     *   *
     * @param DescribeParameterGroupsRequest $request DescribeParameterGroupsRequest
     *
     * @return DescribeParameterGroupsResponse DescribeParameterGroupsResponse
     */
    public function describeParameterGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeParameterGroupsWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->DBType)) {
            $query['DBType'] = $request->DBType;
        }
        if (!Utils::isUnset($request->DBVersion)) {
            $query['DBVersion'] = $request->DBVersion;
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
            'action'      => 'DescribeParameterTemplates',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
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
     * @param DescribePendingMaintenanceActionRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribePendingMaintenanceActionResponse
     */
    public function describePendingMaintenanceActionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->isHistory)) {
            $query['IsHistory'] = $request->isHistory;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
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
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
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
        if (!Utils::isUnset($request->taskType)) {
            $query['TaskType'] = $request->taskType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePendingMaintenanceAction',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePendingMaintenanceActionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribePendingMaintenanceActionsRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribePendingMaintenanceActionsResponse
     */
    public function describePendingMaintenanceActionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->isHistory)) {
            $query['IsHistory'] = $request->isHistory;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePendingMaintenanceActions',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePendingMaintenanceActionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribePolarSQLCollectorPolicyRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribePolarSQLCollectorPolicyResponse
     */
    public function describePolarSQLCollectorPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePolarSQLCollectorPolicy',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePolarSQLCollectorPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeRegionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
            'action'      => 'DescribeRegions',
            'version'     => '2017-08-01',
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
     * @param DescribeScheduleTasksRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeScheduleTasksResponse
     */
    public function describeScheduleTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterDescription)) {
            $query['DBClusterDescription'] = $request->DBClusterDescription;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
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
        if (!Utils::isUnset($request->plannedEndTime)) {
            $query['PlannedEndTime'] = $request->plannedEndTime;
        }
        if (!Utils::isUnset($request->plannedStartTime)) {
            $query['PlannedStartTime'] = $request->plannedStartTime;
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
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->taskAction)) {
            $query['TaskAction'] = $request->taskAction;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeScheduleTasks',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeScheduleTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * > This operation is applicable only to PolarDB for MySQL clusters.
     *   *
     * @param DescribeSlowLogRecordsRequest $request DescribeSlowLogRecordsRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSlowLogRecordsResponse DescribeSlowLogRecordsResponse
     */
    public function describeSlowLogRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->DBName)) {
            $query['DBName'] = $request->DBName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
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
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->SQLHASH)) {
            $query['SQLHASH'] = $request->SQLHASH;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSlowLogRecords',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSlowLogRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > This operation is applicable only to PolarDB for MySQL clusters.
     *   *
     * @param DescribeSlowLogRecordsRequest $request DescribeSlowLogRecordsRequest
     *
     * @return DescribeSlowLogRecordsResponse DescribeSlowLogRecordsResponse
     */
    public function describeSlowLogRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSlowLogRecordsWithOptions($request, $runtime);
    }

    /**
     * > This operation is applicable only to PolarDB for MySQL clusters.
     *   *
     * @param DescribeSlowLogsRequest $request DescribeSlowLogsRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSlowLogsResponse DescribeSlowLogsResponse
     */
    public function describeSlowLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->DBName)) {
            $query['DBName'] = $request->DBName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
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
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSlowLogs',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSlowLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > This operation is applicable only to PolarDB for MySQL clusters.
     *   *
     * @param DescribeSlowLogsRequest $request DescribeSlowLogsRequest
     *
     * @return DescribeSlowLogsResponse DescribeSlowLogsResponse
     */
    public function describeSlowLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSlowLogsWithOptions($request, $runtime);
    }

    /**
     * *   You can call this operation to view the details of a task that is generated by a specific API operation or in the console. The system calls the specific API operation when you perform an operation in the console. For example, you can view the details of the task when you call the [CreateDBCluster](~~98169~~) operation or [create a cluster](~~58769~~) in the console.
     *   * *   You can view the details of tasks that are generated only when you call the [CreateDBCluster](~~98169~~) operation to create a cluster and `CreationOption` is not set to `CreateGdnStandby`.
     *   *
     * @param DescribeTasksRequest $request DescribeTasksRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTasksResponse DescribeTasksResponse
     */
    public function describeTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->DBNodeId)) {
            $query['DBNodeId'] = $request->DBNodeId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
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
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTasks',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   You can call this operation to view the details of a task that is generated by a specific API operation or in the console. The system calls the specific API operation when you perform an operation in the console. For example, you can view the details of the task when you call the [CreateDBCluster](~~98169~~) operation or [create a cluster](~~58769~~) in the console.
     *   * *   You can view the details of tasks that are generated only when you call the [CreateDBCluster](~~98169~~) operation to create a cluster and `CreationOption` is not set to `CreateGdnStandby`.
     *   *
     * @param DescribeTasksRequest $request DescribeTasksRequest
     *
     * @return DescribeTasksResponse DescribeTasksResponse
     */
    public function describeTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTasksWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
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
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->TDERegion)) {
            $query['TDERegion'] = $request->TDERegion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeUserEncryptionKeyList',
            'version'     => '2017-08-01',
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
     * @param DescribeVSwitchesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeVSwitchesResponse
     */
    public function describeVSwitchesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dedicatedHostGroupId)) {
            $query['DedicatedHostGroupId'] = $request->dedicatedHostGroupId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
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
            'action'      => 'DescribeVSwitches',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVSwitchesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DisableDBClusterServerlessRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DisableDBClusterServerlessResponse
     */
    public function disableDBClusterServerlessWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
            'action'      => 'DisableDBClusterServerless',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableDBClusterServerlessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param EnableDBClusterServerlessRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return EnableDBClusterServerlessResponse
     */
    public function enableDBClusterServerlessWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->scaleApRoNumMax)) {
            $query['ScaleApRoNumMax'] = $request->scaleApRoNumMax;
        }
        if (!Utils::isUnset($request->scaleApRoNumMin)) {
            $query['ScaleApRoNumMin'] = $request->scaleApRoNumMin;
        }
        if (!Utils::isUnset($request->scaleMax)) {
            $query['ScaleMax'] = $request->scaleMax;
        }
        if (!Utils::isUnset($request->scaleMin)) {
            $query['ScaleMin'] = $request->scaleMin;
        }
        if (!Utils::isUnset($request->scaleRoNumMax)) {
            $query['ScaleRoNumMax'] = $request->scaleRoNumMax;
        }
        if (!Utils::isUnset($request->scaleRoNumMin)) {
            $query['ScaleRoNumMin'] = $request->scaleRoNumMin;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableDBClusterServerless',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableDBClusterServerlessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param EnableFirewallRulesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return EnableFirewallRulesResponse
     */
    public function enableFirewallRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->enable)) {
            $query['Enable'] = $request->enable;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->ruleNameList)) {
            $query['RuleNameList'] = $request->ruleNameList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableFirewallRules',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableFirewallRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param EvaluateRegionResourceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return EvaluateRegionResourceResponse
     */
    public function evaluateRegionResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceConnType)) {
            $query['DBInstanceConnType'] = $request->DBInstanceConnType;
        }
        if (!Utils::isUnset($request->DBNodeClass)) {
            $query['DBNodeClass'] = $request->DBNodeClass;
        }
        if (!Utils::isUnset($request->DBType)) {
            $query['DBType'] = $request->DBType;
        }
        if (!Utils::isUnset($request->DBVersion)) {
            $query['DBVersion'] = $request->DBVersion;
        }
        if (!Utils::isUnset($request->dispenseMode)) {
            $query['DispenseMode'] = $request->dispenseMode;
        }
        if (!Utils::isUnset($request->needMaxScaleLink)) {
            $query['NeedMaxScaleLink'] = $request->needMaxScaleLink;
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
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->subDomain)) {
            $query['SubDomain'] = $request->subDomain;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EvaluateRegionResource',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EvaluateRegionResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param FailoverDBClusterRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return FailoverDBClusterResponse
     */
    public function failoverDBClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->rollBackForDisaster)) {
            $query['RollBackForDisaster'] = $request->rollBackForDisaster;
        }
        if (!Utils::isUnset($request->targetDBNodeId)) {
            $query['TargetDBNodeId'] = $request->targetDBNodeId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'FailoverDBCluster',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return FailoverDBClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * > *   An account can be authorized to access one or more databases.
     *   * > *   If the specified account already has the access permissions on the specified databases, the operation returns a successful response.
     *   * > *   Before you call this operation, make sure that the cluster is in the Running state. Otherwise, the operation fails.
     *   * > *   You can call this operation only on a PolarDB for MySQL cluster.
     *   * > *   By default, a privileged account for a cluster has all the permissions on the databases in the cluster.
     *   *
     * @param GrantAccountPrivilegeRequest $request GrantAccountPrivilegeRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GrantAccountPrivilegeResponse GrantAccountPrivilegeResponse
     */
    public function grantAccountPrivilegeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountName)) {
            $query['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->accountPrivilege)) {
            $query['AccountPrivilege'] = $request->accountPrivilege;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->DBName)) {
            $query['DBName'] = $request->DBName;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
            'action'      => 'GrantAccountPrivilege',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GrantAccountPrivilegeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > *   An account can be authorized to access one or more databases.
     *   * > *   If the specified account already has the access permissions on the specified databases, the operation returns a successful response.
     *   * > *   Before you call this operation, make sure that the cluster is in the Running state. Otherwise, the operation fails.
     *   * > *   You can call this operation only on a PolarDB for MySQL cluster.
     *   * > *   By default, a privileged account for a cluster has all the permissions on the databases in the cluster.
     *   *
     * @param GrantAccountPrivilegeRequest $request GrantAccountPrivilegeRequest
     *
     * @return GrantAccountPrivilegeResponse GrantAccountPrivilegeResponse
     */
    public function grantAccountPrivilege($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->grantAccountPrivilegeWithOptions($request, $runtime);
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
            'version'     => '2017-08-01',
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
     * @param ManuallyStartDBClusterRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ManuallyStartDBClusterResponse
     */
    public function manuallyStartDBClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
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
            'action'      => 'ManuallyStartDBCluster',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ManuallyStartDBClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
            'action'      => 'ModifyAccountDescription',
            'version'     => '2017-08-01',
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
     * @param ModifyAccountPasswordRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyAccountPasswordResponse
     */
    public function modifyAccountPasswordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountName)) {
            $query['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->newAccountPassword)) {
            $query['NewAccountPassword'] = $request->newAccountPassword;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
            'action'      => 'ModifyAccountPassword',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyAccountPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ModifyAutoRenewAttributeRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyAutoRenewAttributeResponse
     */
    public function modifyAutoRenewAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterIds)) {
            $query['DBClusterIds'] = $request->DBClusterIds;
        }
        if (!Utils::isUnset($request->duration)) {
            $query['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->periodUnit)) {
            $query['PeriodUnit'] = $request->periodUnit;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->renewalStatus)) {
            $query['RenewalStatus'] = $request->renewalStatus;
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
            'action'      => 'ModifyAutoRenewAttribute',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyAutoRenewAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * > You can also modify the automatic backup policy of a PolarDB cluster in the console. For more information, see [Backup settings](~~280422~~).
     *   *
     * @param ModifyBackupPolicyRequest $request ModifyBackupPolicyRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyBackupPolicyResponse ModifyBackupPolicyResponse
     */
    public function modifyBackupPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupFrequency)) {
            $query['BackupFrequency'] = $request->backupFrequency;
        }
        if (!Utils::isUnset($request->backupRetentionPolicyOnClusterDeletion)) {
            $query['BackupRetentionPolicyOnClusterDeletion'] = $request->backupRetentionPolicyOnClusterDeletion;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->dataLevel1BackupFrequency)) {
            $query['DataLevel1BackupFrequency'] = $request->dataLevel1BackupFrequency;
        }
        if (!Utils::isUnset($request->dataLevel1BackupPeriod)) {
            $query['DataLevel1BackupPeriod'] = $request->dataLevel1BackupPeriod;
        }
        if (!Utils::isUnset($request->dataLevel1BackupRetentionPeriod)) {
            $query['DataLevel1BackupRetentionPeriod'] = $request->dataLevel1BackupRetentionPeriod;
        }
        if (!Utils::isUnset($request->dataLevel1BackupTime)) {
            $query['DataLevel1BackupTime'] = $request->dataLevel1BackupTime;
        }
        if (!Utils::isUnset($request->dataLevel2BackupAnotherRegionRegion)) {
            $query['DataLevel2BackupAnotherRegionRegion'] = $request->dataLevel2BackupAnotherRegionRegion;
        }
        if (!Utils::isUnset($request->dataLevel2BackupAnotherRegionRetentionPeriod)) {
            $query['DataLevel2BackupAnotherRegionRetentionPeriod'] = $request->dataLevel2BackupAnotherRegionRetentionPeriod;
        }
        if (!Utils::isUnset($request->dataLevel2BackupPeriod)) {
            $query['DataLevel2BackupPeriod'] = $request->dataLevel2BackupPeriod;
        }
        if (!Utils::isUnset($request->dataLevel2BackupRetentionPeriod)) {
            $query['DataLevel2BackupRetentionPeriod'] = $request->dataLevel2BackupRetentionPeriod;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->preferredBackupPeriod)) {
            $query['PreferredBackupPeriod'] = $request->preferredBackupPeriod;
        }
        if (!Utils::isUnset($request->preferredBackupTime)) {
            $query['PreferredBackupTime'] = $request->preferredBackupTime;
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
            'action'      => 'ModifyBackupPolicy',
            'version'     => '2017-08-01',
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
     * > You can also modify the automatic backup policy of a PolarDB cluster in the console. For more information, see [Backup settings](~~280422~~).
     *   *
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
     * @param ModifyDBClusterRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ModifyDBClusterResponse
     */
    public function modifyDBClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->compressStorage)) {
            $query['CompressStorage'] = $request->compressStorage;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->dataSyncMode)) {
            $query['DataSyncMode'] = $request->dataSyncMode;
        }
        if (!Utils::isUnset($request->faultSimulateMode)) {
            $query['FaultSimulateMode'] = $request->faultSimulateMode;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->standbyHAMode)) {
            $query['StandbyHAMode'] = $request->standbyHAMode;
        }
        if (!Utils::isUnset($request->storageAutoScale)) {
            $query['StorageAutoScale'] = $request->storageAutoScale;
        }
        if (!Utils::isUnset($request->storageUpperBound)) {
            $query['StorageUpperBound'] = $request->storageUpperBound;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDBCluster',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ModifyDBClusterAccessWhitelistRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ModifyDBClusterAccessWhitelistResponse
     */
    public function modifyDBClusterAccessWhitelistWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterIPArrayAttribute)) {
            $query['DBClusterIPArrayAttribute'] = $request->DBClusterIPArrayAttribute;
        }
        if (!Utils::isUnset($request->DBClusterIPArrayName)) {
            $query['DBClusterIPArrayName'] = $request->DBClusterIPArrayName;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->modifyMode)) {
            $query['ModifyMode'] = $request->modifyMode;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->securityGroupIds)) {
            $query['SecurityGroupIds'] = $request->securityGroupIds;
        }
        if (!Utils::isUnset($request->securityIps)) {
            $query['SecurityIps'] = $request->securityIps;
        }
        if (!Utils::isUnset($request->whiteListType)) {
            $query['WhiteListType'] = $request->whiteListType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDBClusterAccessWhitelist',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBClusterAccessWhitelistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ModifyDBClusterAndNodesParametersRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return ModifyDBClusterAndNodesParametersResponse
     */
    public function modifyDBClusterAndNodesParametersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->DBNodeIds)) {
            $query['DBNodeIds'] = $request->DBNodeIds;
        }
        if (!Utils::isUnset($request->fromTimeService)) {
            $query['FromTimeService'] = $request->fromTimeService;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->parameterGroupId)) {
            $query['ParameterGroupId'] = $request->parameterGroupId;
        }
        if (!Utils::isUnset($request->parameters)) {
            $query['Parameters'] = $request->parameters;
        }
        if (!Utils::isUnset($request->plannedEndTime)) {
            $query['PlannedEndTime'] = $request->plannedEndTime;
        }
        if (!Utils::isUnset($request->plannedStartTime)) {
            $query['PlannedStartTime'] = $request->plannedStartTime;
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
            'action'      => 'ModifyDBClusterAndNodesParameters',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBClusterAndNodesParametersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ModifyDBClusterAuditLogCollectorRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return ModifyDBClusterAuditLogCollectorResponse
     */
    public function modifyDBClusterAuditLogCollectorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->collectorStatus)) {
            $query['CollectorStatus'] = $request->collectorStatus;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
            'action'      => 'ModifyDBClusterAuditLogCollector',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBClusterAuditLogCollectorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ModifyDBClusterDeletionRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyDBClusterDeletionResponse
     */
    public function modifyDBClusterDeletionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->protection)) {
            $query['Protection'] = $request->protection;
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
            'action'      => 'ModifyDBClusterDeletion',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBClusterDeletionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ModifyDBClusterDescriptionRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyDBClusterDescriptionResponse
     */
    public function modifyDBClusterDescriptionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterDescription)) {
            $query['DBClusterDescription'] = $request->DBClusterDescription;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
            'action'      => 'ModifyDBClusterDescription',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBClusterDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ModifyDBClusterEndpointRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyDBClusterEndpointResponse
     */
    public function modifyDBClusterEndpointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoAddNewNodes)) {
            $query['AutoAddNewNodes'] = $request->autoAddNewNodes;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->DBEndpointDescription)) {
            $query['DBEndpointDescription'] = $request->DBEndpointDescription;
        }
        if (!Utils::isUnset($request->DBEndpointId)) {
            $query['DBEndpointId'] = $request->DBEndpointId;
        }
        if (!Utils::isUnset($request->endpointConfig)) {
            $query['EndpointConfig'] = $request->endpointConfig;
        }
        if (!Utils::isUnset($request->nodes)) {
            $query['Nodes'] = $request->nodes;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->readWriteMode)) {
            $query['ReadWriteMode'] = $request->readWriteMode;
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
            'action'      => 'ModifyDBClusterEndpoint',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBClusterEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * >  We recommend that you set the routine maintenance window to off-peak hours. Alibaba Cloud maintains your cluster within the specified maintenance window to minimize the negative impacts on your business.
     *   *
     * @param ModifyDBClusterMaintainTimeRequest $request ModifyDBClusterMaintainTimeRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBClusterMaintainTimeResponse ModifyDBClusterMaintainTimeResponse
     */
    public function modifyDBClusterMaintainTimeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->maintainTime)) {
            $query['MaintainTime'] = $request->maintainTime;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
            'action'      => 'ModifyDBClusterMaintainTime',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBClusterMaintainTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  We recommend that you set the routine maintenance window to off-peak hours. Alibaba Cloud maintains your cluster within the specified maintenance window to minimize the negative impacts on your business.
     *   *
     * @param ModifyDBClusterMaintainTimeRequest $request ModifyDBClusterMaintainTimeRequest
     *
     * @return ModifyDBClusterMaintainTimeResponse ModifyDBClusterMaintainTimeResponse
     */
    public function modifyDBClusterMaintainTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBClusterMaintainTimeWithOptions($request, $runtime);
    }

    /**
     * *   You can call this operation to switch the task that migrates data from ApsaraDB for RDS to PolarDB.
     *   * *   You can call this operation to roll back the task that migrates data from ApsaraDB for RDS to PolarDB.
     *   * > Before you call this operation, ensure that a one-click upgrade task has been created for the cluster. You can call the [CreateDBCluster](~~98169~~) operation to create an upgrade task. Set the **CreationOption** parameter to **MigrationFromRDS**. For more information, see [Create a PolarDB for MySQL cluster by using the Migration from RDS method](~~121582~~).
     *   *
     * @param ModifyDBClusterMigrationRequest $request ModifyDBClusterMigrationRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBClusterMigrationResponse ModifyDBClusterMigrationResponse
     */
    public function modifyDBClusterMigrationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->connectionStrings)) {
            $query['ConnectionStrings'] = $request->connectionStrings;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->newMasterInstanceId)) {
            $query['NewMasterInstanceId'] = $request->newMasterInstanceId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
        if (!Utils::isUnset($request->sourceRDSDBInstanceId)) {
            $query['SourceRDSDBInstanceId'] = $request->sourceRDSDBInstanceId;
        }
        if (!Utils::isUnset($request->swapConnectionString)) {
            $query['SwapConnectionString'] = $request->swapConnectionString;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDBClusterMigration',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBClusterMigrationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   You can call this operation to switch the task that migrates data from ApsaraDB for RDS to PolarDB.
     *   * *   You can call this operation to roll back the task that migrates data from ApsaraDB for RDS to PolarDB.
     *   * > Before you call this operation, ensure that a one-click upgrade task has been created for the cluster. You can call the [CreateDBCluster](~~98169~~) operation to create an upgrade task. Set the **CreationOption** parameter to **MigrationFromRDS**. For more information, see [Create a PolarDB for MySQL cluster by using the Migration from RDS method](~~121582~~).
     *   *
     * @param ModifyDBClusterMigrationRequest $request ModifyDBClusterMigrationRequest
     *
     * @return ModifyDBClusterMigrationResponse ModifyDBClusterMigrationResponse
     */
    public function modifyDBClusterMigration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBClusterMigrationWithOptions($request, $runtime);
    }

    /**
     * *   When the monitoring data is collected every 5 seconds:
     *   *     *   If the query time range is less than or equal to 1 hour, the data is displayed at intervals of 5 seconds.
     *   *     *   If the query time range is less than or equal to one day, the data is displayed at intervals of 1 minute.
     *   *     *   If the query time range is less than or equal to seven days, the data is displayed at intervals of 10 minutes.
     *   *     *   If the query time range is less than or equal to 30 days, the data is displayed at intervals of 1 hour.
     *   *     *   When the query time range is greater than 30 days, the data is displayed at intervals of 1 day.
     *   * *   When the monitoring data is collected every 60 seconds:
     *   *     *   If the query time range is less than or equal to one day, the data is displayed at intervals of 1 minute.
     *   *     *   If the query time range is less than or equal to seven days, the data is displayed at intervals of 10 minutes.
     *   *     *   If the query time range is less than or equal to 30 days, the data is displayed at intervals of 1 hour.
     *   *     *   When the query time range is greater than 30 days, the data is displayed at intervals of 1 day.
     *   *
     * @param ModifyDBClusterMonitorRequest $request ModifyDBClusterMonitorRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBClusterMonitorResponse ModifyDBClusterMonitorResponse
     */
    public function modifyDBClusterMonitorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
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
            'action'      => 'ModifyDBClusterMonitor',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBClusterMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   When the monitoring data is collected every 5 seconds:
     *   *     *   If the query time range is less than or equal to 1 hour, the data is displayed at intervals of 5 seconds.
     *   *     *   If the query time range is less than or equal to one day, the data is displayed at intervals of 1 minute.
     *   *     *   If the query time range is less than or equal to seven days, the data is displayed at intervals of 10 minutes.
     *   *     *   If the query time range is less than or equal to 30 days, the data is displayed at intervals of 1 hour.
     *   *     *   When the query time range is greater than 30 days, the data is displayed at intervals of 1 day.
     *   * *   When the monitoring data is collected every 60 seconds:
     *   *     *   If the query time range is less than or equal to one day, the data is displayed at intervals of 1 minute.
     *   *     *   If the query time range is less than or equal to seven days, the data is displayed at intervals of 10 minutes.
     *   *     *   If the query time range is less than or equal to 30 days, the data is displayed at intervals of 1 hour.
     *   *     *   When the query time range is greater than 30 days, the data is displayed at intervals of 1 day.
     *   *
     * @param ModifyDBClusterMonitorRequest $request ModifyDBClusterMonitorRequest
     *
     * @return ModifyDBClusterMonitorResponse ModifyDBClusterMonitorResponse
     */
    public function modifyDBClusterMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBClusterMonitorWithOptions($request, $runtime);
    }

    /**
     * PolarDB supports the parameter template feature to centrally manage clusters. You can configure a number of parameters at a time by using a parameter template and apply the template to a PolarDB cluster. For more information, see [Use a parameter template](~~207009~~).
     *   * **
     *   * **Only PolarDB for MySQL clusters support parameter templates.
     *   *
     * @param ModifyDBClusterParametersRequest $request ModifyDBClusterParametersRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBClusterParametersResponse ModifyDBClusterParametersResponse
     */
    public function modifyDBClusterParametersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->fromTimeService)) {
            $query['FromTimeService'] = $request->fromTimeService;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->parameterGroupId)) {
            $query['ParameterGroupId'] = $request->parameterGroupId;
        }
        if (!Utils::isUnset($request->parameters)) {
            $query['Parameters'] = $request->parameters;
        }
        if (!Utils::isUnset($request->plannedEndTime)) {
            $query['PlannedEndTime'] = $request->plannedEndTime;
        }
        if (!Utils::isUnset($request->plannedStartTime)) {
            $query['PlannedStartTime'] = $request->plannedStartTime;
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
            'action'      => 'ModifyDBClusterParameters',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBClusterParametersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * PolarDB supports the parameter template feature to centrally manage clusters. You can configure a number of parameters at a time by using a parameter template and apply the template to a PolarDB cluster. For more information, see [Use a parameter template](~~207009~~).
     *   * **
     *   * **Only PolarDB for MySQL clusters support parameter templates.
     *   *
     * @param ModifyDBClusterParametersRequest $request ModifyDBClusterParametersRequest
     *
     * @return ModifyDBClusterParametersResponse ModifyDBClusterParametersResponse
     */
    public function modifyDBClusterParameters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBClusterParametersWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDBClusterPrimaryZoneRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyDBClusterPrimaryZoneResponse
     */
    public function modifyDBClusterPrimaryZoneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->fromTimeService)) {
            $query['FromTimeService'] = $request->fromTimeService;
        }
        if (!Utils::isUnset($request->isSwitchOverForDisaster)) {
            $query['IsSwitchOverForDisaster'] = $request->isSwitchOverForDisaster;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->plannedEndTime)) {
            $query['PlannedEndTime'] = $request->plannedEndTime;
        }
        if (!Utils::isUnset($request->plannedStartTime)) {
            $query['PlannedStartTime'] = $request->plannedStartTime;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->VPCId)) {
            $query['VPCId'] = $request->VPCId;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDBClusterPrimaryZone',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBClusterPrimaryZoneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ModifyDBClusterResourceGroupRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ModifyDBClusterResourceGroupResponse
     */
    public function modifyDBClusterResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
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
            'action'      => 'ModifyDBClusterResourceGroup',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBClusterResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ModifyDBClusterSSLRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyDBClusterSSLResponse
     */
    public function modifyDBClusterSSLWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->DBEndpointId)) {
            $query['DBEndpointId'] = $request->DBEndpointId;
        }
        if (!Utils::isUnset($request->netType)) {
            $query['NetType'] = $request->netType;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->SSLAutoRotate)) {
            $query['SSLAutoRotate'] = $request->SSLAutoRotate;
        }
        if (!Utils::isUnset($request->SSLEnabled)) {
            $query['SSLEnabled'] = $request->SSLEnabled;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDBClusterSSL',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBClusterSSLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ModifyDBClusterServerlessConfRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ModifyDBClusterServerlessConfResponse
     */
    public function modifyDBClusterServerlessConfWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->allowShutDown)) {
            $query['AllowShutDown'] = $request->allowShutDown;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->fromTimeService)) {
            $query['FromTimeService'] = $request->fromTimeService;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->plannedEndTime)) {
            $query['PlannedEndTime'] = $request->plannedEndTime;
        }
        if (!Utils::isUnset($request->plannedStartTime)) {
            $query['PlannedStartTime'] = $request->plannedStartTime;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->scaleApRoNumMax)) {
            $query['ScaleApRoNumMax'] = $request->scaleApRoNumMax;
        }
        if (!Utils::isUnset($request->scaleApRoNumMin)) {
            $query['ScaleApRoNumMin'] = $request->scaleApRoNumMin;
        }
        if (!Utils::isUnset($request->scaleMax)) {
            $query['ScaleMax'] = $request->scaleMax;
        }
        if (!Utils::isUnset($request->scaleMin)) {
            $query['ScaleMin'] = $request->scaleMin;
        }
        if (!Utils::isUnset($request->scaleRoNumMax)) {
            $query['ScaleRoNumMax'] = $request->scaleRoNumMax;
        }
        if (!Utils::isUnset($request->scaleRoNumMin)) {
            $query['ScaleRoNumMin'] = $request->scaleRoNumMin;
        }
        if (!Utils::isUnset($request->secondsUntilAutoPause)) {
            $query['SecondsUntilAutoPause'] = $request->secondsUntilAutoPause;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDBClusterServerlessConf',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBClusterServerlessConfResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ModifyDBClusterStorageSpaceRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyDBClusterStorageSpaceResponse
     */
    public function modifyDBClusterStorageSpaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->plannedEndTime)) {
            $query['PlannedEndTime'] = $request->plannedEndTime;
        }
        if (!Utils::isUnset($request->plannedStartTime)) {
            $query['PlannedStartTime'] = $request->plannedStartTime;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->storageSpace)) {
            $query['StorageSpace'] = $request->storageSpace;
        }
        if (!Utils::isUnset($request->subCategory)) {
            $query['SubCategory'] = $request->subCategory;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDBClusterStorageSpace',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBClusterStorageSpaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * > *   To perform this operation, you must activate KMS first. For more information, see [Purchase a dedicated KMS instance](~~153781~~).
     *   * > *   After TDE is enabled, you cannot disable TDE.
     *   *
     * @param ModifyDBClusterTDERequest $request ModifyDBClusterTDERequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBClusterTDEResponse ModifyDBClusterTDEResponse
     */
    public function modifyDBClusterTDEWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->encryptNewTables)) {
            $query['EncryptNewTables'] = $request->encryptNewTables;
        }
        if (!Utils::isUnset($request->encryptionKey)) {
            $query['EncryptionKey'] = $request->encryptionKey;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->roleArn)) {
            $query['RoleArn'] = $request->roleArn;
        }
        if (!Utils::isUnset($request->TDEStatus)) {
            $query['TDEStatus'] = $request->TDEStatus;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDBClusterTDE',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBClusterTDEResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > *   To perform this operation, you must activate KMS first. For more information, see [Purchase a dedicated KMS instance](~~153781~~).
     *   * > *   After TDE is enabled, you cannot disable TDE.
     *   *
     * @param ModifyDBClusterTDERequest $request ModifyDBClusterTDERequest
     *
     * @return ModifyDBClusterTDEResponse ModifyDBClusterTDEResponse
     */
    public function modifyDBClusterTDE($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBClusterTDEWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->DBDescription)) {
            $query['DBDescription'] = $request->DBDescription;
        }
        if (!Utils::isUnset($request->DBName)) {
            $query['DBName'] = $request->DBName;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
            'action'      => 'ModifyDBDescription',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
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
     * @param ModifyDBEndpointAddressRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyDBEndpointAddressResponse
     */
    public function modifyDBEndpointAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->connectionStringPrefix)) {
            $query['ConnectionStringPrefix'] = $request->connectionStringPrefix;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->DBEndpointId)) {
            $query['DBEndpointId'] = $request->DBEndpointId;
        }
        if (!Utils::isUnset($request->netType)) {
            $query['NetType'] = $request->netType;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->port)) {
            $query['Port'] = $request->port;
        }
        if (!Utils::isUnset($request->privateZoneAddressPrefix)) {
            $query['PrivateZoneAddressPrefix'] = $request->privateZoneAddressPrefix;
        }
        if (!Utils::isUnset($request->privateZoneName)) {
            $query['PrivateZoneName'] = $request->privateZoneName;
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
            'action'      => 'ModifyDBEndpointAddress',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBEndpointAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ModifyDBNodeClassRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyDBNodeClassResponse
     */
    public function modifyDBNodeClassWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->DBNodeTargetClass)) {
            $query['DBNodeTargetClass'] = $request->DBNodeTargetClass;
        }
        if (!Utils::isUnset($request->DBNodeType)) {
            $query['DBNodeType'] = $request->DBNodeType;
        }
        if (!Utils::isUnset($request->modifyType)) {
            $query['ModifyType'] = $request->modifyType;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->plannedEndTime)) {
            $query['PlannedEndTime'] = $request->plannedEndTime;
        }
        if (!Utils::isUnset($request->plannedStartTime)) {
            $query['PlannedStartTime'] = $request->plannedStartTime;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->subCategory)) {
            $query['SubCategory'] = $request->subCategory;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDBNodeClass',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBNodeClassResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ModifyDBNodeHotReplicaModeRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyDBNodeHotReplicaModeResponse
     */
    public function modifyDBNodeHotReplicaModeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->DBNodeId)) {
            $query['DBNodeId'] = $request->DBNodeId;
        }
        if (!Utils::isUnset($request->hotReplicaMode)) {
            $query['HotReplicaMode'] = $request->hotReplicaMode;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
            'action'      => 'ModifyDBNodeHotReplicaMode',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBNodeHotReplicaModeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ModifyDBNodesClassRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyDBNodesClassResponse
     */
    public function modifyDBNodesClassWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->DBNode)) {
            $query['DBNode'] = $request->DBNode;
        }
        if (!Utils::isUnset($request->modifyType)) {
            $query['ModifyType'] = $request->modifyType;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->plannedEndTime)) {
            $query['PlannedEndTime'] = $request->plannedEndTime;
        }
        if (!Utils::isUnset($request->plannedStartTime)) {
            $query['PlannedStartTime'] = $request->plannedStartTime;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->subCategory)) {
            $query['SubCategory'] = $request->subCategory;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDBNodesClass',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBNodesClassResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ModifyDBNodesParametersRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyDBNodesParametersResponse
     */
    public function modifyDBNodesParametersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->DBNodeIds)) {
            $query['DBNodeIds'] = $request->DBNodeIds;
        }
        if (!Utils::isUnset($request->fromTimeService)) {
            $query['FromTimeService'] = $request->fromTimeService;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->parameterGroupId)) {
            $query['ParameterGroupId'] = $request->parameterGroupId;
        }
        if (!Utils::isUnset($request->parameters)) {
            $query['Parameters'] = $request->parameters;
        }
        if (!Utils::isUnset($request->plannedEndTime)) {
            $query['PlannedEndTime'] = $request->plannedEndTime;
        }
        if (!Utils::isUnset($request->plannedStartTime)) {
            $query['PlannedStartTime'] = $request->plannedStartTime;
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
            'action'      => 'ModifyDBNodesParameters',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBNodesParametersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ModifyGlobalDatabaseNetworkRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyGlobalDatabaseNetworkResponse
     */
    public function modifyGlobalDatabaseNetworkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->GDNDescription)) {
            $query['GDNDescription'] = $request->GDNDescription;
        }
        if (!Utils::isUnset($request->GDNId)) {
            $query['GDNId'] = $request->GDNId;
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
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyGlobalDatabaseNetwork',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyGlobalDatabaseNetworkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ModifyGlobalSecurityIPGroupRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyGlobalSecurityIPGroupResponse
     */
    public function modifyGlobalSecurityIPGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->GIpList)) {
            $query['GIpList'] = $request->GIpList;
        }
        if (!Utils::isUnset($request->globalIgName)) {
            $query['GlobalIgName'] = $request->globalIgName;
        }
        if (!Utils::isUnset($request->globalSecurityGroupId)) {
            $query['GlobalSecurityGroupId'] = $request->globalSecurityGroupId;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyGlobalSecurityIPGroup',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyGlobalSecurityIPGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ModifyGlobalSecurityIPGroupNameRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ModifyGlobalSecurityIPGroupNameResponse
     */
    public function modifyGlobalSecurityIPGroupNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->globalIgName)) {
            $query['GlobalIgName'] = $request->globalIgName;
        }
        if (!Utils::isUnset($request->globalSecurityGroupId)) {
            $query['GlobalSecurityGroupId'] = $request->globalSecurityGroupId;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyGlobalSecurityIPGroupName',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyGlobalSecurityIPGroupNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ModifyGlobalSecurityIPGroupRelationRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return ModifyGlobalSecurityIPGroupRelationResponse
     */
    public function modifyGlobalSecurityIPGroupRelationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->globalSecurityGroupId)) {
            $query['GlobalSecurityGroupId'] = $request->globalSecurityGroupId;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyGlobalSecurityIPGroupRelation',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyGlobalSecurityIPGroupRelationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ModifyLogBackupPolicyRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyLogBackupPolicyResponse
     */
    public function modifyLogBackupPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->logBackupAnotherRegionRegion)) {
            $query['LogBackupAnotherRegionRegion'] = $request->logBackupAnotherRegionRegion;
        }
        if (!Utils::isUnset($request->logBackupAnotherRegionRetentionPeriod)) {
            $query['LogBackupAnotherRegionRetentionPeriod'] = $request->logBackupAnotherRegionRetentionPeriod;
        }
        if (!Utils::isUnset($request->logBackupRetentionPeriod)) {
            $query['LogBackupRetentionPeriod'] = $request->logBackupRetentionPeriod;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
            'action'      => 'ModifyLogBackupPolicy',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyLogBackupPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ModifyMaskingRulesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyMaskingRulesResponse
     */
    public function modifyMaskingRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->enable)) {
            $query['Enable'] = $request->enable;
        }
        if (!Utils::isUnset($request->ruleConfig)) {
            $query['RuleConfig'] = $request->ruleConfig;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->ruleNameList)) {
            $query['RuleNameList'] = $request->ruleNameList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyMaskingRules',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyMaskingRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ModifyPendingMaintenanceActionRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ModifyPendingMaintenanceActionResponse
     */
    public function modifyPendingMaintenanceActionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ids)) {
            $query['Ids'] = $request->ids;
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
        if (!Utils::isUnset($request->switchTime)) {
            $query['SwitchTime'] = $request->switchTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyPendingMaintenanceAction',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyPendingMaintenanceActionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param OpenAITaskRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return OpenAITaskResponse
     */
    public function openAITaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->nodeType)) {
            $query['NodeType'] = $request->nodeType;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
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
        if (!Utils::isUnset($request->username)) {
            $query['Username'] = $request->username;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OpenAITask',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OpenAITaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RefreshDBClusterStorageUsageRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return RefreshDBClusterStorageUsageResponse
     */
    public function refreshDBClusterStorageUsageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->syncRealTime)) {
            $query['SyncRealTime'] = $request->syncRealTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RefreshDBClusterStorageUsage',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RefreshDBClusterStorageUsageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * >  You cannot remove the primary cluster from a GDN.
     *   *
     * @param RemoveDBClusterFromGDNRequest $request RemoveDBClusterFromGDNRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveDBClusterFromGDNResponse RemoveDBClusterFromGDNResponse
     */
    public function removeDBClusterFromGDNWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->GDNId)) {
            $query['GDNId'] = $request->GDNId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveDBClusterFromGDN',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveDBClusterFromGDNResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  You cannot remove the primary cluster from a GDN.
     *   *
     * @param RemoveDBClusterFromGDNRequest $request RemoveDBClusterFromGDNRequest
     *
     * @return RemoveDBClusterFromGDNResponse RemoveDBClusterFromGDNResponse
     */
    public function removeDBClusterFromGDN($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeDBClusterFromGDNWithOptions($request, $runtime);
    }

    /**
     * >- Only PolarDB for MySQL clusters support this operation.
     *   * >- If the privileged account of your cluster encounters exceptions, you can call this operation to reset the permissions. For example, the permissions are accidentally revoked.
     *   *
     * @param ResetAccountRequest $request ResetAccountRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ResetAccountResponse ResetAccountResponse
     */
    public function resetAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountName)) {
            $query['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->accountPassword)) {
            $query['AccountPassword'] = $request->accountPassword;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
            'action'      => 'ResetAccount',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResetAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >- Only PolarDB for MySQL clusters support this operation.
     *   * >- If the privileged account of your cluster encounters exceptions, you can call this operation to reset the permissions. For example, the permissions are accidentally revoked.
     *   *
     * @param ResetAccountRequest $request ResetAccountRequest
     *
     * @return ResetAccountResponse ResetAccountResponse
     */
    public function resetAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetAccountWithOptions($request, $runtime);
    }

    /**
     * @param ResetGlobalDatabaseNetworkRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ResetGlobalDatabaseNetworkResponse
     */
    public function resetGlobalDatabaseNetworkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->GDNId)) {
            $query['GDNId'] = $request->GDNId;
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
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResetGlobalDatabaseNetwork',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResetGlobalDatabaseNetworkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RestartDBNodeRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return RestartDBNodeResponse
     */
    public function restartDBNodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBNodeId)) {
            $query['DBNodeId'] = $request->DBNodeId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
            'action'      => 'RestartDBNode',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RestartDBNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RestoreTableRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return RestoreTableResponse
     */
    public function restoreTableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupId)) {
            $query['BackupId'] = $request->backupId;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->restoreTime)) {
            $query['RestoreTime'] = $request->restoreTime;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->tableMeta)) {
            $query['TableMeta'] = $request->tableMeta;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RestoreTable',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
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
        $query = [];
        if (!Utils::isUnset($request->accountName)) {
            $query['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->DBName)) {
            $query['DBName'] = $request->DBName;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
            'action'      => 'RevokeAccountPrivilege',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
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
     * @param SwitchOverGlobalDatabaseNetworkRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return SwitchOverGlobalDatabaseNetworkResponse
     */
    public function switchOverGlobalDatabaseNetworkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->forced)) {
            $query['Forced'] = $request->forced;
        }
        if (!Utils::isUnset($request->GDNId)) {
            $query['GDNId'] = $request->GDNId;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SwitchOverGlobalDatabaseNetwork',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SwitchOverGlobalDatabaseNetworkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'version'     => '2017-08-01',
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
     * @param TempModifyDBNodeRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return TempModifyDBNodeResponse
     */
    public function tempModifyDBNodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->DBNode)) {
            $query['DBNode'] = $request->DBNode;
        }
        if (!Utils::isUnset($request->modifyType)) {
            $query['ModifyType'] = $request->modifyType;
        }
        if (!Utils::isUnset($request->operationType)) {
            $query['OperationType'] = $request->operationType;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->restoreTime)) {
            $query['RestoreTime'] = $request->restoreTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TempModifyDBNode',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TempModifyDBNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * > *   PolarDB clusters support the subscription and pay-as-you-go billing methods. You can change the billing method from subscription to pay-as-you-go or from pay-as-you-go to subscription based on your business requirements. For more information, see [Change the billing method from subscription to pay-as-you-go](~~172886~~) and [Change the billing method from pay-as-you-go to subscription](~~84076~~).
     *   * >*   You cannot change the billing method from pay-as-you-go to subscription if your account balance is insufficient.
     *   * >*   If you change the billing method from subscription to pay-as-you-go, the system automatically refunds the balance of the prepaid subscription fees.
     *   *
     * @param TransformDBClusterPayTypeRequest $request TransformDBClusterPayTypeRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return TransformDBClusterPayTypeResponse TransformDBClusterPayTypeResponse
     */
    public function transformDBClusterPayTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
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
        if (!Utils::isUnset($request->usedTime)) {
            $query['UsedTime'] = $request->usedTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TransformDBClusterPayType',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TransformDBClusterPayTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > *   PolarDB clusters support the subscription and pay-as-you-go billing methods. You can change the billing method from subscription to pay-as-you-go or from pay-as-you-go to subscription based on your business requirements. For more information, see [Change the billing method from subscription to pay-as-you-go](~~172886~~) and [Change the billing method from pay-as-you-go to subscription](~~84076~~).
     *   * >*   You cannot change the billing method from pay-as-you-go to subscription if your account balance is insufficient.
     *   * >*   If you change the billing method from subscription to pay-as-you-go, the system automatically refunds the balance of the prepaid subscription fees.
     *   *
     * @param TransformDBClusterPayTypeRequest $request TransformDBClusterPayTypeRequest
     *
     * @return TransformDBClusterPayTypeResponse TransformDBClusterPayTypeResponse
     */
    public function transformDBClusterPayType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->transformDBClusterPayTypeWithOptions($request, $runtime);
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
            'version'     => '2017-08-01',
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
     * > You can upgrade only the revision version of a PolarDB for MySQL cluster. For example, you can upgrade the version 8.0.1.1.3 of a PolarDB for MySQL cluster to the version 8.0.1.1.4.
     *   *
     * @param UpgradeDBClusterMinorVersionRequest $request UpgradeDBClusterMinorVersionRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return UpgradeDBClusterMinorVersionResponse UpgradeDBClusterMinorVersionResponse
     */
    public function upgradeDBClusterMinorVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->fromTimeService)) {
            $query['FromTimeService'] = $request->fromTimeService;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->plannedEndTime)) {
            $query['PlannedEndTime'] = $request->plannedEndTime;
        }
        if (!Utils::isUnset($request->plannedStartTime)) {
            $query['PlannedStartTime'] = $request->plannedStartTime;
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
            'action'      => 'UpgradeDBClusterMinorVersion',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpgradeDBClusterMinorVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > You can upgrade only the revision version of a PolarDB for MySQL cluster. For example, you can upgrade the version 8.0.1.1.3 of a PolarDB for MySQL cluster to the version 8.0.1.1.4.
     *   *
     * @param UpgradeDBClusterMinorVersionRequest $request UpgradeDBClusterMinorVersionRequest
     *
     * @return UpgradeDBClusterMinorVersionResponse UpgradeDBClusterMinorVersionResponse
     */
    public function upgradeDBClusterMinorVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeDBClusterMinorVersionWithOptions($request, $runtime);
    }

    /**
     * >
     *   * *   You can update only the revision version of a PolarDB for MySQL cluster, for example, from 8.0.1.1.3 to 8.0.1.1.4.
     *   * *   You can use only your Alibaba Cloud account to create scheduled tasks that update the kernel version of a PolarDB for MySQL cluster. RAM users are not authorized to update the kernel version of a PolarDB for MySQL cluster.
     *   *
     * @param UpgradeDBClusterVersionRequest $request UpgradeDBClusterVersionRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return UpgradeDBClusterVersionResponse UpgradeDBClusterVersionResponse
     */
    public function upgradeDBClusterVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->fromTimeService)) {
            $query['FromTimeService'] = $request->fromTimeService;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->plannedEndTime)) {
            $query['PlannedEndTime'] = $request->plannedEndTime;
        }
        if (!Utils::isUnset($request->plannedStartTime)) {
            $query['PlannedStartTime'] = $request->plannedStartTime;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->targetDBRevisionVersionCode)) {
            $query['TargetDBRevisionVersionCode'] = $request->targetDBRevisionVersionCode;
        }
        if (!Utils::isUnset($request->upgradeLabel)) {
            $query['UpgradeLabel'] = $request->upgradeLabel;
        }
        if (!Utils::isUnset($request->upgradePolicy)) {
            $query['UpgradePolicy'] = $request->upgradePolicy;
        }
        if (!Utils::isUnset($request->upgradeType)) {
            $query['UpgradeType'] = $request->upgradeType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpgradeDBClusterVersion',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpgradeDBClusterVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >
     *   * *   You can update only the revision version of a PolarDB for MySQL cluster, for example, from 8.0.1.1.3 to 8.0.1.1.4.
     *   * *   You can use only your Alibaba Cloud account to create scheduled tasks that update the kernel version of a PolarDB for MySQL cluster. RAM users are not authorized to update the kernel version of a PolarDB for MySQL cluster.
     *   *
     * @param UpgradeDBClusterVersionRequest $request UpgradeDBClusterVersionRequest
     *
     * @return UpgradeDBClusterVersionResponse UpgradeDBClusterVersionResponse
     */
    public function upgradeDBClusterVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeDBClusterVersionWithOptions($request, $runtime);
    }
}
