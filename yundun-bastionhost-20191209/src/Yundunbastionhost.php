<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\AcceptApproveCommandRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\AcceptApproveCommandResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\AcceptOperationTicketRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\AcceptOperationTicketResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\AddHostsToGroupRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\AddHostsToGroupResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\AddUsersToGroupRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\AddUsersToGroupResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\AttachHostAccountsToHostShareKeyRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\AttachHostAccountsToHostShareKeyResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\AttachHostAccountsToUserGroupRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\AttachHostAccountsToUserGroupResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\AttachHostAccountsToUserRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\AttachHostAccountsToUserResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\AttachHostGroupAccountsToUserGroupRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\AttachHostGroupAccountsToUserGroupResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\AttachHostGroupAccountsToUserRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\AttachHostGroupAccountsToUserResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ConfigInstanceSecurityGroupsRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ConfigInstanceSecurityGroupsResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ConfigInstanceWhiteListRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ConfigInstanceWhiteListResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\CreateHostAccountRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\CreateHostAccountResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\CreateHostGroupRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\CreateHostGroupResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\CreateHostRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\CreateHostResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\CreateHostShareKeyRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\CreateHostShareKeyResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\CreateUserGroupRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\CreateUserGroupResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\CreateUserPublicKeyRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\CreateUserPublicKeyResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\CreateUserRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\CreateUserResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DeleteHostAccountRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DeleteHostAccountResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DeleteHostGroupRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DeleteHostGroupResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DeleteHostRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DeleteHostResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DeleteHostShareKeyRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DeleteHostShareKeyResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DeleteUserGroupRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DeleteUserGroupResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DeleteUserPublicKeyRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DeleteUserPublicKeyResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DeleteUserRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DeleteUserResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DescribeInstanceAttributeRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DescribeInstanceAttributeResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DescribeInstancesRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DescribeInstancesResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DetachHostAccountsFromHostShareKeyRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DetachHostAccountsFromHostShareKeyResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DetachHostAccountsFromUserGroupRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DetachHostAccountsFromUserGroupResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DetachHostAccountsFromUserRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DetachHostAccountsFromUserResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DetachHostGroupAccountsFromUserGroupRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DetachHostGroupAccountsFromUserGroupResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DetachHostGroupAccountsFromUserRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DetachHostGroupAccountsFromUserResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DisableInstancePublicAccessRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DisableInstancePublicAccessResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\EnableInstancePublicAccessRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\EnableInstancePublicAccessResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetHostAccountRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetHostAccountResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetHostGroupRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetHostGroupResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetHostRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetHostResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetHostShareKeyRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetHostShareKeyResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetInstanceADAuthServerRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetInstanceADAuthServerResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetInstanceLDAPAuthServerRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetInstanceLDAPAuthServerResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetInstanceTwoFactorRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetInstanceTwoFactorResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetUserGroupRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetUserGroupResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetUserRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetUserResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListApproveCommandsRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListApproveCommandsResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListHostAccountsForHostShareKeyRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListHostAccountsForHostShareKeyResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListHostAccountsForUserGroupRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListHostAccountsForUserGroupResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListHostAccountsForUserRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListHostAccountsForUserResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListHostAccountsRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListHostAccountsResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListHostGroupAccountNamesForUserGroupRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListHostGroupAccountNamesForUserGroupResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListHostGroupAccountNamesForUserRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListHostGroupAccountNamesForUserResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListHostGroupsForUserGroupRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListHostGroupsForUserGroupResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListHostGroupsForUserRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListHostGroupsForUserResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListHostGroupsRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListHostGroupsResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListHostsForUserGroupRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListHostsForUserGroupResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListHostsForUserRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListHostsForUserResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListHostShareKeysRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListHostShareKeysResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListHostsRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListHostsResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListOperationTicketsRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListOperationTicketsResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListTagKeysRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListTagKeysResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListUserGroupsRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListUserGroupsResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListUserPublicKeysRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListUserPublicKeysResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListUsersRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListUsersResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\LockUsersRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\LockUsersResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ModifyHostAccountRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ModifyHostAccountResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ModifyHostGroupRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ModifyHostGroupResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ModifyHostRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ModifyHostResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ModifyHostsActiveAddressTypeRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ModifyHostsActiveAddressTypeResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ModifyHostShareKeyRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ModifyHostShareKeyResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ModifyHostsPortRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ModifyHostsPortResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ModifyInstanceADAuthServerRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ModifyInstanceADAuthServerResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ModifyInstanceAttributeRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ModifyInstanceAttributeResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ModifyInstanceLDAPAuthServerRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ModifyInstanceLDAPAuthServerResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ModifyInstanceTwoFactorRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ModifyInstanceTwoFactorResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ModifyUserGroupRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ModifyUserGroupResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ModifyUserRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ModifyUserResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\MoveResourceGroupRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\MoveResourceGroupResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\RejectApproveCommandRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\RejectApproveCommandResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\RejectOperationTicketRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\RejectOperationTicketResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\RemoveHostsFromGroupRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\RemoveHostsFromGroupResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\RemoveUsersFromGroupRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\RemoveUsersFromGroupResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ResetHostAccountCredentialRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ResetHostAccountCredentialResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\StartInstanceRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\StartInstanceResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\UnlockUsersRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\UnlockUsersResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\UntagResourcesResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Yundunbastionhost extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('yundun-bastionhost', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AcceptApproveCommandRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return AcceptApproveCommandResponse
     */
    public function acceptApproveCommandWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->commandId)) {
            $query['CommandId'] = $request->commandId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AcceptApproveCommand',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AcceptApproveCommandResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AcceptApproveCommandRequest $request
     *
     * @return AcceptApproveCommandResponse
     */
    public function acceptApproveCommand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->acceptApproveCommandWithOptions($request, $runtime);
    }

    /**
     * You can call this operation as a Bastionhost administrator to approve an O\\&M application of an O\\&M engineer.
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param AcceptOperationTicketRequest $request AcceptOperationTicketRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return AcceptOperationTicketResponse AcceptOperationTicketResponse
     */
    public function acceptOperationTicketWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->effectCount)) {
            $query['EffectCount'] = $request->effectCount;
        }
        if (!Utils::isUnset($request->effectEndTime)) {
            $query['EffectEndTime'] = $request->effectEndTime;
        }
        if (!Utils::isUnset($request->effectStartTime)) {
            $query['EffectStartTime'] = $request->effectStartTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->operationTicketId)) {
            $query['OperationTicketId'] = $request->operationTicketId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AcceptOperationTicket',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AcceptOperationTicketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation as a Bastionhost administrator to approve an O\\&M application of an O\\&M engineer.
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param AcceptOperationTicketRequest $request AcceptOperationTicketRequest
     *
     * @return AcceptOperationTicketResponse AcceptOperationTicketResponse
     */
    public function acceptOperationTicket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->acceptOperationTicketWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to add one or more hosts to a host group. You can add multiple hosts to a host group to manage and grant permissions on the hosts in a centralized manner.
     *   * # Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds a limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limits when you call this operation.
     *   *
     * @param AddHostsToGroupRequest $request AddHostsToGroupRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return AddHostsToGroupResponse AddHostsToGroupResponse
     */
    public function addHostsToGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hostGroupId)) {
            $query['HostGroupId'] = $request->hostGroupId;
        }
        if (!Utils::isUnset($request->hostIds)) {
            $query['HostIds'] = $request->hostIds;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddHostsToGroup',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddHostsToGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to add one or more hosts to a host group. You can add multiple hosts to a host group to manage and grant permissions on the hosts in a centralized manner.
     *   * # Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds a limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limits when you call this operation.
     *   *
     * @param AddHostsToGroupRequest $request AddHostsToGroupRequest
     *
     * @return AddHostsToGroupResponse AddHostsToGroupResponse
     */
    public function addHostsToGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addHostsToGroupWithOptions($request, $runtime);
    }

    /**
     * #
     *   * You can call this operation to add one or more users to a user group. After you call the [CreateUserGroup](~~204596~~) operation to create a user group, you can call the AddUsersToGroup operation to add multiple users to the user group. Then, you can manage and grant permissions to the users at a time.
     *   * # Limit
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param AddUsersToGroupRequest $request AddUsersToGroupRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return AddUsersToGroupResponse AddUsersToGroupResponse
     */
    public function addUsersToGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->userGroupId)) {
            $query['UserGroupId'] = $request->userGroupId;
        }
        if (!Utils::isUnset($request->userIds)) {
            $query['UserIds'] = $request->userIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddUsersToGroup',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddUsersToGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * #
     *   * You can call this operation to add one or more users to a user group. After you call the [CreateUserGroup](~~204596~~) operation to create a user group, you can call the AddUsersToGroup operation to add multiple users to the user group. Then, you can manage and grant permissions to the users at a time.
     *   * # Limit
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param AddUsersToGroupRequest $request AddUsersToGroupRequest
     *
     * @return AddUsersToGroupResponse AddUsersToGroupResponse
     */
    public function addUsersToGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addUsersToGroupWithOptions($request, $runtime);
    }

    /**
     * @param AttachHostAccountsToHostShareKeyRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return AttachHostAccountsToHostShareKeyResponse
     */
    public function attachHostAccountsToHostShareKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hostAccountIds)) {
            $query['HostAccountIds'] = $request->hostAccountIds;
        }
        if (!Utils::isUnset($request->hostShareKeyId)) {
            $query['HostShareKeyId'] = $request->hostShareKeyId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AttachHostAccountsToHostShareKey',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AttachHostAccountsToHostShareKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AttachHostAccountsToHostShareKeyRequest $request
     *
     * @return AttachHostAccountsToHostShareKeyResponse
     */
    public function attachHostAccountsToHostShareKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachHostAccountsToHostShareKeyWithOptions($request, $runtime);
    }

    /**
     * @param AttachHostAccountsToUserRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return AttachHostAccountsToUserResponse
     */
    public function attachHostAccountsToUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hosts)) {
            $query['Hosts'] = $request->hosts;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AttachHostAccountsToUser',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AttachHostAccountsToUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AttachHostAccountsToUserRequest $request
     *
     * @return AttachHostAccountsToUserResponse
     */
    public function attachHostAccountsToUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachHostAccountsToUserWithOptions($request, $runtime);
    }

    /**
     * After you authorize a user group to manage specific hosts and host accounts, all the users in the user group have access to the authorized hosts and host accounts.
     *   *
     * @param AttachHostAccountsToUserGroupRequest $request AttachHostAccountsToUserGroupRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return AttachHostAccountsToUserGroupResponse AttachHostAccountsToUserGroupResponse
     */
    public function attachHostAccountsToUserGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hosts)) {
            $query['Hosts'] = $request->hosts;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->userGroupId)) {
            $query['UserGroupId'] = $request->userGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AttachHostAccountsToUserGroup',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AttachHostAccountsToUserGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * After you authorize a user group to manage specific hosts and host accounts, all the users in the user group have access to the authorized hosts and host accounts.
     *   *
     * @param AttachHostAccountsToUserGroupRequest $request AttachHostAccountsToUserGroupRequest
     *
     * @return AttachHostAccountsToUserGroupResponse AttachHostAccountsToUserGroupResponse
     */
    public function attachHostAccountsToUserGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachHostAccountsToUserGroupWithOptions($request, $runtime);
    }

    /**
     * @param AttachHostGroupAccountsToUserRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return AttachHostGroupAccountsToUserResponse
     */
    public function attachHostGroupAccountsToUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hostGroups)) {
            $query['HostGroups'] = $request->hostGroups;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AttachHostGroupAccountsToUser',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AttachHostGroupAccountsToUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AttachHostGroupAccountsToUserRequest $request
     *
     * @return AttachHostGroupAccountsToUserResponse
     */
    public function attachHostGroupAccountsToUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachHostGroupAccountsToUserWithOptions($request, $runtime);
    }

    /**
     * @param AttachHostGroupAccountsToUserGroupRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return AttachHostGroupAccountsToUserGroupResponse
     */
    public function attachHostGroupAccountsToUserGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hostGroups)) {
            $query['HostGroups'] = $request->hostGroups;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->userGroupId)) {
            $query['UserGroupId'] = $request->userGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AttachHostGroupAccountsToUserGroup',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AttachHostGroupAccountsToUserGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AttachHostGroupAccountsToUserGroupRequest $request
     *
     * @return AttachHostGroupAccountsToUserGroupResponse
     */
    public function attachHostGroupAccountsToUserGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachHostGroupAccountsToUserGroupWithOptions($request, $runtime);
    }

    /**
     * @param ConfigInstanceSecurityGroupsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ConfigInstanceSecurityGroupsResponse
     */
    public function configInstanceSecurityGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authorizedSecurityGroups)) {
            $query['AuthorizedSecurityGroups'] = $request->authorizedSecurityGroups;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ConfigInstanceSecurityGroups',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConfigInstanceSecurityGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ConfigInstanceSecurityGroupsRequest $request
     *
     * @return ConfigInstanceSecurityGroupsResponse
     */
    public function configInstanceSecurityGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configInstanceSecurityGroupsWithOptions($request, $runtime);
    }

    /**
     * The ID of the request, which is used to locate and troubleshoot issues.
     *   *
     * @param ConfigInstanceWhiteListRequest $request ConfigInstanceWhiteListRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ConfigInstanceWhiteListResponse ConfigInstanceWhiteListResponse
     */
    public function configInstanceWhiteListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->whiteList)) {
            $query['WhiteList'] = $request->whiteList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ConfigInstanceWhiteList',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConfigInstanceWhiteListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The ID of the request, which is used to locate and troubleshoot issues.
     *   *
     * @param ConfigInstanceWhiteListRequest $request ConfigInstanceWhiteListRequest
     *
     * @return ConfigInstanceWhiteListResponse ConfigInstanceWhiteListResponse
     */
    public function configInstanceWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configInstanceWhiteListWithOptions($request, $runtime);
    }

    /**
     * @param CreateHostRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CreateHostResponse
     */
    public function createHostWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->activeAddressType)) {
            $query['ActiveAddressType'] = $request->activeAddressType;
        }
        if (!Utils::isUnset($request->comment)) {
            $query['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->hostName)) {
            $query['HostName'] = $request->hostName;
        }
        if (!Utils::isUnset($request->hostPrivateAddress)) {
            $query['HostPrivateAddress'] = $request->hostPrivateAddress;
        }
        if (!Utils::isUnset($request->hostPublicAddress)) {
            $query['HostPublicAddress'] = $request->hostPublicAddress;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceRegionId)) {
            $query['InstanceRegionId'] = $request->instanceRegionId;
        }
        if (!Utils::isUnset($request->networkDomainId)) {
            $query['NetworkDomainId'] = $request->networkDomainId;
        }
        if (!Utils::isUnset($request->OSType)) {
            $query['OSType'] = $request->OSType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->sourceInstanceId)) {
            $query['SourceInstanceId'] = $request->sourceInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateHost',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateHostResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateHostRequest $request
     *
     * @return CreateHostResponse
     */
    public function createHost($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createHostWithOptions($request, $runtime);
    }

    /**
     * @param CreateHostAccountRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateHostAccountResponse
     */
    public function createHostAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hostAccountName)) {
            $query['HostAccountName'] = $request->hostAccountName;
        }
        if (!Utils::isUnset($request->hostId)) {
            $query['HostId'] = $request->hostId;
        }
        if (!Utils::isUnset($request->hostShareKeyId)) {
            $query['HostShareKeyId'] = $request->hostShareKeyId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->passPhrase)) {
            $query['PassPhrase'] = $request->passPhrase;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->privateKey)) {
            $query['PrivateKey'] = $request->privateKey;
        }
        if (!Utils::isUnset($request->protocolName)) {
            $query['ProtocolName'] = $request->protocolName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateHostAccount',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateHostAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateHostAccountRequest $request
     *
     * @return CreateHostAccountResponse
     */
    public function createHostAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createHostAccountWithOptions($request, $runtime);
    }

    /**
     * @param CreateHostGroupRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateHostGroupResponse
     */
    public function createHostGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->comment)) {
            $query['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->hostGroupName)) {
            $query['HostGroupName'] = $request->hostGroupName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateHostGroup',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateHostGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateHostGroupRequest $request
     *
     * @return CreateHostGroupResponse
     */
    public function createHostGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createHostGroupWithOptions($request, $runtime);
    }

    /**
     * @param CreateHostShareKeyRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateHostShareKeyResponse
     */
    public function createHostShareKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hostShareKeyName)) {
            $query['HostShareKeyName'] = $request->hostShareKeyName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->passPhrase)) {
            $query['PassPhrase'] = $request->passPhrase;
        }
        if (!Utils::isUnset($request->privateKey)) {
            $query['PrivateKey'] = $request->privateKey;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateHostShareKey',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateHostShareKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateHostShareKeyRequest $request
     *
     * @return CreateHostShareKeyResponse
     */
    public function createHostShareKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createHostShareKeyWithOptions($request, $runtime);
    }

    /**
     * ## Usage notes
     *   * You can call this operation to add a user to a bastion host. You can add local users and Resource Access Management (RAM) users. After a Bastionhost administrator adds a user to a bastion host, the O&M personnel can log on to the bastion host as the user to perform O&M operations on the host on which they have permissions.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param CreateUserRequest $request CreateUserRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateUserResponse CreateUserResponse
     */
    public function createUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->comment)) {
            $query['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->displayName)) {
            $query['DisplayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->effectiveEndTime)) {
            $query['EffectiveEndTime'] = $request->effectiveEndTime;
        }
        if (!Utils::isUnset($request->effectiveStartTime)) {
            $query['EffectiveStartTime'] = $request->effectiveStartTime;
        }
        if (!Utils::isUnset($request->email)) {
            $query['Email'] = $request->email;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->language)) {
            $query['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->languageStatus)) {
            $query['LanguageStatus'] = $request->languageStatus;
        }
        if (!Utils::isUnset($request->mobile)) {
            $query['Mobile'] = $request->mobile;
        }
        if (!Utils::isUnset($request->mobileCountryCode)) {
            $query['MobileCountryCode'] = $request->mobileCountryCode;
        }
        if (!Utils::isUnset($request->needResetPassword)) {
            $query['NeedResetPassword'] = $request->needResetPassword;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->sourceUserId)) {
            $query['SourceUserId'] = $request->sourceUserId;
        }
        if (!Utils::isUnset($request->twoFactorMethods)) {
            $query['TwoFactorMethods'] = $request->twoFactorMethods;
        }
        if (!Utils::isUnset($request->twoFactorStatus)) {
            $query['TwoFactorStatus'] = $request->twoFactorStatus;
        }
        if (!Utils::isUnset($request->userName)) {
            $query['UserName'] = $request->userName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateUser',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## Usage notes
     *   * You can call this operation to add a user to a bastion host. You can add local users and Resource Access Management (RAM) users. After a Bastionhost administrator adds a user to a bastion host, the O&M personnel can log on to the bastion host as the user to perform O&M operations on the host on which they have permissions.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param CreateUserRequest $request CreateUserRequest
     *
     * @return CreateUserResponse CreateUserResponse
     */
    public function createUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUserWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to create a user group for a bastion host as an administrator. Then, you can call the [AddUsersToGroup](~~204600~~) operation to add users to the user group at a time. After you add the users to the user group, you can authorize and manage the users in a centralized manner.
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param CreateUserGroupRequest $request CreateUserGroupRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateUserGroupResponse CreateUserGroupResponse
     */
    public function createUserGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->comment)) {
            $query['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->userGroupName)) {
            $query['UserGroupName'] = $request->userGroupName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateUserGroup',
            'version'     => '2019-12-09',
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
     * You can call this operation to create a user group for a bastion host as an administrator. Then, you can call the [AddUsersToGroup](~~204600~~) operation to add users to the user group at a time. After you add the users to the user group, you can authorize and manage the users in a centralized manner.
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
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
     * You can call the CreateUserPublicKey operation to create a public key for the specified user of a bastion host.
     *   *
     * @param CreateUserPublicKeyRequest $request CreateUserPublicKeyRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateUserPublicKeyResponse CreateUserPublicKeyResponse
     */
    public function createUserPublicKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->comment)) {
            $query['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->publicKey)) {
            $query['PublicKey'] = $request->publicKey;
        }
        if (!Utils::isUnset($request->publicKeyName)) {
            $query['PublicKeyName'] = $request->publicKeyName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateUserPublicKey',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateUserPublicKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call the CreateUserPublicKey operation to create a public key for the specified user of a bastion host.
     *   *
     * @param CreateUserPublicKeyRequest $request CreateUserPublicKeyRequest
     *
     * @return CreateUserPublicKeyResponse CreateUserPublicKeyResponse
     */
    public function createUserPublicKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUserPublicKeyWithOptions($request, $runtime);
    }

    /**
     * @param DeleteHostRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteHostResponse
     */
    public function deleteHostWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hostId)) {
            $query['HostId'] = $request->hostId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteHost',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteHostResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteHostRequest $request
     *
     * @return DeleteHostResponse
     */
    public function deleteHost($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteHostWithOptions($request, $runtime);
    }

    /**
     * ## Usage notes
     *   * You can call this operation to remove a single host account. If you no longer use a host account that is added to a host in Bastionhost, you can call this operation to remove the host account from the host.
     *   * >  After you remove the host account, you must enter the username and password of the host when you log on to the host in Bastionhost.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DeleteHostAccountRequest $request DeleteHostAccountRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteHostAccountResponse DeleteHostAccountResponse
     */
    public function deleteHostAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hostAccountId)) {
            $query['HostAccountId'] = $request->hostAccountId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteHostAccount',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteHostAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## Usage notes
     *   * You can call this operation to remove a single host account. If you no longer use a host account that is added to a host in Bastionhost, you can call this operation to remove the host account from the host.
     *   * >  After you remove the host account, you must enter the username and password of the host when you log on to the host in Bastionhost.
     *   * ## Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DeleteHostAccountRequest $request DeleteHostAccountRequest
     *
     * @return DeleteHostAccountResponse DeleteHostAccountResponse
     */
    public function deleteHostAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteHostAccountWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to delete a single host group. If you no longer need to perform O\\&M operations on all hosts in a host group, you can call this operation to delete the host group.
     *   * ### Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DeleteHostGroupRequest $request DeleteHostGroupRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteHostGroupResponse DeleteHostGroupResponse
     */
    public function deleteHostGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hostGroupId)) {
            $query['HostGroupId'] = $request->hostGroupId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteHostGroup',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteHostGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to delete a single host group. If you no longer need to perform O\\&M operations on all hosts in a host group, you can call this operation to delete the host group.
     *   * ### Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DeleteHostGroupRequest $request DeleteHostGroupRequest
     *
     * @return DeleteHostGroupResponse DeleteHostGroupResponse
     */
    public function deleteHostGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteHostGroupWithOptions($request, $runtime);
    }

    /**
     * @param DeleteHostShareKeyRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteHostShareKeyResponse
     */
    public function deleteHostShareKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hostShareKeyId)) {
            $query['HostShareKeyId'] = $request->hostShareKeyId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteHostShareKey',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteHostShareKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteHostShareKeyRequest $request
     *
     * @return DeleteHostShareKeyResponse
     */
    public function deleteHostShareKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteHostShareKeyWithOptions($request, $runtime);
    }

    /**
     * @param DeleteUserRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteUserResponse
     */
    public function deleteUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteUser',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteUserRequest $request
     *
     * @return DeleteUserResponse
     */
    public function deleteUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUserWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->userGroupId)) {
            $query['UserGroupId'] = $request->userGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteUserGroup',
            'version'     => '2019-12-09',
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
     * You can call the DeleteUserPublicKey operation to delete a public key from the specified user of a bastion host.
     *   *
     * @param DeleteUserPublicKeyRequest $request DeleteUserPublicKeyRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteUserPublicKeyResponse DeleteUserPublicKeyResponse
     */
    public function deleteUserPublicKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->publicKeyId)) {
            $query['PublicKeyId'] = $request->publicKeyId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteUserPublicKey',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteUserPublicKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call the DeleteUserPublicKey operation to delete a public key from the specified user of a bastion host.
     *   *
     * @param DeleteUserPublicKeyRequest $request DeleteUserPublicKeyRequest
     *
     * @return DeleteUserPublicKeyResponse DeleteUserPublicKeyResponse
     */
    public function deleteUserPublicKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUserPublicKeyWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceAttributeRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeInstanceAttributeResponse
     */
    public function describeInstanceAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceAttribute',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInstanceAttributeRequest $request
     *
     * @return DescribeInstanceAttributeResponse
     */
    public function describeInstanceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceAttributeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstancesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeInstancesResponse
     */
    public function describeInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceStatus)) {
            $query['InstanceStatus'] = $request->instanceStatus;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
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
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstances',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInstancesRequest $request
     *
     * @return DescribeInstancesResponse
     */
    public function describeInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstancesWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRegions',
            'version'     => '2019-12-09',
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
     * @param DetachHostAccountsFromHostShareKeyRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DetachHostAccountsFromHostShareKeyResponse
     */
    public function detachHostAccountsFromHostShareKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hostAccountIds)) {
            $query['HostAccountIds'] = $request->hostAccountIds;
        }
        if (!Utils::isUnset($request->hostShareKeyId)) {
            $query['HostShareKeyId'] = $request->hostShareKeyId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetachHostAccountsFromHostShareKey',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetachHostAccountsFromHostShareKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DetachHostAccountsFromHostShareKeyRequest $request
     *
     * @return DetachHostAccountsFromHostShareKeyResponse
     */
    public function detachHostAccountsFromHostShareKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachHostAccountsFromHostShareKeyWithOptions($request, $runtime);
    }

    /**
     * @param DetachHostAccountsFromUserRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DetachHostAccountsFromUserResponse
     */
    public function detachHostAccountsFromUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hosts)) {
            $query['Hosts'] = $request->hosts;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetachHostAccountsFromUser',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetachHostAccountsFromUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DetachHostAccountsFromUserRequest $request
     *
     * @return DetachHostAccountsFromUserResponse
     */
    public function detachHostAccountsFromUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachHostAccountsFromUserWithOptions($request, $runtime);
    }

    /**
     * @param DetachHostAccountsFromUserGroupRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DetachHostAccountsFromUserGroupResponse
     */
    public function detachHostAccountsFromUserGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hosts)) {
            $query['Hosts'] = $request->hosts;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->userGroupId)) {
            $query['UserGroupId'] = $request->userGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetachHostAccountsFromUserGroup',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetachHostAccountsFromUserGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DetachHostAccountsFromUserGroupRequest $request
     *
     * @return DetachHostAccountsFromUserGroupResponse
     */
    public function detachHostAccountsFromUserGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachHostAccountsFromUserGroupWithOptions($request, $runtime);
    }

    /**
     * @param DetachHostGroupAccountsFromUserRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DetachHostGroupAccountsFromUserResponse
     */
    public function detachHostGroupAccountsFromUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hostGroups)) {
            $query['HostGroups'] = $request->hostGroups;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetachHostGroupAccountsFromUser',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetachHostGroupAccountsFromUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DetachHostGroupAccountsFromUserRequest $request
     *
     * @return DetachHostGroupAccountsFromUserResponse
     */
    public function detachHostGroupAccountsFromUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachHostGroupAccountsFromUserWithOptions($request, $runtime);
    }

    /**
     * ****
     *   *
     * @param DetachHostGroupAccountsFromUserGroupRequest $request DetachHostGroupAccountsFromUserGroupRequest
     * @param RuntimeOptions                              $runtime runtime options for this request RuntimeOptions
     *
     * @return DetachHostGroupAccountsFromUserGroupResponse DetachHostGroupAccountsFromUserGroupResponse
     */
    public function detachHostGroupAccountsFromUserGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hostGroups)) {
            $query['HostGroups'] = $request->hostGroups;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->userGroupId)) {
            $query['UserGroupId'] = $request->userGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetachHostGroupAccountsFromUserGroup',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetachHostGroupAccountsFromUserGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ****
     *   *
     * @param DetachHostGroupAccountsFromUserGroupRequest $request DetachHostGroupAccountsFromUserGroupRequest
     *
     * @return DetachHostGroupAccountsFromUserGroupResponse DetachHostGroupAccountsFromUserGroupResponse
     */
    public function detachHostGroupAccountsFromUserGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachHostGroupAccountsFromUserGroupWithOptions($request, $runtime);
    }

    /**
     * @param DisableInstancePublicAccessRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DisableInstancePublicAccessResponse
     */
    public function disableInstancePublicAccessWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableInstancePublicAccess',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableInstancePublicAccessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DisableInstancePublicAccessRequest $request
     *
     * @return DisableInstancePublicAccessResponse
     */
    public function disableInstancePublicAccess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableInstancePublicAccessWithOptions($request, $runtime);
    }

    /**
     * @param EnableInstancePublicAccessRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return EnableInstancePublicAccessResponse
     */
    public function enableInstancePublicAccessWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableInstancePublicAccess',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableInstancePublicAccessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EnableInstancePublicAccessRequest $request
     *
     * @return EnableInstancePublicAccessResponse
     */
    public function enableInstancePublicAccess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableInstancePublicAccessWithOptions($request, $runtime);
    }

    /**
     * @param GetHostRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return GetHostResponse
     */
    public function getHostWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hostId)) {
            $query['HostId'] = $request->hostId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetHost',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetHostResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetHostRequest $request
     *
     * @return GetHostResponse
     */
    public function getHost($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHostWithOptions($request, $runtime);
    }

    /**
     * @param GetHostAccountRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetHostAccountResponse
     */
    public function getHostAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hostAccountId)) {
            $query['HostAccountId'] = $request->hostAccountId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetHostAccount',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetHostAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetHostAccountRequest $request
     *
     * @return GetHostAccountResponse
     */
    public function getHostAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHostAccountWithOptions($request, $runtime);
    }

    /**
     * @param GetHostGroupRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetHostGroupResponse
     */
    public function getHostGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hostGroupId)) {
            $query['HostGroupId'] = $request->hostGroupId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetHostGroup',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetHostGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetHostGroupRequest $request
     *
     * @return GetHostGroupResponse
     */
    public function getHostGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHostGroupWithOptions($request, $runtime);
    }

    /**
     * @param GetHostShareKeyRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetHostShareKeyResponse
     */
    public function getHostShareKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hostShareKeyId)) {
            $query['HostShareKeyId'] = $request->hostShareKeyId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetHostShareKey',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetHostShareKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetHostShareKeyRequest $request
     *
     * @return GetHostShareKeyResponse
     */
    public function getHostShareKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHostShareKeyWithOptions($request, $runtime);
    }

    /**
     * The condition that is used to filter users.
     *   *
     * @param GetInstanceADAuthServerRequest $request GetInstanceADAuthServerRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return GetInstanceADAuthServerResponse GetInstanceADAuthServerResponse
     */
    public function getInstanceADAuthServerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetInstanceADAuthServer',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetInstanceADAuthServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The condition that is used to filter users.
     *   *
     * @param GetInstanceADAuthServerRequest $request GetInstanceADAuthServerRequest
     *
     * @return GetInstanceADAuthServerResponse GetInstanceADAuthServerResponse
     */
    public function getInstanceADAuthServer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceADAuthServerWithOptions($request, $runtime);
    }

    /**
     * @param GetInstanceLDAPAuthServerRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetInstanceLDAPAuthServerResponse
     */
    public function getInstanceLDAPAuthServerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetInstanceLDAPAuthServer',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetInstanceLDAPAuthServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetInstanceLDAPAuthServerRequest $request
     *
     * @return GetInstanceLDAPAuthServerResponse
     */
    public function getInstanceLDAPAuthServer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceLDAPAuthServerWithOptions($request, $runtime);
    }

    /**
     * Indicates whether two-factor authentication is enabled. Valid values:
     *   * *   **true**: enabled
     *   * *   **false**: disabled.
     *   *
     * @param GetInstanceTwoFactorRequest $request GetInstanceTwoFactorRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetInstanceTwoFactorResponse GetInstanceTwoFactorResponse
     */
    public function getInstanceTwoFactorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetInstanceTwoFactor',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetInstanceTwoFactorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Indicates whether two-factor authentication is enabled. Valid values:
     *   * *   **true**: enabled
     *   * *   **false**: disabled.
     *   *
     * @param GetInstanceTwoFactorRequest $request GetInstanceTwoFactorRequest
     *
     * @return GetInstanceTwoFactorResponse GetInstanceTwoFactorResponse
     */
    public function getInstanceTwoFactor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceTwoFactorWithOptions($request, $runtime);
    }

    /**
     * @param GetUserRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return GetUserResponse
     */
    public function getUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetUser',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetUserRequest $request
     *
     * @return GetUserResponse
     */
    public function getUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->userGroupId)) {
            $query['UserGroupId'] = $request->userGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetUserGroup',
            'version'     => '2019-12-09',
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
     * @param ListApproveCommandsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListApproveCommandsResponse
     */
    public function listApproveCommandsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
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
            'action'      => 'ListApproveCommands',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListApproveCommandsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListApproveCommandsRequest $request
     *
     * @return ListApproveCommandsResponse
     */
    public function listApproveCommands($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listApproveCommandsWithOptions($request, $runtime);
    }

    /**
     * @param ListHostAccountsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListHostAccountsResponse
     */
    public function listHostAccountsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hostAccountName)) {
            $query['HostAccountName'] = $request->hostAccountName;
        }
        if (!Utils::isUnset($request->hostId)) {
            $query['HostId'] = $request->hostId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->protocolName)) {
            $query['ProtocolName'] = $request->protocolName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListHostAccounts',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListHostAccountsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListHostAccountsRequest $request
     *
     * @return ListHostAccountsResponse
     */
    public function listHostAccounts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHostAccountsWithOptions($request, $runtime);
    }

    /**
     * @param ListHostAccountsForHostShareKeyRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ListHostAccountsForHostShareKeyResponse
     */
    public function listHostAccountsForHostShareKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hostShareKeyId)) {
            $query['HostShareKeyId'] = $request->hostShareKeyId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
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
            'action'      => 'ListHostAccountsForHostShareKey',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListHostAccountsForHostShareKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListHostAccountsForHostShareKeyRequest $request
     *
     * @return ListHostAccountsForHostShareKeyResponse
     */
    public function listHostAccountsForHostShareKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHostAccountsForHostShareKeyWithOptions($request, $runtime);
    }

    /**
     * @param ListHostAccountsForUserRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListHostAccountsForUserResponse
     */
    public function listHostAccountsForUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hostAccountName)) {
            $query['HostAccountName'] = $request->hostAccountName;
        }
        if (!Utils::isUnset($request->hostId)) {
            $query['HostId'] = $request->hostId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
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
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListHostAccountsForUser',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListHostAccountsForUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListHostAccountsForUserRequest $request
     *
     * @return ListHostAccountsForUserResponse
     */
    public function listHostAccountsForUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHostAccountsForUserWithOptions($request, $runtime);
    }

    /**
     * @param ListHostAccountsForUserGroupRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListHostAccountsForUserGroupResponse
     */
    public function listHostAccountsForUserGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hostAccountName)) {
            $query['HostAccountName'] = $request->hostAccountName;
        }
        if (!Utils::isUnset($request->hostId)) {
            $query['HostId'] = $request->hostId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
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
        if (!Utils::isUnset($request->userGroupId)) {
            $query['UserGroupId'] = $request->userGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListHostAccountsForUserGroup',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListHostAccountsForUserGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListHostAccountsForUserGroupRequest $request
     *
     * @return ListHostAccountsForUserGroupResponse
     */
    public function listHostAccountsForUserGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHostAccountsForUserGroupWithOptions($request, $runtime);
    }

    /**
     * @param ListHostGroupAccountNamesForUserRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return ListHostGroupAccountNamesForUserResponse
     */
    public function listHostGroupAccountNamesForUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hostGroupId)) {
            $query['HostGroupId'] = $request->hostGroupId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListHostGroupAccountNamesForUser',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListHostGroupAccountNamesForUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListHostGroupAccountNamesForUserRequest $request
     *
     * @return ListHostGroupAccountNamesForUserResponse
     */
    public function listHostGroupAccountNamesForUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHostGroupAccountNamesForUserWithOptions($request, $runtime);
    }

    /**
     * @param ListHostGroupAccountNamesForUserGroupRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return ListHostGroupAccountNamesForUserGroupResponse
     */
    public function listHostGroupAccountNamesForUserGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hostGroupId)) {
            $query['HostGroupId'] = $request->hostGroupId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->userGroupId)) {
            $query['UserGroupId'] = $request->userGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListHostGroupAccountNamesForUserGroup',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListHostGroupAccountNamesForUserGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListHostGroupAccountNamesForUserGroupRequest $request
     *
     * @return ListHostGroupAccountNamesForUserGroupResponse
     */
    public function listHostGroupAccountNamesForUserGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHostGroupAccountNamesForUserGroupWithOptions($request, $runtime);
    }

    /**
     * @param ListHostGroupsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListHostGroupsResponse
     */
    public function listHostGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hostGroupName)) {
            $query['HostGroupName'] = $request->hostGroupName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
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
            'action'      => 'ListHostGroups',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListHostGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListHostGroupsRequest $request
     *
     * @return ListHostGroupsResponse
     */
    public function listHostGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHostGroupsWithOptions($request, $runtime);
    }

    /**
     * @param ListHostGroupsForUserRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListHostGroupsForUserResponse
     */
    public function listHostGroupsForUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hostGroupName)) {
            $query['HostGroupName'] = $request->hostGroupName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->mode)) {
            $query['Mode'] = $request->mode;
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
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListHostGroupsForUser',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListHostGroupsForUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListHostGroupsForUserRequest $request
     *
     * @return ListHostGroupsForUserResponse
     */
    public function listHostGroupsForUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHostGroupsForUserWithOptions($request, $runtime);
    }

    /**
     * @param ListHostGroupsForUserGroupRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListHostGroupsForUserGroupResponse
     */
    public function listHostGroupsForUserGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hostGroupName)) {
            $query['HostGroupName'] = $request->hostGroupName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->mode)) {
            $query['Mode'] = $request->mode;
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
        if (!Utils::isUnset($request->userGroupId)) {
            $query['UserGroupId'] = $request->userGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListHostGroupsForUserGroup',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListHostGroupsForUserGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListHostGroupsForUserGroupRequest $request
     *
     * @return ListHostGroupsForUserGroupResponse
     */
    public function listHostGroupsForUserGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHostGroupsForUserGroupWithOptions($request, $runtime);
    }

    /**
     * @param ListHostShareKeysRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListHostShareKeysResponse
     */
    public function listHostShareKeysWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
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
            'action'      => 'ListHostShareKeys',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListHostShareKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListHostShareKeysRequest $request
     *
     * @return ListHostShareKeysResponse
     */
    public function listHostShareKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHostShareKeysWithOptions($request, $runtime);
    }

    /**
     * @param ListHostsRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListHostsResponse
     */
    public function listHostsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hostAddress)) {
            $query['HostAddress'] = $request->hostAddress;
        }
        if (!Utils::isUnset($request->hostGroupId)) {
            $query['HostGroupId'] = $request->hostGroupId;
        }
        if (!Utils::isUnset($request->hostName)) {
            $query['HostName'] = $request->hostName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->OSType)) {
            $query['OSType'] = $request->OSType;
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
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->sourceInstanceId)) {
            $query['SourceInstanceId'] = $request->sourceInstanceId;
        }
        if (!Utils::isUnset($request->sourceInstanceState)) {
            $query['SourceInstanceState'] = $request->sourceInstanceState;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListHosts',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListHostsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListHostsRequest $request
     *
     * @return ListHostsResponse
     */
    public function listHosts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHostsWithOptions($request, $runtime);
    }

    /**
     * @param ListHostsForUserRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListHostsForUserResponse
     */
    public function listHostsForUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hostAddress)) {
            $query['HostAddress'] = $request->hostAddress;
        }
        if (!Utils::isUnset($request->hostName)) {
            $query['HostName'] = $request->hostName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->mode)) {
            $query['Mode'] = $request->mode;
        }
        if (!Utils::isUnset($request->OSType)) {
            $query['OSType'] = $request->OSType;
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
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListHostsForUser',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListHostsForUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListHostsForUserRequest $request
     *
     * @return ListHostsForUserResponse
     */
    public function listHostsForUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHostsForUserWithOptions($request, $runtime);
    }

    /**
     * @param ListHostsForUserGroupRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListHostsForUserGroupResponse
     */
    public function listHostsForUserGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hostAddress)) {
            $query['HostAddress'] = $request->hostAddress;
        }
        if (!Utils::isUnset($request->hostName)) {
            $query['HostName'] = $request->hostName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->mode)) {
            $query['Mode'] = $request->mode;
        }
        if (!Utils::isUnset($request->OSType)) {
            $query['OSType'] = $request->OSType;
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
        if (!Utils::isUnset($request->userGroupId)) {
            $query['UserGroupId'] = $request->userGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListHostsForUserGroup',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListHostsForUserGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListHostsForUserGroupRequest $request
     *
     * @return ListHostsForUserGroupResponse
     */
    public function listHostsForUserGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHostsForUserGroupWithOptions($request, $runtime);
    }

    /**
     * @param ListOperationTicketsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListOperationTicketsResponse
     */
    public function listOperationTicketsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->assetAddress)) {
            $query['AssetAddress'] = $request->assetAddress;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
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
            'action'      => 'ListOperationTickets',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListOperationTicketsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListOperationTicketsRequest $request
     *
     * @return ListOperationTicketsResponse
     */
    public function listOperationTickets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOperationTicketsWithOptions($request, $runtime);
    }

    /**
     * @param ListTagKeysRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListTagKeysResponse
     */
    public function listTagKeysWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTagKeys',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTagKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTagKeysRequest $request
     *
     * @return ListTagKeysResponse
     */
    public function listTagKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagKeysWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
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
            'version'     => '2019-12-09',
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
     * @param ListUserGroupsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListUserGroupsResponse
     */
    public function listUserGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
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
        if (!Utils::isUnset($request->userGroupName)) {
            $query['UserGroupName'] = $request->userGroupName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUserGroups',
            'version'     => '2019-12-09',
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
     * @param ListUserPublicKeysRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListUserPublicKeysResponse
     */
    public function listUserPublicKeysWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
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
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUserPublicKeys',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListUserPublicKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListUserPublicKeysRequest $request
     *
     * @return ListUserPublicKeysResponse
     */
    public function listUserPublicKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserPublicKeysWithOptions($request, $runtime);
    }

    /**
     * @param ListUsersRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListUsersResponse
     */
    public function listUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->displayName)) {
            $query['DisplayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->mobile)) {
            $query['Mobile'] = $request->mobile;
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
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->sourceUserId)) {
            $query['SourceUserId'] = $request->sourceUserId;
        }
        if (!Utils::isUnset($request->userGroupId)) {
            $query['UserGroupId'] = $request->userGroupId;
        }
        if (!Utils::isUnset($request->userName)) {
            $query['UserName'] = $request->userName;
        }
        if (!Utils::isUnset($request->userState)) {
            $query['UserState'] = $request->userState;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUsers',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * # Description
     *   * You can call this operation to lock one or more users of a bastion host. If a user does not need to use a bastion host to perform O\\&M operations within a specific period of time, you can lock the user. The locked user can no longer log on to or perform O\\&M operations on the hosts on which the user is granted permissions. If you want to unlock the user later, you can call the [UnlockUsers](~~204590~~) operation.
     *   * # Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param LockUsersRequest $request LockUsersRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return LockUsersResponse LockUsersResponse
     */
    public function lockUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->userIds)) {
            $query['UserIds'] = $request->userIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'LockUsers',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return LockUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * # Description
     *   * You can call this operation to lock one or more users of a bastion host. If a user does not need to use a bastion host to perform O\\&M operations within a specific period of time, you can lock the user. The locked user can no longer log on to or perform O\\&M operations on the hosts on which the user is granted permissions. If you want to unlock the user later, you can call the [UnlockUsers](~~204590~~) operation.
     *   * # Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param LockUsersRequest $request LockUsersRequest
     *
     * @return LockUsersResponse LockUsersResponse
     */
    public function lockUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->lockUsersWithOptions($request, $runtime);
    }

    /**
     * You can call the ModifyHost operation to modify the basic information about a host in a data center, an Elastic Compute Service (ECS) instance, or a host in an ApsaraDB MyBase dedicated cluster.
     *   * > The basic information about ECS instances and hosts in ApsaraDB MyBase dedicated clusters within your Alibaba Cloud account is synchronized to Bastionhost on a regular basis. After you modify the basic information about an ECS instance or a host in an ApsaraDB MyBase dedicated cluster, the modification result may be overwritten by the synchronized information.
     *   *
     * @param ModifyHostRequest $request ModifyHostRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyHostResponse ModifyHostResponse
     */
    public function modifyHostWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->comment)) {
            $query['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->hostId)) {
            $query['HostId'] = $request->hostId;
        }
        if (!Utils::isUnset($request->hostName)) {
            $query['HostName'] = $request->hostName;
        }
        if (!Utils::isUnset($request->hostPrivateAddress)) {
            $query['HostPrivateAddress'] = $request->hostPrivateAddress;
        }
        if (!Utils::isUnset($request->hostPublicAddress)) {
            $query['HostPublicAddress'] = $request->hostPublicAddress;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->networkDomainId)) {
            $query['NetworkDomainId'] = $request->networkDomainId;
        }
        if (!Utils::isUnset($request->OSType)) {
            $query['OSType'] = $request->OSType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyHost',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyHostResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call the ModifyHost operation to modify the basic information about a host in a data center, an Elastic Compute Service (ECS) instance, or a host in an ApsaraDB MyBase dedicated cluster.
     *   * > The basic information about ECS instances and hosts in ApsaraDB MyBase dedicated clusters within your Alibaba Cloud account is synchronized to Bastionhost on a regular basis. After you modify the basic information about an ECS instance or a host in an ApsaraDB MyBase dedicated cluster, the modification result may be overwritten by the synchronized information.
     *   *
     * @param ModifyHostRequest $request ModifyHostRequest
     *
     * @return ModifyHostResponse ModifyHostResponse
     */
    public function modifyHost($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyHostWithOptions($request, $runtime);
    }

    /**
     * @param ModifyHostAccountRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyHostAccountResponse
     */
    public function modifyHostAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hostAccountId)) {
            $query['HostAccountId'] = $request->hostAccountId;
        }
        if (!Utils::isUnset($request->hostAccountName)) {
            $query['HostAccountName'] = $request->hostAccountName;
        }
        if (!Utils::isUnset($request->hostShareKeyId)) {
            $query['HostShareKeyId'] = $request->hostShareKeyId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->passPhrase)) {
            $query['PassPhrase'] = $request->passPhrase;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->privateKey)) {
            $query['PrivateKey'] = $request->privateKey;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyHostAccount',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyHostAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyHostAccountRequest $request
     *
     * @return ModifyHostAccountResponse
     */
    public function modifyHostAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyHostAccountWithOptions($request, $runtime);
    }

    /**
     * @param ModifyHostGroupRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ModifyHostGroupResponse
     */
    public function modifyHostGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->comment)) {
            $query['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->hostGroupId)) {
            $query['HostGroupId'] = $request->hostGroupId;
        }
        if (!Utils::isUnset($request->hostGroupName)) {
            $query['HostGroupName'] = $request->hostGroupName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyHostGroup',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyHostGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyHostGroupRequest $request
     *
     * @return ModifyHostGroupResponse
     */
    public function modifyHostGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyHostGroupWithOptions($request, $runtime);
    }

    /**
     * @param ModifyHostShareKeyRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyHostShareKeyResponse
     */
    public function modifyHostShareKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hostShareKeyId)) {
            $query['HostShareKeyId'] = $request->hostShareKeyId;
        }
        if (!Utils::isUnset($request->hostShareKeyName)) {
            $query['HostShareKeyName'] = $request->hostShareKeyName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->passPhrase)) {
            $query['PassPhrase'] = $request->passPhrase;
        }
        if (!Utils::isUnset($request->privateKey)) {
            $query['PrivateKey'] = $request->privateKey;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyHostShareKey',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyHostShareKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyHostShareKeyRequest $request
     *
     * @return ModifyHostShareKeyResponse
     */
    public function modifyHostShareKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyHostShareKeyWithOptions($request, $runtime);
    }

    /**
     * @param ModifyHostsActiveAddressTypeRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ModifyHostsActiveAddressTypeResponse
     */
    public function modifyHostsActiveAddressTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->activeAddressType)) {
            $query['ActiveAddressType'] = $request->activeAddressType;
        }
        if (!Utils::isUnset($request->hostIds)) {
            $query['HostIds'] = $request->hostIds;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyHostsActiveAddressType',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyHostsActiveAddressTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyHostsActiveAddressTypeRequest $request
     *
     * @return ModifyHostsActiveAddressTypeResponse
     */
    public function modifyHostsActiveAddressType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyHostsActiveAddressTypeWithOptions($request, $runtime);
    }

    /**
     * ## Usage notes
     *   * You can call this operation to change the port for the O&M protocol on one or more hosts. If the standard port for the O&M protocol on your host is vulnerable to attacks, you can call this operation to specify a custom port. For example, the standard port for SSH is port 22.
     *   * >  Ports 0 to 1024 are reserved for Bastionhost. Do not change the port for the O&M protocol to a reserved port.
     *   * ## QPS limit
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param ModifyHostsPortRequest $request ModifyHostsPortRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyHostsPortResponse ModifyHostsPortResponse
     */
    public function modifyHostsPortWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hostIds)) {
            $query['HostIds'] = $request->hostIds;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->port)) {
            $query['Port'] = $request->port;
        }
        if (!Utils::isUnset($request->protocolName)) {
            $query['ProtocolName'] = $request->protocolName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyHostsPort',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyHostsPortResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## Usage notes
     *   * You can call this operation to change the port for the O&M protocol on one or more hosts. If the standard port for the O&M protocol on your host is vulnerable to attacks, you can call this operation to specify a custom port. For example, the standard port for SSH is port 22.
     *   * >  Ports 0 to 1024 are reserved for Bastionhost. Do not change the port for the O&M protocol to a reserved port.
     *   * ## QPS limit
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param ModifyHostsPortRequest $request ModifyHostsPortRequest
     *
     * @return ModifyHostsPortResponse ModifyHostsPortResponse
     */
    public function modifyHostsPort($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyHostsPortWithOptions($request, $runtime);
    }

    /**
     * @param ModifyInstanceADAuthServerRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyInstanceADAuthServerResponse
     */
    public function modifyInstanceADAuthServerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->account)) {
            $query['Account'] = $request->account;
        }
        if (!Utils::isUnset($request->baseDN)) {
            $query['BaseDN'] = $request->baseDN;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->emailMapping)) {
            $query['EmailMapping'] = $request->emailMapping;
        }
        if (!Utils::isUnset($request->filter)) {
            $query['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->isSSL)) {
            $query['IsSSL'] = $request->isSSL;
        }
        if (!Utils::isUnset($request->mobileMapping)) {
            $query['MobileMapping'] = $request->mobileMapping;
        }
        if (!Utils::isUnset($request->nameMapping)) {
            $query['NameMapping'] = $request->nameMapping;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->port)) {
            $query['Port'] = $request->port;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->server)) {
            $query['Server'] = $request->server;
        }
        if (!Utils::isUnset($request->standbyServer)) {
            $query['StandbyServer'] = $request->standbyServer;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyInstanceADAuthServer',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyInstanceADAuthServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyInstanceADAuthServerRequest $request
     *
     * @return ModifyInstanceADAuthServerResponse
     */
    public function modifyInstanceADAuthServer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceADAuthServerWithOptions($request, $runtime);
    }

    /**
     * @param ModifyInstanceAttributeRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyInstanceAttributeResponse
     */
    public function modifyInstanceAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyInstanceAttribute',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyInstanceAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyInstanceAttributeRequest $request
     *
     * @return ModifyInstanceAttributeResponse
     */
    public function modifyInstanceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyInstanceLDAPAuthServerRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ModifyInstanceLDAPAuthServerResponse
     */
    public function modifyInstanceLDAPAuthServerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->account)) {
            $query['Account'] = $request->account;
        }
        if (!Utils::isUnset($request->baseDN)) {
            $query['BaseDN'] = $request->baseDN;
        }
        if (!Utils::isUnset($request->emailMapping)) {
            $query['EmailMapping'] = $request->emailMapping;
        }
        if (!Utils::isUnset($request->filter)) {
            $query['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->isSSL)) {
            $query['IsSSL'] = $request->isSSL;
        }
        if (!Utils::isUnset($request->loginNameMapping)) {
            $query['LoginNameMapping'] = $request->loginNameMapping;
        }
        if (!Utils::isUnset($request->mobileMapping)) {
            $query['MobileMapping'] = $request->mobileMapping;
        }
        if (!Utils::isUnset($request->nameMapping)) {
            $query['NameMapping'] = $request->nameMapping;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->port)) {
            $query['Port'] = $request->port;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->server)) {
            $query['Server'] = $request->server;
        }
        if (!Utils::isUnset($request->standbyServer)) {
            $query['StandbyServer'] = $request->standbyServer;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyInstanceLDAPAuthServer',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyInstanceLDAPAuthServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyInstanceLDAPAuthServerRequest $request
     *
     * @return ModifyInstanceLDAPAuthServerResponse
     */
    public function modifyInstanceLDAPAuthServer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceLDAPAuthServerWithOptions($request, $runtime);
    }

    /**
     * @param ModifyInstanceTwoFactorRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyInstanceTwoFactorResponse
     */
    public function modifyInstanceTwoFactorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->enableTwoFactor)) {
            $query['EnableTwoFactor'] = $request->enableTwoFactor;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->skipTwoFactorTime)) {
            $query['SkipTwoFactorTime'] = $request->skipTwoFactorTime;
        }
        if (!Utils::isUnset($request->twoFactorMethods)) {
            $query['TwoFactorMethods'] = $request->twoFactorMethods;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyInstanceTwoFactor',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyInstanceTwoFactorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyInstanceTwoFactorRequest $request
     *
     * @return ModifyInstanceTwoFactorResponse
     */
    public function modifyInstanceTwoFactor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceTwoFactorWithOptions($request, $runtime);
    }

    /**
     * @param ModifyUserRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ModifyUserResponse
     */
    public function modifyUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->comment)) {
            $query['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->displayName)) {
            $query['DisplayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->effectiveEndTime)) {
            $query['EffectiveEndTime'] = $request->effectiveEndTime;
        }
        if (!Utils::isUnset($request->effectiveStartTime)) {
            $query['EffectiveStartTime'] = $request->effectiveStartTime;
        }
        if (!Utils::isUnset($request->email)) {
            $query['Email'] = $request->email;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->language)) {
            $query['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->languageStatus)) {
            $query['LanguageStatus'] = $request->languageStatus;
        }
        if (!Utils::isUnset($request->mobile)) {
            $query['Mobile'] = $request->mobile;
        }
        if (!Utils::isUnset($request->mobileCountryCode)) {
            $query['MobileCountryCode'] = $request->mobileCountryCode;
        }
        if (!Utils::isUnset($request->needResetPassword)) {
            $query['NeedResetPassword'] = $request->needResetPassword;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->twoFactorMethods)) {
            $query['TwoFactorMethods'] = $request->twoFactorMethods;
        }
        if (!Utils::isUnset($request->twoFactorStatus)) {
            $query['TwoFactorStatus'] = $request->twoFactorStatus;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyUser',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyUserRequest $request
     *
     * @return ModifyUserResponse
     */
    public function modifyUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyUserWithOptions($request, $runtime);
    }

    /**
     * @param ModifyUserGroupRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ModifyUserGroupResponse
     */
    public function modifyUserGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->comment)) {
            $query['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->userGroupId)) {
            $query['UserGroupId'] = $request->userGroupId;
        }
        if (!Utils::isUnset($request->userGroupName)) {
            $query['UserGroupName'] = $request->userGroupName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyUserGroup',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyUserGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyUserGroupRequest $request
     *
     * @return ModifyUserGroupResponse
     */
    public function modifyUserGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyUserGroupWithOptions($request, $runtime);
    }

    /**
     * @param MoveResourceGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return MoveResourceGroupResponse
     */
    public function moveResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
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
            'action'      => 'MoveResourceGroup',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return MoveResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param MoveResourceGroupRequest $request
     *
     * @return MoveResourceGroupResponse
     */
    public function moveResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->moveResourceGroupWithOptions($request, $runtime);
    }

    /**
     * @param RejectApproveCommandRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return RejectApproveCommandResponse
     */
    public function rejectApproveCommandWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->commandId)) {
            $query['CommandId'] = $request->commandId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RejectApproveCommand',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RejectApproveCommandResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RejectApproveCommandRequest $request
     *
     * @return RejectApproveCommandResponse
     */
    public function rejectApproveCommand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rejectApproveCommandWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to reject an O\\&M application of an O\\&M engineer as a Bastionhost administrator.
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param RejectOperationTicketRequest $request RejectOperationTicketRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return RejectOperationTicketResponse RejectOperationTicketResponse
     */
    public function rejectOperationTicketWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->operationTicketId)) {
            $query['OperationTicketId'] = $request->operationTicketId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RejectOperationTicket',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RejectOperationTicketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to reject an O\\&M application of an O\\&M engineer as a Bastionhost administrator.
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param RejectOperationTicketRequest $request RejectOperationTicketRequest
     *
     * @return RejectOperationTicketResponse RejectOperationTicketResponse
     */
    public function rejectOperationTicket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rejectOperationTicketWithOptions($request, $runtime);
    }

    /**
     * @param RemoveHostsFromGroupRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return RemoveHostsFromGroupResponse
     */
    public function removeHostsFromGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hostGroupId)) {
            $query['HostGroupId'] = $request->hostGroupId;
        }
        if (!Utils::isUnset($request->hostIds)) {
            $query['HostIds'] = $request->hostIds;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveHostsFromGroup',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveHostsFromGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveHostsFromGroupRequest $request
     *
     * @return RemoveHostsFromGroupResponse
     */
    public function removeHostsFromGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeHostsFromGroupWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to remove one or more users from a user group. When users in a user group are transferred to a new position, resign, or are switched to another user group, you can call this operation to remove the users from the current user group at a time.
     *   * ## QPS limit
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param RemoveUsersFromGroupRequest $request RemoveUsersFromGroupRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveUsersFromGroupResponse RemoveUsersFromGroupResponse
     */
    public function removeUsersFromGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->userGroupId)) {
            $query['UserGroupId'] = $request->userGroupId;
        }
        if (!Utils::isUnset($request->userIds)) {
            $query['UserIds'] = $request->userIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveUsersFromGroup',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveUsersFromGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to remove one or more users from a user group. When users in a user group are transferred to a new position, resign, or are switched to another user group, you can call this operation to remove the users from the current user group at a time.
     *   * ## QPS limit
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param RemoveUsersFromGroupRequest $request RemoveUsersFromGroupRequest
     *
     * @return RemoveUsersFromGroupResponse RemoveUsersFromGroupResponse
     */
    public function removeUsersFromGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeUsersFromGroupWithOptions($request, $runtime);
    }

    /**
     * @param ResetHostAccountCredentialRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ResetHostAccountCredentialResponse
     */
    public function resetHostAccountCredentialWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->credentialType)) {
            $query['CredentialType'] = $request->credentialType;
        }
        if (!Utils::isUnset($request->hostAccountId)) {
            $query['HostAccountId'] = $request->hostAccountId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResetHostAccountCredential',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResetHostAccountCredentialResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ResetHostAccountCredentialRequest $request
     *
     * @return ResetHostAccountCredentialResponse
     */
    public function resetHostAccountCredential($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetHostAccountCredentialWithOptions($request, $runtime);
    }

    /**
     * @param StartInstanceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return StartInstanceResponse
     */
    public function startInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->securityGroupIds)) {
            $query['SecurityGroupIds'] = $request->securityGroupIds;
        }
        if (!Utils::isUnset($request->vswitchId)) {
            $query['VswitchId'] = $request->vswitchId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartInstance',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StartInstanceRequest $request
     *
     * @return StartInstanceResponse
     */
    public function startInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startInstanceWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
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
            'action'      => 'TagResources',
            'version'     => '2019-12-09',
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
     * After you call the [LockUsers](~~204591~~) operation to lock one or more users of a bastion host, you can call this operation to unlock the users. After the users are unlocked, the users can perform O\\&M operations by using the bastion host.
     *   * # Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param UnlockUsersRequest $request UnlockUsersRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return UnlockUsersResponse UnlockUsersResponse
     */
    public function unlockUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->userIds)) {
            $query['UserIds'] = $request->userIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UnlockUsers',
            'version'     => '2019-12-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnlockUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * After you call the [LockUsers](~~204591~~) operation to lock one or more users of a bastion host, you can call this operation to unlock the users. After the users are unlocked, the users can perform O\\&M operations by using the bastion host.
     *   * # Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param UnlockUsersRequest $request UnlockUsersRequest
     *
     * @return UnlockUsersResponse UnlockUsersResponse
     */
    public function unlockUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unlockUsersWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
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
            'version'     => '2019-12-09',
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
}
