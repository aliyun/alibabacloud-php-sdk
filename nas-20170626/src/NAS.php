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
use AlibabaCloud\SDK\NAS\V20170626\Models\CancelDataFlowTaskRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\CancelDataFlowTaskResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\CancelDirQuotaRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\CancelDirQuotaResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\CancelLifecycleRetrieveJobRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\CancelLifecycleRetrieveJobResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\CancelRecycleBinJobRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\CancelRecycleBinJobResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\ChangeResourceGroupRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\ChangeResourceGroupResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateAccessGroupRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateAccessGroupResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateAccessRuleRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateAccessRuleResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateAutoSnapshotPolicyRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateAutoSnapshotPolicyResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateDataFlowRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateDataFlowResponse;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateDataFlowTaskRequest;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateDataFlowTaskResponse;
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
     * The API operation is available only for CPFS file systems.
     *   *
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
     * The API operation is available only for CPFS file systems.
     *   *
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
     * ## Limits
     *   * *   Each tag includes a TagKey and a TagValue.
     *   * *   Placeholders at the start and end of each TagKey and TagValue are automatically removed. These placeholders include the spacebar ( ), tab (\\t), line break (\\n), and carriage return (\\r).
     *   * *   You must specify a TagKey. You can leave a TagValue empty.
     *   * *   A TagKey and TagValue are not case-sensitive.
     *   * *   A TagKey can be a maximum of 64 characters in length. A TagValue can be a maximum of 128 characters in length.
     *   * *   You can add a maximum of 10 tags to a file system at a time. If you add two tags with the same TagKey, the new tag added will overwrite the existing tag.
     *   * *   If you remove a tag from all linked file systems, the tag is automatically deleted.
     *   *
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
     * ## Limits
     *   * *   Each tag includes a TagKey and a TagValue.
     *   * *   Placeholders at the start and end of each TagKey and TagValue are automatically removed. These placeholders include the spacebar ( ), tab (\\t), line break (\\n), and carriage return (\\r).
     *   * *   You must specify a TagKey. You can leave a TagValue empty.
     *   * *   A TagKey and TagValue are not case-sensitive.
     *   * *   A TagKey can be a maximum of 64 characters in length. A TagValue can be a maximum of 128 characters in length.
     *   * *   You can add a maximum of 10 tags to a file system at a time. If you add two tags with the same TagKey, the new tag added will overwrite the existing tag.
     *   * *   If you remove a tag from all linked file systems, the tag is automatically deleted.
     *   *
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
     * *   The snapshot feature is in public preview and is provided free of charge. [Apsara File Storage NAS Service Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed in public preview.
     *   * *   Only advanced Extreme NAS file systems support this feature.
     *   * *   You can apply only one automatic snapshot policy to each file system.
     *   * *   Each automatic snapshot policy can be applied to multiple file systems.
     *   * *   If an automatic snapshot policy is applied to a file system, you can call the ApplyAutoSnapshotPolicy operation to change the automatic snapshot policy.
     *   *
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
     * *   The snapshot feature is in public preview and is provided free of charge. [Apsara File Storage NAS Service Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed in public preview.
     *   * *   Only advanced Extreme NAS file systems support this feature.
     *   * *   You can apply only one automatic snapshot policy to each file system.
     *   * *   Each automatic snapshot policy can be applied to multiple file systems.
     *   * *   If an automatic snapshot policy is applied to a file system, you can call the ApplyAutoSnapshotPolicy operation to change the automatic snapshot policy.
     *   *
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
     * *   This operation is available only to Cloud Parallel File Storage (CPFS) file systems on the China site (aliyun.com).
     *   * *   Only CPFS V2.2.0 and later support dataflows. You can view the version information on the file system details page in the console.
     *   * *   You can add AutoRefresh configurations only to the dataflows that are in the `Running` state.
     *   * *   You can add a maximum of five AutoRefresh configurations to a dataflow.
     *   * *   It generally takes 2 to 5 minutes to create an AutoRefresh configuration. You can call the [DescribeDataFlows](~~336901~~) operation to query the dataflow status.
     *   * *   AutoRefresh depends on the object modification events collected by EventBridge from the source Object Storage Service (OSS) bucket. You must first [activate EventBridge](~~182246~~).
     *   *     **
     *   *     **Note** The event buses and event rules created for CPFS in the EventBridge console contain the `Create for cpfs auto refresh` description. The event buses and event rules cannot be modified or deleted. Otherwise, AutoRefresh cannot work properly.
     *   * *   The AutoRefresh configuration applies only to the prefix and is specified by the RefreshPath parameter. When you add an AutoRefresh configuration to the prefix for a CPFS dataflow, an event bus is created at the user side and an event rule is created for the prefix of the source OSS bucket. When an object is modified in the prefix of the source OSS bucket, an OSS event is generated in the EventBridge console. The event is processed by the CPFS dataflow.
     *   * *   After AutoRefresh is configured, if the data in the source OSS bucket is updated, the updated metadata is automatically synchronized to the CPFS file system. You can load the updated data when you access files, or run a dataflow task to load the updated data.
     *   * *   AutoRefreshInterval refers to the interval at which CPFS checks whether data is updated in the prefix of the source OSS bucket. If data is updated, CPFS runs an AutoRefresh task. If the frequency of triggering the object modification event in the source OSS bucket exceeds the processing capability of the CPFS dataflow, AutoRefresh tasks are accumulated, metadata updates are delayed, and the dataflow status becomes Misconfigured. To resolve these issues, you can increase the dataflow specifications or reduce the frequency of triggering the object modification event.
     *   *
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
     * *   This operation is available only to Cloud Parallel File Storage (CPFS) file systems on the China site (aliyun.com).
     *   * *   Only CPFS V2.2.0 and later support dataflows. You can view the version information on the file system details page in the console.
     *   * *   You can add AutoRefresh configurations only to the dataflows that are in the `Running` state.
     *   * *   You can add a maximum of five AutoRefresh configurations to a dataflow.
     *   * *   It generally takes 2 to 5 minutes to create an AutoRefresh configuration. You can call the [DescribeDataFlows](~~336901~~) operation to query the dataflow status.
     *   * *   AutoRefresh depends on the object modification events collected by EventBridge from the source Object Storage Service (OSS) bucket. You must first [activate EventBridge](~~182246~~).
     *   *     **
     *   *     **Note** The event buses and event rules created for CPFS in the EventBridge console contain the `Create for cpfs auto refresh` description. The event buses and event rules cannot be modified or deleted. Otherwise, AutoRefresh cannot work properly.
     *   * *   The AutoRefresh configuration applies only to the prefix and is specified by the RefreshPath parameter. When you add an AutoRefresh configuration to the prefix for a CPFS dataflow, an event bus is created at the user side and an event rule is created for the prefix of the source OSS bucket. When an object is modified in the prefix of the source OSS bucket, an OSS event is generated in the EventBridge console. The event is processed by the CPFS dataflow.
     *   * *   After AutoRefresh is configured, if the data in the source OSS bucket is updated, the updated metadata is automatically synchronized to the CPFS file system. You can load the updated data when you access files, or run a dataflow task to load the updated data.
     *   * *   AutoRefreshInterval refers to the interval at which CPFS checks whether data is updated in the prefix of the source OSS bucket. If data is updated, CPFS runs an AutoRefresh task. If the frequency of triggering the object modification event in the source OSS bucket exceeds the processing capability of the CPFS dataflow, AutoRefresh tasks are accumulated, metadata updates are delayed, and the dataflow status becomes Misconfigured. To resolve these issues, you can increase the dataflow specifications or reduce the frequency of triggering the object modification event.
     *   *
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
     * *   The snapshot feature is in public preview and is provided free of charge. [Apsara File Storage NAS Service Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed in public preview.
     *   * *   Only advanced Extreme NAS file systems support this feature.
     *   *
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
     * *   The snapshot feature is in public preview and is provided free of charge. [Apsara File Storage NAS Service Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed in public preview.
     *   * *   Only advanced Extreme NAS file systems support this feature.
     *   *
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
     * *   This operation is available only to Cloud Parallel File Storage (CPFS) file systems on the China site (aliyun.com).
     *   * *   Only CPFS V2.2.0 and later support dataflows. You can view the version information on the file system details page in the console.
     *   * *   You can cancel AutoRefresh configurations only for the dataflows that are in the `Running` or `Stopped` state.
     *   * *   It generally takes 2 to 5 minutes to cancel the AutoRefresh configurations. You can call the [DescribeDataFlows](~~336901~~) operation to query the status of the AutoRefresh tasks.
     *   *
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
     * *   This operation is available only to Cloud Parallel File Storage (CPFS) file systems on the China site (aliyun.com).
     *   * *   Only CPFS V2.2.0 and later support dataflows. You can view the version information on the file system details page in the console.
     *   * *   You can cancel AutoRefresh configurations only for the dataflows that are in the `Running` or `Stopped` state.
     *   * *   It generally takes 2 to 5 minutes to cancel the AutoRefresh configurations. You can call the [DescribeDataFlows](~~336901~~) operation to query the status of the AutoRefresh tasks.
     *   *
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
     * *   This operation is available only to Cloud Parallel File Storage (CPFS) file systems on the China site (aliyun.com).
     *   * *   Only CPFS V2.2.0 and later support dataflow tasks. You can view the version information on the file system details page in the console.
     *   * *   You can cancel only the dataflow tasks that are in the `Pending` and `Executing` states.
     *   * *   It generally takes 5 to 10 minutes to cancel a dataflow task. You can query the task execution status by calling the [DescribeDataFlowTasks](~~2402275~~) operation.
     *   *
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
     * *   This operation is available only to Cloud Parallel File Storage (CPFS) file systems on the China site (aliyun.com).
     *   * *   Only CPFS V2.2.0 and later support dataflow tasks. You can view the version information on the file system details page in the console.
     *   * *   You can cancel only the dataflow tasks that are in the `Pending` and `Executing` states.
     *   * *   It generally takes 5 to 10 minutes to cancel a dataflow task. You can query the task execution status by calling the [DescribeDataFlowTasks](~~2402275~~) operation.
     *   *
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
     * Only General-purpose file systems support the directory quota feature.
     *   *
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
     * Only General-purpose file systems support the directory quota feature.
     *   *
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
     * Only General-purpose NAS file systems support this operation.
     *   *
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
     * Only General-purpose NAS file systems support this operation.
     *   *
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
     * *   Only General-purpose NAS file systems support this operation.
     *   * *   You can cancel only jobs that are in the Running state. You cannot cancel jobs that are in the PartialSuccess, Success, Fail, or Cancelled state.
     *   * *   If you cancel a running job that permanently deletes files, you cannot restore the files that are already permanently deleted.
     *   * *   If you cancel a running job that restores files, you can query the restored files from the file system, and query the unrestored files from the recycle bin.
     *   *
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
     * *   Only General-purpose NAS file systems support this operation.
     *   * *   You can cancel only jobs that are in the Running state. You cannot cancel jobs that are in the PartialSuccess, Success, Fail, or Cancelled state.
     *   * *   If you cancel a running job that permanently deletes files, you cannot restore the files that are already permanently deleted.
     *   * *   If you cancel a running job that restores files, you can query the restored files from the file system, and query the unrestored files from the recycle bin.
     *   *
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
     * @param ChangeResourceGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ChangeResourceGroupResponse
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
     * @param CreateAccessGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateAccessGroupResponse
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
     * @param CreateAccessRuleRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateAccessRuleResponse
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
     * *   The snapshot feature is in public preview and is provided free of charge. [Apsara File Storage NAS Service Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed in public preview.
     *   * *   Only advanced Extreme NAS file systems support this feature.
     *   * *   You can create a maximum of 100 automatic snapshot policies in each region for an Alibaba Cloud account.
     *   * *   If an auto snapshot is being created when the scheduled time for a new auto snapshot arrives, the creation of the new snapshot is skipped. This occurs if the file system stores a large volume of data. For example, you have scheduled auto snapshots to be created at 09:00:00, 10:00:00, 11:00:00, and 12:00:00 for a file system. The system starts to create an auto snapshot at 09:00:00 and does not complete the process until 10:20:00. The process takes 80 minutes because the file system has a large volume of data. In this case, the system does not create an auto snapshot at 10:00:00, but creates an auto snapshot at 11:00:00.
     *   * *   A maximum of 128 auto snapshots can be created for a file system. If the upper limit is reached, the earliest auto snapshot is deleted. This rule does not apply to manual snapshots.
     *   * *   If you modify the retention period of an automatic snapshot policy, the modification applies only to subsequent snapshots, but not to the existing snapshots.
     *   * *   If an auto snapshot is being created for a file system, you cannot create a manual snapshot for the file system. You must wait after the auto snapshot is created.
     *   * *   You can only apply automatic snapshot policies to a file system that is in the Running state.
     *   * *   All auto snapshots are named in the `auto_yyyyMMdd_X` format, where: `auto` indicates that the snapshot is created based on an automatic snapshot policy. `yyyyMMdd` indicates the date on which the snapshot is created. `y` indicates the year. `M` indicates the month. `d` indicates the day. `X` indicates the ordinal number of the snapshot on the current day. For example, `auto_20201018_1` indicates the first auto snapshot that was created on October 18, 2020.
     *   * *   After an automatic snapshot policy is created, you can call the ApplyAutoSnapshotPolicy operation to apply the policy to a file system and call the ModifyAutoSnapshotPolicy operation to modify the policy.
     *   *
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
     * *   The snapshot feature is in public preview and is provided free of charge. [Apsara File Storage NAS Service Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed in public preview.
     *   * *   Only advanced Extreme NAS file systems support this feature.
     *   * *   You can create a maximum of 100 automatic snapshot policies in each region for an Alibaba Cloud account.
     *   * *   If an auto snapshot is being created when the scheduled time for a new auto snapshot arrives, the creation of the new snapshot is skipped. This occurs if the file system stores a large volume of data. For example, you have scheduled auto snapshots to be created at 09:00:00, 10:00:00, 11:00:00, and 12:00:00 for a file system. The system starts to create an auto snapshot at 09:00:00 and does not complete the process until 10:20:00. The process takes 80 minutes because the file system has a large volume of data. In this case, the system does not create an auto snapshot at 10:00:00, but creates an auto snapshot at 11:00:00.
     *   * *   A maximum of 128 auto snapshots can be created for a file system. If the upper limit is reached, the earliest auto snapshot is deleted. This rule does not apply to manual snapshots.
     *   * *   If you modify the retention period of an automatic snapshot policy, the modification applies only to subsequent snapshots, but not to the existing snapshots.
     *   * *   If an auto snapshot is being created for a file system, you cannot create a manual snapshot for the file system. You must wait after the auto snapshot is created.
     *   * *   You can only apply automatic snapshot policies to a file system that is in the Running state.
     *   * *   All auto snapshots are named in the `auto_yyyyMMdd_X` format, where: `auto` indicates that the snapshot is created based on an automatic snapshot policy. `yyyyMMdd` indicates the date on which the snapshot is created. `y` indicates the year. `M` indicates the month. `d` indicates the day. `X` indicates the ordinal number of the snapshot on the current day. For example, `auto_20201018_1` indicates the first auto snapshot that was created on October 18, 2020.
     *   * *   After an automatic snapshot policy is created, you can call the ApplyAutoSnapshotPolicy operation to apply the policy to a file system and call the ModifyAutoSnapshotPolicy operation to modify the policy.
     *   *
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
     * *   Billing
     *   *     *   If you create a dataflow, you are charged for using the dataflow throughput. For more information, see [Billing methods and billable items of CPFS](~~111858~~).
     *   *     *   When you configure the AutoRefresh feature for a dataflow, CPFS must use EventBridge to collect object modification events from the source Object Storage Service (OSS) bucket. Event fees are incurred. For more information, see [Billing of EventBridge](~~163752~~).
     *   * *   Dataflow specifications
     *   *     *   The dataflow throughput supports the following specifications: 600 MB/s, 1,200 MB/s, and 1,500 MB/s. The dataflow throughput is the maximum transmission bandwidth that can be reached when data is imported or exported for a dataflow.
     *   *     *   When you create a dataflow, the vSwitch IP addresses used by a CPFS mount target are consumed. Make sure that the vSwitch can provide sufficient IP addresses.
     *   *     *   Inventory query: If you set the DryRun parameter to true, you can check whether the resources for the dataflow whose throughput is changed meet the requirements.
     *   * *   Fileset
     *   *     *   The destination for a dataflow is a fileset in the CPFS file system. A fileset is a new directory tree structure (a small file directory) in a CPFS file system. Each fileset independently manages an inode space.
     *   *     *   When you create a dataflow, the related fileset must already exist and cannot be nested with other filesets. Only one dataflow can be created in a fileset, which corresponds to one source storage.
     *   *     *   A fileset supports a maximum of one million files. If the number of files imported from an OSS bucket into the fileset exceeds the upper limit, the `no space` error message is returned when you add new files.
     *   *     **
     *   *     **Note** If data already exists in the fileset, after you create a dataflow, the existing data in the fileset is cleared and replaced with the data synchronized from the OSS bucket.
     *   * *   Source storage
     *   *     *   The source storage is an OSS bucket. SourceStorage for a dataflow must be an OSS bucket. The prefix of an OSS bucket is not supported.
     *   *     *   CPFS dataflows support both encrypted and unencrypted access to OSS. If you select SSL-encrypted access to OSS, make sure that encryption in transit for OSS buckets supports encrypted access.
     *   *     *   If dataflows for multiple CPFS file systems or multiple dataflows for the same CPFS file system are stored in the same OSS bucket, you must enable versioning for the OSS bucket to prevent data conflicts caused by data export from multiple CPFS file systems to one OSS bucket.
     *   *     *   Dataflows are not supported for OSS buckets across regions. The OSS bucket must reside in the same region as the CPFS file system.
     *   *         **
     *   *         **Note** Before you create a dataflow, you must configure a tag (key: cpfs-dataflow, value: true) for the source OSS bucket. This way, the created dataflow can access the data in the OSS bucket. When a dataflow is being used, do not delete or modify the tag. Otherwise, the dataflow for CPFS cannot access the data in the OSS bucket.
     *   * *   AutoRefresh
     *   *     *   After AutoRefresh is configured, if the data in the source OSS bucket is updated, the updated metadata is automatically synchronized to the CPFS file system. You can load the updated data when you access files, or run a dataflow task to load the updated data.
     *   *     *   AutoRefresh depends on the object modification events collected by EventBridge from the source OSS bucket. You must first [activate EventBridge](~~182246~~).
     *   *     *   The AutoRefresh configuration applies only to the prefix and is specified by the RefreshPath parameter. You can configure a maximum of five AutoRefresh directories for a dataflow.
     *   *     *   AutoRefreshInterval refers to the interval at which CPFS checks whether data is updated in the prefix of the source OSS bucket. If data is updated, CPFS runs an AutoRefresh task. If the frequency of triggering the object modification event in the source OSS bucket exceeds the processing capability of the CPFS dataflow, AutoRefresh tasks are accumulated, metadata updates are delayed, and the dataflow status becomes `Misconfigured`. To resolve these issues, you can increase the dataflow specifications or reduce the frequency of triggering the object modification event.
     *   *     *   When you add an AutoRefresh configuration to the prefix for a CPFS dataflow, an event bus is created at the user side and an event rule is created for the prefix of the source OSS bucket. When an object is modified in the prefix of the source OSS bucket, an OSS event is generated in the EventBridge console. The event is processed by the CPFS dataflow.
     *   *     **
     *   *     **Note** The event buses and event rules created for CPFS in the EventBridge console contain the `Create for cpfs auto refresh` description. The event buses and event rules cannot be modified or deleted. Otherwise, AutoRefresh cannot work properly
     *   * *   Permissions
     *   *     When you create a dataflow, CPFS obtains two service-linked roles: `AliyunServiceRoleForNasOssDataflow` and `AliyunServiceRoleForNasEventNotification`. For more information, see [CPFS service-linked roles](~~185138~~).
     *   * *   Basic operations
     *   *     *   Only CPFS V2.2.0 and later support dataflows.
     *   *     *   You can create a dataflow only if the CPFS file system is in the Running state.
     *   *     *   A maximum of 10 dataflows can be created for a CPFS file system.
     *   *     *   It generally takes 2 to 5 minutes to create a dataflow. You can call the DescribeDataFlows operation to check whether the dataflow has been created.
     *   *
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
        if (!Utils::isUnset($request->fsetId)) {
            $query['FsetId'] = $request->fsetId;
        }
        if (!Utils::isUnset($request->sourceSecurityType)) {
            $query['SourceSecurityType'] = $request->sourceSecurityType;
        }
        if (!Utils::isUnset($request->sourceStorage)) {
            $query['SourceStorage'] = $request->sourceStorage;
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
     * *   Billing
     *   *     *   If you create a dataflow, you are charged for using the dataflow throughput. For more information, see [Billing methods and billable items of CPFS](~~111858~~).
     *   *     *   When you configure the AutoRefresh feature for a dataflow, CPFS must use EventBridge to collect object modification events from the source Object Storage Service (OSS) bucket. Event fees are incurred. For more information, see [Billing of EventBridge](~~163752~~).
     *   * *   Dataflow specifications
     *   *     *   The dataflow throughput supports the following specifications: 600 MB/s, 1,200 MB/s, and 1,500 MB/s. The dataflow throughput is the maximum transmission bandwidth that can be reached when data is imported or exported for a dataflow.
     *   *     *   When you create a dataflow, the vSwitch IP addresses used by a CPFS mount target are consumed. Make sure that the vSwitch can provide sufficient IP addresses.
     *   *     *   Inventory query: If you set the DryRun parameter to true, you can check whether the resources for the dataflow whose throughput is changed meet the requirements.
     *   * *   Fileset
     *   *     *   The destination for a dataflow is a fileset in the CPFS file system. A fileset is a new directory tree structure (a small file directory) in a CPFS file system. Each fileset independently manages an inode space.
     *   *     *   When you create a dataflow, the related fileset must already exist and cannot be nested with other filesets. Only one dataflow can be created in a fileset, which corresponds to one source storage.
     *   *     *   A fileset supports a maximum of one million files. If the number of files imported from an OSS bucket into the fileset exceeds the upper limit, the `no space` error message is returned when you add new files.
     *   *     **
     *   *     **Note** If data already exists in the fileset, after you create a dataflow, the existing data in the fileset is cleared and replaced with the data synchronized from the OSS bucket.
     *   * *   Source storage
     *   *     *   The source storage is an OSS bucket. SourceStorage for a dataflow must be an OSS bucket. The prefix of an OSS bucket is not supported.
     *   *     *   CPFS dataflows support both encrypted and unencrypted access to OSS. If you select SSL-encrypted access to OSS, make sure that encryption in transit for OSS buckets supports encrypted access.
     *   *     *   If dataflows for multiple CPFS file systems or multiple dataflows for the same CPFS file system are stored in the same OSS bucket, you must enable versioning for the OSS bucket to prevent data conflicts caused by data export from multiple CPFS file systems to one OSS bucket.
     *   *     *   Dataflows are not supported for OSS buckets across regions. The OSS bucket must reside in the same region as the CPFS file system.
     *   *         **
     *   *         **Note** Before you create a dataflow, you must configure a tag (key: cpfs-dataflow, value: true) for the source OSS bucket. This way, the created dataflow can access the data in the OSS bucket. When a dataflow is being used, do not delete or modify the tag. Otherwise, the dataflow for CPFS cannot access the data in the OSS bucket.
     *   * *   AutoRefresh
     *   *     *   After AutoRefresh is configured, if the data in the source OSS bucket is updated, the updated metadata is automatically synchronized to the CPFS file system. You can load the updated data when you access files, or run a dataflow task to load the updated data.
     *   *     *   AutoRefresh depends on the object modification events collected by EventBridge from the source OSS bucket. You must first [activate EventBridge](~~182246~~).
     *   *     *   The AutoRefresh configuration applies only to the prefix and is specified by the RefreshPath parameter. You can configure a maximum of five AutoRefresh directories for a dataflow.
     *   *     *   AutoRefreshInterval refers to the interval at which CPFS checks whether data is updated in the prefix of the source OSS bucket. If data is updated, CPFS runs an AutoRefresh task. If the frequency of triggering the object modification event in the source OSS bucket exceeds the processing capability of the CPFS dataflow, AutoRefresh tasks are accumulated, metadata updates are delayed, and the dataflow status becomes `Misconfigured`. To resolve these issues, you can increase the dataflow specifications or reduce the frequency of triggering the object modification event.
     *   *     *   When you add an AutoRefresh configuration to the prefix for a CPFS dataflow, an event bus is created at the user side and an event rule is created for the prefix of the source OSS bucket. When an object is modified in the prefix of the source OSS bucket, an OSS event is generated in the EventBridge console. The event is processed by the CPFS dataflow.
     *   *     **
     *   *     **Note** The event buses and event rules created for CPFS in the EventBridge console contain the `Create for cpfs auto refresh` description. The event buses and event rules cannot be modified or deleted. Otherwise, AutoRefresh cannot work properly
     *   * *   Permissions
     *   *     When you create a dataflow, CPFS obtains two service-linked roles: `AliyunServiceRoleForNasOssDataflow` and `AliyunServiceRoleForNasEventNotification`. For more information, see [CPFS service-linked roles](~~185138~~).
     *   * *   Basic operations
     *   *     *   Only CPFS V2.2.0 and later support dataflows.
     *   *     *   You can create a dataflow only if the CPFS file system is in the Running state.
     *   *     *   A maximum of 10 dataflows can be created for a CPFS file system.
     *   *     *   It generally takes 2 to 5 minutes to create a dataflow. You can call the DescribeDataFlows operation to check whether the dataflow has been created.
     *   *
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
     * *   This operation is available only to Cloud Parallel File Storage (CPFS) file systems on the China site (aliyun.com).
     *   * *   Dataflow tasks can be created only in CPFS V2.2.0 and later. You can view the version information on the file system details page in the console.
     *   * *   You can create a dataflow task only for a dataflow that is in the Running state.
     *   * *   Dataflow tasks are executed asynchronously. You can call the [DescribeDataFlowTasks](~~336914~~) operation to query the task execution status. The task duration depends on the amount of data to be imported and exported. If a large amount of data exists, we recommend that you create multiple tasks.
     *   * *   When you manually run a dataflow task, the automatic data update task for the dataflow is interrupted and enters the pending state.
     *   *
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
     * *   This operation is available only to Cloud Parallel File Storage (CPFS) file systems on the China site (aliyun.com).
     *   * *   Dataflow tasks can be created only in CPFS V2.2.0 and later. You can view the version information on the file system details page in the console.
     *   * *   You can create a dataflow task only for a dataflow that is in the Running state.
     *   * *   Dataflow tasks are executed asynchronously. You can call the [DescribeDataFlowTasks](~~336914~~) operation to query the task execution status. The task duration depends on the amount of data to be imported and exported. If a large amount of data exists, we recommend that you create multiple tasks.
     *   * *   When you manually run a dataflow task, the automatic data update task for the dataflow is interrupted and enters the pending state.
     *   *
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
     * *   This operation is only available to some users.
     *   * *   This operation supports only General-purpose NAS file systems that use the Server Message Block (SMB) protocol and have Resource Access Management (RAM) enabled.
     *   *
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
     * *   This operation is only available to some users.
     *   * *   This operation supports only General-purpose NAS file systems that use the Server Message Block (SMB) protocol and have Resource Access Management (RAM) enabled.
     *   *
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
     * *   Before you call this operation, you must understand the billing and pricing of Apsara File Storage NAS. For more information, see [Billing](~~178365~~) and [Pricing](https://www.alibabacloud.com/product/nas/pricing).
     *   * *   Before you create a file system, you must complete real-name verification.
     *   * *   When you call this operation, a service-linked role of NAS is automatically created. For more information, see [Manage the service-linked roles of NAS](~~208530~~).
     *   *
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
     * *   Before you call this operation, you must understand the billing and pricing of Apsara File Storage NAS. For more information, see [Billing](~~178365~~) and [Pricing](https://www.alibabacloud.com/product/nas/pricing).
     *   * *   Before you create a file system, you must complete real-name verification.
     *   * *   When you call this operation, a service-linked role of NAS is automatically created. For more information, see [Manage the service-linked roles of NAS](~~208530~~).
     *   *
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
     * *   This operation is available only to Cloud Parallel File Storage (CPFS) file systems on the China site (aliyun.com).
     *   * *   Only CPFS V2.2.0 and later support fileset creation. You can view the version information on the file system details page in the console.
     *   * *   A maximum of 10 filesets can be created for a CPFS file system.
     *   * *   The maximum depth supported by a fileset is eight levels. The depth of the root directory / is 0 levels. For example, the /test/aaa/ccc/ fileset has three levels.
     *   * *   Nested filesets are not supported. If a fileset is specified as a parent directory, its subdirectory cannot be a fileset.
     *   * *   A fileset supports a maximum of one million files. If the number of files exceeds the upper limit, the `no space` error message is returned when you add new files.
     *   *
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
     * *   This operation is available only to Cloud Parallel File Storage (CPFS) file systems on the China site (aliyun.com).
     *   * *   Only CPFS V2.2.0 and later support fileset creation. You can view the version information on the file system details page in the console.
     *   * *   A maximum of 10 filesets can be created for a CPFS file system.
     *   * *   The maximum depth supported by a fileset is eight levels. The depth of the root directory / is 0 levels. For example, the /test/aaa/ccc/ fileset has three levels.
     *   * *   Nested filesets are not supported. If a fileset is specified as a parent directory, its subdirectory cannot be a fileset.
     *   * *   A fileset supports a maximum of one million files. If the number of files exceeds the upper limit, the `no space` error message is returned when you add new files.
     *   *
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
     * @param CreateLDAPConfigRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateLDAPConfigResponse
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
     * *   You can create lifecycle policies only for General-purpose NAS file systems.
     *   * *   You can create up to 20 lifecycle policies in each region within an Alibaba Cloud account.
     *   *
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
     * *   You can create lifecycle policies only for General-purpose NAS file systems.
     *   * *   You can create up to 20 lifecycle policies in each region within an Alibaba Cloud account.
     *   *
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
     * *   Only General-purpose NAS file systems support this operation.
     *   * *   You can run a maximum of 20 data retrieval tasks in each region within an Alibaba Cloud account.
     *   *
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
     * *   Only General-purpose NAS file systems support this operation.
     *   * *   You can run a maximum of 20 data retrieval tasks in each region within an Alibaba Cloud account.
     *   *
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
     * @param CreateLogAnalysisRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateLogAnalysisResponse
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
     * *   After you call the CreateMountTarget operation, a mount target is not immediately created. Therefore, we recommend that you call the DescribeMountTargets operation to query the status of the mount target. If the mount target is in the **Active** state, you can then mount the file system. Otherwise, the file system may fail to be mounted.
     *   * *   When you call this operation, a service-linked role of NAS is automatically created. For more information, see [Manage the service-linked roles of NAS](~~208530~~).
     *   *
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
     * *   After you call the CreateMountTarget operation, a mount target is not immediately created. Therefore, we recommend that you call the DescribeMountTargets operation to query the status of the mount target. If the mount target is in the **Active** state, you can then mount the file system. Otherwise, the file system may fail to be mounted.
     *   * *   When you call this operation, a service-linked role of NAS is automatically created. For more information, see [Manage the service-linked roles of NAS](~~208530~~).
     *   *
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
     * *   This operation is available only to Cloud Parallel File Storage (CPFS) file systems on the China site (aliyun.com).
     *   * *   Prerequisites
     *   *     A protocol service is created.
     *   * *   Others
     *   *     *   The virtual private cloud (VPC) CIDR block of the export directory for the protocol service cannot overlap with the VPC CIDR block of the file system.
     *   *     *   The VPC CIDR blocks of multiple export directories of a protocol service cannot overlap.
     *   *     *   You can create a maximum of 10 export directories for a protocol service.
     *   *     *   When you create export directories for a protocol service, a maximum of 32 IP addresses that are allocated by the specified vSwitch are used. Make sure that the vSwitch can provide sufficient IP addresses.
     *   *
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
     * *   This operation is available only to Cloud Parallel File Storage (CPFS) file systems on the China site (aliyun.com).
     *   * *   Prerequisites
     *   *     A protocol service is created.
     *   * *   Others
     *   *     *   The virtual private cloud (VPC) CIDR block of the export directory for the protocol service cannot overlap with the VPC CIDR block of the file system.
     *   *     *   The VPC CIDR blocks of multiple export directories of a protocol service cannot overlap.
     *   *     *   You can create a maximum of 10 export directories for a protocol service.
     *   *     *   When you create export directories for a protocol service, a maximum of 32 IP addresses that are allocated by the specified vSwitch are used. Make sure that the vSwitch can provide sufficient IP addresses.
     *   *
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
     * *   This operation is available only to CPFS file systems on the China site (aliyun.com).
     *   * *   Only CPFS V2.3.0 and later support protocol services. You can query the version information of the file system by calling the [DescribeFileSystems](~~2402188.~~) operation.
     *   * *   Protocol service types
     *   *     Protocol services are classified into general-purpose protocol services and cache protocol services. Different from general-purpose protocol services, cache protocol services can cache hot data. If data exists in the cache, the bandwidth of the cache protocol service may exceed the bandwidth of the CPFS file system, reaching the maximum bandwidth specified for the protocol service.
     *   *     *   General-purpose protocol services: provide NFS access and [directory-level mount targets](~~427175~~) for CPFS file systems. You do not need to configure a POSIX client to manage clusters. General-purpose protocol services are provided free of charge.
     *   *     *   Cache protocol services: provide the server memory cache based on the least recently used (LRU) policy. When data is cached in the memory, CPFS provides higher internal bandwidth. Cache protocol services are divided into Cache L1 and Cache L2 specifications. The differences are the internal bandwidth size and memory cache size.
     *   *        >   Note You are charged for using cache protocol services, which are in invitational preview. For more information about the billing method of cache protocol services, see [Billable items](~~111858~~). If you have any feedback or questions, you can join the DingTalk group (group number: 31045006299).
     *   * *   Protocol type
     *   *     Only NFSv3 is supported.
     *   * *   Others
     *   *     *   Only one protocol service can be created for a CPFS file system.
     *   *     *   A protocol service can use a maximum of 32 IP addresses that are allocated by a specified vSwitch. Make sure that the vSwitch can provide sufficient IP addresses.
     *   *
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
     * *   This operation is available only to CPFS file systems on the China site (aliyun.com).
     *   * *   Only CPFS V2.3.0 and later support protocol services. You can query the version information of the file system by calling the [DescribeFileSystems](~~2402188.~~) operation.
     *   * *   Protocol service types
     *   *     Protocol services are classified into general-purpose protocol services and cache protocol services. Different from general-purpose protocol services, cache protocol services can cache hot data. If data exists in the cache, the bandwidth of the cache protocol service may exceed the bandwidth of the CPFS file system, reaching the maximum bandwidth specified for the protocol service.
     *   *     *   General-purpose protocol services: provide NFS access and [directory-level mount targets](~~427175~~) for CPFS file systems. You do not need to configure a POSIX client to manage clusters. General-purpose protocol services are provided free of charge.
     *   *     *   Cache protocol services: provide the server memory cache based on the least recently used (LRU) policy. When data is cached in the memory, CPFS provides higher internal bandwidth. Cache protocol services are divided into Cache L1 and Cache L2 specifications. The differences are the internal bandwidth size and memory cache size.
     *   *        >   Note You are charged for using cache protocol services, which are in invitational preview. For more information about the billing method of cache protocol services, see [Billable items](~~111858~~). If you have any feedback or questions, you can join the DingTalk group (group number: 31045006299).
     *   * *   Protocol type
     *   *     Only NFSv3 is supported.
     *   * *   Others
     *   *     *   Only one protocol service can be created for a CPFS file system.
     *   *     *   A protocol service can use a maximum of 32 IP addresses that are allocated by a specified vSwitch. Make sure that the vSwitch can provide sufficient IP addresses.
     *   *
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
     * *   Only General-purpose NAS file systems support this operation.
     *   * *   If you permanently delete a directory, the files in the directory are recursively cleared.
     *   * *   You can run only one job at a time for a single file system to permanently delete the files from the file system. You cannot create a restoration or deletion job when a file or directory is being deleted.
     *   *
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
     * *   Only General-purpose NAS file systems support this operation.
     *   * *   If you permanently delete a directory, the files in the directory are recursively cleared.
     *   * *   You can run only one job at a time for a single file system to permanently delete the files from the file system. You cannot create a restoration or deletion job when a file or directory is being deleted.
     *   *
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
     * ### Usage notes
     *   * *   Only General-purpose NAS file systems support this operation.
     *   * *   You can run only one job at a time for a single file system to restore files to or clear files from the file system. You cannot create a restore or cleanup job when files are being restored from the recycle bin.
     *   * *   You can restore only one file or directory in a single restore job. If you restore a specified directory, all files in the directory are recursively restored.
     *   * *   After files are restored, the data of the files is defragmented. When the data is being defragmented, the read performance is slightly degraded.
     *   *
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
     * ### Usage notes
     *   * *   Only General-purpose NAS file systems support this operation.
     *   * *   You can run only one job at a time for a single file system to restore files to or clear files from the file system. You cannot create a restore or cleanup job when files are being restored from the recycle bin.
     *   * *   You can restore only one file or directory in a single restore job. If you restore a specified directory, all files in the directory are recursively restored.
     *   * *   After files are restored, the data of the files is defragmented. When the data is being defragmented, the read performance is slightly degraded.
     *   *
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
     * *   The snapshot feature is in public preview and is provided free of charge. [Apsara File Storage NAS Service Level Agreement (SLA)](https://www.alibabacloud.com/help/zh/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed in public preview.
     *   * *   Only advanced Extreme NAS file systems support the snapshot feature.
     *   * *   You can create a maximum of 128 snapshots for a file system.
     *   * *   The compute node on which a file system is mounted must function as expected. Otherwise, you cannot create a snapshot for the file system.
     *   * *   You can create only one snapshot for a file system at a time.
     *   * *   If the file system expires when a snapshot is being created, the file system is released and the snapshot is deleted.
     *   * *   When you create a snapshot for a file system, the I/O performance of the file system may be degraded for a short period of time. We recommend that you create snapshots during off-peak hours.
     *   * *   A snapshot is a backup of a file system at a specific point in time. After you create a snapshot, incremental data that is generated in the file system will not be synchronized to the snapshot.
     *   * *   Manually created snapshots will not be deleted until 15 days after the service is suspended due to an overdue payment. We recommend that you delete unnecessary snapshots at regular intervals to prevent extra fees incurred by the snapshots.
     *   *
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
     * *   The snapshot feature is in public preview and is provided free of charge. [Apsara File Storage NAS Service Level Agreement (SLA)](https://www.alibabacloud.com/help/zh/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed in public preview.
     *   * *   Only advanced Extreme NAS file systems support the snapshot feature.
     *   * *   You can create a maximum of 128 snapshots for a file system.
     *   * *   The compute node on which a file system is mounted must function as expected. Otherwise, you cannot create a snapshot for the file system.
     *   * *   You can create only one snapshot for a file system at a time.
     *   * *   If the file system expires when a snapshot is being created, the file system is released and the snapshot is deleted.
     *   * *   When you create a snapshot for a file system, the I/O performance of the file system may be degraded for a short period of time. We recommend that you create snapshots during off-peak hours.
     *   * *   A snapshot is a backup of a file system at a specific point in time. After you create a snapshot, incremental data that is generated in the file system will not be synchronized to the snapshot.
     *   * *   Manually created snapshots will not be deleted until 15 days after the service is suspended due to an overdue payment. We recommend that you delete unnecessary snapshots at regular intervals to prevent extra fees incurred by the snapshots.
     *   *
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
     * The default permission group (DEFAULT_VPC_GROUP_NAME) cannot be deleted.
     *   *
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
     * The default permission group (DEFAULT_VPC_GROUP_NAME) cannot be deleted.
     *   *
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
     * Rules in the default permission group (DEFAULT_VPC_GROUP_NAME) cannot be deleted.
     *   *
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
     * Rules in the default permission group (DEFAULT_VPC_GROUP_NAME) cannot be deleted.
     *   *
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
     * *   The snapshot feature is in public preview and is provided free of charge. [Apsara File Storage NAS Service Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed in public preview.
     *   * *   Only advanced Extreme NAS file systems support this feature.
     *   * *   If you delete an automatic snapshot policy that is applied to a file system, snapshots for the file system are no longer created based on the policy.
     *   *
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
     * *   The snapshot feature is in public preview and is provided free of charge. [Apsara File Storage NAS Service Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed in public preview.
     *   * *   Only advanced Extreme NAS file systems support this feature.
     *   * *   If you delete an automatic snapshot policy that is applied to a file system, snapshots for the file system are no longer created based on the policy.
     *   *
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
     * *   This operation is available only to Cloud Parallel File Storage (CPFS) file systems on the China site (aliyun.com).
     *   * *   You can create filesets only in CPFS V2.2.0 and later. You can view the version information on the file system details page in the console.
     *   * *   You can delete the dataflows that are only in the `Running` or `Stopped` state.
     *   * *   After a dataflow is deleted, the resources related to the dataflow are released and cannot be restored. You must create a dataflow again if required.
     *   *
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
     * *   This operation is available only to Cloud Parallel File Storage (CPFS) file systems on the China site (aliyun.com).
     *   * *   You can create filesets only in CPFS V2.2.0 and later. You can view the version information on the file system details page in the console.
     *   * *   You can delete the dataflows that are only in the `Running` or `Stopped` state.
     *   * *   After a dataflow is deleted, the resources related to the dataflow are released and cannot be restored. You must create a dataflow again if required.
     *   *
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
     * *   Before you delete a file system, you must delete all mount targets of the file system.
     *   * *   Before you delete a file system, you must make sure that no lifecycle policy is created for the file system.
     *   * *   After a file system is deleted, the data on the file system cannot be restored. Proceed with caution.
     *   *
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
     * *   Before you delete a file system, you must delete all mount targets of the file system.
     *   * *   Before you delete a file system, you must make sure that no lifecycle policy is created for the file system.
     *   * *   After a file system is deleted, the data on the file system cannot be restored. Proceed with caution.
     *   *
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
     * *   This operation is available only to Cloud Parallel File Storage (CPFS) file systems on the China site (aliyun.com).
     *   * *   Only CPFS V2.2.0 and later support fileset deletion. After you delete a fileset, all data in the fileset is deleted and cannot be restored. Proceed with caution.
     *   *
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
     * *   This operation is available only to Cloud Parallel File Storage (CPFS) file systems on the China site (aliyun.com).
     *   * *   Only CPFS V2.2.0 and later support fileset deletion. After you delete a fileset, all data in the fileset is deleted and cannot be restored. Proceed with caution.
     *   *
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
     * @param DeleteLDAPConfigRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteLDAPConfigResponse
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
     * Only General-purpose NAS file systems support this operation.
     *   *
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
     * Only General-purpose NAS file systems support this operation.
     *   *
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
     * @param DeleteLogAnalysisRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteLogAnalysisResponse
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
     * After you delete a mount target, the mount target cannot be restored. Proceed with caution.
     *   *
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
     * After you delete a mount target, the mount target cannot be restored. Proceed with caution.
     *   *
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
     * This operation is available only to Cloud Parallel File Storage (CPFS) file systems on the China site (aliyun.com).
     *   *
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
     * This operation is available only to Cloud Parallel File Storage (CPFS) file systems on the China site (aliyun.com).
     *   *
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
     * *   This operation is available only to CPFS file systems on the China site (aliyun.com).
     *   * *   When you delete a protocol service, the export directories in the protocol service are also deleted.
     *   *
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
     * *   This operation is available only to CPFS file systems on the China site (aliyun.com).
     *   * *   When you delete a protocol service, the export directories in the protocol service are also deleted.
     *   *
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
     * *   The snapshot feature is in public preview and is provided free of charge. [Apsara File Storage NAS Service Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed in public preview.
     *   * *   Only advanced Extreme NAS file systems support this feature.
     *   *
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
     * *   The snapshot feature is in public preview and is provided free of charge. [Apsara File Storage NAS Service Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed in public preview.
     *   * *   Only advanced Extreme NAS file systems support this feature.
     *   *
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
     * @param DescribeAccessGroupsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeAccessGroupsResponse
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
     * @param DescribeAccessRulesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeAccessRulesResponse
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
     * *   The snapshot feature is in public preview and is provided free of charge. [Apsara File Storage NAS Service Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed in public preview.
     *   * *   Only advanced Extreme NAS file systems support this feature.
     *   *
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
     * *   The snapshot feature is in public preview and is provided free of charge. [Apsara File Storage NAS Service Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed in public preview.
     *   * *   Only advanced Extreme NAS file systems support this feature.
     *   *
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
     * *   The snapshot feature is in public preview and is provided free of charge. [Apsara File Storage NAS Service Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed in public preview.
     *   * *   Only advanced Extreme NAS file systems support this feature.
     *   *
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
     * *   The snapshot feature is in public preview and is provided free of charge. [Apsara File Storage NAS Service Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed in public preview.
     *   * *   Only advanced Extreme NAS file systems support this feature.
     *   *
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
     * The API operation is available only for CPFS file systems.
     *   *
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
     * The API operation is available only for CPFS file systems.
     *   *
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
     * ###.
     *   *
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
     * ###.
     *   *
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
     * *   This operation is available only to Cloud Parallel File Storage (CPFS) file systems on the China site (aliyun.com).
     *   * *   Only CPFS V2.2.0 and later support dataflows. You can view the version information on the file system details page in the console.
     *   * *   In Filters, FsetIds, DataFlowlds, SourceStorage, ThroughputList, and Status support exact match only. FileSystemPath and Description support fuzzy match.
     *   * *   Combined query is supported.
     *   *
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
     * *   This operation is available only to Cloud Parallel File Storage (CPFS) file systems on the China site (aliyun.com).
     *   * *   Only CPFS V2.2.0 and later support dataflows. You can view the version information on the file system details page in the console.
     *   * *   In Filters, FsetIds, DataFlowlds, SourceStorage, ThroughputList, and Status support exact match only. FileSystemPath and Description support fuzzy match.
     *   * *   Combined query is supported.
     *   *
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
     * Only General-purpose NAS file systems support the directory quota feature.
     *   *
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
     * Only General-purpose NAS file systems support the directory quota feature.
     *   *
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
     * @param DescribeFileSystemStatisticsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeFileSystemStatisticsResponse
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
     * @param DescribeFileSystemsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeFileSystemsResponse
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
     * *   This operation is available only to Cloud Parallel File Storage (CPFS) file systems on the China site (aliyun.com).
     *   * *   Only CPFS V2.2.0 and later support filesets. You can view the version information on the file system details page in the console.
     *   * *   In Filters, FsetIds supports exact match only. FileSystemPath and Description support fuzzy match.
     *   * *   Combined query is supported.
     *   *
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
     * *   This operation is available only to Cloud Parallel File Storage (CPFS) file systems on the China site (aliyun.com).
     *   * *   Only CPFS V2.2.0 and later support filesets. You can view the version information on the file system details page in the console.
     *   * *   In Filters, FsetIds supports exact match only. FileSystemPath and Description support fuzzy match.
     *   * *   Combined query is supported.
     *   *
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
     * Only General-purpose NAS file systems support this operation.
     *   *
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
     * Only General-purpose NAS file systems support this operation.
     *   *
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
     * @param DescribeLogAnalysisRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeLogAnalysisResponse
     */
    public function describeLogAnalysisWithOptions($request, $runtime)
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
     * @param DescribeMountTargetsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeMountTargetsResponse
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
     * *   Only General-purpose NAS file systems support this operation.
     *   * *   This operation returns the clients that have accessed the specified file system within the last minute. If the file system is mounted on a client but the client did not access the file system within the last minute, the client is not included in the returned information.
     *   *
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
     * *   Only General-purpose NAS file systems support this operation.
     *   * *   This operation returns the clients that have accessed the specified file system within the last minute. If the file system is mounted on a client but the client did not access the file system within the last minute, the client is not included in the returned information.
     *   *
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
     * @param DescribeNfsAclRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeNfsAclResponse
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
     * This operation is available only to Cloud Parallel File Storage (CPFS) file systems on the China site (aliyun.com).
     *   *
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
     * This operation is available only to Cloud Parallel File Storage (CPFS) file systems on the China site (aliyun.com).
     *   *
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
     * This operation is available only to Cloud Parallel File Storage (CPFS) file systems on the China site (aliyun.com).
     *   *
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
     * This operation is available only to Cloud Parallel File Storage (CPFS) file systems on the China site (aliyun.com).
     *   *
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
     * @param DescribeRegionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRegionsResponse
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
     * @param DescribeSmbAclRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeSmbAclResponse
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
     * *   The snapshot feature is in public preview and is provided free of charge. [Apsara File Storage NAS Service Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed in public preview.
     *   * *   Only advanced Extreme NAS file systems support this feature.
     *   *
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
     * *   The snapshot feature is in public preview and is provided free of charge. [Apsara File Storage NAS Service Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed in public preview.
     *   * *   Only advanced Extreme NAS file systems support this feature.
     *   *
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
     * @param DescribeStoragePackagesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeStoragePackagesResponse
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
     * @param DescribeZonesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeZonesResponse
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
     * *   Only General-purpose NAS file systems support this operation.
     *   * *   If you disable the recycle bin, all files in the recycle bin are permanently deleted.
     *   * *   If you disable and then enable the recycle bin, the recycle bin is empty. You cannot retrieve the deleted files.
     *   *
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
     * *   Only General-purpose NAS file systems support this operation.
     *   * *   If you disable the recycle bin, all files in the recycle bin are permanently deleted.
     *   * *   If you disable and then enable the recycle bin, the recycle bin is empty. You cannot retrieve the deleted files.
     *   *
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
     * @param DisableNfsAclRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DisableNfsAclResponse
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
     * @param DisableSmbAclRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DisableSmbAclResponse
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
     * @param EnableNfsAclRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return EnableNfsAclResponse
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
     * Only General-purpose NAS file systems support this operation.
     *   *
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
     * Only General-purpose NAS file systems support this operation.
     *   *
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
     * @param EnableSmbAclRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return EnableSmbAclResponse
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
     * Only General-purpose NAS file systems support this operation.
     *   *
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
     * Only General-purpose NAS file systems support this operation.
     *   *
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
     * @param GetRecycleBinAttributeRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetRecycleBinAttributeResponse
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
     * Only General-purpose NAS file systems support this operation.
     *   *
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
     * Only General-purpose NAS file systems support this operation.
     *   *
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
     * Only General-purpose NAS file systems support this operation.
     *   *
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
     * Only General-purpose NAS file systems support this operation.
     *   *
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
     * Only General-purpose NAS file systems support this operation.
     *   *
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
     * Only General-purpose NAS file systems support this operation.
     *   *
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
     * *   Only General-purpose NAS file systems support this operation.
     *   * *   You can query a maximum of 50 jobs that are recently executed.
     *   *
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
     * *   Only General-purpose NAS file systems support this operation.
     *   * *   You can query a maximum of 50 jobs that are recently executed.
     *   *
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
     * Only General-purpose NAS file systems support this operation.
     *   *
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
     * Only General-purpose NAS file systems support this operation.
     *   *
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
     * The default permission group (DEFAULT_VPC_GROUP_NAME) cannot be modified.
     *   *
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
     * The default permission group (DEFAULT_VPC_GROUP_NAME) cannot be modified.
     *   *
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
     * The rules in the default permission group (DEFAULT_VPC_GROUP_NAME) cannot be modified.
     *   *
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
     * The rules in the default permission group (DEFAULT_VPC_GROUP_NAME) cannot be modified.
     *   *
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
     * *   The snapshot feature is in public preview and is provided free of charge. [Apsara File Storage NAS Service Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed in public preview.
     *   * *   Only advanced Extreme NAS file systems support this feature.
     *   *
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
     * *   The snapshot feature is in public preview and is provided free of charge. [Apsara File Storage NAS Service Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed in public preview.
     *   * *   Only advanced Extreme NAS file systems support this feature.
     *   *
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
     * *   This operation is available only to Cloud Parallel File Storage (CPFS) file systems on the China site (aliyun.com).
     *   * *   Only CPFS V2.2.0 and later support dataflows.
     *   * *   You can modify the attributes only of the dataflows that are in the `Running` state.
     *   * *   It generally takes 2 to 5 minutes to modify the attributes of a dataflow. You can call the [DescribeDataFlows](~~336901~~) operation to query the status of the dataflow to be modified.
     *   * *   Data flow specifications:
     *   *     *   The dataflow throughput supports the following specifications: 600 MB/s, 1,200 MB/s, and 1,500 MB/s. The dataflow throughput is the maximum transmission bandwidth that can be reached when data is imported or exported for a dataflow.
     *   *     *   Inventory query: If you set the DryRun parameter to true, you can check whether the resources for the dataflow whose throughput is changed meet the requirements.
     *   * *   Billing
     *   *     Changing the dataflow throughput involves the billing of dataflow bandwidth. We recommend that you understand CPFS billing methods in advance. For more information, see [Billing methods and billable items of CPFS](~~111858~~).
     *   *
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
     * *   This operation is available only to Cloud Parallel File Storage (CPFS) file systems on the China site (aliyun.com).
     *   * *   Only CPFS V2.2.0 and later support dataflows.
     *   * *   You can modify the attributes only of the dataflows that are in the `Running` state.
     *   * *   It generally takes 2 to 5 minutes to modify the attributes of a dataflow. You can call the [DescribeDataFlows](~~336901~~) operation to query the status of the dataflow to be modified.
     *   * *   Data flow specifications:
     *   *     *   The dataflow throughput supports the following specifications: 600 MB/s, 1,200 MB/s, and 1,500 MB/s. The dataflow throughput is the maximum transmission bandwidth that can be reached when data is imported or exported for a dataflow.
     *   *     *   Inventory query: If you set the DryRun parameter to true, you can check whether the resources for the dataflow whose throughput is changed meet the requirements.
     *   * *   Billing
     *   *     Changing the dataflow throughput involves the billing of dataflow bandwidth. We recommend that you understand CPFS billing methods in advance. For more information, see [Billing methods and billable items of CPFS](~~111858~~).
     *   *
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
     * @param ModifyDataFlowAutoRefreshRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyDataFlowAutoRefreshResponse
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
     * @param ModifyFileSystemRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyFileSystemResponse
     */
    public function modifyFileSystemWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
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
     * *   This operation is available only to Cloud Parallel File Storage (CPFS) file systems on the China site (aliyun.com).
     *   * *   Only CPFS V2.2.0 and later support fileset modification.
     *   *
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
     * *   This operation is available only to Cloud Parallel File Storage (CPFS) file systems on the China site (aliyun.com).
     *   * *   Only CPFS V2.2.0 and later support fileset modification.
     *   *
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
     * #.
     *   *
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
     * #.
     *   *
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
     * Only General-purpose NAS file systems support this operation.
     *   *
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
     * Only General-purpose NAS file systems support this operation.
     *   *
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
     * @param ModifyMountTargetRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyMountTargetResponse
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
     * This operation is available only to Cloud Parallel File Storage (CPFS) file systems on the China site (aliyun.com).
     *   *
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
     * This operation is available only to Cloud Parallel File Storage (CPFS) file systems on the China site (aliyun.com).
     *   *
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
     * This operation is available only to Cloud Parallel File Storage (CPFS) file systems on the China site (aliyun.com).
     *   *
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
     * This operation is available only to Cloud Parallel File Storage (CPFS) file systems on the China site (aliyun.com).
     *   *
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
     * @param ModifySmbAclRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ModifySmbAclResponse
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
     * @param RuntimeOptions $runtime
     *
     * @return OpenNASServiceResponse
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
     * @return OpenNASServiceResponse
     */
    public function openNASService()
    {
        $runtime = new RuntimeOptions([]);

        return $this->openNASServiceWithOptions($runtime);
    }

    /**
     * The IP address of a client to remove from the blacklist.
     *   *
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
     * The IP address of a client to remove from the blacklist.
     *   *
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
     * A request ID is returned even if the tag that you want to remove or the associated file system does not exist. For example, if the associated file system does not exist, or the TagKey and TagValue cannot be found, a request ID is returned.
     *   *
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
     * A request ID is returned even if the tag that you want to remove or the associated file system does not exist. For example, if the associated file system does not exist, or the TagKey and TagValue cannot be found, a request ID is returned.
     *   *
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
     * *   The snapshot feature is in public preview and is provided free of charge. [Apsara File Storage NAS Service Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed in public preview.
     *   * *   Only advanced Extreme NAS file systems support this feature.
     *   * *   The file system must be in the Running state.
     *   * *   To roll back a file system to a snapshot, you must specify the ID of the snapshot that is created from the file system.
     *   *
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
     * *   The snapshot feature is in public preview and is provided free of charge. [Apsara File Storage NAS Service Level Agreement (SLA)](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement) is not guaranteed in public preview.
     *   * *   Only advanced Extreme NAS file systems support this feature.
     *   * *   The file system must be in the Running state.
     *   * *   To roll back a file system to a snapshot, you must specify the ID of the snapshot that is created from the file system.
     *   *
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
     * Only General-purpose NAS file systems support this operation.
     *   *
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
     * Only General-purpose NAS file systems support this operation.
     *   *
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
     * Only General-purpose NFS file systems support the directory quota feature.
     *   *
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
     * Only General-purpose NFS file systems support the directory quota feature.
     *   *
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
     * *   This operation is available only to Cloud Parallel File Storage (CPFS) file systems on the China site (aliyun.com).
     *   * *   Only CPFS V2.2.0 and later support dataflows. You can view the version information on the file system details page in the console.
     *   * *   You can enable the dataflows that are only in the `Stopped` state.
     *   * *   If the value of DryRun is `true`, you can check whether sufficient resources are available to enable the specified dataflow. If the resources are insufficient, the dataflow cannot be enabled.
     *   * *   It generally takes 2 to 5 minutes to enable a dataflow. You can query the dataflow status by calling the [DescribeDataFlows](~~2402270~~) operation.
     *   *
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
     * *   This operation is available only to Cloud Parallel File Storage (CPFS) file systems on the China site (aliyun.com).
     *   * *   Only CPFS V2.2.0 and later support dataflows. You can view the version information on the file system details page in the console.
     *   * *   You can enable the dataflows that are only in the `Stopped` state.
     *   * *   If the value of DryRun is `true`, you can check whether sufficient resources are available to enable the specified dataflow. If the resources are insufficient, the dataflow cannot be enabled.
     *   * *   It generally takes 2 to 5 minutes to enable a dataflow. You can query the dataflow status by calling the [DescribeDataFlows](~~2402270~~) operation.
     *   *
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
     * *   This operation is available only to Cloud Parallel File Storage (CPFS) file systems on the China site (aliyun.com).
     *   * *   Only CPFS V2.2.0 and later support dataflows. You can view the version information on the file system details page in the console.
     *   * *   You can disable only the dataflows that are in the `Running` state.
     *   * *   After a dataflow is disabled, you cannot create a dataflow task for the dataflow. If AutoRefresh is configured, source data updates are not synchronized to CPFS.
     *   * *   After a dataflow is disabled, the dataflow throughput is no longer billed because resources are reclaimed. However, the dataflow may fail to be restarted due to insufficient resources.
     *   * *   It generally takes 2 to 5 minutes to disable a dataflow. You can call the [DescribeDataFlows](~~2402271~~) operation to query the dataflow status.
     *   *
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
     * *   This operation is available only to Cloud Parallel File Storage (CPFS) file systems on the China site (aliyun.com).
     *   * *   Only CPFS V2.2.0 and later support dataflows. You can view the version information on the file system details page in the console.
     *   * *   You can disable only the dataflows that are in the `Running` state.
     *   * *   After a dataflow is disabled, you cannot create a dataflow task for the dataflow. If AutoRefresh is configured, source data updates are not synchronized to CPFS.
     *   * *   After a dataflow is disabled, the dataflow throughput is no longer billed because resources are reclaimed. However, the dataflow may fail to be restarted due to insufficient resources.
     *   * *   It generally takes 2 to 5 minutes to disable a dataflow. You can call the [DescribeDataFlows](~~2402271~~) operation to query the dataflow status.
     *   *
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
     * @param TagResourcesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
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
     * Only General-purpose NAS file systems support this operation.
     *   *
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
     * Only General-purpose NAS file systems support this operation.
     *   *
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
     * *   Only Extreme NAS file systems and CPFS file systems can be scaled up. CPFS file systems are available only on the China site (aliyun.com).
     *   * *   A General-purpose NAS file system is automatically scaled up. You do not need to call this operation to scale up a General-purpose NAS file system.
     *   *
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
     * *   Only Extreme NAS file systems and CPFS file systems can be scaled up. CPFS file systems are available only on the China site (aliyun.com).
     *   * *   A General-purpose NAS file system is automatically scaled up. You do not need to call this operation to scale up a General-purpose NAS file system.
     *   *
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
