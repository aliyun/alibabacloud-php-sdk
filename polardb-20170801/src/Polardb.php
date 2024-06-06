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
     * @summary Cancels scheduled tasks that are not yet started.
     *  *
     * @param CancelScheduleTasksRequest $request CancelScheduleTasksRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return CancelScheduleTasksResponse CancelScheduleTasksResponse
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
     * @summary Cancels scheduled tasks that are not yet started.
     *  *
     * @param CancelScheduleTasksRequest $request CancelScheduleTasksRequest
     *
     * @return CancelScheduleTasksResponse CancelScheduleTasksResponse
     */
    public function cancelScheduleTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelScheduleTasksWithOptions($request, $runtime);
    }

    /**
     * @summary Checks whether an account name is valid or unique in a cluster.
     *  *
     * @param CheckAccountNameRequest $request CheckAccountNameRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckAccountNameResponse CheckAccountNameResponse
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
     * @summary Checks whether an account name is valid or unique in a cluster.
     *  *
     * @param CheckAccountNameRequest $request CheckAccountNameRequest
     *
     * @return CheckAccountNameResponse CheckAccountNameResponse
     */
    public function checkAccountName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkAccountNameWithOptions($request, $runtime);
    }

    /**
     * @summary Checks whether a database name is valid or whether the name is already used by another database in the current cluster.
     *  *
     * @param CheckDBNameRequest $request CheckDBNameRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckDBNameResponse CheckDBNameResponse
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
     * @summary Checks whether a database name is valid or whether the name is already used by another database in the current cluster.
     *  *
     * @param CheckDBNameRequest $request CheckDBNameRequest
     *
     * @return CheckDBNameResponse CheckDBNameResponse
     */
    public function checkDBName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkDBNameWithOptions($request, $runtime);
    }

    /**
     * @summary Queries whether the cluster is authorized to use Key Management Service (KMS).
     *  *
     * @param CheckKMSAuthorizedRequest $request CheckKMSAuthorizedRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckKMSAuthorizedResponse CheckKMSAuthorizedResponse
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
     * @summary Queries whether the cluster is authorized to use Key Management Service (KMS).
     *  *
     * @param CheckKMSAuthorizedRequest $request CheckKMSAuthorizedRequest
     *
     * @return CheckKMSAuthorizedResponse CheckKMSAuthorizedResponse
     */
    public function checkKMSAuthorized($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkKMSAuthorizedWithOptions($request, $runtime);
    }

    /**
     * @summary Checks whether a service-linked role (SLR) is created.
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
     * @summary Checks whether a service-linked role (SLR) is created.
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
     * @summary 关闭DB4AI
     *  *
     * @param CloseAITaskRequest $request CloseAITaskRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return CloseAITaskResponse CloseAITaskResponse
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
     * @summary 关闭DB4AI
     *  *
     * @param CloseAITaskRequest $request CloseAITaskRequest
     *
     * @return CloseAITaskResponse CloseAITaskResponse
     */
    public function closeAITask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->closeAITaskWithOptions($request, $runtime);
    }

    /**
     * @summary Cancels or completes the migration task that upgrades an RDS cluster to a PolarDB cluster.
     *  *
     * @description *   You can call this operation to cancel the migration task before data migration.
     * *   You can call this operation to perform the migration task after data migration.
     * > Before you call this operation, ensure that a one-click upgrade task has been created for the cluster. You can call the [CreateDBCluster](https://help.aliyun.com/document_detail/98169.html) operation to create an upgrade task. Set the **CreationOption** parameter to **MigrationFromRDS**. For more information, see [Create a PolarDB for MySQL cluster by using the Migration from RDS method](https://help.aliyun.com/document_detail/121582.html).
     *  *
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
     * @summary Cancels or completes the migration task that upgrades an RDS cluster to a PolarDB cluster.
     *  *
     * @description *   You can call this operation to cancel the migration task before data migration.
     * *   You can call this operation to perform the migration task after data migration.
     * > Before you call this operation, ensure that a one-click upgrade task has been created for the cluster. You can call the [CreateDBCluster](https://help.aliyun.com/document_detail/98169.html) operation to create an upgrade task. Set the **CreationOption** parameter to **MigrationFromRDS**. For more information, see [Create a PolarDB for MySQL cluster by using the Migration from RDS method](https://help.aliyun.com/document_detail/121582.html).
     *  *
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
     * @summary Creates a database account for a PolarDB cluster.
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
     * @summary Creates a database account for a PolarDB cluster.
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
     * @summary Creates a full snapshot backup for a PolarDB cluster.
     *  *
     * @description >
     * *   You can manually create up to three backups for each cluster.
     * *   The `Exceeding the daily backup times of this DB cluster` error message indicates that three manual backups already exist in your cluster. You must delete existing backups before you call this operation to manually create backups. For more information about how to delete backups, see [Delete backups](https://help.aliyun.com/document_detail/98101.html).
     * *   After you call this operation, a backup task is created in the backend. The task may be time-consuming if you want to back up large amounts of data.
     *  *
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
     * @summary Creates a full snapshot backup for a PolarDB cluster.
     *  *
     * @description >
     * *   You can manually create up to three backups for each cluster.
     * *   The `Exceeding the daily backup times of this DB cluster` error message indicates that three manual backups already exist in your cluster. You must delete existing backups before you call this operation to manually create backups. For more information about how to delete backups, see [Delete backups](https://help.aliyun.com/document_detail/98101.html).
     * *   After you call this operation, a backup task is created in the backend. The task may be time-consuming if you want to back up large amounts of data.
     *  *
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
     * @summary 创建冷存储实例
     *  *
     * @param CreateColdStorageInstanceRequest $request CreateColdStorageInstanceRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateColdStorageInstanceResponse CreateColdStorageInstanceResponse
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
     * @summary 创建冷存储实例
     *  *
     * @param CreateColdStorageInstanceRequest $request CreateColdStorageInstanceRequest
     *
     * @return CreateColdStorageInstanceResponse CreateColdStorageInstanceResponse
     */
    public function createColdStorageInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createColdStorageInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a PolarDB cluster.
     *  *
     * @param CreateDBClusterRequest $request CreateDBClusterRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDBClusterResponse CreateDBClusterResponse
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
     * @summary Creates a PolarDB cluster.
     *  *
     * @param CreateDBClusterRequest $request CreateDBClusterRequest
     *
     * @return CreateDBClusterResponse CreateDBClusterResponse
     */
    public function createDBCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDBClusterWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a custom cluster endpoint for a PolarDB cluster.
     *  *
     * @param CreateDBClusterEndpointRequest $request CreateDBClusterEndpointRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDBClusterEndpointResponse CreateDBClusterEndpointResponse
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
     * @summary Creates a custom cluster endpoint for a PolarDB cluster.
     *  *
     * @param CreateDBClusterEndpointRequest $request CreateDBClusterEndpointRequest
     *
     * @return CreateDBClusterEndpointResponse CreateDBClusterEndpointResponse
     */
    public function createDBClusterEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDBClusterEndpointWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a public endpoint for the primary endpoint, the default cluster endpoint, or a custom cluster endpoint.
     *  *
     * @description > You can create a public endpoint for the primary endpoint, the default cluster endpoint, or a custom cluster endpoint.
     *  *
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
     * @summary Creates a public endpoint for the primary endpoint, the default cluster endpoint, or a custom cluster endpoint.
     *  *
     * @description > You can create a public endpoint for the primary endpoint, the default cluster endpoint, or a custom cluster endpoint.
     *  *
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
     * @summary Creates a database link.
     *  *
     * @description A database link can be used to connect two PolarDB for PostgreSQL(Compatible with Oracle) clusters, or connect a PolarDB for PostgreSQL(Compatible with Oracle) cluster to a user-created PostgreSQL database that is hosted on an Elastic Compute Service (ECS) instance. You can use database links to query data across clusters.
     * > *   You can create up to 10 database links for a cluster.
     * > *   Each database link connects a source cluster and a destination cluster.
     * > *   The source cluster and the destination cluster or the destination ECS instance must be located in the same region.
     *  *
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
     * @summary Creates a database link.
     *  *
     * @description A database link can be used to connect two PolarDB for PostgreSQL(Compatible with Oracle) clusters, or connect a PolarDB for PostgreSQL(Compatible with Oracle) cluster to a user-created PostgreSQL database that is hosted on an Elastic Compute Service (ECS) instance. You can use database links to query data across clusters.
     * > *   You can create up to 10 database links for a cluster.
     * > *   Each database link connects a source cluster and a destination cluster.
     * > *   The source cluster and the destination cluster or the destination ECS instance must be located in the same region.
     *  *
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
     * @summary Adds a read-only node to a PolarDB cluster.
     *  *
     * @param CreateDBNodesRequest $request CreateDBNodesRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDBNodesResponse CreateDBNodesResponse
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
     * @summary Adds a read-only node to a PolarDB cluster.
     *  *
     * @param CreateDBNodesRequest $request CreateDBNodesRequest
     *
     * @return CreateDBNodesResponse CreateDBNodesResponse
     */
    public function createDBNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDBNodesWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a database for a PolarDB cluster.
     *  *
     * @description Before you call this operation, make sure that the following requirements are met:
     * *   The cluster is in the Running state.
     * *   The cluster is unlocked.
     *  *
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
     * @summary Creates a database for a PolarDB cluster.
     *  *
     * @description Before you call this operation, make sure that the following requirements are met:
     * *   The cluster is in the Running state.
     * *   The cluster is unlocked.
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
     * @summary Creates a global database network (GDN).
     *  *
     * @description >  A cluster belongs to only one GDN.
     *  *
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
     * @summary Creates a global database network (GDN).
     *  *
     * @description >  A cluster belongs to only one GDN.
     *  *
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
     * @summary Creates a global IP whitelist template.
     *  *
     * @param CreateGlobalSecurityIPGroupRequest $request CreateGlobalSecurityIPGroupRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateGlobalSecurityIPGroupResponse CreateGlobalSecurityIPGroupResponse
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
     * @summary Creates a global IP whitelist template.
     *  *
     * @param CreateGlobalSecurityIPGroupRequest $request CreateGlobalSecurityIPGroupRequest
     *
     * @return CreateGlobalSecurityIPGroupResponse CreateGlobalSecurityIPGroupResponse
     */
    public function createGlobalSecurityIPGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGlobalSecurityIPGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a parameter template.
     *  *
     * @description You can use parameter templates to manage multiple parameters at a time and apply existing parameters to a PolarDB cluster. For more information, see [Use a parameter template](https://help.aliyun.com/document_detail/207009.html).
     * > You can call this operation only on a PolarDB for MySQL cluster.
     *  *
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
     * @summary Creates a parameter template.
     *  *
     * @description You can use parameter templates to manage multiple parameters at a time and apply existing parameters to a PolarDB cluster. For more information, see [Use a parameter template](https://help.aliyun.com/document_detail/207009.html).
     * > You can call this operation only on a PolarDB for MySQL cluster.
     *  *
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
     * @summary Creates a service-linked role (SLR).
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
     * @summary Creates a service-linked role (SLR).
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
     * @summary Purchases a storage plan.
     *  *
     * @param CreateStoragePlanRequest $request CreateStoragePlanRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateStoragePlanResponse CreateStoragePlanResponse
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
     * @summary Purchases a storage plan.
     *  *
     * @param CreateStoragePlanRequest $request CreateStoragePlanRequest
     *
     * @return CreateStoragePlanResponse CreateStoragePlanResponse
     */
    public function createStoragePlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createStoragePlanWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a database account for a PolarDB cluster.
     *  *
     * @description > Before you call this operation, make sure that the cluster is in the Running state. Otherwise, the operation fails.
     *  *
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
     * @summary Deletes a database account for a PolarDB cluster.
     *  *
     * @description > Before you call this operation, make sure that the cluster is in the Running state. Otherwise, the operation fails.
     *  *
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
     * @summary Deletes the backup sets of a PolarDB cluster.
     *  *
     * @description Before you call this operation, make sure that the cluster meets the following requirements:
     * *   The cluster is in the Running state.
     * *   The backup sets are in the Success state.
     * > *   You can call the [DescribeBackups](https://help.aliyun.com/document_detail/98102.html) operation to query the status of backup sets.
     * >*   After you delete the backup set file, the storage space that is occupied by the file is released. The released storage space is smaller than the size of the file because your snapshots share some data blocks
     *  *
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
     * @summary Deletes the backup sets of a PolarDB cluster.
     *  *
     * @description Before you call this operation, make sure that the cluster meets the following requirements:
     * *   The cluster is in the Running state.
     * *   The backup sets are in the Success state.
     * > *   You can call the [DescribeBackups](https://help.aliyun.com/document_detail/98102.html) operation to query the status of backup sets.
     * >*   After you delete the backup set file, the storage space that is occupied by the file is released. The released storage space is smaller than the size of the file because your snapshots share some data blocks
     *  *
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
     * @summary Releases a pay-as-you-go PolarDB cluster.
     *  *
     * @param DeleteDBClusterRequest $request DeleteDBClusterRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDBClusterResponse DeleteDBClusterResponse
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
     * @summary Releases a pay-as-you-go PolarDB cluster.
     *  *
     * @param DeleteDBClusterRequest $request DeleteDBClusterRequest
     *
     * @return DeleteDBClusterResponse DeleteDBClusterResponse
     */
    public function deleteDBCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDBClusterWithOptions($request, $runtime);
    }

    /**
     * @summary Releases a custom cluster endpoint of a PolarDB cluster.
     *  *
     * @param DeleteDBClusterEndpointRequest $request DeleteDBClusterEndpointRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDBClusterEndpointResponse DeleteDBClusterEndpointResponse
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
     * @summary Releases a custom cluster endpoint of a PolarDB cluster.
     *  *
     * @param DeleteDBClusterEndpointRequest $request DeleteDBClusterEndpointRequest
     *
     * @return DeleteDBClusterEndpointResponse DeleteDBClusterEndpointResponse
     */
    public function deleteDBClusterEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDBClusterEndpointWithOptions($request, $runtime);
    }

    /**
     * @summary Releases the public endpoints of a PolarDB cluster, including the primary endpoint, default cluster endpoint, and custom cluster endpoint.
     *  *
     * @description > *   You can delete a public-facing or classic network endpoint of the primary endpoint, the default cluster endpoint, or a custom cluster endpoint.
     * > *   Classic network endpoints are supported only on the China site (aliyun.com). Therefore, you do not need to delete classic network endpoints on the International site (alibabacloud.com).
     *  *
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
     * @summary Releases the public endpoints of a PolarDB cluster, including the primary endpoint, default cluster endpoint, and custom cluster endpoint.
     *  *
     * @description > *   You can delete a public-facing or classic network endpoint of the primary endpoint, the default cluster endpoint, or a custom cluster endpoint.
     * > *   Classic network endpoints are supported only on the China site (aliyun.com). Therefore, you do not need to delete classic network endpoints on the International site (alibabacloud.com).
     *  *
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
     * @summary Deletes a database link from a PolarDB for PostgreSQL (Compatible with Oracle) cluster.
     *  *
     * @param DeleteDBLinkRequest $request DeleteDBLinkRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDBLinkResponse DeleteDBLinkResponse
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
     * @summary Deletes a database link from a PolarDB for PostgreSQL (Compatible with Oracle) cluster.
     *  *
     * @param DeleteDBLinkRequest $request DeleteDBLinkRequest
     *
     * @return DeleteDBLinkResponse DeleteDBLinkResponse
     */
    public function deleteDBLink($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDBLinkWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a read-only node from a PolarDB cluster.
     *  *
     * @param DeleteDBNodesRequest $request DeleteDBNodesRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDBNodesResponse DeleteDBNodesResponse
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
     * @summary Deletes a read-only node from a PolarDB cluster.
     *  *
     * @param DeleteDBNodesRequest $request DeleteDBNodesRequest
     *
     * @return DeleteDBNodesResponse DeleteDBNodesResponse
     */
    public function deleteDBNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDBNodesWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a database from a PolarDB cluster.
     *  *
     * @description >- The cluster must be in the Running state and unlocked. Otherwise, the specified database cannot be deleted.
     * >- The delete operation is performed in an asynchronous manner. A long period of time may be required to delete a large database. A success response for this operation only indicates that the request to delete the database is sent. You must query the database to check whether the database is deleted.
     *  *
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
     * @summary Deletes a database from a PolarDB cluster.
     *  *
     * @description >- The cluster must be in the Running state and unlocked. Otherwise, the specified database cannot be deleted.
     * >- The delete operation is performed in an asynchronous manner. A long period of time may be required to delete a large database. A success response for this operation only indicates that the request to delete the database is sent. You must query the database to check whether the database is deleted.
     *  *
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
     * @summary Deletes a global database network (GDN).
     *  *
     * @description >  You can delete a GDN only when the GDN includes only a primary cluster.
     *  *
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
     * @summary Deletes a global database network (GDN).
     *  *
     * @description >  You can delete a GDN only when the GDN includes only a primary cluster.
     *  *
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
     * @summary Deletes a global IP whitelist template.
     *  *
     * @param DeleteGlobalSecurityIPGroupRequest $request DeleteGlobalSecurityIPGroupRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteGlobalSecurityIPGroupResponse DeleteGlobalSecurityIPGroupResponse
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
     * @summary Deletes a global IP whitelist template.
     *  *
     * @param DeleteGlobalSecurityIPGroupRequest $request DeleteGlobalSecurityIPGroupRequest
     *
     * @return DeleteGlobalSecurityIPGroupResponse DeleteGlobalSecurityIPGroupResponse
     */
    public function deleteGlobalSecurityIPGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGlobalSecurityIPGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a data masking rule.
     *  *
     * @param DeleteMaskingRulesRequest $request DeleteMaskingRulesRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteMaskingRulesResponse DeleteMaskingRulesResponse
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
     * @summary Deletes a data masking rule.
     *  *
     * @param DeleteMaskingRulesRequest $request DeleteMaskingRulesRequest
     *
     * @return DeleteMaskingRulesResponse DeleteMaskingRulesResponse
     */
    public function deleteMaskingRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMaskingRulesWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a parameter template of a PolarDB cluster.
     *  *
     * @description You can use parameter templates to manage multiple parameters at a time and quickly apply existing parameters to a PolarDB cluster. For more information, see [Use a parameter template](https://help.aliyun.com/document_detail/207009.html).
     * >  When you delete a parameter template, the parameter settings that are applied to PolarDB clusters are not affected.
     *  *
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
     * @summary Deletes a parameter template of a PolarDB cluster.
     *  *
     * @description You can use parameter templates to manage multiple parameters at a time and quickly apply existing parameters to a PolarDB cluster. For more information, see [Use a parameter template](https://help.aliyun.com/document_detail/207009.html).
     * >  When you delete a parameter template, the parameter settings that are applied to PolarDB clusters are not affected.
     *  *
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
     * @summary Queries the state of the PolarDB for AI feature for a cluster.
     *  *
     * @param DescribeAITaskStatusRequest $request DescribeAITaskStatusRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAITaskStatusResponse DescribeAITaskStatusResponse
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
     * @summary Queries the state of the PolarDB for AI feature for a cluster.
     *  *
     * @param DescribeAITaskStatusRequest $request DescribeAITaskStatusRequest
     *
     * @return DescribeAITaskStatusResponse DescribeAITaskStatusResponse
     */
    public function describeAITaskStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAITaskStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Queries information about a database account of a PolarDB cluster.
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
     * @summary Queries information about a database account of a PolarDB cluster.
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
     * @summary Queries the auto-renewal attributes of a subscription PolarDB cluster.
     *  *
     * @param DescribeAutoRenewAttributeRequest $request DescribeAutoRenewAttributeRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAutoRenewAttributeResponse DescribeAutoRenewAttributeResponse
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
     * @summary Queries the auto-renewal attributes of a subscription PolarDB cluster.
     *  *
     * @param DescribeAutoRenewAttributeRequest $request DescribeAutoRenewAttributeRequest
     *
     * @return DescribeAutoRenewAttributeResponse DescribeAutoRenewAttributeResponse
     */
    public function describeAutoRenewAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAutoRenewAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries backup logs and the URLs to download the backup logs.
     *  *
     * @param DescribeBackupLogsRequest $request DescribeBackupLogsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeBackupLogsResponse DescribeBackupLogsResponse
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
     * @summary Queries backup logs and the URLs to download the backup logs.
     *  *
     * @param DescribeBackupLogsRequest $request DescribeBackupLogsRequest
     *
     * @return DescribeBackupLogsResponse DescribeBackupLogsResponse
     */
    public function describeBackupLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupLogsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the automatic backup policy of a PolarDB cluster.
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
     * @summary Queries the automatic backup policy of a PolarDB cluster.
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
     * @summary Queries the backup tasks of a PolarDB cluster.
     *  *
     * @param DescribeBackupTasksRequest $request DescribeBackupTasksRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeBackupTasksResponse DescribeBackupTasksResponse
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
     * @summary Queries the backup tasks of a PolarDB cluster.
     *  *
     * @param DescribeBackupTasksRequest $request DescribeBackupTasksRequest
     *
     * @return DescribeBackupTasksResponse DescribeBackupTasksResponse
     */
    public function describeBackupTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupTasksWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the backup details of a PolarDB cluster.
     *  *
     * @param DescribeBackupsRequest $request DescribeBackupsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeBackupsResponse DescribeBackupsResponse
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
     * @summary Queries the backup details of a PolarDB cluster.
     *  *
     * @param DescribeBackupsRequest $request DescribeBackupsRequest
     *
     * @return DescribeBackupsResponse DescribeBackupsResponse
     */
    public function describeBackups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries character sets that are supported by a PolarDB for MySQL cluster.
     *  *
     * @param DescribeCharacterSetNameRequest $request DescribeCharacterSetNameRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCharacterSetNameResponse DescribeCharacterSetNameResponse
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
     * @summary Queries character sets that are supported by a PolarDB for MySQL cluster.
     *  *
     * @param DescribeCharacterSetNameRequest $request DescribeCharacterSetNameRequest
     *
     * @return DescribeCharacterSetNameResponse DescribeCharacterSetNameResponse
     */
    public function describeCharacterSetName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCharacterSetNameWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the specifications of a cluster.
     *  *
     * @param DescribeClassListRequest $request DescribeClassListRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeClassListResponse DescribeClassListResponse
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
     * @summary Queries the specifications of a cluster.
     *  *
     * @param DescribeClassListRequest $request DescribeClassListRequest
     *
     * @return DescribeClassListResponse DescribeClassListResponse
     */
    public function describeClassList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClassListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the IP address whitelists and security groups of a PolarDB cluster.
     *  *
     * @param DescribeDBClusterAccessWhitelistRequest $request DescribeDBClusterAccessWhitelistRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBClusterAccessWhitelistResponse DescribeDBClusterAccessWhitelistResponse
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
     * @summary Queries the IP address whitelists and security groups of a PolarDB cluster.
     *  *
     * @param DescribeDBClusterAccessWhitelistRequest $request DescribeDBClusterAccessWhitelistRequest
     *
     * @return DescribeDBClusterAccessWhitelistResponse DescribeDBClusterAccessWhitelistResponse
     */
    public function describeDBClusterAccessWhitelist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClusterAccessWhitelistWithOptions($request, $runtime);
    }

    /**
     * @summary Queries information about a PolarDB cluster.
     *  *
     * @param DescribeDBClusterAttributeRequest $request DescribeDBClusterAttributeRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBClusterAttributeResponse DescribeDBClusterAttributeResponse
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
     * @summary Queries information about a PolarDB cluster.
     *  *
     * @param DescribeDBClusterAttributeRequest $request DescribeDBClusterAttributeRequest
     *
     * @return DescribeDBClusterAttributeResponse DescribeDBClusterAttributeResponse
     */
    public function describeDBClusterAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClusterAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Describe SQL collector for a PolarDB cluster. Features related to SQL collector include audit log and SQL Explorer.
     *  *
     * @param DescribeDBClusterAuditLogCollectorRequest $request DescribeDBClusterAuditLogCollectorRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBClusterAuditLogCollectorResponse DescribeDBClusterAuditLogCollectorResponse
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
     * @summary Describe SQL collector for a PolarDB cluster. Features related to SQL collector include audit log and SQL Explorer.
     *  *
     * @param DescribeDBClusterAuditLogCollectorRequest $request DescribeDBClusterAuditLogCollectorRequest
     *
     * @return DescribeDBClusterAuditLogCollectorResponse DescribeDBClusterAuditLogCollectorResponse
     */
    public function describeDBClusterAuditLogCollector($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClusterAuditLogCollectorWithOptions($request, $runtime);
    }

    /**
     * @summary Queries available resources in a PolarDB cluster.
     *  *
     * @param DescribeDBClusterAvailableResourcesRequest $request DescribeDBClusterAvailableResourcesRequest
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBClusterAvailableResourcesResponse DescribeDBClusterAvailableResourcesResponse
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
     * @summary Queries available resources in a PolarDB cluster.
     *  *
     * @param DescribeDBClusterAvailableResourcesRequest $request DescribeDBClusterAvailableResourcesRequest
     *
     * @return DescribeDBClusterAvailableResourcesResponse DescribeDBClusterAvailableResourcesResponse
     */
    public function describeDBClusterAvailableResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClusterAvailableResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries whether the source IP address can access a cluster.
     *  *
     * @param DescribeDBClusterConnectivityRequest $request DescribeDBClusterConnectivityRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBClusterConnectivityResponse DescribeDBClusterConnectivityResponse
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
     * @summary Queries whether the source IP address can access a cluster.
     *  *
     * @param DescribeDBClusterConnectivityRequest $request DescribeDBClusterConnectivityRequest
     *
     * @return DescribeDBClusterConnectivityResponse DescribeDBClusterConnectivityResponse
     */
    public function describeDBClusterConnectivity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClusterConnectivityWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the endpoints of a PolarDB cluster.
     *  *
     * @param DescribeDBClusterEndpointsRequest $request DescribeDBClusterEndpointsRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBClusterEndpointsResponse DescribeDBClusterEndpointsResponse
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
     * @summary Queries the endpoints of a PolarDB cluster.
     *  *
     * @param DescribeDBClusterEndpointsRequest $request DescribeDBClusterEndpointsRequest
     *
     * @return DescribeDBClusterEndpointsResponse DescribeDBClusterEndpointsResponse
     */
    public function describeDBClusterEndpoints($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClusterEndpointsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the migration status of PolarDB clusters.
     *  *
     * @description *   You can call this operation to query the status of data migration from an ApsaraDB RDS instance to a PolarDB cluster. For more information, see [Upgrade ApsaraDB RDS for MySQL to PolarDB for MySQL with one click](https://help.aliyun.com/document_detail/121582.html).
     * *   Before you call this operation, make sure that a one-click upgrade task has been created for the cluster. You can call the [CreateDBCluster](https://help.aliyun.com/document_detail/98169.html) operation to create an upgrade task. Set the **CreationOption** parameter to **MigrationFromRDS**.
     *  *
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
     * @summary Queries the migration status of PolarDB clusters.
     *  *
     * @description *   You can call this operation to query the status of data migration from an ApsaraDB RDS instance to a PolarDB cluster. For more information, see [Upgrade ApsaraDB RDS for MySQL to PolarDB for MySQL with one click](https://help.aliyun.com/document_detail/121582.html).
     * *   Before you call this operation, make sure that a one-click upgrade task has been created for the cluster. You can call the [CreateDBCluster](https://help.aliyun.com/document_detail/98169.html) operation to create an upgrade task. Set the **CreationOption** parameter to **MigrationFromRDS**.
     *  *
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
     * @summary Queries the interval at which the monitoring data of a PolarDB cluster is collected.
     *  *
     * @param DescribeDBClusterMonitorRequest $request DescribeDBClusterMonitorRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBClusterMonitorResponse DescribeDBClusterMonitorResponse
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
     * @summary Queries the interval at which the monitoring data of a PolarDB cluster is collected.
     *  *
     * @param DescribeDBClusterMonitorRequest $request DescribeDBClusterMonitorRequest
     *
     * @return DescribeDBClusterMonitorResponse DescribeDBClusterMonitorResponse
     */
    public function describeDBClusterMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClusterMonitorWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the parameters of a PolarDB cluster.
     *  *
     * @param DescribeDBClusterParametersRequest $request DescribeDBClusterParametersRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBClusterParametersResponse DescribeDBClusterParametersResponse
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
     * @summary Queries the parameters of a PolarDB cluster.
     *  *
     * @param DescribeDBClusterParametersRequest $request DescribeDBClusterParametersRequest
     *
     * @return DescribeDBClusterParametersResponse DescribeDBClusterParametersResponse
     */
    public function describeDBClusterParameters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClusterParametersWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the performance data of a PolarDB cluster.
     *  *
     * @description *   When the monitoring data is collected every 5 seconds:
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
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
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
     * @summary Queries the performance data of a PolarDB cluster.
     *  *
     * @description *   When the monitoring data is collected every 5 seconds:
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
     * @summary Queries the Secure Sockets Layer (SSL) settings of a PolarDB cluster.
     *  *
     * @param DescribeDBClusterSSLRequest $request DescribeDBClusterSSLRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBClusterSSLResponse DescribeDBClusterSSLResponse
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
     * @summary Queries the Secure Sockets Layer (SSL) settings of a PolarDB cluster.
     *  *
     * @param DescribeDBClusterSSLRequest $request DescribeDBClusterSSLRequest
     *
     * @return DescribeDBClusterSSLResponse DescribeDBClusterSSLResponse
     */
    public function describeDBClusterSSL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClusterSSLWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the configurations of a serverless cluster.
     *  *
     * @param DescribeDBClusterServerlessConfRequest $request DescribeDBClusterServerlessConfRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBClusterServerlessConfResponse DescribeDBClusterServerlessConfResponse
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
     * @summary Queries the configurations of a serverless cluster.
     *  *
     * @param DescribeDBClusterServerlessConfRequest $request DescribeDBClusterServerlessConfRequest
     *
     * @return DescribeDBClusterServerlessConfResponse DescribeDBClusterServerlessConfResponse
     */
    public function describeDBClusterServerlessConf($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClusterServerlessConfWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the Transparent Data Encryption (TDE) settings of a PolarDB for MySQL cluster.
     *  *
     * @param DescribeDBClusterTDERequest $request DescribeDBClusterTDERequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBClusterTDEResponse DescribeDBClusterTDEResponse
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
     * @summary Queries the Transparent Data Encryption (TDE) settings of a PolarDB for MySQL cluster.
     *  *
     * @param DescribeDBClusterTDERequest $request DescribeDBClusterTDERequest
     *
     * @return DescribeDBClusterTDEResponse DescribeDBClusterTDEResponse
     */
    public function describeDBClusterTDE($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClusterTDEWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about the database engine version of a PolarDB for MySQL cluster.
     *  *
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
     * @summary Queries the information about the database engine version of a PolarDB for MySQL cluster.
     *  *
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
     * @summary Queries PolarDB clusters or the clusters that can be accessed by an authorized RAM user.
     *  *
     * @param DescribeDBClustersRequest $request DescribeDBClustersRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBClustersResponse DescribeDBClustersResponse
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
     * @summary Queries PolarDB clusters or the clusters that can be accessed by an authorized RAM user.
     *  *
     * @param DescribeDBClustersRequest $request DescribeDBClustersRequest
     *
     * @return DescribeDBClustersResponse DescribeDBClustersResponse
     */
    public function describeDBClusters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClustersWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about PolarDB clusters that contain backup sets in a region.
     *  *
     * @param DescribeDBClustersWithBackupsRequest $request DescribeDBClustersWithBackupsRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBClustersWithBackupsResponse DescribeDBClustersWithBackupsResponse
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
     * @summary Queries the information about PolarDB clusters that contain backup sets in a region.
     *  *
     * @param DescribeDBClustersWithBackupsRequest $request DescribeDBClustersWithBackupsRequest
     *
     * @return DescribeDBClustersWithBackupsResponse DescribeDBClustersWithBackupsResponse
     */
    public function describeDBClustersWithBackups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClustersWithBackupsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the attributes that are supported by a PolarDB for PostgreSQL (Compatible with Oracle) cluster or a PolarDB for PostgreSQL cluster, such as the character sets and collations.
     *  *
     * @param DescribeDBInitializeVariableRequest $request DescribeDBInitializeVariableRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBInitializeVariableResponse DescribeDBInitializeVariableResponse
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
     * @summary Queries the attributes that are supported by a PolarDB for PostgreSQL (Compatible with Oracle) cluster or a PolarDB for PostgreSQL cluster, such as the character sets and collations.
     *  *
     * @param DescribeDBInitializeVariableRequest $request DescribeDBInitializeVariableRequest
     *
     * @return DescribeDBInitializeVariableResponse DescribeDBInitializeVariableResponse
     */
    public function describeDBInitializeVariable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInitializeVariableWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the database links of a PolarDB for PostgreSQL (Compatible with Oracle) cluster.
     *  *
     * @description > You can query only the database links that use a PolarDB for Oracle cluster as the source.
     *  *
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
     * @summary Queries the database links of a PolarDB for PostgreSQL (Compatible with Oracle) cluster.
     *  *
     * @description > You can query only the database links that use a PolarDB for Oracle cluster as the source.
     *  *
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
     * @summary Queries the performance data of a node in a PolarDB cluster.
     *  *
     * @description *   When the monitoring data is collected every 5 seconds:
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
     *  *
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
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->key)) {
            $query['Key'] = $request->key;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
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
     * @summary Queries the performance data of a node in a PolarDB cluster.
     *  *
     * @description *   When the monitoring data is collected every 5 seconds:
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
     *  *
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
     * @summary Queries the parameters of a specified node in a cluster.
     *  *
     * @param DescribeDBNodesParametersRequest $request DescribeDBNodesParametersRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBNodesParametersResponse DescribeDBNodesParametersResponse
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
     * @summary Queries the parameters of a specified node in a cluster.
     *  *
     * @param DescribeDBNodesParametersRequest $request DescribeDBNodesParametersRequest
     *
     * @return DescribeDBNodesParametersResponse DescribeDBNodesParametersResponse
     */
    public function describeDBNodesParameters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBNodesParametersWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the performance data of PolarProxy.
     *  *
     * @description > This operation is applicable only to PolarDB for MySQL clusters.
     *  *
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
        if (!Utils::isUnset($request->DBEndpointId)) {
            $query['DBEndpointId'] = $request->DBEndpointId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->key)) {
            $query['Key'] = $request->key;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
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
     * @summary Queries the performance data of PolarProxy.
     *  *
     * @description > This operation is applicable only to PolarDB for MySQL clusters.
     *  *
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
     * @summary 查看实例的 DAS 配置
     *  *
     * @param DescribeDasConfigRequest $request DescribeDasConfigRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDasConfigResponse DescribeDasConfigResponse
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
     * @summary 查看实例的 DAS 配置
     *  *
     * @param DescribeDasConfigRequest $request DescribeDasConfigRequest
     *
     * @return DescribeDasConfigResponse DescribeDasConfigResponse
     */
    public function describeDasConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDasConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about databases in a PolarDB cluster.
     *  *
     * @param DescribeDatabasesRequest $request DescribeDatabasesRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDatabasesResponse DescribeDatabasesResponse
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
     * @summary Queries the information about databases in a PolarDB cluster.
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
     * @summary Queries the information about the backup sets in a released PolarDB cluster.
     *  *
     * @description Before you call this operation, make sure that the PolarDB cluster is in the **Released** state. You must also confirm that the **Retain All Backups Permanently** or **Retain Last Automatic Backup Permanently** backup retention policy takes effect after you release the cluster. If you delete all backup sets after the cluster is released, you cannot use this API operation to query the cluster.
     * > You can call the [DescribeDBClusterAttribute](https://help.aliyun.com/document_detail/98181.html) operation to query the cluster status.
     *  *
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
     * @summary Queries the information about the backup sets in a released PolarDB cluster.
     *  *
     * @description Before you call this operation, make sure that the PolarDB cluster is in the **Released** state. You must also confirm that the **Retain All Backups Permanently** or **Retain Last Automatic Backup Permanently** backup retention policy takes effect after you release the cluster. If you delete all backup sets after the cluster is released, you cannot use this API operation to query the cluster.
     * > You can call the [DescribeDBClusterAttribute](https://help.aliyun.com/document_detail/98181.html) operation to query the cluster status.
     *  *
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
     * @summary Queries the information about a Global Database Network (GDN).
     *  *
     * @param DescribeGlobalDatabaseNetworkRequest $request DescribeGlobalDatabaseNetworkRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeGlobalDatabaseNetworkResponse DescribeGlobalDatabaseNetworkResponse
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
     * @summary Queries the information about a Global Database Network (GDN).
     *  *
     * @param DescribeGlobalDatabaseNetworkRequest $request DescribeGlobalDatabaseNetworkRequest
     *
     * @return DescribeGlobalDatabaseNetworkResponse DescribeGlobalDatabaseNetworkResponse
     */
    public function describeGlobalDatabaseNetwork($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGlobalDatabaseNetworkWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about all Global Database Networks (GDNs) that belong to an account.
     *  *
     * @param DescribeGlobalDatabaseNetworksRequest $request DescribeGlobalDatabaseNetworksRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeGlobalDatabaseNetworksResponse DescribeGlobalDatabaseNetworksResponse
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
     * @summary Queries the information about all Global Database Networks (GDNs) that belong to an account.
     *  *
     * @param DescribeGlobalDatabaseNetworksRequest $request DescribeGlobalDatabaseNetworksRequest
     *
     * @return DescribeGlobalDatabaseNetworksResponse DescribeGlobalDatabaseNetworksResponse
     */
    public function describeGlobalDatabaseNetworks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGlobalDatabaseNetworksWithOptions($request, $runtime);
    }

    /**
     * @summary Queries global IP whitelist templates.
     *  *
     * @param DescribeGlobalSecurityIPGroupRequest $request DescribeGlobalSecurityIPGroupRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeGlobalSecurityIPGroupResponse DescribeGlobalSecurityIPGroupResponse
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
     * @summary Queries global IP whitelist templates.
     *  *
     * @param DescribeGlobalSecurityIPGroupRequest $request DescribeGlobalSecurityIPGroupRequest
     *
     * @return DescribeGlobalSecurityIPGroupResponse DescribeGlobalSecurityIPGroupResponse
     */
    public function describeGlobalSecurityIPGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGlobalSecurityIPGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the relationship between a cluster and a global IP whitelist template.
     *  *
     * @param DescribeGlobalSecurityIPGroupRelationRequest $request DescribeGlobalSecurityIPGroupRelationRequest
     * @param RuntimeOptions                               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeGlobalSecurityIPGroupRelationResponse DescribeGlobalSecurityIPGroupRelationResponse
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
     * @summary Queries the relationship between a cluster and a global IP whitelist template.
     *  *
     * @param DescribeGlobalSecurityIPGroupRelationRequest $request DescribeGlobalSecurityIPGroupRelationRequest
     *
     * @return DescribeGlobalSecurityIPGroupRelationResponse DescribeGlobalSecurityIPGroupRelationResponse
     */
    public function describeGlobalSecurityIPGroupRelation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGlobalSecurityIPGroupRelationWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the retention policy of log backups in a PolarDB cluster.
     *  *
     * @param DescribeLogBackupPolicyRequest $request DescribeLogBackupPolicyRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeLogBackupPolicyResponse DescribeLogBackupPolicyResponse
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
     * @summary Queries the retention policy of log backups in a PolarDB cluster.
     *  *
     * @param DescribeLogBackupPolicyRequest $request DescribeLogBackupPolicyRequest
     *
     * @return DescribeLogBackupPolicyResponse DescribeLogBackupPolicyResponse
     */
    public function describeLogBackupPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLogBackupPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the data masking rules of a PolarDB cluster or the information about a specified masking rule.
     *  *
     * @param DescribeMaskingRulesRequest $request DescribeMaskingRulesRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeMaskingRulesResponse DescribeMaskingRulesResponse
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
     * @summary Queries the data masking rules of a PolarDB cluster or the information about a specified masking rule.
     *  *
     * @param DescribeMaskingRulesRequest $request DescribeMaskingRulesRequest
     *
     * @return DescribeMaskingRulesResponse DescribeMaskingRulesResponse
     */
    public function describeMaskingRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMaskingRulesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of the databases or tables that can be restored.
     *  *
     * @param DescribeMetaListRequest $request DescribeMetaListRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeMetaListResponse DescribeMetaListResponse
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
     * @summary Queries the details of the databases or tables that can be restored.
     *  *
     * @param DescribeMetaListRequest $request DescribeMetaListRequest
     *
     * @return DescribeMetaListResponse DescribeMetaListResponse
     */
    public function describeMetaList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMetaListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a parameter template.
     *  *
     * @description You can use parameter templates to manage multiple parameters at a time and apply existing parameters to a PolarDB cluster. For more information, see [Use a parameter template](https://help.aliyun.com/document_detail/207009.html).
     * > This parameter is valid only for a PolarDB for MySQL cluster.
     *  *
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
     * @summary Queries the information about a parameter template.
     *  *
     * @description You can use parameter templates to manage multiple parameters at a time and apply existing parameters to a PolarDB cluster. For more information, see [Use a parameter template](https://help.aliyun.com/document_detail/207009.html).
     * > This parameter is valid only for a PolarDB for MySQL cluster.
     *  *
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
     * @summary Queries parameter templates that are available in a specified region.
     *  *
     * @description You can use parameter templates to manage multiple parameters at a time and apply existing parameters to a PolarDB cluster. For more information, see [Use a parameter template](https://help.aliyun.com/document_detail/207009.html).
     * > This operation is applicable only to PolarDB for MySQL clusters.
     *  *
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
     * @summary Queries parameter templates that are available in a specified region.
     *  *
     * @description You can use parameter templates to manage multiple parameters at a time and apply existing parameters to a PolarDB cluster. For more information, see [Use a parameter template](https://help.aliyun.com/document_detail/207009.html).
     * > This operation is applicable only to PolarDB for MySQL clusters.
     *  *
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
     * @summary Queries the default parameters in a cluster.
     *  *
     * @param DescribeParameterTemplatesRequest $request DescribeParameterTemplatesRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeParameterTemplatesResponse DescribeParameterTemplatesResponse
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
     * @summary Queries the default parameters in a cluster.
     *  *
     * @param DescribeParameterTemplatesRequest $request DescribeParameterTemplatesRequest
     *
     * @return DescribeParameterTemplatesResponse DescribeParameterTemplatesResponse
     */
    public function describeParameterTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeParameterTemplatesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a pending event.
     *  *
     * @param DescribePendingMaintenanceActionRequest $request DescribePendingMaintenanceActionRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePendingMaintenanceActionResponse DescribePendingMaintenanceActionResponse
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
     * @summary Queries the information about a pending event.
     *  *
     * @param DescribePendingMaintenanceActionRequest $request DescribePendingMaintenanceActionRequest
     *
     * @return DescribePendingMaintenanceActionResponse DescribePendingMaintenanceActionResponse
     */
    public function describePendingMaintenanceAction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePendingMaintenanceActionWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the numbers of pending events of different task types.
     *  *
     * @param DescribePendingMaintenanceActionsRequest $request DescribePendingMaintenanceActionsRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePendingMaintenanceActionsResponse DescribePendingMaintenanceActionsResponse
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
     * @summary Queries the numbers of pending events of different task types.
     *  *
     * @param DescribePendingMaintenanceActionsRequest $request DescribePendingMaintenanceActionsRequest
     *
     * @return DescribePendingMaintenanceActionsResponse DescribePendingMaintenanceActionsResponse
     */
    public function describePendingMaintenanceActions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePendingMaintenanceActionsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries whether the SQL Explorer feature is enabled for the cluster.
     *  *
     * @param DescribePolarSQLCollectorPolicyRequest $request DescribePolarSQLCollectorPolicyRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePolarSQLCollectorPolicyResponse DescribePolarSQLCollectorPolicyResponse
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
     * @summary Queries whether the SQL Explorer feature is enabled for the cluster.
     *  *
     * @param DescribePolarSQLCollectorPolicyRequest $request DescribePolarSQLCollectorPolicyRequest
     *
     * @return DescribePolarSQLCollectorPolicyResponse DescribePolarSQLCollectorPolicyResponse
     */
    public function describePolarSQLCollectorPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePolarSQLCollectorPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the regions and zones available for PolarDB.
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
     * @summary Queries the regions and zones available for PolarDB.
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
     * @summary Queries the details of all scheduled tasks.
     *  *
     * @param DescribeScheduleTasksRequest $request DescribeScheduleTasksRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeScheduleTasksResponse DescribeScheduleTasksResponse
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
     * @summary Queries the details of all scheduled tasks.
     *  *
     * @param DescribeScheduleTasksRequest $request DescribeScheduleTasksRequest
     *
     * @return DescribeScheduleTasksResponse DescribeScheduleTasksResponse
     */
    public function describeScheduleTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScheduleTasksWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of the slow query logs of a PolarDB cluster.
     *  *
     * @description > This operation is applicable only to PolarDB for MySQL clusters.
     *  *
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
     * @summary Queries the details of the slow query logs of a PolarDB cluster.
     *  *
     * @description > This operation is applicable only to PolarDB for MySQL clusters.
     *  *
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
     * @summary Queries the statistics about the slow query logs of a PolarDB cluster.
     *  *
     * @description > This operation is applicable only to PolarDB for MySQL clusters.
     *  *
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
     * @summary Queries the statistics about the slow query logs of a PolarDB cluster.
     *  *
     * @description > This operation is applicable only to PolarDB for MySQL clusters.
     *  *
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
     * @summary Queries the details of the tasks that are generated by calling API operations. For example, you can call this operation to view the details of the task when you create a cluster.
     *  *
     * @description *   You can call this operation to view the details of a task that is generated by a specific API operation or in the console. The system calls the specific API operation when you perform an operation in the console. For example, you can view the details of the task when you call the [CreateDBCluster](https://help.aliyun.com/document_detail/98169.html) operation or [create a cluster](https://help.aliyun.com/document_detail/58769.html) in the console.
     * *   You can view the details of tasks that are generated only when you call the [CreateDBCluster](https://help.aliyun.com/document_detail/98169.html) operation to create a cluster and `CreationOption` is not set to `CreateGdnStandby`.
     *  *
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
     * @summary Queries the details of the tasks that are generated by calling API operations. For example, you can call this operation to view the details of the task when you create a cluster.
     *  *
     * @description *   You can call this operation to view the details of a task that is generated by a specific API operation or in the console. The system calls the specific API operation when you perform an operation in the console. For example, you can view the details of the task when you call the [CreateDBCluster](https://help.aliyun.com/document_detail/98169.html) operation or [create a cluster](https://help.aliyun.com/document_detail/58769.html) in the console.
     * *   You can view the details of tasks that are generated only when you call the [CreateDBCluster](https://help.aliyun.com/document_detail/98169.html) operation to create a cluster and `CreationOption` is not set to `CreateGdnStandby`.
     *  *
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
     * @summary Queries the Key Management Service (KMS)-managed customer master keys (CMKs) that are used to encrypt data in a PolarDB cluster.
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
     * @summary Queries the Key Management Service (KMS)-managed customer master keys (CMKs) that are used to encrypt data in a PolarDB cluster.
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
     * @summary Queries a vSwitch.
     *  *
     * @param DescribeVSwitchesRequest $request DescribeVSwitchesRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVSwitchesResponse DescribeVSwitchesResponse
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
     * @summary Queries a vSwitch.
     *  *
     * @param DescribeVSwitchesRequest $request DescribeVSwitchesRequest
     *
     * @return DescribeVSwitchesResponse DescribeVSwitchesResponse
     */
    public function describeVSwitches($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVSwitchesWithOptions($request, $runtime);
    }

    /**
     * @summary Disables a stable serverless cluster.
     *  *
     * @param DisableDBClusterServerlessRequest $request DisableDBClusterServerlessRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DisableDBClusterServerlessResponse DisableDBClusterServerlessResponse
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
     * @summary Disables a stable serverless cluster.
     *  *
     * @param DisableDBClusterServerlessRequest $request DisableDBClusterServerlessRequest
     *
     * @return DisableDBClusterServerlessResponse DisableDBClusterServerlessResponse
     */
    public function disableDBClusterServerless($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableDBClusterServerlessWithOptions($request, $runtime);
    }

    /**
     * @summary Enables a stable serverless cluster.
     *  *
     * @param EnableDBClusterServerlessRequest $request EnableDBClusterServerlessRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableDBClusterServerlessResponse EnableDBClusterServerlessResponse
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
     * @summary Enables a stable serverless cluster.
     *  *
     * @param EnableDBClusterServerlessRequest $request EnableDBClusterServerlessRequest
     *
     * @return EnableDBClusterServerlessResponse EnableDBClusterServerlessResponse
     */
    public function enableDBClusterServerless($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableDBClusterServerlessWithOptions($request, $runtime);
    }

    /**
     * @summary 修改sql防火墙状态
     *  *
     * @param EnableFirewallRulesRequest $request EnableFirewallRulesRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableFirewallRulesResponse EnableFirewallRulesResponse
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
     * @summary 修改sql防火墙状态
     *  *
     * @param EnableFirewallRulesRequest $request EnableFirewallRulesRequest
     *
     * @return EnableFirewallRulesResponse EnableFirewallRulesResponse
     */
    public function enableFirewallRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableFirewallRulesWithOptions($request, $runtime);
    }

    /**
     * @summary Evaluates available resources.
     *  *
     * @param EvaluateRegionResourceRequest $request EvaluateRegionResourceRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return EvaluateRegionResourceResponse EvaluateRegionResourceResponse
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
     * @summary Evaluates available resources.
     *  *
     * @param EvaluateRegionResourceRequest $request EvaluateRegionResourceRequest
     *
     * @return EvaluateRegionResourceResponse EvaluateRegionResourceResponse
     */
    public function evaluateRegionResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->evaluateRegionResourceWithOptions($request, $runtime);
    }

    /**
     * @summary Performs a manual failover to promote a read-only node to the primary node in a PolarDB cluster.
     *  *
     * @param FailoverDBClusterRequest $request FailoverDBClusterRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return FailoverDBClusterResponse FailoverDBClusterResponse
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
     * @summary Performs a manual failover to promote a read-only node to the primary node in a PolarDB cluster.
     *  *
     * @param FailoverDBClusterRequest $request FailoverDBClusterRequest
     *
     * @return FailoverDBClusterResponse FailoverDBClusterResponse
     */
    public function failoverDBCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->failoverDBClusterWithOptions($request, $runtime);
    }

    /**
     * @summary Grants a standard account the permissions to access one or more databases in a specified PolarDB cluster.
     *  *
     * @description > *   An account can be authorized to access one or more databases.
     * > *   If the specified account already has the access permissions on the specified databases, the operation returns a successful response.
     * > *   Before you call this operation, make sure that the cluster is in the Running state. Otherwise, the operation fails.
     * > *   You can call this operation only on a PolarDB for MySQL cluster.
     * > *   By default, a privileged account for a cluster has all the permissions on the databases in the cluster.
     *  *
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
     * @summary Grants a standard account the permissions to access one or more databases in a specified PolarDB cluster.
     *  *
     * @description > *   An account can be authorized to access one or more databases.
     * > *   If the specified account already has the access permissions on the specified databases, the operation returns a successful response.
     * > *   Before you call this operation, make sure that the cluster is in the Running state. Otherwise, the operation fails.
     * > *   You can call this operation only on a PolarDB for MySQL cluster.
     * > *   By default, a privileged account for a cluster has all the permissions on the databases in the cluster.
     *  *
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
     * @summary Queries the tags that are bound to one or more PolarDB clusters, or queries the PolarDB clusters to which one or more tags are bound.
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
     * @summary Queries the tags that are bound to one or more PolarDB clusters, or queries the PolarDB clusters to which one or more tags are bound.
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
     * @summary Manually starts a cluster.
     *  *
     * @param ManuallyStartDBClusterRequest $request ManuallyStartDBClusterRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ManuallyStartDBClusterResponse ManuallyStartDBClusterResponse
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
     * @summary Manually starts a cluster.
     *  *
     * @param ManuallyStartDBClusterRequest $request ManuallyStartDBClusterRequest
     *
     * @return ManuallyStartDBClusterResponse ManuallyStartDBClusterResponse
     */
    public function manuallyStartDBCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->manuallyStartDBClusterWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the description of a database account of a PolarDB cluster.
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
     * @summary Modifies the description of a database account of a PolarDB cluster.
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
     * @summary Changes the password of a database account for a specified PolarDB cluster.
     *  *
     * @param ModifyAccountPasswordRequest $request ModifyAccountPasswordRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyAccountPasswordResponse ModifyAccountPasswordResponse
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
        if (!Utils::isUnset($request->passwordType)) {
            $query['PasswordType'] = $request->passwordType;
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
     * @summary Changes the password of a database account for a specified PolarDB cluster.
     *  *
     * @param ModifyAccountPasswordRequest $request ModifyAccountPasswordRequest
     *
     * @return ModifyAccountPasswordResponse ModifyAccountPasswordResponse
     */
    public function modifyAccountPassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAccountPasswordWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the auto-renewal attributes of a subscription PolarDB cluster.
     *  *
     * @param ModifyAutoRenewAttributeRequest $request ModifyAutoRenewAttributeRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyAutoRenewAttributeResponse ModifyAutoRenewAttributeResponse
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
     * @summary Modifies the auto-renewal attributes of a subscription PolarDB cluster.
     *  *
     * @param ModifyAutoRenewAttributeRequest $request ModifyAutoRenewAttributeRequest
     *
     * @return ModifyAutoRenewAttributeResponse ModifyAutoRenewAttributeResponse
     */
    public function modifyAutoRenewAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAutoRenewAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the automatic backup policy of a PolarDB cluster.
     *  *
     * @description > You can also modify the automatic backup policy of a PolarDB cluster in the console. For more information, see [Backup settings](https://help.aliyun.com/document_detail/280422.html).
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
     * @summary Modifies the automatic backup policy of a PolarDB cluster.
     *  *
     * @description > You can also modify the automatic backup policy of a PolarDB cluster in the console. For more information, see [Backup settings](https://help.aliyun.com/document_detail/280422.html).
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
     * @summary Modifies the configurations of a PolarDB for MySQL cluster.
     *  *
     * @param ModifyDBClusterRequest $request ModifyDBClusterRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBClusterResponse ModifyDBClusterResponse
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
        if (!Utils::isUnset($request->DBNodeCrashList)) {
            $query['DBNodeCrashList'] = $request->DBNodeCrashList;
        }
        if (!Utils::isUnset($request->dataSyncMode)) {
            $query['DataSyncMode'] = $request->dataSyncMode;
        }
        if (!Utils::isUnset($request->faultInjectionType)) {
            $query['FaultInjectionType'] = $request->faultInjectionType;
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
     * @summary Modifies the configurations of a PolarDB for MySQL cluster.
     *  *
     * @param ModifyDBClusterRequest $request ModifyDBClusterRequest
     *
     * @return ModifyDBClusterResponse ModifyDBClusterResponse
     */
    public function modifyDBCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBClusterWithOptions($request, $runtime);
    }

    /**
     * @summary Creates or modifies the whitelists (IP whitelists and security groups) of a specified cluster.
     *  *
     * @param ModifyDBClusterAccessWhitelistRequest $request ModifyDBClusterAccessWhitelistRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBClusterAccessWhitelistResponse ModifyDBClusterAccessWhitelistResponse
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
     * @summary Creates or modifies the whitelists (IP whitelists and security groups) of a specified cluster.
     *  *
     * @param ModifyDBClusterAccessWhitelistRequest $request ModifyDBClusterAccessWhitelistRequest
     *
     * @return ModifyDBClusterAccessWhitelistResponse ModifyDBClusterAccessWhitelistResponse
     */
    public function modifyDBClusterAccessWhitelist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBClusterAccessWhitelistWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies cluster parameters and applies them to specified nodes.
     *  *
     * @param ModifyDBClusterAndNodesParametersRequest $request ModifyDBClusterAndNodesParametersRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBClusterAndNodesParametersResponse ModifyDBClusterAndNodesParametersResponse
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
     * @summary Modifies cluster parameters and applies them to specified nodes.
     *  *
     * @param ModifyDBClusterAndNodesParametersRequest $request ModifyDBClusterAndNodesParametersRequest
     *
     * @return ModifyDBClusterAndNodesParametersResponse ModifyDBClusterAndNodesParametersResponse
     */
    public function modifyDBClusterAndNodesParameters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBClusterAndNodesParametersWithOptions($request, $runtime);
    }

    /**
     * @summary Enables or disables SQL collector for a PolarDB cluster. The features related to SQL collector include Audit Logs and SQL Explorer.
     *  *
     * @param ModifyDBClusterAuditLogCollectorRequest $request ModifyDBClusterAuditLogCollectorRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBClusterAuditLogCollectorResponse ModifyDBClusterAuditLogCollectorResponse
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
     * @summary Enables or disables SQL collector for a PolarDB cluster. The features related to SQL collector include Audit Logs and SQL Explorer.
     *  *
     * @param ModifyDBClusterAuditLogCollectorRequest $request ModifyDBClusterAuditLogCollectorRequest
     *
     * @return ModifyDBClusterAuditLogCollectorResponse ModifyDBClusterAuditLogCollectorResponse
     */
    public function modifyDBClusterAuditLogCollector($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBClusterAuditLogCollectorWithOptions($request, $runtime);
    }

    /**
     * @summary Enables or disables the cluster lock feature for a PolarDB cluster.
     *  *
     * @param ModifyDBClusterDeletionRequest $request ModifyDBClusterDeletionRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBClusterDeletionResponse ModifyDBClusterDeletionResponse
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
     * @summary Enables or disables the cluster lock feature for a PolarDB cluster.
     *  *
     * @param ModifyDBClusterDeletionRequest $request ModifyDBClusterDeletionRequest
     *
     * @return ModifyDBClusterDeletionResponse ModifyDBClusterDeletionResponse
     */
    public function modifyDBClusterDeletion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBClusterDeletionWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the name of a PolarDB cluster.
     *  *
     * @param ModifyDBClusterDescriptionRequest $request ModifyDBClusterDescriptionRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBClusterDescriptionResponse ModifyDBClusterDescriptionResponse
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
     * @summary Modifies the name of a PolarDB cluster.
     *  *
     * @param ModifyDBClusterDescriptionRequest $request ModifyDBClusterDescriptionRequest
     *
     * @return ModifyDBClusterDescriptionResponse ModifyDBClusterDescriptionResponse
     */
    public function modifyDBClusterDescription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBClusterDescriptionWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the attributes of a specified PolarDB cluster endpoint. For example, you can modify the following attributes for the specified cluster endpoint: read/write mode, consistency level, transaction splitting, primary node accepts read requests, and connection pool. You can also call the operation to specify whether newly added nodes are automatically associated with the specified cluster endpoint.
     *  *
     * @param ModifyDBClusterEndpointRequest $request ModifyDBClusterEndpointRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBClusterEndpointResponse ModifyDBClusterEndpointResponse
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
     * @summary Modifies the attributes of a specified PolarDB cluster endpoint. For example, you can modify the following attributes for the specified cluster endpoint: read/write mode, consistency level, transaction splitting, primary node accepts read requests, and connection pool. You can also call the operation to specify whether newly added nodes are automatically associated with the specified cluster endpoint.
     *  *
     * @param ModifyDBClusterEndpointRequest $request ModifyDBClusterEndpointRequest
     *
     * @return ModifyDBClusterEndpointResponse ModifyDBClusterEndpointResponse
     */
    public function modifyDBClusterEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBClusterEndpointWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the maintenance window of a PolarDB cluster.
     *  *
     * @description >  We recommend that you set the routine maintenance window to off-peak hours. Alibaba Cloud maintains your cluster within the specified maintenance window to minimize the negative impacts on your business.
     *  *
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
     * @summary Modifies the maintenance window of a PolarDB cluster.
     *  *
     * @description >  We recommend that you set the routine maintenance window to off-peak hours. Alibaba Cloud maintains your cluster within the specified maintenance window to minimize the negative impacts on your business.
     *  *
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
     * @summary Switches or rolls back the task that migrates data from ApsaraDB for RDS to PolarDB.
     *  *
     * @description *   You can call this operation to switch the task that migrates data from ApsaraDB for RDS to PolarDB.
     * *   You can call this operation to roll back the task that migrates data from ApsaraDB for RDS to PolarDB.
     * > Before you call this operation, ensure that a one-click upgrade task has been created for the cluster. You can call the [CreateDBCluster](https://help.aliyun.com/document_detail/98169.html) operation to create an upgrade task. Set the **CreationOption** parameter to **MigrationFromRDS**. For more information, see [Create a PolarDB for MySQL cluster by using the Migration from RDS method](https://help.aliyun.com/document_detail/121582.html).
     *  *
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
     * @summary Switches or rolls back the task that migrates data from ApsaraDB for RDS to PolarDB.
     *  *
     * @description *   You can call this operation to switch the task that migrates data from ApsaraDB for RDS to PolarDB.
     * *   You can call this operation to roll back the task that migrates data from ApsaraDB for RDS to PolarDB.
     * > Before you call this operation, ensure that a one-click upgrade task has been created for the cluster. You can call the [CreateDBCluster](https://help.aliyun.com/document_detail/98169.html) operation to create an upgrade task. Set the **CreationOption** parameter to **MigrationFromRDS**. For more information, see [Create a PolarDB for MySQL cluster by using the Migration from RDS method](https://help.aliyun.com/document_detail/121582.html).
     *  *
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
     * @summary Modifies the interval at which the monitoring data of a PolarDB cluster is collected.
     *  *
     * @description *   When the monitoring data is collected every 5 seconds:
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
     *  *
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
     * @summary Modifies the interval at which the monitoring data of a PolarDB cluster is collected.
     *  *
     * @description *   When the monitoring data is collected every 5 seconds:
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
     *  *
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
     * @summary Modifies the parameters of a specified PolarDB cluster or applies existing parameter templates to a specified cluster.
     *  *
     * @description PolarDB supports the parameter template feature to centrally manage clusters. You can configure a number of parameters at a time by using a parameter template and apply the template to a PolarDB cluster. For more information, see [Use a parameter template](https://help.aliyun.com/document_detail/207009.html).
     * **
     * **Only PolarDB for MySQL clusters support parameter templates.
     *  *
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
     * @summary Modifies the parameters of a specified PolarDB cluster or applies existing parameter templates to a specified cluster.
     *  *
     * @description PolarDB supports the parameter template feature to centrally manage clusters. You can configure a number of parameters at a time by using a parameter template and apply the template to a PolarDB cluster. For more information, see [Use a parameter template](https://help.aliyun.com/document_detail/207009.html).
     * **
     * **Only PolarDB for MySQL clusters support parameter templates.
     *  *
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
     * @summary Modifies the primary zone of a PolarDB cluster.
     *  *
     * @param ModifyDBClusterPrimaryZoneRequest $request ModifyDBClusterPrimaryZoneRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBClusterPrimaryZoneResponse ModifyDBClusterPrimaryZoneResponse
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
        if (!Utils::isUnset($request->zoneType)) {
            $query['ZoneType'] = $request->zoneType;
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
     * @summary Modifies the primary zone of a PolarDB cluster.
     *  *
     * @param ModifyDBClusterPrimaryZoneRequest $request ModifyDBClusterPrimaryZoneRequest
     *
     * @return ModifyDBClusterPrimaryZoneResponse ModifyDBClusterPrimaryZoneResponse
     */
    public function modifyDBClusterPrimaryZone($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBClusterPrimaryZoneWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDBClusterResourceGroupRequest $request ModifyDBClusterResourceGroupRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBClusterResourceGroupResponse ModifyDBClusterResourceGroupResponse
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
     * @param ModifyDBClusterResourceGroupRequest $request ModifyDBClusterResourceGroupRequest
     *
     * @return ModifyDBClusterResourceGroupResponse ModifyDBClusterResourceGroupResponse
     */
    public function modifyDBClusterResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBClusterResourceGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Enables or disables Secure Sockets Layer (SSL) encryption or updates the Certificate Authorities (CA) certificate for a specified PolarDB cluster.
     *  *
     * @param ModifyDBClusterSSLRequest $request ModifyDBClusterSSLRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBClusterSSLResponse ModifyDBClusterSSLResponse
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
     * @summary Enables or disables Secure Sockets Layer (SSL) encryption or updates the Certificate Authorities (CA) certificate for a specified PolarDB cluster.
     *  *
     * @param ModifyDBClusterSSLRequest $request ModifyDBClusterSSLRequest
     *
     * @return ModifyDBClusterSSLResponse ModifyDBClusterSSLResponse
     */
    public function modifyDBClusterSSL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBClusterSSLWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the configurations of a serverless cluster.
     *  *
     * @param ModifyDBClusterServerlessConfRequest $request ModifyDBClusterServerlessConfRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBClusterServerlessConfResponse ModifyDBClusterServerlessConfResponse
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
        if (!Utils::isUnset($request->serverlessRuleCpuEnlargeThreshold)) {
            $query['ServerlessRuleCpuEnlargeThreshold'] = $request->serverlessRuleCpuEnlargeThreshold;
        }
        if (!Utils::isUnset($request->serverlessRuleCpuShrinkThreshold)) {
            $query['ServerlessRuleCpuShrinkThreshold'] = $request->serverlessRuleCpuShrinkThreshold;
        }
        if (!Utils::isUnset($request->serverlessRuleMode)) {
            $query['ServerlessRuleMode'] = $request->serverlessRuleMode;
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
     * @summary Modifies the configurations of a serverless cluster.
     *  *
     * @param ModifyDBClusterServerlessConfRequest $request ModifyDBClusterServerlessConfRequest
     *
     * @return ModifyDBClusterServerlessConfResponse ModifyDBClusterServerlessConfResponse
     */
    public function modifyDBClusterServerlessConf($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBClusterServerlessConfWithOptions($request, $runtime);
    }

    /**
     * @summary Changes the storage capacity of a pay-as-you-go cluster of Enterprise Edition or a cluster of Standard Edition.
     *  *
     * @param ModifyDBClusterStorageSpaceRequest $request ModifyDBClusterStorageSpaceRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBClusterStorageSpaceResponse ModifyDBClusterStorageSpaceResponse
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
     * @summary Changes the storage capacity of a pay-as-you-go cluster of Enterprise Edition or a cluster of Standard Edition.
     *  *
     * @param ModifyDBClusterStorageSpaceRequest $request ModifyDBClusterStorageSpaceRequest
     *
     * @return ModifyDBClusterStorageSpaceResponse ModifyDBClusterStorageSpaceResponse
     */
    public function modifyDBClusterStorageSpace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBClusterStorageSpaceWithOptions($request, $runtime);
    }

    /**
     * @summary Enables the TDE feature or changes the encryption method for a specified PolarDB for MySQL cluster.
     *  *
     * @description > *   To perform this operation, you must activate KMS first. For more information, see [Purchase a dedicated KMS instance](https://help.aliyun.com/document_detail/153781.html).
     * > *   After TDE is enabled, you cannot disable TDE.
     *  *
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
     * @summary Enables the TDE feature or changes the encryption method for a specified PolarDB for MySQL cluster.
     *  *
     * @description > *   To perform this operation, you must activate KMS first. For more information, see [Purchase a dedicated KMS instance](https://help.aliyun.com/document_detail/153781.html).
     * > *   After TDE is enabled, you cannot disable TDE.
     *  *
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
     * @summary Modifies the description of a database in a PolarDB for MySQL cluster.
     *  *
     * @param ModifyDBDescriptionRequest $request ModifyDBDescriptionRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBDescriptionResponse ModifyDBDescriptionResponse
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
     * @summary Modifies the description of a database in a PolarDB for MySQL cluster.
     *  *
     * @param ModifyDBDescriptionRequest $request ModifyDBDescriptionRequest
     *
     * @return ModifyDBDescriptionResponse ModifyDBDescriptionResponse
     */
    public function modifyDBDescription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBDescriptionWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the endpoints of a PolarDB cluster, including the primary endpoint, default cluster endpoint, custom cluster endpoint, and private domain name.
     *  *
     * @param ModifyDBEndpointAddressRequest $request ModifyDBEndpointAddressRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBEndpointAddressResponse ModifyDBEndpointAddressResponse
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
     * @summary Modifies the endpoints of a PolarDB cluster, including the primary endpoint, default cluster endpoint, custom cluster endpoint, and private domain name.
     *  *
     * @param ModifyDBEndpointAddressRequest $request ModifyDBEndpointAddressRequest
     *
     * @return ModifyDBEndpointAddressResponse ModifyDBEndpointAddressResponse
     */
    public function modifyDBEndpointAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBEndpointAddressWithOptions($request, $runtime);
    }

    /**
     * @summary Changes the node specifications of a PolarDB cluster.
     *  *
     * @param ModifyDBNodeClassRequest $request ModifyDBNodeClassRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBNodeClassResponse ModifyDBNodeClassResponse
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
     * @summary Changes the node specifications of a PolarDB cluster.
     *  *
     * @param ModifyDBNodeClassRequest $request ModifyDBNodeClassRequest
     *
     * @return ModifyDBNodeClassResponse ModifyDBNodeClassResponse
     */
    public function modifyDBNodeClass($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBNodeClassWithOptions($request, $runtime);
    }

    /**
     * @summary Enables or disables a cluster node.
     *  *
     * @param ModifyDBNodeHotReplicaModeRequest $request ModifyDBNodeHotReplicaModeRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBNodeHotReplicaModeResponse ModifyDBNodeHotReplicaModeResponse
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
     * @summary Enables or disables a cluster node.
     *  *
     * @param ModifyDBNodeHotReplicaModeRequest $request ModifyDBNodeHotReplicaModeRequest
     *
     * @return ModifyDBNodeHotReplicaModeResponse ModifyDBNodeHotReplicaModeResponse
     */
    public function modifyDBNodeHotReplicaMode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBNodeHotReplicaModeWithOptions($request, $runtime);
    }

    /**
     * @summary Changes the specifications of a node in a PolarDB cluster.
     *  *
     * @param ModifyDBNodesClassRequest $request ModifyDBNodesClassRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBNodesClassResponse ModifyDBNodesClassResponse
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
     * @summary Changes the specifications of a node in a PolarDB cluster.
     *  *
     * @param ModifyDBNodesClassRequest $request ModifyDBNodesClassRequest
     *
     * @return ModifyDBNodesClassResponse ModifyDBNodesClassResponse
     */
    public function modifyDBNodesClass($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBNodesClassWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the parameters of a node and applies them to specified nodes.
     *  *
     * @param ModifyDBNodesParametersRequest $request ModifyDBNodesParametersRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBNodesParametersResponse ModifyDBNodesParametersResponse
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
     * @summary Modifies the parameters of a node and applies them to specified nodes.
     *  *
     * @param ModifyDBNodesParametersRequest $request ModifyDBNodesParametersRequest
     *
     * @return ModifyDBNodesParametersResponse ModifyDBNodesParametersResponse
     */
    public function modifyDBNodesParameters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBNodesParametersWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies a Global Database Network (GDN).
     *  *
     * @param ModifyGlobalDatabaseNetworkRequest $request ModifyGlobalDatabaseNetworkRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyGlobalDatabaseNetworkResponse ModifyGlobalDatabaseNetworkResponse
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
     * @summary Modifies a Global Database Network (GDN).
     *  *
     * @param ModifyGlobalDatabaseNetworkRequest $request ModifyGlobalDatabaseNetworkRequest
     *
     * @return ModifyGlobalDatabaseNetworkResponse ModifyGlobalDatabaseNetworkResponse
     */
    public function modifyGlobalDatabaseNetwork($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyGlobalDatabaseNetworkWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies an IP whitelist template.
     *  *
     * @param ModifyGlobalSecurityIPGroupRequest $request ModifyGlobalSecurityIPGroupRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyGlobalSecurityIPGroupResponse ModifyGlobalSecurityIPGroupResponse
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
     * @summary Modifies an IP whitelist template.
     *  *
     * @param ModifyGlobalSecurityIPGroupRequest $request ModifyGlobalSecurityIPGroupRequest
     *
     * @return ModifyGlobalSecurityIPGroupResponse ModifyGlobalSecurityIPGroupResponse
     */
    public function modifyGlobalSecurityIPGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyGlobalSecurityIPGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the name of a global IP whitelist template.
     *  *
     * @param ModifyGlobalSecurityIPGroupNameRequest $request ModifyGlobalSecurityIPGroupNameRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyGlobalSecurityIPGroupNameResponse ModifyGlobalSecurityIPGroupNameResponse
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
     * @summary Modifies the name of a global IP whitelist template.
     *  *
     * @param ModifyGlobalSecurityIPGroupNameRequest $request ModifyGlobalSecurityIPGroupNameRequest
     *
     * @return ModifyGlobalSecurityIPGroupNameResponse ModifyGlobalSecurityIPGroupNameResponse
     */
    public function modifyGlobalSecurityIPGroupName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyGlobalSecurityIPGroupNameWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the relationship between a cluster and a global IP whitelist template.
     *  *
     * @param ModifyGlobalSecurityIPGroupRelationRequest $request ModifyGlobalSecurityIPGroupRelationRequest
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyGlobalSecurityIPGroupRelationResponse ModifyGlobalSecurityIPGroupRelationResponse
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
     * @summary Modifies the relationship between a cluster and a global IP whitelist template.
     *  *
     * @param ModifyGlobalSecurityIPGroupRelationRequest $request ModifyGlobalSecurityIPGroupRelationRequest
     *
     * @return ModifyGlobalSecurityIPGroupRelationResponse ModifyGlobalSecurityIPGroupRelationResponse
     */
    public function modifyGlobalSecurityIPGroupRelation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyGlobalSecurityIPGroupRelationWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the retention policy of the log backups in a PolarDB cluster.
     *  *
     * @param ModifyLogBackupPolicyRequest $request ModifyLogBackupPolicyRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyLogBackupPolicyResponse ModifyLogBackupPolicyResponse
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
     * @summary Modifies the retention policy of the log backups in a PolarDB cluster.
     *  *
     * @param ModifyLogBackupPolicyRequest $request ModifyLogBackupPolicyRequest
     *
     * @return ModifyLogBackupPolicyResponse ModifyLogBackupPolicyResponse
     */
    public function modifyLogBackupPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyLogBackupPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies or adds a data masking rule.
     *  *
     * @param ModifyMaskingRulesRequest $request ModifyMaskingRulesRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyMaskingRulesResponse ModifyMaskingRulesResponse
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
        if (!Utils::isUnset($request->ruleVersion)) {
            $query['RuleVersion'] = $request->ruleVersion;
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
     * @summary Modifies or adds a data masking rule.
     *  *
     * @param ModifyMaskingRulesRequest $request ModifyMaskingRulesRequest
     *
     * @return ModifyMaskingRulesResponse ModifyMaskingRulesResponse
     */
    public function modifyMaskingRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyMaskingRulesWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the switching time of a pending event.
     *  *
     * @param ModifyPendingMaintenanceActionRequest $request ModifyPendingMaintenanceActionRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyPendingMaintenanceActionResponse ModifyPendingMaintenanceActionResponse
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
     * @summary Modifies the switching time of a pending event.
     *  *
     * @param ModifyPendingMaintenanceActionRequest $request ModifyPendingMaintenanceActionRequest
     *
     * @return ModifyPendingMaintenanceActionResponse ModifyPendingMaintenanceActionResponse
     */
    public function modifyPendingMaintenanceAction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyPendingMaintenanceActionWithOptions($request, $runtime);
    }

    /**
     * @summary Enables the PolarDB for AI feature for a cluster.
     *  *
     * @param OpenAITaskRequest $request OpenAITaskRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return OpenAITaskResponse OpenAITaskResponse
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
     * @summary Enables the PolarDB for AI feature for a cluster.
     *  *
     * @param OpenAITaskRequest $request OpenAITaskRequest
     *
     * @return OpenAITaskResponse OpenAITaskResponse
     */
    public function openAITask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openAITaskWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the storage usage of a cluster.
     *  *
     * @param RefreshDBClusterStorageUsageRequest $request RefreshDBClusterStorageUsageRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return RefreshDBClusterStorageUsageResponse RefreshDBClusterStorageUsageResponse
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
     * @summary Updates the storage usage of a cluster.
     *  *
     * @param RefreshDBClusterStorageUsageRequest $request RefreshDBClusterStorageUsageRequest
     *
     * @return RefreshDBClusterStorageUsageResponse RefreshDBClusterStorageUsageResponse
     */
    public function refreshDBClusterStorageUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refreshDBClusterStorageUsageWithOptions($request, $runtime);
    }

    /**
     * @summary Removes a secondary cluster from a GDN.
     *  *
     * @description >  You cannot remove the primary cluster from a GDN.
     *  *
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
     * @summary Removes a secondary cluster from a GDN.
     *  *
     * @description >  You cannot remove the primary cluster from a GDN.
     *  *
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
     * @summary Resets the permissions of a privileged account for a PolarDB cluster.
     *  *
     * @description >- Only PolarDB for MySQL clusters support this operation.
     * >- If the privileged account of your cluster encounters exceptions, you can call this operation to reset the permissions. For example, the permissions are accidentally revoked.
     *  *
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
     * @summary Resets the permissions of a privileged account for a PolarDB cluster.
     *  *
     * @description >- Only PolarDB for MySQL clusters support this operation.
     * >- If the privileged account of your cluster encounters exceptions, you can call this operation to reset the permissions. For example, the permissions are accidentally revoked.
     *  *
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
     * @summary Rebuilds a secondary cluster in a Global Database Network (GDN).
     *  *
     * @param ResetGlobalDatabaseNetworkRequest $request ResetGlobalDatabaseNetworkRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ResetGlobalDatabaseNetworkResponse ResetGlobalDatabaseNetworkResponse
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
     * @summary Rebuilds a secondary cluster in a Global Database Network (GDN).
     *  *
     * @param ResetGlobalDatabaseNetworkRequest $request ResetGlobalDatabaseNetworkRequest
     *
     * @return ResetGlobalDatabaseNetworkResponse ResetGlobalDatabaseNetworkResponse
     */
    public function resetGlobalDatabaseNetwork($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetGlobalDatabaseNetworkWithOptions($request, $runtime);
    }

    /**
     * @summary 重启代理
     *  *
     * @param RestartDBLinkRequest $request RestartDBLinkRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return RestartDBLinkResponse RestartDBLinkResponse
     */
    public function restartDBLinkWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RestartDBLink',
            'version'     => '2017-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RestartDBLinkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 重启代理
     *  *
     * @param RestartDBLinkRequest $request RestartDBLinkRequest
     *
     * @return RestartDBLinkResponse RestartDBLinkResponse
     */
    public function restartDBLink($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restartDBLinkWithOptions($request, $runtime);
    }

    /**
     * @summary Restarts a node in a PolarDB cluster.
     *  *
     * @param RestartDBNodeRequest $request RestartDBNodeRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return RestartDBNodeResponse RestartDBNodeResponse
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
     * @summary Restarts a node in a PolarDB cluster.
     *  *
     * @param RestartDBNodeRequest $request RestartDBNodeRequest
     *
     * @return RestartDBNodeResponse RestartDBNodeResponse
     */
    public function restartDBNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restartDBNodeWithOptions($request, $runtime);
    }

    /**
     * @summary Restores PolarDB databases and tables.
     *  *
     * @param RestoreTableRequest $request RestoreTableRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return RestoreTableResponse RestoreTableResponse
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
     * @summary Restores PolarDB databases and tables.
     *  *
     * @param RestoreTableRequest $request RestoreTableRequest
     *
     * @return RestoreTableResponse RestoreTableResponse
     */
    public function restoreTable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restoreTableWithOptions($request, $runtime);
    }

    /**
     * @summary Revokes the access permissions on one or more databases from a specified PolarDB standard account.
     *  *
     * @param RevokeAccountPrivilegeRequest $request RevokeAccountPrivilegeRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return RevokeAccountPrivilegeResponse RevokeAccountPrivilegeResponse
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
     * @summary Revokes the access permissions on one or more databases from a specified PolarDB standard account.
     *  *
     * @param RevokeAccountPrivilegeRequest $request RevokeAccountPrivilegeRequest
     *
     * @return RevokeAccountPrivilegeResponse RevokeAccountPrivilegeResponse
     */
    public function revokeAccountPrivilege($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revokeAccountPrivilegeWithOptions($request, $runtime);
    }

    /**
     * @param SwitchOverGlobalDatabaseNetworkRequest $request SwitchOverGlobalDatabaseNetworkRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return SwitchOverGlobalDatabaseNetworkResponse SwitchOverGlobalDatabaseNetworkResponse
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
     * @param SwitchOverGlobalDatabaseNetworkRequest $request SwitchOverGlobalDatabaseNetworkRequest
     *
     * @return SwitchOverGlobalDatabaseNetworkResponse SwitchOverGlobalDatabaseNetworkResponse
     */
    public function switchOverGlobalDatabaseNetwork($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->switchOverGlobalDatabaseNetworkWithOptions($request, $runtime);
    }

    /**
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
     * @summary Temporarily upgrades the configuration of a PolarDB cluster or adds one or more nodes to a cluster.
     *  *
     * @param TempModifyDBNodeRequest $request TempModifyDBNodeRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return TempModifyDBNodeResponse TempModifyDBNodeResponse
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
     * @summary Temporarily upgrades the configuration of a PolarDB cluster or adds one or more nodes to a cluster.
     *  *
     * @param TempModifyDBNodeRequest $request TempModifyDBNodeRequest
     *
     * @return TempModifyDBNodeResponse TempModifyDBNodeResponse
     */
    public function tempModifyDBNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tempModifyDBNodeWithOptions($request, $runtime);
    }

    /**
     * @summary Changes the billing method of a PolarDB cluster.
     *  *
     * @description > *   PolarDB clusters support the subscription and pay-as-you-go billing methods. You can change the billing method from subscription to pay-as-you-go or from pay-as-you-go to subscription based on your business requirements. For more information, see [Change the billing method from subscription to pay-as-you-go](https://help.aliyun.com/document_detail/172886.html) and [Change the billing method from pay-as-you-go to subscription](https://help.aliyun.com/document_detail/84076.html).
     * >*   You cannot change the billing method from pay-as-you-go to subscription if your account balance is insufficient.
     * >*   If you change the billing method from subscription to pay-as-you-go, the system automatically refunds the balance of the prepaid subscription fees.
     *  *
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
     * @summary Changes the billing method of a PolarDB cluster.
     *  *
     * @description > *   PolarDB clusters support the subscription and pay-as-you-go billing methods. You can change the billing method from subscription to pay-as-you-go or from pay-as-you-go to subscription based on your business requirements. For more information, see [Change the billing method from subscription to pay-as-you-go](https://help.aliyun.com/document_detail/172886.html) and [Change the billing method from pay-as-you-go to subscription](https://help.aliyun.com/document_detail/84076.html).
     * >*   You cannot change the billing method from pay-as-you-go to subscription if your account balance is insufficient.
     * >*   If you change the billing method from subscription to pay-as-you-go, the system automatically refunds the balance of the prepaid subscription fees.
     *  *
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
     * @summary Unbinds tags from PolarDB clusters.
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
     * @summary Unbinds tags from PolarDB clusters.
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
     * @summary Upgrades the kernel version of a PolarDB for MySQL cluster.
     *  *
     * @description > *  You can update only the revision version of a PolarDB for MySQL cluster, for example, from 8.0.1.1.3 to 8.0.1.1.4.
     * >*   You can use only your Alibaba Cloud account to create scheduled tasks that update the kernel version of a PolarDB for MySQL cluster. RAM users are not authorized to update the kernel version of a PolarDB for MySQL cluster.
     *  *
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
        if (!Utils::isUnset($request->targetProxyRevisionVersionCode)) {
            $query['TargetProxyRevisionVersionCode'] = $request->targetProxyRevisionVersionCode;
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
     * @summary Upgrades the kernel version of a PolarDB for MySQL cluster.
     *  *
     * @description > *  You can update only the revision version of a PolarDB for MySQL cluster, for example, from 8.0.1.1.3 to 8.0.1.1.4.
     * >*   You can use only your Alibaba Cloud account to create scheduled tasks that update the kernel version of a PolarDB for MySQL cluster. RAM users are not authorized to update the kernel version of a PolarDB for MySQL cluster.
     *  *
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
