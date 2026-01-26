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
use AlibabaCloud\SDK\NAS\V20170626\Models\StopDataFlowRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\StopDataFlowResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\TagResourcesRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\TagResourcesResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\UntagResourcesResponse;
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
     *   This operation is available only to Cloud Parallel File Storage (CPFS) file systems.
     * *   Only CPFS V2.2.0 and later support data flows. You can view the version information on the file system details page in the console.
     * *   You can add AutoRefresh configurations only to the dataflows that are in the `Running` state.
     * *   You can add a maximum of five AutoRefresh configurations to a dataflow.
     * *   It generally takes 2 to 5 minutes to create an AutoRefresh configuration. You can call the [DescribeDataFlows](https://help.aliyun.com/document_detail/336901.html) operation to query the dataflow status.
     * *   AutoRefresh depends on the object modification events collected by EventBridge from the source OSS bucket. You must first [activate EventBridge](https://help.aliyun.com/document_detail/182246.html).
     *     **
     *     **Note** The event buses and event rules created for CPFS in the EventBridge console contain the `Create for cpfs auto refresh` description. The event buses and event rules cannot be modified or deleted. Otherwise, AutoRefresh cannot work properly.
     * *   The AutoRefresh configuration applies only to the prefix and is specified by the RefreshPath parameter. When you add an AutoRefresh configuration to the prefix for a CPFS dataflow, an event bus is created at the user side and an event rule is created for the prefix of the source OSS bucket. When an object is modified in the prefix of the source OSS bucket, an OSS event is generated in the EventBridge console. The event is processed by the CPFS data flow.
     * *   After AutoRefresh is configured, if the data in the source OSS bucket is updated, the updated metadata is automatically synchronized to the CPFS file system. You can load the updated data when you access files, or run a data flow task to load the updated data.
     * *   AutoRefreshInterval refers to the interval at which CPFS checks whether data is updated in the prefix of the source OSS bucket. If data is updated, CPFS runs an AutoRefresh task. If the frequency of triggering the object modification event in the source OSS bucket exceeds the processing capability of the CPFS data flow, AutoRefresh tasks are accumulated, metadata updates are delayed, and the data flow status becomes Misconfigured. To resolve these issues, you can increase the data flow specifications or reduce the frequency of triggering the object modification event.
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
     *   This operation is available only to Cloud Parallel File Storage (CPFS) file systems.
     * *   Only CPFS V2.2.0 and later support data flows. You can view the version information on the file system details page in the console.
     * *   You can add AutoRefresh configurations only to the dataflows that are in the `Running` state.
     * *   You can add a maximum of five AutoRefresh configurations to a dataflow.
     * *   It generally takes 2 to 5 minutes to create an AutoRefresh configuration. You can call the [DescribeDataFlows](https://help.aliyun.com/document_detail/336901.html) operation to query the dataflow status.
     * *   AutoRefresh depends on the object modification events collected by EventBridge from the source OSS bucket. You must first [activate EventBridge](https://help.aliyun.com/document_detail/182246.html).
     *     **
     *     **Note** The event buses and event rules created for CPFS in the EventBridge console contain the `Create for cpfs auto refresh` description. The event buses and event rules cannot be modified or deleted. Otherwise, AutoRefresh cannot work properly.
     * *   The AutoRefresh configuration applies only to the prefix and is specified by the RefreshPath parameter. When you add an AutoRefresh configuration to the prefix for a CPFS dataflow, an event bus is created at the user side and an event rule is created for the prefix of the source OSS bucket. When an object is modified in the prefix of the source OSS bucket, an OSS event is generated in the EventBridge console. The event is processed by the CPFS data flow.
     * *   After AutoRefresh is configured, if the data in the source OSS bucket is updated, the updated metadata is automatically synchronized to the CPFS file system. You can load the updated data when you access files, or run a data flow task to load the updated data.
     * *   AutoRefreshInterval refers to the interval at which CPFS checks whether data is updated in the prefix of the source OSS bucket. If data is updated, CPFS runs an AutoRefresh task. If the frequency of triggering the object modification event in the source OSS bucket exceeds the processing capability of the CPFS data flow, AutoRefresh tasks are accumulated, metadata updates are delayed, and the data flow status becomes Misconfigured. To resolve these issues, you can increase the data flow specifications or reduce the frequency of triggering the object modification event.
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
     *   Only CPFS for Lingjun supports this operation.
     * *   Batch execution is supported. In batch execution, only one VscId can be associated with multiple FileSystemIDs, meaning the VscId in the ResourceIds must be the same.
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
     *   Only CPFS for Lingjun supports this operation.
     * *   Batch execution is supported. In batch execution, only one VscId can be associated with multiple FileSystemIDs, meaning the VscId in the ResourceIds must be the same.
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
     *   This operation is available only to Cloud Parallel File Storage (CPFS) file systems.
     * *   Only CPFS V2.2.0 and later support data flows. You can view the version information on the file system details page in the console.
     * *   You can cancel AutoRefresh configurations only for the dataflows that are in the `Running` or `Stopped` state.
     * *   It generally takes 2 to 5 minutes to cancel the AutoRefresh configurations. You can call the [DescribeDataFlows](https://help.aliyun.com/document_detail/2402270.html) operation to query the status of the AutoRefresh tasks.
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
     *   This operation is available only to Cloud Parallel File Storage (CPFS) file systems.
     * *   Only CPFS V2.2.0 and later support data flows. You can view the version information on the file system details page in the console.
     * *   You can cancel AutoRefresh configurations only for the dataflows that are in the `Running` or `Stopped` state.
     * *   It generally takes 2 to 5 minutes to cancel the AutoRefresh configurations. You can call the [DescribeDataFlows](https://help.aliyun.com/document_detail/2402270.html) operation to query the status of the AutoRefresh tasks.
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
     *   Only Cloud Parallel File Storage (CPFS) for LINGJUN V2.6.0 and later support this operation. You can view the version information on the file system details page in the console.
     * *   You can cancel a data streaming task only when the task is in the CREATED or RUNNING state.
     * *   Data streaming tasks are executed asynchronously. You can call the DescribeDataFlowSubTasks operation to query the task execution status.
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
     *   Only Cloud Parallel File Storage (CPFS) for LINGJUN V2.6.0 and later support this operation. You can view the version information on the file system details page in the console.
     * *   You can cancel a data streaming task only when the task is in the CREATED or RUNNING state.
     * *   Data streaming tasks are executed asynchronously. You can call the DescribeDataFlowSubTasks operation to query the task execution status.
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
     * Cancels a batch or streaming task that is in the Pending or Execute state.
     *
     * @remarks
     *   Only Cloud Parallel File Storage (CPFS) V2.2.0 and later and CPFS for Lingjun V2.4.0 and later support this operation. You can view the version information on the file system details page in the console.
     * *   You can cancel only the data flow tasks that are in the `Pending` and `Executing` states.
     * *   It generally takes 5 to 10 minutes to cancel a data flow task. You can query the task execution status by calling the [DescribeDataFlowTasks](https://help.aliyun.com/document_detail/2402275.html) operation.
     * *   If a data streaming task contains running subtasks, you cannot cancel the streaming task. Otherwise, an InvalidStatus.ResourceMismatch error message is returned.
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
     * Cancels a batch or streaming task that is in the Pending or Execute state.
     *
     * @remarks
     *   Only Cloud Parallel File Storage (CPFS) V2.2.0 and later and CPFS for Lingjun V2.4.0 and later support this operation. You can view the version information on the file system details page in the console.
     * *   You can cancel only the data flow tasks that are in the `Pending` and `Executing` states.
     * *   It generally takes 5 to 10 minutes to cancel a data flow task. You can query the task execution status by calling the [DescribeDataFlowTasks](https://help.aliyun.com/document_detail/2402275.html) operation.
     * *   If a data streaming task contains running subtasks, you cannot cancel the streaming task. Otherwise, an InvalidStatus.ResourceMismatch error message is returned.
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
     * Only Cloud Parallel File Storage (CPFS) for LINGJUN V2.7.0 and later support this operation.
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
     * Only Cloud Parallel File Storage (CPFS) for LINGJUN V2.7.0 and later support this operation.
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
     *   After you call the CreateAccessPoint operation, an access point is not immediately created. Therefore, after you call the CreateAccessPoint operation successfully, call the [DescribeAccessPoints](https://help.aliyun.com/document_detail/2712239.html) or [DescribeAccessPoint](https://help.aliyun.com/document_detail/2712240.html) operation to query the status of the access point. If the status is **Active**, mount the file system. Otherwise, the file system may fail to be mounted.
     * *   Only General-purpose Network File System (NFS) file systems support access points.
     * *   If you want to call the EnabledRam operation to enable a Resource Access Management (RAM) policy, you must configure the corresponding RAM permissions. For more information, see [Manage endpoints](https://help.aliyun.com/document_detail/2545998.html).
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
     *   After you call the CreateAccessPoint operation, an access point is not immediately created. Therefore, after you call the CreateAccessPoint operation successfully, call the [DescribeAccessPoints](https://help.aliyun.com/document_detail/2712239.html) or [DescribeAccessPoint](https://help.aliyun.com/document_detail/2712240.html) operation to query the status of the access point. If the status is **Active**, mount the file system. Otherwise, the file system may fail to be mounted.
     * *   Only General-purpose Network File System (NFS) file systems support access points.
     * *   If you want to call the EnabledRam operation to enable a Resource Access Management (RAM) policy, you must configure the corresponding RAM permissions. For more information, see [Manage endpoints](https://help.aliyun.com/document_detail/2545998.html).
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
     *   Basic operations
     *     *   Only Cloud Parallel File Storage (CPFS) V2.2.0 and later and CPFS for Lingjun V2.4.0 and later support data flows.
     *     *   You can create a data flow only when a CPFS or CPFS for Lingjun file system is in the Running state.
     *     *   A maximum of 10 data flows can be created for a CPFS or CPFS for Lingjun file system.
     *     *   It generally takes 2 to 5 minutes to create a data flow. You can call the DescribeDataFlows operation to check whether the data flow has been created.
     * *   Permission
     *     When you create a data flow, CPFS obtains the following two service-linked roles: `AliyunServiceRoleForNasOssDataflow` and `AliyunServiceRoleForNasEventNotification`. For more information, see [CPFS service-linked roles](https://help.aliyun.com/document_detail/185138.html).
     * *   CPFS usage notes
     *     *   Billing
     *         *   If you create a data flow, you are charged for using the data flow throughput. For more information, see [Billing of CPFS](https://help.aliyun.com/document_detail/111858.html).
     *         *   When you configure the AutoRefresh feature for a data flow, CPFS must use EventBridge to collect object modification events from the source Object Storage Service (OSS) bucket. Event fees are incurred. For more information, see [Billing of EventBridge](https://help.aliyun.com/document_detail/163752.html).
     *     *   Data flow specifications
     *         *   The data flow throughput supports the following specifications: 600 MB/s, 1,200 MB/s, and 1,500 MB/s. The data flow throughput is the maximum transmission bandwidth that can be reached when data is imported or exported for a data flow.
     *         *   When you create a data flow, the vSwitch IP addresses used by a CPFS mount target are consumed. Make sure that the vSwitch can provide sufficient IP addresses.
     *         *   Inventory query: If you set the DryRun parameter to true, you can check whether the resources for the data flow whose throughput is changed meet the requirements.
     *     *   Fileset
     *         *   The destination for a data flow is a fileset in the CPFS file system. A fileset is a new directory tree structure (a small file directory) in a CPFS file system. Each fileset independently manages an inode space.
     *         *   When you create a data flow for a CPFS file system, the related fileset must already exist and cannot be nested with other filesets. Only one data flow can be created in a fileset, which corresponds to one source storage.
     *         *   A fileset supports a maximum of one million files. If the number of files imported from an OSS bucket into the fileset exceeds the upper limit, the `no space` error message is returned when you add new files.
     *     **
     *     **Note **If data already exists in the fileset, after you create a data flow, the existing data in the fileset is cleared and replaced with the data synchronized from the OSS bucket.
     *     *   AutoRefresh
     *         *   After AutoRefresh is configured, if the data in the source OSS bucket is updated, the updated metadata is automatically synchronized to the CPFS file system. You can load the updated data when you access files, or run a data flow task to load the updated data.
     *         *   AutoRefresh depends on the object modification events collected by EventBridge from the source OSS bucket. You must first [activate EventBridge](https://help.aliyun.com/document_detail/182246.html).
     *         *   The AutoRefresh configuration applies only to the prefix and is specified by the RefreshPath parameter. You can configure a maximum of five AutoRefresh directories for a data flow.
     *         *   AutoRefreshInterval refers to the interval at which CPFS checks whether data is updated in the prefix of the source OSS bucket. If data is updated, CPFS runs an AutoRefresh task. If the frequency of triggering the object modification event in the source OSS bucket exceeds the processing capability of the CPFS data flow, AutoRefresh tasks are accumulated, metadata updates are delayed, and the data flow status becomes `Misconfigured`. To resolve these issues, you can increase the data flow specifications or reduce the frequency of triggering the object modification event.
     *         *   When you add an AutoRefresh configuration to the prefix for a CPFS data flow, an event bus is created at the user side and an event rule is created for the prefix of the source OSS bucket. When an object is modified in the prefix of the source OSS bucket, an OSS event is generated in the EventBridge console. The event is processed by the CPFS data flow.
     *         **
     *         **Note **The event buses and event rules created for CPFS in the EventBridge console contain the `Create for cpfs auto refresh` description. The event buses and event rules cannot be modified or deleted. Otherwise, AutoRefresh cannot work properly.
     *     *   Source storage
     *         *   The source storage is an OSS bucket. SourceStorage for a data flow must be an OSS bucket.
     *         *   CPFS data flows support both encrypted and unencrypted access to OSS. If you select SSL-encrypted access to OSS, make sure that encryption in transit for OSS buckets supports encrypted access.
     *         *   If data flows for multiple CPFS file systems or multiple data flows for the same CPFS file system are stored in the same OSS bucket, you must enable versioning for the OSS bucket to prevent data conflicts caused by data export from multiple CPFS file systems to one OSS bucket.
     *         *   Data flows are not supported for OSS buckets across regions. The OSS bucket must reside in the same region as the CPFS file system.
     *         **
     *         **Note **Before you create a data flow, you must configure a tag (key: cpfs-dataflow, value: true) for the source OSS bucket. This way, the created data flow can access the data in the OSS bucket. When a data flow is being used, do not delete or modify the tag. Otherwise, the data flow for CPFS cannot access the data in the OSS bucket.
     * *   CPFS for Lingjun usage notes
     *     *   Source storage
     *         *   The source storage is an OSS bucket. SourceStorage for a data flow must be an OSS bucket.
     *         *   CPFS for Lingjun data flows support both encrypted and unencrypted access to OSS. If you select SSL-encrypted access to OSS, make sure that encryption in transit for OSS buckets supports encrypted access.
     *         *   If data flows for multiple CPFS for Lingjun file systems or multiple data flows for the same CPFS for Lingjun file system are stored in the same OSS bucket, you must enable versioning for the OSS bucket to prevent data conflicts caused by data export from multiple CPFS for Lingjun file systems to one OSS bucket.
     *         *   Data flows are not supported for OSS buckets across regions. The OSS bucket must reside in the same region as the CPFS file system.
     *         *   CPFS for Lingjun V2.6.0 and later allow you to create data flows for OSS buckets across accounts.
     *         *   The account id parameter is required only when you use OSS buckets across accounts.
     *         *   To use OSS buckets across accounts, you must first grant permissions to the related accounts. For more information, see [Cross-account authorization on data flows](https://help.aliyun.com/document_detail/2713462.html).
     *             **
     *             **Note **Before you create a data flow, you must configure a tag (key: cpfs-dataflow, value: true) for the source OSS bucket. This way, the created data flow can access the data in the OSS bucket. When a data flow is being used, do not delete or modify the tag. Otherwise, the data flow for CPFS for Lingjun cannot access the data in the OSS bucket.
     *     *   Limits of data flows on file systems
     *         *   You cannot rename a non-empty directory in a path that is associated with a data flow. Otherwise, the Permission Denied error message or an error message indicating that the directory is not empty is returned.
     *         *   Proceed with caution when you use special characters in the names of directories and files. The following characters are supported: letters, digits, exclamation points (!), hyphens (-), underscores (_), periods (.), asterisks (\\*), and parentheses (()).
     *         *   The path can be up to 1,023 characters in length.
     *     *   Limits of data flows on import
     *         *   After a symbolic link is imported to CPFS for Lingjun, the symbolic link is converted into a common data file that contains no symbolic link information.
     *         *   If an OSS bucket has multiple versions, only data of the latest version is used.
     *         *   The name of a file or a subdirectory can be up to 255 bytes in length.
     *     *   Limits of data flows on export
     *         *   After a symbolic link is synchronized to OSS, the file that the symbolic link points to is not synchronized to OSS. In this case, the symbolic link is converted into a common object that contains no data.
     *         *   Hard links can be synchronized to OSS only as common files that contain no link information.
     *         *   After a file of the Socket, Device, or Pipe type is exported to an OSS bucket, the file is converted into a common object that contains no data.
     *         *   The directory path can be up to 1,023 characters in length.
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
     *   Basic operations
     *     *   Only Cloud Parallel File Storage (CPFS) V2.2.0 and later and CPFS for Lingjun V2.4.0 and later support data flows.
     *     *   You can create a data flow only when a CPFS or CPFS for Lingjun file system is in the Running state.
     *     *   A maximum of 10 data flows can be created for a CPFS or CPFS for Lingjun file system.
     *     *   It generally takes 2 to 5 minutes to create a data flow. You can call the DescribeDataFlows operation to check whether the data flow has been created.
     * *   Permission
     *     When you create a data flow, CPFS obtains the following two service-linked roles: `AliyunServiceRoleForNasOssDataflow` and `AliyunServiceRoleForNasEventNotification`. For more information, see [CPFS service-linked roles](https://help.aliyun.com/document_detail/185138.html).
     * *   CPFS usage notes
     *     *   Billing
     *         *   If you create a data flow, you are charged for using the data flow throughput. For more information, see [Billing of CPFS](https://help.aliyun.com/document_detail/111858.html).
     *         *   When you configure the AutoRefresh feature for a data flow, CPFS must use EventBridge to collect object modification events from the source Object Storage Service (OSS) bucket. Event fees are incurred. For more information, see [Billing of EventBridge](https://help.aliyun.com/document_detail/163752.html).
     *     *   Data flow specifications
     *         *   The data flow throughput supports the following specifications: 600 MB/s, 1,200 MB/s, and 1,500 MB/s. The data flow throughput is the maximum transmission bandwidth that can be reached when data is imported or exported for a data flow.
     *         *   When you create a data flow, the vSwitch IP addresses used by a CPFS mount target are consumed. Make sure that the vSwitch can provide sufficient IP addresses.
     *         *   Inventory query: If you set the DryRun parameter to true, you can check whether the resources for the data flow whose throughput is changed meet the requirements.
     *     *   Fileset
     *         *   The destination for a data flow is a fileset in the CPFS file system. A fileset is a new directory tree structure (a small file directory) in a CPFS file system. Each fileset independently manages an inode space.
     *         *   When you create a data flow for a CPFS file system, the related fileset must already exist and cannot be nested with other filesets. Only one data flow can be created in a fileset, which corresponds to one source storage.
     *         *   A fileset supports a maximum of one million files. If the number of files imported from an OSS bucket into the fileset exceeds the upper limit, the `no space` error message is returned when you add new files.
     *     **
     *     **Note **If data already exists in the fileset, after you create a data flow, the existing data in the fileset is cleared and replaced with the data synchronized from the OSS bucket.
     *     *   AutoRefresh
     *         *   After AutoRefresh is configured, if the data in the source OSS bucket is updated, the updated metadata is automatically synchronized to the CPFS file system. You can load the updated data when you access files, or run a data flow task to load the updated data.
     *         *   AutoRefresh depends on the object modification events collected by EventBridge from the source OSS bucket. You must first [activate EventBridge](https://help.aliyun.com/document_detail/182246.html).
     *         *   The AutoRefresh configuration applies only to the prefix and is specified by the RefreshPath parameter. You can configure a maximum of five AutoRefresh directories for a data flow.
     *         *   AutoRefreshInterval refers to the interval at which CPFS checks whether data is updated in the prefix of the source OSS bucket. If data is updated, CPFS runs an AutoRefresh task. If the frequency of triggering the object modification event in the source OSS bucket exceeds the processing capability of the CPFS data flow, AutoRefresh tasks are accumulated, metadata updates are delayed, and the data flow status becomes `Misconfigured`. To resolve these issues, you can increase the data flow specifications or reduce the frequency of triggering the object modification event.
     *         *   When you add an AutoRefresh configuration to the prefix for a CPFS data flow, an event bus is created at the user side and an event rule is created for the prefix of the source OSS bucket. When an object is modified in the prefix of the source OSS bucket, an OSS event is generated in the EventBridge console. The event is processed by the CPFS data flow.
     *         **
     *         **Note **The event buses and event rules created for CPFS in the EventBridge console contain the `Create for cpfs auto refresh` description. The event buses and event rules cannot be modified or deleted. Otherwise, AutoRefresh cannot work properly.
     *     *   Source storage
     *         *   The source storage is an OSS bucket. SourceStorage for a data flow must be an OSS bucket.
     *         *   CPFS data flows support both encrypted and unencrypted access to OSS. If you select SSL-encrypted access to OSS, make sure that encryption in transit for OSS buckets supports encrypted access.
     *         *   If data flows for multiple CPFS file systems or multiple data flows for the same CPFS file system are stored in the same OSS bucket, you must enable versioning for the OSS bucket to prevent data conflicts caused by data export from multiple CPFS file systems to one OSS bucket.
     *         *   Data flows are not supported for OSS buckets across regions. The OSS bucket must reside in the same region as the CPFS file system.
     *         **
     *         **Note **Before you create a data flow, you must configure a tag (key: cpfs-dataflow, value: true) for the source OSS bucket. This way, the created data flow can access the data in the OSS bucket. When a data flow is being used, do not delete or modify the tag. Otherwise, the data flow for CPFS cannot access the data in the OSS bucket.
     * *   CPFS for Lingjun usage notes
     *     *   Source storage
     *         *   The source storage is an OSS bucket. SourceStorage for a data flow must be an OSS bucket.
     *         *   CPFS for Lingjun data flows support both encrypted and unencrypted access to OSS. If you select SSL-encrypted access to OSS, make sure that encryption in transit for OSS buckets supports encrypted access.
     *         *   If data flows for multiple CPFS for Lingjun file systems or multiple data flows for the same CPFS for Lingjun file system are stored in the same OSS bucket, you must enable versioning for the OSS bucket to prevent data conflicts caused by data export from multiple CPFS for Lingjun file systems to one OSS bucket.
     *         *   Data flows are not supported for OSS buckets across regions. The OSS bucket must reside in the same region as the CPFS file system.
     *         *   CPFS for Lingjun V2.6.0 and later allow you to create data flows for OSS buckets across accounts.
     *         *   The account id parameter is required only when you use OSS buckets across accounts.
     *         *   To use OSS buckets across accounts, you must first grant permissions to the related accounts. For more information, see [Cross-account authorization on data flows](https://help.aliyun.com/document_detail/2713462.html).
     *             **
     *             **Note **Before you create a data flow, you must configure a tag (key: cpfs-dataflow, value: true) for the source OSS bucket. This way, the created data flow can access the data in the OSS bucket. When a data flow is being used, do not delete or modify the tag. Otherwise, the data flow for CPFS for Lingjun cannot access the data in the OSS bucket.
     *     *   Limits of data flows on file systems
     *         *   You cannot rename a non-empty directory in a path that is associated with a data flow. Otherwise, the Permission Denied error message or an error message indicating that the directory is not empty is returned.
     *         *   Proceed with caution when you use special characters in the names of directories and files. The following characters are supported: letters, digits, exclamation points (!), hyphens (-), underscores (_), periods (.), asterisks (\\*), and parentheses (()).
     *         *   The path can be up to 1,023 characters in length.
     *     *   Limits of data flows on import
     *         *   After a symbolic link is imported to CPFS for Lingjun, the symbolic link is converted into a common data file that contains no symbolic link information.
     *         *   If an OSS bucket has multiple versions, only data of the latest version is used.
     *         *   The name of a file or a subdirectory can be up to 255 bytes in length.
     *     *   Limits of data flows on export
     *         *   After a symbolic link is synchronized to OSS, the file that the symbolic link points to is not synchronized to OSS. In this case, the symbolic link is converted into a common object that contains no data.
     *         *   Hard links can be synchronized to OSS only as common files that contain no link information.
     *         *   After a file of the Socket, Device, or Pipe type is exported to an OSS bucket, the file is converted into a common object that contains no data.
     *         *   The directory path can be up to 1,023 characters in length.
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
     *   Only Cloud Parallel File Storage (CPFS) for LINGJUN V2.6.0 and later support this operation. You can view the version information on the file system details page in the console.
     * *   You can create subtasks only for a data streaming subtask in the Executing state.
     * *   Data streaming tasks are executed asynchronously. You can call the DescribeDataFlowSubTasks operation to query the task execution status.
     * *   When the type of data flow task is streaming, the running status only indicates that a streaming import or export task can be created. It does not indicate that the import or export task is running.
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
     *   Only Cloud Parallel File Storage (CPFS) for LINGJUN V2.6.0 and later support this operation. You can view the version information on the file system details page in the console.
     * *   You can create subtasks only for a data streaming subtask in the Executing state.
     * *   Data streaming tasks are executed asynchronously. You can call the DescribeDataFlowSubTasks operation to query the task execution status.
     * *   When the type of data flow task is streaming, the running status only indicates that a streaming import or export task can be created. It does not indicate that the import or export task is running.
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
     * Creates a dataflow task.
     *
     * @remarks
     *   CPFS usage notes
     *     *   Only CPFS V2.2.0 and later support dataflows. You can view the version information on the file system details page in the console.
     *     *   Dataflow tasks are executed asynchronously. You can call the [DescribeDataFlowTasks](https://help.aliyun.com/document_detail/2402275.html) operation to query the task execution status. The task duration depends on the amount of data to be imported and exported. If a large amount of data exists, we recommend that you create multiple tasks.
     *     *   You can create a dataflow task only for a dataflow that is in the Running state.
     *     *   When you manually run a dataflow task, the automatic data update task for the dataflow is interrupted and enters the pending state.
     *     *   When you create an export task, make sure that the total length of the absolute path of the files to be exported from a CPFS file system does not exceed 1,023 characters.
     * *   CPFS for Lingjun usage notes
     *     *   Only CPFS for Lingjun V2.4.0 and later support dataflow. You can view the version information on the file system details page in the console.
     *     *   Dataflow tasks are executed asynchronously. You can call the [DescribeDataFlowTasks](https://help.aliyun.com/document_detail/2402275.html) operation to query the task execution status. The task duration depends on the amount of data to be imported and exported. If a large amount of data exists, we recommend that you create multiple tasks.
     *     *   You can create a dataflow task only for a dataflow that is in the Running state.
     *     *   When you create an export task, make sure that the total length of the absolute path of the files to be exported from a CPFS for Lingjun file system does not exceed 1,023 characters.
     *     *   CPFS for Lingjun supports two types of tasks: batch tasks and streaming tasks. For more information, see [Task types](https://help.aliyun.com/document_detail/2845429.html).
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
     * Creates a dataflow task.
     *
     * @remarks
     *   CPFS usage notes
     *     *   Only CPFS V2.2.0 and later support dataflows. You can view the version information on the file system details page in the console.
     *     *   Dataflow tasks are executed asynchronously. You can call the [DescribeDataFlowTasks](https://help.aliyun.com/document_detail/2402275.html) operation to query the task execution status. The task duration depends on the amount of data to be imported and exported. If a large amount of data exists, we recommend that you create multiple tasks.
     *     *   You can create a dataflow task only for a dataflow that is in the Running state.
     *     *   When you manually run a dataflow task, the automatic data update task for the dataflow is interrupted and enters the pending state.
     *     *   When you create an export task, make sure that the total length of the absolute path of the files to be exported from a CPFS file system does not exceed 1,023 characters.
     * *   CPFS for Lingjun usage notes
     *     *   Only CPFS for Lingjun V2.4.0 and later support dataflow. You can view the version information on the file system details page in the console.
     *     *   Dataflow tasks are executed asynchronously. You can call the [DescribeDataFlowTasks](https://help.aliyun.com/document_detail/2402275.html) operation to query the task execution status. The task duration depends on the amount of data to be imported and exported. If a large amount of data exists, we recommend that you create multiple tasks.
     *     *   You can create a dataflow task only for a dataflow that is in the Running state.
     *     *   When you create an export task, make sure that the total length of the absolute path of the files to be exported from a CPFS for Lingjun file system does not exceed 1,023 characters.
     *     *   CPFS for Lingjun supports two types of tasks: batch tasks and streaming tasks. For more information, see [Task types](https://help.aliyun.com/document_detail/2845429.html).
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
     *   Before you call this operation, you must understand the billing and pricing of File Storage NAS. For more information, see [Billing](https://help.aliyun.com/document_detail/178365.html) and [Pricing](https://www.aliyun.com/price/product?#/nas/detail).
     * *   Before you create a file system, you must complete real-name verification. For more information, see [Real-name verification](https://help.aliyun.com/document_detail/48263.html).
     * *   When you call this operation, a service-linked role of NAS is automatically created. For more information, see [Manage the service-linked roles of NAS](https://help.aliyun.com/document_detail/208530.html).
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
     *   Before you call this operation, you must understand the billing and pricing of File Storage NAS. For more information, see [Billing](https://help.aliyun.com/document_detail/178365.html) and [Pricing](https://www.aliyun.com/price/product?#/nas/detail).
     * *   Before you create a file system, you must complete real-name verification. For more information, see [Real-name verification](https://help.aliyun.com/document_detail/48263.html).
     * *   When you call this operation, a service-linked role of NAS is automatically created. For more information, see [Manage the service-linked roles of NAS](https://help.aliyun.com/document_detail/208530.html).
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
     *   CPFS usage notes
     *     *   Only CPFS V2.2.0 and later support fileset creation. You can view the version information on the file system details page in the console.
     *     *   A maximum of 10 filesets can be created for a CPFS file system.
     *     *   The parent directory must be an existing directory.
     *     *   The maximum depth supported by a fileset path is eight levels. The depth of the root directory / is 0 levels. For example, the fileset path /test/aaa/ccc/ has three levels.
     *     *   Nested filesets are not supported. If a fileset is specified as a parent directory, its subdirectory cannot be a fileset.
     *     *   A fileset supports a maximum of one million files. If the number of files exceeds the upper limit, the `no space` error message is returned when you add new files.
     * *   CPFS for Lingjun usage notes
     *     *   Only CPFS for Lingjun V2.7.0 and later support this operation. You can view the version information on the file system details page in the console.
     *     *   A maximum of 500 filesets can be created for a CPFS file system.
     *     *   The fileset path must be a new path and cannot be an existing path. Fileset paths cannot be renamed and cannot be symbolic links.
     *     *   The maximum depth supported by a fileset path is eight levels. The depth of the root directory / is 0 levels. For example, the fileset path /test/aaa/ccc/ has three levels.
     *     *   If the fileset path is a multi-level path, the parent directory must be an existing directory.
     *     *   Nested filesets are not supported. If a fileset is specified as a parent directory, its subdirectory cannot be a fileset. A fileset path supports only one quota.
     *     *   The minimum capacity quota of a fileset is 10 GiB. The scaling step size is 1 GiB.
     *     *   A fileset supports a minimum of 10,000 files or directories and a maximum of 10 billion files or directories. The scaling step size is 1.
     *     *   When you modify a directory quota, you must set the quota capacity or the number of files to be greater than the capacity or file quantity that has been used.
     *     *   The quota statistics have a 15-minute latency. The actual usage takes effect after 15 minutes.
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
     *   CPFS usage notes
     *     *   Only CPFS V2.2.0 and later support fileset creation. You can view the version information on the file system details page in the console.
     *     *   A maximum of 10 filesets can be created for a CPFS file system.
     *     *   The parent directory must be an existing directory.
     *     *   The maximum depth supported by a fileset path is eight levels. The depth of the root directory / is 0 levels. For example, the fileset path /test/aaa/ccc/ has three levels.
     *     *   Nested filesets are not supported. If a fileset is specified as a parent directory, its subdirectory cannot be a fileset.
     *     *   A fileset supports a maximum of one million files. If the number of files exceeds the upper limit, the `no space` error message is returned when you add new files.
     * *   CPFS for Lingjun usage notes
     *     *   Only CPFS for Lingjun V2.7.0 and later support this operation. You can view the version information on the file system details page in the console.
     *     *   A maximum of 500 filesets can be created for a CPFS file system.
     *     *   The fileset path must be a new path and cannot be an existing path. Fileset paths cannot be renamed and cannot be symbolic links.
     *     *   The maximum depth supported by a fileset path is eight levels. The depth of the root directory / is 0 levels. For example, the fileset path /test/aaa/ccc/ has three levels.
     *     *   If the fileset path is a multi-level path, the parent directory must be an existing directory.
     *     *   Nested filesets are not supported. If a fileset is specified as a parent directory, its subdirectory cannot be a fileset. A fileset path supports only one quota.
     *     *   The minimum capacity quota of a fileset is 10 GiB. The scaling step size is 1 GiB.
     *     *   A fileset supports a minimum of 10,000 files or directories and a maximum of 10 billion files or directories. The scaling step size is 1.
     *     *   When you modify a directory quota, you must set the quota capacity or the number of files to be greater than the capacity or file quantity that has been used.
     *     *   The quota statistics have a 15-minute latency. The actual usage takes effect after 15 minutes.
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
     *   Only General-purpose NAS and CPFS for Lingjun file systems support this operation.
     * *   Up to 10 Auto and 100 OnDemand lifecycle policies can be created for each CPFS for Lingjun file system.
     * *   For general-purpose NAS file systems, up to 20 lifecycle policies can be created in each region.
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
     *   Only General-purpose NAS and CPFS for Lingjun file systems support this operation.
     * *   Up to 10 Auto and 100 OnDemand lifecycle policies can be created for each CPFS for Lingjun file system.
     * *   For general-purpose NAS file systems, up to 20 lifecycle policies can be created in each region.
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
     *   After you call the CreateMountTarget operation, a mount target is not immediately created. Therefore, we recommend that you call the DescribeMountTargets operation to query the status of the mount target. If the mount target is in the **Active** state, you can then mount the file system. Otherwise, the file system may fail to be mounted.
     * *   When you call this operation, a service-linked role of NAS is automatically created. For more information, see [Manage the service-linked roles of NAS](https://help.aliyun.com/document_detail/208530.html).
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
     *   After you call the CreateMountTarget operation, a mount target is not immediately created. Therefore, we recommend that you call the DescribeMountTargets operation to query the status of the mount target. If the mount target is in the **Active** state, you can then mount the file system. Otherwise, the file system may fail to be mounted.
     * *   When you call this operation, a service-linked role of NAS is automatically created. For more information, see [Manage the service-linked roles of NAS](https://help.aliyun.com/document_detail/208530.html).
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
     *   This operation is available only to Cloud Parallel File Storage (CPFS) file systems.
     * *   Prerequisites
     *     A protocol service is created.
     * *   Others
     *     *   The virtual private cloud (VPC) CIDR block of the export directory for the protocol service cannot overlap with the VPC CIDR block of the file system.
     *     *   The VPC CIDR blocks of multiple export directories of a protocol service cannot overlap.
     *     *   You can create a maximum of 10 export directories for a protocol service.
     *     *   A protocol service can use a maximum of 32 IP addresses that are allocated by a specified vSwitch. Make sure that the vSwitch can provide sufficient IP addresses.
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
     *   This operation is available only to Cloud Parallel File Storage (CPFS) file systems.
     * *   Prerequisites
     *     A protocol service is created.
     * *   Others
     *     *   The virtual private cloud (VPC) CIDR block of the export directory for the protocol service cannot overlap with the VPC CIDR block of the file system.
     *     *   The VPC CIDR blocks of multiple export directories of a protocol service cannot overlap.
     *     *   You can create a maximum of 10 export directories for a protocol service.
     *     *   A protocol service can use a maximum of 32 IP addresses that are allocated by a specified vSwitch. Make sure that the vSwitch can provide sufficient IP addresses.
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
     *   This operation is available only to Cloud Parallel File Storage (CPFS) file systems.
     * *   Only CPFS V2.3.0 and later support protocol services. You can query the version information of the file system by calling the [DescribeFileSystems](https://help.aliyun.com/document_detail/163314.html) operation.
     * *   Protocol service types
     *     Protocol services are classified into general-purpose protocol services and cache protocol services. Different from general-purpose protocol services, cache protocol services can cache hot data. If data exists in the cache, the bandwidth of the cache protocol service may exceed the bandwidth of the CPFS file system, reaching the maximum bandwidth specified for the protocol service.
     *     *   General-purpose protocol services: provide NFS access and [directory-level mount targets](https://help.aliyun.com/document_detail/427175.html) for CPFS file systems. You do not need to configure a POSIX client to manage clusters. The compliance package check feature is free of charge.
     *     *   Cache protocol services: provide the server memory cache based on the least recently used (LRU) policy. When data is cached in the memory, CPFS provides higher internal bandwidth. Cache protocol services are divided into Cache L1 and Cache L2 specifications. The differences are the internal bandwidth size and memory cache size.
     *     **
     *     **Note** You are charged for using cache protocol services, which are in invitational preview. For more information about the billing method of cache protocol services, see [Billable items](https://help.aliyun.com/document_detail/111858.html). If you have any feedback or questions, you can join the DingTalk group (group number: 31045006299).
     * *   Protocol Type
     *     Only NFSv3 is supported.
     * *   Others
     *     *   Only one protocol service can be created for a CPFS file system.
     *     *   A protocol service can use a maximum of 32 IP addresses that are allocated by a specified vSwitch. Make sure that the vSwitch can provide sufficient IP addresses.
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
     *   This operation is available only to Cloud Parallel File Storage (CPFS) file systems.
     * *   Only CPFS V2.3.0 and later support protocol services. You can query the version information of the file system by calling the [DescribeFileSystems](https://help.aliyun.com/document_detail/163314.html) operation.
     * *   Protocol service types
     *     Protocol services are classified into general-purpose protocol services and cache protocol services. Different from general-purpose protocol services, cache protocol services can cache hot data. If data exists in the cache, the bandwidth of the cache protocol service may exceed the bandwidth of the CPFS file system, reaching the maximum bandwidth specified for the protocol service.
     *     *   General-purpose protocol services: provide NFS access and [directory-level mount targets](https://help.aliyun.com/document_detail/427175.html) for CPFS file systems. You do not need to configure a POSIX client to manage clusters. The compliance package check feature is free of charge.
     *     *   Cache protocol services: provide the server memory cache based on the least recently used (LRU) policy. When data is cached in the memory, CPFS provides higher internal bandwidth. Cache protocol services are divided into Cache L1 and Cache L2 specifications. The differences are the internal bandwidth size and memory cache size.
     *     **
     *     **Note** You are charged for using cache protocol services, which are in invitational preview. For more information about the billing method of cache protocol services, see [Billable items](https://help.aliyun.com/document_detail/111858.html). If you have any feedback or questions, you can join the DingTalk group (group number: 31045006299).
     * *   Protocol Type
     *     Only NFSv3 is supported.
     * *   Others
     *     *   Only one protocol service can be created for a CPFS file system.
     *     *   A protocol service can use a maximum of 32 IP addresses that are allocated by a specified vSwitch. Make sure that the vSwitch can provide sufficient IP addresses.
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
     *   Only General-purpose NAS file systems support this operation.
     * *   If you permanently delete a directory, the files in the directory are recursively cleared.
     * *   You can run only one job at a time for a single file system to permanently delete the files from the file system. You cannot create a restoration or deletion job when a file or directory is being deleted.
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
     *   Only General-purpose NAS file systems support this operation.
     * *   If you permanently delete a directory, the files in the directory are recursively cleared.
     * *   You can run only one job at a time for a single file system to permanently delete the files from the file system. You cannot create a restoration or deletion job when a file or directory is being deleted.
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
     *   Only General-purpose NAS file systems support this operation.
     * *   You can run only one job at a time for a single file system to restore files to or clear files from the file system. You cannot create a restore or cleanup job when files are being restored from the recycle bin.
     * *   You can restore only one file or directory in a single restore job. If you restore a specified directory, all files in the directory are recursively restored.
     * *   After files are restored, the data of the files is defragmented. When the data is being defragmented, the read performance is slightly degraded.
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
     *   Only General-purpose NAS file systems support this operation.
     * *   You can run only one job at a time for a single file system to restore files to or clear files from the file system. You cannot create a restore or cleanup job when files are being restored from the recycle bin.
     * *   You can restore only one file or directory in a single restore job. If you restore a specified directory, all files in the directory are recursively restored.
     * *   After files are restored, the data of the files is defragmented. When the data is being defragmented, the read performance is slightly degraded.
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
     * Deletes a permission group.
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
     * Deletes a rule from a permission group.
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
     *   Only Cloud Parallel File Storage (CPFS) V2.2.0 and later and CPFS for Lingjun V2.4.0 and later support data flows. You can view the version information on the file system details page in the console.
     * *   You can delete the data flows that are only in the `Running` or `Stopped` state.
     * *   After a data flow is deleted, the resources related to the data flow are released and cannot be restored. You must create a data flow again if required.
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
     *   Only Cloud Parallel File Storage (CPFS) V2.2.0 and later and CPFS for Lingjun V2.4.0 and later support data flows. You can view the version information on the file system details page in the console.
     * *   You can delete the data flows that are only in the `Running` or `Stopped` state.
     * *   After a data flow is deleted, the resources related to the data flow are released and cannot be restored. You must create a data flow again if required.
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
     *   Before you delete a file system, you must delete all mount targets of the file system.
     * *   Before you delete a file system, you must make sure that no lifecycle policy is created for the file system.
     * *   After a file system is deleted, the data on the file system cannot be restored. Proceed with caution.
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
     *   Before you delete a file system, you must delete all mount targets of the file system.
     * *   Before you delete a file system, you must make sure that no lifecycle policy is created for the file system.
     * *   After a file system is deleted, the data on the file system cannot be restored. Proceed with caution.
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
     *   Only Cloud Parallel File Storage (CPFS) V2.2.0 and CPFS for Lingjun V2.7.0 and later support this operation. After you delete a fileset, all data in the fileset is deleted and cannot be restored. Proceed with caution.
     * *   If deletion protection is enabled for the fileset, you must disable deletion protection before you delete the fileset.
     * *   After you delete a fileset of CPFS for Lingjun, the storage space is not immediately released and will be recycled within 24 hours. If you want to release storage space immediately, you can clear the data in the fileset and then delete the fileset. Deleted data cannot be restored. Proceed with caution.
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
     *   Only Cloud Parallel File Storage (CPFS) V2.2.0 and CPFS for Lingjun V2.7.0 and later support this operation. After you delete a fileset, all data in the fileset is deleted and cannot be restored. Proceed with caution.
     * *   If deletion protection is enabled for the fileset, you must disable deletion protection before you delete the fileset.
     * *   After you delete a fileset of CPFS for Lingjun, the storage space is not immediately released and will be recycled within 24 hours. If you want to release storage space immediately, you can clear the data in the fileset and then delete the fileset. Deleted data cannot be restored. Proceed with caution.
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
     * Only General-purpose NAS and CPFS for Lingjun file systems support this operation.
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
     * Only General-purpose NAS and CPFS for Lingjun file systems support this operation.
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
     * After you delete a mount target, the mount target cannot be restored. Proceed with caution.
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
     * After you delete a mount target, the mount target cannot be restored. Proceed with caution.
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
     * This operation is available only to Cloud Parallel File Storage (CPFS) file systems on the China site (aliyun.com).
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
     * This operation is available only to Cloud Parallel File Storage (CPFS) file systems on the China site (aliyun.com).
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
     *   This operation is available only to Cloud Parallel File Storage (CPFS) file systems.
     * *   When you delete a protocol service, the export directories in the protocol service are also deleted.
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
     *   This operation is available only to Cloud Parallel File Storage (CPFS) file systems.
     * *   When you delete a protocol service, the export directories in the protocol service are also deleted.
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
     * Only General-purpose Network File System (NFS) file systems support this operation.
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
     * Only General-purpose Network File System (NFS) file systems support this operation.
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
     * Only General-purpose NAS file systems that use the NFS protocol support this operation.
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
     * Only General-purpose NAS file systems that use the NFS protocol support this operation.
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
     * Only Cloud Parallel File Storage (CPFS) for LINGJUN V2.6.0 and later support this operation. You can view the version information on the file system details page in the console.
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
     * Only Cloud Parallel File Storage (CPFS) for LINGJUN V2.6.0 and later support this operation. You can view the version information on the file system details page in the console.
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
     * Queries the details of dataflow tasks.
     *
     * @remarks
     * Only CPFS V2.2.0 and later and CPFS for Lingjun V2.4.0 and later support this operation. You can view the version information on the file system details page in the console.
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
     * Queries the details of dataflow tasks.
     *
     * @remarks
     * Only CPFS V2.2.0 and later and CPFS for Lingjun V2.4.0 and later support this operation. You can view the version information on the file system details page in the console.
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
     *   Only Cloud Parallel File Storage (CPFS) V2.2.0 and later and CPFS for Lingjun V2.4.0 and later support dataflows. You can view the version information on the file system details page in the console.
     * *   In Filters, FsetIds, DataFlowlds, SourceStorage, ThroughputList, and Status support exact match only. FileSystemPath, Description, and SourceStoragePath support fuzzy match.
     * *   Combined query is supported.
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
     *   Only Cloud Parallel File Storage (CPFS) V2.2.0 and later and CPFS for Lingjun V2.4.0 and later support dataflows. You can view the version information on the file system details page in the console.
     * *   In Filters, FsetIds, DataFlowlds, SourceStorage, ThroughputList, and Status support exact match only. FileSystemPath, Description, and SourceStoragePath support fuzzy match.
     * *   Combined query is supported.
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
     * Queries file systems.
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
     * Queries file systems.
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
     *   Only Cloud Parallel File Storage (CPFS) V2.2.0 and CPFS for Lingjun V2.7.0 and later support this operation. You can view the version information on the file system details page in the console.
     * *   In Filters, FsetIds supports exact match only. FileSystemPath and Description support fuzzy match.
     * *   Combined query is supported.
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
     *   Only Cloud Parallel File Storage (CPFS) V2.2.0 and CPFS for Lingjun V2.7.0 and later support this operation. You can view the version information on the file system details page in the console.
     * *   In Filters, FsetIds supports exact match only. FileSystemPath and Description support fuzzy match.
     * *   Combined query is supported.
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
     * 查询文件系统关联的 HpnZone 列表.
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
     * 查询文件系统关联的 HpnZone 列表.
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
     *   Only CPFS for Lingjun supports this operation.
     * *   Batch execution is supported. In batch execution, only one VscId can be associated with multiple FileSystemIDs, meaning the VscId in the ResourceIds must be the same.
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
     *   Only CPFS for Lingjun supports this operation.
     * *   Batch execution is supported. In batch execution, only one VscId can be associated with multiple FileSystemIDs, meaning the VscId in the ResourceIds must be the same.
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
     * Only General-purpose NAS and CPFS for Lingjun file systems support this operation.
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
     * Only General-purpose NAS and CPFS for Lingjun file systems support this operation.
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
     * Queries mount targets.
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
     * Queries mount targets.
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
     *   Only General-purpose NAS file systems support this operation.
     * *   This operation returns the clients that have accessed the specified file system within the last minute. If the file system is mounted on a client but the client did not access the file system within the last minute, the client is not included in the returned information.
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
     *   Only General-purpose NAS file systems support this operation.
     * *   This operation returns the clients that have accessed the specified file system within the last minute. If the file system is mounted on a client but the client did not access the file system within the last minute, the client is not included in the returned information.
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
     * This operation is available only to Cloud Parallel File Storage (CPFS) file systems.
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
     * This operation is available only to Cloud Parallel File Storage (CPFS) file systems.
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
     * This operation is available only to Cloud Parallel File Storage (CPFS) file systems.
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
     * This operation is available only to Cloud Parallel File Storage (CPFS) file systems.
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
     *   Only CPFS for Lingjun supports this operation.
     * *   Batch execution is supported. In batch execution, only one VscId can be associated with multiple FileSystemIDs, meaning the VscId in the ResourceIds must be the same.
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
     *   Only CPFS for Lingjun supports this operation.
     * *   Batch execution is supported. In batch execution, only one VscId can be associated with multiple FileSystemIDs, meaning the VscId in the ResourceIds must be the same.
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
     * Queries whether a directory contains files that are stored in the Infrequent Access (IA) or Archive storage class, or whether a file is stored in the IA or Archive storage class.
     *
     * @remarks
     * Only General-purpose NAS file systems support this operation.
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
     * Queries whether a directory contains files that are stored in the Infrequent Access (IA) or Archive storage class, or whether a file is stored in the IA or Archive storage class.
     *
     * @remarks
     * Only General-purpose NAS file systems support this operation.
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
     * Only CPFS V2.2.0 and CPFS for Lingjun V2.7.0 and later support this operation. You can view the version information on the file system details page in the console.
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
     * Only CPFS V2.2.0 and CPFS for Lingjun V2.7.0 and later support this operation. You can view the version information on the file system details page in the console.
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
     * 查询协议机挂载点.
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
     * 查询协议机挂载点.
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
     * Queries the infrequently-accessed files in a specified directory of a General-purpose NAS file system and the subdirectories that contain the files.
     *
     * @remarks
     * Only General-purpose NAS file systems support this operation.
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
     * Queries the infrequently-accessed files in a specified directory of a General-purpose NAS file system and the subdirectories that contain the files.
     *
     * @remarks
     * Only General-purpose NAS file systems support this operation.
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
     * The rules in the default permission group (DEFAULT_VPC_GROUP_NAME) cannot be modified.
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
     * The rules in the default permission group (DEFAULT_VPC_GROUP_NAME) cannot be modified.
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
     *   Only Cloud Parallel File Storage (CPFS) V2.2.0 and later and CPFS for Lingjun V2.4.0 and later support data flows.
     * *   You can modify the attributes only of the data flows that are in the `Running` state.
     * *   It generally takes 2 to 5 minutes to modify the attributes of a data flow. You can call the [DescribeDataFlows](https://help.aliyun.com/document_detail/2402270.html) operation to query the status of the data flow to be modified.
     * *   CPFS data flow specifications:
     *     *   The data flow throughput supports the following specifications: 600 MB/s, 1,200 MB/s, and 1,500 MB/s. The data flow throughput is the maximum transmission bandwidth that can be reached when data is imported or exported for a data flow.
     *     *   Inventory query: If you set the DryRun parameter to true, you can check whether the resources for the dataflow whose throughput is changed meet the requirements.
     * *   Billing of CPFS file systems
     *     Changing the dataflow throughput involves the billing of dataflow bandwidth. We recommend that you understand CPFS billing methods in advance. For more information, see [Billing methods and billable items of CPFS](https://help.aliyun.com/document_detail/111858.html).
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
     *   Only Cloud Parallel File Storage (CPFS) V2.2.0 and later and CPFS for Lingjun V2.4.0 and later support data flows.
     * *   You can modify the attributes only of the data flows that are in the `Running` state.
     * *   It generally takes 2 to 5 minutes to modify the attributes of a data flow. You can call the [DescribeDataFlows](https://help.aliyun.com/document_detail/2402270.html) operation to query the status of the data flow to be modified.
     * *   CPFS data flow specifications:
     *     *   The data flow throughput supports the following specifications: 600 MB/s, 1,200 MB/s, and 1,500 MB/s. The data flow throughput is the maximum transmission bandwidth that can be reached when data is imported or exported for a data flow.
     *     *   Inventory query: If you set the DryRun parameter to true, you can check whether the resources for the dataflow whose throughput is changed meet the requirements.
     * *   Billing of CPFS file systems
     *     Changing the dataflow throughput involves the billing of dataflow bandwidth. We recommend that you understand CPFS billing methods in advance. For more information, see [Billing methods and billable items of CPFS](https://help.aliyun.com/document_detail/111858.html).
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
     *   This operation is available only to CPFS file systems.
     * *   Only CPFS V2.2.0 and later support dataflows. You can view the version information on the file system details page in the console.
     * *   You can modify the AutoRefresh configurations only for the dataflows that are in the `Running` or `Stopped` state.
     * *   It generally takes 2 to 5 minutes to modify an AutoRefresh configuration. You can call the [DescribeDataFlows](https://help.aliyun.com/document_detail/2402270.html) operation to query the task of modifying an AutoRefresh configuration.
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
     *   This operation is available only to CPFS file systems.
     * *   Only CPFS V2.2.0 and later support dataflows. You can view the version information on the file system details page in the console.
     * *   You can modify the AutoRefresh configurations only for the dataflows that are in the `Running` or `Stopped` state.
     * *   It generally takes 2 to 5 minutes to modify an AutoRefresh configuration. You can call the [DescribeDataFlows](https://help.aliyun.com/document_detail/2402270.html) operation to query the task of modifying an AutoRefresh configuration.
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
     * Only Cloud Parallel File Storage (CPFS) V2.2.0 and CPFS for Lingjun V2.7.0 and later support this operation.
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
     * Only Cloud Parallel File Storage (CPFS) V2.2.0 and CPFS for Lingjun V2.7.0 and later support this operation.
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
     * Only General-purpose NAS file systems support this operation.
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
     * Only General-purpose NAS file systems support this operation.
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
     * Modifies a mount target.
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
     * Modifies a mount target.
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
     * This operation is available only to Cloud Parallel File Storage (CPFS) file systems.
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
     * This operation is available only to Cloud Parallel File Storage (CPFS) file systems.
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
     * This operation is available only to Cloud Parallel File Storage (CPFS) file systems on the China site (aliyun.com).
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
     * This operation is available only to Cloud Parallel File Storage (CPFS) file systems on the China site (aliyun.com).
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
     * Activates File Storage NAS.
     *
     * @param request - OpenNASServiceRequest
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
     * Activates File Storage NAS.
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
     *   Only Cloud Parallel File Storage (CPFS) for Lingjun V2.7.0 and later support this operation.
     * *   The minimum capacity quota of a fileset is 10 GiB. The scaling step size is 1 GiB.
     * *   A fileset supports a minimum of 10,000 files or directories and a maximum of 10 billion files or directories. The scaling step size is 1.
     * *   When modifying a directory quota, you must set the new capacity or file quantity higher than what is currently used.
     * *   You must configure at least one of the Capacity Limit (GiB) and File Limit parameters.
     * *   The quota statistics have a 15-minute latency. The actual usage takes effect after 15 minutes.
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
     *   Only Cloud Parallel File Storage (CPFS) for Lingjun V2.7.0 and later support this operation.
     * *   The minimum capacity quota of a fileset is 10 GiB. The scaling step size is 1 GiB.
     * *   A fileset supports a minimum of 10,000 files or directories and a maximum of 10 billion files or directories. The scaling step size is 1.
     * *   When modifying a directory quota, you must set the new capacity or file quantity higher than what is currently used.
     * *   You must configure at least one of the Capacity Limit (GiB) and File Limit parameters.
     * *   The quota statistics have a 15-minute latency. The actual usage takes effect after 15 minutes.
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
     *   This operation is available only to Cloud Parallel File Storage (CPFS) file systems.
     * *   Only CPFS V2.2.0 and later support data flows. You can view the version information on the file system details page in the console.
     * *   You can enable the data flows that are only in the `Stopped` state.
     * *   If the value of DryRun is `true`, you can check whether sufficient resources are available to enable the specified data flow. If the resources are insufficient, the data flow cannot be enabled.
     * *   It generally takes 2 to 5 minutes to enable a data flow. You can query the data flow status by calling the [DescribeDataFlows](https://help.aliyun.com/document_detail/2402270.html) operation.
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
     *   This operation is available only to Cloud Parallel File Storage (CPFS) file systems.
     * *   Only CPFS V2.2.0 and later support data flows. You can view the version information on the file system details page in the console.
     * *   You can enable the data flows that are only in the `Stopped` state.
     * *   If the value of DryRun is `true`, you can check whether sufficient resources are available to enable the specified data flow. If the resources are insufficient, the data flow cannot be enabled.
     * *   It generally takes 2 to 5 minutes to enable a data flow. You can query the data flow status by calling the [DescribeDataFlows](https://help.aliyun.com/document_detail/2402270.html) operation.
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
     * Disables a dataflow.
     *
     * @remarks
     *   This operation is available only to CPFS file systems.
     * *   Only CPFS V2.2.0 and later support dataflows. You can view the version information on the file system details page in the console.
     * *   You can disable only the dataflows that are in the `Running` state.
     * *   After a dataflow is disabled, you cannot create a dataflow task for the dataflow. If AutoRefresh is configured, source data updates are not synchronized to CPFS.
     * *   After a dataflow is disabled, the dataflow throughput is no longer billed because resources are reclaimed. However, the dataflow may fail to be restarted due to insufficient resources.
     * *   It generally takes 2 to 5 minutes to disable a dataflow. You can call the [DescribeDataFlows](https://help.aliyun.com/document_detail/2402271.html) operation to query the dataflow status.
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
     *   This operation is available only to CPFS file systems.
     * *   Only CPFS V2.2.0 and later support dataflows. You can view the version information on the file system details page in the console.
     * *   You can disable only the dataflows that are in the `Running` state.
     * *   After a dataflow is disabled, you cannot create a dataflow task for the dataflow. If AutoRefresh is configured, source data updates are not synchronized to CPFS.
     * *   After a dataflow is disabled, the dataflow throughput is no longer billed because resources are reclaimed. However, the dataflow may fail to be restarted due to insufficient resources.
     * *   It generally takes 2 to 5 minutes to disable a dataflow. You can call the [DescribeDataFlows](https://help.aliyun.com/document_detail/2402271.html) operation to query the dataflow status.
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
     *   Only Extreme NAS file systems and CPFS file systems can be scaled up. CPFS file systems are available only on the China site (aliyun.com).
     * *   A General-purpose NAS file system is automatically scaled up. You do not need to call this operation to scale up a General-purpose NAS file system.
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
     *   Only Extreme NAS file systems and CPFS file systems can be scaled up. CPFS file systems are available only on the China site (aliyun.com).
     * *   A General-purpose NAS file system is automatically scaled up. You do not need to call this operation to scale up a General-purpose NAS file system.
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
