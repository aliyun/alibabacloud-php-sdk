<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DFS\V20180620;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\DFS\V20180620\Models\CreateAccessGroupRequest;
use AlibabaCloud\SDK\DFS\V20180620\Models\CreateAccessGroupResponse;
use AlibabaCloud\SDK\DFS\V20180620\Models\CreateAccessRuleRequest;
use AlibabaCloud\SDK\DFS\V20180620\Models\CreateAccessRuleResponse;
use AlibabaCloud\SDK\DFS\V20180620\Models\CreateFileSystemRequest;
use AlibabaCloud\SDK\DFS\V20180620\Models\CreateFileSystemResponse;
use AlibabaCloud\SDK\DFS\V20180620\Models\CreateMountPointRequest;
use AlibabaCloud\SDK\DFS\V20180620\Models\CreateMountPointResponse;
use AlibabaCloud\SDK\DFS\V20180620\Models\CreateUserGroupsMappingRequest;
use AlibabaCloud\SDK\DFS\V20180620\Models\CreateUserGroupsMappingResponse;
use AlibabaCloud\SDK\DFS\V20180620\Models\CreateUserGroupsMappingShrinkRequest;
use AlibabaCloud\SDK\DFS\V20180620\Models\DeleteAccessGroupRequest;
use AlibabaCloud\SDK\DFS\V20180620\Models\DeleteAccessGroupResponse;
use AlibabaCloud\SDK\DFS\V20180620\Models\DeleteAccessRuleRequest;
use AlibabaCloud\SDK\DFS\V20180620\Models\DeleteAccessRuleResponse;
use AlibabaCloud\SDK\DFS\V20180620\Models\DeleteFileSystemRequest;
use AlibabaCloud\SDK\DFS\V20180620\Models\DeleteFileSystemResponse;
use AlibabaCloud\SDK\DFS\V20180620\Models\DeleteMountPointRequest;
use AlibabaCloud\SDK\DFS\V20180620\Models\DeleteMountPointResponse;
use AlibabaCloud\SDK\DFS\V20180620\Models\DeleteUserGroupsMappingRequest;
use AlibabaCloud\SDK\DFS\V20180620\Models\DeleteUserGroupsMappingResponse;
use AlibabaCloud\SDK\DFS\V20180620\Models\DeleteUserGroupsMappingShrinkRequest;
use AlibabaCloud\SDK\DFS\V20180620\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\DFS\V20180620\Models\DescribeRegionsResponse;
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
use AlibabaCloud\SDK\DFS\V20180620\Models\ListFileSystemsRequest;
use AlibabaCloud\SDK\DFS\V20180620\Models\ListFileSystemsResponse;
use AlibabaCloud\SDK\DFS\V20180620\Models\ListMountPointsRequest;
use AlibabaCloud\SDK\DFS\V20180620\Models\ListMountPointsResponse;
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
            'action'      => 'CreateAccessGroup',
            'version'     => '2018-06-20',
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
            'action'      => 'CreateAccessRule',
            'version'     => '2018-06-20',
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
     * @param CreateFileSystemRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateFileSystemResponse
     */
    public function createFileSystemWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dataRedundancyType)) {
            $query['DataRedundancyType'] = $request->dataRedundancyType;
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
            'action'      => 'CreateFileSystem',
            'version'     => '2018-06-20',
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
     * @param CreateMountPointRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateMountPointResponse
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
            'action'      => 'CreateMountPoint',
            'version'     => '2018-06-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateMountPointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateUserGroupsMappingRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateUserGroupsMappingResponse
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
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateUserGroupsMapping',
            'version'     => '2018-06-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateUserGroupsMappingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DeleteAccessGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteAccessGroupResponse
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
            'action'      => 'DeleteAccessGroup',
            'version'     => '2018-06-20',
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
     * @param DeleteAccessRuleRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteAccessRuleResponse
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
            'action'      => 'DeleteAccessRule',
            'version'     => '2018-06-20',
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
     * @param DeleteFileSystemRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteFileSystemResponse
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
            'action'      => 'DeleteFileSystem',
            'version'     => '2018-06-20',
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
     * @param DeleteMountPointRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteMountPointResponse
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
            'action'      => 'DeleteMountPoint',
            'version'     => '2018-06-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteMountPointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DeleteUserGroupsMappingRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteUserGroupsMappingResponse
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
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteUserGroupsMapping',
            'version'     => '2018-06-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteUserGroupsMappingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeRegionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRegionsResponse
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
            'action'      => 'DescribeRegions',
            'version'     => '2018-06-20',
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
     * @param GetAccessGroupRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetAccessGroupResponse
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
            'action'      => 'GetAccessGroup',
            'version'     => '2018-06-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAccessGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetAccessRuleRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetAccessRuleResponse
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
            'action'      => 'GetAccessRule',
            'version'     => '2018-06-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAccessRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetFileSystemRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetFileSystemResponse
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
            'action'      => 'GetFileSystem',
            'version'     => '2018-06-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetFileSystemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetMountPointRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetMountPointResponse
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
            'action'      => 'GetMountPoint',
            'version'     => '2018-06-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMountPointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetRegionRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return GetRegionResponse
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
            'action'      => 'GetRegion',
            'version'     => '2018-06-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetRegionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListAccessGroupsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListAccessGroupsResponse
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
            'action'      => 'ListAccessGroups',
            'version'     => '2018-06-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAccessGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListAccessRulesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListAccessRulesResponse
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
            'action'      => 'ListAccessRules',
            'version'     => '2018-06-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAccessRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListFileSystemsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListFileSystemsResponse
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
            'action'      => 'ListFileSystems',
            'version'     => '2018-06-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListFileSystemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListMountPointsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListMountPointsResponse
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
            'action'      => 'ListMountPoints',
            'version'     => '2018-06-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListMountPointsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListUserGroupsMappingsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListUserGroupsMappingsResponse
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
            'action'      => 'ListUserGroupsMappings',
            'version'     => '2018-06-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListUserGroupsMappingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ModifyAccessGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyAccessGroupResponse
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
            'action'      => 'ModifyAccessGroup',
            'version'     => '2018-06-20',
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
     * @param ModifyAccessRuleRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyAccessRuleResponse
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
            'action'      => 'ModifyAccessRule',
            'version'     => '2018-06-20',
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
            'action'      => 'ModifyFileSystem',
            'version'     => '2018-06-20',
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
     * @param ModifyMountPointRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyMountPointResponse
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
            'action'      => 'ModifyMountPoint',
            'version'     => '2018-06-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyMountPointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyMountPointRequest $request
     *
     * @return ModifyMountPointResponse
     */
    public function modifyMountPoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyMountPointWithOptions($request, $runtime);
    }
}
