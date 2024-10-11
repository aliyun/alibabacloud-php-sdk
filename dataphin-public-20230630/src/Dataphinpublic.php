<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\AddTenantMembersBySourceUserRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\AddTenantMembersBySourceUserResponse;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\AddTenantMembersBySourceUserShrinkRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\AddTenantMembersRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\AddTenantMembersResponse;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\AddTenantMembersShrinkRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\AddUserGroupMemberRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\AddUserGroupMemberResponse;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\AddUserGroupMemberShrinkRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CheckDataSourceConnectivityByIdRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CheckDataSourceConnectivityByIdResponse;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CheckDataSourceConnectivityRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CheckDataSourceConnectivityResponse;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CheckDataSourceConnectivityShrinkRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CheckResourcePermissionRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CheckResourcePermissionResponse;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CheckResourcePermissionShrinkRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateAdHocFileRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateAdHocFileResponse;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateAdHocFileShrinkRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateDataSourceRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateDataSourceResponse;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateDataSourceShrinkRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateDirectoryRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateDirectoryResponse;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateDirectoryShrinkRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateNodeSupplementRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateNodeSupplementResponse;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateNodeSupplementShrinkRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateUserGroupRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateUserGroupResponse;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateUserGroupShrinkRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\DeleteAdHocFileRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\DeleteAdHocFileResponse;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\DeleteDataSourceRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\DeleteDataSourceResponse;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\DeleteDataSourceShrinkRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\DeleteDirectoryRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\DeleteDirectoryResponse;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\DeleteUserGroupRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\DeleteUserGroupResponse;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ExecuteManualNodeRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ExecuteManualNodeResponse;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ExecuteManualNodeShrinkRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\FixDataRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\FixDataResponse;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\FixDataShrinkRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetAdHocFileRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetAdHocFileResponse;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetDevObjectDependencyRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetDevObjectDependencyResponse;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetInstanceDownStreamRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetInstanceDownStreamResponse;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetInstanceDownStreamShrinkRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetInstanceUpDownStreamRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetInstanceUpDownStreamResponse;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetInstanceUpDownStreamShrinkRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetMyRolesRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetMyRolesResponse;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetMyTenantsRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetMyTenantsResponse;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetMyTenantsShrinkRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetNodeUpDownStreamRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetNodeUpDownStreamResponse;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetNodeUpDownStreamShrinkRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetOperationSubmitStatusRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetOperationSubmitStatusResponse;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetPhysicalInstanceLogRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetPhysicalInstanceLogResponse;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetPhysicalInstanceRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetPhysicalInstanceResponse;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetPhysicalNodeByOutputNameRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetPhysicalNodeByOutputNameResponse;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetPhysicalNodeContentRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetPhysicalNodeContentResponse;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetPhysicalNodeOperationLogRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetPhysicalNodeOperationLogResponse;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetPhysicalNodeRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetPhysicalNodeResponse;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetProjectProduceUserRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetProjectProduceUserResponse;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetSupplementDagrunInstanceRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetSupplementDagrunInstanceResponse;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetSupplementDagrunRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetSupplementDagrunResponse;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetUserBySourceIdRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetUserBySourceIdResponse;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetUserGroupRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetUserGroupResponse;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetUsersRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetUsersResponse;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetUsersShrinkRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GrantResourcePermissionRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GrantResourcePermissionResponse;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GrantResourcePermissionShrinkRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListAddableRolesRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListAddableRolesResponse;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListAddableUsersRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListAddableUsersResponse;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListAddableUsersShrinkRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListDataSourceWithConfigRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListDataSourceWithConfigResponse;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListDataSourceWithConfigShrinkRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListFilesRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListFilesResponse;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListFilesShrinkRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListInstancesRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListInstancesResponse;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListInstancesShrinkRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListNodeDownStreamRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListNodeDownStreamResponse;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListNodeDownStreamShrinkRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListNodesRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListNodesResponse;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListNodesShrinkRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListResourcePermissionOperationLogRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListResourcePermissionOperationLogResponse;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListResourcePermissionOperationLogShrinkRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListResourcePermissionsRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListResourcePermissionsResponse;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListResourcePermissionsShrinkRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListTenantMembersRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListTenantMembersResponse;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListTenantMembersShrinkRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListUserGroupMembersRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListUserGroupMembersResponse;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListUserGroupMembersShrinkRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListUserGroupsRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListUserGroupsResponse;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListUserGroupsShrinkRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\OperateInstanceRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\OperateInstanceResponse;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\OperateInstanceShrinkRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\PausePhysicalNodeRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\PausePhysicalNodeResponse;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\PausePhysicalNodeShrinkRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\RemoveTenantMemberRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\RemoveTenantMemberResponse;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\RemoveTenantMemberShrinkRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\RemoveUserGroupMemberRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\RemoveUserGroupMemberResponse;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\RemoveUserGroupMemberShrinkRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ResumePhysicalNodeRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ResumePhysicalNodeResponse;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ResumePhysicalNodeShrinkRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\RevokeResourcePermissionRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\RevokeResourcePermissionResponse;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\RevokeResourcePermissionShrinkRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateAdHocFileRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateAdHocFileResponse;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateAdHocFileShrinkRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateDataSourceBasicInfoRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateDataSourceBasicInfoResponse;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateDataSourceBasicInfoShrinkRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateDataSourceConfigRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateDataSourceConfigResponse;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateDataSourceConfigShrinkRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateFileDirectoryRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateFileDirectoryResponse;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateFileNameRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateFileNameResponse;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateTenantMemberRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateTenantMemberResponse;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateTenantMemberShrinkRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateUserGroupRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateUserGroupResponse;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateUserGroupShrinkRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateUserGroupSwitchRequest;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateUserGroupSwitchResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Dataphinpublic extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('dataphin-public', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @summary 新增租户成员
     *  *
     * @param AddTenantMembersRequest $tmpReq  AddTenantMembersRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return AddTenantMembersResponse AddTenantMembersResponse
     */
    public function addTenantMembersWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AddTenantMembersShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->addCommand)) {
            $request->addCommandShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->addCommand, 'AddCommand', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->opTenantId)) {
            $query['OpTenantId'] = $request->opTenantId;
        }
        $body = [];
        if (!Utils::isUnset($request->addCommandShrink)) {
            $body['AddCommand'] = $request->addCommandShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddTenantMembers',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddTenantMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 新增租户成员
     *  *
     * @param AddTenantMembersRequest $request AddTenantMembersRequest
     *
     * @return AddTenantMembersResponse AddTenantMembersResponse
     */
    public function addTenantMembers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addTenantMembersWithOptions($request, $runtime);
    }

    /**
     * @summary 通过原始用户添加租户成员.
     *  *
     * @param AddTenantMembersBySourceUserRequest $tmpReq  AddTenantMembersBySourceUserRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return AddTenantMembersBySourceUserResponse AddTenantMembersBySourceUserResponse
     */
    public function addTenantMembersBySourceUserWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AddTenantMembersBySourceUserShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->addCommand)) {
            $request->addCommandShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->addCommand, 'AddCommand', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->opTenantId)) {
            $query['OpTenantId'] = $request->opTenantId;
        }
        $body = [];
        if (!Utils::isUnset($request->addCommandShrink)) {
            $body['AddCommand'] = $request->addCommandShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddTenantMembersBySourceUser',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddTenantMembersBySourceUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 通过原始用户添加租户成员.
     *  *
     * @param AddTenantMembersBySourceUserRequest $request AddTenantMembersBySourceUserRequest
     *
     * @return AddTenantMembersBySourceUserResponse AddTenantMembersBySourceUserResponse
     */
    public function addTenantMembersBySourceUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addTenantMembersBySourceUserWithOptions($request, $runtime);
    }

    /**
     * @summary 添加用户组成员.
     *  *
     * @param AddUserGroupMemberRequest $tmpReq  AddUserGroupMemberRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return AddUserGroupMemberResponse AddUserGroupMemberResponse
     */
    public function addUserGroupMemberWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AddUserGroupMemberShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->addCommand)) {
            $request->addCommandShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->addCommand, 'AddCommand', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->opTenantId)) {
            $query['OpTenantId'] = $request->opTenantId;
        }
        $body = [];
        if (!Utils::isUnset($request->addCommandShrink)) {
            $body['AddCommand'] = $request->addCommandShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddUserGroupMember',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddUserGroupMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 添加用户组成员.
     *  *
     * @param AddUserGroupMemberRequest $request AddUserGroupMemberRequest
     *
     * @return AddUserGroupMemberResponse AddUserGroupMemberResponse
     */
    public function addUserGroupMember($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addUserGroupMemberWithOptions($request, $runtime);
    }

    /**
     * @summary 检查数据源连通性
     *  *
     * @param CheckDataSourceConnectivityRequest $tmpReq  CheckDataSourceConnectivityRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckDataSourceConnectivityResponse CheckDataSourceConnectivityResponse
     */
    public function checkDataSourceConnectivityWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CheckDataSourceConnectivityShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->checkCommand)) {
            $request->checkCommandShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->checkCommand, 'CheckCommand', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->opTenantId)) {
            $query['OpTenantId'] = $request->opTenantId;
        }
        $body = [];
        if (!Utils::isUnset($request->checkCommandShrink)) {
            $body['CheckCommand'] = $request->checkCommandShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CheckDataSourceConnectivity',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckDataSourceConnectivityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 检查数据源连通性
     *  *
     * @param CheckDataSourceConnectivityRequest $request CheckDataSourceConnectivityRequest
     *
     * @return CheckDataSourceConnectivityResponse CheckDataSourceConnectivityResponse
     */
    public function checkDataSourceConnectivity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkDataSourceConnectivityWithOptions($request, $runtime);
    }

    /**
     * @summary 检查已创建的数据源是否正常连通
     *  *
     * @param CheckDataSourceConnectivityByIdRequest $request CheckDataSourceConnectivityByIdRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckDataSourceConnectivityByIdResponse CheckDataSourceConnectivityByIdResponse
     */
    public function checkDataSourceConnectivityByIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->opTenantId)) {
            $query['OpTenantId'] = $request->opTenantId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckDataSourceConnectivityById',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckDataSourceConnectivityByIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 检查已创建的数据源是否正常连通
     *  *
     * @param CheckDataSourceConnectivityByIdRequest $request CheckDataSourceConnectivityByIdRequest
     *
     * @return CheckDataSourceConnectivityByIdResponse CheckDataSourceConnectivityByIdResponse
     */
    public function checkDataSourceConnectivityById($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkDataSourceConnectivityByIdWithOptions($request, $runtime);
    }

    /**
     * @summary 校验用户是否有指定资源权限点.
     *  *
     * @param CheckResourcePermissionRequest $tmpReq  CheckResourcePermissionRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckResourcePermissionResponse CheckResourcePermissionResponse
     */
    public function checkResourcePermissionWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CheckResourcePermissionShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->checkCommand)) {
            $request->checkCommandShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->checkCommand, 'CheckCommand', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->opTenantId)) {
            $query['OpTenantId'] = $request->opTenantId;
        }
        $body = [];
        if (!Utils::isUnset($request->checkCommandShrink)) {
            $body['CheckCommand'] = $request->checkCommandShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CheckResourcePermission',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckResourcePermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 校验用户是否有指定资源权限点.
     *  *
     * @param CheckResourcePermissionRequest $request CheckResourcePermissionRequest
     *
     * @return CheckResourcePermissionResponse CheckResourcePermissionResponse
     */
    public function checkResourcePermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkResourcePermissionWithOptions($request, $runtime);
    }

    /**
     * @summary 创建即席查询文件
     *  *
     * @param CreateAdHocFileRequest $tmpReq  CreateAdHocFileRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAdHocFileResponse CreateAdHocFileResponse
     */
    public function createAdHocFileWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateAdHocFileShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->createCommand)) {
            $request->createCommandShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->createCommand, 'CreateCommand', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->opTenantId)) {
            $query['OpTenantId'] = $request->opTenantId;
        }
        $body = [];
        if (!Utils::isUnset($request->createCommandShrink)) {
            $body['CreateCommand'] = $request->createCommandShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateAdHocFile',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAdHocFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建即席查询文件
     *  *
     * @param CreateAdHocFileRequest $request CreateAdHocFileRequest
     *
     * @return CreateAdHocFileResponse CreateAdHocFileResponse
     */
    public function createAdHocFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAdHocFileWithOptions($request, $runtime);
    }

    /**
     * @summary 新建数据源
     *  *
     * @param CreateDataSourceRequest $tmpReq  CreateDataSourceRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDataSourceResponse CreateDataSourceResponse
     */
    public function createDataSourceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateDataSourceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->createCommand)) {
            $request->createCommandShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->createCommand, 'CreateCommand', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->opTenantId)) {
            $query['OpTenantId'] = $request->opTenantId;
        }
        $body = [];
        if (!Utils::isUnset($request->createCommandShrink)) {
            $body['CreateCommand'] = $request->createCommandShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateDataSource',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 新建数据源
     *  *
     * @param CreateDataSourceRequest $request CreateDataSourceRequest
     *
     * @return CreateDataSourceResponse CreateDataSourceResponse
     */
    public function createDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDataSourceWithOptions($request, $runtime);
    }

    /**
     * @summary 创建菜单树文件目录
     *  *
     * @param CreateDirectoryRequest $tmpReq  CreateDirectoryRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDirectoryResponse CreateDirectoryResponse
     */
    public function createDirectoryWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateDirectoryShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->createCommand)) {
            $request->createCommandShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->createCommand, 'CreateCommand', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->opTenantId)) {
            $query['OpTenantId'] = $request->opTenantId;
        }
        $body = [];
        if (!Utils::isUnset($request->createCommandShrink)) {
            $body['CreateCommand'] = $request->createCommandShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateDirectory',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDirectoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建菜单树文件目录
     *  *
     * @param CreateDirectoryRequest $request CreateDirectoryRequest
     *
     * @return CreateDirectoryResponse CreateDirectoryResponse
     */
    public function createDirectory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDirectoryWithOptions($request, $runtime);
    }

    /**
     * @summary 通用补数据接口 1.会生成补数据实例运行：影响相关产产出表数据 2.会进行任务运行：造成计算的费用以及存储的费用
     *  *
     * @param CreateNodeSupplementRequest $tmpReq  CreateNodeSupplementRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateNodeSupplementResponse CreateNodeSupplementResponse
     */
    public function createNodeSupplementWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateNodeSupplementShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->createCommand)) {
            $request->createCommandShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->createCommand, 'CreateCommand', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->env)) {
            $query['Env'] = $request->env;
        }
        if (!Utils::isUnset($request->opTenantId)) {
            $query['OpTenantId'] = $request->opTenantId;
        }
        $body = [];
        if (!Utils::isUnset($request->createCommandShrink)) {
            $body['CreateCommand'] = $request->createCommandShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateNodeSupplement',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateNodeSupplementResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 通用补数据接口 1.会生成补数据实例运行：影响相关产产出表数据 2.会进行任务运行：造成计算的费用以及存储的费用
     *  *
     * @param CreateNodeSupplementRequest $request CreateNodeSupplementRequest
     *
     * @return CreateNodeSupplementResponse CreateNodeSupplementResponse
     */
    public function createNodeSupplement($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNodeSupplementWithOptions($request, $runtime);
    }

    /**
     * @summary 新建用户组.
     *  *
     * @param CreateUserGroupRequest $tmpReq  CreateUserGroupRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateUserGroupResponse CreateUserGroupResponse
     */
    public function createUserGroupWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateUserGroupShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->createCommand)) {
            $request->createCommandShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->createCommand, 'CreateCommand', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->opTenantId)) {
            $query['OpTenantId'] = $request->opTenantId;
        }
        $body = [];
        if (!Utils::isUnset($request->createCommandShrink)) {
            $body['CreateCommand'] = $request->createCommandShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateUserGroup',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateUserGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 新建用户组.
     *  *
     * @param CreateUserGroupRequest $request CreateUserGroupRequest
     *
     * @return CreateUserGroupResponse CreateUserGroupResponse
     */
    public function createUserGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUserGroupWithOptions($request, $runtime);
    }

    /**
     * @summary 删除菜单树即席查询文件
     *  *
     * @param DeleteAdHocFileRequest $request DeleteAdHocFileRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAdHocFileResponse DeleteAdHocFileResponse
     */
    public function deleteAdHocFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileId)) {
            $query['FileId'] = $request->fileId;
        }
        if (!Utils::isUnset($request->opTenantId)) {
            $query['OpTenantId'] = $request->opTenantId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAdHocFile',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAdHocFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除菜单树即席查询文件
     *  *
     * @param DeleteAdHocFileRequest $request DeleteAdHocFileRequest
     *
     * @return DeleteAdHocFileResponse DeleteAdHocFileResponse
     */
    public function deleteAdHocFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAdHocFileWithOptions($request, $runtime);
    }

    /**
     * @summary 删除数据源
     *  *
     * @param DeleteDataSourceRequest $tmpReq  DeleteDataSourceRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDataSourceResponse DeleteDataSourceResponse
     */
    public function deleteDataSourceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteDataSourceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->deleteCommand)) {
            $request->deleteCommandShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->deleteCommand, 'DeleteCommand', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->opTenantId)) {
            $query['OpTenantId'] = $request->opTenantId;
        }
        $body = [];
        if (!Utils::isUnset($request->deleteCommandShrink)) {
            $body['DeleteCommand'] = $request->deleteCommandShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteDataSource',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除数据源
     *  *
     * @param DeleteDataSourceRequest $request DeleteDataSourceRequest
     *
     * @return DeleteDataSourceResponse DeleteDataSourceResponse
     */
    public function deleteDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDataSourceWithOptions($request, $runtime);
    }

    /**
     * @summary 删除菜单树文件目录
     *  *
     * @param DeleteDirectoryRequest $request DeleteDirectoryRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDirectoryResponse DeleteDirectoryResponse
     */
    public function deleteDirectoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileId)) {
            $query['FileId'] = $request->fileId;
        }
        if (!Utils::isUnset($request->opTenantId)) {
            $query['OpTenantId'] = $request->opTenantId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDirectory',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDirectoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除菜单树文件目录
     *  *
     * @param DeleteDirectoryRequest $request DeleteDirectoryRequest
     *
     * @return DeleteDirectoryResponse DeleteDirectoryResponse
     */
    public function deleteDirectory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDirectoryWithOptions($request, $runtime);
    }

    /**
     * @summary 删除用户组.
     *  *
     * @param DeleteUserGroupRequest $request DeleteUserGroupRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteUserGroupResponse DeleteUserGroupResponse
     */
    public function deleteUserGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->opTenantId)) {
            $query['OpTenantId'] = $request->opTenantId;
        }
        if (!Utils::isUnset($request->userGroupId)) {
            $query['UserGroupId'] = $request->userGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteUserGroup',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteUserGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除用户组.
     *  *
     * @param DeleteUserGroupRequest $request DeleteUserGroupRequest
     *
     * @return DeleteUserGroupResponse DeleteUserGroupResponse
     */
    public function deleteUserGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUserGroupWithOptions($request, $runtime);
    }

    /**
     * @summary 运行手动调度节点。
     *  *
     * @param ExecuteManualNodeRequest $tmpReq  ExecuteManualNodeRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ExecuteManualNodeResponse ExecuteManualNodeResponse
     */
    public function executeManualNodeWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ExecuteManualNodeShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->executeCommand)) {
            $request->executeCommandShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->executeCommand, 'ExecuteCommand', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->env)) {
            $query['Env'] = $request->env;
        }
        if (!Utils::isUnset($request->opTenantId)) {
            $query['OpTenantId'] = $request->opTenantId;
        }
        $body = [];
        if (!Utils::isUnset($request->executeCommandShrink)) {
            $body['ExecuteCommand'] = $request->executeCommandShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ExecuteManualNode',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExecuteManualNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 运行手动调度节点。
     *  *
     * @param ExecuteManualNodeRequest $request ExecuteManualNodeRequest
     *
     * @return ExecuteManualNodeResponse ExecuteManualNodeResponse
     */
    public function executeManualNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->executeManualNodeWithOptions($request, $runtime);
    }

    /**
     * @summary 重跑下游(修复链路数据), 支持强制重跑下游。影响范围: 1. 会产生计算成本；2. 会影响数据产出
     *  *
     * @param FixDataRequest $tmpReq  FixDataRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return FixDataResponse FixDataResponse
     */
    public function fixDataWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new FixDataShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->fixDataCommand)) {
            $request->fixDataCommandShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->fixDataCommand, 'FixDataCommand', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->env)) {
            $query['Env'] = $request->env;
        }
        if (!Utils::isUnset($request->opTenantId)) {
            $query['OpTenantId'] = $request->opTenantId;
        }
        $body = [];
        if (!Utils::isUnset($request->fixDataCommandShrink)) {
            $body['FixDataCommand'] = $request->fixDataCommandShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'FixData',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return FixDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 重跑下游(修复链路数据), 支持强制重跑下游。影响范围: 1. 会产生计算成本；2. 会影响数据产出
     *  *
     * @param FixDataRequest $request FixDataRequest
     *
     * @return FixDataResponse FixDataResponse
     */
    public function fixData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->fixDataWithOptions($request, $runtime);
    }

    /**
     * @summary 查询即席查询文件。
     *  *
     * @param GetAdHocFileRequest $request GetAdHocFileRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAdHocFileResponse GetAdHocFileResponse
     */
    public function getAdHocFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileId)) {
            $query['FileId'] = $request->fileId;
        }
        if (!Utils::isUnset($request->opTenantId)) {
            $query['OpTenantId'] = $request->opTenantId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAdHocFile',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAdHocFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询即席查询文件。
     *  *
     * @param GetAdHocFileRequest $request GetAdHocFileRequest
     *
     * @return GetAdHocFileResponse GetAdHocFileResponse
     */
    public function getAdHocFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAdHocFileWithOptions($request, $runtime);
    }

    /**
     * @summary 查询开发态对象上游依赖。
     *  *
     * @param GetDevObjectDependencyRequest $request GetDevObjectDependencyRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDevObjectDependencyResponse GetDevObjectDependencyResponse
     */
    public function getDevObjectDependencyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->objectFrom)) {
            $query['ObjectFrom'] = $request->objectFrom;
        }
        if (!Utils::isUnset($request->objectId)) {
            $query['ObjectId'] = $request->objectId;
        }
        if (!Utils::isUnset($request->objectType)) {
            $query['ObjectType'] = $request->objectType;
        }
        if (!Utils::isUnset($request->opTenantId)) {
            $query['OpTenantId'] = $request->opTenantId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDevObjectDependency',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDevObjectDependencyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询开发态对象上游依赖。
     *  *
     * @param GetDevObjectDependencyRequest $request GetDevObjectDependencyRequest
     *
     * @return GetDevObjectDependencyResponse GetDevObjectDependencyResponse
     */
    public function getDevObjectDependency($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDevObjectDependencyWithOptions($request, $runtime);
    }

    /**
     * @summary 根据起始的实例查询该实例的下游
     *  *
     * @param GetInstanceDownStreamRequest $tmpReq  GetInstanceDownStreamRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetInstanceDownStreamResponse GetInstanceDownStreamResponse
     */
    public function getInstanceDownStreamWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetInstanceDownStreamShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->instanceGet)) {
            $request->instanceGetShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->instanceGet, 'InstanceGet', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->downStreamDepth)) {
            $query['DownStreamDepth'] = $request->downStreamDepth;
        }
        if (!Utils::isUnset($request->env)) {
            $query['Env'] = $request->env;
        }
        if (!Utils::isUnset($request->opTenantId)) {
            $query['OpTenantId'] = $request->opTenantId;
        }
        if (!Utils::isUnset($request->runStatus)) {
            $query['RunStatus'] = $request->runStatus;
        }
        $body = [];
        if (!Utils::isUnset($request->instanceGetShrink)) {
            $body['InstanceGet'] = $request->instanceGetShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetInstanceDownStream',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetInstanceDownStreamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 根据起始的实例查询该实例的下游
     *  *
     * @param GetInstanceDownStreamRequest $request GetInstanceDownStreamRequest
     *
     * @return GetInstanceDownStreamResponse GetInstanceDownStreamResponse
     */
    public function getInstanceDownStream($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceDownStreamWithOptions($request, $runtime);
    }

    /**
     * @summary 查询实例的上下游，支持逻辑表和代码任务。
     *  *
     * @param GetInstanceUpDownStreamRequest $tmpReq  GetInstanceUpDownStreamRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return GetInstanceUpDownStreamResponse GetInstanceUpDownStreamResponse
     */
    public function getInstanceUpDownStreamWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetInstanceUpDownStreamShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->instanceId)) {
            $request->instanceIdShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->instanceId, 'InstanceId', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->downStreamDepth)) {
            $query['DownStreamDepth'] = $request->downStreamDepth;
        }
        if (!Utils::isUnset($request->env)) {
            $query['Env'] = $request->env;
        }
        if (!Utils::isUnset($request->opTenantId)) {
            $query['OpTenantId'] = $request->opTenantId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->upStreamDepth)) {
            $query['UpStreamDepth'] = $request->upStreamDepth;
        }
        $body = [];
        if (!Utils::isUnset($request->instanceIdShrink)) {
            $body['InstanceId'] = $request->instanceIdShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetInstanceUpDownStream',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetInstanceUpDownStreamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询实例的上下游，支持逻辑表和代码任务。
     *  *
     * @param GetInstanceUpDownStreamRequest $request GetInstanceUpDownStreamRequest
     *
     * @return GetInstanceUpDownStreamResponse GetInstanceUpDownStreamResponse
     */
    public function getInstanceUpDownStream($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceUpDownStreamWithOptions($request, $runtime);
    }

    /**
     * @summary 获取用户角色列表
     *  *
     * @param GetMyRolesRequest $request GetMyRolesRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return GetMyRolesResponse GetMyRolesResponse
     */
    public function getMyRolesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->opTenantId)) {
            $query['OpTenantId'] = $request->opTenantId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMyRoles',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMyRolesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取用户角色列表
     *  *
     * @param GetMyRolesRequest $request GetMyRolesRequest
     *
     * @return GetMyRolesResponse GetMyRolesResponse
     */
    public function getMyRoles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMyRolesWithOptions($request, $runtime);
    }

    /**
     * @summary 获取当前用户归属租户.
     *  *
     * @param GetMyTenantsRequest $tmpReq  GetMyTenantsRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetMyTenantsResponse GetMyTenantsResponse
     */
    public function getMyTenantsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetMyTenantsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->featureCodeList)) {
            $request->featureCodeListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->featureCodeList, 'FeatureCodeList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->opTenantId)) {
            $query['OpTenantId'] = $request->opTenantId;
        }
        $body = [];
        if (!Utils::isUnset($request->featureCodeListShrink)) {
            $body['FeatureCodeList'] = $request->featureCodeListShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetMyTenants',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMyTenantsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取当前用户归属租户.
     *  *
     * @param GetMyTenantsRequest $request GetMyTenantsRequest
     *
     * @return GetMyTenantsResponse GetMyTenantsResponse
     */
    public function getMyTenants($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMyTenantsWithOptions($request, $runtime);
    }

    /**
     * @summary 通用查询节点上下游接口
     *  *
     * @param GetNodeUpDownStreamRequest $tmpReq  GetNodeUpDownStreamRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetNodeUpDownStreamResponse GetNodeUpDownStreamResponse
     */
    public function getNodeUpDownStreamWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetNodeUpDownStreamShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->nodeId)) {
            $request->nodeIdShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->nodeId, 'NodeId', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->downStreamDepth)) {
            $query['DownStreamDepth'] = $request->downStreamDepth;
        }
        if (!Utils::isUnset($request->env)) {
            $query['Env'] = $request->env;
        }
        if (!Utils::isUnset($request->opTenantId)) {
            $query['OpTenantId'] = $request->opTenantId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->upStreamDepth)) {
            $query['UpStreamDepth'] = $request->upStreamDepth;
        }
        $body = [];
        if (!Utils::isUnset($request->nodeIdShrink)) {
            $body['NodeId'] = $request->nodeIdShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetNodeUpDownStream',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetNodeUpDownStreamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 通用查询节点上下游接口
     *  *
     * @param GetNodeUpDownStreamRequest $request GetNodeUpDownStreamRequest
     *
     * @return GetNodeUpDownStreamResponse GetNodeUpDownStreamResponse
     */
    public function getNodeUpDownStream($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNodeUpDownStreamWithOptions($request, $runtime);
    }

    /**
     * @summary 查询补数据提交的状态
     *  *
     * @param GetOperationSubmitStatusRequest $request GetOperationSubmitStatusRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetOperationSubmitStatusResponse GetOperationSubmitStatusResponse
     */
    public function getOperationSubmitStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->env)) {
            $query['Env'] = $request->env;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->opTenantId)) {
            $query['OpTenantId'] = $request->opTenantId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetOperationSubmitStatus',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOperationSubmitStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询补数据提交的状态
     *  *
     * @param GetOperationSubmitStatusRequest $request GetOperationSubmitStatusRequest
     *
     * @return GetOperationSubmitStatusResponse GetOperationSubmitStatusResponse
     */
    public function getOperationSubmitStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOperationSubmitStatusWithOptions($request, $runtime);
    }

    /**
     * @summary 查询脚本的实例信息, 包括实例状态、运行时间等信息.
     *  *
     * @param GetPhysicalInstanceRequest $request GetPhysicalInstanceRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetPhysicalInstanceResponse GetPhysicalInstanceResponse
     */
    public function getPhysicalInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->env)) {
            $query['Env'] = $request->env;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->opTenantId)) {
            $query['OpTenantId'] = $request->opTenantId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPhysicalInstance',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPhysicalInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询脚本的实例信息, 包括实例状态、运行时间等信息.
     *  *
     * @param GetPhysicalInstanceRequest $request GetPhysicalInstanceRequest
     *
     * @return GetPhysicalInstanceResponse GetPhysicalInstanceResponse
     */
    public function getPhysicalInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPhysicalInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary 获取实例执行的日志，如果实例重跑了多次，则会有多条日志
     *  *
     * @param GetPhysicalInstanceLogRequest $request GetPhysicalInstanceLogRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return GetPhysicalInstanceLogResponse GetPhysicalInstanceLogResponse
     */
    public function getPhysicalInstanceLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->env)) {
            $query['Env'] = $request->env;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->opTenantId)) {
            $query['OpTenantId'] = $request->opTenantId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPhysicalInstanceLog',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPhysicalInstanceLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取实例执行的日志，如果实例重跑了多次，则会有多条日志
     *  *
     * @param GetPhysicalInstanceLogRequest $request GetPhysicalInstanceLogRequest
     *
     * @return GetPhysicalInstanceLogResponse GetPhysicalInstanceLogResponse
     */
    public function getPhysicalInstanceLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPhysicalInstanceLogWithOptions($request, $runtime);
    }

    /**
     * @summary 查询物理调度节点。
     *  *
     * @param GetPhysicalNodeRequest $request GetPhysicalNodeRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetPhysicalNodeResponse GetPhysicalNodeResponse
     */
    public function getPhysicalNodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->env)) {
            $query['Env'] = $request->env;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $query['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->opTenantId)) {
            $query['OpTenantId'] = $request->opTenantId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPhysicalNode',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPhysicalNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询物理调度节点。
     *  *
     * @param GetPhysicalNodeRequest $request GetPhysicalNodeRequest
     *
     * @return GetPhysicalNodeResponse GetPhysicalNodeResponse
     */
    public function getPhysicalNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPhysicalNodeWithOptions($request, $runtime);
    }

    /**
     * @summary 根据输出名查询对应的物理节点。
     *  *
     * @param GetPhysicalNodeByOutputNameRequest $request GetPhysicalNodeByOutputNameRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetPhysicalNodeByOutputNameResponse GetPhysicalNodeByOutputNameResponse
     */
    public function getPhysicalNodeByOutputNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->env)) {
            $query['Env'] = $request->env;
        }
        if (!Utils::isUnset($request->opTenantId)) {
            $query['OpTenantId'] = $request->opTenantId;
        }
        if (!Utils::isUnset($request->outputName)) {
            $query['OutputName'] = $request->outputName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPhysicalNodeByOutputName',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPhysicalNodeByOutputNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 根据输出名查询对应的物理节点。
     *  *
     * @param GetPhysicalNodeByOutputNameRequest $request GetPhysicalNodeByOutputNameRequest
     *
     * @return GetPhysicalNodeByOutputNameResponse GetPhysicalNodeByOutputNameResponse
     */
    public function getPhysicalNodeByOutputName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPhysicalNodeByOutputNameWithOptions($request, $runtime);
    }

    /**
     * @summary 查询调度节点代码内容。
     *  *
     * @param GetPhysicalNodeContentRequest $request GetPhysicalNodeContentRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return GetPhysicalNodeContentResponse GetPhysicalNodeContentResponse
     */
    public function getPhysicalNodeContentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->env)) {
            $query['Env'] = $request->env;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $query['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->opTenantId)) {
            $query['OpTenantId'] = $request->opTenantId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPhysicalNodeContent',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPhysicalNodeContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询调度节点代码内容。
     *  *
     * @param GetPhysicalNodeContentRequest $request GetPhysicalNodeContentRequest
     *
     * @return GetPhysicalNodeContentResponse GetPhysicalNodeContentResponse
     */
    public function getPhysicalNodeContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPhysicalNodeContentWithOptions($request, $runtime);
    }

    /**
     * @summary 查询节点的操作日志。
     *  *
     * @param GetPhysicalNodeOperationLogRequest $request GetPhysicalNodeOperationLogRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetPhysicalNodeOperationLogResponse GetPhysicalNodeOperationLogResponse
     */
    public function getPhysicalNodeOperationLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->env)) {
            $query['Env'] = $request->env;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $query['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->opTenantId)) {
            $query['OpTenantId'] = $request->opTenantId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPhysicalNodeOperationLog',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPhysicalNodeOperationLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询节点的操作日志。
     *  *
     * @param GetPhysicalNodeOperationLogRequest $request GetPhysicalNodeOperationLogRequest
     *
     * @return GetPhysicalNodeOperationLogResponse GetPhysicalNodeOperationLogResponse
     */
    public function getPhysicalNodeOperationLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPhysicalNodeOperationLogWithOptions($request, $runtime);
    }

    /**
     * @summary 获取项目生产账号
     *  *
     * @param GetProjectProduceUserRequest $request GetProjectProduceUserRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetProjectProduceUserResponse GetProjectProduceUserResponse
     */
    public function getProjectProduceUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->opTenantId)) {
            $query['OpTenantId'] = $request->opTenantId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetProjectProduceUser',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetProjectProduceUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取项目生产账号
     *  *
     * @param GetProjectProduceUserRequest $request GetProjectProduceUserRequest
     *
     * @return GetProjectProduceUserResponse GetProjectProduceUserResponse
     */
    public function getProjectProduceUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getProjectProduceUserWithOptions($request, $runtime);
    }

    /**
     * @summary 获取补数据工作流所有业务日期的Dagrun信息。
     *  *
     * @param GetSupplementDagrunRequest $request GetSupplementDagrunRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSupplementDagrunResponse GetSupplementDagrunResponse
     */
    public function getSupplementDagrunWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->env)) {
            $query['Env'] = $request->env;
        }
        if (!Utils::isUnset($request->opTenantId)) {
            $query['OpTenantId'] = $request->opTenantId;
        }
        if (!Utils::isUnset($request->supplementId)) {
            $query['SupplementId'] = $request->supplementId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSupplementDagrun',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSupplementDagrunResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取补数据工作流所有业务日期的Dagrun信息。
     *  *
     * @param GetSupplementDagrunRequest $request GetSupplementDagrunRequest
     *
     * @return GetSupplementDagrunResponse GetSupplementDagrunResponse
     */
    public function getSupplementDagrun($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSupplementDagrunWithOptions($request, $runtime);
    }

    /**
     * @summary 列出补数据工作流下具体一个业务日期的所有节点的实例。
     *  *
     * @param GetSupplementDagrunInstanceRequest $request GetSupplementDagrunInstanceRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSupplementDagrunInstanceResponse GetSupplementDagrunInstanceResponse
     */
    public function getSupplementDagrunInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dagrunId)) {
            $query['DagrunId'] = $request->dagrunId;
        }
        if (!Utils::isUnset($request->env)) {
            $query['Env'] = $request->env;
        }
        if (!Utils::isUnset($request->opTenantId)) {
            $query['OpTenantId'] = $request->opTenantId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSupplementDagrunInstance',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSupplementDagrunInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 列出补数据工作流下具体一个业务日期的所有节点的实例。
     *  *
     * @param GetSupplementDagrunInstanceRequest $request GetSupplementDagrunInstanceRequest
     *
     * @return GetSupplementDagrunInstanceResponse GetSupplementDagrunInstanceResponse
     */
    public function getSupplementDagrunInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSupplementDagrunInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary 通过用户原始Id（如阿里云Id）获取用户详情
     *  *
     * @param GetUserBySourceIdRequest $request GetUserBySourceIdRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetUserBySourceIdResponse GetUserBySourceIdResponse
     */
    public function getUserBySourceIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->opTenantId)) {
            $query['OpTenantId'] = $request->opTenantId;
        }
        if (!Utils::isUnset($request->sourceId)) {
            $query['SourceId'] = $request->sourceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetUserBySourceId',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetUserBySourceIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 通过用户原始Id（如阿里云Id）获取用户详情
     *  *
     * @param GetUserBySourceIdRequest $request GetUserBySourceIdRequest
     *
     * @return GetUserBySourceIdResponse GetUserBySourceIdResponse
     */
    public function getUserBySourceId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserBySourceIdWithOptions($request, $runtime);
    }

    /**
     * @summary 获取用户组详情.
     *  *
     * @param GetUserGroupRequest $request GetUserGroupRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetUserGroupResponse GetUserGroupResponse
     */
    public function getUserGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->opTenantId)) {
            $query['OpTenantId'] = $request->opTenantId;
        }
        if (!Utils::isUnset($request->userGroupId)) {
            $query['UserGroupId'] = $request->userGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetUserGroup',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetUserGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取用户组详情.
     *  *
     * @param GetUserGroupRequest $request GetUserGroupRequest
     *
     * @return GetUserGroupResponse GetUserGroupResponse
     */
    public function getUserGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserGroupWithOptions($request, $runtime);
    }

    /**
     * @summary 获取用户详情
     *  *
     * @param GetUsersRequest $tmpReq  GetUsersRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetUsersResponse GetUsersResponse
     */
    public function getUsersWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetUsersShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->userIdList)) {
            $request->userIdListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->userIdList, 'UserIdList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->opTenantId)) {
            $query['OpTenantId'] = $request->opTenantId;
        }
        $body = [];
        if (!Utils::isUnset($request->userIdListShrink)) {
            $body['UserIdList'] = $request->userIdListShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetUsers',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取用户详情
     *  *
     * @param GetUsersRequest $request GetUsersRequest
     *
     * @return GetUsersResponse GetUsersResponse
     */
    public function getUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUsersWithOptions($request, $runtime);
    }

    /**
     * @summary 通过资源点对用户授权
     *  *
     * @param GrantResourcePermissionRequest $tmpReq  GrantResourcePermissionRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return GrantResourcePermissionResponse GrantResourcePermissionResponse
     */
    public function grantResourcePermissionWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GrantResourcePermissionShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->grantCommand)) {
            $request->grantCommandShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->grantCommand, 'GrantCommand', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->opTenantId)) {
            $query['OpTenantId'] = $request->opTenantId;
        }
        $body = [];
        if (!Utils::isUnset($request->grantCommandShrink)) {
            $body['GrantCommand'] = $request->grantCommandShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GrantResourcePermission',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GrantResourcePermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 通过资源点对用户授权
     *  *
     * @param GrantResourcePermissionRequest $request GrantResourcePermissionRequest
     *
     * @return GrantResourcePermissionResponse GrantResourcePermissionResponse
     */
    public function grantResourcePermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->grantResourcePermissionWithOptions($request, $runtime);
    }

    /**
     * @summary 获取用户角色列表
     *  *
     * @param ListAddableRolesRequest $request ListAddableRolesRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAddableRolesResponse ListAddableRolesResponse
     */
    public function listAddableRolesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->opTenantId)) {
            $query['OpTenantId'] = $request->opTenantId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAddableRoles',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAddableRolesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取用户角色列表
     *  *
     * @param ListAddableRolesRequest $request ListAddableRolesRequest
     *
     * @return ListAddableRolesResponse ListAddableRolesResponse
     */
    public function listAddableRoles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAddableRolesWithOptions($request, $runtime);
    }

    /**
     * @summary 获取可加入租户成员列表的用户
     *  *
     * @param ListAddableUsersRequest $tmpReq  ListAddableUsersRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAddableUsersResponse ListAddableUsersResponse
     */
    public function listAddableUsersWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListAddableUsersShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->listQuery)) {
            $request->listQueryShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->listQuery, 'ListQuery', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->opTenantId)) {
            $query['OpTenantId'] = $request->opTenantId;
        }
        $body = [];
        if (!Utils::isUnset($request->listQueryShrink)) {
            $body['ListQuery'] = $request->listQueryShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListAddableUsers',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAddableUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取可加入租户成员列表的用户
     *  *
     * @param ListAddableUsersRequest $request ListAddableUsersRequest
     *
     * @return ListAddableUsersResponse ListAddableUsersResponse
     */
    public function listAddableUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAddableUsersWithOptions($request, $runtime);
    }

    /**
     * @summary 搜索数据源，所属结果包含数据源配置项
     *  *
     * @param ListDataSourceWithConfigRequest $tmpReq  ListDataSourceWithConfigRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDataSourceWithConfigResponse ListDataSourceWithConfigResponse
     */
    public function listDataSourceWithConfigWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListDataSourceWithConfigShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->listQuery)) {
            $request->listQueryShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->listQuery, 'ListQuery', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->opTenantId)) {
            $query['OpTenantId'] = $request->opTenantId;
        }
        $body = [];
        if (!Utils::isUnset($request->listQueryShrink)) {
            $body['ListQuery'] = $request->listQueryShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListDataSourceWithConfig',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDataSourceWithConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 搜索数据源，所属结果包含数据源配置项
     *  *
     * @param ListDataSourceWithConfigRequest $request ListDataSourceWithConfigRequest
     *
     * @return ListDataSourceWithConfigResponse ListDataSourceWithConfigResponse
     */
    public function listDataSourceWithConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataSourceWithConfigWithOptions($request, $runtime);
    }

    /**
     * @summary 遍历菜单树目录文件。
     *  *
     * @param ListFilesRequest $tmpReq  ListFilesRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListFilesResponse ListFilesResponse
     */
    public function listFilesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListFilesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->listQuery)) {
            $request->listQueryShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->listQuery, 'ListQuery', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->opTenantId)) {
            $query['OpTenantId'] = $request->opTenantId;
        }
        $body = [];
        if (!Utils::isUnset($request->listQueryShrink)) {
            $body['ListQuery'] = $request->listQueryShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListFiles',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListFilesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 遍历菜单树目录文件。
     *  *
     * @param ListFilesRequest $request ListFilesRequest
     *
     * @return ListFilesResponse ListFilesResponse
     */
    public function listFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFilesWithOptions($request, $runtime);
    }

    /**
     * @summary 分页查询实例。
     *  *
     * @param ListInstancesRequest $tmpReq  ListInstancesRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListInstancesResponse ListInstancesResponse
     */
    public function listInstancesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListInstancesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->listQuery)) {
            $request->listQueryShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->listQuery, 'ListQuery', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->env)) {
            $query['Env'] = $request->env;
        }
        if (!Utils::isUnset($request->opTenantId)) {
            $query['OpTenantId'] = $request->opTenantId;
        }
        $body = [];
        if (!Utils::isUnset($request->listQueryShrink)) {
            $body['ListQuery'] = $request->listQueryShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListInstances',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 分页查询实例。
     *  *
     * @param ListInstancesRequest $request ListInstancesRequest
     *
     * @return ListInstancesResponse ListInstancesResponse
     */
    public function listInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstancesWithOptions($request, $runtime);
    }

    /**
     * @summary 查询节点下游，创建补数据工作流时可以作为数据参考
     *  *
     * @param ListNodeDownStreamRequest $tmpReq  ListNodeDownStreamRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListNodeDownStreamResponse ListNodeDownStreamResponse
     */
    public function listNodeDownStreamWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListNodeDownStreamShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->listQuery)) {
            $request->listQueryShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->listQuery, 'ListQuery', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->env)) {
            $query['Env'] = $request->env;
        }
        if (!Utils::isUnset($request->opTenantId)) {
            $query['OpTenantId'] = $request->opTenantId;
        }
        $body = [];
        if (!Utils::isUnset($request->listQueryShrink)) {
            $body['ListQuery'] = $request->listQueryShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListNodeDownStream',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListNodeDownStreamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询节点下游，创建补数据工作流时可以作为数据参考
     *  *
     * @param ListNodeDownStreamRequest $request ListNodeDownStreamRequest
     *
     * @return ListNodeDownStreamResponse ListNodeDownStreamResponse
     */
    public function listNodeDownStream($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNodeDownStreamWithOptions($request, $runtime);
    }

    /**
     * @summary 查询调度节点列表。
     *  *
     * @param ListNodesRequest $tmpReq  ListNodesRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListNodesResponse ListNodesResponse
     */
    public function listNodesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListNodesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->listQuery)) {
            $request->listQueryShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->listQuery, 'ListQuery', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->env)) {
            $query['Env'] = $request->env;
        }
        if (!Utils::isUnset($request->opTenantId)) {
            $query['OpTenantId'] = $request->opTenantId;
        }
        $body = [];
        if (!Utils::isUnset($request->listQueryShrink)) {
            $body['ListQuery'] = $request->listQueryShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListNodes',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询调度节点列表。
     *  *
     * @param ListNodesRequest $request ListNodesRequest
     *
     * @return ListNodesResponse ListNodesResponse
     */
    public function listNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNodesWithOptions($request, $runtime);
    }

    /**
     * @summary 分页获取权限操作列表
     *  *
     * @param ListResourcePermissionOperationLogRequest $tmpReq  ListResourcePermissionOperationLogRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListResourcePermissionOperationLogResponse ListResourcePermissionOperationLogResponse
     */
    public function listResourcePermissionOperationLogWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListResourcePermissionOperationLogShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->listQuery)) {
            $request->listQueryShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->listQuery, 'ListQuery', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->opTenantId)) {
            $query['OpTenantId'] = $request->opTenantId;
        }
        $body = [];
        if (!Utils::isUnset($request->listQueryShrink)) {
            $body['ListQuery'] = $request->listQueryShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListResourcePermissionOperationLog',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListResourcePermissionOperationLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 分页获取权限操作列表
     *  *
     * @param ListResourcePermissionOperationLogRequest $request ListResourcePermissionOperationLogRequest
     *
     * @return ListResourcePermissionOperationLogResponse ListResourcePermissionOperationLogResponse
     */
    public function listResourcePermissionOperationLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listResourcePermissionOperationLogWithOptions($request, $runtime);
    }

    /**
     * @summary 分页获取权限记录列表
     *  *
     * @param ListResourcePermissionsRequest $tmpReq  ListResourcePermissionsRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ListResourcePermissionsResponse ListResourcePermissionsResponse
     */
    public function listResourcePermissionsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListResourcePermissionsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->listQuery)) {
            $request->listQueryShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->listQuery, 'ListQuery', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->opTenantId)) {
            $query['OpTenantId'] = $request->opTenantId;
        }
        $body = [];
        if (!Utils::isUnset($request->listQueryShrink)) {
            $body['ListQuery'] = $request->listQueryShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListResourcePermissions',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListResourcePermissionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 分页获取权限记录列表
     *  *
     * @param ListResourcePermissionsRequest $request ListResourcePermissionsRequest
     *
     * @return ListResourcePermissionsResponse ListResourcePermissionsResponse
     */
    public function listResourcePermissions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listResourcePermissionsWithOptions($request, $runtime);
    }

    /**
     * @summary 查询租户成员列表
     *  *
     * @param ListTenantMembersRequest $tmpReq  ListTenantMembersRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTenantMembersResponse ListTenantMembersResponse
     */
    public function listTenantMembersWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListTenantMembersShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->listQuery)) {
            $request->listQueryShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->listQuery, 'ListQuery', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->opTenantId)) {
            $query['OpTenantId'] = $request->opTenantId;
        }
        $body = [];
        if (!Utils::isUnset($request->listQueryShrink)) {
            $body['ListQuery'] = $request->listQueryShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListTenantMembers',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTenantMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询租户成员列表
     *  *
     * @param ListTenantMembersRequest $request ListTenantMembersRequest
     *
     * @return ListTenantMembersResponse ListTenantMembersResponse
     */
    public function listTenantMembers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTenantMembersWithOptions($request, $runtime);
    }

    /**
     * @summary 用户组成员列表分页查询.
     *  *
     * @param ListUserGroupMembersRequest $tmpReq  ListUserGroupMembersRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListUserGroupMembersResponse ListUserGroupMembersResponse
     */
    public function listUserGroupMembersWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListUserGroupMembersShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->listQuery)) {
            $request->listQueryShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->listQuery, 'ListQuery', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->opTenantId)) {
            $query['OpTenantId'] = $request->opTenantId;
        }
        $body = [];
        if (!Utils::isUnset($request->listQueryShrink)) {
            $body['ListQuery'] = $request->listQueryShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListUserGroupMembers',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListUserGroupMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 用户组成员列表分页查询.
     *  *
     * @param ListUserGroupMembersRequest $request ListUserGroupMembersRequest
     *
     * @return ListUserGroupMembersResponse ListUserGroupMembersResponse
     */
    public function listUserGroupMembers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserGroupMembersWithOptions($request, $runtime);
    }

    /**
     * @summary 用户组列表分页查询.
     *  *
     * @param ListUserGroupsRequest $tmpReq  ListUserGroupsRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListUserGroupsResponse ListUserGroupsResponse
     */
    public function listUserGroupsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListUserGroupsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->listQuery)) {
            $request->listQueryShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->listQuery, 'ListQuery', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->opTenantId)) {
            $query['OpTenantId'] = $request->opTenantId;
        }
        $body = [];
        if (!Utils::isUnset($request->listQueryShrink)) {
            $body['ListQuery'] = $request->listQueryShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListUserGroups',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListUserGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 用户组列表分页查询.
     *  *
     * @param ListUserGroupsRequest $request ListUserGroupsRequest
     *
     * @return ListUserGroupsResponse ListUserGroupsResponse
     */
    public function listUserGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserGroupsWithOptions($request, $runtime);
    }

    /**
     * @summary 运维实例。
     *  *
     * @param OperateInstanceRequest $tmpReq  OperateInstanceRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return OperateInstanceResponse OperateInstanceResponse
     */
    public function operateInstanceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new OperateInstanceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->operateCommand)) {
            $request->operateCommandShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->operateCommand, 'OperateCommand', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->env)) {
            $query['Env'] = $request->env;
        }
        if (!Utils::isUnset($request->opTenantId)) {
            $query['OpTenantId'] = $request->opTenantId;
        }
        $body = [];
        if (!Utils::isUnset($request->operateCommandShrink)) {
            $body['OperateCommand'] = $request->operateCommandShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'OperateInstance',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OperateInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 运维实例。
     *  *
     * @param OperateInstanceRequest $request OperateInstanceRequest
     *
     * @return OperateInstanceResponse OperateInstanceResponse
     */
    public function operateInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary 暂停物理节点调度。
     *  *
     * @param PausePhysicalNodeRequest $tmpReq  PausePhysicalNodeRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return PausePhysicalNodeResponse PausePhysicalNodeResponse
     */
    public function pausePhysicalNodeWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new PausePhysicalNodeShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->pauseCommand)) {
            $request->pauseCommandShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->pauseCommand, 'PauseCommand', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->env)) {
            $query['Env'] = $request->env;
        }
        if (!Utils::isUnset($request->opTenantId)) {
            $query['OpTenantId'] = $request->opTenantId;
        }
        $body = [];
        if (!Utils::isUnset($request->pauseCommandShrink)) {
            $body['PauseCommand'] = $request->pauseCommandShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PausePhysicalNode',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PausePhysicalNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 暂停物理节点调度。
     *  *
     * @param PausePhysicalNodeRequest $request PausePhysicalNodeRequest
     *
     * @return PausePhysicalNodeResponse PausePhysicalNodeResponse
     */
    public function pausePhysicalNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pausePhysicalNodeWithOptions($request, $runtime);
    }

    /**
     * @summary 删除租户成员
     *  *
     * @param RemoveTenantMemberRequest $tmpReq  RemoveTenantMemberRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveTenantMemberResponse RemoveTenantMemberResponse
     */
    public function removeTenantMemberWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RemoveTenantMemberShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->removeCommand)) {
            $request->removeCommandShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->removeCommand, 'RemoveCommand', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->opTenantId)) {
            $query['OpTenantId'] = $request->opTenantId;
        }
        $body = [];
        if (!Utils::isUnset($request->removeCommandShrink)) {
            $body['RemoveCommand'] = $request->removeCommandShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RemoveTenantMember',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveTenantMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除租户成员
     *  *
     * @param RemoveTenantMemberRequest $request RemoveTenantMemberRequest
     *
     * @return RemoveTenantMemberResponse RemoveTenantMemberResponse
     */
    public function removeTenantMember($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeTenantMemberWithOptions($request, $runtime);
    }

    /**
     * @summary 移除用户组成员.
     *  *
     * @param RemoveUserGroupMemberRequest $tmpReq  RemoveUserGroupMemberRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveUserGroupMemberResponse RemoveUserGroupMemberResponse
     */
    public function removeUserGroupMemberWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RemoveUserGroupMemberShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->removeCommand)) {
            $request->removeCommandShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->removeCommand, 'RemoveCommand', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->opTenantId)) {
            $query['OpTenantId'] = $request->opTenantId;
        }
        $body = [];
        if (!Utils::isUnset($request->removeCommandShrink)) {
            $body['RemoveCommand'] = $request->removeCommandShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RemoveUserGroupMember',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveUserGroupMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 移除用户组成员.
     *  *
     * @param RemoveUserGroupMemberRequest $request RemoveUserGroupMemberRequest
     *
     * @return RemoveUserGroupMemberResponse RemoveUserGroupMemberResponse
     */
    public function removeUserGroupMember($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeUserGroupMemberWithOptions($request, $runtime);
    }

    /**
     * @summary 恢复物理节点调度。
     *  *
     * @param ResumePhysicalNodeRequest $tmpReq  ResumePhysicalNodeRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ResumePhysicalNodeResponse ResumePhysicalNodeResponse
     */
    public function resumePhysicalNodeWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ResumePhysicalNodeShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->resumeCommand)) {
            $request->resumeCommandShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->resumeCommand, 'ResumeCommand', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->env)) {
            $query['Env'] = $request->env;
        }
        if (!Utils::isUnset($request->opTenantId)) {
            $query['OpTenantId'] = $request->opTenantId;
        }
        $body = [];
        if (!Utils::isUnset($request->resumeCommandShrink)) {
            $body['ResumeCommand'] = $request->resumeCommandShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ResumePhysicalNode',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResumePhysicalNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 恢复物理节点调度。
     *  *
     * @param ResumePhysicalNodeRequest $request ResumePhysicalNodeRequest
     *
     * @return ResumePhysicalNodeResponse ResumePhysicalNodeResponse
     */
    public function resumePhysicalNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resumePhysicalNodeWithOptions($request, $runtime);
    }

    /**
     * @summary 回收用户资源授权
     *  *
     * @param RevokeResourcePermissionRequest $tmpReq  RevokeResourcePermissionRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return RevokeResourcePermissionResponse RevokeResourcePermissionResponse
     */
    public function revokeResourcePermissionWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RevokeResourcePermissionShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->revokeCommand)) {
            $request->revokeCommandShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->revokeCommand, 'RevokeCommand', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->opTenantId)) {
            $query['OpTenantId'] = $request->opTenantId;
        }
        $body = [];
        if (!Utils::isUnset($request->revokeCommandShrink)) {
            $body['RevokeCommand'] = $request->revokeCommandShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RevokeResourcePermission',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RevokeResourcePermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 回收用户资源授权
     *  *
     * @param RevokeResourcePermissionRequest $request RevokeResourcePermissionRequest
     *
     * @return RevokeResourcePermissionResponse RevokeResourcePermissionResponse
     */
    public function revokeResourcePermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revokeResourcePermissionWithOptions($request, $runtime);
    }

    /**
     * @summary 编辑即席查询文件。
     *  *
     * @param UpdateAdHocFileRequest $tmpReq  UpdateAdHocFileRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateAdHocFileResponse UpdateAdHocFileResponse
     */
    public function updateAdHocFileWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateAdHocFileShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->updateCommand)) {
            $request->updateCommandShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->updateCommand, 'UpdateCommand', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->opTenantId)) {
            $query['OpTenantId'] = $request->opTenantId;
        }
        $body = [];
        if (!Utils::isUnset($request->updateCommandShrink)) {
            $body['UpdateCommand'] = $request->updateCommandShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateAdHocFile',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAdHocFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 编辑即席查询文件。
     *  *
     * @param UpdateAdHocFileRequest $request UpdateAdHocFileRequest
     *
     * @return UpdateAdHocFileResponse UpdateAdHocFileResponse
     */
    public function updateAdHocFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAdHocFileWithOptions($request, $runtime);
    }

    /**
     * @summary 编辑数据源基本信息
     *  *
     * @param UpdateDataSourceBasicInfoRequest $tmpReq  UpdateDataSourceBasicInfoRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateDataSourceBasicInfoResponse UpdateDataSourceBasicInfoResponse
     */
    public function updateDataSourceBasicInfoWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateDataSourceBasicInfoShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->updateCommand)) {
            $request->updateCommandShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->updateCommand, 'UpdateCommand', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->opTenantId)) {
            $query['OpTenantId'] = $request->opTenantId;
        }
        $body = [];
        if (!Utils::isUnset($request->updateCommandShrink)) {
            $body['UpdateCommand'] = $request->updateCommandShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateDataSourceBasicInfo',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateDataSourceBasicInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 编辑数据源基本信息
     *  *
     * @param UpdateDataSourceBasicInfoRequest $request UpdateDataSourceBasicInfoRequest
     *
     * @return UpdateDataSourceBasicInfoResponse UpdateDataSourceBasicInfoResponse
     */
    public function updateDataSourceBasicInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDataSourceBasicInfoWithOptions($request, $runtime);
    }

    /**
     * @summary 编辑数据源连接配置项
     *  *
     * @param UpdateDataSourceConfigRequest $tmpReq  UpdateDataSourceConfigRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateDataSourceConfigResponse UpdateDataSourceConfigResponse
     */
    public function updateDataSourceConfigWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateDataSourceConfigShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->updateCommand)) {
            $request->updateCommandShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->updateCommand, 'UpdateCommand', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->opTenantId)) {
            $query['OpTenantId'] = $request->opTenantId;
        }
        $body = [];
        if (!Utils::isUnset($request->updateCommandShrink)) {
            $body['UpdateCommand'] = $request->updateCommandShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateDataSourceConfig',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateDataSourceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 编辑数据源连接配置项
     *  *
     * @param UpdateDataSourceConfigRequest $request UpdateDataSourceConfigRequest
     *
     * @return UpdateDataSourceConfigResponse UpdateDataSourceConfigResponse
     */
    public function updateDataSourceConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDataSourceConfigWithOptions($request, $runtime);
    }

    /**
     * @summary 修改菜单树文件所在目录
     *  *
     * @param UpdateFileDirectoryRequest $request UpdateFileDirectoryRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateFileDirectoryResponse UpdateFileDirectoryResponse
     */
    public function updateFileDirectoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directory)) {
            $query['Directory'] = $request->directory;
        }
        if (!Utils::isUnset($request->fileId)) {
            $query['FileId'] = $request->fileId;
        }
        if (!Utils::isUnset($request->opTenantId)) {
            $query['OpTenantId'] = $request->opTenantId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateFileDirectory',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateFileDirectoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改菜单树文件所在目录
     *  *
     * @param UpdateFileDirectoryRequest $request UpdateFileDirectoryRequest
     *
     * @return UpdateFileDirectoryResponse UpdateFileDirectoryResponse
     */
    public function updateFileDirectory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateFileDirectoryWithOptions($request, $runtime);
    }

    /**
     * @summary 修改菜单树文件名称
     *  *
     * @param UpdateFileNameRequest $request UpdateFileNameRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateFileNameResponse UpdateFileNameResponse
     */
    public function updateFileNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileId)) {
            $query['FileId'] = $request->fileId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->opTenantId)) {
            $query['OpTenantId'] = $request->opTenantId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateFileName',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateFileNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改菜单树文件名称
     *  *
     * @param UpdateFileNameRequest $request UpdateFileNameRequest
     *
     * @return UpdateFileNameResponse UpdateFileNameResponse
     */
    public function updateFileName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateFileNameWithOptions($request, $runtime);
    }

    /**
     * @summary 编辑租户成员
     *  *
     * @param UpdateTenantMemberRequest $tmpReq  UpdateTenantMemberRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateTenantMemberResponse UpdateTenantMemberResponse
     */
    public function updateTenantMemberWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateTenantMemberShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->updateCommand)) {
            $request->updateCommandShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->updateCommand, 'UpdateCommand', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->opTenantId)) {
            $query['OpTenantId'] = $request->opTenantId;
        }
        $body = [];
        if (!Utils::isUnset($request->updateCommandShrink)) {
            $body['UpdateCommand'] = $request->updateCommandShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateTenantMember',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateTenantMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 编辑租户成员
     *  *
     * @param UpdateTenantMemberRequest $request UpdateTenantMemberRequest
     *
     * @return UpdateTenantMemberResponse UpdateTenantMemberResponse
     */
    public function updateTenantMember($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTenantMemberWithOptions($request, $runtime);
    }

    /**
     * @summary 编辑用户组.
     *  *
     * @param UpdateUserGroupRequest $tmpReq  UpdateUserGroupRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateUserGroupResponse UpdateUserGroupResponse
     */
    public function updateUserGroupWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateUserGroupShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->updateCommand)) {
            $request->updateCommandShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->updateCommand, 'UpdateCommand', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->opTenantId)) {
            $query['OpTenantId'] = $request->opTenantId;
        }
        $body = [];
        if (!Utils::isUnset($request->updateCommandShrink)) {
            $body['UpdateCommand'] = $request->updateCommandShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateUserGroup',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateUserGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 编辑用户组.
     *  *
     * @param UpdateUserGroupRequest $request UpdateUserGroupRequest
     *
     * @return UpdateUserGroupResponse UpdateUserGroupResponse
     */
    public function updateUserGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUserGroupWithOptions($request, $runtime);
    }

    /**
     * @summary 编辑用户组启用开关.
     *  *
     * @param UpdateUserGroupSwitchRequest $request UpdateUserGroupSwitchRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateUserGroupSwitchResponse UpdateUserGroupSwitchResponse
     */
    public function updateUserGroupSwitchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->active)) {
            $query['Active'] = $request->active;
        }
        if (!Utils::isUnset($request->opTenantId)) {
            $query['OpTenantId'] = $request->opTenantId;
        }
        if (!Utils::isUnset($request->userGroupId)) {
            $query['UserGroupId'] = $request->userGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateUserGroupSwitch',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateUserGroupSwitchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 编辑用户组启用开关.
     *  *
     * @param UpdateUserGroupSwitchRequest $request UpdateUserGroupSwitchRequest
     *
     * @return UpdateUserGroupSwitchResponse UpdateUserGroupSwitchResponse
     */
    public function updateUserGroupSwitch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUserGroupSwitchWithOptions($request, $runtime);
    }
}
