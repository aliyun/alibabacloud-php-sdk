<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\NAS\V20170626\Models\AddClientToBlackListRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\AddClientToBlackListResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\AddTagsRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\AddTagsResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\ApplyAutoSnapshotPolicyRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\ApplyAutoSnapshotPolicyResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\ApplyDataFlowAutoRefreshRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\ApplyDataFlowAutoRefreshResponse;
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
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemsRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemsResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemStatisticsRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemStatisticsResponse;
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
use AlibabaCloud\SDK\NAS\V20170626\Models\RemoveTagsRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\RemoveTagsResponse;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class NAS extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'cn-chengdu'          => 'nas.aliyuncs.com',
            'me-east-1'           => 'nas.ap-northeast-1.aliyuncs.com',
            'cn-hangzhou-finance' => 'nas.aliyuncs.com',
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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @deprecated OpenAPI AddClientToBlackList is deprecated
     *  *
     * @summary 将客户端加入黑名单
     *  *
     * @description The API operation is available only for CPFS file systems.
     *  *
     * Deprecated
     *
     * @param AddClientToBlackListRequest $request AddClientToBlackListRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return AddClientToBlackListResponse AddClientToBlackListResponse
     */
    public function addClientToBlackListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientIP)) {
            $query['ClientIP'] = $request->clientIP;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddClientToBlackList',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddClientToBlackListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated OpenAPI AddClientToBlackList is deprecated
     *  *
     * @summary 将客户端加入黑名单
     *  *
     * @description The API operation is available only for CPFS file systems.
     *  *
     * Deprecated
     *
     * @param AddClientToBlackListRequest $request AddClientToBlackListRequest
     *
     * @return AddClientToBlackListResponse AddClientToBlackListResponse
     */
    public function addClientToBlackList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addClientToBlackListWithOptions($request, $runtime);
    }

    /**
     * @deprecated openAPI AddTags is deprecated, please use NAS::2017-06-26::TagResources instead
     *  *
     * @summary Adds one or more tags to a file system or overwrites one or more tags of a file system.
     *  *
     * @description >  The tag feature has been upgraded and this document will be unpublished. For more information, see TagResources.
     * *   Each tag consists of a tag key (TagKey) and a tag value (TagValue).
     * *   Placeholders at the start and end of each TagKey and TagValue are automatically removed. Placeholders include the spacebar ( ), tab (\\t), line break (\\n), and carriage return (\\r).
     * *   You must specify a tag key. You can leave a tag value empty.
     * *   The tag key and tag value are not case-sensitive.
     * *   A tag key can be up to 64 characters in length and a tag value can be up to 128 characters in length.
     * *   You can add a maximum of 10 tags to a file system. If you add two tags with the same tag key, the newly added tag will overwrite the existing tag.
     * *   If you remove a tag from all linked file systems, the tag is automatically deleted.
     *  *
     * Deprecated
     *
     * @param AddTagsRequest $request AddTagsRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return AddTagsResponse AddTagsResponse
     */
    public function addTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddTags',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated openAPI AddTags is deprecated, please use NAS::2017-06-26::TagResources instead
     *  *
     * @summary Adds one or more tags to a file system or overwrites one or more tags of a file system.
     *  *
     * @description >  The tag feature has been upgraded and this document will be unpublished. For more information, see TagResources.
     * *   Each tag consists of a tag key (TagKey) and a tag value (TagValue).
     * *   Placeholders at the start and end of each TagKey and TagValue are automatically removed. Placeholders include the spacebar ( ), tab (\\t), line break (\\n), and carriage return (\\r).
     * *   You must specify a tag key. You can leave a tag value empty.
     * *   The tag key and tag value are not case-sensitive.
     * *   A tag key can be up to 64 characters in length and a tag value can be up to 128 characters in length.
     * *   You can add a maximum of 10 tags to a file system. If you add two tags with the same tag key, the newly added tag will overwrite the existing tag.
     * *   If you remove a tag from all linked file systems, the tag is automatically deleted.
     *  *
     * Deprecated
     *
     * @param AddTagsRequest $request AddTagsRequest
     *
     * @return AddTagsResponse AddTagsResponse
     */
    public function addTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addTagsWithOptions($request, $runtime);
    }

    /**
     * @summary Applies an automatic snapshot policy to one or more file systems.
     *  *
     * @description *   The snapshot feature is in public preview and is provided free of charge. [File Storage NAS Service Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed in public preview.
     * *   Only advanced Extreme NAS file systems support this feature.
     * *   You can apply only one automatic snapshot policy to each file system.
     * *   Each automatic snapshot policy can be applied to multiple file systems.
     * *   If an automatic snapshot policy is applied to a file system, you can call the ApplyAutoSnapshotPolicy operation to change the automatic snapshot policy.
     *  *
     * @param ApplyAutoSnapshotPolicyRequest $request ApplyAutoSnapshotPolicyRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ApplyAutoSnapshotPolicyResponse ApplyAutoSnapshotPolicyResponse
     */
    public function applyAutoSnapshotPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoSnapshotPolicyId)) {
            $query['AutoSnapshotPolicyId'] = $request->autoSnapshotPolicyId;
        }
        if (!Utils::isUnset($request->fileSystemIds)) {
            $query['FileSystemIds'] = $request->fileSystemIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ApplyAutoSnapshotPolicy',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ApplyAutoSnapshotPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Applies an automatic snapshot policy to one or more file systems.
     *  *
     * @description *   The snapshot feature is in public preview and is provided free of charge. [File Storage NAS Service Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed in public preview.
     * *   Only advanced Extreme NAS file systems support this feature.
     * *   You can apply only one automatic snapshot policy to each file system.
     * *   Each automatic snapshot policy can be applied to multiple file systems.
     * *   If an automatic snapshot policy is applied to a file system, you can call the ApplyAutoSnapshotPolicy operation to change the automatic snapshot policy.
     *  *
     * @param ApplyAutoSnapshotPolicyRequest $request ApplyAutoSnapshotPolicyRequest
     *
     * @return ApplyAutoSnapshotPolicyResponse ApplyAutoSnapshotPolicyResponse
     */
    public function applyAutoSnapshotPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyAutoSnapshotPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary Adds AutoRefresh configurations to a dataflow.
     *  *
     * @description *   This operation is available only to Cloud Parallel File Storage (CPFS) file systems on the China site (aliyun.com).
     * *   Only CPFS V2.2.0 and later support dataflows. You can view the version information on the file system details page in the console.
     * *   You can add AutoRefresh configurations only to the dataflows that are in the `Running` state.
     * *   You can add a maximum of five AutoRefresh configurations to a dataflow.
     * *   It generally takes 2 to 5 minutes to create an AutoRefresh configuration. You can call the [DescribeDataFlows](https://help.aliyun.com/document_detail/2838084.html) operation to query the dataflow status.
     * *   AutoRefresh depends on the object modification events collected by EventBridge from the source Object Storage Service (OSS) bucket. You must first [activate EventBridge](https://help.aliyun.com/document_detail/182246.html).
     *     > The event buses and event rules created for CPFS in the EventBridge console contain the `Create for cpfs auto refresh` description. The event buses and event rules cannot be modified or deleted. Otherwise, AutoRefresh cannot work properly.
     * *   The AutoRefresh configuration applies only to the prefix and is specified by the RefreshPath parameter. When you add an AutoRefresh configuration to the prefix for a CPFS dataflow, an event bus is created at the user side and an event rule is created for the prefix of the source OSS bucket. When an object is modified in the prefix of the source OSS bucket, an OSS event is generated in the EventBridge console. The event is processed by the CPFS dataflow.
     * *   After AutoRefresh is configured, if the data in the source OSS bucket is updated, the updated metadata is automatically synchronized to the CPFS file system. You can load the updated data when you access files, or run a dataflow task to load the updated data.
     * *   AutoRefreshInterval refers to the interval at which CPFS checks whether data is updated in the prefix of the source OSS bucket. If data is updated, CPFS runs an AutoRefresh task. If the frequency of triggering the object modification event in the source OSS bucket exceeds the processing capability of the CPFS dataflow, AutoRefresh tasks are accumulated, metadata updates are delayed, and the dataflow status becomes Misconfigured. To resolve these issues, you can increase the dataflow specifications or reduce the frequency of triggering the object modification event.
     *  *
     * @param ApplyDataFlowAutoRefreshRequest $request ApplyDataFlowAutoRefreshRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ApplyDataFlowAutoRefreshResponse ApplyDataFlowAutoRefreshResponse
     */
    public function applyDataFlowAutoRefreshWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoRefreshInterval)) {
            $query['AutoRefreshInterval'] = $request->autoRefreshInterval;
        }
        if (!Utils::isUnset($request->autoRefreshPolicy)) {
            $query['AutoRefreshPolicy'] = $request->autoRefreshPolicy;
        }
        if (!Utils::isUnset($request->autoRefreshs)) {
            $query['AutoRefreshs'] = $request->autoRefreshs;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dataFlowId)) {
            $query['DataFlowId'] = $request->dataFlowId;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ApplyDataFlowAutoRefresh',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ApplyDataFlowAutoRefreshResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Adds AutoRefresh configurations to a dataflow.
     *  *
     * @description *   This operation is available only to Cloud Parallel File Storage (CPFS) file systems on the China site (aliyun.com).
     * *   Only CPFS V2.2.0 and later support dataflows. You can view the version information on the file system details page in the console.
     * *   You can add AutoRefresh configurations only to the dataflows that are in the `Running` state.
     * *   You can add a maximum of five AutoRefresh configurations to a dataflow.
     * *   It generally takes 2 to 5 minutes to create an AutoRefresh configuration. You can call the [DescribeDataFlows](https://help.aliyun.com/document_detail/2838084.html) operation to query the dataflow status.
     * *   AutoRefresh depends on the object modification events collected by EventBridge from the source Object Storage Service (OSS) bucket. You must first [activate EventBridge](https://help.aliyun.com/document_detail/182246.html).
     *     > The event buses and event rules created for CPFS in the EventBridge console contain the `Create for cpfs auto refresh` description. The event buses and event rules cannot be modified or deleted. Otherwise, AutoRefresh cannot work properly.
     * *   The AutoRefresh configuration applies only to the prefix and is specified by the RefreshPath parameter. When you add an AutoRefresh configuration to the prefix for a CPFS dataflow, an event bus is created at the user side and an event rule is created for the prefix of the source OSS bucket. When an object is modified in the prefix of the source OSS bucket, an OSS event is generated in the EventBridge console. The event is processed by the CPFS dataflow.
     * *   After AutoRefresh is configured, if the data in the source OSS bucket is updated, the updated metadata is automatically synchronized to the CPFS file system. You can load the updated data when you access files, or run a dataflow task to load the updated data.
     * *   AutoRefreshInterval refers to the interval at which CPFS checks whether data is updated in the prefix of the source OSS bucket. If data is updated, CPFS runs an AutoRefresh task. If the frequency of triggering the object modification event in the source OSS bucket exceeds the processing capability of the CPFS dataflow, AutoRefresh tasks are accumulated, metadata updates are delayed, and the dataflow status becomes Misconfigured. To resolve these issues, you can increase the dataflow specifications or reduce the frequency of triggering the object modification event.
     *  *
     * @param ApplyDataFlowAutoRefreshRequest $request ApplyDataFlowAutoRefreshRequest
     *
     * @return ApplyDataFlowAutoRefreshResponse ApplyDataFlowAutoRefreshResponse
     */
    public function applyDataFlowAutoRefresh($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyDataFlowAutoRefreshWithOptions($request, $runtime);
    }

    /**
     * @summary Removes automatic snapshot policies from one or more file systems.
     *  *
     * @description *   The snapshot feature is in public preview and is provided free of charge. [File Storage NAS Service Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed in public preview.
     * *   Only advanced Extreme NAS file systems support this feature.
     *  *
     * @param CancelAutoSnapshotPolicyRequest $request CancelAutoSnapshotPolicyRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return CancelAutoSnapshotPolicyResponse CancelAutoSnapshotPolicyResponse
     */
    public function cancelAutoSnapshotPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileSystemIds)) {
            $query['FileSystemIds'] = $request->fileSystemIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CancelAutoSnapshotPolicy',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelAutoSnapshotPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Removes automatic snapshot policies from one or more file systems.
     *  *
     * @description *   The snapshot feature is in public preview and is provided free of charge. [File Storage NAS Service Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed in public preview.
     * *   Only advanced Extreme NAS file systems support this feature.
     *  *
     * @param CancelAutoSnapshotPolicyRequest $request CancelAutoSnapshotPolicyRequest
     *
     * @return CancelAutoSnapshotPolicyResponse CancelAutoSnapshotPolicyResponse
     */
    public function cancelAutoSnapshotPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelAutoSnapshotPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary Cancels the AutoRefresh configuration for a dataflow.
     *  *
     * @description *   This operation is available only to Cloud Parallel File Storage (CPFS) file systems on the China site (aliyun.com).
     * *   Only CPFS V2.2.0 and later support dataflows. You can view the version information on the file system details page in the console.
     * *   You can cancel AutoRefresh configurations only for the dataflows that are in the `Running` or `Stopped` state.
     * *   It generally takes 2 to 5 minutes to cancel the AutoRefresh configurations. You can call the [DescribeDataFlows](https://help.aliyun.com/document_detail/2838084.html) operation to query the status of the AutoRefresh tasks.
     *  *
     * @param CancelDataFlowAutoRefreshRequest $request CancelDataFlowAutoRefreshRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return CancelDataFlowAutoRefreshResponse CancelDataFlowAutoRefreshResponse
     */
    public function cancelDataFlowAutoRefreshWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dataFlowId)) {
            $query['DataFlowId'] = $request->dataFlowId;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->refreshPath)) {
            $query['RefreshPath'] = $request->refreshPath;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CancelDataFlowAutoRefresh',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelDataFlowAutoRefreshResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Cancels the AutoRefresh configuration for a dataflow.
     *  *
     * @description *   This operation is available only to Cloud Parallel File Storage (CPFS) file systems on the China site (aliyun.com).
     * *   Only CPFS V2.2.0 and later support dataflows. You can view the version information on the file system details page in the console.
     * *   You can cancel AutoRefresh configurations only for the dataflows that are in the `Running` or `Stopped` state.
     * *   It generally takes 2 to 5 minutes to cancel the AutoRefresh configurations. You can call the [DescribeDataFlows](https://help.aliyun.com/document_detail/2838084.html) operation to query the status of the AutoRefresh tasks.
     *  *
     * @param CancelDataFlowAutoRefreshRequest $request CancelDataFlowAutoRefreshRequest
     *
     * @return CancelDataFlowAutoRefreshResponse CancelDataFlowAutoRefreshResponse
     */
    public function cancelDataFlowAutoRefresh($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelDataFlowAutoRefreshWithOptions($request, $runtime);
    }

    /**
     * @summary Cancels a data streaming task.
     *  *
     * @description *   Only Cloud Parallel File Storage (CPFS) for LINGJUN V2.6.0 and later support this operation. You can view the version information on the file system details page in the console.
     * *   You can cancel a data streaming task only when the task is in the CREATED or RUNNING state.
     * *   Data streaming tasks are executed asynchronously. You can call the DescribeDataFlowSubTasks operation to query the task execution status.
     *  *
     * @param CancelDataFlowSubTaskRequest $request CancelDataFlowSubTaskRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return CancelDataFlowSubTaskResponse CancelDataFlowSubTaskResponse
     */
    public function cancelDataFlowSubTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dataFlowId)) {
            $query['DataFlowId'] = $request->dataFlowId;
        }
        if (!Utils::isUnset($request->dataFlowSubTaskId)) {
            $query['DataFlowSubTaskId'] = $request->dataFlowSubTaskId;
        }
        if (!Utils::isUnset($request->dataFlowTaskId)) {
            $query['DataFlowTaskId'] = $request->dataFlowTaskId;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CancelDataFlowSubTask',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelDataFlowSubTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Cancels a data streaming task.
     *  *
     * @description *   Only Cloud Parallel File Storage (CPFS) for LINGJUN V2.6.0 and later support this operation. You can view the version information on the file system details page in the console.
     * *   You can cancel a data streaming task only when the task is in the CREATED or RUNNING state.
     * *   Data streaming tasks are executed asynchronously. You can call the DescribeDataFlowSubTasks operation to query the task execution status.
     *  *
     * @param CancelDataFlowSubTaskRequest $request CancelDataFlowSubTaskRequest
     *
     * @return CancelDataFlowSubTaskResponse CancelDataFlowSubTaskResponse
     */
    public function cancelDataFlowSubTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelDataFlowSubTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Cancels a dataflow task that is not running.
     *  *
     * @description *   Only Cloud Parallel File Storage (CPFS) for LINGJUN V2.4.0 and later support data flow tasks. You can view the version information on the file system details page in the console.
     * *   You can cancel only the data flow tasks that are in the `Pending` and `Executing` states.
     * *   It generally takes 5 to 10 minutes to cancel a data flow task. You can query the task execution status by calling the [DescribeDataFlowTasks](https://help.aliyun.com/document_detail/2838089.html) operation.
     *  *
     * @param CancelDataFlowTaskRequest $request CancelDataFlowTaskRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CancelDataFlowTaskResponse CancelDataFlowTaskResponse
     */
    public function cancelDataFlowTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dataFlowId)) {
            $query['DataFlowId'] = $request->dataFlowId;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CancelDataFlowTask',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelDataFlowTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Cancels a dataflow task that is not running.
     *  *
     * @description *   Only Cloud Parallel File Storage (CPFS) for LINGJUN V2.4.0 and later support data flow tasks. You can view the version information on the file system details page in the console.
     * *   You can cancel only the data flow tasks that are in the `Pending` and `Executing` states.
     * *   It generally takes 5 to 10 minutes to cancel a data flow task. You can query the task execution status by calling the [DescribeDataFlowTasks](https://help.aliyun.com/document_detail/2838089.html) operation.
     *  *
     * @param CancelDataFlowTaskRequest $request CancelDataFlowTaskRequest
     *
     * @return CancelDataFlowTaskResponse CancelDataFlowTaskResponse
     */
    public function cancelDataFlowTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelDataFlowTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Cancels the directory quota of a file system.
     *  *
     * @description Only General-purpose file systems support the directory quota feature.
     *  *
     * @param CancelDirQuotaRequest $request CancelDirQuotaRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CancelDirQuotaResponse CancelDirQuotaResponse
     */
    public function cancelDirQuotaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->path)) {
            $query['Path'] = $request->path;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        if (!Utils::isUnset($request->userType)) {
            $query['UserType'] = $request->userType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CancelDirQuota',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelDirQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Cancels the directory quota of a file system.
     *  *
     * @description Only General-purpose file systems support the directory quota feature.
     *  *
     * @param CancelDirQuotaRequest $request CancelDirQuotaRequest
     *
     * @return CancelDirQuotaResponse CancelDirQuotaResponse
     */
    public function cancelDirQuota($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelDirQuotaWithOptions($request, $runtime);
    }

    /**
     * @summary Cancels the quota set for a fileset.
     *  *
     * @description Only Cloud Parallel File Storage (CPFS) for LINGJUN V2.7.0 and later support this operation.
     *  *
     * @param CancelFilesetQuotaRequest $request CancelFilesetQuotaRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CancelFilesetQuotaResponse CancelFilesetQuotaResponse
     */
    public function cancelFilesetQuotaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->fsetId)) {
            $query['FsetId'] = $request->fsetId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CancelFilesetQuota',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelFilesetQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Cancels the quota set for a fileset.
     *  *
     * @description Only Cloud Parallel File Storage (CPFS) for LINGJUN V2.7.0 and later support this operation.
     *  *
     * @param CancelFilesetQuotaRequest $request CancelFilesetQuotaRequest
     *
     * @return CancelFilesetQuotaResponse CancelFilesetQuotaResponse
     */
    public function cancelFilesetQuota($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelFilesetQuotaWithOptions($request, $runtime);
    }

    /**
     * @summary Cancels a running data retrieval task.
     *  *
     * @description Only General-purpose NAS file systems support this operation.
     *  *
     * @param CancelLifecycleRetrieveJobRequest $request CancelLifecycleRetrieveJobRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return CancelLifecycleRetrieveJobResponse CancelLifecycleRetrieveJobResponse
     */
    public function cancelLifecycleRetrieveJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CancelLifecycleRetrieveJob',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelLifecycleRetrieveJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Cancels a running data retrieval task.
     *  *
     * @description Only General-purpose NAS file systems support this operation.
     *  *
     * @param CancelLifecycleRetrieveJobRequest $request CancelLifecycleRetrieveJobRequest
     *
     * @return CancelLifecycleRetrieveJobResponse CancelLifecycleRetrieveJobResponse
     */
    public function cancelLifecycleRetrieveJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelLifecycleRetrieveJobWithOptions($request, $runtime);
    }

    /**
     * @summary Cancels a running job of the recycle bin.
     *  *
     * @description *   Only General-purpose NAS file systems support this operation.
     * *   You can cancel only jobs that are in the Running state. You cannot cancel jobs that are in the PartialSuccess, Success, Fail, or Cancelled state.
     * *   If you cancel a running job that permanently deletes files, you cannot restore the files that are already permanently deleted.
     * *   If you cancel a running job that restores files, you can query the restored files from the file system, and query the unrestored files from the recycle bin.
     *  *
     * @param CancelRecycleBinJobRequest $request CancelRecycleBinJobRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return CancelRecycleBinJobResponse CancelRecycleBinJobResponse
     */
    public function cancelRecycleBinJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CancelRecycleBinJob',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelRecycleBinJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Cancels a running job of the recycle bin.
     *  *
     * @description *   Only General-purpose NAS file systems support this operation.
     * *   You can cancel only jobs that are in the Running state. You cannot cancel jobs that are in the PartialSuccess, Success, Fail, or Cancelled state.
     * *   If you cancel a running job that permanently deletes files, you cannot restore the files that are already permanently deleted.
     * *   If you cancel a running job that restores files, you can query the restored files from the file system, and query the unrestored files from the recycle bin.
     *  *
     * @param CancelRecycleBinJobRequest $request CancelRecycleBinJobRequest
     *
     * @return CancelRecycleBinJobResponse CancelRecycleBinJobResponse
     */
    public function cancelRecycleBinJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelRecycleBinJobWithOptions($request, $runtime);
    }

    /**
     * @summary Changes the resource group to which a file system belongs.
     *  *
     * @param ChangeResourceGroupRequest $request ChangeResourceGroupRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ChangeResourceGroupResponse ChangeResourceGroupResponse
     */
    public function changeResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->newResourceGroupId)) {
            $query['NewResourceGroupId'] = $request->newResourceGroupId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ChangeResourceGroup',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ChangeResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Changes the resource group to which a file system belongs.
     *  *
     * @param ChangeResourceGroupRequest $request ChangeResourceGroupRequest
     *
     * @return ChangeResourceGroupResponse ChangeResourceGroupResponse
     */
    public function changeResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeResourceGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a permission group.
     *  *
     * @param CreateAccessGroupRequest $request CreateAccessGroupRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAccessGroupResponse CreateAccessGroupResponse
     */
    public function createAccessGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessGroupName)) {
            $query['AccessGroupName'] = $request->accessGroupName;
        }
        if (!Utils::isUnset($request->accessGroupType)) {
            $query['AccessGroupType'] = $request->accessGroupType;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->fileSystemType)) {
            $query['FileSystemType'] = $request->fileSystemType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAccessGroup',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAccessGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a permission group.
     *  *
     * @param CreateAccessGroupRequest $request CreateAccessGroupRequest
     *
     * @return CreateAccessGroupResponse CreateAccessGroupResponse
     */
    public function createAccessGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAccessGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an access point.
     *  *
     * @description *   After you call the CreateAccessPoint operation, an access point is not immediately created. Therefore, after you call the CreateAccessPoint operation successfully, call the [DescribeAccessPoints](https://help.aliyun.com/document_detail/2712239.html) or [DescribeAccessPoint](https://help.aliyun.com/document_detail/2712240.html) operation to query the status of the access point. If the status is **Active**, mount the file system. Otherwise, the file system may fail to be mounted.
     * *   Only General-purpose Network File System (NFS) file systems support access points.
     * *   If you want to call the EnabledRam operation to enable a Resource Access Management (RAM) policy, you must configure the corresponding RAM permissions. For more information, see [Manage endpoints](https://help.aliyun.com/document_detail/2545998.html).
     *  *
     * @param CreateAccessPointRequest $request CreateAccessPointRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAccessPointResponse CreateAccessPointResponse
     */
    public function createAccessPointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessGroup)) {
            $query['AccessGroup'] = $request->accessGroup;
        }
        if (!Utils::isUnset($request->accessPointName)) {
            $query['AccessPointName'] = $request->accessPointName;
        }
        if (!Utils::isUnset($request->enabledRam)) {
            $query['EnabledRam'] = $request->enabledRam;
        }
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->ownerGroupId)) {
            $query['OwnerGroupId'] = $request->ownerGroupId;
        }
        if (!Utils::isUnset($request->ownerUserId)) {
            $query['OwnerUserId'] = $request->ownerUserId;
        }
        if (!Utils::isUnset($request->permission)) {
            $query['Permission'] = $request->permission;
        }
        if (!Utils::isUnset($request->posixGroupId)) {
            $query['PosixGroupId'] = $request->posixGroupId;
        }
        if (!Utils::isUnset($request->posixSecondaryGroupIds)) {
            $query['PosixSecondaryGroupIds'] = $request->posixSecondaryGroupIds;
        }
        if (!Utils::isUnset($request->posixUserId)) {
            $query['PosixUserId'] = $request->posixUserId;
        }
        if (!Utils::isUnset($request->rootDirectory)) {
            $query['RootDirectory'] = $request->rootDirectory;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        if (!Utils::isUnset($request->vswId)) {
            $query['VswId'] = $request->vswId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAccessPoint',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAccessPointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates an access point.
     *  *
     * @description *   After you call the CreateAccessPoint operation, an access point is not immediately created. Therefore, after you call the CreateAccessPoint operation successfully, call the [DescribeAccessPoints](https://help.aliyun.com/document_detail/2712239.html) or [DescribeAccessPoint](https://help.aliyun.com/document_detail/2712240.html) operation to query the status of the access point. If the status is **Active**, mount the file system. Otherwise, the file system may fail to be mounted.
     * *   Only General-purpose Network File System (NFS) file systems support access points.
     * *   If you want to call the EnabledRam operation to enable a Resource Access Management (RAM) policy, you must configure the corresponding RAM permissions. For more information, see [Manage endpoints](https://help.aliyun.com/document_detail/2545998.html).
     *  *
     * @param CreateAccessPointRequest $request CreateAccessPointRequest
     *
     * @return CreateAccessPointResponse CreateAccessPointResponse
     */
    public function createAccessPoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAccessPointWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a rule for a permission group.
     *  *
     * @param CreateAccessRuleRequest $request CreateAccessRuleRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAccessRuleResponse CreateAccessRuleResponse
     */
    public function createAccessRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessGroupName)) {
            $query['AccessGroupName'] = $request->accessGroupName;
        }
        if (!Utils::isUnset($request->fileSystemType)) {
            $query['FileSystemType'] = $request->fileSystemType;
        }
        if (!Utils::isUnset($request->ipv6SourceCidrIp)) {
            $query['Ipv6SourceCidrIp'] = $request->ipv6SourceCidrIp;
        }
        if (!Utils::isUnset($request->priority)) {
            $query['Priority'] = $request->priority;
        }
        if (!Utils::isUnset($request->RWAccessType)) {
            $query['RWAccessType'] = $request->RWAccessType;
        }
        if (!Utils::isUnset($request->sourceCidrIp)) {
            $query['SourceCidrIp'] = $request->sourceCidrIp;
        }
        if (!Utils::isUnset($request->userAccessType)) {
            $query['UserAccessType'] = $request->userAccessType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAccessRule',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAccessRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a rule for a permission group.
     *  *
     * @param CreateAccessRuleRequest $request CreateAccessRuleRequest
     *
     * @return CreateAccessRuleResponse CreateAccessRuleResponse
     */
    public function createAccessRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAccessRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an automatic snapshot policy.
     *  *
     * @description *   The snapshot feature is in public preview and is provided free of charge. [File Storage NAS Service Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed in public preview.
     * *   Only advanced Extreme NAS file systems support the snapshot feature.
     * *   You can create a maximum of 100 automatic snapshot policies in each region for an Alibaba Cloud account.
     * *   If an auto snapshot is being created when the scheduled time for a new auto snapshot arrives, the creation of the new snapshot is skipped. This occurs if the file system stores a large volume of data. For example, you have scheduled auto snapshots to be created at 09:00:00, 10:00:00, 11:00:00, and 12:00:00 for a file system. The system starts to create an auto snapshot at 09:00:00 and does not complete the process until 10:20:00. The process takes 80 minutes because the file system has a large volume of data. In this case, the system does not create an auto snapshot at 10:00:00, but creates an auto snapshot at 11:00:00.
     * *   A maximum of 128 auto snapshots can be created for a file system. If the upper limit is reached, the earliest auto snapshot is deleted. This rule does not apply to manual snapshots.
     * *   If you modify the retention period of an automatic snapshot policy, the modification applies only to subsequent snapshots, but not to the existing snapshots.
     * *   If an auto snapshot is being created for a file system, you cannot create a manual snapshot for the file system. You must wait after the auto snapshot is created.
     * *   You can only apply automatic snapshot policies to a file system that is in the Running state.
     * *   All auto snapshots are named in the `auto_yyyyMMdd_X` format, where: `auto` indicates that the snapshot is created based on an automatic snapshot policy. `yyyyMMdd` indicates the date on which the snapshot is created. `y` indicates the year. `M` indicates the month. `d` indicates the day. `X` indicates the ordinal number of the snapshot on the current day. For example, `auto_20201018_1` indicates the first auto snapshot that was created on October 18, 2020.
     * *   After an automatic snapshot policy is created, you can call the ApplyAutoSnapshotPolicy operation to apply the policy to a file system and call the ModifyAutoSnapshotPolicy operation to modify the policy.
     *  *
     * @param CreateAutoSnapshotPolicyRequest $request CreateAutoSnapshotPolicyRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAutoSnapshotPolicyResponse CreateAutoSnapshotPolicyResponse
     */
    public function createAutoSnapshotPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoSnapshotPolicyName)) {
            $query['AutoSnapshotPolicyName'] = $request->autoSnapshotPolicyName;
        }
        if (!Utils::isUnset($request->fileSystemType)) {
            $query['FileSystemType'] = $request->fileSystemType;
        }
        if (!Utils::isUnset($request->repeatWeekdays)) {
            $query['RepeatWeekdays'] = $request->repeatWeekdays;
        }
        if (!Utils::isUnset($request->retentionDays)) {
            $query['RetentionDays'] = $request->retentionDays;
        }
        if (!Utils::isUnset($request->timePoints)) {
            $query['TimePoints'] = $request->timePoints;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAutoSnapshotPolicy',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAutoSnapshotPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates an automatic snapshot policy.
     *  *
     * @description *   The snapshot feature is in public preview and is provided free of charge. [File Storage NAS Service Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed in public preview.
     * *   Only advanced Extreme NAS file systems support the snapshot feature.
     * *   You can create a maximum of 100 automatic snapshot policies in each region for an Alibaba Cloud account.
     * *   If an auto snapshot is being created when the scheduled time for a new auto snapshot arrives, the creation of the new snapshot is skipped. This occurs if the file system stores a large volume of data. For example, you have scheduled auto snapshots to be created at 09:00:00, 10:00:00, 11:00:00, and 12:00:00 for a file system. The system starts to create an auto snapshot at 09:00:00 and does not complete the process until 10:20:00. The process takes 80 minutes because the file system has a large volume of data. In this case, the system does not create an auto snapshot at 10:00:00, but creates an auto snapshot at 11:00:00.
     * *   A maximum of 128 auto snapshots can be created for a file system. If the upper limit is reached, the earliest auto snapshot is deleted. This rule does not apply to manual snapshots.
     * *   If you modify the retention period of an automatic snapshot policy, the modification applies only to subsequent snapshots, but not to the existing snapshots.
     * *   If an auto snapshot is being created for a file system, you cannot create a manual snapshot for the file system. You must wait after the auto snapshot is created.
     * *   You can only apply automatic snapshot policies to a file system that is in the Running state.
     * *   All auto snapshots are named in the `auto_yyyyMMdd_X` format, where: `auto` indicates that the snapshot is created based on an automatic snapshot policy. `yyyyMMdd` indicates the date on which the snapshot is created. `y` indicates the year. `M` indicates the month. `d` indicates the day. `X` indicates the ordinal number of the snapshot on the current day. For example, `auto_20201018_1` indicates the first auto snapshot that was created on October 18, 2020.
     * *   After an automatic snapshot policy is created, you can call the ApplyAutoSnapshotPolicy operation to apply the policy to a file system and call the ModifyAutoSnapshotPolicy operation to modify the policy.
     *  *
     * @param CreateAutoSnapshotPolicyRequest $request CreateAutoSnapshotPolicyRequest
     *
     * @return CreateAutoSnapshotPolicyResponse CreateAutoSnapshotPolicyResponse
     */
    public function createAutoSnapshotPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAutoSnapshotPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a dataflow for a Cloud Parallel File Storage (CPFS) file system and source storage.
     *  *
     * @description *   Basic operations
     *     *   Cloud Parallel File Storage (CPFS) for LINGJUN V2.4.0 and later support data flows.
     *     *   You can create a data flow only when a CPFS for LINGJUN file system is in the Running state.
     *     *   A maximum of 10 data flows can be created for a CPFS for LINGJUN file system.
     *     *   It generally takes 2 to 5 minutes to create a data flow. You can call the DescribeDataFlows operation to check whether the data flow has been created.
     * *   Permissions
     *     When you create a data flow, CPFS for LINGJUN obtains the following two service-linked roles: `AliyunServiceRoleForNasOssDataflow` and `AliyunServiceRoleForNasEventNotification`. For more information, see [CPFS service-linked roles](https://help.aliyun.com/document_detail/2837688.html).
     * *   CPFS for LINGJUN usage notes
     *      *   Source storage
     *          *   The source storage is an Object Storage Service (OSS) bucket. SourceStorage for a data flow must be an OSS bucket.
     *          *   CPFS for LINGJUN data flows support both encrypted and unencrypted access to OSS. If you select SSL-encrypted access to OSS, make sure that encryption in transit for OSS buckets supports encrypted access.
     *          *   If data flows for multiple CPFS for LINGJUN file systems or multiple data flows for the same CPFS for LINGJUN file system are stored in the same OSS bucket, you must enable versioning for the OSS bucket to prevent data conflicts caused by data export from multiple CPFS for LINGJUN file systems to one OSS bucket.
     *          *   Data flows are not supported for OSS buckets across regions. The OSS bucket must reside in the same region as the CPFS file system.
     *          *   CPFS for LINGJUN V2.6.0 and later allow you to create data flows for OSS buckets across accounts.
     *          *   The account id parameter is required only when you use OSS buckets across accounts.
     *          *   To use OSS buckets across accounts, you must first grant permissions to the related accounts. For more information, see [Cross-account authorization on data flows](https://help.aliyun.com/document_detail/2713462.html).
     *          >  Before you create a data flow, you must configure a tag (key: cpfs-dataflow, value: true) for the source OSS bucket. This way, the created data flow can access the data in the OSS bucket. When a data flow is being used, do not delete or modify the tag. Otherwise, the data flow for CPFS for LINGJUN cannot access the data in the OSS bucket.
     *     *   Limits of data flows on file systems
     *         *   You cannot rename a non-empty directory in a path that is associated with a data flow. Otherwise, the Permission Denied error message or an error message indicating that the directory is not empty is returned.
     *         *   Proceed with caution when you use special characters in the names of directories and files. The following characters are supported: letters, digits, exclamation points (!), hyphens (-), underscores (_), periods (.), asterisks (\\*), and parentheses (()).
     *         *   The path can be up to 1,023 characters in length.
     *     *   Limits of data flows on import
     *         *   After a symbolic link is imported to CPFS for LINGJUN, the symbolic link is converted into a common data file that contains no symbolic link information.
     *         *   If an OSS bucket has multiple versions, only data of the latest version is used.
     *         *   The name of a file or a subdirectory can be up to 255 bytes in length.
     *     *   Limits of data flows on export
     *         *   After a symbolic link is synchronized to OSS, the file that the symbolic link points to is not synchronized to OSS. In this case, the symbolic link is converted into a common object that contains no data.
     *         *   Hard links can be synchronized to OSS only as common files that contain no link information.
     *         *   After a file of the Socket, Device, or Pipe type is exported to an OSS bucket, the file is converted into a common object that contains no data.
     *         *   The directory path can be up to 1,023 characters in length.
     *  *
     * @param CreateDataFlowRequest $request CreateDataFlowRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDataFlowResponse CreateDataFlowResponse
     */
    public function createDataFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoRefreshInterval)) {
            $query['AutoRefreshInterval'] = $request->autoRefreshInterval;
        }
        if (!Utils::isUnset($request->autoRefreshPolicy)) {
            $query['AutoRefreshPolicy'] = $request->autoRefreshPolicy;
        }
        if (!Utils::isUnset($request->autoRefreshs)) {
            $query['AutoRefreshs'] = $request->autoRefreshs;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->fileSystemPath)) {
            $query['FileSystemPath'] = $request->fileSystemPath;
        }
        if (!Utils::isUnset($request->fsetId)) {
            $query['FsetId'] = $request->fsetId;
        }
        if (!Utils::isUnset($request->sourceSecurityType)) {
            $query['SourceSecurityType'] = $request->sourceSecurityType;
        }
        if (!Utils::isUnset($request->sourceStorage)) {
            $query['SourceStorage'] = $request->sourceStorage;
        }
        if (!Utils::isUnset($request->sourceStoragePath)) {
            $query['SourceStoragePath'] = $request->sourceStoragePath;
        }
        if (!Utils::isUnset($request->throughput)) {
            $query['Throughput'] = $request->throughput;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDataFlow',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDataFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a dataflow for a Cloud Parallel File Storage (CPFS) file system and source storage.
     *  *
     * @description *   Basic operations
     *     *   Cloud Parallel File Storage (CPFS) for LINGJUN V2.4.0 and later support data flows.
     *     *   You can create a data flow only when a CPFS for LINGJUN file system is in the Running state.
     *     *   A maximum of 10 data flows can be created for a CPFS for LINGJUN file system.
     *     *   It generally takes 2 to 5 minutes to create a data flow. You can call the DescribeDataFlows operation to check whether the data flow has been created.
     * *   Permissions
     *     When you create a data flow, CPFS for LINGJUN obtains the following two service-linked roles: `AliyunServiceRoleForNasOssDataflow` and `AliyunServiceRoleForNasEventNotification`. For more information, see [CPFS service-linked roles](https://help.aliyun.com/document_detail/2837688.html).
     * *   CPFS for LINGJUN usage notes
     *      *   Source storage
     *          *   The source storage is an Object Storage Service (OSS) bucket. SourceStorage for a data flow must be an OSS bucket.
     *          *   CPFS for LINGJUN data flows support both encrypted and unencrypted access to OSS. If you select SSL-encrypted access to OSS, make sure that encryption in transit for OSS buckets supports encrypted access.
     *          *   If data flows for multiple CPFS for LINGJUN file systems or multiple data flows for the same CPFS for LINGJUN file system are stored in the same OSS bucket, you must enable versioning for the OSS bucket to prevent data conflicts caused by data export from multiple CPFS for LINGJUN file systems to one OSS bucket.
     *          *   Data flows are not supported for OSS buckets across regions. The OSS bucket must reside in the same region as the CPFS file system.
     *          *   CPFS for LINGJUN V2.6.0 and later allow you to create data flows for OSS buckets across accounts.
     *          *   The account id parameter is required only when you use OSS buckets across accounts.
     *          *   To use OSS buckets across accounts, you must first grant permissions to the related accounts. For more information, see [Cross-account authorization on data flows](https://help.aliyun.com/document_detail/2713462.html).
     *          >  Before you create a data flow, you must configure a tag (key: cpfs-dataflow, value: true) for the source OSS bucket. This way, the created data flow can access the data in the OSS bucket. When a data flow is being used, do not delete or modify the tag. Otherwise, the data flow for CPFS for LINGJUN cannot access the data in the OSS bucket.
     *     *   Limits of data flows on file systems
     *         *   You cannot rename a non-empty directory in a path that is associated with a data flow. Otherwise, the Permission Denied error message or an error message indicating that the directory is not empty is returned.
     *         *   Proceed with caution when you use special characters in the names of directories and files. The following characters are supported: letters, digits, exclamation points (!), hyphens (-), underscores (_), periods (.), asterisks (\\*), and parentheses (()).
     *         *   The path can be up to 1,023 characters in length.
     *     *   Limits of data flows on import
     *         *   After a symbolic link is imported to CPFS for LINGJUN, the symbolic link is converted into a common data file that contains no symbolic link information.
     *         *   If an OSS bucket has multiple versions, only data of the latest version is used.
     *         *   The name of a file or a subdirectory can be up to 255 bytes in length.
     *     *   Limits of data flows on export
     *         *   After a symbolic link is synchronized to OSS, the file that the symbolic link points to is not synchronized to OSS. In this case, the symbolic link is converted into a common object that contains no data.
     *         *   Hard links can be synchronized to OSS only as common files that contain no link information.
     *         *   After a file of the Socket, Device, or Pipe type is exported to an OSS bucket, the file is converted into a common object that contains no data.
     *         *   The directory path can be up to 1,023 characters in length.
     *  *
     * @param CreateDataFlowRequest $request CreateDataFlowRequest
     *
     * @return CreateDataFlowResponse CreateDataFlowResponse
     */
    public function createDataFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDataFlowWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a data streaming subtask.
     *  *
     * @description *   Only Cloud Parallel File Storage (CPFS) for LINGJUN V2.6.0 and later support this operation. You can view the version information on the file system details page in the console.
     * *   You can create subtasks only for a data streaming subtask in the Executing state.
     * *   Data streaming tasks are executed asynchronously. You can call the DescribeDataFlowSubTasks operation to query the task execution status.
     * *   When the type of data flow task is streaming, the running status only indicates that a streaming import or export task can be created. It does not indicate that the import or export task is running.
     *  *
     * @param CreateDataFlowSubTaskRequest $request CreateDataFlowSubTaskRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDataFlowSubTaskResponse CreateDataFlowSubTaskResponse
     */
    public function createDataFlowSubTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->condition)) {
            $query['Condition'] = $request->condition;
        }
        if (!Utils::isUnset($request->dataFlowId)) {
            $query['DataFlowId'] = $request->dataFlowId;
        }
        if (!Utils::isUnset($request->dataFlowTaskId)) {
            $query['DataFlowTaskId'] = $request->dataFlowTaskId;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->dstFilePath)) {
            $query['DstFilePath'] = $request->dstFilePath;
        }
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->srcFilePath)) {
            $query['SrcFilePath'] = $request->srcFilePath;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDataFlowSubTask',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDataFlowSubTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a data streaming subtask.
     *  *
     * @description *   Only Cloud Parallel File Storage (CPFS) for LINGJUN V2.6.0 and later support this operation. You can view the version information on the file system details page in the console.
     * *   You can create subtasks only for a data streaming subtask in the Executing state.
     * *   Data streaming tasks are executed asynchronously. You can call the DescribeDataFlowSubTasks operation to query the task execution status.
     * *   When the type of data flow task is streaming, the running status only indicates that a streaming import or export task can be created. It does not indicate that the import or export task is running.
     *  *
     * @param CreateDataFlowSubTaskRequest $request CreateDataFlowSubTaskRequest
     *
     * @return CreateDataFlowSubTaskResponse CreateDataFlowSubTaskResponse
     */
    public function createDataFlowSubTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDataFlowSubTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a dataflow task.
     *  *
     * @description *   Only Cloud Parallel File Storage CPFS for LINGJUN V2.4.0 and later support data flows. You can view the version information on the file system details page in the console.
     * *   You can create a data flow task only for a data flow that is in the Running state.
     * *   Data flow tasks are executed asynchronously. You can call the [DescribeDataFlowTasks](https://help.aliyun.com/document_detail/2838089.html) operation to query the task execution status. The task duration depends on the amount of data to be imported and exported. If a large amount of data exists, we recommend that you create multiple tasks.
     * *   When you manually run a data flow task, the automatic data update task for the data flow is interrupted and enters the pending state.
     * *   When you create an export task, make sure that the total length of the absolute path of the files to be exported from a CPFS or CPFS for LINGJUN file system does not exceed 1,023 characters.
     * *   CPFS for LINGJUN supports two types of tasks: batch tasks and streaming tasks. For more information, see [Task types](https://help.aliyun.com/document_detail/2845429.html).
     *  *
     * @param CreateDataFlowTaskRequest $request CreateDataFlowTaskRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDataFlowTaskResponse CreateDataFlowTaskResponse
     */
    public function createDataFlowTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->conflictPolicy)) {
            $query['ConflictPolicy'] = $request->conflictPolicy;
        }
        if (!Utils::isUnset($request->createDirIfNotExist)) {
            $query['CreateDirIfNotExist'] = $request->createDirIfNotExist;
        }
        if (!Utils::isUnset($request->dataFlowId)) {
            $query['DataFlowId'] = $request->dataFlowId;
        }
        if (!Utils::isUnset($request->dataType)) {
            $query['DataType'] = $request->dataType;
        }
        if (!Utils::isUnset($request->directory)) {
            $query['Directory'] = $request->directory;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->dstDirectory)) {
            $query['DstDirectory'] = $request->dstDirectory;
        }
        if (!Utils::isUnset($request->entryList)) {
            $query['EntryList'] = $request->entryList;
        }
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->srcTaskId)) {
            $query['SrcTaskId'] = $request->srcTaskId;
        }
        if (!Utils::isUnset($request->taskAction)) {
            $query['TaskAction'] = $request->taskAction;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDataFlowTask',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDataFlowTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a dataflow task.
     *  *
     * @description *   Only Cloud Parallel File Storage CPFS for LINGJUN V2.4.0 and later support data flows. You can view the version information on the file system details page in the console.
     * *   You can create a data flow task only for a data flow that is in the Running state.
     * *   Data flow tasks are executed asynchronously. You can call the [DescribeDataFlowTasks](https://help.aliyun.com/document_detail/2838089.html) operation to query the task execution status. The task duration depends on the amount of data to be imported and exported. If a large amount of data exists, we recommend that you create multiple tasks.
     * *   When you manually run a data flow task, the automatic data update task for the data flow is interrupted and enters the pending state.
     * *   When you create an export task, make sure that the total length of the absolute path of the files to be exported from a CPFS or CPFS for LINGJUN file system does not exceed 1,023 characters.
     * *   CPFS for LINGJUN supports two types of tasks: batch tasks and streaming tasks. For more information, see [Task types](https://help.aliyun.com/document_detail/2845429.html).
     *  *
     * @param CreateDataFlowTaskRequest $request CreateDataFlowTaskRequest
     *
     * @return CreateDataFlowTaskResponse CreateDataFlowTaskResponse
     */
    public function createDataFlowTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDataFlowTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a directory in a file system.
     *  *
     * @description Only General-purpose Network File System (NFS) file systems support this operation.
     *  *
     * @param CreateDirRequest $request CreateDirRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDirResponse CreateDirResponse
     */
    public function createDirWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->ownerGroupId)) {
            $query['OwnerGroupId'] = $request->ownerGroupId;
        }
        if (!Utils::isUnset($request->ownerUserId)) {
            $query['OwnerUserId'] = $request->ownerUserId;
        }
        if (!Utils::isUnset($request->permission)) {
            $query['Permission'] = $request->permission;
        }
        if (!Utils::isUnset($request->recursion)) {
            $query['Recursion'] = $request->recursion;
        }
        if (!Utils::isUnset($request->rootDirectory)) {
            $query['RootDirectory'] = $request->rootDirectory;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDir',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDirResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a directory in a file system.
     *  *
     * @description Only General-purpose Network File System (NFS) file systems support this operation.
     *  *
     * @param CreateDirRequest $request CreateDirRequest
     *
     * @return CreateDirResponse CreateDirResponse
     */
    public function createDir($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDirWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a directory or file.
     *  *
     * @description *   This operation is only available to some users.
     * *   This operation supports only General-purpose NAS file systems that use the Server Message Block (SMB) protocol and have Resource Access Management (RAM) enabled.
     *  *
     * @param CreateFileRequest $request CreateFileRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateFileResponse CreateFileResponse
     */
    public function createFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->owner)) {
            $query['Owner'] = $request->owner;
        }
        if (!Utils::isUnset($request->ownerAccessInheritable)) {
            $query['OwnerAccessInheritable'] = $request->ownerAccessInheritable;
        }
        if (!Utils::isUnset($request->path)) {
            $query['Path'] = $request->path;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateFile',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a directory or file.
     *  *
     * @description *   This operation is only available to some users.
     * *   This operation supports only General-purpose NAS file systems that use the Server Message Block (SMB) protocol and have Resource Access Management (RAM) enabled.
     *  *
     * @param CreateFileRequest $request CreateFileRequest
     *
     * @return CreateFileResponse CreateFileResponse
     */
    public function createFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFileWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a file system.
     *  *
     * @description *   Before you call this operation, you must understand the billing and pricing of File Storage NAS. For more information, see [Billing](https://help.aliyun.com/document_detail/178365.html) and [Pricing](https://www.alibabacloud.com/product/nas/pricing).
     * *   Before you create a file system, you must complete real-name verification.
     * *   When you call this operation, a service-linked role of NAS is automatically created. For more information, see [Manage the service-linked roles of NAS](https://help.aliyun.com/document_detail/208530.html).
     *  *
     * @param CreateFileSystemRequest $request CreateFileSystemRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateFileSystemResponse CreateFileSystemResponse
     */
    public function createFileSystemWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bandwidth)) {
            $query['Bandwidth'] = $request->bandwidth;
        }
        if (!Utils::isUnset($request->capacity)) {
            $query['Capacity'] = $request->capacity;
        }
        if (!Utils::isUnset($request->chargeType)) {
            $query['ChargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->duration)) {
            $query['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->encryptType)) {
            $query['EncryptType'] = $request->encryptType;
        }
        if (!Utils::isUnset($request->fileSystemType)) {
            $query['FileSystemType'] = $request->fileSystemType;
        }
        if (!Utils::isUnset($request->kmsKeyId)) {
            $query['KmsKeyId'] = $request->kmsKeyId;
        }
        if (!Utils::isUnset($request->protocolType)) {
            $query['ProtocolType'] = $request->protocolType;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->snapshotId)) {
            $query['SnapshotId'] = $request->snapshotId;
        }
        if (!Utils::isUnset($request->storageType)) {
            $query['StorageType'] = $request->storageType;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
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
            'action'      => 'CreateFileSystem',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateFileSystemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a file system.
     *  *
     * @description *   Before you call this operation, you must understand the billing and pricing of File Storage NAS. For more information, see [Billing](https://help.aliyun.com/document_detail/178365.html) and [Pricing](https://www.alibabacloud.com/product/nas/pricing).
     * *   Before you create a file system, you must complete real-name verification.
     * *   When you call this operation, a service-linked role of NAS is automatically created. For more information, see [Manage the service-linked roles of NAS](https://help.aliyun.com/document_detail/208530.html).
     *  *
     * @param CreateFileSystemRequest $request CreateFileSystemRequest
     *
     * @return CreateFileSystemResponse CreateFileSystemResponse
     */
    public function createFileSystem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFileSystemWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a fileset.
     *  *
     * @description *   Only Cloud Parallel File Storage (CPFS) for LINGJUN V2.7.0 and later support this operation. You can view the version information on the file system details page in the console.
     * *   A maximum of 500 filesets can be created for a CPFS file system.
     * *   The fileset path must be a new path and cannot be an existing path. Fileset paths cannot be renamed and cannot be symbolic links.
     * *   The maximum depth supported by a fileset path is eight levels. The depth of the root directory / is 0 levels. For example, the fileset path /test/aaa/ccc/ has three levels.
     * *   If the fileset path is a multi-level path, the parent directory must be an existing directory.
     * *   Nested filesets are not supported. If a fileset is specified as a parent directory, its subdirectory cannot be a fileset. A fileset path supports only one quota.
     * *   The minimum capacity quota of a fileset is 10 GiB. The scaling step size is 1 GiB. The maximum capacity quota is 1,000 TiB. The capacity quota cannot exceed the total capacity of the file system.
     * *   A fileset supports a minimum of 10,000 files or directories and a maximum of 10 billion files or directories. The scaling step size is 1.
     * *   When you modify a directory quota, you must set the quota capacity or the number of files to be greater than the capacity or file quantity that has been used.
     * *   The quota statistics have a 5-minute latency. The actual usage takes effect after 5 minutes.
     *  *
     * @param CreateFilesetRequest $request CreateFilesetRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateFilesetResponse CreateFilesetResponse
     */
    public function createFilesetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->deletionProtection)) {
            $query['DeletionProtection'] = $request->deletionProtection;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->fileSystemPath)) {
            $query['FileSystemPath'] = $request->fileSystemPath;
        }
        if (!Utils::isUnset($request->quota)) {
            $query['Quota'] = $request->quota;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateFileset',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateFilesetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a fileset.
     *  *
     * @description *   Only Cloud Parallel File Storage (CPFS) for LINGJUN V2.7.0 and later support this operation. You can view the version information on the file system details page in the console.
     * *   A maximum of 500 filesets can be created for a CPFS file system.
     * *   The fileset path must be a new path and cannot be an existing path. Fileset paths cannot be renamed and cannot be symbolic links.
     * *   The maximum depth supported by a fileset path is eight levels. The depth of the root directory / is 0 levels. For example, the fileset path /test/aaa/ccc/ has three levels.
     * *   If the fileset path is a multi-level path, the parent directory must be an existing directory.
     * *   Nested filesets are not supported. If a fileset is specified as a parent directory, its subdirectory cannot be a fileset. A fileset path supports only one quota.
     * *   The minimum capacity quota of a fileset is 10 GiB. The scaling step size is 1 GiB. The maximum capacity quota is 1,000 TiB. The capacity quota cannot exceed the total capacity of the file system.
     * *   A fileset supports a minimum of 10,000 files or directories and a maximum of 10 billion files or directories. The scaling step size is 1.
     * *   When you modify a directory quota, you must set the quota capacity or the number of files to be greater than the capacity or file quantity that has been used.
     * *   The quota statistics have a 5-minute latency. The actual usage takes effect after 5 minutes.
     *  *
     * @param CreateFilesetRequest $request CreateFilesetRequest
     *
     * @return CreateFilesetResponse CreateFilesetResponse
     */
    public function createFileset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFilesetWithOptions($request, $runtime);
    }

    /**
     * @deprecated OpenAPI CreateLDAPConfig is deprecated
     *  *
     * @summary Creates LDAP configurations.
     *  *
     * Deprecated
     *
     * @param CreateLDAPConfigRequest $request CreateLDAPConfigRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateLDAPConfigResponse CreateLDAPConfigResponse
     */
    public function createLDAPConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bindDN)) {
            $query['BindDN'] = $request->bindDN;
        }
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->searchBase)) {
            $query['SearchBase'] = $request->searchBase;
        }
        if (!Utils::isUnset($request->URI)) {
            $query['URI'] = $request->URI;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateLDAPConfig',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateLDAPConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated OpenAPI CreateLDAPConfig is deprecated
     *  *
     * @summary Creates LDAP configurations.
     *  *
     * Deprecated
     *
     * @param CreateLDAPConfigRequest $request CreateLDAPConfigRequest
     *
     * @return CreateLDAPConfigResponse CreateLDAPConfigResponse
     */
    public function createLDAPConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLDAPConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a lifecycle policy.
     *  *
     * @description *   You can create lifecycle policies only for General-purpose NAS file systems.
     * *   You can create up to 20 lifecycle policies in each region within an Alibaba Cloud account.
     *  *
     * @param CreateLifecyclePolicyRequest $request CreateLifecyclePolicyRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateLifecyclePolicyResponse CreateLifecyclePolicyResponse
     */
    public function createLifecyclePolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->lifecyclePolicyName)) {
            $query['LifecyclePolicyName'] = $request->lifecyclePolicyName;
        }
        if (!Utils::isUnset($request->lifecycleRuleName)) {
            $query['LifecycleRuleName'] = $request->lifecycleRuleName;
        }
        if (!Utils::isUnset($request->path)) {
            $query['Path'] = $request->path;
        }
        if (!Utils::isUnset($request->paths)) {
            $query['Paths'] = $request->paths;
        }
        if (!Utils::isUnset($request->storageType)) {
            $query['StorageType'] = $request->storageType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateLifecyclePolicy',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateLifecyclePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a lifecycle policy.
     *  *
     * @description *   You can create lifecycle policies only for General-purpose NAS file systems.
     * *   You can create up to 20 lifecycle policies in each region within an Alibaba Cloud account.
     *  *
     * @param CreateLifecyclePolicyRequest $request CreateLifecyclePolicyRequest
     *
     * @return CreateLifecyclePolicyResponse CreateLifecyclePolicyResponse
     */
    public function createLifecyclePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLifecyclePolicyWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a data retrieval task.
     *  *
     * @description *   Only General-purpose NAS file systems support this operation.
     * *   You can run a maximum of 20 data retrieval tasks in each region within an Alibaba Cloud account.
     *  *
     * @param CreateLifecycleRetrieveJobRequest $request CreateLifecycleRetrieveJobRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateLifecycleRetrieveJobResponse CreateLifecycleRetrieveJobResponse
     */
    public function createLifecycleRetrieveJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->paths)) {
            $query['Paths'] = $request->paths;
        }
        if (!Utils::isUnset($request->storageType)) {
            $query['StorageType'] = $request->storageType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateLifecycleRetrieveJob',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateLifecycleRetrieveJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a data retrieval task.
     *  *
     * @description *   Only General-purpose NAS file systems support this operation.
     * *   You can run a maximum of 20 data retrieval tasks in each region within an Alibaba Cloud account.
     *  *
     * @param CreateLifecycleRetrieveJobRequest $request CreateLifecycleRetrieveJobRequest
     *
     * @return CreateLifecycleRetrieveJobResponse CreateLifecycleRetrieveJobResponse
     */
    public function createLifecycleRetrieveJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLifecycleRetrieveJobWithOptions($request, $runtime);
    }

    /**
     * @summary Dumps the logs of a General-purpose NAS file system to Simple Log Service.
     *  *
     * @param CreateLogAnalysisRequest $request CreateLogAnalysisRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateLogAnalysisResponse CreateLogAnalysisResponse
     */
    public function createLogAnalysisWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateLogAnalysis',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateLogAnalysisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Dumps the logs of a General-purpose NAS file system to Simple Log Service.
     *  *
     * @param CreateLogAnalysisRequest $request CreateLogAnalysisRequest
     *
     * @return CreateLogAnalysisResponse CreateLogAnalysisResponse
     */
    public function createLogAnalysis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLogAnalysisWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a mount target.
     *  *
     * @description *   After you call the CreateMountTarget operation, a mount target is not immediately created. Therefore, we recommend that you call the DescribeMountTargets operation to query the status of the mount target. If the mount target is in the **Active** state, you can then mount the file system. Otherwise, the file system may fail to be mounted.
     * *   When you call this operation, a service-linked role of NAS is automatically created. For more information, see [Manage the service-linked roles of NAS](https://help.aliyun.com/document_detail/208530.html).
     *  *
     * @param CreateMountTargetRequest $request CreateMountTargetRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateMountTargetResponse CreateMountTargetResponse
     */
    public function createMountTargetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessGroupName)) {
            $query['AccessGroupName'] = $request->accessGroupName;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->enableIpv6)) {
            $query['EnableIpv6'] = $request->enableIpv6;
        }
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->networkType)) {
            $query['NetworkType'] = $request->networkType;
        }
        if (!Utils::isUnset($request->securityGroupId)) {
            $query['SecurityGroupId'] = $request->securityGroupId;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateMountTarget',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateMountTargetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a mount target.
     *  *
     * @description *   After you call the CreateMountTarget operation, a mount target is not immediately created. Therefore, we recommend that you call the DescribeMountTargets operation to query the status of the mount target. If the mount target is in the **Active** state, you can then mount the file system. Otherwise, the file system may fail to be mounted.
     * *   When you call this operation, a service-linked role of NAS is automatically created. For more information, see [Manage the service-linked roles of NAS](https://help.aliyun.com/document_detail/208530.html).
     *  *
     * @param CreateMountTargetRequest $request CreateMountTargetRequest
     *
     * @return CreateMountTargetResponse CreateMountTargetResponse
     */
    public function createMountTarget($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMountTargetWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an export directory for a protocol service.
     *  *
     * @description *   This operation is available only to Cloud Parallel File Storage (CPFS) file systems on the China site (aliyun.com).
     * *   Prerequisites
     *     A protocol service is created.
     * *   Others
     *     *   The virtual private cloud (VPC) CIDR block of the export directory for the protocol service cannot overlap with the VPC CIDR block of the file system.
     *     *   The VPC CIDR blocks of multiple export directories of a protocol service cannot overlap.
     *     *   You can create a maximum of 10 export directories for a protocol service.
     *     *   When you create export directories for a protocol service, a maximum of 32 IP addresses that are allocated by the specified vSwitch are used. Make sure that the vSwitch can provide sufficient IP addresses.
     *  *
     * @param CreateProtocolMountTargetRequest $request CreateProtocolMountTargetRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateProtocolMountTargetResponse CreateProtocolMountTargetResponse
     */
    public function createProtocolMountTargetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessGroupName)) {
            $query['AccessGroupName'] = $request->accessGroupName;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->fsetId)) {
            $query['FsetId'] = $request->fsetId;
        }
        if (!Utils::isUnset($request->path)) {
            $query['Path'] = $request->path;
        }
        if (!Utils::isUnset($request->protocolServiceId)) {
            $query['ProtocolServiceId'] = $request->protocolServiceId;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateProtocolMountTarget',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateProtocolMountTargetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates an export directory for a protocol service.
     *  *
     * @description *   This operation is available only to Cloud Parallel File Storage (CPFS) file systems on the China site (aliyun.com).
     * *   Prerequisites
     *     A protocol service is created.
     * *   Others
     *     *   The virtual private cloud (VPC) CIDR block of the export directory for the protocol service cannot overlap with the VPC CIDR block of the file system.
     *     *   The VPC CIDR blocks of multiple export directories of a protocol service cannot overlap.
     *     *   You can create a maximum of 10 export directories for a protocol service.
     *     *   When you create export directories for a protocol service, a maximum of 32 IP addresses that are allocated by the specified vSwitch are used. Make sure that the vSwitch can provide sufficient IP addresses.
     *  *
     * @param CreateProtocolMountTargetRequest $request CreateProtocolMountTargetRequest
     *
     * @return CreateProtocolMountTargetResponse CreateProtocolMountTargetResponse
     */
    public function createProtocolMountTarget($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createProtocolMountTargetWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a protocol service for a Cloud Parallel File Storage (CPFS) file system. The creation takes about 5 to 10 minutes.
     *  *
     * @description *   This operation is available only to CPFS file systems on the China site (aliyun.com).
     * *   Only CPFS V2.3.0 and later support protocol services. You can query the version information of the file system by calling the [DescribeFileSystems](~~2402188.~~) operation.
     * *   Protocol service types
     *     Protocol services are classified into general-purpose protocol services and cache protocol services. Different from general-purpose protocol services, cache protocol services can cache hot data. If data exists in the cache, the bandwidth of the cache protocol service may exceed the bandwidth of the CPFS file system, reaching the maximum bandwidth specified for the protocol service.
     *     *   General-purpose protocol services: provide NFS access and [directory-level mount targets](https://help.aliyun.com/document_detail/427175.html) for CPFS file systems. You do not need to configure a POSIX client to manage clusters. General-purpose protocol services are provided free of charge.
     *     *   Cache protocol services: provide the server memory cache based on the least recently used (LRU) policy. When data is cached in the memory, CPFS provides higher internal bandwidth. Cache protocol services are divided into Cache L1 and Cache L2 specifications. The differences are the internal bandwidth size and memory cache size.
     *        >   Note You are charged for using cache protocol services, which are in invitational preview. For more information about the billing method of cache protocol services, see [Billable items](https://help.aliyun.com/document_detail/111858.html). If you have any feedback or questions, you can join the DingTalk group (group number: 31045006299).
     * *   Protocol type
     *     Only NFSv3 is supported.
     * *   Others
     *     *   Only one protocol service can be created for a CPFS file system.
     *     *   A protocol service can use a maximum of 32 IP addresses that are allocated by a specified vSwitch. Make sure that the vSwitch can provide sufficient IP addresses.
     *  *
     * @param CreateProtocolServiceRequest $request CreateProtocolServiceRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateProtocolServiceResponse CreateProtocolServiceResponse
     */
    public function createProtocolServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->protocolSpec)) {
            $query['ProtocolSpec'] = $request->protocolSpec;
        }
        if (!Utils::isUnset($request->protocolType)) {
            $query['ProtocolType'] = $request->protocolType;
        }
        if (!Utils::isUnset($request->throughput)) {
            $query['Throughput'] = $request->throughput;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateProtocolService',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateProtocolServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a protocol service for a Cloud Parallel File Storage (CPFS) file system. The creation takes about 5 to 10 minutes.
     *  *
     * @description *   This operation is available only to CPFS file systems on the China site (aliyun.com).
     * *   Only CPFS V2.3.0 and later support protocol services. You can query the version information of the file system by calling the [DescribeFileSystems](~~2402188.~~) operation.
     * *   Protocol service types
     *     Protocol services are classified into general-purpose protocol services and cache protocol services. Different from general-purpose protocol services, cache protocol services can cache hot data. If data exists in the cache, the bandwidth of the cache protocol service may exceed the bandwidth of the CPFS file system, reaching the maximum bandwidth specified for the protocol service.
     *     *   General-purpose protocol services: provide NFS access and [directory-level mount targets](https://help.aliyun.com/document_detail/427175.html) for CPFS file systems. You do not need to configure a POSIX client to manage clusters. General-purpose protocol services are provided free of charge.
     *     *   Cache protocol services: provide the server memory cache based on the least recently used (LRU) policy. When data is cached in the memory, CPFS provides higher internal bandwidth. Cache protocol services are divided into Cache L1 and Cache L2 specifications. The differences are the internal bandwidth size and memory cache size.
     *        >   Note You are charged for using cache protocol services, which are in invitational preview. For more information about the billing method of cache protocol services, see [Billable items](https://help.aliyun.com/document_detail/111858.html). If you have any feedback or questions, you can join the DingTalk group (group number: 31045006299).
     * *   Protocol type
     *     Only NFSv3 is supported.
     * *   Others
     *     *   Only one protocol service can be created for a CPFS file system.
     *     *   A protocol service can use a maximum of 32 IP addresses that are allocated by a specified vSwitch. Make sure that the vSwitch can provide sufficient IP addresses.
     *  *
     * @param CreateProtocolServiceRequest $request CreateProtocolServiceRequest
     *
     * @return CreateProtocolServiceResponse CreateProtocolServiceResponse
     */
    public function createProtocolService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createProtocolServiceWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a job to permanently delete a file or directory from the recycle bin.
     *  *
     * @description *   Only General-purpose NAS file systems support this operation.
     * *   If you permanently delete a directory, the files in the directory are recursively cleared.
     * *   You can run only one job at a time for a single file system to permanently delete the files from the file system. You cannot create a restoration or deletion job when a file or directory is being deleted.
     *  *
     * @param CreateRecycleBinDeleteJobRequest $request CreateRecycleBinDeleteJobRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateRecycleBinDeleteJobResponse CreateRecycleBinDeleteJobResponse
     */
    public function createRecycleBinDeleteJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateRecycleBinDeleteJob',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateRecycleBinDeleteJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a job to permanently delete a file or directory from the recycle bin.
     *  *
     * @description *   Only General-purpose NAS file systems support this operation.
     * *   If you permanently delete a directory, the files in the directory are recursively cleared.
     * *   You can run only one job at a time for a single file system to permanently delete the files from the file system. You cannot create a restoration or deletion job when a file or directory is being deleted.
     *  *
     * @param CreateRecycleBinDeleteJobRequest $request CreateRecycleBinDeleteJobRequest
     *
     * @return CreateRecycleBinDeleteJobResponse CreateRecycleBinDeleteJobResponse
     */
    public function createRecycleBinDeleteJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRecycleBinDeleteJobWithOptions($request, $runtime);
    }

    /**
     * @summary Restores a file or directory from the recycle bin.
     *  *
     * @description ### Usage notes
     * *   Only General-purpose NAS file systems support this operation.
     * *   You can run only one job at a time for a single file system to restore files to or clear files from the file system. You cannot create a restore or cleanup job when files are being restored from the recycle bin.
     * *   You can restore only one file or directory in a single restore job. If you restore a specified directory, all files in the directory are recursively restored.
     * *   After files are restored, the data of the files is defragmented. When the data is being defragmented, the read performance is slightly degraded.
     *  *
     * @param CreateRecycleBinRestoreJobRequest $request CreateRecycleBinRestoreJobRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateRecycleBinRestoreJobResponse CreateRecycleBinRestoreJobResponse
     */
    public function createRecycleBinRestoreJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateRecycleBinRestoreJob',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateRecycleBinRestoreJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Restores a file or directory from the recycle bin.
     *  *
     * @description ### Usage notes
     * *   Only General-purpose NAS file systems support this operation.
     * *   You can run only one job at a time for a single file system to restore files to or clear files from the file system. You cannot create a restore or cleanup job when files are being restored from the recycle bin.
     * *   You can restore only one file or directory in a single restore job. If you restore a specified directory, all files in the directory are recursively restored.
     * *   After files are restored, the data of the files is defragmented. When the data is being defragmented, the read performance is slightly degraded.
     *  *
     * @param CreateRecycleBinRestoreJobRequest $request CreateRecycleBinRestoreJobRequest
     *
     * @return CreateRecycleBinRestoreJobResponse CreateRecycleBinRestoreJobResponse
     */
    public function createRecycleBinRestoreJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRecycleBinRestoreJobWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a snapshot.
     *  *
     * @description *   The snapshot feature is in public preview and is provided free of charge. [File Storage NAS Service Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed in public preview.
     * *   Only advanced Extreme NAS file systems support the snapshot feature.
     * *   You can create a maximum of 128 snapshots for a file system.
     * *   The compute node on which a file system is mounted must function as expected. Otherwise, you cannot create a snapshot for the file system.
     * *   You can create only one snapshot for a file system at a time.
     * *   If the file system expires when a snapshot is being created, the file system is released and the snapshot is deleted.
     * *   When you create a snapshot for a file system, the I/O performance of the file system may be degraded for a short period of time. We recommend that you create snapshots during off-peak hours.
     * *   A snapshot is a backup of a file system at a specific point in time. After you create a snapshot, incremental data that is generated in the file system will not be synchronized to the snapshot.
     * *   Manually created snapshots will not be deleted until 15 days after the service is suspended due to overdue payments. We recommend that you delete unnecessary snapshots at regular intervals to prevent extra fees incurred by the snapshots.
     *  *
     * @param CreateSnapshotRequest $request CreateSnapshotRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateSnapshotResponse CreateSnapshotResponse
     */
    public function createSnapshotWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->retentionDays)) {
            $query['RetentionDays'] = $request->retentionDays;
        }
        if (!Utils::isUnset($request->snapshotName)) {
            $query['SnapshotName'] = $request->snapshotName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSnapshot',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSnapshotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a snapshot.
     *  *
     * @description *   The snapshot feature is in public preview and is provided free of charge. [File Storage NAS Service Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed in public preview.
     * *   Only advanced Extreme NAS file systems support the snapshot feature.
     * *   You can create a maximum of 128 snapshots for a file system.
     * *   The compute node on which a file system is mounted must function as expected. Otherwise, you cannot create a snapshot for the file system.
     * *   You can create only one snapshot for a file system at a time.
     * *   If the file system expires when a snapshot is being created, the file system is released and the snapshot is deleted.
     * *   When you create a snapshot for a file system, the I/O performance of the file system may be degraded for a short period of time. We recommend that you create snapshots during off-peak hours.
     * *   A snapshot is a backup of a file system at a specific point in time. After you create a snapshot, incremental data that is generated in the file system will not be synchronized to the snapshot.
     * *   Manually created snapshots will not be deleted until 15 days after the service is suspended due to overdue payments. We recommend that you delete unnecessary snapshots at regular intervals to prevent extra fees incurred by the snapshots.
     *  *
     * @param CreateSnapshotRequest $request CreateSnapshotRequest
     *
     * @return CreateSnapshotResponse CreateSnapshotResponse
     */
    public function createSnapshot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSnapshotWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a permission group.
     *  *
     * @description The default permission group (DEFAULT_VPC_GROUP_NAME) cannot be deleted.
     *  *
     * @param DeleteAccessGroupRequest $request DeleteAccessGroupRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAccessGroupResponse DeleteAccessGroupResponse
     */
    public function deleteAccessGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessGroupName)) {
            $query['AccessGroupName'] = $request->accessGroupName;
        }
        if (!Utils::isUnset($request->fileSystemType)) {
            $query['FileSystemType'] = $request->fileSystemType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAccessGroup',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAccessGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a permission group.
     *  *
     * @description The default permission group (DEFAULT_VPC_GROUP_NAME) cannot be deleted.
     *  *
     * @param DeleteAccessGroupRequest $request DeleteAccessGroupRequest
     *
     * @return DeleteAccessGroupResponse DeleteAccessGroupResponse
     */
    public function deleteAccessGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAccessGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes an access point.
     *  *
     * @description *   Only General-purpose Network File System (NFS) file systems support access points.
     * *   After an access point is deleted, all I/O operations that are being performed on the directory accessed over the access point are interrupted immediately. Exercise caution when you perform this operation.
     *  *
     * @param DeleteAccessPointRequest $request DeleteAccessPointRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAccessPointResponse DeleteAccessPointResponse
     */
    public function deleteAccessPointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessPointId)) {
            $query['AccessPointId'] = $request->accessPointId;
        }
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAccessPoint',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAccessPointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes an access point.
     *  *
     * @description *   Only General-purpose Network File System (NFS) file systems support access points.
     * *   After an access point is deleted, all I/O operations that are being performed on the directory accessed over the access point are interrupted immediately. Exercise caution when you perform this operation.
     *  *
     * @param DeleteAccessPointRequest $request DeleteAccessPointRequest
     *
     * @return DeleteAccessPointResponse DeleteAccessPointResponse
     */
    public function deleteAccessPoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAccessPointWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a rule from a permission group.
     *  *
     * @description Rules in the default permission group (DEFAULT_VPC_GROUP_NAME) cannot be deleted.
     *  *
     * @param DeleteAccessRuleRequest $request DeleteAccessRuleRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAccessRuleResponse DeleteAccessRuleResponse
     */
    public function deleteAccessRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessGroupName)) {
            $query['AccessGroupName'] = $request->accessGroupName;
        }
        if (!Utils::isUnset($request->accessRuleId)) {
            $query['AccessRuleId'] = $request->accessRuleId;
        }
        if (!Utils::isUnset($request->fileSystemType)) {
            $query['FileSystemType'] = $request->fileSystemType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAccessRule',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAccessRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a rule from a permission group.
     *  *
     * @description Rules in the default permission group (DEFAULT_VPC_GROUP_NAME) cannot be deleted.
     *  *
     * @param DeleteAccessRuleRequest $request DeleteAccessRuleRequest
     *
     * @return DeleteAccessRuleResponse DeleteAccessRuleResponse
     */
    public function deleteAccessRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAccessRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes an automatic snapshot policy.
     *  *
     * @description *   The snapshot feature is in public preview and is provided free of charge. [File Storage NAS Service Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed in public preview.
     * *   Only advanced Extreme NAS file systems support the snapshot feature.
     * *   If you delete an automatic snapshot policy that is applied to a file system, snapshots for the file system are no longer created based on the policy.
     *  *
     * @param DeleteAutoSnapshotPolicyRequest $request DeleteAutoSnapshotPolicyRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAutoSnapshotPolicyResponse DeleteAutoSnapshotPolicyResponse
     */
    public function deleteAutoSnapshotPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoSnapshotPolicyId)) {
            $query['AutoSnapshotPolicyId'] = $request->autoSnapshotPolicyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAutoSnapshotPolicy',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAutoSnapshotPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes an automatic snapshot policy.
     *  *
     * @description *   The snapshot feature is in public preview and is provided free of charge. [File Storage NAS Service Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed in public preview.
     * *   Only advanced Extreme NAS file systems support the snapshot feature.
     * *   If you delete an automatic snapshot policy that is applied to a file system, snapshots for the file system are no longer created based on the policy.
     *  *
     * @param DeleteAutoSnapshotPolicyRequest $request DeleteAutoSnapshotPolicyRequest
     *
     * @return DeleteAutoSnapshotPolicyResponse DeleteAutoSnapshotPolicyResponse
     */
    public function deleteAutoSnapshotPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAutoSnapshotPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a dataflow.
     *  *
     * @description *   Only Cloud Parallel File Storage (CPFS) for LINGJUN V2.4.0 and later support data flows. You can view the version information on the file system details page in the console.
     * *   You can delete the data flows that are only in the `Running` or `Stopped` state.
     * *   After a data flow is deleted, the resources related to the data flow are released and cannot be restored. You must create a data flow again if required.
     *  *
     * @param DeleteDataFlowRequest $request DeleteDataFlowRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDataFlowResponse DeleteDataFlowResponse
     */
    public function deleteDataFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dataFlowId)) {
            $query['DataFlowId'] = $request->dataFlowId;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDataFlow',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDataFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a dataflow.
     *  *
     * @description *   Only Cloud Parallel File Storage (CPFS) for LINGJUN V2.4.0 and later support data flows. You can view the version information on the file system details page in the console.
     * *   You can delete the data flows that are only in the `Running` or `Stopped` state.
     * *   After a data flow is deleted, the resources related to the data flow are released and cannot be restored. You must create a data flow again if required.
     *  *
     * @param DeleteDataFlowRequest $request DeleteDataFlowRequest
     *
     * @return DeleteDataFlowResponse DeleteDataFlowResponse
     */
    public function deleteDataFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDataFlowWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a file system.
     *  *
     * @description *   Before you delete a file system, you must delete all mount targets of the file system.
     * *   Before you delete a file system, you must make sure that no lifecycle policy is created for the file system.
     * *   After a file system is deleted, the data on the file system cannot be restored. Proceed with caution.
     *  *
     * @param DeleteFileSystemRequest $request DeleteFileSystemRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteFileSystemResponse DeleteFileSystemResponse
     */
    public function deleteFileSystemWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteFileSystem',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteFileSystemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a file system.
     *  *
     * @description *   Before you delete a file system, you must delete all mount targets of the file system.
     * *   Before you delete a file system, you must make sure that no lifecycle policy is created for the file system.
     * *   After a file system is deleted, the data on the file system cannot be restored. Proceed with caution.
     *  *
     * @param DeleteFileSystemRequest $request DeleteFileSystemRequest
     *
     * @return DeleteFileSystemResponse DeleteFileSystemResponse
     */
    public function deleteFileSystem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFileSystemWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a fileset.
     *  *
     * @description *   Only Cloud Parallel File Storage (CPFS) for LINGJUN V2.7.0 and later support this operation. After you delete a fileset, all data in the fileset is deleted and cannot be restored. Proceed with caution.
     * *   If deletion protection is enabled for the fileset, you must disable deletion protection before you delete the fileset.
     *  *
     * @param DeleteFilesetRequest $request DeleteFilesetRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteFilesetResponse DeleteFilesetResponse
     */
    public function deleteFilesetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->fsetId)) {
            $query['FsetId'] = $request->fsetId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteFileset',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteFilesetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a fileset.
     *  *
     * @description *   Only Cloud Parallel File Storage (CPFS) for LINGJUN V2.7.0 and later support this operation. After you delete a fileset, all data in the fileset is deleted and cannot be restored. Proceed with caution.
     * *   If deletion protection is enabled for the fileset, you must disable deletion protection before you delete the fileset.
     *  *
     * @param DeleteFilesetRequest $request DeleteFilesetRequest
     *
     * @return DeleteFilesetResponse DeleteFilesetResponse
     */
    public function deleteFileset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFilesetWithOptions($request, $runtime);
    }

    /**
     * @deprecated OpenAPI DeleteLDAPConfig is deprecated
     *  *
     * @summary 删除LDAP配置
     *  *
     * Deprecated
     *
     * @param DeleteLDAPConfigRequest $request DeleteLDAPConfigRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteLDAPConfigResponse DeleteLDAPConfigResponse
     */
    public function deleteLDAPConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteLDAPConfig',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteLDAPConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated OpenAPI DeleteLDAPConfig is deprecated
     *  *
     * @summary 删除LDAP配置
     *  *
     * Deprecated
     *
     * @param DeleteLDAPConfigRequest $request DeleteLDAPConfigRequest
     *
     * @return DeleteLDAPConfigResponse DeleteLDAPConfigResponse
     */
    public function deleteLDAPConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLDAPConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a lifecycle policy.
     *  *
     * @description Only General-purpose NAS file systems support this operation.
     *  *
     * @param DeleteLifecyclePolicyRequest $request DeleteLifecyclePolicyRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteLifecyclePolicyResponse DeleteLifecyclePolicyResponse
     */
    public function deleteLifecyclePolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->lifecyclePolicyName)) {
            $query['LifecyclePolicyName'] = $request->lifecyclePolicyName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteLifecyclePolicy',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteLifecyclePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a lifecycle policy.
     *  *
     * @description Only General-purpose NAS file systems support this operation.
     *  *
     * @param DeleteLifecyclePolicyRequest $request DeleteLifecyclePolicyRequest
     *
     * @return DeleteLifecyclePolicyResponse DeleteLifecyclePolicyResponse
     */
    public function deleteLifecyclePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLifecyclePolicyWithOptions($request, $runtime);
    }

    /**
     * @summary Disables log dumping for a General-purpose NAS file system.
     *  *
     * @param DeleteLogAnalysisRequest $request DeleteLogAnalysisRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteLogAnalysisResponse DeleteLogAnalysisResponse
     */
    public function deleteLogAnalysisWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteLogAnalysis',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteLogAnalysisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Disables log dumping for a General-purpose NAS file system.
     *  *
     * @param DeleteLogAnalysisRequest $request DeleteLogAnalysisRequest
     *
     * @return DeleteLogAnalysisResponse DeleteLogAnalysisResponse
     */
    public function deleteLogAnalysis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLogAnalysisWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a mount target.
     *  *
     * @description After you delete a mount target, the mount target cannot be restored. Proceed with caution.
     *  *
     * @param DeleteMountTargetRequest $request DeleteMountTargetRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteMountTargetResponse DeleteMountTargetResponse
     */
    public function deleteMountTargetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->mountTargetDomain)) {
            $query['MountTargetDomain'] = $request->mountTargetDomain;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteMountTarget',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteMountTargetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a mount target.
     *  *
     * @description After you delete a mount target, the mount target cannot be restored. Proceed with caution.
     *  *
     * @param DeleteMountTargetRequest $request DeleteMountTargetRequest
     *
     * @return DeleteMountTargetResponse DeleteMountTargetResponse
     */
    public function deleteMountTarget($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMountTargetWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes an export directory of a protocol service.
     *  *
     * @description This operation is available only to Cloud Parallel File Storage (CPFS) file systems on the China site (aliyun.com).
     *  *
     * @param DeleteProtocolMountTargetRequest $request DeleteProtocolMountTargetRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteProtocolMountTargetResponse DeleteProtocolMountTargetResponse
     */
    public function deleteProtocolMountTargetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->exportId)) {
            $query['ExportId'] = $request->exportId;
        }
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->protocolServiceId)) {
            $query['ProtocolServiceId'] = $request->protocolServiceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteProtocolMountTarget',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteProtocolMountTargetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes an export directory of a protocol service.
     *  *
     * @description This operation is available only to Cloud Parallel File Storage (CPFS) file systems on the China site (aliyun.com).
     *  *
     * @param DeleteProtocolMountTargetRequest $request DeleteProtocolMountTargetRequest
     *
     * @return DeleteProtocolMountTargetResponse DeleteProtocolMountTargetResponse
     */
    public function deleteProtocolMountTarget($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteProtocolMountTargetWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a protocol service of a Cloud Parallel File Storage (CPFS) file system.
     *  *
     * @description *   This operation is available only to CPFS file systems on the China site (aliyun.com).
     * *   When you delete a protocol service, the export directories in the protocol service are also deleted.
     *  *
     * @param DeleteProtocolServiceRequest $request DeleteProtocolServiceRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteProtocolServiceResponse DeleteProtocolServiceResponse
     */
    public function deleteProtocolServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->protocolServiceId)) {
            $query['ProtocolServiceId'] = $request->protocolServiceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteProtocolService',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteProtocolServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a protocol service of a Cloud Parallel File Storage (CPFS) file system.
     *  *
     * @description *   This operation is available only to CPFS file systems on the China site (aliyun.com).
     * *   When you delete a protocol service, the export directories in the protocol service are also deleted.
     *  *
     * @param DeleteProtocolServiceRequest $request DeleteProtocolServiceRequest
     *
     * @return DeleteProtocolServiceResponse DeleteProtocolServiceResponse
     */
    public function deleteProtocolService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteProtocolServiceWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a snapshot or cancels a snapshot that is being created.
     *  *
     * @description *   The snapshot feature is in public preview and is provided free of charge. [File Storage NAS Service Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed in public preview.
     * *   Only advanced Extreme NAS file systems support this feature.
     *  *
     * @param DeleteSnapshotRequest $request DeleteSnapshotRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteSnapshotResponse DeleteSnapshotResponse
     */
    public function deleteSnapshotWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->snapshotId)) {
            $query['SnapshotId'] = $request->snapshotId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSnapshot',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSnapshotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a snapshot or cancels a snapshot that is being created.
     *  *
     * @description *   The snapshot feature is in public preview and is provided free of charge. [File Storage NAS Service Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed in public preview.
     * *   Only advanced Extreme NAS file systems support this feature.
     *  *
     * @param DeleteSnapshotRequest $request DeleteSnapshotRequest
     *
     * @return DeleteSnapshotResponse DeleteSnapshotResponse
     */
    public function deleteSnapshot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSnapshotWithOptions($request, $runtime);
    }

    /**
     * @summary Queries permission groups.
     *  *
     * @param DescribeAccessGroupsRequest $request DescribeAccessGroupsRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAccessGroupsResponse DescribeAccessGroupsResponse
     */
    public function describeAccessGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessGroupName)) {
            $query['AccessGroupName'] = $request->accessGroupName;
        }
        if (!Utils::isUnset($request->fileSystemType)) {
            $query['FileSystemType'] = $request->fileSystemType;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->useUTCDateTime)) {
            $query['UseUTCDateTime'] = $request->useUTCDateTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAccessGroups',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAccessGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries permission groups.
     *  *
     * @param DescribeAccessGroupsRequest $request DescribeAccessGroupsRequest
     *
     * @return DescribeAccessGroupsResponse DescribeAccessGroupsResponse
     */
    public function describeAccessGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAccessGroupsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of an access point.
     *  *
     * @description Only General-purpose Network File System (NFS) file systems support this operation.
     *  *
     * @param DescribeAccessPointRequest $request DescribeAccessPointRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAccessPointResponse DescribeAccessPointResponse
     */
    public function describeAccessPointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessPointId)) {
            $query['AccessPointId'] = $request->accessPointId;
        }
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAccessPoint',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAccessPointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of an access point.
     *  *
     * @description Only General-purpose Network File System (NFS) file systems support this operation.
     *  *
     * @param DescribeAccessPointRequest $request DescribeAccessPointRequest
     *
     * @return DescribeAccessPointResponse DescribeAccessPointResponse
     */
    public function describeAccessPoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAccessPointWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about an access point.
     *  *
     * @description Only General-purpose Network File System (NFS) file systems support this operation.
     *  *
     * @param DescribeAccessPointsRequest $request DescribeAccessPointsRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAccessPointsResponse DescribeAccessPointsResponse
     */
    public function describeAccessPointsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessGroup)) {
            $query['AccessGroup'] = $request->accessGroup;
        }
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAccessPoints',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAccessPointsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about an access point.
     *  *
     * @description Only General-purpose Network File System (NFS) file systems support this operation.
     *  *
     * @param DescribeAccessPointsRequest $request DescribeAccessPointsRequest
     *
     * @return DescribeAccessPointsResponse DescribeAccessPointsResponse
     */
    public function describeAccessPoints($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAccessPointsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about rules in a permission group.
     *  *
     * @param DescribeAccessRulesRequest $request DescribeAccessRulesRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAccessRulesResponse DescribeAccessRulesResponse
     */
    public function describeAccessRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessGroupName)) {
            $query['AccessGroupName'] = $request->accessGroupName;
        }
        if (!Utils::isUnset($request->accessRuleId)) {
            $query['AccessRuleId'] = $request->accessRuleId;
        }
        if (!Utils::isUnset($request->fileSystemType)) {
            $query['FileSystemType'] = $request->fileSystemType;
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
            'action'      => 'DescribeAccessRules',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAccessRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about rules in a permission group.
     *  *
     * @param DescribeAccessRulesRequest $request DescribeAccessRulesRequest
     *
     * @return DescribeAccessRulesResponse DescribeAccessRulesResponse
     */
    public function describeAccessRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAccessRulesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries automatic snapshot policies.
     *  *
     * @description *   The snapshot feature is in public preview and is provided free of charge. [File Storage NAS Service Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed in public preview.
     * *   Only advanced Extreme NAS file systems support this feature.
     *  *
     * @param DescribeAutoSnapshotPoliciesRequest $request DescribeAutoSnapshotPoliciesRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAutoSnapshotPoliciesResponse DescribeAutoSnapshotPoliciesResponse
     */
    public function describeAutoSnapshotPoliciesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoSnapshotPolicyId)) {
            $query['AutoSnapshotPolicyId'] = $request->autoSnapshotPolicyId;
        }
        if (!Utils::isUnset($request->fileSystemType)) {
            $query['FileSystemType'] = $request->fileSystemType;
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
            'action'      => 'DescribeAutoSnapshotPolicies',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAutoSnapshotPoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries automatic snapshot policies.
     *  *
     * @description *   The snapshot feature is in public preview and is provided free of charge. [File Storage NAS Service Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed in public preview.
     * *   Only advanced Extreme NAS file systems support this feature.
     *  *
     * @param DescribeAutoSnapshotPoliciesRequest $request DescribeAutoSnapshotPoliciesRequest
     *
     * @return DescribeAutoSnapshotPoliciesResponse DescribeAutoSnapshotPoliciesResponse
     */
    public function describeAutoSnapshotPolicies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAutoSnapshotPoliciesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries automatic snapshot tasks.
     *  *
     * @description *   The snapshot feature is in public preview and is provided free of charge. [File Storage NAS Service Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed in public preview.
     * *   Only advanced Extreme NAS file systems support the snapshot feature.
     *  *
     * @param DescribeAutoSnapshotTasksRequest $request DescribeAutoSnapshotTasksRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAutoSnapshotTasksResponse DescribeAutoSnapshotTasksResponse
     */
    public function describeAutoSnapshotTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoSnapshotPolicyIds)) {
            $query['AutoSnapshotPolicyIds'] = $request->autoSnapshotPolicyIds;
        }
        if (!Utils::isUnset($request->fileSystemIds)) {
            $query['FileSystemIds'] = $request->fileSystemIds;
        }
        if (!Utils::isUnset($request->fileSystemType)) {
            $query['FileSystemType'] = $request->fileSystemType;
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
            'action'      => 'DescribeAutoSnapshotTasks',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAutoSnapshotTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries automatic snapshot tasks.
     *  *
     * @description *   The snapshot feature is in public preview and is provided free of charge. [File Storage NAS Service Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed in public preview.
     * *   Only advanced Extreme NAS file systems support the snapshot feature.
     *  *
     * @param DescribeAutoSnapshotTasksRequest $request DescribeAutoSnapshotTasksRequest
     *
     * @return DescribeAutoSnapshotTasksResponse DescribeAutoSnapshotTasksResponse
     */
    public function describeAutoSnapshotTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAutoSnapshotTasksWithOptions($request, $runtime);
    }

    /**
     * @deprecated OpenAPI DescribeBlackListClients is deprecated
     *  *
     * @summary 获取CPFS服务中黑名单客户端的状态
     *  *
     * @description The API operation is available only for CPFS file systems.
     *  *
     * Deprecated
     *
     * @param DescribeBlackListClientsRequest $request DescribeBlackListClientsRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeBlackListClientsResponse DescribeBlackListClientsResponse
     */
    public function describeBlackListClientsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientIP)) {
            $query['ClientIP'] = $request->clientIP;
        }
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeBlackListClients',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBlackListClientsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated OpenAPI DescribeBlackListClients is deprecated
     *  *
     * @summary 获取CPFS服务中黑名单客户端的状态
     *  *
     * @description The API operation is available only for CPFS file systems.
     *  *
     * Deprecated
     *
     * @param DescribeBlackListClientsRequest $request DescribeBlackListClientsRequest
     *
     * @return DescribeBlackListClientsResponse DescribeBlackListClientsResponse
     */
    public function describeBlackListClients($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBlackListClientsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries data flow subtasks in batches.
     *  *
     * @description Only Cloud Parallel File Storage (CPFS) for LINGJUN V2.6.0 and later support this operation. You can view the version information on the file system details page in the console.
     *  *
     * @param DescribeDataFlowSubTasksRequest $request DescribeDataFlowSubTasksRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDataFlowSubTasksResponse DescribeDataFlowSubTasksResponse
     */
    public function describeDataFlowSubTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->filters)) {
            $query['Filters'] = $request->filters;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDataFlowSubTasks',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDataFlowSubTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries data flow subtasks in batches.
     *  *
     * @description Only Cloud Parallel File Storage (CPFS) for LINGJUN V2.6.0 and later support this operation. You can view the version information on the file system details page in the console.
     *  *
     * @param DescribeDataFlowSubTasksRequest $request DescribeDataFlowSubTasksRequest
     *
     * @return DescribeDataFlowSubTasksResponse DescribeDataFlowSubTasksResponse
     */
    public function describeDataFlowSubTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDataFlowSubTasksWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of data flow tasks.
     *  *
     * @description Only Cloud Parallel File Storage (CPFS) for LINGJUN V2.4.0 and later support query of data flow tasks. You can view the version information on the file system details page in the console.
     *  *
     * @param DescribeDataFlowTasksRequest $request DescribeDataFlowTasksRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDataFlowTasksResponse DescribeDataFlowTasksResponse
     */
    public function describeDataFlowTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->filters)) {
            $query['Filters'] = $request->filters;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDataFlowTasks',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDataFlowTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of data flow tasks.
     *  *
     * @description Only Cloud Parallel File Storage (CPFS) for LINGJUN V2.4.0 and later support query of data flow tasks. You can view the version information on the file system details page in the console.
     *  *
     * @param DescribeDataFlowTasksRequest $request DescribeDataFlowTasksRequest
     *
     * @return DescribeDataFlowTasksResponse DescribeDataFlowTasksResponse
     */
    public function describeDataFlowTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDataFlowTasksWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the dataflows of a CPFS file system.
     *  *
     * @description *   Only CPFS for LINGJUN V2.4.0 and later support data flows. You can view the version information on the file system details page in the console.
     * *   In Filters, FsetIds, DataFlowlds, SourceStorage, ThroughputList, and Status support exact match only. FileSystemPath, Description, and SourceStoragePath support fuzzy match.
     * *   Combined query is supported.
     *  *
     * @param DescribeDataFlowsRequest $request DescribeDataFlowsRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDataFlowsResponse DescribeDataFlowsResponse
     */
    public function describeDataFlowsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->filters)) {
            $query['Filters'] = $request->filters;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDataFlows',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDataFlowsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the dataflows of a CPFS file system.
     *  *
     * @description *   Only CPFS for LINGJUN V2.4.0 and later support data flows. You can view the version information on the file system details page in the console.
     * *   In Filters, FsetIds, DataFlowlds, SourceStorage, ThroughputList, and Status support exact match only. FileSystemPath, Description, and SourceStoragePath support fuzzy match.
     * *   Combined query is supported.
     *  *
     * @param DescribeDataFlowsRequest $request DescribeDataFlowsRequest
     *
     * @return DescribeDataFlowsResponse DescribeDataFlowsResponse
     */
    public function describeDataFlows($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDataFlowsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the directory quotas of a file system.
     *  *
     * @description Only General-purpose NAS file systems support the directory quota feature.
     *  *
     * @param DescribeDirQuotasRequest $request DescribeDirQuotasRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDirQuotasResponse DescribeDirQuotasResponse
     */
    public function describeDirQuotasWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->path)) {
            $query['Path'] = $request->path;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDirQuotas',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDirQuotasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the directory quotas of a file system.
     *  *
     * @description Only General-purpose NAS file systems support the directory quota feature.
     *  *
     * @param DescribeDirQuotasRequest $request DescribeDirQuotasRequest
     *
     * @return DescribeDirQuotasResponse DescribeDirQuotasResponse
     */
    public function describeDirQuotas($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDirQuotasWithOptions($request, $runtime);
    }

    /**
     * @deprecated openAPI DescribeFileSystemStatistics is deprecated, please use NAS::2017-06-26::DescribeResourceStatistics instead
     *  *
     * @summary Queries the statistics of file systems that are owned by the current account.
     *  *
     * Deprecated
     *
     * @param DescribeFileSystemStatisticsRequest $request DescribeFileSystemStatisticsRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeFileSystemStatisticsResponse DescribeFileSystemStatisticsResponse
     */
    public function describeFileSystemStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
            'action'      => 'DescribeFileSystemStatistics',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFileSystemStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated openAPI DescribeFileSystemStatistics is deprecated, please use NAS::2017-06-26::DescribeResourceStatistics instead
     *  *
     * @summary Queries the statistics of file systems that are owned by the current account.
     *  *
     * Deprecated
     *
     * @param DescribeFileSystemStatisticsRequest $request DescribeFileSystemStatisticsRequest
     *
     * @return DescribeFileSystemStatisticsResponse DescribeFileSystemStatisticsResponse
     */
    public function describeFileSystemStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFileSystemStatisticsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries file systems.
     *  *
     * @param DescribeFileSystemsRequest $request DescribeFileSystemsRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeFileSystemsResponse DescribeFileSystemsResponse
     */
    public function describeFileSystemsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->fileSystemType)) {
            $query['FileSystemType'] = $request->fileSystemType;
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
            'action'      => 'DescribeFileSystems',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFileSystemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries file systems.
     *  *
     * @param DescribeFileSystemsRequest $request DescribeFileSystemsRequest
     *
     * @return DescribeFileSystemsResponse DescribeFileSystemsResponse
     */
    public function describeFileSystems($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFileSystemsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about created filesets.
     *  *
     * @description *   Only Cloud Parallel File Storage (CPFS) for LINGJUN V2.7.0 and later support this operation. You can view the version information on the file system details page in the console.
     * *   In Filters, FsetIds supports exact match only. FileSystemPath and Description support fuzzy match.
     * *   Combined query is supported.
     *  *
     * @param DescribeFilesetsRequest $request DescribeFilesetsRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeFilesetsResponse DescribeFilesetsResponse
     */
    public function describeFilesetsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->filters)) {
            $query['Filters'] = $request->filters;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeFilesets',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFilesetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about created filesets.
     *  *
     * @description *   Only Cloud Parallel File Storage (CPFS) for LINGJUN V2.7.0 and later support this operation. You can view the version information on the file system details page in the console.
     * *   In Filters, FsetIds supports exact match only. FileSystemPath and Description support fuzzy match.
     * *   Combined query is supported.
     *  *
     * @param DescribeFilesetsRequest $request DescribeFilesetsRequest
     *
     * @return DescribeFilesetsResponse DescribeFilesetsResponse
     */
    public function describeFilesets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFilesetsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries lifecycle policies.
     *  *
     * @description Only General-purpose NAS file systems support this operation.
     *  *
     * @param DescribeLifecyclePoliciesRequest $request DescribeLifecyclePoliciesRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeLifecyclePoliciesResponse DescribeLifecyclePoliciesResponse
     */
    public function describeLifecyclePoliciesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLifecyclePolicies',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLifecyclePoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries lifecycle policies.
     *  *
     * @description Only General-purpose NAS file systems support this operation.
     *  *
     * @param DescribeLifecyclePoliciesRequest $request DescribeLifecyclePoliciesRequest
     *
     * @return DescribeLifecyclePoliciesResponse DescribeLifecyclePoliciesResponse
     */
    public function describeLifecyclePolicies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLifecyclePoliciesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the log dump information configured in log analysis.
     *  *
     * @param DescribeLogAnalysisRequest $request DescribeLogAnalysisRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeLogAnalysisResponse DescribeLogAnalysisResponse
     */
    public function describeLogAnalysisWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileSystemType)) {
            $query['FileSystemType'] = $request->fileSystemType;
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
            'action'      => 'DescribeLogAnalysis',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLogAnalysisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the log dump information configured in log analysis.
     *  *
     * @param DescribeLogAnalysisRequest $request DescribeLogAnalysisRequest
     *
     * @return DescribeLogAnalysisResponse DescribeLogAnalysisResponse
     */
    public function describeLogAnalysis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLogAnalysisWithOptions($request, $runtime);
    }

    /**
     * @summary Queries mount targets.
     *  *
     * @param DescribeMountTargetsRequest $request DescribeMountTargetsRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeMountTargetsResponse DescribeMountTargetsResponse
     */
    public function describeMountTargetsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dualStackMountTargetDomain)) {
            $query['DualStackMountTargetDomain'] = $request->dualStackMountTargetDomain;
        }
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->mountTargetDomain)) {
            $query['MountTargetDomain'] = $request->mountTargetDomain;
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
            'action'      => 'DescribeMountTargets',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMountTargetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries mount targets.
     *  *
     * @param DescribeMountTargetsRequest $request DescribeMountTargetsRequest
     *
     * @return DescribeMountTargetsResponse DescribeMountTargetsResponse
     */
    public function describeMountTargets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMountTargetsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the clients on which a file system is mounted.
     *  *
     * @description *   Only General-purpose NAS file systems support this operation.
     * *   This operation returns the clients that have accessed the specified file system within the last minute. If the file system is mounted on a client but the client did not access the file system within the last minute, the client is not included in the returned information.
     *  *
     * @param DescribeMountedClientsRequest $request DescribeMountedClientsRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeMountedClientsResponse DescribeMountedClientsResponse
     */
    public function describeMountedClientsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientIP)) {
            $query['ClientIP'] = $request->clientIP;
        }
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->mountTargetDomain)) {
            $query['MountTargetDomain'] = $request->mountTargetDomain;
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
            'action'      => 'DescribeMountedClients',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMountedClientsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the clients on which a file system is mounted.
     *  *
     * @description *   Only General-purpose NAS file systems support this operation.
     * *   This operation returns the clients that have accessed the specified file system within the last minute. If the file system is mounted on a client but the client did not access the file system within the last minute, the client is not included in the returned information.
     *  *
     * @param DescribeMountedClientsRequest $request DescribeMountedClientsRequest
     *
     * @return DescribeMountedClientsResponse DescribeMountedClientsResponse
     */
    public function describeMountedClients($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMountedClientsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries whether the NFS ACL feature is enabled for a file system.
     *  *
     * @param DescribeNfsAclRequest $request DescribeNfsAclRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeNfsAclResponse DescribeNfsAclResponse
     */
    public function describeNfsAclWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeNfsAcl',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeNfsAclResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries whether the NFS ACL feature is enabled for a file system.
     *  *
     * @param DescribeNfsAclRequest $request DescribeNfsAclRequest
     *
     * @return DescribeNfsAclResponse DescribeNfsAclResponse
     */
    public function describeNfsAcl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNfsAclWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the export directories of a protocol service.
     *  *
     * @description This operation is available only to Cloud Parallel File Storage (CPFS) file systems on the China site (aliyun.com).
     *  *
     * @param DescribeProtocolMountTargetRequest $request DescribeProtocolMountTargetRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeProtocolMountTargetResponse DescribeProtocolMountTargetResponse
     */
    public function describeProtocolMountTargetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->filters)) {
            $query['Filters'] = $request->filters;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeProtocolMountTarget',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeProtocolMountTargetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the export directories of a protocol service.
     *  *
     * @description This operation is available only to Cloud Parallel File Storage (CPFS) file systems on the China site (aliyun.com).
     *  *
     * @param DescribeProtocolMountTargetRequest $request DescribeProtocolMountTargetRequest
     *
     * @return DescribeProtocolMountTargetResponse DescribeProtocolMountTargetResponse
     */
    public function describeProtocolMountTarget($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeProtocolMountTargetWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about protocol services.
     *  *
     * @description This operation is available only to Cloud Parallel File Storage (CPFS) file systems on the China site (aliyun.com).
     *  *
     * @param DescribeProtocolServiceRequest $request DescribeProtocolServiceRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeProtocolServiceResponse DescribeProtocolServiceResponse
     */
    public function describeProtocolServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->protocolServiceIds)) {
            $query['ProtocolServiceIds'] = $request->protocolServiceIds;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeProtocolService',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeProtocolServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about protocol services.
     *  *
     * @description This operation is available only to Cloud Parallel File Storage (CPFS) file systems on the China site (aliyun.com).
     *  *
     * @param DescribeProtocolServiceRequest $request DescribeProtocolServiceRequest
     *
     * @return DescribeProtocolServiceResponse DescribeProtocolServiceResponse
     */
    public function describeProtocolService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeProtocolServiceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the regions in which File Storage NAS is available.
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
        if (!Utils::isUnset($request->fileSystemType)) {
            $query['FileSystemType'] = $request->fileSystemType;
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
            'action'      => 'DescribeRegions',
            'version'     => '2017-06-26',
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
     * @summary Queries the regions in which File Storage NAS is available.
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
     * @summary Queries the information about the access control list (ACL) feature of a Server Message Block (SMB) file system that resides in an Active Directory (AD) domain.
     *  *
     * @param DescribeSmbAclRequest $request DescribeSmbAclRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSmbAclResponse DescribeSmbAclResponse
     */
    public function describeSmbAclWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSmbAcl',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSmbAclResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about the access control list (ACL) feature of a Server Message Block (SMB) file system that resides in an Active Directory (AD) domain.
     *  *
     * @param DescribeSmbAclRequest $request DescribeSmbAclRequest
     *
     * @return DescribeSmbAclResponse DescribeSmbAclResponse
     */
    public function describeSmbAcl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSmbAclWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about one or more snapshots of a file system.
     *  *
     * @description *   The snapshot feature is in public preview and is provided free of charge. [File Storage NAS Service Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed in public preview.
     * *   Only advanced Extreme NAS file systems support this feature.
     *  *
     * @param DescribeSnapshotsRequest $request DescribeSnapshotsRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSnapshotsResponse DescribeSnapshotsResponse
     */
    public function describeSnapshotsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->fileSystemType)) {
            $query['FileSystemType'] = $request->fileSystemType;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->snapshotIds)) {
            $query['SnapshotIds'] = $request->snapshotIds;
        }
        if (!Utils::isUnset($request->snapshotName)) {
            $query['SnapshotName'] = $request->snapshotName;
        }
        if (!Utils::isUnset($request->snapshotType)) {
            $query['SnapshotType'] = $request->snapshotType;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSnapshots',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSnapshotsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about one or more snapshots of a file system.
     *  *
     * @description *   The snapshot feature is in public preview and is provided free of charge. [File Storage NAS Service Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed in public preview.
     * *   Only advanced Extreme NAS file systems support this feature.
     *  *
     * @param DescribeSnapshotsRequest $request DescribeSnapshotsRequest
     *
     * @return DescribeSnapshotsResponse DescribeSnapshotsResponse
     */
    public function describeSnapshots($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSnapshotsWithOptions($request, $runtime);
    }

    /**
     * @summary You can call the DescribeStoragePackages operation to query the list of storage plans.
     *  *
     * @param DescribeStoragePackagesRequest $request DescribeStoragePackagesRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeStoragePackagesResponse DescribeStoragePackagesResponse
     */
    public function describeStoragePackagesWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->useUTCDateTime)) {
            $query['UseUTCDateTime'] = $request->useUTCDateTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeStoragePackages',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeStoragePackagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can call the DescribeStoragePackages operation to query the list of storage plans.
     *  *
     * @param DescribeStoragePackagesRequest $request DescribeStoragePackagesRequest
     *
     * @return DescribeStoragePackagesResponse DescribeStoragePackagesResponse
     */
    public function describeStoragePackages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeStoragePackagesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries all zones in a region and the file system types that are supported in each zone.
     *  *
     * @param DescribeZonesRequest $request DescribeZonesRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeZonesResponse DescribeZonesResponse
     */
    public function describeZonesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileSystemType)) {
            $query['FileSystemType'] = $request->fileSystemType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeZones',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeZonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries all zones in a region and the file system types that are supported in each zone.
     *  *
     * @param DescribeZonesRequest $request DescribeZonesRequest
     *
     * @return DescribeZonesResponse DescribeZonesResponse
     */
    public function describeZones($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeZonesWithOptions($request, $runtime);
    }

    /**
     * @summary Disables and empties the recycle bin of a General-purpose NAS file system.
     *  *
     * @description *   Only General-purpose NAS file systems support this operation.
     * *   If you disable the recycle bin, all files in the recycle bin are permanently deleted.
     * *   If you disable and then enable the recycle bin, the recycle bin is empty. You cannot retrieve the deleted files.
     *  *
     * @param DisableAndCleanRecycleBinRequest $request DisableAndCleanRecycleBinRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DisableAndCleanRecycleBinResponse DisableAndCleanRecycleBinResponse
     */
    public function disableAndCleanRecycleBinWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableAndCleanRecycleBin',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableAndCleanRecycleBinResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Disables and empties the recycle bin of a General-purpose NAS file system.
     *  *
     * @description *   Only General-purpose NAS file systems support this operation.
     * *   If you disable the recycle bin, all files in the recycle bin are permanently deleted.
     * *   If you disable and then enable the recycle bin, the recycle bin is empty. You cannot retrieve the deleted files.
     *  *
     * @param DisableAndCleanRecycleBinRequest $request DisableAndCleanRecycleBinRequest
     *
     * @return DisableAndCleanRecycleBinResponse DisableAndCleanRecycleBinResponse
     */
    public function disableAndCleanRecycleBin($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableAndCleanRecycleBinWithOptions($request, $runtime);
    }

    /**
     * @summary Disables the NFS ACL feature for a file system.
     *  *
     * @param DisableNfsAclRequest $request DisableNfsAclRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DisableNfsAclResponse DisableNfsAclResponse
     */
    public function disableNfsAclWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableNfsAcl',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableNfsAclResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Disables the NFS ACL feature for a file system.
     *  *
     * @param DisableNfsAclRequest $request DisableNfsAclRequest
     *
     * @return DisableNfsAclResponse DisableNfsAclResponse
     */
    public function disableNfsAcl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableNfsAclWithOptions($request, $runtime);
    }

    /**
     * @summary Disables the access control list (ACL) feature for a Server Message Block (SMB) file system that resides in an Active Directory (AD) domain.
     *  *
     * @param DisableSmbAclRequest $request DisableSmbAclRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DisableSmbAclResponse DisableSmbAclResponse
     */
    public function disableSmbAclWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableSmbAcl',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableSmbAclResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Disables the access control list (ACL) feature for a Server Message Block (SMB) file system that resides in an Active Directory (AD) domain.
     *  *
     * @param DisableSmbAclRequest $request DisableSmbAclRequest
     *
     * @return DisableSmbAclResponse DisableSmbAclResponse
     */
    public function disableSmbAcl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableSmbAclWithOptions($request, $runtime);
    }

    /**
     * @summary Enables the NFS ACL feature for a file system.
     *  *
     * @param EnableNfsAclRequest $request EnableNfsAclRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableNfsAclResponse EnableNfsAclResponse
     */
    public function enableNfsAclWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableNfsAcl',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableNfsAclResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Enables the NFS ACL feature for a file system.
     *  *
     * @param EnableNfsAclRequest $request EnableNfsAclRequest
     *
     * @return EnableNfsAclResponse EnableNfsAclResponse
     */
    public function enableNfsAcl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableNfsAclWithOptions($request, $runtime);
    }

    /**
     * @summary Enables the recycle bin feature for a file system.
     *  *
     * @description Only General-purpose NAS file systems support this operation.
     *  *
     * @param EnableRecycleBinRequest $request EnableRecycleBinRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableRecycleBinResponse EnableRecycleBinResponse
     */
    public function enableRecycleBinWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->reservedDays)) {
            $query['ReservedDays'] = $request->reservedDays;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableRecycleBin',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableRecycleBinResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Enables the recycle bin feature for a file system.
     *  *
     * @description Only General-purpose NAS file systems support this operation.
     *  *
     * @param EnableRecycleBinRequest $request EnableRecycleBinRequest
     *
     * @return EnableRecycleBinResponse EnableRecycleBinResponse
     */
    public function enableRecycleBin($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableRecycleBinWithOptions($request, $runtime);
    }

    /**
     * @summary Enables the access control list (ACL) feature for a Server Message Block (SMB) file system that resides in an Active Directory (AD) domain.
     *  *
     * @param EnableSmbAclRequest $request EnableSmbAclRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableSmbAclResponse EnableSmbAclResponse
     */
    public function enableSmbAclWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->keytab)) {
            $query['Keytab'] = $request->keytab;
        }
        if (!Utils::isUnset($request->keytabMd5)) {
            $query['KeytabMd5'] = $request->keytabMd5;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableSmbAcl',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableSmbAclResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Enables the access control list (ACL) feature for a Server Message Block (SMB) file system that resides in an Active Directory (AD) domain.
     *  *
     * @param EnableSmbAclRequest $request EnableSmbAclRequest
     *
     * @return EnableSmbAclResponse EnableSmbAclResponse
     */
    public function enableSmbAcl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableSmbAclWithOptions($request, $runtime);
    }

    /**
     * @summary Queries whether a directory contains files that are stored in the Infrequent Access (IA) or Archive storage class, or whether a file is stored in the IA or Archive storage class.
     *  *
     * @description Only General-purpose NAS file systems support this operation.
     *  *
     * @param GetDirectoryOrFilePropertiesRequest $request GetDirectoryOrFilePropertiesRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDirectoryOrFilePropertiesResponse GetDirectoryOrFilePropertiesResponse
     */
    public function getDirectoryOrFilePropertiesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->path)) {
            $query['Path'] = $request->path;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDirectoryOrFileProperties',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDirectoryOrFilePropertiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries whether a directory contains files that are stored in the Infrequent Access (IA) or Archive storage class, or whether a file is stored in the IA or Archive storage class.
     *  *
     * @description Only General-purpose NAS file systems support this operation.
     *  *
     * @param GetDirectoryOrFilePropertiesRequest $request GetDirectoryOrFilePropertiesRequest
     *
     * @return GetDirectoryOrFilePropertiesResponse GetDirectoryOrFilePropertiesResponse
     */
    public function getDirectoryOrFileProperties($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDirectoryOrFilePropertiesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the recycle bin configurations of a General-purpose NAS file system.
     *  *
     * @description Only General-purpose File Storage NAS (NAS) file systems support this operation.
     *  *
     * @param GetRecycleBinAttributeRequest $request GetRecycleBinAttributeRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return GetRecycleBinAttributeResponse GetRecycleBinAttributeResponse
     */
    public function getRecycleBinAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRecycleBinAttribute',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetRecycleBinAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the recycle bin configurations of a General-purpose NAS file system.
     *  *
     * @description Only General-purpose File Storage NAS (NAS) file systems support this operation.
     *  *
     * @param GetRecycleBinAttributeRequest $request GetRecycleBinAttributeRequest
     *
     * @return GetRecycleBinAttributeResponse GetRecycleBinAttributeResponse
     */
    public function getRecycleBinAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRecycleBinAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the infrequently-accessed files in a specified directory of a General-purpose NAS file system and the subdirectories that contain the files.
     *  *
     * @description Only General-purpose NAS file systems support this operation.
     *  *
     * @param ListDirectoriesAndFilesRequest $request ListDirectoriesAndFilesRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDirectoriesAndFilesResponse ListDirectoriesAndFilesResponse
     */
    public function listDirectoriesAndFilesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryOnly)) {
            $query['DirectoryOnly'] = $request->directoryOnly;
        }
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->path)) {
            $query['Path'] = $request->path;
        }
        if (!Utils::isUnset($request->storageType)) {
            $query['StorageType'] = $request->storageType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDirectoriesAndFiles',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDirectoriesAndFilesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the infrequently-accessed files in a specified directory of a General-purpose NAS file system and the subdirectories that contain the files.
     *  *
     * @description Only General-purpose NAS file systems support this operation.
     *  *
     * @param ListDirectoriesAndFilesRequest $request ListDirectoriesAndFilesRequest
     *
     * @return ListDirectoriesAndFilesResponse ListDirectoriesAndFilesResponse
     */
    public function listDirectoriesAndFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDirectoriesAndFilesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries data retrieval tasks.
     *  *
     * @description Only General-purpose NAS file systems support this operation.
     *  *
     * @param ListLifecycleRetrieveJobsRequest $request ListLifecycleRetrieveJobsRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListLifecycleRetrieveJobsResponse ListLifecycleRetrieveJobsResponse
     */
    public function listLifecycleRetrieveJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->storageType)) {
            $query['StorageType'] = $request->storageType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListLifecycleRetrieveJobs',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListLifecycleRetrieveJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries data retrieval tasks.
     *  *
     * @description Only General-purpose NAS file systems support this operation.
     *  *
     * @param ListLifecycleRetrieveJobsRequest $request ListLifecycleRetrieveJobsRequest
     *
     * @return ListLifecycleRetrieveJobsResponse ListLifecycleRetrieveJobsResponse
     */
    public function listLifecycleRetrieveJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLifecycleRetrieveJobsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the directories that are recently deleted.
     *  *
     * @description Only General-purpose NAS file systems support this operation.
     *  *
     * @param ListRecentlyRecycledDirectoriesRequest $request ListRecentlyRecycledDirectoriesRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListRecentlyRecycledDirectoriesResponse ListRecentlyRecycledDirectoriesResponse
     */
    public function listRecentlyRecycledDirectoriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListRecentlyRecycledDirectories',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListRecentlyRecycledDirectoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the directories that are recently deleted.
     *  *
     * @description Only General-purpose NAS file systems support this operation.
     *  *
     * @param ListRecentlyRecycledDirectoriesRequest $request ListRecentlyRecycledDirectoriesRequest
     *
     * @return ListRecentlyRecycledDirectoriesResponse ListRecentlyRecycledDirectoriesResponse
     */
    public function listRecentlyRecycledDirectories($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRecentlyRecycledDirectoriesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the jobs of the recycle bin.
     *  *
     * @description *   Only General-purpose NAS file systems support this operation.
     * *   You can query a maximum of 50 jobs that are recently executed.
     *  *
     * @param ListRecycleBinJobsRequest $request ListRecycleBinJobsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListRecycleBinJobsResponse ListRecycleBinJobsResponse
     */
    public function listRecycleBinJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListRecycleBinJobs',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListRecycleBinJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the jobs of the recycle bin.
     *  *
     * @description *   Only General-purpose NAS file systems support this operation.
     * *   You can query a maximum of 50 jobs that are recently executed.
     *  *
     * @param ListRecycleBinJobsRequest $request ListRecycleBinJobsRequest
     *
     * @return ListRecycleBinJobsResponse ListRecycleBinJobsResponse
     */
    public function listRecycleBinJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRecycleBinJobsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries deleted files or directories.
     *  *
     * @description Only General-purpose NAS file systems support this operation.
     *  *
     * @param ListRecycledDirectoriesAndFilesRequest $request ListRecycledDirectoriesAndFilesRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListRecycledDirectoriesAndFilesResponse ListRecycledDirectoriesAndFilesResponse
     */
    public function listRecycledDirectoriesAndFilesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListRecycledDirectoriesAndFiles',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListRecycledDirectoriesAndFilesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries deleted files or directories.
     *  *
     * @description Only General-purpose NAS file systems support this operation.
     *  *
     * @param ListRecycledDirectoriesAndFilesRequest $request ListRecycledDirectoriesAndFilesRequest
     *
     * @return ListRecycledDirectoriesAndFilesResponse ListRecycledDirectoriesAndFilesResponse
     */
    public function listRecycledDirectoriesAndFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRecycledDirectoriesAndFilesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries tags.
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
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
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
            'version'     => '2017-06-26',
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
     * @summary Queries tags.
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
     * @summary Modifies a permission group.
     *  *
     * @description The default permission group (DEFAULT_VPC_GROUP_NAME) cannot be modified.
     *  *
     * @param ModifyAccessGroupRequest $request ModifyAccessGroupRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyAccessGroupResponse ModifyAccessGroupResponse
     */
    public function modifyAccessGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessGroupName)) {
            $query['AccessGroupName'] = $request->accessGroupName;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->fileSystemType)) {
            $query['FileSystemType'] = $request->fileSystemType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyAccessGroup',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyAccessGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies a permission group.
     *  *
     * @description The default permission group (DEFAULT_VPC_GROUP_NAME) cannot be modified.
     *  *
     * @param ModifyAccessGroupRequest $request ModifyAccessGroupRequest
     *
     * @return ModifyAccessGroupResponse ModifyAccessGroupResponse
     */
    public function modifyAccessGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAccessGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the information about an access point.
     *  *
     * @description Only General-purpose Network File System (NFS) file systems support this operation.
     *  *
     * @param ModifyAccessPointRequest $request ModifyAccessPointRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyAccessPointResponse ModifyAccessPointResponse
     */
    public function modifyAccessPointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessGroup)) {
            $query['AccessGroup'] = $request->accessGroup;
        }
        if (!Utils::isUnset($request->accessPointId)) {
            $query['AccessPointId'] = $request->accessPointId;
        }
        if (!Utils::isUnset($request->accessPointName)) {
            $query['AccessPointName'] = $request->accessPointName;
        }
        if (!Utils::isUnset($request->enabledRam)) {
            $query['EnabledRam'] = $request->enabledRam;
        }
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyAccessPoint',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyAccessPointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the information about an access point.
     *  *
     * @description Only General-purpose Network File System (NFS) file systems support this operation.
     *  *
     * @param ModifyAccessPointRequest $request ModifyAccessPointRequest
     *
     * @return ModifyAccessPointResponse ModifyAccessPointResponse
     */
    public function modifyAccessPoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAccessPointWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies a rule in a permission group.
     *  *
     * @description The rules in the default permission group (DEFAULT_VPC_GROUP_NAME) cannot be modified.
     *  *
     * @param ModifyAccessRuleRequest $request ModifyAccessRuleRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyAccessRuleResponse ModifyAccessRuleResponse
     */
    public function modifyAccessRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessGroupName)) {
            $query['AccessGroupName'] = $request->accessGroupName;
        }
        if (!Utils::isUnset($request->accessRuleId)) {
            $query['AccessRuleId'] = $request->accessRuleId;
        }
        if (!Utils::isUnset($request->fileSystemType)) {
            $query['FileSystemType'] = $request->fileSystemType;
        }
        if (!Utils::isUnset($request->ipv6SourceCidrIp)) {
            $query['Ipv6SourceCidrIp'] = $request->ipv6SourceCidrIp;
        }
        if (!Utils::isUnset($request->priority)) {
            $query['Priority'] = $request->priority;
        }
        if (!Utils::isUnset($request->RWAccessType)) {
            $query['RWAccessType'] = $request->RWAccessType;
        }
        if (!Utils::isUnset($request->sourceCidrIp)) {
            $query['SourceCidrIp'] = $request->sourceCidrIp;
        }
        if (!Utils::isUnset($request->userAccessType)) {
            $query['UserAccessType'] = $request->userAccessType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyAccessRule',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyAccessRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies a rule in a permission group.
     *  *
     * @description The rules in the default permission group (DEFAULT_VPC_GROUP_NAME) cannot be modified.
     *  *
     * @param ModifyAccessRuleRequest $request ModifyAccessRuleRequest
     *
     * @return ModifyAccessRuleResponse ModifyAccessRuleResponse
     */
    public function modifyAccessRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAccessRuleWithOptions($request, $runtime);
    }

    /**
     * @summary An automatic snapshot policy is modified. After you modify an automatic snapshot policy that is applied to a file system, the modification immediately applies to subsequent snapshots that are created for the file system.
     *  *
     * @description *   The snapshot feature is in public preview and is provided free of charge. [File Storage NAS Service Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed in public preview.
     * *   Only advanced Extreme NAS file systems support this feature.
     *  *
     * @param ModifyAutoSnapshotPolicyRequest $request ModifyAutoSnapshotPolicyRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyAutoSnapshotPolicyResponse ModifyAutoSnapshotPolicyResponse
     */
    public function modifyAutoSnapshotPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoSnapshotPolicyId)) {
            $query['AutoSnapshotPolicyId'] = $request->autoSnapshotPolicyId;
        }
        if (!Utils::isUnset($request->autoSnapshotPolicyName)) {
            $query['AutoSnapshotPolicyName'] = $request->autoSnapshotPolicyName;
        }
        if (!Utils::isUnset($request->repeatWeekdays)) {
            $query['RepeatWeekdays'] = $request->repeatWeekdays;
        }
        if (!Utils::isUnset($request->retentionDays)) {
            $query['RetentionDays'] = $request->retentionDays;
        }
        if (!Utils::isUnset($request->timePoints)) {
            $query['TimePoints'] = $request->timePoints;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyAutoSnapshotPolicy',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyAutoSnapshotPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary An automatic snapshot policy is modified. After you modify an automatic snapshot policy that is applied to a file system, the modification immediately applies to subsequent snapshots that are created for the file system.
     *  *
     * @description *   The snapshot feature is in public preview and is provided free of charge. [File Storage NAS Service Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed in public preview.
     * *   Only advanced Extreme NAS file systems support this feature.
     *  *
     * @param ModifyAutoSnapshotPolicyRequest $request ModifyAutoSnapshotPolicyRequest
     *
     * @return ModifyAutoSnapshotPolicyResponse ModifyAutoSnapshotPolicyResponse
     */
    public function modifyAutoSnapshotPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAutoSnapshotPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the attributes of a dataflow.
     *  *
     * @description *   Only Cloud Parallel File Storage (CPFS) for LINGJUN V2.4.0 and later support data flows.
     * *   You can modify the attributes only of the data flows that are in the `Running` state.
     * *   It generally takes 2 to 5 minutes to modify the attributes of a data flow. You can call the [DescribeDataFlows](https://help.aliyun.com/document_detail/2838084.html) operation to query the status of the data flow to be modified.
     *  *
     * @param ModifyDataFlowRequest $request ModifyDataFlowRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDataFlowResponse ModifyDataFlowResponse
     */
    public function modifyDataFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dataFlowId)) {
            $query['DataFlowId'] = $request->dataFlowId;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->throughput)) {
            $query['Throughput'] = $request->throughput;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDataFlow',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDataFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the attributes of a dataflow.
     *  *
     * @description *   Only Cloud Parallel File Storage (CPFS) for LINGJUN V2.4.0 and later support data flows.
     * *   You can modify the attributes only of the data flows that are in the `Running` state.
     * *   It generally takes 2 to 5 minutes to modify the attributes of a data flow. You can call the [DescribeDataFlows](https://help.aliyun.com/document_detail/2838084.html) operation to query the status of the data flow to be modified.
     *  *
     * @param ModifyDataFlowRequest $request ModifyDataFlowRequest
     *
     * @return ModifyDataFlowResponse ModifyDataFlowResponse
     */
    public function modifyDataFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDataFlowWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies an AutoRefresh configuration of a dataflow.
     *  *
     * @description *   This operation is available only to Cloud Parallel File Storage (CPFS) file systems on the China site (aliyun.com).
     * *   Only CPFS V2.2.0 and later support dataflows. You can view the version information on the file system details page in the console.
     * *   You can modify the AutoRefresh configurations only for the dataflows that are in the `Running` or `Stopped` state.
     * *   It generally takes 2 to 5 minutes to modify an AutoRefresh configuration. You can call the [DescribeDataFlows](https://help.aliyun.com/document_detail/2838084.html) operation to query the task of modifying an AutoRefresh configuration.
     *  *
     * @param ModifyDataFlowAutoRefreshRequest $request ModifyDataFlowAutoRefreshRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDataFlowAutoRefreshResponse ModifyDataFlowAutoRefreshResponse
     */
    public function modifyDataFlowAutoRefreshWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoRefreshInterval)) {
            $query['AutoRefreshInterval'] = $request->autoRefreshInterval;
        }
        if (!Utils::isUnset($request->autoRefreshPolicy)) {
            $query['AutoRefreshPolicy'] = $request->autoRefreshPolicy;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dataFlowId)) {
            $query['DataFlowId'] = $request->dataFlowId;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDataFlowAutoRefresh',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDataFlowAutoRefreshResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies an AutoRefresh configuration of a dataflow.
     *  *
     * @description *   This operation is available only to Cloud Parallel File Storage (CPFS) file systems on the China site (aliyun.com).
     * *   Only CPFS V2.2.0 and later support dataflows. You can view the version information on the file system details page in the console.
     * *   You can modify the AutoRefresh configurations only for the dataflows that are in the `Running` or `Stopped` state.
     * *   It generally takes 2 to 5 minutes to modify an AutoRefresh configuration. You can call the [DescribeDataFlows](https://help.aliyun.com/document_detail/2838084.html) operation to query the task of modifying an AutoRefresh configuration.
     *  *
     * @param ModifyDataFlowAutoRefreshRequest $request ModifyDataFlowAutoRefreshRequest
     *
     * @return ModifyDataFlowAutoRefreshResponse ModifyDataFlowAutoRefreshResponse
     */
    public function modifyDataFlowAutoRefresh($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDataFlowAutoRefreshWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the description of a file system.
     *  *
     * @param ModifyFileSystemRequest $tmpReq  ModifyFileSystemRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyFileSystemResponse ModifyFileSystemResponse
     */
    public function modifyFileSystemWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ModifyFileSystemShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->options)) {
            $request->optionsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->options, 'Options', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->optionsShrink)) {
            $query['Options'] = $request->optionsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyFileSystem',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyFileSystemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the description of a file system.
     *  *
     * @param ModifyFileSystemRequest $request ModifyFileSystemRequest
     *
     * @return ModifyFileSystemResponse ModifyFileSystemResponse
     */
    public function modifyFileSystem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyFileSystemWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies a fileset.
     *  *
     * @description Only Cloud Parallel File Storage (CPFS) for LINGJUN V2.7.0 and later support this operation.
     *  *
     * @param ModifyFilesetRequest $request ModifyFilesetRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyFilesetResponse ModifyFilesetResponse
     */
    public function modifyFilesetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->deletionProtection)) {
            $query['DeletionProtection'] = $request->deletionProtection;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->fsetId)) {
            $query['FsetId'] = $request->fsetId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyFileset',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyFilesetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies a fileset.
     *  *
     * @description Only Cloud Parallel File Storage (CPFS) for LINGJUN V2.7.0 and later support this operation.
     *  *
     * @param ModifyFilesetRequest $request ModifyFilesetRequest
     *
     * @return ModifyFilesetResponse ModifyFilesetResponse
     */
    public function modifyFileset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyFilesetWithOptions($request, $runtime);
    }

    /**
     * @deprecated OpenAPI ModifyLDAPConfig is deprecated
     *  *
     * @summary 修改LDAP配置
     *  *
     * @description The API operation is available only for Cloud Parallel File Storage (CPFS) file systems.
     *  *
     * Deprecated
     *
     * @param ModifyLDAPConfigRequest $request ModifyLDAPConfigRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyLDAPConfigResponse ModifyLDAPConfigResponse
     */
    public function modifyLDAPConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bindDN)) {
            $query['BindDN'] = $request->bindDN;
        }
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->searchBase)) {
            $query['SearchBase'] = $request->searchBase;
        }
        if (!Utils::isUnset($request->URI)) {
            $query['URI'] = $request->URI;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyLDAPConfig',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyLDAPConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated OpenAPI ModifyLDAPConfig is deprecated
     *  *
     * @summary 修改LDAP配置
     *  *
     * @description The API operation is available only for Cloud Parallel File Storage (CPFS) file systems.
     *  *
     * Deprecated
     *
     * @param ModifyLDAPConfigRequest $request ModifyLDAPConfigRequest
     *
     * @return ModifyLDAPConfigResponse ModifyLDAPConfigResponse
     */
    public function modifyLDAPConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyLDAPConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies a lifecycle policy.
     *  *
     * @description Only General-purpose NAS file systems support this operation.
     *  *
     * @param ModifyLifecyclePolicyRequest $request ModifyLifecyclePolicyRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyLifecyclePolicyResponse ModifyLifecyclePolicyResponse
     */
    public function modifyLifecyclePolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->lifecyclePolicyName)) {
            $query['LifecyclePolicyName'] = $request->lifecyclePolicyName;
        }
        if (!Utils::isUnset($request->lifecycleRuleName)) {
            $query['LifecycleRuleName'] = $request->lifecycleRuleName;
        }
        if (!Utils::isUnset($request->path)) {
            $query['Path'] = $request->path;
        }
        if (!Utils::isUnset($request->storageType)) {
            $query['StorageType'] = $request->storageType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyLifecyclePolicy',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyLifecyclePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies a lifecycle policy.
     *  *
     * @description Only General-purpose NAS file systems support this operation.
     *  *
     * @param ModifyLifecyclePolicyRequest $request ModifyLifecyclePolicyRequest
     *
     * @return ModifyLifecyclePolicyResponse ModifyLifecyclePolicyResponse
     */
    public function modifyLifecyclePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyLifecyclePolicyWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies a mount target.
     *  *
     * @param ModifyMountTargetRequest $request ModifyMountTargetRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyMountTargetResponse ModifyMountTargetResponse
     */
    public function modifyMountTargetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessGroupName)) {
            $query['AccessGroupName'] = $request->accessGroupName;
        }
        if (!Utils::isUnset($request->dualStackMountTargetDomain)) {
            $query['DualStackMountTargetDomain'] = $request->dualStackMountTargetDomain;
        }
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->mountTargetDomain)) {
            $query['MountTargetDomain'] = $request->mountTargetDomain;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyMountTarget',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyMountTargetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies a mount target.
     *  *
     * @param ModifyMountTargetRequest $request ModifyMountTargetRequest
     *
     * @return ModifyMountTargetResponse ModifyMountTargetResponse
     */
    public function modifyMountTarget($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyMountTargetWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the export directory parameters of a protocol service. Only the description can be modified. The virtual private cloud (VPC) ID and vSwitch ID cannot be changed. To change these IDs, you must delete the export directory and create a new one.
     *  *
     * @description This operation is available only to Cloud Parallel File Storage (CPFS) file systems on the China site (aliyun.com).
     *  *
     * @param ModifyProtocolMountTargetRequest $request ModifyProtocolMountTargetRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyProtocolMountTargetResponse ModifyProtocolMountTargetResponse
     */
    public function modifyProtocolMountTargetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->exportId)) {
            $query['ExportId'] = $request->exportId;
        }
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->protocolServiceId)) {
            $query['ProtocolServiceId'] = $request->protocolServiceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyProtocolMountTarget',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyProtocolMountTargetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the export directory parameters of a protocol service. Only the description can be modified. The virtual private cloud (VPC) ID and vSwitch ID cannot be changed. To change these IDs, you must delete the export directory and create a new one.
     *  *
     * @description This operation is available only to Cloud Parallel File Storage (CPFS) file systems on the China site (aliyun.com).
     *  *
     * @param ModifyProtocolMountTargetRequest $request ModifyProtocolMountTargetRequest
     *
     * @return ModifyProtocolMountTargetResponse ModifyProtocolMountTargetResponse
     */
    public function modifyProtocolMountTarget($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyProtocolMountTargetWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies a protocol service. You can modify the description of a protocol service.
     *  *
     * @description This operation is available only to Cloud Parallel File Storage (CPFS) file systems on the China site (aliyun.com).
     *  *
     * @param ModifyProtocolServiceRequest $request ModifyProtocolServiceRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyProtocolServiceResponse ModifyProtocolServiceResponse
     */
    public function modifyProtocolServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->protocolServiceId)) {
            $query['ProtocolServiceId'] = $request->protocolServiceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyProtocolService',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyProtocolServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies a protocol service. You can modify the description of a protocol service.
     *  *
     * @description This operation is available only to Cloud Parallel File Storage (CPFS) file systems on the China site (aliyun.com).
     *  *
     * @param ModifyProtocolServiceRequest $request ModifyProtocolServiceRequest
     *
     * @return ModifyProtocolServiceResponse ModifyProtocolServiceResponse
     */
    public function modifyProtocolService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyProtocolServiceWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the information about the access control list (ACL) feature of a Server Message Block (SMB) file system that resides in an Active Directory (AD) domain.
     *  *
     * @param ModifySmbAclRequest $request ModifySmbAclRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifySmbAclResponse ModifySmbAclResponse
     */
    public function modifySmbAclWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->enableAnonymousAccess)) {
            $query['EnableAnonymousAccess'] = $request->enableAnonymousAccess;
        }
        if (!Utils::isUnset($request->encryptData)) {
            $query['EncryptData'] = $request->encryptData;
        }
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->homeDirPath)) {
            $query['HomeDirPath'] = $request->homeDirPath;
        }
        if (!Utils::isUnset($request->keytab)) {
            $query['Keytab'] = $request->keytab;
        }
        if (!Utils::isUnset($request->keytabMd5)) {
            $query['KeytabMd5'] = $request->keytabMd5;
        }
        if (!Utils::isUnset($request->rejectUnencryptedAccess)) {
            $query['RejectUnencryptedAccess'] = $request->rejectUnencryptedAccess;
        }
        if (!Utils::isUnset($request->superAdminSid)) {
            $query['SuperAdminSid'] = $request->superAdminSid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifySmbAcl',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifySmbAclResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates the information about the access control list (ACL) feature of a Server Message Block (SMB) file system that resides in an Active Directory (AD) domain.
     *  *
     * @param ModifySmbAclRequest $request ModifySmbAclRequest
     *
     * @return ModifySmbAclResponse ModifySmbAclResponse
     */
    public function modifySmbAcl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySmbAclWithOptions($request, $runtime);
    }

    /**
     * @summary Activates File Storage NAS.
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return OpenNASServiceResponse OpenNASServiceResponse
     */
    public function openNASServiceWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'OpenNASService',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OpenNASServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Activates File Storage NAS.
     *  *
     * @return OpenNASServiceResponse OpenNASServiceResponse
     */
    public function openNASService()
    {
        $runtime = new RuntimeOptions([]);

        return $this->openNASServiceWithOptions($runtime);
    }

    /**
     * @deprecated OpenAPI RemoveClientFromBlackList is deprecated
     *  *
     * @summary 移除黑名单
     *  *
     * @description The IP address of a client to remove from the blacklist.
     *  *
     * Deprecated
     *
     * @param RemoveClientFromBlackListRequest $request RemoveClientFromBlackListRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveClientFromBlackListResponse RemoveClientFromBlackListResponse
     */
    public function removeClientFromBlackListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientIP)) {
            $query['ClientIP'] = $request->clientIP;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveClientFromBlackList',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveClientFromBlackListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated OpenAPI RemoveClientFromBlackList is deprecated
     *  *
     * @summary 移除黑名单
     *  *
     * @description The IP address of a client to remove from the blacklist.
     *  *
     * Deprecated
     *
     * @param RemoveClientFromBlackListRequest $request RemoveClientFromBlackListRequest
     *
     * @return RemoveClientFromBlackListResponse RemoveClientFromBlackListResponse
     */
    public function removeClientFromBlackList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeClientFromBlackListWithOptions($request, $runtime);
    }

    /**
     * @deprecated openAPI RemoveTags is deprecated, please use NAS::2017-06-26::UntagResources instead
     *  *
     * @summary Removes one or more tags from a file system.
     *  *
     * @description >  The tag feature has been upgraded and this document will be unpublished. For more information, see UntagResources.
     * A request ID is returned even if the tag that you want to remove or the associated file system does not exist. For example, if the associated file system does not exist, or the TagKey and TagValue cannot be found, a request ID is still returned.
     *  *
     * Deprecated
     *
     * @param RemoveTagsRequest $request RemoveTagsRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveTagsResponse RemoveTagsResponse
     */
    public function removeTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveTags',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated openAPI RemoveTags is deprecated, please use NAS::2017-06-26::UntagResources instead
     *  *
     * @summary Removes one or more tags from a file system.
     *  *
     * @description >  The tag feature has been upgraded and this document will be unpublished. For more information, see UntagResources.
     * A request ID is returned even if the tag that you want to remove or the associated file system does not exist. For example, if the associated file system does not exist, or the TagKey and TagValue cannot be found, a request ID is still returned.
     *  *
     * Deprecated
     *
     * @param RemoveTagsRequest $request RemoveTagsRequest
     *
     * @return RemoveTagsResponse RemoveTagsResponse
     */
    public function removeTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeTagsWithOptions($request, $runtime);
    }

    /**
     * @summary Rolls back a file system to a snapshot of the file system.
     *  *
     * @description *   The snapshot feature is in public preview and is provided free of charge. [File Storage NAS Service Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed in public preview.
     * *   Only advanced Extreme NAS file systems support this feature.
     * *   The file system must be in the Running state.
     * *   To roll back a file system to a snapshot, you must specify the ID of the snapshot that is created from the file system.
     *  *
     * @param ResetFileSystemRequest $request ResetFileSystemRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ResetFileSystemResponse ResetFileSystemResponse
     */
    public function resetFileSystemWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->snapshotId)) {
            $query['SnapshotId'] = $request->snapshotId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResetFileSystem',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResetFileSystemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Rolls back a file system to a snapshot of the file system.
     *  *
     * @description *   The snapshot feature is in public preview and is provided free of charge. [File Storage NAS Service Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed in public preview.
     * *   Only advanced Extreme NAS file systems support this feature.
     * *   The file system must be in the Running state.
     * *   To roll back a file system to a snapshot, you must specify the ID of the snapshot that is created from the file system.
     *  *
     * @param ResetFileSystemRequest $request ResetFileSystemRequest
     *
     * @return ResetFileSystemResponse ResetFileSystemResponse
     */
    public function resetFileSystem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetFileSystemWithOptions($request, $runtime);
    }

    /**
     * @summary Retries failed a data retrieval task.
     *  *
     * @description Only General-purpose NAS file systems support this operation.
     *  *
     * @param RetryLifecycleRetrieveJobRequest $request RetryLifecycleRetrieveJobRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return RetryLifecycleRetrieveJobResponse RetryLifecycleRetrieveJobResponse
     */
    public function retryLifecycleRetrieveJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RetryLifecycleRetrieveJob',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RetryLifecycleRetrieveJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Retries failed a data retrieval task.
     *  *
     * @description Only General-purpose NAS file systems support this operation.
     *  *
     * @param RetryLifecycleRetrieveJobRequest $request RetryLifecycleRetrieveJobRequest
     *
     * @return RetryLifecycleRetrieveJobResponse RetryLifecycleRetrieveJobResponse
     */
    public function retryLifecycleRetrieveJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->retryLifecycleRetrieveJobWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a directory quota for a file system.
     *  *
     * @description Only General-purpose File Storage NAS (NAS) file systems support the directory quota feature.
     *  *
     * @param SetDirQuotaRequest $request SetDirQuotaRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return SetDirQuotaResponse SetDirQuotaResponse
     */
    public function setDirQuotaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileCountLimit)) {
            $query['FileCountLimit'] = $request->fileCountLimit;
        }
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->path)) {
            $query['Path'] = $request->path;
        }
        if (!Utils::isUnset($request->quotaType)) {
            $query['QuotaType'] = $request->quotaType;
        }
        if (!Utils::isUnset($request->sizeLimit)) {
            $query['SizeLimit'] = $request->sizeLimit;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        if (!Utils::isUnset($request->userType)) {
            $query['UserType'] = $request->userType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetDirQuota',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetDirQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a directory quota for a file system.
     *  *
     * @description Only General-purpose File Storage NAS (NAS) file systems support the directory quota feature.
     *  *
     * @param SetDirQuotaRequest $request SetDirQuotaRequest
     *
     * @return SetDirQuotaResponse SetDirQuotaResponse
     */
    public function setDirQuota($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDirQuotaWithOptions($request, $runtime);
    }

    /**
     * @summary Sets the quota for a fileset.
     *  *
     * @description *   Only Cloud Parallel File Storage (CPFS) for LINGJUN V2.7.0 and later support this operation.
     * *   The minimum capacity quota of a fileset is 10 GiB, and the maximum capacity quota is 1,000 TiB. The scaling step size is 1 GiB. The capacity quota cannot exceed the total capacity of the file system.
     * *   A fileset supports a minimum of 10,000 files or directories and a maximum of 10 billion files or directories. The scaling step size is 1.
     * *   When you modify a directory quota, you must set the quota capacity or the file quantity to be greater than the capacity or file quantity that has been used.
     * *   The quota statistics have a 5-minute latency. The actual usage takes effect after 5 minutes.
     *  *
     * @param SetFilesetQuotaRequest $request SetFilesetQuotaRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return SetFilesetQuotaResponse SetFilesetQuotaResponse
     */
    public function setFilesetQuotaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->fileCountLimit)) {
            $query['FileCountLimit'] = $request->fileCountLimit;
        }
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->fsetId)) {
            $query['FsetId'] = $request->fsetId;
        }
        if (!Utils::isUnset($request->sizeLimit)) {
            $query['SizeLimit'] = $request->sizeLimit;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetFilesetQuota',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetFilesetQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Sets the quota for a fileset.
     *  *
     * @description *   Only Cloud Parallel File Storage (CPFS) for LINGJUN V2.7.0 and later support this operation.
     * *   The minimum capacity quota of a fileset is 10 GiB, and the maximum capacity quota is 1,000 TiB. The scaling step size is 1 GiB. The capacity quota cannot exceed the total capacity of the file system.
     * *   A fileset supports a minimum of 10,000 files or directories and a maximum of 10 billion files or directories. The scaling step size is 1.
     * *   When you modify a directory quota, you must set the quota capacity or the file quantity to be greater than the capacity or file quantity that has been used.
     * *   The quota statistics have a 5-minute latency. The actual usage takes effect after 5 minutes.
     *  *
     * @param SetFilesetQuotaRequest $request SetFilesetQuotaRequest
     *
     * @return SetFilesetQuotaResponse SetFilesetQuotaResponse
     */
    public function setFilesetQuota($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setFilesetQuotaWithOptions($request, $runtime);
    }

    /**
     * @summary Enables a dataflow.
     *  *
     * @description *   This operation is available only to Cloud Parallel File Storage (CPFS) file systems on the China site (aliyun.com).
     * *   Only CPFS V2.2.0 and later support data flows. You can view the version information on the file system details page in the console.
     * *   You can enable the data flows that are only in the `Stopped` state.
     * *   If the value of DryRun is `true`, you can check whether sufficient resources are available to enable the specified data flow. If the resources are insufficient, the data flow cannot be enabled.
     * *   It generally takes 2 to 5 minutes to enable a data flow. You can query the data flow status by calling the [DescribeDataFlows](https://help.aliyun.com/document_detail/2402270.html) operation.
     *  *
     * @param StartDataFlowRequest $request StartDataFlowRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return StartDataFlowResponse StartDataFlowResponse
     */
    public function startDataFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dataFlowId)) {
            $query['DataFlowId'] = $request->dataFlowId;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartDataFlow',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartDataFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Enables a dataflow.
     *  *
     * @description *   This operation is available only to Cloud Parallel File Storage (CPFS) file systems on the China site (aliyun.com).
     * *   Only CPFS V2.2.0 and later support data flows. You can view the version information on the file system details page in the console.
     * *   You can enable the data flows that are only in the `Stopped` state.
     * *   If the value of DryRun is `true`, you can check whether sufficient resources are available to enable the specified data flow. If the resources are insufficient, the data flow cannot be enabled.
     * *   It generally takes 2 to 5 minutes to enable a data flow. You can query the data flow status by calling the [DescribeDataFlows](https://help.aliyun.com/document_detail/2402270.html) operation.
     *  *
     * @param StartDataFlowRequest $request StartDataFlowRequest
     *
     * @return StartDataFlowResponse StartDataFlowResponse
     */
    public function startDataFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startDataFlowWithOptions($request, $runtime);
    }

    /**
     * @summary Disables a dataflow.
     *  *
     * @description *   This operation is available only to Cloud Parallel File Storage (CPFS) file systems on the China site (aliyun.com).
     * *   Only CPFS V2.2.0 and later support dataflows. You can view the version information on the file system details page in the console.
     * *   You can disable only the dataflows that are in the `Running` state.
     * *   After a dataflow is disabled, you cannot create a dataflow task for the dataflow. If AutoRefresh is configured, source data updates are not synchronized to CPFS.
     * *   After a dataflow is disabled, the dataflow throughput is no longer billed because resources are reclaimed. However, the dataflow may fail to be restarted due to insufficient resources.
     * *   It generally takes 2 to 5 minutes to disable a dataflow. You can call the [DescribeDataFlows](https://help.aliyun.com/document_detail/2402271.html) operation to query the dataflow status.
     *  *
     * @param StopDataFlowRequest $request StopDataFlowRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return StopDataFlowResponse StopDataFlowResponse
     */
    public function stopDataFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dataFlowId)) {
            $query['DataFlowId'] = $request->dataFlowId;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopDataFlow',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopDataFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Disables a dataflow.
     *  *
     * @description *   This operation is available only to Cloud Parallel File Storage (CPFS) file systems on the China site (aliyun.com).
     * *   Only CPFS V2.2.0 and later support dataflows. You can view the version information on the file system details page in the console.
     * *   You can disable only the dataflows that are in the `Running` state.
     * *   After a dataflow is disabled, you cannot create a dataflow task for the dataflow. If AutoRefresh is configured, source data updates are not synchronized to CPFS.
     * *   After a dataflow is disabled, the dataflow throughput is no longer billed because resources are reclaimed. However, the dataflow may fail to be restarted due to insufficient resources.
     * *   It generally takes 2 to 5 minutes to disable a dataflow. You can call the [DescribeDataFlows](https://help.aliyun.com/document_detail/2402271.html) operation to query the dataflow status.
     *  *
     * @param StopDataFlowRequest $request StopDataFlowRequest
     *
     * @return StopDataFlowResponse StopDataFlowResponse
     */
    public function stopDataFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopDataFlowWithOptions($request, $runtime);
    }

    /**
     * @summary Creates tags and binds the tags to file systems.
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
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
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
            'version'     => '2017-06-26',
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
     * @summary Creates tags and binds the tags to file systems.
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
     * @summary Removes tags from a file system.
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
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
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
            'version'     => '2017-06-26',
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
     * @summary Removes tags from a file system.
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
     * @summary Modifies the retention period of data in the recycle bin of a file system.
     *  *
     * @description Only General-purpose NAS file systems support this operation.
     *  *
     * @param UpdateRecycleBinAttributeRequest $request UpdateRecycleBinAttributeRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateRecycleBinAttributeResponse UpdateRecycleBinAttributeResponse
     */
    public function updateRecycleBinAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateRecycleBinAttribute',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateRecycleBinAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the retention period of data in the recycle bin of a file system.
     *  *
     * @description Only General-purpose NAS file systems support this operation.
     *  *
     * @param UpdateRecycleBinAttributeRequest $request UpdateRecycleBinAttributeRequest
     *
     * @return UpdateRecycleBinAttributeResponse UpdateRecycleBinAttributeResponse
     */
    public function updateRecycleBinAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRecycleBinAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Scales up an Extreme NAS file system or a Cloud Parallel File Storage (CPFS) file system.
     *  *
     * @description *   Only Extreme NAS file systems and CPFS file systems can be scaled up. CPFS file systems are available only on the China site (aliyun.com).
     * *   A General-purpose NAS file system is automatically scaled up. You do not need to call this operation to scale up a General-purpose NAS file system.
     *  *
     * @param UpgradeFileSystemRequest $request UpgradeFileSystemRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return UpgradeFileSystemResponse UpgradeFileSystemResponse
     */
    public function upgradeFileSystemWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->capacity)) {
            $query['Capacity'] = $request->capacity;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpgradeFileSystem',
            'version'     => '2017-06-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpgradeFileSystemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Scales up an Extreme NAS file system or a Cloud Parallel File Storage (CPFS) file system.
     *  *
     * @description *   Only Extreme NAS file systems and CPFS file systems can be scaled up. CPFS file systems are available only on the China site (aliyun.com).
     * *   A General-purpose NAS file system is automatically scaled up. You do not need to call this operation to scale up a General-purpose NAS file system.
     *  *
     * @param UpgradeFileSystemRequest $request UpgradeFileSystemRequest
     *
     * @return UpgradeFileSystemResponse UpgradeFileSystemResponse
     */
    public function upgradeFileSystem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeFileSystemWithOptions($request, $runtime);
    }
}
