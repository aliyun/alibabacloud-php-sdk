<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Csas\V20230120\Models\AttachApplication2ConnectorRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\AttachApplication2ConnectorResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\AttachApplication2ConnectorShrinkRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\AttachPolicy2ApprovalProcessRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\AttachPolicy2ApprovalProcessResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateApprovalProcessRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateApprovalProcessResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateApprovalProcessShrinkRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateClientUserRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateClientUserResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateDynamicRouteRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateDynamicRouteResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateEnterpriseAcceleratePolicyRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateEnterpriseAcceleratePolicyResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateIdpDepartmentRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateIdpDepartmentResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreatePrivateAccessApplicationRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreatePrivateAccessApplicationResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreatePrivateAccessApplicationShrinkRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreatePrivateAccessPolicyRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreatePrivateAccessPolicyResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreatePrivateAccessTagRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreatePrivateAccessTagResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateRegistrationPolicyRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateRegistrationPolicyResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateRegistrationPolicyShrinkRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateUserGroupRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateUserGroupResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateWmBaseImageRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateWmBaseImageResponse;
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
use AlibabaCloud\SDK\Csas\V20230120\Models\DeleteDynamicRouteRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeleteDynamicRouteResponse;
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
use AlibabaCloud\SDK\Csas\V20230120\Models\DeleteRegistrationPoliciesRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeleteRegistrationPoliciesResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeleteUserDevicesRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeleteUserDevicesResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeleteUserGroupRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeleteUserGroupResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\DetachApplication2ConnectorRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\DetachApplication2ConnectorResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\DetachApplication2ConnectorShrinkRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\DetachPolicy2ApprovalProcessRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\DetachPolicy2ApprovalProcessResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ExportUserDevicesRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ExportUserDevicesResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetActiveIdpConfigResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetApprovalProcessRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetApprovalProcessResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetApprovalRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetApprovalResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetApprovalSchemaRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetApprovalSchemaResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetBootAndAntiUninstallPolicyResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetClientUserRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetClientUserResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetDynamicRouteRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetDynamicRouteResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetIdpConfigRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetIdpConfigResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetPrivateAccessApplicationRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetPrivateAccessApplicationResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetPrivateAccessPolicyRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetPrivateAccessPolicyResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetRegistrationPolicyRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetRegistrationPolicyResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetUserDeviceRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetUserDeviceResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetUserGroupRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetUserGroupResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetWmEmbedTaskRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetWmEmbedTaskResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetWmExtractTaskRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetWmExtractTaskResponse;
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
use AlibabaCloud\SDK\Csas\V20230120\Models\ListDynamicDisposalProcessesRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListDynamicDisposalProcessesResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListDynamicRouteRegionsResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListDynamicRoutesRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListDynamicRoutesResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListExcessiveDeviceRegistrationApplicationsRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListExcessiveDeviceRegistrationApplicationsResponse;
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
use AlibabaCloud\SDK\Csas\V20230120\Models\ListRegistrationPoliciesForUserGroupRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListRegistrationPoliciesForUserGroupResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListRegistrationPoliciesRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListRegistrationPoliciesResponse;
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
use AlibabaCloud\SDK\Csas\V20230120\Models\LookupWmInfoMappingRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\LookupWmInfoMappingResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\RevokeUserSessionRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\RevokeUserSessionResponse;
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
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateDynamicRouteRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateDynamicRouteResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateExcessiveDeviceRegistrationApplicationsStatusRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateExcessiveDeviceRegistrationApplicationsStatusResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateIdpDepartmentRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateIdpDepartmentResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateNacUserCertStatusRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateNacUserCertStatusResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdatePrivateAccessApplicationRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdatePrivateAccessApplicationResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdatePrivateAccessApplicationShrinkRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdatePrivateAccessPolicyRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdatePrivateAccessPolicyResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateRegistrationPolicyRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateRegistrationPolicyResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateRegistrationPolicyShrinkRequest;
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
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Csas extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
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
     * 挂载connector的应用.
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
     * 挂载connector的应用.
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
     * 挂载业务策略至指定审批流程.
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
     * 挂载业务策略至指定审批流程.
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
     * 创建审批流程.
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
     * 创建审批流程.
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
     * 创建自定义身份源用户.
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
     * 创建自定义身份源用户.
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
     * 创建动态路由.
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
     * 创建动态路由.
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
     * 创建加速策略.
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
     * 创建加速策略.
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
     * 创建自定义身份源部门.
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
     * 创建自定义身份源部门.
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
     * Creates an office application within the current Alibaba Cloud account.
     *
     * @remarks
     * By default, you can create a maximum of 500 office applications.
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

        $body = [];
        $bodyFlat = [];
        if (null !== $request->addresses) {
            @$bodyFlat['Addresses'] = $request->addresses;
        }

        if (null !== $request->browserAccessStatus) {
            @$body['BrowserAccessStatus'] = $request->browserAccessStatus;
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
     * Creates an office application within the current Alibaba Cloud account.
     *
     * @remarks
     * By default, you can create a maximum of 500 office applications.
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
     * 创建内网访问策略.
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

        if (null !== $request->userGroupIds) {
            @$bodyFlat['UserGroupIds'] = $request->userGroupIds;
        }

        if (null !== $request->userGroupMode) {
            @$body['UserGroupMode'] = $request->userGroupMode;
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
     * 创建内网访问策略.
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
     * 创建内网访问标签.
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
     * 创建内网访问标签.
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
     * 创建设备注册策略.
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
     * 创建设备注册策略.
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
     * 创建用户组.
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
     * 创建用户组.
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
     * 创建数字水印暗水印透明底图.
     *
     * @param request - CreateWmBaseImageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateWmBaseImageResponse
     *
     * @param CreateWmBaseImageRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateWmBaseImageResponse
     */
    public function createWmBaseImageWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->height) {
            @$body['Height'] = $request->height;
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
     * 创建数字水印暗水印透明底图.
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
     * 创建嵌入水印任务
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
        if (null !== $tmpReq->csvControl) {
            $request->csvControlShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->csvControl, 'CsvControl', 'json');
        }

        if (null !== $tmpReq->documentControl) {
            $request->documentControlShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->documentControl, 'DocumentControl', 'json');
        }

        $query = [];
        if (null !== $request->csvControlShrink) {
            @$query['CsvControl'] = $request->csvControlShrink;
        }

        $body = [];
        if (null !== $request->documentControlShrink) {
            @$body['DocumentControl'] = $request->documentControlShrink;
        }

        if (null !== $request->fileUrl) {
            @$body['FileUrl'] = $request->fileUrl;
        }

        if (null !== $request->filename) {
            @$body['Filename'] = $request->filename;
        }

        if (null !== $request->imageEmbedJpegQuality) {
            @$body['ImageEmbedJpegQuality'] = $request->imageEmbedJpegQuality;
        }

        if (null !== $request->imageEmbedLevel) {
            @$body['ImageEmbedLevel'] = $request->imageEmbedLevel;
        }

        if (null !== $request->videoBitrate) {
            @$body['VideoBitrate'] = $request->videoBitrate;
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
            'query' => Utils::query($query),
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
     * 创建嵌入水印任务
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
     * Creates a digital watermark extraction task.
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

        $query = [];
        if (null !== $request->csvControlShrink) {
            @$query['CsvControl'] = $request->csvControlShrink;
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
     * Creates a digital watermark extraction task.
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
     * 创建一条字符串水印信息到数字水印信息的映射记录.
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
     * 创建一条字符串水印信息到数字水印信息的映射记录.
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
     * 批量删除审批流程.
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
     * 批量删除审批流程.
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
     * 删除自定义身份源指定用户.
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
     * 删除自定义身份源指定用户.
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
     * 删除动态路由.
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
     * 删除动态路由.
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
     * 删除指定自定义身份源部门.
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
     * 删除指定自定义身份源部门.
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
     * DeleteOtpConfig.
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
     * DeleteOtpConfig.
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
     * 删除内网访问应用.
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
     * 删除内网访问应用.
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
     * 删除内网访问策略.
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
     * 删除内网访问策略.
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
     * 删除内网访问标签.
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
     * 删除内网访问标签.
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
     * 删除设备注册策略.
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
     * 删除设备注册策略.
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
     * 批量删除用户非在线设备.
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
     * 批量删除用户非在线设备.
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
     * 删除用户组.
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
     * 删除用户组.
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
     * 卸载connector的应用.
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

    /**
     * 卸载connector的应用.
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
     * 解绑业务策略与审批流程.
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
     * 解绑业务策略与审批流程.
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
     * 批量查询用户设备列表.
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
     * 批量查询用户设备列表.
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
     * 查询已启用的身份源配置.
     *
     * @param request - GetActiveIdpConfigRequest
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
     * 查询已启用的身份源配置.
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
     * 查询审批.
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
     * 查询审批.
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
     * 查询审批流程.
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
     * 查询审批流程.
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
     * 查询审批动态模板
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
     * 查询审批动态模板
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
     * 查询自启动与防卸载策略配置.
     *
     * @param request - GetBootAndAntiUninstallPolicyRequest
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
     * 查询自启动与防卸载策略配置.
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
     * 查询自定义身份源指定用户.
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
     * 查询自定义身份源指定用户.
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
     * 查询动态路由详情.
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
     * 查询动态路由详情.
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
     * 查询身份源配置详情.
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
     * 查询身份源配置详情.
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
     * Queries the details of the office applications that belong to the current Alibaba Cloud account.
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
     * Queries the details of the office applications that belong to the current Alibaba Cloud account.
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
     * 查询内网访问策略详情.
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
     * 查询内网访问策略详情.
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
     * 查询设备注册策略详情.
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
     * 查询设备注册策略详情.
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
     * 查询用户设备详情.
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
     * 查询用户设备详情.
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
     * 查询用户组详情.
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
     * 查询用户组详情.
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
     * 查询嵌入水印任务
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
     * 查询嵌入水印任务
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
     * 查询文件水印提取任务详情.
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
     * 查询文件水印提取任务详情.
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
     * 批量查询内网访问策略的应用.
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
     * 批量查询内网访问策略的应用.
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
     * 批量查询内网访问标签的应用.
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
     * 批量查询内网访问标签的应用.
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
     * 列表查询审批流程.
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
     * 列表查询审批流程.
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
     * 查询审批渲染模板关联的流程.
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
     * 查询审批渲染模板关联的流程.
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
     * 列表查询审批动态模板
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
     * 列表查询审批动态模板
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
     * 查询审批流程关联的渲染模板
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
     * 查询审批流程关联的渲染模板
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
     * 批量查询审批.
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
     * 批量查询审批.
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
     * 查询自定义身份源用户.
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
     * 查询自定义身份源用户.
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
     * 批量查询connector.
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
     * 批量查询connector.
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
     * 批量查询动态策略处置流程.
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
     * 批量查询动态策略处置流程.
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
     * 批量查询动态路由的地域
     *
     * @param request - ListDynamicRouteRegionsRequest
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
     * 批量查询动态路由的地域
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
     * 批量查询动态路由.
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
     * 批量查询动态路由.
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
     * 批量查询超额注册申请列表.
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
     * 批量查询超额注册申请列表.
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
     * 查询IDP配置.
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
     * 查询IDP配置.
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
     * 查询自定义身份源部门.
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
     * 查询自定义身份源部门.
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
     * 入网用户列表.
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
     * 入网用户列表.
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
     * 批量查询内网访问应用的策略.
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
     * 批量查询内网访问应用的策略.
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
     * 批量查询内网访问标签的策略.
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
     * 批量查询内网访问标签的策略.
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
     * 批量查询用户组的策略.
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
     * 批量查询用户组的策略.
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
     * pop节点流量统计
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
     * pop节点流量统计
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
     * 批量查询内网访问应用.
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
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPrivateAccessApplications',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPrivateAccessApplicationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 批量查询内网访问应用.
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
     * 批量查询动态路由的内网访问应用.
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
     * 批量查询动态路由的内网访问应用.
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
     * Queries the private access policies within the current Alibaba Cloud account.
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
     * Queries the private access policies within the current Alibaba Cloud account.
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
     * 批量查询动态路由的内网访问标签.
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
     * 批量查询动态路由的内网访问标签.
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
     * 查询用户设备注册策略列表.
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
     * 查询用户设备注册策略列表.
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
     * 查询用户组相关的设备注册策略.
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
     * 查询用户组相关的设备注册策略.
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
     * 批量查询终端安装软件列表.
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
     * 批量查询终端安装软件列表.
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
     * 批量查询内网访问应用的标签.
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
     * 批量查询内网访问应用的标签.
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
     * 批量查询内网访问策略的标签.
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
     * 批量查询内网访问策略的标签.
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
     * 列表查询卸载申请列表.
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
     * 列表查询卸载申请列表.
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
     * 列表查询用户应用权限.
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
     * 列表查询用户应用权限.
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
     * 批量查询用户设备列表.
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
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListUserDevices',
            'version' => '2023-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListUserDevicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 批量查询用户设备列表.
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
     * 批量查询用户组.
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
     * 批量查询用户组.
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
     * 批量查询内网访问策略的用户组.
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
     * 批量查询内网访问策略的用户组.
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
     * 查询设备注册策略相关用户组.
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
     * 查询设备注册策略相关用户组.
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
     * 列表查询用户零信任策略.
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
     * 列表查询用户零信任策略.
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
     * 列表查询登陆用户.
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
     * 列表查询登陆用户.
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
     * 根据数字水印信息查询字符串水印信息.
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
     * 根据数字水印信息查询字符串水印信息.
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

    // Deprecated
    /**
     * 吊销用户登录会话.
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
     * 吊销用户登录会话.
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
     * 更新审批流程.
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
     * 更新审批流程.
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
     * 修改审批状态
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
     * 修改审批状态
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
     * 更新自启动与防卸载策略配置.
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
     * 更新自启动与防卸载策略配置.
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
     * 修改自定义身份源指定用户.
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
     * 修改自定义身份源指定用户.
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
     * 修改自定义身份源指定用户密码
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
     * 修改自定义身份源指定用户密码
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
     * 修改自定义身份源指定用户启用状态
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
     * 修改自定义身份源指定用户启用状态
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
     * 修改动态路由.
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
     * 修改动态路由.
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
     * 批量更新超额注册申请状态
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
     * 批量更新超额注册申请状态
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
     * 修改指定自定义身份源部门.
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
     * 修改指定自定义身份源部门.
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
     * 更新NAC User 状态
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
     * 更新NAC User 状态
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
     * Modifies the office applications of the current Alibaba Cloud account.
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

        $body = [];
        $bodyFlat = [];
        if (null !== $request->addresses) {
            @$bodyFlat['Addresses'] = $request->addresses;
        }

        if (null !== $request->applicationId) {
            @$body['ApplicationId'] = $request->applicationId;
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
     * Modifies the office applications of the current Alibaba Cloud account.
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
     * 修改内网访问策略.
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

        if (null !== $request->userGroupIds) {
            @$bodyFlat['UserGroupIds'] = $request->userGroupIds;
        }

        if (null !== $request->userGroupMode) {
            @$body['UserGroupMode'] = $request->userGroupMode;
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
     * 修改内网访问策略.
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
     * 修改设备注册策略.
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
     * 修改设备注册策略.
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
     * 批量修改卸载申请状态
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
     * 批量修改卸载申请状态
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
     * 批量更新用户设备共享状态
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
     * 批量更新用户设备共享状态
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
     * 批量更新用户设备状态
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
     * 批量更新用户设备状态
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
     * 修改用户组.
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
     * 修改用户组.
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
     * 批量修改登陆用户状态
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
     * 批量修改登陆用户状态
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
}
