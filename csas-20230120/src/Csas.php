<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Csas\V20230120\Models\AttachApplication2ConnectorRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\AttachApplication2ConnectorResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\AttachApplication2ConnectorShrinkRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateClientUserRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateClientUserResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateDynamicRouteRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateDynamicRouteResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateIdpDepartmentRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateIdpDepartmentResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreatePrivateAccessApplicationRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreatePrivateAccessApplicationResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreatePrivateAccessPolicyRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreatePrivateAccessPolicyResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreatePrivateAccessTagRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreatePrivateAccessTagResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateRegistrationPolicyRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateRegistrationPolicyResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateRegistrationPolicyShrinkRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateUserGroupRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateUserGroupResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeleteClientUserRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeleteClientUserResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeleteDynamicRouteRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeleteDynamicRouteResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeleteIdpDepartmentRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeleteIdpDepartmentResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeletePrivateAccessApplicationRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeletePrivateAccessApplicationResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeletePrivateAccessPolicyRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeletePrivateAccessPolicyResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeletePrivateAccessTagRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeletePrivateAccessTagResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeleteRegistrationPoliciesRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeleteRegistrationPoliciesResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeleteUserGroupRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeleteUserGroupResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\DetachApplication2ConnectorRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\DetachApplication2ConnectorResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\DetachApplication2ConnectorShrinkRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetActiveIdpConfigResponse;
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
use AlibabaCloud\SDK\Csas\V20230120\Models\ListApplicationsForPrivateAccessPolicyRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListApplicationsForPrivateAccessPolicyResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListApplicationsForPrivateAccessTagRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListApplicationsForPrivateAccessTagResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListClientUsersRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListClientUsersResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListConnectorsRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListConnectorsResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListDynamicRouteRegionsResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListDynamicRoutesRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListDynamicRoutesResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListExcessiveDeviceRegistrationApplicationsRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListExcessiveDeviceRegistrationApplicationsResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListIdpConfigsRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListIdpConfigsResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListIdpDepartmentsRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListIdpDepartmentsResponse;
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
use AlibabaCloud\SDK\Csas\V20230120\Models\ListUserDevicesRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListUserDevicesResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListUserGroupsForPrivateAccessPolicyRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListUserGroupsForPrivateAccessPolicyResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListUserGroupsForRegistrationPolicyRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListUserGroupsForRegistrationPolicyResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListUserGroupsRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListUserGroupsResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListUsersRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListUsersResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\RevokeUserSessionRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\RevokeUserSessionResponse;
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
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdatePrivateAccessApplicationRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdatePrivateAccessApplicationResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdatePrivateAccessPolicyRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdatePrivateAccessPolicyResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateRegistrationPolicyRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateRegistrationPolicyResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateRegistrationPolicyShrinkRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateUserDevicesSharingStatusRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateUserDevicesSharingStatusResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateUserDevicesStatusRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateUserDevicesStatusResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateUserGroupRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateUserGroupResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateUsersStatusRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateUsersStatusResponse;
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary 挂载connector的应用
     *  *
     * @param AttachApplication2ConnectorRequest $tmpReq  AttachApplication2ConnectorRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return AttachApplication2ConnectorResponse AttachApplication2ConnectorResponse
     */
    public function attachApplication2ConnectorWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AttachApplication2ConnectorShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->applicationIds)) {
            $request->applicationIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->applicationIds, 'ApplicationIds', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->applicationIdsShrink)) {
            $body['ApplicationIds'] = $request->applicationIdsShrink;
        }
        if (!Utils::isUnset($request->connectorId)) {
            $body['ConnectorId'] = $request->connectorId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AttachApplication2Connector',
            'version'     => '2023-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AttachApplication2ConnectorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 挂载connector的应用
     *  *
     * @param AttachApplication2ConnectorRequest $request AttachApplication2ConnectorRequest
     *
     * @return AttachApplication2ConnectorResponse AttachApplication2ConnectorResponse
     */
    public function attachApplication2Connector($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachApplication2ConnectorWithOptions($request, $runtime);
    }

    /**
     * @summary 创建自定义身份源用户
     *  *
     * @param CreateClientUserRequest $request CreateClientUserRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateClientUserResponse CreateClientUserResponse
     */
    public function createClientUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->departmentId)) {
            $query['DepartmentId'] = $request->departmentId;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->email)) {
            $query['Email'] = $request->email;
        }
        if (!Utils::isUnset($request->idpConfigId)) {
            $query['IdpConfigId'] = $request->idpConfigId;
        }
        if (!Utils::isUnset($request->mobileNumber)) {
            $query['MobileNumber'] = $request->mobileNumber;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->username)) {
            $query['Username'] = $request->username;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateClientUser',
            'version'     => '2023-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateClientUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建自定义身份源用户
     *  *
     * @param CreateClientUserRequest $request CreateClientUserRequest
     *
     * @return CreateClientUserResponse CreateClientUserResponse
     */
    public function createClientUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createClientUserWithOptions($request, $runtime);
    }

    /**
     * @summary 创建动态路由
     *  *
     * @param CreateDynamicRouteRequest $request CreateDynamicRouteRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDynamicRouteResponse CreateDynamicRouteResponse
     */
    public function createDynamicRouteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body     = [];
        $bodyFlat = [];
        if (!Utils::isUnset($request->applicationIds)) {
            $bodyFlat['ApplicationIds'] = $request->applicationIds;
        }
        if (!Utils::isUnset($request->applicationType)) {
            $body['ApplicationType'] = $request->applicationType;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->dynamicRouteType)) {
            $body['DynamicRouteType'] = $request->dynamicRouteType;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->nextHop)) {
            $body['NextHop'] = $request->nextHop;
        }
        if (!Utils::isUnset($request->priority)) {
            $body['Priority'] = $request->priority;
        }
        if (!Utils::isUnset($request->regionIds)) {
            $bodyFlat['RegionIds'] = $request->regionIds;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->tagIds)) {
            $bodyFlat['TagIds'] = $request->tagIds;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateDynamicRoute',
            'version'     => '2023-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDynamicRouteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建动态路由
     *  *
     * @param CreateDynamicRouteRequest $request CreateDynamicRouteRequest
     *
     * @return CreateDynamicRouteResponse CreateDynamicRouteResponse
     */
    public function createDynamicRoute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDynamicRouteWithOptions($request, $runtime);
    }

    /**
     * @summary 创建自定义身份源部门
     *  *
     * @param CreateIdpDepartmentRequest $request CreateIdpDepartmentRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateIdpDepartmentResponse CreateIdpDepartmentResponse
     */
    public function createIdpDepartmentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->departmentName)) {
            $query['DepartmentName'] = $request->departmentName;
        }
        if (!Utils::isUnset($request->idpConfigId)) {
            $query['IdpConfigId'] = $request->idpConfigId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateIdpDepartment',
            'version'     => '2023-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateIdpDepartmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建自定义身份源部门
     *  *
     * @param CreateIdpDepartmentRequest $request CreateIdpDepartmentRequest
     *
     * @return CreateIdpDepartmentResponse CreateIdpDepartmentResponse
     */
    public function createIdpDepartment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createIdpDepartmentWithOptions($request, $runtime);
    }

    /**
     * @summary 创建内网访问应用
     *  *
     * @param CreatePrivateAccessApplicationRequest $request CreatePrivateAccessApplicationRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreatePrivateAccessApplicationResponse CreatePrivateAccessApplicationResponse
     */
    public function createPrivateAccessApplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body     = [];
        $bodyFlat = [];
        if (!Utils::isUnset($request->addresses)) {
            $bodyFlat['Addresses'] = $request->addresses;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->portRanges)) {
            $bodyFlat['PortRanges'] = $request->portRanges;
        }
        if (!Utils::isUnset($request->protocol)) {
            $body['Protocol'] = $request->protocol;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->tagIds)) {
            $bodyFlat['TagIds'] = $request->tagIds;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreatePrivateAccessApplication',
            'version'     => '2023-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreatePrivateAccessApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建内网访问应用
     *  *
     * @param CreatePrivateAccessApplicationRequest $request CreatePrivateAccessApplicationRequest
     *
     * @return CreatePrivateAccessApplicationResponse CreatePrivateAccessApplicationResponse
     */
    public function createPrivateAccessApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPrivateAccessApplicationWithOptions($request, $runtime);
    }

    /**
     * @summary 创建内网访问策略
     *  *
     * @param CreatePrivateAccessPolicyRequest $request CreatePrivateAccessPolicyRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return CreatePrivateAccessPolicyResponse CreatePrivateAccessPolicyResponse
     */
    public function createPrivateAccessPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body     = [];
        $bodyFlat = [];
        if (!Utils::isUnset($request->applicationIds)) {
            $bodyFlat['ApplicationIds'] = $request->applicationIds;
        }
        if (!Utils::isUnset($request->applicationType)) {
            $body['ApplicationType'] = $request->applicationType;
        }
        if (!Utils::isUnset($request->customUserAttributes)) {
            $bodyFlat['CustomUserAttributes'] = $request->customUserAttributes;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->deviceAttributeId)) {
            $body['DeviceAttributeId'] = $request->deviceAttributeId;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->policyAction)) {
            $body['PolicyAction'] = $request->policyAction;
        }
        if (!Utils::isUnset($request->priority)) {
            $body['Priority'] = $request->priority;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->tagIds)) {
            $bodyFlat['TagIds'] = $request->tagIds;
        }
        if (!Utils::isUnset($request->userGroupIds)) {
            $bodyFlat['UserGroupIds'] = $request->userGroupIds;
        }
        if (!Utils::isUnset($request->userGroupMode)) {
            $body['UserGroupMode'] = $request->userGroupMode;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreatePrivateAccessPolicy',
            'version'     => '2023-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreatePrivateAccessPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建内网访问策略
     *  *
     * @param CreatePrivateAccessPolicyRequest $request CreatePrivateAccessPolicyRequest
     *
     * @return CreatePrivateAccessPolicyResponse CreatePrivateAccessPolicyResponse
     */
    public function createPrivateAccessPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPrivateAccessPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary 创建内网访问标签
     *  *
     * @param CreatePrivateAccessTagRequest $request CreatePrivateAccessTagRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CreatePrivateAccessTagResponse CreatePrivateAccessTagResponse
     */
    public function createPrivateAccessTagWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreatePrivateAccessTag',
            'version'     => '2023-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreatePrivateAccessTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建内网访问标签
     *  *
     * @param CreatePrivateAccessTagRequest $request CreatePrivateAccessTagRequest
     *
     * @return CreatePrivateAccessTagResponse CreatePrivateAccessTagResponse
     */
    public function createPrivateAccessTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPrivateAccessTagWithOptions($request, $runtime);
    }

    /**
     * @summary 创建设备注册策略
     *  *
     * @param CreateRegistrationPolicyRequest $tmpReq  CreateRegistrationPolicyRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateRegistrationPolicyResponse CreateRegistrationPolicyResponse
     */
    public function createRegistrationPolicyWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateRegistrationPolicyShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->companyLimitCount)) {
            $request->companyLimitCountShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->companyLimitCount, 'CompanyLimitCount', 'json');
        }
        if (!Utils::isUnset($tmpReq->personalLimitCount)) {
            $request->personalLimitCountShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->personalLimitCount, 'PersonalLimitCount', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->companyLimitCountShrink)) {
            $body['CompanyLimitCount'] = $request->companyLimitCountShrink;
        }
        if (!Utils::isUnset($request->companyLimitType)) {
            $body['CompanyLimitType'] = $request->companyLimitType;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->matchMode)) {
            $body['MatchMode'] = $request->matchMode;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->personalLimitCountShrink)) {
            $body['PersonalLimitCount'] = $request->personalLimitCountShrink;
        }
        if (!Utils::isUnset($request->personalLimitType)) {
            $body['PersonalLimitType'] = $request->personalLimitType;
        }
        if (!Utils::isUnset($request->priority)) {
            $body['Priority'] = $request->priority;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        $bodyFlat = [];
        if (!Utils::isUnset($request->userGroupIds)) {
            $bodyFlat['UserGroupIds'] = $request->userGroupIds;
        }
        if (!Utils::isUnset($request->whitelist)) {
            $bodyFlat['Whitelist'] = $request->whitelist;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateRegistrationPolicy',
            'version'     => '2023-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateRegistrationPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建设备注册策略
     *  *
     * @param CreateRegistrationPolicyRequest $request CreateRegistrationPolicyRequest
     *
     * @return CreateRegistrationPolicyResponse CreateRegistrationPolicyResponse
     */
    public function createRegistrationPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRegistrationPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary 创建用户组
     *  *
     * @param CreateUserGroupRequest $request CreateUserGroupRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateUserGroupResponse CreateUserGroupResponse
     */
    public function createUserGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body     = [];
        $bodyFlat = [];
        if (!Utils::isUnset($request->attributes)) {
            $bodyFlat['Attributes'] = $request->attributes;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateUserGroup',
            'version'     => '2023-01-20',
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
     * @summary 创建用户组
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
     * @summary 删除自定义身份源指定用户
     *  *
     * @param DeleteClientUserRequest $request DeleteClientUserRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteClientUserResponse DeleteClientUserResponse
     */
    public function deleteClientUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteClientUser',
            'version'     => '2023-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteClientUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除自定义身份源指定用户
     *  *
     * @param DeleteClientUserRequest $request DeleteClientUserRequest
     *
     * @return DeleteClientUserResponse DeleteClientUserResponse
     */
    public function deleteClientUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteClientUserWithOptions($request, $runtime);
    }

    /**
     * @summary 删除动态路由
     *  *
     * @param DeleteDynamicRouteRequest $request DeleteDynamicRouteRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDynamicRouteResponse DeleteDynamicRouteResponse
     */
    public function deleteDynamicRouteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dynamicRouteId)) {
            $query['DynamicRouteId'] = $request->dynamicRouteId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDynamicRoute',
            'version'     => '2023-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDynamicRouteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除动态路由
     *  *
     * @param DeleteDynamicRouteRequest $request DeleteDynamicRouteRequest
     *
     * @return DeleteDynamicRouteResponse DeleteDynamicRouteResponse
     */
    public function deleteDynamicRoute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDynamicRouteWithOptions($request, $runtime);
    }

    /**
     * @summary 删除指定自定义身份源部门
     *  *
     * @param DeleteIdpDepartmentRequest $request DeleteIdpDepartmentRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteIdpDepartmentResponse DeleteIdpDepartmentResponse
     */
    public function deleteIdpDepartmentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->departmentId)) {
            $query['DepartmentId'] = $request->departmentId;
        }
        if (!Utils::isUnset($request->idpConfigId)) {
            $query['IdpConfigId'] = $request->idpConfigId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteIdpDepartment',
            'version'     => '2023-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteIdpDepartmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除指定自定义身份源部门
     *  *
     * @param DeleteIdpDepartmentRequest $request DeleteIdpDepartmentRequest
     *
     * @return DeleteIdpDepartmentResponse DeleteIdpDepartmentResponse
     */
    public function deleteIdpDepartment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteIdpDepartmentWithOptions($request, $runtime);
    }

    /**
     * @summary 删除内网访问应用
     *  *
     * @param DeletePrivateAccessApplicationRequest $request DeletePrivateAccessApplicationRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeletePrivateAccessApplicationResponse DeletePrivateAccessApplicationResponse
     */
    public function deletePrivateAccessApplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->applicationId)) {
            $body['ApplicationId'] = $request->applicationId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeletePrivateAccessApplication',
            'version'     => '2023-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeletePrivateAccessApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除内网访问应用
     *  *
     * @param DeletePrivateAccessApplicationRequest $request DeletePrivateAccessApplicationRequest
     *
     * @return DeletePrivateAccessApplicationResponse DeletePrivateAccessApplicationResponse
     */
    public function deletePrivateAccessApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePrivateAccessApplicationWithOptions($request, $runtime);
    }

    /**
     * @summary 删除内网访问策略
     *  *
     * @param DeletePrivateAccessPolicyRequest $request DeletePrivateAccessPolicyRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DeletePrivateAccessPolicyResponse DeletePrivateAccessPolicyResponse
     */
    public function deletePrivateAccessPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->policyId)) {
            $body['PolicyId'] = $request->policyId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeletePrivateAccessPolicy',
            'version'     => '2023-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeletePrivateAccessPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除内网访问策略
     *  *
     * @param DeletePrivateAccessPolicyRequest $request DeletePrivateAccessPolicyRequest
     *
     * @return DeletePrivateAccessPolicyResponse DeletePrivateAccessPolicyResponse
     */
    public function deletePrivateAccessPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePrivateAccessPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary 删除内网访问标签
     *  *
     * @param DeletePrivateAccessTagRequest $request DeletePrivateAccessTagRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DeletePrivateAccessTagResponse DeletePrivateAccessTagResponse
     */
    public function deletePrivateAccessTagWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->tagId)) {
            $body['TagId'] = $request->tagId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeletePrivateAccessTag',
            'version'     => '2023-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeletePrivateAccessTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除内网访问标签
     *  *
     * @param DeletePrivateAccessTagRequest $request DeletePrivateAccessTagRequest
     *
     * @return DeletePrivateAccessTagResponse DeletePrivateAccessTagResponse
     */
    public function deletePrivateAccessTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePrivateAccessTagWithOptions($request, $runtime);
    }

    /**
     * @summary 删除设备注册策略
     *  *
     * @param DeleteRegistrationPoliciesRequest $request DeleteRegistrationPoliciesRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteRegistrationPoliciesResponse DeleteRegistrationPoliciesResponse
     */
    public function deleteRegistrationPoliciesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body     = [];
        $bodyFlat = [];
        if (!Utils::isUnset($request->policyIds)) {
            $bodyFlat['PolicyIds'] = $request->policyIds;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteRegistrationPolicies',
            'version'     => '2023-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteRegistrationPoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除设备注册策略
     *  *
     * @param DeleteRegistrationPoliciesRequest $request DeleteRegistrationPoliciesRequest
     *
     * @return DeleteRegistrationPoliciesResponse DeleteRegistrationPoliciesResponse
     */
    public function deleteRegistrationPolicies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRegistrationPoliciesWithOptions($request, $runtime);
    }

    /**
     * @summary 删除用户组
     *  *
     * @param DeleteUserGroupRequest $request DeleteUserGroupRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteUserGroupResponse DeleteUserGroupResponse
     */
    public function deleteUserGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->userGroupId)) {
            $body['UserGroupId'] = $request->userGroupId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteUserGroup',
            'version'     => '2023-01-20',
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
     * @summary 删除用户组
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
     * @summary 卸载connector的应用
     *  *
     * @param DetachApplication2ConnectorRequest $tmpReq  DetachApplication2ConnectorRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DetachApplication2ConnectorResponse DetachApplication2ConnectorResponse
     */
    public function detachApplication2ConnectorWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DetachApplication2ConnectorShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->applicationIds)) {
            $request->applicationIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->applicationIds, 'ApplicationIds', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->applicationIdsShrink)) {
            $body['ApplicationIds'] = $request->applicationIdsShrink;
        }
        if (!Utils::isUnset($request->connectorId)) {
            $body['ConnectorId'] = $request->connectorId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DetachApplication2Connector',
            'version'     => '2023-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetachApplication2ConnectorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 卸载connector的应用
     *  *
     * @param DetachApplication2ConnectorRequest $request DetachApplication2ConnectorRequest
     *
     * @return DetachApplication2ConnectorResponse DetachApplication2ConnectorResponse
     */
    public function detachApplication2Connector($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachApplication2ConnectorWithOptions($request, $runtime);
    }

    /**
     * @summary 查询已启用的身份源配置
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetActiveIdpConfigResponse GetActiveIdpConfigResponse
     */
    public function getActiveIdpConfigWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetActiveIdpConfig',
            'version'     => '2023-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetActiveIdpConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询已启用的身份源配置
     *  *
     * @return GetActiveIdpConfigResponse GetActiveIdpConfigResponse
     */
    public function getActiveIdpConfig()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getActiveIdpConfigWithOptions($runtime);
    }

    /**
     * @summary 查询自定义身份源指定用户
     *  *
     * @param GetClientUserRequest $request GetClientUserRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetClientUserResponse GetClientUserResponse
     */
    public function getClientUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetClientUser',
            'version'     => '2023-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetClientUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询自定义身份源指定用户
     *  *
     * @param GetClientUserRequest $request GetClientUserRequest
     *
     * @return GetClientUserResponse GetClientUserResponse
     */
    public function getClientUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getClientUserWithOptions($request, $runtime);
    }

    /**
     * @summary 查询动态路由详情
     *  *
     * @param GetDynamicRouteRequest $request GetDynamicRouteRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDynamicRouteResponse GetDynamicRouteResponse
     */
    public function getDynamicRouteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDynamicRoute',
            'version'     => '2023-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDynamicRouteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询动态路由详情
     *  *
     * @param GetDynamicRouteRequest $request GetDynamicRouteRequest
     *
     * @return GetDynamicRouteResponse GetDynamicRouteResponse
     */
    public function getDynamicRoute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDynamicRouteWithOptions($request, $runtime);
    }

    /**
     * @summary 查询身份源配置详情
     *  *
     * @param GetIdpConfigRequest $request GetIdpConfigRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetIdpConfigResponse GetIdpConfigResponse
     */
    public function getIdpConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetIdpConfig',
            'version'     => '2023-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetIdpConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询身份源配置详情
     *  *
     * @param GetIdpConfigRequest $request GetIdpConfigRequest
     *
     * @return GetIdpConfigResponse GetIdpConfigResponse
     */
    public function getIdpConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getIdpConfigWithOptions($request, $runtime);
    }

    /**
     * @summary 查询内网访问应用详情
     *  *
     * @param GetPrivateAccessApplicationRequest $request GetPrivateAccessApplicationRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetPrivateAccessApplicationResponse GetPrivateAccessApplicationResponse
     */
    public function getPrivateAccessApplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPrivateAccessApplication',
            'version'     => '2023-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPrivateAccessApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询内网访问应用详情
     *  *
     * @param GetPrivateAccessApplicationRequest $request GetPrivateAccessApplicationRequest
     *
     * @return GetPrivateAccessApplicationResponse GetPrivateAccessApplicationResponse
     */
    public function getPrivateAccessApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPrivateAccessApplicationWithOptions($request, $runtime);
    }

    /**
     * @summary 查询内网访问策略详情
     *  *
     * @param GetPrivateAccessPolicyRequest $request GetPrivateAccessPolicyRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return GetPrivateAccessPolicyResponse GetPrivateAccessPolicyResponse
     */
    public function getPrivateAccessPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPrivateAccessPolicy',
            'version'     => '2023-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPrivateAccessPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询内网访问策略详情
     *  *
     * @param GetPrivateAccessPolicyRequest $request GetPrivateAccessPolicyRequest
     *
     * @return GetPrivateAccessPolicyResponse GetPrivateAccessPolicyResponse
     */
    public function getPrivateAccessPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPrivateAccessPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary 查询设备注册策略详情
     *  *
     * @param GetRegistrationPolicyRequest $request GetRegistrationPolicyRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetRegistrationPolicyResponse GetRegistrationPolicyResponse
     */
    public function getRegistrationPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRegistrationPolicy',
            'version'     => '2023-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetRegistrationPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询设备注册策略详情
     *  *
     * @param GetRegistrationPolicyRequest $request GetRegistrationPolicyRequest
     *
     * @return GetRegistrationPolicyResponse GetRegistrationPolicyResponse
     */
    public function getRegistrationPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRegistrationPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary 查询用户设备详情
     *  *
     * @param GetUserDeviceRequest $request GetUserDeviceRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetUserDeviceResponse GetUserDeviceResponse
     */
    public function getUserDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetUserDevice',
            'version'     => '2023-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetUserDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询用户设备详情
     *  *
     * @param GetUserDeviceRequest $request GetUserDeviceRequest
     *
     * @return GetUserDeviceResponse GetUserDeviceResponse
     */
    public function getUserDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserDeviceWithOptions($request, $runtime);
    }

    /**
     * @summary 查询用户组详情
     *  *
     * @param GetUserGroupRequest $request GetUserGroupRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetUserGroupResponse GetUserGroupResponse
     */
    public function getUserGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetUserGroup',
            'version'     => '2023-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetUserGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询用户组详情
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
     * @summary 批量查询内网访问策略的应用
     *  *
     * @param ListApplicationsForPrivateAccessPolicyRequest $request ListApplicationsForPrivateAccessPolicyRequest
     * @param RuntimeOptions                                $runtime runtime options for this request RuntimeOptions
     *
     * @return ListApplicationsForPrivateAccessPolicyResponse ListApplicationsForPrivateAccessPolicyResponse
     */
    public function listApplicationsForPrivateAccessPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListApplicationsForPrivateAccessPolicy',
            'version'     => '2023-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListApplicationsForPrivateAccessPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量查询内网访问策略的应用
     *  *
     * @param ListApplicationsForPrivateAccessPolicyRequest $request ListApplicationsForPrivateAccessPolicyRequest
     *
     * @return ListApplicationsForPrivateAccessPolicyResponse ListApplicationsForPrivateAccessPolicyResponse
     */
    public function listApplicationsForPrivateAccessPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listApplicationsForPrivateAccessPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary 批量查询内网访问标签的应用
     *  *
     * @param ListApplicationsForPrivateAccessTagRequest $request ListApplicationsForPrivateAccessTagRequest
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListApplicationsForPrivateAccessTagResponse ListApplicationsForPrivateAccessTagResponse
     */
    public function listApplicationsForPrivateAccessTagWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListApplicationsForPrivateAccessTag',
            'version'     => '2023-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListApplicationsForPrivateAccessTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量查询内网访问标签的应用
     *  *
     * @param ListApplicationsForPrivateAccessTagRequest $request ListApplicationsForPrivateAccessTagRequest
     *
     * @return ListApplicationsForPrivateAccessTagResponse ListApplicationsForPrivateAccessTagResponse
     */
    public function listApplicationsForPrivateAccessTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listApplicationsForPrivateAccessTagWithOptions($request, $runtime);
    }

    /**
     * @summary 查询自定义身份源用户
     *  *
     * @param ListClientUsersRequest $request ListClientUsersRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListClientUsersResponse ListClientUsersResponse
     */
    public function listClientUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListClientUsers',
            'version'     => '2023-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListClientUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询自定义身份源用户
     *  *
     * @param ListClientUsersRequest $request ListClientUsersRequest
     *
     * @return ListClientUsersResponse ListClientUsersResponse
     */
    public function listClientUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClientUsersWithOptions($request, $runtime);
    }

    /**
     * @summary 批量查询connector
     *  *
     * @param ListConnectorsRequest $request ListConnectorsRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListConnectorsResponse ListConnectorsResponse
     */
    public function listConnectorsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListConnectors',
            'version'     => '2023-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListConnectorsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量查询connector
     *  *
     * @param ListConnectorsRequest $request ListConnectorsRequest
     *
     * @return ListConnectorsResponse ListConnectorsResponse
     */
    public function listConnectors($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listConnectorsWithOptions($request, $runtime);
    }

    /**
     * @summary 批量查询动态路由的地域
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDynamicRouteRegionsResponse ListDynamicRouteRegionsResponse
     */
    public function listDynamicRouteRegionsWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'ListDynamicRouteRegions',
            'version'     => '2023-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDynamicRouteRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量查询动态路由的地域
     *  *
     * @return ListDynamicRouteRegionsResponse ListDynamicRouteRegionsResponse
     */
    public function listDynamicRouteRegions()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDynamicRouteRegionsWithOptions($runtime);
    }

    /**
     * @summary 批量查询动态路由
     *  *
     * @param ListDynamicRoutesRequest $request ListDynamicRoutesRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDynamicRoutesResponse ListDynamicRoutesResponse
     */
    public function listDynamicRoutesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDynamicRoutes',
            'version'     => '2023-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDynamicRoutesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量查询动态路由
     *  *
     * @param ListDynamicRoutesRequest $request ListDynamicRoutesRequest
     *
     * @return ListDynamicRoutesResponse ListDynamicRoutesResponse
     */
    public function listDynamicRoutes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDynamicRoutesWithOptions($request, $runtime);
    }

    /**
     * @summary 批量查询超额注册申请列表
     *  *
     * @param ListExcessiveDeviceRegistrationApplicationsRequest $request ListExcessiveDeviceRegistrationApplicationsRequest
     * @param RuntimeOptions                                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListExcessiveDeviceRegistrationApplicationsResponse ListExcessiveDeviceRegistrationApplicationsResponse
     */
    public function listExcessiveDeviceRegistrationApplicationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListExcessiveDeviceRegistrationApplications',
            'version'     => '2023-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListExcessiveDeviceRegistrationApplicationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量查询超额注册申请列表
     *  *
     * @param ListExcessiveDeviceRegistrationApplicationsRequest $request ListExcessiveDeviceRegistrationApplicationsRequest
     *
     * @return ListExcessiveDeviceRegistrationApplicationsResponse ListExcessiveDeviceRegistrationApplicationsResponse
     */
    public function listExcessiveDeviceRegistrationApplications($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listExcessiveDeviceRegistrationApplicationsWithOptions($request, $runtime);
    }

    /**
     * @summary 查询IDP配置
     *  *
     * @param ListIdpConfigsRequest $request ListIdpConfigsRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListIdpConfigsResponse ListIdpConfigsResponse
     */
    public function listIdpConfigsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListIdpConfigs',
            'version'     => '2023-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListIdpConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询IDP配置
     *  *
     * @param ListIdpConfigsRequest $request ListIdpConfigsRequest
     *
     * @return ListIdpConfigsResponse ListIdpConfigsResponse
     */
    public function listIdpConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIdpConfigsWithOptions($request, $runtime);
    }

    /**
     * @summary 查询自定义身份源部门
     *  *
     * @param ListIdpDepartmentsRequest $request ListIdpDepartmentsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListIdpDepartmentsResponse ListIdpDepartmentsResponse
     */
    public function listIdpDepartmentsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListIdpDepartments',
            'version'     => '2023-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListIdpDepartmentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询自定义身份源部门
     *  *
     * @param ListIdpDepartmentsRequest $request ListIdpDepartmentsRequest
     *
     * @return ListIdpDepartmentsResponse ListIdpDepartmentsResponse
     */
    public function listIdpDepartments($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIdpDepartmentsWithOptions($request, $runtime);
    }

    /**
     * @summary 批量查询内网访问应用的策略
     *  *
     * @param ListPolicesForPrivateAccessApplicationRequest $request ListPolicesForPrivateAccessApplicationRequest
     * @param RuntimeOptions                                $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPolicesForPrivateAccessApplicationResponse ListPolicesForPrivateAccessApplicationResponse
     */
    public function listPolicesForPrivateAccessApplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPolicesForPrivateAccessApplication',
            'version'     => '2023-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPolicesForPrivateAccessApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量查询内网访问应用的策略
     *  *
     * @param ListPolicesForPrivateAccessApplicationRequest $request ListPolicesForPrivateAccessApplicationRequest
     *
     * @return ListPolicesForPrivateAccessApplicationResponse ListPolicesForPrivateAccessApplicationResponse
     */
    public function listPolicesForPrivateAccessApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPolicesForPrivateAccessApplicationWithOptions($request, $runtime);
    }

    /**
     * @summary 批量查询内网访问标签的策略
     *  *
     * @param ListPolicesForPrivateAccessTagRequest $request ListPolicesForPrivateAccessTagRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPolicesForPrivateAccessTagResponse ListPolicesForPrivateAccessTagResponse
     */
    public function listPolicesForPrivateAccessTagWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPolicesForPrivateAccessTag',
            'version'     => '2023-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPolicesForPrivateAccessTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量查询内网访问标签的策略
     *  *
     * @param ListPolicesForPrivateAccessTagRequest $request ListPolicesForPrivateAccessTagRequest
     *
     * @return ListPolicesForPrivateAccessTagResponse ListPolicesForPrivateAccessTagResponse
     */
    public function listPolicesForPrivateAccessTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPolicesForPrivateAccessTagWithOptions($request, $runtime);
    }

    /**
     * @summary 批量查询用户组的策略
     *  *
     * @param ListPolicesForUserGroupRequest $request ListPolicesForUserGroupRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPolicesForUserGroupResponse ListPolicesForUserGroupResponse
     */
    public function listPolicesForUserGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPolicesForUserGroup',
            'version'     => '2023-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPolicesForUserGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量查询用户组的策略
     *  *
     * @param ListPolicesForUserGroupRequest $request ListPolicesForUserGroupRequest
     *
     * @return ListPolicesForUserGroupResponse ListPolicesForUserGroupResponse
     */
    public function listPolicesForUserGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPolicesForUserGroupWithOptions($request, $runtime);
    }

    /**
     * @summary pop节点流量统计
     *  *
     * @param ListPopTrafficStatisticsRequest $request ListPopTrafficStatisticsRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPopTrafficStatisticsResponse ListPopTrafficStatisticsResponse
     */
    public function listPopTrafficStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPopTrafficStatistics',
            'version'     => '2023-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPopTrafficStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary pop节点流量统计
     *  *
     * @param ListPopTrafficStatisticsRequest $request ListPopTrafficStatisticsRequest
     *
     * @return ListPopTrafficStatisticsResponse ListPopTrafficStatisticsResponse
     */
    public function listPopTrafficStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPopTrafficStatisticsWithOptions($request, $runtime);
    }

    /**
     * @summary 批量查询内网访问应用
     *  *
     * @param ListPrivateAccessApplicationsRequest $request ListPrivateAccessApplicationsRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPrivateAccessApplicationsResponse ListPrivateAccessApplicationsResponse
     */
    public function listPrivateAccessApplicationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPrivateAccessApplications',
            'version'     => '2023-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPrivateAccessApplicationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量查询内网访问应用
     *  *
     * @param ListPrivateAccessApplicationsRequest $request ListPrivateAccessApplicationsRequest
     *
     * @return ListPrivateAccessApplicationsResponse ListPrivateAccessApplicationsResponse
     */
    public function listPrivateAccessApplications($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPrivateAccessApplicationsWithOptions($request, $runtime);
    }

    /**
     * @summary 批量查询动态路由的内网访问应用
     *  *
     * @param ListPrivateAccessApplicationsForDynamicRouteRequest $request ListPrivateAccessApplicationsForDynamicRouteRequest
     * @param RuntimeOptions                                      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPrivateAccessApplicationsForDynamicRouteResponse ListPrivateAccessApplicationsForDynamicRouteResponse
     */
    public function listPrivateAccessApplicationsForDynamicRouteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPrivateAccessApplicationsForDynamicRoute',
            'version'     => '2023-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPrivateAccessApplicationsForDynamicRouteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量查询动态路由的内网访问应用
     *  *
     * @param ListPrivateAccessApplicationsForDynamicRouteRequest $request ListPrivateAccessApplicationsForDynamicRouteRequest
     *
     * @return ListPrivateAccessApplicationsForDynamicRouteResponse ListPrivateAccessApplicationsForDynamicRouteResponse
     */
    public function listPrivateAccessApplicationsForDynamicRoute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPrivateAccessApplicationsForDynamicRouteWithOptions($request, $runtime);
    }

    /**
     * @summary 批量查询内网访问策略
     *  *
     * @param ListPrivateAccessPolicesRequest $request ListPrivateAccessPolicesRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPrivateAccessPolicesResponse ListPrivateAccessPolicesResponse
     */
    public function listPrivateAccessPolicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPrivateAccessPolices',
            'version'     => '2023-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPrivateAccessPolicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量查询内网访问策略
     *  *
     * @param ListPrivateAccessPolicesRequest $request ListPrivateAccessPolicesRequest
     *
     * @return ListPrivateAccessPolicesResponse ListPrivateAccessPolicesResponse
     */
    public function listPrivateAccessPolices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPrivateAccessPolicesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about all internal access tags within the current Alibaba Cloud account.
     *  *
     * @param ListPrivateAccessTagsRequest $request ListPrivateAccessTagsRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPrivateAccessTagsResponse ListPrivateAccessTagsResponse
     */
    public function listPrivateAccessTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPrivateAccessTags',
            'version'     => '2023-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPrivateAccessTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about all internal access tags within the current Alibaba Cloud account.
     *  *
     * @param ListPrivateAccessTagsRequest $request ListPrivateAccessTagsRequest
     *
     * @return ListPrivateAccessTagsResponse ListPrivateAccessTagsResponse
     */
    public function listPrivateAccessTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPrivateAccessTagsWithOptions($request, $runtime);
    }

    /**
     * @summary 批量查询动态路由的内网访问标签
     *  *
     * @param ListPrivateAccessTagsForDynamicRouteRequest $request ListPrivateAccessTagsForDynamicRouteRequest
     * @param RuntimeOptions                              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPrivateAccessTagsForDynamicRouteResponse ListPrivateAccessTagsForDynamicRouteResponse
     */
    public function listPrivateAccessTagsForDynamicRouteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPrivateAccessTagsForDynamicRoute',
            'version'     => '2023-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPrivateAccessTagsForDynamicRouteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量查询动态路由的内网访问标签
     *  *
     * @param ListPrivateAccessTagsForDynamicRouteRequest $request ListPrivateAccessTagsForDynamicRouteRequest
     *
     * @return ListPrivateAccessTagsForDynamicRouteResponse ListPrivateAccessTagsForDynamicRouteResponse
     */
    public function listPrivateAccessTagsForDynamicRoute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPrivateAccessTagsForDynamicRouteWithOptions($request, $runtime);
    }

    /**
     * @summary 查询用户设备注册策略列表
     *  *
     * @param ListRegistrationPoliciesRequest $request ListRegistrationPoliciesRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListRegistrationPoliciesResponse ListRegistrationPoliciesResponse
     */
    public function listRegistrationPoliciesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListRegistrationPolicies',
            'version'     => '2023-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListRegistrationPoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询用户设备注册策略列表
     *  *
     * @param ListRegistrationPoliciesRequest $request ListRegistrationPoliciesRequest
     *
     * @return ListRegistrationPoliciesResponse ListRegistrationPoliciesResponse
     */
    public function listRegistrationPolicies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRegistrationPoliciesWithOptions($request, $runtime);
    }

    /**
     * @summary 查询用户组相关的设备注册策略
     *  *
     * @param ListRegistrationPoliciesForUserGroupRequest $request ListRegistrationPoliciesForUserGroupRequest
     * @param RuntimeOptions                              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListRegistrationPoliciesForUserGroupResponse ListRegistrationPoliciesForUserGroupResponse
     */
    public function listRegistrationPoliciesForUserGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListRegistrationPoliciesForUserGroup',
            'version'     => '2023-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListRegistrationPoliciesForUserGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询用户组相关的设备注册策略
     *  *
     * @param ListRegistrationPoliciesForUserGroupRequest $request ListRegistrationPoliciesForUserGroupRequest
     *
     * @return ListRegistrationPoliciesForUserGroupResponse ListRegistrationPoliciesForUserGroupResponse
     */
    public function listRegistrationPoliciesForUserGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRegistrationPoliciesForUserGroupWithOptions($request, $runtime);
    }

    /**
     * @summary 批量查询终端安装软件列表
     *  *
     * @param ListSoftwareForUserDeviceRequest $request ListSoftwareForUserDeviceRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSoftwareForUserDeviceResponse ListSoftwareForUserDeviceResponse
     */
    public function listSoftwareForUserDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSoftwareForUserDevice',
            'version'     => '2023-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSoftwareForUserDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量查询终端安装软件列表
     *  *
     * @param ListSoftwareForUserDeviceRequest $request ListSoftwareForUserDeviceRequest
     *
     * @return ListSoftwareForUserDeviceResponse ListSoftwareForUserDeviceResponse
     */
    public function listSoftwareForUserDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSoftwareForUserDeviceWithOptions($request, $runtime);
    }

    /**
     * @summary 批量查询内网访问应用的标签
     *  *
     * @param ListTagsForPrivateAccessApplicationRequest $request ListTagsForPrivateAccessApplicationRequest
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTagsForPrivateAccessApplicationResponse ListTagsForPrivateAccessApplicationResponse
     */
    public function listTagsForPrivateAccessApplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTagsForPrivateAccessApplication',
            'version'     => '2023-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTagsForPrivateAccessApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量查询内网访问应用的标签
     *  *
     * @param ListTagsForPrivateAccessApplicationRequest $request ListTagsForPrivateAccessApplicationRequest
     *
     * @return ListTagsForPrivateAccessApplicationResponse ListTagsForPrivateAccessApplicationResponse
     */
    public function listTagsForPrivateAccessApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagsForPrivateAccessApplicationWithOptions($request, $runtime);
    }

    /**
     * @summary 批量查询内网访问策略的标签
     *  *
     * @param ListTagsForPrivateAccessPolicyRequest $request ListTagsForPrivateAccessPolicyRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTagsForPrivateAccessPolicyResponse ListTagsForPrivateAccessPolicyResponse
     */
    public function listTagsForPrivateAccessPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTagsForPrivateAccessPolicy',
            'version'     => '2023-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTagsForPrivateAccessPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量查询内网访问策略的标签
     *  *
     * @param ListTagsForPrivateAccessPolicyRequest $request ListTagsForPrivateAccessPolicyRequest
     *
     * @return ListTagsForPrivateAccessPolicyResponse ListTagsForPrivateAccessPolicyResponse
     */
    public function listTagsForPrivateAccessPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagsForPrivateAccessPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary 批量查询用户设备列表
     *  *
     * @param ListUserDevicesRequest $request ListUserDevicesRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListUserDevicesResponse ListUserDevicesResponse
     */
    public function listUserDevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUserDevices',
            'version'     => '2023-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListUserDevicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量查询用户设备列表
     *  *
     * @param ListUserDevicesRequest $request ListUserDevicesRequest
     *
     * @return ListUserDevicesResponse ListUserDevicesResponse
     */
    public function listUserDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserDevicesWithOptions($request, $runtime);
    }

    /**
     * @summary 批量查询用户组
     *  *
     * @param ListUserGroupsRequest $request ListUserGroupsRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListUserGroupsResponse ListUserGroupsResponse
     */
    public function listUserGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUserGroups',
            'version'     => '2023-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListUserGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量查询用户组
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
     * @summary 批量查询内网访问策略的用户组
     *  *
     * @param ListUserGroupsForPrivateAccessPolicyRequest $request ListUserGroupsForPrivateAccessPolicyRequest
     * @param RuntimeOptions                              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListUserGroupsForPrivateAccessPolicyResponse ListUserGroupsForPrivateAccessPolicyResponse
     */
    public function listUserGroupsForPrivateAccessPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUserGroupsForPrivateAccessPolicy',
            'version'     => '2023-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListUserGroupsForPrivateAccessPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量查询内网访问策略的用户组
     *  *
     * @param ListUserGroupsForPrivateAccessPolicyRequest $request ListUserGroupsForPrivateAccessPolicyRequest
     *
     * @return ListUserGroupsForPrivateAccessPolicyResponse ListUserGroupsForPrivateAccessPolicyResponse
     */
    public function listUserGroupsForPrivateAccessPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserGroupsForPrivateAccessPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary 查询设备注册策略相关用户组
     *  *
     * @param ListUserGroupsForRegistrationPolicyRequest $request ListUserGroupsForRegistrationPolicyRequest
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListUserGroupsForRegistrationPolicyResponse ListUserGroupsForRegistrationPolicyResponse
     */
    public function listUserGroupsForRegistrationPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUserGroupsForRegistrationPolicy',
            'version'     => '2023-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListUserGroupsForRegistrationPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询设备注册策略相关用户组
     *  *
     * @param ListUserGroupsForRegistrationPolicyRequest $request ListUserGroupsForRegistrationPolicyRequest
     *
     * @return ListUserGroupsForRegistrationPolicyResponse ListUserGroupsForRegistrationPolicyResponse
     */
    public function listUserGroupsForRegistrationPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserGroupsForRegistrationPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary 列表查询登陆用户
     *  *
     * @param ListUsersRequest $request ListUsersRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListUsersResponse ListUsersResponse
     */
    public function listUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUsers',
            'version'     => '2023-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 列表查询登陆用户
     *  *
     * @param ListUsersRequest $request ListUsersRequest
     *
     * @return ListUsersResponse ListUsersResponse
     */
    public function listUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUsersWithOptions($request, $runtime);
    }

    /**
     * @summary 吊销用户登录会话
     *  *
     * @param RevokeUserSessionRequest $request RevokeUserSessionRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return RevokeUserSessionResponse RevokeUserSessionResponse
     */
    public function revokeUserSessionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->externalIds)) {
            $query['ExternalIds'] = $request->externalIds;
        }
        if (!Utils::isUnset($request->idpId)) {
            $query['IdpId'] = $request->idpId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RevokeUserSession',
            'version'     => '2023-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RevokeUserSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 吊销用户登录会话
     *  *
     * @param RevokeUserSessionRequest $request RevokeUserSessionRequest
     *
     * @return RevokeUserSessionResponse RevokeUserSessionResponse
     */
    public function revokeUserSession($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revokeUserSessionWithOptions($request, $runtime);
    }

    /**
     * @summary 修改自定义身份源指定用户
     *  *
     * @param UpdateClientUserRequest $request UpdateClientUserRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateClientUserResponse UpdateClientUserResponse
     */
    public function updateClientUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->departmentId)) {
            $query['DepartmentId'] = $request->departmentId;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->email)) {
            $query['Email'] = $request->email;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->mobileNumber)) {
            $query['MobileNumber'] = $request->mobileNumber;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateClientUser',
            'version'     => '2023-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateClientUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改自定义身份源指定用户
     *  *
     * @param UpdateClientUserRequest $request UpdateClientUserRequest
     *
     * @return UpdateClientUserResponse UpdateClientUserResponse
     */
    public function updateClientUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateClientUserWithOptions($request, $runtime);
    }

    /**
     * @summary 修改自定义身份源指定用户密码
     *  *
     * @param UpdateClientUserPasswordRequest $request UpdateClientUserPasswordRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateClientUserPasswordResponse UpdateClientUserPasswordResponse
     */
    public function updateClientUserPasswordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->username)) {
            $query['Username'] = $request->username;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateClientUserPassword',
            'version'     => '2023-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateClientUserPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改自定义身份源指定用户密码
     *  *
     * @param UpdateClientUserPasswordRequest $request UpdateClientUserPasswordRequest
     *
     * @return UpdateClientUserPasswordResponse UpdateClientUserPasswordResponse
     */
    public function updateClientUserPassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateClientUserPasswordWithOptions($request, $runtime);
    }

    /**
     * @summary 修改自定义身份源指定用户启用状态
     *  *
     * @param UpdateClientUserStatusRequest $request UpdateClientUserStatusRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateClientUserStatusResponse UpdateClientUserStatusResponse
     */
    public function updateClientUserStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateClientUserStatus',
            'version'     => '2023-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateClientUserStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改自定义身份源指定用户启用状态
     *  *
     * @param UpdateClientUserStatusRequest $request UpdateClientUserStatusRequest
     *
     * @return UpdateClientUserStatusResponse UpdateClientUserStatusResponse
     */
    public function updateClientUserStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateClientUserStatusWithOptions($request, $runtime);
    }

    /**
     * @summary 修改动态路由
     *  *
     * @param UpdateDynamicRouteRequest $request UpdateDynamicRouteRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateDynamicRouteResponse UpdateDynamicRouteResponse
     */
    public function updateDynamicRouteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body     = [];
        $bodyFlat = [];
        if (!Utils::isUnset($request->applicationIds)) {
            $bodyFlat['ApplicationIds'] = $request->applicationIds;
        }
        if (!Utils::isUnset($request->applicationType)) {
            $body['ApplicationType'] = $request->applicationType;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->dynamicRouteId)) {
            $body['DynamicRouteId'] = $request->dynamicRouteId;
        }
        if (!Utils::isUnset($request->dynamicRouteType)) {
            $body['DynamicRouteType'] = $request->dynamicRouteType;
        }
        if (!Utils::isUnset($request->modifyType)) {
            $body['ModifyType'] = $request->modifyType;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->nextHop)) {
            $body['NextHop'] = $request->nextHop;
        }
        if (!Utils::isUnset($request->priority)) {
            $body['Priority'] = $request->priority;
        }
        if (!Utils::isUnset($request->regionIds)) {
            $bodyFlat['RegionIds'] = $request->regionIds;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->tagIds)) {
            $bodyFlat['TagIds'] = $request->tagIds;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateDynamicRoute',
            'version'     => '2023-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateDynamicRouteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改动态路由
     *  *
     * @param UpdateDynamicRouteRequest $request UpdateDynamicRouteRequest
     *
     * @return UpdateDynamicRouteResponse UpdateDynamicRouteResponse
     */
    public function updateDynamicRoute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDynamicRouteWithOptions($request, $runtime);
    }

    /**
     * @summary 批量更新超额注册申请状态
     *  *
     * @param UpdateExcessiveDeviceRegistrationApplicationsStatusRequest $request UpdateExcessiveDeviceRegistrationApplicationsStatusRequest
     * @param RuntimeOptions                                             $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateExcessiveDeviceRegistrationApplicationsStatusResponse UpdateExcessiveDeviceRegistrationApplicationsStatusResponse
     */
    public function updateExcessiveDeviceRegistrationApplicationsStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body     = [];
        $bodyFlat = [];
        if (!Utils::isUnset($request->applicationIds)) {
            $bodyFlat['ApplicationIds'] = $request->applicationIds;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateExcessiveDeviceRegistrationApplicationsStatus',
            'version'     => '2023-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateExcessiveDeviceRegistrationApplicationsStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量更新超额注册申请状态
     *  *
     * @param UpdateExcessiveDeviceRegistrationApplicationsStatusRequest $request UpdateExcessiveDeviceRegistrationApplicationsStatusRequest
     *
     * @return UpdateExcessiveDeviceRegistrationApplicationsStatusResponse UpdateExcessiveDeviceRegistrationApplicationsStatusResponse
     */
    public function updateExcessiveDeviceRegistrationApplicationsStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateExcessiveDeviceRegistrationApplicationsStatusWithOptions($request, $runtime);
    }

    /**
     * @summary 修改指定自定义身份源部门
     *  *
     * @param UpdateIdpDepartmentRequest $request UpdateIdpDepartmentRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateIdpDepartmentResponse UpdateIdpDepartmentResponse
     */
    public function updateIdpDepartmentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->departmentId)) {
            $query['DepartmentId'] = $request->departmentId;
        }
        if (!Utils::isUnset($request->departmentName)) {
            $query['DepartmentName'] = $request->departmentName;
        }
        if (!Utils::isUnset($request->idpConfigId)) {
            $query['IdpConfigId'] = $request->idpConfigId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateIdpDepartment',
            'version'     => '2023-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateIdpDepartmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改指定自定义身份源部门
     *  *
     * @param UpdateIdpDepartmentRequest $request UpdateIdpDepartmentRequest
     *
     * @return UpdateIdpDepartmentResponse UpdateIdpDepartmentResponse
     */
    public function updateIdpDepartment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateIdpDepartmentWithOptions($request, $runtime);
    }

    /**
     * @summary 修改内网访问应用
     *  *
     * @param UpdatePrivateAccessApplicationRequest $request UpdatePrivateAccessApplicationRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdatePrivateAccessApplicationResponse UpdatePrivateAccessApplicationResponse
     */
    public function updatePrivateAccessApplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body     = [];
        $bodyFlat = [];
        if (!Utils::isUnset($request->addresses)) {
            $bodyFlat['Addresses'] = $request->addresses;
        }
        if (!Utils::isUnset($request->applicationId)) {
            $body['ApplicationId'] = $request->applicationId;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->modifyType)) {
            $body['ModifyType'] = $request->modifyType;
        }
        if (!Utils::isUnset($request->portRanges)) {
            $bodyFlat['PortRanges'] = $request->portRanges;
        }
        if (!Utils::isUnset($request->protocol)) {
            $body['Protocol'] = $request->protocol;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->tagIds)) {
            $bodyFlat['TagIds'] = $request->tagIds;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdatePrivateAccessApplication',
            'version'     => '2023-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdatePrivateAccessApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改内网访问应用
     *  *
     * @param UpdatePrivateAccessApplicationRequest $request UpdatePrivateAccessApplicationRequest
     *
     * @return UpdatePrivateAccessApplicationResponse UpdatePrivateAccessApplicationResponse
     */
    public function updatePrivateAccessApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePrivateAccessApplicationWithOptions($request, $runtime);
    }

    /**
     * @summary 修改内网访问策略
     *  *
     * @param UpdatePrivateAccessPolicyRequest $request UpdatePrivateAccessPolicyRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdatePrivateAccessPolicyResponse UpdatePrivateAccessPolicyResponse
     */
    public function updatePrivateAccessPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body     = [];
        $bodyFlat = [];
        if (!Utils::isUnset($request->applicationIds)) {
            $bodyFlat['ApplicationIds'] = $request->applicationIds;
        }
        if (!Utils::isUnset($request->applicationType)) {
            $body['ApplicationType'] = $request->applicationType;
        }
        if (!Utils::isUnset($request->customUserAttributes)) {
            $bodyFlat['CustomUserAttributes'] = $request->customUserAttributes;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->deviceAttributeId)) {
            $body['DeviceAttributeId'] = $request->deviceAttributeId;
        }
        if (!Utils::isUnset($request->modifyType)) {
            $body['ModifyType'] = $request->modifyType;
        }
        if (!Utils::isUnset($request->policyAction)) {
            $body['PolicyAction'] = $request->policyAction;
        }
        if (!Utils::isUnset($request->policyId)) {
            $body['PolicyId'] = $request->policyId;
        }
        if (!Utils::isUnset($request->priority)) {
            $body['Priority'] = $request->priority;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->tagIds)) {
            $bodyFlat['TagIds'] = $request->tagIds;
        }
        if (!Utils::isUnset($request->userGroupIds)) {
            $bodyFlat['UserGroupIds'] = $request->userGroupIds;
        }
        if (!Utils::isUnset($request->userGroupMode)) {
            $body['UserGroupMode'] = $request->userGroupMode;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdatePrivateAccessPolicy',
            'version'     => '2023-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdatePrivateAccessPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改内网访问策略
     *  *
     * @param UpdatePrivateAccessPolicyRequest $request UpdatePrivateAccessPolicyRequest
     *
     * @return UpdatePrivateAccessPolicyResponse UpdatePrivateAccessPolicyResponse
     */
    public function updatePrivateAccessPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePrivateAccessPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary 修改设备注册策略
     *  *
     * @param UpdateRegistrationPolicyRequest $tmpReq  UpdateRegistrationPolicyRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateRegistrationPolicyResponse UpdateRegistrationPolicyResponse
     */
    public function updateRegistrationPolicyWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateRegistrationPolicyShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->companyLimitCount)) {
            $request->companyLimitCountShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->companyLimitCount, 'CompanyLimitCount', 'json');
        }
        if (!Utils::isUnset($tmpReq->personalLimitCount)) {
            $request->personalLimitCountShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->personalLimitCount, 'PersonalLimitCount', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->companyLimitCountShrink)) {
            $body['CompanyLimitCount'] = $request->companyLimitCountShrink;
        }
        if (!Utils::isUnset($request->companyLimitType)) {
            $body['CompanyLimitType'] = $request->companyLimitType;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->matchMode)) {
            $body['MatchMode'] = $request->matchMode;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->personalLimitCountShrink)) {
            $body['PersonalLimitCount'] = $request->personalLimitCountShrink;
        }
        if (!Utils::isUnset($request->personalLimitType)) {
            $body['PersonalLimitType'] = $request->personalLimitType;
        }
        if (!Utils::isUnset($request->policyId)) {
            $body['PolicyId'] = $request->policyId;
        }
        if (!Utils::isUnset($request->priority)) {
            $body['Priority'] = $request->priority;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        $bodyFlat = [];
        if (!Utils::isUnset($request->userGroupIds)) {
            $bodyFlat['UserGroupIds'] = $request->userGroupIds;
        }
        if (!Utils::isUnset($request->whitelist)) {
            $bodyFlat['Whitelist'] = $request->whitelist;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateRegistrationPolicy',
            'version'     => '2023-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateRegistrationPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改设备注册策略
     *  *
     * @param UpdateRegistrationPolicyRequest $request UpdateRegistrationPolicyRequest
     *
     * @return UpdateRegistrationPolicyResponse UpdateRegistrationPolicyResponse
     */
    public function updateRegistrationPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRegistrationPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary 批量更新用户设备共享状态
     *  *
     * @param UpdateUserDevicesSharingStatusRequest $request UpdateUserDevicesSharingStatusRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateUserDevicesSharingStatusResponse UpdateUserDevicesSharingStatusResponse
     */
    public function updateUserDevicesSharingStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body     = [];
        $bodyFlat = [];
        if (!Utils::isUnset($request->deviceTags)) {
            $bodyFlat['DeviceTags'] = $request->deviceTags;
        }
        if (!Utils::isUnset($request->sharingStatus)) {
            $body['SharingStatus'] = $request->sharingStatus;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateUserDevicesSharingStatus',
            'version'     => '2023-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateUserDevicesSharingStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量更新用户设备共享状态
     *  *
     * @param UpdateUserDevicesSharingStatusRequest $request UpdateUserDevicesSharingStatusRequest
     *
     * @return UpdateUserDevicesSharingStatusResponse UpdateUserDevicesSharingStatusResponse
     */
    public function updateUserDevicesSharingStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUserDevicesSharingStatusWithOptions($request, $runtime);
    }

    /**
     * @summary 批量更新用户设备状态
     *  *
     * @param UpdateUserDevicesStatusRequest $request UpdateUserDevicesStatusRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateUserDevicesStatusResponse UpdateUserDevicesStatusResponse
     */
    public function updateUserDevicesStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->deviceAction)) {
            $body['DeviceAction'] = $request->deviceAction;
        }
        $bodyFlat = [];
        if (!Utils::isUnset($request->deviceTags)) {
            $bodyFlat['DeviceTags'] = $request->deviceTags;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateUserDevicesStatus',
            'version'     => '2023-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateUserDevicesStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量更新用户设备状态
     *  *
     * @param UpdateUserDevicesStatusRequest $request UpdateUserDevicesStatusRequest
     *
     * @return UpdateUserDevicesStatusResponse UpdateUserDevicesStatusResponse
     */
    public function updateUserDevicesStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUserDevicesStatusWithOptions($request, $runtime);
    }

    /**
     * @summary 修改用户组
     *  *
     * @param UpdateUserGroupRequest $request UpdateUserGroupRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateUserGroupResponse UpdateUserGroupResponse
     */
    public function updateUserGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body     = [];
        $bodyFlat = [];
        if (!Utils::isUnset($request->attributes)) {
            $bodyFlat['Attributes'] = $request->attributes;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->modifyType)) {
            $body['ModifyType'] = $request->modifyType;
        }
        if (!Utils::isUnset($request->userGroupId)) {
            $body['UserGroupId'] = $request->userGroupId;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateUserGroup',
            'version'     => '2023-01-20',
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
     * @summary 修改用户组
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
     * @summary 批量修改登陆用户状态
     *  *
     * @param UpdateUsersStatusRequest $request UpdateUsersStatusRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateUsersStatusResponse UpdateUsersStatusResponse
     */
    public function updateUsersStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->saseUserIds)) {
            $query['SaseUserIds'] = $request->saseUserIds;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateUsersStatus',
            'version'     => '2023-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateUsersStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量修改登陆用户状态
     *  *
     * @param UpdateUsersStatusRequest $request UpdateUsersStatusRequest
     *
     * @return UpdateUsersStatusResponse UpdateUsersStatusResponse
     */
    public function updateUsersStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUsersStatusWithOptions($request, $runtime);
    }
}
