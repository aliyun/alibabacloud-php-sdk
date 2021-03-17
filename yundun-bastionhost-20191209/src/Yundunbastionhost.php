<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\AddHostsToGroupRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\AddHostsToGroupResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\AddUsersToGroupRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\AddUsersToGroupResponse;
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
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\CreateUserGroupRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\CreateUserGroupResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\CreateUserRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\CreateUserResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DeleteHostAccountRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DeleteHostAccountResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DeleteHostGroupRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DeleteHostGroupResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DeleteHostRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DeleteHostResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DeleteUserGroupRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DeleteUserGroupResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DeleteUserRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DeleteUserResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DescribeInstanceAttributeRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DescribeInstanceAttributeResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DescribeInstancesRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DescribeInstancesResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DescribeRegionsResponse;
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
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetUserGroupRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetUserGroupResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetUserRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetUserResponse;
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
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListHostsRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListHostsResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListTagKeysRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListTagKeysResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListUserGroupsRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListUserGroupsResponse;
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
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ModifyHostsPortRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ModifyHostsPortResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ModifyInstanceAttributeRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ModifyInstanceAttributeResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ModifyUserGroupRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ModifyUserGroupResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ModifyUserRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ModifyUserResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\MoveResourceGroupRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\MoveResourceGroupResponse;
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
     * @param AddHostsToGroupRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return AddHostsToGroupResponse
     */
    public function addHostsToGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddHostsToGroupResponse::fromMap($this->doRPCRequest('AddHostsToGroup', '2019-12-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddHostsToGroupRequest $request
     *
     * @return AddHostsToGroupResponse
     */
    public function addHostsToGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addHostsToGroupWithOptions($request, $runtime);
    }

    /**
     * @param AddUsersToGroupRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return AddUsersToGroupResponse
     */
    public function addUsersToGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddUsersToGroupResponse::fromMap($this->doRPCRequest('AddUsersToGroup', '2019-12-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddUsersToGroupRequest $request
     *
     * @return AddUsersToGroupResponse
     */
    public function addUsersToGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addUsersToGroupWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AttachHostAccountsToUserResponse::fromMap($this->doRPCRequest('AttachHostAccountsToUser', '2019-12-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param AttachHostAccountsToUserGroupRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return AttachHostAccountsToUserGroupResponse
     */
    public function attachHostAccountsToUserGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AttachHostAccountsToUserGroupResponse::fromMap($this->doRPCRequest('AttachHostAccountsToUserGroup', '2019-12-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AttachHostAccountsToUserGroupRequest $request
     *
     * @return AttachHostAccountsToUserGroupResponse
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AttachHostGroupAccountsToUserResponse::fromMap($this->doRPCRequest('AttachHostGroupAccountsToUser', '2019-12-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AttachHostGroupAccountsToUserGroupResponse::fromMap($this->doRPCRequest('AttachHostGroupAccountsToUserGroup', '2019-12-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ConfigInstanceSecurityGroupsResponse::fromMap($this->doRPCRequest('ConfigInstanceSecurityGroups', '2019-12-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ConfigInstanceWhiteListRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ConfigInstanceWhiteListResponse
     */
    public function configInstanceWhiteListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ConfigInstanceWhiteListResponse::fromMap($this->doRPCRequest('ConfigInstanceWhiteList', '2019-12-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ConfigInstanceWhiteListRequest $request
     *
     * @return ConfigInstanceWhiteListResponse
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateHostResponse::fromMap($this->doRPCRequest('CreateHost', '2019-12-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateHostAccountResponse::fromMap($this->doRPCRequest('CreateHostAccount', '2019-12-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateHostGroupResponse::fromMap($this->doRPCRequest('CreateHostGroup', '2019-12-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateUserRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CreateUserResponse
     */
    public function createUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateUserResponse::fromMap($this->doRPCRequest('CreateUser', '2019-12-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateUserRequest $request
     *
     * @return CreateUserResponse
     */
    public function createUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUserWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateUserGroupResponse::fromMap($this->doRPCRequest('CreateUserGroup', '2019-12-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteHostRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteHostResponse
     */
    public function deleteHostWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteHostResponse::fromMap($this->doRPCRequest('DeleteHost', '2019-12-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteHostAccountRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteHostAccountResponse
     */
    public function deleteHostAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteHostAccountResponse::fromMap($this->doRPCRequest('DeleteHostAccount', '2019-12-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteHostAccountRequest $request
     *
     * @return DeleteHostAccountResponse
     */
    public function deleteHostAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteHostAccountWithOptions($request, $runtime);
    }

    /**
     * @param DeleteHostGroupRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteHostGroupResponse
     */
    public function deleteHostGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteHostGroupResponse::fromMap($this->doRPCRequest('DeleteHostGroup', '2019-12-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteHostGroupRequest $request
     *
     * @return DeleteHostGroupResponse
     */
    public function deleteHostGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteHostGroupWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteUserResponse::fromMap($this->doRPCRequest('DeleteUser', '2019-12-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteUserGroupResponse::fromMap($this->doRPCRequest('DeleteUserGroup', '2019-12-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeInstanceAttributeRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeInstanceAttributeResponse
     */
    public function describeInstanceAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeInstanceAttributeResponse::fromMap($this->doRPCRequest('DescribeInstanceAttribute', '2019-12-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeInstancesResponse::fromMap($this->doRPCRequest('DescribeInstances', '2019-12-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRegionsResponse::fromMap($this->doRPCRequest('DescribeRegions', '2019-12-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DetachHostAccountsFromUserRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DetachHostAccountsFromUserResponse
     */
    public function detachHostAccountsFromUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DetachHostAccountsFromUserResponse::fromMap($this->doRPCRequest('DetachHostAccountsFromUser', '2019-12-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DetachHostAccountsFromUserGroupResponse::fromMap($this->doRPCRequest('DetachHostAccountsFromUserGroup', '2019-12-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DetachHostGroupAccountsFromUserResponse::fromMap($this->doRPCRequest('DetachHostGroupAccountsFromUser', '2019-12-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DetachHostGroupAccountsFromUserGroupRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DetachHostGroupAccountsFromUserGroupResponse
     */
    public function detachHostGroupAccountsFromUserGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DetachHostGroupAccountsFromUserGroupResponse::fromMap($this->doRPCRequest('DetachHostGroupAccountsFromUserGroup', '2019-12-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DetachHostGroupAccountsFromUserGroupRequest $request
     *
     * @return DetachHostGroupAccountsFromUserGroupResponse
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DisableInstancePublicAccessResponse::fromMap($this->doRPCRequest('DisableInstancePublicAccess', '2019-12-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EnableInstancePublicAccessResponse::fromMap($this->doRPCRequest('EnableInstancePublicAccess', '2019-12-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetHostResponse::fromMap($this->doRPCRequest('GetHost', '2019-12-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetHostAccountResponse::fromMap($this->doRPCRequest('GetHostAccount', '2019-12-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetHostGroupResponse::fromMap($this->doRPCRequest('GetHostGroup', '2019-12-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param GetUserRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return GetUserResponse
     */
    public function getUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetUserResponse::fromMap($this->doRPCRequest('GetUser', '2019-12-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetUserGroupResponse::fromMap($this->doRPCRequest('GetUserGroup', '2019-12-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ListHostAccountsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListHostAccountsResponse
     */
    public function listHostAccountsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListHostAccountsResponse::fromMap($this->doRPCRequest('ListHostAccounts', '2019-12-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ListHostAccountsForUserRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListHostAccountsForUserResponse
     */
    public function listHostAccountsForUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListHostAccountsForUserResponse::fromMap($this->doRPCRequest('ListHostAccountsForUser', '2019-12-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListHostAccountsForUserGroupResponse::fromMap($this->doRPCRequest('ListHostAccountsForUserGroup', '2019-12-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListHostGroupAccountNamesForUserResponse::fromMap($this->doRPCRequest('ListHostGroupAccountNamesForUser', '2019-12-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListHostGroupAccountNamesForUserGroupResponse::fromMap($this->doRPCRequest('ListHostGroupAccountNamesForUserGroup', '2019-12-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListHostGroupsResponse::fromMap($this->doRPCRequest('ListHostGroups', '2019-12-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListHostGroupsForUserResponse::fromMap($this->doRPCRequest('ListHostGroupsForUser', '2019-12-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListHostGroupsForUserGroupResponse::fromMap($this->doRPCRequest('ListHostGroupsForUserGroup', '2019-12-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ListHostsRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListHostsResponse
     */
    public function listHostsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListHostsResponse::fromMap($this->doRPCRequest('ListHosts', '2019-12-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListHostsForUserResponse::fromMap($this->doRPCRequest('ListHostsForUser', '2019-12-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListHostsForUserGroupResponse::fromMap($this->doRPCRequest('ListHostsForUserGroup', '2019-12-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ListTagKeysRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListTagKeysResponse
     */
    public function listTagKeysWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListTagKeysResponse::fromMap($this->doRPCRequest('ListTagKeys', '2019-12-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListTagResourcesResponse::fromMap($this->doRPCRequest('ListTagResources', '2019-12-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListUserGroupsResponse::fromMap($this->doRPCRequest('ListUserGroups', '2019-12-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ListUsersRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListUsersResponse
     */
    public function listUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListUsersResponse::fromMap($this->doRPCRequest('ListUsers', '2019-12-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param LockUsersRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return LockUsersResponse
     */
    public function lockUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return LockUsersResponse::fromMap($this->doRPCRequest('LockUsers', '2019-12-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param LockUsersRequest $request
     *
     * @return LockUsersResponse
     */
    public function lockUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->lockUsersWithOptions($request, $runtime);
    }

    /**
     * @param ModifyHostRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ModifyHostResponse
     */
    public function modifyHostWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyHostResponse::fromMap($this->doRPCRequest('ModifyHost', '2019-12-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyHostRequest $request
     *
     * @return ModifyHostResponse
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyHostAccountResponse::fromMap($this->doRPCRequest('ModifyHostAccount', '2019-12-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyHostGroupResponse::fromMap($this->doRPCRequest('ModifyHostGroup', '2019-12-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ModifyHostsActiveAddressTypeRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ModifyHostsActiveAddressTypeResponse
     */
    public function modifyHostsActiveAddressTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyHostsActiveAddressTypeResponse::fromMap($this->doRPCRequest('ModifyHostsActiveAddressType', '2019-12-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ModifyHostsPortRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ModifyHostsPortResponse
     */
    public function modifyHostsPortWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyHostsPortResponse::fromMap($this->doRPCRequest('ModifyHostsPort', '2019-12-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyHostsPortRequest $request
     *
     * @return ModifyHostsPortResponse
     */
    public function modifyHostsPort($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyHostsPortWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyInstanceAttributeResponse::fromMap($this->doRPCRequest('ModifyInstanceAttribute', '2019-12-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ModifyUserRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ModifyUserResponse
     */
    public function modifyUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyUserResponse::fromMap($this->doRPCRequest('ModifyUser', '2019-12-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyUserGroupResponse::fromMap($this->doRPCRequest('ModifyUserGroup', '2019-12-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return MoveResourceGroupResponse::fromMap($this->doRPCRequest('MoveResourceGroup', '2019-12-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param RemoveHostsFromGroupRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return RemoveHostsFromGroupResponse
     */
    public function removeHostsFromGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemoveHostsFromGroupResponse::fromMap($this->doRPCRequest('RemoveHostsFromGroup', '2019-12-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param RemoveUsersFromGroupRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return RemoveUsersFromGroupResponse
     */
    public function removeUsersFromGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemoveUsersFromGroupResponse::fromMap($this->doRPCRequest('RemoveUsersFromGroup', '2019-12-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RemoveUsersFromGroupRequest $request
     *
     * @return RemoveUsersFromGroupResponse
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ResetHostAccountCredentialResponse::fromMap($this->doRPCRequest('ResetHostAccountCredential', '2019-12-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StartInstanceResponse::fromMap($this->doRPCRequest('StartInstance', '2019-12-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return TagResourcesResponse::fromMap($this->doRPCRequest('TagResources', '2019-12-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param UnlockUsersRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UnlockUsersResponse
     */
    public function unlockUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UnlockUsersResponse::fromMap($this->doRPCRequest('UnlockUsers', '2019-12-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UnlockUsersRequest $request
     *
     * @return UnlockUsersResponse
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UntagResourcesResponse::fromMap($this->doRPCRequest('UntagResources', '2019-12-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
