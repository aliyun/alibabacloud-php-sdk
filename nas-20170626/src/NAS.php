<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\NAS\V20170626\Models\AddClientToBlackListRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\AddClientToBlackListResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\ApplyAutoSnapshotPolicyRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\ApplyAutoSnapshotPolicyResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\ApplyDataFlowAutoRefreshRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\ApplyDataFlowAutoRefreshResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\AttachVscToFilesystemsRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\AttachVscToFilesystemsResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\CancelAutoSnapshotPolicyRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\CancelAutoSnapshotPolicyResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\CancelDataFlowAutoRefreshRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\CancelDataFlowAutoRefreshResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\CancelDataFlowSubTaskRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\CancelDataFlowSubTaskResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\CancelDataFlowTaskRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\CancelDataFlowTaskResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\CancelDirQuotaRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\CancelDirQuotaResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\CancelFilesetQuotaRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\CancelFilesetQuotaResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\CancelLifecycleRetrieveJobRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\CancelLifecycleRetrieveJobResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\CancelRecycleBinJobRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\CancelRecycleBinJobResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\ChangeResourceGroupRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\ChangeResourceGroupResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateAccessGroupRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateAccessGroupResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateAccessPointRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateAccessPointResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateAccessRuleRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateAccessRuleResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateAgenticSpaceRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateAgenticSpaceResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateAutoSnapshotPolicyRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateAutoSnapshotPolicyResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateCpfsAccessPointRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateCpfsAccessPointResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateDataFlowRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateDataFlowResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateDataFlowSubTaskRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateDataFlowSubTaskResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateDataFlowTaskRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateDataFlowTaskResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateDirRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateDirResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateFileRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateFileResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateFilesetRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateFilesetResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateFileSystemRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateFileSystemResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateLDAPConfigRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateLDAPConfigResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateLifecyclePolicyRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateLifecyclePolicyResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateLifecycleRetrieveJobRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateLifecycleRetrieveJobResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateLogAnalysisRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateLogAnalysisResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateMountTargetRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateMountTargetResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateProtocolMountTargetRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateProtocolMountTargetResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateProtocolServiceRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateProtocolServiceResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateRecycleBinDeleteJobRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateRecycleBinDeleteJobResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateRecycleBinRestoreJobRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateRecycleBinRestoreJobResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateSnapshotRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateSnapshotResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DeleteAccessGroupRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DeleteAccessGroupResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DeleteAccessPointRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DeleteAccessPointResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DeleteAccessRuleRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DeleteAccessRuleResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DeleteAgenticSpaceRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DeleteAgenticSpaceResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DeleteAutoSnapshotPolicyRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DeleteAutoSnapshotPolicyResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DeleteCpfsAccessPointRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DeleteCpfsAccessPointResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DeleteDataFlowRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DeleteDataFlowResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DeleteFilesetRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DeleteFilesetResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DeleteFileSystemRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DeleteFileSystemResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DeleteLDAPConfigRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DeleteLDAPConfigResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DeleteLifecyclePolicyRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DeleteLifecyclePolicyResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DeleteLogAnalysisRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DeleteLogAnalysisResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DeleteMountTargetRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DeleteMountTargetResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DeleteProtocolMountTargetRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DeleteProtocolMountTargetResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DeleteProtocolServiceRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DeleteProtocolServiceResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DeleteSnapshotRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DeleteSnapshotResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAccessGroupsRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAccessGroupsResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAccessPointRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAccessPointResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAccessPointsRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAccessPointsResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAccessRulesRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAccessRulesResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAgenticSpacesRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAgenticSpacesResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAutoSnapshotPoliciesRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAutoSnapshotPoliciesResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAutoSnapshotTasksRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAutoSnapshotTasksResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeBlackListClientsRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeBlackListClientsResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeCpfsAccessPointMountedClientsRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeCpfsAccessPointMountedClientsResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeCpfsAccessPointsRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeCpfsAccessPointsResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeDataFlowsRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeDataFlowsResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeDataFlowSubTasksRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeDataFlowSubTasksResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeDataFlowTasksRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeDataFlowTasksResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeDirQuotasRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeDirQuotasResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFilesetsRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFilesetsResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFilesystemsAssociatedHpnZonesRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFilesystemsAssociatedHpnZonesResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFilesystemsAssociatedHpnZonesShrinkRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemsRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemsResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemStatisticsRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemStatisticsResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFilesystemsVscAttachInfoRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFilesystemsVscAttachInfoResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeLifecyclePoliciesRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeLifecyclePoliciesResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeLifecyclePolicyLogsRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeLifecyclePolicyLogsResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeLogAnalysisRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeLogAnalysisResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeMountedClientsRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeMountedClientsResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeMountTargetsRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeMountTargetsResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeNfsAclRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeNfsAclResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeProtocolMountTargetRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeProtocolMountTargetResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeProtocolServiceRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeProtocolServiceResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeSmbAclRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeSmbAclResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeSnapshotsRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeSnapshotsResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeStoragePackagesRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeStoragePackagesResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeZonesRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeZonesResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DetachVscFromFilesystemsRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DetachVscFromFilesystemsResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DisableAndCleanRecycleBinRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DisableAndCleanRecycleBinResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DisableDataInsightRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DisableDataInsightResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DisableNfsAclRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DisableNfsAclResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DisableSmbAclRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DisableSmbAclResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\EnableDataInsightRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\EnableDataInsightResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\EnableNfsAclRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\EnableNfsAclResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\EnableRecycleBinRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\EnableRecycleBinResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\EnableSmbAclRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\EnableSmbAclResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\GetAgenticSpaceRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\GetAgenticSpaceResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\GetDirectoryOrFilePropertiesRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\GetDirectoryOrFilePropertiesResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\GetFilesetRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\GetFilesetResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\GetProtocolMountTargetRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\GetProtocolMountTargetResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\GetRecycleBinAttributeRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\GetRecycleBinAttributeResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\ListAccessPointsRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\ListAccessPointsResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\ListDataInsightDirectoriesRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\ListDataInsightDirectoriesResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\ListDirectoriesAndFilesRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\ListDirectoriesAndFilesResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\ListLifecycleRetrieveJobsRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\ListLifecycleRetrieveJobsResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\ListRecentlyRecycledDirectoriesRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\ListRecentlyRecycledDirectoriesResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\ListRecycleBinJobsRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\ListRecycleBinJobsResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\ListRecycledDirectoriesAndFilesRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\ListRecycledDirectoriesAndFilesResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\ModifyAccessGroupRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\ModifyAccessGroupResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\ModifyAccessPointRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\ModifyAccessPointResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\ModifyAccessRuleRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\ModifyAccessRuleResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\ModifyAgenticSpaceRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\ModifyAgenticSpaceResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\ModifyAutoSnapshotPolicyRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\ModifyAutoSnapshotPolicyResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\ModifyCpfsAccessPointRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\ModifyCpfsAccessPointResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\ModifyDataFlowAutoRefreshRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\ModifyDataFlowAutoRefreshResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\ModifyDataFlowRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\ModifyDataFlowResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\ModifyFilesetRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\ModifyFilesetResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\ModifyFileSystemRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\ModifyFileSystemResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\ModifyFileSystemShrinkRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\ModifyLDAPConfigRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\ModifyLDAPConfigResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\ModifyLifecyclePolicyRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\ModifyLifecyclePolicyResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\ModifyMountTargetRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\ModifyMountTargetResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\ModifyProtocolMountTargetRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\ModifyProtocolMountTargetResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\ModifyProtocolServiceRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\ModifyProtocolServiceResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\ModifySmbAclRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\ModifySmbAclResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\OpenNASServiceResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\RemoveClientFromBlackListRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\RemoveClientFromBlackListResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\ResetFileSystemRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\ResetFileSystemResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\RetryLifecycleRetrieveJobRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\RetryLifecycleRetrieveJobResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\SetAgenticSpaceQuotaRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\SetAgenticSpaceQuotaResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\SetDirQuotaRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\SetDirQuotaResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\SetFilesetQuotaRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\SetFilesetQuotaResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\StartDataFlowRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\StartDataFlowResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\StartLifecyclePolicyExecutionRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\StartLifecyclePolicyExecutionResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\StopDataFlowRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\StopDataFlowResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\StopLifecyclePolicyExecutionRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\StopLifecyclePolicyExecutionResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\TagResourcesRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\TagResourcesResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\UpdateLifecyclePolicyRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\UpdateLifecyclePolicyResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\UpdateRecycleBinAttributeRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\UpdateRecycleBinAttributeResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\UpgradeFileSystemRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\UpgradeFileSystemResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class NAS extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'cn-hangzhou-finance' => 'nas.cn-hangzhou-dg-a01.aliyuncs.com',
            'ap-northeast-2-pop' => 'nas.aliyuncs.com',
            'ap-southeast-2' => 'nas.aliyuncs.com',
            'cn-beijing-finance-pop' => 'nas.aliyuncs.com',
            'cn-beijing-gov-1' => 'nas.aliyuncs.com',
            'cn-beijing-nu16-b01' => 'nas.aliyuncs.com',
            'cn-edge-1' => 'nas.aliyuncs.com',
            'cn-fujian' => 'nas.aliyuncs.com',
            'cn-haidian-cm12-c01' => 'nas.aliyuncs.com',
            'cn-hangzhou-bj-b01' => 'nas.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'nas.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'nas.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'nas.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'nas.aliyuncs.com',
            'cn-hangzhou-test-306' => 'nas.aliyuncs.com',
            'cn-hongkong-finance-pop' => 'nas.aliyuncs.com',
            'cn-qingdao-nebula' => 'nas.aliyuncs.com',
            'cn-shanghai-et15-b01' => 'nas.aliyuncs.com',
            'cn-shanghai-et2-b01' => 'nas.aliyuncs.com',
            'cn-shanghai-inner' => 'nas.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'nas.aliyuncs.com',
            'cn-shenzhen-inner' => 'nas.aliyuncs.com',
            'cn-shenzhen-st4-d01' => 'nas.aliyuncs.com',
            'cn-shenzhen-su18-b01' => 'nas.aliyuncs.com',
            'cn-wuhan' => 'nas.aliyuncs.com',
            'cn-yushanfang' => 'nas.aliyuncs.com',
            'cn-zhangbei' => 'nas.aliyuncs.com',
            'cn-zhangbei-na61-b01' => 'nas.aliyuncs.com',
            'cn-zhangjiakou-na62-a01' => 'nas.aliyuncs.com',
            'cn-zhengzhou-nebula-1' => 'nas.aliyuncs.com',
            'eu-west-1-oxs' => 'nas.aliyuncs.com',
            'rus-west-1-pop' => 'nas.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('nas', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Adds a client to the blacklist in Cloud Parallel File Storage (CPFS) to evict its write requests, which serves as an I/O fencing mechanism.
     *
     * @remarks
     * This operation supports only CPFS parallel file systems.
     *
     * @deprecated OpenAPI AddClientToBlackList is deprecated
     *
     * @param request - AddClientToBlackListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddClientToBlackListResponse
     *
     * @param AddClientToBlackListRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return AddClientToBlackListResponse
     */
    public function addClientToBlackListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientIP) {
            @$query['ClientIP'] = $request->clientIP;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddClientToBlackList',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddClientToBlackListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Adds a client to the blacklist in Cloud Parallel File Storage (CPFS) to evict its write requests, which serves as an I/O fencing mechanism.
     *
     * @remarks
     * This operation supports only CPFS parallel file systems.
     *
     * @deprecated OpenAPI AddClientToBlackList is deprecated
     *
     * @param request - AddClientToBlackListRequest
     *
     * @returns AddClientToBlackListResponse
     *
     * @param AddClientToBlackListRequest $request
     *
     * @return AddClientToBlackListResponse
     */
    public function addClientToBlackList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addClientToBlackListWithOptions($request, $runtime);
    }

    /**
     * Applies an automatic snapshot policy to one or more file systems.
     *
     * @remarks
     * *Before you begin**
     * Only Advanced Extreme NAS file systems support this operation. Before you call this operation, complete the following preparations:
     * - An Advanced Extreme NAS file system is created. When you call the [CreateFileSystem](https://www.alibabacloud.com/help/en/nas/developer-reference/api-nas-2017-06-26-createfilesystem) operation to create a file system, set the following parameters:
     *   - FileSystemType: extreme
     *   - StorageType: advance
     * - An automatic snapshot policy is created. For more information, see [CreateAutoSnapshotPolicy](https://www.alibabacloud.com/help/en/nas/developer-reference/api-nas-2017-06-26-createautosnapshotpolicy).
     * - The AliyunNASManageENIRole authorization is completed in the console. Before creating an Extreme NAS file system, associate the AliyunNASManageENIRole service-linked role with File Storage NAS to allow File Storage NAS to manage network interface controllers (NICs). For more information, see [Manage the service-linked role for File Storage NAS](https://help.aliyun.com/document_detail/208530.html).
     * **Operation description**
     * <props="china">
     * - This feature is in free public preview. During the public preview, the [File Storage NAS Service-Level Agreement (SLA)](https://terms.aliyun.com/legal-agreement/terms/suit_bu1_ali_cloud/suit_bu1_ali_cloud201803061139_99860.html?spm=a2c4g.11186623.0.0.5c895ff2YPLrwe) is not guaranteed.
     * - Each file system can have only one automatic snapshot policy applied.
     * - An automatic snapshot policy can be applied to multiple file systems.
     * - If the target file system already has an automatic snapshot policy applied, calling the ApplyAutoSnapshotPolicy operation replaces the current automatic snapshot policy of the file system.
     * <props="intl">
     * - This feature is in free public preview.
     * - Each file system can have only one automatic snapshot policy applied.
     * - An automatic snapshot policy can be applied to multiple file systems.
     * - If the target file system already has an automatic snapshot policy applied, calling the ApplyAutoSnapshotPolicy operation replaces the current automatic snapshot policy of the file system.
     *
     * @param request - ApplyAutoSnapshotPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ApplyAutoSnapshotPolicyResponse
     *
     * @param ApplyAutoSnapshotPolicyRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ApplyAutoSnapshotPolicyResponse
     */
    public function applyAutoSnapshotPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoSnapshotPolicyId) {
            @$query['AutoSnapshotPolicyId'] = $request->autoSnapshotPolicyId;
        }

        if (null !== $request->fileSystemIds) {
            @$query['FileSystemIds'] = $request->fileSystemIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ApplyAutoSnapshotPolicy',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ApplyAutoSnapshotPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Applies an automatic snapshot policy to one or more file systems.
     *
     * @remarks
     * *Before you begin**
     * Only Advanced Extreme NAS file systems support this operation. Before you call this operation, complete the following preparations:
     * - An Advanced Extreme NAS file system is created. When you call the [CreateFileSystem](https://www.alibabacloud.com/help/en/nas/developer-reference/api-nas-2017-06-26-createfilesystem) operation to create a file system, set the following parameters:
     *   - FileSystemType: extreme
     *   - StorageType: advance
     * - An automatic snapshot policy is created. For more information, see [CreateAutoSnapshotPolicy](https://www.alibabacloud.com/help/en/nas/developer-reference/api-nas-2017-06-26-createautosnapshotpolicy).
     * - The AliyunNASManageENIRole authorization is completed in the console. Before creating an Extreme NAS file system, associate the AliyunNASManageENIRole service-linked role with File Storage NAS to allow File Storage NAS to manage network interface controllers (NICs). For more information, see [Manage the service-linked role for File Storage NAS](https://help.aliyun.com/document_detail/208530.html).
     * **Operation description**
     * <props="china">
     * - This feature is in free public preview. During the public preview, the [File Storage NAS Service-Level Agreement (SLA)](https://terms.aliyun.com/legal-agreement/terms/suit_bu1_ali_cloud/suit_bu1_ali_cloud201803061139_99860.html?spm=a2c4g.11186623.0.0.5c895ff2YPLrwe) is not guaranteed.
     * - Each file system can have only one automatic snapshot policy applied.
     * - An automatic snapshot policy can be applied to multiple file systems.
     * - If the target file system already has an automatic snapshot policy applied, calling the ApplyAutoSnapshotPolicy operation replaces the current automatic snapshot policy of the file system.
     * <props="intl">
     * - This feature is in free public preview.
     * - Each file system can have only one automatic snapshot policy applied.
     * - An automatic snapshot policy can be applied to multiple file systems.
     * - If the target file system already has an automatic snapshot policy applied, calling the ApplyAutoSnapshotPolicy operation replaces the current automatic snapshot policy of the file system.
     *
     * @param request - ApplyAutoSnapshotPolicyRequest
     *
     * @returns ApplyAutoSnapshotPolicyResponse
     *
     * @param ApplyAutoSnapshotPolicyRequest $request
     *
     * @return ApplyAutoSnapshotPolicyResponse
     */
    public function applyAutoSnapshotPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyAutoSnapshotPolicyWithOptions($request, $runtime);
    }

    /**
     * Configures automatic updates for a specified data flow.
     *
     * @remarks
     * - This operation applies only to Cloud Parallel File Storage (CPFS) file systems.
     * - Only CPFS 2.2.0 and later support data flows. You can view the version information on the file system details page in the console.
     * - You can add automatic update configurations only for data flows in the `Running` state.
     * - You can add up to five automatic update configurations for a data flow.
     * - It generally takes 2 to 5 minutes to create an automatic update configuration. You can call [DescribeDataFlows](https://help.aliyun.com/document_detail/336901.html) to query the data flow status.
     * - Automatic updates depend on EventBridge to collect object modification events from the source OSS storage. You must first [activate EventBridge](https://help.aliyun.com/document_detail/182246.html).
     *   > The event buses and event rules that CPFS creates in EventBridge contain the description `Create for cpfs auto refresh`. Do not modify or delete these event buses or event rules. Otherwise, automatic updates cannot work properly.
     * - Automatic updates apply to prefixes specified by the RefreshPath parameter. When CPFS configures automatic synchronization for a prefix in a data flow, an event bus is created on the user side, and an event rule is created for the prefix of the source OSS bucket. When an object modification occurs within the prefix of the source OSS bucket, an OSS event is generated in EventBridge and processed by the CPFS data flow.
     * - After you configure automatic updates (AutoRefresh), when data changes in the source storage, the changed metadata is automatically synchronized to the CPFS file system. The changed data is loaded on demand when a user accesses the file, or you can start a data stream task to load the data.
     * - The automatic update interval (AutoRefreshInterval) specifies the interval at which CPFS checks whether data updates exist within the prefix of the source OSS bucket. If data updates exist, an automatic synchronization task is started. When the frequency of object modification events in the source OSS bucket exceeds the processing capability of the CPFS data flow, automatic update tasks accumulate, metadata updates are delayed, and the data flow status changes to Misconfigured. To resolve this issue, upgrade the data flow specifications or reduce the modification frequency in OSS.
     *
     * @param request - ApplyDataFlowAutoRefreshRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ApplyDataFlowAutoRefreshResponse
     *
     * @param ApplyDataFlowAutoRefreshRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ApplyDataFlowAutoRefreshResponse
     */
    public function applyDataFlowAutoRefreshWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoRefreshInterval) {
            @$query['AutoRefreshInterval'] = $request->autoRefreshInterval;
        }

        if (null !== $request->autoRefreshPolicy) {
            @$query['AutoRefreshPolicy'] = $request->autoRefreshPolicy;
        }

        if (null !== $request->autoRefreshs) {
            @$query['AutoRefreshs'] = $request->autoRefreshs;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dataFlowId) {
            @$query['DataFlowId'] = $request->dataFlowId;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ApplyDataFlowAutoRefresh',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ApplyDataFlowAutoRefreshResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures automatic updates for a specified data flow.
     *
     * @remarks
     * - This operation applies only to Cloud Parallel File Storage (CPFS) file systems.
     * - Only CPFS 2.2.0 and later support data flows. You can view the version information on the file system details page in the console.
     * - You can add automatic update configurations only for data flows in the `Running` state.
     * - You can add up to five automatic update configurations for a data flow.
     * - It generally takes 2 to 5 minutes to create an automatic update configuration. You can call [DescribeDataFlows](https://help.aliyun.com/document_detail/336901.html) to query the data flow status.
     * - Automatic updates depend on EventBridge to collect object modification events from the source OSS storage. You must first [activate EventBridge](https://help.aliyun.com/document_detail/182246.html).
     *   > The event buses and event rules that CPFS creates in EventBridge contain the description `Create for cpfs auto refresh`. Do not modify or delete these event buses or event rules. Otherwise, automatic updates cannot work properly.
     * - Automatic updates apply to prefixes specified by the RefreshPath parameter. When CPFS configures automatic synchronization for a prefix in a data flow, an event bus is created on the user side, and an event rule is created for the prefix of the source OSS bucket. When an object modification occurs within the prefix of the source OSS bucket, an OSS event is generated in EventBridge and processed by the CPFS data flow.
     * - After you configure automatic updates (AutoRefresh), when data changes in the source storage, the changed metadata is automatically synchronized to the CPFS file system. The changed data is loaded on demand when a user accesses the file, or you can start a data stream task to load the data.
     * - The automatic update interval (AutoRefreshInterval) specifies the interval at which CPFS checks whether data updates exist within the prefix of the source OSS bucket. If data updates exist, an automatic synchronization task is started. When the frequency of object modification events in the source OSS bucket exceeds the processing capability of the CPFS data flow, automatic update tasks accumulate, metadata updates are delayed, and the data flow status changes to Misconfigured. To resolve this issue, upgrade the data flow specifications or reduce the modification frequency in OSS.
     *
     * @param request - ApplyDataFlowAutoRefreshRequest
     *
     * @returns ApplyDataFlowAutoRefreshResponse
     *
     * @param ApplyDataFlowAutoRefreshRequest $request
     *
     * @return ApplyDataFlowAutoRefreshResponse
     */
    public function applyDataFlowAutoRefresh($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyDataFlowAutoRefreshWithOptions($request, $runtime);
    }

    /**
     * Associates a VSC device with a file system.
     *
     * @remarks
     * - Only CPFS for Lingjun supports this feature.
     * - Batch execution is supported. In batch execution, only one VscId can be associated with multiple FileSystemIds. This means the ResourceIds.VscId values must be identical.
     *
     * @param request - AttachVscToFilesystemsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AttachVscToFilesystemsResponse
     *
     * @param AttachVscToFilesystemsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return AttachVscToFilesystemsResponse
     */
    public function attachVscToFilesystemsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->resourceIds) {
            @$query['ResourceIds'] = $request->resourceIds;
        }

        if (null !== $request->roleChain) {
            @$query['RoleChain'] = $request->roleChain;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AttachVscToFilesystems',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AttachVscToFilesystemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Associates a VSC device with a file system.
     *
     * @remarks
     * - Only CPFS for Lingjun supports this feature.
     * - Batch execution is supported. In batch execution, only one VscId can be associated with multiple FileSystemIds. This means the ResourceIds.VscId values must be identical.
     *
     * @param request - AttachVscToFilesystemsRequest
     *
     * @returns AttachVscToFilesystemsResponse
     *
     * @param AttachVscToFilesystemsRequest $request
     *
     * @return AttachVscToFilesystemsResponse
     */
    public function attachVscToFilesystems($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachVscToFilesystemsWithOptions($request, $runtime);
    }

    /**
     * Cancels the automatic snapshot policy that is created for a file system.
     *
     * @remarks
     * <props="china">
     * -  This feature is in free public preview. During the public preview, the [File Storage NAS Service-Level Agreement (SLA)](https://terms.aliyun.com/legal-agreement/terms/suit_bu1_ali_cloud/suit_bu1_ali_cloud201803061139_99860.html?spm=a2c4g.11186623.0.0.5c895ff2YPLrwe) is not guaranteed.
     * -  Only Advanced Extreme NAS supports this feature.
     * -  Before you begin: You have applied an automatic snapshot policy to the target Extreme NAS file system by calling [ApplyAutoSnapshotPolicy](https://www.alibabacloud.com/help/en/nas/developer-reference/api-nas-2017-06-26-applyautosnapshotpolicy).
     * <props="intl">
     * -  This feature is in free public preview. During the public preview, the [File Storage NAS Service-Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed.
     * -  Only Advanced Extreme NAS supports this feature.
     * -  Before you begin: You have applied an automatic snapshot policy to the target Extreme NAS file system by calling [ApplyAutoSnapshotPolicy](https://www.alibabacloud.com/help/en/nas/developer-reference/api-nas-2017-06-26-applyautosnapshotpolicy).
     *
     * @param request - CancelAutoSnapshotPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelAutoSnapshotPolicyResponse
     *
     * @param CancelAutoSnapshotPolicyRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CancelAutoSnapshotPolicyResponse
     */
    public function cancelAutoSnapshotPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileSystemIds) {
            @$query['FileSystemIds'] = $request->fileSystemIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CancelAutoSnapshotPolicy',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelAutoSnapshotPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Cancels the automatic snapshot policy that is created for a file system.
     *
     * @remarks
     * <props="china">
     * -  This feature is in free public preview. During the public preview, the [File Storage NAS Service-Level Agreement (SLA)](https://terms.aliyun.com/legal-agreement/terms/suit_bu1_ali_cloud/suit_bu1_ali_cloud201803061139_99860.html?spm=a2c4g.11186623.0.0.5c895ff2YPLrwe) is not guaranteed.
     * -  Only Advanced Extreme NAS supports this feature.
     * -  Before you begin: You have applied an automatic snapshot policy to the target Extreme NAS file system by calling [ApplyAutoSnapshotPolicy](https://www.alibabacloud.com/help/en/nas/developer-reference/api-nas-2017-06-26-applyautosnapshotpolicy).
     * <props="intl">
     * -  This feature is in free public preview. During the public preview, the [File Storage NAS Service-Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed.
     * -  Only Advanced Extreme NAS supports this feature.
     * -  Before you begin: You have applied an automatic snapshot policy to the target Extreme NAS file system by calling [ApplyAutoSnapshotPolicy](https://www.alibabacloud.com/help/en/nas/developer-reference/api-nas-2017-06-26-applyautosnapshotpolicy).
     *
     * @param request - CancelAutoSnapshotPolicyRequest
     *
     * @returns CancelAutoSnapshotPolicyResponse
     *
     * @param CancelAutoSnapshotPolicyRequest $request
     *
     * @return CancelAutoSnapshotPolicyResponse
     */
    public function cancelAutoSnapshotPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelAutoSnapshotPolicyWithOptions($request, $runtime);
    }

    /**
     * Cancels the automatic update configuration for a specified data flow.
     *
     * @remarks
     * - This operation applies only to Cloud Parallel File Storage (CPFS) file systems.
     * - Data flows are supported only by CPFS 2.2.0 and later. You can view the version information on the file system details page in the console.
     * - You can cancel the automatic update configuration only for data flows in the `Running` or `Stopped` state.
     * - Canceling the automatic update configuration typically takes 2 to 5 minutes. You can call [DescribeDataFlows](https://help.aliyun.com/document_detail/2402270.html) to query the status of the cancel automatic update task.
     *
     * @param request - CancelDataFlowAutoRefreshRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelDataFlowAutoRefreshResponse
     *
     * @param CancelDataFlowAutoRefreshRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CancelDataFlowAutoRefreshResponse
     */
    public function cancelDataFlowAutoRefreshWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dataFlowId) {
            @$query['DataFlowId'] = $request->dataFlowId;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->refreshPath) {
            @$query['RefreshPath'] = $request->refreshPath;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CancelDataFlowAutoRefresh',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelDataFlowAutoRefreshResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Cancels the automatic update configuration for a specified data flow.
     *
     * @remarks
     * - This operation applies only to Cloud Parallel File Storage (CPFS) file systems.
     * - Data flows are supported only by CPFS 2.2.0 and later. You can view the version information on the file system details page in the console.
     * - You can cancel the automatic update configuration only for data flows in the `Running` or `Stopped` state.
     * - Canceling the automatic update configuration typically takes 2 to 5 minutes. You can call [DescribeDataFlows](https://help.aliyun.com/document_detail/2402270.html) to query the status of the cancel automatic update task.
     *
     * @param request - CancelDataFlowAutoRefreshRequest
     *
     * @returns CancelDataFlowAutoRefreshResponse
     *
     * @param CancelDataFlowAutoRefreshRequest $request
     *
     * @return CancelDataFlowAutoRefreshResponse
     */
    public function cancelDataFlowAutoRefresh($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelDataFlowAutoRefreshWithOptions($request, $runtime);
    }

    /**
     * Cancels a data flow streaming subtask.
     *
     * @remarks
     * *Prerequisite resource creation process**
     * Before you cancel a data flow streaming subtask, create the following resources in order:
     * 1. Create a data flow: Call [CreateDataFlow](https://www.alibabacloud.com/help/en/cpfs/bmcpfs/developer-reference/api-nas-2017-06-26-createdataflow-bmcpfs) to create a data flow.
     * 2. Create a data flow task: Call [CreateDataFlowTask](https://www.alibabacloud.com/help/en/cpfs/bmcpfs/developer-reference/api-nas-2017-06-26-createdataflowtask-bmcpfs) to create a streaming import (StreamImport) or streaming export (StreamExport) task.
     * 3. Create a data flow streaming subtask: Call [CreateDataFlowSubTask](https://www.alibabacloud.com/help/en/cpfs/bmcpfs/developer-reference/api-nas-2017-06-26-createdataflowsubtask-bmcpfs) to create a streaming subtask.
     * > CPFS for Lingjun file systems must be created in the console.
     * **Operation description**
     * - Only CPFS for Lingjun 2.6.0 and later are supported. You can view the version information on the file system details page in the console.
     * - Prerequisites: A CPFS for Lingjun file system is created, the DataFlow is in the Running state, the DataFlowTask is in the Executing state, and the DataFlowSubTask is in the CREATED or RUNNING state.
     * - You can cancel a data flow streaming subtask only when it is in the CREATED or RUNNING state.
     * - Data flow streaming tasks are executed asynchronously. You can call [DescribeDataFlowSubTasks](https://www.alibabacloud.com/help/en/cpfs/bmcpfs/developer-reference/api-nas-2017-06-26-describedataflowtasks-bmcpfs) to query the execution status of a streaming task.
     *
     * @param request - CancelDataFlowSubTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelDataFlowSubTaskResponse
     *
     * @param CancelDataFlowSubTaskRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CancelDataFlowSubTaskResponse
     */
    public function cancelDataFlowSubTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dataFlowId) {
            @$query['DataFlowId'] = $request->dataFlowId;
        }

        if (null !== $request->dataFlowSubTaskId) {
            @$query['DataFlowSubTaskId'] = $request->dataFlowSubTaskId;
        }

        if (null !== $request->dataFlowTaskId) {
            @$query['DataFlowTaskId'] = $request->dataFlowTaskId;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CancelDataFlowSubTask',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelDataFlowSubTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Cancels a data flow streaming subtask.
     *
     * @remarks
     * *Prerequisite resource creation process**
     * Before you cancel a data flow streaming subtask, create the following resources in order:
     * 1. Create a data flow: Call [CreateDataFlow](https://www.alibabacloud.com/help/en/cpfs/bmcpfs/developer-reference/api-nas-2017-06-26-createdataflow-bmcpfs) to create a data flow.
     * 2. Create a data flow task: Call [CreateDataFlowTask](https://www.alibabacloud.com/help/en/cpfs/bmcpfs/developer-reference/api-nas-2017-06-26-createdataflowtask-bmcpfs) to create a streaming import (StreamImport) or streaming export (StreamExport) task.
     * 3. Create a data flow streaming subtask: Call [CreateDataFlowSubTask](https://www.alibabacloud.com/help/en/cpfs/bmcpfs/developer-reference/api-nas-2017-06-26-createdataflowsubtask-bmcpfs) to create a streaming subtask.
     * > CPFS for Lingjun file systems must be created in the console.
     * **Operation description**
     * - Only CPFS for Lingjun 2.6.0 and later are supported. You can view the version information on the file system details page in the console.
     * - Prerequisites: A CPFS for Lingjun file system is created, the DataFlow is in the Running state, the DataFlowTask is in the Executing state, and the DataFlowSubTask is in the CREATED or RUNNING state.
     * - You can cancel a data flow streaming subtask only when it is in the CREATED or RUNNING state.
     * - Data flow streaming tasks are executed asynchronously. You can call [DescribeDataFlowSubTasks](https://www.alibabacloud.com/help/en/cpfs/bmcpfs/developer-reference/api-nas-2017-06-26-describedataflowtasks-bmcpfs) to query the execution status of a streaming task.
     *
     * @param request - CancelDataFlowSubTaskRequest
     *
     * @returns CancelDataFlowSubTaskResponse
     *
     * @param CancelDataFlowSubTaskRequest $request
     *
     * @return CancelDataFlowSubTaskResponse
     */
    public function cancelDataFlowSubTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelDataFlowSubTaskWithOptions($request, $runtime);
    }

    /**
     * Cancels a data flow batch task or streaming task that is in the Pending or Executing state.
     *
     * @remarks
     * *Prerequisites**
     * Before you call this operation, create resources in the following order and make sure that the resources at each layer are in the required state:
     * 1. Create a file system: Call [CreateFileSystem](https://www.alibabacloud.com/help/en/cpfs/cpfsonecs/developer-reference/api-nas-2017-06-26-createfilesystem-cpfs) to create a CPFS file system.
     *    - State requirement: The file system is in the Running state.
     * 2. Create a mount target: Call [CreateMountTarget](https://www.alibabacloud.com/help/en/cpfs/cpfsonecs/developer-reference/api-nas-2017-06-26-createmounttarget-cpfs) to create a mount target.
     *    - State requirement: The mount target is in the Active state.
     * 3. Create a fileset: Call [CreateFileset](https://www.alibabacloud.com/help/en/cpfs/cpfsonecs/developer-reference/api-nas-2017-06-26-createfileset-cpfs) to create a fileset.
     *    - State requirement: The fileset is created.
     * 4. Create a data flow: Call [CreateDataFlow](https://www.alibabacloud.com/help/en/cpfs/cpfsonecs/developer-reference/api-nas-2017-06-26-createdataflow-cpfs) to create a data flow.
     *    - State requirement: The data flow is in the Running state.
     * 5. Create a data flow task: Call [CreateDataFlowTask](https://www.alibabacloud.com/help/en/cpfs/cpfsonecs/developer-reference/api-nas-2017-06-26-createdataflowtask-cpfs) to create a data flow task.
     * **Operation description**
     * - Only CPFS 2.2.0 and later and CPFS for Lingjun 2.4.0 and later support data flow tasks. You can view the version information on the file system details page in the console.
     * - Only data flow tasks in the `Pending` state can be canceled.
     * - Canceling a data flow task typically takes 5 to 10 minutes. You can call [DescribeDataFlowTasks](https://help.aliyun.com/document_detail/2402275.html) to query the task execution status.
     * - If a streaming data flow task contains running streaming subtasks, the streaming task cannot be canceled. Otherwise, the InvalidStatus.ResourceMismatch error is returned.
     *
     * @param request - CancelDataFlowTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelDataFlowTaskResponse
     *
     * @param CancelDataFlowTaskRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CancelDataFlowTaskResponse
     */
    public function cancelDataFlowTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dataFlowId) {
            @$query['DataFlowId'] = $request->dataFlowId;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CancelDataFlowTask',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelDataFlowTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Cancels a data flow batch task or streaming task that is in the Pending or Executing state.
     *
     * @remarks
     * *Prerequisites**
     * Before you call this operation, create resources in the following order and make sure that the resources at each layer are in the required state:
     * 1. Create a file system: Call [CreateFileSystem](https://www.alibabacloud.com/help/en/cpfs/cpfsonecs/developer-reference/api-nas-2017-06-26-createfilesystem-cpfs) to create a CPFS file system.
     *    - State requirement: The file system is in the Running state.
     * 2. Create a mount target: Call [CreateMountTarget](https://www.alibabacloud.com/help/en/cpfs/cpfsonecs/developer-reference/api-nas-2017-06-26-createmounttarget-cpfs) to create a mount target.
     *    - State requirement: The mount target is in the Active state.
     * 3. Create a fileset: Call [CreateFileset](https://www.alibabacloud.com/help/en/cpfs/cpfsonecs/developer-reference/api-nas-2017-06-26-createfileset-cpfs) to create a fileset.
     *    - State requirement: The fileset is created.
     * 4. Create a data flow: Call [CreateDataFlow](https://www.alibabacloud.com/help/en/cpfs/cpfsonecs/developer-reference/api-nas-2017-06-26-createdataflow-cpfs) to create a data flow.
     *    - State requirement: The data flow is in the Running state.
     * 5. Create a data flow task: Call [CreateDataFlowTask](https://www.alibabacloud.com/help/en/cpfs/cpfsonecs/developer-reference/api-nas-2017-06-26-createdataflowtask-cpfs) to create a data flow task.
     * **Operation description**
     * - Only CPFS 2.2.0 and later and CPFS for Lingjun 2.4.0 and later support data flow tasks. You can view the version information on the file system details page in the console.
     * - Only data flow tasks in the `Pending` state can be canceled.
     * - Canceling a data flow task typically takes 5 to 10 minutes. You can call [DescribeDataFlowTasks](https://help.aliyun.com/document_detail/2402275.html) to query the task execution status.
     * - If a streaming data flow task contains running streaming subtasks, the streaming task cannot be canceled. Otherwise, the InvalidStatus.ResourceMismatch error is returned.
     *
     * @param request - CancelDataFlowTaskRequest
     *
     * @returns CancelDataFlowTaskResponse
     *
     * @param CancelDataFlowTaskRequest $request
     *
     * @return CancelDataFlowTaskResponse
     */
    public function cancelDataFlowTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelDataFlowTaskWithOptions($request, $runtime);
    }

    /**
     * Cancels the directory quota of a file system.
     *
     * @remarks
     * Only General-purpose NAS NFS file systems support the directory quota feature.
     *
     * @param request - CancelDirQuotaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelDirQuotaResponse
     *
     * @param CancelDirQuotaRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CancelDirQuotaResponse
     */
    public function cancelDirQuotaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->path) {
            @$query['Path'] = $request->path;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        if (null !== $request->userType) {
            @$query['UserType'] = $request->userType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CancelDirQuota',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelDirQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Cancels the directory quota of a file system.
     *
     * @remarks
     * Only General-purpose NAS NFS file systems support the directory quota feature.
     *
     * @param request - CancelDirQuotaRequest
     *
     * @returns CancelDirQuotaResponse
     *
     * @param CancelDirQuotaRequest $request
     *
     * @return CancelDirQuotaResponse
     */
    public function cancelDirQuota($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelDirQuotaWithOptions($request, $runtime);
    }

    /**
     * Cancels the quota set for a fileset.
     *
     * @remarks
     * Only CPFS for Lingjun 2.7.0 and later support quota cancellation.
     * **Before you begin**
     * - This operation is applicable only to CPFS for Lingjun 2.7.0 and later file systems.
     * - The fileset feature is available only to whitelisted users. To use this feature, submit a ticket to apply for the fileset whitelist.
     * - The file system ID must start with `bmcpfs-`.
     * - Before you call this operation, make sure that a quota is set for the target fileset by calling the [SetFilesetQuota](https://www.alibabacloud.com/help/en/cpfs/bmcpfs/developer-reference/api-nas-2017-06-26-setfilesetquota-bmcpfs) operation.
     *
     * @param request - CancelFilesetQuotaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelFilesetQuotaResponse
     *
     * @param CancelFilesetQuotaRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CancelFilesetQuotaResponse
     */
    public function cancelFilesetQuotaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->fsetId) {
            @$query['FsetId'] = $request->fsetId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CancelFilesetQuota',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelFilesetQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Cancels the quota set for a fileset.
     *
     * @remarks
     * Only CPFS for Lingjun 2.7.0 and later support quota cancellation.
     * **Before you begin**
     * - This operation is applicable only to CPFS for Lingjun 2.7.0 and later file systems.
     * - The fileset feature is available only to whitelisted users. To use this feature, submit a ticket to apply for the fileset whitelist.
     * - The file system ID must start with `bmcpfs-`.
     * - Before you call this operation, make sure that a quota is set for the target fileset by calling the [SetFilesetQuota](https://www.alibabacloud.com/help/en/cpfs/bmcpfs/developer-reference/api-nas-2017-06-26-setfilesetquota-bmcpfs) operation.
     *
     * @param request - CancelFilesetQuotaRequest
     *
     * @returns CancelFilesetQuotaResponse
     *
     * @param CancelFilesetQuotaRequest $request
     *
     * @return CancelFilesetQuotaResponse
     */
    public function cancelFilesetQuota($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelFilesetQuotaWithOptions($request, $runtime);
    }

    /**
     * Cancels a data retrieval task that is in the active state.
     *
     * @remarks
     * Only General-purpose NAS file systems support this feature.
     *
     * @param request - CancelLifecycleRetrieveJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelLifecycleRetrieveJobResponse
     *
     * @param CancelLifecycleRetrieveJobRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CancelLifecycleRetrieveJobResponse
     */
    public function cancelLifecycleRetrieveJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CancelLifecycleRetrieveJob',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelLifecycleRetrieveJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Cancels a data retrieval task that is in the active state.
     *
     * @remarks
     * Only General-purpose NAS file systems support this feature.
     *
     * @param request - CancelLifecycleRetrieveJobRequest
     *
     * @returns CancelLifecycleRetrieveJobResponse
     *
     * @param CancelLifecycleRetrieveJobRequest $request
     *
     * @return CancelLifecycleRetrieveJobResponse
     */
    public function cancelLifecycleRetrieveJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelLifecycleRetrieveJobWithOptions($request, $runtime);
    }

    /**
     * Cancels a running task in the recycle bin.
     *
     * @remarks
     * ### Operation description
     * - Only General-purpose NAS file systems support this feature.
     * - You can cancel only tasks that are in the Running state. The cancel operation does not take effect on tasks that have reached a final state (PartialSuccess, Success, Fail, or Cancelled).
     * - When you cancel a running permanent deletion task, files that have already been permanently deleted cannot be recovered.
     * - When you cancel a running file restoration task, restored files can be queried in the file system, and unrestored files can be queried in the recycle bin.
     *
     * @param request - CancelRecycleBinJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelRecycleBinJobResponse
     *
     * @param CancelRecycleBinJobRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CancelRecycleBinJobResponse
     */
    public function cancelRecycleBinJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CancelRecycleBinJob',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelRecycleBinJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Cancels a running task in the recycle bin.
     *
     * @remarks
     * ### Operation description
     * - Only General-purpose NAS file systems support this feature.
     * - You can cancel only tasks that are in the Running state. The cancel operation does not take effect on tasks that have reached a final state (PartialSuccess, Success, Fail, or Cancelled).
     * - When you cancel a running permanent deletion task, files that have already been permanently deleted cannot be recovered.
     * - When you cancel a running file restoration task, restored files can be queried in the file system, and unrestored files can be queried in the recycle bin.
     *
     * @param request - CancelRecycleBinJobRequest
     *
     * @returns CancelRecycleBinJobResponse
     *
     * @param CancelRecycleBinJobRequest $request
     *
     * @return CancelRecycleBinJobResponse
     */
    public function cancelRecycleBinJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelRecycleBinJobWithOptions($request, $runtime);
    }

    /**
     * Modifies the resource group to which a file system instance belongs.
     *
     * @param request - ChangeResourceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChangeResourceGroupResponse
     *
     * @param ChangeResourceGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ChangeResourceGroupResponse
     */
    public function changeResourceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->newResourceGroupId) {
            @$query['NewResourceGroupId'] = $request->newResourceGroupId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChangeResourceGroup',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChangeResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the resource group to which a file system instance belongs.
     *
     * @param request - ChangeResourceGroupRequest
     *
     * @returns ChangeResourceGroupResponse
     *
     * @param ChangeResourceGroupRequest $request
     *
     * @return ChangeResourceGroupResponse
     */
    public function changeResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeResourceGroupWithOptions($request, $runtime);
    }

    /**
     * Creates a permission group.
     *
     * @remarks
     * - A maximum of 20 permission groups can be created per Alibaba Cloud account in a single region.
     * - A maximum of 300 rules can be added to a permission group.
     * - Only permission groups of the VPC network type can be created.
     *
     * @param request - CreateAccessGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAccessGroupResponse
     *
     * @param CreateAccessGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateAccessGroupResponse
     */
    public function createAccessGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessGroupName) {
            @$query['AccessGroupName'] = $request->accessGroupName;
        }

        if (null !== $request->accessGroupType) {
            @$query['AccessGroupType'] = $request->accessGroupType;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->fileSystemType) {
            @$query['FileSystemType'] = $request->fileSystemType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAccessGroup',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAccessGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a permission group.
     *
     * @remarks
     * - A maximum of 20 permission groups can be created per Alibaba Cloud account in a single region.
     * - A maximum of 300 rules can be added to a permission group.
     * - Only permission groups of the VPC network type can be created.
     *
     * @param request - CreateAccessGroupRequest
     *
     * @returns CreateAccessGroupResponse
     *
     * @param CreateAccessGroupRequest $request
     *
     * @return CreateAccessGroupResponse
     */
    public function createAccessGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAccessGroupWithOptions($request, $runtime);
    }

    /**
     * Creates an access point.
     *
     * @remarks
     * - When you use the CreateAccessPoint operation to create an access point, some resources are generated asynchronously. Therefore, after executing the CreateAccessPoint operation successfully, first invoke the [DescribeAccessPoints](https://help.aliyun.com/document_detail/2712239.html) or [DescribeAccessPoint](https://help.aliyun.com/document_detail/2712240.html) operation to query the status of the access point. Execute the file system mount operation only after the access point enters the **Active** state. Otherwise, it may result in a failed mount.
     * - Only General-purpose NAS NFS file systems support this feature.
     * - If you enable the RAM policy (EnabledRam), you must configure the corresponding RAM permissions. For more information, see [Manage access points](https://help.aliyun.com/document_detail/2545998.html).
     *
     * @param request - CreateAccessPointRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAccessPointResponse
     *
     * @param CreateAccessPointRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateAccessPointResponse
     */
    public function createAccessPointWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessGroup) {
            @$query['AccessGroup'] = $request->accessGroup;
        }

        if (null !== $request->accessPointName) {
            @$query['AccessPointName'] = $request->accessPointName;
        }

        if (null !== $request->agenticSpaceId) {
            @$query['AgenticSpaceId'] = $request->agenticSpaceId;
        }

        if (null !== $request->enabledRam) {
            @$query['EnabledRam'] = $request->enabledRam;
        }

        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->ownerGroupId) {
            @$query['OwnerGroupId'] = $request->ownerGroupId;
        }

        if (null !== $request->ownerUserId) {
            @$query['OwnerUserId'] = $request->ownerUserId;
        }

        if (null !== $request->permission) {
            @$query['Permission'] = $request->permission;
        }

        if (null !== $request->posixGroupId) {
            @$query['PosixGroupId'] = $request->posixGroupId;
        }

        if (null !== $request->posixSecondaryGroupIds) {
            @$query['PosixSecondaryGroupIds'] = $request->posixSecondaryGroupIds;
        }

        if (null !== $request->posixUserId) {
            @$query['PosixUserId'] = $request->posixUserId;
        }

        if (null !== $request->rootDirectory) {
            @$query['RootDirectory'] = $request->rootDirectory;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        if (null !== $request->vswId) {
            @$query['VswId'] = $request->vswId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAccessPoint',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAccessPointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an access point.
     *
     * @remarks
     * - When you use the CreateAccessPoint operation to create an access point, some resources are generated asynchronously. Therefore, after executing the CreateAccessPoint operation successfully, first invoke the [DescribeAccessPoints](https://help.aliyun.com/document_detail/2712239.html) or [DescribeAccessPoint](https://help.aliyun.com/document_detail/2712240.html) operation to query the status of the access point. Execute the file system mount operation only after the access point enters the **Active** state. Otherwise, it may result in a failed mount.
     * - Only General-purpose NAS NFS file systems support this feature.
     * - If you enable the RAM policy (EnabledRam), you must configure the corresponding RAM permissions. For more information, see [Manage access points](https://help.aliyun.com/document_detail/2545998.html).
     *
     * @param request - CreateAccessPointRequest
     *
     * @returns CreateAccessPointResponse
     *
     * @param CreateAccessPointRequest $request
     *
     * @return CreateAccessPointResponse
     */
    public function createAccessPoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAccessPointWithOptions($request, $runtime);
    }

    /**
     * Creates a permission rule for a permission group.
     *
     * @remarks
     * You can add up to 300 rules to a permission group.
     *
     * @param request - CreateAccessRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAccessRuleResponse
     *
     * @param CreateAccessRuleRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateAccessRuleResponse
     */
    public function createAccessRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessGroupName) {
            @$query['AccessGroupName'] = $request->accessGroupName;
        }

        if (null !== $request->fileSystemType) {
            @$query['FileSystemType'] = $request->fileSystemType;
        }

        if (null !== $request->ipv6SourceCidrIp) {
            @$query['Ipv6SourceCidrIp'] = $request->ipv6SourceCidrIp;
        }

        if (null !== $request->priority) {
            @$query['Priority'] = $request->priority;
        }

        if (null !== $request->RWAccessType) {
            @$query['RWAccessType'] = $request->RWAccessType;
        }

        if (null !== $request->sourceCidrIp) {
            @$query['SourceCidrIp'] = $request->sourceCidrIp;
        }

        if (null !== $request->userAccessType) {
            @$query['UserAccessType'] = $request->userAccessType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAccessRule',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAccessRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a permission rule for a permission group.
     *
     * @remarks
     * You can add up to 300 rules to a permission group.
     *
     * @param request - CreateAccessRuleRequest
     *
     * @returns CreateAccessRuleResponse
     *
     * @param CreateAccessRuleRequest $request
     *
     * @return CreateAccessRuleResponse
     */
    public function createAccessRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAccessRuleWithOptions($request, $runtime);
    }

    /**
     * Creates an Agentic space.
     *
     * @remarks
     * *Before you begin**
     * Complete the following preparations before calling this operation:
     * 1. **An Agentic file system is created**: When calling [CreateFileSystem](https://www.alibabacloud.com/help/en/cpfs/cpfsonecs/developer-reference/api-nas-2017-06-26-createfilesystem-cpfs) to create a file system, set the following parameters:
     *    - `StorageType`: Set to `Agentic`.
     *    - `ProtocolType`: Set to `NFS`.
     *    - **Supported regions**: The Agentic storage type is available only in specific regions and zones. Check the console for details.
     * **Usage notes**
     * - This operation applies only to Agentic file systems.
     * - Complete call chain example:
     *   1. Call CreateFileSystem to create an Agentic file system (StorageType=Agentic, ProtocolType=NFS).
     *   2. After the file system is created (status is Running), call CreateAgenticSpace to create an Agentic space.
     *   3. To modify the Agentic space configuration, call the [ModifyAgenticSpace](https://www.alibabacloud.com/help/en/nas/developer-reference/api-nas-2017-06-26-modifyagenticspace) operation.
     *
     * @param request - CreateAgenticSpaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAgenticSpaceResponse
     *
     * @param CreateAgenticSpaceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateAgenticSpaceResponse
     */
    public function createAgenticSpaceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->azone) {
            @$query['Azone'] = $request->azone;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->fileSystemPath) {
            @$query['FileSystemPath'] = $request->fileSystemPath;
        }

        if (null !== $request->quota) {
            @$query['Quota'] = $request->quota;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAgenticSpace',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAgenticSpaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an Agentic space.
     *
     * @remarks
     * *Before you begin**
     * Complete the following preparations before calling this operation:
     * 1. **An Agentic file system is created**: When calling [CreateFileSystem](https://www.alibabacloud.com/help/en/cpfs/cpfsonecs/developer-reference/api-nas-2017-06-26-createfilesystem-cpfs) to create a file system, set the following parameters:
     *    - `StorageType`: Set to `Agentic`.
     *    - `ProtocolType`: Set to `NFS`.
     *    - **Supported regions**: The Agentic storage type is available only in specific regions and zones. Check the console for details.
     * **Usage notes**
     * - This operation applies only to Agentic file systems.
     * - Complete call chain example:
     *   1. Call CreateFileSystem to create an Agentic file system (StorageType=Agentic, ProtocolType=NFS).
     *   2. After the file system is created (status is Running), call CreateAgenticSpace to create an Agentic space.
     *   3. To modify the Agentic space configuration, call the [ModifyAgenticSpace](https://www.alibabacloud.com/help/en/nas/developer-reference/api-nas-2017-06-26-modifyagenticspace) operation.
     *
     * @param request - CreateAgenticSpaceRequest
     *
     * @returns CreateAgenticSpaceResponse
     *
     * @param CreateAgenticSpaceRequest $request
     *
     * @return CreateAgenticSpaceResponse
     */
    public function createAgenticSpace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAgenticSpaceWithOptions($request, $runtime);
    }

    /**
     * Creates an automatic snapshot policy.
     *
     * @remarks
     * <props="china">
     * - This feature is in free public preview. During the public preview, the [File Storage NAS Service-Level Agreement (SLA)](https://terms.aliyun.com/legal-agreement/terms/suit_bu1_ali_cloud/suit_bu1_ali_cloud201803061139_99860.html?spm=a2c4g.11186623.0.0.5c895ff2YPLrwe) is not guaranteed.
     * - Only Advanced Extreme NAS file systems support this feature.
     * - You can create up to 100 automatic snapshot policies per region for each Alibaba Cloud account.
     * - If a file system contains a large amount of data and the time required to create an automatic snapshot exceeds the interval between two scheduled time points, the next time point is automatically skipped. For example, you set 09:00, 10:00, 11:00, and 12:00 as the automatic snapshot time points. Because the file system contains a large amount of data, the snapshot creation starts at 09:00 and is completed at 10:20, which takes 80 minutes. The system skips the 10:00 time point and continues to create an automatic snapshot at 11:00.
     * - Each file system supports up to 128 automatic snapshots. After the snapshot quota is reached, the system automatically deletes the earliest automatic snapshots. Manual snapshots are not affected.
     * - When you modify the retention period of an automatic snapshot policy, the modification takes effect only on new snapshots. Existing snapshots retain their original retention period.
     * - If an automatic snapshot is being created for a file system, you must wait until the automatic snapshot is completed before you can manually create a snapshot.
     * - Automatic snapshot policies cannot be executed on file systems that are not in the Normal state.
     * - Automatic snapshots follow a unified naming format: `auto_yyyyMMdd_X`. In this format, `auto` indicates an automatic snapshot, which distinguishes it from manual snapshots. `yyyyMMdd` indicates the date when the snapshot is created, where `y` indicates the year, `M` indicates the month, and `d` indicates the day. `X` indicates the sequence number of the automatic snapshot created on that day. For example, `auto_20201018_1` indicates the first automatic snapshot created on October 18, 2020.
     * - A created automatic snapshot policy can be applied to any file system by calling ApplyAutoSnapshotPolicy, and the policy content can be modified by calling ModifyAutoSnapshotPolicy.
     * <props="intl">
     * - This feature is in free public preview.
     * - Only Advanced Extreme NAS file systems support this feature.
     * - You can create up to 100 automatic snapshot policies per region for each Alibaba Cloud account.
     * - If a file system contains a large amount of data and the time required to create an automatic snapshot exceeds the interval between two scheduled time points, the next time point is automatically skipped. For example, you set 09:00, 10:00, 11:00, and 12:00 as the automatic snapshot time points. Because the file system contains a large amount of data, the snapshot creation starts at 09:00 and is completed at 10:20, which takes 80 minutes. The system skips the 10:00 time point and continues to create an automatic snapshot at 11:00.
     * - Each file system supports up to 128 automatic snapshots. After the snapshot quota is reached, the system automatically deletes the earliest automatic snapshots. Manual snapshots are not affected.
     * - When you modify the retention period of an automatic snapshot policy, the modification takes effect only on new snapshots. Existing snapshots retain their original retention period.
     * - If an automatic snapshot is being created for a file system, you must wait until the automatic snapshot is completed before you can manually create a snapshot.
     * - Automatic snapshot policies cannot be executed on file systems that are not in the Normal state.
     * - Automatic snapshots follow a unified naming format: `auto_yyyyMMdd_X`. In this format, `auto` indicates an automatic snapshot, which distinguishes it from manual snapshots. `yyyyMMdd` indicates the date when the snapshot is created, where `y` indicates the year, `M` indicates the month, and `d` indicates the day. `X` indicates the sequence number of the automatic snapshot created on that day. For example, `auto_20201018_1` indicates the first automatic snapshot created on October 18, 2020.
     * - A created automatic snapshot policy can be applied to any file system by calling ApplyAutoSnapshotPolicy, and the policy content can be modified by calling ModifyAutoSnapshotPolicy.
     *
     * @param request - CreateAutoSnapshotPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAutoSnapshotPolicyResponse
     *
     * @param CreateAutoSnapshotPolicyRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateAutoSnapshotPolicyResponse
     */
    public function createAutoSnapshotPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoSnapshotPolicyName) {
            @$query['AutoSnapshotPolicyName'] = $request->autoSnapshotPolicyName;
        }

        if (null !== $request->fileSystemType) {
            @$query['FileSystemType'] = $request->fileSystemType;
        }

        if (null !== $request->repeatWeekdays) {
            @$query['RepeatWeekdays'] = $request->repeatWeekdays;
        }

        if (null !== $request->retentionDays) {
            @$query['RetentionDays'] = $request->retentionDays;
        }

        if (null !== $request->timePoints) {
            @$query['TimePoints'] = $request->timePoints;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAutoSnapshotPolicy',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAutoSnapshotPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an automatic snapshot policy.
     *
     * @remarks
     * <props="china">
     * - This feature is in free public preview. During the public preview, the [File Storage NAS Service-Level Agreement (SLA)](https://terms.aliyun.com/legal-agreement/terms/suit_bu1_ali_cloud/suit_bu1_ali_cloud201803061139_99860.html?spm=a2c4g.11186623.0.0.5c895ff2YPLrwe) is not guaranteed.
     * - Only Advanced Extreme NAS file systems support this feature.
     * - You can create up to 100 automatic snapshot policies per region for each Alibaba Cloud account.
     * - If a file system contains a large amount of data and the time required to create an automatic snapshot exceeds the interval between two scheduled time points, the next time point is automatically skipped. For example, you set 09:00, 10:00, 11:00, and 12:00 as the automatic snapshot time points. Because the file system contains a large amount of data, the snapshot creation starts at 09:00 and is completed at 10:20, which takes 80 minutes. The system skips the 10:00 time point and continues to create an automatic snapshot at 11:00.
     * - Each file system supports up to 128 automatic snapshots. After the snapshot quota is reached, the system automatically deletes the earliest automatic snapshots. Manual snapshots are not affected.
     * - When you modify the retention period of an automatic snapshot policy, the modification takes effect only on new snapshots. Existing snapshots retain their original retention period.
     * - If an automatic snapshot is being created for a file system, you must wait until the automatic snapshot is completed before you can manually create a snapshot.
     * - Automatic snapshot policies cannot be executed on file systems that are not in the Normal state.
     * - Automatic snapshots follow a unified naming format: `auto_yyyyMMdd_X`. In this format, `auto` indicates an automatic snapshot, which distinguishes it from manual snapshots. `yyyyMMdd` indicates the date when the snapshot is created, where `y` indicates the year, `M` indicates the month, and `d` indicates the day. `X` indicates the sequence number of the automatic snapshot created on that day. For example, `auto_20201018_1` indicates the first automatic snapshot created on October 18, 2020.
     * - A created automatic snapshot policy can be applied to any file system by calling ApplyAutoSnapshotPolicy, and the policy content can be modified by calling ModifyAutoSnapshotPolicy.
     * <props="intl">
     * - This feature is in free public preview.
     * - Only Advanced Extreme NAS file systems support this feature.
     * - You can create up to 100 automatic snapshot policies per region for each Alibaba Cloud account.
     * - If a file system contains a large amount of data and the time required to create an automatic snapshot exceeds the interval between two scheduled time points, the next time point is automatically skipped. For example, you set 09:00, 10:00, 11:00, and 12:00 as the automatic snapshot time points. Because the file system contains a large amount of data, the snapshot creation starts at 09:00 and is completed at 10:20, which takes 80 minutes. The system skips the 10:00 time point and continues to create an automatic snapshot at 11:00.
     * - Each file system supports up to 128 automatic snapshots. After the snapshot quota is reached, the system automatically deletes the earliest automatic snapshots. Manual snapshots are not affected.
     * - When you modify the retention period of an automatic snapshot policy, the modification takes effect only on new snapshots. Existing snapshots retain their original retention period.
     * - If an automatic snapshot is being created for a file system, you must wait until the automatic snapshot is completed before you can manually create a snapshot.
     * - Automatic snapshot policies cannot be executed on file systems that are not in the Normal state.
     * - Automatic snapshots follow a unified naming format: `auto_yyyyMMdd_X`. In this format, `auto` indicates an automatic snapshot, which distinguishes it from manual snapshots. `yyyyMMdd` indicates the date when the snapshot is created, where `y` indicates the year, `M` indicates the month, and `d` indicates the day. `X` indicates the sequence number of the automatic snapshot created on that day. For example, `auto_20201018_1` indicates the first automatic snapshot created on October 18, 2020.
     * - A created automatic snapshot policy can be applied to any file system by calling ApplyAutoSnapshotPolicy, and the policy content can be modified by calling ModifyAutoSnapshotPolicy.
     *
     * @param request - CreateAutoSnapshotPolicyRequest
     *
     * @returns CreateAutoSnapshotPolicyResponse
     *
     * @param CreateAutoSnapshotPolicyRequest $request
     *
     * @return CreateAutoSnapshotPolicyResponse
     */
    public function createAutoSnapshotPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAutoSnapshotPolicyWithOptions($request, $runtime);
    }

    /**
     * Creates an access point for a CPFS for Lingjun file system.
     *
     * @remarks
     * Creates an access point for a CPFS for Lingjun file system.
     *
     * @param request - CreateCpfsAccessPointRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCpfsAccessPointResponse
     *
     * @param CreateCpfsAccessPointRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateCpfsAccessPointResponse
     */
    public function createCpfsAccessPointWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->rootDirectory) {
            @$query['RootDirectory'] = $request->rootDirectory;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateCpfsAccessPoint',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCpfsAccessPointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an access point for a CPFS for Lingjun file system.
     *
     * @remarks
     * Creates an access point for a CPFS for Lingjun file system.
     *
     * @param request - CreateCpfsAccessPointRequest
     *
     * @returns CreateCpfsAccessPointResponse
     *
     * @param CreateCpfsAccessPointRequest $request
     *
     * @return CreateCpfsAccessPointResponse
     */
    public function createCpfsAccessPoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCpfsAccessPointWithOptions($request, $runtime);
    }

    /**
     * Creates a data flow between a General-purpose CPFS or CPFS for Lingjun file system and a source storage.
     *
     * @remarks
     * - This operation is applicable to the following services:
     * | Service | File system ID format | Minimum version that supports data flows |
     * |---------|-----------------------|------------------------------------------|
     * | **General-purpose CPFS** | Starts with `cpfs-`, such as cpfs-125487**** | 2.2.0 and later |
     * | **CPFS for Lingjun** | Starts with `bmcpfs-`, such as bmcpfs-0015**** | 2.4.0 and later |
     * > : General-purpose CPFS and CPFS for Lingjun share the same set of API operations, but differ in parameter values and supported features. Refer to the corresponding section based on the service you use.
     * - Basic operations
     *     - You can create a data flow only when the General-purpose CPFS or CPFS for Lingjun file system is in the Running state.
     *     - You can create a maximum of **10** data flows for a General-purpose CPFS or CPFS for Lingjun file system.
     *     - Creating a data flow typically takes 2 to 5 minutes. You can call the [DescribeDataFlows](https://help.aliyun.com/document_detail/336901.html) operation to check whether the data flow is created.
     * - Permissions.
     *     When you create a data flow, Cloud Parallel File Storage assumes the `AliyunServiceRoleForNasOssDataflow` and `AliyunServiceRoleForNasEventNotification` service-linked roles to associate the service for the data stream. For more information, see [Service-linked roles for Cloud Parallel File Storage](https://help.aliyun.com/document_detail/185138.html).
     * - Usage notes for General-purpose CPFS.
     *      This section applies to General-purpose CPFS file systems whose IDs start with `cpfs-`.
     *   - Billing
     *     - You are billed for a data flow based on the data flow bandwidth. For more information, see [Billing of General-purpose CPFS](https://help.aliyun.com/document_detail/111858.html).
     *     - If you enable auto-refresh, EventBridge is used to collect object modification events from the source OSS bucket. You are billed for these events. For more information, see [Billing of EventBridge](https://help.aliyun.com/document_detail/163752.html).
     *   - Data flow specifications
     *       - The data flow bandwidth (Throughput) supports three specifications: 600 MB/s, 1200 MB/s, and 1500 MB/s. The data flow bandwidth is the maximum transmission bandwidth that the data flow can achieve when importing or exporting data.
     *     - Creating a data flow consumes one vSwitch IP address used by a General-purpose Cloud Parallel File Storage mount target. Make sure that the vSwitch has sufficient IP addresses.
     *     - Resource check: If you set the DryRun Settings parameter to true, the system checks whether the resources required to create a data flow (data stream) of the specified specification are sufficient.
     *   - Fileset
     *     - The destination of a data flow is a fileset in a General-purpose CPFS file system. A fileset is a new directory tree structure in a General-purpose CPFS file system. It is a small file system within the parent file system and has an independent inode space and management capabilities.
     *     - The fileset must already exist when you create a data flow, and it cannot be nested with other filesets. You can create only one data flow on a fileset, which corresponds to one source storage.
     *     - A fileset can contain a maximum of 1 million files. If the number of files imported from the OSS bucket exceeds this limit, a `no space` error is reported when you create new files.
     *    > If the fileset already contains data, the existing data in the fileset is cleared and replaced with the data synchronized from the OSS bucket after the data flow is created.
     *   - Auto-refresh
     *     - After you configure auto-refresh, when the data in the source storage changes, the changed metadata undergoes automatic synchronization to the General-purpose Cloud Parallel File Storage file system. The changed data is loaded on demand when users access the files, or you can start a data flow node to load the data.
     *     - Auto-refresh relies on EventBridge to collect object modification events from the source OSS bucket. You must first [activate EventBridge](https://help.aliyun.com/document_detail/182246.html).
     *     - The scope of auto-refresh is a prefix, which is specified by the RefreshPath parameter. You can configure a maximum of five auto-refresh folders for a data flow (data stream).
     *     - The auto-refresh interval (AutoRefreshInterval) is the time interval configured in the Settings by General-purpose Cloud Parallel File Storage to check whether data updates exist within the prefix in the source OSS bucket. If data updates exist, an auto-refresh node is started. If the frequency of object modification events in the source OSS bucket exceeds the processing capability of the General-purpose Cloud Parallel File Storage data flow, auto-refresh nodes accumulate, metadata updates are delayed, and the status of the data flow becomes `Misconfigured`. To resolve this issue, you can upgrade the data flow specification or reduce the modification frequency in the OSS bucket.
     *     - When you configure auto-refresh for a prefix in a General-purpose Cloud Parallel File Storage data flow, an event bus is created on the user side, and an event rule is created for the prefix of the source OSS bucket. When an object in the prefix of the source OSS bucket is modified, an OSS event is generated in EventBridge and processed by the General-purpose Cloud Parallel File Storage data flow.
     *      > The event bus and event rule created by General-purpose Cloud Parallel File Storage in EventBridge contain the `Create for cpfs auto refresh` description. You cannot modify or delete the event bus or event rule. Otherwise, auto-refresh cannot remain in a Normal state.
     *   - Source storage
     *      - Only OSS is supported Cloud Parallel File Storage. The source storage (SourceStorage) of a data flow must be an OSS bucket.
     *      - General-purpose CPFS data flows support encrypted and unencrypted access to OSS. If you select the encrypted (SSL) access method, make sure that encryption in transit is enabled for the OSS bucket.
     *      - If multiple General-purpose CPFS data flows or multiple data flows of the same General-purpose CPFS file system use the same OSS bucket Cloud Parallel File Storage, you must enable versioning for the OSS bucket to prevent data conflicts when multiple General-purpose CPFS file systems export data to the same source.
     *      - Cross-region OSS data flows are not supported. The OSS bucket must be in the same region as the General-purpose CPFS file system.
     *        > Before you create a data flow, you must add a tag (key: cpfs-dataflow, value: true) to the source OSS bucket so that the General-purpose CPFS data flow can access the data in the bucket. Do not delete or modify this tag while the data flow is in use. Otherwise, the General-purpose CPFS data flow cannot access the data in the bucket.
     * - Usage notes for CPFS for Lingjun.
     *      This section applies to CPFS for Lingjun file systems whose IDs start with `bmcpfs-`.
     *   - Source storage
     *       - Only OSS is supported as the source storage. The source storage (SourceStorage) of a data flow must be an OSS bucket.
     *       - CPFS for Lingjun data flows support encrypted and unencrypted access to OSS. If you select the encrypted (SSL) access method, make sure that encryption in transit is enabled for the OSS bucket.
     *       - If multiple CPFS for Lingjun data flows or multiple data flows of the same CPFS for Lingjun file system use the same OSS bucket as the source storage, you must enable versioning for the OSS bucket to prevent data conflicts when multiple CPFS for Lingjun file systems export data to the same source.
     *       - Cross-region OSS data flows are not supported. The OSS bucket must be in the same region as the CPFS for Lingjun file system.
     *      - CPFS for Lingjun 2.6.0 and later support creating data flows by using cross-account OSS buckets.
     *      - You need to set the account id parameter only when you use a cross-account OSS bucket.
     *      - Before you use a cross-account OSS bucket, you must grant permissions to the account. For more information, see [Authorize cross-account data flows](https://help.aliyun.com/document_detail/2713462.html).
     *        > Before you create a data flow, you must add a tag (key: cpfs-dataflow, value: true) to the source OSS bucket so that the CPFS for Lingjun data flow can access the data in the bucket. Do not delete or modify this tag while the data flow is in use. Otherwise, the CPFS for Lingjun data flow cannot access the data in the bucket.
     *   - Limits of data flows on file systems.
     *     - You cannot rename a non-empty directory in the file system path associated with the data flow. Otherwise, a Permission Denied or Directory Not Empty error is reported.
     *      - Use special characters in directory and file names with caution. Supported characters include uppercase and lowercase letters, digits, exclamation marks (!), hyphens (-), underscores (_), periods (.), asterisks (*), and parentheses (()).
     *     - Ultra-long paths are not supported. The maximum path length supported by a data flow is 1,023 characters.
     *   - Limits on data flow imports.
     *     - When a symbolic link file is imported into CPFS for Lingjun, it is converted into a regular file containing data, and the symbolic link information is lost.
     *     - If an OSS bucket has multiple versions, only the latest version is copied.
     *     - File or subdirectory names longer than 255 bytes are not supported.
     *   - Data flow export limits
     *   - Limits on data flow exports
     *     - After a symlink file is synchronized to OSS, the file pointed to by the symlink is not synchronized. Instead, the symlink file becomes a regular empty object without data.
     *     - Hardlink files are synchronized to OSS only as regular files.
     *     - When socket, device, or pipe files are exported to an OSS bucket, they become regular empty objects without data.
     *     - Directory paths longer than 1,023 characters are not supported.
     *
     * @param request - CreateDataFlowRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDataFlowResponse
     *
     * @param CreateDataFlowRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateDataFlowResponse
     */
    public function createDataFlowWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoRefreshInterval) {
            @$query['AutoRefreshInterval'] = $request->autoRefreshInterval;
        }

        if (null !== $request->autoRefreshPolicy) {
            @$query['AutoRefreshPolicy'] = $request->autoRefreshPolicy;
        }

        if (null !== $request->autoRefreshs) {
            @$query['AutoRefreshs'] = $request->autoRefreshs;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->fileSystemPath) {
            @$query['FileSystemPath'] = $request->fileSystemPath;
        }

        if (null !== $request->fsetId) {
            @$query['FsetId'] = $request->fsetId;
        }

        if (null !== $request->sourceSecurityType) {
            @$query['SourceSecurityType'] = $request->sourceSecurityType;
        }

        if (null !== $request->sourceStorage) {
            @$query['SourceStorage'] = $request->sourceStorage;
        }

        if (null !== $request->sourceStoragePath) {
            @$query['SourceStoragePath'] = $request->sourceStoragePath;
        }

        if (null !== $request->throughput) {
            @$query['Throughput'] = $request->throughput;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateDataFlow',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDataFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a data flow between a General-purpose CPFS or CPFS for Lingjun file system and a source storage.
     *
     * @remarks
     * - This operation is applicable to the following services:
     * | Service | File system ID format | Minimum version that supports data flows |
     * |---------|-----------------------|------------------------------------------|
     * | **General-purpose CPFS** | Starts with `cpfs-`, such as cpfs-125487**** | 2.2.0 and later |
     * | **CPFS for Lingjun** | Starts with `bmcpfs-`, such as bmcpfs-0015**** | 2.4.0 and later |
     * > : General-purpose CPFS and CPFS for Lingjun share the same set of API operations, but differ in parameter values and supported features. Refer to the corresponding section based on the service you use.
     * - Basic operations
     *     - You can create a data flow only when the General-purpose CPFS or CPFS for Lingjun file system is in the Running state.
     *     - You can create a maximum of **10** data flows for a General-purpose CPFS or CPFS for Lingjun file system.
     *     - Creating a data flow typically takes 2 to 5 minutes. You can call the [DescribeDataFlows](https://help.aliyun.com/document_detail/336901.html) operation to check whether the data flow is created.
     * - Permissions.
     *     When you create a data flow, Cloud Parallel File Storage assumes the `AliyunServiceRoleForNasOssDataflow` and `AliyunServiceRoleForNasEventNotification` service-linked roles to associate the service for the data stream. For more information, see [Service-linked roles for Cloud Parallel File Storage](https://help.aliyun.com/document_detail/185138.html).
     * - Usage notes for General-purpose CPFS.
     *      This section applies to General-purpose CPFS file systems whose IDs start with `cpfs-`.
     *   - Billing
     *     - You are billed for a data flow based on the data flow bandwidth. For more information, see [Billing of General-purpose CPFS](https://help.aliyun.com/document_detail/111858.html).
     *     - If you enable auto-refresh, EventBridge is used to collect object modification events from the source OSS bucket. You are billed for these events. For more information, see [Billing of EventBridge](https://help.aliyun.com/document_detail/163752.html).
     *   - Data flow specifications
     *       - The data flow bandwidth (Throughput) supports three specifications: 600 MB/s, 1200 MB/s, and 1500 MB/s. The data flow bandwidth is the maximum transmission bandwidth that the data flow can achieve when importing or exporting data.
     *     - Creating a data flow consumes one vSwitch IP address used by a General-purpose Cloud Parallel File Storage mount target. Make sure that the vSwitch has sufficient IP addresses.
     *     - Resource check: If you set the DryRun Settings parameter to true, the system checks whether the resources required to create a data flow (data stream) of the specified specification are sufficient.
     *   - Fileset
     *     - The destination of a data flow is a fileset in a General-purpose CPFS file system. A fileset is a new directory tree structure in a General-purpose CPFS file system. It is a small file system within the parent file system and has an independent inode space and management capabilities.
     *     - The fileset must already exist when you create a data flow, and it cannot be nested with other filesets. You can create only one data flow on a fileset, which corresponds to one source storage.
     *     - A fileset can contain a maximum of 1 million files. If the number of files imported from the OSS bucket exceeds this limit, a `no space` error is reported when you create new files.
     *    > If the fileset already contains data, the existing data in the fileset is cleared and replaced with the data synchronized from the OSS bucket after the data flow is created.
     *   - Auto-refresh
     *     - After you configure auto-refresh, when the data in the source storage changes, the changed metadata undergoes automatic synchronization to the General-purpose Cloud Parallel File Storage file system. The changed data is loaded on demand when users access the files, or you can start a data flow node to load the data.
     *     - Auto-refresh relies on EventBridge to collect object modification events from the source OSS bucket. You must first [activate EventBridge](https://help.aliyun.com/document_detail/182246.html).
     *     - The scope of auto-refresh is a prefix, which is specified by the RefreshPath parameter. You can configure a maximum of five auto-refresh folders for a data flow (data stream).
     *     - The auto-refresh interval (AutoRefreshInterval) is the time interval configured in the Settings by General-purpose Cloud Parallel File Storage to check whether data updates exist within the prefix in the source OSS bucket. If data updates exist, an auto-refresh node is started. If the frequency of object modification events in the source OSS bucket exceeds the processing capability of the General-purpose Cloud Parallel File Storage data flow, auto-refresh nodes accumulate, metadata updates are delayed, and the status of the data flow becomes `Misconfigured`. To resolve this issue, you can upgrade the data flow specification or reduce the modification frequency in the OSS bucket.
     *     - When you configure auto-refresh for a prefix in a General-purpose Cloud Parallel File Storage data flow, an event bus is created on the user side, and an event rule is created for the prefix of the source OSS bucket. When an object in the prefix of the source OSS bucket is modified, an OSS event is generated in EventBridge and processed by the General-purpose Cloud Parallel File Storage data flow.
     *      > The event bus and event rule created by General-purpose Cloud Parallel File Storage in EventBridge contain the `Create for cpfs auto refresh` description. You cannot modify or delete the event bus or event rule. Otherwise, auto-refresh cannot remain in a Normal state.
     *   - Source storage
     *      - Only OSS is supported Cloud Parallel File Storage. The source storage (SourceStorage) of a data flow must be an OSS bucket.
     *      - General-purpose CPFS data flows support encrypted and unencrypted access to OSS. If you select the encrypted (SSL) access method, make sure that encryption in transit is enabled for the OSS bucket.
     *      - If multiple General-purpose CPFS data flows or multiple data flows of the same General-purpose CPFS file system use the same OSS bucket Cloud Parallel File Storage, you must enable versioning for the OSS bucket to prevent data conflicts when multiple General-purpose CPFS file systems export data to the same source.
     *      - Cross-region OSS data flows are not supported. The OSS bucket must be in the same region as the General-purpose CPFS file system.
     *        > Before you create a data flow, you must add a tag (key: cpfs-dataflow, value: true) to the source OSS bucket so that the General-purpose CPFS data flow can access the data in the bucket. Do not delete or modify this tag while the data flow is in use. Otherwise, the General-purpose CPFS data flow cannot access the data in the bucket.
     * - Usage notes for CPFS for Lingjun.
     *      This section applies to CPFS for Lingjun file systems whose IDs start with `bmcpfs-`.
     *   - Source storage
     *       - Only OSS is supported as the source storage. The source storage (SourceStorage) of a data flow must be an OSS bucket.
     *       - CPFS for Lingjun data flows support encrypted and unencrypted access to OSS. If you select the encrypted (SSL) access method, make sure that encryption in transit is enabled for the OSS bucket.
     *       - If multiple CPFS for Lingjun data flows or multiple data flows of the same CPFS for Lingjun file system use the same OSS bucket as the source storage, you must enable versioning for the OSS bucket to prevent data conflicts when multiple CPFS for Lingjun file systems export data to the same source.
     *       - Cross-region OSS data flows are not supported. The OSS bucket must be in the same region as the CPFS for Lingjun file system.
     *      - CPFS for Lingjun 2.6.0 and later support creating data flows by using cross-account OSS buckets.
     *      - You need to set the account id parameter only when you use a cross-account OSS bucket.
     *      - Before you use a cross-account OSS bucket, you must grant permissions to the account. For more information, see [Authorize cross-account data flows](https://help.aliyun.com/document_detail/2713462.html).
     *        > Before you create a data flow, you must add a tag (key: cpfs-dataflow, value: true) to the source OSS bucket so that the CPFS for Lingjun data flow can access the data in the bucket. Do not delete or modify this tag while the data flow is in use. Otherwise, the CPFS for Lingjun data flow cannot access the data in the bucket.
     *   - Limits of data flows on file systems.
     *     - You cannot rename a non-empty directory in the file system path associated with the data flow. Otherwise, a Permission Denied or Directory Not Empty error is reported.
     *      - Use special characters in directory and file names with caution. Supported characters include uppercase and lowercase letters, digits, exclamation marks (!), hyphens (-), underscores (_), periods (.), asterisks (*), and parentheses (()).
     *     - Ultra-long paths are not supported. The maximum path length supported by a data flow is 1,023 characters.
     *   - Limits on data flow imports.
     *     - When a symbolic link file is imported into CPFS for Lingjun, it is converted into a regular file containing data, and the symbolic link information is lost.
     *     - If an OSS bucket has multiple versions, only the latest version is copied.
     *     - File or subdirectory names longer than 255 bytes are not supported.
     *   - Data flow export limits
     *   - Limits on data flow exports
     *     - After a symlink file is synchronized to OSS, the file pointed to by the symlink is not synchronized. Instead, the symlink file becomes a regular empty object without data.
     *     - Hardlink files are synchronized to OSS only as regular files.
     *     - When socket, device, or pipe files are exported to an OSS bucket, they become regular empty objects without data.
     *     - Directory paths longer than 1,023 characters are not supported.
     *
     * @param request - CreateDataFlowRequest
     *
     * @returns CreateDataFlowResponse
     *
     * @param CreateDataFlowRequest $request
     *
     * @return CreateDataFlowResponse
     */
    public function createDataFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDataFlowWithOptions($request, $runtime);
    }

    /**
     * Creates a subtask for a data flow streaming task.
     *
     * @remarks
     * *Before you begin**
     * Before you call this operation, create resources in the following order and make sure that the resources at each level are in the required state:
     * 1. Create a file system: Create a CPFS for Lingjun file system in the console.
     *    - State requirement: The file system is in the Running state.
     * 2. Create a data flow: Call [CreateDataFlow](https://www.alibabacloud.com/help/en/cpfs/cpfsonecs/developer-reference/api-nas-2017-06-26-createdataflow-cpfs) to create a data flow.
     *    - State requirement: The data flow is in the Running state.
     * 3. Create a data flow task: Call [CreateDataFlowTask](https://www.alibabacloud.com/help/en/cpfs/cpfsonecs/developer-reference/api-nas-2017-06-26-createdataflowtask-cpfs) to create a streaming import (StreamImport) or streaming export (StreamExport) task.
     *    - State requirement: The data flow task is in the Executing state.
     * **Operation description**
     * - Only CPFS for Lingjun 2.6.0 and later support this operation. You can view the version information on the file system details page in the console.
     * - You can create subtasks only for data flow streaming tasks that are in the Executing state.
     * - Data flow streaming tasks are executed asynchronously. You can call [DescribeDataFlowSubTasks](https://www.alibabacloud.com/help/en/cpfs/bmcpfs/developer-reference/api-nas-2017-06-26-describedataflowsubtasks-bmcpfs) to query the execution status of a streaming task.
     * - When the data flow task type is a streaming task, the Executing state only indicates that you can create streaming import or streaming export tasks. It does not indicate that the import or export task is running.
     *
     * @param request - CreateDataFlowSubTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDataFlowSubTaskResponse
     *
     * @param CreateDataFlowSubTaskRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateDataFlowSubTaskResponse
     */
    public function createDataFlowSubTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->condition) {
            @$query['Condition'] = $request->condition;
        }

        if (null !== $request->dataFlowId) {
            @$query['DataFlowId'] = $request->dataFlowId;
        }

        if (null !== $request->dataFlowTaskId) {
            @$query['DataFlowTaskId'] = $request->dataFlowTaskId;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->dstFilePath) {
            @$query['DstFilePath'] = $request->dstFilePath;
        }

        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->srcFilePath) {
            @$query['SrcFilePath'] = $request->srcFilePath;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateDataFlowSubTask',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDataFlowSubTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a subtask for a data flow streaming task.
     *
     * @remarks
     * *Before you begin**
     * Before you call this operation, create resources in the following order and make sure that the resources at each level are in the required state:
     * 1. Create a file system: Create a CPFS for Lingjun file system in the console.
     *    - State requirement: The file system is in the Running state.
     * 2. Create a data flow: Call [CreateDataFlow](https://www.alibabacloud.com/help/en/cpfs/cpfsonecs/developer-reference/api-nas-2017-06-26-createdataflow-cpfs) to create a data flow.
     *    - State requirement: The data flow is in the Running state.
     * 3. Create a data flow task: Call [CreateDataFlowTask](https://www.alibabacloud.com/help/en/cpfs/cpfsonecs/developer-reference/api-nas-2017-06-26-createdataflowtask-cpfs) to create a streaming import (StreamImport) or streaming export (StreamExport) task.
     *    - State requirement: The data flow task is in the Executing state.
     * **Operation description**
     * - Only CPFS for Lingjun 2.6.0 and later support this operation. You can view the version information on the file system details page in the console.
     * - You can create subtasks only for data flow streaming tasks that are in the Executing state.
     * - Data flow streaming tasks are executed asynchronously. You can call [DescribeDataFlowSubTasks](https://www.alibabacloud.com/help/en/cpfs/bmcpfs/developer-reference/api-nas-2017-06-26-describedataflowsubtasks-bmcpfs) to query the execution status of a streaming task.
     * - When the data flow task type is a streaming task, the Executing state only indicates that you can create streaming import or streaming export tasks. It does not indicate that the import or export task is running.
     *
     * @param request - CreateDataFlowSubTaskRequest
     *
     * @returns CreateDataFlowSubTaskResponse
     *
     * @param CreateDataFlowSubTaskRequest $request
     *
     * @return CreateDataFlowSubTaskResponse
     */
    public function createDataFlowSubTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDataFlowSubTaskWithOptions($request, $runtime);
    }

    /**
     * Creates a data flow task.
     *
     * @remarks
     * - CPFS usage notes
     *   - Only CPFS 2.2.0 and later support data flows. You can view the version information on the file system details page in the console.
     *   - Data flow tasks are executed asynchronously. You can call the [DescribeDataFlowTasks](https://help.aliyun.com/document_detail/2402275.html) operation to query the task execution status. The time required to complete a task depends on the amount of data to be imported or exported. For a large amount of data, split the data into multiple tasks.
     *   - You can create data flow tasks only for data flows in the Running state.
     *   - When you manually execute a data flow task, the automatic data update task of the data flow is interrupted and queued.
     *   - When you create an export task, ensure that the total length of the absolute paths of the files to be exported from CPFS does not exceed 1,023 characters.
     * - CPFS for Lingjun usage notes
     *   - Only CPFS for Lingjun 2.4.0 and later support data flows. You can view the version information on the file system details page in the console.
     *   - Data flow tasks are executed asynchronously. You can call the [DescribeDataFlowTasks](https://help.aliyun.com/document_detail/2402275.html) operation to query the task execution status. The time required to complete a task depends on the amount of data to be imported or exported. For a large amount of data, split the data into multiple tasks.
     *   - You can create data flow tasks only for data flows in the Running state.
     *   - When you create an export task, ensure that the total length of the absolute paths of the files to be exported from CPFS for Lingjun does not exceed 1,023 characters.
     *   - CPFS for Lingjun supports batch tasks and streaming tasks. For more information, see [Task types](https://help.aliyun.com/document_detail/2845429.html).
     *
     * @param request - CreateDataFlowTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDataFlowTaskResponse
     *
     * @param CreateDataFlowTaskRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateDataFlowTaskResponse
     */
    public function createDataFlowTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->conflictPolicy) {
            @$query['ConflictPolicy'] = $request->conflictPolicy;
        }

        if (null !== $request->createDirIfNotExist) {
            @$query['CreateDirIfNotExist'] = $request->createDirIfNotExist;
        }

        if (null !== $request->dataFlowId) {
            @$query['DataFlowId'] = $request->dataFlowId;
        }

        if (null !== $request->dataType) {
            @$query['DataType'] = $request->dataType;
        }

        if (null !== $request->directory) {
            @$query['Directory'] = $request->directory;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->dstDirectory) {
            @$query['DstDirectory'] = $request->dstDirectory;
        }

        if (null !== $request->entryList) {
            @$query['EntryList'] = $request->entryList;
        }

        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->includes) {
            @$query['Includes'] = $request->includes;
        }

        if (null !== $request->srcTaskId) {
            @$query['SrcTaskId'] = $request->srcTaskId;
        }

        if (null !== $request->taskAction) {
            @$query['TaskAction'] = $request->taskAction;
        }

        if (null !== $request->transferFileListPath) {
            @$query['TransferFileListPath'] = $request->transferFileListPath;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateDataFlowTask',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDataFlowTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a data flow task.
     *
     * @remarks
     * - CPFS usage notes
     *   - Only CPFS 2.2.0 and later support data flows. You can view the version information on the file system details page in the console.
     *   - Data flow tasks are executed asynchronously. You can call the [DescribeDataFlowTasks](https://help.aliyun.com/document_detail/2402275.html) operation to query the task execution status. The time required to complete a task depends on the amount of data to be imported or exported. For a large amount of data, split the data into multiple tasks.
     *   - You can create data flow tasks only for data flows in the Running state.
     *   - When you manually execute a data flow task, the automatic data update task of the data flow is interrupted and queued.
     *   - When you create an export task, ensure that the total length of the absolute paths of the files to be exported from CPFS does not exceed 1,023 characters.
     * - CPFS for Lingjun usage notes
     *   - Only CPFS for Lingjun 2.4.0 and later support data flows. You can view the version information on the file system details page in the console.
     *   - Data flow tasks are executed asynchronously. You can call the [DescribeDataFlowTasks](https://help.aliyun.com/document_detail/2402275.html) operation to query the task execution status. The time required to complete a task depends on the amount of data to be imported or exported. For a large amount of data, split the data into multiple tasks.
     *   - You can create data flow tasks only for data flows in the Running state.
     *   - When you create an export task, ensure that the total length of the absolute paths of the files to be exported from CPFS for Lingjun does not exceed 1,023 characters.
     *   - CPFS for Lingjun supports batch tasks and streaming tasks. For more information, see [Task types](https://help.aliyun.com/document_detail/2845429.html).
     *
     * @param request - CreateDataFlowTaskRequest
     *
     * @returns CreateDataFlowTaskResponse
     *
     * @param CreateDataFlowTaskRequest $request
     *
     * @return CreateDataFlowTaskResponse
     */
    public function createDataFlowTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDataFlowTaskWithOptions($request, $runtime);
    }

    /**
     * Creates a directory in a file system.
     *
     * @remarks
     * Only General-purpose NAS NFS protocol file systems support this feature.
     *
     * @param request - CreateDirRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDirResponse
     *
     * @param CreateDirRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CreateDirResponse
     */
    public function createDirWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->ownerGroupId) {
            @$query['OwnerGroupId'] = $request->ownerGroupId;
        }

        if (null !== $request->ownerUserId) {
            @$query['OwnerUserId'] = $request->ownerUserId;
        }

        if (null !== $request->permission) {
            @$query['Permission'] = $request->permission;
        }

        if (null !== $request->recursion) {
            @$query['Recursion'] = $request->recursion;
        }

        if (null !== $request->rootDirectory) {
            @$query['RootDirectory'] = $request->rootDirectory;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateDir',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDirResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a directory in a file system.
     *
     * @remarks
     * Only General-purpose NAS NFS protocol file systems support this feature.
     *
     * @param request - CreateDirRequest
     *
     * @returns CreateDirResponse
     *
     * @param CreateDirRequest $request
     *
     * @return CreateDirResponse
     */
    public function createDir($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDirWithOptions($request, $runtime);
    }

    /**
     * Creates a directory or file.
     *
     * @remarks
     * - This operation is available only to specific users.
     * - Only General-purpose NAS file systems that use the SMB Protocol Type and have access control enabled are supported. Alibaba Cloud Key Management Service (KMS) must also be activated.
     * ## Prerequisites
     * Before calling this API to create a file, complete the following four steps:
     * 1. **Create an SMB General-purpose NAS file system**: Call the [CreateFileSystem](https://www.alibabacloud.com/help/en/nas/developer-reference/api-nas-2017-06-26-createfilesystem) operation with ProtocolType set to SMB to create a General-purpose NAS file system that supports the SMB protocol.
     * 2. **Activate KMS**: Activate KMS by using one of the following methods:
     *    - Call the Kms.OpenKmsService API operation.
     *    - Go to the [console activation page](https://common-buy.aliyun.com/?commodityCode=kms#/open).
     * 3. **Enable SMB ACL**: Call the [EnableSmbAcl](https://www.alibabacloud.com/help/en/nas/developer-reference/api-nas-2017-06-26-enablesmbacl) operation to enable the SMB ACL feature. Recommended configuration:
     *    - AuthMethod=NTLM
     *    - AuthCenter=EDS
     *    - This configuration does not require an AD domain Keytab and is easier to use.
     * 4. **Call CreateFile**: After completing the preceding steps, call this operation to create a directory or file.
     *
     * @param request - CreateFileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateFileResponse
     *
     * @param CreateFileRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CreateFileResponse
     */
    public function createFileWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->owner) {
            @$query['Owner'] = $request->owner;
        }

        if (null !== $request->ownerAccessInheritable) {
            @$query['OwnerAccessInheritable'] = $request->ownerAccessInheritable;
        }

        if (null !== $request->path) {
            @$query['Path'] = $request->path;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateFile',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a directory or file.
     *
     * @remarks
     * - This operation is available only to specific users.
     * - Only General-purpose NAS file systems that use the SMB Protocol Type and have access control enabled are supported. Alibaba Cloud Key Management Service (KMS) must also be activated.
     * ## Prerequisites
     * Before calling this API to create a file, complete the following four steps:
     * 1. **Create an SMB General-purpose NAS file system**: Call the [CreateFileSystem](https://www.alibabacloud.com/help/en/nas/developer-reference/api-nas-2017-06-26-createfilesystem) operation with ProtocolType set to SMB to create a General-purpose NAS file system that supports the SMB protocol.
     * 2. **Activate KMS**: Activate KMS by using one of the following methods:
     *    - Call the Kms.OpenKmsService API operation.
     *    - Go to the [console activation page](https://common-buy.aliyun.com/?commodityCode=kms#/open).
     * 3. **Enable SMB ACL**: Call the [EnableSmbAcl](https://www.alibabacloud.com/help/en/nas/developer-reference/api-nas-2017-06-26-enablesmbacl) operation to enable the SMB ACL feature. Recommended configuration:
     *    - AuthMethod=NTLM
     *    - AuthCenter=EDS
     *    - This configuration does not require an AD domain Keytab and is easier to use.
     * 4. **Call CreateFile**: After completing the preceding steps, call this operation to create a directory or file.
     *
     * @param request - CreateFileRequest
     *
     * @returns CreateFileResponse
     *
     * @param CreateFileRequest $request
     *
     * @return CreateFileResponse
     */
    public function createFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFileWithOptions($request, $runtime);
    }

    /**
     * Creates a file system.
     *
     * @remarks
     * <props="china">
     * - Before calling this operation, ensure that you fully understand the billing methods and pricing of File Storage NAS. For more information, see [Billing overview](https://help.aliyun.com/document_detail/178365.html) and [Pricing](https://www.aliyun.com/price/product?#/nas/).
     * - To create a file system, you must pass real-name verification. For more information, see [Real-name verification for accounts](https://help.aliyun.com/document_detail/48263.html).
     * - When you invoke this operation, the service-linked role required for NAS is automatically created. For more information, see [Manage the service-linked role for NAS](https://help.aliyun.com/document_detail/208530.html).
     * <props="intl">
     * - Before calling this operation, ensure that you fully understand the billing methods and pricing of File Storage NAS. For more information, see [Billing overview](https://help.aliyun.com/document_detail/178365.html) and [Pricing](https://www.alibabacloud.com/zh/product/nas/pricing?_p_lc=1&spm=a2796.7960336.8215766810.64.414bb91aiZQiRG&spm=a2c4g.11186623.help-menu-27516.d_5_1_4_2_0.572a1880hEiKCk).
     * - To create a file system, you must pass real-name verification. For more information, see [Real-name verification for accounts](https://help.aliyun.com/document_detail/48263.html).
     * - When you invoke this operation, the service-linked role required for NAS is automatically created. For more information, see [Manage the service-linked role for NAS](https://help.aliyun.com/document_detail/208530.html).
     *
     * @param request - CreateFileSystemRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateFileSystemResponse
     *
     * @param CreateFileSystemRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateFileSystemResponse
     */
    public function createFileSystemWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bandwidth) {
            @$query['Bandwidth'] = $request->bandwidth;
        }

        if (null !== $request->capacity) {
            @$query['Capacity'] = $request->capacity;
        }

        if (null !== $request->chargeType) {
            @$query['ChargeType'] = $request->chargeType;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->duration) {
            @$query['Duration'] = $request->duration;
        }

        if (null !== $request->encryptType) {
            @$query['EncryptType'] = $request->encryptType;
        }

        if (null !== $request->fileSystemType) {
            @$query['FileSystemType'] = $request->fileSystemType;
        }

        if (null !== $request->hpnZone) {
            @$query['HpnZone'] = $request->hpnZone;
        }

        if (null !== $request->kmsKeyId) {
            @$query['KmsKeyId'] = $request->kmsKeyId;
        }

        if (null !== $request->protocolType) {
            @$query['ProtocolType'] = $request->protocolType;
        }

        if (null !== $request->redundancyType) {
            @$query['RedundancyType'] = $request->redundancyType;
        }

        if (null !== $request->redundancyVSwitchIds) {
            @$query['RedundancyVSwitchIds'] = $request->redundancyVSwitchIds;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->snapshotId) {
            @$query['SnapshotId'] = $request->snapshotId;
        }

        if (null !== $request->storageType) {
            @$query['StorageType'] = $request->storageType;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
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
            'action' => 'CreateFileSystem',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateFileSystemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a file system.
     *
     * @remarks
     * <props="china">
     * - Before calling this operation, ensure that you fully understand the billing methods and pricing of File Storage NAS. For more information, see [Billing overview](https://help.aliyun.com/document_detail/178365.html) and [Pricing](https://www.aliyun.com/price/product?#/nas/).
     * - To create a file system, you must pass real-name verification. For more information, see [Real-name verification for accounts](https://help.aliyun.com/document_detail/48263.html).
     * - When you invoke this operation, the service-linked role required for NAS is automatically created. For more information, see [Manage the service-linked role for NAS](https://help.aliyun.com/document_detail/208530.html).
     * <props="intl">
     * - Before calling this operation, ensure that you fully understand the billing methods and pricing of File Storage NAS. For more information, see [Billing overview](https://help.aliyun.com/document_detail/178365.html) and [Pricing](https://www.alibabacloud.com/zh/product/nas/pricing?_p_lc=1&spm=a2796.7960336.8215766810.64.414bb91aiZQiRG&spm=a2c4g.11186623.help-menu-27516.d_5_1_4_2_0.572a1880hEiKCk).
     * - To create a file system, you must pass real-name verification. For more information, see [Real-name verification for accounts](https://help.aliyun.com/document_detail/48263.html).
     * - When you invoke this operation, the service-linked role required for NAS is automatically created. For more information, see [Manage the service-linked role for NAS](https://help.aliyun.com/document_detail/208530.html).
     *
     * @param request - CreateFileSystemRequest
     *
     * @returns CreateFileSystemResponse
     *
     * @param CreateFileSystemRequest $request
     *
     * @return CreateFileSystemResponse
     */
    public function createFileSystem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFileSystemWithOptions($request, $runtime);
    }

    /**
     * Creates a fileset.
     *
     * @remarks
     * - Usage notes for CPFS.
     *   - Only CPFS 2.2.0 and later support fileset creation. You can view the version information on the file system details page in the console.
     *   - A maximum of 10 filesets can be created for a single CPFS file system.
     *   - The parent directory must be an existing directory.
     *   - The maximum depth of a fileset path is 8 levels, with the root directory / as level 0. For example, a fileset path of /test/aaa/ccc/ has a depth of 3 levels.
     *   - Nesting filesets within a fileset is not supported. If a parent directory is already specified as a fileset, its subdirectories cannot be specified as filesets.
     *   - A fileset supports a maximum of 1,000,000 files. If the number of files exceeds this limit, adding new files returns a `no space` error message.
     * - Usage notes for CPFS for Lingjun
     *   - Only CPFS for Lingjun 2.7.0 and later support fileset creation. You can view the version information on the file system details page in the console.
     *   - A maximum of 500 filesets can be created for a single CPFS file system.
     *   - The fileset path must be a new path and cannot be an existing path. Renaming a fileset path is not supported, and the path cannot be a symbolic link.
     *   - The maximum depth of a fileset path is 8 levels, with the root directory / as level 0. For example, a fileset path of /test/aaa/ccc/ has a depth of 3 levels.
     *   - If the fileset path contains multiple directory levels, the parent directory must be an existing directory.
     *   - Nesting filesets within a fileset is not supported. If a parent directory is already specified as a fileset, its subdirectories cannot be specified as filesets. Only one quota is supported for each fileset path.
     *   - The minimum capacity quota for a fileset is 10 GiB, and the capacity can be increased in increments of 1 GiB.
     *   - A fileset supports a maximum of 10,000,000,000 files or directories, with a minimum of 10,000 and an increment of 1.
     *   - When you modify a directory quota, the quota capacity or file count must be greater than the used capacity or file count.
     *   - Quota statistics have a 15-minute delay. The current actual usage takes effect after 15 minutes.
     *
     * @param request - CreateFilesetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateFilesetResponse
     *
     * @param CreateFilesetRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateFilesetResponse
     */
    public function createFilesetWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->deletionProtection) {
            @$query['DeletionProtection'] = $request->deletionProtection;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->fileSystemPath) {
            @$query['FileSystemPath'] = $request->fileSystemPath;
        }

        if (null !== $request->quota) {
            @$query['Quota'] = $request->quota;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateFileset',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateFilesetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a fileset.
     *
     * @remarks
     * - Usage notes for CPFS.
     *   - Only CPFS 2.2.0 and later support fileset creation. You can view the version information on the file system details page in the console.
     *   - A maximum of 10 filesets can be created for a single CPFS file system.
     *   - The parent directory must be an existing directory.
     *   - The maximum depth of a fileset path is 8 levels, with the root directory / as level 0. For example, a fileset path of /test/aaa/ccc/ has a depth of 3 levels.
     *   - Nesting filesets within a fileset is not supported. If a parent directory is already specified as a fileset, its subdirectories cannot be specified as filesets.
     *   - A fileset supports a maximum of 1,000,000 files. If the number of files exceeds this limit, adding new files returns a `no space` error message.
     * - Usage notes for CPFS for Lingjun
     *   - Only CPFS for Lingjun 2.7.0 and later support fileset creation. You can view the version information on the file system details page in the console.
     *   - A maximum of 500 filesets can be created for a single CPFS file system.
     *   - The fileset path must be a new path and cannot be an existing path. Renaming a fileset path is not supported, and the path cannot be a symbolic link.
     *   - The maximum depth of a fileset path is 8 levels, with the root directory / as level 0. For example, a fileset path of /test/aaa/ccc/ has a depth of 3 levels.
     *   - If the fileset path contains multiple directory levels, the parent directory must be an existing directory.
     *   - Nesting filesets within a fileset is not supported. If a parent directory is already specified as a fileset, its subdirectories cannot be specified as filesets. Only one quota is supported for each fileset path.
     *   - The minimum capacity quota for a fileset is 10 GiB, and the capacity can be increased in increments of 1 GiB.
     *   - A fileset supports a maximum of 10,000,000,000 files or directories, with a minimum of 10,000 and an increment of 1.
     *   - When you modify a directory quota, the quota capacity or file count must be greater than the used capacity or file count.
     *   - Quota statistics have a 15-minute delay. The current actual usage takes effect after 15 minutes.
     *
     * @param request - CreateFilesetRequest
     *
     * @returns CreateFilesetResponse
     *
     * @param CreateFilesetRequest $request
     *
     * @return CreateFilesetResponse
     */
    public function createFileset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFilesetWithOptions($request, $runtime);
    }

    /**
     * Adds an LDAP configuration.
     *
     * @deprecated OpenAPI CreateLDAPConfig is deprecated
     *
     * @param request - CreateLDAPConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateLDAPConfigResponse
     *
     * @param CreateLDAPConfigRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateLDAPConfigResponse
     */
    public function createLDAPConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bindDN) {
            @$query['BindDN'] = $request->bindDN;
        }

        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->searchBase) {
            @$query['SearchBase'] = $request->searchBase;
        }

        if (null !== $request->URI) {
            @$query['URI'] = $request->URI;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateLDAPConfig',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateLDAPConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Adds an LDAP configuration.
     *
     * @deprecated OpenAPI CreateLDAPConfig is deprecated
     *
     * @param request - CreateLDAPConfigRequest
     *
     * @returns CreateLDAPConfigResponse
     *
     * @param CreateLDAPConfigRequest $request
     *
     * @return CreateLDAPConfigResponse
     */
    public function createLDAPConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLDAPConfigWithOptions($request, $runtime);
    }

    /**
     * Creates a lifecycle management policy.
     *
     * @remarks
     * - Only General-purpose NAS file systems and CPFS for Lingjun support the creation of lifecycle management policies.
     * - You can create up to 10 Auto-type and 100 OnDemand-type lifecycle management policies for each CPFS for Lingjun file system.
     * - You can create up to 20 lifecycle management policies for General-purpose NAS in each region.
     *
     * @param request - CreateLifecyclePolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateLifecyclePolicyResponse
     *
     * @param CreateLifecyclePolicyRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateLifecyclePolicyResponse
     */
    public function createLifecyclePolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deleteRules) {
            @$query['DeleteRules'] = $request->deleteRules;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->lifecyclePolicyName) {
            @$query['LifecyclePolicyName'] = $request->lifecyclePolicyName;
        }

        if (null !== $request->lifecyclePolicyType) {
            @$query['LifecyclePolicyType'] = $request->lifecyclePolicyType;
        }

        if (null !== $request->lifecycleRuleName) {
            @$query['LifecycleRuleName'] = $request->lifecycleRuleName;
        }

        if (null !== $request->path) {
            @$query['Path'] = $request->path;
        }

        if (null !== $request->paths) {
            @$query['Paths'] = $request->paths;
        }

        if (null !== $request->retrieveRules) {
            @$query['RetrieveRules'] = $request->retrieveRules;
        }

        if (null !== $request->storageType) {
            @$query['StorageType'] = $request->storageType;
        }

        if (null !== $request->transitRules) {
            @$query['TransitRules'] = $request->transitRules;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateLifecyclePolicy',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateLifecyclePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a lifecycle management policy.
     *
     * @remarks
     * - Only General-purpose NAS file systems and CPFS for Lingjun support the creation of lifecycle management policies.
     * - You can create up to 10 Auto-type and 100 OnDemand-type lifecycle management policies for each CPFS for Lingjun file system.
     * - You can create up to 20 lifecycle management policies for General-purpose NAS in each region.
     *
     * @param request - CreateLifecyclePolicyRequest
     *
     * @returns CreateLifecyclePolicyResponse
     *
     * @param CreateLifecyclePolicyRequest $request
     *
     * @return CreateLifecyclePolicyResponse
     */
    public function createLifecyclePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLifecyclePolicyWithOptions($request, $runtime);
    }

    /**
     * Creates a data retrieval task.
     *
     * @remarks
     * - Only General-purpose NAS file systems support this feature.
     * - Each Alibaba Cloud account can have up to 20 running data retrieval tasks in the same region.
     *
     * @param request - CreateLifecycleRetrieveJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateLifecycleRetrieveJobResponse
     *
     * @param CreateLifecycleRetrieveJobRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateLifecycleRetrieveJobResponse
     */
    public function createLifecycleRetrieveJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->paths) {
            @$query['Paths'] = $request->paths;
        }

        if (null !== $request->storageType) {
            @$query['StorageType'] = $request->storageType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateLifecycleRetrieveJob',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateLifecycleRetrieveJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a data retrieval task.
     *
     * @remarks
     * - Only General-purpose NAS file systems support this feature.
     * - Each Alibaba Cloud account can have up to 20 running data retrieval tasks in the same region.
     *
     * @param request - CreateLifecycleRetrieveJobRequest
     *
     * @returns CreateLifecycleRetrieveJobResponse
     *
     * @param CreateLifecycleRetrieveJobRequest $request
     *
     * @return CreateLifecycleRetrieveJobResponse
     */
    public function createLifecycleRetrieveJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLifecycleRetrieveJobWithOptions($request, $runtime);
    }

    /**
     * Delivers system logs of a General-purpose NAS file system to log analysis.
     *
     * @param request - CreateLogAnalysisRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateLogAnalysisResponse
     *
     * @param CreateLogAnalysisRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateLogAnalysisResponse
     */
    public function createLogAnalysisWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateLogAnalysis',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateLogAnalysisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delivers system logs of a General-purpose NAS file system to log analysis.
     *
     * @param request - CreateLogAnalysisRequest
     *
     * @returns CreateLogAnalysisResponse
     *
     * @param CreateLogAnalysisRequest $request
     *
     * @return CreateLogAnalysisResponse
     */
    public function createLogAnalysis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLogAnalysisWithOptions($request, $runtime);
    }

    /**
     * Creates a mount target.
     *
     * @remarks
     * - When you call the CreateMountTarget operation to create a mount target, some resources are generated asynchronously. After the CreateMountTarget operation succeeds, call the DescribeMountTargets operation to query the mount target status. Mount the file system only after the mount target status changes to **Active**. Otherwise, the mount operation may fail.
     * - Calling this operation triggers the automatic creation of the service-linked role required for the operation. For more information, see [Manage the service-linked role for NAS](https://help.aliyun.com/document_detail/208530.html).
     *
     * @param request - CreateMountTargetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMountTargetResponse
     *
     * @param CreateMountTargetRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateMountTargetResponse
     */
    public function createMountTargetWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessGroupName) {
            @$query['AccessGroupName'] = $request->accessGroupName;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->enableIpv6) {
            @$query['EnableIpv6'] = $request->enableIpv6;
        }

        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->networkType) {
            @$query['NetworkType'] = $request->networkType;
        }

        if (null !== $request->securityGroupId) {
            @$query['SecurityGroupId'] = $request->securityGroupId;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateMountTarget',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateMountTargetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a mount target.
     *
     * @remarks
     * - When you call the CreateMountTarget operation to create a mount target, some resources are generated asynchronously. After the CreateMountTarget operation succeeds, call the DescribeMountTargets operation to query the mount target status. Mount the file system only after the mount target status changes to **Active**. Otherwise, the mount operation may fail.
     * - Calling this operation triggers the automatic creation of the service-linked role required for the operation. For more information, see [Manage the service-linked role for NAS](https://help.aliyun.com/document_detail/208530.html).
     *
     * @param request - CreateMountTargetRequest
     *
     * @returns CreateMountTargetResponse
     *
     * @param CreateMountTargetRequest $request
     *
     * @return CreateMountTargetResponse
     */
    public function createMountTarget($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMountTargetWithOptions($request, $runtime);
    }

    /**
     * Creates an export directory for a protocol service.
     *
     * @remarks
     * -  This operation applies only to Cloud Parallel File Storage (CPFS) file systems.
     * -  Before you begin
     *
     *    The target CPFS file system must be in the Running state, and a protocol service must have been created.
     * - Other information
     *     - The VPC CIDR block of the protocol service export must not overlap with the VPC CIDR block of the file system.
     *     - The VPC CIDR blocks of multiple exports on the same protocol service must not overlap with each other.
     *     - You can create up to 10 export directories for a single protocol service.
     *     - Creating a protocol service export directory consumes IP addresses from the specified vSwitch (up to 32 IP addresses). Make sure that the target vSwitch has sufficient IP address resources.
     *
     * @param request - CreateProtocolMountTargetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateProtocolMountTargetResponse
     *
     * @param CreateProtocolMountTargetRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateProtocolMountTargetResponse
     */
    public function createProtocolMountTargetWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessGroupName) {
            @$query['AccessGroupName'] = $request->accessGroupName;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->fsetId) {
            @$query['FsetId'] = $request->fsetId;
        }

        if (null !== $request->path) {
            @$query['Path'] = $request->path;
        }

        if (null !== $request->protocolServiceId) {
            @$query['ProtocolServiceId'] = $request->protocolServiceId;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        if (null !== $request->vSwitchIds) {
            @$query['VSwitchIds'] = $request->vSwitchIds;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateProtocolMountTarget',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateProtocolMountTargetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an export directory for a protocol service.
     *
     * @remarks
     * -  This operation applies only to Cloud Parallel File Storage (CPFS) file systems.
     * -  Before you begin
     *
     *    The target CPFS file system must be in the Running state, and a protocol service must have been created.
     * - Other information
     *     - The VPC CIDR block of the protocol service export must not overlap with the VPC CIDR block of the file system.
     *     - The VPC CIDR blocks of multiple exports on the same protocol service must not overlap with each other.
     *     - You can create up to 10 export directories for a single protocol service.
     *     - Creating a protocol service export directory consumes IP addresses from the specified vSwitch (up to 32 IP addresses). Make sure that the target vSwitch has sufficient IP address resources.
     *
     * @param request - CreateProtocolMountTargetRequest
     *
     * @returns CreateProtocolMountTargetResponse
     *
     * @param CreateProtocolMountTargetRequest $request
     *
     * @return CreateProtocolMountTargetResponse
     */
    public function createProtocolMountTarget($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createProtocolMountTargetWithOptions($request, $runtime);
    }

    /**
     * Creates a protocol service for a Cloud Parallel File Storage (CPFS) file system. The creation process takes approximately 5 to 10 minutes.
     *
     * @remarks
     * - This operation applies only to CPFS file systems.
     * -  Only CPFS 2.3.0 and later support protocol services. You can call the [DescribeFileSystems](https://help.aliyun.com/document_detail/163314.html) operation to query the version of a file system.
     * - Protocol service specifications.
     *   Protocol services include two Protocol Types: General and Cache. Compared with the General type, the Cache type provides hot spot data caching. When the cache is hit, the bandwidth of the Cache type protocol service can exceed the bandwidth of the CPFS file system and reach the maximum bandwidth configured for the protocol service.
     *
     *     -   General: Provides NFS protocol access and [folder-level mount targets](https://help.aliyun.com/document_detail/427175.html) for CPFS. You do not need to configure a POSIX client cluster management. This feature is free of charge.
     *     -  Cache: Provides server-side in-memory caching based on the LRU policy on top of the General type. When data is cached in memory, CPFS can provide higher internal network bandwidth. The Cache type protocol service is available in two specifications: Cache L1 and Cache L2, which differ in internal network bandwidth and memory cache size.
     *      >  The Cache type protocol service is a paid service and is in invitational preview. For information about the billing of the Cache type protocol service, see [Billable items](https://help.aliyun.com/document_detail/111858.html). If you have any feedback or questions, join the DingTalk user group (group ID: 31045006299) to communicate with CPFS engineers.
     * - Protocol type.
     *   Only NFSv3 is supported.
     * - Before you begin.
     *   The CPFS file system must be created and in the Running state.
     * - Other information.
     *     - Only one protocol service can be created for each CPFS file system.
     *     - Creating a protocol service consumes IP addresses on the specified vSwitch (up to 32 IP addresses). Make sure that the vSwitch has sufficient IP address resources.
     *
     * @param request - CreateProtocolServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateProtocolServiceResponse
     *
     * @param CreateProtocolServiceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateProtocolServiceResponse
     */
    public function createProtocolServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->protocolSpec) {
            @$query['ProtocolSpec'] = $request->protocolSpec;
        }

        if (null !== $request->protocolType) {
            @$query['ProtocolType'] = $request->protocolType;
        }

        if (null !== $request->throughput) {
            @$query['Throughput'] = $request->throughput;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateProtocolService',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateProtocolServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a protocol service for a Cloud Parallel File Storage (CPFS) file system. The creation process takes approximately 5 to 10 minutes.
     *
     * @remarks
     * - This operation applies only to CPFS file systems.
     * -  Only CPFS 2.3.0 and later support protocol services. You can call the [DescribeFileSystems](https://help.aliyun.com/document_detail/163314.html) operation to query the version of a file system.
     * - Protocol service specifications.
     *   Protocol services include two Protocol Types: General and Cache. Compared with the General type, the Cache type provides hot spot data caching. When the cache is hit, the bandwidth of the Cache type protocol service can exceed the bandwidth of the CPFS file system and reach the maximum bandwidth configured for the protocol service.
     *
     *     -   General: Provides NFS protocol access and [folder-level mount targets](https://help.aliyun.com/document_detail/427175.html) for CPFS. You do not need to configure a POSIX client cluster management. This feature is free of charge.
     *     -  Cache: Provides server-side in-memory caching based on the LRU policy on top of the General type. When data is cached in memory, CPFS can provide higher internal network bandwidth. The Cache type protocol service is available in two specifications: Cache L1 and Cache L2, which differ in internal network bandwidth and memory cache size.
     *      >  The Cache type protocol service is a paid service and is in invitational preview. For information about the billing of the Cache type protocol service, see [Billable items](https://help.aliyun.com/document_detail/111858.html). If you have any feedback or questions, join the DingTalk user group (group ID: 31045006299) to communicate with CPFS engineers.
     * - Protocol type.
     *   Only NFSv3 is supported.
     * - Before you begin.
     *   The CPFS file system must be created and in the Running state.
     * - Other information.
     *     - Only one protocol service can be created for each CPFS file system.
     *     - Creating a protocol service consumes IP addresses on the specified vSwitch (up to 32 IP addresses). Make sure that the vSwitch has sufficient IP address resources.
     *
     * @param request - CreateProtocolServiceRequest
     *
     * @returns CreateProtocolServiceResponse
     *
     * @param CreateProtocolServiceRequest $request
     *
     * @return CreateProtocolServiceResponse
     */
    public function createProtocolService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createProtocolServiceWithOptions($request, $runtime);
    }

    /**
     * Creates a task to permanently delete a file or directory from the recycle bin.
     *
     * @remarks
     * - Only General-purpose NAS file systems support this feature.
     * - The recycle bin must be enabled.
     * - Mount the file system by using NFS or SMB (you must use an ECS instance in the same VPC to mount the file system), and then delete the target file from the mount directory to move it to the recycle bin.
     * - When you permanently delete a directory, the contents in the directory are recursively deleted.
     * - Only one permanent deletion task can be run at a time for a single file system. While a file or directory is being permanently deleted, you cannot initiate a new restoration or cleanup task.
     *
     * @param request - CreateRecycleBinDeleteJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateRecycleBinDeleteJobResponse
     *
     * @param CreateRecycleBinDeleteJobRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateRecycleBinDeleteJobResponse
     */
    public function createRecycleBinDeleteJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateRecycleBinDeleteJob',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateRecycleBinDeleteJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a task to permanently delete a file or directory from the recycle bin.
     *
     * @remarks
     * - Only General-purpose NAS file systems support this feature.
     * - The recycle bin must be enabled.
     * - Mount the file system by using NFS or SMB (you must use an ECS instance in the same VPC to mount the file system), and then delete the target file from the mount directory to move it to the recycle bin.
     * - When you permanently delete a directory, the contents in the directory are recursively deleted.
     * - Only one permanent deletion task can be run at a time for a single file system. While a file or directory is being permanently deleted, you cannot initiate a new restoration or cleanup task.
     *
     * @param request - CreateRecycleBinDeleteJobRequest
     *
     * @returns CreateRecycleBinDeleteJobResponse
     *
     * @param CreateRecycleBinDeleteJobRequest $request
     *
     * @return CreateRecycleBinDeleteJobResponse
     */
    public function createRecycleBinDeleteJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRecycleBinDeleteJobWithOptions($request, $runtime);
    }

    /**
     * Restores a file from the recycle bin.
     *
     * @remarks
     * - Only General-purpose NAS file systems support this feature.
     * - A single file system can run only one file restoration or cleanup task at a time. While a file is being restored, you cannot initiate a new file restoration or cleanup task.
     * - A single restoration task can restore only one file or directory. Restoring a specified directory recursively restores all files in the directory.
     * - After a file is restored, data reorganization is performed. Read request performance slightly decreases during data reorganization.
     *
     * @param request - CreateRecycleBinRestoreJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateRecycleBinRestoreJobResponse
     *
     * @param CreateRecycleBinRestoreJobRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateRecycleBinRestoreJobResponse
     */
    public function createRecycleBinRestoreJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateRecycleBinRestoreJob',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateRecycleBinRestoreJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Restores a file from the recycle bin.
     *
     * @remarks
     * - Only General-purpose NAS file systems support this feature.
     * - A single file system can run only one file restoration or cleanup task at a time. While a file is being restored, you cannot initiate a new file restoration or cleanup task.
     * - A single restoration task can restore only one file or directory. Restoring a specified directory recursively restores all files in the directory.
     * - After a file is restored, data reorganization is performed. Read request performance slightly decreases during data reorganization.
     *
     * @param request - CreateRecycleBinRestoreJobRequest
     *
     * @returns CreateRecycleBinRestoreJobResponse
     *
     * @param CreateRecycleBinRestoreJobRequest $request
     *
     * @return CreateRecycleBinRestoreJobResponse
     */
    public function createRecycleBinRestoreJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRecycleBinRestoreJobWithOptions($request, $runtime);
    }

    /**
     * Creates a snapshot.
     *
     * @remarks
     * <props="china">
     * - This feature is in free public preview. During the public preview, the [File Storage NAS Service-Level Agreement (SLA)](https://terms.aliyun.com/legal-agreement/terms/suit_bu1_ali_cloud/suit_bu1_ali_cloud201803061139_99860.html?spm=a2c4g.11186623.0.0.40a34bbe4vbvKY) is not guaranteed.
     * - Only Advanced Extreme NAS file systems support snapshot creation.
     * - A maximum of 128 snapshots can be created for a single file system.
     * - The instance on which the file system is mounted must be in the Normal state. Otherwise, snapshots cannot be created.
     * - If a snapshot is being created, you cannot create another snapshot for the same file system.
     * - If the file system reaches its expire and release time while a snapshot is being created, the file system is released and the snapshot in the Creating state is also deleted.
     * - Creating a snapshot may slightly degrade the performance of the file system and temporarily slow down I/O performance. Avoid creating snapshots during peak hours.
     * - A snapshot only captures a backup of data at a specific point in time. Incremental data generated by file system operations during snapshot creation is not subject to synchronization to the snapshot.
     * - Manually created snapshots are retained until they are deleted 15 days after your account has an overdue payment and services are suspended. Periodically delete snapshots that are no longer needed to avoid ongoing snapshot size charges.
     * <props="intl">
     * - This feature is in free public preview. During the public preview, the [File Storage NAS Service-Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed.
     * - Only Advanced Extreme NAS file systems support snapshot creation.
     * - A maximum of 128 snapshots can be created for a single file system.
     * - The instance on which the file system is mounted must be in the Normal state. Otherwise, snapshots cannot be created.
     * - If a snapshot is being created, you cannot create another snapshot for the same file system.
     * - If the file system reaches its expire and release time while a snapshot is being created, the file system is released and the snapshot in the Creating state is also deleted.
     * - Creating a snapshot may slightly degrade the performance of the file system and temporarily slow down I/O performance. Avoid creating snapshots during peak hours.
     * - A snapshot only captures a backup of data at a specific point in time. Incremental data generated by file system operations during snapshot creation is not subject to synchronization to the snapshot.
     * - Manually created snapshots are retained until they are deleted 15 days after your account has an overdue payment and services are suspended. Periodically delete snapshots that are no longer needed to avoid ongoing snapshot size charges.
     *
     * @param request - CreateSnapshotRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSnapshotResponse
     *
     * @param CreateSnapshotRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateSnapshotResponse
     */
    public function createSnapshotWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->retentionDays) {
            @$query['RetentionDays'] = $request->retentionDays;
        }

        if (null !== $request->snapshotName) {
            @$query['SnapshotName'] = $request->snapshotName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateSnapshot',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSnapshotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a snapshot.
     *
     * @remarks
     * <props="china">
     * - This feature is in free public preview. During the public preview, the [File Storage NAS Service-Level Agreement (SLA)](https://terms.aliyun.com/legal-agreement/terms/suit_bu1_ali_cloud/suit_bu1_ali_cloud201803061139_99860.html?spm=a2c4g.11186623.0.0.40a34bbe4vbvKY) is not guaranteed.
     * - Only Advanced Extreme NAS file systems support snapshot creation.
     * - A maximum of 128 snapshots can be created for a single file system.
     * - The instance on which the file system is mounted must be in the Normal state. Otherwise, snapshots cannot be created.
     * - If a snapshot is being created, you cannot create another snapshot for the same file system.
     * - If the file system reaches its expire and release time while a snapshot is being created, the file system is released and the snapshot in the Creating state is also deleted.
     * - Creating a snapshot may slightly degrade the performance of the file system and temporarily slow down I/O performance. Avoid creating snapshots during peak hours.
     * - A snapshot only captures a backup of data at a specific point in time. Incremental data generated by file system operations during snapshot creation is not subject to synchronization to the snapshot.
     * - Manually created snapshots are retained until they are deleted 15 days after your account has an overdue payment and services are suspended. Periodically delete snapshots that are no longer needed to avoid ongoing snapshot size charges.
     * <props="intl">
     * - This feature is in free public preview. During the public preview, the [File Storage NAS Service-Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed.
     * - Only Advanced Extreme NAS file systems support snapshot creation.
     * - A maximum of 128 snapshots can be created for a single file system.
     * - The instance on which the file system is mounted must be in the Normal state. Otherwise, snapshots cannot be created.
     * - If a snapshot is being created, you cannot create another snapshot for the same file system.
     * - If the file system reaches its expire and release time while a snapshot is being created, the file system is released and the snapshot in the Creating state is also deleted.
     * - Creating a snapshot may slightly degrade the performance of the file system and temporarily slow down I/O performance. Avoid creating snapshots during peak hours.
     * - A snapshot only captures a backup of data at a specific point in time. Incremental data generated by file system operations during snapshot creation is not subject to synchronization to the snapshot.
     * - Manually created snapshots are retained until they are deleted 15 days after your account has an overdue payment and services are suspended. Periodically delete snapshots that are no longer needed to avoid ongoing snapshot size charges.
     *
     * @param request - CreateSnapshotRequest
     *
     * @returns CreateSnapshotResponse
     *
     * @param CreateSnapshotRequest $request
     *
     * @return CreateSnapshotResponse
     */
    public function createSnapshot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSnapshotWithOptions($request, $runtime);
    }

    /**
     * Deletes an existing permission group.
     *
     * @remarks
     * The default permission group (DEFAULT_VPC_GROUP_NAME) cannot be deleted.
     *
     * @param request - DeleteAccessGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAccessGroupResponse
     *
     * @param DeleteAccessGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteAccessGroupResponse
     */
    public function deleteAccessGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessGroupName) {
            @$query['AccessGroupName'] = $request->accessGroupName;
        }

        if (null !== $request->fileSystemType) {
            @$query['FileSystemType'] = $request->fileSystemType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAccessGroup',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAccessGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an existing permission group.
     *
     * @remarks
     * The default permission group (DEFAULT_VPC_GROUP_NAME) cannot be deleted.
     *
     * @param request - DeleteAccessGroupRequest
     *
     * @returns DeleteAccessGroupResponse
     *
     * @param DeleteAccessGroupRequest $request
     *
     * @return DeleteAccessGroupResponse
     */
    public function deleteAccessGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAccessGroupWithOptions($request, $runtime);
    }

    /**
     * Deletes an access point.
     *
     * @remarks
     * - Only NFS protocol file systems of General-purpose NAS support this feature.
     * - After you delete an access point, all I/O operations that are accessing the folder through the access point are immediately interrupted. Proceed with caution.
     *
     * @param request - DeleteAccessPointRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAccessPointResponse
     *
     * @param DeleteAccessPointRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteAccessPointResponse
     */
    public function deleteAccessPointWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessPointId) {
            @$query['AccessPointId'] = $request->accessPointId;
        }

        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAccessPoint',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAccessPointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an access point.
     *
     * @remarks
     * - Only NFS protocol file systems of General-purpose NAS support this feature.
     * - After you delete an access point, all I/O operations that are accessing the folder through the access point are immediately interrupted. Proceed with caution.
     *
     * @param request - DeleteAccessPointRequest
     *
     * @returns DeleteAccessPointResponse
     *
     * @param DeleteAccessPointRequest $request
     *
     * @return DeleteAccessPointResponse
     */
    public function deleteAccessPoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAccessPointWithOptions($request, $runtime);
    }

    /**
     * Deletes a permission rule from a permission group.
     *
     * @remarks
     * Rules in the default permission group (DEFAULT_VPC_GROUP_NAME) cannot be deleted.
     *
     * @param request - DeleteAccessRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAccessRuleResponse
     *
     * @param DeleteAccessRuleRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteAccessRuleResponse
     */
    public function deleteAccessRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessGroupName) {
            @$query['AccessGroupName'] = $request->accessGroupName;
        }

        if (null !== $request->accessRuleId) {
            @$query['AccessRuleId'] = $request->accessRuleId;
        }

        if (null !== $request->fileSystemType) {
            @$query['FileSystemType'] = $request->fileSystemType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAccessRule',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAccessRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a permission rule from a permission group.
     *
     * @remarks
     * Rules in the default permission group (DEFAULT_VPC_GROUP_NAME) cannot be deleted.
     *
     * @param request - DeleteAccessRuleRequest
     *
     * @returns DeleteAccessRuleResponse
     *
     * @param DeleteAccessRuleRequest $request
     *
     * @return DeleteAccessRuleResponse
     */
    public function deleteAccessRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAccessRuleWithOptions($request, $runtime);
    }

    /**
     * Deletes an Agentic space.
     *
     * @remarks
     * Applicable to agentic file systems.
     *
     * @param request - DeleteAgenticSpaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAgenticSpaceResponse
     *
     * @param DeleteAgenticSpaceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteAgenticSpaceResponse
     */
    public function deleteAgenticSpaceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agenticSpaceId) {
            @$query['AgenticSpaceId'] = $request->agenticSpaceId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAgenticSpace',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAgenticSpaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an Agentic space.
     *
     * @remarks
     * Applicable to agentic file systems.
     *
     * @param request - DeleteAgenticSpaceRequest
     *
     * @returns DeleteAgenticSpaceResponse
     *
     * @param DeleteAgenticSpaceRequest $request
     *
     * @return DeleteAgenticSpaceResponse
     */
    public function deleteAgenticSpace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAgenticSpaceWithOptions($request, $runtime);
    }

    /**
     * Deletes an automatic snapshot policy.
     *
     * @remarks
     * <props="china">
     * - This feature is in free public preview. During the public preview, the [File Storage NAS Service-Level Agreement (SLA)](https://terms.aliyun.com/legal-agreement/terms/suit_bu1_ali_cloud/suit_bu1_ali_cloud201803061139_99860.html?spm=a2c4g.11186623.0.0.5c895ff2YPLrwe) is not guaranteed.
     * - Only Advanced Extreme NAS file systems support this feature.
     * - If the automatic snapshot policy has been applied to a file system, the file system no longer executes the policy after the policy is deleted.
     * <props="intl">
     * - This feature is in free public preview. During the public preview, the [File Storage NAS Service-Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed.
     * - Only Advanced Extreme NAS file systems support this feature.
     * - If the automatic snapshot policy has been applied to a file system, the file system no longer executes the policy after the policy is deleted.
     *
     * @param request - DeleteAutoSnapshotPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAutoSnapshotPolicyResponse
     *
     * @param DeleteAutoSnapshotPolicyRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteAutoSnapshotPolicyResponse
     */
    public function deleteAutoSnapshotPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoSnapshotPolicyId) {
            @$query['AutoSnapshotPolicyId'] = $request->autoSnapshotPolicyId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAutoSnapshotPolicy',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAutoSnapshotPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an automatic snapshot policy.
     *
     * @remarks
     * <props="china">
     * - This feature is in free public preview. During the public preview, the [File Storage NAS Service-Level Agreement (SLA)](https://terms.aliyun.com/legal-agreement/terms/suit_bu1_ali_cloud/suit_bu1_ali_cloud201803061139_99860.html?spm=a2c4g.11186623.0.0.5c895ff2YPLrwe) is not guaranteed.
     * - Only Advanced Extreme NAS file systems support this feature.
     * - If the automatic snapshot policy has been applied to a file system, the file system no longer executes the policy after the policy is deleted.
     * <props="intl">
     * - This feature is in free public preview. During the public preview, the [File Storage NAS Service-Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed.
     * - Only Advanced Extreme NAS file systems support this feature.
     * - If the automatic snapshot policy has been applied to a file system, the file system no longer executes the policy after the policy is deleted.
     *
     * @param request - DeleteAutoSnapshotPolicyRequest
     *
     * @returns DeleteAutoSnapshotPolicyResponse
     *
     * @param DeleteAutoSnapshotPolicyRequest $request
     *
     * @return DeleteAutoSnapshotPolicyResponse
     */
    public function deleteAutoSnapshotPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAutoSnapshotPolicyWithOptions($request, $runtime);
    }

    /**
     * Deletes a CPFS for Lingjun access point.
     *
     * @remarks
     * Deletes a CPFS for Lingjun access point.
     *
     * @param request - DeleteCpfsAccessPointRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCpfsAccessPointResponse
     *
     * @param DeleteCpfsAccessPointRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteCpfsAccessPointResponse
     */
    public function deleteCpfsAccessPointWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessPointId) {
            @$query['AccessPointId'] = $request->accessPointId;
        }

        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteCpfsAccessPoint',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteCpfsAccessPointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a CPFS for Lingjun access point.
     *
     * @remarks
     * Deletes a CPFS for Lingjun access point.
     *
     * @param request - DeleteCpfsAccessPointRequest
     *
     * @returns DeleteCpfsAccessPointResponse
     *
     * @param DeleteCpfsAccessPointRequest $request
     *
     * @return DeleteCpfsAccessPointResponse
     */
    public function deleteCpfsAccessPoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCpfsAccessPointWithOptions($request, $runtime);
    }

    /**
     * Deletes a dataflow.
     *
     * @remarks
     * - Only CPFS 2.2.0 and later and CPFS for Lingjun 2.4.0 and later support dataflows. You can view the version information on the file system details page in the console.
     * - You can delete only dataflows in the `Running` or `Stopped` state.
     * - After a dataflow is deleted, the related resources are released and cannot be recovered. To use a dataflow again, create a new one.
     *
     * @param request - DeleteDataFlowRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDataFlowResponse
     *
     * @param DeleteDataFlowRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteDataFlowResponse
     */
    public function deleteDataFlowWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dataFlowId) {
            @$query['DataFlowId'] = $request->dataFlowId;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDataFlow',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDataFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a dataflow.
     *
     * @remarks
     * - Only CPFS 2.2.0 and later and CPFS for Lingjun 2.4.0 and later support dataflows. You can view the version information on the file system details page in the console.
     * - You can delete only dataflows in the `Running` or `Stopped` state.
     * - After a dataflow is deleted, the related resources are released and cannot be recovered. To use a dataflow again, create a new one.
     *
     * @param request - DeleteDataFlowRequest
     *
     * @returns DeleteDataFlowResponse
     *
     * @param DeleteDataFlowRequest $request
     *
     * @return DeleteDataFlowResponse
     */
    public function deleteDataFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDataFlowWithOptions($request, $runtime);
    }

    /**
     * Deletes a file system.
     *
     * @remarks
     * - You can delete a file system only when the number of mount targets on the file system is 0.
     * - You can delete a file system only when no lifecycle policy is created for the file system.
     * - After a file system is deleted, the data cannot be recovered. Proceed with caution.
     *
     * @param request - DeleteFileSystemRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteFileSystemResponse
     *
     * @param DeleteFileSystemRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteFileSystemResponse
     */
    public function deleteFileSystemWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteFileSystem',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteFileSystemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a file system.
     *
     * @remarks
     * - You can delete a file system only when the number of mount targets on the file system is 0.
     * - You can delete a file system only when no lifecycle policy is created for the file system.
     * - After a file system is deleted, the data cannot be recovered. Proceed with caution.
     *
     * @param request - DeleteFileSystemRequest
     *
     * @returns DeleteFileSystemResponse
     *
     * @param DeleteFileSystemRequest $request
     *
     * @return DeleteFileSystemResponse
     */
    public function deleteFileSystem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFileSystemWithOptions($request, $runtime);
    }

    /**
     * Deletes a fileset.
     *
     * @remarks
     * - Only CPFS 2.2.0 and later and CPFS for Lingjun 2.7.0 and later support fileset deletion. After a fileset is deleted, all data in the directory is permanently deleted and cannot be recovered. Proceed with caution.
     * - If deletion protection is enabled, you must disable deletion protection before you can delete the fileset.
     * - All filesets on the target file system must be in the CREATED desired state before you can perform the delete operation.
     * - Deleting a CPFS general-purpose fileset immediately releases disk space. Deleting a CPFS for Lingjun fileset gradually releases disk space. Deleted data cannot be recovered. Proceed with caution.
     *
     * @param request - DeleteFilesetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteFilesetResponse
     *
     * @param DeleteFilesetRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteFilesetResponse
     */
    public function deleteFilesetWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->fsetId) {
            @$query['FsetId'] = $request->fsetId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteFileset',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteFilesetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a fileset.
     *
     * @remarks
     * - Only CPFS 2.2.0 and later and CPFS for Lingjun 2.7.0 and later support fileset deletion. After a fileset is deleted, all data in the directory is permanently deleted and cannot be recovered. Proceed with caution.
     * - If deletion protection is enabled, you must disable deletion protection before you can delete the fileset.
     * - All filesets on the target file system must be in the CREATED desired state before you can perform the delete operation.
     * - Deleting a CPFS general-purpose fileset immediately releases disk space. Deleting a CPFS for Lingjun fileset gradually releases disk space. Deleted data cannot be recovered. Proceed with caution.
     *
     * @param request - DeleteFilesetRequest
     *
     * @returns DeleteFilesetResponse
     *
     * @param DeleteFilesetRequest $request
     *
     * @return DeleteFilesetResponse
     */
    public function deleteFileset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFilesetWithOptions($request, $runtime);
    }

    /**
     * Deletes LDAP settings.
     *
     * @remarks
     * # Description
     * This operation supports only Cloud Parallel File Storage (CPFS) parallel file systems.
     *
     * @deprecated OpenAPI DeleteLDAPConfig is deprecated
     *
     * @param request - DeleteLDAPConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteLDAPConfigResponse
     *
     * @param DeleteLDAPConfigRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteLDAPConfigResponse
     */
    public function deleteLDAPConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteLDAPConfig',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteLDAPConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Deletes LDAP settings.
     *
     * @remarks
     * # Description
     * This operation supports only Cloud Parallel File Storage (CPFS) parallel file systems.
     *
     * @deprecated OpenAPI DeleteLDAPConfig is deprecated
     *
     * @param request - DeleteLDAPConfigRequest
     *
     * @returns DeleteLDAPConfigResponse
     *
     * @param DeleteLDAPConfigRequest $request
     *
     * @return DeleteLDAPConfigResponse
     */
    public function deleteLDAPConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLDAPConfigWithOptions($request, $runtime);
    }

    /**
     * Deletes a lifecycle management policy.
     *
     * @remarks
     * Only General-purpose NAS file systems and CPFS for Lingjun support this feature.
     *
     * @param request - DeleteLifecyclePolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteLifecyclePolicyResponse
     *
     * @param DeleteLifecyclePolicyRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteLifecyclePolicyResponse
     */
    public function deleteLifecyclePolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->lifecyclePolicyId) {
            @$query['LifecyclePolicyId'] = $request->lifecyclePolicyId;
        }

        if (null !== $request->lifecyclePolicyName) {
            @$query['LifecyclePolicyName'] = $request->lifecyclePolicyName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteLifecyclePolicy',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteLifecyclePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a lifecycle management policy.
     *
     * @remarks
     * Only General-purpose NAS file systems and CPFS for Lingjun support this feature.
     *
     * @param request - DeleteLifecyclePolicyRequest
     *
     * @returns DeleteLifecyclePolicyResponse
     *
     * @param DeleteLifecyclePolicyRequest $request
     *
     * @return DeleteLifecyclePolicyResponse
     */
    public function deleteLifecyclePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLifecyclePolicyWithOptions($request, $runtime);
    }

    /**
     * Stops log analysis for a General-purpose NAS file system.
     *
     * @param request - DeleteLogAnalysisRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteLogAnalysisResponse
     *
     * @param DeleteLogAnalysisRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteLogAnalysisResponse
     */
    public function deleteLogAnalysisWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteLogAnalysis',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteLogAnalysisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Stops log analysis for a General-purpose NAS file system.
     *
     * @param request - DeleteLogAnalysisRequest
     *
     * @returns DeleteLogAnalysisResponse
     *
     * @param DeleteLogAnalysisRequest $request
     *
     * @return DeleteLogAnalysisResponse
     */
    public function deleteLogAnalysis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLogAnalysisWithOptions($request, $runtime);
    }

    /**
     * Deletes an existing mount target.
     *
     * @remarks
     * After a mount target is deleted, it cannot be recovered. Proceed with caution.
     *
     * @param request - DeleteMountTargetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMountTargetResponse
     *
     * @param DeleteMountTargetRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteMountTargetResponse
     */
    public function deleteMountTargetWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->mountTargetDomain) {
            @$query['MountTargetDomain'] = $request->mountTargetDomain;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteMountTarget',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteMountTargetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an existing mount target.
     *
     * @remarks
     * After a mount target is deleted, it cannot be recovered. Proceed with caution.
     *
     * @param request - DeleteMountTargetRequest
     *
     * @returns DeleteMountTargetResponse
     *
     * @param DeleteMountTargetRequest $request
     *
     * @return DeleteMountTargetResponse
     */
    public function deleteMountTarget($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMountTargetWithOptions($request, $runtime);
    }

    /**
     * Deletes an export directory of a protocol service.
     *
     * @remarks
     * This operation applies only to Cloud Parallel File Storage (CPFS) file systems.
     *
     * @param request - DeleteProtocolMountTargetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteProtocolMountTargetResponse
     *
     * @param DeleteProtocolMountTargetRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteProtocolMountTargetResponse
     */
    public function deleteProtocolMountTargetWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->exportId) {
            @$query['ExportId'] = $request->exportId;
        }

        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->protocolServiceId) {
            @$query['ProtocolServiceId'] = $request->protocolServiceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteProtocolMountTarget',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteProtocolMountTargetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an export directory of a protocol service.
     *
     * @remarks
     * This operation applies only to Cloud Parallel File Storage (CPFS) file systems.
     *
     * @param request - DeleteProtocolMountTargetRequest
     *
     * @returns DeleteProtocolMountTargetResponse
     *
     * @param DeleteProtocolMountTargetRequest $request
     *
     * @return DeleteProtocolMountTargetResponse
     */
    public function deleteProtocolMountTarget($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteProtocolMountTargetWithOptions($request, $runtime);
    }

    /**
     * Deletes a protocol service from a Cloud Parallel File Storage (CPFS) file system.
     *
     * @remarks
     * - This operation applies only to CPFS file systems.
     * - When you delete a protocol service, all export directories in the protocol service are also deleted.
     *
     * @param request - DeleteProtocolServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteProtocolServiceResponse
     *
     * @param DeleteProtocolServiceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteProtocolServiceResponse
     */
    public function deleteProtocolServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->protocolServiceId) {
            @$query['ProtocolServiceId'] = $request->protocolServiceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteProtocolService',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteProtocolServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a protocol service from a Cloud Parallel File Storage (CPFS) file system.
     *
     * @remarks
     * - This operation applies only to CPFS file systems.
     * - When you delete a protocol service, all export directories in the protocol service are also deleted.
     *
     * @param request - DeleteProtocolServiceRequest
     *
     * @returns DeleteProtocolServiceResponse
     *
     * @param DeleteProtocolServiceRequest $request
     *
     * @return DeleteProtocolServiceResponse
     */
    public function deleteProtocolService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteProtocolServiceWithOptions($request, $runtime);
    }

    /**
     * Deletes a specified snapshot or cancels an ongoing snapshot creation task.
     *
     * @remarks
     * <props="china">
     * - This feature is in free public preview. During the public preview, the [File Storage NAS Service-Level Agreement (SLA)](https://terms.aliyun.com/legal-agreement/terms/suit_bu1_ali_cloud/suit_bu1_ali_cloud201803061139_99860.html?spm=a2c4g.11186623.0.0.5c895ff2YPLrwe) is not guaranteed.
     * - Only Advanced Extreme NAS file systems support this feature.
     * <props="intl">
     * - This feature is in free public preview. During the public preview, the [File Storage NAS Service-Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed.
     * - Only Advanced Extreme NAS file systems support this feature.
     *
     * @param request - DeleteSnapshotRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSnapshotResponse
     *
     * @param DeleteSnapshotRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteSnapshotResponse
     */
    public function deleteSnapshotWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->snapshotId) {
            @$query['SnapshotId'] = $request->snapshotId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteSnapshot',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteSnapshotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a specified snapshot or cancels an ongoing snapshot creation task.
     *
     * @remarks
     * <props="china">
     * - This feature is in free public preview. During the public preview, the [File Storage NAS Service-Level Agreement (SLA)](https://terms.aliyun.com/legal-agreement/terms/suit_bu1_ali_cloud/suit_bu1_ali_cloud201803061139_99860.html?spm=a2c4g.11186623.0.0.5c895ff2YPLrwe) is not guaranteed.
     * - Only Advanced Extreme NAS file systems support this feature.
     * <props="intl">
     * - This feature is in free public preview. During the public preview, the [File Storage NAS Service-Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed.
     * - Only Advanced Extreme NAS file systems support this feature.
     *
     * @param request - DeleteSnapshotRequest
     *
     * @returns DeleteSnapshotResponse
     *
     * @param DeleteSnapshotRequest $request
     *
     * @return DeleteSnapshotResponse
     */
    public function deleteSnapshot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSnapshotWithOptions($request, $runtime);
    }

    /**
     * Queries permission group information.
     *
     * @param request - DescribeAccessGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAccessGroupsResponse
     *
     * @param DescribeAccessGroupsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeAccessGroupsResponse
     */
    public function describeAccessGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessGroupName) {
            @$query['AccessGroupName'] = $request->accessGroupName;
        }

        if (null !== $request->fileSystemType) {
            @$query['FileSystemType'] = $request->fileSystemType;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->useUTCDateTime) {
            @$query['UseUTCDateTime'] = $request->useUTCDateTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAccessGroups',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAccessGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries permission group information.
     *
     * @param request - DescribeAccessGroupsRequest
     *
     * @returns DescribeAccessGroupsResponse
     *
     * @param DescribeAccessGroupsRequest $request
     *
     * @return DescribeAccessGroupsResponse
     */
    public function describeAccessGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAccessGroupsWithOptions($request, $runtime);
    }

    /**
     * Queries the details of an access point.
     *
     * @remarks
     * Only General-purpose NAS NFS file systems support this feature.
     *
     * @param request - DescribeAccessPointRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAccessPointResponse
     *
     * @param DescribeAccessPointRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeAccessPointResponse
     */
    public function describeAccessPointWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessPointId) {
            @$query['AccessPointId'] = $request->accessPointId;
        }

        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAccessPoint',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAccessPointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of an access point.
     *
     * @remarks
     * Only General-purpose NAS NFS file systems support this feature.
     *
     * @param request - DescribeAccessPointRequest
     *
     * @returns DescribeAccessPointResponse
     *
     * @param DescribeAccessPointRequest $request
     *
     * @return DescribeAccessPointResponse
     */
    public function describeAccessPoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAccessPointWithOptions($request, $runtime);
    }

    /**
     * Queries access point information.
     *
     * @remarks
     * Only General-purpose NAS NFS file systems support this feature.
     *
     * @deprecated openAPI DescribeAccessPoints is deprecated, please use NAS::2017-06-26::ListAccessPoints instead
     *
     * @param request - DescribeAccessPointsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAccessPointsResponse
     *
     * @param DescribeAccessPointsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeAccessPointsResponse
     */
    public function describeAccessPointsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessGroup) {
            @$query['AccessGroup'] = $request->accessGroup;
        }

        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAccessPoints',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAccessPointsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Queries access point information.
     *
     * @remarks
     * Only General-purpose NAS NFS file systems support this feature.
     *
     * @deprecated openAPI DescribeAccessPoints is deprecated, please use NAS::2017-06-26::ListAccessPoints instead
     *
     * @param request - DescribeAccessPointsRequest
     *
     * @returns DescribeAccessPointsResponse
     *
     * @param DescribeAccessPointsRequest $request
     *
     * @return DescribeAccessPointsResponse
     */
    public function describeAccessPoints($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAccessPointsWithOptions($request, $runtime);
    }

    /**
     * Queries the description of a permission rule.
     *
     * @param request - DescribeAccessRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAccessRulesResponse
     *
     * @param DescribeAccessRulesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeAccessRulesResponse
     */
    public function describeAccessRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessGroupName) {
            @$query['AccessGroupName'] = $request->accessGroupName;
        }

        if (null !== $request->accessRuleId) {
            @$query['AccessRuleId'] = $request->accessRuleId;
        }

        if (null !== $request->fileSystemType) {
            @$query['FileSystemType'] = $request->fileSystemType;
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
            'action' => 'DescribeAccessRules',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAccessRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the description of a permission rule.
     *
     * @param request - DescribeAccessRulesRequest
     *
     * @returns DescribeAccessRulesResponse
     *
     * @param DescribeAccessRulesRequest $request
     *
     * @return DescribeAccessRulesResponse
     */
    public function describeAccessRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAccessRulesWithOptions($request, $runtime);
    }

    /**
     * Queries Agentic spaces.
     *
     * @remarks
     * Applies to Agentic file systems.
     * ## Before you begin
     * Before you call this operation, create resources in the following order:
     * 1. **Create an Agentic file system**: When you call [CreateFileSystem](https://www.alibabacloud.com/help/en/cpfs/cpfsonecs/developer-reference/api-nas-2017-06-26-createfilesystem-cpfs) to create a file system, set the following parameters:
     *    - `StorageType`: Set to `Agentic`.
     *    - `ProtocolType`: Set to `NFS`.
     *    - **Supported regions**: The Agentic storage type is available only in specific regions and zones. For more information, see the console.
     * 2. **Query the AgenticSpace list**: After the file system is created and its status changes to Running, call the DescribeAgenticSpaces operation to query the AgenticSpace list under the file system.
     *    - If Agentic spaces are created under the file system, the complete list is returned.
     *    - If no Agentic spaces are created under the file system, an empty list is returned.
     *
     * @param request - DescribeAgenticSpacesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAgenticSpacesResponse
     *
     * @param DescribeAgenticSpacesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeAgenticSpacesResponse
     */
    public function describeAgenticSpacesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->filters) {
            @$query['Filters'] = $request->filters;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAgenticSpaces',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAgenticSpacesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries Agentic spaces.
     *
     * @remarks
     * Applies to Agentic file systems.
     * ## Before you begin
     * Before you call this operation, create resources in the following order:
     * 1. **Create an Agentic file system**: When you call [CreateFileSystem](https://www.alibabacloud.com/help/en/cpfs/cpfsonecs/developer-reference/api-nas-2017-06-26-createfilesystem-cpfs) to create a file system, set the following parameters:
     *    - `StorageType`: Set to `Agentic`.
     *    - `ProtocolType`: Set to `NFS`.
     *    - **Supported regions**: The Agentic storage type is available only in specific regions and zones. For more information, see the console.
     * 2. **Query the AgenticSpace list**: After the file system is created and its status changes to Running, call the DescribeAgenticSpaces operation to query the AgenticSpace list under the file system.
     *    - If Agentic spaces are created under the file system, the complete list is returned.
     *    - If no Agentic spaces are created under the file system, an empty list is returned.
     *
     * @param request - DescribeAgenticSpacesRequest
     *
     * @returns DescribeAgenticSpacesResponse
     *
     * @param DescribeAgenticSpacesRequest $request
     *
     * @return DescribeAgenticSpacesResponse
     */
    public function describeAgenticSpaces($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAgenticSpacesWithOptions($request, $runtime);
    }

    /**
     * Queries the automatic snapshot policies that have been created.
     *
     * @remarks
     * <props="china">
     * - This feature is in free public preview. During the public preview, the [File Storage NAS Service-Level Agreement (SLA)](https://terms.aliyun.com/legal-agreement/terms/suit_bu1_ali_cloud/suit_bu1_ali_cloud201803061139_99860.html?spm=a2c4g.11186623.0.0.5c895ff2YPLrwe) is not guaranteed.
     * - Only Advanced Extreme NAS file systems support this feature.
     * <props="intl">
     * - This feature is in free public preview. During the public preview, the [File Storage NAS Service-Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed.
     * - Only Advanced Extreme NAS file systems support this feature.
     *
     * @param request - DescribeAutoSnapshotPoliciesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAutoSnapshotPoliciesResponse
     *
     * @param DescribeAutoSnapshotPoliciesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeAutoSnapshotPoliciesResponse
     */
    public function describeAutoSnapshotPoliciesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoSnapshotPolicyId) {
            @$query['AutoSnapshotPolicyId'] = $request->autoSnapshotPolicyId;
        }

        if (null !== $request->fileSystemType) {
            @$query['FileSystemType'] = $request->fileSystemType;
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
            'action' => 'DescribeAutoSnapshotPolicies',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAutoSnapshotPoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the automatic snapshot policies that have been created.
     *
     * @remarks
     * <props="china">
     * - This feature is in free public preview. During the public preview, the [File Storage NAS Service-Level Agreement (SLA)](https://terms.aliyun.com/legal-agreement/terms/suit_bu1_ali_cloud/suit_bu1_ali_cloud201803061139_99860.html?spm=a2c4g.11186623.0.0.5c895ff2YPLrwe) is not guaranteed.
     * - Only Advanced Extreme NAS file systems support this feature.
     * <props="intl">
     * - This feature is in free public preview. During the public preview, the [File Storage NAS Service-Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed.
     * - Only Advanced Extreme NAS file systems support this feature.
     *
     * @param request - DescribeAutoSnapshotPoliciesRequest
     *
     * @returns DescribeAutoSnapshotPoliciesResponse
     *
     * @param DescribeAutoSnapshotPoliciesRequest $request
     *
     * @return DescribeAutoSnapshotPoliciesResponse
     */
    public function describeAutoSnapshotPolicies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAutoSnapshotPoliciesWithOptions($request, $runtime);
    }

    /**
     * Queries the list of automatic snapshot tasks.
     *
     * @remarks
     * <props="china">
     * - This feature is in free public preview. During the public preview, the [File Storage NAS Service-Level Agreement (SLA)](https://terms.aliyun.com/legal-agreement/terms/suit_bu1_ali_cloud/suit_bu1_ali_cloud201803061139_99860.html?spm=a2c4g.11186623.0.0.5c895ff2YPLrwe) is not guaranteed.
     * - Only Advanced Extreme NAS file systems support this feature.
     * <props="intl">
     * - This feature is in free public preview. During the public preview, the [File Storage NAS Service-Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed.
     * - Only Advanced Extreme NAS file systems support this feature.
     *
     * @param request - DescribeAutoSnapshotTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAutoSnapshotTasksResponse
     *
     * @param DescribeAutoSnapshotTasksRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeAutoSnapshotTasksResponse
     */
    public function describeAutoSnapshotTasksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoSnapshotPolicyIds) {
            @$query['AutoSnapshotPolicyIds'] = $request->autoSnapshotPolicyIds;
        }

        if (null !== $request->fileSystemIds) {
            @$query['FileSystemIds'] = $request->fileSystemIds;
        }

        if (null !== $request->fileSystemType) {
            @$query['FileSystemType'] = $request->fileSystemType;
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
            'action' => 'DescribeAutoSnapshotTasks',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAutoSnapshotTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of automatic snapshot tasks.
     *
     * @remarks
     * <props="china">
     * - This feature is in free public preview. During the public preview, the [File Storage NAS Service-Level Agreement (SLA)](https://terms.aliyun.com/legal-agreement/terms/suit_bu1_ali_cloud/suit_bu1_ali_cloud201803061139_99860.html?spm=a2c4g.11186623.0.0.5c895ff2YPLrwe) is not guaranteed.
     * - Only Advanced Extreme NAS file systems support this feature.
     * <props="intl">
     * - This feature is in free public preview. During the public preview, the [File Storage NAS Service-Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed.
     * - Only Advanced Extreme NAS file systems support this feature.
     *
     * @param request - DescribeAutoSnapshotTasksRequest
     *
     * @returns DescribeAutoSnapshotTasksResponse
     *
     * @param DescribeAutoSnapshotTasksRequest $request
     *
     * @return DescribeAutoSnapshotTasksResponse
     */
    public function describeAutoSnapshotTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAutoSnapshotTasksWithOptions($request, $runtime);
    }

    /**
     * Retrieves the status of blacklisted clients in the Cloud Parallel File Storage (CPFS) service.
     *
     * @remarks
     * # Description
     * This operation applies only to CPFS parallel file systems.
     *
     * @deprecated OpenAPI DescribeBlackListClients is deprecated
     *
     * @param request - DescribeBlackListClientsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeBlackListClientsResponse
     *
     * @param DescribeBlackListClientsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeBlackListClientsResponse
     */
    public function describeBlackListClientsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientIP) {
            @$query['ClientIP'] = $request->clientIP;
        }

        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeBlackListClients',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeBlackListClientsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Retrieves the status of blacklisted clients in the Cloud Parallel File Storage (CPFS) service.
     *
     * @remarks
     * # Description
     * This operation applies only to CPFS parallel file systems.
     *
     * @deprecated OpenAPI DescribeBlackListClients is deprecated
     *
     * @param request - DescribeBlackListClientsRequest
     *
     * @returns DescribeBlackListClientsResponse
     *
     * @param DescribeBlackListClientsRequest $request
     *
     * @return DescribeBlackListClientsResponse
     */
    public function describeBlackListClients($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBlackListClientsWithOptions($request, $runtime);
    }

    /**
     * Queries the list of clients mounted to an access point of a CPFS for Lingjun file system.
     *
     * @remarks
     * Queries the list of clients mounted to an access point of a CPFS for Lingjun file system.
     *
     * @param request - DescribeCpfsAccessPointMountedClientsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCpfsAccessPointMountedClientsResponse
     *
     * @param DescribeCpfsAccessPointMountedClientsRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return DescribeCpfsAccessPointMountedClientsResponse
     */
    public function describeCpfsAccessPointMountedClientsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessPointId) {
            @$query['AccessPointId'] = $request->accessPointId;
        }

        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
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
            'action' => 'DescribeCpfsAccessPointMountedClients',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCpfsAccessPointMountedClientsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of clients mounted to an access point of a CPFS for Lingjun file system.
     *
     * @remarks
     * Queries the list of clients mounted to an access point of a CPFS for Lingjun file system.
     *
     * @param request - DescribeCpfsAccessPointMountedClientsRequest
     *
     * @returns DescribeCpfsAccessPointMountedClientsResponse
     *
     * @param DescribeCpfsAccessPointMountedClientsRequest $request
     *
     * @return DescribeCpfsAccessPointMountedClientsResponse
     */
    public function describeCpfsAccessPointMountedClients($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCpfsAccessPointMountedClientsWithOptions($request, $runtime);
    }

    /**
     * Queries access points of CPFS for Lingjun.
     *
     * @remarks
     * Queries access points of CPFS for Lingjun.
     *
     * @param request - DescribeCpfsAccessPointsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCpfsAccessPointsResponse
     *
     * @param DescribeCpfsAccessPointsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeCpfsAccessPointsResponse
     */
    public function describeCpfsAccessPointsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessPointId) {
            @$query['AccessPointId'] = $request->accessPointId;
        }

        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
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

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCpfsAccessPoints',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCpfsAccessPointsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries access points of CPFS for Lingjun.
     *
     * @remarks
     * Queries access points of CPFS for Lingjun.
     *
     * @param request - DescribeCpfsAccessPointsRequest
     *
     * @returns DescribeCpfsAccessPointsResponse
     *
     * @param DescribeCpfsAccessPointsRequest $request
     *
     * @return DescribeCpfsAccessPointsResponse
     */
    public function describeCpfsAccessPoints($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCpfsAccessPointsWithOptions($request, $runtime);
    }

    /**
     * Queries the batch subtasks of a data flow.
     *
     * @remarks
     * Supported only by CPFS for Lingjun 2.6.0 and later. You can view the version information on the file system details page in the console.
     * **Before you begin**
     * Before you call this operation to query data flow subtasks, you must create resources and start tasks in the following order:
     * 1. **Create a bmcpfs file system**: You must create a CPFS for Lingjun file system in the console and wait until its status changes to Running.
     * 2. **Create a data flow rule**: Call the [CreateDataFlow](https://www.alibabacloud.com/help/en/cpfs/bmcpfs/developer-reference/api-nas-2017-06-26-createdataflow-bmcpfs) operation on the file system to establish a data flow channel.
     * 3. **Start a data flow task**: Call the [CreateDataFlowTask](https://www.alibabacloud.com/help/en/cpfs/bmcpfs/developer-reference/api-nas-2017-06-26-createdataflowtask-bmcpfs) operation to create and start a data flow task. The task status must be Running.
     * 4. **Query the subtask list**: Subtasks are automatically generated during the execution of a data flow task. Call the DescribeDataFlowSubTasks operation to query the list of these subtasks.
     *
     * @param request - DescribeDataFlowSubTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDataFlowSubTasksResponse
     *
     * @param DescribeDataFlowSubTasksRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDataFlowSubTasksResponse
     */
    public function describeDataFlowSubTasksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->filters) {
            @$query['Filters'] = $request->filters;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDataFlowSubTasks',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDataFlowSubTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the batch subtasks of a data flow.
     *
     * @remarks
     * Supported only by CPFS for Lingjun 2.6.0 and later. You can view the version information on the file system details page in the console.
     * **Before you begin**
     * Before you call this operation to query data flow subtasks, you must create resources and start tasks in the following order:
     * 1. **Create a bmcpfs file system**: You must create a CPFS for Lingjun file system in the console and wait until its status changes to Running.
     * 2. **Create a data flow rule**: Call the [CreateDataFlow](https://www.alibabacloud.com/help/en/cpfs/bmcpfs/developer-reference/api-nas-2017-06-26-createdataflow-bmcpfs) operation on the file system to establish a data flow channel.
     * 3. **Start a data flow task**: Call the [CreateDataFlowTask](https://www.alibabacloud.com/help/en/cpfs/bmcpfs/developer-reference/api-nas-2017-06-26-createdataflowtask-bmcpfs) operation to create and start a data flow task. The task status must be Running.
     * 4. **Query the subtask list**: Subtasks are automatically generated during the execution of a data flow task. Call the DescribeDataFlowSubTasks operation to query the list of these subtasks.
     *
     * @param request - DescribeDataFlowSubTasksRequest
     *
     * @returns DescribeDataFlowSubTasksResponse
     *
     * @param DescribeDataFlowSubTasksRequest $request
     *
     * @return DescribeDataFlowSubTasksResponse
     */
    public function describeDataFlowSubTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDataFlowSubTasksWithOptions($request, $runtime);
    }

    /**
     * Queries the details of data flow tasks.
     *
     * @remarks
     * Only CPFS 2.2.0 and later and CPFS for Lingjun 2.4.0 and later support querying data flow tasks. You can view the version information on the file system details page in the console.
     *
     * @param request - DescribeDataFlowTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDataFlowTasksResponse
     *
     * @param DescribeDataFlowTasksRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeDataFlowTasksResponse
     */
    public function describeDataFlowTasksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->filters) {
            @$query['Filters'] = $request->filters;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->withReports) {
            @$query['WithReports'] = $request->withReports;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDataFlowTasks',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDataFlowTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of data flow tasks.
     *
     * @remarks
     * Only CPFS 2.2.0 and later and CPFS for Lingjun 2.4.0 and later support querying data flow tasks. You can view the version information on the file system details page in the console.
     *
     * @param request - DescribeDataFlowTasksRequest
     *
     * @returns DescribeDataFlowTasksResponse
     *
     * @param DescribeDataFlowTasksRequest $request
     *
     * @return DescribeDataFlowTasksResponse
     */
    public function describeDataFlowTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDataFlowTasksWithOptions($request, $runtime);
    }

    /**
     * Queries the data flow information of a CPFS file system.
     *
     * @remarks
     * - Data flows are supported only by CPFS 2.2.0 and later, and CPFS for Lingjun 2.4.0 and later. You can view the version information on the file system details page in the console.
     * - Among the filter keys in Filters, FsetIds, DataFlowIds, SourceStorage, ThroughputList, and Status require exact match, while FileSystemPath, Description, and SourceStoragePath support fuzzy match.
     * - Combined queries are supported.
     *
     * @param request - DescribeDataFlowsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDataFlowsResponse
     *
     * @param DescribeDataFlowsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeDataFlowsResponse
     */
    public function describeDataFlowsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->filters) {
            @$query['Filters'] = $request->filters;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDataFlows',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDataFlowsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the data flow information of a CPFS file system.
     *
     * @remarks
     * - Data flows are supported only by CPFS 2.2.0 and later, and CPFS for Lingjun 2.4.0 and later. You can view the version information on the file system details page in the console.
     * - Among the filter keys in Filters, FsetIds, DataFlowIds, SourceStorage, ThroughputList, and Status require exact match, while FileSystemPath, Description, and SourceStoragePath support fuzzy match.
     * - Combined queries are supported.
     *
     * @param request - DescribeDataFlowsRequest
     *
     * @returns DescribeDataFlowsResponse
     *
     * @param DescribeDataFlowsRequest $request
     *
     * @return DescribeDataFlowsResponse
     */
    public function describeDataFlows($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDataFlowsWithOptions($request, $runtime);
    }

    /**
     * Retrieves the details of each directory quota in a file system.
     *
     * @remarks
     * Only General-purpose NAS NFS file systems support the directory quota feature.
     *
     * @param request - DescribeDirQuotasRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDirQuotasResponse
     *
     * @param DescribeDirQuotasRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeDirQuotasResponse
     */
    public function describeDirQuotasWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->path) {
            @$query['Path'] = $request->path;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDirQuotas',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDirQuotasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the details of each directory quota in a file system.
     *
     * @remarks
     * Only General-purpose NAS NFS file systems support the directory quota feature.
     *
     * @param request - DescribeDirQuotasRequest
     *
     * @returns DescribeDirQuotasResponse
     *
     * @param DescribeDirQuotasRequest $request
     *
     * @return DescribeDirQuotasResponse
     */
    public function describeDirQuotas($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDirQuotasWithOptions($request, $runtime);
    }

    /**
     * Lists the statistics information of file systems under the current account.
     *
     * @deprecated openAPI DescribeFileSystemStatistics is deprecated, please use NAS::2017-06-26::DescribeResourceStatistics instead
     *
     * @param request - DescribeFileSystemStatisticsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeFileSystemStatisticsResponse
     *
     * @param DescribeFileSystemStatisticsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeFileSystemStatisticsResponse
     */
    public function describeFileSystemStatisticsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
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
            'action' => 'DescribeFileSystemStatistics',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeFileSystemStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Lists the statistics information of file systems under the current account.
     *
     * @deprecated openAPI DescribeFileSystemStatistics is deprecated, please use NAS::2017-06-26::DescribeResourceStatistics instead
     *
     * @param request - DescribeFileSystemStatisticsRequest
     *
     * @returns DescribeFileSystemStatisticsResponse
     *
     * @param DescribeFileSystemStatisticsRequest $request
     *
     * @return DescribeFileSystemStatisticsResponse
     */
    public function describeFileSystemStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFileSystemStatisticsWithOptions($request, $runtime);
    }

    /**
     * Queries file system information.
     *
     * @param request - DescribeFileSystemsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeFileSystemsResponse
     *
     * @param DescribeFileSystemsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeFileSystemsResponse
     */
    public function describeFileSystemsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->fileSystemType) {
            @$query['FileSystemType'] = $request->fileSystemType;
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

        if (null !== $request->storageType) {
            @$query['StorageType'] = $request->storageType;
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
            'action' => 'DescribeFileSystems',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeFileSystemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries file system information.
     *
     * @param request - DescribeFileSystemsRequest
     *
     * @returns DescribeFileSystemsResponse
     *
     * @param DescribeFileSystemsRequest $request
     *
     * @return DescribeFileSystemsResponse
     */
    public function describeFileSystems($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFileSystemsWithOptions($request, $runtime);
    }

    /**
     * Queries the list of created filesets.
     *
     * @remarks
     * - Only CPFS 2.2.0 and later and CPFS for Lingjun 2.7.0 and later support filesets. You can view the version information on the file system details page in the console.
     * - For filter keys (Filters), FsetIds requires an exact match, while FileSystemPath and Description support fuzzy match.
     * - Combination queries are supported.
     *
     * @param request - DescribeFilesetsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeFilesetsResponse
     *
     * @param DescribeFilesetsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeFilesetsResponse
     */
    public function describeFilesetsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->filters) {
            @$query['Filters'] = $request->filters;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->orderByField) {
            @$query['OrderByField'] = $request->orderByField;
        }

        if (null !== $request->sortOrder) {
            @$query['SortOrder'] = $request->sortOrder;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeFilesets',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeFilesetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of created filesets.
     *
     * @remarks
     * - Only CPFS 2.2.0 and later and CPFS for Lingjun 2.7.0 and later support filesets. You can view the version information on the file system details page in the console.
     * - For filter keys (Filters), FsetIds requires an exact match, while FileSystemPath and Description support fuzzy match.
     * - Combination queries are supported.
     *
     * @param request - DescribeFilesetsRequest
     *
     * @returns DescribeFilesetsResponse
     *
     * @param DescribeFilesetsRequest $request
     *
     * @return DescribeFilesetsResponse
     */
    public function describeFilesets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFilesetsWithOptions($request, $runtime);
    }

    /**
     * Queries the list of HpnZones associated with file systems. When compute nodes are located in an associated HpnZone, access to the file system achieves optimal performance.
     *
     * @remarks
     * - Only CPFS for Lingjun file systems are supported.
     * - This is a batch operation that allows you to query up to 20 file systems at a time.
     *
     * @param tmpReq - DescribeFilesystemsAssociatedHpnZonesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeFilesystemsAssociatedHpnZonesResponse
     *
     * @param DescribeFilesystemsAssociatedHpnZonesRequest $tmpReq
     * @param RuntimeOptions                               $runtime
     *
     * @return DescribeFilesystemsAssociatedHpnZonesResponse
     */
    public function describeFilesystemsAssociatedHpnZonesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribeFilesystemsAssociatedHpnZonesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->filesystems) {
            $request->filesystemsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->filesystems, 'Filesystems', 'json');
        }

        $query = [];
        if (null !== $request->filesystemsShrink) {
            @$query['Filesystems'] = $request->filesystemsShrink;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeFilesystemsAssociatedHpnZones',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeFilesystemsAssociatedHpnZonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of HpnZones associated with file systems. When compute nodes are located in an associated HpnZone, access to the file system achieves optimal performance.
     *
     * @remarks
     * - Only CPFS for Lingjun file systems are supported.
     * - This is a batch operation that allows you to query up to 20 file systems at a time.
     *
     * @param request - DescribeFilesystemsAssociatedHpnZonesRequest
     *
     * @returns DescribeFilesystemsAssociatedHpnZonesResponse
     *
     * @param DescribeFilesystemsAssociatedHpnZonesRequest $request
     *
     * @return DescribeFilesystemsAssociatedHpnZonesResponse
     */
    public function describeFilesystemsAssociatedHpnZones($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFilesystemsAssociatedHpnZonesWithOptions($request, $runtime);
    }

    /**
     * Queries the virtual storage channel information associated with file systems.
     *
     * @remarks
     * - Only CPFS for Lingjun supports this feature. To use CPFS for Lingjun, you must first submit a ticket to apply for the service whitelist, and then create a file system in the NAS console.
     * - Batch execution is supported. In batch execution, only one VscId can be associated with multiple FileSystemIds. This means that the ResourceIds.VscId values must be identical.
     * - To query the association results between file systems and virtual storage channels, call AttachVscToFilesystems first to complete the association. You can call the ListVscs operation of Lingjun AI Computing Service eflo-controller/2022-12-15 to query the VscId. If the virtual storage channel is not created, call CreateVsc to create one.
     *
     * @param request - DescribeFilesystemsVscAttachInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeFilesystemsVscAttachInfoResponse
     *
     * @param DescribeFilesystemsVscAttachInfoRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeFilesystemsVscAttachInfoResponse
     */
    public function describeFilesystemsVscAttachInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->resourceIds) {
            @$query['ResourceIds'] = $request->resourceIds;
        }

        if (null !== $request->roleChain) {
            @$query['RoleChain'] = $request->roleChain;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeFilesystemsVscAttachInfo',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeFilesystemsVscAttachInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the virtual storage channel information associated with file systems.
     *
     * @remarks
     * - Only CPFS for Lingjun supports this feature. To use CPFS for Lingjun, you must first submit a ticket to apply for the service whitelist, and then create a file system in the NAS console.
     * - Batch execution is supported. In batch execution, only one VscId can be associated with multiple FileSystemIds. This means that the ResourceIds.VscId values must be identical.
     * - To query the association results between file systems and virtual storage channels, call AttachVscToFilesystems first to complete the association. You can call the ListVscs operation of Lingjun AI Computing Service eflo-controller/2022-12-15 to query the VscId. If the virtual storage channel is not created, call CreateVsc to create one.
     *
     * @param request - DescribeFilesystemsVscAttachInfoRequest
     *
     * @returns DescribeFilesystemsVscAttachInfoResponse
     *
     * @param DescribeFilesystemsVscAttachInfoRequest $request
     *
     * @return DescribeFilesystemsVscAttachInfoResponse
     */
    public function describeFilesystemsVscAttachInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFilesystemsVscAttachInfoWithOptions($request, $runtime);
    }

    /**
     * Retrieves a list of lifecycle management policies.
     *
     * @remarks
     * This feature is supported only by General-purpose NAS file systems and CPFS for Lingjun.
     *
     * @param request - DescribeLifecyclePoliciesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeLifecyclePoliciesResponse
     *
     * @param DescribeLifecyclePoliciesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeLifecyclePoliciesResponse
     */
    public function describeLifecyclePoliciesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeLifecyclePolicies',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeLifecyclePoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a list of lifecycle management policies.
     *
     * @remarks
     * This feature is supported only by General-purpose NAS file systems and CPFS for Lingjun.
     *
     * @param request - DescribeLifecyclePoliciesRequest
     *
     * @returns DescribeLifecyclePoliciesResponse
     *
     * @param DescribeLifecyclePoliciesRequest $request
     *
     * @return DescribeLifecyclePoliciesResponse
     */
    public function describeLifecyclePolicies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLifecyclePoliciesWithOptions($request, $runtime);
    }

    /**
     * Queries the execution logs of a lifecycle policy. You can query the logs generated within the last 90 days or up to 1,000 log entries. Only CPFS for Lingjun is supported.
     *
     * @remarks
     * Queries the execution logs of a lifecycle policy. You can query the logs generated within the last 90 days or up to 1,000 log entries. Only CPFS for Lingjun is supported.
     * ## Before you begin
     * - Make sure that the file system specified by FileSystemId is a CPFS for Lingjun file system.
     * - Before you call this operation, call [DescribeLifecyclePolicies](https://www.alibabacloud.com/help/en/nas/developer-reference/api-nas-2017-06-26-describelifecyclepolicies) to query and obtain a valid LifecyclePolicyId.
     *
     * @param request - DescribeLifecyclePolicyLogsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeLifecyclePolicyLogsResponse
     *
     * @param DescribeLifecyclePolicyLogsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeLifecyclePolicyLogsResponse
     */
    public function describeLifecyclePolicyLogsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->lifecyclePolicyId) {
            @$query['LifecyclePolicyId'] = $request->lifecyclePolicyId;
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
            'action' => 'DescribeLifecyclePolicyLogs',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeLifecyclePolicyLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the execution logs of a lifecycle policy. You can query the logs generated within the last 90 days or up to 1,000 log entries. Only CPFS for Lingjun is supported.
     *
     * @remarks
     * Queries the execution logs of a lifecycle policy. You can query the logs generated within the last 90 days or up to 1,000 log entries. Only CPFS for Lingjun is supported.
     * ## Before you begin
     * - Make sure that the file system specified by FileSystemId is a CPFS for Lingjun file system.
     * - Before you call this operation, call [DescribeLifecyclePolicies](https://www.alibabacloud.com/help/en/nas/developer-reference/api-nas-2017-06-26-describelifecyclepolicies) to query and obtain a valid LifecyclePolicyId.
     *
     * @param request - DescribeLifecyclePolicyLogsRequest
     *
     * @returns DescribeLifecyclePolicyLogsResponse
     *
     * @param DescribeLifecyclePolicyLogsRequest $request
     *
     * @return DescribeLifecyclePolicyLogsResponse
     */
    public function describeLifecyclePolicyLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLifecyclePolicyLogsWithOptions($request, $runtime);
    }

    /**
     * Lists the log analysis configurations in log analysis.
     *
     * @param request - DescribeLogAnalysisRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeLogAnalysisResponse
     *
     * @param DescribeLogAnalysisRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeLogAnalysisResponse
     */
    public function describeLogAnalysisWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileSystemType) {
            @$query['FileSystemType'] = $request->fileSystemType;
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
            'action' => 'DescribeLogAnalysis',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeLogAnalysisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists the log analysis configurations in log analysis.
     *
     * @param request - DescribeLogAnalysisRequest
     *
     * @returns DescribeLogAnalysisResponse
     *
     * @param DescribeLogAnalysisRequest $request
     *
     * @return DescribeLogAnalysisResponse
     */
    public function describeLogAnalysis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLogAnalysisWithOptions($request, $runtime);
    }

    /**
     * Queries mount target information.
     *
     * @param request - DescribeMountTargetsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMountTargetsResponse
     *
     * @param DescribeMountTargetsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeMountTargetsResponse
     */
    public function describeMountTargetsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dualStackMountTargetDomain) {
            @$query['DualStackMountTargetDomain'] = $request->dualStackMountTargetDomain;
        }

        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->mountTargetDomain) {
            @$query['MountTargetDomain'] = $request->mountTargetDomain;
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
            'action' => 'DescribeMountTargets',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeMountTargetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries mount target information.
     *
     * @param request - DescribeMountTargetsRequest
     *
     * @returns DescribeMountTargetsResponse
     *
     * @param DescribeMountTargetsRequest $request
     *
     * @return DescribeMountTargetsResponse
     */
    public function describeMountTargets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMountTargetsWithOptions($request, $runtime);
    }

    /**
     * Queries the list of mounted clients.
     *
     * @remarks
     * - Only General-purpose NAS file systems support this operation.
     * - The client list displays client IP addresses that have read or write access to the file system within the last minute. Some mounted client IP addresses that have not accessed the file system may not appear in this list.
     *
     * @param request - DescribeMountedClientsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMountedClientsResponse
     *
     * @param DescribeMountedClientsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeMountedClientsResponse
     */
    public function describeMountedClientsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientIP) {
            @$query['ClientIP'] = $request->clientIP;
        }

        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->mountTargetDomain) {
            @$query['MountTargetDomain'] = $request->mountTargetDomain;
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
            'action' => 'DescribeMountedClients',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeMountedClientsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of mounted clients.
     *
     * @remarks
     * - Only General-purpose NAS file systems support this operation.
     * - The client list displays client IP addresses that have read or write access to the file system within the last minute. Some mounted client IP addresses that have not accessed the file system may not appear in this list.
     *
     * @param request - DescribeMountedClientsRequest
     *
     * @returns DescribeMountedClientsResponse
     *
     * @param DescribeMountedClientsRequest $request
     *
     * @return DescribeMountedClientsResponse
     */
    public function describeMountedClients($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMountedClientsWithOptions($request, $runtime);
    }

    /**
     * Queries whether the NFS ACL feature is enabled for a specified file system.
     *
     * @remarks
     * Only General-purpose NAS NFS file systems support this feature.
     *
     * @param request - DescribeNfsAclRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeNfsAclResponse
     *
     * @param DescribeNfsAclRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeNfsAclResponse
     */
    public function describeNfsAclWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeNfsAcl',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeNfsAclResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries whether the NFS ACL feature is enabled for a specified file system.
     *
     * @remarks
     * Only General-purpose NAS NFS file systems support this feature.
     *
     * @param request - DescribeNfsAclRequest
     *
     * @returns DescribeNfsAclResponse
     *
     * @param DescribeNfsAclRequest $request
     *
     * @return DescribeNfsAclResponse
     */
    public function describeNfsAcl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNfsAclWithOptions($request, $runtime);
    }

    /**
     * Queries the export directories of a protocol service.
     *
     * @remarks
     * This operation is applicable only to Cloud Parallel File Storage (CPFS) file systems.
     *
     * @param request - DescribeProtocolMountTargetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeProtocolMountTargetResponse
     *
     * @param DescribeProtocolMountTargetRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeProtocolMountTargetResponse
     */
    public function describeProtocolMountTargetWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->filters) {
            @$query['Filters'] = $request->filters;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->protocolServiceIds) {
            @$query['ProtocolServiceIds'] = $request->protocolServiceIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeProtocolMountTarget',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeProtocolMountTargetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the export directories of a protocol service.
     *
     * @remarks
     * This operation is applicable only to Cloud Parallel File Storage (CPFS) file systems.
     *
     * @param request - DescribeProtocolMountTargetRequest
     *
     * @returns DescribeProtocolMountTargetResponse
     *
     * @param DescribeProtocolMountTargetRequest $request
     *
     * @return DescribeProtocolMountTargetResponse
     */
    public function describeProtocolMountTarget($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeProtocolMountTargetWithOptions($request, $runtime);
    }

    /**
     * Queries protocol service information.
     *
     * @remarks
     * This operation is applicable only to Cloud Parallel File Storage (CPFS) file systems.
     *
     * @param request - DescribeProtocolServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeProtocolServiceResponse
     *
     * @param DescribeProtocolServiceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeProtocolServiceResponse
     */
    public function describeProtocolServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->protocolServiceIds) {
            @$query['ProtocolServiceIds'] = $request->protocolServiceIds;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeProtocolService',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeProtocolServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries protocol service information.
     *
     * @remarks
     * This operation is applicable only to Cloud Parallel File Storage (CPFS) file systems.
     *
     * @param request - DescribeProtocolServiceRequest
     *
     * @returns DescribeProtocolServiceResponse
     *
     * @param DescribeProtocolServiceRequest $request
     *
     * @return DescribeProtocolServiceResponse
     */
    public function describeProtocolService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeProtocolServiceWithOptions($request, $runtime);
    }

    /**
     * Queries the available Alibaba Cloud regions.
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
        if (null !== $request->fileSystemType) {
            @$query['FileSystemType'] = $request->fileSystemType;
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
            'action' => 'DescribeRegions',
            'version' => '2017-06-26',
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
     * Queries the available Alibaba Cloud regions.
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
     * Queries the SMB AD ACL feature.
     *
     * @remarks
     * - Before you begin: Before calling this API, ensure that the KMS service is activated in the target region. You can activate it by calling the [Kms.OpenKmsService](https://www.alibabacloud.com/help/en/kms/key-management-service/developer-reference/api-kms-2016-01-20-openkmsservice) API or through the console. This restriction also applies to unencrypted file systems where EncryptType=0.
     *
     * @param request - DescribeSmbAclRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSmbAclResponse
     *
     * @param DescribeSmbAclRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeSmbAclResponse
     */
    public function describeSmbAclWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSmbAcl',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSmbAclResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the SMB AD ACL feature.
     *
     * @remarks
     * - Before you begin: Before calling this API, ensure that the KMS service is activated in the target region. You can activate it by calling the [Kms.OpenKmsService](https://www.alibabacloud.com/help/en/kms/key-management-service/developer-reference/api-kms-2016-01-20-openkmsservice) API or through the console. This restriction also applies to unencrypted file systems where EncryptType=0.
     *
     * @param request - DescribeSmbAclRequest
     *
     * @returns DescribeSmbAclResponse
     *
     * @param DescribeSmbAclRequest $request
     *
     * @return DescribeSmbAclResponse
     */
    public function describeSmbAcl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSmbAclWithOptions($request, $runtime);
    }

    /**
     * Queries information about one or more snapshots of a specified file system.
     *
     * @remarks
     * <props="china">
     * - This feature is in free public preview. During the public preview, the [File Storage NAS Service-Level Agreement (SLA)](https://terms.aliyun.com/legal-agreement/terms/suit_bu1_ali_cloud/suit_bu1_ali_cloud201803061139_99860.html?spm=a2c4g.11186623.0.0.5c895ff2YPLrwe) is not guaranteed.
     * -   Only Advanced Extreme NAS file systems support this feature.
     * <props="intl">
     * -  This feature is in free public preview. During the public preview, the [File Storage NAS Service-Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed.
     * - Only Advanced Extreme NAS file systems support this feature.
     *
     * @param request - DescribeSnapshotsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSnapshotsResponse
     *
     * @param DescribeSnapshotsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeSnapshotsResponse
     */
    public function describeSnapshotsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->fileSystemType) {
            @$query['FileSystemType'] = $request->fileSystemType;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->snapshotIds) {
            @$query['SnapshotIds'] = $request->snapshotIds;
        }

        if (null !== $request->snapshotName) {
            @$query['SnapshotName'] = $request->snapshotName;
        }

        if (null !== $request->snapshotType) {
            @$query['SnapshotType'] = $request->snapshotType;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSnapshots',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSnapshotsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about one or more snapshots of a specified file system.
     *
     * @remarks
     * <props="china">
     * - This feature is in free public preview. During the public preview, the [File Storage NAS Service-Level Agreement (SLA)](https://terms.aliyun.com/legal-agreement/terms/suit_bu1_ali_cloud/suit_bu1_ali_cloud201803061139_99860.html?spm=a2c4g.11186623.0.0.5c895ff2YPLrwe) is not guaranteed.
     * -   Only Advanced Extreme NAS file systems support this feature.
     * <props="intl">
     * -  This feature is in free public preview. During the public preview, the [File Storage NAS Service-Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed.
     * - Only Advanced Extreme NAS file systems support this feature.
     *
     * @param request - DescribeSnapshotsRequest
     *
     * @returns DescribeSnapshotsResponse
     *
     * @param DescribeSnapshotsRequest $request
     *
     * @return DescribeSnapshotsResponse
     */
    public function describeSnapshots($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSnapshotsWithOptions($request, $runtime);
    }

    /**
     * Queries the list of storage plans.
     *
     * @param request - DescribeStoragePackagesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeStoragePackagesResponse
     *
     * @param DescribeStoragePackagesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeStoragePackagesResponse
     */
    public function describeStoragePackagesWithOptions($request, $runtime)
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

        if (null !== $request->useUTCDateTime) {
            @$query['UseUTCDateTime'] = $request->useUTCDateTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeStoragePackages',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeStoragePackagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of storage plans.
     *
     * @param request - DescribeStoragePackagesRequest
     *
     * @returns DescribeStoragePackagesResponse
     *
     * @param DescribeStoragePackagesRequest $request
     *
     * @return DescribeStoragePackagesResponse
     */
    public function describeStoragePackages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeStoragePackagesWithOptions($request, $runtime);
    }

    /**
     * Queries all zones in a region and the file system types supported by each zone.
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
        $query = [];
        if (null !== $request->fileSystemType) {
            @$query['FileSystemType'] = $request->fileSystemType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeZones',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeZonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries all zones in a region and the file system types supported by each zone.
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
     * Dissociates a Virtual Storage Channel (VSC) device from a file system.
     *
     * @remarks
     * - Only CPFS for Lingjun supports this feature.
     * - Batch operations are supported. In batch mode, only one VscId can be associated with multiple FileSystemId values. This means the ResourceIds.VscId values must be the same.
     *
     * @param request - DetachVscFromFilesystemsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetachVscFromFilesystemsResponse
     *
     * @param DetachVscFromFilesystemsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DetachVscFromFilesystemsResponse
     */
    public function detachVscFromFilesystemsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->resourceIds) {
            @$query['ResourceIds'] = $request->resourceIds;
        }

        if (null !== $request->roleChain) {
            @$query['RoleChain'] = $request->roleChain;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DetachVscFromFilesystems',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetachVscFromFilesystemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Dissociates a Virtual Storage Channel (VSC) device from a file system.
     *
     * @remarks
     * - Only CPFS for Lingjun supports this feature.
     * - Batch operations are supported. In batch mode, only one VscId can be associated with multiple FileSystemId values. This means the ResourceIds.VscId values must be the same.
     *
     * @param request - DetachVscFromFilesystemsRequest
     *
     * @returns DetachVscFromFilesystemsResponse
     *
     * @param DetachVscFromFilesystemsRequest $request
     *
     * @return DetachVscFromFilesystemsResponse
     */
    public function detachVscFromFilesystems($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachVscFromFilesystemsWithOptions($request, $runtime);
    }

    /**
     * Disables the recycle bin feature for a General-purpose NAS file system and deletes all data in the recycle bin.
     *
     * @remarks
     * - Only General-purpose NAS file systems support this feature.
     * - Disabling the recycle bin permanently deletes all files in the recycle bin.
     * - After a disabled recycle bin is re-enabled, the recycle bin is empty. Files deleted before the recycle bin was re-enabled cannot be recovered.
     *
     * @param request - DisableAndCleanRecycleBinRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableAndCleanRecycleBinResponse
     *
     * @param DisableAndCleanRecycleBinRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DisableAndCleanRecycleBinResponse
     */
    public function disableAndCleanRecycleBinWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisableAndCleanRecycleBin',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableAndCleanRecycleBinResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables the recycle bin feature for a General-purpose NAS file system and deletes all data in the recycle bin.
     *
     * @remarks
     * - Only General-purpose NAS file systems support this feature.
     * - Disabling the recycle bin permanently deletes all files in the recycle bin.
     * - After a disabled recycle bin is re-enabled, the recycle bin is empty. Files deleted before the recycle bin was re-enabled cannot be recovered.
     *
     * @param request - DisableAndCleanRecycleBinRequest
     *
     * @returns DisableAndCleanRecycleBinResponse
     *
     * @param DisableAndCleanRecycleBinRequest $request
     *
     * @return DisableAndCleanRecycleBinResponse
     */
    public function disableAndCleanRecycleBin($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableAndCleanRecycleBinWithOptions($request, $runtime);
    }

    /**
     * Disables EBS Lens.
     *
     * @remarks
     * - This operation is currently in invitational preview. To use this feature, submit a ticket.
     *
     * @param request - DisableDataInsightRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableDataInsightResponse
     *
     * @param DisableDataInsightRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DisableDataInsightResponse
     */
    public function disableDataInsightWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisableDataInsight',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableDataInsightResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables EBS Lens.
     *
     * @remarks
     * - This operation is currently in invitational preview. To use this feature, submit a ticket.
     *
     * @param request - DisableDataInsightRequest
     *
     * @returns DisableDataInsightResponse
     *
     * @param DisableDataInsightRequest $request
     *
     * @return DisableDataInsightResponse
     */
    public function disableDataInsight($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableDataInsightWithOptions($request, $runtime);
    }

    /**
     * Disables the NFS ACL feature.
     *
     * @remarks
     * Only General-purpose NAS NFS file systems support this feature.
     *
     * @param request - DisableNfsAclRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableNfsAclResponse
     *
     * @param DisableNfsAclRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DisableNfsAclResponse
     */
    public function disableNfsAclWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisableNfsAcl',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableNfsAclResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables the NFS ACL feature.
     *
     * @remarks
     * Only General-purpose NAS NFS file systems support this feature.
     *
     * @param request - DisableNfsAclRequest
     *
     * @returns DisableNfsAclResponse
     *
     * @param DisableNfsAclRequest $request
     *
     * @return DisableNfsAclResponse
     */
    public function disableNfsAcl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableNfsAclWithOptions($request, $runtime);
    }

    /**
     * Disables the SMB AD ACL feature.
     *
     * @remarks
     * - Before you begin: Before calling this API, make sure that Key Management Service (KMS) is activated in the target region. You can activate KMS by calling the [Kms.OpenKmsService](https://www.alibabacloud.com/help/en/kms/key-management-service/developer-reference/api-kms-2016-01-20-openkmsservice) API or by using the console. The file system protocol type must be SMB. You can call [DescribeFileSystems](https://www.alibabacloud.com/help/en/nas/developer-reference/api-nas-2017-06-26-describefilesystems) to verify the file system protocol type.
     *
     * @param request - DisableSmbAclRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableSmbAclResponse
     *
     * @param DisableSmbAclRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DisableSmbAclResponse
     */
    public function disableSmbAclWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisableSmbAcl',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableSmbAclResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables the SMB AD ACL feature.
     *
     * @remarks
     * - Before you begin: Before calling this API, make sure that Key Management Service (KMS) is activated in the target region. You can activate KMS by calling the [Kms.OpenKmsService](https://www.alibabacloud.com/help/en/kms/key-management-service/developer-reference/api-kms-2016-01-20-openkmsservice) API or by using the console. The file system protocol type must be SMB. You can call [DescribeFileSystems](https://www.alibabacloud.com/help/en/nas/developer-reference/api-nas-2017-06-26-describefilesystems) to verify the file system protocol type.
     *
     * @param request - DisableSmbAclRequest
     *
     * @returns DisableSmbAclResponse
     *
     * @param DisableSmbAclRequest $request
     *
     * @return DisableSmbAclResponse
     */
    public function disableSmbAcl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableSmbAclWithOptions($request, $runtime);
    }

    /**
     * Enables EBS Lens.
     *
     * @remarks
     * - This feature is currently in invitational preview. To use this feature, submit a ticket.
     *
     * @param request - EnableDataInsightRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableDataInsightResponse
     *
     * @param EnableDataInsightRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return EnableDataInsightResponse
     */
    public function enableDataInsightWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableDataInsight',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableDataInsightResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables EBS Lens.
     *
     * @remarks
     * - This feature is currently in invitational preview. To use this feature, submit a ticket.
     *
     * @param request - EnableDataInsightRequest
     *
     * @returns EnableDataInsightResponse
     *
     * @param EnableDataInsightRequest $request
     *
     * @return EnableDataInsightResponse
     */
    public function enableDataInsight($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableDataInsightWithOptions($request, $runtime);
    }

    /**
     * Enables the NFS ACL feature.
     *
     * @remarks
     * Only General-purpose NAS NFS file systems support this feature.
     *
     * @param request - EnableNfsAclRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableNfsAclResponse
     *
     * @param EnableNfsAclRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return EnableNfsAclResponse
     */
    public function enableNfsAclWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableNfsAcl',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableNfsAclResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables the NFS ACL feature.
     *
     * @remarks
     * Only General-purpose NAS NFS file systems support this feature.
     *
     * @param request - EnableNfsAclRequest
     *
     * @returns EnableNfsAclResponse
     *
     * @param EnableNfsAclRequest $request
     *
     * @return EnableNfsAclResponse
     */
    public function enableNfsAcl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableNfsAclWithOptions($request, $runtime);
    }

    /**
     * Enables the recycle bin feature.
     *
     * @remarks
     * Only General-purpose NAS file systems support this operation.
     *
     * @param request - EnableRecycleBinRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableRecycleBinResponse
     *
     * @param EnableRecycleBinRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return EnableRecycleBinResponse
     */
    public function enableRecycleBinWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->reservedDays) {
            @$query['ReservedDays'] = $request->reservedDays;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableRecycleBin',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableRecycleBinResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables the recycle bin feature.
     *
     * @remarks
     * Only General-purpose NAS file systems support this operation.
     *
     * @param request - EnableRecycleBinRequest
     *
     * @returns EnableRecycleBinResponse
     *
     * @param EnableRecycleBinRequest $request
     *
     * @return EnableRecycleBinResponse
     */
    public function enableRecycleBin($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableRecycleBinWithOptions($request, $runtime);
    }

    /**
     * Enables the SMB AD ACL feature.
     *
     * @remarks
     * - By connecting the mount target of an SMB file system to an AD domain, you can implement user identity authentication management and file-level access permissions control in the AD domain. Before you mount and use an SMB file system as an AD domain user, you must register a service for the SMB file system in the AD domain, generate a keytab file, and upload the file to the NAS console to enable the SMB ACL feature. [Generate a keytab file](https://help.aliyun.com/document_detail/154930.html).
     * - Before you begin: Before invoking this operation, confirm that Key Management Service (KMS) is activated in the target area. You can invoke the [Kms.OpenKmsService](https://www.alibabacloud.com/help/en/kms/key-management-service/developer-reference/api-kms-2016-01-20-openkmsservice) operation or activate KMS in the console.
     *
     * @param request - EnableSmbAclRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableSmbAclResponse
     *
     * @param EnableSmbAclRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return EnableSmbAclResponse
     */
    public function enableSmbAclWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->keytab) {
            @$query['Keytab'] = $request->keytab;
        }

        if (null !== $request->keytabMd5) {
            @$query['KeytabMd5'] = $request->keytabMd5;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableSmbAcl',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableSmbAclResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables the SMB AD ACL feature.
     *
     * @remarks
     * - By connecting the mount target of an SMB file system to an AD domain, you can implement user identity authentication management and file-level access permissions control in the AD domain. Before you mount and use an SMB file system as an AD domain user, you must register a service for the SMB file system in the AD domain, generate a keytab file, and upload the file to the NAS console to enable the SMB ACL feature. [Generate a keytab file](https://help.aliyun.com/document_detail/154930.html).
     * - Before you begin: Before invoking this operation, confirm that Key Management Service (KMS) is activated in the target area. You can invoke the [Kms.OpenKmsService](https://www.alibabacloud.com/help/en/kms/key-management-service/developer-reference/api-kms-2016-01-20-openkmsservice) operation or activate KMS in the console.
     *
     * @param request - EnableSmbAclRequest
     *
     * @returns EnableSmbAclResponse
     *
     * @param EnableSmbAclRequest $request
     *
     * @return EnableSmbAclResponse
     */
    public function enableSmbAcl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableSmbAclWithOptions($request, $runtime);
    }

    /**
     * Queries an Agentic space.
     *
     * @remarks
     * Applies to agentic-type file systems.
     *
     * @param request - GetAgenticSpaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAgenticSpaceResponse
     *
     * @param GetAgenticSpaceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetAgenticSpaceResponse
     */
    public function getAgenticSpaceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agenticSpaceId) {
            @$query['AgenticSpaceId'] = $request->agenticSpaceId;
        }

        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAgenticSpace',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAgenticSpaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries an Agentic space.
     *
     * @remarks
     * Applies to agentic-type file systems.
     *
     * @param request - GetAgenticSpaceRequest
     *
     * @returns GetAgenticSpaceResponse
     *
     * @param GetAgenticSpaceRequest $request
     *
     * @return GetAgenticSpaceResponse
     */
    public function getAgenticSpace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAgenticSpaceWithOptions($request, $runtime);
    }

    /**
     * Queries whether a specified directory contains Infrequent Access (IA) storage class or Archive storage class files, or queries whether a specified file is an IA storage class or Archive storage class file.
     *
     * @remarks
     * Only General-purpose NAS file systems support this feature.
     *
     * @param request - GetDirectoryOrFilePropertiesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDirectoryOrFilePropertiesResponse
     *
     * @param GetDirectoryOrFilePropertiesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GetDirectoryOrFilePropertiesResponse
     */
    public function getDirectoryOrFilePropertiesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->path) {
            @$query['Path'] = $request->path;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDirectoryOrFileProperties',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDirectoryOrFilePropertiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries whether a specified directory contains Infrequent Access (IA) storage class or Archive storage class files, or queries whether a specified file is an IA storage class or Archive storage class file.
     *
     * @remarks
     * Only General-purpose NAS file systems support this feature.
     *
     * @param request - GetDirectoryOrFilePropertiesRequest
     *
     * @returns GetDirectoryOrFilePropertiesResponse
     *
     * @param GetDirectoryOrFilePropertiesRequest $request
     *
     * @return GetDirectoryOrFilePropertiesResponse
     */
    public function getDirectoryOrFileProperties($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDirectoryOrFilePropertiesWithOptions($request, $runtime);
    }

    /**
     * Queries information about a created Fileset.
     *
     * @remarks
     * Only CPFS 2.2.0 and later and CPFS for Lingjun 2.7.0 and later support Filesets. You can view the version information on the file system details page in the console.
     *
     * @param request - GetFilesetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetFilesetResponse
     *
     * @param GetFilesetRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetFilesetResponse
     */
    public function getFilesetWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->fsetId) {
            @$query['FsetId'] = $request->fsetId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetFileset',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetFilesetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about a created Fileset.
     *
     * @remarks
     * Only CPFS 2.2.0 and later and CPFS for Lingjun 2.7.0 and later support Filesets. You can view the version information on the file system details page in the console.
     *
     * @param request - GetFilesetRequest
     *
     * @returns GetFilesetResponse
     *
     * @param GetFilesetRequest $request
     *
     * @return GetFilesetResponse
     */
    public function getFileset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFilesetWithOptions($request, $runtime);
    }

    /**
     * Queries the export directory information of a protocol service.
     *
     * @remarks
     * Queries the export directory information of a protocol service.
     * **Before you begin**
     * Before you call this operation, make sure that each dependent resource in the following three-layer resource model already exists:
     * 1. **File system (FileSystem)**: Call [DescribeFileSystems](https://www.alibabacloud.com/help/en/nas/developer-reference/api-nas-2017-06-26-describefilesystems) to obtain the FileSystemId.
     * 2. **Protocol service (ProtocolService)**: Call [DescribeProtocolService](https://www.alibabacloud.com/help/en/cpfs/cpfsonecs/developer-reference/api-nas-2017-06-26-describeprotocolservice-cpfs) to obtain the ProtocolServiceId, or call [CreateProtocolService](https://www.alibabacloud.com/help/en/cpfs/cpfsonecs/developer-reference/api-nas-2017-06-26-createprotocolservice-cpfs) to create one.
     * 3. **Export directory (ProtocolMountTarget)**: Call [CreateProtocolMountTarget](https://www.alibabacloud.com/help/en/cpfs/cpfsonecs/developer-reference/api-nas-2017-06-26-createprotocolmounttarget-cpfs) to create an export directory and obtain the ExportId, or call [DescribeProtocolMountTarget](https://www.alibabacloud.com/help/en/cpfs/cpfsonecs/developer-reference/api-nas-2017-06-26-describeprotocolmounttarget-cpfs) to query the ExportId.
     *
     * @param request - GetProtocolMountTargetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetProtocolMountTargetResponse
     *
     * @param GetProtocolMountTargetRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetProtocolMountTargetResponse
     */
    public function getProtocolMountTargetWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->exportId) {
            @$query['ExportId'] = $request->exportId;
        }

        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->protocolServiceId) {
            @$query['ProtocolServiceId'] = $request->protocolServiceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetProtocolMountTarget',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetProtocolMountTargetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the export directory information of a protocol service.
     *
     * @remarks
     * Queries the export directory information of a protocol service.
     * **Before you begin**
     * Before you call this operation, make sure that each dependent resource in the following three-layer resource model already exists:
     * 1. **File system (FileSystem)**: Call [DescribeFileSystems](https://www.alibabacloud.com/help/en/nas/developer-reference/api-nas-2017-06-26-describefilesystems) to obtain the FileSystemId.
     * 2. **Protocol service (ProtocolService)**: Call [DescribeProtocolService](https://www.alibabacloud.com/help/en/cpfs/cpfsonecs/developer-reference/api-nas-2017-06-26-describeprotocolservice-cpfs) to obtain the ProtocolServiceId, or call [CreateProtocolService](https://www.alibabacloud.com/help/en/cpfs/cpfsonecs/developer-reference/api-nas-2017-06-26-createprotocolservice-cpfs) to create one.
     * 3. **Export directory (ProtocolMountTarget)**: Call [CreateProtocolMountTarget](https://www.alibabacloud.com/help/en/cpfs/cpfsonecs/developer-reference/api-nas-2017-06-26-createprotocolmounttarget-cpfs) to create an export directory and obtain the ExportId, or call [DescribeProtocolMountTarget](https://www.alibabacloud.com/help/en/cpfs/cpfsonecs/developer-reference/api-nas-2017-06-26-describeprotocolmounttarget-cpfs) to query the ExportId.
     *
     * @param request - GetProtocolMountTargetRequest
     *
     * @returns GetProtocolMountTargetResponse
     *
     * @param GetProtocolMountTargetRequest $request
     *
     * @return GetProtocolMountTargetResponse
     */
    public function getProtocolMountTarget($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getProtocolMountTargetWithOptions($request, $runtime);
    }

    /**
     * Queries the recycle bin configuration of a specified General-purpose NAS file system.
     *
     * @remarks
     * Only General-purpose NAS file systems support this feature.
     *
     * @param request - GetRecycleBinAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRecycleBinAttributeResponse
     *
     * @param GetRecycleBinAttributeRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetRecycleBinAttributeResponse
     */
    public function getRecycleBinAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetRecycleBinAttribute',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetRecycleBinAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the recycle bin configuration of a specified General-purpose NAS file system.
     *
     * @remarks
     * Only General-purpose NAS file systems support this feature.
     *
     * @param request - GetRecycleBinAttributeRequest
     *
     * @returns GetRecycleBinAttributeResponse
     *
     * @param GetRecycleBinAttributeRequest $request
     *
     * @return GetRecycleBinAttributeResponse
     */
    public function getRecycleBinAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRecycleBinAttributeWithOptions($request, $runtime);
    }

    /**
     * Queries access point information.
     *
     * @remarks
     * Only General-purpose NAS NFS file systems are supported.
     *
     * @param request - ListAccessPointsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAccessPointsResponse
     *
     * @param ListAccessPointsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListAccessPointsResponse
     */
    public function listAccessPointsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->filters) {
            @$query['Filters'] = $request->filters;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAccessPoints',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAccessPointsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries access point information.
     *
     * @remarks
     * Only General-purpose NAS NFS file systems are supported.
     *
     * @param request - ListAccessPointsRequest
     *
     * @returns ListAccessPointsResponse
     *
     * @param ListAccessPointsRequest $request
     *
     * @return ListAccessPointsResponse
     */
    public function listAccessPoints($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAccessPointsWithOptions($request, $runtime);
    }

    /**
     * Retrieves the directory structure of EBS Lens.
     *
     * @remarks
     * - This feature is currently in invitational preview. To use this feature, submit a ticket.
     *
     * @param request - ListDataInsightDirectoriesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDataInsightDirectoriesResponse
     *
     * @param ListDataInsightDirectoriesRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListDataInsightDirectoriesResponse
     */
    public function listDataInsightDirectoriesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->parentDir) {
            @$query['ParentDir'] = $request->parentDir;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDataInsightDirectories',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDataInsightDirectoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the directory structure of EBS Lens.
     *
     * @remarks
     * - This feature is currently in invitational preview. To use this feature, submit a ticket.
     *
     * @param request - ListDataInsightDirectoriesRequest
     *
     * @returns ListDataInsightDirectoriesResponse
     *
     * @param ListDataInsightDirectoriesRequest $request
     *
     * @return ListDataInsightDirectoriesResponse
     */
    public function listDataInsightDirectories($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataInsightDirectoriesWithOptions($request, $runtime);
    }

    /**
     * Retrieves the list of IA storage class files and subdirectories that contain IA storage class files under a specified directory in a General-purpose NAS file system.
     *
     * @remarks
     * Only General-purpose NAS file systems support this feature.
     *
     * @param request - ListDirectoriesAndFilesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDirectoriesAndFilesResponse
     *
     * @param ListDirectoriesAndFilesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListDirectoriesAndFilesResponse
     */
    public function listDirectoriesAndFilesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->directoryOnly) {
            @$query['DirectoryOnly'] = $request->directoryOnly;
        }

        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->path) {
            @$query['Path'] = $request->path;
        }

        if (null !== $request->storageType) {
            @$query['StorageType'] = $request->storageType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDirectoriesAndFiles',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDirectoriesAndFilesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the list of IA storage class files and subdirectories that contain IA storage class files under a specified directory in a General-purpose NAS file system.
     *
     * @remarks
     * Only General-purpose NAS file systems support this feature.
     *
     * @param request - ListDirectoriesAndFilesRequest
     *
     * @returns ListDirectoriesAndFilesResponse
     *
     * @param ListDirectoriesAndFilesRequest $request
     *
     * @return ListDirectoriesAndFilesResponse
     */
    public function listDirectoriesAndFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDirectoriesAndFilesWithOptions($request, $runtime);
    }

    /**
     * Retrieves a list of created data retrieval tasks.
     *
     * @remarks
     * Only General-purpose NAS file systems support this feature.
     *
     * @param request - ListLifecycleRetrieveJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListLifecycleRetrieveJobsResponse
     *
     * @param ListLifecycleRetrieveJobsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListLifecycleRetrieveJobsResponse
     */
    public function listLifecycleRetrieveJobsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->storageType) {
            @$query['StorageType'] = $request->storageType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListLifecycleRetrieveJobs',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListLifecycleRetrieveJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a list of created data retrieval tasks.
     *
     * @remarks
     * Only General-purpose NAS file systems support this feature.
     *
     * @param request - ListLifecycleRetrieveJobsRequest
     *
     * @returns ListLifecycleRetrieveJobsResponse
     *
     * @param ListLifecycleRetrieveJobsRequest $request
     *
     * @return ListLifecycleRetrieveJobsResponse
     */
    public function listLifecycleRetrieveJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLifecycleRetrieveJobsWithOptions($request, $runtime);
    }

    /**
     * Queries directories on which delete operations were recently performed.
     *
     * @remarks
     * Only General-purpose NAS file systems support this feature.
     * **Before you begin**
     * Before calling this operation, make sure that the recycle bin feature is enabled for the file system. If the recycle bin is not enabled, this operation cannot return the list of recently deleted directories.
     * **Enable the recycle bin**
     * To enable the recycle bin feature, call the [EnableRecycleBin](https://www.alibabacloud.com/help/en/nas/developer-reference/api-nas-2017-06-26-enablerecyclebin) operation. After the recycle bin is enabled, deleted directories in the file system are moved to the recycle bin. You can call this operation to query the list of recently deleted directories.
     *
     * @param request - ListRecentlyRecycledDirectoriesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRecentlyRecycledDirectoriesResponse
     *
     * @param ListRecentlyRecycledDirectoriesRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ListRecentlyRecycledDirectoriesResponse
     */
    public function listRecentlyRecycledDirectoriesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRecentlyRecycledDirectories',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListRecentlyRecycledDirectoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries directories on which delete operations were recently performed.
     *
     * @remarks
     * Only General-purpose NAS file systems support this feature.
     * **Before you begin**
     * Before calling this operation, make sure that the recycle bin feature is enabled for the file system. If the recycle bin is not enabled, this operation cannot return the list of recently deleted directories.
     * **Enable the recycle bin**
     * To enable the recycle bin feature, call the [EnableRecycleBin](https://www.alibabacloud.com/help/en/nas/developer-reference/api-nas-2017-06-26-enablerecyclebin) operation. After the recycle bin is enabled, deleted directories in the file system are moved to the recycle bin. You can call this operation to query the list of recently deleted directories.
     *
     * @param request - ListRecentlyRecycledDirectoriesRequest
     *
     * @returns ListRecentlyRecycledDirectoriesResponse
     *
     * @param ListRecentlyRecycledDirectoriesRequest $request
     *
     * @return ListRecentlyRecycledDirectoriesResponse
     */
    public function listRecentlyRecycledDirectories($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRecentlyRecycledDirectoriesWithOptions($request, $runtime);
    }

    /**
     * Queries information about one or more tasks in the recycle bin.
     *
     * @remarks
     * - Only General-purpose NAS file systems support this feature.
     * - You can query up to 50 most recently executed tasks.
     *
     * @param request - ListRecycleBinJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRecycleBinJobsResponse
     *
     * @param ListRecycleBinJobsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListRecycleBinJobsResponse
     */
    public function listRecycleBinJobsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRecycleBinJobs',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListRecycleBinJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about one or more tasks in the recycle bin.
     *
     * @remarks
     * - Only General-purpose NAS file systems support this feature.
     * - You can query up to 50 most recently executed tasks.
     *
     * @param request - ListRecycleBinJobsRequest
     *
     * @returns ListRecycleBinJobsResponse
     *
     * @param ListRecycleBinJobsRequest $request
     *
     * @return ListRecycleBinJobsResponse
     */
    public function listRecycleBinJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRecycleBinJobsWithOptions($request, $runtime);
    }

    /**
     * Queries deleted files or directories.
     *
     * @remarks
     * Only General-purpose NAS file systems support this feature.
     *
     * @param request - ListRecycledDirectoriesAndFilesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRecycledDirectoriesAndFilesResponse
     *
     * @param ListRecycledDirectoriesAndFilesRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ListRecycledDirectoriesAndFilesResponse
     */
    public function listRecycledDirectoriesAndFilesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRecycledDirectoriesAndFiles',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListRecycledDirectoriesAndFilesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries deleted files or directories.
     *
     * @remarks
     * Only General-purpose NAS file systems support this feature.
     *
     * @param request - ListRecycledDirectoriesAndFilesRequest
     *
     * @returns ListRecycledDirectoriesAndFilesResponse
     *
     * @param ListRecycledDirectoriesAndFilesRequest $request
     *
     * @return ListRecycledDirectoriesAndFilesResponse
     */
    public function listRecycledDirectoriesAndFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRecycledDirectoriesAndFilesWithOptions($request, $runtime);
    }

    /**
     * Queries a list of tags.
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

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
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
            'version' => '2017-06-26',
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
     * Queries a list of tags.
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
     * Modifies a permission group.
     *
     * @remarks
     * The default permission group (DEFAULT_VPC_GROUP_NAME) cannot be modified.
     *
     * @param request - ModifyAccessGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyAccessGroupResponse
     *
     * @param ModifyAccessGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyAccessGroupResponse
     */
    public function modifyAccessGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessGroupName) {
            @$query['AccessGroupName'] = $request->accessGroupName;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->fileSystemType) {
            @$query['FileSystemType'] = $request->fileSystemType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyAccessGroup',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyAccessGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a permission group.
     *
     * @remarks
     * The default permission group (DEFAULT_VPC_GROUP_NAME) cannot be modified.
     *
     * @param request - ModifyAccessGroupRequest
     *
     * @returns ModifyAccessGroupResponse
     *
     * @param ModifyAccessGroupRequest $request
     *
     * @return ModifyAccessGroupResponse
     */
    public function modifyAccessGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAccessGroupWithOptions($request, $runtime);
    }

    /**
     * Modifies access point information.
     *
     * @remarks
     * Only General-purpose NAS NFS file systems support this feature.
     *
     * @param request - ModifyAccessPointRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyAccessPointResponse
     *
     * @param ModifyAccessPointRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyAccessPointResponse
     */
    public function modifyAccessPointWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessGroup) {
            @$query['AccessGroup'] = $request->accessGroup;
        }

        if (null !== $request->accessPointId) {
            @$query['AccessPointId'] = $request->accessPointId;
        }

        if (null !== $request->accessPointName) {
            @$query['AccessPointName'] = $request->accessPointName;
        }

        if (null !== $request->enabledRam) {
            @$query['EnabledRam'] = $request->enabledRam;
        }

        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyAccessPoint',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyAccessPointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies access point information.
     *
     * @remarks
     * Only General-purpose NAS NFS file systems support this feature.
     *
     * @param request - ModifyAccessPointRequest
     *
     * @returns ModifyAccessPointResponse
     *
     * @param ModifyAccessPointRequest $request
     *
     * @return ModifyAccessPointResponse
     */
    public function modifyAccessPoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAccessPointWithOptions($request, $runtime);
    }

    /**
     * Modifies a permission rule in a permission group.
     *
     * @remarks
     * Rules in the default permission group (DEFAULT_VPC_GROUP_NAME) cannot be modified.
     *
     * @param request - ModifyAccessRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyAccessRuleResponse
     *
     * @param ModifyAccessRuleRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyAccessRuleResponse
     */
    public function modifyAccessRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessGroupName) {
            @$query['AccessGroupName'] = $request->accessGroupName;
        }

        if (null !== $request->accessRuleId) {
            @$query['AccessRuleId'] = $request->accessRuleId;
        }

        if (null !== $request->fileSystemType) {
            @$query['FileSystemType'] = $request->fileSystemType;
        }

        if (null !== $request->ipv6SourceCidrIp) {
            @$query['Ipv6SourceCidrIp'] = $request->ipv6SourceCidrIp;
        }

        if (null !== $request->priority) {
            @$query['Priority'] = $request->priority;
        }

        if (null !== $request->RWAccessType) {
            @$query['RWAccessType'] = $request->RWAccessType;
        }

        if (null !== $request->sourceCidrIp) {
            @$query['SourceCidrIp'] = $request->sourceCidrIp;
        }

        if (null !== $request->userAccessType) {
            @$query['UserAccessType'] = $request->userAccessType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyAccessRule',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyAccessRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a permission rule in a permission group.
     *
     * @remarks
     * Rules in the default permission group (DEFAULT_VPC_GROUP_NAME) cannot be modified.
     *
     * @param request - ModifyAccessRuleRequest
     *
     * @returns ModifyAccessRuleResponse
     *
     * @param ModifyAccessRuleRequest $request
     *
     * @return ModifyAccessRuleResponse
     */
    public function modifyAccessRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAccessRuleWithOptions($request, $runtime);
    }

    /**
     * Modifies an Agentic space.
     *
     * @remarks
     * *Prerequisites**
     * Before you call this operation, complete the following preparations:
     * 1. **Obtain an AgenticSpaceId**: Call the [CreateAgenticSpace](https://www.alibabacloud.com/help/en/nas/developer-reference/api-nas-2017-06-26-createagenticspace) operation to create an Agentic space and obtain the AgenticSpaceId.
     * 2. **Create an Agentic file system**: When you call the [CreateFileSystem](https://www.alibabacloud.com/help/en/cpfs/cpfsonecs/developer-reference/api-nas-2017-06-26-createfilesystem-cpfs) operation to create a file system, set the following parameters:
     *    - `StorageType`: Set to `Agentic`.
     *    - `ProtocolType`: Set to `NFS`.
     *    - **Supported regions**: The Agentic storage type is available only in specific regions and zones. Check the console for details.
     * **Usage notes**
     * - This operation applies only to Agentic file systems.
     * - Complete call chain example:
     *   1. Call CreateFileSystem to create an Agentic file system (StorageType=Agentic, ProtocolType=NFS).
     *   2. After the file system is created (status is Running), call CreateAgenticSpace to create an Agentic space.
     *   3. Call ModifyAgenticSpace to modify the Agentic space configurations.
     *
     * @param request - ModifyAgenticSpaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyAgenticSpaceResponse
     *
     * @param ModifyAgenticSpaceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyAgenticSpaceResponse
     */
    public function modifyAgenticSpaceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agenticSpaceId) {
            @$query['AgenticSpaceId'] = $request->agenticSpaceId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyAgenticSpace',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyAgenticSpaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies an Agentic space.
     *
     * @remarks
     * *Prerequisites**
     * Before you call this operation, complete the following preparations:
     * 1. **Obtain an AgenticSpaceId**: Call the [CreateAgenticSpace](https://www.alibabacloud.com/help/en/nas/developer-reference/api-nas-2017-06-26-createagenticspace) operation to create an Agentic space and obtain the AgenticSpaceId.
     * 2. **Create an Agentic file system**: When you call the [CreateFileSystem](https://www.alibabacloud.com/help/en/cpfs/cpfsonecs/developer-reference/api-nas-2017-06-26-createfilesystem-cpfs) operation to create a file system, set the following parameters:
     *    - `StorageType`: Set to `Agentic`.
     *    - `ProtocolType`: Set to `NFS`.
     *    - **Supported regions**: The Agentic storage type is available only in specific regions and zones. Check the console for details.
     * **Usage notes**
     * - This operation applies only to Agentic file systems.
     * - Complete call chain example:
     *   1. Call CreateFileSystem to create an Agentic file system (StorageType=Agentic, ProtocolType=NFS).
     *   2. After the file system is created (status is Running), call CreateAgenticSpace to create an Agentic space.
     *   3. Call ModifyAgenticSpace to modify the Agentic space configurations.
     *
     * @param request - ModifyAgenticSpaceRequest
     *
     * @returns ModifyAgenticSpaceResponse
     *
     * @param ModifyAgenticSpaceRequest $request
     *
     * @return ModifyAgenticSpaceResponse
     */
    public function modifyAgenticSpace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAgenticSpaceWithOptions($request, $runtime);
    }

    /**
     * Modifies an automatic snapshot policy. After you modify an automatic snapshot policy, file systems to which the policy has been applied immediately execute the modified policy.
     *
     * @remarks
     * <props="china">
     * - This feature is in free public preview. During the public preview, the [File Storage NAS Service-Level Agreement (SLA)](https://terms.aliyun.com/legal-agreement/terms/suit_bu1_ali_cloud/suit_bu1_ali_cloud201803061139_99860.html?spm=a2c4g.11186623.0.0.5c895ff2YPLrwe) is not guaranteed.
     * - Only Advanced Extreme NAS file systems support this feature.
     * <props="intl">
     * - This feature is in free public preview. During the public preview, the [File Storage NAS Service-Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed.
     * - Only Advanced Extreme NAS file systems support this feature.
     *
     * @param request - ModifyAutoSnapshotPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyAutoSnapshotPolicyResponse
     *
     * @param ModifyAutoSnapshotPolicyRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyAutoSnapshotPolicyResponse
     */
    public function modifyAutoSnapshotPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoSnapshotPolicyId) {
            @$query['AutoSnapshotPolicyId'] = $request->autoSnapshotPolicyId;
        }

        if (null !== $request->autoSnapshotPolicyName) {
            @$query['AutoSnapshotPolicyName'] = $request->autoSnapshotPolicyName;
        }

        if (null !== $request->repeatWeekdays) {
            @$query['RepeatWeekdays'] = $request->repeatWeekdays;
        }

        if (null !== $request->retentionDays) {
            @$query['RetentionDays'] = $request->retentionDays;
        }

        if (null !== $request->timePoints) {
            @$query['TimePoints'] = $request->timePoints;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyAutoSnapshotPolicy',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyAutoSnapshotPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies an automatic snapshot policy. After you modify an automatic snapshot policy, file systems to which the policy has been applied immediately execute the modified policy.
     *
     * @remarks
     * <props="china">
     * - This feature is in free public preview. During the public preview, the [File Storage NAS Service-Level Agreement (SLA)](https://terms.aliyun.com/legal-agreement/terms/suit_bu1_ali_cloud/suit_bu1_ali_cloud201803061139_99860.html?spm=a2c4g.11186623.0.0.5c895ff2YPLrwe) is not guaranteed.
     * - Only Advanced Extreme NAS file systems support this feature.
     * <props="intl">
     * - This feature is in free public preview. During the public preview, the [File Storage NAS Service-Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed.
     * - Only Advanced Extreme NAS file systems support this feature.
     *
     * @param request - ModifyAutoSnapshotPolicyRequest
     *
     * @returns ModifyAutoSnapshotPolicyResponse
     *
     * @param ModifyAutoSnapshotPolicyRequest $request
     *
     * @return ModifyAutoSnapshotPolicyResponse
     */
    public function modifyAutoSnapshotPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAutoSnapshotPolicyWithOptions($request, $runtime);
    }

    /**
     * Modifies an access point of a CPFS for Lingjun file system.
     *
     * @remarks
     * Modifies an access point of a CPFS for Lingjun file system.
     *
     * @param request - ModifyCpfsAccessPointRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyCpfsAccessPointResponse
     *
     * @param ModifyCpfsAccessPointRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyCpfsAccessPointResponse
     */
    public function modifyCpfsAccessPointWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessPointId) {
            @$query['AccessPointId'] = $request->accessPointId;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyCpfsAccessPoint',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyCpfsAccessPointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies an access point of a CPFS for Lingjun file system.
     *
     * @remarks
     * Modifies an access point of a CPFS for Lingjun file system.
     *
     * @param request - ModifyCpfsAccessPointRequest
     *
     * @returns ModifyCpfsAccessPointResponse
     *
     * @param ModifyCpfsAccessPointRequest $request
     *
     * @return ModifyCpfsAccessPointResponse
     */
    public function modifyCpfsAccessPoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCpfsAccessPointWithOptions($request, $runtime);
    }

    /**
     * Modifies the attributes of a data flow.
     *
     * @remarks
     * - CPFS 2.2.0 and later and CPFS for Lingjun 2.4.0 and later support data streams.
     * - You can modify the properties of a data stream only when the data stream is in the `Running (Normal)` state.
     * - Modifying a data stream typically takes 2 to 5 minutes. You can call [DescribeDataFlows](https://help.aliyun.com/document_detail/2402270.html) to query the status of the data stream modification.
     * - CPFS data stream specifications:
     *     - Data stream bandwidth (Throughput) supports three specifications: 600 MB/s, 1,200 MB/s, and 1,500 MB/s. The data stream bandwidth specifies the maximum transmission bandwidth that the data stream can achieve during data import or export.
     *     - Inventory check: If you set DryRun to true, you can check whether the resources required to modify the data stream to the specified specification are sufficient.
     * - CPFS billing
     *   Modifying the data stream bandwidth (Throughput) incurs data stream bandwidth fees. Familiarize yourself with the billable methods of CPFS in advance. For details, see [CPFS billing](https://help.aliyun.com/document_detail/111858.html).
     *
     * @param request - ModifyDataFlowRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDataFlowResponse
     *
     * @param ModifyDataFlowRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ModifyDataFlowResponse
     */
    public function modifyDataFlowWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dataFlowId) {
            @$query['DataFlowId'] = $request->dataFlowId;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->throughput) {
            @$query['Throughput'] = $request->throughput;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDataFlow',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDataFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the attributes of a data flow.
     *
     * @remarks
     * - CPFS 2.2.0 and later and CPFS for Lingjun 2.4.0 and later support data streams.
     * - You can modify the properties of a data stream only when the data stream is in the `Running (Normal)` state.
     * - Modifying a data stream typically takes 2 to 5 minutes. You can call [DescribeDataFlows](https://help.aliyun.com/document_detail/2402270.html) to query the status of the data stream modification.
     * - CPFS data stream specifications:
     *     - Data stream bandwidth (Throughput) supports three specifications: 600 MB/s, 1,200 MB/s, and 1,500 MB/s. The data stream bandwidth specifies the maximum transmission bandwidth that the data stream can achieve during data import or export.
     *     - Inventory check: If you set DryRun to true, you can check whether the resources required to modify the data stream to the specified specification are sufficient.
     * - CPFS billing
     *   Modifying the data stream bandwidth (Throughput) incurs data stream bandwidth fees. Familiarize yourself with the billable methods of CPFS in advance. For details, see [CPFS billing](https://help.aliyun.com/document_detail/111858.html).
     *
     * @param request - ModifyDataFlowRequest
     *
     * @returns ModifyDataFlowResponse
     *
     * @param ModifyDataFlowRequest $request
     *
     * @return ModifyDataFlowResponse
     */
    public function modifyDataFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDataFlowWithOptions($request, $runtime);
    }

    /**
     * Modifies the automatic update configuration of a dataflow.
     *
     * @remarks
     * - This operation applies only to Cloud Parallel File Storage (CPFS) file systems.
     * - Only CPFS 2.2.0 and later support dataflows. You can view the version information on the file system details page in the console.
     * - You can modify the automatic update configuration of a dataflow only when the dataflow is in the `Running` or `Stopped` state.
     * - Modifying the automatic update configuration typically takes 2 to 5 minutes. You can call [DescribeDataFlows](https://help.aliyun.com/document_detail/2402270.html) to query the status of the automatic update task.
     *
     * @param request - ModifyDataFlowAutoRefreshRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDataFlowAutoRefreshResponse
     *
     * @param ModifyDataFlowAutoRefreshRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyDataFlowAutoRefreshResponse
     */
    public function modifyDataFlowAutoRefreshWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoRefreshInterval) {
            @$query['AutoRefreshInterval'] = $request->autoRefreshInterval;
        }

        if (null !== $request->autoRefreshPolicy) {
            @$query['AutoRefreshPolicy'] = $request->autoRefreshPolicy;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dataFlowId) {
            @$query['DataFlowId'] = $request->dataFlowId;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDataFlowAutoRefresh',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDataFlowAutoRefreshResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the automatic update configuration of a dataflow.
     *
     * @remarks
     * - This operation applies only to Cloud Parallel File Storage (CPFS) file systems.
     * - Only CPFS 2.2.0 and later support dataflows. You can view the version information on the file system details page in the console.
     * - You can modify the automatic update configuration of a dataflow only when the dataflow is in the `Running` or `Stopped` state.
     * - Modifying the automatic update configuration typically takes 2 to 5 minutes. You can call [DescribeDataFlows](https://help.aliyun.com/document_detail/2402270.html) to query the status of the automatic update task.
     *
     * @param request - ModifyDataFlowAutoRefreshRequest
     *
     * @returns ModifyDataFlowAutoRefreshResponse
     *
     * @param ModifyDataFlowAutoRefreshRequest $request
     *
     * @return ModifyDataFlowAutoRefreshResponse
     */
    public function modifyDataFlowAutoRefresh($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDataFlowAutoRefreshWithOptions($request, $runtime);
    }

    /**
     * Modifies the description of a file system.
     *
     * @param tmpReq - ModifyFileSystemRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyFileSystemResponse
     *
     * @param ModifyFileSystemRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyFileSystemResponse
     */
    public function modifyFileSystemWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModifyFileSystemShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->autoUpgradeConfig) {
            $request->autoUpgradeConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->autoUpgradeConfig, 'AutoUpgradeConfig', 'json');
        }

        if (null !== $tmpReq->options) {
            $request->optionsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->options, 'Options', 'json');
        }

        $query = [];
        if (null !== $request->autoUpgradeConfigShrink) {
            @$query['AutoUpgradeConfig'] = $request->autoUpgradeConfigShrink;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->optionsShrink) {
            @$query['Options'] = $request->optionsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyFileSystem',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyFileSystemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the description of a file system.
     *
     * @param request - ModifyFileSystemRequest
     *
     * @returns ModifyFileSystemResponse
     *
     * @param ModifyFileSystemRequest $request
     *
     * @return ModifyFileSystemResponse
     */
    public function modifyFileSystem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyFileSystemWithOptions($request, $runtime);
    }

    /**
     * Modifies the information of a fileset.
     *
     * @remarks
     * Only CPFS 2.2.0 and later and CPFS for Lingjun 2.7.0 and later support modifying fileset information.
     *
     * @param request - ModifyFilesetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyFilesetResponse
     *
     * @param ModifyFilesetRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ModifyFilesetResponse
     */
    public function modifyFilesetWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->deletionProtection) {
            @$query['DeletionProtection'] = $request->deletionProtection;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->fsetId) {
            @$query['FsetId'] = $request->fsetId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyFileset',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyFilesetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the information of a fileset.
     *
     * @remarks
     * Only CPFS 2.2.0 and later and CPFS for Lingjun 2.7.0 and later support modifying fileset information.
     *
     * @param request - ModifyFilesetRequest
     *
     * @returns ModifyFilesetResponse
     *
     * @param ModifyFilesetRequest $request
     *
     * @return ModifyFilesetResponse
     */
    public function modifyFileset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyFilesetWithOptions($request, $runtime);
    }

    /**
     * Modifies the LDAP configuration.
     *
     * @remarks
     * This operation supports only Cloud Parallel File Storage (CPFS) parallel file systems.
     *
     * @deprecated OpenAPI ModifyLDAPConfig is deprecated
     *
     * @param request - ModifyLDAPConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyLDAPConfigResponse
     *
     * @param ModifyLDAPConfigRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyLDAPConfigResponse
     */
    public function modifyLDAPConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bindDN) {
            @$query['BindDN'] = $request->bindDN;
        }

        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->searchBase) {
            @$query['SearchBase'] = $request->searchBase;
        }

        if (null !== $request->URI) {
            @$query['URI'] = $request->URI;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyLDAPConfig',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyLDAPConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Modifies the LDAP configuration.
     *
     * @remarks
     * This operation supports only Cloud Parallel File Storage (CPFS) parallel file systems.
     *
     * @deprecated OpenAPI ModifyLDAPConfig is deprecated
     *
     * @param request - ModifyLDAPConfigRequest
     *
     * @returns ModifyLDAPConfigResponse
     *
     * @param ModifyLDAPConfigRequest $request
     *
     * @return ModifyLDAPConfigResponse
     */
    public function modifyLDAPConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyLDAPConfigWithOptions($request, $runtime);
    }

    /**
     * Modifies a lifecycle management policy.
     *
     * @remarks
     * This feature is supported only by General-purpose NAS file systems.
     *
     * @param request - ModifyLifecyclePolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyLifecyclePolicyResponse
     *
     * @param ModifyLifecyclePolicyRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyLifecyclePolicyResponse
     */
    public function modifyLifecyclePolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->lifecyclePolicyId) {
            @$query['LifecyclePolicyId'] = $request->lifecyclePolicyId;
        }

        if (null !== $request->lifecyclePolicyName) {
            @$query['LifecyclePolicyName'] = $request->lifecyclePolicyName;
        }

        if (null !== $request->lifecycleRuleName) {
            @$query['LifecycleRuleName'] = $request->lifecycleRuleName;
        }

        if (null !== $request->path) {
            @$query['Path'] = $request->path;
        }

        if (null !== $request->storageType) {
            @$query['StorageType'] = $request->storageType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyLifecyclePolicy',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyLifecyclePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a lifecycle management policy.
     *
     * @remarks
     * This feature is supported only by General-purpose NAS file systems.
     *
     * @param request - ModifyLifecyclePolicyRequest
     *
     * @returns ModifyLifecyclePolicyResponse
     *
     * @param ModifyLifecyclePolicyRequest $request
     *
     * @return ModifyLifecyclePolicyResponse
     */
    public function modifyLifecyclePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyLifecyclePolicyWithOptions($request, $runtime);
    }

    /**
     * Modifies mount target information.
     *
     * @remarks
     * Only mount target information of General-purpose NAS or Extreme NAS file systems can be modified.
     *
     * @param request - ModifyMountTargetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyMountTargetResponse
     *
     * @param ModifyMountTargetRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyMountTargetResponse
     */
    public function modifyMountTargetWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessGroupName) {
            @$query['AccessGroupName'] = $request->accessGroupName;
        }

        if (null !== $request->accessPointAccessOnly) {
            @$query['AccessPointAccessOnly'] = $request->accessPointAccessOnly;
        }

        if (null !== $request->dualStackMountTargetDomain) {
            @$query['DualStackMountTargetDomain'] = $request->dualStackMountTargetDomain;
        }

        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->mountTargetDomain) {
            @$query['MountTargetDomain'] = $request->mountTargetDomain;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyMountTarget',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyMountTargetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies mount target information.
     *
     * @remarks
     * Only mount target information of General-purpose NAS or Extreme NAS file systems can be modified.
     *
     * @param request - ModifyMountTargetRequest
     *
     * @returns ModifyMountTargetResponse
     *
     * @param ModifyMountTargetRequest $request
     *
     * @return ModifyMountTargetResponse
     */
    public function modifyMountTarget($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyMountTargetWithOptions($request, $runtime);
    }

    /**
     * Modifies the export directory parameters of a protocol service. You can modify only the permission group and description. The VPC ID and vSwitch ID cannot be modified. To change them, delete the export directory and create a new one.
     *
     * @remarks
     * - Before you begin: This operation applies only to Cloud Parallel File Storage (CPFS) file systems.
     * - Status prerequisite: Before calling this operation, the export directory corresponding to ExportId must be in the AVAILABLE state. Call [DescribeProtocolMountTarget](https://www.alibabacloud.com/help/en/cpfs/cpfsonecs/developer-reference/api-nas-2017-06-26-describeprotocolmounttarget-cpfs) to query the status and wait until the creation is complete before retrying.
     * - Dependency chain:
     *   1. Call [DescribeFileSystems](https://www.alibabacloud.com/help/en/cpfs/cpfsonecs/developer-reference/api-nas-2017-06-26-describefilesystems-cpfs) (with FileSystemType set to cpfs) to obtain the CPFS file system.
     *   2. Call [DescribeProtocolService](https://www.alibabacloud.com/help/en/cpfs/cpfsonecs/developer-reference/api-nas-2017-06-26-describeprotocolservice-cpfs) to verify that the protocol service is in the Running state.
     *   3. Call [DescribeProtocolMountTarget](https://www.alibabacloud.com/help/en/cpfs/cpfsonecs/developer-reference/api-nas-2017-06-26-describeprotocolmounttarget-cpfs) to verify that the export directory is in the AVAILABLE state.
     *   4. If no export directory exists, call [CreateProtocolMountTarget](https://www.alibabacloud.com/help/en/cpfs/cpfsonecs/developer-reference/api-nas-2017-06-26-createprotocolmounttarget-cpfs) to create one first.
     *
     * @param request - ModifyProtocolMountTargetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyProtocolMountTargetResponse
     *
     * @param ModifyProtocolMountTargetRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyProtocolMountTargetResponse
     */
    public function modifyProtocolMountTargetWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->exportId) {
            @$query['ExportId'] = $request->exportId;
        }

        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->protocolServiceId) {
            @$query['ProtocolServiceId'] = $request->protocolServiceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyProtocolMountTarget',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyProtocolMountTargetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the export directory parameters of a protocol service. You can modify only the permission group and description. The VPC ID and vSwitch ID cannot be modified. To change them, delete the export directory and create a new one.
     *
     * @remarks
     * - Before you begin: This operation applies only to Cloud Parallel File Storage (CPFS) file systems.
     * - Status prerequisite: Before calling this operation, the export directory corresponding to ExportId must be in the AVAILABLE state. Call [DescribeProtocolMountTarget](https://www.alibabacloud.com/help/en/cpfs/cpfsonecs/developer-reference/api-nas-2017-06-26-describeprotocolmounttarget-cpfs) to query the status and wait until the creation is complete before retrying.
     * - Dependency chain:
     *   1. Call [DescribeFileSystems](https://www.alibabacloud.com/help/en/cpfs/cpfsonecs/developer-reference/api-nas-2017-06-26-describefilesystems-cpfs) (with FileSystemType set to cpfs) to obtain the CPFS file system.
     *   2. Call [DescribeProtocolService](https://www.alibabacloud.com/help/en/cpfs/cpfsonecs/developer-reference/api-nas-2017-06-26-describeprotocolservice-cpfs) to verify that the protocol service is in the Running state.
     *   3. Call [DescribeProtocolMountTarget](https://www.alibabacloud.com/help/en/cpfs/cpfsonecs/developer-reference/api-nas-2017-06-26-describeprotocolmounttarget-cpfs) to verify that the export directory is in the AVAILABLE state.
     *   4. If no export directory exists, call [CreateProtocolMountTarget](https://www.alibabacloud.com/help/en/cpfs/cpfsonecs/developer-reference/api-nas-2017-06-26-createprotocolmounttarget-cpfs) to create one first.
     *
     * @param request - ModifyProtocolMountTargetRequest
     *
     * @returns ModifyProtocolMountTargetResponse
     *
     * @param ModifyProtocolMountTargetRequest $request
     *
     * @return ModifyProtocolMountTargetResponse
     */
    public function modifyProtocolMountTarget($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyProtocolMountTargetWithOptions($request, $runtime);
    }

    /**
     * Modifies a protocol service. You can modify the description of a protocol service.
     *
     * @remarks
     * This operation applies only to Cloud Parallel File Storage (CPFS) file systems.
     * - This operation allows you to modify the description of a protocol service.
     * - You can obtain the protocol service ID (ProtocolServiceId) in the following ways:
     *   - From the response of the [CreateProtocolService](https://www.alibabacloud.com/help/en/cpfs/cpfsonecs/developer-reference/api-nas-2017-06-26-createprotocolservice-cpfs) operation after you create a protocol service.
     *   - From the response of the [DescribeProtocolService](https://www.alibabacloud.com/help/en/cpfs/cpfsonecs/developer-reference/api-nas-2017-06-26-describeprotocolservice-cpfs) operation that queries existing protocol services.
     *
     * @param request - ModifyProtocolServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyProtocolServiceResponse
     *
     * @param ModifyProtocolServiceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyProtocolServiceResponse
     */
    public function modifyProtocolServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->protocolServiceId) {
            @$query['ProtocolServiceId'] = $request->protocolServiceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyProtocolService',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyProtocolServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a protocol service. You can modify the description of a protocol service.
     *
     * @remarks
     * This operation applies only to Cloud Parallel File Storage (CPFS) file systems.
     * - This operation allows you to modify the description of a protocol service.
     * - You can obtain the protocol service ID (ProtocolServiceId) in the following ways:
     *   - From the response of the [CreateProtocolService](https://www.alibabacloud.com/help/en/cpfs/cpfsonecs/developer-reference/api-nas-2017-06-26-createprotocolservice-cpfs) operation after you create a protocol service.
     *   - From the response of the [DescribeProtocolService](https://www.alibabacloud.com/help/en/cpfs/cpfsonecs/developer-reference/api-nas-2017-06-26-describeprotocolservice-cpfs) operation that queries existing protocol services.
     *
     * @param request - ModifyProtocolServiceRequest
     *
     * @returns ModifyProtocolServiceResponse
     *
     * @param ModifyProtocolServiceRequest $request
     *
     * @return ModifyProtocolServiceResponse
     */
    public function modifyProtocolService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyProtocolServiceWithOptions($request, $runtime);
    }

    /**
     * Updates the SMB AD ACL feature.
     *
     * @remarks
     * Before you begin: Make sure that Key Management Service (KMS) is activated in the target region before you call this operation. Call sequence: Activate KMS → Call EnableSmbAcl to initialize → Call ModifySmbAcl.
     *
     * @param request - ModifySmbAclRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifySmbAclResponse
     *
     * @param ModifySmbAclRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ModifySmbAclResponse
     */
    public function modifySmbAclWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->enableAnonymousAccess) {
            @$query['EnableAnonymousAccess'] = $request->enableAnonymousAccess;
        }

        if (null !== $request->encryptData) {
            @$query['EncryptData'] = $request->encryptData;
        }

        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->homeDirPath) {
            @$query['HomeDirPath'] = $request->homeDirPath;
        }

        if (null !== $request->keytab) {
            @$query['Keytab'] = $request->keytab;
        }

        if (null !== $request->keytabMd5) {
            @$query['KeytabMd5'] = $request->keytabMd5;
        }

        if (null !== $request->rejectUnencryptedAccess) {
            @$query['RejectUnencryptedAccess'] = $request->rejectUnencryptedAccess;
        }

        if (null !== $request->superAdminSid) {
            @$query['SuperAdminSid'] = $request->superAdminSid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifySmbAcl',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifySmbAclResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the SMB AD ACL feature.
     *
     * @remarks
     * Before you begin: Make sure that Key Management Service (KMS) is activated in the target region before you call this operation. Call sequence: Activate KMS → Call EnableSmbAcl to initialize → Call ModifySmbAcl.
     *
     * @param request - ModifySmbAclRequest
     *
     * @returns ModifySmbAclResponse
     *
     * @param ModifySmbAclRequest $request
     *
     * @return ModifySmbAclResponse
     */
    public function modifySmbAcl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySmbAclWithOptions($request, $runtime);
    }

    /**
     * Activates the Apsara File Storage NAS (NAS) service.
     *
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OpenNASServiceResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return OpenNASServiceResponse
     */
    public function openNASServiceWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'OpenNASService',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OpenNASServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Activates the Apsara File Storage NAS (NAS) service.
     *
     * @returns OpenNASServiceResponse
     *
     * @return OpenNASServiceResponse
     */
    public function openNASService()
    {
        $runtime = new RuntimeOptions([]);

        return $this->openNASServiceWithOptions($runtime);
    }

    /**
     * Removes a client from the blacklist in Cloud Parallel File Storage (CPFS) to resume its write requests.
     *
     * @remarks
     * This operation supports only CPFS parallel file systems.
     *
     * @deprecated OpenAPI RemoveClientFromBlackList is deprecated
     *
     * @param request - RemoveClientFromBlackListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveClientFromBlackListResponse
     *
     * @param RemoveClientFromBlackListRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return RemoveClientFromBlackListResponse
     */
    public function removeClientFromBlackListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientIP) {
            @$query['ClientIP'] = $request->clientIP;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveClientFromBlackList',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveClientFromBlackListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Removes a client from the blacklist in Cloud Parallel File Storage (CPFS) to resume its write requests.
     *
     * @remarks
     * This operation supports only CPFS parallel file systems.
     *
     * @deprecated OpenAPI RemoveClientFromBlackList is deprecated
     *
     * @param request - RemoveClientFromBlackListRequest
     *
     * @returns RemoveClientFromBlackListResponse
     *
     * @param RemoveClientFromBlackListRequest $request
     *
     * @return RemoveClientFromBlackListResponse
     */
    public function removeClientFromBlackList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeClientFromBlackListWithOptions($request, $runtime);
    }

    /**
     * Rolls back a file system to the state of a historical snapshot.
     *
     * @remarks
     * <props="china">
     * - This feature is in free public preview. During the public preview, the [File Storage NAS Service-Level Agreement (SLA)](https://terms.aliyun.com/legal-agreement/terms/suit_bu1_ali_cloud/suit_bu1_ali_cloud201803061139_99860.html?spm=a2c4g.11186623.0.0.5c895ff2YPLrwe) is not guaranteed.
     * - Only Advanced Extreme NAS file systems support this feature.
     * - The file system must be in the Normal state.
     * - The specified SnapshotId parameter must be a historical snapshot created from the same file system specified by FileSystemId.
     * - Dependency chain:
     * - (1) Grant the AliyunNASManageENIRole role in the Resource Access Management (RAM) console.
     * - (2) Call CreateFileSystem (FileSystemType=extreme, StorageType=advance).
     * - (3) Call DescribeFileSystems and poll until Status=Running.
     * - (4) Call CreateSnapshot (FileSystemId=ID from the previous step).
     * - (5) Call DescribeSnapshots and poll until Status=available.
     * - (6) Call ResetFileSystem (FileSystemId, SnapshotId).
     * <props="intl">
     * - This feature is in free public preview. During the public preview, the [File Storage NAS Service-Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed.
     * - Only Advanced Extreme NAS file systems support this feature.
     * - The file system must be in the Normal state.
     * - The specified SnapshotId parameter must be a historical snapshot created from the same file system specified by FileSystemId.
     * - Dependency chain:
     * - (1) Grant the AliyunNASManageENIRole role in the Resource Access Management (RAM) console.
     * - (2) Call CreateFileSystem (FileSystemType=extreme, StorageType=advance).
     * - (3) Call DescribeFileSystems and poll until Status=Running.
     * - (4) Call CreateSnapshot (FileSystemId=ID from the previous step).
     * - (5) Call DescribeSnapshots and poll until Status=available.
     * - (6) Call ResetFileSystem (FileSystemId, SnapshotId).
     *
     * @param request - ResetFileSystemRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResetFileSystemResponse
     *
     * @param ResetFileSystemRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ResetFileSystemResponse
     */
    public function resetFileSystemWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->snapshotId) {
            @$query['SnapshotId'] = $request->snapshotId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ResetFileSystem',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResetFileSystemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Rolls back a file system to the state of a historical snapshot.
     *
     * @remarks
     * <props="china">
     * - This feature is in free public preview. During the public preview, the [File Storage NAS Service-Level Agreement (SLA)](https://terms.aliyun.com/legal-agreement/terms/suit_bu1_ali_cloud/suit_bu1_ali_cloud201803061139_99860.html?spm=a2c4g.11186623.0.0.5c895ff2YPLrwe) is not guaranteed.
     * - Only Advanced Extreme NAS file systems support this feature.
     * - The file system must be in the Normal state.
     * - The specified SnapshotId parameter must be a historical snapshot created from the same file system specified by FileSystemId.
     * - Dependency chain:
     * - (1) Grant the AliyunNASManageENIRole role in the Resource Access Management (RAM) console.
     * - (2) Call CreateFileSystem (FileSystemType=extreme, StorageType=advance).
     * - (3) Call DescribeFileSystems and poll until Status=Running.
     * - (4) Call CreateSnapshot (FileSystemId=ID from the previous step).
     * - (5) Call DescribeSnapshots and poll until Status=available.
     * - (6) Call ResetFileSystem (FileSystemId, SnapshotId).
     * <props="intl">
     * - This feature is in free public preview. During the public preview, the [File Storage NAS Service-Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed.
     * - Only Advanced Extreme NAS file systems support this feature.
     * - The file system must be in the Normal state.
     * - The specified SnapshotId parameter must be a historical snapshot created from the same file system specified by FileSystemId.
     * - Dependency chain:
     * - (1) Grant the AliyunNASManageENIRole role in the Resource Access Management (RAM) console.
     * - (2) Call CreateFileSystem (FileSystemType=extreme, StorageType=advance).
     * - (3) Call DescribeFileSystems and poll until Status=Running.
     * - (4) Call CreateSnapshot (FileSystemId=ID from the previous step).
     * - (5) Call DescribeSnapshots and poll until Status=available.
     * - (6) Call ResetFileSystem (FileSystemId, SnapshotId).
     *
     * @param request - ResetFileSystemRequest
     *
     * @returns ResetFileSystemResponse
     *
     * @param ResetFileSystemRequest $request
     *
     * @return ResetFileSystemResponse
     */
    public function resetFileSystem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetFileSystemWithOptions($request, $runtime);
    }

    /**
     * Retries a data retrieval task that is in the failed state.
     *
     * @remarks
     * Only General-purpose NAS file systems support this feature.
     *
     * @param request - RetryLifecycleRetrieveJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RetryLifecycleRetrieveJobResponse
     *
     * @param RetryLifecycleRetrieveJobRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return RetryLifecycleRetrieveJobResponse
     */
    public function retryLifecycleRetrieveJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RetryLifecycleRetrieveJob',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RetryLifecycleRetrieveJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retries a data retrieval task that is in the failed state.
     *
     * @remarks
     * Only General-purpose NAS file systems support this feature.
     *
     * @param request - RetryLifecycleRetrieveJobRequest
     *
     * @returns RetryLifecycleRetrieveJobResponse
     *
     * @param RetryLifecycleRetrieveJobRequest $request
     *
     * @return RetryLifecycleRetrieveJobResponse
     */
    public function retryLifecycleRetrieveJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->retryLifecycleRetrieveJobWithOptions($request, $runtime);
    }

    /**
     * Sets the quota for an Agentic space.
     *
     * @remarks
     * *Before you begin**
     * Before you call this operation, complete the following preparations:
     * 1. **Obtain an AgenticSpaceId**: Call the [CreateAgenticSpace](https://www.alibabacloud.com/help/en/nas/developer-reference/api-nas-2017-06-26-createagenticspace) operation to create an Agentic space and obtain the AgenticSpaceId.
     * 2. **Create an Agentic file system**: When you call the [CreateFileSystem](https://www.alibabacloud.com/help/en/cpfs/cpfsonecs/developer-reference/api-nas-2017-06-26-createfilesystem-cpfs) operation to create a file system, set `StorageType=Agentic`.
     *    - **Supported regions**: The Agentic storage type is available only in specific regions and zones. Check the console for details.
     * **Usage notes**
     * - This operation applies only to Agentic file systems.
     * - Quota statistics have a 15-minute delay. The actual usage takes effect 15 minutes later.
     *
     * @param request - SetAgenticSpaceQuotaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetAgenticSpaceQuotaResponse
     *
     * @param SetAgenticSpaceQuotaRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SetAgenticSpaceQuotaResponse
     */
    public function setAgenticSpaceQuotaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agenticSpaceId) {
            @$query['AgenticSpaceId'] = $request->agenticSpaceId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->fileCountLimit) {
            @$query['FileCountLimit'] = $request->fileCountLimit;
        }

        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->sizeLimit) {
            @$query['SizeLimit'] = $request->sizeLimit;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetAgenticSpaceQuota',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetAgenticSpaceQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sets the quota for an Agentic space.
     *
     * @remarks
     * *Before you begin**
     * Before you call this operation, complete the following preparations:
     * 1. **Obtain an AgenticSpaceId**: Call the [CreateAgenticSpace](https://www.alibabacloud.com/help/en/nas/developer-reference/api-nas-2017-06-26-createagenticspace) operation to create an Agentic space and obtain the AgenticSpaceId.
     * 2. **Create an Agentic file system**: When you call the [CreateFileSystem](https://www.alibabacloud.com/help/en/cpfs/cpfsonecs/developer-reference/api-nas-2017-06-26-createfilesystem-cpfs) operation to create a file system, set `StorageType=Agentic`.
     *    - **Supported regions**: The Agentic storage type is available only in specific regions and zones. Check the console for details.
     * **Usage notes**
     * - This operation applies only to Agentic file systems.
     * - Quota statistics have a 15-minute delay. The actual usage takes effect 15 minutes later.
     *
     * @param request - SetAgenticSpaceQuotaRequest
     *
     * @returns SetAgenticSpaceQuotaResponse
     *
     * @param SetAgenticSpaceQuotaRequest $request
     *
     * @return SetAgenticSpaceQuotaResponse
     */
    public function setAgenticSpaceQuota($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setAgenticSpaceQuotaWithOptions($request, $runtime);
    }

    /**
     * Sets a directory quota for a file system.
     *
     * @remarks
     * Only General-purpose NAS file systems support the directory quota feature.
     *
     * @param request - SetDirQuotaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetDirQuotaResponse
     *
     * @param SetDirQuotaRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return SetDirQuotaResponse
     */
    public function setDirQuotaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileCountLimit) {
            @$query['FileCountLimit'] = $request->fileCountLimit;
        }

        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->path) {
            @$query['Path'] = $request->path;
        }

        if (null !== $request->quotaType) {
            @$query['QuotaType'] = $request->quotaType;
        }

        if (null !== $request->sizeLimit) {
            @$query['SizeLimit'] = $request->sizeLimit;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        if (null !== $request->userType) {
            @$query['UserType'] = $request->userType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetDirQuota',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetDirQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sets a directory quota for a file system.
     *
     * @remarks
     * Only General-purpose NAS file systems support the directory quota feature.
     *
     * @param request - SetDirQuotaRequest
     *
     * @returns SetDirQuotaResponse
     *
     * @param SetDirQuotaRequest $request
     *
     * @return SetDirQuotaResponse
     */
    public function setDirQuota($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDirQuotaWithOptions($request, $runtime);
    }

    /**
     * Sets a quota for a fileset.
     *
     * @remarks
     * - Only CPFS for Lingjun 2.7.0 and later support setting quotas for filesets.
     * - The minimum fileset capacity quota is 10 GiB, and the capacity can be increased in increments of 1 GiB.
     * - A fileset supports up to 10 billion files or directories. The minimum value is 10,000, and the value can be increased in increments of 1.
     * - When you modify a directory quota, the quota capacity or file count must be greater than the used capacity or file count.
     * - You must specify at least one of the capacity limit and the file count limit.
     * - Quota statistics have a 15-minute delay. The actual usage takes effect 15 minutes later.
     *
     * @param request - SetFilesetQuotaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetFilesetQuotaResponse
     *
     * @param SetFilesetQuotaRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SetFilesetQuotaResponse
     */
    public function setFilesetQuotaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->fileCountLimit) {
            @$query['FileCountLimit'] = $request->fileCountLimit;
        }

        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->fsetId) {
            @$query['FsetId'] = $request->fsetId;
        }

        if (null !== $request->sizeLimit) {
            @$query['SizeLimit'] = $request->sizeLimit;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetFilesetQuota',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetFilesetQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sets a quota for a fileset.
     *
     * @remarks
     * - Only CPFS for Lingjun 2.7.0 and later support setting quotas for filesets.
     * - The minimum fileset capacity quota is 10 GiB, and the capacity can be increased in increments of 1 GiB.
     * - A fileset supports up to 10 billion files or directories. The minimum value is 10,000, and the value can be increased in increments of 1.
     * - When you modify a directory quota, the quota capacity or file count must be greater than the used capacity or file count.
     * - You must specify at least one of the capacity limit and the file count limit.
     * - Quota statistics have a 15-minute delay. The actual usage takes effect 15 minutes later.
     *
     * @param request - SetFilesetQuotaRequest
     *
     * @returns SetFilesetQuotaResponse
     *
     * @param SetFilesetQuotaRequest $request
     *
     * @return SetFilesetQuotaResponse
     */
    public function setFilesetQuota($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setFilesetQuotaWithOptions($request, $runtime);
    }

    /**
     * Enables a data flow.
     *
     * @remarks
     * - This operation is applicable only to Cloud Parallel File Storage (CPFS) file systems.
     * - Only CPFS 2.2.0 and later support data flows. You can view the version information on the file system details page in the console.
     * - You can enable only a data flow that is in the `Stopped` state.
     * - If DryRun is set to `true`, you can check whether sufficient resources are available to enable a data flow of the specified specifications. If inventory resources are insufficient, the data flow cannot be enabled.
     * - Enabling a data flow typically takes 2 to 5 minutes. You can call [DescribeDataFlows](https://help.aliyun.com/document_detail/2402270.html) to query the data flow status.
     *
     * @param request - StartDataFlowRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartDataFlowResponse
     *
     * @param StartDataFlowRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return StartDataFlowResponse
     */
    public function startDataFlowWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dataFlowId) {
            @$query['DataFlowId'] = $request->dataFlowId;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartDataFlow',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartDataFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables a data flow.
     *
     * @remarks
     * - This operation is applicable only to Cloud Parallel File Storage (CPFS) file systems.
     * - Only CPFS 2.2.0 and later support data flows. You can view the version information on the file system details page in the console.
     * - You can enable only a data flow that is in the `Stopped` state.
     * - If DryRun is set to `true`, you can check whether sufficient resources are available to enable a data flow of the specified specifications. If inventory resources are insufficient, the data flow cannot be enabled.
     * - Enabling a data flow typically takes 2 to 5 minutes. You can call [DescribeDataFlows](https://help.aliyun.com/document_detail/2402270.html) to query the data flow status.
     *
     * @param request - StartDataFlowRequest
     *
     * @returns StartDataFlowResponse
     *
     * @param StartDataFlowRequest $request
     *
     * @return StartDataFlowResponse
     */
    public function startDataFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startDataFlowWithOptions($request, $runtime);
    }

    /**
     * Starts the execution of a lifecycle management policy.
     *
     * @remarks
     * Starts the execution of a lifecycle management policy.
     * This operation is supported only when LifecyclePolicyType is set to OnDemand in the lifecycle management policy of a CPFS for Lingjun file system.
     *
     * @param request - StartLifecyclePolicyExecutionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartLifecyclePolicyExecutionResponse
     *
     * @param StartLifecyclePolicyExecutionRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return StartLifecyclePolicyExecutionResponse
     */
    public function startLifecyclePolicyExecutionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->lifecyclePolicyId) {
            @$query['LifecyclePolicyId'] = $request->lifecyclePolicyId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartLifecyclePolicyExecution',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartLifecyclePolicyExecutionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Starts the execution of a lifecycle management policy.
     *
     * @remarks
     * Starts the execution of a lifecycle management policy.
     * This operation is supported only when LifecyclePolicyType is set to OnDemand in the lifecycle management policy of a CPFS for Lingjun file system.
     *
     * @param request - StartLifecyclePolicyExecutionRequest
     *
     * @returns StartLifecyclePolicyExecutionResponse
     *
     * @param StartLifecyclePolicyExecutionRequest $request
     *
     * @return StartLifecyclePolicyExecutionResponse
     */
    public function startLifecyclePolicyExecution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startLifecyclePolicyExecutionWithOptions($request, $runtime);
    }

    /**
     * Disables a dataflow.
     *
     * @remarks
     * - This operation applies only to Cloud Parallel File Storage (CPFS) file systems.
     * - Only CPFS 2.2.0 and later support dataflows. You can view the version information on the file system details page in the console.
     * - You can disable only a dataflow in the `Running` state.
     * - After a dataflow is disabled, you cannot create dataflow tasks for it. If automatic update is configured, data updates on the source are not synchronized to CPFS.
     * - After a dataflow is disabled, the dataflow bandwidth is no longer billed because resources are reclaimed. However, re-enabling the dataflow may fail due to insufficient inventory.
     * - Disabling a dataflow typically takes 2 to 5 minutes. You can call [DescribeDataFlows](https://help.aliyun.com/document_detail/2402271.html) to query the dataflow status.
     *
     * @param request - StopDataFlowRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopDataFlowResponse
     *
     * @param StopDataFlowRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return StopDataFlowResponse
     */
    public function stopDataFlowWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dataFlowId) {
            @$query['DataFlowId'] = $request->dataFlowId;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopDataFlow',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopDataFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables a dataflow.
     *
     * @remarks
     * - This operation applies only to Cloud Parallel File Storage (CPFS) file systems.
     * - Only CPFS 2.2.0 and later support dataflows. You can view the version information on the file system details page in the console.
     * - You can disable only a dataflow in the `Running` state.
     * - After a dataflow is disabled, you cannot create dataflow tasks for it. If automatic update is configured, data updates on the source are not synchronized to CPFS.
     * - After a dataflow is disabled, the dataflow bandwidth is no longer billed because resources are reclaimed. However, re-enabling the dataflow may fail due to insufficient inventory.
     * - Disabling a dataflow typically takes 2 to 5 minutes. You can call [DescribeDataFlows](https://help.aliyun.com/document_detail/2402271.html) to query the dataflow status.
     *
     * @param request - StopDataFlowRequest
     *
     * @returns StopDataFlowResponse
     *
     * @param StopDataFlowRequest $request
     *
     * @return StopDataFlowResponse
     */
    public function stopDataFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopDataFlowWithOptions($request, $runtime);
    }

    /**
     * Stops the execution of a lifecycle policy.
     *
     * @remarks
     * Stops the execution of a lifecycle policy.
     * This operation is supported only when LifecyclePolicyType is set to OnDemand in the lifecycle management policy of a CPFS for Lingjun file system.
     *
     * @param request - StopLifecyclePolicyExecutionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopLifecyclePolicyExecutionResponse
     *
     * @param StopLifecyclePolicyExecutionRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return StopLifecyclePolicyExecutionResponse
     */
    public function stopLifecyclePolicyExecutionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->lifecyclePolicyId) {
            @$query['LifecyclePolicyId'] = $request->lifecyclePolicyId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopLifecyclePolicyExecution',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopLifecyclePolicyExecutionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Stops the execution of a lifecycle policy.
     *
     * @remarks
     * Stops the execution of a lifecycle policy.
     * This operation is supported only when LifecyclePolicyType is set to OnDemand in the lifecycle management policy of a CPFS for Lingjun file system.
     *
     * @param request - StopLifecyclePolicyExecutionRequest
     *
     * @returns StopLifecyclePolicyExecutionResponse
     *
     * @param StopLifecyclePolicyExecutionRequest $request
     *
     * @return StopLifecyclePolicyExecutionResponse
     */
    public function stopLifecyclePolicyExecution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopLifecyclePolicyExecutionWithOptions($request, $runtime);
    }

    /**
     * Creates and attaches tags to specified resources. File systems and access points are supported.
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
        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
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
            'version' => '2017-06-26',
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
     * Creates and attaches tags to specified resources. File systems and access points are supported.
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
     * Deletes the tags of a specified resource.
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

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
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
            'version' => '2017-06-26',
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
     * Deletes the tags of a specified resource.
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
     * Updates the rules of a lifecycle management policy. Only CPFS for Lingjun is supported. UpdateLifecyclePolicy uses overwrite semantics. If a non-required parameter is left empty, the corresponding field is deleted. To append lifecycle rules, first call the DescribeLifecyclePolicies operation to obtain the current lifecycle rule configuration, append the new lifecycle rule configuration, and then call the UpdateLifecyclePolicy operation to update the lifecycle rule configuration.
     *
     * @param request - UpdateLifecyclePolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateLifecyclePolicyResponse
     *
     * @param UpdateLifecyclePolicyRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateLifecyclePolicyResponse
     */
    public function updateLifecyclePolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deleteRules) {
            @$query['DeleteRules'] = $request->deleteRules;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->lifecyclePolicyId) {
            @$query['LifecyclePolicyId'] = $request->lifecyclePolicyId;
        }

        if (null !== $request->paths) {
            @$query['Paths'] = $request->paths;
        }

        if (null !== $request->retrieveRules) {
            @$query['RetrieveRules'] = $request->retrieveRules;
        }

        if (null !== $request->storageType) {
            @$query['StorageType'] = $request->storageType;
        }

        if (null !== $request->transitRules) {
            @$query['TransitRules'] = $request->transitRules;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateLifecyclePolicy',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateLifecyclePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the rules of a lifecycle management policy. Only CPFS for Lingjun is supported. UpdateLifecyclePolicy uses overwrite semantics. If a non-required parameter is left empty, the corresponding field is deleted. To append lifecycle rules, first call the DescribeLifecyclePolicies operation to obtain the current lifecycle rule configuration, append the new lifecycle rule configuration, and then call the UpdateLifecyclePolicy operation to update the lifecycle rule configuration.
     *
     * @param request - UpdateLifecyclePolicyRequest
     *
     * @returns UpdateLifecyclePolicyResponse
     *
     * @param UpdateLifecyclePolicyRequest $request
     *
     * @return UpdateLifecyclePolicyResponse
     */
    public function updateLifecyclePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLifecyclePolicyWithOptions($request, $runtime);
    }

    /**
     * Modifies the retention period of data in a recycle bin.
     *
     * @remarks
     * Only General-purpose NAS file systems support this feature.
     *
     * @param request - UpdateRecycleBinAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateRecycleBinAttributeResponse
     *
     * @param UpdateRecycleBinAttributeRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateRecycleBinAttributeResponse
     */
    public function updateRecycleBinAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateRecycleBinAttribute',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateRecycleBinAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the retention period of data in a recycle bin.
     *
     * @remarks
     * Only General-purpose NAS file systems support this feature.
     *
     * @param request - UpdateRecycleBinAttributeRequest
     *
     * @returns UpdateRecycleBinAttributeResponse
     *
     * @param UpdateRecycleBinAttributeRequest $request
     *
     * @return UpdateRecycleBinAttributeResponse
     */
    public function updateRecycleBinAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRecycleBinAttributeWithOptions($request, $runtime);
    }

    /**
     * Scales up the storage capacity of an Extreme NAS file system or a Cloud Parallel File Storage (CPFS) file system.
     *
     * @remarks
     * - Only Extreme NAS file systems and CPFS file systems can be scaled up.
     * - General-purpose NAS file systems scale up automatically on demand. You do not need to call this operation.
     *
     * @param request - UpgradeFileSystemRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpgradeFileSystemResponse
     *
     * @param UpgradeFileSystemRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpgradeFileSystemResponse
     */
    public function upgradeFileSystemWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->capacity) {
            @$query['Capacity'] = $request->capacity;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpgradeFileSystem',
            'version' => '2017-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpgradeFileSystemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Scales up the storage capacity of an Extreme NAS file system or a Cloud Parallel File Storage (CPFS) file system.
     *
     * @remarks
     * - Only Extreme NAS file systems and CPFS file systems can be scaled up.
     * - General-purpose NAS file systems scale up automatically on demand. You do not need to call this operation.
     *
     * @param request - UpgradeFileSystemRequest
     *
     * @returns UpgradeFileSystemResponse
     *
     * @param UpgradeFileSystemRequest $request
     *
     * @return UpgradeFileSystemResponse
     */
    public function upgradeFileSystem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeFileSystemWithOptions($request, $runtime);
    }
}
