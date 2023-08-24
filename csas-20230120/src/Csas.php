<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Csas\V20230120\Models\AttachApplication2ConnectorRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\AttachApplication2ConnectorResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\AttachApplication2ConnectorShrinkRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateDynamicRouteRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateDynamicRouteResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreatePrivateAccessApplicationRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreatePrivateAccessApplicationResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreatePrivateAccessPolicyRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreatePrivateAccessPolicyResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreatePrivateAccessTagRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreatePrivateAccessTagResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateUserGroupRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateUserGroupResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeleteDynamicRouteRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeleteDynamicRouteResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeletePrivateAccessApplicationRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeletePrivateAccessApplicationResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeletePrivateAccessPolicyRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeletePrivateAccessPolicyResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeletePrivateAccessTagRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeletePrivateAccessTagResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeleteUserGroupRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\DeleteUserGroupResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\DetachApplication2ConnectorRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\DetachApplication2ConnectorResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\DetachApplication2ConnectorShrinkRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetDynamicRouteRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetDynamicRouteResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetPrivateAccessApplicationRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetPrivateAccessApplicationResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetPrivateAccessPolicyRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetPrivateAccessPolicyResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetUserGroupRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetUserGroupResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListApplicationsForPrivateAccessPolicyRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListApplicationsForPrivateAccessPolicyResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListApplicationsForPrivateAccessTagRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListApplicationsForPrivateAccessTagResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListConnectorsRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListConnectorsResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListDynamicRouteRegionsResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListDynamicRoutesRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListDynamicRoutesResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListPolicesForPrivateAccessApplicationRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListPolicesForPrivateAccessApplicationResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListPolicesForPrivateAccessTagRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListPolicesForPrivateAccessTagResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListPolicesForUserGroupRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListPolicesForUserGroupResponse;
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
use AlibabaCloud\SDK\Csas\V20230120\Models\ListTagsForPrivateAccessApplicationRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListTagsForPrivateAccessApplicationResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListTagsForPrivateAccessPolicyRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListTagsForPrivateAccessPolicyResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListUserGroupsForPrivateAccessPolicyRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListUserGroupsForPrivateAccessPolicyResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListUserGroupsRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListUserGroupsResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateDynamicRouteRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateDynamicRouteResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdatePrivateAccessApplicationRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdatePrivateAccessApplicationResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdatePrivateAccessPolicyRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdatePrivateAccessPolicyResponse;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateUserGroupRequest;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateUserGroupResponse;
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
     * @param AttachApplication2ConnectorRequest $tmpReq
     * @param RuntimeOptions                     $runtime
     *
     * @return AttachApplication2ConnectorResponse
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
     * @param CreateDynamicRouteRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateDynamicRouteResponse
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
     * @param CreatePrivateAccessApplicationRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return CreatePrivateAccessApplicationResponse
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
     * @param CreatePrivateAccessPolicyRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreatePrivateAccessPolicyResponse
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
     * @param CreatePrivateAccessTagRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreatePrivateAccessTagResponse
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
     * @param CreateUserGroupRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateUserGroupResponse
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
     * @param DeleteDynamicRouteRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteDynamicRouteResponse
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
     * @param DeletePrivateAccessApplicationRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DeletePrivateAccessApplicationResponse
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
     * @param DeletePrivateAccessPolicyRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeletePrivateAccessPolicyResponse
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
     * @param DeletePrivateAccessTagRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeletePrivateAccessTagResponse
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
     * @param DeleteUserGroupRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteUserGroupResponse
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
     * @param DetachApplication2ConnectorRequest $tmpReq
     * @param RuntimeOptions                     $runtime
     *
     * @return DetachApplication2ConnectorResponse
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
     * @param GetDynamicRouteRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetDynamicRouteResponse
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
     * @param GetPrivateAccessApplicationRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetPrivateAccessApplicationResponse
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
     * @param GetPrivateAccessPolicyRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetPrivateAccessPolicyResponse
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
     * @param GetUserGroupRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetUserGroupResponse
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
     * @param ListApplicationsForPrivateAccessPolicyRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return ListApplicationsForPrivateAccessPolicyResponse
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
     * @param ListApplicationsForPrivateAccessTagRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return ListApplicationsForPrivateAccessTagResponse
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
     * @param ListConnectorsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListConnectorsResponse
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
     * @param RuntimeOptions $runtime
     *
     * @return ListDynamicRouteRegionsResponse
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
     * @return ListDynamicRouteRegionsResponse
     */
    public function listDynamicRouteRegions()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDynamicRouteRegionsWithOptions($runtime);
    }

    /**
     * @param ListDynamicRoutesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListDynamicRoutesResponse
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
     * @param ListPolicesForPrivateAccessApplicationRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return ListPolicesForPrivateAccessApplicationResponse
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
     * @param ListPolicesForPrivateAccessTagRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ListPolicesForPrivateAccessTagResponse
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
     * @param ListPolicesForUserGroupRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListPolicesForUserGroupResponse
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
     * @param ListPrivateAccessApplicationsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ListPrivateAccessApplicationsResponse
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
     * @param ListPrivateAccessApplicationsForDynamicRouteRequest $request
     * @param RuntimeOptions                                      $runtime
     *
     * @return ListPrivateAccessApplicationsForDynamicRouteResponse
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
     * @param ListPrivateAccessPolicesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListPrivateAccessPolicesResponse
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
     * @param ListPrivateAccessTagsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListPrivateAccessTagsResponse
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
     * @param ListPrivateAccessTagsForDynamicRouteRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return ListPrivateAccessTagsForDynamicRouteResponse
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
     * @param ListTagsForPrivateAccessApplicationRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return ListTagsForPrivateAccessApplicationResponse
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
     * @param ListTagsForPrivateAccessPolicyRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ListTagsForPrivateAccessPolicyResponse
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
     * @param ListUserGroupsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListUserGroupsResponse
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
     * @param ListUserGroupsForPrivateAccessPolicyRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return ListUserGroupsForPrivateAccessPolicyResponse
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
     * @param UpdateDynamicRouteRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateDynamicRouteResponse
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
     * @param UpdatePrivateAccessApplicationRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return UpdatePrivateAccessApplicationResponse
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
     * @param UpdatePrivateAccessPolicyRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdatePrivateAccessPolicyResponse
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
     * @param UpdateUserGroupRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateUserGroupResponse
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
     * @param UpdateUserGroupRequest $request
     *
     * @return UpdateUserGroupResponse
     */
    public function updateUserGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUserGroupWithOptions($request, $runtime);
    }
}
