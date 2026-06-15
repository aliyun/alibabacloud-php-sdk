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
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateAutoSnapshotPolicyRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateAutoSnapshotPolicyResponse;
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
use AlibabaCloud\SDK\NAS\V20170626\Models\DeleteAutoSnapshotPolicyRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DeleteAutoSnapshotPolicyResponse;
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
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAutoSnapshotPoliciesRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAutoSnapshotPoliciesResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAutoSnapshotTasksRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAutoSnapshotTasksResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeBlackListClientsRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeBlackListClientsResponse;
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
use AlibabaCloud\SDK\NAS\V20170626\Models\DisableNfsAclRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DisableNfsAclResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DisableSmbAclRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DisableSmbAclResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\EnableNfsAclRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\EnableNfsAclResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\EnableRecycleBinRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\EnableRecycleBinResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\EnableSmbAclRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\EnableSmbAclResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\GetDirectoryOrFilePropertiesRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\GetDirectoryOrFilePropertiesResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\GetFilesetRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\GetFilesetResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\GetProtocolMountTargetRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\GetProtocolMountTargetResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\GetRecycleBinAttributeRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\GetRecycleBinAttributeResponse;
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
use AlibabaCloud\SDK\NAS\V20170626\Models\ModifyAutoSnapshotPolicyRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\ModifyAutoSnapshotPolicyResponse;
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
     * Adds a client to the blacklist of a Cloud Parallel File Storage (CPFS) file system and revokes the write access from the client. The blacklist serves as an I/O fence.
     *
     * @remarks
     * The API operation is available only for CPFS file systems.
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
     * Adds a client to the blacklist of a Cloud Parallel File Storage (CPFS) file system and revokes the write access from the client. The blacklist serves as an I/O fence.
     *
     * @remarks
     * The API operation is available only for CPFS file systems.
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
     *   The snapshot feature is in public preview and is provided free of charge. [File Storage NAS Service Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed in public preview.
     * *   Only advanced Extreme NAS file systems support this feature.
     * *   You can apply only one automatic snapshot policy to each file system.
     * *   Each automatic snapshot policy can be applied to multiple file systems.
     * *   If an automatic snapshot policy is applied to a file system, you can call the ApplyAutoSnapshotPolicy operation to change the automatic snapshot policy.
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
     *   The snapshot feature is in public preview and is provided free of charge. [File Storage NAS Service Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed in public preview.
     * *   Only advanced Extreme NAS file systems support this feature.
     * *   You can apply only one automatic snapshot policy to each file system.
     * *   Each automatic snapshot policy can be applied to multiple file systems.
     * *   If an automatic snapshot policy is applied to a file system, you can call the ApplyAutoSnapshotPolicy operation to change the automatic snapshot policy.
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
     * Adds AutoRefresh configurations to a dataflow.
     *
     * @remarks
     * - 该接口仅适用于CPFS文件系统。
     * - 仅CPFS 2.2.0及以上版本支持数据流动。您可以在控制台文件系统详情页面查看版本信息。
     * - 仅支持状态为`Running（正常）`状态的数据流动添加自动更新配置。
     * - 一个数据流动最多可以添加5个自动更新配置。
     * - 创建自动更新配置一般耗时2～5分钟，您可以通过[DescribeDataFlows](https://help.aliyun.com/document_detail/336901.html)查询数据流动状态。
     * - 自动更新依赖EventBridge收集源端OSS存储的对象修改事件。需要先[开通EventBridge服务](https://help.aliyun.com/document_detail/182246.html)。
     *   > CPFS在EventBridge创建的事件总线、事件规则带有`Create for cpfs auto refresh`的描述，事件总线、事件规则都不能修改和删除，否则自动更新无法正常工作。
     * - 自动更新的作用对象是prefix，由参数RefreshPath指定。在CPFS数据流动对prefix配置自动更新时，会在用户侧创建事件总线，并创建源端OSS Bucket的prefix的事件规则。当源端OSS Bucket的prefix内发生对象修改后，会在EventBridge中产生OSS事件，由CPFS数据流动处理。
     * - 配置自动更新（AutoRefresh）后，当源端存储数据发生变化时，变化的元数据会自动同步到CPFS文件系统，变化的数据会在用户访问文件时按需加载，或者启动数据流动任务加载数据。
     * - 自动更新间隔（AutoRefreshInterval）指CPFS每隔该时间间隔，检查源端OSS Bucket该prefix内是否存在数据更新，如果有数据更新则启动自动更新任务。当OSS源端的对象修改事件频率超过CPFS数据流动处理能力时，自动更新任务会堆积，元数据更新会延迟，数据流动的状态为Misconfigured，您可以提升数据流动规格，或者降低OSS修改频率来解决。
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
     * Adds AutoRefresh configurations to a dataflow.
     *
     * @remarks
     * - 该接口仅适用于CPFS文件系统。
     * - 仅CPFS 2.2.0及以上版本支持数据流动。您可以在控制台文件系统详情页面查看版本信息。
     * - 仅支持状态为`Running（正常）`状态的数据流动添加自动更新配置。
     * - 一个数据流动最多可以添加5个自动更新配置。
     * - 创建自动更新配置一般耗时2～5分钟，您可以通过[DescribeDataFlows](https://help.aliyun.com/document_detail/336901.html)查询数据流动状态。
     * - 自动更新依赖EventBridge收集源端OSS存储的对象修改事件。需要先[开通EventBridge服务](https://help.aliyun.com/document_detail/182246.html)。
     *   > CPFS在EventBridge创建的事件总线、事件规则带有`Create for cpfs auto refresh`的描述，事件总线、事件规则都不能修改和删除，否则自动更新无法正常工作。
     * - 自动更新的作用对象是prefix，由参数RefreshPath指定。在CPFS数据流动对prefix配置自动更新时，会在用户侧创建事件总线，并创建源端OSS Bucket的prefix的事件规则。当源端OSS Bucket的prefix内发生对象修改后，会在EventBridge中产生OSS事件，由CPFS数据流动处理。
     * - 配置自动更新（AutoRefresh）后，当源端存储数据发生变化时，变化的元数据会自动同步到CPFS文件系统，变化的数据会在用户访问文件时按需加载，或者启动数据流动任务加载数据。
     * - 自动更新间隔（AutoRefreshInterval）指CPFS每隔该时间间隔，检查源端OSS Bucket该prefix内是否存在数据更新，如果有数据更新则启动自动更新任务。当OSS源端的对象修改事件频率超过CPFS数据流动处理能力时，自动更新任务会堆积，元数据更新会延迟，数据流动的状态为Misconfigured，您可以提升数据流动规格，或者降低OSS修改频率来解决。
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
     * Associates the VSC device with the file system.
     *
     * @remarks
     * - 仅CPFS智算版支持该功能。
     * - 支持批量执行，批量执行情况下，目前仅支持1个VscId关联到多个FileSystemId，即ResourceIds.VscId需相等。
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
     * Associates the VSC device with the file system.
     *
     * @remarks
     * - 仅CPFS智算版支持该功能。
     * - 支持批量执行，批量执行情况下，目前仅支持1个VscId关联到多个FileSystemId，即ResourceIds.VscId需相等。
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
     * Removes automatic snapshot policies from one or more file systems.
     *
     * @remarks
     *   The snapshot feature is in public preview and is provided free of charge. [File Storage NAS Service Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed in public preview.
     * *   Only advanced Extreme NAS file systems support this feature.
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
     * Removes automatic snapshot policies from one or more file systems.
     *
     * @remarks
     *   The snapshot feature is in public preview and is provided free of charge. [File Storage NAS Service Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed in public preview.
     * *   Only advanced Extreme NAS file systems support this feature.
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
     * Cancels the AutoRefresh configuration for a dataflow.
     *
     * @remarks
     * - 该接口仅适用于CPFS文件系统。
     * - 仅CPFS 2.2.0及以上版本支持数据流动。您可以在控制台文件系统详情页面查看版本信息。
     * - 仅支持取消`Running（正常）`、`Stopped（停止）`状态数据流动的自动更新配置。
     * - 取消自动更新配置一般耗时2～5分钟，您可以通过[DescribeDataFlows](https://help.aliyun.com/document_detail/2402270.html)查询取消自动更新任务的状态。
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
     * Cancels the AutoRefresh configuration for a dataflow.
     *
     * @remarks
     * - 该接口仅适用于CPFS文件系统。
     * - 仅CPFS 2.2.0及以上版本支持数据流动。您可以在控制台文件系统详情页面查看版本信息。
     * - 仅支持取消`Running（正常）`、`Stopped（停止）`状态数据流动的自动更新配置。
     * - 取消自动更新配置一般耗时2～5分钟，您可以通过[DescribeDataFlows](https://help.aliyun.com/document_detail/2402270.html)查询取消自动更新任务的状态。
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
     * Cancels a data streaming task.
     *
     * @remarks
     * - 仅CPFS智算版2.6.0 及以上版本支持。您可以在控制台文件系统详情页面查看版本信息。
     * - 仅支持在 CREATED和RUNNING状态下取消数据流动流式任务。
     * - 数据流动流式任务是异步执行的，您可通过DescribeDataFlowSubTasks查询流式任务执行状态。
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
     * Cancels a data streaming task.
     *
     * @remarks
     * - 仅CPFS智算版2.6.0 及以上版本支持。您可以在控制台文件系统详情页面查看版本信息。
     * - 仅支持在 CREATED和RUNNING状态下取消数据流动流式任务。
     * - 数据流动流式任务是异步执行的，您可通过DescribeDataFlowSubTasks查询流式任务执行状态。
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
     * Cancels a batch or streaming data flow task that is in the Pending or Executing state.
     *
     * @remarks
     * - Data flow tasks are supported only by CPFS 2.2.0 or later and CPFS for AI Computing 2.4.0 or later. The file system details page in the console displays the version information.
     * - A data flow task can be canceled only if it is in the `Pending or Executing` state.
     * - Canceling a data flow task typically takes 5 to 10 minutes. Call the [DescribeDataFlowTasks](https://help.aliyun.com/document_detail/2402275.html) operation to query the task execution status.
     * - You cannot cancel a streaming task if it has running streaming subtasks. Otherwise, the system returns an InvalidStatus.ResourceMismatch error.
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
     * Cancels a batch or streaming data flow task that is in the Pending or Executing state.
     *
     * @remarks
     * - Data flow tasks are supported only by CPFS 2.2.0 or later and CPFS for AI Computing 2.4.0 or later. The file system details page in the console displays the version information.
     * - A data flow task can be canceled only if it is in the `Pending or Executing` state.
     * - Canceling a data flow task typically takes 5 to 10 minutes. Call the [DescribeDataFlowTasks](https://help.aliyun.com/document_detail/2402275.html) operation to query the task execution status.
     * - You cannot cancel a streaming task if it has running streaming subtasks. Otherwise, the system returns an InvalidStatus.ResourceMismatch error.
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
     * Only General-purpose file systems support the directory quota feature.
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
     * Only General-purpose file systems support the directory quota feature.
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
     * 仅CPFS智算版2.7.0及以上版本支持取消配额。
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
     * 仅CPFS智算版2.7.0及以上版本支持取消配额。
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
     * Cancels a running data retrieval task.
     *
     * @remarks
     * Only General-purpose NAS file systems support this operation.
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
     * Cancels a running data retrieval task.
     *
     * @remarks
     * Only General-purpose NAS file systems support this operation.
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
     * Cancels a running job of the recycle bin.
     *
     * @remarks
     *   Only General-purpose NAS file systems support this operation.
     * *   You can cancel only jobs that are in the Running state. You cannot cancel jobs that are in the PartialSuccess, Success, Fail, or Cancelled state.
     * *   If you cancel a running job that permanently deletes files, you cannot restore the files that are already permanently deleted.
     * *   If you cancel a running job that restores files, you can query the restored files from the file system, and query the unrestored files from the recycle bin.
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
     * Cancels a running job of the recycle bin.
     *
     * @remarks
     *   Only General-purpose NAS file systems support this operation.
     * *   You can cancel only jobs that are in the Running state. You cannot cancel jobs that are in the PartialSuccess, Success, Fail, or Cancelled state.
     * *   If you cancel a running job that permanently deletes files, you cannot restore the files that are already permanently deleted.
     * *   If you cancel a running job that restores files, you can query the restored files from the file system, and query the unrestored files from the recycle bin.
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
     * Changes the resource group to which a file system belongs.
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
     * Changes the resource group to which a file system belongs.
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
     * - 一个阿里云账号在单个地域内最多可以创建20个权限组。
     * - 一个权限组最多支持添加300个规则。
     * - 仅支持创建专有网络类型的权限组。
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
     * - 一个阿里云账号在单个地域内最多可以创建20个权限组。
     * - 一个权限组最多支持添加300个规则。
     * - 仅支持创建专有网络类型的权限组。
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
     * - 在使用CreateAccessPoint接口创建接入点时部分资源的生成是异步完成的。因此在执行CreateAccessPoint接口成功后，请先调用[DescribeAccessPoints](https://help.aliyun.com/document_detail/2712239.html)或者[DescribeAccessPoint](https://help.aliyun.com/document_detail/2712240.html)接口查询接入点状态，当接入点状态为**Active**后再执行挂载文件系统操作，否则可能会挂载失败。
     * - 仅通用型NAS NFS协议文件系统支持该功能。
     * - 如果开启RAM策略（EnabledRam），需要配置对应的RAM权限，具体请参考[管理接入点](https://help.aliyun.com/document_detail/2545998.html)。
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
     * - 在使用CreateAccessPoint接口创建接入点时部分资源的生成是异步完成的。因此在执行CreateAccessPoint接口成功后，请先调用[DescribeAccessPoints](https://help.aliyun.com/document_detail/2712239.html)或者[DescribeAccessPoint](https://help.aliyun.com/document_detail/2712240.html)接口查询接入点状态，当接入点状态为**Active**后再执行挂载文件系统操作，否则可能会挂载失败。
     * - 仅通用型NAS NFS协议文件系统支持该功能。
     * - 如果开启RAM策略（EnabledRam），需要配置对应的RAM权限，具体请参考[管理接入点](https://help.aliyun.com/document_detail/2545998.html)。
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
     * Creates a rule for a permission group.
     *
     * @remarks
     * 一个权限组最多支持添加300个规则。
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
     * Creates a rule for a permission group.
     *
     * @remarks
     * 一个权限组最多支持添加300个规则。
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
     * Creates an automatic snapshot policy.
     *
     * @remarks
     *   The snapshot feature is in public preview and is provided free of charge. [File Storage NAS Service Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed in public preview.
     * *   Only advanced Extreme NAS file systems support the snapshot feature.
     * *   You can create a maximum of 100 automatic snapshot policies in each region for an Alibaba Cloud account.
     * *   If an auto snapshot is being created when the scheduled time for a new auto snapshot arrives, the creation of the new snapshot is skipped. This occurs if the file system stores a large volume of data. For example, you have scheduled auto snapshots to be created at 09:00:00, 10:00:00, 11:00:00, and 12:00:00 for a file system. The system starts to create an auto snapshot at 09:00:00 and does not complete the process until 10:20:00. The process takes 80 minutes because the file system has a large volume of data. In this case, the system does not create an auto snapshot at 10:00:00, but creates an auto snapshot at 11:00:00.
     * *   A maximum of 128 auto snapshots can be created for a file system. If the upper limit is reached, the earliest auto snapshot is deleted. This rule does not apply to manual snapshots.
     * *   If you modify the retention period of an automatic snapshot policy, the modification applies only to subsequent snapshots, but not to the existing snapshots.
     * *   If an auto snapshot is being created for a file system, you cannot create a manual snapshot for the file system. You must wait after the auto snapshot is created.
     * *   You can only apply automatic snapshot policies to a file system that is in the Running state.
     * *   All auto snapshots are named in the `auto_yyyyMMdd_X` format, where: `auto` indicates that the snapshot is created based on an automatic snapshot policy. `yyyyMMdd` indicates the date on which the snapshot is created. `y` indicates the year. `M` indicates the month. `d` indicates the day. `X` indicates the ordinal number of the snapshot on the current day. For example, `auto_20201018_1` indicates the first auto snapshot that was created on October 18, 2020.
     * *   After an automatic snapshot policy is created, you can call the ApplyAutoSnapshotPolicy operation to apply the policy to a file system and call the ModifyAutoSnapshotPolicy operation to modify the policy.
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
     *   The snapshot feature is in public preview and is provided free of charge. [File Storage NAS Service Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed in public preview.
     * *   Only advanced Extreme NAS file systems support the snapshot feature.
     * *   You can create a maximum of 100 automatic snapshot policies in each region for an Alibaba Cloud account.
     * *   If an auto snapshot is being created when the scheduled time for a new auto snapshot arrives, the creation of the new snapshot is skipped. This occurs if the file system stores a large volume of data. For example, you have scheduled auto snapshots to be created at 09:00:00, 10:00:00, 11:00:00, and 12:00:00 for a file system. The system starts to create an auto snapshot at 09:00:00 and does not complete the process until 10:20:00. The process takes 80 minutes because the file system has a large volume of data. In this case, the system does not create an auto snapshot at 10:00:00, but creates an auto snapshot at 11:00:00.
     * *   A maximum of 128 auto snapshots can be created for a file system. If the upper limit is reached, the earliest auto snapshot is deleted. This rule does not apply to manual snapshots.
     * *   If you modify the retention period of an automatic snapshot policy, the modification applies only to subsequent snapshots, but not to the existing snapshots.
     * *   If an auto snapshot is being created for a file system, you cannot create a manual snapshot for the file system. You must wait after the auto snapshot is created.
     * *   You can only apply automatic snapshot policies to a file system that is in the Running state.
     * *   All auto snapshots are named in the `auto_yyyyMMdd_X` format, where: `auto` indicates that the snapshot is created based on an automatic snapshot policy. `yyyyMMdd` indicates the date on which the snapshot is created. `y` indicates the year. `M` indicates the month. `d` indicates the day. `X` indicates the ordinal number of the snapshot on the current day. For example, `auto_20201018_1` indicates the first auto snapshot that was created on October 18, 2020.
     * *   After an automatic snapshot policy is created, you can call the ApplyAutoSnapshotPolicy operation to apply the policy to a file system and call the ModifyAutoSnapshotPolicy operation to modify the policy.
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
     * Creates a dataflow for a Cloud Parallel File Storage (CPFS) file system and source storage.
     *
     * @remarks
     * - 本接口适用于以下产品：
     * | 产品 | 文件系统ID格式 | 支持数据流动的最低版本 |
     * |------|----------------|------------------------|
     * | **CPFS通用版** | 以 `cpfs-` 开头，例如 cpfs-125487**** | 2.2.0 及以上 |
     * | **CPFS智算版** | 以 `bmcpfs-` 开头，例如 bmcpfs-0015**** | 2.4.0 及以上 |
     * > ：CPFS通用版和CPFS智算版共用同一套API，但在参数取值和功能支持上有所区别。请根据您使用的产品类型参考相应章节。
     * - 基础操作
     *     - CPFS通用版、CPFS智算版文件系统状态为运行中时，才能创建数据流动。
     *     - 一个CPFS通用版或CPFS智算版文件系统最多允许创建 **10 个**数据流动。
     *     - 创建数据流动一般耗时 2～5 分钟，您可通过 [DescribeDataFlows](https://help.aliyun.com/document_detail/336901.html) 检查数据流动创建是否完成。
     * - 权限
     *     创建数据流动时，文件存储CPFS会获取`AliyunServiceRoleForNasOssDataflow`和`AliyunServiceRoleForNasEventNotification`两个服务关联角色。更多信息，请参见[CPFS服务关联角色](https://help.aliyun.com/document_detail/185138.html)。
     * - CPFS通用版使用说明
     *      本章节适用于文件系统ID以 `cpfs-` 开头的CPFS通用版。
     *   - 计费
     *     - 创建数据流动将按照数据流动带宽计费。更多信息，请参见[CPFS通用版计费说明](https://help.aliyun.com/document_detail/111858.html)。
     *     - 使用自动更新（AutoRefresh）时，需要通过EventBridge收集源端OSS存储的对象修改事件，事件将产生费用。更多信息，请参见[EventBridge计费说明](https://help.aliyun.com/document_detail/163752.html)。
     *   - 数据流动规格
     *       - 数据流动带宽（Throughput）支持600 MB/s、1200 MB/s和1500 MB/s三种规格。数据流动带宽是指该数据流动进行导入或导出数据时能达到的最大传输带宽。
     *     - 创建一个数据流动，会消耗1个文件存储CPFS通用版挂载点使用的vSwitch IP地址，请您确保该vSwitch IP资源充足。
     *     - 库存查询：当设置DryRun为true时，可校验创建该规格的数据流动的资源是否满足。
     *   - Fileset
     *     - 数据流动的目的端是CPFS通用版文件系统中的Fileset。Fileset是CPFS通用版文件系统中一种新的目录树结构，是在父文件系统中的一个小型文件系统，拥有独立的inode空间和管理能力。
     *     -  创建数据流动时该Fileset必须已存在，且不能与其他Fileset嵌套。一个Fileset上只能创建一个数据流动，对应一个源端存储。
     *     - Fileset内的文件数量上限是100万，如果从OSS Bucket导入的文件数量超过上限，创建新文件会报错`no space`。
     *    > 如果Fileset中已存在数据，创建数据流动后，Fileset内的已有数据会被清空，替换为OSS端同步过来的数据。
     *   - 自动更新
     *     -  配置自动更新（AutoRefresh）后，当源端存储数据发生变化时，变化的元数据会自动同步到CPFS通用版文件系统，变化的数据会在用户访问文件时按需加载，或者启动数据流动任务加载数据。
     *     -  自动更新依赖EventBridge收集源端OSS存储的对象修改事件。需要先[开通EventBridge服务](https://help.aliyun.com/document_detail/182246.html)。
     *     -  自动更新的作用范围是prefix，由参数RefreshPath指定。一个数据流动最多可配置5个自动更新目录。
     *     -  自动更新间隔（AutoRefreshInterval）指CPFS通用版设置的自动更新时间，检查源端OSS Bucket该prefix内是否存在数据更新，如果有数据更新则启动自动更新任务。当OSS源端的对象修改事件频率超过CPFS通用版数据流动处理能力时，自动更新任务会堆积，元数据更新会延迟，数据流动的状态为`Misconfigured`，您可以提升数据流动规格，或者降低OSS修改频率来解决。
     *     -  在文件存储CPFS通用版数据流动对prefix配置自动更新时，会在用户侧创建事件总线，并创建源端OSS Bucket的prefix的事件规则。当源端OSS Bucket的prefix内发生对象修改后，会在EventBridge中产生OSS事件，由CPFS通用版数据流动处理。
     *      > 文件存储CPFS通用版在EventBridge创建的事件总线、事件规则带有`Create for cpfs auto refresh`的描述，事件总线、事件规则都不能修改或删除，否则自动更新无法正常工作。
     *   -  源端存储
     *      -  源端存储仅支持OSS。数据流动的源端存储（SourceStorage）必须是OSS Bucket。
     *      -  CPFS通用版数据流动支持加密和非加密两种方式访问OSS。选择加密（SSL）方式访问OSS时，需确认OSS Bucket的传输加密支持加密访问方式。
     *      -  如果多个CPFS通用版的数据流动、或者同一个文件存储CPFS通用版的多个数据流动的源端存储是同一个OSS Bucket，为了防止多个文件存储CPFS通用版向同一个源导出数据产生数据冲突，需要该OSS Bucket开启版本控制。
     *      -  不支持跨地域的OSS数据流动，OSS Bucket必须与CPFS通用版文件系统在同一个地域。
     *        > 创建数据流动前，您需要先给源端OSS Bucket设置标签（key: cpfs-dataflow, value: true），以便CPFS通用版数据流动访问该Bucket的数据。在数据流动的使用过程中，不能删除和修改该标签，否则CPFS通用版数据流动无法访问Bucket的数据。
     * - CPFS智算版使用说明
     *      本章节适用于文件系统ID以 `bmcpfs-` 开头的CPFS智算版。
     *   -  源端存储
     *       -  源端存储仅支持OSS。数据流动的源端存储（SourceStorage）必须是OSS Bucket。
     *       -  CPFS智算版数据流动支持加密和非加密两种方式访问OSS。选择加密（SSL）方式访问OSS时，需确认OSS Bucket的传输加密支持加密访问方式。
     *       -  如果多个CPFS智算版的数据流动、或者同一个CPFS智算版的多个数据流动的源端存储是同一个OSS Bucket，为了防止多个CPFS智算版向同一个源导出数据产生数据冲突，需要该OSS Bucket开启版本控制。
     *       -  不支持跨地域的OSS数据流动，OSS Bucket必须与CPFS智算版文件系统在同一个地域。
     *      - CPFS智算版2.6.0及以上版本支持使用跨账号OSS进行数据流动的创建。
     *      - 只有在使用跨账号的OSS时，需要设置account id参数。
     *      - 使用跨账号的OSS时，需要先进行账号授权。具体授权请参考[跨账号数据流动授权](https://help.aliyun.com/document_detail/2713462.html)。
     *        > 创建数据流动前，您需要先给源端OSS Bucket设置标签（key: cpfs-dataflow, value: true），以便CPFS智算版数据流动访问该Bucket的数据。在数据流动的使用过程中，不能删除和修改该标签，否则CPFS智算版数据流动无法访问Bucket的数据。
     *   - 数据流动对文件系统的限制
     *     - 在数据流动关联的文件系统路径中，不可对非空目录执行重命名操作，否则报错Permission Denied或者目录非空。
     *      - 目录、文件名中的特殊字符需要谨慎使用，支持大小写字母、数字、感叹号（！）、短划线（-）、下划线（_）、半角句号（.）、星号（*）和半角圆括号（()）。
     *     - 不支持超长路径，数据流动支持的路径最大长度是1023字符。
     *   - 数据流动导入限制
     *     - Symlink类型的文件导入到CPFS智算版后，会转变为包含数据的普通文件，并丢失Symlink信息。
     *     - 如果OSS Bucket存在多个版本，则只复制最新的版本。
     *     - 不支持长度大于255字节的文件名或子目录名。
     *   - 数据流动导出限制
     *     - Symlink类型的文件在同步到OSS后，不会同步Symlink所指向的文件，而是会变成一个普通的无数据空白对象。
     *     - Hardlink类型的文件仅作为普通文件同步到OSS。
     *     - Socket、Device、Pipe类型的文件导出到OSS Bucket时，会变成一个普通的无数据空白对象。
     *     - 不支持长度大于1023字符的目录路径。
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
     * Creates a dataflow for a Cloud Parallel File Storage (CPFS) file system and source storage.
     *
     * @remarks
     * - 本接口适用于以下产品：
     * | 产品 | 文件系统ID格式 | 支持数据流动的最低版本 |
     * |------|----------------|------------------------|
     * | **CPFS通用版** | 以 `cpfs-` 开头，例如 cpfs-125487**** | 2.2.0 及以上 |
     * | **CPFS智算版** | 以 `bmcpfs-` 开头，例如 bmcpfs-0015**** | 2.4.0 及以上 |
     * > ：CPFS通用版和CPFS智算版共用同一套API，但在参数取值和功能支持上有所区别。请根据您使用的产品类型参考相应章节。
     * - 基础操作
     *     - CPFS通用版、CPFS智算版文件系统状态为运行中时，才能创建数据流动。
     *     - 一个CPFS通用版或CPFS智算版文件系统最多允许创建 **10 个**数据流动。
     *     - 创建数据流动一般耗时 2～5 分钟，您可通过 [DescribeDataFlows](https://help.aliyun.com/document_detail/336901.html) 检查数据流动创建是否完成。
     * - 权限
     *     创建数据流动时，文件存储CPFS会获取`AliyunServiceRoleForNasOssDataflow`和`AliyunServiceRoleForNasEventNotification`两个服务关联角色。更多信息，请参见[CPFS服务关联角色](https://help.aliyun.com/document_detail/185138.html)。
     * - CPFS通用版使用说明
     *      本章节适用于文件系统ID以 `cpfs-` 开头的CPFS通用版。
     *   - 计费
     *     - 创建数据流动将按照数据流动带宽计费。更多信息，请参见[CPFS通用版计费说明](https://help.aliyun.com/document_detail/111858.html)。
     *     - 使用自动更新（AutoRefresh）时，需要通过EventBridge收集源端OSS存储的对象修改事件，事件将产生费用。更多信息，请参见[EventBridge计费说明](https://help.aliyun.com/document_detail/163752.html)。
     *   - 数据流动规格
     *       - 数据流动带宽（Throughput）支持600 MB/s、1200 MB/s和1500 MB/s三种规格。数据流动带宽是指该数据流动进行导入或导出数据时能达到的最大传输带宽。
     *     - 创建一个数据流动，会消耗1个文件存储CPFS通用版挂载点使用的vSwitch IP地址，请您确保该vSwitch IP资源充足。
     *     - 库存查询：当设置DryRun为true时，可校验创建该规格的数据流动的资源是否满足。
     *   - Fileset
     *     - 数据流动的目的端是CPFS通用版文件系统中的Fileset。Fileset是CPFS通用版文件系统中一种新的目录树结构，是在父文件系统中的一个小型文件系统，拥有独立的inode空间和管理能力。
     *     -  创建数据流动时该Fileset必须已存在，且不能与其他Fileset嵌套。一个Fileset上只能创建一个数据流动，对应一个源端存储。
     *     - Fileset内的文件数量上限是100万，如果从OSS Bucket导入的文件数量超过上限，创建新文件会报错`no space`。
     *    > 如果Fileset中已存在数据，创建数据流动后，Fileset内的已有数据会被清空，替换为OSS端同步过来的数据。
     *   - 自动更新
     *     -  配置自动更新（AutoRefresh）后，当源端存储数据发生变化时，变化的元数据会自动同步到CPFS通用版文件系统，变化的数据会在用户访问文件时按需加载，或者启动数据流动任务加载数据。
     *     -  自动更新依赖EventBridge收集源端OSS存储的对象修改事件。需要先[开通EventBridge服务](https://help.aliyun.com/document_detail/182246.html)。
     *     -  自动更新的作用范围是prefix，由参数RefreshPath指定。一个数据流动最多可配置5个自动更新目录。
     *     -  自动更新间隔（AutoRefreshInterval）指CPFS通用版设置的自动更新时间，检查源端OSS Bucket该prefix内是否存在数据更新，如果有数据更新则启动自动更新任务。当OSS源端的对象修改事件频率超过CPFS通用版数据流动处理能力时，自动更新任务会堆积，元数据更新会延迟，数据流动的状态为`Misconfigured`，您可以提升数据流动规格，或者降低OSS修改频率来解决。
     *     -  在文件存储CPFS通用版数据流动对prefix配置自动更新时，会在用户侧创建事件总线，并创建源端OSS Bucket的prefix的事件规则。当源端OSS Bucket的prefix内发生对象修改后，会在EventBridge中产生OSS事件，由CPFS通用版数据流动处理。
     *      > 文件存储CPFS通用版在EventBridge创建的事件总线、事件规则带有`Create for cpfs auto refresh`的描述，事件总线、事件规则都不能修改或删除，否则自动更新无法正常工作。
     *   -  源端存储
     *      -  源端存储仅支持OSS。数据流动的源端存储（SourceStorage）必须是OSS Bucket。
     *      -  CPFS通用版数据流动支持加密和非加密两种方式访问OSS。选择加密（SSL）方式访问OSS时，需确认OSS Bucket的传输加密支持加密访问方式。
     *      -  如果多个CPFS通用版的数据流动、或者同一个文件存储CPFS通用版的多个数据流动的源端存储是同一个OSS Bucket，为了防止多个文件存储CPFS通用版向同一个源导出数据产生数据冲突，需要该OSS Bucket开启版本控制。
     *      -  不支持跨地域的OSS数据流动，OSS Bucket必须与CPFS通用版文件系统在同一个地域。
     *        > 创建数据流动前，您需要先给源端OSS Bucket设置标签（key: cpfs-dataflow, value: true），以便CPFS通用版数据流动访问该Bucket的数据。在数据流动的使用过程中，不能删除和修改该标签，否则CPFS通用版数据流动无法访问Bucket的数据。
     * - CPFS智算版使用说明
     *      本章节适用于文件系统ID以 `bmcpfs-` 开头的CPFS智算版。
     *   -  源端存储
     *       -  源端存储仅支持OSS。数据流动的源端存储（SourceStorage）必须是OSS Bucket。
     *       -  CPFS智算版数据流动支持加密和非加密两种方式访问OSS。选择加密（SSL）方式访问OSS时，需确认OSS Bucket的传输加密支持加密访问方式。
     *       -  如果多个CPFS智算版的数据流动、或者同一个CPFS智算版的多个数据流动的源端存储是同一个OSS Bucket，为了防止多个CPFS智算版向同一个源导出数据产生数据冲突，需要该OSS Bucket开启版本控制。
     *       -  不支持跨地域的OSS数据流动，OSS Bucket必须与CPFS智算版文件系统在同一个地域。
     *      - CPFS智算版2.6.0及以上版本支持使用跨账号OSS进行数据流动的创建。
     *      - 只有在使用跨账号的OSS时，需要设置account id参数。
     *      - 使用跨账号的OSS时，需要先进行账号授权。具体授权请参考[跨账号数据流动授权](https://help.aliyun.com/document_detail/2713462.html)。
     *        > 创建数据流动前，您需要先给源端OSS Bucket设置标签（key: cpfs-dataflow, value: true），以便CPFS智算版数据流动访问该Bucket的数据。在数据流动的使用过程中，不能删除和修改该标签，否则CPFS智算版数据流动无法访问Bucket的数据。
     *   - 数据流动对文件系统的限制
     *     - 在数据流动关联的文件系统路径中，不可对非空目录执行重命名操作，否则报错Permission Denied或者目录非空。
     *      - 目录、文件名中的特殊字符需要谨慎使用，支持大小写字母、数字、感叹号（！）、短划线（-）、下划线（_）、半角句号（.）、星号（*）和半角圆括号（()）。
     *     - 不支持超长路径，数据流动支持的路径最大长度是1023字符。
     *   - 数据流动导入限制
     *     - Symlink类型的文件导入到CPFS智算版后，会转变为包含数据的普通文件，并丢失Symlink信息。
     *     - 如果OSS Bucket存在多个版本，则只复制最新的版本。
     *     - 不支持长度大于255字节的文件名或子目录名。
     *   - 数据流动导出限制
     *     - Symlink类型的文件在同步到OSS后，不会同步Symlink所指向的文件，而是会变成一个普通的无数据空白对象。
     *     - Hardlink类型的文件仅作为普通文件同步到OSS。
     *     - Socket、Device、Pipe类型的文件导出到OSS Bucket时，会变成一个普通的无数据空白对象。
     *     - 不支持长度大于1023字符的目录路径。
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
     * Creates a data streaming subtask.
     *
     * @remarks
     * - 仅CPFS智算版2.6.0 及以上版本支持。您可以在控制台文件系统详情页面查看版本信息。
     *  - 仅支持状态为Executing（执行中）的数据流动流式任务创建子任务。
     * - 数据流动流式任务是异步执行的，您可通过DescribeDataFlowSubTasks查询流式任务执行状态。
     * - 当数据流动任务类型为流式任务时，运行中状态仅代表可以创建流式导入任务或流式导出任务（并不代表导入或导出任务运行中）。
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
     * Creates a data streaming subtask.
     *
     * @remarks
     * - 仅CPFS智算版2.6.0 及以上版本支持。您可以在控制台文件系统详情页面查看版本信息。
     *  - 仅支持状态为Executing（执行中）的数据流动流式任务创建子任务。
     * - 数据流动流式任务是异步执行的，您可通过DescribeDataFlowSubTasks查询流式任务执行状态。
     * - 当数据流动任务类型为流式任务时，运行中状态仅代表可以创建流式导入任务或流式导出任务（并不代表导入或导出任务运行中）。
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
     * Create a data flow task.
     *
     * @remarks
     * - CPFS usage notes
     *   - Data flow is supported only on CPFS 2.2.0 and later. You can view the version information on the file system details page in the console.
     *   - Data flow tasks execute asynchronously. You can query the task status by calling the [DescribeDataFlowTasks](https://help.aliyun.com/document_detail/2402275.html) operation. Task duration depends on the amount of data. For large datasets, split the workload into multiple tasks.
     *   - You can create data flow tasks only on a data flow that is in the Running state.
     *   - Manually running a data flow task pauses the corresponding automatic data update task.
     *   - When you create an export task, ensure that the absolute path of each file to be exported from CPFS does not exceed 1,023 characters.
     * - CPFS AI-Computing Edition usage notes
     *   - Data flow is supported only on CPFS AI-Computing Edition 2.4.0 and later. You can view the version information on the file system details page in the console.
     *   - Data flow tasks execute asynchronously. You can query the task status by calling the [DescribeDataFlowTasks](https://help.aliyun.com/document_detail/2402275.html) operation. Task duration depends on the amount of data. For large datasets, split the workload into multiple tasks.
     *   - You can create data flow tasks only on a data flow that is in the Running state.
     *   - When you create an export task, ensure that the absolute path of each file to be exported from CPFS AI-Computing Edition does not exceed 1,023 characters.
     *   - CPFS AI-Computing Edition supports two task types: batch tasks and streaming tasks. For more information, see [Task types](https://help.aliyun.com/document_detail/2845429.html).
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
     * Create a data flow task.
     *
     * @remarks
     * - CPFS usage notes
     *   - Data flow is supported only on CPFS 2.2.0 and later. You can view the version information on the file system details page in the console.
     *   - Data flow tasks execute asynchronously. You can query the task status by calling the [DescribeDataFlowTasks](https://help.aliyun.com/document_detail/2402275.html) operation. Task duration depends on the amount of data. For large datasets, split the workload into multiple tasks.
     *   - You can create data flow tasks only on a data flow that is in the Running state.
     *   - Manually running a data flow task pauses the corresponding automatic data update task.
     *   - When you create an export task, ensure that the absolute path of each file to be exported from CPFS does not exceed 1,023 characters.
     * - CPFS AI-Computing Edition usage notes
     *   - Data flow is supported only on CPFS AI-Computing Edition 2.4.0 and later. You can view the version information on the file system details page in the console.
     *   - Data flow tasks execute asynchronously. You can query the task status by calling the [DescribeDataFlowTasks](https://help.aliyun.com/document_detail/2402275.html) operation. Task duration depends on the amount of data. For large datasets, split the workload into multiple tasks.
     *   - You can create data flow tasks only on a data flow that is in the Running state.
     *   - When you create an export task, ensure that the absolute path of each file to be exported from CPFS AI-Computing Edition does not exceed 1,023 characters.
     *   - CPFS AI-Computing Edition supports two task types: batch tasks and streaming tasks. For more information, see [Task types](https://help.aliyun.com/document_detail/2845429.html).
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
     * Only General-purpose Network File System (NFS) file systems support this operation.
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
     * Only General-purpose Network File System (NFS) file systems support this operation.
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
     *   This operation is only available to some users.
     * *   This operation supports only General-purpose NAS file systems that use the Server Message Block (SMB) protocol and have Resource Access Management (RAM) enabled.
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
     *   This operation is only available to some users.
     * *   This operation supports only General-purpose NAS file systems that use the Server Message Block (SMB) protocol and have Resource Access Management (RAM) enabled.
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
     * - 请确保在使用该接口前，已充分了解NAS产品的计费说明和价格。更多信息，请参见[计费说明](https://help.aliyun.com/document_detail/178365.html)和[价格](https://www.aliyun.com/price/product?#/nas/detail)。
     * -  创建文件系统实例需要通过实名认证。具体操作，请参见[账号实名认证](https://help.aliyun.com/document_detail/48263.html)。
     * -  调用此接口将自动创建操作所需的NAS服务关联角色。更多信息，请参见[管理NAS服务关联角色](https://help.aliyun.com/document_detail/208530.html)。
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
     * - 请确保在使用该接口前，已充分了解NAS产品的计费说明和价格。更多信息，请参见[计费说明](https://help.aliyun.com/document_detail/178365.html)和[价格](https://www.aliyun.com/price/product?#/nas/detail)。
     * -  创建文件系统实例需要通过实名认证。具体操作，请参见[账号实名认证](https://help.aliyun.com/document_detail/48263.html)。
     * -  调用此接口将自动创建操作所需的NAS服务关联角色。更多信息，请参见[管理NAS服务关联角色](https://help.aliyun.com/document_detail/208530.html)。
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
     * - CPFS使用说明
     *   - 仅支持CPFS 2.2.0及以上版本创建Fileset。您可以在控制台文件系统详情页面查看版本信息。
     *   - 单个CPFS文件系统最多支持创建10个Fileset。
     *   - 父目录必须是已存在的目录。
     *   - Fileset路径支持的最大深度为8层，根目录/为0层。例如，Fileset路径为/test/aaa/ccc/，则表示路径深度为3层。
     *   - 不支持Fileset中嵌套Fileset。即当父目录已指定为Fileset，其子目录不支持指定为Fileset。
     *   - Fileset最多支持100万个文件，如果文件数量超过此上限，添加新文件会返回`no space`错误信息。
     * - CPFS智算版使用说明
     *   - 仅支持CPFS智算版 2.7.0及以上版本创建Fileset。您可以在控制台文件系统详情页面查看版本信息。
     *   - 单个CPFS文件系统最多支持创建500个Fileset。
     *   - Fileset路径必须为新路径，不能为已存在路径，Fileset 路径不支持重命名，不支持路径为软链接。
     *   - Fileset路径支持的最大深度为8层，根目录/为0层。例如，Fileset路径为/test/aaa/ccc/，则表示路径深度为3层。
     *   - Fileset路径为多层目录时，父目录必须是已存在的目录。
     *   - 不支持在 Fileset 中嵌套 Fileset，即当父目录已指定为Fileset，其子目录不支持指定为Fileset。一个 Fileset 路径只支持一个配额。
     *   - Fileset容量配额，最小起步10 GiB，扩容单位为1 GiB。
     *   - Fileset最多支持100亿个文件或目录，最小起步10000，扩容单位为1。
     *   - 修改目录配额时，设置的配额容量或文件数必须高于已使用容量或文件数。
     *   - 配额的统计有15分钟的延迟，当前的实际使用量15分钟之后才会生效。
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
     * - CPFS使用说明
     *   - 仅支持CPFS 2.2.0及以上版本创建Fileset。您可以在控制台文件系统详情页面查看版本信息。
     *   - 单个CPFS文件系统最多支持创建10个Fileset。
     *   - 父目录必须是已存在的目录。
     *   - Fileset路径支持的最大深度为8层，根目录/为0层。例如，Fileset路径为/test/aaa/ccc/，则表示路径深度为3层。
     *   - 不支持Fileset中嵌套Fileset。即当父目录已指定为Fileset，其子目录不支持指定为Fileset。
     *   - Fileset最多支持100万个文件，如果文件数量超过此上限，添加新文件会返回`no space`错误信息。
     * - CPFS智算版使用说明
     *   - 仅支持CPFS智算版 2.7.0及以上版本创建Fileset。您可以在控制台文件系统详情页面查看版本信息。
     *   - 单个CPFS文件系统最多支持创建500个Fileset。
     *   - Fileset路径必须为新路径，不能为已存在路径，Fileset 路径不支持重命名，不支持路径为软链接。
     *   - Fileset路径支持的最大深度为8层，根目录/为0层。例如，Fileset路径为/test/aaa/ccc/，则表示路径深度为3层。
     *   - Fileset路径为多层目录时，父目录必须是已存在的目录。
     *   - 不支持在 Fileset 中嵌套 Fileset，即当父目录已指定为Fileset，其子目录不支持指定为Fileset。一个 Fileset 路径只支持一个配额。
     *   - Fileset容量配额，最小起步10 GiB，扩容单位为1 GiB。
     *   - Fileset最多支持100亿个文件或目录，最小起步10000，扩容单位为1。
     *   - 修改目录配额时，设置的配额容量或文件数必须高于已使用容量或文件数。
     *   - 配额的统计有15分钟的延迟，当前的实际使用量15分钟之后才会生效。
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
     * Creates LDAP configurations.
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
     * Creates LDAP configurations.
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
     * Creates a lifecycle policy.
     *
     * @remarks
     * - 仅通用型NAS文件系统和CPFS智算版支持创建生命周期管理策略。
     * - 每个 CPFS 智算版文件系统最多创建 10 个 Auto 类型 和 100 个 OnDemand 类型的生命周期管理策略。
     * - 每个地域可以创建 20 个通用型 NAS 的生命周期管理策略。
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
     * Creates a lifecycle policy.
     *
     * @remarks
     * - 仅通用型NAS文件系统和CPFS智算版支持创建生命周期管理策略。
     * - 每个 CPFS 智算版文件系统最多创建 10 个 Auto 类型 和 100 个 OnDemand 类型的生命周期管理策略。
     * - 每个地域可以创建 20 个通用型 NAS 的生命周期管理策略。
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
     *   Only General-purpose NAS file systems support this operation.
     * *   You can run a maximum of 20 data retrieval tasks in each region within an Alibaba Cloud account.
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
     *   Only General-purpose NAS file systems support this operation.
     * *   You can run a maximum of 20 data retrieval tasks in each region within an Alibaba Cloud account.
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
     * Dumps the logs of a General-purpose NAS file system to Simple Log Service.
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
     * Dumps the logs of a General-purpose NAS file system to Simple Log Service.
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
     * - 在使用CreateMountTarget接口创建挂载点时部分资源的生成是异步完成的。因此在执行CreateMountTarget接口成功后，请先调用DescribeMountTargets接口查询挂载点状态，当挂载点状态为**Active**后再执行挂载文件系统操作，否则可能会挂载失败。
     * - 调用此接口将自动创建操作所需的NAS服务关联角色。更多信息，请参见[管理NAS服务关联角色](https://help.aliyun.com/document_detail/208530.html)。
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
     * - 在使用CreateMountTarget接口创建挂载点时部分资源的生成是异步完成的。因此在执行CreateMountTarget接口成功后，请先调用DescribeMountTargets接口查询挂载点状态，当挂载点状态为**Active**后再执行挂载文件系统操作，否则可能会挂载失败。
     * - 调用此接口将自动创建操作所需的NAS服务关联角色。更多信息，请参见[管理NAS服务关联角色](https://help.aliyun.com/document_detail/208530.html)。
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
     * -  该接口仅适用于CPFS文件系统。
     * -  前提条件
     *
     *    已创建协议服务。
     * - 其它
     *     - 协议服务的导出VPC网段不可与文件系统VPC网段重叠。
     *     - 一个协议服务上的多个导出VPC之间网段不可重叠。
     *     - 同一个协议服务最多可以创建10个导出目录。
     *     - 创建协议服务导出目录会消耗指定vSwitch上的IP地址（最多消耗32个IP地址），请确保目标vSwitch IP资源充足。
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
     * -  该接口仅适用于CPFS文件系统。
     * -  前提条件
     *
     *    已创建协议服务。
     * - 其它
     *     - 协议服务的导出VPC网段不可与文件系统VPC网段重叠。
     *     - 一个协议服务上的多个导出VPC之间网段不可重叠。
     *     - 同一个协议服务最多可以创建10个导出目录。
     *     - 创建协议服务导出目录会消耗指定vSwitch上的IP地址（最多消耗32个IP地址），请确保目标vSwitch IP资源充足。
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
     * Creates a protocol service for a Cloud Parallel File Storage (CPFS) file system. The creation takes about 5 to 10 minutes.
     *
     * @remarks
     * - 该接口仅适用于CPFS文件系统。
     * -  仅CPFS 2.3.0及以上版本支持协议服务。您可以通过调用[DescribeFileSystems](https://help.aliyun.com/document_detail/163314.html)接口查询目标文件系统的版本号。
     * - 协议服务规格
     *   协议服务包括两种协议类型：通用型和缓存型。缓存型相比通用型，提供热点数据缓存能力。在命中缓存的情况下，缓存型协议服务的带宽可超过CPFS文件系统的带宽，达到协议服务设定的最大带宽值。
     *
     *     -   通用型：为CPFS提供NFS协议访问能力和[目录级挂载点](https://help.aliyun.com/document_detail/427175.html)，用户无需配置POSIX客户端管理集群。该功能免费。
     *     -  缓存型：在通用型基础上提供基于LRU策略的服务端内存缓存。当数据缓存于内存中时，CPFS可提供更高的内网带宽。缓存型协议服务分为缓存1型和缓存2型两种协议服务规格，差异点为内网带宽大小和内存缓存大小。
     *      >  缓存型协议服务为收费服务，正在邀测。有关缓存型协议服务的付费方式，请参见[计费项](https://help.aliyun.com/document_detail/111858.html)。如果您有任何反馈或疑问，欢迎加入钉钉用户群（钉钉群号：31045006299）与CPFS工程师进行交流讨论。
     * - 协议类型
     *   仅支持NFSv3协议。
     * - 其它
     *     - 一个CPFS文件系统只能创建一个协议服务。
     *     - 创建协议服务会消耗指定vSwitch上的IP地址（最多消耗32个IP地址），请确保目标vSwitch IP资源充足。
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
     * Creates a protocol service for a Cloud Parallel File Storage (CPFS) file system. The creation takes about 5 to 10 minutes.
     *
     * @remarks
     * - 该接口仅适用于CPFS文件系统。
     * -  仅CPFS 2.3.0及以上版本支持协议服务。您可以通过调用[DescribeFileSystems](https://help.aliyun.com/document_detail/163314.html)接口查询目标文件系统的版本号。
     * - 协议服务规格
     *   协议服务包括两种协议类型：通用型和缓存型。缓存型相比通用型，提供热点数据缓存能力。在命中缓存的情况下，缓存型协议服务的带宽可超过CPFS文件系统的带宽，达到协议服务设定的最大带宽值。
     *
     *     -   通用型：为CPFS提供NFS协议访问能力和[目录级挂载点](https://help.aliyun.com/document_detail/427175.html)，用户无需配置POSIX客户端管理集群。该功能免费。
     *     -  缓存型：在通用型基础上提供基于LRU策略的服务端内存缓存。当数据缓存于内存中时，CPFS可提供更高的内网带宽。缓存型协议服务分为缓存1型和缓存2型两种协议服务规格，差异点为内网带宽大小和内存缓存大小。
     *      >  缓存型协议服务为收费服务，正在邀测。有关缓存型协议服务的付费方式，请参见[计费项](https://help.aliyun.com/document_detail/111858.html)。如果您有任何反馈或疑问，欢迎加入钉钉用户群（钉钉群号：31045006299）与CPFS工程师进行交流讨论。
     * - 协议类型
     *   仅支持NFSv3协议。
     * - 其它
     *     - 一个CPFS文件系统只能创建一个协议服务。
     *     - 创建协议服务会消耗指定vSwitch上的IP地址（最多消耗32个IP地址），请确保目标vSwitch IP资源充足。
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
     * Creates a job to permanently delete a file or directory from the recycle bin.
     *
     * @remarks
     * - 仅通用型NAS文件系统支持该功能。
     * - 彻底删除目录时，目录中的内容会被递归清理。
     * - 单个文件系统一次只能执行一个彻底删除任务。正在彻底删除文件或目录时，无法发起新的恢复或清理任务。
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
     * Creates a job to permanently delete a file or directory from the recycle bin.
     *
     * @remarks
     * - 仅通用型NAS文件系统支持该功能。
     * - 彻底删除目录时，目录中的内容会被递归清理。
     * - 单个文件系统一次只能执行一个彻底删除任务。正在彻底删除文件或目录时，无法发起新的恢复或清理任务。
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
     * Restores a file or directory from the recycle bin.
     *
     * @remarks
     * - 仅通用型NAS文件系统支持该功能。
     * - 单个文件系统一次只能执行一个文件恢复或清理任务。正在恢复文件时，无法发起新的文件恢复或清理任务。
     * - 单个恢复任务只能恢复一个文件或目录，恢复指定目录会递归恢复目录下的所有文件。
     * - 文件被恢复后会进行数据整理，数据整理期间读请求性能稍有下降。
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
     * Restores a file or directory from the recycle bin.
     *
     * @remarks
     * - 仅通用型NAS文件系统支持该功能。
     * - 单个文件系统一次只能执行一个文件恢复或清理任务。正在恢复文件时，无法发起新的文件恢复或清理任务。
     * - 单个恢复任务只能恢复一个文件或目录，恢复指定目录会递归恢复目录下的所有文件。
     * - 文件被恢复后会进行数据整理，数据整理期间读请求性能稍有下降。
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
     *   The snapshot feature is in public preview and is provided free of charge. [File Storage NAS Service Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed in public preview.
     * *   Only advanced Extreme NAS file systems support the snapshot feature.
     * *   You can create a maximum of 128 snapshots for a file system.
     * *   The compute node on which a file system is mounted must function as expected. Otherwise, you cannot create a snapshot for the file system.
     * *   You can create only one snapshot for a file system at a time.
     * *   If the file system expires when a snapshot is being created, the file system is released and the snapshot is deleted.
     * *   When you create a snapshot for a file system, the I/O performance of the file system may be degraded for a short period of time. We recommend that you create snapshots during off-peak hours.
     * *   A snapshot is a backup of a file system at a specific point in time. After you create a snapshot, incremental data that is generated in the file system will not be synchronized to the snapshot.
     * *   Manually created snapshots will not be deleted until 15 days after the service is suspended due to overdue payments. We recommend that you delete unnecessary snapshots at regular intervals to prevent extra fees incurred by the snapshots.
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
     *   The snapshot feature is in public preview and is provided free of charge. [File Storage NAS Service Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed in public preview.
     * *   Only advanced Extreme NAS file systems support the snapshot feature.
     * *   You can create a maximum of 128 snapshots for a file system.
     * *   The compute node on which a file system is mounted must function as expected. Otherwise, you cannot create a snapshot for the file system.
     * *   You can create only one snapshot for a file system at a time.
     * *   If the file system expires when a snapshot is being created, the file system is released and the snapshot is deleted.
     * *   When you create a snapshot for a file system, the I/O performance of the file system may be degraded for a short period of time. We recommend that you create snapshots during off-peak hours.
     * *   A snapshot is a backup of a file system at a specific point in time. After you create a snapshot, incremental data that is generated in the file system will not be synchronized to the snapshot.
     * *   Manually created snapshots will not be deleted until 15 days after the service is suspended due to overdue payments. We recommend that you delete unnecessary snapshots at regular intervals to prevent extra fees incurred by the snapshots.
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
     * Deletes a permission group.
     *
     * @remarks
     * 默认权限组（DEFAULT_VPC_GROUP_NAME）不支持删除。
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
     * Deletes a permission group.
     *
     * @remarks
     * 默认权限组（DEFAULT_VPC_GROUP_NAME）不支持删除。
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
     *   Only General-purpose Network File System (NFS) file systems support access points.
     * *   After an access point is deleted, all I/O operations that are being performed on the directory accessed over the access point are interrupted immediately. Exercise caution when you perform this operation.
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
     *   Only General-purpose Network File System (NFS) file systems support access points.
     * *   After an access point is deleted, all I/O operations that are being performed on the directory accessed over the access point are interrupted immediately. Exercise caution when you perform this operation.
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
     * Deletes a rule from a permission group.
     *
     * @remarks
     * 默认权限组（DEFAULT_VPC_GROUP_NAME）中的规则不支持删除。
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
     * Deletes a rule from a permission group.
     *
     * @remarks
     * 默认权限组（DEFAULT_VPC_GROUP_NAME）中的规则不支持删除。
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
     * Deletes an automatic snapshot policy.
     *
     * @remarks
     *   The snapshot feature is in public preview and is provided free of charge. [File Storage NAS Service Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed in public preview.
     * *   Only advanced Extreme NAS file systems support the snapshot feature.
     * *   If you delete an automatic snapshot policy that is applied to a file system, snapshots for the file system are no longer created based on the policy.
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
     *   The snapshot feature is in public preview and is provided free of charge. [File Storage NAS Service Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed in public preview.
     * *   Only advanced Extreme NAS file systems support the snapshot feature.
     * *   If you delete an automatic snapshot policy that is applied to a file system, snapshots for the file system are no longer created based on the policy.
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
     * Deletes a dataflow.
     *
     * @remarks
     * - 仅CPFS 2.2.0及以上版本、智算CPFS 2.4.0及以上版本支持数据流动。您可以在控制台文件系统详情页面查看版本信息。
     * - 仅支持删除`Running`、`Stopped`状态的数据流动。
     * - 删除后，数据流动相关的资源会被释放，且无法恢复。如需数据流动，请您重新创建。
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
     * - 仅CPFS 2.2.0及以上版本、智算CPFS 2.4.0及以上版本支持数据流动。您可以在控制台文件系统详情页面查看版本信息。
     * - 仅支持删除`Running`、`Stopped`状态的数据流动。
     * - 删除后，数据流动相关的资源会被释放，且无法恢复。如需数据流动，请您重新创建。
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
     * - 仅当文件系统的挂载点数目为0时，支持删除文件系统实例。
     * - 当文件系统未创建生命周期策略时，支持删除文件系统实例。
     * - 文件系统实例一旦删除，数据将不可恢复，请谨慎操作。
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
     * - 仅当文件系统的挂载点数目为0时，支持删除文件系统实例。
     * - 当文件系统未创建生命周期策略时，支持删除文件系统实例。
     * - 文件系统实例一旦删除，数据将不可恢复，请谨慎操作。
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
     * - This operation is supported only for CPFS file systems of version 2.2.0 or later and CPFS for AI and HPC file systems of version 2.7.0 or later. Deleting a fileset permanently removes all data in the associated directory. Use this operation with caution.
     * - If deletion protection is enabled, you must disable it before you can delete the fileset.
     * - When you delete a fileset from a CPFS file system, the disk space is released immediately. When you delete a fileset from a CPFS for AI and HPC file system, the disk space is released gradually.
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
     * - This operation is supported only for CPFS file systems of version 2.2.0 or later and CPFS for AI and HPC file systems of version 2.7.0 or later. Deleting a fileset permanently removes all data in the associated directory. Use this operation with caution.
     * - If deletion protection is enabled, you must disable it before you can delete the fileset.
     * - When you delete a fileset from a CPFS file system, the disk space is released immediately. When you delete a fileset from a CPFS for AI and HPC file system, the disk space is released gradually.
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
     * {"summary1":""}.
     *
     * @remarks
     * # 说明
     * 本接口只支持CPFS并行文件系统。
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
     * {"summary1":""}.
     *
     * @remarks
     * # 说明
     * 本接口只支持CPFS并行文件系统。
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
     * Deletes a lifecycle policy.
     *
     * @remarks
     * 仅通用型NAS文件系统和CPFS智算版支持该功能。
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
     * Deletes a lifecycle policy.
     *
     * @remarks
     * 仅通用型NAS文件系统和CPFS智算版支持该功能。
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
     * Disables log dumping for a General-purpose NAS file system.
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
     * Disables log dumping for a General-purpose NAS file system.
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
     * Deletes a mount target.
     *
     * @remarks
     * 删除挂载点后，无法恢复，请谨慎操作。
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
     * Deletes a mount target.
     *
     * @remarks
     * 删除挂载点后，无法恢复，请谨慎操作。
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
     * 该接口仅适用于CPFS文件系统。
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
     * 该接口仅适用于CPFS文件系统。
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
     * Deletes a protocol service of a Cloud Parallel File Storage (CPFS) file system.
     *
     * @remarks
     * - 该接口仅适用于CPFS文件系统。
     * - 删除协议服务时，会同时删除协议服务中的导出目录。
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
     * Deletes a protocol service of a Cloud Parallel File Storage (CPFS) file system.
     *
     * @remarks
     * - 该接口仅适用于CPFS文件系统。
     * - 删除协议服务时，会同时删除协议服务中的导出目录。
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
     * Deletes a snapshot or cancels a snapshot that is being created.
     *
     * @remarks
     *   The snapshot feature is in public preview and is provided free of charge. [File Storage NAS Service Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed in public preview.
     * *   Only advanced Extreme NAS file systems support this feature.
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
     * Deletes a snapshot or cancels a snapshot that is being created.
     *
     * @remarks
     *   The snapshot feature is in public preview and is provided free of charge. [File Storage NAS Service Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed in public preview.
     * *   Only advanced Extreme NAS file systems support this feature.
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
     * Queries permission groups.
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
     * Queries permission groups.
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
     * 仅通用型NAS NFS协议文件系统支持该功能。
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
     * 仅通用型NAS NFS协议文件系统支持该功能。
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
     * Queries a list of access points.
     *
     * @remarks
     * 仅通用型NAS NFS协议文件系统支持该功能。
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

    /**
     * Queries a list of access points.
     *
     * @remarks
     * 仅通用型NAS NFS协议文件系统支持该功能。
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
     * Queries the information about rules in a permission group.
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
     * Queries the information about rules in a permission group.
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
     * Queries automatic snapshot policies.
     *
     * @remarks
     *   The snapshot feature is in public preview and is provided free of charge. [File Storage NAS Service Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed in public preview.
     * *   Only advanced Extreme NAS file systems support this feature.
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
     * Queries automatic snapshot policies.
     *
     * @remarks
     *   The snapshot feature is in public preview and is provided free of charge. [File Storage NAS Service Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed in public preview.
     * *   Only advanced Extreme NAS file systems support this feature.
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
     * Queries automatic snapshot tasks.
     *
     * @remarks
     *   The snapshot feature is in public preview and is provided free of charge. [File Storage NAS Service Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed in public preview.
     * *   Only advanced Extreme NAS file systems support the snapshot feature.
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
     * Queries automatic snapshot tasks.
     *
     * @remarks
     *   The snapshot feature is in public preview and is provided free of charge. [File Storage NAS Service Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed in public preview.
     * *   Only advanced Extreme NAS file systems support the snapshot feature.
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
     * Queries the status of clients in the blacklist of a Cloud Parallel File Storage (CPFS) file system.
     *
     * @remarks
     * The API operation is available only for CPFS file systems.
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
     * Queries the status of clients in the blacklist of a Cloud Parallel File Storage (CPFS) file system.
     *
     * @remarks
     * The API operation is available only for CPFS file systems.
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
     * Queries data flow subtasks in batches.
     *
     * @remarks
     * 仅CPFS智算版2.6.0 及以上版本支持。您可以在控制台文件系统详情页面查看版本信息。
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
     * Queries data flow subtasks in batches.
     *
     * @remarks
     * 仅CPFS智算版2.6.0 及以上版本支持。您可以在控制台文件系统详情页面查看版本信息。
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
     * Retrieves data flow task details.
     *
     * @remarks
     * Querying data flow tasks is supported only on CPFS 2.2.0 or later and CPFS AI Computing Edition 2.4.0 or later. You can find the version information on the file system details page in the console.
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
     * Retrieves data flow task details.
     *
     * @remarks
     * Querying data flow tasks is supported only on CPFS 2.2.0 or later and CPFS AI Computing Edition 2.4.0 or later. You can find the version information on the file system details page in the console.
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
     * Queries the dataflows of a CPFS file system.
     *
     * @remarks
     * - 仅CPFS 2.2.0及以上版本、CPFS智算版2.4.0及以上版本支持数据流动。您可以在控制台文件系统详情页面查看版本信息。
     * - 筛选键（Filters）中，FsetIds、DataFlowlds、SourceStorage、ThroughputList、Status需要做全字匹配，FileSystemPath、Description、SourceStoragePath支持模糊匹配。
     * - 支持组合查询。
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
     * Queries the dataflows of a CPFS file system.
     *
     * @remarks
     * - 仅CPFS 2.2.0及以上版本、CPFS智算版2.4.0及以上版本支持数据流动。您可以在控制台文件系统详情页面查看版本信息。
     * - 筛选键（Filters）中，FsetIds、DataFlowlds、SourceStorage、ThroughputList、Status需要做全字匹配，FileSystemPath、Description、SourceStoragePath支持模糊匹配。
     * - 支持组合查询。
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
     * Queries the directory quotas of a file system.
     *
     * @remarks
     * Only General-purpose NAS file systems support the directory quota feature.
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
     * Queries the directory quotas of a file system.
     *
     * @remarks
     * Only General-purpose NAS file systems support the directory quota feature.
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
     * Queries the statistics of file systems that are owned by the current account.
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
     * Queries the statistics of file systems that are owned by the current account.
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
     * This operation retrieves information about file systems.
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
     * This operation retrieves information about file systems.
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
     * Queries the information about created filesets.
     *
     * @remarks
     * - 仅CPFS 2.2.0和CPFS智算版2.7.0及以上版本支持Fileset。您可以在控制台文件系统详情页面查看版本信息。
     * - 筛选键（Filters）中，FsetIds需要做全字匹配，FileSystemPath、Description支持模糊匹配。
     * - 支持组合查询。
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
     * Queries the information about created filesets.
     *
     * @remarks
     * - 仅CPFS 2.2.0和CPFS智算版2.7.0及以上版本支持Fileset。您可以在控制台文件系统详情页面查看版本信息。
     * - 筛选键（Filters）中，FsetIds需要做全字匹配，FileSystemPath、Description支持模糊匹配。
     * - 支持组合查询。
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
     * Retrieves the list of HpnZones for a file system. Access performance is optimal when compute nodes are located in one of the associated HpnZones.
     *
     * @remarks
     * - 仅支持CPFS智算版文件系统。
     * - 此接口为批量接口，每次最多允许查询 20 个文件系统。
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
     * Retrieves the list of HpnZones for a file system. Access performance is optimal when compute nodes are located in one of the associated HpnZones.
     *
     * @remarks
     * - 仅支持CPFS智算版文件系统。
     * - 此接口为批量接口，每次最多允许查询 20 个文件系统。
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
     * Queries information about virtual storage channels associated with a file system.
     *
     * @remarks
     * - 仅CPFS智算版支持该功能。
     * - 支持批量执行，批量执行情况下，目前仅支持1个VscId关联到多个FileSystemId，即ResourceIds.VscId需相等。
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
     * Queries information about virtual storage channels associated with a file system.
     *
     * @remarks
     * - 仅CPFS智算版支持该功能。
     * - 支持批量执行，批量执行情况下，目前仅支持1个VscId关联到多个FileSystemId，即ResourceIds.VscId需相等。
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
     * Queries lifecycle policies.
     *
     * @remarks
     * 仅通用型NAS文件系统和 CPFS 智算版支持该功能。
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
     * Queries lifecycle policies.
     *
     * @remarks
     * 仅通用型NAS文件系统和 CPFS 智算版支持该功能。
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
     * Queries the execution logs of a lifecycle policy, returning up to 1,000 entries from the last 90 days. This feature is only available for CPFS AI Computing Edition.
     *
     * @remarks
     * Queries the execution logs of a lifecycle policy. You can query up to 1,000 log entries from the last 90 days. Only CPFS (AI Computing Edition) supports this operation.
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
     * Queries the execution logs of a lifecycle policy, returning up to 1,000 entries from the last 90 days. This feature is only available for CPFS AI Computing Edition.
     *
     * @remarks
     * Queries the execution logs of a lifecycle policy. You can query up to 1,000 log entries from the last 90 days. Only CPFS (AI Computing Edition) supports this operation.
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
     * Queries the log dump information configured in log analysis.
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
     * Queries the log dump information configured in log analysis.
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
     * Retrieves information about mount targets.
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
     * Retrieves information about mount targets.
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
     * Queries the clients on which a file system is mounted.
     *
     * @remarks
     * - 仅通用型NAS支持该接口。
     * - 客户端列表显示近一分钟对文件系统有读写访问的客户端IP，部分已挂载而没有访问文件系统的客户端IP可能不在此列表中显示。
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
     * Queries the clients on which a file system is mounted.
     *
     * @remarks
     * - 仅通用型NAS支持该接口。
     * - 客户端列表显示近一分钟对文件系统有读写访问的客户端IP，部分已挂载而没有访问文件系统的客户端IP可能不在此列表中显示。
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
     * Queries whether the NFS ACL feature is enabled for a file system.
     *
     * @remarks
     * 仅通用型NAS NFS协议文件系统支持该功能。
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
     * Queries whether the NFS ACL feature is enabled for a file system.
     *
     * @remarks
     * 仅通用型NAS NFS协议文件系统支持该功能。
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
     * 该接口仅适用于CPFS文件系统。
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
     * 该接口仅适用于CPFS文件系统。
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
     * Queries the information about protocol services.
     *
     * @remarks
     * 该接口仅适用于CPFS文件系统。
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
     * Queries the information about protocol services.
     *
     * @remarks
     * 该接口仅适用于CPFS文件系统。
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
     * Queries the regions in which File Storage NAS is available.
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
     * Queries the regions in which File Storage NAS is available.
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
     * Queries the information about the access control list (ACL) feature of a Server Message Block (SMB) file system that resides in an Active Directory (AD) domain.
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
     * Queries the information about the access control list (ACL) feature of a Server Message Block (SMB) file system that resides in an Active Directory (AD) domain.
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
     * Queries the information about one or more snapshots of a file system.
     *
     * @remarks
     *   The snapshot feature is in public preview and is provided free of charge. [File Storage NAS Service Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed in public preview.
     * *   Only advanced Extreme NAS file systems support this feature.
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
     * Queries the information about one or more snapshots of a file system.
     *
     * @remarks
     *   The snapshot feature is in public preview and is provided free of charge. [File Storage NAS Service Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed in public preview.
     * *   Only advanced Extreme NAS file systems support this feature.
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
     * You can call the DescribeStoragePackages operation to query the list of storage plans.
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
     * You can call the DescribeStoragePackages operation to query the list of storage plans.
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
     * Queries all zones in a region and the file system types that are supported in each zone.
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
     * Queries all zones in a region and the file system types that are supported in each zone.
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
     * Unassociates a VSC device from a file system.
     *
     * @remarks
     * - 仅CPFS智算版支持该功能。
     * - 支持批量执行，批量执行情况下，目前仅支持1个VscId关联到多个FileSystemId，即ResourceIds.VscId需相等。
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
     * Unassociates a VSC device from a file system.
     *
     * @remarks
     * - 仅CPFS智算版支持该功能。
     * - 支持批量执行，批量执行情况下，目前仅支持1个VscId关联到多个FileSystemId，即ResourceIds.VscId需相等。
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
     * Disables and empties the recycle bin of a General-purpose NAS file system.
     *
     * @remarks
     *   Only General-purpose NAS file systems support this operation.
     * *   If you disable the recycle bin, all files in the recycle bin are permanently deleted.
     * *   If you disable and then enable the recycle bin, the recycle bin is empty. You cannot retrieve the deleted files.
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
     * Disables and empties the recycle bin of a General-purpose NAS file system.
     *
     * @remarks
     *   Only General-purpose NAS file systems support this operation.
     * *   If you disable the recycle bin, all files in the recycle bin are permanently deleted.
     * *   If you disable and then enable the recycle bin, the recycle bin is empty. You cannot retrieve the deleted files.
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
     * Disables the NFS ACL feature for a file system.
     *
     * @remarks
     * 仅通用型NAS NFS协议文件系统支持该功能。
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
     * Disables the NFS ACL feature for a file system.
     *
     * @remarks
     * 仅通用型NAS NFS协议文件系统支持该功能。
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
     * Disables the access control list (ACL) feature for a Server Message Block (SMB) file system that resides in an Active Directory (AD) domain.
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
     * Disables the access control list (ACL) feature for a Server Message Block (SMB) file system that resides in an Active Directory (AD) domain.
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
     * Enables the NFS ACL feature for a file system.
     *
     * @remarks
     * 仅通用型NAS NFS协议文件系统支持该功能。
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
     * Enables the NFS ACL feature for a file system.
     *
     * @remarks
     * 仅通用型NAS NFS协议文件系统支持该功能。
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
     * Enables the recycle bin feature for a file system.
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
     * Enables the recycle bin feature for a file system.
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
     * Enables the access control list (ACL) feature for a Server Message Block (SMB) file system that resides in an Active Directory (AD) domain.
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
     * Enables the access control list (ACL) feature for a Server Message Block (SMB) file system that resides in an Active Directory (AD) domain.
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
     * Checks if a specified directory contains infrequent access or archive storage files, or if a specified file is an infrequent access or archive storage file.
     *
     * @remarks
     * This operation is available only for general-purpose NAS file systems.
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
     * Checks if a specified directory contains infrequent access or archive storage files, or if a specified file is an infrequent access or archive storage file.
     *
     * @remarks
     * This operation is available only for general-purpose NAS file systems.
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
     * Queries the information about the created fileset.
     *
     * @remarks
     * 仅CPFS 2.2.0和CPFS智算版2.7.0及以上版本支持Fileset。您可以在控制台文件系统详情页面查看版本信息。
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
     * Queries the information about the created fileset.
     *
     * @remarks
     * 仅CPFS 2.2.0和CPFS智算版2.7.0及以上版本支持Fileset。您可以在控制台文件系统详情页面查看版本信息。
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
     * Query the export directory information of the protocol service.
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
     * Query the export directory information of the protocol service.
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
     * Queries the recycle bin configurations of a General-purpose NAS file system.
     *
     * @remarks
     * Only General-purpose File Storage NAS (NAS) file systems support this operation.
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
     * Queries the recycle bin configurations of a General-purpose NAS file system.
     *
     * @remarks
     * Only General-purpose File Storage NAS (NAS) file systems support this operation.
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
     * Lists Infrequent Access files and the subdirectories that contain them from a specified directory on a General-purpose NAS file system.
     *
     * @remarks
     * Only general-purpose NAS file systems support this feature.
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
     * Lists Infrequent Access files and the subdirectories that contain them from a specified directory on a General-purpose NAS file system.
     *
     * @remarks
     * Only general-purpose NAS file systems support this feature.
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
     * Queries data retrieval tasks.
     *
     * @remarks
     * Only General-purpose NAS file systems support this operation.
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
     * Queries data retrieval tasks.
     *
     * @remarks
     * Only General-purpose NAS file systems support this operation.
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
     * Queries the directories that are recently deleted.
     *
     * @remarks
     * Only General-purpose NAS file systems support this operation.
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
     * Queries the directories that are recently deleted.
     *
     * @remarks
     * Only General-purpose NAS file systems support this operation.
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
     * Queries the jobs of the recycle bin.
     *
     * @remarks
     *   Only General-purpose NAS file systems support this operation.
     * *   You can query a maximum of 50 jobs that are recently executed.
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
     * Queries the jobs of the recycle bin.
     *
     * @remarks
     *   Only General-purpose NAS file systems support this operation.
     * *   You can query a maximum of 50 jobs that are recently executed.
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
     * Only General-purpose NAS file systems support this operation.
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
     * Only General-purpose NAS file systems support this operation.
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
     * Queries tags.
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
     * Queries tags.
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
     * 默认权限组（DEFAULT_VPC_GROUP_NAME）不支持修改。
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
     * 默认权限组（DEFAULT_VPC_GROUP_NAME）不支持修改。
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
     * Modifies the information about an access point.
     *
     * @remarks
     * Only General-purpose Network File System (NFS) file systems support this operation.
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
     * Modifies the information about an access point.
     *
     * @remarks
     * Only General-purpose Network File System (NFS) file systems support this operation.
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
     * Modifies a rule in a permission group.
     *
     * @remarks
     * 默认权限组（DEFAULT_VPC_GROUP_NAME）中的规则不支持修改。
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
     * Modifies a rule in a permission group.
     *
     * @remarks
     * 默认权限组（DEFAULT_VPC_GROUP_NAME）中的规则不支持修改。
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
     * An automatic snapshot policy is modified. After you modify an automatic snapshot policy that is applied to a file system, the modification immediately applies to subsequent snapshots that are created for the file system.
     *
     * @remarks
     *   The snapshot feature is in public preview and is provided free of charge. [File Storage NAS Service Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed in public preview.
     * *   Only advanced Extreme NAS file systems support this feature.
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
     * An automatic snapshot policy is modified. After you modify an automatic snapshot policy that is applied to a file system, the modification immediately applies to subsequent snapshots that are created for the file system.
     *
     * @remarks
     *   The snapshot feature is in public preview and is provided free of charge. [File Storage NAS Service Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed in public preview.
     * *   Only advanced Extreme NAS file systems support this feature.
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
     * Modifies the attributes of a dataflow.
     *
     * @remarks
     * - CPFS 2.2.0及以上版本、CPFS智算版 2.4.0及以上版本支持数据流动。
     * - 仅支持状态为`Running（正常）`状态的数据流动修改属性。
     * - 修改数据流动一般耗时2~5分钟，您可以通过[DescribeDataFlows](https://help.aliyun.com/document_detail/2402270.html)查询修改数据流动的状态。
     * - CPFS数据流动规格：
     *     - 数据流动带宽（Throughput）支持600 MB/s、1200 MB/s和1500 MB/s三种规格。数据流动带宽是指该数据流动进行导入或导出数据时能达到的最大传输带宽。
     *     - 库存查询：当设置DryRun为true时，可校验修改该规格的数据流动的资源是否满足。
     * - CPFS计费
     *   修改数据流动带宽（Throughput）涉及数据流动带宽计费，建议您提前了解CPFS的计费方式。更多详情，请参见[CPFS计费说明](https://help.aliyun.com/document_detail/111858.html)。
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
     * Modifies the attributes of a dataflow.
     *
     * @remarks
     * - CPFS 2.2.0及以上版本、CPFS智算版 2.4.0及以上版本支持数据流动。
     * - 仅支持状态为`Running（正常）`状态的数据流动修改属性。
     * - 修改数据流动一般耗时2~5分钟，您可以通过[DescribeDataFlows](https://help.aliyun.com/document_detail/2402270.html)查询修改数据流动的状态。
     * - CPFS数据流动规格：
     *     - 数据流动带宽（Throughput）支持600 MB/s、1200 MB/s和1500 MB/s三种规格。数据流动带宽是指该数据流动进行导入或导出数据时能达到的最大传输带宽。
     *     - 库存查询：当设置DryRun为true时，可校验修改该规格的数据流动的资源是否满足。
     * - CPFS计费
     *   修改数据流动带宽（Throughput）涉及数据流动带宽计费，建议您提前了解CPFS的计费方式。更多详情，请参见[CPFS计费说明](https://help.aliyun.com/document_detail/111858.html)。
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
     * Modifies an AutoRefresh configuration of a dataflow.
     *
     * @remarks
     * - 该接口仅适用于CPFS文件系统。
     * - 仅CPFS 2.2.0及以上版本支持数据流动。您可以在控制台文件系统详情页面查看版本信息。
     * - 仅支持修改`Running（正常`）、`Stopped（停止）`状态数据流动的自动更新配置。
     * - 修改自动更新配置一般耗时2～5分钟，您可以通过[DescribeDataFlows](https://help.aliyun.com/document_detail/2402270.html)查询修改自动更新任务的状态。
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
     * Modifies an AutoRefresh configuration of a dataflow.
     *
     * @remarks
     * - 该接口仅适用于CPFS文件系统。
     * - 仅CPFS 2.2.0及以上版本支持数据流动。您可以在控制台文件系统详情页面查看版本信息。
     * - 仅支持修改`Running（正常`）、`Stopped（停止）`状态数据流动的自动更新配置。
     * - 修改自动更新配置一般耗时2～5分钟，您可以通过[DescribeDataFlows](https://help.aliyun.com/document_detail/2402270.html)查询修改自动更新任务的状态。
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
        if (null !== $tmpReq->options) {
            $request->optionsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->options, 'Options', 'json');
        }

        $query = [];
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
     * Modifies a fileset.
     *
     * @remarks
     * 仅支持CPFS 2.2.0和CPFS智算版2.7.0及以上版本修改Fileset信息。
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
     * Modifies a fileset.
     *
     * @remarks
     * 仅支持CPFS 2.2.0和CPFS智算版2.7.0及以上版本修改Fileset信息。
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
     * Used to modify LDAP configuration.
     *
     * @remarks
     * The API operation is available only for Cloud Parallel File Storage (CPFS) file systems.
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
     * Used to modify LDAP configuration.
     *
     * @remarks
     * The API operation is available only for Cloud Parallel File Storage (CPFS) file systems.
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
     * Modifies a lifecycle policy.
     *
     * @remarks
     * 仅通用型NAS文件系统支持该功能。
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
     * Modifies a lifecycle policy.
     *
     * @remarks
     * 仅通用型NAS文件系统支持该功能。
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
     * Modifies the properties of a mount target.
     *
     * @remarks
     * This operation applies only to mount targets on General-purpose NAS and Extreme NAS file systems.
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
     * Modifies the properties of a mount target.
     *
     * @remarks
     * This operation applies only to mount targets on General-purpose NAS and Extreme NAS file systems.
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
     * Modifies the export directory parameters of a protocol service. Only the description can be modified. The virtual private cloud (VPC) ID and vSwitch ID cannot be changed. To change these IDs, you must delete the export directory and create a new one.
     *
     * @remarks
     * 该接口仅适用于CPFS文件系统。
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
     * Modifies the export directory parameters of a protocol service. Only the description can be modified. The virtual private cloud (VPC) ID and vSwitch ID cannot be changed. To change these IDs, you must delete the export directory and create a new one.
     *
     * @remarks
     * 该接口仅适用于CPFS文件系统。
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
     * 该接口仅适用于CPFS文件系统。
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
     * 该接口仅适用于CPFS文件系统。
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
     * Updates the information about the access control list (ACL) feature of a Server Message Block (SMB) file system that resides in an Active Directory (AD) domain.
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
     * Updates the information about the access control list (ACL) feature of a Server Message Block (SMB) file system that resides in an Active Directory (AD) domain.
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
     * Activates the NAS service.
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
     * Activates the NAS service.
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
     * Remove the client from the blacklist.
     *
     * @remarks
     * The API operation is available only for CPFS file systems.
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
     * Remove the client from the blacklist.
     *
     * @remarks
     * The API operation is available only for CPFS file systems.
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
     * Rolls back a file system to a snapshot of the file system.
     *
     * @remarks
     *   The snapshot feature is in public preview and is provided free of charge. [File Storage NAS Service Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed in public preview.
     * *   Only advanced Extreme NAS file systems support this feature.
     * *   The file system must be in the Running state.
     * *   To roll back a file system to a snapshot, you must specify the ID of the snapshot that is created from the file system.
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
     * Rolls back a file system to a snapshot of the file system.
     *
     * @remarks
     *   The snapshot feature is in public preview and is provided free of charge. [File Storage NAS Service Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed in public preview.
     * *   Only advanced Extreme NAS file systems support this feature.
     * *   The file system must be in the Running state.
     * *   To roll back a file system to a snapshot, you must specify the ID of the snapshot that is created from the file system.
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
     * Retries failed a data retrieval task.
     *
     * @remarks
     * Only General-purpose NAS file systems support this operation.
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
     * Retries failed a data retrieval task.
     *
     * @remarks
     * Only General-purpose NAS file systems support this operation.
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
     * Creates a directory quota for a file system.
     *
     * @remarks
     * Only General-purpose File Storage NAS (NAS) file systems support the directory quota feature.
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
     * Creates a directory quota for a file system.
     *
     * @remarks
     * Only General-purpose File Storage NAS (NAS) file systems support the directory quota feature.
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
     * Sets the quota for a fileset.
     *
     * @remarks
     * - 仅CPFS智算版2.7.0及以上版本支持为文件集设置配额。
     * - Fileset容量配额，最小起步10 GiB，扩容单位为1 GiB。
     * - Fileset最多支持100亿个文件或目录，最小起步10000，扩容单位为1。
     * - 修改目录配额时，设置的配额容量或文件数必须高于已使用容量或文件数。
     * - 容量限制和文件数限制至少填写其中一项。
     * - 配额的统计有15分钟的延迟，当前的实际使用量15分钟之后才会生效。
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
     * Sets the quota for a fileset.
     *
     * @remarks
     * - 仅CPFS智算版2.7.0及以上版本支持为文件集设置配额。
     * - Fileset容量配额，最小起步10 GiB，扩容单位为1 GiB。
     * - Fileset最多支持100亿个文件或目录，最小起步10000，扩容单位为1。
     * - 修改目录配额时，设置的配额容量或文件数必须高于已使用容量或文件数。
     * - 容量限制和文件数限制至少填写其中一项。
     * - 配额的统计有15分钟的延迟，当前的实际使用量15分钟之后才会生效。
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
     * Enables a dataflow.
     *
     * @remarks
     * - 该接口仅适用于CPFS文件系统。
     * - 仅CPFS 2.2.0及以上版本支持数据流动。您可以在控制台文件系统详情页面查看版本信息。
     * - 只能启动`Stopped（停止）`状态的数据流动。
     * - 当DryRun为`true`时，可校验启动该规格的数据流动的资源是否充足。如果库存资源不足，数据流动则无法启动。
     * - 启动数据流动一般耗时2～5分钟，您可通过[DescribeDataFlows](https://help.aliyun.com/document_detail/2402270.html)查询数据流动状态。
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
     * Enables a dataflow.
     *
     * @remarks
     * - 该接口仅适用于CPFS文件系统。
     * - 仅CPFS 2.2.0及以上版本支持数据流动。您可以在控制台文件系统详情页面查看版本信息。
     * - 只能启动`Stopped（停止）`状态的数据流动。
     * - 当DryRun为`true`时，可校验启动该规格的数据流动的资源是否充足。如果库存资源不足，数据流动则无法启动。
     * - 启动数据流动一般耗时2～5分钟，您可通过[DescribeDataFlows](https://help.aliyun.com/document_detail/2402270.html)查询数据流动状态。
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
     * Starts the execution of a lifecycle policy.
     *
     * @remarks
     * This operation is supported only when the `LifecyclePolicyType` of a lifecycle policy is set to `OnDemand` for a CPFS AI-Computing Edition file system.
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
     * Starts the execution of a lifecycle policy.
     *
     * @remarks
     * This operation is supported only when the `LifecyclePolicyType` of a lifecycle policy is set to `OnDemand` for a CPFS AI-Computing Edition file system.
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
     * - 该接口仅适用于CPFS文件系统。
     * - 仅CPFS 2.2.0及以上版本支持数据流动。您可以在控制台文件系统详情页面查看版本信息。
     * - 只能停用`Running（正常）`状态的数据流动。
     * - 停用后，不可在数据流动上创建数据流动任务。如果配置了自动更新，源端发生的数据更新也不会同步到CPFS上。
     * - 停用后，由于资源被回收，数据流动带宽将不再计费，但重新启动数据流动可能因为库存不足导致启动失败。
     * - 停用数据流动一般耗时2～5分钟，您可通过[DescribeDataFlows](https://help.aliyun.com/document_detail/2402271.html)查询数据流动状态。
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
     * - 该接口仅适用于CPFS文件系统。
     * - 仅CPFS 2.2.0及以上版本支持数据流动。您可以在控制台文件系统详情页面查看版本信息。
     * - 只能停用`Running（正常）`状态的数据流动。
     * - 停用后，不可在数据流动上创建数据流动任务。如果配置了自动更新，源端发生的数据更新也不会同步到CPFS上。
     * - 停用后，由于资源被回收，数据流动带宽将不再计费，但重新启动数据流动可能因为库存不足导致启动失败。
     * - 停用数据流动一般耗时2～5分钟，您可通过[DescribeDataFlows](https://help.aliyun.com/document_detail/2402271.html)查询数据流动状态。
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
     * This operation applies only when the LifecyclePolicyType parameter of a lifecycle management policy for a CPFS file system is set to OnDemand.
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
     * This operation applies only when the LifecyclePolicyType parameter of a lifecycle management policy for a CPFS file system is set to OnDemand.
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
     * Creates tags and binds the tags to file systems.
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
     * Creates tags and binds the tags to file systems.
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
     * Removes tags from a file system.
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
     * Removes tags from a file system.
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
     * Updates the rules of a lifecycle policy. This operation is supported only for CPFS for AI file systems. The `UpdateLifecyclePolicy` operation overwrites the entire policy. Omitting an optional parameter deletes its corresponding configuration. To add a rule to an existing policy, call the `DescribeLifecyclePolicies` operation to retrieve the current policy, append the new rule, and then call `UpdateLifecyclePolicy` with the updated configuration.
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
     * Updates the rules of a lifecycle policy. This operation is supported only for CPFS for AI file systems. The `UpdateLifecyclePolicy` operation overwrites the entire policy. Omitting an optional parameter deletes its corresponding configuration. To add a rule to an existing policy, call the `DescribeLifecyclePolicies` operation to retrieve the current policy, append the new rule, and then call `UpdateLifecyclePolicy` with the updated configuration.
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
     * Modifies the retention period of data in the recycle bin of a file system.
     *
     * @remarks
     * Only General-purpose NAS file systems support this operation.
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
     * Modifies the retention period of data in the recycle bin of a file system.
     *
     * @remarks
     * Only General-purpose NAS file systems support this operation.
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
     * Scales up an Extreme NAS file system or a Cloud Parallel File Storage (CPFS) file system.
     *
     * @remarks
     * - 仅支持极速型NAS文件系统和CPFS文件系统扩容。
     * - 通用型NAS按需自动扩容，无须使用本API。
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
     * Scales up an Extreme NAS file system or a Cloud Parallel File Storage (CPFS) file system.
     *
     * @remarks
     * - 仅支持极速型NAS文件系统和CPFS文件系统扩容。
     * - 通用型NAS按需自动扩容，无须使用本API。
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
