<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DFS\V20180620;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\DFS\V20180620\Models\AttachVscMountPointRequest;
use AlibabaCloud\SDK\DFS\V20180620\Models\AttachVscMountPointResponse;
use AlibabaCloud\SDK\DFS\V20180620\Models\AttachVscMountPointShrinkRequest;
use AlibabaCloud\SDK\DFS\V20180620\Models\AttachVscToMountPointsRequest;
use AlibabaCloud\SDK\DFS\V20180620\Models\AttachVscToMountPointsResponse;
use AlibabaCloud\SDK\DFS\V20180620\Models\AttachVscToMountPointsShrinkRequest;
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
use AlibabaCloud\SDK\DFS\V20180620\Models\DescribeMountPointsVscAttachInfoRequest;
use AlibabaCloud\SDK\DFS\V20180620\Models\DescribeMountPointsVscAttachInfoResponse;
use AlibabaCloud\SDK\DFS\V20180620\Models\DescribeMountPointsVscAttachInfoShrinkRequest;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary 挂载VSC挂载点
     *  *
     * @description ****
     *  *
     * @param AttachVscMountPointRequest $tmpReq  AttachVscMountPointRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return AttachVscMountPointResponse AttachVscMountPointResponse
     */
    public function attachVscMountPointWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AttachVscMountPointShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->instanceIds)) {
            $request->instanceIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->instanceIds, 'InstanceIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->vscIds)) {
            $request->vscIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->vscIds, 'VscIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->inputRegionId)) {
            $query['InputRegionId'] = $request->inputRegionId;
        }
        if (!Utils::isUnset($request->instanceIdsShrink)) {
            $query['InstanceIds'] = $request->instanceIdsShrink;
        }
        if (!Utils::isUnset($request->mountPointId)) {
            $query['MountPointId'] = $request->mountPointId;
        }
        if (!Utils::isUnset($request->useAssumeRoleChkServerPerm)) {
            $query['UseAssumeRoleChkServerPerm'] = $request->useAssumeRoleChkServerPerm;
        }
        if (!Utils::isUnset($request->vscIdsShrink)) {
            $query['VscIds'] = $request->vscIdsShrink;
        }
        if (!Utils::isUnset($request->vscName)) {
            $query['VscName'] = $request->vscName;
        }
        if (!Utils::isUnset($request->vscType)) {
            $query['VscType'] = $request->vscType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 挂载VSC挂载点
     *  *
     * @description ****
     *  *
     * @param AttachVscMountPointRequest $request AttachVscMountPointRequest
     *
     * @return AttachVscMountPointResponse AttachVscMountPointResponse
     */
    public function attachVscMountPoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachVscMountPointWithOptions($request, $runtime);
    }

    /**
     * @summary 批量挂载VSC挂载点
     *  *
     * @param AttachVscToMountPointsRequest $tmpReq  AttachVscToMountPointsRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return AttachVscToMountPointsResponse AttachVscToMountPointsResponse
     */
    public function attachVscToMountPointsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AttachVscToMountPointsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->attachInfos)) {
            $request->attachInfosShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->attachInfos, 'AttachInfos', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->attachInfosShrink)) {
            $query['AttachInfos'] = $request->attachInfosShrink;
        }
        if (!Utils::isUnset($request->inputRegionId)) {
            $query['InputRegionId'] = $request->inputRegionId;
        }
        if (!Utils::isUnset($request->useAssumeRoleChkServerPerm)) {
            $query['UseAssumeRoleChkServerPerm'] = $request->useAssumeRoleChkServerPerm;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'AttachVscToMountPoints',
            'version' => '2018-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AttachVscToMountPointsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量挂载VSC挂载点
     *  *
     * @param AttachVscToMountPointsRequest $request AttachVscToMountPointsRequest
     *
     * @return AttachVscToMountPointsResponse AttachVscToMountPointsResponse
     */
    public function attachVscToMountPoints($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachVscToMountPointsWithOptions($request, $runtime);
    }

    /**
     * @param BindVscMountPointAliasRequest $request BindVscMountPointAliasRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return BindVscMountPointAliasResponse BindVscMountPointAliasResponse
     */
    public function bindVscMountPointAliasWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliasPrefix)) {
            $query['AliasPrefix'] = $request->aliasPrefix;
        }
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->inputRegionId)) {
            $query['InputRegionId'] = $request->inputRegionId;
        }
        if (!Utils::isUnset($request->mountPointId)) {
            $query['MountPointId'] = $request->mountPointId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @param BindVscMountPointAliasRequest $request BindVscMountPointAliasRequest
     *
     * @return BindVscMountPointAliasResponse BindVscMountPointAliasResponse
     */
    public function bindVscMountPointAlias($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindVscMountPointAliasWithOptions($request, $runtime);
    }

    /**
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
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->inputRegionId)) {
            $query['InputRegionId'] = $request->inputRegionId;
        }
        if (!Utils::isUnset($request->networkType)) {
            $query['NetworkType'] = $request->networkType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @param CreateAccessRuleRequest $request CreateAccessRuleRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAccessRuleResponse CreateAccessRuleResponse
     */
    public function createAccessRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessGroupId)) {
            $query['AccessGroupId'] = $request->accessGroupId;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->inputRegionId)) {
            $query['InputRegionId'] = $request->inputRegionId;
        }
        if (!Utils::isUnset($request->networkSegment)) {
            $query['NetworkSegment'] = $request->networkSegment;
        }
        if (!Utils::isUnset($request->priority)) {
            $query['Priority'] = $request->priority;
        }
        if (!Utils::isUnset($request->RWAccessType)) {
            $query['RWAccessType'] = $request->RWAccessType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @param CreateFileSystemRequest $request CreateFileSystemRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateFileSystemResponse CreateFileSystemResponse
     */
    public function createFileSystemWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dataRedundancyType)) {
            $query['DataRedundancyType'] = $request->dataRedundancyType;
        }
        if (!Utils::isUnset($request->dedicatedClusterId)) {
            $query['DedicatedClusterId'] = $request->dedicatedClusterId;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->fileSystemName)) {
            $query['FileSystemName'] = $request->fileSystemName;
        }
        if (!Utils::isUnset($request->inputRegionId)) {
            $query['InputRegionId'] = $request->inputRegionId;
        }
        if (!Utils::isUnset($request->partitionNumber)) {
            $query['PartitionNumber'] = $request->partitionNumber;
        }
        if (!Utils::isUnset($request->protocolType)) {
            $query['ProtocolType'] = $request->protocolType;
        }
        if (!Utils::isUnset($request->provisionedThroughputInMiBps)) {
            $query['ProvisionedThroughputInMiBps'] = $request->provisionedThroughputInMiBps;
        }
        if (!Utils::isUnset($request->spaceCapacity)) {
            $query['SpaceCapacity'] = $request->spaceCapacity;
        }
        if (!Utils::isUnset($request->storageSetName)) {
            $query['StorageSetName'] = $request->storageSetName;
        }
        if (!Utils::isUnset($request->storageType)) {
            $query['StorageType'] = $request->storageType;
        }
        if (!Utils::isUnset($request->throughputMode)) {
            $query['ThroughputMode'] = $request->throughputMode;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @param CreateMountPointRequest $request CreateMountPointRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateMountPointResponse CreateMountPointResponse
     */
    public function createMountPointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessGroupId)) {
            $query['AccessGroupId'] = $request->accessGroupId;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->inputRegionId)) {
            $query['InputRegionId'] = $request->inputRegionId;
        }
        if (!Utils::isUnset($request->networkType)) {
            $query['NetworkType'] = $request->networkType;
        }
        if (!Utils::isUnset($request->usePerformanceMode)) {
            $query['UsePerformanceMode'] = $request->usePerformanceMode;
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
     * @param CreateMountPointRequest $request CreateMountPointRequest
     *
     * @return CreateMountPointResponse CreateMountPointResponse
     */
    public function createMountPoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMountPointWithOptions($request, $runtime);
    }

    /**
     * @summary CreateQosPolicy
     *  *
     * @param CreateQosPolicyRequest $tmpReq  CreateQosPolicyRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateQosPolicyResponse CreateQosPolicyResponse
     */
    public function createQosPolicyWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateQosPolicyShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->flowIds)) {
            $request->flowIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->flowIds, 'FlowIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->reqTags)) {
            $request->reqTagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->reqTags, 'ReqTags', 'json');
        }
        if (!Utils::isUnset($tmpReq->zoneIds)) {
            $request->zoneIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->zoneIds, 'ZoneIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->federationId)) {
            $query['FederationId'] = $request->federationId;
        }
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->flowIdsShrink)) {
            $query['FlowIds'] = $request->flowIdsShrink;
        }
        if (!Utils::isUnset($request->inputRegionId)) {
            $query['InputRegionId'] = $request->inputRegionId;
        }
        if (!Utils::isUnset($request->maxIOBandWidth)) {
            $query['MaxIOBandWidth'] = $request->maxIOBandWidth;
        }
        if (!Utils::isUnset($request->maxIOps)) {
            $query['MaxIOps'] = $request->maxIOps;
        }
        if (!Utils::isUnset($request->maxMetaQps)) {
            $query['MaxMetaQps'] = $request->maxMetaQps;
        }
        if (!Utils::isUnset($request->reqTagsShrink)) {
            $query['ReqTags'] = $request->reqTagsShrink;
        }
        if (!Utils::isUnset($request->zoneIdsShrink)) {
            $query['ZoneIds'] = $request->zoneIdsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary CreateQosPolicy
     *  *
     * @param CreateQosPolicyRequest $request CreateQosPolicyRequest
     *
     * @return CreateQosPolicyResponse CreateQosPolicyResponse
     */
    public function createQosPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createQosPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary 创建 ugo
     *  *
     * @param CreateUserGroupsMappingRequest $tmpReq  CreateUserGroupsMappingRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateUserGroupsMappingResponse CreateUserGroupsMappingResponse
     */
    public function createUserGroupsMappingWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateUserGroupsMappingShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->groupNames)) {
            $request->groupNamesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->groupNames, 'GroupNames', 'json');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 创建 ugo
     *  *
     * @param CreateUserGroupsMappingRequest $request CreateUserGroupsMappingRequest
     *
     * @return CreateUserGroupsMappingResponse CreateUserGroupsMappingResponse
     */
    public function createUserGroupsMapping($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUserGroupsMappingWithOptions($request, $runtime);
    }

    /**
     * @param CreateVscMountPointRequest $tmpReq  CreateVscMountPointRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateVscMountPointResponse CreateVscMountPointResponse
     */
    public function createVscMountPointWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateVscMountPointShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->instanceIds)) {
            $request->instanceIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->instanceIds, 'InstanceIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->inputRegionId)) {
            $query['InputRegionId'] = $request->inputRegionId;
        }
        if (!Utils::isUnset($request->instanceIdsShrink)) {
            $query['InstanceIds'] = $request->instanceIdsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @param CreateVscMountPointRequest $request CreateVscMountPointRequest
     *
     * @return CreateVscMountPointResponse CreateVscMountPointResponse
     */
    public function createVscMountPoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVscMountPointWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAccessGroupRequest $request DeleteAccessGroupRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAccessGroupResponse DeleteAccessGroupResponse
     */
    public function deleteAccessGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessGroupId)) {
            $query['AccessGroupId'] = $request->accessGroupId;
        }
        if (!Utils::isUnset($request->inputRegionId)) {
            $query['InputRegionId'] = $request->inputRegionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @param DeleteAccessRuleRequest $request DeleteAccessRuleRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAccessRuleResponse DeleteAccessRuleResponse
     */
    public function deleteAccessRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessGroupId)) {
            $query['AccessGroupId'] = $request->accessGroupId;
        }
        if (!Utils::isUnset($request->accessRuleId)) {
            $query['AccessRuleId'] = $request->accessRuleId;
        }
        if (!Utils::isUnset($request->inputRegionId)) {
            $query['InputRegionId'] = $request->inputRegionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (!Utils::isUnset($request->inputRegionId)) {
            $query['InputRegionId'] = $request->inputRegionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @param DeleteMountPointRequest $request DeleteMountPointRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteMountPointResponse DeleteMountPointResponse
     */
    public function deleteMountPointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->inputRegionId)) {
            $query['InputRegionId'] = $request->inputRegionId;
        }
        if (!Utils::isUnset($request->mountPointId)) {
            $query['MountPointId'] = $request->mountPointId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @param DeleteMountPointRequest $request DeleteMountPointRequest
     *
     * @return DeleteMountPointResponse DeleteMountPointResponse
     */
    public function deleteMountPoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMountPointWithOptions($request, $runtime);
    }

    /**
     * @summary DeleteQosPolicy
     *  *
     * @param DeleteQosPolicyRequest $request DeleteQosPolicyRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteQosPolicyResponse DeleteQosPolicyResponse
     */
    public function deleteQosPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->federationId)) {
            $query['FederationId'] = $request->federationId;
        }
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->inputRegionId)) {
            $query['InputRegionId'] = $request->inputRegionId;
        }
        if (!Utils::isUnset($request->qosPolicyId)) {
            $query['QosPolicyId'] = $request->qosPolicyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary DeleteQosPolicy
     *  *
     * @param DeleteQosPolicyRequest $request DeleteQosPolicyRequest
     *
     * @return DeleteQosPolicyResponse DeleteQosPolicyResponse
     */
    public function deleteQosPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteQosPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary 删除 ugo
     *  *
     * @param DeleteUserGroupsMappingRequest $tmpReq  DeleteUserGroupsMappingRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteUserGroupsMappingResponse DeleteUserGroupsMappingResponse
     */
    public function deleteUserGroupsMappingWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteUserGroupsMappingShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->groupNames)) {
            $request->groupNamesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->groupNames, 'GroupNames', 'json');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 删除 ugo
     *  *
     * @param DeleteUserGroupsMappingRequest $request DeleteUserGroupsMappingRequest
     *
     * @return DeleteUserGroupsMappingResponse DeleteUserGroupsMappingResponse
     */
    public function deleteUserGroupsMapping($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUserGroupsMappingWithOptions($request, $runtime);
    }

    /**
     * @param DeleteVscMountPointRequest $request DeleteVscMountPointRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteVscMountPointResponse DeleteVscMountPointResponse
     */
    public function deleteVscMountPointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->inputRegionId)) {
            $query['InputRegionId'] = $request->inputRegionId;
        }
        if (!Utils::isUnset($request->mountPointId)) {
            $query['MountPointId'] = $request->mountPointId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @param DeleteVscMountPointRequest $request DeleteVscMountPointRequest
     *
     * @return DeleteVscMountPointResponse DeleteVscMountPointResponse
     */
    public function deleteVscMountPoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVscMountPointWithOptions($request, $runtime);
    }

    /**
     * @summary 批量挂载VSC挂载点
     *  *
     * @param DescribeMountPointsVscAttachInfoRequest $tmpReq  DescribeMountPointsVscAttachInfoRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeMountPointsVscAttachInfoResponse DescribeMountPointsVscAttachInfoResponse
     */
    public function describeMountPointsVscAttachInfoWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DescribeMountPointsVscAttachInfoShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->queryInfos)) {
            $request->queryInfosShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->queryInfos, 'QueryInfos', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->inputRegionId)) {
            $query['InputRegionId'] = $request->inputRegionId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->queryInfosShrink)) {
            $query['QueryInfos'] = $request->queryInfosShrink;
        }
        if (!Utils::isUnset($request->useAssumeRoleChkServerPerm)) {
            $query['UseAssumeRoleChkServerPerm'] = $request->useAssumeRoleChkServerPerm;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeMountPointsVscAttachInfo',
            'version' => '2018-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeMountPointsVscAttachInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量挂载VSC挂载点
     *  *
     * @param DescribeMountPointsVscAttachInfoRequest $request DescribeMountPointsVscAttachInfoRequest
     *
     * @return DescribeMountPointsVscAttachInfoResponse DescribeMountPointsVscAttachInfoResponse
     */
    public function describeMountPointsVscAttachInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMountPointsVscAttachInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRegionsRequest $request DescribeRegionsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRegionsResponse DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->inputRegionId)) {
            $query['InputRegionId'] = $request->inputRegionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 查询VSC挂载信息
     *  *
     * @param DescribeVscMountPointsRequest $request DescribeVscMountPointsRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVscMountPointsResponse DescribeVscMountPointsResponse
     */
    public function describeVscMountPointsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->inputRegionId)) {
            $query['InputRegionId'] = $request->inputRegionId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->mountPointId)) {
            $query['MountPointId'] = $request->mountPointId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->vscId)) {
            $query['VscId'] = $request->vscId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 查询VSC挂载信息
     *  *
     * @param DescribeVscMountPointsRequest $request DescribeVscMountPointsRequest
     *
     * @return DescribeVscMountPointsResponse DescribeVscMountPointsResponse
     */
    public function describeVscMountPoints($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVscMountPointsWithOptions($request, $runtime);
    }

    /**
     * @param DetachVscMountPointRequest $tmpReq  DetachVscMountPointRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DetachVscMountPointResponse DetachVscMountPointResponse
     */
    public function detachVscMountPointWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DetachVscMountPointShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->instanceIds)) {
            $request->instanceIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->instanceIds, 'InstanceIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->vscIds)) {
            $request->vscIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->vscIds, 'VscIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->inputRegionId)) {
            $query['InputRegionId'] = $request->inputRegionId;
        }
        if (!Utils::isUnset($request->instanceIdsShrink)) {
            $query['InstanceIds'] = $request->instanceIdsShrink;
        }
        if (!Utils::isUnset($request->mountPointId)) {
            $query['MountPointId'] = $request->mountPointId;
        }
        if (!Utils::isUnset($request->useAssumeRoleChkServerPerm)) {
            $query['UseAssumeRoleChkServerPerm'] = $request->useAssumeRoleChkServerPerm;
        }
        if (!Utils::isUnset($request->vscIdsShrink)) {
            $query['VscIds'] = $request->vscIdsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @param DetachVscMountPointRequest $request DetachVscMountPointRequest
     *
     * @return DetachVscMountPointResponse DetachVscMountPointResponse
     */
    public function detachVscMountPoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachVscMountPointWithOptions($request, $runtime);
    }

    /**
     * @param GetAccessGroupRequest $request GetAccessGroupRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAccessGroupResponse GetAccessGroupResponse
     */
    public function getAccessGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessGroupId)) {
            $query['AccessGroupId'] = $request->accessGroupId;
        }
        if (!Utils::isUnset($request->inputRegionId)) {
            $query['InputRegionId'] = $request->inputRegionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @param GetAccessGroupRequest $request GetAccessGroupRequest
     *
     * @return GetAccessGroupResponse GetAccessGroupResponse
     */
    public function getAccessGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAccessGroupWithOptions($request, $runtime);
    }

    /**
     * @param GetAccessRuleRequest $request GetAccessRuleRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAccessRuleResponse GetAccessRuleResponse
     */
    public function getAccessRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessGroupId)) {
            $query['AccessGroupId'] = $request->accessGroupId;
        }
        if (!Utils::isUnset($request->accessRuleId)) {
            $query['AccessRuleId'] = $request->accessRuleId;
        }
        if (!Utils::isUnset($request->inputRegionId)) {
            $query['InputRegionId'] = $request->inputRegionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @param GetAccessRuleRequest $request GetAccessRuleRequest
     *
     * @return GetAccessRuleResponse GetAccessRuleResponse
     */
    public function getAccessRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAccessRuleWithOptions($request, $runtime);
    }

    /**
     * @param GetFileSystemRequest $request GetFileSystemRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetFileSystemResponse GetFileSystemResponse
     */
    public function getFileSystemWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->inputRegionId)) {
            $query['InputRegionId'] = $request->inputRegionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @param GetFileSystemRequest $request GetFileSystemRequest
     *
     * @return GetFileSystemResponse GetFileSystemResponse
     */
    public function getFileSystem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFileSystemWithOptions($request, $runtime);
    }

    /**
     * @param GetMountPointRequest $request GetMountPointRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetMountPointResponse GetMountPointResponse
     */
    public function getMountPointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->inputRegionId)) {
            $query['InputRegionId'] = $request->inputRegionId;
        }
        if (!Utils::isUnset($request->mountPointId)) {
            $query['MountPointId'] = $request->mountPointId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @param GetMountPointRequest $request GetMountPointRequest
     *
     * @return GetMountPointResponse GetMountPointResponse
     */
    public function getMountPoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMountPointWithOptions($request, $runtime);
    }

    /**
     * @param GetRegionRequest $request GetRegionRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return GetRegionResponse GetRegionResponse
     */
    public function getRegionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->inputRegionId)) {
            $query['InputRegionId'] = $request->inputRegionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @param GetRegionRequest $request GetRegionRequest
     *
     * @return GetRegionResponse GetRegionResponse
     */
    public function getRegion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRegionWithOptions($request, $runtime);
    }

    /**
     * @param ListAccessGroupsRequest $request ListAccessGroupsRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAccessGroupsResponse ListAccessGroupsResponse
     */
    public function listAccessGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->inputRegionId)) {
            $query['InputRegionId'] = $request->inputRegionId;
        }
        if (!Utils::isUnset($request->limit)) {
            $query['Limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $query['OrderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->orderType)) {
            $query['OrderType'] = $request->orderType;
        }
        if (!Utils::isUnset($request->startOffset)) {
            $query['StartOffset'] = $request->startOffset;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @param ListAccessGroupsRequest $request ListAccessGroupsRequest
     *
     * @return ListAccessGroupsResponse ListAccessGroupsResponse
     */
    public function listAccessGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAccessGroupsWithOptions($request, $runtime);
    }

    /**
     * @param ListAccessRulesRequest $request ListAccessRulesRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAccessRulesResponse ListAccessRulesResponse
     */
    public function listAccessRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessGroupId)) {
            $query['AccessGroupId'] = $request->accessGroupId;
        }
        if (!Utils::isUnset($request->inputRegionId)) {
            $query['InputRegionId'] = $request->inputRegionId;
        }
        if (!Utils::isUnset($request->limit)) {
            $query['Limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $query['OrderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->orderType)) {
            $query['OrderType'] = $request->orderType;
        }
        if (!Utils::isUnset($request->startOffset)) {
            $query['StartOffset'] = $request->startOffset;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @param ListAccessRulesRequest $request ListAccessRulesRequest
     *
     * @return ListAccessRulesResponse ListAccessRulesResponse
     */
    public function listAccessRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAccessRulesWithOptions($request, $runtime);
    }

    /**
     * @summary 查询Federation
     *  *
     * @param ListFederationsRequest $request ListFederationsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListFederationsResponse ListFederationsResponse
     */
    public function listFederationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->federationId)) {
            $query['FederationId'] = $request->federationId;
        }
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->inputRegionId)) {
            $query['InputRegionId'] = $request->inputRegionId;
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
     * @summary 查询Federation
     *  *
     * @param ListFederationsRequest $request ListFederationsRequest
     *
     * @return ListFederationsResponse ListFederationsResponse
     */
    public function listFederations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFederationsWithOptions($request, $runtime);
    }

    /**
     * @param ListFileSystemsRequest $request ListFileSystemsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListFileSystemsResponse ListFileSystemsResponse
     */
    public function listFileSystemsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->inputRegionId)) {
            $query['InputRegionId'] = $request->inputRegionId;
        }
        if (!Utils::isUnset($request->limit)) {
            $query['Limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $query['OrderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->orderType)) {
            $query['OrderType'] = $request->orderType;
        }
        if (!Utils::isUnset($request->startOffset)) {
            $query['StartOffset'] = $request->startOffset;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @param ListFileSystemsRequest $request ListFileSystemsRequest
     *
     * @return ListFileSystemsResponse ListFileSystemsResponse
     */
    public function listFileSystems($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFileSystemsWithOptions($request, $runtime);
    }

    /**
     * @param ListMountPointsRequest $request ListMountPointsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListMountPointsResponse ListMountPointsResponse
     */
    public function listMountPointsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->inputRegionId)) {
            $query['InputRegionId'] = $request->inputRegionId;
        }
        if (!Utils::isUnset($request->limit)) {
            $query['Limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $query['OrderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->orderType)) {
            $query['OrderType'] = $request->orderType;
        }
        if (!Utils::isUnset($request->startOffset)) {
            $query['StartOffset'] = $request->startOffset;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @param ListMountPointsRequest $request ListMountPointsRequest
     *
     * @return ListMountPointsResponse ListMountPointsResponse
     */
    public function listMountPoints($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMountPointsWithOptions($request, $runtime);
    }

    /**
     * @summary 查询QosPolicies
     *  *
     * @param ListQosPoliciesRequest $request ListQosPoliciesRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListQosPoliciesResponse ListQosPoliciesResponse
     */
    public function listQosPoliciesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->federationId)) {
            $query['FederationId'] = $request->federationId;
        }
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->inputRegionId)) {
            $query['InputRegionId'] = $request->inputRegionId;
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
     * @summary 查询QosPolicies
     *  *
     * @param ListQosPoliciesRequest $request ListQosPoliciesRequest
     *
     * @return ListQosPoliciesResponse ListQosPoliciesResponse
     */
    public function listQosPolicies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listQosPoliciesWithOptions($request, $runtime);
    }

    /**
     * @summary list ugm
     *  *
     * @param ListUserGroupsMappingsRequest $request ListUserGroupsMappingsRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ListUserGroupsMappingsResponse ListUserGroupsMappingsResponse
     */
    public function listUserGroupsMappingsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->filesystemId)) {
            $query['FilesystemId'] = $request->filesystemId;
        }
        if (!Utils::isUnset($request->inputRegionId)) {
            $query['InputRegionId'] = $request->inputRegionId;
        }
        if (!Utils::isUnset($request->limit)) {
            $query['Limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary list ugm
     *  *
     * @param ListUserGroupsMappingsRequest $request ListUserGroupsMappingsRequest
     *
     * @return ListUserGroupsMappingsResponse ListUserGroupsMappingsResponse
     */
    public function listUserGroupsMappings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserGroupsMappingsWithOptions($request, $runtime);
    }

    /**
     * @param ModifyAccessGroupRequest $request ModifyAccessGroupRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyAccessGroupResponse ModifyAccessGroupResponse
     */
    public function modifyAccessGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessGroupId)) {
            $query['AccessGroupId'] = $request->accessGroupId;
        }
        if (!Utils::isUnset($request->accessGroupName)) {
            $query['AccessGroupName'] = $request->accessGroupName;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->inputRegionId)) {
            $query['InputRegionId'] = $request->inputRegionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @param ModifyAccessRuleRequest $request ModifyAccessRuleRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyAccessRuleResponse ModifyAccessRuleResponse
     */
    public function modifyAccessRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessGroupId)) {
            $query['AccessGroupId'] = $request->accessGroupId;
        }
        if (!Utils::isUnset($request->accessRuleId)) {
            $query['AccessRuleId'] = $request->accessRuleId;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->inputRegionId)) {
            $query['InputRegionId'] = $request->inputRegionId;
        }
        if (!Utils::isUnset($request->priority)) {
            $query['Priority'] = $request->priority;
        }
        if (!Utils::isUnset($request->RWAccessType)) {
            $query['RWAccessType'] = $request->RWAccessType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @param ModifyFileSystemRequest $request ModifyFileSystemRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyFileSystemResponse ModifyFileSystemResponse
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
        if (!Utils::isUnset($request->fileSystemName)) {
            $query['FileSystemName'] = $request->fileSystemName;
        }
        if (!Utils::isUnset($request->inputRegionId)) {
            $query['InputRegionId'] = $request->inputRegionId;
        }
        if (!Utils::isUnset($request->provisionedThroughputInMiBps)) {
            $query['ProvisionedThroughputInMiBps'] = $request->provisionedThroughputInMiBps;
        }
        if (!Utils::isUnset($request->spaceCapacity)) {
            $query['SpaceCapacity'] = $request->spaceCapacity;
        }
        if (!Utils::isUnset($request->throughputMode)) {
            $query['ThroughputMode'] = $request->throughputMode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @param ModifyMountPointRequest $request ModifyMountPointRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyMountPointResponse ModifyMountPointResponse
     */
    public function modifyMountPointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessGroupId)) {
            $query['AccessGroupId'] = $request->accessGroupId;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->inputRegionId)) {
            $query['InputRegionId'] = $request->inputRegionId;
        }
        if (!Utils::isUnset($request->mountPointId)) {
            $query['MountPointId'] = $request->mountPointId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @param ModifyMountPointRequest $request ModifyMountPointRequest
     *
     * @return ModifyMountPointResponse ModifyMountPointResponse
     */
    public function modifyMountPoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyMountPointWithOptions($request, $runtime);
    }

    /**
     * @summary ModifyQosPolicy
     *  *
     * @param ModifyQosPolicyRequest $request ModifyQosPolicyRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyQosPolicyResponse ModifyQosPolicyResponse
     */
    public function modifyQosPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->federationId)) {
            $query['FederationId'] = $request->federationId;
        }
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->inputRegionId)) {
            $query['InputRegionId'] = $request->inputRegionId;
        }
        if (!Utils::isUnset($request->maxIOBandWidth)) {
            $query['MaxIOBandWidth'] = $request->maxIOBandWidth;
        }
        if (!Utils::isUnset($request->maxIOps)) {
            $query['MaxIOps'] = $request->maxIOps;
        }
        if (!Utils::isUnset($request->maxMetaQps)) {
            $query['MaxMetaQps'] = $request->maxMetaQps;
        }
        if (!Utils::isUnset($request->qosPolicyId)) {
            $query['QosPolicyId'] = $request->qosPolicyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary ModifyQosPolicy
     *  *
     * @param ModifyQosPolicyRequest $request ModifyQosPolicyRequest
     *
     * @return ModifyQosPolicyResponse ModifyQosPolicyResponse
     */
    public function modifyQosPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyQosPolicyWithOptions($request, $runtime);
    }
}
