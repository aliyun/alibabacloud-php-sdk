<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DFS\V20180620;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\DFS\V20180620\Models\AttachVscMountPointRequest;
use AlibabaCloud\SDK\DFS\V20180620\Models\AttachVscMountPointResponse;
use AlibabaCloud\SDK\DFS\V20180620\Models\AttachVscMountPointShrinkRequest;
use AlibabaCloud\SDK\DFS\V20180620\Models\BindVscMountPointAliasRequest;
use AlibabaCloud\SDK\DFS\V20180620\Models\BindVscMountPointAliasResponse;
use AlibabaCloud\SDK\DFS\V20180620\Models\CreateAccessGroupRequest;
use AlibabaCloud\SDK\DFS\V20180620\Models\CreateAccessGroupResponse;
use AlibabaCloud\SDK\DFS\V20180620\Models\CreateAccessRuleRequest;
use AlibabaCloud\SDK\DFS\V20180620\Models\CreateAccessRuleResponse;
use AlibabaCloud\SDK\DFS\V20180620\Models\CreateFileSystemRequest;
use AlibabaCloud\SDK\DFS\V20180620\Models\CreateFileSystemResponse;
use AlibabaCloud\SDK\DFS\V20180620\Models\CreateMountPointRequest;
use AlibabaCloud\SDK\DFS\V20180620\Models\CreateMountPointResponse;
use AlibabaCloud\SDK\DFS\V20180620\Models\CreateQosPolicyRequest;
use AlibabaCloud\SDK\DFS\V20180620\Models\CreateQosPolicyResponse;
use AlibabaCloud\SDK\DFS\V20180620\Models\CreateQosPolicyShrinkRequest;
use AlibabaCloud\SDK\DFS\V20180620\Models\CreateUserGroupsMappingRequest;
use AlibabaCloud\SDK\DFS\V20180620\Models\CreateUserGroupsMappingResponse;
use AlibabaCloud\SDK\DFS\V20180620\Models\CreateUserGroupsMappingShrinkRequest;
use AlibabaCloud\SDK\DFS\V20180620\Models\CreateVscMountPointRequest;
use AlibabaCloud\SDK\DFS\V20180620\Models\CreateVscMountPointResponse;
use AlibabaCloud\SDK\DFS\V20180620\Models\CreateVscMountPointShrinkRequest;
use AlibabaCloud\SDK\DFS\V20180620\Models\DeleteAccessGroupRequest;
use AlibabaCloud\SDK\DFS\V20180620\Models\DeleteAccessGroupResponse;
use AlibabaCloud\SDK\DFS\V20180620\Models\DeleteAccessRuleRequest;
use AlibabaCloud\SDK\DFS\V20180620\Models\DeleteAccessRuleResponse;
use AlibabaCloud\SDK\DFS\V20180620\Models\DeleteFileSystemRequest;
use AlibabaCloud\SDK\DFS\V20180620\Models\DeleteFileSystemResponse;
use AlibabaCloud\SDK\DFS\V20180620\Models\DeleteMountPointRequest;
use AlibabaCloud\SDK\DFS\V20180620\Models\DeleteMountPointResponse;
use AlibabaCloud\SDK\DFS\V20180620\Models\DeleteQosPolicyRequest;
use AlibabaCloud\SDK\DFS\V20180620\Models\DeleteQosPolicyResponse;
use AlibabaCloud\SDK\DFS\V20180620\Models\DeleteUserGroupsMappingRequest;
use AlibabaCloud\SDK\DFS\V20180620\Models\DeleteUserGroupsMappingResponse;
use AlibabaCloud\SDK\DFS\V20180620\Models\DeleteUserGroupsMappingShrinkRequest;
use AlibabaCloud\SDK\DFS\V20180620\Models\DeleteVscMountPointRequest;
use AlibabaCloud\SDK\DFS\V20180620\Models\DeleteVscMountPointResponse;
use AlibabaCloud\SDK\DFS\V20180620\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\DFS\V20180620\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\DFS\V20180620\Models\DescribeVscMountPointsRequest;
use AlibabaCloud\SDK\DFS\V20180620\Models\DescribeVscMountPointsResponse;
use AlibabaCloud\SDK\DFS\V20180620\Models\DetachVscMountPointRequest;
use AlibabaCloud\SDK\DFS\V20180620\Models\DetachVscMountPointResponse;
use AlibabaCloud\SDK\DFS\V20180620\Models\DetachVscMountPointShrinkRequest;
use AlibabaCloud\SDK\DFS\V20180620\Models\GetAccessGroupRequest;
use AlibabaCloud\SDK\DFS\V20180620\Models\GetAccessGroupResponse;
use AlibabaCloud\SDK\DFS\V20180620\Models\GetAccessRuleRequest;
use AlibabaCloud\SDK\DFS\V20180620\Models\GetAccessRuleResponse;
use AlibabaCloud\SDK\DFS\V20180620\Models\GetFileSystemRequest;
use AlibabaCloud\SDK\DFS\V20180620\Models\GetFileSystemResponse;
use AlibabaCloud\SDK\DFS\V20180620\Models\GetMountPointRequest;
use AlibabaCloud\SDK\DFS\V20180620\Models\GetMountPointResponse;
use AlibabaCloud\SDK\DFS\V20180620\Models\GetRegionRequest;
use AlibabaCloud\SDK\DFS\V20180620\Models\GetRegionResponse;
use AlibabaCloud\SDK\DFS\V20180620\Models\ListAccessGroupsRequest;
use AlibabaCloud\SDK\DFS\V20180620\Models\ListAccessGroupsResponse;
use AlibabaCloud\SDK\DFS\V20180620\Models\ListAccessRulesRequest;
use AlibabaCloud\SDK\DFS\V20180620\Models\ListAccessRulesResponse;
use AlibabaCloud\SDK\DFS\V20180620\Models\ListFederationsRequest;
use AlibabaCloud\SDK\DFS\V20180620\Models\ListFederationsResponse;
use AlibabaCloud\SDK\DFS\V20180620\Models\ListFileSystemsRequest;
use AlibabaCloud\SDK\DFS\V20180620\Models\ListFileSystemsResponse;
use AlibabaCloud\SDK\DFS\V20180620\Models\ListMountPointsRequest;
use AlibabaCloud\SDK\DFS\V20180620\Models\ListMountPointsResponse;
use AlibabaCloud\SDK\DFS\V20180620\Models\ListQosPoliciesRequest;
use AlibabaCloud\SDK\DFS\V20180620\Models\ListQosPoliciesResponse;
use AlibabaCloud\SDK\DFS\V20180620\Models\ListUserGroupsMappingsRequest;
use AlibabaCloud\SDK\DFS\V20180620\Models\ListUserGroupsMappingsResponse;
use AlibabaCloud\SDK\DFS\V20180620\Models\ModifyAccessGroupRequest;
use AlibabaCloud\SDK\DFS\V20180620\Models\ModifyAccessGroupResponse;
use AlibabaCloud\SDK\DFS\V20180620\Models\ModifyAccessRuleRequest;
use AlibabaCloud\SDK\DFS\V20180620\Models\ModifyAccessRuleResponse;
use AlibabaCloud\SDK\DFS\V20180620\Models\ModifyFileSystemRequest;
use AlibabaCloud\SDK\DFS\V20180620\Models\ModifyFileSystemResponse;
use AlibabaCloud\SDK\DFS\V20180620\Models\ModifyMountPointRequest;
use AlibabaCloud\SDK\DFS\V20180620\Models\ModifyMountPointResponse;
use AlibabaCloud\SDK\DFS\V20180620\Models\ModifyQosPolicyRequest;
use AlibabaCloud\SDK\DFS\V20180620\Models\ModifyQosPolicyResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class DFS extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('dfs', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 挂载VSC挂载点.
     *
     * @remarks
     *
     * @param tmpReq - AttachVscMountPointRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AttachVscMountPointResponse
     *
     * @param AttachVscMountPointRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return AttachVscMountPointResponse
     */
    public function attachVscMountPointWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new AttachVscMountPointShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->instanceIds) {
            $request->instanceIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->instanceIds, 'InstanceIds', 'json');
        }

        if (null !== $tmpReq->vscIds) {
            $request->vscIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->vscIds, 'VscIds', 'json');
        }

        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->inputRegionId) {
            @$query['InputRegionId'] = $request->inputRegionId;
        }

        if (null !== $request->instanceIdsShrink) {
            @$query['InstanceIds'] = $request->instanceIdsShrink;
        }

        if (null !== $request->mountPointId) {
            @$query['MountPointId'] = $request->mountPointId;
        }

        if (null !== $request->useAssumeRoleChkServerPerm) {
            @$query['UseAssumeRoleChkServerPerm'] = $request->useAssumeRoleChkServerPerm;
        }

        if (null !== $request->vscIdsShrink) {
            @$query['VscIds'] = $request->vscIdsShrink;
        }

        if (null !== $request->vscName) {
            @$query['VscName'] = $request->vscName;
        }

        if (null !== $request->vscType) {
            @$query['VscType'] = $request->vscType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AttachVscMountPoint',
            'version' => '2018-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AttachVscMountPointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 挂载VSC挂载点.
     *
     * @remarks
     *
     * @param request - AttachVscMountPointRequest
     *
     * @returns AttachVscMountPointResponse
     *
     * @param AttachVscMountPointRequest $request
     *
     * @return AttachVscMountPointResponse
     */
    public function attachVscMountPoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachVscMountPointWithOptions($request, $runtime);
    }

    /**
     * @param request - BindVscMountPointAliasRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BindVscMountPointAliasResponse
     *
     * @param BindVscMountPointAliasRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return BindVscMountPointAliasResponse
     */
    public function bindVscMountPointAliasWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliasPrefix) {
            @$query['AliasPrefix'] = $request->aliasPrefix;
        }

        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->inputRegionId) {
            @$query['InputRegionId'] = $request->inputRegionId;
        }

        if (null !== $request->mountPointId) {
            @$query['MountPointId'] = $request->mountPointId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BindVscMountPointAlias',
            'version' => '2018-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BindVscMountPointAliasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - BindVscMountPointAliasRequest
     *
     * @returns BindVscMountPointAliasResponse
     *
     * @param BindVscMountPointAliasRequest $request
     *
     * @return BindVscMountPointAliasResponse
     */
    public function bindVscMountPointAlias($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindVscMountPointAliasWithOptions($request, $runtime);
    }

    /**
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

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->inputRegionId) {
            @$query['InputRegionId'] = $request->inputRegionId;
        }

        if (null !== $request->networkType) {
            @$query['NetworkType'] = $request->networkType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAccessGroup',
            'version' => '2018-06-20',
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
        if (null !== $request->accessGroupId) {
            @$query['AccessGroupId'] = $request->accessGroupId;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->inputRegionId) {
            @$query['InputRegionId'] = $request->inputRegionId;
        }

        if (null !== $request->networkSegment) {
            @$query['NetworkSegment'] = $request->networkSegment;
        }

        if (null !== $request->priority) {
            @$query['Priority'] = $request->priority;
        }

        if (null !== $request->RWAccessType) {
            @$query['RWAccessType'] = $request->RWAccessType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAccessRule',
            'version' => '2018-06-20',
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
        if (null !== $request->dataRedundancyType) {
            @$query['DataRedundancyType'] = $request->dataRedundancyType;
        }

        if (null !== $request->dedicatedClusterId) {
            @$query['DedicatedClusterId'] = $request->dedicatedClusterId;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->fileSystemName) {
            @$query['FileSystemName'] = $request->fileSystemName;
        }

        if (null !== $request->inputRegionId) {
            @$query['InputRegionId'] = $request->inputRegionId;
        }

        if (null !== $request->partitionNumber) {
            @$query['PartitionNumber'] = $request->partitionNumber;
        }

        if (null !== $request->protocolType) {
            @$query['ProtocolType'] = $request->protocolType;
        }

        if (null !== $request->provisionedThroughputInMiBps) {
            @$query['ProvisionedThroughputInMiBps'] = $request->provisionedThroughputInMiBps;
        }

        if (null !== $request->spaceCapacity) {
            @$query['SpaceCapacity'] = $request->spaceCapacity;
        }

        if (null !== $request->storageSetName) {
            @$query['StorageSetName'] = $request->storageSetName;
        }

        if (null !== $request->storageType) {
            @$query['StorageType'] = $request->storageType;
        }

        if (null !== $request->throughputMode) {
            @$query['ThroughputMode'] = $request->throughputMode;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateFileSystem',
            'version' => '2018-06-20',
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
     * @param request - CreateMountPointRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMountPointResponse
     *
     * @param CreateMountPointRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateMountPointResponse
     */
    public function createMountPointWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessGroupId) {
            @$query['AccessGroupId'] = $request->accessGroupId;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->inputRegionId) {
            @$query['InputRegionId'] = $request->inputRegionId;
        }

        if (null !== $request->networkType) {
            @$query['NetworkType'] = $request->networkType;
        }

        if (null !== $request->usePerformanceMode) {
            @$query['UsePerformanceMode'] = $request->usePerformanceMode;
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
            'action' => 'CreateMountPoint',
            'version' => '2018-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateMountPointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateMountPointRequest
     *
     * @returns CreateMountPointResponse
     *
     * @param CreateMountPointRequest $request
     *
     * @return CreateMountPointResponse
     */
    public function createMountPoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMountPointWithOptions($request, $runtime);
    }

    /**
     * CreateQosPolicy.
     *
     * @param tmpReq - CreateQosPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateQosPolicyResponse
     *
     * @param CreateQosPolicyRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return CreateQosPolicyResponse
     */
    public function createQosPolicyWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateQosPolicyShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->flowIds) {
            $request->flowIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->flowIds, 'FlowIds', 'json');
        }

        if (null !== $tmpReq->zoneIds) {
            $request->zoneIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->zoneIds, 'ZoneIds', 'json');
        }

        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->federationId) {
            @$query['FederationId'] = $request->federationId;
        }

        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->flowIdsShrink) {
            @$query['FlowIds'] = $request->flowIdsShrink;
        }

        if (null !== $request->inputRegionId) {
            @$query['InputRegionId'] = $request->inputRegionId;
        }

        if (null !== $request->maxIOBandWidth) {
            @$query['MaxIOBandWidth'] = $request->maxIOBandWidth;
        }

        if (null !== $request->maxIOps) {
            @$query['MaxIOps'] = $request->maxIOps;
        }

        if (null !== $request->maxMetaQps) {
            @$query['MaxMetaQps'] = $request->maxMetaQps;
        }

        if (null !== $request->zoneIdsShrink) {
            @$query['ZoneIds'] = $request->zoneIdsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateQosPolicy',
            'version' => '2018-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateQosPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * CreateQosPolicy.
     *
     * @param request - CreateQosPolicyRequest
     *
     * @returns CreateQosPolicyResponse
     *
     * @param CreateQosPolicyRequest $request
     *
     * @return CreateQosPolicyResponse
     */
    public function createQosPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createQosPolicyWithOptions($request, $runtime);
    }

    /**
     * 创建 ugo.
     *
     * @param tmpReq - CreateUserGroupsMappingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateUserGroupsMappingResponse
     *
     * @param CreateUserGroupsMappingRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateUserGroupsMappingResponse
     */
    public function createUserGroupsMappingWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateUserGroupsMappingShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->groupNames) {
            $request->groupNamesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->groupNames, 'GroupNames', 'json');
        }

        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateUserGroupsMapping',
            'version' => '2018-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateUserGroupsMappingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建 ugo.
     *
     * @param request - CreateUserGroupsMappingRequest
     *
     * @returns CreateUserGroupsMappingResponse
     *
     * @param CreateUserGroupsMappingRequest $request
     *
     * @return CreateUserGroupsMappingResponse
     */
    public function createUserGroupsMapping($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUserGroupsMappingWithOptions($request, $runtime);
    }

    /**
     * @param tmpReq - CreateVscMountPointRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateVscMountPointResponse
     *
     * @param CreateVscMountPointRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return CreateVscMountPointResponse
     */
    public function createVscMountPointWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateVscMountPointShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->instanceIds) {
            $request->instanceIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->instanceIds, 'InstanceIds', 'json');
        }

        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->inputRegionId) {
            @$query['InputRegionId'] = $request->inputRegionId;
        }

        if (null !== $request->instanceIdsShrink) {
            @$query['InstanceIds'] = $request->instanceIdsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateVscMountPoint',
            'version' => '2018-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateVscMountPointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateVscMountPointRequest
     *
     * @returns CreateVscMountPointResponse
     *
     * @param CreateVscMountPointRequest $request
     *
     * @return CreateVscMountPointResponse
     */
    public function createVscMountPoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVscMountPointWithOptions($request, $runtime);
    }

    /**
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
        if (null !== $request->accessGroupId) {
            @$query['AccessGroupId'] = $request->accessGroupId;
        }

        if (null !== $request->inputRegionId) {
            @$query['InputRegionId'] = $request->inputRegionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAccessGroup',
            'version' => '2018-06-20',
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
        if (null !== $request->accessGroupId) {
            @$query['AccessGroupId'] = $request->accessGroupId;
        }

        if (null !== $request->accessRuleId) {
            @$query['AccessRuleId'] = $request->accessRuleId;
        }

        if (null !== $request->inputRegionId) {
            @$query['InputRegionId'] = $request->inputRegionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAccessRule',
            'version' => '2018-06-20',
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

        if (null !== $request->inputRegionId) {
            @$query['InputRegionId'] = $request->inputRegionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteFileSystem',
            'version' => '2018-06-20',
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
     * @param request - DeleteMountPointRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMountPointResponse
     *
     * @param DeleteMountPointRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteMountPointResponse
     */
    public function deleteMountPointWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->inputRegionId) {
            @$query['InputRegionId'] = $request->inputRegionId;
        }

        if (null !== $request->mountPointId) {
            @$query['MountPointId'] = $request->mountPointId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteMountPoint',
            'version' => '2018-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteMountPointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteMountPointRequest
     *
     * @returns DeleteMountPointResponse
     *
     * @param DeleteMountPointRequest $request
     *
     * @return DeleteMountPointResponse
     */
    public function deleteMountPoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMountPointWithOptions($request, $runtime);
    }

    /**
     * DeleteQosPolicy.
     *
     * @param request - DeleteQosPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteQosPolicyResponse
     *
     * @param DeleteQosPolicyRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteQosPolicyResponse
     */
    public function deleteQosPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->inputRegionId) {
            @$query['InputRegionId'] = $request->inputRegionId;
        }

        if (null !== $request->qosPolicyId) {
            @$query['QosPolicyId'] = $request->qosPolicyId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteQosPolicy',
            'version' => '2018-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteQosPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * DeleteQosPolicy.
     *
     * @param request - DeleteQosPolicyRequest
     *
     * @returns DeleteQosPolicyResponse
     *
     * @param DeleteQosPolicyRequest $request
     *
     * @return DeleteQosPolicyResponse
     */
    public function deleteQosPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteQosPolicyWithOptions($request, $runtime);
    }

    /**
     * 删除 ugo.
     *
     * @param tmpReq - DeleteUserGroupsMappingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteUserGroupsMappingResponse
     *
     * @param DeleteUserGroupsMappingRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteUserGroupsMappingResponse
     */
    public function deleteUserGroupsMappingWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteUserGroupsMappingShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->groupNames) {
            $request->groupNamesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->groupNames, 'GroupNames', 'json');
        }

        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteUserGroupsMapping',
            'version' => '2018-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteUserGroupsMappingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除 ugo.
     *
     * @param request - DeleteUserGroupsMappingRequest
     *
     * @returns DeleteUserGroupsMappingResponse
     *
     * @param DeleteUserGroupsMappingRequest $request
     *
     * @return DeleteUserGroupsMappingResponse
     */
    public function deleteUserGroupsMapping($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUserGroupsMappingWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteVscMountPointRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteVscMountPointResponse
     *
     * @param DeleteVscMountPointRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteVscMountPointResponse
     */
    public function deleteVscMountPointWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->inputRegionId) {
            @$query['InputRegionId'] = $request->inputRegionId;
        }

        if (null !== $request->mountPointId) {
            @$query['MountPointId'] = $request->mountPointId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteVscMountPoint',
            'version' => '2018-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteVscMountPointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteVscMountPointRequest
     *
     * @returns DeleteVscMountPointResponse
     *
     * @param DeleteVscMountPointRequest $request
     *
     * @return DeleteVscMountPointResponse
     */
    public function deleteVscMountPoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVscMountPointWithOptions($request, $runtime);
    }

    /**
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
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->inputRegionId) {
            @$query['InputRegionId'] = $request->inputRegionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRegions',
            'version' => '2018-06-20',
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
     * 查询VSC挂载信息.
     *
     * @param request - DescribeVscMountPointsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVscMountPointsResponse
     *
     * @param DescribeVscMountPointsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeVscMountPointsResponse
     */
    public function describeVscMountPointsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->inputRegionId) {
            @$query['InputRegionId'] = $request->inputRegionId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->mountPointId) {
            @$query['MountPointId'] = $request->mountPointId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->vscId) {
            @$query['VscId'] = $request->vscId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVscMountPoints',
            'version' => '2018-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVscMountPointsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询VSC挂载信息.
     *
     * @param request - DescribeVscMountPointsRequest
     *
     * @returns DescribeVscMountPointsResponse
     *
     * @param DescribeVscMountPointsRequest $request
     *
     * @return DescribeVscMountPointsResponse
     */
    public function describeVscMountPoints($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVscMountPointsWithOptions($request, $runtime);
    }

    /**
     * @param tmpReq - DetachVscMountPointRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetachVscMountPointResponse
     *
     * @param DetachVscMountPointRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return DetachVscMountPointResponse
     */
    public function detachVscMountPointWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DetachVscMountPointShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->instanceIds) {
            $request->instanceIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->instanceIds, 'InstanceIds', 'json');
        }

        if (null !== $tmpReq->vscIds) {
            $request->vscIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->vscIds, 'VscIds', 'json');
        }

        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->inputRegionId) {
            @$query['InputRegionId'] = $request->inputRegionId;
        }

        if (null !== $request->instanceIdsShrink) {
            @$query['InstanceIds'] = $request->instanceIdsShrink;
        }

        if (null !== $request->mountPointId) {
            @$query['MountPointId'] = $request->mountPointId;
        }

        if (null !== $request->useAssumeRoleChkServerPerm) {
            @$query['UseAssumeRoleChkServerPerm'] = $request->useAssumeRoleChkServerPerm;
        }

        if (null !== $request->vscIdsShrink) {
            @$query['VscIds'] = $request->vscIdsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DetachVscMountPoint',
            'version' => '2018-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetachVscMountPointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DetachVscMountPointRequest
     *
     * @returns DetachVscMountPointResponse
     *
     * @param DetachVscMountPointRequest $request
     *
     * @return DetachVscMountPointResponse
     */
    public function detachVscMountPoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachVscMountPointWithOptions($request, $runtime);
    }

    /**
     * @param request - GetAccessGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAccessGroupResponse
     *
     * @param GetAccessGroupRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetAccessGroupResponse
     */
    public function getAccessGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessGroupId) {
            @$query['AccessGroupId'] = $request->accessGroupId;
        }

        if (null !== $request->inputRegionId) {
            @$query['InputRegionId'] = $request->inputRegionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAccessGroup',
            'version' => '2018-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAccessGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetAccessGroupRequest
     *
     * @returns GetAccessGroupResponse
     *
     * @param GetAccessGroupRequest $request
     *
     * @return GetAccessGroupResponse
     */
    public function getAccessGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAccessGroupWithOptions($request, $runtime);
    }

    /**
     * @param request - GetAccessRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAccessRuleResponse
     *
     * @param GetAccessRuleRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetAccessRuleResponse
     */
    public function getAccessRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessGroupId) {
            @$query['AccessGroupId'] = $request->accessGroupId;
        }

        if (null !== $request->accessRuleId) {
            @$query['AccessRuleId'] = $request->accessRuleId;
        }

        if (null !== $request->inputRegionId) {
            @$query['InputRegionId'] = $request->inputRegionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAccessRule',
            'version' => '2018-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAccessRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetAccessRuleRequest
     *
     * @returns GetAccessRuleResponse
     *
     * @param GetAccessRuleRequest $request
     *
     * @return GetAccessRuleResponse
     */
    public function getAccessRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAccessRuleWithOptions($request, $runtime);
    }

    /**
     * @param request - GetFileSystemRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetFileSystemResponse
     *
     * @param GetFileSystemRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetFileSystemResponse
     */
    public function getFileSystemWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->inputRegionId) {
            @$query['InputRegionId'] = $request->inputRegionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetFileSystem',
            'version' => '2018-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetFileSystemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetFileSystemRequest
     *
     * @returns GetFileSystemResponse
     *
     * @param GetFileSystemRequest $request
     *
     * @return GetFileSystemResponse
     */
    public function getFileSystem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFileSystemWithOptions($request, $runtime);
    }

    /**
     * @param request - GetMountPointRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMountPointResponse
     *
     * @param GetMountPointRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetMountPointResponse
     */
    public function getMountPointWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->inputRegionId) {
            @$query['InputRegionId'] = $request->inputRegionId;
        }

        if (null !== $request->mountPointId) {
            @$query['MountPointId'] = $request->mountPointId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetMountPoint',
            'version' => '2018-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetMountPointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetMountPointRequest
     *
     * @returns GetMountPointResponse
     *
     * @param GetMountPointRequest $request
     *
     * @return GetMountPointResponse
     */
    public function getMountPoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMountPointWithOptions($request, $runtime);
    }

    /**
     * @param request - GetRegionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRegionResponse
     *
     * @param GetRegionRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return GetRegionResponse
     */
    public function getRegionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->inputRegionId) {
            @$query['InputRegionId'] = $request->inputRegionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetRegion',
            'version' => '2018-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetRegionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetRegionRequest
     *
     * @returns GetRegionResponse
     *
     * @param GetRegionRequest $request
     *
     * @return GetRegionResponse
     */
    public function getRegion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRegionWithOptions($request, $runtime);
    }

    /**
     * @param request - ListAccessGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAccessGroupsResponse
     *
     * @param ListAccessGroupsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListAccessGroupsResponse
     */
    public function listAccessGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->inputRegionId) {
            @$query['InputRegionId'] = $request->inputRegionId;
        }

        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->orderBy) {
            @$query['OrderBy'] = $request->orderBy;
        }

        if (null !== $request->orderType) {
            @$query['OrderType'] = $request->orderType;
        }

        if (null !== $request->startOffset) {
            @$query['StartOffset'] = $request->startOffset;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAccessGroups',
            'version' => '2018-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAccessGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListAccessGroupsRequest
     *
     * @returns ListAccessGroupsResponse
     *
     * @param ListAccessGroupsRequest $request
     *
     * @return ListAccessGroupsResponse
     */
    public function listAccessGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAccessGroupsWithOptions($request, $runtime);
    }

    /**
     * @param request - ListAccessRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAccessRulesResponse
     *
     * @param ListAccessRulesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListAccessRulesResponse
     */
    public function listAccessRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessGroupId) {
            @$query['AccessGroupId'] = $request->accessGroupId;
        }

        if (null !== $request->inputRegionId) {
            @$query['InputRegionId'] = $request->inputRegionId;
        }

        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->orderBy) {
            @$query['OrderBy'] = $request->orderBy;
        }

        if (null !== $request->orderType) {
            @$query['OrderType'] = $request->orderType;
        }

        if (null !== $request->startOffset) {
            @$query['StartOffset'] = $request->startOffset;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAccessRules',
            'version' => '2018-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAccessRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListAccessRulesRequest
     *
     * @returns ListAccessRulesResponse
     *
     * @param ListAccessRulesRequest $request
     *
     * @return ListAccessRulesResponse
     */
    public function listAccessRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAccessRulesWithOptions($request, $runtime);
    }

    /**
     * 查询Federation.
     *
     * @param request - ListFederationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListFederationsResponse
     *
     * @param ListFederationsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListFederationsResponse
     */
    public function listFederationsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->federationId) {
            @$query['FederationId'] = $request->federationId;
        }

        if (null !== $request->inputRegionId) {
            @$query['InputRegionId'] = $request->inputRegionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListFederations',
            'version' => '2018-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListFederationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询Federation.
     *
     * @param request - ListFederationsRequest
     *
     * @returns ListFederationsResponse
     *
     * @param ListFederationsRequest $request
     *
     * @return ListFederationsResponse
     */
    public function listFederations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFederationsWithOptions($request, $runtime);
    }

    /**
     * @param request - ListFileSystemsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListFileSystemsResponse
     *
     * @param ListFileSystemsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListFileSystemsResponse
     */
    public function listFileSystemsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->inputRegionId) {
            @$query['InputRegionId'] = $request->inputRegionId;
        }

        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->orderBy) {
            @$query['OrderBy'] = $request->orderBy;
        }

        if (null !== $request->orderType) {
            @$query['OrderType'] = $request->orderType;
        }

        if (null !== $request->startOffset) {
            @$query['StartOffset'] = $request->startOffset;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListFileSystems',
            'version' => '2018-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListFileSystemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListFileSystemsRequest
     *
     * @returns ListFileSystemsResponse
     *
     * @param ListFileSystemsRequest $request
     *
     * @return ListFileSystemsResponse
     */
    public function listFileSystems($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFileSystemsWithOptions($request, $runtime);
    }

    /**
     * @param request - ListMountPointsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMountPointsResponse
     *
     * @param ListMountPointsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListMountPointsResponse
     */
    public function listMountPointsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->inputRegionId) {
            @$query['InputRegionId'] = $request->inputRegionId;
        }

        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->orderBy) {
            @$query['OrderBy'] = $request->orderBy;
        }

        if (null !== $request->orderType) {
            @$query['OrderType'] = $request->orderType;
        }

        if (null !== $request->startOffset) {
            @$query['StartOffset'] = $request->startOffset;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListMountPoints',
            'version' => '2018-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListMountPointsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListMountPointsRequest
     *
     * @returns ListMountPointsResponse
     *
     * @param ListMountPointsRequest $request
     *
     * @return ListMountPointsResponse
     */
    public function listMountPoints($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMountPointsWithOptions($request, $runtime);
    }

    /**
     * 查询QosPolicies.
     *
     * @param request - ListQosPoliciesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListQosPoliciesResponse
     *
     * @param ListQosPoliciesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListQosPoliciesResponse
     */
    public function listQosPoliciesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->federationId) {
            @$query['FederationId'] = $request->federationId;
        }

        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->inputRegionId) {
            @$query['InputRegionId'] = $request->inputRegionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListQosPolicies',
            'version' => '2018-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListQosPoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询QosPolicies.
     *
     * @param request - ListQosPoliciesRequest
     *
     * @returns ListQosPoliciesResponse
     *
     * @param ListQosPoliciesRequest $request
     *
     * @return ListQosPoliciesResponse
     */
    public function listQosPolicies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listQosPoliciesWithOptions($request, $runtime);
    }

    /**
     * list ugm.
     *
     * @param request - ListUserGroupsMappingsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListUserGroupsMappingsResponse
     *
     * @param ListUserGroupsMappingsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListUserGroupsMappingsResponse
     */
    public function listUserGroupsMappingsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->filesystemId) {
            @$query['FilesystemId'] = $request->filesystemId;
        }

        if (null !== $request->inputRegionId) {
            @$query['InputRegionId'] = $request->inputRegionId;
        }

        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListUserGroupsMappings',
            'version' => '2018-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListUserGroupsMappingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * list ugm.
     *
     * @param request - ListUserGroupsMappingsRequest
     *
     * @returns ListUserGroupsMappingsResponse
     *
     * @param ListUserGroupsMappingsRequest $request
     *
     * @return ListUserGroupsMappingsResponse
     */
    public function listUserGroupsMappings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserGroupsMappingsWithOptions($request, $runtime);
    }

    /**
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
        if (null !== $request->accessGroupId) {
            @$query['AccessGroupId'] = $request->accessGroupId;
        }

        if (null !== $request->accessGroupName) {
            @$query['AccessGroupName'] = $request->accessGroupName;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->inputRegionId) {
            @$query['InputRegionId'] = $request->inputRegionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyAccessGroup',
            'version' => '2018-06-20',
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
        if (null !== $request->accessGroupId) {
            @$query['AccessGroupId'] = $request->accessGroupId;
        }

        if (null !== $request->accessRuleId) {
            @$query['AccessRuleId'] = $request->accessRuleId;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->inputRegionId) {
            @$query['InputRegionId'] = $request->inputRegionId;
        }

        if (null !== $request->priority) {
            @$query['Priority'] = $request->priority;
        }

        if (null !== $request->RWAccessType) {
            @$query['RWAccessType'] = $request->RWAccessType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyAccessRule',
            'version' => '2018-06-20',
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
     * @param request - ModifyFileSystemRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyFileSystemResponse
     *
     * @param ModifyFileSystemRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyFileSystemResponse
     */
    public function modifyFileSystemWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->fileSystemName) {
            @$query['FileSystemName'] = $request->fileSystemName;
        }

        if (null !== $request->inputRegionId) {
            @$query['InputRegionId'] = $request->inputRegionId;
        }

        if (null !== $request->provisionedThroughputInMiBps) {
            @$query['ProvisionedThroughputInMiBps'] = $request->provisionedThroughputInMiBps;
        }

        if (null !== $request->spaceCapacity) {
            @$query['SpaceCapacity'] = $request->spaceCapacity;
        }

        if (null !== $request->throughputMode) {
            @$query['ThroughputMode'] = $request->throughputMode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyFileSystem',
            'version' => '2018-06-20',
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
     * @param request - ModifyMountPointRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyMountPointResponse
     *
     * @param ModifyMountPointRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyMountPointResponse
     */
    public function modifyMountPointWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessGroupId) {
            @$query['AccessGroupId'] = $request->accessGroupId;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->inputRegionId) {
            @$query['InputRegionId'] = $request->inputRegionId;
        }

        if (null !== $request->mountPointId) {
            @$query['MountPointId'] = $request->mountPointId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyMountPoint',
            'version' => '2018-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyMountPointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifyMountPointRequest
     *
     * @returns ModifyMountPointResponse
     *
     * @param ModifyMountPointRequest $request
     *
     * @return ModifyMountPointResponse
     */
    public function modifyMountPoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyMountPointWithOptions($request, $runtime);
    }

    /**
     * @param request - ModifyQosPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyQosPolicyResponse
     *
     * @param ModifyQosPolicyRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ModifyQosPolicyResponse
     */
    public function modifyQosPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->inputRegionId) {
            @$query['InputRegionId'] = $request->inputRegionId;
        }

        if (null !== $request->maxIOBandWidth) {
            @$query['MaxIOBandWidth'] = $request->maxIOBandWidth;
        }

        if (null !== $request->maxIOps) {
            @$query['MaxIOps'] = $request->maxIOps;
        }

        if (null !== $request->maxMetaQps) {
            @$query['MaxMetaQps'] = $request->maxMetaQps;
        }

        if (null !== $request->qosPolicyId) {
            @$query['QosPolicyId'] = $request->qosPolicyId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyQosPolicy',
            'version' => '2018-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyQosPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifyQosPolicyRequest
     *
     * @returns ModifyQosPolicyResponse
     *
     * @param ModifyQosPolicyRequest $request
     *
     * @return ModifyQosPolicyResponse
     */
    public function modifyQosPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyQosPolicyWithOptions($request, $runtime);
    }
}
