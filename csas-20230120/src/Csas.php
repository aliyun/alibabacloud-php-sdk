<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Csas\V20230120\Models\AddDeviceGroupMatchDevicesRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\AddDeviceGroupMatchDevicesResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\AddVirusScanAdditionalListsRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\AddVirusScanAdditionalListsResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\AttachApplication2ConnectorRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\AttachApplication2ConnectorResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\AttachApplication2ConnectorShrinkRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\AttachPolicy2ApprovalProcessRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\AttachPolicy2ApprovalProcessResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\BatchCreateDomainItemsRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\BatchCreateDomainItemsResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\BatchDeleteDomainItemsRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\BatchDeleteDomainItemsResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\BatchDeletePrivateAccessApplicationRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\BatchDeletePrivateAccessApplicationResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\BatchDeletePrivateAccessPolicyRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\BatchDeletePrivateAccessPolicyResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\CancelVirusScanTasksRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\CancelVirusScanTasksResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\CancelVulScanTasksRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\CancelVulScanTasksResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateApprovalProcessRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateApprovalProcessResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateApprovalProcessShrinkRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateClientUserRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateClientUserResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateConnectorRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateConnectorResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateDeviceGroupRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateDeviceGroupResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateDeviceGroupShrinkRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateDomainMetaRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateDomainMetaResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateDynamicRouteRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateDynamicRouteResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateEnterpriseAcceleratePolicyRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateEnterpriseAcceleratePolicyResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateEnterpriseAccelerateTargetRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateEnterpriseAccelerateTargetResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateForwardStrategyRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateForwardStrategyResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateIdpDepartmentRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateIdpDepartmentResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreatePADiagnosisTaskRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreatePADiagnosisTaskResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreatePADiagnosisTaskShrinkRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreatePrivateAccessApplicationRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreatePrivateAccessApplicationResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreatePrivateAccessApplicationShrinkRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreatePrivateAccessPolicyRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreatePrivateAccessPolicyResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreatePrivateAccessTagRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreatePrivateAccessTagResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateProhibitedPolicyRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateProhibitedPolicyResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateProhibitedSoftwareRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateProhibitedSoftwareResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateProhibitedTagRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateProhibitedTagResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateRegistrationPolicyRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateRegistrationPolicyResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateRegistrationPolicyShrinkRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateUserGroupRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateUserGroupResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateVirusScanScheduledStrategyRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateVirusScanScheduledStrategyResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateVirusScanTaskRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateVirusScanTaskResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateVulnerabilityFixTaskRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateVulnerabilityFixTaskResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateVulnerabilityFixTaskShrinkRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateVulScanScheduledStrategyRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateVulScanScheduledStrategyResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateVulScanTaskRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateVulScanTaskResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateWmBaseImageRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateWmBaseImageResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateWmBaseImageShrinkRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateWmEmbedTaskRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateWmEmbedTaskResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateWmEmbedTaskShrinkRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateWmExtractTaskRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateWmExtractTaskResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateWmExtractTaskShrinkRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateWmInfoMappingRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateWmInfoMappingResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeleteApprovalProcessesRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeleteApprovalProcessesResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeleteClientUserRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeleteClientUserResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeleteConnectorClientRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeleteConnectorClientResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeleteConnectorRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeleteConnectorResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeleteDeviceGroupsRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeleteDeviceGroupsResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeleteDevicesVulnerabilityRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeleteDevicesVulnerabilityResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeleteDomainMetaRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeleteDomainMetaResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeleteDynamicRouteRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeleteDynamicRouteResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeleteEnterpriseAcceleratePolicyRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeleteEnterpriseAcceleratePolicyResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeleteEnterpriseAccelerateTargetRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeleteEnterpriseAccelerateTargetResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeleteForwardStrategyRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeleteForwardStrategyResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeleteIdpDepartmentRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeleteIdpDepartmentResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeleteOtpConfigRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeleteOtpConfigResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeletePrivateAccessApplicationRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeletePrivateAccessApplicationResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeletePrivateAccessPolicyRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeletePrivateAccessPolicyResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeletePrivateAccessTagRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeletePrivateAccessTagResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeleteProhibitedPoliciesRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeleteProhibitedPoliciesResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeleteProhibitedSoftwareRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeleteProhibitedSoftwareResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeleteProhibitedTagsRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeleteProhibitedTagsResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeleteRegistrationPoliciesRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeleteRegistrationPoliciesResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeleteUserDevicesRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeleteUserDevicesResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeleteUserGroupRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeleteUserGroupResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeleteVirusFileRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeleteVirusFileResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeleteVirusScanScheduledStrategiesRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeleteVirusScanScheduledStrategiesResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeleteVulScanScheduledStrategyRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeleteVulScanScheduledStrategyResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\DetachApplication2ConnectorRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\DetachApplication2ConnectorResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\DetachApplication2ConnectorShrinkRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\DetachPolicy2ApprovalProcessRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\DetachPolicy2ApprovalProcessResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\DisableEnterpriseAcceleratePolicyRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\DisableEnterpriseAcceleratePolicyResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\EnableEnterpriseAcceleratePolicyRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\EnableEnterpriseAcceleratePolicyResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ExportUserDevicesRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ExportUserDevicesResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetActiveIdpConfigResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetAntiVirusRealTimeDefenceStrategyRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetAntiVirusRealTimeDefenceStrategyResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetApprovalProcessRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetApprovalProcessResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetApprovalRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetApprovalResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetApprovalSchemaRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetApprovalSchemaResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetBootAndAntiUninstallPolicyResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetClientUserRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetClientUserResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetConnectorClientRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetConnectorClientResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetConnectorRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetConnectorResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetDeviceGroupRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetDeviceGroupResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetDeviceOnlineHeatmapRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetDeviceOnlineHeatmapResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetDynamicRouteRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetDynamicRouteResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetForwardStrategyRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetForwardStrategyResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetIdpConfigRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetIdpConfigResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetNacPortalSmsPhoneWhitelistRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetNacPortalSmsPhoneWhitelistResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetPADiagnosisTaskRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetPADiagnosisTaskResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetPrivateAccessApplicationRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetPrivateAccessApplicationResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetPrivateAccessPolicyRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetPrivateAccessPolicyResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetProhibitedPolicyRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetProhibitedPolicyResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetProhibitedSoftwareRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetProhibitedSoftwareResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetProhibitedSoftwareShrinkRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetRegistrationPolicyRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetRegistrationPolicyResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetUserDeviceRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetUserDeviceResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetUserDeviceWorkloadTrendRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetUserDeviceWorkloadTrendResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetUserGroupRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetUserGroupResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetVirusScanGlobalConfigRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetVirusScanGlobalConfigResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetVirusScanScheduledStrategyRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetVirusScanScheduledStrategyResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetVulnerabilityRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetVulnerabilityResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetVulScanGlobalConfigRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetVulScanGlobalConfigResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetVulScanScheduledStrategyRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetVulScanScheduledStrategyResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetWmEmbedTaskRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetWmEmbedTaskResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetWmExtractTaskRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetWmExtractTaskResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ImportEnterpriseAccelerateTargetsRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ImportEnterpriseAccelerateTargetsResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListApplicationsForPrivateAccessPolicyRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListApplicationsForPrivateAccessPolicyResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListApplicationsForPrivateAccessTagRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListApplicationsForPrivateAccessTagResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListApprovalProcessesForApprovalSchemasRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListApprovalProcessesForApprovalSchemasResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListApprovalProcessesRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListApprovalProcessesResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListApprovalSchemasForApprovalProcessesRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListApprovalSchemasForApprovalProcessesResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListApprovalSchemasRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListApprovalSchemasResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListApprovalsRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListApprovalsResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListClientUsersRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListClientUsersResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListConnectorsRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListConnectorsResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListDeviceGroupsRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListDeviceGroupsResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListDevicesForVulnerabilityRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListDevicesForVulnerabilityResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListDomainItemsRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListDomainItemsResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListDomainMetasRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListDomainMetasResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListDynamicDisposalProcessesRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListDynamicDisposalProcessesResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListDynamicRouteRegionsResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListDynamicRoutesRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListDynamicRoutesResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListEnterpriseAccelerateLogsRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListEnterpriseAccelerateLogsResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListEnterpriseAcceleratePoliciesRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListEnterpriseAcceleratePoliciesResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListEnterpriseAccelerateTargetsRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListEnterpriseAccelerateTargetsResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListExcessiveDeviceRegistrationApplicationsRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListExcessiveDeviceRegistrationApplicationsResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListForwardStrategiesRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListForwardStrategiesResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListForwardStrategyBindingItemsRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListForwardStrategyBindingItemsResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListIdpConfigsRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListIdpConfigsResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListIdpDepartmentsRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListIdpDepartmentsResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListNacUserCertRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListNacUserCertResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListPolicesForPrivateAccessApplicationRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListPolicesForPrivateAccessApplicationResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListPolicesForPrivateAccessTagRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListPolicesForPrivateAccessTagResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListPolicesForUserGroupRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListPolicesForUserGroupResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListPopTrafficStatisticsRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListPopTrafficStatisticsResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListPrivateAccessApplicationL7SwitchesRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListPrivateAccessApplicationL7SwitchesResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListPrivateAccessApplicationsForDynamicRouteRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListPrivateAccessApplicationsForDynamicRouteResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListPrivateAccessApplicationsRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListPrivateAccessApplicationsResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListPrivateAccessPolicesRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListPrivateAccessPolicesResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListPrivateAccessTagsForDynamicRouteRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListPrivateAccessTagsForDynamicRouteResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListPrivateAccessTagsRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListPrivateAccessTagsResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListProhibitedPoliciesRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListProhibitedPoliciesResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListProhibitedPoliciesShrinkRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListProhibitedSoftwareRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListProhibitedSoftwareResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListProhibitedSoftwareShrinkRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListProhibitedTagsRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListProhibitedTagsResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListProhibitedTagsShrinkRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListRegistrationPoliciesForUserGroupRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListRegistrationPoliciesForUserGroupResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListRegistrationPoliciesRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListRegistrationPoliciesResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListRiskItemsRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListRiskItemsResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListSoftwareForUserDeviceRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListSoftwareForUserDeviceResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListTagsForPrivateAccessApplicationRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListTagsForPrivateAccessApplicationResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListTagsForPrivateAccessPolicyRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListTagsForPrivateAccessPolicyResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListUninstallApplicationsRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListUninstallApplicationsResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListUserApplicationsRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListUserApplicationsResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListUserDevicesRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListUserDevicesResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListUserGroupsForPrivateAccessPolicyRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListUserGroupsForPrivateAccessPolicyResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListUserGroupsForRegistrationPolicyRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListUserGroupsForRegistrationPolicyResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListUserGroupsRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListUserGroupsResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListUserPrivateAccessPoliciesRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListUserPrivateAccessPoliciesResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListUsersRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListUsersResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListVirusFileStatusesRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListVirusFileStatusesResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListVirusScanAdditionalListsRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListVirusScanAdditionalListsResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListVirusScanScheduledStrategiesRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListVirusScanScheduledStrategiesResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListVirusScanTasksRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListVirusScanTasksResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListVirusScanTaskStatusesRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListVirusScanTaskStatusesResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListVirusScanTaskSummaryRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListVirusScanTaskSummaryResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListVulnerabilitiesRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListVulnerabilitiesResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListVulScanScheduledStrategiesRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListVulScanScheduledStrategiesResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListVulScanTasksRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListVulScanTasksResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\LookupWmInfoMappingRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\LookupWmInfoMappingResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ModifyEnterpriseAcceleratePolicyRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ModifyEnterpriseAcceleratePolicyResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ModifyForwardStrategyBindingItemsRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ModifyForwardStrategyBindingItemsResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ModifyForwardStrategyRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ModifyForwardStrategyResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\RemoveDeviceGroupMatchDevicesRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\RemoveDeviceGroupMatchDevicesResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\RemoveVirusScanAdditionalListsRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\RemoveVirusScanAdditionalListsResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\RevokeUserDeviceSessionRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\RevokeUserDeviceSessionResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\RevokeUserSessionRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\RevokeUserSessionResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateAntiVirusRealTimeDefenceStrategyRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateAntiVirusRealTimeDefenceStrategyResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateApprovalProcessRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateApprovalProcessResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateApprovalProcessShrinkRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateApprovalStatusRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateApprovalStatusResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateBootAndAntiUninstallPolicyRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateBootAndAntiUninstallPolicyResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateBootAndAntiUninstallPolicyShrinkRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateClientUserPasswordRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateClientUserPasswordResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateClientUserRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateClientUserResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateClientUserStatusRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateClientUserStatusResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateConnectorClientRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateConnectorClientResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateConnectorRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateConnectorResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateDeviceGroupRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateDeviceGroupResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateDomainMetaRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateDomainMetaResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateDynamicRouteRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateDynamicRouteResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateExcessiveDeviceRegistrationApplicationsStatusRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateExcessiveDeviceRegistrationApplicationsStatusResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateIdpDepartmentRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateIdpDepartmentResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateNacPortalSmsPhoneWhitelistRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateNacPortalSmsPhoneWhitelistResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateNacUserCertStatusRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateNacUserCertStatusResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdatePrivateAccessApplicationL7SwitchRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdatePrivateAccessApplicationL7SwitchResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdatePrivateAccessApplicationRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdatePrivateAccessApplicationResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdatePrivateAccessApplicationShrinkRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdatePrivateAccessPolicyRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdatePrivateAccessPolicyResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateProhibitedPolicyRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateProhibitedPolicyResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateProhibitedSoftwareRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateProhibitedSoftwareResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateProhibitedTagRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateProhibitedTagResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateRegistrationPolicyRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateRegistrationPolicyResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateRegistrationPolicyShrinkRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateRiskStatusRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateRiskStatusResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateUninstallApplicationsStatusRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateUninstallApplicationsStatusResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateUserDevicesSharingStatusRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateUserDevicesSharingStatusResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateUserDevicesStatusRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateUserDevicesStatusResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateUserGroupRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateUserGroupResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateUsersStatusRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateUsersStatusResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateVirusFileStatusRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateVirusFileStatusResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateVirusScanGlobalConfigRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateVirusScanGlobalConfigResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateVirusScanScheduledStrategyRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateVirusScanScheduledStrategyResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateVulScanGlobalConfigRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateVulScanGlobalConfigResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateVulScanGlobalConfigShrinkRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateVulScanScheduledStrategyRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateVulScanScheduledStrategyResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Csas extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'cn-hangzhou' => 'csas.aliyuncs.com',
            'public' => 'csas.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('csas', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Appends associated terminal devices to a static device label in batches.
     *
     * @param request - AddDeviceGroupMatchDevicesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddDeviceGroupMatchDevicesResponse
     *
     * @param AddDeviceGroupMatchDevicesRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return AddDeviceGroupMatchDevicesResponse
     */
    public function addDeviceGroupMatchDevicesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        $bodyFlat = [];
        if (null !== $request->devTags) {
            @$bodyFlat['DevTags'] = $request->devTags;
        }

        if (null !== $request->deviceGroupId) {
            @$body['DeviceGroupId'] = $request->deviceGroupId;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddDeviceGroupMatchDevices',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddDeviceGroupMatchDevicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Appends associated terminal devices to a static device label in batches.
     *
     * @param request - AddDeviceGroupMatchDevicesRequest
     *
     * @returns AddDeviceGroupMatchDevicesResponse
     *
     * @param AddDeviceGroupMatchDevicesRequest $request
     *
     * @return AddDeviceGroupMatchDevicesResponse
     */
    public function addDeviceGroupMatchDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addDeviceGroupMatchDevicesWithOptions($request, $runtime);
    }

    /**
     * Appends entries in batches to the virus scan blacklists and whitelists for a specified operating system without overwriting existing entries. Quotas are calculated independently for each combination of matching dimension and list type. Each combination allows a maximum of 10,000 whitelist entries and 1,000 blacklist entries. If the quota is exceeded after appending, the entire batch fails.
     *
     * @param request - AddVirusScanAdditionalListsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddVirusScanAdditionalListsResponse
     *
     * @param AddVirusScanAdditionalListsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return AddVirusScanAdditionalListsResponse
     */
    public function addVirusScanAdditionalListsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        $bodyFlat = [];
        if (null !== $request->additionalLists) {
            @$bodyFlat['AdditionalLists'] = $request->additionalLists;
        }

        if (null !== $request->devType) {
            @$body['DevType'] = $request->devType;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddVirusScanAdditionalLists',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddVirusScanAdditionalListsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Appends entries in batches to the virus scan blacklists and whitelists for a specified operating system without overwriting existing entries. Quotas are calculated independently for each combination of matching dimension and list type. Each combination allows a maximum of 10,000 whitelist entries and 1,000 blacklist entries. If the quota is exceeded after appending, the entire batch fails.
     *
     * @param request - AddVirusScanAdditionalListsRequest
     *
     * @returns AddVirusScanAdditionalListsResponse
     *
     * @param AddVirusScanAdditionalListsRequest $request
     *
     * @return AddVirusScanAdditionalListsResponse
     */
    public function addVirusScanAdditionalLists($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addVirusScanAdditionalListsWithOptions($request, $runtime);
    }

    /**
     * Attaches the private access applications of a Connector under the current Alibaba Cloud account.
     *
     * @param tmpReq - AttachApplication2ConnectorRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AttachApplication2ConnectorResponse
     *
     * @param AttachApplication2ConnectorRequest $tmpReq
     * @param RuntimeOptions                     $runtime
     *
     * @return AttachApplication2ConnectorResponse
     */
    public function attachApplication2ConnectorWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new AttachApplication2ConnectorShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->applicationIds) {
            $request->applicationIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->applicationIds, 'ApplicationIds', 'json');
        }

        $body = [];
        if (null !== $request->applicationIdsShrink) {
            @$body['ApplicationIds'] = $request->applicationIdsShrink;
        }

        if (null !== $request->connectorId) {
            @$body['ConnectorId'] = $request->connectorId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AttachApplication2Connector',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AttachApplication2ConnectorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Attaches the private access applications of a Connector under the current Alibaba Cloud account.
     *
     * @param request - AttachApplication2ConnectorRequest
     *
     * @returns AttachApplication2ConnectorResponse
     *
     * @param AttachApplication2ConnectorRequest $request
     *
     * @return AttachApplication2ConnectorResponse
     */
    public function attachApplication2Connector($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachApplication2ConnectorWithOptions($request, $runtime);
    }

    /**
     * Attaches a business policy to a specified approval process.
     *
     * @param request - AttachPolicy2ApprovalProcessRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AttachPolicy2ApprovalProcessResponse
     *
     * @param AttachPolicy2ApprovalProcessRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return AttachPolicy2ApprovalProcessResponse
     */
    public function attachPolicy2ApprovalProcessWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->policyId) {
            @$body['PolicyId'] = $request->policyId;
        }

        if (null !== $request->policyType) {
            @$body['PolicyType'] = $request->policyType;
        }

        if (null !== $request->processId) {
            @$body['ProcessId'] = $request->processId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AttachPolicy2ApprovalProcess',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AttachPolicy2ApprovalProcessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Attaches a business policy to a specified approval process.
     *
     * @param request - AttachPolicy2ApprovalProcessRequest
     *
     * @returns AttachPolicy2ApprovalProcessResponse
     *
     * @param AttachPolicy2ApprovalProcessRequest $request
     *
     * @return AttachPolicy2ApprovalProcessResponse
     */
    public function attachPolicy2ApprovalProcess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachPolicy2ApprovalProcessWithOptions($request, $runtime);
    }

    /**
     * Inserts domain name entries into a domain name list in batches.
     *
     * @remarks
     * Appends domain name entries in batches to a specified domain name list (`ListId`). Domain names must be second-level or higher domain names. Wildcard domain names (`*.example.com`) are supported, but overly broad patterns such as `*.com` or `*.com.cn` are prohibited.
     *
     * @param request - BatchCreateDomainItemsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchCreateDomainItemsResponse
     *
     * @param BatchCreateDomainItemsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return BatchCreateDomainItemsResponse
     */
    public function batchCreateDomainItemsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        $bodyFlat = [];
        if (null !== $request->domainItems) {
            @$bodyFlat['DomainItems'] = $request->domainItems;
        }

        if (null !== $request->listId) {
            @$body['ListId'] = $request->listId;
        }

        if (null !== $request->listType) {
            @$body['ListType'] = $request->listType;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BatchCreateDomainItems',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchCreateDomainItemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Inserts domain name entries into a domain name list in batches.
     *
     * @remarks
     * Appends domain name entries in batches to a specified domain name list (`ListId`). Domain names must be second-level or higher domain names. Wildcard domain names (`*.example.com`) are supported, but overly broad patterns such as `*.com` or `*.com.cn` are prohibited.
     *
     * @param request - BatchCreateDomainItemsRequest
     *
     * @returns BatchCreateDomainItemsResponse
     *
     * @param BatchCreateDomainItemsRequest $request
     *
     * @return BatchCreateDomainItemsResponse
     */
    public function batchCreateDomainItems($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchCreateDomainItemsWithOptions($request, $runtime);
    }

    /**
     * Batch deletes domain name entries from a domain name list.
     *
     * @remarks
     * Batch deletes domain name entries from a specified domain name list by entry IDs (`ItemIds`, obtained from the `ItemId` field returned by ListDomainItems).
     *
     * @param request - BatchDeleteDomainItemsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchDeleteDomainItemsResponse
     *
     * @param BatchDeleteDomainItemsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return BatchDeleteDomainItemsResponse
     */
    public function batchDeleteDomainItemsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        $bodyFlat = [];
        if (null !== $request->itemIds) {
            @$bodyFlat['ItemIds'] = $request->itemIds;
        }

        if (null !== $request->listId) {
            @$body['ListId'] = $request->listId;
        }

        if (null !== $request->listType) {
            @$body['ListType'] = $request->listType;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BatchDeleteDomainItems',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchDeleteDomainItemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Batch deletes domain name entries from a domain name list.
     *
     * @remarks
     * Batch deletes domain name entries from a specified domain name list by entry IDs (`ItemIds`, obtained from the `ItemId` field returned by ListDomainItems).
     *
     * @param request - BatchDeleteDomainItemsRequest
     *
     * @returns BatchDeleteDomainItemsResponse
     *
     * @param BatchDeleteDomainItemsRequest $request
     *
     * @return BatchDeleteDomainItemsResponse
     */
    public function batchDeleteDomainItems($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchDeleteDomainItemsWithOptions($request, $runtime);
    }

    /**
     * Deletes internal-facing applications in batches.
     *
     * @remarks
     * Applications that are referenced by office network recognition or policies cannot be deleted. References:
     * - [ListPrivateAccessApplications](~~ListPrivateAccessApplications~~): Lists internal-facing access applications in batches.
     * - [ListPrivateAccessPolices](~~ListPrivateAccessPolices~~): Lists internal-facing access policies in batches.
     *
     * @param request - BatchDeletePrivateAccessApplicationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchDeletePrivateAccessApplicationResponse
     *
     * @param BatchDeletePrivateAccessApplicationRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return BatchDeletePrivateAccessApplicationResponse
     */
    public function batchDeletePrivateAccessApplicationWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        $bodyFlat = [];
        if (null !== $request->applicationIds) {
            @$bodyFlat['ApplicationIds'] = $request->applicationIds;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BatchDeletePrivateAccessApplication',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchDeletePrivateAccessApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes internal-facing applications in batches.
     *
     * @remarks
     * Applications that are referenced by office network recognition or policies cannot be deleted. References:
     * - [ListPrivateAccessApplications](~~ListPrivateAccessApplications~~): Lists internal-facing access applications in batches.
     * - [ListPrivateAccessPolices](~~ListPrivateAccessPolices~~): Lists internal-facing access policies in batches.
     *
     * @param request - BatchDeletePrivateAccessApplicationRequest
     *
     * @returns BatchDeletePrivateAccessApplicationResponse
     *
     * @param BatchDeletePrivateAccessApplicationRequest $request
     *
     * @return BatchDeletePrivateAccessApplicationResponse
     */
    public function batchDeletePrivateAccessApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchDeletePrivateAccessApplicationWithOptions($request, $runtime);
    }

    /**
     * Deletes internal network access policies in batches.
     *
     * @param request - BatchDeletePrivateAccessPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchDeletePrivateAccessPolicyResponse
     *
     * @param BatchDeletePrivateAccessPolicyRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return BatchDeletePrivateAccessPolicyResponse
     */
    public function batchDeletePrivateAccessPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        $bodyFlat = [];
        if (null !== $request->policyIds) {
            @$bodyFlat['PolicyIds'] = $request->policyIds;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BatchDeletePrivateAccessPolicy',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchDeletePrivateAccessPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes internal network access policies in batches.
     *
     * @param request - BatchDeletePrivateAccessPolicyRequest
     *
     * @returns BatchDeletePrivateAccessPolicyResponse
     *
     * @param BatchDeletePrivateAccessPolicyRequest $request
     *
     * @return BatchDeletePrivateAccessPolicyResponse
     */
    public function batchDeletePrivateAccessPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchDeletePrivateAccessPolicyWithOptions($request, $runtime);
    }

    /**
     * Cancels multiple virus scan tasks that have not yet expired in a batch. After cancellation, terminals no longer pull and execute the tasks. Scans already running on terminals are not interrupted.
     *
     * @param request - CancelVirusScanTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelVirusScanTasksResponse
     *
     * @param CancelVirusScanTasksRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CancelVirusScanTasksResponse
     */
    public function cancelVirusScanTasksWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        $bodyFlat = [];
        if (null !== $request->taskIds) {
            @$bodyFlat['TaskIds'] = $request->taskIds;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CancelVirusScanTasks',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelVirusScanTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Cancels multiple virus scan tasks that have not yet expired in a batch. After cancellation, terminals no longer pull and execute the tasks. Scans already running on terminals are not interrupted.
     *
     * @param request - CancelVirusScanTasksRequest
     *
     * @returns CancelVirusScanTasksResponse
     *
     * @param CancelVirusScanTasksRequest $request
     *
     * @return CancelVirusScanTasksResponse
     */
    public function cancelVirusScanTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelVirusScanTasksWithOptions($request, $runtime);
    }

    /**
     * Cancels multiple vulnerability scanning tasks that have not yet expired in a batch.
     *
     * @param request - CancelVulScanTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelVulScanTasksResponse
     *
     * @param CancelVulScanTasksRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CancelVulScanTasksResponse
     */
    public function cancelVulScanTasksWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        $bodyFlat = [];
        if (null !== $request->taskIds) {
            @$bodyFlat['TaskIds'] = $request->taskIds;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CancelVulScanTasks',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelVulScanTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Cancels multiple vulnerability scanning tasks that have not yet expired in a batch.
     *
     * @param request - CancelVulScanTasksRequest
     *
     * @returns CancelVulScanTasksResponse
     *
     * @param CancelVulScanTasksRequest $request
     *
     * @return CancelVulScanTasksResponse
     */
    public function cancelVulScanTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelVulScanTasksWithOptions($request, $runtime);
    }

    /**
     * Creates an approval flow under the current Alibaba Cloud account.
     *
     * @param tmpReq - CreateApprovalProcessRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateApprovalProcessResponse
     *
     * @param CreateApprovalProcessRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return CreateApprovalProcessResponse
     */
    public function createApprovalProcessWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateApprovalProcessShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->matchSchemas) {
            $request->matchSchemasShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->matchSchemas, 'MatchSchemas', 'json');
        }

        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->matchSchemasShrink) {
            @$body['MatchSchemas'] = $request->matchSchemasShrink;
        }

        if (null !== $request->processName) {
            @$body['ProcessName'] = $request->processName;
        }

        $bodyFlat = [];
        if (null !== $request->processNodes) {
            @$bodyFlat['ProcessNodes'] = $request->processNodes;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateApprovalProcess',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateApprovalProcessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an approval flow under the current Alibaba Cloud account.
     *
     * @param request - CreateApprovalProcessRequest
     *
     * @returns CreateApprovalProcessResponse
     *
     * @param CreateApprovalProcessRequest $request
     *
     * @return CreateApprovalProcessResponse
     */
    public function createApprovalProcess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createApprovalProcessWithOptions($request, $runtime);
    }

    /**
     * Create a custom identity source user for your Alibaba Cloud account.
     *
     * @param request - CreateClientUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateClientUserResponse
     *
     * @param CreateClientUserRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateClientUserResponse
     */
    public function createClientUserWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->departmentId) {
            @$query['DepartmentId'] = $request->departmentId;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->email) {
            @$query['Email'] = $request->email;
        }

        if (null !== $request->idpConfigId) {
            @$query['IdpConfigId'] = $request->idpConfigId;
        }

        if (null !== $request->mobileNumber) {
            @$query['MobileNumber'] = $request->mobileNumber;
        }

        if (null !== $request->password) {
            @$query['Password'] = $request->password;
        }

        if (null !== $request->username) {
            @$query['Username'] = $request->username;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateClientUser',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateClientUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create a custom identity source user for your Alibaba Cloud account.
     *
     * @param request - CreateClientUserRequest
     *
     * @returns CreateClientUserResponse
     *
     * @param CreateClientUserRequest $request
     *
     * @return CreateClientUserResponse
     */
    public function createClientUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createClientUserWithOptions($request, $runtime);
    }

    /**
     * Creates a connector.
     *
     * @param request - CreateConnectorRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateConnectorResponse
     *
     * @param CreateConnectorRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateConnectorResponse
     */
    public function createConnectorWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->bandwidth) {
            @$body['Bandwidth'] = $request->bandwidth;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->region) {
            @$body['Region'] = $request->region;
        }

        if (null !== $request->switchStatus) {
            @$body['SwitchStatus'] = $request->switchStatus;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateConnector',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateConnectorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a connector.
     *
     * @param request - CreateConnectorRequest
     *
     * @returns CreateConnectorResponse
     *
     * @param CreateConnectorRequest $request
     *
     * @return CreateConnectorResponse
     */
    public function createConnector($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createConnectorWithOptions($request, $runtime);
    }

    /**
     * Creates a device label.
     *
     * @param tmpReq - CreateDeviceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDeviceGroupResponse
     *
     * @param CreateDeviceGroupRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return CreateDeviceGroupResponse
     */
    public function createDeviceGroupWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateDeviceGroupShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->dynamicRule) {
            $request->dynamicRuleShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->dynamicRule, 'DynamicRule', 'json');
        }

        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->dynamicOperator) {
            @$body['DynamicOperator'] = $request->dynamicOperator;
        }

        if (null !== $request->dynamicRuleShrink) {
            @$body['DynamicRule'] = $request->dynamicRuleShrink;
        }

        if (null !== $request->groupType) {
            @$body['GroupType'] = $request->groupType;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateDeviceGroup',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDeviceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a device label.
     *
     * @param request - CreateDeviceGroupRequest
     *
     * @returns CreateDeviceGroupResponse
     *
     * @param CreateDeviceGroupRequest $request
     *
     * @return CreateDeviceGroupResponse
     */
    public function createDeviceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDeviceGroupWithOptions($request, $runtime);
    }

    /**
     * Creates a domain name list.
     *
     * @remarks
     * Creates a domain name list of a specified type (blacklist or whitelist) under the current tenant and returns the ListId of the new list. A maximum of 100 lists can be created for each list type per tenant.
     *
     * @param request - CreateDomainMetaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDomainMetaResponse
     *
     * @param CreateDomainMetaRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateDomainMetaResponse
     */
    public function createDomainMetaWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->listType) {
            @$body['ListType'] = $request->listType;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateDomainMeta',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDomainMetaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a domain name list.
     *
     * @remarks
     * Creates a domain name list of a specified type (blacklist or whitelist) under the current tenant and returns the ListId of the new list. A maximum of 100 lists can be created for each list type per tenant.
     *
     * @param request - CreateDomainMetaRequest
     *
     * @returns CreateDomainMetaResponse
     *
     * @param CreateDomainMetaRequest $request
     *
     * @return CreateDomainMetaResponse
     */
    public function createDomainMeta($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDomainMetaWithOptions($request, $runtime);
    }

    /**
     * Create dynamic routes for the current Alibaba Cloud account.
     *
     * @remarks
     * By default, you can create a maximum of 100 dynamic routes.
     *
     * @param request - CreateDynamicRouteRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDynamicRouteResponse
     *
     * @param CreateDynamicRouteRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateDynamicRouteResponse
     */
    public function createDynamicRouteWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        $bodyFlat = [];
        if (null !== $request->applicationIds) {
            @$bodyFlat['ApplicationIds'] = $request->applicationIds;
        }

        if (null !== $request->applicationType) {
            @$body['ApplicationType'] = $request->applicationType;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->dynamicRouteType) {
            @$body['DynamicRouteType'] = $request->dynamicRouteType;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->nextHop) {
            @$body['NextHop'] = $request->nextHop;
        }

        if (null !== $request->priority) {
            @$body['Priority'] = $request->priority;
        }

        if (null !== $request->regionIds) {
            @$bodyFlat['RegionIds'] = $request->regionIds;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        if (null !== $request->tagIds) {
            @$bodyFlat['TagIds'] = $request->tagIds;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateDynamicRoute',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDynamicRouteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create dynamic routes for the current Alibaba Cloud account.
     *
     * @remarks
     * By default, you can create a maximum of 100 dynamic routes.
     *
     * @param request - CreateDynamicRouteRequest
     *
     * @returns CreateDynamicRouteResponse
     *
     * @param CreateDynamicRouteRequest $request
     *
     * @return CreateDynamicRouteResponse
     */
    public function createDynamicRoute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDynamicRouteWithOptions($request, $runtime);
    }

    /**
     * Creates an enterprise acceleration policy.
     *
     * @param request - CreateEnterpriseAcceleratePolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateEnterpriseAcceleratePolicyResponse
     *
     * @param CreateEnterpriseAcceleratePolicyRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return CreateEnterpriseAcceleratePolicyResponse
     */
    public function createEnterpriseAcceleratePolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accelerationType) {
            @$body['AccelerationType'] = $request->accelerationType;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->priority) {
            @$body['Priority'] = $request->priority;
        }

        if (null !== $request->showInClient) {
            @$body['ShowInClient'] = $request->showInClient;
        }

        if (null !== $request->upstreamHost) {
            @$body['UpstreamHost'] = $request->upstreamHost;
        }

        if (null !== $request->upstreamPort) {
            @$body['UpstreamPort'] = $request->upstreamPort;
        }

        if (null !== $request->upstreamType) {
            @$body['UpstreamType'] = $request->upstreamType;
        }

        if (null !== $request->userAttributeGroup) {
            @$body['UserAttributeGroup'] = $request->userAttributeGroup;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateEnterpriseAcceleratePolicy',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateEnterpriseAcceleratePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an enterprise acceleration policy.
     *
     * @param request - CreateEnterpriseAcceleratePolicyRequest
     *
     * @returns CreateEnterpriseAcceleratePolicyResponse
     *
     * @param CreateEnterpriseAcceleratePolicyRequest $request
     *
     * @return CreateEnterpriseAcceleratePolicyResponse
     */
    public function createEnterpriseAcceleratePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEnterpriseAcceleratePolicyWithOptions($request, $runtime);
    }

    /**
     * Creates an enterprise acceleration address.
     *
     * @param request - CreateEnterpriseAccelerateTargetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateEnterpriseAccelerateTargetResponse
     *
     * @param CreateEnterpriseAccelerateTargetRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return CreateEnterpriseAccelerateTargetResponse
     */
    public function createEnterpriseAccelerateTargetWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->eapId) {
            @$body['EapId'] = $request->eapId;
        }

        $bodyFlat = [];
        if (null !== $request->target) {
            @$bodyFlat['Target'] = $request->target;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateEnterpriseAccelerateTarget',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateEnterpriseAccelerateTargetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an enterprise acceleration address.
     *
     * @param request - CreateEnterpriseAccelerateTargetRequest
     *
     * @returns CreateEnterpriseAccelerateTargetResponse
     *
     * @param CreateEnterpriseAccelerateTargetRequest $request
     *
     * @return CreateEnterpriseAccelerateTargetResponse
     */
    public function createEnterpriseAccelerateTarget($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEnterpriseAccelerateTargetWithOptions($request, $runtime);
    }

    /**
     * Creates a traffic forwarding rule.
     *
     * @param request - CreateForwardStrategyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateForwardStrategyResponse
     *
     * @param CreateForwardStrategyRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateForwardStrategyResponse
     */
    public function createForwardStrategyWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->destinationId) {
            @$body['DestinationId'] = $request->destinationId;
        }

        if (null !== $request->destinationType) {
            @$body['DestinationType'] = $request->destinationType;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->priority) {
            @$body['Priority'] = $request->priority;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateForwardStrategy',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateForwardStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a traffic forwarding rule.
     *
     * @param request - CreateForwardStrategyRequest
     *
     * @returns CreateForwardStrategyResponse
     *
     * @param CreateForwardStrategyRequest $request
     *
     * @return CreateForwardStrategyResponse
     */
    public function createForwardStrategy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createForwardStrategyWithOptions($request, $runtime);
    }

    /**
     * Creates a department for a custom identity source in the current Alibaba Cloud account.
     *
     * @param request - CreateIdpDepartmentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateIdpDepartmentResponse
     *
     * @param CreateIdpDepartmentRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateIdpDepartmentResponse
     */
    public function createIdpDepartmentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->departmentName) {
            @$query['DepartmentName'] = $request->departmentName;
        }

        if (null !== $request->idpConfigId) {
            @$query['IdpConfigId'] = $request->idpConfigId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateIdpDepartment',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateIdpDepartmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a department for a custom identity source in the current Alibaba Cloud account.
     *
     * @param request - CreateIdpDepartmentRequest
     *
     * @returns CreateIdpDepartmentResponse
     *
     * @param CreateIdpDepartmentRequest $request
     *
     * @return CreateIdpDepartmentResponse
     */
    public function createIdpDepartment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createIdpDepartmentWithOptions($request, $runtime);
    }

    /**
     * Creates a diagnostic task for internal network access.
     *
     * @param tmpReq - CreatePADiagnosisTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePADiagnosisTaskResponse
     *
     * @param CreatePADiagnosisTaskRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return CreatePADiagnosisTaskResponse
     */
    public function createPADiagnosisTaskWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreatePADiagnosisTaskShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->udpExtraConfigs) {
            $request->udpExtraConfigsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->udpExtraConfigs, 'UdpExtraConfigs', 'json');
        }

        $body = [];
        if (null !== $request->devTag) {
            @$body['DevTag'] = $request->devTag;
        }

        if (null !== $request->diagnoseType) {
            @$body['DiagnoseType'] = $request->diagnoseType;
        }

        if (null !== $request->host) {
            @$body['Host'] = $request->host;
        }

        if (null !== $request->popId) {
            @$body['PopId'] = $request->popId;
        }

        if (null !== $request->popMode) {
            @$body['PopMode'] = $request->popMode;
        }

        if (null !== $request->port) {
            @$body['Port'] = $request->port;
        }

        if (null !== $request->protocol) {
            @$body['Protocol'] = $request->protocol;
        }

        if (null !== $request->udpExtraConfigsShrink) {
            @$body['UdpExtraConfigs'] = $request->udpExtraConfigsShrink;
        }

        if (null !== $request->userGroupId) {
            @$body['UserGroupId'] = $request->userGroupId;
        }

        if (null !== $request->username) {
            @$body['Username'] = $request->username;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreatePADiagnosisTask',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreatePADiagnosisTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a diagnostic task for internal network access.
     *
     * @param request - CreatePADiagnosisTaskRequest
     *
     * @returns CreatePADiagnosisTaskResponse
     *
     * @param CreatePADiagnosisTaskRequest $request
     *
     * @return CreatePADiagnosisTaskResponse
     */
    public function createPADiagnosisTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPADiagnosisTaskWithOptions($request, $runtime);
    }

    /**
     * Creates an internal-facing access application under the current Alibaba Cloud account.
     *
     * @remarks
     * You can create up to 500 internal-facing access applications by default.
     *
     * @param tmpReq - CreatePrivateAccessApplicationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePrivateAccessApplicationResponse
     *
     * @param CreatePrivateAccessApplicationRequest $tmpReq
     * @param RuntimeOptions                        $runtime
     *
     * @return CreatePrivateAccessApplicationResponse
     */
    public function createPrivateAccessApplicationWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreatePrivateAccessApplicationShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->l7Config) {
            $request->l7ConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->l7Config, 'L7Config', 'json');
        }

        if (null !== $tmpReq->unauthorizedAccessConfig) {
            $request->unauthorizedAccessConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->unauthorizedAccessConfig, 'UnauthorizedAccessConfig', 'json');
        }

        $body = [];
        $bodyFlat = [];
        if (null !== $request->addressGroups) {
            @$bodyFlat['AddressGroups'] = $request->addressGroups;
        }

        if (null !== $request->addresses) {
            @$bodyFlat['Addresses'] = $request->addresses;
        }

        if (null !== $request->browserAccessStatus) {
            @$body['BrowserAccessStatus'] = $request->browserAccessStatus;
        }

        if (null !== $request->configMode) {
            @$body['ConfigMode'] = $request->configMode;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->l7ConfigShrink) {
            @$body['L7Config'] = $request->l7ConfigShrink;
        }

        if (null !== $request->l7ProxyDomainAutomaticPrefix) {
            @$body['L7ProxyDomainAutomaticPrefix'] = $request->l7ProxyDomainAutomaticPrefix;
        }

        if (null !== $request->l7ProxyDomainCustom) {
            @$body['L7ProxyDomainCustom'] = $request->l7ProxyDomainCustom;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->portRanges) {
            @$bodyFlat['PortRanges'] = $request->portRanges;
        }

        if (null !== $request->protocol) {
            @$body['Protocol'] = $request->protocol;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        if (null !== $request->tagIds) {
            @$bodyFlat['TagIds'] = $request->tagIds;
        }

        if (null !== $request->unauthorizedAccessConfigShrink) {
            @$body['UnauthorizedAccessConfig'] = $request->unauthorizedAccessConfigShrink;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreatePrivateAccessApplication',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreatePrivateAccessApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an internal-facing access application under the current Alibaba Cloud account.
     *
     * @remarks
     * You can create up to 500 internal-facing access applications by default.
     *
     * @param request - CreatePrivateAccessApplicationRequest
     *
     * @returns CreatePrivateAccessApplicationResponse
     *
     * @param CreatePrivateAccessApplicationRequest $request
     *
     * @return CreatePrivateAccessApplicationResponse
     */
    public function createPrivateAccessApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPrivateAccessApplicationWithOptions($request, $runtime);
    }

    /**
     * Create Private Access Policy.
     *
     * @remarks
     * By default, up to 500 private access policies can be created.
     *
     * @param request - CreatePrivateAccessPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePrivateAccessPolicyResponse
     *
     * @param CreatePrivateAccessPolicyRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreatePrivateAccessPolicyResponse
     */
    public function createPrivateAccessPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        $bodyFlat = [];
        if (null !== $request->applicationIds) {
            @$bodyFlat['ApplicationIds'] = $request->applicationIds;
        }

        if (null !== $request->applicationType) {
            @$body['ApplicationType'] = $request->applicationType;
        }

        if (null !== $request->customUserAttributes) {
            @$bodyFlat['CustomUserAttributes'] = $request->customUserAttributes;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->deviceAttributeAction) {
            @$body['DeviceAttributeAction'] = $request->deviceAttributeAction;
        }

        if (null !== $request->deviceAttributeId) {
            @$body['DeviceAttributeId'] = $request->deviceAttributeId;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->policyAction) {
            @$body['PolicyAction'] = $request->policyAction;
        }

        if (null !== $request->priority) {
            @$body['Priority'] = $request->priority;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        if (null !== $request->tagIds) {
            @$bodyFlat['TagIds'] = $request->tagIds;
        }

        if (null !== $request->triggerTemplateId) {
            @$body['TriggerTemplateId'] = $request->triggerTemplateId;
        }

        if (null !== $request->trustedProcessGroupIds) {
            @$bodyFlat['TrustedProcessGroupIds'] = $request->trustedProcessGroupIds;
        }

        if (null !== $request->trustedProcessStatus) {
            @$body['TrustedProcessStatus'] = $request->trustedProcessStatus;
        }

        if (null !== $request->trustedSoftwareIds) {
            @$bodyFlat['TrustedSoftwareIds'] = $request->trustedSoftwareIds;
        }

        if (null !== $request->userGroupIds) {
            @$bodyFlat['UserGroupIds'] = $request->userGroupIds;
        }

        if (null !== $request->userGroupMode) {
            @$body['UserGroupMode'] = $request->userGroupMode;
        }

        if (null !== $request->validFrom) {
            @$body['ValidFrom'] = $request->validFrom;
        }

        if (null !== $request->validTimeStatus) {
            @$body['ValidTimeStatus'] = $request->validTimeStatus;
        }

        if (null !== $request->validUntil) {
            @$body['ValidUntil'] = $request->validUntil;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreatePrivateAccessPolicy',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreatePrivateAccessPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create Private Access Policy.
     *
     * @remarks
     * By default, up to 500 private access policies can be created.
     *
     * @param request - CreatePrivateAccessPolicyRequest
     *
     * @returns CreatePrivateAccessPolicyResponse
     *
     * @param CreatePrivateAccessPolicyRequest $request
     *
     * @return CreatePrivateAccessPolicyResponse
     */
    public function createPrivateAccessPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPrivateAccessPolicyWithOptions($request, $runtime);
    }

    /**
     * Creates an internal-facing access tag under the current Alibaba Cloud account.
     *
     * @remarks
     * You can create up to 500 internal-facing access tags by default.
     *
     * @param request - CreatePrivateAccessTagRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePrivateAccessTagResponse
     *
     * @param CreatePrivateAccessTagRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreatePrivateAccessTagResponse
     */
    public function createPrivateAccessTagWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreatePrivateAccessTag',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreatePrivateAccessTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an internal-facing access tag under the current Alibaba Cloud account.
     *
     * @remarks
     * You can create up to 500 internal-facing access tags by default.
     *
     * @param request - CreatePrivateAccessTagRequest
     *
     * @returns CreatePrivateAccessTagResponse
     *
     * @param CreatePrivateAccessTagRequest $request
     *
     * @return CreatePrivateAccessTagResponse
     */
    public function createPrivateAccessTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPrivateAccessTagWithOptions($request, $runtime);
    }

    /**
     * Creates a software ban policy.
     *
     * @param request - CreateProhibitedPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateProhibitedPolicyResponse
     *
     * @param CreateProhibitedPolicyRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateProhibitedPolicyResponse
     */
    public function createProhibitedPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->allowReport) {
            @$body['AllowReport'] = $request->allowReport;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->enabled) {
            @$body['Enabled'] = $request->enabled;
        }

        if (null !== $request->forceKill) {
            @$body['ForceKill'] = $request->forceKill;
        }

        if (null !== $request->mainButtonTextCh) {
            @$body['MainButtonTextCh'] = $request->mainButtonTextCh;
        }

        if (null !== $request->mainButtonTextEn) {
            @$body['MainButtonTextEn'] = $request->mainButtonTextEn;
        }

        if (null !== $request->matchMode) {
            @$body['MatchMode'] = $request->matchMode;
        }

        if (null !== $request->minorButtonTextCh) {
            @$body['MinorButtonTextCh'] = $request->minorButtonTextCh;
        }

        if (null !== $request->minorButtonTextEn) {
            @$body['MinorButtonTextEn'] = $request->minorButtonTextEn;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->objectType) {
            @$body['ObjectType'] = $request->objectType;
        }

        if (null !== $request->policyType) {
            @$body['PolicyType'] = $request->policyType;
        }

        if (null !== $request->priority) {
            @$body['Priority'] = $request->priority;
        }

        if (null !== $request->promptCh) {
            @$body['PromptCh'] = $request->promptCh;
        }

        if (null !== $request->promptEn) {
            @$body['PromptEn'] = $request->promptEn;
        }

        $bodyFlat = [];
        if (null !== $request->softwareIds) {
            @$bodyFlat['SoftwareIds'] = $request->softwareIds;
        }

        if (null !== $request->tagIds) {
            @$bodyFlat['TagIds'] = $request->tagIds;
        }

        if (null !== $request->titleCh) {
            @$body['TitleCh'] = $request->titleCh;
        }

        if (null !== $request->titleEn) {
            @$body['TitleEn'] = $request->titleEn;
        }

        if (null !== $request->userGroupIds) {
            @$bodyFlat['UserGroupIds'] = $request->userGroupIds;
        }

        if (null !== $request->whitelist) {
            @$bodyFlat['Whitelist'] = $request->whitelist;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateProhibitedPolicy',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateProhibitedPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a software ban policy.
     *
     * @param request - CreateProhibitedPolicyRequest
     *
     * @returns CreateProhibitedPolicyResponse
     *
     * @param CreateProhibitedPolicyRequest $request
     *
     * @return CreateProhibitedPolicyResponse
     */
    public function createProhibitedPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createProhibitedPolicyWithOptions($request, $runtime);
    }

    /**
     * Creates a custom disabled software entry.
     *
     * @param request - CreateProhibitedSoftwareRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateProhibitedSoftwareResponse
     *
     * @param CreateProhibitedSoftwareRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateProhibitedSoftwareResponse
     */
    public function createProhibitedSoftwareWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        $bodyFlat = [];
        if (null !== $request->linuxProcesses) {
            @$bodyFlat['LinuxProcesses'] = $request->linuxProcesses;
        }

        if (null !== $request->macOSProcesses) {
            @$bodyFlat['MacOSProcesses'] = $request->macOSProcesses;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->tagIds) {
            @$bodyFlat['TagIds'] = $request->tagIds;
        }

        if (null !== $request->windowsProcesses) {
            @$bodyFlat['WindowsProcesses'] = $request->windowsProcesses;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateProhibitedSoftware',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateProhibitedSoftwareResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a custom disabled software entry.
     *
     * @param request - CreateProhibitedSoftwareRequest
     *
     * @returns CreateProhibitedSoftwareResponse
     *
     * @param CreateProhibitedSoftwareRequest $request
     *
     * @return CreateProhibitedSoftwareResponse
     */
    public function createProhibitedSoftware($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createProhibitedSoftwareWithOptions($request, $runtime);
    }

    /**
     * Creates a custom disabled software tag.
     *
     * @param request - CreateProhibitedTagRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateProhibitedTagResponse
     *
     * @param CreateProhibitedTagRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateProhibitedTagResponse
     */
    public function createProhibitedTagWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateProhibitedTag',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateProhibitedTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a custom disabled software tag.
     *
     * @param request - CreateProhibitedTagRequest
     *
     * @returns CreateProhibitedTagResponse
     *
     * @param CreateProhibitedTagRequest $request
     *
     * @return CreateProhibitedTagResponse
     */
    public function createProhibitedTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createProhibitedTagWithOptions($request, $runtime);
    }

    /**
     * Create a device registration policy for your Alibaba Cloud account.
     *
     * @param tmpReq - CreateRegistrationPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateRegistrationPolicyResponse
     *
     * @param CreateRegistrationPolicyRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateRegistrationPolicyResponse
     */
    public function createRegistrationPolicyWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateRegistrationPolicyShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->companyLimitCount) {
            $request->companyLimitCountShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->companyLimitCount, 'CompanyLimitCount', 'json');
        }

        if (null !== $tmpReq->personalLimitCount) {
            $request->personalLimitCountShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->personalLimitCount, 'PersonalLimitCount', 'json');
        }

        $body = [];
        if (null !== $request->companyLimitCountShrink) {
            @$body['CompanyLimitCount'] = $request->companyLimitCountShrink;
        }

        if (null !== $request->companyLimitType) {
            @$body['CompanyLimitType'] = $request->companyLimitType;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->matchMode) {
            @$body['MatchMode'] = $request->matchMode;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->personalLimitCountShrink) {
            @$body['PersonalLimitCount'] = $request->personalLimitCountShrink;
        }

        if (null !== $request->personalLimitType) {
            @$body['PersonalLimitType'] = $request->personalLimitType;
        }

        if (null !== $request->priority) {
            @$body['Priority'] = $request->priority;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        $bodyFlat = [];
        if (null !== $request->userGroupIds) {
            @$bodyFlat['UserGroupIds'] = $request->userGroupIds;
        }

        if (null !== $request->whitelist) {
            @$bodyFlat['Whitelist'] = $request->whitelist;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateRegistrationPolicy',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateRegistrationPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create a device registration policy for your Alibaba Cloud account.
     *
     * @param request - CreateRegistrationPolicyRequest
     *
     * @returns CreateRegistrationPolicyResponse
     *
     * @param CreateRegistrationPolicyRequest $request
     *
     * @return CreateRegistrationPolicyResponse
     */
    public function createRegistrationPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRegistrationPolicyWithOptions($request, $runtime);
    }

    /**
     * Creates a user group for your Alibaba Cloud account.
     *
     * @remarks
     * You can create up to 500 user groups.
     *
     * @param request - CreateUserGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateUserGroupResponse
     *
     * @param CreateUserGroupRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateUserGroupResponse
     */
    public function createUserGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        $bodyFlat = [];
        if (null !== $request->attributes) {
            @$bodyFlat['Attributes'] = $request->attributes;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateUserGroup',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateUserGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a user group for your Alibaba Cloud account.
     *
     * @remarks
     * You can create up to 500 user groups.
     *
     * @param request - CreateUserGroupRequest
     *
     * @returns CreateUserGroupResponse
     *
     * @param CreateUserGroupRequest $request
     *
     * @return CreateUserGroupResponse
     */
    public function createUserGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUserGroupWithOptions($request, $runtime);
    }

    /**
     * Creates a scheduled virus scan policy that automatically sends scan tasks to user terminal devices within the effective scope based on the configured cycle.
     *
     * @param request - CreateVirusScanScheduledStrategyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateVirusScanScheduledStrategyResponse
     *
     * @param CreateVirusScanScheduledStrategyRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return CreateVirusScanScheduledStrategyResponse
     */
    public function createVirusScanScheduledStrategyWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->highRiskOperation) {
            @$body['HighRiskOperation'] = $request->highRiskOperation;
        }

        if (null !== $request->lowRiskOperation) {
            @$body['LowRiskOperation'] = $request->lowRiskOperation;
        }

        if (null !== $request->matchMode) {
            @$body['MatchMode'] = $request->matchMode;
        }

        if (null !== $request->maxCpuUsage) {
            @$body['MaxCpuUsage'] = $request->maxCpuUsage;
        }

        if (null !== $request->midRiskOperation) {
            @$body['MidRiskOperation'] = $request->midRiskOperation;
        }

        if (null !== $request->performanceMode) {
            @$body['PerformanceMode'] = $request->performanceMode;
        }

        if (null !== $request->priority) {
            @$body['Priority'] = $request->priority;
        }

        if (null !== $request->scanBeginTime) {
            @$body['ScanBeginTime'] = $request->scanBeginTime;
        }

        if (null !== $request->scanEndTime) {
            @$body['ScanEndTime'] = $request->scanEndTime;
        }

        if (null !== $request->scanFrequency) {
            @$body['ScanFrequency'] = $request->scanFrequency;
        }

        if (null !== $request->scanInterval) {
            @$body['ScanInterval'] = $request->scanInterval;
        }

        if (null !== $request->scanMode) {
            @$body['ScanMode'] = $request->scanMode;
        }

        $bodyFlat = [];
        if (null !== $request->scanPath) {
            @$bodyFlat['ScanPath'] = $request->scanPath;
        }

        if (null !== $request->scanTargets) {
            @$bodyFlat['ScanTargets'] = $request->scanTargets;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        if (null !== $request->strategyDescription) {
            @$body['StrategyDescription'] = $request->strategyDescription;
        }

        if (null !== $request->strategyName) {
            @$body['StrategyName'] = $request->strategyName;
        }

        if (null !== $request->userGroupIds) {
            @$bodyFlat['UserGroupIds'] = $request->userGroupIds;
        }

        if (null !== $request->whitelist) {
            @$bodyFlat['Whitelist'] = $request->whitelist;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateVirusScanScheduledStrategy',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateVirusScanScheduledStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a scheduled virus scan policy that automatically sends scan tasks to user terminal devices within the effective scope based on the configured cycle.
     *
     * @param request - CreateVirusScanScheduledStrategyRequest
     *
     * @returns CreateVirusScanScheduledStrategyResponse
     *
     * @param CreateVirusScanScheduledStrategyRequest $request
     *
     * @return CreateVirusScanScheduledStrategyResponse
     */
    public function createVirusScanScheduledStrategy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVirusScanScheduledStrategyWithOptions($request, $runtime);
    }

    /**
     * Creates an instant virus scan task and delivers it to user endpoint devices within the effective scope. The task takes effect immediately after creation. A maximum of 10 tasks can be created per Alibaba Cloud account per minute.
     *
     * @param request - CreateVirusScanTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateVirusScanTaskResponse
     *
     * @param CreateVirusScanTaskRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateVirusScanTaskResponse
     */
    public function createVirusScanTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->highRiskOperation) {
            @$body['HighRiskOperation'] = $request->highRiskOperation;
        }

        if (null !== $request->lowRiskOperation) {
            @$body['LowRiskOperation'] = $request->lowRiskOperation;
        }

        if (null !== $request->matchMode) {
            @$body['MatchMode'] = $request->matchMode;
        }

        if (null !== $request->maxCpuUsage) {
            @$body['MaxCpuUsage'] = $request->maxCpuUsage;
        }

        if (null !== $request->midRiskOperation) {
            @$body['MidRiskOperation'] = $request->midRiskOperation;
        }

        if (null !== $request->performanceMode) {
            @$body['PerformanceMode'] = $request->performanceMode;
        }

        if (null !== $request->scanMode) {
            @$body['ScanMode'] = $request->scanMode;
        }

        $bodyFlat = [];
        if (null !== $request->scanPath) {
            @$bodyFlat['ScanPath'] = $request->scanPath;
        }

        if (null !== $request->scanTargets) {
            @$bodyFlat['ScanTargets'] = $request->scanTargets;
        }

        if (null !== $request->taskDescription) {
            @$body['TaskDescription'] = $request->taskDescription;
        }

        if (null !== $request->userGroupIds) {
            @$bodyFlat['UserGroupIds'] = $request->userGroupIds;
        }

        if (null !== $request->whitelist) {
            @$bodyFlat['Whitelist'] = $request->whitelist;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateVirusScanTask',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateVirusScanTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an instant virus scan task and delivers it to user endpoint devices within the effective scope. The task takes effect immediately after creation. A maximum of 10 tasks can be created per Alibaba Cloud account per minute.
     *
     * @param request - CreateVirusScanTaskRequest
     *
     * @returns CreateVirusScanTaskResponse
     *
     * @param CreateVirusScanTaskRequest $request
     *
     * @return CreateVirusScanTaskResponse
     */
    public function createVirusScanTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVirusScanTaskWithOptions($request, $runtime);
    }

    /**
     * Creates a scheduled vulnerability scanning policy that automatically sends vulnerability scanning tasks to user endpoint devices within the effective scope based on the configured cycle.
     *
     * @param request - CreateVulScanScheduledStrategyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateVulScanScheduledStrategyResponse
     *
     * @param CreateVulScanScheduledStrategyRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return CreateVulScanScheduledStrategyResponse
     */
    public function createVulScanScheduledStrategyWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->matchMode) {
            @$body['MatchMode'] = $request->matchMode;
        }

        if (null !== $request->priority) {
            @$body['Priority'] = $request->priority;
        }

        if (null !== $request->scanBeginTime) {
            @$body['ScanBeginTime'] = $request->scanBeginTime;
        }

        if (null !== $request->scanEndTime) {
            @$body['ScanEndTime'] = $request->scanEndTime;
        }

        if (null !== $request->scanFrequency) {
            @$body['ScanFrequency'] = $request->scanFrequency;
        }

        if (null !== $request->scanInterval) {
            @$body['ScanInterval'] = $request->scanInterval;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        if (null !== $request->strategyDescription) {
            @$body['StrategyDescription'] = $request->strategyDescription;
        }

        if (null !== $request->strategyName) {
            @$body['StrategyName'] = $request->strategyName;
        }

        $bodyFlat = [];
        if (null !== $request->userGroupIds) {
            @$bodyFlat['UserGroupIds'] = $request->userGroupIds;
        }

        if (null !== $request->whitelist) {
            @$bodyFlat['Whitelist'] = $request->whitelist;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateVulScanScheduledStrategy',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateVulScanScheduledStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a scheduled vulnerability scanning policy that automatically sends vulnerability scanning tasks to user endpoint devices within the effective scope based on the configured cycle.
     *
     * @param request - CreateVulScanScheduledStrategyRequest
     *
     * @returns CreateVulScanScheduledStrategyResponse
     *
     * @param CreateVulScanScheduledStrategyRequest $request
     *
     * @return CreateVulScanScheduledStrategyResponse
     */
    public function createVulScanScheduledStrategy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVulScanScheduledStrategyWithOptions($request, $runtime);
    }

    /**
     * Creates an instant vulnerability scanning task and delivers it to user endpoint devices within the effective scope.
     *
     * @param request - CreateVulScanTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateVulScanTaskResponse
     *
     * @param CreateVulScanTaskRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateVulScanTaskResponse
     */
    public function createVulScanTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->endTimestamp) {
            @$body['EndTimestamp'] = $request->endTimestamp;
        }

        if (null !== $request->matchMode) {
            @$body['MatchMode'] = $request->matchMode;
        }

        if (null !== $request->taskDescription) {
            @$body['TaskDescription'] = $request->taskDescription;
        }

        if (null !== $request->taskName) {
            @$body['TaskName'] = $request->taskName;
        }

        $bodyFlat = [];
        if (null !== $request->userGroupIds) {
            @$bodyFlat['UserGroupIds'] = $request->userGroupIds;
        }

        if (null !== $request->whitelist) {
            @$bodyFlat['Whitelist'] = $request->whitelist;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateVulScanTask',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateVulScanTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an instant vulnerability scanning task and delivers it to user endpoint devices within the effective scope.
     *
     * @param request - CreateVulScanTaskRequest
     *
     * @returns CreateVulScanTaskResponse
     *
     * @param CreateVulScanTaskRequest $request
     *
     * @return CreateVulScanTaskResponse
     */
    public function createVulScanTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVulScanTaskWithOptions($request, $runtime);
    }

    /**
     * Creates a vulnerability fix task that delivers the patch for a specified vulnerability to user endpoint devices and performs the installation.
     *
     * @param tmpReq - CreateVulnerabilityFixTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateVulnerabilityFixTaskResponse
     *
     * @param CreateVulnerabilityFixTaskRequest $tmpReq
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateVulnerabilityFixTaskResponse
     */
    public function createVulnerabilityFixTaskWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateVulnerabilityFixTaskShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->wuyingVulFixConfig) {
            $request->wuyingVulFixConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->wuyingVulFixConfig, 'WuyingVulFixConfig', 'json');
        }

        $body = [];
        $bodyFlat = [];
        if (null !== $request->devTags) {
            @$bodyFlat['DevTags'] = $request->devTags;
        }

        if (null !== $request->fixMode) {
            @$body['FixMode'] = $request->fixMode;
        }

        if (null !== $request->maxDownloadSpeed) {
            @$body['MaxDownloadSpeed'] = $request->maxDownloadSpeed;
        }

        if (null !== $request->updateId) {
            @$body['UpdateId'] = $request->updateId;
        }

        if (null !== $request->wuyingVulFixConfigShrink) {
            @$body['WuyingVulFixConfig'] = $request->wuyingVulFixConfigShrink;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateVulnerabilityFixTask',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateVulnerabilityFixTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a vulnerability fix task that delivers the patch for a specified vulnerability to user endpoint devices and performs the installation.
     *
     * @param request - CreateVulnerabilityFixTaskRequest
     *
     * @returns CreateVulnerabilityFixTaskResponse
     *
     * @param CreateVulnerabilityFixTaskRequest $request
     *
     * @return CreateVulnerabilityFixTaskResponse
     */
    public function createVulnerabilityFixTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVulnerabilityFixTaskWithOptions($request, $runtime);
    }

    /**
     * Retrieves the invisible watermark transparent background image for web watermarks, screen watermarks, and App watermarks.
     *
     * @param tmpReq - CreateWmBaseImageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateWmBaseImageResponse
     *
     * @param CreateWmBaseImageRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return CreateWmBaseImageResponse
     */
    public function createWmBaseImageWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateWmBaseImageShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->imageControl) {
            $request->imageControlShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->imageControl, 'ImageControl', 'json');
        }

        $query = [];
        if (null !== $request->comment) {
            @$query['comment'] = $request->comment;
        }

        $body = [];
        if (null !== $request->height) {
            @$body['Height'] = $request->height;
        }

        if (null !== $request->imageControlShrink) {
            @$body['ImageControl'] = $request->imageControlShrink;
        }

        if (null !== $request->opacity) {
            @$body['Opacity'] = $request->opacity;
        }

        if (null !== $request->scale) {
            @$body['Scale'] = $request->scale;
        }

        if (null !== $request->width) {
            @$body['Width'] = $request->width;
        }

        if (null !== $request->wmInfoBytesB64) {
            @$body['WmInfoBytesB64'] = $request->wmInfoBytesB64;
        }

        if (null !== $request->wmInfoSize) {
            @$body['WmInfoSize'] = $request->wmInfoSize;
        }

        if (null !== $request->wmInfoUint) {
            @$body['WmInfoUint'] = $request->wmInfoUint;
        }

        if (null !== $request->wmType) {
            @$body['WmType'] = $request->wmType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateWmBaseImage',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateWmBaseImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the invisible watermark transparent background image for web watermarks, screen watermarks, and App watermarks.
     *
     * @param request - CreateWmBaseImageRequest
     *
     * @returns CreateWmBaseImageResponse
     *
     * @param CreateWmBaseImageRequest $request
     *
     * @return CreateWmBaseImageResponse
     */
    public function createWmBaseImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createWmBaseImageWithOptions($request, $runtime);
    }

    /**
     * Creates a digital watermarking embedding task.
     *
     * @remarks
     * You can create a maximum of 500 user groups by default.
     *
     * @param tmpReq - CreateWmEmbedTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateWmEmbedTaskResponse
     *
     * @param CreateWmEmbedTaskRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return CreateWmEmbedTaskResponse
     */
    public function createWmEmbedTaskWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateWmEmbedTaskShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->audioControl) {
            $request->audioControlShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->audioControl, 'AudioControl', 'json');
        }

        if (null !== $tmpReq->csvControl) {
            $request->csvControlShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->csvControl, 'CsvControl', 'json');
        }

        if (null !== $tmpReq->documentControl) {
            $request->documentControlShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->documentControl, 'DocumentControl', 'json');
        }

        if (null !== $tmpReq->imageControl) {
            $request->imageControlShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->imageControl, 'ImageControl', 'json');
        }

        if (null !== $tmpReq->videoControl) {
            $request->videoControlShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->videoControl, 'VideoControl', 'json');
        }

        $body = [];
        if (null !== $request->audioControlShrink) {
            @$body['AudioControl'] = $request->audioControlShrink;
        }

        if (null !== $request->csvControlShrink) {
            @$body['CsvControl'] = $request->csvControlShrink;
        }

        if (null !== $request->documentControlShrink) {
            @$body['DocumentControl'] = $request->documentControlShrink;
        }

        if (null !== $request->fileUrl) {
            @$body['FileUrl'] = $request->fileUrl;
        }

        if (null !== $request->filename) {
            @$body['Filename'] = $request->filename;
        }

        if (null !== $request->imageControlShrink) {
            @$body['ImageControl'] = $request->imageControlShrink;
        }

        if (null !== $request->imageEmbedJpegQuality) {
            @$body['ImageEmbedJpegQuality'] = $request->imageEmbedJpegQuality;
        }

        if (null !== $request->imageEmbedLevel) {
            @$body['ImageEmbedLevel'] = $request->imageEmbedLevel;
        }

        if (null !== $request->invisibleEnable) {
            @$body['InvisibleEnable'] = $request->invisibleEnable;
        }

        if (null !== $request->videoBitrate) {
            @$body['VideoBitrate'] = $request->videoBitrate;
        }

        if (null !== $request->videoControlShrink) {
            @$body['VideoControl'] = $request->videoControlShrink;
        }

        if (null !== $request->videoIsLong) {
            @$body['VideoIsLong'] = $request->videoIsLong;
        }

        if (null !== $request->wmInfoBytesB64) {
            @$body['WmInfoBytesB64'] = $request->wmInfoBytesB64;
        }

        if (null !== $request->wmInfoSize) {
            @$body['WmInfoSize'] = $request->wmInfoSize;
        }

        if (null !== $request->wmInfoUint) {
            @$body['WmInfoUint'] = $request->wmInfoUint;
        }

        if (null !== $request->wmType) {
            @$body['WmType'] = $request->wmType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateWmEmbedTask',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateWmEmbedTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a digital watermarking embedding task.
     *
     * @remarks
     * You can create a maximum of 500 user groups by default.
     *
     * @param request - CreateWmEmbedTaskRequest
     *
     * @returns CreateWmEmbedTaskResponse
     *
     * @param CreateWmEmbedTaskRequest $request
     *
     * @return CreateWmEmbedTaskResponse
     */
    public function createWmEmbedTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createWmEmbedTaskWithOptions($request, $runtime);
    }

    /**
     * Creates a digital watermarking extraction task.
     *
     * @param tmpReq - CreateWmExtractTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateWmExtractTaskResponse
     *
     * @param CreateWmExtractTaskRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return CreateWmExtractTaskResponse
     */
    public function createWmExtractTaskWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateWmExtractTaskShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->csvControl) {
            $request->csvControlShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->csvControl, 'CsvControl', 'json');
        }

        if (null !== $tmpReq->imageExtractParamsOpenApi) {
            $request->imageExtractParamsOpenApiShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->imageExtractParamsOpenApi, 'ImageExtractParamsOpenApi', 'json');
        }

        $query = [];
        if (null !== $request->csvControlShrink) {
            @$query['CsvControl'] = $request->csvControlShrink;
        }

        if (null !== $request->imageExtractParamsOpenApiShrink) {
            @$query['ImageExtractParamsOpenApi'] = $request->imageExtractParamsOpenApiShrink;
        }

        if (null !== $request->isClientEmbed) {
            @$query['IsClientEmbed'] = $request->isClientEmbed;
        }

        $body = [];
        if (null !== $request->documentIsCapture) {
            @$body['DocumentIsCapture'] = $request->documentIsCapture;
        }

        if (null !== $request->fileUrl) {
            @$body['FileUrl'] = $request->fileUrl;
        }

        if (null !== $request->filename) {
            @$body['Filename'] = $request->filename;
        }

        if (null !== $request->videoIsLong) {
            @$body['VideoIsLong'] = $request->videoIsLong;
        }

        if (null !== $request->videoSpeed) {
            @$body['VideoSpeed'] = $request->videoSpeed;
        }

        if (null !== $request->wmInfoSize) {
            @$body['WmInfoSize'] = $request->wmInfoSize;
        }

        if (null !== $request->wmType) {
            @$body['WmType'] = $request->wmType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateWmExtractTask',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateWmExtractTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a digital watermarking extraction task.
     *
     * @param request - CreateWmExtractTaskRequest
     *
     * @returns CreateWmExtractTaskResponse
     *
     * @param CreateWmExtractTaskRequest $request
     *
     * @return CreateWmExtractTaskResponse
     */
    public function createWmExtractTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createWmExtractTaskWithOptions($request, $runtime);
    }

    /**
     * Creates a mapping from string-format watermark information to digital-format watermark information.
     *
     * @param request - CreateWmInfoMappingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateWmInfoMappingResponse
     *
     * @param CreateWmInfoMappingRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateWmInfoMappingResponse
     */
    public function createWmInfoMappingWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->wmInfoBytesB64) {
            @$body['WmInfoBytesB64'] = $request->wmInfoBytesB64;
        }

        if (null !== $request->wmInfoSize) {
            @$body['WmInfoSize'] = $request->wmInfoSize;
        }

        if (null !== $request->wmType) {
            @$body['WmType'] = $request->wmType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateWmInfoMapping',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateWmInfoMappingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a mapping from string-format watermark information to digital-format watermark information.
     *
     * @param request - CreateWmInfoMappingRequest
     *
     * @returns CreateWmInfoMappingResponse
     *
     * @param CreateWmInfoMappingRequest $request
     *
     * @return CreateWmInfoMappingResponse
     */
    public function createWmInfoMapping($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createWmInfoMappingWithOptions($request, $runtime);
    }

    /**
     * Deletes approval processes in batches from your Alibaba Cloud account.
     *
     * @param request - DeleteApprovalProcessesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteApprovalProcessesResponse
     *
     * @param DeleteApprovalProcessesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteApprovalProcessesResponse
     */
    public function deleteApprovalProcessesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        $bodyFlat = [];
        if (null !== $request->processIds) {
            @$bodyFlat['ProcessIds'] = $request->processIds;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteApprovalProcesses',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteApprovalProcessesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes approval processes in batches from your Alibaba Cloud account.
     *
     * @param request - DeleteApprovalProcessesRequest
     *
     * @returns DeleteApprovalProcessesResponse
     *
     * @param DeleteApprovalProcessesRequest $request
     *
     * @return DeleteApprovalProcessesResponse
     */
    public function deleteApprovalProcesses($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteApprovalProcessesWithOptions($request, $runtime);
    }

    /**
     * Delete a specified user from your Alibaba Cloud account\\"s custom identity source.
     *
     * @param request - DeleteClientUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteClientUserResponse
     *
     * @param DeleteClientUserRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteClientUserResponse
     */
    public function deleteClientUserWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteClientUser',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteClientUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete a specified user from your Alibaba Cloud account\\"s custom identity source.
     *
     * @param request - DeleteClientUserRequest
     *
     * @returns DeleteClientUserResponse
     *
     * @param DeleteClientUserRequest $request
     *
     * @return DeleteClientUserResponse
     */
    public function deleteClientUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteClientUserWithOptions($request, $runtime);
    }

    /**
     * Deletes a connector.
     *
     * @param request - DeleteConnectorRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteConnectorResponse
     *
     * @param DeleteConnectorRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteConnectorResponse
     */
    public function deleteConnectorWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->connectorId) {
            @$body['ConnectorId'] = $request->connectorId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteConnector',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteConnectorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a connector.
     *
     * @param request - DeleteConnectorRequest
     *
     * @returns DeleteConnectorResponse
     *
     * @param DeleteConnectorRequest $request
     *
     * @return DeleteConnectorResponse
     */
    public function deleteConnector($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteConnectorWithOptions($request, $runtime);
    }

    /**
     * Deletes a ConnectorClient under the current Alibaba Cloud account.
     *
     * @param request - DeleteConnectorClientRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteConnectorClientResponse
     *
     * @param DeleteConnectorClientRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteConnectorClientResponse
     */
    public function deleteConnectorClientWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->connectorId) {
            @$body['ConnectorId'] = $request->connectorId;
        }

        if (null !== $request->devTag) {
            @$body['DevTag'] = $request->devTag;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteConnectorClient',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteConnectorClientResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a ConnectorClient under the current Alibaba Cloud account.
     *
     * @param request - DeleteConnectorClientRequest
     *
     * @returns DeleteConnectorClientResponse
     *
     * @param DeleteConnectorClientRequest $request
     *
     * @return DeleteConnectorClientResponse
     */
    public function deleteConnectorClient($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteConnectorClientWithOptions($request, $runtime);
    }

    /**
     * Deletes instance tags in batches.
     *
     * @param request - DeleteDeviceGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDeviceGroupsResponse
     *
     * @param DeleteDeviceGroupsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteDeviceGroupsResponse
     */
    public function deleteDeviceGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        $bodyFlat = [];
        if (null !== $request->deviceGroupIds) {
            @$bodyFlat['DeviceGroupIds'] = $request->deviceGroupIds;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteDeviceGroups',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDeviceGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes instance tags in batches.
     *
     * @param request - DeleteDeviceGroupsRequest
     *
     * @returns DeleteDeviceGroupsResponse
     *
     * @param DeleteDeviceGroupsRequest $request
     *
     * @return DeleteDeviceGroupsResponse
     */
    public function deleteDeviceGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDeviceGroupsWithOptions($request, $runtime);
    }

    /**
     * Deletes detection records of a specified vulnerability from specified user endpoint devices in batches.
     *
     * @param request - DeleteDevicesVulnerabilityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDevicesVulnerabilityResponse
     *
     * @param DeleteDevicesVulnerabilityRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteDevicesVulnerabilityResponse
     */
    public function deleteDevicesVulnerabilityWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        $bodyFlat = [];
        if (null !== $request->devTags) {
            @$bodyFlat['DevTags'] = $request->devTags;
        }

        if (null !== $request->updateId) {
            @$body['UpdateId'] = $request->updateId;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteDevicesVulnerability',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDevicesVulnerabilityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes detection records of a specified vulnerability from specified user endpoint devices in batches.
     *
     * @param request - DeleteDevicesVulnerabilityRequest
     *
     * @returns DeleteDevicesVulnerabilityResponse
     *
     * @param DeleteDevicesVulnerabilityRequest $request
     *
     * @return DeleteDevicesVulnerabilityResponse
     */
    public function deleteDevicesVulnerability($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDevicesVulnerabilityWithOptions($request, $runtime);
    }

    /**
     * Deletes a domain name list.
     *
     * @remarks
     * Deletes a specified domain name list under the current tenant. Before deletion, the system checks whether any domain name policy references the list. If a reference exists, the deletion is rejected.
     *
     * @param request - DeleteDomainMetaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDomainMetaResponse
     *
     * @param DeleteDomainMetaRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteDomainMetaResponse
     */
    public function deleteDomainMetaWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->listId) {
            @$body['ListId'] = $request->listId;
        }

        if (null !== $request->listType) {
            @$body['ListType'] = $request->listType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteDomainMeta',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDomainMetaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a domain name list.
     *
     * @remarks
     * Deletes a specified domain name list under the current tenant. Before deletion, the system checks whether any domain name policy references the list. If a reference exists, the deletion is rejected.
     *
     * @param request - DeleteDomainMetaRequest
     *
     * @returns DeleteDomainMetaResponse
     *
     * @param DeleteDomainMetaRequest $request
     *
     * @return DeleteDomainMetaResponse
     */
    public function deleteDomainMeta($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDomainMetaWithOptions($request, $runtime);
    }

    /**
     * Delete a dynamic route from your current Alibaba Cloud account.
     *
     * @param request - DeleteDynamicRouteRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDynamicRouteResponse
     *
     * @param DeleteDynamicRouteRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteDynamicRouteResponse
     */
    public function deleteDynamicRouteWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dynamicRouteId) {
            @$query['DynamicRouteId'] = $request->dynamicRouteId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDynamicRoute',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDynamicRouteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete a dynamic route from your current Alibaba Cloud account.
     *
     * @param request - DeleteDynamicRouteRequest
     *
     * @returns DeleteDynamicRouteResponse
     *
     * @param DeleteDynamicRouteRequest $request
     *
     * @return DeleteDynamicRouteResponse
     */
    public function deleteDynamicRoute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDynamicRouteWithOptions($request, $runtime);
    }

    /**
     * Deletes an enterprise acceleration policy.
     *
     * @param request - DeleteEnterpriseAcceleratePolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteEnterpriseAcceleratePolicyResponse
     *
     * @param DeleteEnterpriseAcceleratePolicyRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DeleteEnterpriseAcceleratePolicyResponse
     */
    public function deleteEnterpriseAcceleratePolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->eapId) {
            @$body['EapId'] = $request->eapId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteEnterpriseAcceleratePolicy',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteEnterpriseAcceleratePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an enterprise acceleration policy.
     *
     * @param request - DeleteEnterpriseAcceleratePolicyRequest
     *
     * @returns DeleteEnterpriseAcceleratePolicyResponse
     *
     * @param DeleteEnterpriseAcceleratePolicyRequest $request
     *
     * @return DeleteEnterpriseAcceleratePolicyResponse
     */
    public function deleteEnterpriseAcceleratePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEnterpriseAcceleratePolicyWithOptions($request, $runtime);
    }

    /**
     * Deletes enterprise acceleration addresses.
     *
     * @param request - DeleteEnterpriseAccelerateTargetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteEnterpriseAccelerateTargetResponse
     *
     * @param DeleteEnterpriseAccelerateTargetRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DeleteEnterpriseAccelerateTargetResponse
     */
    public function deleteEnterpriseAccelerateTargetWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->eapId) {
            @$body['EapId'] = $request->eapId;
        }

        $bodyFlat = [];
        if (null !== $request->target) {
            @$bodyFlat['Target'] = $request->target;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteEnterpriseAccelerateTarget',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteEnterpriseAccelerateTargetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes enterprise acceleration addresses.
     *
     * @param request - DeleteEnterpriseAccelerateTargetRequest
     *
     * @returns DeleteEnterpriseAccelerateTargetResponse
     *
     * @param DeleteEnterpriseAccelerateTargetRequest $request
     *
     * @return DeleteEnterpriseAccelerateTargetResponse
     */
    public function deleteEnterpriseAccelerateTarget($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEnterpriseAccelerateTargetWithOptions($request, $runtime);
    }

    /**
     * Deletes a forwarding rule.
     *
     * @param request - DeleteForwardStrategyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteForwardStrategyResponse
     *
     * @param DeleteForwardStrategyRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteForwardStrategyResponse
     */
    public function deleteForwardStrategyWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->forwardId) {
            @$body['ForwardId'] = $request->forwardId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteForwardStrategy',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteForwardStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a forwarding rule.
     *
     * @param request - DeleteForwardStrategyRequest
     *
     * @returns DeleteForwardStrategyResponse
     *
     * @param DeleteForwardStrategyRequest $request
     *
     * @return DeleteForwardStrategyResponse
     */
    public function deleteForwardStrategy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteForwardStrategyWithOptions($request, $runtime);
    }

    /**
     * Delete a department from a custom identity provider in your Alibaba Cloud account.
     *
     * @param request - DeleteIdpDepartmentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteIdpDepartmentResponse
     *
     * @param DeleteIdpDepartmentRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteIdpDepartmentResponse
     */
    public function deleteIdpDepartmentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->departmentId) {
            @$query['DepartmentId'] = $request->departmentId;
        }

        if (null !== $request->idpConfigId) {
            @$query['IdpConfigId'] = $request->idpConfigId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteIdpDepartment',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteIdpDepartmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete a department from a custom identity provider in your Alibaba Cloud account.
     *
     * @param request - DeleteIdpDepartmentRequest
     *
     * @returns DeleteIdpDepartmentResponse
     *
     * @param DeleteIdpDepartmentRequest $request
     *
     * @return DeleteIdpDepartmentResponse
     */
    public function deleteIdpDepartment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteIdpDepartmentWithOptions($request, $runtime);
    }

    /**
     * Deletes a user\\"s One-Time Password (OTP) configuration.
     *
     * @param request - DeleteOtpConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteOtpConfigResponse
     *
     * @param DeleteOtpConfigRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteOtpConfigResponse
     */
    public function deleteOtpConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->username) {
            @$body['Username'] = $request->username;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteOtpConfig',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteOtpConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a user\\"s One-Time Password (OTP) configuration.
     *
     * @param request - DeleteOtpConfigRequest
     *
     * @returns DeleteOtpConfigResponse
     *
     * @param DeleteOtpConfigRequest $request
     *
     * @return DeleteOtpConfigResponse
     */
    public function deleteOtpConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteOtpConfigWithOptions($request, $runtime);
    }

    /**
     * Deletes an internal network access application from your Alibaba Cloud account.
     *
     * @remarks
     * You cannot delete an application if it is referenced by an office zone or a policy. For more information, see:
     * - [ListPrivateAccessApplications](~~ListPrivateAccessApplications~~): Lists internal network access applications.
     * - [ListPrivateAccessPolicies](~~ListPrivateAccessPolices~~): Lists internal network access policies.
     *
     * @param request - DeletePrivateAccessApplicationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePrivateAccessApplicationResponse
     *
     * @param DeletePrivateAccessApplicationRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DeletePrivateAccessApplicationResponse
     */
    public function deletePrivateAccessApplicationWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->applicationId) {
            @$body['ApplicationId'] = $request->applicationId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeletePrivateAccessApplication',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeletePrivateAccessApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an internal network access application from your Alibaba Cloud account.
     *
     * @remarks
     * You cannot delete an application if it is referenced by an office zone or a policy. For more information, see:
     * - [ListPrivateAccessApplications](~~ListPrivateAccessApplications~~): Lists internal network access applications.
     * - [ListPrivateAccessPolicies](~~ListPrivateAccessPolices~~): Lists internal network access policies.
     *
     * @param request - DeletePrivateAccessApplicationRequest
     *
     * @returns DeletePrivateAccessApplicationResponse
     *
     * @param DeletePrivateAccessApplicationRequest $request
     *
     * @return DeletePrivateAccessApplicationResponse
     */
    public function deletePrivateAccessApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePrivateAccessApplicationWithOptions($request, $runtime);
    }

    /**
     * Deletes a private network access policy for the current Alibaba Cloud account.
     *
     * @param request - DeletePrivateAccessPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePrivateAccessPolicyResponse
     *
     * @param DeletePrivateAccessPolicyRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeletePrivateAccessPolicyResponse
     */
    public function deletePrivateAccessPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->policyId) {
            @$body['PolicyId'] = $request->policyId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeletePrivateAccessPolicy',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeletePrivateAccessPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a private network access policy for the current Alibaba Cloud account.
     *
     * @param request - DeletePrivateAccessPolicyRequest
     *
     * @returns DeletePrivateAccessPolicyResponse
     *
     * @param DeletePrivateAccessPolicyRequest $request
     *
     * @return DeletePrivateAccessPolicyResponse
     */
    public function deletePrivateAccessPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePrivateAccessPolicyWithOptions($request, $runtime);
    }

    /**
     * Deletes an internal access tag from the current Alibaba Cloud account.
     *
     * @remarks
     * Deletion is not allowed when the tag is referenced by applications, office networks, or policies. References:
     * - [ListPrivateAccessApplications](~~ListPrivateAccessApplications~~): Lists internal access applications.
     * - [ListPrivateAccessTags](~~ListPrivateAccessTags~~): Lists internal access tags.
     * - [ListPrivateAccessPolices](~~ListPrivateAccessPolices~~): Lists internal access policies.
     *
     * @param request - DeletePrivateAccessTagRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePrivateAccessTagResponse
     *
     * @param DeletePrivateAccessTagRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeletePrivateAccessTagResponse
     */
    public function deletePrivateAccessTagWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->tagId) {
            @$body['TagId'] = $request->tagId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeletePrivateAccessTag',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeletePrivateAccessTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an internal access tag from the current Alibaba Cloud account.
     *
     * @remarks
     * Deletion is not allowed when the tag is referenced by applications, office networks, or policies. References:
     * - [ListPrivateAccessApplications](~~ListPrivateAccessApplications~~): Lists internal access applications.
     * - [ListPrivateAccessTags](~~ListPrivateAccessTags~~): Lists internal access tags.
     * - [ListPrivateAccessPolices](~~ListPrivateAccessPolices~~): Lists internal access policies.
     *
     * @param request - DeletePrivateAccessTagRequest
     *
     * @returns DeletePrivateAccessTagResponse
     *
     * @param DeletePrivateAccessTagRequest $request
     *
     * @return DeletePrivateAccessTagResponse
     */
    public function deletePrivateAccessTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePrivateAccessTagWithOptions($request, $runtime);
    }

    /**
     * Deletes software prohibition policies in batches.
     *
     * @param request - DeleteProhibitedPoliciesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteProhibitedPoliciesResponse
     *
     * @param DeleteProhibitedPoliciesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteProhibitedPoliciesResponse
     */
    public function deleteProhibitedPoliciesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        $bodyFlat = [];
        if (null !== $request->policyIds) {
            @$bodyFlat['PolicyIds'] = $request->policyIds;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteProhibitedPolicies',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteProhibitedPoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes software prohibition policies in batches.
     *
     * @param request - DeleteProhibitedPoliciesRequest
     *
     * @returns DeleteProhibitedPoliciesResponse
     *
     * @param DeleteProhibitedPoliciesRequest $request
     *
     * @return DeleteProhibitedPoliciesResponse
     */
    public function deleteProhibitedPolicies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteProhibitedPoliciesWithOptions($request, $runtime);
    }

    /**
     * Deletes custom prohibited software in batches.
     *
     * @param request - DeleteProhibitedSoftwareRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteProhibitedSoftwareResponse
     *
     * @param DeleteProhibitedSoftwareRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteProhibitedSoftwareResponse
     */
    public function deleteProhibitedSoftwareWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        $bodyFlat = [];
        if (null !== $request->softwareIds) {
            @$bodyFlat['SoftwareIds'] = $request->softwareIds;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteProhibitedSoftware',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteProhibitedSoftwareResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes custom prohibited software in batches.
     *
     * @param request - DeleteProhibitedSoftwareRequest
     *
     * @returns DeleteProhibitedSoftwareResponse
     *
     * @param DeleteProhibitedSoftwareRequest $request
     *
     * @return DeleteProhibitedSoftwareResponse
     */
    public function deleteProhibitedSoftware($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteProhibitedSoftwareWithOptions($request, $runtime);
    }

    /**
     * Deletes custom prohibited software labels in batches.
     *
     * @param request - DeleteProhibitedTagsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteProhibitedTagsResponse
     *
     * @param DeleteProhibitedTagsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteProhibitedTagsResponse
     */
    public function deleteProhibitedTagsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        $bodyFlat = [];
        if (null !== $request->tagIds) {
            @$bodyFlat['TagIds'] = $request->tagIds;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteProhibitedTags',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteProhibitedTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes custom prohibited software labels in batches.
     *
     * @param request - DeleteProhibitedTagsRequest
     *
     * @returns DeleteProhibitedTagsResponse
     *
     * @param DeleteProhibitedTagsRequest $request
     *
     * @return DeleteProhibitedTagsResponse
     */
    public function deleteProhibitedTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteProhibitedTagsWithOptions($request, $runtime);
    }

    /**
     * Batch delete device registration policies under your Alibaba Cloud account.
     *
     * @param request - DeleteRegistrationPoliciesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteRegistrationPoliciesResponse
     *
     * @param DeleteRegistrationPoliciesRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteRegistrationPoliciesResponse
     */
    public function deleteRegistrationPoliciesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        $bodyFlat = [];
        if (null !== $request->policyIds) {
            @$bodyFlat['PolicyIds'] = $request->policyIds;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteRegistrationPolicies',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteRegistrationPoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Batch delete device registration policies under your Alibaba Cloud account.
     *
     * @param request - DeleteRegistrationPoliciesRequest
     *
     * @returns DeleteRegistrationPoliciesResponse
     *
     * @param DeleteRegistrationPoliciesRequest $request
     *
     * @return DeleteRegistrationPoliciesResponse
     */
    public function deleteRegistrationPolicies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRegistrationPoliciesWithOptions($request, $runtime);
    }

    /**
     * Deletes user endpoint devices in batches.
     *
     * @remarks
     * You can delete up to 100 devices at a time. Each device must be in a non-online status. If some device IDs in the specified collection do not meet the status requirement, only the devices that meet the requirement are deleted, and the operation still returns a success response.
     *
     * @param request - DeleteUserDevicesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteUserDevicesResponse
     *
     * @param DeleteUserDevicesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteUserDevicesResponse
     */
    public function deleteUserDevicesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        $bodyFlat = [];
        if (null !== $request->deviceTags) {
            @$bodyFlat['DeviceTags'] = $request->deviceTags;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteUserDevices',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteUserDevicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes user endpoint devices in batches.
     *
     * @remarks
     * You can delete up to 100 devices at a time. Each device must be in a non-online status. If some device IDs in the specified collection do not meet the status requirement, only the devices that meet the requirement are deleted, and the operation still returns a success response.
     *
     * @param request - DeleteUserDevicesRequest
     *
     * @returns DeleteUserDevicesResponse
     *
     * @param DeleteUserDevicesRequest $request
     *
     * @return DeleteUserDevicesResponse
     */
    public function deleteUserDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUserDevicesWithOptions($request, $runtime);
    }

    /**
     * Delete a user group in your Alibaba Cloud account.
     *
     * @remarks
     * For more information, see:
     * - [ListPolicesForUserGroup](~~ListPolicesForUserGroup~~): Query policies attached to a user group.
     *
     * @param request - DeleteUserGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteUserGroupResponse
     *
     * @param DeleteUserGroupRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteUserGroupResponse
     */
    public function deleteUserGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->userGroupId) {
            @$body['UserGroupId'] = $request->userGroupId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteUserGroup',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteUserGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete a user group in your Alibaba Cloud account.
     *
     * @remarks
     * For more information, see:
     * - [ListPolicesForUserGroup](~~ListPolicesForUserGroup~~): Query policies attached to a user group.
     *
     * @param request - DeleteUserGroupRequest
     *
     * @returns DeleteUserGroupResponse
     *
     * @param DeleteUserGroupRequest $request
     *
     * @return DeleteUserGroupResponse
     */
    public function deleteUserGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUserGroupWithOptions($request, $runtime);
    }

    /**
     * Deletes a virus file record that failed to be handled. Only records with a handling action of Fail can be deleted. This operation does not delete the actual file on the user\\"s endpoint device.
     *
     * @param request - DeleteVirusFileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteVirusFileResponse
     *
     * @param DeleteVirusFileRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteVirusFileResponse
     */
    public function deleteVirusFileWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->devTag) {
            @$body['DevTag'] = $request->devTag;
        }

        if (null !== $request->fileMd5) {
            @$body['FileMd5'] = $request->fileMd5;
        }

        if (null !== $request->filePath) {
            @$body['FilePath'] = $request->filePath;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteVirusFile',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteVirusFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a virus file record that failed to be handled. Only records with a handling action of Fail can be deleted. This operation does not delete the actual file on the user\\"s endpoint device.
     *
     * @param request - DeleteVirusFileRequest
     *
     * @returns DeleteVirusFileResponse
     *
     * @param DeleteVirusFileRequest $request
     *
     * @return DeleteVirusFileResponse
     */
    public function deleteVirusFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVirusFileWithOptions($request, $runtime);
    }

    /**
     * Deletes virus scheduled scan policies in batches. After deletion, no new scan tasks are triggered, but scan tasks that have already been dispatched are not affected. If any policy ID does not belong to the current Alibaba Cloud account, the entire deletion fails.
     *
     * @param request - DeleteVirusScanScheduledStrategiesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteVirusScanScheduledStrategiesResponse
     *
     * @param DeleteVirusScanScheduledStrategiesRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DeleteVirusScanScheduledStrategiesResponse
     */
    public function deleteVirusScanScheduledStrategiesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        $bodyFlat = [];
        if (null !== $request->strategyIds) {
            @$bodyFlat['StrategyIds'] = $request->strategyIds;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteVirusScanScheduledStrategies',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteVirusScanScheduledStrategiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes virus scheduled scan policies in batches. After deletion, no new scan tasks are triggered, but scan tasks that have already been dispatched are not affected. If any policy ID does not belong to the current Alibaba Cloud account, the entire deletion fails.
     *
     * @param request - DeleteVirusScanScheduledStrategiesRequest
     *
     * @returns DeleteVirusScanScheduledStrategiesResponse
     *
     * @param DeleteVirusScanScheduledStrategiesRequest $request
     *
     * @return DeleteVirusScanScheduledStrategiesResponse
     */
    public function deleteVirusScanScheduledStrategies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVirusScanScheduledStrategiesWithOptions($request, $runtime);
    }

    /**
     * Deletes a specified scheduled vulnerability scanning policy.
     *
     * @param request - DeleteVulScanScheduledStrategyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteVulScanScheduledStrategyResponse
     *
     * @param DeleteVulScanScheduledStrategyRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DeleteVulScanScheduledStrategyResponse
     */
    public function deleteVulScanScheduledStrategyWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->strategyId) {
            @$body['StrategyId'] = $request->strategyId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteVulScanScheduledStrategy',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteVulScanScheduledStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a specified scheduled vulnerability scanning policy.
     *
     * @param request - DeleteVulScanScheduledStrategyRequest
     *
     * @returns DeleteVulScanScheduledStrategyResponse
     *
     * @param DeleteVulScanScheduledStrategyRequest $request
     *
     * @return DeleteVulScanScheduledStrategyResponse
     */
    public function deleteVulScanScheduledStrategy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVulScanScheduledStrategyWithOptions($request, $runtime);
    }

    /**
     * Detaches private network access applications from a Connector in your Alibaba Cloud account.
     *
     * @deprecated openAPI DetachApplication2Connector is deprecated, please use csas::2023-01-20::ModifyForwardStrategy instead
     *
     * @param tmpReq - DetachApplication2ConnectorRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetachApplication2ConnectorResponse
     *
     * @param DetachApplication2ConnectorRequest $tmpReq
     * @param RuntimeOptions                     $runtime
     *
     * @return DetachApplication2ConnectorResponse
     */
    public function detachApplication2ConnectorWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DetachApplication2ConnectorShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->applicationIds) {
            $request->applicationIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->applicationIds, 'ApplicationIds', 'json');
        }

        $body = [];
        if (null !== $request->applicationIdsShrink) {
            @$body['ApplicationIds'] = $request->applicationIdsShrink;
        }

        if (null !== $request->connectorId) {
            @$body['ConnectorId'] = $request->connectorId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DetachApplication2Connector',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetachApplication2ConnectorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Detaches private network access applications from a Connector in your Alibaba Cloud account.
     *
     * @deprecated openAPI DetachApplication2Connector is deprecated, please use csas::2023-01-20::ModifyForwardStrategy instead
     *
     * @param request - DetachApplication2ConnectorRequest
     *
     * @returns DetachApplication2ConnectorResponse
     *
     * @param DetachApplication2ConnectorRequest $request
     *
     * @return DetachApplication2ConnectorResponse
     */
    public function detachApplication2Connector($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachApplication2ConnectorWithOptions($request, $runtime);
    }

    /**
     * Detach a business policy from an approval process.
     *
     * @param request - DetachPolicy2ApprovalProcessRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetachPolicy2ApprovalProcessResponse
     *
     * @param DetachPolicy2ApprovalProcessRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DetachPolicy2ApprovalProcessResponse
     */
    public function detachPolicy2ApprovalProcessWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->policyId) {
            @$body['PolicyId'] = $request->policyId;
        }

        if (null !== $request->policyType) {
            @$body['PolicyType'] = $request->policyType;
        }

        if (null !== $request->processId) {
            @$body['ProcessId'] = $request->processId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DetachPolicy2ApprovalProcess',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetachPolicy2ApprovalProcessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Detach a business policy from an approval process.
     *
     * @param request - DetachPolicy2ApprovalProcessRequest
     *
     * @returns DetachPolicy2ApprovalProcessResponse
     *
     * @param DetachPolicy2ApprovalProcessRequest $request
     *
     * @return DetachPolicy2ApprovalProcessResponse
     */
    public function detachPolicy2ApprovalProcess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachPolicy2ApprovalProcessWithOptions($request, $runtime);
    }

    /**
     * Disables an enterprise acceleration policy.
     *
     * @param request - DisableEnterpriseAcceleratePolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableEnterpriseAcceleratePolicyResponse
     *
     * @param DisableEnterpriseAcceleratePolicyRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DisableEnterpriseAcceleratePolicyResponse
     */
    public function disableEnterpriseAcceleratePolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->eapId) {
            @$body['EapId'] = $request->eapId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DisableEnterpriseAcceleratePolicy',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableEnterpriseAcceleratePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables an enterprise acceleration policy.
     *
     * @param request - DisableEnterpriseAcceleratePolicyRequest
     *
     * @returns DisableEnterpriseAcceleratePolicyResponse
     *
     * @param DisableEnterpriseAcceleratePolicyRequest $request
     *
     * @return DisableEnterpriseAcceleratePolicyResponse
     */
    public function disableEnterpriseAcceleratePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableEnterpriseAcceleratePolicyWithOptions($request, $runtime);
    }

    /**
     * Enables an enterprise acceleration policy.
     *
     * @param request - EnableEnterpriseAcceleratePolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableEnterpriseAcceleratePolicyResponse
     *
     * @param EnableEnterpriseAcceleratePolicyRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return EnableEnterpriseAcceleratePolicyResponse
     */
    public function enableEnterpriseAcceleratePolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->eapId) {
            @$body['EapId'] = $request->eapId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'EnableEnterpriseAcceleratePolicy',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableEnterpriseAcceleratePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables an enterprise acceleration policy.
     *
     * @param request - EnableEnterpriseAcceleratePolicyRequest
     *
     * @returns EnableEnterpriseAcceleratePolicyResponse
     *
     * @param EnableEnterpriseAcceleratePolicyRequest $request
     *
     * @return EnableEnterpriseAcceleratePolicyResponse
     */
    public function enableEnterpriseAcceleratePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableEnterpriseAcceleratePolicyWithOptions($request, $runtime);
    }

    /**
     * Export a list of user terminal devices to an Excel file.
     *
     * @param request - ExportUserDevicesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExportUserDevicesResponse
     *
     * @param ExportUserDevicesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ExportUserDevicesResponse
     */
    public function exportUserDevicesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        $bodyFlat = [];
        if (null !== $request->appStatuses) {
            @$bodyFlat['AppStatuses'] = $request->appStatuses;
        }

        if (null !== $request->department) {
            @$body['Department'] = $request->department;
        }

        if (null !== $request->deviceBelong) {
            @$body['DeviceBelong'] = $request->deviceBelong;
        }

        if (null !== $request->deviceStatuses) {
            @$bodyFlat['DeviceStatuses'] = $request->deviceStatuses;
        }

        if (null !== $request->deviceTags) {
            @$bodyFlat['DeviceTags'] = $request->deviceTags;
        }

        if (null !== $request->deviceTypes) {
            @$bodyFlat['DeviceTypes'] = $request->deviceTypes;
        }

        if (null !== $request->dlpStatuses) {
            @$bodyFlat['DlpStatuses'] = $request->dlpStatuses;
        }

        if (null !== $request->hostname) {
            @$body['Hostname'] = $request->hostname;
        }

        if (null !== $request->iaStatuses) {
            @$bodyFlat['IaStatuses'] = $request->iaStatuses;
        }

        if (null !== $request->mac) {
            @$body['Mac'] = $request->mac;
        }

        if (null !== $request->nacStatuses) {
            @$bodyFlat['NacStatuses'] = $request->nacStatuses;
        }

        if (null !== $request->paStatuses) {
            @$bodyFlat['PaStatuses'] = $request->paStatuses;
        }

        if (null !== $request->saseUserId) {
            @$body['SaseUserId'] = $request->saseUserId;
        }

        if (null !== $request->sharingStatus) {
            @$body['SharingStatus'] = $request->sharingStatus;
        }

        if (null !== $request->username) {
            @$body['Username'] = $request->username;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExportUserDevices',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ExportUserDevicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Export a list of user terminal devices to an Excel file.
     *
     * @param request - ExportUserDevicesRequest
     *
     * @returns ExportUserDevicesResponse
     *
     * @param ExportUserDevicesRequest $request
     *
     * @return ExportUserDevicesResponse
     */
    public function exportUserDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportUserDevicesWithOptions($request, $runtime);
    }

    /**
     * Queries the identity provider configuration enabled for your Alibaba Cloud account.
     *
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetActiveIdpConfigResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return GetActiveIdpConfigResponse
     */
    public function getActiveIdpConfigWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'GetActiveIdpConfig',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetActiveIdpConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the identity provider configuration enabled for your Alibaba Cloud account.
     *
     * @returns GetActiveIdpConfigResponse
     *
     * @return GetActiveIdpConfigResponse
     */
    public function getActiveIdpConfig()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getActiveIdpConfigWithOptions($runtime);
    }

    /**
     * Queries the real-time antivirus defense policy of the current Alibaba Cloud account.
     *
     * @param request - GetAntiVirusRealTimeDefenceStrategyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAntiVirusRealTimeDefenceStrategyResponse
     *
     * @param GetAntiVirusRealTimeDefenceStrategyRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return GetAntiVirusRealTimeDefenceStrategyResponse
     */
    public function getAntiVirusRealTimeDefenceStrategyWithOptions($request, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'GetAntiVirusRealTimeDefenceStrategy',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAntiVirusRealTimeDefenceStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the real-time antivirus defense policy of the current Alibaba Cloud account.
     *
     * @param request - GetAntiVirusRealTimeDefenceStrategyRequest
     *
     * @returns GetAntiVirusRealTimeDefenceStrategyResponse
     *
     * @param GetAntiVirusRealTimeDefenceStrategyRequest $request
     *
     * @return GetAntiVirusRealTimeDefenceStrategyResponse
     */
    public function getAntiVirusRealTimeDefenceStrategy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAntiVirusRealTimeDefenceStrategyWithOptions($request, $runtime);
    }

    /**
     * Queries the details of an approval instance under the current Alibaba Cloud account.
     *
     * @param request - GetApprovalRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetApprovalResponse
     *
     * @param GetApprovalRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetApprovalResponse
     */
    public function getApprovalWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetApproval',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetApprovalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of an approval instance under the current Alibaba Cloud account.
     *
     * @param request - GetApprovalRequest
     *
     * @returns GetApprovalResponse
     *
     * @param GetApprovalRequest $request
     *
     * @return GetApprovalResponse
     */
    public function getApproval($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getApprovalWithOptions($request, $runtime);
    }

    /**
     * Queries the details of an approval process under the current Alibaba Cloud account.
     *
     * @param request - GetApprovalProcessRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetApprovalProcessResponse
     *
     * @param GetApprovalProcessRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetApprovalProcessResponse
     */
    public function getApprovalProcessWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetApprovalProcess',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetApprovalProcessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of an approval process under the current Alibaba Cloud account.
     *
     * @param request - GetApprovalProcessRequest
     *
     * @returns GetApprovalProcessResponse
     *
     * @param GetApprovalProcessRequest $request
     *
     * @return GetApprovalProcessResponse
     */
    public function getApprovalProcess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getApprovalProcessWithOptions($request, $runtime);
    }

    /**
     * Retrieves the details of an approval template for your Alibaba Cloud account.
     *
     * @param request - GetApprovalSchemaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetApprovalSchemaResponse
     *
     * @param GetApprovalSchemaRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetApprovalSchemaResponse
     */
    public function getApprovalSchemaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetApprovalSchema',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetApprovalSchemaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the details of an approval template for your Alibaba Cloud account.
     *
     * @param request - GetApprovalSchemaRequest
     *
     * @returns GetApprovalSchemaResponse
     *
     * @param GetApprovalSchemaRequest $request
     *
     * @return GetApprovalSchemaResponse
     */
    public function getApprovalSchema($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getApprovalSchemaWithOptions($request, $runtime);
    }

    /**
     * Queries the details of the auto-start and anti-uninstall policy under the current Alibaba Cloud account.
     *
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetBootAndAntiUninstallPolicyResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return GetBootAndAntiUninstallPolicyResponse
     */
    public function getBootAndAntiUninstallPolicyWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'GetBootAndAntiUninstallPolicy',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetBootAndAntiUninstallPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of the auto-start and anti-uninstall policy under the current Alibaba Cloud account.
     *
     * @returns GetBootAndAntiUninstallPolicyResponse
     *
     * @return GetBootAndAntiUninstallPolicyResponse
     */
    public function getBootAndAntiUninstallPolicy()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBootAndAntiUninstallPolicyWithOptions($runtime);
    }

    /**
     * Retrieves the details of a user from a custom identity source in your Alibaba Cloud account.
     *
     * @param request - GetClientUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetClientUserResponse
     *
     * @param GetClientUserRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetClientUserResponse
     */
    public function getClientUserWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetClientUser',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetClientUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the details of a user from a custom identity source in your Alibaba Cloud account.
     *
     * @param request - GetClientUserRequest
     *
     * @returns GetClientUserResponse
     *
     * @param GetClientUserRequest $request
     *
     * @return GetClientUserResponse
     */
    public function getClientUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getClientUserWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a connector.
     *
     * @param request - GetConnectorRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetConnectorResponse
     *
     * @param GetConnectorRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetConnectorResponse
     */
    public function getConnectorWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetConnector',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetConnectorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a connector.
     *
     * @param request - GetConnectorRequest
     *
     * @returns GetConnectorResponse
     *
     * @param GetConnectorRequest $request
     *
     * @return GetConnectorResponse
     */
    public function getConnector($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getConnectorWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a ConnectorClient.
     *
     * @param request - GetConnectorClientRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetConnectorClientResponse
     *
     * @param GetConnectorClientRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetConnectorClientResponse
     */
    public function getConnectorClientWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetConnectorClient',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetConnectorClientResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a ConnectorClient.
     *
     * @param request - GetConnectorClientRequest
     *
     * @returns GetConnectorClientResponse
     *
     * @param GetConnectorClientRequest $request
     *
     * @return GetConnectorClientResponse
     */
    public function getConnectorClient($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getConnectorClientWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a specified device label.
     *
     * @param request - GetDeviceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDeviceGroupResponse
     *
     * @param GetDeviceGroupRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetDeviceGroupResponse
     */
    public function getDeviceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deviceGroupId) {
            @$query['DeviceGroupId'] = $request->deviceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDeviceGroup',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDeviceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a specified device label.
     *
     * @param request - GetDeviceGroupRequest
     *
     * @returns GetDeviceGroupResponse
     *
     * @param GetDeviceGroupRequest $request
     *
     * @return GetDeviceGroupResponse
     */
    public function getDeviceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDeviceGroupWithOptions($request, $runtime);
    }

    /**
     * Queries the online time distribution of a specified terminal device on a specified date, aggregated by minute.
     *
     * @param request - GetDeviceOnlineHeatmapRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDeviceOnlineHeatmapResponse
     *
     * @param GetDeviceOnlineHeatmapRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetDeviceOnlineHeatmapResponse
     */
    public function getDeviceOnlineHeatmapWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->date) {
            @$query['Date'] = $request->date;
        }

        if (null !== $request->devTag) {
            @$query['DevTag'] = $request->devTag;
        }

        if (null !== $request->saseUserId) {
            @$query['SaseUserId'] = $request->saseUserId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDeviceOnlineHeatmap',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDeviceOnlineHeatmapResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the online time distribution of a specified terminal device on a specified date, aggregated by minute.
     *
     * @param request - GetDeviceOnlineHeatmapRequest
     *
     * @returns GetDeviceOnlineHeatmapResponse
     *
     * @param GetDeviceOnlineHeatmapRequest $request
     *
     * @return GetDeviceOnlineHeatmapResponse
     */
    public function getDeviceOnlineHeatmap($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDeviceOnlineHeatmapWithOptions($request, $runtime);
    }

    /**
     * Retrieves details about a dynamic route in your Alibaba Cloud account.
     *
     * @param request - GetDynamicRouteRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDynamicRouteResponse
     *
     * @param GetDynamicRouteRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetDynamicRouteResponse
     */
    public function getDynamicRouteWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDynamicRoute',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDynamicRouteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves details about a dynamic route in your Alibaba Cloud account.
     *
     * @param request - GetDynamicRouteRequest
     *
     * @returns GetDynamicRouteResponse
     *
     * @param GetDynamicRouteRequest $request
     *
     * @return GetDynamicRouteResponse
     */
    public function getDynamicRoute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDynamicRouteWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a forwarding rule.
     *
     * @remarks
     * Creates a domain name list of a specified type (blacklist/whitelist) under the current tenant and returns the ListId of the new list. You can create up to 100 lists of each type per tenant.
     *
     * @param request - GetForwardStrategyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetForwardStrategyResponse
     *
     * @param GetForwardStrategyRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetForwardStrategyResponse
     */
    public function getForwardStrategyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetForwardStrategy',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetForwardStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a forwarding rule.
     *
     * @remarks
     * Creates a domain name list of a specified type (blacklist/whitelist) under the current tenant and returns the ListId of the new list. You can create up to 100 lists of each type per tenant.
     *
     * @param request - GetForwardStrategyRequest
     *
     * @returns GetForwardStrategyResponse
     *
     * @param GetForwardStrategyRequest $request
     *
     * @return GetForwardStrategyResponse
     */
    public function getForwardStrategy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getForwardStrategyWithOptions($request, $runtime);
    }

    /**
     * Retrieve the configuration details of a specified identity provider for your Alibaba Cloud account.
     *
     * @param request - GetIdpConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetIdpConfigResponse
     *
     * @param GetIdpConfigRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetIdpConfigResponse
     */
    public function getIdpConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetIdpConfig',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetIdpConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieve the configuration details of a specified identity provider for your Alibaba Cloud account.
     *
     * @param request - GetIdpConfigRequest
     *
     * @returns GetIdpConfigResponse
     *
     * @param GetIdpConfigRequest $request
     *
     * @return GetIdpConfigResponse
     */
    public function getIdpConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getIdpConfigWithOptions($request, $runtime);
    }

    /**
     * Retrieves the phone number whitelist for visitor admission SMS logon.
     *
     * @remarks
     * Retrieves all phone numbers in the whitelist.
     *
     * @param request - GetNacPortalSmsPhoneWhitelistRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetNacPortalSmsPhoneWhitelistResponse
     *
     * @param GetNacPortalSmsPhoneWhitelistRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return GetNacPortalSmsPhoneWhitelistResponse
     */
    public function getNacPortalSmsPhoneWhitelistWithOptions($request, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'GetNacPortalSmsPhoneWhitelist',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetNacPortalSmsPhoneWhitelistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the phone number whitelist for visitor admission SMS logon.
     *
     * @remarks
     * Retrieves all phone numbers in the whitelist.
     *
     * @param request - GetNacPortalSmsPhoneWhitelistRequest
     *
     * @returns GetNacPortalSmsPhoneWhitelistResponse
     *
     * @param GetNacPortalSmsPhoneWhitelistRequest $request
     *
     * @return GetNacPortalSmsPhoneWhitelistResponse
     */
    public function getNacPortalSmsPhoneWhitelist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNacPortalSmsPhoneWhitelistWithOptions($request, $runtime);
    }

    /**
     * Retrieves the details of a private access diagnostic task.
     *
     * @param request - GetPADiagnosisTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPADiagnosisTaskResponse
     *
     * @param GetPADiagnosisTaskRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetPADiagnosisTaskResponse
     */
    public function getPADiagnosisTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetPADiagnosisTask',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetPADiagnosisTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the details of a private access diagnostic task.
     *
     * @param request - GetPADiagnosisTaskRequest
     *
     * @returns GetPADiagnosisTaskResponse
     *
     * @param GetPADiagnosisTaskRequest $request
     *
     * @return GetPADiagnosisTaskResponse
     */
    public function getPADiagnosisTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPADiagnosisTaskWithOptions($request, $runtime);
    }

    /**
     * Queries the details of an internal-facing access application under the current Alibaba Cloud account.
     *
     * @param request - GetPrivateAccessApplicationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPrivateAccessApplicationResponse
     *
     * @param GetPrivateAccessApplicationRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetPrivateAccessApplicationResponse
     */
    public function getPrivateAccessApplicationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetPrivateAccessApplication',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetPrivateAccessApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of an internal-facing access application under the current Alibaba Cloud account.
     *
     * @param request - GetPrivateAccessApplicationRequest
     *
     * @returns GetPrivateAccessApplicationResponse
     *
     * @param GetPrivateAccessApplicationRequest $request
     *
     * @return GetPrivateAccessApplicationResponse
     */
    public function getPrivateAccessApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPrivateAccessApplicationWithOptions($request, $runtime);
    }

    /**
     * Query Intranet Access Policy Details.
     *
     * @param request - GetPrivateAccessPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPrivateAccessPolicyResponse
     *
     * @param GetPrivateAccessPolicyRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetPrivateAccessPolicyResponse
     */
    public function getPrivateAccessPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetPrivateAccessPolicy',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetPrivateAccessPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Intranet Access Policy Details.
     *
     * @param request - GetPrivateAccessPolicyRequest
     *
     * @returns GetPrivateAccessPolicyResponse
     *
     * @param GetPrivateAccessPolicyRequest $request
     *
     * @return GetPrivateAccessPolicyResponse
     */
    public function getPrivateAccessPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPrivateAccessPolicyWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a specified software prohibition policy.
     *
     * @param request - GetProhibitedPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetProhibitedPolicyResponse
     *
     * @param GetProhibitedPolicyRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetProhibitedPolicyResponse
     */
    public function getProhibitedPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetProhibitedPolicy',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetProhibitedPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a specified software prohibition policy.
     *
     * @param request - GetProhibitedPolicyRequest
     *
     * @returns GetProhibitedPolicyResponse
     *
     * @param GetProhibitedPolicyRequest $request
     *
     * @return GetProhibitedPolicyResponse
     */
    public function getProhibitedPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getProhibitedPolicyWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a specified prohibited software.
     *
     * @param tmpReq - GetProhibitedSoftwareRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetProhibitedSoftwareResponse
     *
     * @param GetProhibitedSoftwareRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return GetProhibitedSoftwareResponse
     */
    public function getProhibitedSoftwareWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GetProhibitedSoftwareShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->softwareId) {
            $request->softwareIdShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->softwareId, 'SoftwareId', 'json');
        }

        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetProhibitedSoftware',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetProhibitedSoftwareResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a specified prohibited software.
     *
     * @param request - GetProhibitedSoftwareRequest
     *
     * @returns GetProhibitedSoftwareResponse
     *
     * @param GetProhibitedSoftwareRequest $request
     *
     * @return GetProhibitedSoftwareResponse
     */
    public function getProhibitedSoftware($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getProhibitedSoftwareWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a device registration policy within the current Alibaba Cloud account.
     *
     * @param request - GetRegistrationPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRegistrationPolicyResponse
     *
     * @param GetRegistrationPolicyRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetRegistrationPolicyResponse
     */
    public function getRegistrationPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetRegistrationPolicy',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetRegistrationPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a device registration policy within the current Alibaba Cloud account.
     *
     * @param request - GetRegistrationPolicyRequest
     *
     * @returns GetRegistrationPolicyResponse
     *
     * @param GetRegistrationPolicyRequest $request
     *
     * @return GetRegistrationPolicyResponse
     */
    public function getRegistrationPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRegistrationPolicyWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a user endpoint device under the current Alibaba Cloud account.
     *
     * @param request - GetUserDeviceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUserDeviceResponse
     *
     * @param GetUserDeviceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetUserDeviceResponse
     */
    public function getUserDeviceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetUserDevice',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetUserDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a user endpoint device under the current Alibaba Cloud account.
     *
     * @param request - GetUserDeviceRequest
     *
     * @returns GetUserDeviceResponse
     *
     * @param GetUserDeviceRequest $request
     *
     * @return GetUserDeviceResponse
     */
    public function getUserDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserDeviceWithOptions($request, $runtime);
    }

    /**
     * Queries the workload usage trends of a specified endpoint device.
     *
     * @param request - GetUserDeviceWorkloadTrendRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUserDeviceWorkloadTrendResponse
     *
     * @param GetUserDeviceWorkloadTrendRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetUserDeviceWorkloadTrendResponse
     */
    public function getUserDeviceWorkloadTrendWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deviceTag) {
            @$query['DeviceTag'] = $request->deviceTag;
        }

        if (null !== $request->from) {
            @$query['From'] = $request->from;
        }

        if (null !== $request->to) {
            @$query['To'] = $request->to;
        }

        if (null !== $request->workloadType) {
            @$query['WorkloadType'] = $request->workloadType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetUserDeviceWorkloadTrend',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetUserDeviceWorkloadTrendResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the workload usage trends of a specified endpoint device.
     *
     * @param request - GetUserDeviceWorkloadTrendRequest
     *
     * @returns GetUserDeviceWorkloadTrendResponse
     *
     * @param GetUserDeviceWorkloadTrendRequest $request
     *
     * @return GetUserDeviceWorkloadTrendResponse
     */
    public function getUserDeviceWorkloadTrend($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserDeviceWorkloadTrendWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a user group in the current Alibaba Cloud account.
     *
     * @param request - GetUserGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUserGroupResponse
     *
     * @param GetUserGroupRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetUserGroupResponse
     */
    public function getUserGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetUserGroup',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetUserGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a user group in the current Alibaba Cloud account.
     *
     * @param request - GetUserGroupRequest
     *
     * @returns GetUserGroupResponse
     *
     * @param GetUserGroupRequest $request
     *
     * @return GetUserGroupResponse
     */
    public function getUserGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserGroupWithOptions($request, $runtime);
    }

    /**
     * Queries the global anti-virus configuration of the current Alibaba Cloud account, including the virus file upload switch and upload limits. If the current Alibaba Cloud account does not have its own configuration record, the default configurations are returned.
     *
     * @param request - GetVirusScanGlobalConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetVirusScanGlobalConfigResponse
     *
     * @param GetVirusScanGlobalConfigRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetVirusScanGlobalConfigResponse
     */
    public function getVirusScanGlobalConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'GetVirusScanGlobalConfig',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetVirusScanGlobalConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the global anti-virus configuration of the current Alibaba Cloud account, including the virus file upload switch and upload limits. If the current Alibaba Cloud account does not have its own configuration record, the default configurations are returned.
     *
     * @param request - GetVirusScanGlobalConfigRequest
     *
     * @returns GetVirusScanGlobalConfigResponse
     *
     * @param GetVirusScanGlobalConfigRequest $request
     *
     * @return GetVirusScanGlobalConfigResponse
     */
    public function getVirusScanGlobalConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVirusScanGlobalConfigWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a specified scheduled virus scan policy.
     *
     * @param request - GetVirusScanScheduledStrategyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetVirusScanScheduledStrategyResponse
     *
     * @param GetVirusScanScheduledStrategyRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return GetVirusScanScheduledStrategyResponse
     */
    public function getVirusScanScheduledStrategyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetVirusScanScheduledStrategy',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetVirusScanScheduledStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a specified scheduled virus scan policy.
     *
     * @param request - GetVirusScanScheduledStrategyRequest
     *
     * @returns GetVirusScanScheduledStrategyResponse
     *
     * @param GetVirusScanScheduledStrategyRequest $request
     *
     * @return GetVirusScanScheduledStrategyResponse
     */
    public function getVirusScanScheduledStrategy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVirusScanScheduledStrategyWithOptions($request, $runtime);
    }

    /**
     * Queries the global configuration of vulnerability scanning for the current Alibaba Cloud account.
     *
     * @param request - GetVulScanGlobalConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetVulScanGlobalConfigResponse
     *
     * @param GetVulScanGlobalConfigRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetVulScanGlobalConfigResponse
     */
    public function getVulScanGlobalConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'GetVulScanGlobalConfig',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetVulScanGlobalConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the global configuration of vulnerability scanning for the current Alibaba Cloud account.
     *
     * @param request - GetVulScanGlobalConfigRequest
     *
     * @returns GetVulScanGlobalConfigResponse
     *
     * @param GetVulScanGlobalConfigRequest $request
     *
     * @return GetVulScanGlobalConfigResponse
     */
    public function getVulScanGlobalConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVulScanGlobalConfigWithOptions($request, $runtime);
    }

    /**
     * Queries the complete configuration of a specified vulnerability scheduled scan policy.
     *
     * @param request - GetVulScanScheduledStrategyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetVulScanScheduledStrategyResponse
     *
     * @param GetVulScanScheduledStrategyRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetVulScanScheduledStrategyResponse
     */
    public function getVulScanScheduledStrategyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetVulScanScheduledStrategy',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetVulScanScheduledStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the complete configuration of a specified vulnerability scheduled scan policy.
     *
     * @param request - GetVulScanScheduledStrategyRequest
     *
     * @returns GetVulScanScheduledStrategyResponse
     *
     * @param GetVulScanScheduledStrategyRequest $request
     *
     * @return GetVulScanScheduledStrategyResponse
     */
    public function getVulScanScheduledStrategy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVulScanScheduledStrategyWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a specified vulnerability.
     *
     * @param request - GetVulnerabilityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetVulnerabilityResponse
     *
     * @param GetVulnerabilityRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetVulnerabilityResponse
     */
    public function getVulnerabilityWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetVulnerability',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetVulnerabilityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a specified vulnerability.
     *
     * @param request - GetVulnerabilityRequest
     *
     * @returns GetVulnerabilityResponse
     *
     * @param GetVulnerabilityRequest $request
     *
     * @return GetVulnerabilityResponse
     */
    public function getVulnerability($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVulnerabilityWithOptions($request, $runtime);
    }

    /**
     * Use the job ID obtained from creating a watermark embedding job to query the embedding job result.
     *
     * @param request - GetWmEmbedTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetWmEmbedTaskResponse
     *
     * @param GetWmEmbedTaskRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetWmEmbedTaskResponse
     */
    public function getWmEmbedTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetWmEmbedTask',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetWmEmbedTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Use the job ID obtained from creating a watermark embedding job to query the embedding job result.
     *
     * @param request - GetWmEmbedTaskRequest
     *
     * @returns GetWmEmbedTaskResponse
     *
     * @param GetWmEmbedTaskRequest $request
     *
     * @return GetWmEmbedTaskResponse
     */
    public function getWmEmbedTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWmEmbedTaskWithOptions($request, $runtime);
    }

    /**
     * Queries the result of a watermark extraction task using the task ID that is returned when you create the task.
     *
     * @param request - GetWmExtractTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetWmExtractTaskResponse
     *
     * @param GetWmExtractTaskRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetWmExtractTaskResponse
     */
    public function getWmExtractTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetWmExtractTask',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetWmExtractTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the result of a watermark extraction task using the task ID that is returned when you create the task.
     *
     * @param request - GetWmExtractTaskRequest
     *
     * @returns GetWmExtractTaskResponse
     *
     * @param GetWmExtractTaskRequest $request
     *
     * @return GetWmExtractTaskResponse
     */
    public function getWmExtractTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWmExtractTaskWithOptions($request, $runtime);
    }

    /**
     * Imports acceleration addresses in batches.
     *
     * @param request - ImportEnterpriseAccelerateTargetsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ImportEnterpriseAccelerateTargetsResponse
     *
     * @param ImportEnterpriseAccelerateTargetsRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return ImportEnterpriseAccelerateTargetsResponse
     */
    public function importEnterpriseAccelerateTargetsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->eapId) {
            @$body['EapId'] = $request->eapId;
        }

        if (null !== $request->fileUrl) {
            @$body['FileUrl'] = $request->fileUrl;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ImportEnterpriseAccelerateTargets',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ImportEnterpriseAccelerateTargetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Imports acceleration addresses in batches.
     *
     * @param request - ImportEnterpriseAccelerateTargetsRequest
     *
     * @returns ImportEnterpriseAccelerateTargetsResponse
     *
     * @param ImportEnterpriseAccelerateTargetsRequest $request
     *
     * @return ImportEnterpriseAccelerateTargetsResponse
     */
    public function importEnterpriseAccelerateTargets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importEnterpriseAccelerateTargetsWithOptions($request, $runtime);
    }

    /**
     * Queries the applications associated with one or more private access policies.
     *
     * @param request - ListApplicationsForPrivateAccessPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListApplicationsForPrivateAccessPolicyResponse
     *
     * @param ListApplicationsForPrivateAccessPolicyRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return ListApplicationsForPrivateAccessPolicyResponse
     */
    public function listApplicationsForPrivateAccessPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListApplicationsForPrivateAccessPolicy',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListApplicationsForPrivateAccessPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the applications associated with one or more private access policies.
     *
     * @param request - ListApplicationsForPrivateAccessPolicyRequest
     *
     * @returns ListApplicationsForPrivateAccessPolicyResponse
     *
     * @param ListApplicationsForPrivateAccessPolicyRequest $request
     *
     * @return ListApplicationsForPrivateAccessPolicyResponse
     */
    public function listApplicationsForPrivateAccessPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listApplicationsForPrivateAccessPolicyWithOptions($request, $runtime);
    }

    /**
     * Batch-query applications associated with private network access tags within your Alibaba Cloud account.
     *
     * @param request - ListApplicationsForPrivateAccessTagRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListApplicationsForPrivateAccessTagResponse
     *
     * @param ListApplicationsForPrivateAccessTagRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return ListApplicationsForPrivateAccessTagResponse
     */
    public function listApplicationsForPrivateAccessTagWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListApplicationsForPrivateAccessTag',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListApplicationsForPrivateAccessTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Batch-query applications associated with private network access tags within your Alibaba Cloud account.
     *
     * @param request - ListApplicationsForPrivateAccessTagRequest
     *
     * @returns ListApplicationsForPrivateAccessTagResponse
     *
     * @param ListApplicationsForPrivateAccessTagRequest $request
     *
     * @return ListApplicationsForPrivateAccessTagResponse
     */
    public function listApplicationsForPrivateAccessTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listApplicationsForPrivateAccessTagWithOptions($request, $runtime);
    }

    /**
     * Queries the list of approval processes under the current Alibaba Cloud account.
     *
     * @param request - ListApprovalProcessesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListApprovalProcessesResponse
     *
     * @param ListApprovalProcessesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListApprovalProcessesResponse
     */
    public function listApprovalProcessesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListApprovalProcesses',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListApprovalProcessesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of approval processes under the current Alibaba Cloud account.
     *
     * @param request - ListApprovalProcessesRequest
     *
     * @returns ListApprovalProcessesResponse
     *
     * @param ListApprovalProcessesRequest $request
     *
     * @return ListApprovalProcessesResponse
     */
    public function listApprovalProcesses($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listApprovalProcessesWithOptions($request, $runtime);
    }

    /**
     * Queries the approval flows associated with approval rendering templates.
     *
     * @param request - ListApprovalProcessesForApprovalSchemasRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListApprovalProcessesForApprovalSchemasResponse
     *
     * @param ListApprovalProcessesForApprovalSchemasRequest $request
     * @param RuntimeOptions                                 $runtime
     *
     * @return ListApprovalProcessesForApprovalSchemasResponse
     */
    public function listApprovalProcessesForApprovalSchemasWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListApprovalProcessesForApprovalSchemas',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListApprovalProcessesForApprovalSchemasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the approval flows associated with approval rendering templates.
     *
     * @param request - ListApprovalProcessesForApprovalSchemasRequest
     *
     * @returns ListApprovalProcessesForApprovalSchemasResponse
     *
     * @param ListApprovalProcessesForApprovalSchemasRequest $request
     *
     * @return ListApprovalProcessesForApprovalSchemasResponse
     */
    public function listApprovalProcessesForApprovalSchemas($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listApprovalProcessesForApprovalSchemasWithOptions($request, $runtime);
    }

    /**
     * Lists the approval templates for your Alibaba Cloud account.
     *
     * @param request - ListApprovalSchemasRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListApprovalSchemasResponse
     *
     * @param ListApprovalSchemasRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListApprovalSchemasResponse
     */
    public function listApprovalSchemasWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListApprovalSchemas',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListApprovalSchemasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists the approval templates for your Alibaba Cloud account.
     *
     * @param request - ListApprovalSchemasRequest
     *
     * @returns ListApprovalSchemasResponse
     *
     * @param ListApprovalSchemasRequest $request
     *
     * @return ListApprovalSchemasResponse
     */
    public function listApprovalSchemas($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listApprovalSchemasWithOptions($request, $runtime);
    }

    /**
     * Queries the rendering templates associated with approval processes.
     *
     * @param request - ListApprovalSchemasForApprovalProcessesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListApprovalSchemasForApprovalProcessesResponse
     *
     * @param ListApprovalSchemasForApprovalProcessesRequest $request
     * @param RuntimeOptions                                 $runtime
     *
     * @return ListApprovalSchemasForApprovalProcessesResponse
     */
    public function listApprovalSchemasForApprovalProcessesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListApprovalSchemasForApprovalProcesses',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListApprovalSchemasForApprovalProcessesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the rendering templates associated with approval processes.
     *
     * @param request - ListApprovalSchemasForApprovalProcessesRequest
     *
     * @returns ListApprovalSchemasForApprovalProcessesResponse
     *
     * @param ListApprovalSchemasForApprovalProcessesRequest $request
     *
     * @return ListApprovalSchemasForApprovalProcessesResponse
     */
    public function listApprovalSchemasForApprovalProcesses($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listApprovalSchemasForApprovalProcessesWithOptions($request, $runtime);
    }

    /**
     * Queries the list of approval instances under the current Alibaba Cloud account.
     *
     * @param request - ListApprovalsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListApprovalsResponse
     *
     * @param ListApprovalsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListApprovalsResponse
     */
    public function listApprovalsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListApprovals',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListApprovalsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of approval instances under the current Alibaba Cloud account.
     *
     * @param request - ListApprovalsRequest
     *
     * @returns ListApprovalsResponse
     *
     * @param ListApprovalsRequest $request
     *
     * @return ListApprovalsResponse
     */
    public function listApprovals($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listApprovalsWithOptions($request, $runtime);
    }

    /**
     * Query user information from custom identity sources in your Alibaba Cloud account.
     *
     * @param request - ListClientUsersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListClientUsersResponse
     *
     * @param ListClientUsersRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListClientUsersResponse
     */
    public function listClientUsersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListClientUsers',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListClientUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query user information from custom identity sources in your Alibaba Cloud account.
     *
     * @param request - ListClientUsersRequest
     *
     * @returns ListClientUsersResponse
     *
     * @param ListClientUsersRequest $request
     *
     * @return ListClientUsersResponse
     */
    public function listClientUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClientUsersWithOptions($request, $runtime);
    }

    /**
     * Query connectors in batches.
     *
     * @param request - ListConnectorsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListConnectorsResponse
     *
     * @param ListConnectorsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListConnectorsResponse
     */
    public function listConnectorsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListConnectors',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListConnectorsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query connectors in batches.
     *
     * @param request - ListConnectorsRequest
     *
     * @returns ListConnectorsResponse
     *
     * @param ListConnectorsRequest $request
     *
     * @return ListConnectorsResponse
     */
    public function listConnectors($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listConnectorsWithOptions($request, $runtime);
    }

    /**
     * Queries the list of device groups under the current Alibaba Cloud account by using paging.
     *
     * @param request - ListDeviceGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDeviceGroupsResponse
     *
     * @param ListDeviceGroupsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListDeviceGroupsResponse
     */
    public function listDeviceGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->deviceGroupIds) {
            @$query['DeviceGroupIds'] = $request->deviceGroupIds;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDeviceGroups',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDeviceGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of device groups under the current Alibaba Cloud account by using paging.
     *
     * @param request - ListDeviceGroupsRequest
     *
     * @returns ListDeviceGroupsResponse
     *
     * @param ListDeviceGroupsRequest $request
     *
     * @return ListDeviceGroupsResponse
     */
    public function listDeviceGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDeviceGroupsWithOptions($request, $runtime);
    }

    /**
     * Queries user endpoint devices affected by a specified vulnerability and their remediation status by paging.
     *
     * @param request - ListDevicesForVulnerabilityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDevicesForVulnerabilityResponse
     *
     * @param ListDevicesForVulnerabilityRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListDevicesForVulnerabilityResponse
     */
    public function listDevicesForVulnerabilityWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDevicesForVulnerability',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDevicesForVulnerabilityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries user endpoint devices affected by a specified vulnerability and their remediation status by paging.
     *
     * @param request - ListDevicesForVulnerabilityRequest
     *
     * @returns ListDevicesForVulnerabilityResponse
     *
     * @param ListDevicesForVulnerabilityRequest $request
     *
     * @return ListDevicesForVulnerabilityResponse
     */
    public function listDevicesForVulnerability($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDevicesForVulnerabilityWithOptions($request, $runtime);
    }

    /**
     * Queries domain name entries in a domain name list by paging.
     *
     * @remarks
     * Queries the details of domain name entries in a specified domain name list by paging. Use this operation together with ListDomainMetas: first obtain the `ListId`, and then use this operation to perform paging through the domain names in the list.
     *
     * @param request - ListDomainItemsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDomainItemsResponse
     *
     * @param ListDomainItemsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListDomainItemsResponse
     */
    public function listDomainItemsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->itemValue) {
            @$query['ItemValue'] = $request->itemValue;
        }

        if (null !== $request->listId) {
            @$query['ListId'] = $request->listId;
        }

        if (null !== $request->listType) {
            @$query['ListType'] = $request->listType;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDomainItems',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDomainItemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries domain name entries in a domain name list by paging.
     *
     * @remarks
     * Queries the details of domain name entries in a specified domain name list by paging. Use this operation together with ListDomainMetas: first obtain the `ListId`, and then use this operation to perform paging through the domain names in the list.
     *
     * @param request - ListDomainItemsRequest
     *
     * @returns ListDomainItemsResponse
     *
     * @param ListDomainItemsRequest $request
     *
     * @return ListDomainItemsResponse
     */
    public function listDomainItems($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDomainItemsWithOptions($request, $runtime);
    }

    /**
     * Queries the list of domain name lists.
     *
     * @remarks
     * Performs a paged query on the metadata of domain name lists (the header information of domain name blacklists/whitelists, excluding the specific domain name entries within the lists) for the current tenant with paging. You can filter by list type (blacklist/whitelist), perform fuzzy search by name, and specify whether to include system built-in default template lists in the results. Each record includes the number of domain name entries in the list.
     *
     * @param request - ListDomainMetasRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDomainMetasResponse
     *
     * @param ListDomainMetasRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListDomainMetasResponse
     */
    public function listDomainMetasWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->defaultTemplate) {
            @$query['DefaultTemplate'] = $request->defaultTemplate;
        }

        if (null !== $request->listType) {
            @$query['ListType'] = $request->listType;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDomainMetas',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDomainMetasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of domain name lists.
     *
     * @remarks
     * Performs a paged query on the metadata of domain name lists (the header information of domain name blacklists/whitelists, excluding the specific domain name entries within the lists) for the current tenant with paging. You can filter by list type (blacklist/whitelist), perform fuzzy search by name, and specify whether to include system built-in default template lists in the results. Each record includes the number of domain name entries in the list.
     *
     * @param request - ListDomainMetasRequest
     *
     * @returns ListDomainMetasResponse
     *
     * @param ListDomainMetasRequest $request
     *
     * @return ListDomainMetasResponse
     */
    public function listDomainMetas($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDomainMetasWithOptions($request, $runtime);
    }

    /**
     * Batch Query Dynamic Policy Disposal Processes.
     *
     * @param request - ListDynamicDisposalProcessesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDynamicDisposalProcessesResponse
     *
     * @param ListDynamicDisposalProcessesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListDynamicDisposalProcessesResponse
     */
    public function listDynamicDisposalProcessesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDynamicDisposalProcesses',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDynamicDisposalProcessesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Batch Query Dynamic Policy Disposal Processes.
     *
     * @param request - ListDynamicDisposalProcessesRequest
     *
     * @returns ListDynamicDisposalProcessesResponse
     *
     * @param ListDynamicDisposalProcessesRequest $request
     *
     * @return ListDynamicDisposalProcessesResponse
     */
    public function listDynamicDisposalProcesses($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDynamicDisposalProcessesWithOptions($request, $runtime);
    }

    /**
     * Queries the regions that are supported by the access points of SASE POP clusters for your Alibaba Cloud account.
     *
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDynamicRouteRegionsResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return ListDynamicRouteRegionsResponse
     */
    public function listDynamicRouteRegionsWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'ListDynamicRouteRegions',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDynamicRouteRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the regions that are supported by the access points of SASE POP clusters for your Alibaba Cloud account.
     *
     * @returns ListDynamicRouteRegionsResponse
     *
     * @return ListDynamicRouteRegionsResponse
     */
    public function listDynamicRouteRegions()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDynamicRouteRegionsWithOptions($runtime);
    }

    /**
     * Retrieves information about all dynamic routes for the current Alibaba Cloud account.
     *
     * @param request - ListDynamicRoutesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDynamicRoutesResponse
     *
     * @param ListDynamicRoutesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListDynamicRoutesResponse
     */
    public function listDynamicRoutesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDynamicRoutes',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDynamicRoutesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves information about all dynamic routes for the current Alibaba Cloud account.
     *
     * @param request - ListDynamicRoutesRequest
     *
     * @returns ListDynamicRoutesResponse
     *
     * @param ListDynamicRoutesRequest $request
     *
     * @return ListDynamicRoutesResponse
     */
    public function listDynamicRoutes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDynamicRoutesWithOptions($request, $runtime);
    }

    /**
     * Queries audit logs for enterprise acceleration.
     *
     * @param request - ListEnterpriseAccelerateLogsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListEnterpriseAccelerateLogsResponse
     *
     * @param ListEnterpriseAccelerateLogsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListEnterpriseAccelerateLogsResponse
     */
    public function listEnterpriseAccelerateLogsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListEnterpriseAccelerateLogs',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListEnterpriseAccelerateLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries audit logs for enterprise acceleration.
     *
     * @param request - ListEnterpriseAccelerateLogsRequest
     *
     * @returns ListEnterpriseAccelerateLogsResponse
     *
     * @param ListEnterpriseAccelerateLogsRequest $request
     *
     * @return ListEnterpriseAccelerateLogsResponse
     */
    public function listEnterpriseAccelerateLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEnterpriseAccelerateLogsWithOptions($request, $runtime);
    }

    /**
     * Query acceleration policies.
     *
     * @param request - ListEnterpriseAcceleratePoliciesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListEnterpriseAcceleratePoliciesResponse
     *
     * @param ListEnterpriseAcceleratePoliciesRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return ListEnterpriseAcceleratePoliciesResponse
     */
    public function listEnterpriseAcceleratePoliciesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListEnterpriseAcceleratePolicies',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListEnterpriseAcceleratePoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query acceleration policies.
     *
     * @param request - ListEnterpriseAcceleratePoliciesRequest
     *
     * @returns ListEnterpriseAcceleratePoliciesResponse
     *
     * @param ListEnterpriseAcceleratePoliciesRequest $request
     *
     * @return ListEnterpriseAcceleratePoliciesResponse
     */
    public function listEnterpriseAcceleratePolicies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEnterpriseAcceleratePoliciesWithOptions($request, $runtime);
    }

    /**
     * Query the list of enterprise acceleration targets.
     *
     * @param request - ListEnterpriseAccelerateTargetsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListEnterpriseAccelerateTargetsResponse
     *
     * @param ListEnterpriseAccelerateTargetsRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ListEnterpriseAccelerateTargetsResponse
     */
    public function listEnterpriseAccelerateTargetsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListEnterpriseAccelerateTargets',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListEnterpriseAccelerateTargetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the list of enterprise acceleration targets.
     *
     * @param request - ListEnterpriseAccelerateTargetsRequest
     *
     * @returns ListEnterpriseAccelerateTargetsResponse
     *
     * @param ListEnterpriseAccelerateTargetsRequest $request
     *
     * @return ListEnterpriseAccelerateTargetsResponse
     */
    public function listEnterpriseAccelerateTargets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEnterpriseAccelerateTargetsWithOptions($request, $runtime);
    }

    /**
     * Lists excess end-user device registration applications in the current Alibaba Cloud account.
     *
     * @param request - ListExcessiveDeviceRegistrationApplicationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListExcessiveDeviceRegistrationApplicationsResponse
     *
     * @param ListExcessiveDeviceRegistrationApplicationsRequest $request
     * @param RuntimeOptions                                     $runtime
     *
     * @return ListExcessiveDeviceRegistrationApplicationsResponse
     */
    public function listExcessiveDeviceRegistrationApplicationsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListExcessiveDeviceRegistrationApplications',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListExcessiveDeviceRegistrationApplicationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists excess end-user device registration applications in the current Alibaba Cloud account.
     *
     * @param request - ListExcessiveDeviceRegistrationApplicationsRequest
     *
     * @returns ListExcessiveDeviceRegistrationApplicationsResponse
     *
     * @param ListExcessiveDeviceRegistrationApplicationsRequest $request
     *
     * @return ListExcessiveDeviceRegistrationApplicationsResponse
     */
    public function listExcessiveDeviceRegistrationApplications($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listExcessiveDeviceRegistrationApplicationsWithOptions($request, $runtime);
    }

    /**
     * Queries forwarding rules in batches.
     *
     * @param request - ListForwardStrategiesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListForwardStrategiesResponse
     *
     * @param ListForwardStrategiesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListForwardStrategiesResponse
     */
    public function listForwardStrategiesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListForwardStrategies',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListForwardStrategiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries forwarding rules in batches.
     *
     * @param request - ListForwardStrategiesRequest
     *
     * @returns ListForwardStrategiesResponse
     *
     * @param ListForwardStrategiesRequest $request
     *
     * @return ListForwardStrategiesResponse
     */
    public function listForwardStrategies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listForwardStrategiesWithOptions($request, $runtime);
    }

    /**
     * Queries the bindings of forwarding rules in batches.
     *
     * @param request - ListForwardStrategyBindingItemsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListForwardStrategyBindingItemsResponse
     *
     * @param ListForwardStrategyBindingItemsRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ListForwardStrategyBindingItemsResponse
     */
    public function listForwardStrategyBindingItemsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListForwardStrategyBindingItems',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListForwardStrategyBindingItemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the bindings of forwarding rules in batches.
     *
     * @param request - ListForwardStrategyBindingItemsRequest
     *
     * @returns ListForwardStrategyBindingItemsResponse
     *
     * @param ListForwardStrategyBindingItemsRequest $request
     *
     * @return ListForwardStrategyBindingItemsResponse
     */
    public function listForwardStrategyBindingItems($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listForwardStrategyBindingItemsWithOptions($request, $runtime);
    }

    /**
     * Lists identity provider configurations for the current Alibaba Cloud account.
     *
     * @param request - ListIdpConfigsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListIdpConfigsResponse
     *
     * @param ListIdpConfigsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListIdpConfigsResponse
     */
    public function listIdpConfigsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListIdpConfigs',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListIdpConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists identity provider configurations for the current Alibaba Cloud account.
     *
     * @param request - ListIdpConfigsRequest
     *
     * @returns ListIdpConfigsResponse
     *
     * @param ListIdpConfigsRequest $request
     *
     * @return ListIdpConfigsResponse
     */
    public function listIdpConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIdpConfigsWithOptions($request, $runtime);
    }

    /**
     * Retrieves department information for a custom identity provider (IdP) associated with your Alibaba Cloud account.
     *
     * @param request - ListIdpDepartmentsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListIdpDepartmentsResponse
     *
     * @param ListIdpDepartmentsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListIdpDepartmentsResponse
     */
    public function listIdpDepartmentsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListIdpDepartments',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListIdpDepartmentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves department information for a custom identity provider (IdP) associated with your Alibaba Cloud account.
     *
     * @param request - ListIdpDepartmentsRequest
     *
     * @returns ListIdpDepartmentsResponse
     *
     * @param ListIdpDepartmentsRequest $request
     *
     * @return ListIdpDepartmentsResponse
     */
    public function listIdpDepartments($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIdpDepartmentsWithOptions($request, $runtime);
    }

    /**
     * Lists onboarded users.
     *
     * @param request - ListNacUserCertRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListNacUserCertResponse
     *
     * @param ListNacUserCertRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListNacUserCertResponse
     */
    public function listNacUserCertWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->department) {
            @$query['Department'] = $request->department;
        }

        if (null !== $request->deviceType) {
            @$query['DeviceType'] = $request->deviceType;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->username) {
            @$query['Username'] = $request->username;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListNacUserCert',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListNacUserCertResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists onboarded users.
     *
     * @param request - ListNacUserCertRequest
     *
     * @returns ListNacUserCertResponse
     *
     * @param ListNacUserCertRequest $request
     *
     * @return ListNacUserCertResponse
     */
    public function listNacUserCert($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNacUserCertWithOptions($request, $runtime);
    }

    /**
     * Queries policies for private access applications in your Alibaba Cloud account in batches.
     *
     * @param request - ListPolicesForPrivateAccessApplicationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPolicesForPrivateAccessApplicationResponse
     *
     * @param ListPolicesForPrivateAccessApplicationRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return ListPolicesForPrivateAccessApplicationResponse
     */
    public function listPolicesForPrivateAccessApplicationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPolicesForPrivateAccessApplication',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPolicesForPrivateAccessApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries policies for private access applications in your Alibaba Cloud account in batches.
     *
     * @param request - ListPolicesForPrivateAccessApplicationRequest
     *
     * @returns ListPolicesForPrivateAccessApplicationResponse
     *
     * @param ListPolicesForPrivateAccessApplicationRequest $request
     *
     * @return ListPolicesForPrivateAccessApplicationResponse
     */
    public function listPolicesForPrivateAccessApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPolicesForPrivateAccessApplicationWithOptions($request, $runtime);
    }

    /**
     * Batch query policies for private network access tags in your Alibaba Cloud account.
     *
     * @param request - ListPolicesForPrivateAccessTagRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPolicesForPrivateAccessTagResponse
     *
     * @param ListPolicesForPrivateAccessTagRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ListPolicesForPrivateAccessTagResponse
     */
    public function listPolicesForPrivateAccessTagWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPolicesForPrivateAccessTag',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPolicesForPrivateAccessTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Batch query policies for private network access tags in your Alibaba Cloud account.
     *
     * @param request - ListPolicesForPrivateAccessTagRequest
     *
     * @returns ListPolicesForPrivateAccessTagResponse
     *
     * @param ListPolicesForPrivateAccessTagRequest $request
     *
     * @return ListPolicesForPrivateAccessTagResponse
     */
    public function listPolicesForPrivateAccessTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPolicesForPrivateAccessTagWithOptions($request, $runtime);
    }

    /**
     * Queries policies for multiple user groups within your Alibaba Cloud account.
     *
     * @param request - ListPolicesForUserGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPolicesForUserGroupResponse
     *
     * @param ListPolicesForUserGroupRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListPolicesForUserGroupResponse
     */
    public function listPolicesForUserGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPolicesForUserGroup',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPolicesForUserGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries policies for multiple user groups within your Alibaba Cloud account.
     *
     * @param request - ListPolicesForUserGroupRequest
     *
     * @returns ListPolicesForUserGroupResponse
     *
     * @param ListPolicesForUserGroupRequest $request
     *
     * @return ListPolicesForUserGroupResponse
     */
    public function listPolicesForUserGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPolicesForUserGroupWithOptions($request, $runtime);
    }

    /**
     * Retrieves bandwidth usage statistics for Secure Access Service Edge (SASE) points of presence (POPs).
     *
     * @param request - ListPopTrafficStatisticsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPopTrafficStatisticsResponse
     *
     * @param ListPopTrafficStatisticsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListPopTrafficStatisticsResponse
     */
    public function listPopTrafficStatisticsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPopTrafficStatistics',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPopTrafficStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves bandwidth usage statistics for Secure Access Service Edge (SASE) points of presence (POPs).
     *
     * @param request - ListPopTrafficStatisticsRequest
     *
     * @returns ListPopTrafficStatisticsResponse
     *
     * @param ListPopTrafficStatisticsRequest $request
     *
     * @return ListPopTrafficStatisticsResponse
     */
    public function listPopTrafficStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPopTrafficStatisticsWithOptions($request, $runtime);
    }

    /**
     * Queries the Layer 7 switches of internal-facing applications in batches.
     *
     * @param request - ListPrivateAccessApplicationL7SwitchesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPrivateAccessApplicationL7SwitchesResponse
     *
     * @param ListPrivateAccessApplicationL7SwitchesRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return ListPrivateAccessApplicationL7SwitchesResponse
     */
    public function listPrivateAccessApplicationL7SwitchesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPrivateAccessApplicationL7Switches',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPrivateAccessApplicationL7SwitchesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the Layer 7 switches of internal-facing applications in batches.
     *
     * @param request - ListPrivateAccessApplicationL7SwitchesRequest
     *
     * @returns ListPrivateAccessApplicationL7SwitchesResponse
     *
     * @param ListPrivateAccessApplicationL7SwitchesRequest $request
     *
     * @return ListPrivateAccessApplicationL7SwitchesResponse
     */
    public function listPrivateAccessApplicationL7Switches($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPrivateAccessApplicationL7SwitchesWithOptions($request, $runtime);
    }

    /**
     * Queries information about all internal-facing access applications under the current Alibaba Cloud account.
     *
     * @param request - ListPrivateAccessApplicationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPrivateAccessApplicationsResponse
     *
     * @param ListPrivateAccessApplicationsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ListPrivateAccessApplicationsResponse
     */
    public function listPrivateAccessApplicationsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessModes) {
            @$query['AccessModes'] = $request->accessModes;
        }

        if (null !== $request->address) {
            @$query['Address'] = $request->address;
        }

        if (null !== $request->applicationIds) {
            @$query['ApplicationIds'] = $request->applicationIds;
        }

        if (null !== $request->connectorId) {
            @$query['ConnectorId'] = $request->connectorId;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->policyId) {
            @$query['PolicyId'] = $request->policyId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->tagId) {
            @$query['TagId'] = $request->tagId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPrivateAccessApplications',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPrivateAccessApplicationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about all internal-facing access applications under the current Alibaba Cloud account.
     *
     * @param request - ListPrivateAccessApplicationsRequest
     *
     * @returns ListPrivateAccessApplicationsResponse
     *
     * @param ListPrivateAccessApplicationsRequest $request
     *
     * @return ListPrivateAccessApplicationsResponse
     */
    public function listPrivateAccessApplications($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPrivateAccessApplicationsWithOptions($request, $runtime);
    }

    /**
     * List private access applications for dynamic routes in your Alibaba Cloud account.
     *
     * @param request - ListPrivateAccessApplicationsForDynamicRouteRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPrivateAccessApplicationsForDynamicRouteResponse
     *
     * @param ListPrivateAccessApplicationsForDynamicRouteRequest $request
     * @param RuntimeOptions                                      $runtime
     *
     * @return ListPrivateAccessApplicationsForDynamicRouteResponse
     */
    public function listPrivateAccessApplicationsForDynamicRouteWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPrivateAccessApplicationsForDynamicRoute',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPrivateAccessApplicationsForDynamicRouteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * List private access applications for dynamic routes in your Alibaba Cloud account.
     *
     * @param request - ListPrivateAccessApplicationsForDynamicRouteRequest
     *
     * @returns ListPrivateAccessApplicationsForDynamicRouteResponse
     *
     * @param ListPrivateAccessApplicationsForDynamicRouteRequest $request
     *
     * @return ListPrivateAccessApplicationsForDynamicRouteResponse
     */
    public function listPrivateAccessApplicationsForDynamicRoute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPrivateAccessApplicationsForDynamicRouteWithOptions($request, $runtime);
    }

    /**
     * Queries the information about all private access policies under the current Alibaba Cloud account.
     *
     * @param request - ListPrivateAccessPolicesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPrivateAccessPolicesResponse
     *
     * @param ListPrivateAccessPolicesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListPrivateAccessPolicesResponse
     */
    public function listPrivateAccessPolicesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPrivateAccessPolices',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPrivateAccessPolicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about all private access policies under the current Alibaba Cloud account.
     *
     * @param request - ListPrivateAccessPolicesRequest
     *
     * @returns ListPrivateAccessPolicesResponse
     *
     * @param ListPrivateAccessPolicesRequest $request
     *
     * @return ListPrivateAccessPolicesResponse
     */
    public function listPrivateAccessPolices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPrivateAccessPolicesWithOptions($request, $runtime);
    }

    /**
     * Queries the information about all internal access tags within the current Alibaba Cloud account.
     *
     * @param request - ListPrivateAccessTagsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPrivateAccessTagsResponse
     *
     * @param ListPrivateAccessTagsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListPrivateAccessTagsResponse
     */
    public function listPrivateAccessTagsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPrivateAccessTags',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPrivateAccessTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about all internal access tags within the current Alibaba Cloud account.
     *
     * @param request - ListPrivateAccessTagsRequest
     *
     * @returns ListPrivateAccessTagsResponse
     *
     * @param ListPrivateAccessTagsRequest $request
     *
     * @return ListPrivateAccessTagsResponse
     */
    public function listPrivateAccessTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPrivateAccessTagsWithOptions($request, $runtime);
    }

    /**
     * Lists the tags for dynamic routes in your Alibaba Cloud account.
     *
     * @param request - ListPrivateAccessTagsForDynamicRouteRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPrivateAccessTagsForDynamicRouteResponse
     *
     * @param ListPrivateAccessTagsForDynamicRouteRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return ListPrivateAccessTagsForDynamicRouteResponse
     */
    public function listPrivateAccessTagsForDynamicRouteWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPrivateAccessTagsForDynamicRoute',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPrivateAccessTagsForDynamicRouteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists the tags for dynamic routes in your Alibaba Cloud account.
     *
     * @param request - ListPrivateAccessTagsForDynamicRouteRequest
     *
     * @returns ListPrivateAccessTagsForDynamicRouteResponse
     *
     * @param ListPrivateAccessTagsForDynamicRouteRequest $request
     *
     * @return ListPrivateAccessTagsForDynamicRouteResponse
     */
    public function listPrivateAccessTagsForDynamicRoute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPrivateAccessTagsForDynamicRouteWithOptions($request, $runtime);
    }

    /**
     * Queries the list of software prohibition policies under the current Alibaba Cloud account by paging.
     *
     * @param tmpReq - ListProhibitedPoliciesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListProhibitedPoliciesResponse
     *
     * @param ListProhibitedPoliciesRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return ListProhibitedPoliciesResponse
     */
    public function listProhibitedPoliciesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListProhibitedPoliciesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->softwareId) {
            $request->softwareIdShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->softwareId, 'SoftwareId', 'json');
        }

        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListProhibitedPolicies',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListProhibitedPoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of software prohibition policies under the current Alibaba Cloud account by paging.
     *
     * @param request - ListProhibitedPoliciesRequest
     *
     * @returns ListProhibitedPoliciesResponse
     *
     * @param ListProhibitedPoliciesRequest $request
     *
     * @return ListProhibitedPoliciesResponse
     */
    public function listProhibitedPolicies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProhibitedPoliciesWithOptions($request, $runtime);
    }

    /**
     * Queries the list of prohibited software under the current Alibaba Cloud account by using paging.
     *
     * @param tmpReq - ListProhibitedSoftwareRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListProhibitedSoftwareResponse
     *
     * @param ListProhibitedSoftwareRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return ListProhibitedSoftwareResponse
     */
    public function listProhibitedSoftwareWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListProhibitedSoftwareShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tagId) {
            $request->tagIdShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tagId, 'TagId', 'json');
        }

        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListProhibitedSoftware',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListProhibitedSoftwareResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of prohibited software under the current Alibaba Cloud account by using paging.
     *
     * @param request - ListProhibitedSoftwareRequest
     *
     * @returns ListProhibitedSoftwareResponse
     *
     * @param ListProhibitedSoftwareRequest $request
     *
     * @return ListProhibitedSoftwareResponse
     */
    public function listProhibitedSoftware($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProhibitedSoftwareWithOptions($request, $runtime);
    }

    /**
     * Queries the list of prohibited software tags under the current Alibaba Cloud account by paging.
     *
     * @param tmpReq - ListProhibitedTagsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListProhibitedTagsResponse
     *
     * @param ListProhibitedTagsRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return ListProhibitedTagsResponse
     */
    public function listProhibitedTagsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListProhibitedTagsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->softwareId) {
            $request->softwareIdShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->softwareId, 'SoftwareId', 'json');
        }

        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->policyId) {
            @$query['PolicyId'] = $request->policyId;
        }

        if (null !== $request->softwareIdShrink) {
            @$query['SoftwareId'] = $request->softwareIdShrink;
        }

        if (null !== $request->tagIds) {
            @$query['TagIds'] = $request->tagIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListProhibitedTags',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListProhibitedTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of prohibited software tags under the current Alibaba Cloud account by paging.
     *
     * @param request - ListProhibitedTagsRequest
     *
     * @returns ListProhibitedTagsResponse
     *
     * @param ListProhibitedTagsRequest $request
     *
     * @return ListProhibitedTagsResponse
     */
    public function listProhibitedTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProhibitedTagsWithOptions($request, $runtime);
    }

    /**
     * Query the list of device registration policies for your Alibaba Cloud account.
     *
     * @param request - ListRegistrationPoliciesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRegistrationPoliciesResponse
     *
     * @param ListRegistrationPoliciesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListRegistrationPoliciesResponse
     */
    public function listRegistrationPoliciesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRegistrationPolicies',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListRegistrationPoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the list of device registration policies for your Alibaba Cloud account.
     *
     * @param request - ListRegistrationPoliciesRequest
     *
     * @returns ListRegistrationPoliciesResponse
     *
     * @param ListRegistrationPoliciesRequest $request
     *
     * @return ListRegistrationPoliciesResponse
     */
    public function listRegistrationPolicies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRegistrationPoliciesWithOptions($request, $runtime);
    }

    /**
     * Queries the device registration policies that are associated with user groups in your Alibaba Cloud account.
     *
     * @param request - ListRegistrationPoliciesForUserGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRegistrationPoliciesForUserGroupResponse
     *
     * @param ListRegistrationPoliciesForUserGroupRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return ListRegistrationPoliciesForUserGroupResponse
     */
    public function listRegistrationPoliciesForUserGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRegistrationPoliciesForUserGroup',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListRegistrationPoliciesForUserGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the device registration policies that are associated with user groups in your Alibaba Cloud account.
     *
     * @param request - ListRegistrationPoliciesForUserGroupRequest
     *
     * @returns ListRegistrationPoliciesForUserGroupResponse
     *
     * @param ListRegistrationPoliciesForUserGroupRequest $request
     *
     * @return ListRegistrationPoliciesForUserGroupResponse
     */
    public function listRegistrationPoliciesForUserGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRegistrationPoliciesForUserGroupWithOptions($request, $runtime);
    }

    /**
     * Queries the list of risk events under the current Alibaba Cloud account.
     *
     * @remarks
     * ## Operation description
     * - This operation is used for paging query of risk events that meet specified conditional criteria.
     * - `CurrentPage` and `PageSize` are required parameters that specify the current page number and the number of entries per page.
     * - You can set parameters such as `RiskId`, `RiskScene`, and `RiskCategory` to perform exact or fuzzy queries for specific risk events.
     * - The `Status` and `StatusList` parameters cannot be used at the same time. They are used to filter risk events by disposition status.
     * - Fuzzy match queries are supported by settings `PolicyName` and `Username`.
     * - The response includes the total number of risk events that meet the query conditions and their details.
     *
     * @param request - ListRiskItemsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRiskItemsResponse
     *
     * @param ListRiskItemsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListRiskItemsResponse
     */
    public function listRiskItemsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->policyName) {
            @$query['PolicyName'] = $request->policyName;
        }

        if (null !== $request->riskCategory) {
            @$query['RiskCategory'] = $request->riskCategory;
        }

        if (null !== $request->riskId) {
            @$query['RiskId'] = $request->riskId;
        }

        if (null !== $request->riskLevel) {
            @$query['RiskLevel'] = $request->riskLevel;
        }

        if (null !== $request->riskScene) {
            @$query['RiskScene'] = $request->riskScene;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->statusList) {
            @$query['StatusList'] = $request->statusList;
        }

        if (null !== $request->username) {
            @$query['Username'] = $request->username;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRiskItems',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListRiskItemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of risk events under the current Alibaba Cloud account.
     *
     * @remarks
     * ## Operation description
     * - This operation is used for paging query of risk events that meet specified conditional criteria.
     * - `CurrentPage` and `PageSize` are required parameters that specify the current page number and the number of entries per page.
     * - You can set parameters such as `RiskId`, `RiskScene`, and `RiskCategory` to perform exact or fuzzy queries for specific risk events.
     * - The `Status` and `StatusList` parameters cannot be used at the same time. They are used to filter risk events by disposition status.
     * - Fuzzy match queries are supported by settings `PolicyName` and `Username`.
     * - The response includes the total number of risk events that meet the query conditions and their details.
     *
     * @param request - ListRiskItemsRequest
     *
     * @returns ListRiskItemsResponse
     *
     * @param ListRiskItemsRequest $request
     *
     * @return ListRiskItemsResponse
     */
    public function listRiskItems($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRiskItemsWithOptions($request, $runtime);
    }

    /**
     * Queries the list of software installed on user endpoint devices under the current Alibaba Cloud account.
     *
     * @param request - ListSoftwareForUserDeviceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSoftwareForUserDeviceResponse
     *
     * @param ListSoftwareForUserDeviceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListSoftwareForUserDeviceResponse
     */
    public function listSoftwareForUserDeviceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSoftwareForUserDevice',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSoftwareForUserDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of software installed on user endpoint devices under the current Alibaba Cloud account.
     *
     * @param request - ListSoftwareForUserDeviceRequest
     *
     * @returns ListSoftwareForUserDeviceResponse
     *
     * @param ListSoftwareForUserDeviceRequest $request
     *
     * @return ListSoftwareForUserDeviceResponse
     */
    public function listSoftwareForUserDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSoftwareForUserDeviceWithOptions($request, $runtime);
    }

    /**
     * Batch query tags for private network access applications under the current Alibaba Cloud account.
     *
     * @param request - ListTagsForPrivateAccessApplicationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTagsForPrivateAccessApplicationResponse
     *
     * @param ListTagsForPrivateAccessApplicationRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return ListTagsForPrivateAccessApplicationResponse
     */
    public function listTagsForPrivateAccessApplicationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTagsForPrivateAccessApplication',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTagsForPrivateAccessApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Batch query tags for private network access applications under the current Alibaba Cloud account.
     *
     * @param request - ListTagsForPrivateAccessApplicationRequest
     *
     * @returns ListTagsForPrivateAccessApplicationResponse
     *
     * @param ListTagsForPrivateAccessApplicationRequest $request
     *
     * @return ListTagsForPrivateAccessApplicationResponse
     */
    public function listTagsForPrivateAccessApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagsForPrivateAccessApplicationWithOptions($request, $runtime);
    }

    /**
     * Queries the tags of internal network access policies in your Alibaba Cloud account.
     *
     * @param request - ListTagsForPrivateAccessPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTagsForPrivateAccessPolicyResponse
     *
     * @param ListTagsForPrivateAccessPolicyRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ListTagsForPrivateAccessPolicyResponse
     */
    public function listTagsForPrivateAccessPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTagsForPrivateAccessPolicy',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTagsForPrivateAccessPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the tags of internal network access policies in your Alibaba Cloud account.
     *
     * @param request - ListTagsForPrivateAccessPolicyRequest
     *
     * @returns ListTagsForPrivateAccessPolicyResponse
     *
     * @param ListTagsForPrivateAccessPolicyRequest $request
     *
     * @return ListTagsForPrivateAccessPolicyResponse
     */
    public function listTagsForPrivateAccessPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagsForPrivateAccessPolicyWithOptions($request, $runtime);
    }

    /**
     * Queries the list of uninstall applications under the current Alibaba Cloud account in batches.
     *
     * @param request - ListUninstallApplicationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListUninstallApplicationsResponse
     *
     * @param ListUninstallApplicationsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListUninstallApplicationsResponse
     */
    public function listUninstallApplicationsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListUninstallApplications',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListUninstallApplicationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of uninstall applications under the current Alibaba Cloud account in batches.
     *
     * @param request - ListUninstallApplicationsRequest
     *
     * @returns ListUninstallApplicationsResponse
     *
     * @param ListUninstallApplicationsRequest $request
     *
     * @return ListUninstallApplicationsResponse
     */
    public function listUninstallApplications($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUninstallApplicationsWithOptions($request, $runtime);
    }

    /**
     * Queries the application permissions of the logged-in user in the current Alibaba Cloud account.
     *
     * @param request - ListUserApplicationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListUserApplicationsResponse
     *
     * @param ListUserApplicationsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListUserApplicationsResponse
     */
    public function listUserApplicationsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListUserApplications',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListUserApplicationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the application permissions of the logged-in user in the current Alibaba Cloud account.
     *
     * @param request - ListUserApplicationsRequest
     *
     * @returns ListUserApplicationsResponse
     *
     * @param ListUserApplicationsRequest $request
     *
     * @return ListUserApplicationsResponse
     */
    public function listUserApplications($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserApplicationsWithOptions($request, $runtime);
    }

    /**
     * Queries the list of user endpoint devices under the current Alibaba Cloud account.
     *
     * @param request - ListUserDevicesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListUserDevicesResponse
     *
     * @param ListUserDevicesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListUserDevicesResponse
     */
    public function listUserDevicesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appStatuses) {
            @$query['AppStatuses'] = $request->appStatuses;
        }

        if (null !== $request->appVersions) {
            @$query['AppVersions'] = $request->appVersions;
        }

        if (null !== $request->autoLoginStatuses) {
            @$query['AutoLoginStatuses'] = $request->autoLoginStatuses;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->department) {
            @$query['Department'] = $request->department;
        }

        if (null !== $request->deviceBelong) {
            @$query['DeviceBelong'] = $request->deviceBelong;
        }

        if (null !== $request->deviceGroupId) {
            @$query['DeviceGroupId'] = $request->deviceGroupId;
        }

        if (null !== $request->deviceStatuses) {
            @$query['DeviceStatuses'] = $request->deviceStatuses;
        }

        if (null !== $request->deviceTags) {
            @$query['DeviceTags'] = $request->deviceTags;
        }

        if (null !== $request->deviceTypes) {
            @$query['DeviceTypes'] = $request->deviceTypes;
        }

        if (null !== $request->dlpStatuses) {
            @$query['DlpStatuses'] = $request->dlpStatuses;
        }

        if (null !== $request->hostname) {
            @$query['Hostname'] = $request->hostname;
        }

        if (null !== $request->iaStatuses) {
            @$query['IaStatuses'] = $request->iaStatuses;
        }

        if (null !== $request->innerIp) {
            @$query['InnerIp'] = $request->innerIp;
        }

        if (null !== $request->mac) {
            @$query['Mac'] = $request->mac;
        }

        if (null !== $request->nacStatuses) {
            @$query['NacStatuses'] = $request->nacStatuses;
        }

        if (null !== $request->paStatuses) {
            @$query['PaStatuses'] = $request->paStatuses;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->saseUserId) {
            @$query['SaseUserId'] = $request->saseUserId;
        }

        if (null !== $request->sharingStatus) {
            @$query['SharingStatus'] = $request->sharingStatus;
        }

        if (null !== $request->snBios) {
            @$query['SnBios'] = $request->snBios;
        }

        if (null !== $request->snSystem) {
            @$query['SnSystem'] = $request->snSystem;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->username) {
            @$query['Username'] = $request->username;
        }

        if (null !== $request->workshop) {
            @$query['Workshop'] = $request->workshop;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListUserDevices',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListUserDevicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of user endpoint devices under the current Alibaba Cloud account.
     *
     * @param request - ListUserDevicesRequest
     *
     * @returns ListUserDevicesResponse
     *
     * @param ListUserDevicesRequest $request
     *
     * @return ListUserDevicesResponse
     */
    public function listUserDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserDevicesWithOptions($request, $runtime);
    }

    /**
     * Retrieves information about all user groups in your Alibaba Cloud account.
     *
     * @param request - ListUserGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListUserGroupsResponse
     *
     * @param ListUserGroupsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListUserGroupsResponse
     */
    public function listUserGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListUserGroups',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListUserGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves information about all user groups in your Alibaba Cloud account.
     *
     * @param request - ListUserGroupsRequest
     *
     * @returns ListUserGroupsResponse
     *
     * @param ListUserGroupsRequest $request
     *
     * @return ListUserGroupsResponse
     */
    public function listUserGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserGroupsWithOptions($request, $runtime);
    }

    /**
     * Retrieve user groups for private network access policies in batches under your Alibaba Cloud account.
     *
     * @param request - ListUserGroupsForPrivateAccessPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListUserGroupsForPrivateAccessPolicyResponse
     *
     * @param ListUserGroupsForPrivateAccessPolicyRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return ListUserGroupsForPrivateAccessPolicyResponse
     */
    public function listUserGroupsForPrivateAccessPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListUserGroupsForPrivateAccessPolicy',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListUserGroupsForPrivateAccessPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieve user groups for private network access policies in batches under your Alibaba Cloud account.
     *
     * @param request - ListUserGroupsForPrivateAccessPolicyRequest
     *
     * @returns ListUserGroupsForPrivateAccessPolicyResponse
     *
     * @param ListUserGroupsForPrivateAccessPolicyRequest $request
     *
     * @return ListUserGroupsForPrivateAccessPolicyResponse
     */
    public function listUserGroupsForPrivateAccessPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserGroupsForPrivateAccessPolicyWithOptions($request, $runtime);
    }

    /**
     * Lists the user groups associated with device registration policies in your Alibaba Cloud account.
     *
     * @param request - ListUserGroupsForRegistrationPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListUserGroupsForRegistrationPolicyResponse
     *
     * @param ListUserGroupsForRegistrationPolicyRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return ListUserGroupsForRegistrationPolicyResponse
     */
    public function listUserGroupsForRegistrationPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListUserGroupsForRegistrationPolicy',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListUserGroupsForRegistrationPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists the user groups associated with device registration policies in your Alibaba Cloud account.
     *
     * @param request - ListUserGroupsForRegistrationPolicyRequest
     *
     * @returns ListUserGroupsForRegistrationPolicyResponse
     *
     * @param ListUserGroupsForRegistrationPolicyRequest $request
     *
     * @return ListUserGroupsForRegistrationPolicyResponse
     */
    public function listUserGroupsForRegistrationPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserGroupsForRegistrationPolicyWithOptions($request, $runtime);
    }

    /**
     * Queries the list of user zero trust policies.
     *
     * @param request - ListUserPrivateAccessPoliciesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListUserPrivateAccessPoliciesResponse
     *
     * @param ListUserPrivateAccessPoliciesRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ListUserPrivateAccessPoliciesResponse
     */
    public function listUserPrivateAccessPoliciesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListUserPrivateAccessPolicies',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListUserPrivateAccessPoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of user zero trust policies.
     *
     * @param request - ListUserPrivateAccessPoliciesRequest
     *
     * @returns ListUserPrivateAccessPoliciesResponse
     *
     * @param ListUserPrivateAccessPoliciesRequest $request
     *
     * @return ListUserPrivateAccessPoliciesResponse
     */
    public function listUserPrivateAccessPolicies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserPrivateAccessPoliciesWithOptions($request, $runtime);
    }

    /**
     * Queries the users for the current Alibaba Cloud account.
     *
     * @param request - ListUsersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListUsersResponse
     *
     * @param ListUsersRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListUsersResponse
     */
    public function listUsersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListUsers',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the users for the current Alibaba Cloud account.
     *
     * @param request - ListUsersRequest
     *
     * @returns ListUsersResponse
     *
     * @param ListUsersRequest $request
     *
     * @return ListUsersResponse
     */
    public function listUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUsersWithOptions($request, $runtime);
    }

    /**
     * Queries virus files detected under the current Alibaba Cloud account and their disposition status with paging. Supports filtering by virus type, risk level, user terminal device, user, and discovery time.
     *
     * @param request - ListVirusFileStatusesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListVirusFileStatusesResponse
     *
     * @param ListVirusFileStatusesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListVirusFileStatusesResponse
     */
    public function listVirusFileStatusesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListVirusFileStatuses',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListVirusFileStatusesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries virus files detected under the current Alibaba Cloud account and their disposition status with paging. Supports filtering by virus type, risk level, user terminal device, user, and discovery time.
     *
     * @param request - ListVirusFileStatusesRequest
     *
     * @returns ListVirusFileStatusesResponse
     *
     * @param ListVirusFileStatusesRequest $request
     *
     * @return ListVirusFileStatusesResponse
     */
    public function listVirusFileStatuses($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVirusFileStatusesWithOptions($request, $runtime);
    }

    /**
     * 查询病毒扫描额外名单.
     *
     * @param request - ListVirusScanAdditionalListsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListVirusScanAdditionalListsResponse
     *
     * @param ListVirusScanAdditionalListsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListVirusScanAdditionalListsResponse
     */
    public function listVirusScanAdditionalListsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListVirusScanAdditionalLists',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListVirusScanAdditionalListsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询病毒扫描额外名单.
     *
     * @param request - ListVirusScanAdditionalListsRequest
     *
     * @returns ListVirusScanAdditionalListsResponse
     *
     * @param ListVirusScanAdditionalListsRequest $request
     *
     * @return ListVirusScanAdditionalListsResponse
     */
    public function listVirusScanAdditionalLists($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVirusScanAdditionalListsWithOptions($request, $runtime);
    }

    /**
     * Queries virus scheduled scan policies under the current Alibaba Cloud account with paging.
     *
     * @param request - ListVirusScanScheduledStrategiesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListVirusScanScheduledStrategiesResponse
     *
     * @param ListVirusScanScheduledStrategiesRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return ListVirusScanScheduledStrategiesResponse
     */
    public function listVirusScanScheduledStrategiesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListVirusScanScheduledStrategies',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListVirusScanScheduledStrategiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries virus scheduled scan policies under the current Alibaba Cloud account with paging.
     *
     * @param request - ListVirusScanScheduledStrategiesRequest
     *
     * @returns ListVirusScanScheduledStrategiesResponse
     *
     * @param ListVirusScanScheduledStrategiesRequest $request
     *
     * @return ListVirusScanScheduledStrategiesResponse
     */
    public function listVirusScanScheduledStrategies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVirusScanScheduledStrategiesWithOptions($request, $runtime);
    }

    /**
     * 批量查询病毒扫描任务的状态
     *
     * @param request - ListVirusScanTaskStatusesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListVirusScanTaskStatusesResponse
     *
     * @param ListVirusScanTaskStatusesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListVirusScanTaskStatusesResponse
     */
    public function listVirusScanTaskStatusesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListVirusScanTaskStatuses',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListVirusScanTaskStatusesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 批量查询病毒扫描任务的状态
     *
     * @param request - ListVirusScanTaskStatusesRequest
     *
     * @returns ListVirusScanTaskStatusesResponse
     *
     * @param ListVirusScanTaskStatusesRequest $request
     *
     * @return ListVirusScanTaskStatusesResponse
     */
    public function listVirusScanTaskStatuses($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVirusScanTaskStatusesWithOptions($request, $runtime);
    }

    /**
     * 批量查询病毒扫描任务统计数据.
     *
     * @param request - ListVirusScanTaskSummaryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListVirusScanTaskSummaryResponse
     *
     * @param ListVirusScanTaskSummaryRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListVirusScanTaskSummaryResponse
     */
    public function listVirusScanTaskSummaryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListVirusScanTaskSummary',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListVirusScanTaskSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 批量查询病毒扫描任务统计数据.
     *
     * @param request - ListVirusScanTaskSummaryRequest
     *
     * @returns ListVirusScanTaskSummaryResponse
     *
     * @param ListVirusScanTaskSummaryRequest $request
     *
     * @return ListVirusScanTaskSummaryResponse
     */
    public function listVirusScanTaskSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVirusScanTaskSummaryWithOptions($request, $runtime);
    }

    /**
     * 批量查询病毒扫描任务
     *
     * @param request - ListVirusScanTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListVirusScanTasksResponse
     *
     * @param ListVirusScanTasksRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListVirusScanTasksResponse
     */
    public function listVirusScanTasksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListVirusScanTasks',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListVirusScanTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 批量查询病毒扫描任务
     *
     * @param request - ListVirusScanTasksRequest
     *
     * @returns ListVirusScanTasksResponse
     *
     * @param ListVirusScanTasksRequest $request
     *
     * @return ListVirusScanTasksResponse
     */
    public function listVirusScanTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVirusScanTasksWithOptions($request, $runtime);
    }

    /**
     * Queries scheduled vulnerability scan policies under the current Alibaba Cloud account by paging.
     *
     * @param request - ListVulScanScheduledStrategiesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListVulScanScheduledStrategiesResponse
     *
     * @param ListVulScanScheduledStrategiesRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ListVulScanScheduledStrategiesResponse
     */
    public function listVulScanScheduledStrategiesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListVulScanScheduledStrategies',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListVulScanScheduledStrategiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries scheduled vulnerability scan policies under the current Alibaba Cloud account by paging.
     *
     * @param request - ListVulScanScheduledStrategiesRequest
     *
     * @returns ListVulScanScheduledStrategiesResponse
     *
     * @param ListVulScanScheduledStrategiesRequest $request
     *
     * @return ListVulScanScheduledStrategiesResponse
     */
    public function listVulScanScheduledStrategies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVulScanScheduledStrategiesWithOptions($request, $runtime);
    }

    /**
     * Queries vulnerability scanning tasks under the current Alibaba Cloud account by paged query.
     *
     * @param request - ListVulScanTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListVulScanTasksResponse
     *
     * @param ListVulScanTasksRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListVulScanTasksResponse
     */
    public function listVulScanTasksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListVulScanTasks',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListVulScanTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries vulnerability scanning tasks under the current Alibaba Cloud account by paged query.
     *
     * @param request - ListVulScanTasksRequest
     *
     * @returns ListVulScanTasksResponse
     *
     * @param ListVulScanTasksRequest $request
     *
     * @return ListVulScanTasksResponse
     */
    public function listVulScanTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVulScanTasksWithOptions($request, $runtime);
    }

    /**
     * Queries vulnerabilities detected by scans under the current Alibaba Cloud account by using paged query with paging.
     *
     * @param request - ListVulnerabilitiesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListVulnerabilitiesResponse
     *
     * @param ListVulnerabilitiesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListVulnerabilitiesResponse
     */
    public function listVulnerabilitiesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListVulnerabilities',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListVulnerabilitiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries vulnerabilities detected by scans under the current Alibaba Cloud account by using paged query with paging.
     *
     * @param request - ListVulnerabilitiesRequest
     *
     * @returns ListVulnerabilitiesResponse
     *
     * @param ListVulnerabilitiesRequest $request
     *
     * @return ListVulnerabilitiesResponse
     */
    public function listVulnerabilities($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVulnerabilitiesWithOptions($request, $runtime);
    }

    /**
     * Look up an existing watermark information mapping to retrieve the corresponding string-formatted watermark information from numeric-formatted watermark data.
     *
     * @param request - LookupWmInfoMappingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns LookupWmInfoMappingResponse
     *
     * @param LookupWmInfoMappingRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return LookupWmInfoMappingResponse
     */
    public function lookupWmInfoMappingWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'LookupWmInfoMapping',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return LookupWmInfoMappingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Look up an existing watermark information mapping to retrieve the corresponding string-formatted watermark information from numeric-formatted watermark data.
     *
     * @param request - LookupWmInfoMappingRequest
     *
     * @returns LookupWmInfoMappingResponse
     *
     * @param LookupWmInfoMappingRequest $request
     *
     * @return LookupWmInfoMappingResponse
     */
    public function lookupWmInfoMapping($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->lookupWmInfoMappingWithOptions($request, $runtime);
    }

    /**
     * Modifies an enterprise acceleration policy.
     *
     * @param request - ModifyEnterpriseAcceleratePolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyEnterpriseAcceleratePolicyResponse
     *
     * @param ModifyEnterpriseAcceleratePolicyRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return ModifyEnterpriseAcceleratePolicyResponse
     */
    public function modifyEnterpriseAcceleratePolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accelerationType) {
            @$body['AccelerationType'] = $request->accelerationType;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->eapId) {
            @$body['EapId'] = $request->eapId;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->onTls) {
            @$body['OnTls'] = $request->onTls;
        }

        if (null !== $request->priority) {
            @$body['Priority'] = $request->priority;
        }

        if (null !== $request->showInClient) {
            @$body['ShowInClient'] = $request->showInClient;
        }

        if (null !== $request->upstreamHost) {
            @$body['UpstreamHost'] = $request->upstreamHost;
        }

        if (null !== $request->upstreamPort) {
            @$body['UpstreamPort'] = $request->upstreamPort;
        }

        if (null !== $request->upstreamType) {
            @$body['UpstreamType'] = $request->upstreamType;
        }

        if (null !== $request->userAttributeGroup) {
            @$body['UserAttributeGroup'] = $request->userAttributeGroup;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyEnterpriseAcceleratePolicy',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyEnterpriseAcceleratePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies an enterprise acceleration policy.
     *
     * @param request - ModifyEnterpriseAcceleratePolicyRequest
     *
     * @returns ModifyEnterpriseAcceleratePolicyResponse
     *
     * @param ModifyEnterpriseAcceleratePolicyRequest $request
     *
     * @return ModifyEnterpriseAcceleratePolicyResponse
     */
    public function modifyEnterpriseAcceleratePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyEnterpriseAcceleratePolicyWithOptions($request, $runtime);
    }

    /**
     * Modifies a forwarding rule.
     *
     * @param request - ModifyForwardStrategyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyForwardStrategyResponse
     *
     * @param ModifyForwardStrategyRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyForwardStrategyResponse
     */
    public function modifyForwardStrategyWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->destinationId) {
            @$body['DestinationId'] = $request->destinationId;
        }

        if (null !== $request->destinationType) {
            @$body['DestinationType'] = $request->destinationType;
        }

        if (null !== $request->forwardId) {
            @$body['ForwardId'] = $request->forwardId;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->priority) {
            @$body['Priority'] = $request->priority;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyForwardStrategy',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyForwardStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a forwarding rule.
     *
     * @param request - ModifyForwardStrategyRequest
     *
     * @returns ModifyForwardStrategyResponse
     *
     * @param ModifyForwardStrategyRequest $request
     *
     * @return ModifyForwardStrategyResponse
     */
    public function modifyForwardStrategy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyForwardStrategyWithOptions($request, $runtime);
    }

    /**
     * Modifies the binding items of a forwarding rule.
     *
     * @param request - ModifyForwardStrategyBindingItemsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyForwardStrategyBindingItemsResponse
     *
     * @param ModifyForwardStrategyBindingItemsRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return ModifyForwardStrategyBindingItemsResponse
     */
    public function modifyForwardStrategyBindingItemsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->itemIds) {
            @$query['ItemIds'] = $request->itemIds;
        }

        if (null !== $request->matchMode) {
            @$query['MatchMode'] = $request->matchMode;
        }

        if (null !== $request->modifyType) {
            @$query['ModifyType'] = $request->modifyType;
        }

        $body = [];
        if (null !== $request->forwardId) {
            @$body['ForwardId'] = $request->forwardId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyForwardStrategyBindingItems',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyForwardStrategyBindingItemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the binding items of a forwarding rule.
     *
     * @param request - ModifyForwardStrategyBindingItemsRequest
     *
     * @returns ModifyForwardStrategyBindingItemsResponse
     *
     * @param ModifyForwardStrategyBindingItemsRequest $request
     *
     * @return ModifyForwardStrategyBindingItemsResponse
     */
    public function modifyForwardStrategyBindingItems($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyForwardStrategyBindingItemsWithOptions($request, $runtime);
    }

    /**
     * Removes associated terminal devices from a static device label in batches.
     *
     * @param request - RemoveDeviceGroupMatchDevicesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveDeviceGroupMatchDevicesResponse
     *
     * @param RemoveDeviceGroupMatchDevicesRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return RemoveDeviceGroupMatchDevicesResponse
     */
    public function removeDeviceGroupMatchDevicesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        $bodyFlat = [];
        if (null !== $request->devTags) {
            @$bodyFlat['DevTags'] = $request->devTags;
        }

        if (null !== $request->deviceGroupId) {
            @$body['DeviceGroupId'] = $request->deviceGroupId;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RemoveDeviceGroupMatchDevices',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveDeviceGroupMatchDevicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes associated terminal devices from a static device label in batches.
     *
     * @param request - RemoveDeviceGroupMatchDevicesRequest
     *
     * @returns RemoveDeviceGroupMatchDevicesResponse
     *
     * @param RemoveDeviceGroupMatchDevicesRequest $request
     *
     * @return RemoveDeviceGroupMatchDevicesResponse
     */
    public function removeDeviceGroupMatchDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeDeviceGroupMatchDevicesWithOptions($request, $runtime);
    }

    /**
     * Removes virus scan blacklists and whitelists entries in batch by entry IDs. The entire removal operation is failed if any of the specified entry IDs do not belong to the current Alibaba Cloud account.
     *
     * @param request - RemoveVirusScanAdditionalListsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveVirusScanAdditionalListsResponse
     *
     * @param RemoveVirusScanAdditionalListsRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return RemoveVirusScanAdditionalListsResponse
     */
    public function removeVirusScanAdditionalListsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        $bodyFlat = [];
        if (null !== $request->listIds) {
            @$bodyFlat['ListIds'] = $request->listIds;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RemoveVirusScanAdditionalLists',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveVirusScanAdditionalListsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes virus scan blacklists and whitelists entries in batch by entry IDs. The entire removal operation is failed if any of the specified entry IDs do not belong to the current Alibaba Cloud account.
     *
     * @param request - RemoveVirusScanAdditionalListsRequest
     *
     * @returns RemoveVirusScanAdditionalListsResponse
     *
     * @param RemoveVirusScanAdditionalListsRequest $request
     *
     * @return RemoveVirusScanAdditionalListsResponse
     */
    public function removeVirusScanAdditionalLists($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeVirusScanAdditionalListsWithOptions($request, $runtime);
    }

    /**
     * Revokes a user device session.
     *
     * @param request - RevokeUserDeviceSessionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RevokeUserDeviceSessionResponse
     *
     * @param RevokeUserDeviceSessionRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return RevokeUserDeviceSessionResponse
     */
    public function revokeUserDeviceSessionWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->devTag) {
            @$body['DevTag'] = $request->devTag;
        }

        if (null !== $request->saseUserId) {
            @$body['SaseUserId'] = $request->saseUserId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RevokeUserDeviceSession',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RevokeUserDeviceSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Revokes a user device session.
     *
     * @param request - RevokeUserDeviceSessionRequest
     *
     * @returns RevokeUserDeviceSessionResponse
     *
     * @param RevokeUserDeviceSessionRequest $request
     *
     * @return RevokeUserDeviceSessionResponse
     */
    public function revokeUserDeviceSession($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revokeUserDeviceSessionWithOptions($request, $runtime);
    }

    /**
     * Revokes a user logon session.
     *
     * @deprecated OpenAPI RevokeUserSession is deprecated
     *
     * @param request - RevokeUserSessionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RevokeUserSessionResponse
     *
     * @param RevokeUserSessionRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return RevokeUserSessionResponse
     */
    public function revokeUserSessionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->externalIds) {
            @$query['ExternalIds'] = $request->externalIds;
        }

        if (null !== $request->idpId) {
            @$query['IdpId'] = $request->idpId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RevokeUserSession',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RevokeUserSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Revokes a user logon session.
     *
     * @deprecated OpenAPI RevokeUserSession is deprecated
     *
     * @param request - RevokeUserSessionRequest
     *
     * @returns RevokeUserSessionResponse
     *
     * @param RevokeUserSessionRequest $request
     *
     * @return RevokeUserSessionResponse
     */
    public function revokeUserSession($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revokeUserSessionWithOptions($request, $runtime);
    }

    /**
     * Configures the real-time anti-virus defense policy for the current Alibaba Cloud account. The first call creates the policy, and subsequent calls update it. The complete updated configuration is returned. When configuring for the first time, Status, MatchMode, HighRiskOperation, MidRiskOperation, LowRiskOperation, and ScanTargets are all required. ScanTargets and Whitelist are full replacements. The collection you pass in replaces the existing configuration. When MatchMode is set to UserGroupNormal, you must pass in the complete UserGroupIds on every call. When Status is not set to Disabled, the system validates the endpoint hardening license count. The call fails if the count exceeds the purchased licenses.
     *
     * @param request - UpdateAntiVirusRealTimeDefenceStrategyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAntiVirusRealTimeDefenceStrategyResponse
     *
     * @param UpdateAntiVirusRealTimeDefenceStrategyRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return UpdateAntiVirusRealTimeDefenceStrategyResponse
     */
    public function updateAntiVirusRealTimeDefenceStrategyWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->highRiskOperation) {
            @$body['HighRiskOperation'] = $request->highRiskOperation;
        }

        if (null !== $request->lowRiskOperation) {
            @$body['LowRiskOperation'] = $request->lowRiskOperation;
        }

        if (null !== $request->matchMode) {
            @$body['MatchMode'] = $request->matchMode;
        }

        if (null !== $request->maxCpuUsage) {
            @$body['MaxCpuUsage'] = $request->maxCpuUsage;
        }

        if (null !== $request->midRiskOperation) {
            @$body['MidRiskOperation'] = $request->midRiskOperation;
        }

        $bodyFlat = [];
        if (null !== $request->scanTargets) {
            @$bodyFlat['ScanTargets'] = $request->scanTargets;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        if (null !== $request->userGroupIds) {
            @$bodyFlat['UserGroupIds'] = $request->userGroupIds;
        }

        if (null !== $request->whitelist) {
            @$bodyFlat['Whitelist'] = $request->whitelist;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateAntiVirusRealTimeDefenceStrategy',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAntiVirusRealTimeDefenceStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures the real-time anti-virus defense policy for the current Alibaba Cloud account. The first call creates the policy, and subsequent calls update it. The complete updated configuration is returned. When configuring for the first time, Status, MatchMode, HighRiskOperation, MidRiskOperation, LowRiskOperation, and ScanTargets are all required. ScanTargets and Whitelist are full replacements. The collection you pass in replaces the existing configuration. When MatchMode is set to UserGroupNormal, you must pass in the complete UserGroupIds on every call. When Status is not set to Disabled, the system validates the endpoint hardening license count. The call fails if the count exceeds the purchased licenses.
     *
     * @param request - UpdateAntiVirusRealTimeDefenceStrategyRequest
     *
     * @returns UpdateAntiVirusRealTimeDefenceStrategyResponse
     *
     * @param UpdateAntiVirusRealTimeDefenceStrategyRequest $request
     *
     * @return UpdateAntiVirusRealTimeDefenceStrategyResponse
     */
    public function updateAntiVirusRealTimeDefenceStrategy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAntiVirusRealTimeDefenceStrategyWithOptions($request, $runtime);
    }

    /**
     * Updates an approval process under the current Alibaba Cloud account.
     *
     * @param tmpReq - UpdateApprovalProcessRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateApprovalProcessResponse
     *
     * @param UpdateApprovalProcessRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateApprovalProcessResponse
     */
    public function updateApprovalProcessWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateApprovalProcessShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->matchSchemaConfigs) {
            $request->matchSchemaConfigsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->matchSchemaConfigs, 'MatchSchemaConfigs', 'json');
        }

        if (null !== $tmpReq->matchSchemas) {
            $request->matchSchemasShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->matchSchemas, 'MatchSchemas', 'json');
        }

        $query = [];
        if (null !== $request->approvalType) {
            @$query['ApprovalType'] = $request->approvalType;
        }

        if (null !== $request->eventLabel) {
            @$query['EventLabel'] = $request->eventLabel;
        }

        if (null !== $request->externalConfig) {
            @$query['ExternalConfig'] = $request->externalConfig;
        }

        if (null !== $request->matchSchemaConfigsShrink) {
            @$query['MatchSchemaConfigs'] = $request->matchSchemaConfigsShrink;
        }

        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->matchSchemasShrink) {
            @$body['MatchSchemas'] = $request->matchSchemasShrink;
        }

        if (null !== $request->processId) {
            @$body['ProcessId'] = $request->processId;
        }

        if (null !== $request->processName) {
            @$body['ProcessName'] = $request->processName;
        }

        $bodyFlat = [];
        if (null !== $request->processNodes) {
            @$bodyFlat['ProcessNodes'] = $request->processNodes;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateApprovalProcess',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateApprovalProcessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates an approval process under the current Alibaba Cloud account.
     *
     * @param request - UpdateApprovalProcessRequest
     *
     * @returns UpdateApprovalProcessResponse
     *
     * @param UpdateApprovalProcessRequest $request
     *
     * @return UpdateApprovalProcessResponse
     */
    public function updateApprovalProcess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateApprovalProcessWithOptions($request, $runtime);
    }

    /**
     * Updates the instance status of an approval under the current Alibaba Cloud account.
     *
     * @param request - UpdateApprovalStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateApprovalStatusResponse
     *
     * @param UpdateApprovalStatusRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateApprovalStatusResponse
     */
    public function updateApprovalStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->approvalId) {
            @$query['ApprovalId'] = $request->approvalId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateApprovalStatus',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateApprovalStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the instance status of an approval under the current Alibaba Cloud account.
     *
     * @param request - UpdateApprovalStatusRequest
     *
     * @returns UpdateApprovalStatusResponse
     *
     * @param UpdateApprovalStatusRequest $request
     *
     * @return UpdateApprovalStatusResponse
     */
    public function updateApprovalStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateApprovalStatusWithOptions($request, $runtime);
    }

    /**
     * Update the auto-start and anti-uninstall policy for your Alibaba Cloud account.
     *
     * @param tmpReq - UpdateBootAndAntiUninstallPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateBootAndAntiUninstallPolicyResponse
     *
     * @param UpdateBootAndAntiUninstallPolicyRequest $tmpReq
     * @param RuntimeOptions                          $runtime
     *
     * @return UpdateBootAndAntiUninstallPolicyResponse
     */
    public function updateBootAndAntiUninstallPolicyWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateBootAndAntiUninstallPolicyShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->blockContent) {
            $request->blockContentShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->blockContent, 'BlockContent', 'json');
        }

        $body = [];
        if (null !== $request->allowReport) {
            @$body['AllowReport'] = $request->allowReport;
        }

        if (null !== $request->blockContentShrink) {
            @$body['BlockContent'] = $request->blockContentShrink;
        }

        if (null !== $request->isAntiUninstall) {
            @$body['IsAntiUninstall'] = $request->isAntiUninstall;
        }

        if (null !== $request->isBoot) {
            @$body['IsBoot'] = $request->isBoot;
        }

        $bodyFlat = [];
        if (null !== $request->userGroupIds) {
            @$bodyFlat['UserGroupIds'] = $request->userGroupIds;
        }

        if (null !== $request->whitelistUsers) {
            @$bodyFlat['WhitelistUsers'] = $request->whitelistUsers;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateBootAndAntiUninstallPolicy',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateBootAndAntiUninstallPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Update the auto-start and anti-uninstall policy for your Alibaba Cloud account.
     *
     * @param request - UpdateBootAndAntiUninstallPolicyRequest
     *
     * @returns UpdateBootAndAntiUninstallPolicyResponse
     *
     * @param UpdateBootAndAntiUninstallPolicyRequest $request
     *
     * @return UpdateBootAndAntiUninstallPolicyResponse
     */
    public function updateBootAndAntiUninstallPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateBootAndAntiUninstallPolicyWithOptions($request, $runtime);
    }

    /**
     * Update user information for a custom identity provider in your Alibaba Cloud account.
     *
     * @param request - UpdateClientUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateClientUserResponse
     *
     * @param UpdateClientUserRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateClientUserResponse
     */
    public function updateClientUserWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->departmentId) {
            @$query['DepartmentId'] = $request->departmentId;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->email) {
            @$query['Email'] = $request->email;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->mobileNumber) {
            @$query['MobileNumber'] = $request->mobileNumber;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateClientUser',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateClientUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Update user information for a custom identity provider in your Alibaba Cloud account.
     *
     * @param request - UpdateClientUserRequest
     *
     * @returns UpdateClientUserResponse
     *
     * @param UpdateClientUserRequest $request
     *
     * @return UpdateClientUserResponse
     */
    public function updateClientUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateClientUserWithOptions($request, $runtime);
    }

    /**
     * Sets the password for a specified user that belongs to a custom identity source.
     *
     * @param request - UpdateClientUserPasswordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateClientUserPasswordResponse
     *
     * @param UpdateClientUserPasswordRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateClientUserPasswordResponse
     */
    public function updateClientUserPasswordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->password) {
            @$query['Password'] = $request->password;
        }

        if (null !== $request->username) {
            @$query['Username'] = $request->username;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateClientUserPassword',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateClientUserPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sets the password for a specified user that belongs to a custom identity source.
     *
     * @param request - UpdateClientUserPasswordRequest
     *
     * @returns UpdateClientUserPasswordResponse
     *
     * @param UpdateClientUserPasswordRequest $request
     *
     * @return UpdateClientUserPasswordResponse
     */
    public function updateClientUserPassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateClientUserPasswordWithOptions($request, $runtime);
    }

    /**
     * Sets the status of a specified user from a custom identity source for your Alibaba Cloud account.
     *
     * @param request - UpdateClientUserStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateClientUserStatusResponse
     *
     * @param UpdateClientUserStatusRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateClientUserStatusResponse
     */
    public function updateClientUserStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateClientUserStatus',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateClientUserStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sets the status of a specified user from a custom identity source for your Alibaba Cloud account.
     *
     * @param request - UpdateClientUserStatusRequest
     *
     * @returns UpdateClientUserStatusResponse
     *
     * @param UpdateClientUserStatusRequest $request
     *
     * @return UpdateClientUserStatusResponse
     */
    public function updateClientUserStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateClientUserStatusWithOptions($request, $runtime);
    }

    /**
     * Modifies a Connector instance under the current Alibaba Cloud account.
     *
     * @param request - UpdateConnectorRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateConnectorResponse
     *
     * @param UpdateConnectorRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateConnectorResponse
     */
    public function updateConnectorWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accelerateStatus) {
            @$body['AccelerateStatus'] = $request->accelerateStatus;
        }

        if (null !== $request->connectorId) {
            @$body['ConnectorId'] = $request->connectorId;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->switchStatus) {
            @$body['SwitchStatus'] = $request->switchStatus;
        }

        if (null !== $request->vipCidr) {
            @$body['VipCidr'] = $request->vipCidr;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateConnector',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateConnectorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a Connector instance under the current Alibaba Cloud account.
     *
     * @param request - UpdateConnectorRequest
     *
     * @returns UpdateConnectorResponse
     *
     * @param UpdateConnectorRequest $request
     *
     * @return UpdateConnectorResponse
     */
    public function updateConnector($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateConnectorWithOptions($request, $runtime);
    }

    /**
     * Modifies a ConnectorClient under the current Alibaba Cloud account.
     *
     * @param request - UpdateConnectorClientRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateConnectorClientResponse
     *
     * @param UpdateConnectorClientRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateConnectorClientResponse
     */
    public function updateConnectorClientWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->connectorId) {
            @$body['ConnectorId'] = $request->connectorId;
        }

        if (null !== $request->devTag) {
            @$body['DevTag'] = $request->devTag;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateConnectorClient',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateConnectorClientResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a ConnectorClient under the current Alibaba Cloud account.
     *
     * @param request - UpdateConnectorClientRequest
     *
     * @returns UpdateConnectorClientResponse
     *
     * @param UpdateConnectorClientRequest $request
     *
     * @return UpdateConnectorClientResponse
     */
    public function updateConnectorClient($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateConnectorClientWithOptions($request, $runtime);
    }

    /**
     * Updates a device label.
     *
     * @param request - UpdateDeviceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDeviceGroupResponse
     *
     * @param UpdateDeviceGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateDeviceGroupResponse
     */
    public function updateDeviceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->deviceGroupId) {
            @$body['DeviceGroupId'] = $request->deviceGroupId;
        }

        if (null !== $request->dynamicOperator) {
            @$body['DynamicOperator'] = $request->dynamicOperator;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateDeviceGroup',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateDeviceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a device label.
     *
     * @param request - UpdateDeviceGroupRequest
     *
     * @returns UpdateDeviceGroupResponse
     *
     * @param UpdateDeviceGroupRequest $request
     *
     * @return UpdateDeviceGroupResponse
     */
    public function updateDeviceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDeviceGroupWithOptions($request, $runtime);
    }

    /**
     * Updates the name of a domain name list.
     *
     * @param request - UpdateDomainMetaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDomainMetaResponse
     *
     * @param UpdateDomainMetaRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateDomainMetaResponse
     */
    public function updateDomainMetaWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->listId) {
            @$body['ListId'] = $request->listId;
        }

        if (null !== $request->listType) {
            @$body['ListType'] = $request->listType;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateDomainMeta',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateDomainMetaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the name of a domain name list.
     *
     * @param request - UpdateDomainMetaRequest
     *
     * @returns UpdateDomainMetaResponse
     *
     * @param UpdateDomainMetaRequest $request
     *
     * @return UpdateDomainMetaResponse
     */
    public function updateDomainMeta($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDomainMetaWithOptions($request, $runtime);
    }

    /**
     * Modifies a dynamic route in your Alibaba Cloud account.
     *
     * @param request - UpdateDynamicRouteRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDynamicRouteResponse
     *
     * @param UpdateDynamicRouteRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateDynamicRouteResponse
     */
    public function updateDynamicRouteWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        $bodyFlat = [];
        if (null !== $request->applicationIds) {
            @$bodyFlat['ApplicationIds'] = $request->applicationIds;
        }

        if (null !== $request->applicationType) {
            @$body['ApplicationType'] = $request->applicationType;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->dynamicRouteId) {
            @$body['DynamicRouteId'] = $request->dynamicRouteId;
        }

        if (null !== $request->dynamicRouteType) {
            @$body['DynamicRouteType'] = $request->dynamicRouteType;
        }

        if (null !== $request->modifyType) {
            @$body['ModifyType'] = $request->modifyType;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->nextHop) {
            @$body['NextHop'] = $request->nextHop;
        }

        if (null !== $request->priority) {
            @$body['Priority'] = $request->priority;
        }

        if (null !== $request->regionIds) {
            @$bodyFlat['RegionIds'] = $request->regionIds;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        if (null !== $request->tagIds) {
            @$bodyFlat['TagIds'] = $request->tagIds;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateDynamicRoute',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateDynamicRouteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a dynamic route in your Alibaba Cloud account.
     *
     * @param request - UpdateDynamicRouteRequest
     *
     * @returns UpdateDynamicRouteResponse
     *
     * @param UpdateDynamicRouteRequest $request
     *
     * @return UpdateDynamicRouteResponse
     */
    public function updateDynamicRoute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDynamicRouteWithOptions($request, $runtime);
    }

    /**
     * Update the status of device registration applications that exceed your Alibaba Cloud account\\"s quota.
     *
     * @param request - UpdateExcessiveDeviceRegistrationApplicationsStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateExcessiveDeviceRegistrationApplicationsStatusResponse
     *
     * @param UpdateExcessiveDeviceRegistrationApplicationsStatusRequest $request
     * @param RuntimeOptions                                             $runtime
     *
     * @return UpdateExcessiveDeviceRegistrationApplicationsStatusResponse
     */
    public function updateExcessiveDeviceRegistrationApplicationsStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        $bodyFlat = [];
        if (null !== $request->applicationIds) {
            @$bodyFlat['ApplicationIds'] = $request->applicationIds;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateExcessiveDeviceRegistrationApplicationsStatus',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateExcessiveDeviceRegistrationApplicationsStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Update the status of device registration applications that exceed your Alibaba Cloud account\\"s quota.
     *
     * @param request - UpdateExcessiveDeviceRegistrationApplicationsStatusRequest
     *
     * @returns UpdateExcessiveDeviceRegistrationApplicationsStatusResponse
     *
     * @param UpdateExcessiveDeviceRegistrationApplicationsStatusRequest $request
     *
     * @return UpdateExcessiveDeviceRegistrationApplicationsStatusResponse
     */
    public function updateExcessiveDeviceRegistrationApplicationsStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateExcessiveDeviceRegistrationApplicationsStatusWithOptions($request, $runtime);
    }

    /**
     * Deletes a department from a custom identity provider for the current Alibaba Cloud account.
     *
     * @param request - UpdateIdpDepartmentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateIdpDepartmentResponse
     *
     * @param UpdateIdpDepartmentRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateIdpDepartmentResponse
     */
    public function updateIdpDepartmentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->departmentId) {
            @$query['DepartmentId'] = $request->departmentId;
        }

        if (null !== $request->departmentName) {
            @$query['DepartmentName'] = $request->departmentName;
        }

        if (null !== $request->idpConfigId) {
            @$query['IdpConfigId'] = $request->idpConfigId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateIdpDepartment',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateIdpDepartmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a department from a custom identity provider for the current Alibaba Cloud account.
     *
     * @param request - UpdateIdpDepartmentRequest
     *
     * @returns UpdateIdpDepartmentResponse
     *
     * @param UpdateIdpDepartmentRequest $request
     *
     * @return UpdateIdpDepartmentResponse
     */
    public function updateIdpDepartment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateIdpDepartmentWithOptions($request, $runtime);
    }

    /**
     * Updates the phone number whitelist for visitor access SMS logon.
     *
     * @remarks
     * - A maximum of 1024 phone numbers are supported.
     * - Duplicate phone numbers are not allowed. Phone numbers in invalid formats are rejected. Only Chinese mainland phone numbers are supported.
     * - You must update all phone numbers at once. Incremental updates are not supported.
     *
     * @param request - UpdateNacPortalSmsPhoneWhitelistRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateNacPortalSmsPhoneWhitelistResponse
     *
     * @param UpdateNacPortalSmsPhoneWhitelistRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return UpdateNacPortalSmsPhoneWhitelistResponse
     */
    public function updateNacPortalSmsPhoneWhitelistWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->phones) {
            @$query['Phones'] = $request->phones;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateNacPortalSmsPhoneWhitelist',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateNacPortalSmsPhoneWhitelistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the phone number whitelist for visitor access SMS logon.
     *
     * @remarks
     * - A maximum of 1024 phone numbers are supported.
     * - Duplicate phone numbers are not allowed. Phone numbers in invalid formats are rejected. Only Chinese mainland phone numbers are supported.
     * - You must update all phone numbers at once. Incremental updates are not supported.
     *
     * @param request - UpdateNacPortalSmsPhoneWhitelistRequest
     *
     * @returns UpdateNacPortalSmsPhoneWhitelistResponse
     *
     * @param UpdateNacPortalSmsPhoneWhitelistRequest $request
     *
     * @return UpdateNacPortalSmsPhoneWhitelistResponse
     */
    public function updateNacPortalSmsPhoneWhitelist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateNacPortalSmsPhoneWhitelistWithOptions($request, $runtime);
    }

    /**
     * Updates the network access certificate status for users in your Alibaba Cloud account.
     *
     * @param request - UpdateNacUserCertStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateNacUserCertStatusResponse
     *
     * @param UpdateNacUserCertStatusRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateNacUserCertStatusResponse
     */
    public function updateNacUserCertStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        $bodyFlat = [];
        if (null !== $request->idList) {
            @$bodyFlat['IdList'] = $request->idList;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateNacUserCertStatus',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateNacUserCertStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the network access certificate status for users in your Alibaba Cloud account.
     *
     * @param request - UpdateNacUserCertStatusRequest
     *
     * @returns UpdateNacUserCertStatusResponse
     *
     * @param UpdateNacUserCertStatusRequest $request
     *
     * @return UpdateNacUserCertStatusResponse
     */
    public function updateNacUserCertStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateNacUserCertStatusWithOptions($request, $runtime);
    }

    /**
     * Modifies a private access application under the current Alibaba Cloud account.
     *
     * @param tmpReq - UpdatePrivateAccessApplicationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdatePrivateAccessApplicationResponse
     *
     * @param UpdatePrivateAccessApplicationRequest $tmpReq
     * @param RuntimeOptions                        $runtime
     *
     * @return UpdatePrivateAccessApplicationResponse
     */
    public function updatePrivateAccessApplicationWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdatePrivateAccessApplicationShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->l7Config) {
            $request->l7ConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->l7Config, 'L7Config', 'json');
        }

        if (null !== $tmpReq->unauthorizedAccessConfig) {
            $request->unauthorizedAccessConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->unauthorizedAccessConfig, 'UnauthorizedAccessConfig', 'json');
        }

        $body = [];
        $bodyFlat = [];
        if (null !== $request->addressGroups) {
            @$bodyFlat['AddressGroups'] = $request->addressGroups;
        }

        if (null !== $request->addresses) {
            @$bodyFlat['Addresses'] = $request->addresses;
        }

        if (null !== $request->applicationId) {
            @$body['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->configMode) {
            @$body['ConfigMode'] = $request->configMode;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->l7ConfigShrink) {
            @$body['L7Config'] = $request->l7ConfigShrink;
        }

        if (null !== $request->l7ProxyDomainAutomaticPrefix) {
            @$body['L7ProxyDomainAutomaticPrefix'] = $request->l7ProxyDomainAutomaticPrefix;
        }

        if (null !== $request->l7ProxyDomainCustom) {
            @$body['L7ProxyDomainCustom'] = $request->l7ProxyDomainCustom;
        }

        if (null !== $request->l7ProxyDomainPrivate) {
            @$body['L7ProxyDomainPrivate'] = $request->l7ProxyDomainPrivate;
        }

        if (null !== $request->modifyType) {
            @$body['ModifyType'] = $request->modifyType;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->portRanges) {
            @$bodyFlat['PortRanges'] = $request->portRanges;
        }

        if (null !== $request->protocol) {
            @$body['Protocol'] = $request->protocol;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        if (null !== $request->tagIds) {
            @$bodyFlat['TagIds'] = $request->tagIds;
        }

        if (null !== $request->unauthorizedAccessConfigShrink) {
            @$body['UnauthorizedAccessConfig'] = $request->unauthorizedAccessConfigShrink;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdatePrivateAccessApplication',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdatePrivateAccessApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a private access application under the current Alibaba Cloud account.
     *
     * @param request - UpdatePrivateAccessApplicationRequest
     *
     * @returns UpdatePrivateAccessApplicationResponse
     *
     * @param UpdatePrivateAccessApplicationRequest $request
     *
     * @return UpdatePrivateAccessApplicationResponse
     */
    public function updatePrivateAccessApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePrivateAccessApplicationWithOptions($request, $runtime);
    }

    /**
     * Updates the Layer 7 access switch for an internal-facing application.
     *
     * @param request - UpdatePrivateAccessApplicationL7SwitchRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdatePrivateAccessApplicationL7SwitchResponse
     *
     * @param UpdatePrivateAccessApplicationL7SwitchRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return UpdatePrivateAccessApplicationL7SwitchResponse
     */
    public function updatePrivateAccessApplicationL7SwitchWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->applicationId) {
            @$body['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->devTagMarkStatus) {
            @$body['DevTagMarkStatus'] = $request->devTagMarkStatus;
        }

        if (null !== $request->downloadAuditStatus) {
            @$body['DownloadAuditStatus'] = $request->downloadAuditStatus;
        }

        $bodyFlat = [];
        if (null !== $request->portRanges) {
            @$bodyFlat['PortRanges'] = $request->portRanges;
        }

        if (null !== $request->srcIpMarkStatus) {
            @$body['SrcIpMarkStatus'] = $request->srcIpMarkStatus;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        if (null !== $request->timeoutSec) {
            @$body['TimeoutSec'] = $request->timeoutSec;
        }

        if (null !== $request->userMarkStatus) {
            @$body['UserMarkStatus'] = $request->userMarkStatus;
        }

        if (null !== $request->zeroTrustStatus) {
            @$body['ZeroTrustStatus'] = $request->zeroTrustStatus;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdatePrivateAccessApplicationL7Switch',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdatePrivateAccessApplicationL7SwitchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the Layer 7 access switch for an internal-facing application.
     *
     * @param request - UpdatePrivateAccessApplicationL7SwitchRequest
     *
     * @returns UpdatePrivateAccessApplicationL7SwitchResponse
     *
     * @param UpdatePrivateAccessApplicationL7SwitchRequest $request
     *
     * @return UpdatePrivateAccessApplicationL7SwitchResponse
     */
    public function updatePrivateAccessApplicationL7Switch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePrivateAccessApplicationL7SwitchWithOptions($request, $runtime);
    }

    /**
     * Update an internal network access policy for your Alibaba Cloud account.
     *
     * @param request - UpdatePrivateAccessPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdatePrivateAccessPolicyResponse
     *
     * @param UpdatePrivateAccessPolicyRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdatePrivateAccessPolicyResponse
     */
    public function updatePrivateAccessPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        $bodyFlat = [];
        if (null !== $request->applicationIds) {
            @$bodyFlat['ApplicationIds'] = $request->applicationIds;
        }

        if (null !== $request->applicationType) {
            @$body['ApplicationType'] = $request->applicationType;
        }

        if (null !== $request->customUserAttributes) {
            @$bodyFlat['CustomUserAttributes'] = $request->customUserAttributes;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->deviceAttributeAction) {
            @$body['DeviceAttributeAction'] = $request->deviceAttributeAction;
        }

        if (null !== $request->deviceAttributeId) {
            @$body['DeviceAttributeId'] = $request->deviceAttributeId;
        }

        if (null !== $request->modifyType) {
            @$body['ModifyType'] = $request->modifyType;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->policyAction) {
            @$body['PolicyAction'] = $request->policyAction;
        }

        if (null !== $request->policyId) {
            @$body['PolicyId'] = $request->policyId;
        }

        if (null !== $request->priority) {
            @$body['Priority'] = $request->priority;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        if (null !== $request->tagIds) {
            @$bodyFlat['TagIds'] = $request->tagIds;
        }

        if (null !== $request->triggerTemplateId) {
            @$body['TriggerTemplateId'] = $request->triggerTemplateId;
        }

        if (null !== $request->trustedProcessGroupIds) {
            @$bodyFlat['TrustedProcessGroupIds'] = $request->trustedProcessGroupIds;
        }

        if (null !== $request->trustedProcessStatus) {
            @$body['TrustedProcessStatus'] = $request->trustedProcessStatus;
        }

        if (null !== $request->trustedSoftwareIds) {
            @$bodyFlat['TrustedSoftwareIds'] = $request->trustedSoftwareIds;
        }

        if (null !== $request->userGroupIds) {
            @$bodyFlat['UserGroupIds'] = $request->userGroupIds;
        }

        if (null !== $request->userGroupMode) {
            @$body['UserGroupMode'] = $request->userGroupMode;
        }

        if (null !== $request->validFrom) {
            @$body['ValidFrom'] = $request->validFrom;
        }

        if (null !== $request->validTimeStatus) {
            @$body['ValidTimeStatus'] = $request->validTimeStatus;
        }

        if (null !== $request->validUntil) {
            @$body['ValidUntil'] = $request->validUntil;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdatePrivateAccessPolicy',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdatePrivateAccessPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Update an internal network access policy for your Alibaba Cloud account.
     *
     * @param request - UpdatePrivateAccessPolicyRequest
     *
     * @returns UpdatePrivateAccessPolicyResponse
     *
     * @param UpdatePrivateAccessPolicyRequest $request
     *
     * @return UpdatePrivateAccessPolicyResponse
     */
    public function updatePrivateAccessPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePrivateAccessPolicyWithOptions($request, $runtime);
    }

    /**
     * Updates a software prohibition policy.
     *
     * @param request - UpdateProhibitedPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateProhibitedPolicyResponse
     *
     * @param UpdateProhibitedPolicyRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateProhibitedPolicyResponse
     */
    public function updateProhibitedPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->allowReport) {
            @$body['AllowReport'] = $request->allowReport;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->enabled) {
            @$body['Enabled'] = $request->enabled;
        }

        if (null !== $request->forceKill) {
            @$body['ForceKill'] = $request->forceKill;
        }

        if (null !== $request->mainButtonTextCh) {
            @$body['MainButtonTextCh'] = $request->mainButtonTextCh;
        }

        if (null !== $request->mainButtonTextEn) {
            @$body['MainButtonTextEn'] = $request->mainButtonTextEn;
        }

        if (null !== $request->matchMode) {
            @$body['MatchMode'] = $request->matchMode;
        }

        if (null !== $request->minorButtonTextCh) {
            @$body['MinorButtonTextCh'] = $request->minorButtonTextCh;
        }

        if (null !== $request->minorButtonTextEn) {
            @$body['MinorButtonTextEn'] = $request->minorButtonTextEn;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->objectType) {
            @$body['ObjectType'] = $request->objectType;
        }

        if (null !== $request->policyId) {
            @$body['PolicyId'] = $request->policyId;
        }

        if (null !== $request->policyType) {
            @$body['PolicyType'] = $request->policyType;
        }

        if (null !== $request->priority) {
            @$body['Priority'] = $request->priority;
        }

        if (null !== $request->promptCh) {
            @$body['PromptCh'] = $request->promptCh;
        }

        if (null !== $request->promptEn) {
            @$body['PromptEn'] = $request->promptEn;
        }

        $bodyFlat = [];
        if (null !== $request->softwareIds) {
            @$bodyFlat['SoftwareIds'] = $request->softwareIds;
        }

        if (null !== $request->tagIds) {
            @$bodyFlat['TagIds'] = $request->tagIds;
        }

        if (null !== $request->titleCh) {
            @$body['TitleCh'] = $request->titleCh;
        }

        if (null !== $request->titleEn) {
            @$body['TitleEn'] = $request->titleEn;
        }

        if (null !== $request->userGroupIds) {
            @$bodyFlat['UserGroupIds'] = $request->userGroupIds;
        }

        if (null !== $request->whitelist) {
            @$bodyFlat['Whitelist'] = $request->whitelist;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateProhibitedPolicy',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateProhibitedPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a software prohibition policy.
     *
     * @param request - UpdateProhibitedPolicyRequest
     *
     * @returns UpdateProhibitedPolicyResponse
     *
     * @param UpdateProhibitedPolicyRequest $request
     *
     * @return UpdateProhibitedPolicyResponse
     */
    public function updateProhibitedPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateProhibitedPolicyWithOptions($request, $runtime);
    }

    /**
     * Updates a custom prohibited software entry.
     *
     * @param request - UpdateProhibitedSoftwareRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateProhibitedSoftwareResponse
     *
     * @param UpdateProhibitedSoftwareRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateProhibitedSoftwareResponse
     */
    public function updateProhibitedSoftwareWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        $bodyFlat = [];
        if (null !== $request->linuxProcesses) {
            @$bodyFlat['LinuxProcesses'] = $request->linuxProcesses;
        }

        if (null !== $request->macOSProcesses) {
            @$bodyFlat['MacOSProcesses'] = $request->macOSProcesses;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->softwareId) {
            @$body['SoftwareId'] = $request->softwareId;
        }

        if (null !== $request->tagIds) {
            @$bodyFlat['TagIds'] = $request->tagIds;
        }

        if (null !== $request->windowsProcesses) {
            @$bodyFlat['WindowsProcesses'] = $request->windowsProcesses;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateProhibitedSoftware',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateProhibitedSoftwareResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a custom prohibited software entry.
     *
     * @param request - UpdateProhibitedSoftwareRequest
     *
     * @returns UpdateProhibitedSoftwareResponse
     *
     * @param UpdateProhibitedSoftwareRequest $request
     *
     * @return UpdateProhibitedSoftwareResponse
     */
    public function updateProhibitedSoftware($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateProhibitedSoftwareWithOptions($request, $runtime);
    }

    /**
     * Updates a custom prohibited software tag.
     *
     * @param request - UpdateProhibitedTagRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateProhibitedTagResponse
     *
     * @param UpdateProhibitedTagRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateProhibitedTagResponse
     */
    public function updateProhibitedTagWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->tagId) {
            @$body['TagId'] = $request->tagId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateProhibitedTag',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateProhibitedTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a custom prohibited software tag.
     *
     * @param request - UpdateProhibitedTagRequest
     *
     * @returns UpdateProhibitedTagResponse
     *
     * @param UpdateProhibitedTagRequest $request
     *
     * @return UpdateProhibitedTagResponse
     */
    public function updateProhibitedTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateProhibitedTagWithOptions($request, $runtime);
    }

    /**
     * Modifies a device registration policy for your Alibaba Cloud account.
     *
     * @param tmpReq - UpdateRegistrationPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateRegistrationPolicyResponse
     *
     * @param UpdateRegistrationPolicyRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateRegistrationPolicyResponse
     */
    public function updateRegistrationPolicyWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateRegistrationPolicyShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->companyLimitCount) {
            $request->companyLimitCountShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->companyLimitCount, 'CompanyLimitCount', 'json');
        }

        if (null !== $tmpReq->personalLimitCount) {
            $request->personalLimitCountShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->personalLimitCount, 'PersonalLimitCount', 'json');
        }

        $body = [];
        if (null !== $request->companyLimitCountShrink) {
            @$body['CompanyLimitCount'] = $request->companyLimitCountShrink;
        }

        if (null !== $request->companyLimitType) {
            @$body['CompanyLimitType'] = $request->companyLimitType;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->matchMode) {
            @$body['MatchMode'] = $request->matchMode;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->personalLimitCountShrink) {
            @$body['PersonalLimitCount'] = $request->personalLimitCountShrink;
        }

        if (null !== $request->personalLimitType) {
            @$body['PersonalLimitType'] = $request->personalLimitType;
        }

        if (null !== $request->policyId) {
            @$body['PolicyId'] = $request->policyId;
        }

        if (null !== $request->priority) {
            @$body['Priority'] = $request->priority;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        $bodyFlat = [];
        if (null !== $request->userGroupIds) {
            @$bodyFlat['UserGroupIds'] = $request->userGroupIds;
        }

        if (null !== $request->whitelist) {
            @$bodyFlat['Whitelist'] = $request->whitelist;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateRegistrationPolicy',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateRegistrationPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a device registration policy for your Alibaba Cloud account.
     *
     * @param request - UpdateRegistrationPolicyRequest
     *
     * @returns UpdateRegistrationPolicyResponse
     *
     * @param UpdateRegistrationPolicyRequest $request
     *
     * @return UpdateRegistrationPolicyResponse
     */
    public function updateRegistrationPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRegistrationPolicyWithOptions($request, $runtime);
    }

    /**
     * Updates the current processing status and conclusion of a specified risk event.
     *
     * @remarks
     * ## Request description
     * - This operation allows you to update the processing status of a specific risk event under your Alibaba Cloud account.
     * - When `Status` is set to `Processed`, you must provide the `RiskConfirm` parameter to specify the manually confirmed risk conclusion.
     * - If `Status` is `Unprocess` or `Processing`, do not include the `RiskConfirm` parameter.
     * - The `RiskScene` parameter is optional. If not provided, the system automatically populates it based on `RiskId`.
     * - The `RiskConfirmDesc` field provides additional explanation or remarks for the processing decision. The length must be 1 to 128 characters.
     *
     * @param request - UpdateRiskStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateRiskStatusResponse
     *
     * @param UpdateRiskStatusRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateRiskStatusResponse
     */
    public function updateRiskStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->riskConfirm) {
            @$body['RiskConfirm'] = $request->riskConfirm;
        }

        if (null !== $request->riskConfirmDesc) {
            @$body['RiskConfirmDesc'] = $request->riskConfirmDesc;
        }

        if (null !== $request->riskId) {
            @$body['RiskId'] = $request->riskId;
        }

        if (null !== $request->riskScene) {
            @$body['RiskScene'] = $request->riskScene;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateRiskStatus',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateRiskStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the current processing status and conclusion of a specified risk event.
     *
     * @remarks
     * ## Request description
     * - This operation allows you to update the processing status of a specific risk event under your Alibaba Cloud account.
     * - When `Status` is set to `Processed`, you must provide the `RiskConfirm` parameter to specify the manually confirmed risk conclusion.
     * - If `Status` is `Unprocess` or `Processing`, do not include the `RiskConfirm` parameter.
     * - The `RiskScene` parameter is optional. If not provided, the system automatically populates it based on `RiskId`.
     * - The `RiskConfirmDesc` field provides additional explanation or remarks for the processing decision. The length must be 1 to 128 characters.
     *
     * @param request - UpdateRiskStatusRequest
     *
     * @returns UpdateRiskStatusResponse
     *
     * @param UpdateRiskStatusRequest $request
     *
     * @return UpdateRiskStatusResponse
     */
    public function updateRiskStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRiskStatusWithOptions($request, $runtime);
    }

    /**
     * Updates the status of uninstall applications in batches under the current Alibaba Cloud account.
     *
     * @param request - UpdateUninstallApplicationsStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateUninstallApplicationsStatusResponse
     *
     * @param UpdateUninstallApplicationsStatusRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return UpdateUninstallApplicationsStatusResponse
     */
    public function updateUninstallApplicationsStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        $bodyFlat = [];
        if (null !== $request->applicationIds) {
            @$bodyFlat['ApplicationIds'] = $request->applicationIds;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateUninstallApplicationsStatus',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateUninstallApplicationsStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the status of uninstall applications in batches under the current Alibaba Cloud account.
     *
     * @param request - UpdateUninstallApplicationsStatusRequest
     *
     * @returns UpdateUninstallApplicationsStatusResponse
     *
     * @param UpdateUninstallApplicationsStatusRequest $request
     *
     * @return UpdateUninstallApplicationsStatusResponse
     */
    public function updateUninstallApplicationsStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUninstallApplicationsStatusWithOptions($request, $runtime);
    }

    /**
     * Updates the sharing status of devices for multiple enterprise users.
     *
     * @param request - UpdateUserDevicesSharingStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateUserDevicesSharingStatusResponse
     *
     * @param UpdateUserDevicesSharingStatusRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return UpdateUserDevicesSharingStatusResponse
     */
    public function updateUserDevicesSharingStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        $bodyFlat = [];
        if (null !== $request->deviceTags) {
            @$bodyFlat['DeviceTags'] = $request->deviceTags;
        }

        if (null !== $request->sharingStatus) {
            @$body['SharingStatus'] = $request->sharingStatus;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateUserDevicesSharingStatus',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateUserDevicesSharingStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the sharing status of devices for multiple enterprise users.
     *
     * @param request - UpdateUserDevicesSharingStatusRequest
     *
     * @returns UpdateUserDevicesSharingStatusResponse
     *
     * @param UpdateUserDevicesSharingStatusRequest $request
     *
     * @return UpdateUserDevicesSharingStatusResponse
     */
    public function updateUserDevicesSharingStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUserDevicesSharingStatusWithOptions($request, $runtime);
    }

    /**
     * Update the status of endpoint devices for your Alibaba Cloud account.
     *
     * @param request - UpdateUserDevicesStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateUserDevicesStatusResponse
     *
     * @param UpdateUserDevicesStatusRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateUserDevicesStatusResponse
     */
    public function updateUserDevicesStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->deviceAction) {
            @$body['DeviceAction'] = $request->deviceAction;
        }

        $bodyFlat = [];
        if (null !== $request->deviceTags) {
            @$bodyFlat['DeviceTags'] = $request->deviceTags;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateUserDevicesStatus',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateUserDevicesStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Update the status of endpoint devices for your Alibaba Cloud account.
     *
     * @param request - UpdateUserDevicesStatusRequest
     *
     * @returns UpdateUserDevicesStatusResponse
     *
     * @param UpdateUserDevicesStatusRequest $request
     *
     * @return UpdateUserDevicesStatusResponse
     */
    public function updateUserDevicesStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUserDevicesStatusWithOptions($request, $runtime);
    }

    /**
     * Modifies a user group under the current Alibaba Cloud account.
     *
     * @param request - UpdateUserGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateUserGroupResponse
     *
     * @param UpdateUserGroupRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateUserGroupResponse
     */
    public function updateUserGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        $bodyFlat = [];
        if (null !== $request->attributes) {
            @$bodyFlat['Attributes'] = $request->attributes;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->modifyType) {
            @$body['ModifyType'] = $request->modifyType;
        }

        if (null !== $request->userGroupId) {
            @$body['UserGroupId'] = $request->userGroupId;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateUserGroup',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateUserGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a user group under the current Alibaba Cloud account.
     *
     * @param request - UpdateUserGroupRequest
     *
     * @returns UpdateUserGroupResponse
     *
     * @param UpdateUserGroupRequest $request
     *
     * @return UpdateUserGroupResponse
     */
    public function updateUserGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUserGroupWithOptions($request, $runtime);
    }

    /**
     * Updates the status of users in your Alibaba Cloud account.
     *
     * @param request - UpdateUsersStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateUsersStatusResponse
     *
     * @param UpdateUsersStatusRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateUsersStatusResponse
     */
    public function updateUsersStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->saseUserIds) {
            @$query['SaseUserIds'] = $request->saseUserIds;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateUsersStatus',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateUsersStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the status of users in your Alibaba Cloud account.
     *
     * @param request - UpdateUsersStatusRequest
     *
     * @returns UpdateUsersStatusResponse
     *
     * @param UpdateUsersStatusRequest $request
     *
     * @return UpdateUsersStatusResponse
     */
    public function updateUsersStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUsersStatusWithOptions($request, $runtime);
    }

    /**
     * Quarantines or trusts a virus file on a specified user terminal device. DevTag, FilePath, and FileMd5 together identify a virus file record. The call fails if the record does not exist. Quarantine is an asynchronous operation. After the server creates a disposal task, the user terminal device pulls and executes it. The same virus file record can only be disposed of once within one minute.
     *
     * @param request - UpdateVirusFileStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateVirusFileStatusResponse
     *
     * @param UpdateVirusFileStatusRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateVirusFileStatusResponse
     */
    public function updateVirusFileStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->devTag) {
            @$body['DevTag'] = $request->devTag;
        }

        if (null !== $request->fileMd5) {
            @$body['FileMd5'] = $request->fileMd5;
        }

        if (null !== $request->filePath) {
            @$body['FilePath'] = $request->filePath;
        }

        if (null !== $request->operation) {
            @$body['Operation'] = $request->operation;
        }

        if (null !== $request->virusType) {
            @$body['VirusType'] = $request->virusType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateVirusFileStatus',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateVirusFileStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Quarantines or trusts a virus file on a specified user terminal device. DevTag, FilePath, and FileMd5 together identify a virus file record. The call fails if the record does not exist. Quarantine is an asynchronous operation. After the server creates a disposal task, the user terminal device pulls and executes it. The same virus file record can only be disposed of once within one minute.
     *
     * @param request - UpdateVirusFileStatusRequest
     *
     * @returns UpdateVirusFileStatusResponse
     *
     * @param UpdateVirusFileStatusRequest $request
     *
     * @return UpdateVirusFileStatusResponse
     */
    public function updateVirusFileStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateVirusFileStatusWithOptions($request, $runtime);
    }

    /**
     * Modifies the anti-virus global configuration for the current Alibaba Cloud account. The four configuration items are treated as a whole and are entirely overwritten with each call. Therefore, pass in the complete configuration with each call: set VirusFileUpload to false, UploadFileSuffixBlacklist to empty, and UploadFileMaxSize and UploadFileMaxSpeed to 0 (no limit). After VirusFileUpload is changed, the virus file upload module switch is synchronously updated, which affects whether cloud-based STS tokens are issued to user terminal devices.
     *
     * @param request - UpdateVirusScanGlobalConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateVirusScanGlobalConfigResponse
     *
     * @param UpdateVirusScanGlobalConfigRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return UpdateVirusScanGlobalConfigResponse
     */
    public function updateVirusScanGlobalConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->uploadFileMaxSize) {
            @$body['UploadFileMaxSize'] = $request->uploadFileMaxSize;
        }

        if (null !== $request->uploadFileMaxSpeed) {
            @$body['UploadFileMaxSpeed'] = $request->uploadFileMaxSpeed;
        }

        $bodyFlat = [];
        if (null !== $request->uploadFileSuffixBlacklist) {
            @$bodyFlat['UploadFileSuffixBlacklist'] = $request->uploadFileSuffixBlacklist;
        }

        if (null !== $request->virusFileUpload) {
            @$body['VirusFileUpload'] = $request->virusFileUpload;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateVirusScanGlobalConfig',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateVirusScanGlobalConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the anti-virus global configuration for the current Alibaba Cloud account. The four configuration items are treated as a whole and are entirely overwritten with each call. Therefore, pass in the complete configuration with each call: set VirusFileUpload to false, UploadFileSuffixBlacklist to empty, and UploadFileMaxSize and UploadFileMaxSpeed to 0 (no limit). After VirusFileUpload is changed, the virus file upload module switch is synchronously updated, which affects whether cloud-based STS tokens are issued to user terminal devices.
     *
     * @param request - UpdateVirusScanGlobalConfigRequest
     *
     * @returns UpdateVirusScanGlobalConfigResponse
     *
     * @param UpdateVirusScanGlobalConfigRequest $request
     *
     * @return UpdateVirusScanGlobalConfigResponse
     */
    public function updateVirusScanGlobalConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateVirusScanGlobalConfigWithOptions($request, $runtime);
    }

    /**
     * Modifies the configuration of a specified scheduled virus scan policy. The Whitelist parameter performs a full overwrite, meaning the provided list replaces the existing exception user list of the policy.
     *
     * @param request - UpdateVirusScanScheduledStrategyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateVirusScanScheduledStrategyResponse
     *
     * @param UpdateVirusScanScheduledStrategyRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return UpdateVirusScanScheduledStrategyResponse
     */
    public function updateVirusScanScheduledStrategyWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->highRiskOperation) {
            @$body['HighRiskOperation'] = $request->highRiskOperation;
        }

        if (null !== $request->lowRiskOperation) {
            @$body['LowRiskOperation'] = $request->lowRiskOperation;
        }

        if (null !== $request->matchMode) {
            @$body['MatchMode'] = $request->matchMode;
        }

        if (null !== $request->maxCpuUsage) {
            @$body['MaxCpuUsage'] = $request->maxCpuUsage;
        }

        if (null !== $request->midRiskOperation) {
            @$body['MidRiskOperation'] = $request->midRiskOperation;
        }

        if (null !== $request->performanceMode) {
            @$body['PerformanceMode'] = $request->performanceMode;
        }

        if (null !== $request->priority) {
            @$body['Priority'] = $request->priority;
        }

        if (null !== $request->scanBeginTime) {
            @$body['ScanBeginTime'] = $request->scanBeginTime;
        }

        if (null !== $request->scanEndTime) {
            @$body['ScanEndTime'] = $request->scanEndTime;
        }

        if (null !== $request->scanFrequency) {
            @$body['ScanFrequency'] = $request->scanFrequency;
        }

        if (null !== $request->scanInterval) {
            @$body['ScanInterval'] = $request->scanInterval;
        }

        if (null !== $request->scanMode) {
            @$body['ScanMode'] = $request->scanMode;
        }

        $bodyFlat = [];
        if (null !== $request->scanPath) {
            @$bodyFlat['ScanPath'] = $request->scanPath;
        }

        if (null !== $request->scanTargets) {
            @$bodyFlat['ScanTargets'] = $request->scanTargets;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        if (null !== $request->strategyDescription) {
            @$body['StrategyDescription'] = $request->strategyDescription;
        }

        if (null !== $request->strategyId) {
            @$body['StrategyId'] = $request->strategyId;
        }

        if (null !== $request->strategyName) {
            @$body['StrategyName'] = $request->strategyName;
        }

        if (null !== $request->userGroupIds) {
            @$bodyFlat['UserGroupIds'] = $request->userGroupIds;
        }

        if (null !== $request->whitelist) {
            @$bodyFlat['Whitelist'] = $request->whitelist;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateVirusScanScheduledStrategy',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateVirusScanScheduledStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the configuration of a specified scheduled virus scan policy. The Whitelist parameter performs a full overwrite, meaning the provided list replaces the existing exception user list of the policy.
     *
     * @param request - UpdateVirusScanScheduledStrategyRequest
     *
     * @returns UpdateVirusScanScheduledStrategyResponse
     *
     * @param UpdateVirusScanScheduledStrategyRequest $request
     *
     * @return UpdateVirusScanScheduledStrategyResponse
     */
    public function updateVirusScanScheduledStrategy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateVirusScanScheduledStrategyWithOptions($request, $runtime);
    }

    /**
     * Modifies the global vulnerability scanning configuration for the current Alibaba Cloud account and returns the complete updated configuration.
     *
     * @param tmpReq - UpdateVulScanGlobalConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateVulScanGlobalConfigResponse
     *
     * @param UpdateVulScanGlobalConfigRequest $tmpReq
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateVulScanGlobalConfigResponse
     */
    public function updateVulScanGlobalConfigWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateVulScanGlobalConfigShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->wuyingVulFixConfig) {
            $request->wuyingVulFixConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->wuyingVulFixConfig, 'WuyingVulFixConfig', 'json');
        }

        $body = [];
        if (null !== $request->maxDownloadSpeed) {
            @$body['MaxDownloadSpeed'] = $request->maxDownloadSpeed;
        }

        if (null !== $request->wuyingVulFixConfigShrink) {
            @$body['WuyingVulFixConfig'] = $request->wuyingVulFixConfigShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateVulScanGlobalConfig',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateVulScanGlobalConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the global vulnerability scanning configuration for the current Alibaba Cloud account and returns the complete updated configuration.
     *
     * @param request - UpdateVulScanGlobalConfigRequest
     *
     * @returns UpdateVulScanGlobalConfigResponse
     *
     * @param UpdateVulScanGlobalConfigRequest $request
     *
     * @return UpdateVulScanGlobalConfigResponse
     */
    public function updateVulScanGlobalConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateVulScanGlobalConfigWithOptions($request, $runtime);
    }

    /**
     * Modifies the configuration of a specified vulnerability scheduled scan policy and returns the complete updated configuration.
     *
     * @param request - UpdateVulScanScheduledStrategyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateVulScanScheduledStrategyResponse
     *
     * @param UpdateVulScanScheduledStrategyRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return UpdateVulScanScheduledStrategyResponse
     */
    public function updateVulScanScheduledStrategyWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->matchMode) {
            @$body['MatchMode'] = $request->matchMode;
        }

        if (null !== $request->priority) {
            @$body['Priority'] = $request->priority;
        }

        if (null !== $request->scanBeginTime) {
            @$body['ScanBeginTime'] = $request->scanBeginTime;
        }

        if (null !== $request->scanEndTime) {
            @$body['ScanEndTime'] = $request->scanEndTime;
        }

        if (null !== $request->scanFrequency) {
            @$body['ScanFrequency'] = $request->scanFrequency;
        }

        if (null !== $request->scanInterval) {
            @$body['ScanInterval'] = $request->scanInterval;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        if (null !== $request->strategyDescription) {
            @$body['StrategyDescription'] = $request->strategyDescription;
        }

        if (null !== $request->strategyId) {
            @$body['StrategyId'] = $request->strategyId;
        }

        if (null !== $request->strategyName) {
            @$body['StrategyName'] = $request->strategyName;
        }

        $bodyFlat = [];
        if (null !== $request->userGroupIds) {
            @$bodyFlat['UserGroupIds'] = $request->userGroupIds;
        }

        if (null !== $request->whitelist) {
            @$bodyFlat['Whitelist'] = $request->whitelist;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateVulScanScheduledStrategy',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateVulScanScheduledStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the configuration of a specified vulnerability scheduled scan policy and returns the complete updated configuration.
     *
     * @param request - UpdateVulScanScheduledStrategyRequest
     *
     * @returns UpdateVulScanScheduledStrategyResponse
     *
     * @param UpdateVulScanScheduledStrategyRequest $request
     *
     * @return UpdateVulScanScheduledStrategyResponse
     */
    public function updateVulScanScheduledStrategy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateVulScanScheduledStrategyWithOptions($request, $runtime);
    }
}
